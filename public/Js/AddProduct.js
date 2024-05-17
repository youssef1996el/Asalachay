$(document).ready(function () {



    function getCategory()
    {
        $.ajax({
            type: "get",
            url: FetchCategory,
            dataType: "json",
            success: function (response)
            {
                if(response.status == 200)
                {
                   /*  $('.ListCategory').empty(); */
                   $('.ListCategory').children().remove();
                   $('.ListCategory').append(`<option value="0">Sélectionner categorie</option>`);
                    $.each(response.data, function (index, value)
                    {
                        $('.ListCategory').append(`<option value="${value.id}" >${value.name}</option>`);
                    });

                }
            }
        });
    }
    getCategory();


    function getMarque()
    {
        $.ajax({
            type: "get",
            url: FetchMarque,
            dataType: "json",
            success: function (response)
            {
                if(response.status == 200)
                {
                    $('.ListMarque').children().remove();
                    $('.ListMarque').append(`<option value="0">Sélectionner marque</option>`);
                    $.each(response.data, function (index, value)
                    {
                        $('.ListMarque').append(`<option value="${value.id}" >${value.name}</option>`);
                    });
                }
            }
        });
    }
    getMarque();
    $('#fileInput').change(function(event) {
        const files = event.target.files; // Get the selected files
        const previewContainer = $('#previewContainer');
        previewContainer.empty(); // Clear any existing preview images

        // Loop through the selected files
        for (const file of files) {
            const reader = new FileReader(); // Create a new FileReader instance

            reader.onload = function(e) {
                const imgContainer = $('<div class="preview-img-container">'); // Create a container for the image
                const img = $('<img class="preview-img">'); // Create a new img element using jQuery
                const removeIcon = $('<i class="fas fa-times-circle remove-icon"></i>'); // Create a remove icon

                img.attr('src', e.target.result); // Set the src attribute with the data URL

                // Append the img element and remove icon to the container
                imgContainer.append(img).append(removeIcon);

                // Append the container to the preview container
                previewContainer.append(imgContainer);
            };

            reader.readAsDataURL(file); // Read the file as a data URL
        }
    });

    // Event delegation to handle remove icon click
    $('#previewContainer').on('click', '.remove-icon', function() {
        $(this).closest('.preview-img-container').remove(); // Remove the container when remove icon is clicked
    });


    // save marque

    $('.BtnSaveMarque').on('click',function(e)
    {
        e.preventDefault();
        var name = $('.NameMarque').val();
        if(name == "")
        {
            $.notify('la marque de nom est obligatoire',
            {
                position: "bottom right",
                className: "error",
                autoHideDelay: 5000
            });
            return false;
        }
        else
        {
            $.ajax({
                type: "post",
                url: StoreMarque,
                headers: { 'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content') },
                data:
                {
                    name : name,
                },
                dataType: "json",
                success: function (response)
                {
                    if(response.status == 200)
                    {
                        $('#ModalAddMarque').modal("hide");
                        $.notify('La marque a été ajoutée avec succès.', {
                            position: "bottom right",
                            className: "success",
                            autoHideDelay: 5000
                        });
                        $('.NameMarque').val("");
                        getMarque();
                    }
                    else if(response.status == 400)
                    {
                        $.notify('La marque existe déjà.',
                        {
                            position: "bottom right",
                            className: "error",
                            autoHideDelay: 5000
                        });
                        $('.NameMarque').val("");
                    }
                }
            });
        }
    });

    // store category

    $('.BtnSaveCategory').on("click",function(e)
    {
        e.preventDefault();
        var name = $('.NameCategory').val();
        if(name == "")
        {
            $.notify('la catégorie de nom est obligatoire',
            {
                position: "bottom right",
                className: "error",
                autoHideDelay: 5000
            });
            return false;
        }
        else
        {
            $.ajax({
                type: "post",
                url: StoreCategory,
                headers: { 'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content') },
                data:
                {
                    name : name,
                },
                dataType: "json",
                success: function (response)
                {
                    if(response.status == 200)
                    {
                        getCategory();
                        $.notify('La catégorie a été ajoutée avec succès.', {
                            position: "bottom right",
                            className: "success",
                            autoHideDelay: 5000
                        });
                        $('#ModalAddCategory').modal("hide");
                        $('.NameCategory').val("");

                    }
                    else if(response.status == 400)
                    {
                        $.notify('La catégorie existe déjà.',
                        {
                            position: "bottom right",
                            className: "error",
                            autoHideDelay: 5000
                        });
                        $('.NameCategory').val("");
                    }
                }
            });
        }
    });
});
