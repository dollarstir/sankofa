$(function () {


    

    function resp(response) {

        $(".mcont").html(response);
        $(".mess").fadeOut(15000);
        
    }

    



    $(".subc").submit(function (e) {
        e.preventDefault();
        
        var options = {
            url: 'actions.php?dollarstir=sendmess',
            type: 'post',
            data: new FormData(this),
            cache: false,
            processData: false,
            contentType: false,
         //    beforeSend: prog,
            success: resp,
         }
 
        $.ajax(options);
 
    });

    


   
    


    
})