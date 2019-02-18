<header id="header"><!--header-->
		
		<div class="header-middle"><!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-sm-2">
						<div class="logo pull-left">
							<a href="index.php"><img class="logo-size" src="img/wtw_logo.png" alt="wtw-logo" /></a>
						</div>
					</div>
					<div class="col-sm-6 m-t-2">
							<div class="navbar-header">
								<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
									<span class="sr-only">Toggle navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
							</div>
							<div class="mainmenu pull-left">
								<ul class="nav navbar-nav collapse navbar-collapse">
									<li><a href="index.php" class="active">Home</a></li>
									<li class="dropdown"><a href="#">Categories<i class="fa fa-angle-down"></i></a>
										<ul role="menu" class="sub-menu">
<?php foreach($category->presentCategories() as $c): ?>
												<li><a href="index.php?page=category&id=<?= $c->id ?>"><?= strtoupper($c->name) ?></a></li>
<?php endforeach; ?>
										</ul>
									</li>
									<li><a href='index.php?page=actors'>Actors</a></li>
									<li><a href="index.php?page=author">Author</a></li>
									<li><a href="index.php?page=contact">Contact</a></li>
								</ul>
							</div>
						</div>
					<div class="col-sm-2">
							<div class="search_box pull-right dropdown">
								<input  class="srch" type="search" placeholder="Search"/>
								<ul class="sub-menu dropdown-content">
									<li><a href="shop.html">Item1</a></li>
									<li><a href="product-details.html">Item2</a></li> 
									<li><a href="checkout.html">Item3</a></li> 
									<li><a href="cart.html">Item4</a></li> 
									<li><a href="login.html">Itme5</a></li> 
								</ul>
							</div>
					</div>
					<div class="col-sm-2">
							<div class="shop-menu pull-right">
								<ul class="nav navbar-nav acc">
									
									<li><a href="#"><i class="fa fa-user"></i> Account</a>
										<ul class="sub-menu acc-content">
											<?php if(!isset($_SESSION['user'])) : ?>

											<li><a href="index.php?page=login">Login</a></li>
											<li><a href="index.php?page=register">Register</a></li>

											<?php else: ?>

												<?php if(isset($_SESSION['user']) && $_SESSION['user']->role == 'admin'): ?>

												<li><a href="admin/index.php">Admin pannel</a></li>
												
												<?php endif; ?>
											<li><a href="index.php?page=edit">Edit account</a></li>
											<li><a href="php/logout.php">Logout</a></li>
											<?php endif; ?>
										</ul>
										
									</li>
								</ul>
							</div>
					</div>
				</div>
			</div>
		</div>
	</header>