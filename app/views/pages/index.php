<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/policeStationAdminLogin.css">
    <title>Login</title>
</head>

<body>
    <section class="container forms">
        <div class="image">
            <img src="<?php echo URLROOT; ?>/img/loginimage.jpeg" alt="image">
        </div>

        <div class="form login">
            <div class="form-content">
                <header>Admin Login</header>
                <form action="" method="post">
                    <div class="email">
                        <label for="">Email</label>
                        <input type="email" name="email" placeholder="Enter Your Email Address" class="input-email">
                    </div>
                    <div class="password">
                        <label for="">Password</label>
                        <input type="password" name="pass" placeholder="Enter Your Password" class="input-password">
                    </div>
                    <span>
                        <input type="checkbox" checked="checked" name="remember" class="input-remember">
                        <label>Remember me</label>
                        <a href="#" class="forget-password">Forget password</a>
                    </span>
                    <div class="login-btn">
                        <a href="<?php echo URLROOT; ?>/police_station/Dashboard"><input type="submit" name="login"
                                value="login"></a>
                    </div>


                </form>
            </div>
        </div>
    </section>
</body>

</html>