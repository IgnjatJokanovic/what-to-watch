<?php
	
	
	include('views/slider.php');
    ?>
<section class="mt-100">
		<div class="container">
			<div class="row">
                <?php
                    include('views/widgets.php');
                ?>
    		<div class="col-sm-9 padding-right">
					<div class="features_items"><!--features_items-->
					<?php

					$offset = 6;
					$number_of_results = count($movie->all());
					$number_of_pages = ceil($number_of_results/$offset);
					if (!isset($_GET['paginate'])) 
					{
						$paginate = 1;
					}
					else
					{
						$paginate = $_GET['paginate'];
					}
					$limit = ($paginate-1)*$offset;
					$movies = $movie->paginate($limit, $offset);
					?>
					<?php foreach($movies as $m): ?>
						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
										<div class="productinfo text-center">
											<img src="<?= $m->src ?>" alt="<?= $m->alt ?>" />
											<h2><a href="index.php?page=movie&id=<?= $m->id ?>"><?= $m->title ?></a></h2>
											<p><?= $m->story ?></p>
												
										
										</div>
								</div>
								
							</div>
						</div>
						
					<?php endforeach; ?>	
					</div><!--features_items-->
					
				</div>
			</div>
			<nav aria-label="..." class="col-md-3 col-md-offset-5">
			<ul class="pagination pagination-lg">
				<?php if($number_of_pages > 1): ?>
					<?php for($i = 1; $i <= $number_of_pages; $i++): ?>
					<li class="page-item"><a class="page-link" href="index.php?paginate=<?= $i ?>"><?= $i ?></a></li>
					<?php endfor; ?>
				<?php endif; ?>
			</ul>
		</nav>
		</div>
		
	</section>