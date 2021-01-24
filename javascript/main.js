console.log('main.js loaded and working');

//AJAX TEST
$(document).ready(function(){

    var counter = 1;

    //AJAX CONSOLE LOG ON CLICK
    $("#ajax").click(function(e){
        e.preventDefault();
        $.ajax({
            type: 'get',
            url: $(this).attr('href'),
            dataType: 'json',
            beforeSend: function(){
                console.log('ajax send');
            },
            success: function(data){
                console.log('ajax success');
                console.log(data);
                $("#getajax").html("Value from ajax php function: " + data.test + " " + counter);
                counter += 1;
            },
            error: function(xhr,error,request){
                console.log('ajax error');
            },
            fail: function(){
                console.log('ajax fail');
            },
            complete: function(){
                console.log('ajax complete');
            }
        });
    });//END

  });//END