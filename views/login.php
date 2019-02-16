<?php
include_once('models/User.php');
use models\User;
ob_start();
?>
<section id="form"><!--form-->
		<div class="container">
			<div class="row">
				<div class="col-sm-4 col-sm-offset-1">
					<div class="login-form"><!--login form-->
						<h2>Login to your account</h2>
						<form method="post" action="<?=$_SERVER['PHP_SELF'].'?page=login';?>">
							<input type="text" name="uname" placeholder="Username" />
							<input type="password" name="pass" placeholder="Password" />
							<input type="submit" name="lsub" class="btn btn-default" value="Login"/>
						</form>
						<?php 
							if(isset($_POST['lsub']))
							{
								extract($_POST);
								$user = new User();
								$user->uname = $uname;
								$user->password = $pass;
								$result = $user->login($uname, $pass);
								if(empty($user->err))
								{
									$_SESSION['user'] = $result;
                                    header("Location: index.php");
                                    ob_end_flush(); 
								}
								else
								{
									foreach($user->err as $e)
									{
										echo $e;
									}
								}
							}
						?>
					</div><!--/login form-->
				</div>
			</div>
		</div>
	</section><!--/form-->