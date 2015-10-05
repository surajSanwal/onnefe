<?php
$title = "Login";
require_once 'header.php';
?>
<div class="containner">

    <div class="row">
        <div class="col-sm-8" style="">
            <div class="row">
                <div class="col-sm-12" align="center" >
                    <nav>
                        <?php get_nav_bar(); ?>
                    </nav>
                </div>
            </div>
            <div class='row'>
                <div>
                    <marquee direction="up" onMouseover="this.stop()" onMouseout="this.start()" style="marquee-style: alternate; marquee-speed: slow; height:460px;  marquee-loop: infinite; marquee-speed: normal" >
                    <?php get_news_all(); ?>
                    </marquee>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="row">     
                <button class='btn-link' style="width: 30%" ><a href='index.php'>SignIn</a> </button>
                <button class='btn-link' style="width: 30%">  <a href='registration.php'>SignUp</a></button>
            </div>

            <div class='row'>
                <form action="login.php" name="login" method='post'>
                    <h2>Please sign in</h2>
                    <div>
                        <label for="inputEmail"><input type="email" id="inputEmail" name="login_id" placeholder="Email address" required autofocus class='txtbox' style="width:80%"></label>
                    </div>
                    <div>
                        <label for="inputPassword"><input type="password" id="inputPassword" name="password" placeholder="Password" required class='txtbox' style="width:80%"></label><br>
                    </div>
                    <div>
                        <label for="remember"><input type="checkbox" value="remember-me" class="checkbox" >Remember me</label><br>
                    </div>
                    <div>
                        <button class="btn-submit" type="submit">Sign in</button>
                    </div>
                </form>
            </div>
            <a href="#" >Forgot Password</a>
        </div>
    </div>
</div>
<?php require_once 'footer.php'; ?>