/* <![CDATA[ */
jQuery(document).ready(function($) {
        'use strict';
        /**
        *click vào icon thêm giỏ hàng
        **/
          $("#phone").focusout(function(){
            var phone = $("#phone").val();
            if("" == phone) {
              return;
            }
            $.ajax({
              type: "POST",
              url: "/get_customer_info",
              data: {'phone':$("#phone").val()},
              success: function(data){
                $("#name").val(data.customer['name']);
                $('#gender').val(data.customer['gender']);
                $("#email").val(data.customer['email']);
                $("#address").val(data.customer['address']);
                $("#birth").val(data.customer['birth_date']);
              },
              error:function(data){
              }
            });
          });
      });
