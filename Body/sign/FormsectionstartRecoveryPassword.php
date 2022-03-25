<body>
	 <!-- form section start -->
	 <section class="w3l-workinghny-form">
        <!-- /form -->
        <div class="workinghny-form-grid">
            <div class="wrapper">
                <div class="logo">
                    <h1><a class="brand-logo" href=<?php echo $level."index.php"?>>Recover Password</a></h1>
                    <!-- if logo is image enable this   
                        <a class="brand-logo" href="#index.html">
                            <img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
                        </a> -->
                </div>
                <div class="workinghny-block-grid">
                    <div class="workinghny-left-img align-end">
                        <img src=<?php echo $level.IMG_Path."2.png"?> class="img-responsive" alt="img" style="margin-bottom: 300px;"/>
                    </div>
                    <div class="form-right-inf">
						
                        <div class="login-form-content">
                            <h2>Where to?</h2>
                            <form action="<?php echo $level.DATABASE.CUSTOMER."recoverypassword.php"?>" class="signin-form" method="post" style="margin-bottom:300px;">
								<div class="one-frm">
									<label>Username</label>
									<input type="text" name="USERNAME"   value="<?php echo $_GET['username']?>" readonly>
								</div>
								<div class="one-frm">
									<label>Password</label>
									<input type="password" name="NEW"  placeholder="" required="">
								</div>
								<div class="one-frm">
									<label>Confirm Password</label>
									<input type="password" name="CONFIRM"  placeholder="" required="">
								</div>
                                <input type="submit" class="btn btn-style mt-3" name="btn_submit" value="Submit">
								<p class="already">Back to home page <a href="<?php echo $level."index.php"?>">Home</a></p>
								<p class="already">Back to sign in <a href="<?php echo $level.PAGES."signin.php"?>">Sign in</a></p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>