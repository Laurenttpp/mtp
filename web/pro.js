function myAjax() {
      $.ajax({
           type: "POST",
           url: 'savesettings.php',
           data:{action:'call_this'},

      });
 }