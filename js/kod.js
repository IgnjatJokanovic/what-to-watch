$(document).ready( function() {
    $('.rate-movie').on('click', function(){
        
        var v = $(this).val();

        $.ajax({
            method: 'POST',
            url: 'http://localhost/imdb/php/rate_movie.php',
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

    $('.rate-actor').on('click', function(){
        
        var v = $(this).val();

        $.ajax({
            method: 'POST',
            url: 'http://localhost/imdb/php/rate_actor.php',
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