function myAjax() {
      $.ajax({
           type: "POST",
           url: 'savesettings.php',
           data:{action:'call_this'},
           success:function(html) {
             alert(html);
           }

      });
 }