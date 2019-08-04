/*$(document).ready(function(){
    var stt = 0;
    $(".checked img").each(function(){
        if($(this).is(':visible')){
             stt = $(this).attr("stt");
        }
    })
    $("#next").click(function(){
        next = ++stt;
        $(".checked img").hide();
        $(".checked img").eq(next).show();
    });
})*/
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n){
    showSlides(slideIndex += n);
}
function currentSlide(n){
    showSlides(slideIndex =n);
}

function showSlides(n){
    var slides = document.getElementsByClassName("checked");
    var dots = document.getElementsByClassName("dot");
    if(n>slides.length){slideIndex=1}
    if(n<1){slideIndex = slides.length}
    for(var i=0;i<slides.length;i++){
        slides[i].style.display = "none";
    }
    for(var i=0;i<dots.length;i++){
        dots[i].className = dots[i].className.replace("active", "");
    }
    slides[slideIndex-1].style.display = "block";
    dots[slideIndex-1].className += " active";
}