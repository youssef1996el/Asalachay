$(document).ready(function () {

    $('.btnRemoveImagesProduct').on('click',function(e)
    {
        e.preventDefault();

        var Idimage = $(this).attr('data-value');
        $.ajax({
            type: "get",
            url: Delete_images,
            data:
            {
                id    : Idimage,
            },
            dataType: "json",
            success: function (response)
            {
                if(response.status == 200)
                {
                    $('.mediaImageProducts').load(window.location.href + " .mediaImageProducts");
                }
            }
        });
    });


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

    $('#previewContainer').on('click', '.remove-icon', function() {
        $(this).closest('.preview-img-container').remove(); // Remove the container when remove icon is clicked
    });







});
