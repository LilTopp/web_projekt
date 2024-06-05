<?php
    include 'vyroba-connection.php';
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
    <button onclick="topFunction()" id="myBtn" title="Go to top" style="display: block; width: 43px;">▲</button>
    <header>
        <a
                href="index.php"><img class="logo" src="imgs/logointercable.png" alt="logo">
        </a>
        
        <nav class="navbar">
            
            <ul class="navlinks">
                <li class="Onas"><a href="onas.php">O nás</a></li>
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

    <?php 
        $sql = "SELECT * FROM artikle WHERE ID=1;";
        $result = mysqli_query($conn, $sql);
        while($row = mysqli_fetch_assoc($result)){
            $nadpis = $row['Nadpis'];
            $podnadpis = $row['Podnadpis'];
            $text = $row['Text'];
            $fotka = $row['Fotografia'];
            echo "
            <section class='automotive_section_container'>
            <div class='automotive_section'>
                <div class='automotive_section_text'>
                    <h1 class='automotive_section_title'>$nadpis</h1>
                    <h1 class='automotive_section_title2'>$podnadpis</h1>
                    <hr>
                    <p class='automotiave_section_baseline'>$text</p>
                    <div class='button3'>
                        <div class='container3'>
                            <div class='center3'>
                            <button class='btn3'>
                                <a href='automotive_products.php'>
                                    <svg width='180px' height='60px' viewBox='0 0 180 60' class='border'>
                                    <polyline points='179,1 179,59 1,59 1,1 179,1' class='bg-line' />
                                    <polyline points='179,1 179,59 1,59 1,1 179,1' class='hl-line' />
                                    </svg>
                                    <span>Zistite viac</span>
                                </a>
                            </button>
                            </div>
                        </div>
                                        
                    </div>
                </div>
                <div class='automotive_section_image'>
                    <img src='imgs/$fotka' alt='auto_section_img' style='width: 40vw; height: 30vw;'>
                </div>
            </div>
            
            <div class='spacer6 layer6'></div>
        </section>
            ";
        }
    ?>

    <?php 
        $sql = "SELECT * FROM artikle WHERE ID=2;";
        $result = mysqli_query($conn, $sql);
        while($row = mysqli_fetch_assoc($result)){
            $nadpis = $row['Nadpis'];
            $podnadpis = $row['Podnadpis'];
            $text = $row['Text'];
            $fotka = $row['Fotografia'];
            echo "
            <section class='electrical_section_container'>
            <div class='electrical_section'>
                <div class='electrical_section_image'>
                    <img src='imgs/$fotka' alt='ele_section_img' style='width: 40vw; height: 30vw;'>
                </div>
                <div class='electrical_section_text'>
                    <h1 class='electrical_section_title'>$nadpis</h1>
                    <h1 class='electrical_section_title2'>$podnadpis</h1>
                    <hr>
                    <p class='electrical_section_baseline'>$text</p>
                    <div class='button4'>
                        <div class='container4'>
                            <div class='center4'>
                            <button class='btn4'>
                                <a href='electrical_products.php'>
                                    <svg width='180px' height='60px' viewBox='0 0 180 60' class='border'>
                                    <polyline points='179,1 179,59 1,59 1,1 179,1' class='bg-line' />
                                    <polyline points='179,1 179,59 1,59 1,1 179,1' class='hl-line' />
                                    </svg>
                                    <span>Zistite viac</span>
                                </a>
                            </button>
                            </div>
                        </div>
                                        
                    </div>
                </div>
                
            </div>
        </section>
            ";
        }
    ?>

<?php 
        $sql = "SELECT * FROM artikle WHERE ID=3;";
        $result = mysqli_query($conn, $sql);
        while($row = mysqli_fetch_assoc($result)){
            $nadpis = $row['Nadpis'];
            $podnadpis = $row['Podnadpis'];
            $text = $row['Text'];
            $fotka = $row['Fotografia'];
            echo "
            <section class='windpower_section_container'>
            <div class='spacer7 layer7'></div>
            <div class='windpower_section'>
                <div class='windpower_section_text'>
                    <h1 class='windpower_section_title'>$nadpis</h1>
                    <h1 class='windpower_section_title2'>$podnadpis</h1>
                    <hr>
                    <p class='windpower_section_baseline'>$text</p>
                    <div class='button5'>
                        <div class='container5'>
                            <div class='center5'>
                            <button class='btn5'>
                                <a href='wind_products.php'>
                                    <svg width='180px' height='60px' viewBox='0 0 180 60' class='border'>
                                    <polyline points='179,1 179,59 1,59 1,1 179,1' class='bg-line' />
                                    <polyline points='179,1 179,59 1,59 1,1 179,1' class='hl-line' />
                                    </svg>
                                    <span>Zistite viac</span>
                                </a>
                            </button>
                            </div>
                        </div>
                                        
                    </div>
                </div>
                <div class='windpower_section_image'>
                    <img src='imgs/$fotka' alt='wind_section_img' style='width: 40vw; height: 20vw;'>
                </div>
            </div>
            
        </section>
            ";
        }
    ?>
    <div class="spacer8 layer8"></div>

    <?php 
        $sql = "SELECT * FROM artikle WHERE ID=4;";
        $result = mysqli_query($conn, $sql);
        while($row = mysqli_fetch_assoc($result)){
            $nadpis = $row['Nadpis'];
            $podnadpis = $row['Podnadpis'];
            $text = $row['Text'];
            $fotka = $row['Fotografia'];
            echo "
            <section class='rail_section_container'>
            <div class='rail_section'>
            <div class='rail_section_image'>
                <img src='imgs/$fotka' alt='ele_section_img' style='width: 40vw; height: 30vw;'>
            </div>
            <div class='rail_section_text'>
                <h1 class='rail_section_title'>$nadpis</h1>
                <h1 class='rail_section_title2'>$podnadpis</h1>
                <hr>
                <p class='rail_section_baseline'>$text</p>
                <div class='button6'>
                    <div class='container6'>
                        <div class='center6'>
                        <button class='btn6'>
                            <a href='rail_products.php'>
                                <svg width='180px' height='60px' viewBox='0 0 180 60' class='border'>
                                <polyline points='179,1 179,59 1,59 1,1 179,1' class='bg-line' />
                                <polyline points='179,1 179,59 1,59 1,1 179,1' class='hl-line' />
                                </svg>
                                <span>Zistite viac</span>
                            </a>
                        </button>
                        </div>
                    </div>
                                    
                </div>
                
            </div>
            
        </div>
    </section>
            ";
        }
    ?>

<?php 
        $sql = "SELECT * FROM artikle WHERE ID=5;";
        $result = mysqli_query($conn, $sql);
        while($row = mysqli_fetch_assoc($result)){
            $nadpis = $row['Nadpis'];
            $podnadpis = $row['Podnadpis'];
            $text = $row['Text'];
            echo "
            <section class='location_section_container'>
        <div class='spacer9 layer9'></div>
        <div class='location_section'>
            <div class='location_section_text'>
                <h1 class='location_section_title'>$nadpis</h1>
                <h1 class='location_section_title2'>$podnadpis</h1>
                <hr>
                <p class='location_section_baseline'>$text</p>
                <div class='button7'>
                    <div class='container7'>
                        <div class='center7'>
                        <button class='btn7'>
                            <a href='onas.php'>
                                <svg width='180px' height='60px' viewBox='0 0 180 60' class='border'>
                                <polyline points='179,1 179,59 1,59 1,1 179,1' class='bg-line' />
                                <polyline points='179,1 179,59 1,59 1,1 179,1' class='hl-line' />
                                </svg>
                                <span>Zistite viac</span>
                            </a>
                        </button>
                        </div>
                    </div>
                                    
                </div>
            </div>
            
                <div class='flex-card-wrapper'>

                    <article class='flex-card-container bild-1'>
                        <div class='overlay'>
                            <a href='https://www.google.com/maps/place/Intercable+s.r.o./@48.5302365,19.4319695,17z/data=!3m1!4b1!4m5!3m4!1s0x47155a85ca55814b:0x84c5c5573a640ba6!8m2!3d48.5302365!4d19.4341635' target='_blank'>
                                <div class='icon'>
                                <i class='fas fa-map-marker-alt'></i>
                                </div>
                            </a>
                            <h3>Intercable Kriváň</h3>
                           
                        </div>
                    </article>
                
                    <article class='flex-card-container bild-2'>
                        <div class='overlay'>
                            <a href='https://www.google.com/maps/place/Intercable+GmbH/@46.8010596,11.9265909,17z/data=!3m1!4b1!4m5!3m4!1s0x47782022a0976135:0xa13b28ed4b23fa8c!8m2!3d46.8010559!4d11.9287796' target='_blank'>
                                <div class='icon'>
                                <i class='fas fa-map-marker-alt'></i>
                                </div>
                            </a>
                            <h3>Intercable Bruneck</h3>
                            
                        </div>
                    </article>
                
                    <article class='flex-card-container bild-3'>
                        <div class='overlay'>
                            <a href='#'>
                                <div class='icon'>
                                <i class='fas fa-map-marker-alt'></i>
                                </div>
                            </a>
                            <h3>Intercable China</h3>
                           
                        </div>
                    </article>
                
                    <article class='flex-card-container bild-4'>
                        <div class='overlay'>
                            <a href='https://www.google.com/maps/place/Intercable+Tools+Gmbh/@50.0768703,8.625605,17z/data=!4m5!3m4!1s0x47bd0ba2fe86df57:0x633ddc4c0ead2481!8m2!3d50.076876!4d8.6279844' target='_blank'>
                                <div class='icon'>
                                <i class='fas fa-map-marker-alt'></i>
                                </div>
                            </a>
                            <h3>Intercable Germany</h3>
                            
                        </div>
                    </article>
                
                </div>
                  
            
    </section>
            ";
        }
?>

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
</body>





<script>
    $(".slovakia-img").click(function () {
        $(".england-img").toggleClass("show-england");
        $(".germany-img").toggleClass("show-germany");
    });
</script>

</html>