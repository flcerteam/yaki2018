/* <![CDATA[ */
jQuery(document).ready(function($) {

    'use strict';

    /**
    * load thông tin member
    **/
    $("#phone_number").focusout(function(){

      var phone_number = $("#phone_number").val();

      if("" == phone_number) {

        $("#name").val("");
        $("#birth_date").val("");
        $("input[name=gender][value=0]").prop('checked', true);
        $("#email").val("");
        $("#address").val("");
        return;
      }

      $.ajax({
        type: "POST",
        url: "/get_member_info",
        data: {'phone_number': phone_number},
        success: function(data) {
          
          $("#name").val(data.member['name']);
          $("#birth_date").val(data.member['birth_date']);
          $("input[name=gender][value=" + data.member['gender'] + "]").prop('checked', true);
          $("#email").val(data.member['email']);
        },
        error:function(data) {
        }
      });
    });

    /**
    * load time của chi nhánh
    **/
    $("#branch_id").on('change', function() {
      
      $.ajax({
        type: "POST",
        url: "/get_branch_time_info",
        data: {'branch_id': $("#branch_id").val()},
        success: function(data){

          $("#open_hour").html(data.branch['open_hour']);
          $('#close_hour').html(data.branch['close_hour']);
          $("#reservation_hour").attr("min", data.branch['open_hour_val']);
          $('#reservation_hour').attr("max", data.branch['close_hour_val']);
        },
        error:function(data){
        }
      });
    });
});
