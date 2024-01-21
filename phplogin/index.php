<?php 
    include("connection.php");
    include("login.php");
    ?>
    
<html>
    <head>
        <title>Login</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    </head>
    <body>
        
        <div class="wrapper">
            <form action='' onsubmit="return isvalid()" method="POST">
                <h1 id="title">Sign In</h1>
                <div class="input-box">
                    <input type="text" placeholder="Username" name="user">
                    <i class='bx bxs-user'></i>
                </div>
                <div class="input-box">
                    <input type="password" placeholder="Password" name="pass">
                    <i class='bx bxs-lock-alt'></i>
                </div>
                <div class="remember-forgot">
                    <label>
                        <input type="checkbox"> Remember me
                    </label>
                    <a href="#">Forgot password?</a>
                </div>

                <button type="submit" class="btn" id="loginbtn" name = "submit">Login</button>
            </form>
        </div>

<script>

function isvalid(){
                var user = document.form.user.value;
                var pass = document.form.pass.value;
                if(user.length=="" && pass.length==""){
                    alert("Please insert a username and password.");
                    return false;
                }
                else if(user.length==""){
                    alert("Username cannot be empty.");
                    return false;
                }
                else if(pass.length==""){
                    alert("Password cannot be empty.");
                    return false;
                }
                
            }

</script>

    </body>
</html>