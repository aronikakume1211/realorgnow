<?php include_once('model/UserModel.php') ?>
<?php
session_start();
$errSignup = '';
$errSignin = '';
if(isset($_POST['signup'])){
    $email = $_POST['email'];
    $pass = $_POST['password'];
    $userModel = new UserModel();
    $userResult = $userModel->getUserByEmail($email);
    if(!empty($userResult) && count($userResult) > 0)
    {
        $errSignup = "User already Exists.";
    }
    else{
        $id = $userModel->register($email,$pass);
        $user = $userModel->getUserById($id);
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['email'] = $user['email'];
        header("Location: /");
        exit;
    }
}
if(isset($_POST['signin'])){
    $email = $_POST['signin_email'];
    $pass = $_POST['signin_password'];
    $arr = array();
    $arr['email'] = $email;
    $arr['password'] = $pass;
    $user = new Usermodel();
    $data = $user->login($arr);
    $err = '';
    if($data->num_rows >= 1){
        $row = mysqli_fetch_row($data);
        $_SESSION["user_id"] = $row[0];
        $_SESSION["email"] = $row[1];
        header("Location: /");
        die();
    }
    else{
        $errSignin = "Invalid Credentials";
    }
}

?>
<?php include_once('view/header.php') ?>
		<!-- Sign in Page Content Area Start Here -->
        <div class="signin-content-wraper">
				<div class="container">
					<div class="row">
						<div class="col-md-6 offset-md-3 offset-sm-0">
							<div class="pageformcontainer">
								<ul class="nav nav-pills" id="pills-tab" role="tablist">
								    <li class="nav-item" role="presentation">
								        <a href="#signin" class="nav-link <?php echo ($errSignin =='')? 'active' : '' ?>" id="signin-tab" data-bs-toggle="pill" data-bs-target="#signin" role="tab" aria-controls="signin" aria-selected="true">New Customer?</a>
								    </li>
								    <li class="nav-item" role="presentation">
								        <a href="#signup" class="nav-link <?php echo ($errSignin !='')? 'active' : '' ?>" id="signup-tab" data-bs-toggle="pill" data-bs-target="#signup" role="tab" aria-controls="signup" aria-selected="false">I’m a customer</a>
								    </li>


								</ul>

								<div class="tab-content" id="pills-tabContent">
									  <div class="tab-pane fade <?php echo ($errSignin =='')? 'show active' : '' ?>" id="signin" role="tabpanel" aria-labelledby="signin-tab" tabindex="0">
									  		<h1>Let's check if we can ship eggs to your area</h1>
									  		<form class="row g-3 needs-validation" action="" method="post" novalidate>
                                            <div class="text-danger"><?php echo $errSignup ?></div>
											  <div class="col-md-12">
											    <label for="emailform" class="form-label">Email</label>
											    <input type="email" class="form-control" name="email" id="emailform" required>
											   
										        <div class="invalid-feedback">
										        	The email field is required.
										      	</div>

											  </div>
											  <div class="col-md-12">
											    <label for="passwordform" class="form-label">Password</label>
											    <input type="password" class="form-control" name="password" id="passwordform" required>
											    <div class="invalid-feedback">
										        	The password field is required.
										      	</div>
											  </div>
											  <div class="col-12 form-bottom-block legal-links">
											  	<p>By creating an account you agree to our <a href="#">Terms of Service</a> and <a href="#">Privacy Policy</a></p>
											    <button class="btn purple-bg-btn" name="signup" type="submit">Get Started</button>
											  </div>
											</form>
									  </div>
									<div class="tab-pane fade <?php echo ($errSignin !='')? 'show active' : '' ?>" id="signup" role="tabpanel" aria-labelledby="signup-tab" tabindex="0">
										<h1>Login</h1>
										<form class="row g-3 needs-validation" action="" method="post" novalidate>
                                        <div class="text-danger"><?php echo $errSignin ?></div>
											  <div class="col-md-12">
											    <label for="emailformLogin" class="form-label">Email</label>
											    <input type="email" class="form-control" name="signin_email" id="emailformLogin" required>
											   
										        <div class="invalid-feedback">
										        	The email field is required.
										      	</div>
											  </div>
											  <div class="col-md-12">
											    <label for="passwordformLogin" class="form-label">Password</label>
											    <input type="password" class="form-control" name="signin_password" id="passwordformLogin" required>
											    <div class="invalid-feedback">
										        	The password field is required.
										      	</div>
											  </div>
											  <div class="col-12 form-bottom-block">
											    <button class="btn purple-bg-btn" name="signin" type="submit">Sign In</button>
											    <p>Need an account? <a href="#">Create one here</a></p>
											  </div>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		<!-- Sign in Page Content Area Ends Here -->


<?php include_once('view/footer.php') ?>
