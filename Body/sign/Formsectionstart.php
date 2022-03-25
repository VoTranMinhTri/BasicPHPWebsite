<body>
<?php
session_start();
?>
	 <!-- form section start -->
	 <section class="w3l-workinghny-form">
        <!-- /form -->
        <div class="workinghny-form-grid">
            <div class="wrapper">
                <div class="logo">
                    <h1><a class="brand-logo" href=<?php echo $level."index.php"?>>Sign In</a></h1>
                    <!-- if logo is image enable this   
                        <a class="brand-logo" href="#index.html">
                            <img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
                        </a> -->
                </div>
                <div class="workinghny-block-grid">
                    <div class="workinghny-left-img align-end">
                        <img src=<?php echo $level.IMG_Path."2.png"?> class="img-responsive" alt="img" />
                    </div>
                    <div class="form-right-inf">
						
                        <div class="login-form-content">
                            <h2>Where to?</h2>
                            <form action="<?php echo $level.DATABASE.CUSTOMER."index_login.php"?>" class="signin-form" method="post"><!--$level.DATABASE."index_login.php"-->
								<div class="one-frm">
									<label>Username</label>
									<input type="text" name="username"  placeholder="" required="">
								</div>
								<div class="one-frm">
									<label>Password</label>
									<input type="password" name="password"  placeholder="" required="">
								</div>
                                <input type="submit" class="btn btn-style mt-3" name="btn_submit" value="Sign In">
                                <p class="already">Don't have an account? <a href="<?php echo $level.PAGES."signup"?>">Sign Up</a></p>
								<p class="already">Back to home page <a href="<?php echo $level."index.php"?>">Home</a></p>
								<p class="already">Forgot password <a href="<?php echo $level.PAGES."forgotpassword.php"?>">Here</a></p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>