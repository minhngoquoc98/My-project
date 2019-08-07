<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/details-style.css">
    <script src="./js/jquery-3.4.1.min.js" type="text/javascript"></script>
    <script src="./js/Slider.js" type="text/javascript"></script>
    <script src="./js/XuLyLoginForm.js" type="text/javascript"></script>
    <script src="./js/fontawesome.js" type="text/javascript"></script>
    <title>I am Curt</title>
</head>
<body>
    <div id="header" style="z-index: 2;">
        <?php 
            include('header.php')
        ?>
    </div>
<!--------------------------------------------------image title---------------------------------------------------->
    <div id="title-img" style="z-index: -1;">
        <div class="container-title-img">
            <div class="contain-title-img" >
                <a href="" >
                    <img src="./images/3.jpg" alt="" style="" >
                </a>
            </div>
        </div>
    </div>
<!--------------------------------------------------navigation bar------------------------------------------------>
    <div id="nav">
        <?php 
                include ('nav.php');
        ?>
    </div>
<!--------------------------------------------------contact-------------------------------------------------------->
    <?php 
        include('contact.php');
    ?>
<!--------------------------------------------------Main-content--------------------------------------------------->
        <?php 
            if(isset($_GET["page"])==true){
                $page = $_GET["page"];
            }else{
                $page = 0;
            }
            if($page!=1 && $page!=2 && $page != 3 && $page != 4){
                include('content.php');
            }
            if($page==1){
                include('detail-welcome.php');
            }
            else if($page==2){
                include('detail-lecturers.php');
            }
            else if($page==3){
                include('detail-educate-page1.php');
            }
            else if($page==4){
                include('detail-educate-page2.php');
            }
        ?>

    <br><br><br><br>
<!--------------------------------------------------Footer-------------------------------------------------------->
    <div id="footer">
        <?php include('footer.php')?>
    </div>
    
    <script>
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
    </script>
</body>
</html>