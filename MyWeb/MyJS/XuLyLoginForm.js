var modal = document.getElementById('LoginForm');
        var modal2 = document.getElementById("RegisterForm");
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
            if(event.target == modal2){
                modal2.style.display = "none";
            }
        }