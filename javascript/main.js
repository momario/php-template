console.log('main.js loaded and working');

//ajax test
$(document).ready(function(){

    //NOT WORKING
    $("#example_ajax").submit(function(ev){
        ev.preventDefault();
        $.ajax({
            type: 'get',
            url: $('#example_ajax').attr('formaction'),
            dataType: 'json',
            beforeSend: function(){
                console.log('ajax send');
            },
            success: function(data){
                console.log('ajax success');
                console.log(data);
                $('#ajax_name').html(data.name);
            },
            error: function(xhr,error,request){
                console.log('ajax error');
                console.log(xhr.responseText);
                console.log(error);
                console.log(request.responseText);
            },
            fail: function(){
                console.log('ajax fail');
            },
            complete: function(){
                console.log('ajax complete');
            }
        });
    });

  });