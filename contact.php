<?php 
    include "inc/sqlFunctions.php";
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontakti</title>
    <link rel="icon" href="images/ikonav.png">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
</head>

<body>
    <div class="container">
    <div class="loader-animation">
        <div class="loader">
            <div class="circle"></div>
            <div class="circle"></div>
        </div>
        <h3>Welcome to Innovation Academy <i class="far fa-heart"></i></h3>
    </div>
                <!-- mini-container eshte krijuar qe te gjitha elementet qe jane ne ndikim te kesaj klase te marrin width the marginen e njejt
             dmth te rreshtohen te gjitha ne nje vije -->
        <div class="mini-container">
            <nav> <!-- Fillimi i NavBarit -->
                <img src="images/ikonav.png" alt="Innovation Academy" title="Innovation Academy" width="50">
                <ul class="nav">
                    <li><a href="index.php">PROGRAMI YNE</a></li>
                    <li><a href="#">RRETH NESH</a></li>
                    <li><a href="#">APLIKO</a></li>
                    <li><a href="#">KONTAKTI</a></li>
                </ul>
            </nav>
            <!-- Mbarimi i NavBar -->
        </div>
        <div class="mobile-menu" id="mobile-menu">
            <ul class="nav">
                <li><a href="#">KRYEFAQJA</li>
                <li><a href="#">PROGRAMI YNE</a></li>
                <li><a href="#">RRETH NESH</a></li>
                <li><a href="#">KONTAKTI</a></li>
            </ul>
        </div>

            <section class="first-part">
                <br><br>
                <div class="text-within-header text-header-contact mini-container">

                    <h1>INNOVɅTION</h1>
                    <h1>ɅCɅDEMY</h1>
                    <hr>
                    <p>Kontakti</p>
                </div>
                <br>
            </section>
            <!-- Section ku tregon se ketu behet kontakti. -->
            <h1 class="dont-hesitate">Nëse <span>dëshironi</span> të keni rezultate reale, mos <span>hezitoni.</span>
            </h1>
            <br>
            <div class="align-contact-form">

                <section class="image-contact">
                    <img src="images/Fletorja.jpg" alt="" width="100%" height="100%">
                </section>
                <?php
                if(isset($_POST['submit'])) {
                    $name = $_POST['name'];
                    $email = $_POST['mail'];
                    addMessage($name,$email);
                }
                ?>
                <section class="contact-form">
                    <article class="left-part-contact-form">
                        <div>
                            <br>
                            <h1>Na <span>Kontaktoni</span></h1>
                            <br>
                            <form method="post" id="validimiForma">
                                <input type="text" placeholder="Shenoni Emrin" id="emri" name="name"><br>
                                <p id="emriMesazhi"></p><br>
                                <input type="email" placeholder="Shenoni Emailin" id="email" name="mail"><br>
                                <p id="emailMesazhi"></p><br>
                                <textarea name="" cols="20" rows="10" placeholder="Komenti" id="komenti" name="msg"></textarea>
                                <p id="komentiMesazhi"></p><br>
                                <input type="submit" value="Dergo" name="submit">
                            </form>
                        </div>

                    </article>

                    <article class="right-part-contact-form">
                        <br><br><br>
                        <div>
                            <i class="fas fa-phone-alt"></i>
                            <p>+383 049 715 525</p>
                        </div>
                        <br><br><br>
                        <div>
                            <i class="far fa-envelope"></i>
                            <p>info@innovationacademy.com</p>
                        </div>
                        <br><br><br>
                        <div>
                            <i class="fas fa-map-marker"></i>
                            <p>Rruga: Marin Barleti 56</p>
                        </div>
                        <br><br><br>
                    </article>
                    <aside>

                    </aside>
                </section>
            </div>
            <div id="alertBox">
                <h1>Alert!</h1>
                <p>Mesazhi juaj per kontakt eshte derguar me sukses, zakonisht mesazhi kthehet brenda 24h, ju faleminderit, INNOVATION ACADEMY.</p>
                <br>
                <hr>
                <br>
                <button>Close X</button>
            </div>
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2926.3371411154503!2d20.962791115707066!3d42.82349171370063!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x13535be87f7badaf%3A0x8ecab7a8e583b4e8!2sInnovation%20Academy!5e0!3m2!1sen!2s!4v1605482779691!5m2!1sen!2s"
                width="100%" height="350" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
                tabindex="0"></iframe>
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
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="script/validation.js"></script>

</body>

</html>