



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
    <link rel="stylesheet" type="text/css" href="main.css">
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script src="https://kit.fontawesome.com/bf08b35ef6.js" crossorigin="anonymous"></script>
    <title>Intercable</title>
</head>

<body>
    <div class="spacer15 login_background_pic">
        <div class="limiter">
            <div class="container-login100">
                <div class="wrap-login100">
                    <form class="login100-form validate-form" action="login.inc.php" method="post">
                        <span class="login100-form-title p-b-26" style="margin-bottom: 35px;">
                            Prihlásenie
                        </span>
                        <span class="login100-form-title p-b-48">
                            <i class="zmdi zmdi-font"></i>
                        </span>

                        <div class="wrap-input100 validate-input" data-validate = "Valid email is: a@b.c">
                            <input class="input100" type="text" name="uid">
                            <span class="focus-input100" data-placeholder="Email/Meno"></span>
                        </div>

                        <div class="wrap-input100 validate-input" data-validate="Enter password">
                            <span class="btn-show-pass">
                                <i class="zmdi zmdi-eye"></i>
                            </span>
                            <input class="input100" type="password" name="pwd">
                            <span class="focus-input100" data-placeholder="Heslo"></span>
                        </div>

                        <div class="container-login100-form-btn">
                            <div class="wrap-login100-form-btn">
                                <div class="login100-form-bgbtn"></div>
                                <button class="login100-form-btn" name="submit">
                                    Prihlásiť sa
                                </button>
                            </div>
                        </div>
                        <?php
                            if (isset($_GET["error"])){
                                if ($_GET["error"] == "emptyinput"){
                                    echo "<p>Vyplnte všetky polia!</p>";
                                }
                                else if ($_GET["error"] == "wronglogin"){
                                    echo "<p>Nesprávne prihlasovacie údaje</p>";
                                }
                                
                                
                            }


                        ?>

                        <div class="text-center p-t-115">
                            <span class="txt1">
                               Nemáte účet?
                            </span>

                            <a class="txt2" href="registration.php">
                                Zaregistrujte sa
                            </a>
                        </div>
                    </form>
                </div>
            </div>
	</div>
	

	<div id="dropDownSelect1"></div>
    </div>
    

</body>