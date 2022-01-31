$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
    }
});
let isGamePage = document.querySelector('.the_game')
if (isGamePage) { 
    $(window).on('blur',function(e) {    
        if($(this).data('mouseIn') != 'yes')return;
        $('iframe').filter(function(){
            return $(this).data('mouseIn') == 'yes';
        }).trigger('iframeclick');    
    });

    $(window).mouseenter(function(){
        $(this).data('mouseIn', 'yes');
    }).mouseleave(function(){
        $(this).data('mouseIn', 'no');
    });

    $('iframe').mouseenter(function(){
        $(this).data('mouseIn', 'yes');
        $(window).data('mouseIn', 'yes');
    }).mouseleave(function(){
        $(this).data('mouseIn', null);
    });

    $('iframe').on('iframeclick', function(){
        document.querySelector('body').classList.remove('show_ad')
        console.log('Clicked inside iframe');
        let the_url = window.location.href;
        let indexOfs= the_url.lastIndexOf("games/");
        let fnUrl   = the_url.slice(indexOfs).replace("games/","")
        let if_Have_coin = 0;
        let youGot = sessionStorage.getItem('you_got')
        if (youGot) {
            if_Have_coin = Number(youGot);
        } 
        $.ajax({
            url: "/send/earned/coines",
            type: "POST",
            cache:false,
            data: {game_name:fnUrl,you_got:if_Have_coin},
            success: function(data) {
                console.log(data)
                console.log('working')
                if (data !== "sorry") {  
                    let gotPonts = document.querySelector('.i_got_coin')
                    gotPonts.classList.add('show')
                    gotPonts.querySelector('.coin_show').textContent = "You got +"+data;
                    gotPonts.querySelector('.coin_show').style.color = "#25bd7e";
                }else{
                    let gotPonts = document.querySelector('.i_got_coin')
                    gotPonts.classList.add('show')
                    gotPonts.querySelector('.coin_show').textContent = "something wents wrong!";
                    gotPonts.querySelector('.coin_show').style.color = "red";
                }
            },
            // error: function(err) {
            //     console.log(err)
            // }
        }); 
        $('#result').text('Clicked inside iframe'); 
    });
    // $(window).on('click', function(){
    //     console.log('Clicked inside window');
    //     $('#result').text('Clicked inside window'); 
    // }).blur(function(){
    //     console.log('window blur');
    // });

    // $('<input type="text" style="position:absolute;opacity:0;height:0px;width:0px;"/>').appendTo(document.body).blur(function(){
    //     $(window).trigger('blur');
    // }).focus();


    window.addEventListener('click', (e) => {
        let target = e.target; 
        if (target.classList.contains('close_point_alert')){
            target.parentElement.classList.remove('show')
            location.reload();
        }
    })

}