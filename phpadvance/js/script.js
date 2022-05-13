$(document).ready(function(){
    
    //Adding users
    $(document).on("submit", "#addform", function(event){
        event.preventDefault();

        //AJAX
        $.ajax({
            url:"/phpadvance/ajax.php",
            type: "POST",
            dataType: "json",
            data: new FormData(this),
            processData: false,
            contentType: false,
            beforeSend: function(){
                console.log("Data is loading");
            },
            success: function(response){
                console.log(response);
                if(response){
                    $("#usermodal").modal("hide");
                    $("#addform")[0].reset();
                }

            },
            error: function(request, error){
                console.log(arguments);
                console.log("Error" + error); 
            },
        });
    });

});