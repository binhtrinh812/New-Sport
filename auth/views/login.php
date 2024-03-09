<?php
    if (isset($_SESSION['id_account'])) {
        header('Location: ../admin');
    }
?>

<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<img class="logo_auth" src="/public/banner/<?= $banner1[0]['photo']; ?>">
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-4">
					<div class="login-wrap p-0">
						<h3 class="mb-4 text-center"><b>Login - Admin</b></h3>
						<form action="" class="signin-form" method="POST">
							<div class="form-group">
								<input type="text" required id="email" name="email" class="form-control" value="<?= !empty($_COOKIE['email']) ? $_COOKIE['email'] : '' ?>"  placeholder="Username" required>
							</div>
						<div class="form-group">
							<input id="password-field" type="password" id="password" value="<?= !empty($_COOKIE['password']) ? $_COOKIE['password'] : '' ?>" required name="password" class="form-control" placeholder="Password" >
							<!-- <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span> -->
						</div>
						<div class="form-group">
							<button type="submit" name="submit_login" class="form-control btn btn-primary submit px-3">Sign In</button>
						</div>
							<div class="form-group d-md-flex">
								<div class="w-50">
									<label class="checkbox-wrap checkbox-primary">Remember Me
										<input type="checkbox" name= "checkbox" value="<?php if(isset($_COOKIE['email'])) echo"checked";?>" checked >
										<span class="checkmark"></span>
									</label>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>