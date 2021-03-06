<?php
//Made by: Anton Suba

include('login.php');

if(isset($_SESSION['login_user'])){
    header("location: dashboard.php");
}
?>

<html>
    
<head>
    <title>RealPage Inc.</title>
    
    <link href="style.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>

<body class="blue-grey darken-4 vertical_center">
    <div id="main" class="container">
        
        <div id="card_row" class="row center-align">
            
            <div class="col s7">
                <img class="responsive-img" src="img/company-logo.png">
            </div>
            
            <div class="card col s4 offset-s1">
                <form action="" method="post">
                <div class="card-content">
                    <span class="card-title">Welcome</span>
                    <div class="input-field left-align">
                        <input id="username" name="username" type="text">
                        <label for="username">Username</label>
                    </div>
                    <div class="input-field left-align">
                        <input id="password" name="password" type="password">
                        <label for="password">Password</label>
                    </div>
                    <span id="login_error" class="red-text text-darken-1"><?php echo $error; ?></span>
                </div>
                <div class="card-action">
                    <button class="btn waves-effect waves-light" type="submit" name="submit" value="login">
                        Login
                    </button>
                </div>
                </form>
            </div>
            
        </div>
        
    </div>
    
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
</body>

</html>