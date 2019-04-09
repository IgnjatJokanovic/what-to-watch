<section id="slider"><!--slider-->
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div id="slider-carousel" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
							<li data-target="#slider-carousel" data-slide-to="1"></li>
							<li data-target="#slider-carousel" data-slide-to="2"></li>
						</ol>
						
						<div class="carousel-inner">
						<?php $i = 0; ?>
						<?php foreach($movie->incoming() as $new): ?>
							<div class="item <?= $i==0?'active':'' ?>">
								<div class="col-sm-6">
									<h1>WTW</h1>
									<h2><?= $new->title ?></h2>
									<p><?= $new->storyline ?></p>
									<a href="index.php?page=movie&id=<?= $new->id ?>" class="btn btn-default get">Preview</a>
								</div>
								<div class="col-sm-6">
									<img src="<?= $new->src ?>" class="girl img-responsive" alt="<?= $new->alt ?>" />
								</div>
							</div>
							<?php $i++; ?>
						<?php endforeach; ?>
						</div>
						
						<a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
							<i class="fa fa-angle-left"></i>
						</a>
						<a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
							<i class="fa fa-angle-right"></i>
						</a>
					</div>
					
				</div>
			</div>
		</div>
	</section><!--/slider-->