<?php include_once"sections/header.php" ?>
<body class="loginbg">

    <!-- login -->
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-md-4 col-md-offset-4">
                <div class="account-wall">
                    <img class="profile-img" src="" width="350px"
                        alt="">
                    <form class="form-signin" action="index.php/welcome/cargarMenu">
                    <input type="text" class="form-control" placeholder="Email" value="" required autofocus>
                    <input type="password" class="form-control" placeholder="Password" value="" required>
                    <button class="btn btn-lg btn-info btn-block" type="submit">
                        Sign in</button>
                    <label class="checkbox pull-left">
                        <input type="checkbox" value="remember-me">
                        Remember me
                    </label>
                    <a href="#" class="pull-right need-help">Need help? </a><span class="clearfix"></span>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
<?php include_once "sections/footer.php" ?>

