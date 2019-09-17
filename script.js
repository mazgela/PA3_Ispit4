$(document).ready(function() {
    $('.main').fadeIn(2000);
    
    $('#PJSNav').click(function(){
        $('#PPHP').hide();
        $('#OB').hide();
        $('#PJS').fadeIn(500);
    });
    
    $('#PPHPNav').click(function(){
        $('#PJS').hide();
        $('#OB').hide();
        $('#PPHP').fadeIn(500);
    });
    
    $('#OBNav').click(function(){
        $('#PJS').hide();
        $('#PPHP').hide();
        $('#OB').fadeIn(500);
    });
    
    
    $('#obavjest').click(function(){
        $(this).html("Ispit iz PA3");
    })
    
    
    var val1 = 0,val2 = 0;
    
    function RunClock() {
        var dt = new Date();
        $("#datetime").html((("0" + dt.getDate()).slice(-2)) +
            "." + (("0" + (dt.getMonth() + 1)).slice(-2)) + "." + (dt.getFullYear()) +
            " " + (("0" + dt.getHours()).slice(-2)) + ":" + (("0" + dt.getMinutes()).slice(-2)) +
            ":" + (("0" + dt.getSeconds()).slice(-2)));
    }
    setInterval(RunClock, 1000);
    
    function Povrsina(a,b){
        return a*b;
    }
    
    
    
    
    $('#value1').html(val1);
    $('#value2').html(val2);

    $('#slider1').slider({
        min: 0,
        max: 200,
        slide: function(event,ui){
            val1 = ui.value;
            $('#value1').html(val1);
            $('#result').val(Povrsina(val1,val2));
        }
    });
    
    $('#slider2').slider({
        min: 0,
        max: 200,
        slide: function(event,ui){
            val2 = ui.value;
            $('#value2').html(val2);
            $('#result').val(Povrsina(val2,val1));
        }
    });





    window.onbeforeunload = function () {
        return "Gotov ispit iz PA3";
   };
});