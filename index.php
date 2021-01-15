<?php 
    include "php/apply.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/ikonav.png">
    <title>Innovation Academy</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
</head>

<body>
    <div class="loader-animation">
        <div class="loader">
            <div class="circle"></div>
            <div class="circle"></div>
        </div>
        <h3>Welcome to Innovation Academy <i class="far fa-heart"></i></h3>
    </div>
    <div class="container">
        <!-- mini-container eshte krijuar qe te gjitha elementet qe jane ne ndikim te kesaj klase te marrin width the marginen e njejt
             dmth te rreshtohen te gjitha ne nje vije -->
        <div class="mini-container">
            <!-- NavBar -->
            <nav>
                <img src="images/ikonav.png" alt="Innovation Academy" title="Innovation Academy" width="50">
                <ul class="nav">
                    <li><a href="#">BALLINA</a></li>
                    <li><a href="#">PROGRAMI YNE</a></li>
                    <li><a href="#">RRETH NESH</a></li>
                    <li><a href="contact.php">KONTAKTI</a></li>
                </ul>
                <i class="fas fa-bars" onclick="hamburger_menu()"></i>
            </nav>
        </div>
        <div class="mobile-menu" id="mobile-menu">
            <ul class="nav">
                <li><a href="#">KRYEFAQJA</li>
                <li><a href="#">PROGRAMI YNE</a></li>
                <li><a href="#">RRETH NESH</a></li>
                <li><a href="#">KONTAKTI</a></li>
            </ul>
        </div>
         <!-- Mbarimi i NavBar -->

         <!-- Header -->
        <header>
            <!-- Krijimi i permbajtjes se headerit  -->
            <div class="mini-container align-buttons-text">
                <div class="text-within-header">

                    <h1>INNOVɅTION<br> ɅCɅDEMY</h1>
                    <hr>
                    <p>Learning</p>
                    <p>Through</p>
                    <p>Technology</p>
                </div>

                <div class="buttons-within-header">
                    <h1>APLIKO TANI</h1>
                    <div class='flex'>
                        <a href="#">English</a>
                        <a href="#">Programming</a>
                        <a href="#">App Builder</a>
                    </div>
                    
                </div>
            </div>
        </header>
        <!-- Mbarimi i Headerit -->

        <!-- Krijimi i seksionit technology-lesson -->
        <div class="mini-container">
            <section class="technology-lesson">
                <div class="text-left">
                    <h1>SI MUND TA SHFRYTEZOJME
                        TEKNOLOGJINE PER TE MESUAR?</h1>
                    <br>
                    <h4>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                        Ut enim ad minim veniam, quis nostrud exercitation ullamco nisi velit ad soluta cupiditate.</h4>
                    <br>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere, natus. Rem nihil repellat
                        expedita aperiam nam asperiores accusamus illum ducimus possimus, et est nemo voluptates! Omnis,
                        adipisci velit ad soluta cupiditate modi fuga deserunt architecto voluptatum tempore doloribus
                        cumque ipsa.Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere, natus. Rem nihil
                        repellat
                        expedita aperiam nam asperiores accusamus illum ducimus possimus, et est nemo voluptates! Omnis,
                        adipisci velit ad soluta cupiditate modi fuga deserunt architecto voluptatum tempore doloribus
                        cumque ipsa.</p>
                </div>

                <div class="image-right">
                    <img src="images/roboti.png" alt="Robot">
                </div>
            </section>
            <!-- Mbarimi i seksionit technology-lesson -->
            <img class="line-image" src="images/vija.png" alt="line">

            <!-- Seksioni introduction per programim, gjuhe angleze dhe gjuhe gjermane -->
            <section class="introduction">
                <div class="programming">
                    <span>
                        <img src="images/fotoja1.png" alt="" width="120">
                    </span>

                    <br>
                    <p class="title">PROGRAMIMI</p>
                    <br>
                    <hr>
                    <br>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis iusto saepe nisi ut ad enim,
                        dolorum exercitationem architecto beatae sed voluptate magni iure tempora voluptatum distinctio
                        consequuntur, qui praesentium animi! Voluptates reprehenderit facere.</p>
                </div>
                <div class="english">
                    <span>
                        <img src="images/fotoja2.png" alt="" width="120">
                    </span>

                    <br>
                    <p class="title">GJUHE ANGLEZE</p>
                    <br>
                    <hr>
                    <br>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis iusto saepe nisi ut ad enim,
                        dolorum exercitationem architecto beatae sed voluptate magni iure tempora voluptatum distinctio
                        consequuntur, qui praesentium animi! Voluptates reprehenderit facere.</p>
                </div>
                <div class="german">
                    <span>
                        <img src="images/fotoja3.png" alt="" width="120">
                    </span>

                    <br>
                    <p class="title">GJUHE GJERMANE</p>
                    <br>
                    <hr>
                    <br>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis iusto saepe nisi ut ad enim,
                        dolorum exercitationem architecto beatae sed voluptate magni iure tempora voluptatum distinctio
                        consequuntur, qui praesentium animi! Voluptates reprehenderit facere.</p>
                </div>
            </section>
        </div>
        <!-- Mbarimi i seksionit introduction -->

        <!-- Apliko Tani -->
        <section class="apply-now">
            <div class="mini-container">
                <br><br><br>

                
                <div class="container">
                    
                    <div class="form">
                        <div class="icons">
                            <img src="images/APLIKOONLINE.png" alt="" width="130">
                            <i class="fas fa-laptop"></i>
                        </div>
                    
                    <form method="post" id="validimi">
                    <input type="text" name="name" placeholder="Emri" id="emriApliko"><br>
                    <p id="emriMessage"></p><br>
                    <input type="text" name="surname" placeholder="Mbiemri" id="mbiemriApliko"><br>
                    <p id="mbiemriMessage"></p><br>
                    <input type="text" name="age" placeholder="Mosha" id="moshaApliko"><br>
                    <p id="moshaMessage"></p><br>
                    <select  name="options" id="lendaApliko">
                        <option value="Ne cilen lend po aplikoni" disabled selected>Ne cilen lend po aplikoni</option>
                        <option value="Programim">Programim</option>
                        <option value="Gjuhe Angleze">Gjuhe Angleze</option>
                        <option value="Gjuhe Gjermane">Gjuhe Gjermane</option>
                    </select><br><br>
                    <input type="text" name="mail" placeholder="Email" id="emailiApliko"><br>
                    <p id="emailiMessage"></p><br>
                    <input type="text" name="contact" placeholder="Numri Kontaktues" id="nrKontaktuesApliko"><br>
                    <p id="nrKontaktuesMessage"></p><br>
                    <textarea cols="30" rows="10" name="message" placeholder="Keni dicka per te shtuar?" id="komentiApliko"></textarea><br>
                    <p id="komentiMessage"></p><br>
                    <button type="submit">Dergo <i class="fas fa-arrow-right"></i></button>
                </form>
                    </div>
                
                <img src="images/contact.svg" alt="">
                </div>
                
            </div>
            <br><br><br><br>
            <!-- Mbarimi i krijimit te Aplikimit -->
        </section>
        <!-- Harta -->
        <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2926.3371411154503!2d20.962791115707066!3d42.82349171370063!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x13535be87f7badaf%3A0x8ecab7a8e583b4e8!2sInnovation%20Academy!5e0!3m2!1sen!2s!4v1605482779691!5m2!1sen!2s"
        width="100%" height="350" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
        tabindex="0"></iframe>
 
            <!-- Footeri -->
            <footer>
                <div class="mini-container line-up-parts-footer">
                    <div> <img src="images/logob.png" alt="logo ne footer" width="120" height="120"></div>   
               
                <div>
                    <p>+383 44 000 000</p>
                    <p>+383 44 000 000</p>
                    <p>+383 44 000 000</p>
                </div>
                               <div>
                    <p>+383 44 000 000</p>
                    <p>+383 44 000 000</p>
                    <p>+383 44 000 000</p>
                </div>
                               <div>
                    <p>+383 44 000 000</p>
                    <p>+383 44 000 000</p>
                    <p>+383 44 000 000</p>
                </div>
                               <div>
                    <p>+383 44 000 000</p>
                    <p>+383 44 000 000</p>
                    <p>+383 44 000 000</p>
                </div>
                               <div>
                    <p>+383 44 000 000</p>
                    <p>+383 44 000 000</p>
                    <p>+383 44 000 000</p>
                </div>
            </div>
            </footer>
    </div>
    <!-- Mbarimi i Footerit -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="script/validation.js"></script>
</body>

</html>