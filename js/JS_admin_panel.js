window.addEventListener('load', function () {

    console.log('page loaded!');

    $(document).on('click','#showData',function(e){
        $.ajax({    
          type: "GET",
          url: "admin_panel.inc.php",             
          dataType: "html",                  
          success: function(data){                    
              $("#table-container").html(data); 
             
          }
      });
  });

});