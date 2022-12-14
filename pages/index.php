<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@1,600;1,700&family=Zen+Kaku+Gothic+New:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style/index.css">
    <title>Designe</title>
</head>
<body>
    <?php
    include('nav.php');
    ?>

     <section class="container">
        <div class="description">
            <div class="text_inner inline">
                <h2><span class="color">Project</span>  <br>Nurtown</h1>
                <div class="arrows">
                    <div class="arrow inline animation"><img src="images/index_img/arrowleft.png" alt=""> </div>
                    <div class="arrow inline animation"><img src="images/index_img/arrowrigh.png" alt=""></div>
                   
                </div>
               <div class="num">01 / 02
               </div>
            </div>
            <div class="img inline">
                <img src="images/index_img/Nurtown.png" alt="">
                <button class="button position animation"><span >Morre</span></button>
            </div>

        </div>
 
        <section class="info ">
            <div class="photo inline">
                <img class="info_photo1" src="images/index_img/photo1.png" alt="">
                <img class="info_photo2" src="images/index_img/photo2.png" alt="">
                <img class="info_photo3" src="images/index_img/photo3.png" alt="">
            </div>
            <article class="articol inline">
               <span  class="dimension color"> About compani</span><br>
               <div>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti eveniet praesentium quas dolores odit iste sapiente inventore molestias ut nobis hic pariatur debitis facilis nihil consequatur, natus ratione, officia eius temporibus ea incidunt repellendus. Doloremque deserunt, odio consequatur ut temporibus dolor vero facilis quam asperiores recusandae consectetur atque tenetur ad nobis, quo ea ducimus eum suscipit soluta doloribus. A itaque et expedita totam omnis tempore quaerat cumque? Repudiandae, deleniti dolorum culpa cupiditate temporibus magni quas ut quasi harum molestiae quaerat earum possimus sunt? Quis eum odio eos aspernatur nostrum? Reiciendis iste repudiandae reprehenderit consectetur tempora nesciunt optio consequatur facere quam!
                </div>
                <button class="button animation"><span >Read </span></button> 
            </article>
            

        </section>

        <section class="tasks">
            <div class="color dimension">Main goals</div>
            <div class="articles">
                <div class="art inline">
                    <div class="item inline">
                        <img class="" src="images/index_img/1.png" alt="">
                    </div>
                    <div class="art_text inline">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Odit, assumenda ipsam impedit quibusdam illo voluptas.</div>
                </div>
                <div class="art inline">
                    <div class="item inline">
                        <img class="" src="images/index_img/2.png" alt="">
                    </div>
                    <div class="art_text inline">Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam illum hic asperiores quae quaerat libero veritatis iusto necessitatibus vel aspernatur?</div>
                </div>
            </div>
        </section>

        <section class="exemples">
            <div class="color dimension">Our ptoject</div>
            
            <div class="projects">
                <div class="big_projects">
                 
                        <div class="project effect inline "><img class="first_img transform" src="images/index_img/project 1.jpg" alt="">
                            <div class="title"><span>Ieissure Centre <br>
                            <button class="button animation opaciti"><span>See more</span></button></span></div>
                        </div>
                
                    <div class="project effect inline"><img class="transform" src="images/index_img/project 2.png" alt="">
                        <div class="title"><span>Observatory <br> 
                            <button class="button animation opaciti"><span>See more</span></button>
                        </span></div>
                    </div>
                </div>   

                <div class="projects">
                    <div class="project effect inline"><img class="transform" src="images/index_img/project 3.png" alt="">
                        <div class="title"><span>Railway Station <br>
                            <button class="button animation opaciti"><span>See more</span></button>
                        </span></div>

                    </div>

                    <div class="project effect inline"><img class="transform" src="images/index_img/project 4.png" alt="">
                        <div class="title"><span>Residential Complex <br>
                            <button class="button animation opaciti"><span>See more</span></button>
                        </span></div>
                    </div>

                    <div class="project effect inline"><img class="transform" src="images/index_img/project 5.png" alt="">
                        <div class="title"><span>Shopping center <br>
                            <button class="button animation opaciti"><span>See more</span></button>
                        </span></div>
                    </div>

                    <button class="button animation"><span>All project</span></button>
                </div>
            </div>
        </section>

        <section>
            <div class="color dimension">Contact Us</div>
            <div class="contact ">
                <div class="inputs inline ">
                    <input class="input" type="text" placeholder="Name">
                    <input class="input" type="number" placeholder="Nmber">
                    <input class="input" type="mail" placeholder="E-mail">
                    <input class="input" type="text" placeholder="Item you are interested in">
                    <input class="input more" type="text">
                </div>

                <div class="inline contact_img"><img src="images/index_img/img6.png" alt=""></div>

                
            </div><button class="button animation"><span>Contact</span></button>
        </section>
    </section>
    <?php
    include('footer.php');
    ?>
</body>
</html>