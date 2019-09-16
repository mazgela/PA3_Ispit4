$(document).ready(function() {
    $('.main').fadeIn(2000);


    function RunClock() {
        var dt = new Date();
        document.getElementById("datetime").innerHTML = (("0" + dt.getDate()).slice(-2)) +
            "." + (("0" + (dt.getMonth() + 1)).slice(-2)) + "." + (dt.getFullYear()) +
            " " + (("0" + dt.getHours()).slice(-2)) + ":" + (("0" + dt.getMinutes()).slice(-2)) +
            ":" + (("0" + dt.getSeconds()).slice(-2));
    }

    setInterval(RunClock, 1000);








});