<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/index.css">
    <title>Document</title>
</head>
<body>
   
<?php
    include('nav.php');
    ?>
    
    <section class="container">
        <div class="projects">
            <div class="color dimension">Project <br><span> Galerry </span></div>
                <div class="project1">
                    <div class="img"><img src="images/project_img/hi scool.png" alt=""></div>
                    <div class="description">
                        <div class="description_title">
                            Hight scool
                        </div>
                        <div class="desctiption_text">
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quo possimus voluptatem eaque quam illum ducimus, vitae tempora molestiae odio dolor!
                        </div>
                        <button class="button"><span>More info</span></button>
                    </div>
                </div>
                <div class="arrows">
                    <div class="arrow inline animation"><img src="images/arrowleft.png" alt=""> </div>
                    <div class="arrow inline animation"><img src="images/arrowrigh.png" alt=""></div>
                </div>
               <div class="num">01 / 02
               </div>
            </div>
            <div class="img inline">
                <img src="images/Nurtown.png" alt="">
                <button class="button position animation"><span >Morre</span></button>
            </div>
        </div>
    </section>

    <?php
    include('footer.php');
    ?>
</body>
</html>