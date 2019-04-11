<?php if(isset($_SESSION['user'])): ?>
<section id="form"><!--form-->
		<div class="container">
			<div class="row">
				<div class="col-sm-4 col-sm-offset-1">
					<div class="login-form"><!--login form-->
						<h2>Change picture</h2>
						<form method="post" action="php/user_edit_picture.php" enctype="multipart/form-data">
                            <img width="100" src="<?= $_SESSION['user']->src ?>" alt="<?= $_SESSION['user']->src ?>"/>
                            <input type="hidden" name="img_id" value="<?= $_SESSION['user']->amg_id ?>" />
							<input type="file" name="pic" />
							<input type="submit" name="esub" class="btn btn-default" value="Edit"/>
						</form>
						
					</div><!--/login form-->
                </div>
                <div class="col-sm-4 col-sm-offset-1">
					<div class="login-form"><!--login form-->
						<h2>Change information</h2>
						<form method="post" action="php/user_edit_info.php">
                            <input type="text" name="name"  value="<?= $_SESSION['user']->name ?>"/>
                            <input type="text" name="sur" value="<?= $_SESSION['user']->surname ?>"/>
                            <input type="password" name="pass" placeholder="Password" />
							<input type="submit" name="esubi" class="btn btn-default" value="Edit"/>
						</form>
						
					</div><!--/login form-->
				</div>
			</div>
            <?php include "views/feedback.php"; ?>
		</div>
       
	</section><!--/form-->
<?php endif; ?>