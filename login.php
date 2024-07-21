<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Document</title>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <link rel='stylesheet' href='login.css'>
</head>

<body>
<DIV>
<div align="center"><h1>EMPLOYEE DATABASE SYSTEM</h1>
</div>
</DIV>
<form method = "POST" action="loginVerfy.php"
    <body>
        <section>
            <div class="form-box">
                <div class="form-value">
                    <form>
                        <h2>Login</h2>
                        <div class="inputbox"> 
						<input type= "text" placeholder="username" name="username">
                        </div>
                        <div class="inputbox">
						<input type="password" placeholder="password" name="password">
                        </div>
                        <div class="forget"> <label><input type="checkbox">Remember Me</label> <a href="#">Forgot Password ?</a> </div>
						<input type="submit" value="login" class="loginBtn" name="login_Btn">
								
								
                        <div class="register">
                            <p>Don't have an account? <a href="reg.php">register</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </section> 
    </body>
</body>

</html>



