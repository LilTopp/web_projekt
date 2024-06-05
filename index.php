<?php

    session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="button" href="button.scss">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script src="https://kit.fontawesome.com/bf08b35ef6.js" crossorigin="anonymous"></script>
    <title>Intercable</title>
</head>

<body>
    <header>
        <a
                href="index.php"><img class="logo" src="imgs/logointercable.png" alt="logo">
        </a>
        
        <nav class="navbar">
            
            <ul class="navlinks">
                <li class="Onas"><a href="onas.php">O nás</a></li>
                <li class="Vyroba"><a href="vyroba.php">Výroba</a></li>
                <li class="Zamestnanie"><a href="zamestnanie.php">Zamestnanie</a></li>
                <?php
                    if (isset($_SESSION["useruid"])) {
                        echo "<li class='Login'><a href='logout.inc.php'>Logout</a></li>";
                    }
                    else{
                        echo "<li class='Login'><a href='login.php'>Login</a></li>";
                    }
                ?>
                
                
            </ul>
            <ul class="languagelinks" style="height: 40px; width: 40px;">
                <li class="language-slovakia" style="height: 40px; width: 40px;">
                    <a href="#" class="language-link">
                        <img src="imgs/slovakiaflag.png" alt="slovakiaflag" width="40" height="40" class="slovakia-img">
                    </a>
                    <div class="language-submenu">
                        <li class="eng-li" style="padding-top: 5px; margin-right: -5px; padding-right: Opx;" style="height: 20px; width: 20px;">
                            <a href="#" class="england-flag">
                                <img src="imgs/englandflag.png" alt="englandflag" width="20" height="20" class="england-img" style="margin-right: -5px;">
                            </a>
                        </li>
                        <li class="ger-li" style="padding-top: 5px;" style="height: 20px; width: 20px;" style="margin-left: 20px;">
                            <a href="https://www.intercable.com/de" class="germany-flag">
                                <img src="imgs/germanyflag.png" alt="germanyflag" width="20" height="20" class="germany-img">
                            </a>
                        </li>
                    </div>
                </li>
            </ul>
        </nav>    
    </header>


    <div class="home">
        <button onclick="topFunction()" id="myBtn" title="Go to top" style="display: block; width: 43px;">▲</button>
        <section class="home_intro">
            <div class="home_titles";>
                <div class="title">
                    <h1 class="hide">
                        <span class="text">Globálny hráč v</span>
                    </h1>
                    <h1 class="hide">
                        <span class="text">automobilovom a</span>
                    </h1>
                    <h1 class="hide">
                        <span class="text">elektrotechnickom sektore.</span>
                    </h1>
                </div>
                <div class="baseline">
                    <p class="hide2">
                        <span class="baselinetext">Riešenia na mieru, či už káblového zväzku v motorovom vozidle</span>
                    </p>
                    <p class="hide2">
                        <span class="baselinetext">alebo inovatívne riešenia pre emobilitu.</span>
                    </p>
                </div>
            </div>
            <div class="spacer layer1"></div>
    
        </section>
        
        <section class="automotive">
            <h1 class="automotive_title">Automotív</h1>
            <p class="automotive_baseline">Ako vývojový a výrobný partner je Intercable vysoko rešpektovaným partnerom automobilového priemyslu.</p>
            <div class="automotive_icons">
                <i class="fas fa-tools"></i>
                <i class="fas fa-wind"></i>
                <i class="fas fa-subway"></i>
                <i class="fas fa-map-marker-alt"></i>
            </div>
            <div class="automotive_icons_title">
                <p class="fa-tools_title">Výroba špeciálnych nástrojov</p>
                <p class="fa-wind_title">Zariadenia pre energetický sektor</p>
                <p class="fa-subway_title">Spojovacie systémy a nástroje pre železničný priemysel</p>
                <p class="fa-map-marker-alt_title">Intercable Group a umiestnenie jej závodov</p>           
            </div>
            
                <!--
                <a href="#" class="automotive_button_learnmore">Zistite viac</a>
                -->
                
            <div class="button">
                <div class="container">
                    <div class="center">
                      <button class="btn">
                        <a href="vyroba.php">
                            <svg width="180px" height="60px" viewBox="0 0 180 60" class="border">
                            <polyline points="179,1 179,59 1,59 1,1 179,1" class="bg-line" />
                            <polyline points="179,1 179,59 1,59 1,1 179,1" class="hl-line" />
                            </svg>
                            <span>Zistite viac</span>
                        </a>
                      </button>
                    </div>
                  </div>
                                
            </div>
                
       
            


        </section>

        <section class="careers">
            <div class="spacer2 layer2"></div>
            <div class="carrer_text">
                <h1 class="carrer_title">Zamestnanie</h1>
                <h1 class="carrer_baseline">Hľadáme práve teba!</h1>
                <p class="carrer_baseline2">Zaujímavé perspektívy, rešpektujúca rodinná atmosféra, veľa priestoru na rozvoj sú len niektoré z našich výhod, ktoré ponúkame.</p>
                <div class="careers_icons">
                    <i class="fas fa-user-graduate"></i>
                    <i class="fas fa-money-bill-wave"></i>
                    <i class="fas fa-gift"></i>
                </div>
                <div class="careers_icons_title">
                    <p class="fa-user-graduate_title">Ďalšie vzdelávanie</p>
                    <p class="fa-money-bill-wave_title">Firemné benefity</p>
                    <p class="fa-gift_title">Špeciálne príležitosti</p>
                </div>
            </div>


            <div class="button2">
                <div class="container2">
                    <div class="center2">
                      <button class="btn2">
                        <a href="zamestnanie.php">
                            <svg width="180px" height="60px" viewBox="0 0 180 60" class="border">
                            <polyline points="179,1 179,59 1,59 1,1 179,1" class="bg-line" />
                            <polyline points="179,1 179,59 1,59 1,1 179,1" class="hl-line" />
                            </svg>
                            <span>Zistite viac</span>
                        </a>
                      </button>
                    </div>
                  </div>
                                
            </div>

            
            <div class="spacer3 layer3"></div>

        </section>

        <section class="social_bar">
            <h1 class="social_bar_title">Ste fanúšik <img class="logo2" src="imgs/logointercable_white.png" alt="logo2"> ?</h1>
            <div class="social_bar_icons">
                <a href="https://www.facebook.com/intercable.group" target="_blank"><i class="fab fa-facebook-square"></i></a>
                <a href="https://www.linkedin.com/company/intercable-gmbh" target="_blank"><i class="fab fa-linkedin"></i></a>
                <a href="https://www.xing.com/pages/intercablegmbh" target="_blank"><i class="fab fa-xing-square"></i></a>
                <a href="https://www.youtube.com/user/intercablegroup" target="_blank"><i class="fab fa-youtube"></i></a>
            </div>
        </section>
        
        <section class="intercable_quality">
            <div class="spacer4 layer4"></div>
            <div class="intercable_quality_container">
                <div class="intercable_quality_text">
                    <h1 class="intercable_quality_title">Intercable kvalita</h1>
                    <h1 class="intercable_quality_baseline">Intercable si stojí za svojou kvalitou</h1>
                    <p class="intercable_quality_baseline2">Či už navrhujeme alebo vyrábame bezpečné náradie alebo plastové a kovové technické diely, vždy berieme do úvahy špecifikácie zákazníka, platné právne predpisy a normy a zároveň dbáme na trvalú udržateľnosť nášho konania a prevenciu negatívnych vplyvov na životné prostredie.</p>
                    
                </div>
                <div class="intercable_quality_pdfs">
                    <a href="https://www.intercable.com/fileadmin/user_upload/Erklaerungen_Automotive_Group/067378_QM15_2021-06-24_icg_Englisch.pdf" target="_blank">
                        <i class="far fa-file-pdf"></i><h1>Intercable ISO 9001</h1>
                    </a>
                    <a href="https://www.intercable.com/fileadmin/user_upload/Erklaerungen_Automotive_Group/067378_IATF16_2021-06-24_icg_Englisch.pdf" target="_blank">
                        <i class="far fa-file-pdf"></i><h1>Intercable IATF 16949</h1>
                    </a>
                    <a href="https://www.intercable.com/fileadmin/user_upload/067378_UM15_2021-09-15_englisch.pdf" target="_blank">
                        <i class="far fa-file-pdf"></i><h1>Intercable ISO 14001</h1>
                    </a>
                    <a href="https://www.intercable.com/fileadmin/user_upload/067378_OHS18_2020-12-20_englisch.pdf" target="_blank">
                        <i class="far fa-file-pdf"></i><h1>Intercable ISO 45001</h1>
                    </a>
                </div>
                <img src="imgs/siegel_iso9001.png" alt="iso_img" class="iso_img">
            </div>
            <div class="spacer5 layer5"></div>
        </section>



        <footer class="footer">
            <a href="#top" class="footer_logo">
                <img class="logo3" src="imgs/logointercable_white.png" alt="logo2">
            </a>
            <div class="footer_info">
                <a href="https://www.intercable.com/en/privacy"><p>Privacy</p></a>
                <a href="https://www.intercable.com/en/cookies"><p>Cookies</p></a>
                <a href="https://www.intercable.com/en/contact-us"><p>Contact</p></a>
                <a href="https://www.intercable.sk/imprint"><p>Imprint</p></a>
            </div>
        </footer>
    </div>
    
    

    <script
    src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js"
    integrity="sha512-IQLehpLoVS4fNzl7IfH8Iowfm5+RiMGtHykgZJl9AWMgqx0AmJ6cRWcB+GaGVtIsnC4voMfm8f2vwtY+6oPjpQ=="
    crossorigin="anonymous"
  ></script>
  <script src="./app.js"></script>
  <script src="./button.js"></script>


</body>





<script>
    $(".slovakia-img").click(function () {
        $(".england-img").toggleClass("show-england");
        $(".germany-img").toggleClass("show-germany");
    });
</script>

</html>
