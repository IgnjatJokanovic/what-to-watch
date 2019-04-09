$(document).ready( function() {
    $('.rate-movie').on('click', function(){
        var v = $(this).val();
        $.ajax({
            method: 'POST',
            url: URL + '/rate_movie.php',
            data: {id_movie: ID, grade: v},
            complete: function(data){
                if(data.status == 500)
                {
                    console.log(data.responseText);
                    var show = data.responseText;
                    $('#feedback_movie').text(show);
                    $('#feedback_movie').css('color', 'red');
                }
                else
                {
                    console.log(data.responseText);
                    var show = data.responseText;
                    $('#feedback_movie').text(show);
                    $('#feedback_movie').css('color', 'green');

                }
               
                 
             },
             error: function(data){
                var show = data.responseText;
                $('#feedback_movie').text(show);
                $('#feedback_movie').css('color', 'red');
             }
        });

    });

    $('#subscribe').on('click', function(e){
        e.preventDefault();
        var mail = $('#subscribe_txt').val();
        $.ajax({
            method: 'POST',
            url: URL + '/subscribe.php',
            data: {mail: mail},
            complete: function(data){
                if(data.status == 500)
                {
                    var show = data.responseText;
                    $('#subscription_feedback').html(show);
                    
                }
                else
                {
                    var show = data.responseText;
                    $('#subscription_feedback').html(show);

                }
               
                 
             },
             error: function(data){
                var show = data.responseText;
                $('#feedback_actor').text(show);
                $('#feedback_actor').css('color', 'red');
             }
        });
    });


    $("#srcbox").keyup(function() {
        var url = URL + '/search.php';
        var data = $(this).val();
        $.ajax({
            type: 'GET',
            url: url,
            data: { input: data},
            success: function(data)
            {
                $('#src_result').html(data);
            },
            error: function(data)
            {
                console.log(data);
            }

        });
    });

    $('.rate-actor').on('click', function(){
        
        var v = $(this).val();

        $.ajax({
            method: 'POST',
            url: URL + '/rate_actor.php',
            data: {id_actor: ID, grade: v},
            complete: function(data){
                if(data.status == 500)
                {
                    console.log(data.responseText);
                    var show = data.responseText;
                    $('#feedback_actor').text(show);
                    $('#feedback_actor').css('color', 'red');
                }
                else
                {
                    console.log(data.responseText);
                    var show = data.responseText;
                    $('#feedback_actor').text(show);
                    $('#feedback_actor').css('color', 'green');

                }
               
                 
             },
             error: function(data){
                var show = data.responseText;
                $('#feedback_actor').text(show);
                $('#feedback_actor').css('color', 'red');
             }
        });

    });


});