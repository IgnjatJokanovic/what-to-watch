<?php
include_once('models/User.php');
use models\User;
?>
<?php if(isset($_SESSION['user'])): ?>
<section id="form"><!--form-->
		<div class="container">
			<div class="row">
				<div class="col-sm-4 col-sm-offset-1">
					<div class="login-form"><!--login form-->
						<h2>Change picture</h2>
						<form method="post" action="<?=$_SERVER['PHP_SELF'].'?page=edit';?>" enctype="multipart/form-data">
                            <img width="100" src="<?= $_SESSION['user']->src ?>" alt="<?= $_SESSION['user']->src ?>"/>
                            <input type="hidden" name="img_id" value="<?= $_SESSION['user']->amg_id ?>" />
							<input type="file" name="pic" />
							<input type="submit" name="esub" class="btn btn-default" value="Edit"/>
						</form>
						<?php 
							if(isset($_POST['esub']))
							{
                                extract($_FILES);
                                extract($_POST);
                                if($pic['size'] == 0)
                                {
                                    echo "<p class='text-danger'>Image Is required</p>";
                                }
                                else
                                {
                                    $user = new User();
                                    $img = time().$pic['name'];
                                    if(move_uploaded_file($pic['tmp_name'], "C:/xampp/htdocs/imdb/img/$img"))
                                    {
                                        $user->image = "img/$img";
                                        $user->updatePic($img_id);
                                        $id =  $_SESSION['user']->id;
                                        $_SESSION['user'] = $user->findBy('id', $id);
                                        echo "<p class='text-success'>Updated profile picture</p>";
                                    }
                                    else
                                    {
                                        echo "Something went wrong";
                                    }

                                }
								
							}
						?>
					</div><!--/login form-->
                </div>
                <div class="col-sm-4 col-sm-offset-1">
					<div class="login-form"><!--login form-->
						<h2>Change information</h2>
						<form method="post" action="<?=$_SERVER['PHP_SELF'].'?page=edit';?>">
                            <input type="text" name="name"  value="<?= $_SESSION['user']->name ?>"/>
                            <input type="text" name="sur" value="<?= $_SESSION['user']->surname ?>"/>
                            <input type="password" name="pass" placeholder="Password" />
							<input type="submit" name="esubi" class="btn btn-default" value="Edit"/>
						</form>
						<?php 
							if(isset($_POST['esubi']))
							{
                                extract($_POST);
                                $user = new User();
                                $user->name = $name;
                                $user->surname = $sur;
                                $user->password = $pass;
                                $id =  $_SESSION['user']->id;
                                $user->updateInfo($id, $_SESSION['user']->amg_id);
                                if(empty($user->err))
                                {
                                    $_SESSION['user'] = $user->findBy('id', $id);
                                    echo '<p class="text-success">Updated profile</p>';
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
<?php endif; ?>