console.log('main.js loaded and working');

//AJAX TEST
$(document).ready(function(){

    //AJAX CONSOLE LOG ON CLICK
    $("#ajax_button").click(function(e){
        e.preventDefault();
        $.ajax({
            type: 'get',
            url: $('#ajax_button').attr('href'),
            dataType: 'json',
            beforeSend: function(){
                console.log('ajax send');
            },
            success: function(data){
                console.log('ajax success');
                console.log(data);
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