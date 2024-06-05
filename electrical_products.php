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
    
    <button onclick="topFunction()" id="myBtn" title="Go to top" style="display: block; width: 43px;">▲</button>
    <header>
    
        <a
                href="index.php"><img class="logo" src="imgs/logointercable.png" alt="logo">
        </a>
        
        <nav class="navbar">
            
            <ul class="navlinks">
                <li class="Onas"><a href="#">O nás</a></li>
                <li class="Vyroba"><a href="vyroba.php">Výroba</a></li>
                <li class="Zamestnanie"><a href="zamestnanie.php">Zamestnanie</a></li>
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

    <section class="electrical_products_hand_tools">
        <div class="electrical_products_hand_tools_section">
            <div class="electrical_products_hand_tools_text">
                <h1 class="electrical_products_hand_tools_title">Ručné náradie</h1>
                <hr>
            </div>
            <div class="electrical_products_hand_tools_boxes">
                <div class="col1">
                    <div class="box1">
                        <img src="imgs/scrissors.png" alt="noznice">
                        <hr>
                        <h1 class="noznice_title">Nožnice</h1>
                    </div>
                    <div class="box2">
                        <img src="imgs/srobovak.png" alt="srobovak">
                        <hr>
                        <h1 class="srobovak_title">Skrutkovače</h1>
                    </div>
                    <div class="box3">
                        <img src="imgs/stikace.png" alt="stikace">
                        <hr>
                        <h1 class="stikace_title">Izolované kliešte</h1>
                    </div>
                </div>
                <div class="col2">
                    <div class="box4">
                        <img src="imgs/rezaky.png" alt="rezaky">
                        <hr>
                        <h1 class="rezaky">Orezávacie nože</h1>
                    </div>
                    <div class="box5">
                        <img src="imgs/modularne_naradie.png" alt="modularne_naradie">
                        <hr>
                        <h1 class="modularne_naradie">Modulárne náradie</h1>
                    </div>
                    <div class="box6">
                        <img src="imgs/mechanicke_konektory.png" alt="mechanicke_konektory">
                        <hr>
                        <h1 class="mechanicke_konektory">Mechanické konektory</h1>
                    </div>
                </div>
                

            </div>
        </div>
    <div class="spacer6 layer6"></div>
    </section>

    <section class="electrical_products_stripping_tools">
        <div class="electrical_products_stripping_tools_section">
            <div class="electrical_products_stripping_tools_text">
                <h1 class="electrical_products_stripping_tools_title">Náradie na odizolovanie</h1>
                <hr>
            </div>
            <div class="electrical_products_hand_tools_boxes">
                <div class="col1">
                    <div class="box1">
                        <img src="imgs/stripping1.png" alt="noznice">
                        <hr>
                        <h1 class="stripping1_title">Nástroje pre vonkajšiu <br> izoláciu</h1>
                    </div>
                    <div class="box2">
                        <img src="imgs/stripping2.png" alt="srobovak">
                        <hr>
                        <h1 class="stripping2_title">Nástroje pre polovodiče</h1>
                    </div>
                    <div class="box3">
                        <img src="imgs/stripping3.png" alt="stikace">
                        <hr>
                        <h1 class="stripping3_title">Rezačka vnútorného <br> plášťa</h1>
                    </div>
                </div>
                
                
                

            </div>
        </div>

    </section>

    <section class="electrical_products_cutting_tools">
        <div class="spacer7 layer7"></div>
        <div class="electrical_products_cutting_tools_section">
            <div class="electrical_products_cutting_tools_text">
                <h1 class="electrical_products_cutting_tools_title">Nástroje na rezanie</h1>
                <hr>
            </div>
            <div class="electrical_products_hand_tools_boxes">
                <div class="col1">
                    <div class="box1">
                        <img src="imgs/cutting1.png" alt="noznice">
                        <hr>
                        <h1 class="stripping1_title">Mechanické rezné nástroje</h1>
                    </div>
                    <div class="box2">
                        <img src="imgs/cutting2.png" alt="srobovak">
                        <hr>
                        <h1 class="stripping2_title">Hydraulické rezacie hlavy</h1>
                    </div>
                    <div class="box3">
                        <img src="imgs/cutting3.png" alt="stikace">
                        <hr>
                        <h1 class="stripping3_title">Ručné hydraulické rezacie<br>nástroje</h1>
                    </div>
                </div>
                <div class="col2">
                    <div class="box4">
                        <img src="imgs/cutting4.png" alt="rezaky">
                        <hr>
                        <h1 class="rezaky">Akumulátorové hydraulické<br>rezacie nástroje</h1>
                    </div>
                </div>
            </div>
        </div>
    <div class="spacer6 layer6"></div>
    </section>

    <section class="electrical_products_crimping_tools">
        <div class="electrical_products_crimping_tools_section">
            <div class="electrical_products_crimping_tools_text">
                <h1 class="electrical_products_crimping_tools_title">Krimplovacie nástroje</h1>
                <hr>
            </div>
            <div class="electrical_products_hand_tools_boxes">
                <div class="col1">
                    <div class="box1">
                        <img src="imgs/crimping1.png" alt="noznice">
                        <hr>
                        <h1 class="stripping1_title">Mechanické krimplovacie<br>nástroje</h1>
                    </div>
                    <div class="box2">
                        <img src="imgs/crimping2.png" alt="srobovak">
                        <hr>
                        <h1 class="stripping2_title">Krimplovacie hlavy</h1>
                    </div>
                    <div class="box3">
                        <img src="imgs/crimping3.png" alt="stikace">
                        <hr>
                        <h1 class="stripping3_title">Ručne ovládané <br> krimplovacie nástroje</h1>
                    </div>
                </div>
                
            </div>
        </div>
    </section>

    <section class="electrical_products_bending_tools">
        <div class="spacer7 layer7"></div>
        <div class="electrical_products_bending_tools_section">
            <div class="electrical_products_bending_tools_text">
                <h1 class="electrical_products_bending_tools_title">Nástroje na ohýbanie a dierovanie</h1>
                <hr>
            </div>
            <div class="electrical_products_hand_tools_boxes">
                <div class="col1">
                    <div class="box1">
                        <img src="imgs/bending1.png" alt="noznice">
                        <hr>
                        <h1 class="stripping1_title">Raziace a ohýbacie nástroje</h1>
                    </div>
                    <div class="box2">
                        <img src="imgs/bending2.png" alt="srobovak">
                        <hr>
                        <h1 class="stripping2_title">Príslušenstvo pre dierovacie <br> nástroje</h1>
                    </div>
                    <div class="box3">
                        <img src="imgs/bending3.png" alt="stikace">
                        <hr>
                        <h1 class="stripping3_title">Hydraulická hlava na <br> dierovanie prípojníc</h1>
                    </div>
                </div>
                <div class="col2">
                    <div class="box4">
                        <img src="imgs/bending4.png" alt="rezaky">
                        <hr>
                        <h1 class="rezaky">Jednotka spracovania <br> elektrickej zbernice</h1>
                    </div>
                </div>
                
            </div>
        </div>
        <div class="spacer6 layer6"></div>
    </section>

    <section class="electrical_products_hydraulic_tools">
        
        <div class="electrical_products_hydraulic_tools_section">
            <div class="electrical_products_hydraulic_tools_text">
                <h1 class="electrical_products_hydraulic_tools_title">Hydraulické čerpadlá</h1>
                <hr>
            </div>
            <div class="electrical_products_hand_tools_boxes">
                <div class="col1">
                    <div class="box1">
                        <img src="imgs/pump1.png" alt="noznice">
                        <hr>
                        <h1 class="stripping1_title">Nohou ovládané čerpadlá</h1>
                    </div>
                    <div class="box2">
                        <img src="imgs/pump2.png" alt="srobovak">
                        <hr>
                        <h1 class="stripping2_title">Elektrohydraulické čerpadlá</h1>
                    </div>
                    <div class="box3">
                        <img src="imgs/pump3.png" alt="stikace">
                        <hr>
                        <h1 class="stripping3_title">Batériové čerpadlá</h1>
                    </div>
                </div>
                <div class="col2">
                    <div class="box4">
                        <img src="imgs/pump4.png" alt="rezaky">
                        <hr>
                        <h1 class="rezaky">Príslušenstvo</h1>
                    </div>
                </div>
            </div>
        </div>
        
    </section>

    <section class="electrical_products_electrotechnical_tools">
        <div class="spacer7 layer7"></div>
        <div class="electrical_products_electrotechnical_tools_section">
            <div class="electrical_products_electrotechnical_tools_text">
                <h1 class="electrical_products_electrotechnical_tools_title">Elektrotechnické zariadenia</h1>
                <hr>
            </div>
            <div class="electrical_products_hand_tools_boxes">
                <div class="col1">
                    <div class="box1">
                        <img src="imgs/electro1.png" alt="noznice">
                        <hr>
                        <h1 class="stripping1_title">Súčasné páskové zariadenia</h1>
                    </div>
                    <div class="box2">
                        <img src="imgs/electro2.png" alt="srobovak">
                        <hr>
                        <h1 class="stripping2_title">Bočné zariadenia</h1>
                    </div>
                    <div class="box3">
                        <img src="imgs/electro3.png" alt="stikace">
                        <hr>
                        <h1 class="stripping3_title">Ostatné príslušenstvo</h1>
                    </div>
                </div>
                
                
            </div>
        </div>
        
    </section>

    <div class="spacer10 layer10"></div>
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

    <script src="./skuska.js"></script>
    <script src="./button.js"></script>

    <script>
    $(".slovakia-img").click(function () {
        $(".england-img").toggleClass("show-england");
        $(".germany-img").toggleClass("show-germany");
    });
    </script>
