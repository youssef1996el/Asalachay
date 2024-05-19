$(document).ready(function () {




    function listCart()
    {
        $.ajax({
            type: "get",
            url:  listCartByMacAddress,
            dataType: "json",
            success: function (response) {
                if(response.status == 200)
                {
                    if(response.checkContentForData == true)
                    {
                        $('.hasListCart').css('display', 'block');
                        $('.HasNotListCart').css('display', 'none');
                        $('.ContentListCart').empty();
                        $('.sub-total-price').text(response.sumCartByMacAddress+ " DH");

                        $.each(response.ListCart, function (index, value)
                        {
                            var imageUrl = PathImage+"/"+value.image;


                            $('.ContentListCart').append(`<li class="d-flex align-items-center pb-3 ">
                                                            <div class="thumb-wrapper">
                                                                <a href="#">
                                                                    <img src="${imageUrl}" alt="${value.name}" class="img-fluid rounded-circle" _mstalt="120744">
                                                                </a>
                                                            </div>
                                                            <div class="items-content ms-3">
                                                                <a href="#">
                                                                    <h6 class="mb-0" _msttexthash="311350" _msthash="412">${value.name}</h6>
                                                                </a>


                                                                <div class="products_meta mt-1 d-flex align-items-center">
                                                                    <div>
                                                                        <font _mstmutation="1" _msttexthash="833482" _msthash="413">
                                                                            <span class="price text-primary fw-semibold" _mstmutation="1" _istranslated="1">${value.price}</span>
                                                                            <span class="count fs-semibold" _mstmutation="1" _istranslated="1">x ${value.qte}</span>
                                                                        </font>
                                                                    </div>
                                                                    <button class="remove_cart_btn ms-2   btn_remove_productFromCart" value="${value.id}">
                                                                        <i class="fa-solid fa-trash-can"></i>
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </li>`);

                        });

                        $('.cart-counter').text(response.countCarteByClient);

                    }
                    else
                    {
                        $('.HasNotListCart').css('display', 'block');
                        $('.hasListCart').css('display', 'none');
                        $('.sub-total-price').text(response.sumCartByMacAddress+ " DH");
                        $('.cart-counter').text(response.countCarteByClient);
                    }
                }

            }
        });
    }
    listCart();

    $(document).on('click','.BtnAddProductToCart',function(e)
    {
        e.preventDefault();
        var id       = $(this).attr('value');
        var qte      = $('.QuantityDetail').val();
        $.ajax({
            type: "get",
            url: AddCart,
            data:
            {
                idproduct : id,
                qte       : qte,
            },
            dataType: "json",
            success: function (response)
            {
                if(response.status == 400)
                {
                    $.notify('Ce produit n\'est plus en stock',
                    {
                        position: "bottom right",
                        className: "error",
                        autoHideDelay: 5000
                    });
                    return false;
                }
                else if(response.status == 200)
                {

                    listCart();
                    $('#quickview_modal').modal("hide");
                    $.notify('Le produit a été ajoutée avec succès.', {
                        position: "bottom right",
                        className: "success",
                        autoHideDelay: 5000
                    });
                }
            }
        });
    });

    $(document).on('click','.btn_remove_productFromCart',function(e)
    {
        e.preventDefault();
        var id   = $(this).attr('value');
        $.ajax({
            type: "get",
            url: DeleteCarte,
            data:
            {
                idproduct: id,
            },
            dataType: "json",
            success: function (response)
            {
                if(response.status == 200)
                {
                    listCart();
                    $.notify('Le produit a été supprimé avec succès', {
                        position: "bottom right",
                        className: "success",
                        autoHideDelay: 5000
                    });
                }
            }
        });
    });

    $('.IconDisplayModelDetail').on('click',function(e)
    {
        e.preventDefault();
        var id = $(this).attr('value');
        $.ajax({
            type: "get",
            url: DetailProduct,
            data:
            {
                idproduct  : id,
            },
            dataType: "json",
            success: function (response)
            {
                if(response.status == 200)
                {

                    $('#quickview_modal').modal("show");

                    $('.product-title').text(response.DetailProduct.name);
                    $('.PriceProductDetail').text(response.DetailProduct.price +" DH");
                    var description = response.DetailProduct.description;

                    if(description != null)
                    {
                        var modifiedDescription = description.replace(/"/g, '');
                    }


                    $('.DescriptionProductDetail').append(modifiedDescription);
                    $('.CategoryDetail').text(response.DetailProduct.category);
                    $('.MarqueDetail').text(response.DetailProduct.marque);
                    $('.QteDetail').text(response.DetailProduct.qte);
                    $('.BtnAddProductToCart').attr('value', response.DetailProduct.id);

                    // Clear existing images
                    $('.img-showcase').empty();
                    $('.img-select').empty();
                     // Append main images
                    if(response.DetailProduct.length > 0)
                    {
                        $.each(response.imageProduct, function(index, image) {
                            var imageUrl = PathImage+"/images/"+image.image;

                            $('.img-showcase').append('<img src="' + imageUrl + '" alt="shoe image" class="imageDetail">');
                        });

                        // Append thumbnails
                        $.each(response.imageProduct, function(index, image) {
                            var imageUrl = PathImage+"/images/"+image.image;

                            var dataId = index + 1;
                            $('.img-select').append('<div class="img-item"><a href="#" data-id="' + dataId + '"><img src="' + imageUrl + '" alt="shoe image" class="imageDetail" style="min-height:200px"></a></div>');
                        });
                    }
                    else
                    {
                        var imageUrl = PathImage+"/"+response.DetailProduct.image;

                        $('.img-showcase').append('<img src="' + imageUrl + '" alt="shoe image" class="imageDetail">');
                    }



                    // Reinitialize slider functionality
                    function slideImage() {
                        const displayWidth = document.querySelector('.img-showcase img:first-child').clientWidth;

                        document.querySelector('.img-showcase').style.transform = `translateX(${- (imgId - 1) * displayWidth}px)`;
                    }

                    function reapplyEventListeners() {
                        const newImgs = document.querySelectorAll('.img-select a');
                        const newImgBtns = [...newImgs];

                        newImgBtns.forEach((newImgItem) => {
                            newImgItem.addEventListener('click', (event) => {
                                event.preventDefault();
                                imgId = newImgItem.dataset.id;
                                slideImage();
                            });
                        });
                    }

                    // Call this function after dynamically adding thumbnails
                    reapplyEventListeners();
                }
            }
        });
    });




});
