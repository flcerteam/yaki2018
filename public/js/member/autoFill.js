/* <![CDATA[ */
jQuery(document).ready(function($) {

    'use strict';

    /**
    * load thông tin member
    **/
    $("#search").click(function(){

      var phone_number = $("#phone_number_search").val();

      if("" == phone_number) {

        return;
      }

      $.ajax({
        type: "POST",
        url: "/get_search_member",
        data: {'phone_number': phone_number},
        success: function(data) {
          
          if (data.member != "") {
            $("#phone_number").val(data.member['phone_number']);
            $("#name").val(data.member['name']);
            $("#birth_date").val(data.member['birth_date']);
            $("input[name=gender][value=" + data.member['gender'] + "]").prop('checked', true);
            $("input[name=gender]:not(:checked)").attr('disabled', true);
            $("#email").val(data.member['email']);
            $("#address").val(data.member['address']);
            $("#member_type_name").val(data.member['member_type_name']);
            $("#member_point").val(data.member['member_point']);
            $("#tableMember").show();
            $("#msgInfo").hide();
          } else {
            $("#tableMember").hide();
            $("#msgInfo").show();
          }
        },
        error:function(data) {
        }
      });
    });

    $("#phone_number_search").focusout(function(){

      var phone_number = $("#phone_number_search").val();

      if("" == phone_number) {

        $("#tableMember").hide();
        $("#msgInfo").hide();
      }
    });
});
