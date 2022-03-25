<body>
	 <!-- form section start -->
	 <section class="w3l-workinghny-form">
        <!-- /form -->
        <div class="workinghny-form-grid">
            <div class="wrapper">
                <div class="logo">
                    <h1><a class="brand-logo" href=<?php echo $level."index.php"?>>Sign Up</a></h1>
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
                            <form action="<?php echo $level.DATABASE.CUSTOMER."index_signup.php"?>" class="signin-form" method="post">
								<div class="one-frm">
									<label>Phone Number</label>
									<input type="text" name="SDT"  placeholder="" required="">
								</div>
								<div class="one-frm">
									<label>Customer Name</label>
									<input type="text" name="TENKH"  placeholder="" required="">
								</div>
								<div class="one-frm">
									<label>Address</label>
									<input type="text" name="DIACHI"  placeholder="" required="">
								</div>
								<div class="one-frm">
									<label>Mail</label>
									<input type="text" name="MAIL"  placeholder="" required="">
								</div>
								<div class="one-frm">
									<label>Username</label>
									<input type="text" name="USERNAME"  placeholder="" required="">
								</div>
								<div class="one-frm">
									<label>Password</label>
									<input type="password" name="PASSWORD"  placeholder="" required="">
								</div>
                                <input type="submit" class="btn btn-style mt-3" name="btn_submit" value="Sign Up">
								<p class="already">Back to home page <a href="<?php echo $level."index.php"?>">Home</a></p>
								<p class="already">Back to sign in <a href="<?php echo $level.PAGES."signin.php"?>">Sign in</a></p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>