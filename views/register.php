<?php

include_once('models/User.php');
use models\User;

?>

<section id="form"><!--form-->
		<div class="container">
			<div class="row">
				<div class="col-sm-4">
					<div class="signup-form"><!--sign up form-->
						<h2>New User Signup!</h2>
						<form method="post" action="index.php?page=register" enctype="multipart/form-data">
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
					<?php 
						if(isset($_POST['resub']))
						{
							extract($_POST);
							extract($_FILES);
							$user = new User();
							$user->name = $name;
							$user->surname = $sur;
							$user->uname = $uname;
							$user->email = $email;
							$user->password = $pass;
							$user->image = $img;
							$user->save();
							if(empty($user->err))
							{
								echo "<p class='text-success'>Thank you for registering, activation email has been sent to your emali</p>";
							}
							else{
								foreach($user->err as $e)
								{
									echo $e;
								}
							}
						}

					?>
				</div>
			</div>
		</div>
	</section><!--/form-->