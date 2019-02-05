<header id="header"><!--header-->
		
		<div class="header-middle"><!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-sm-2">
						<div class="logo pull-left">
							<a href="index.html"><img class="logo-size" src="img/wtw_logo.png" alt="" /></a>
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
											<li><a href="shop.html">Products</a></li>
											<li><a href="product-details.html">Product Details</a></li> 
											<li><a href="checkout.html">Checkout</a></li> 
											<li><a href="cart.html">Cart</a></li> 
											<li><a href="login.html">Login</a></li> 
										</ul>
									</li>
									<li><a href="index.php?page=actors">Actors</a></li>
									<li><a href="index.php?page=about">About us</a></li>
									<li><a href="index.php?page=author">Author</a></li>
									<li><a href="index.php?page=contact">Contact</a></li>
								</ul>
							</div>
						</div>
					<div class="col-sm-2">
							<div class="search_box pull-right">
								<input type="text" placeholder="Search"/>
								<ul role="menu" class="sub-menu">
									<li><a href="shop.html">Item1</a></li>
									<li><a href="product-details.html">Item2</a></li> 
									<li><a href="checkout.html">Item3</a></li> 
									<li><a href="cart.html">Item4</a></li> 
									<li><a href="login.html">Itme5</a></li> 
								</ul>
							</div>
					</div>
					<div class="col-sm-1">
							<div class="shop-menu pull-right">
								<ul class="nav navbar-nav">
									<?php 
										if(isset($_SESSION['user'])):
									?>
									<li><a href="#"><i class="fa fa-user"></i> Account</a></li>
									<?php
										else:
									?>
									<li><a href="index.php?page=login"><i class="fa fa-lock"></i> Login</a></li>
									<?php endif; ?>
								</ul>
							</div>
					</div>
				</div>
			</div>
		</div>
	</header>