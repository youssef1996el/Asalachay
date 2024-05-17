$(document).ready(function ()
{
    // get Category

    function getCategory() {
        // Check if DataTable is already initialized
        if ($.fn.DataTable.isDataTable('#tableCategory')) {
            // If initialized, destroy the existing DataTable instance
            $('#tableCategory').DataTable().destroy();
        }
        $.ajax({
            type: "get",
            url: FetchCategory,
            dataType: "json",
            success: function (response) {
                if (response.status == 200) {
                    // Initialize DataTable with language options
                    var table = $('#tableCategory').DataTable({
                        data: response.data,
                        columns: [
                            { data: 'id', className: 'text-center' },
                            {
                                data: 'name',
                                render: function (data, type, row, meta) {
                                    return `<a href="javascript:void(0);" class="d-flex align-items-center">
                                        <div class="avatar avatar-sm">
                                            <img class="rounded-circle"
                                                src="https://grostore.themetags.com/public/uploads/media/cfhS63jnRBfMaGaUINykX9oTR4Vypy1APuirIImN.png"
                                                alt="" />
                                        </div>
                                        <h6 class="fs-sm mb-0 ms-2 nameCategoryDisplay">${data}</h6>
                                    </a>`;
                                }
                            },
                            {
                                data: null,
                                render: function (data, type, row, meta) {
                                    return `<i class="fa-solid fa-trash text-danger me-3 fs-4 cursor-pointer iconTrashCategory" title="Supprimer categorie ${data.name}" value="${data.id}"></i>
                                            <i class="fa-solid fa-pen-to-square text-info fs-4 cursor-pointer iconEditCategory" title="Modification categorie ${data.name}" value="${data.id}"></i>`;
                                }
                            }
                        ],
                        language: {
                            "sInfo": "Affichage de l'élément _START_ à _END_ sur _TOTAL_ éléments",
                            "sInfoEmpty": "Affichage de l'élément 0 à 0 sur 0 élément",
                            "sInfoFiltered": "(filtré à partir de _MAX_ éléments au total)",
                            "sInfoPostFix": "",
                            "sInfoThousands": ",",
                            "sLengthMenu": "Afficher _MENU_ éléments",
                            "sLoadingRecords": "Chargement...",
                            "sProcessing": "Traitement...",
                            "sSearch": "Rechercher :",
                            "sZeroRecords": "Aucun élément correspondant trouvé",
                            "oPaginate": {
                                "sFirst": "Premier",
                                "sLast": "Dernier",
                                "sNext": "Suivant",
                                "sPrevious": "Précédent"
                            },
                            "oAria": {
                                "sSortAscending": ": activer pour trier la colonne par ordre croissant",
                                "sSortDescending": ": activer pour trier la colonne par ordre décroissant"
                            },
                            "select": {
                                "rows": {
                                    "_": "%d lignes sélectionnées",
                                    "0": "Aucune ligne sélectionnée",
                                    "1": "1 ligne sélectionnée"
                                }
                            }
                        }
                    });
                }
            }
        });
    }

    getCategory();


    $('#SaveCategory').on('click',function(e)
    {
        e.preventDefault();
        var name = $("#nameCategory").val();
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
                url: Store,
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
                        $('#ModelAddCategory').modal("hide");

                    }
                    else if(response.status == 400)
                    {
                        $.notify('La catégorie existe déjà.',
                        {
                            position: "bottom right",
                            className: "error",
                            autoHideDelay: 5000
                        });
                        $("#nameCategory").val("");
                    }
                }
            });
        }
    });


    // display modal edit
    var id ='';
    $(document).on('click','.iconEditCategory',function(e)
    {
        e.preventDefault();

        var nameOriginale = $(this).closest('tr').find('.nameCategoryDisplay').text();
        id   = $(this).attr('value');
        $('#ModelEditCategory').modal("show");
        $("#nameCategoryEdit").val(nameOriginale);
    });




    // update

    $('#SaveCategoryEdit').on('click',function(e)
    {
        e.preventDefault();
        var nameEdit = $("#nameCategoryEdit").val();
        if(nameEdit == "")
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
                url: Update,
                headers: { 'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content') },
                data:
                {
                    name : nameEdit,
                    id   : id,
                },
                dataType: "json",
                success: function (response)
                {
                    if(response.status == 200)
                    {
                        getCategory();
                        $.notify('La catégorie a été modifier avec succès.', {
                            position: "bottom right",
                            className: "success",
                            autoHideDelay: 5000
                        });
                        $('#ModelEditCategory').modal("hide");
                    }
                    else if(response.status == 400)
                    {
                        $.notify('La catégorie existe déjà.',
                        {
                            position: "bottom right",
                            className: "error",
                            autoHideDelay: 5000
                        });
                        $("#nameCategoryEdit").val("");
                    }
                }
            });
        }
    });


    // delete
    $(document).on('click','.iconTrashCategory',function(e)
    {

        e.preventDefault();
        var idDelete = $(this).attr('value');
        Swal.fire({
            title: "Voulez-vous supprimer ceci catégorie?",
            showDenyButton: true,
            showCancelButton: true,
            confirmButtonText: "Sauvegarder",
            denyButtonText: `Ne sauvegardez pas`
            }).then((result) =>
            {

                if (result.isConfirmed)
                {
                    $.ajax({
                        type: "post",
                        url: Delete,
                        headers: { 'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content') },
                        data:
                        {
                            id : idDelete
                        },
                        dataType: "json",
                        success: function (response)
                        {
                            if(response.status == 200)
                            {
                                getCategory();
                                Swal.fire("Succès!", "", "success");
                            }
                        }
                    });

                }
                else if (result.isDenied)
                {
                    Swal.fire("Il n'est pas supprimé", "", "info");
                }
        });
    });





});
