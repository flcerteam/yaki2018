/* <![CDATA[ */
    jQuery(document).ready(function($) {
        'use strict';
        $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('value')
                }
        });
       
       $('body').on("change","#sl",(function(e){
            e.preventDefault();
            var divBtnCart = e.currentTarget.parentElement.parentElement.children[1];
            var qty = e.currentTarget.value;
            divBtnCart.children[0].children[1].value=qty;
       }));
       
        /**
        *click vào icon thêm giỏ hàng
        **/
        $("body").on("click", ".cart-yaki", (function(e){
            e.preventDefault();
            $.ajax({
              type: "POST",
              url: "/add-to-cart",
              data: {'id':e.currentTarget.children[0].value,
                    'qty':e.currentTarget.children[1].value },
              success: function(data){
                $('.badge-yaki').text(data.totalQty);
              },
              error:function(data){
                  console.log(data);
              }
            });
          }));
      });
