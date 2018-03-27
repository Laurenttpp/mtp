function myAjax() {
      $.ajax({
           type: "POST",
           url: 'savesettings.php',
           data:{action:'call_this'},
           if (data.success == true) {
           	     setTimeout(function(){// wait for 5 secs(2)
           location.reload(); // then reload the page.(3)
      }, 5000); 
           }
      });
 }