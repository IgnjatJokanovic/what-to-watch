<section id="form"><!--form-->
		<div class="container">
			<div class="row">
				<div class="col-sm-4">
					<div class="signup-form"><!--sign up form-->
						<h2>New User Signup!</h2>
						<form method="post" action="php/register.php" enctype="multipart/form-data">
							<input type="text" name="name"  placeholder="Name"/>
							<input type="text" name="sur" placeholder="Surname"/>
							<input type="text" name="uname" placeholder="Username"/>
							<input type="text" name="email" placeholder="Email"/>
							<input type="password" name="pass" name="pass" placeholder="Password"/>
							<input type="File" name="img"/>
							<button type="submit" name="resub" class="btn btn-default">Signup</button>
						</form>
					</div><!--/sign up form-->
				</div>
				<div class="col-sm-5 mt-100">
				<?php include "views/feedback.php"; ?>
				</div>
			</div>
		</div>
	</section><!--/form-->