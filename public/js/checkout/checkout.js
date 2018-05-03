/* <![CDATA[ */
    jQuery(document).ready(function($) {
        'use strict';
        $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('value')
                }
        });
        // touch spin
       $(".quantity").TouchSpin({
            min: 1,
            max: 100
       });
       // on change touch spin
       $('body').on("change",".quantity",(function(e){
            e.preventDefault();
            $.ajax({
                type: "POST",
                url: "/update_quantity",
                data: {'rowId': $(this).parent().parent().find('input[type="hidden"]').val(),
                        'qty': $(this).closest('input').val()
                        },
                success: function(data){
                    $('.badge-yaki').text(data.totalQty);
                    $('.subTotal').text(data.subTotal + 'VND');
                },
                error:function(data){
                    console.log(data);
                }
              });
        }));

        /**
         * remove item from cart
         */
        $('body').on("click",".btn-trash",(function(e){
            e.preventDefault();
            $.ajax({
                type: "POST",
                url: "/remove_item",
                data: {'rowId': $(this).find('input[type="hidden"]').val()
                        },
                success: function(data){
                    e.currentTarget.closest('li').remove();
                    $('.subTotal').text(data.subTotal);
                    $('.badge-yaki').text(data.totalQty);
                    if(data.subTotal == 0) {
                        $('.btn-order').remove();
                        $('.target-scroll').remove();
                        $('.opening-time').append('<p>Không có sản phẩm nào trong giỏ hàng</p>');
                    }
                },
                error:function(data){
                    console.log(data);
                }
              });
        }));
        $("#target-scroll").scroll(function() {
            $("#log").append( "<div>Handler for .scroll() called.</div>" );
        });
    });