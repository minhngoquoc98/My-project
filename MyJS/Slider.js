$(document).ready(function(){
    var stt = 0;
    $("img").each(function(){
        if($(this).is(':visible')){
             stt = $(this).attr("stt");
        }
    })
    $("#next").click(function(){
        next = ++stt;
        $("img").hide();
        alert(next);
        $("img").eq(next).show();
    });
})