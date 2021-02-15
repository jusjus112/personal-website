jQuery(document).ready(function ($) {

    $('.btn-portfolio').click(function (){
        var data = $(this).attr('data-filter');

        $('.btn-portfolio').each(function( index, element ) {
            if ($(element).hasClass('active')){
                $(this).removeClass('active');
            }
        });
        $(this).addClass('active');

        $('.portfolio-filter').each(function( index, element ) {
            var id = $(element).attr('filter-id');
            console.log("DATa="+data+" - ID="+id);
            if (data == 'all'){
                $(element).fadeIn();
                return;
            }
            if (id == null || id != data){
                $(element).fadeOut();
            }else{
                $(element).fadeIn();
            }
        });
    });

    $(".project").each(function( ) {
        if( $(this).attr("data-server") ) {
            let project = $(this);

            let server = project.attr("data-server").split(":");

            let query = "https://mcapi.us/server/status?ip=" + server[0];

            if(server[1]) query + "&port=" + server[1];

            $.get(query, function(response) {
                project.find(".players .important").text( response.players.now.toLocaleString( ) );
                if (!(server.indexOf("play.hypixel.net") >= 0)){
                    project.find("img").attr("src", response.favicon);
                }
            });
        }
    });

});
