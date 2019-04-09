<footer id="footer"><!--Footer-->
		
		<div class="footer-widget">
			<div class="container">
				<div class="row">
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Latest Movies</h2>
							<ul class="nav nav-pills nav-stacked">
							<?php foreach($movie->fresh() as $f): ?>
								<li><a href="index.php?page=movie&id=<?= $f->id ?>"><?= $f->title ?></a></li>
							
							<?php endforeach; ?>
							</ul>
						</div>
					</div>
<?php if(isset($_SESSION['user']) && $_SESSION['user']->role == 'admin'):?>
					<div class="col-sm-2">
						<div class="single-widget">
							<a href="documentation.pdf"><h2>Documentation</h2></a>
							
						</div>
					</div>
<?php endif; ?>			
					<div class="col-sm-3 col-sm-offset-1 right">
						<div class="single-widget">
							<h2>Subscribe to ours newsletter</h2>
							<form action="#" class="searchform">
								<input type="text" id="subscribe_txt" placeholder="Your email address" />
								<button type="submit" class="btn btn-default" id="subscribe"><i class="fa fa-arrow-circle-o-right"></i></button>
								<div id='subscription_feedback'>
								</div>
								<p>Get the most recent updates from <br />our site and be updated your self...</p>
							</form>
							
						</div>
					</div>
					
				</div>
			</div>
		</div>
		
		<div class="footer-bottom">
			<div class="container">
				<div class="row">
					<p class="text-center">&copy; Ignjat Jokanovic 311/16</p>
					
				</div>
			</div>
		</div>
		
	</footer><!--/Footer-->
	
	
  
    <script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.scrollUp.min.js"></script>
	<script src="js/price-range.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
	<script src="js/kod.js"></script>
	<script src="js/lightbox.js"></script>

	<script>
		const URL = "http://localhost/imdb/php";
	</script>
</body>
</html>