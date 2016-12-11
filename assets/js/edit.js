$(".close").click(function(){
    $("#myAlert").slideUp();
});

setInterval(function() {
    $("#myAlert").slideUp();
}, 5000);
