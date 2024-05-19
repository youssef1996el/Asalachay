$(document).ready(function () {
    var dataTable = $('#TableProduct').DataTable({
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
        },
        pageLength: 200
    });

    var idProduct ='';
    $('.confirm-delete').on('click',function(e)
    {
        e.preventDefault();
        idProduct= $(this).attr('value');
        $('#ModalDeleteProduct').modal("show");
    });

    $('#delete-Product').on('click',function(e)
    {
        e.preventDefault();
        $.ajax({
            type: "get",
            url: DeleteProduct,
            data:
            {
                id :idProduct
            },
            dataType: "json",
            success: function (response)
            {
                if(response.status == 200)
                {
                    $('#ModalDeleteProduct').modal("hide");
                    $.notify('La marque a été ajoutée avec succès.', {
                        position: "bottom right",
                        className: "success",
                        autoHideDelay: 5000
                    });
                    var row = $('#TableProduct').find('[value="' + idProduct + '"]').closest('tr');
                    dataTable.row(row).remove().draw(false);

                }
            }
        });
    });


    // change statusFeature
    $('.statusFeature').on('change',function(e)
    {
        e.preventDefault();
        var idproduit = $(this).attr('value');
        var status = false;
        if($(this).is(':checked')) {
            status = true;
        } else {
            status = false;

        }

        $.ajax({
            type: "get",
            url: StatusFeatured,
            data:
            {
                id :idproduit,
                status : status,
            },
            dataType: "json",
            success: function (response)
            {
                if(response.status == 200)
                {
                    $.notify('Le changement a été effectué avec succès.', {
                        position: "bottom right",
                        className: "success",
                        autoHideDelay: 5000
                    });
                }
                else if(response.status == 404)
                {

                    //$(this).removeAttr('checked');
                    $.notify(response.message, {
                        position: "bottom right",
                        className: "error",
                        autoHideDelay: 5000
                    });

                }
            }
        });
    });


    // chenge statusTrading
    $('.statusTrading').on('change',function(e)
    {
        e.preventDefault();
        var idproduit = $(this).attr('value');
        var status = false;
        if($(this).is(':checked')) {
            status = true;
        } else {
            status = false;

        }

        $.ajax({
            type: "get",
            url: StatusTrading,
            data:
            {
                id :idproduit,
                status : status,
            },
            dataType: "json",
            success: function (response)
            {
                if(response.status == 200)
                {
                    $.notify('Le changement a été effectué avec succès.', {
                        position: "bottom right",
                        className: "success",
                        autoHideDelay: 5000
                    });
                }
                else if(response.status == 404)
                {
                    $.notify(response.message, {
                        position: "bottom right",
                        className: "error",
                        autoHideDelay: 5000
                    });
                }
            }
        });
    });

    // chenge statusbestdeals
    $('.statusbestdeals').on('change',function(e)
    {
        e.preventDefault();
        var idproduit = $(this).attr('value');
        var status = false;
        if($(this).is(':checked')) {
            status = true;
        } else {
            status = false;

        }

        $.ajax({
            type: "get",
            url: Statusbestdeals,
            data:
            {
                id :idproduit,
                status : status,
            },
            dataType: "json",
            success: function (response)
            {
                if(response.status == 200)
                {
                    $.notify('Le changement a été effectué avec succès.', {
                        position: "bottom right",
                        className: "success",
                        autoHideDelay: 5000
                    });
                }
                else if(response.status == 404)
                {
                    $.notify(response.message, {
                        position: "bottom right",
                        className: "error",
                        autoHideDelay: 5000
                    });
                }
            }
        });
    });
    // change statusNewProduct
    $('.statusNewProduct').on('change',function(e)
    {
        e.preventDefault();
        var idproduit = $(this).attr('value');
        var status = false;
        if($(this).is(':checked')) {
            status = true;
        } else {
            status = false;

        }

        $.ajax({
            type: "get",
            url: StatusNewProduct,
            data:
            {
                id :idproduit,
                status : status,
            },
            dataType: "json",
            success: function (response)
            {
                if(response.status == 200)
                {
                    $.notify('Le changement a été effectué avec succès.', {
                        position: "bottom right",
                        className: "success",
                        autoHideDelay: 5000
                    });
                }
                else if(response.status == 404)
                {
                    $.notify(response.message, {
                        position: "bottom right",
                        className: "error",
                        autoHideDelay: 5000
                    });
                }
            }
        });
    });

    // change statusbestselling
    $('.statusbestselling').on('change',function(e)
    {
        e.preventDefault();
        var idproduit = $(this).attr('value');
        var status = false;
        if($(this).is(':checked')) {
            status = true;
        } else {
            status = false;

        }

        $.ajax({
            type: "get",
            url: StatusBestSelling,
            data:
            {
                id :idproduit,
                status : status,
            },
            dataType: "json",
            success: function (response)
            {
                if(response.status == 200)
                {
                    $.notify('Le changement a été effectué avec succès.', {
                        position: "bottom right",
                        className: "success",
                        autoHideDelay: 5000
                    });
                }
                else if(response.status == 404)
                {
                    $.notify(response.message, {
                        position: "bottom right",
                        className: "error",
                        autoHideDelay: 5000
                    });
                }
            }
        });
    });
});
