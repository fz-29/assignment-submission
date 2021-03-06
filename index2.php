<?php
    session_start();
    require("modules/functions.php");
    if(isset($_SESSION["logged_in"]))
        redirect();
    $_SESSION["formid"] = md5(rand(1,7919)*rand(1,7919));
    //1000th prime no - 7919
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Login| Assignment Submission System</title>
    <link href="css/normalize.css" rel="stylesheet">
    <link href='https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css' rel='stylesheet prefetch'>
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <div id="error-box">
        <?php
            if(isset($_GET["error"]))
            {
                echo $_GET["error"];
            }
        ?>
    </div>
    <div class="logmod">
        <div class="logmod__wrapper">
            <div class="logmod__container">
                <ul class="logmod__tabs">
                    <li data-tabtar="lgm-2">
                        <a href="#">Students</a>
                    </li>
                    <li data-tabtar="lgm-1">
                        <a href="#">Instructors</a>
                    </li>
                </ul>
                <div class="logmod__tab-wrapper">
                    <div class="logmod__tab lgm-1">
                        <div class="logmod__heading">
                            <span class="logmod__heading-subtitle">Instructors, Enter your
                            email and password <strong>to sign
                            in</strong></span>
                        </div>
                        <div class="logmod__form">
                            <form accept-charset="utf-8" action="logincheck.php" class="simform" method="POST">
                            <input type="hidden" name="formid" value="<?php echo $_SESSION['formid']; ?>"/>
                                <div class="sminputs">
                                    <div class="input full">
                                        <label class="string optional" for=
                                        "user-name">Email</label>
                                        <input class="string optional" name="email" id=
                                        "user-email" maxlength="255"
                                        placeholder="Email" size="25" type=
                                        "email">
                                    </div>
                                </div>
                                <div class="sminputs">
                                    <div class="input full">
                                        <label class="string optional" for=
                                        "user-pw">Password </label>
                                        <input class="string optional" name="password" id=
                                        "user-pw" maxlength="255" placeholder=
                                        "Password" size="25" type="password">
                                        <span class="hide-password">Show</span>
                                    </div>
                                </div>


                                <div class="simform__actions">
                                    <!-- <button class="sumbit" type="button">Login</button> -->
                                    <input type="submit" class="sumbit" name="instructor" value="Login">
                                    <span class="simform__actions-sidetext">
                                        <a class="special" href="#" role="link">Forgot your password?<br>
                                        Click here</a>
                                    </span>
                                </div>
                            </form>
                        </div>
                    </div>


                    <div class="logmod__tab lgm-2">
                        <div class="logmod__heading">
                            <span class="logmod__heading-subtitle">Students, Enter your
                            email and password <strong>to sign
                            in</strong></span>
                        </div>
                        <div class="logmod__form">
                            <form accept-charset="utf-8" action="logincheck.php" class="simform" method="POST">
                            <input type="hidden" name="formid" value="<?php echo $_SESSION['formid']; ?>"/>
                                <div class="sminputs">
                                    <div class="input full">
                                        <label class="string optional" for=
                                        "user-name">Email</label>
                                        <input class="string optional" name="email" id=
                                        "user-email" maxlength="255"
                                        placeholder="Email" size="50" type=
                                        "email">
                                    </div>
                                </div>
                                <div class="sminputs">
                                    <div class="input full">
                                        <label class="string optional" for=
                                        "user-pw">Password </label>
                                        <input class="string optional" name="password" id=
                                        "user-pw" maxlength="255" placeholder=
                                        "Password" size="50" type="password">
                                        <span class="hide-password">Show</span>
                                    </div>
                                </div>


                                <div class="simform__actions">
                                	<!-- <button class="sumbit" type="button">Login</button> -->
                                    <input type="submit" class="sumbit" name="student" value="Login">
                                    <span class="simform__actions-sidetext">
                                    	<a class="special" href="#" role="link">Forgot your password?<br>
	                                    Click here</a>
                                    </span>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script> 
    <script src="js/index.js"></script>
</body>
</html>