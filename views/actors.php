<?php
	include_once('models/Actor.php');
	use models\Actor;
	$actor = new Actor();
	
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
					$number_of_results = count($actor->allNameSurname());
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
					$actors = $actor->paginate($limit, $offset);
					?>
					<?php foreach($actors as $a): ?>
						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
										<div class="productinfo text-center">
											<img src="<?= $a->image ?>" alt="<?=  $a->alt ?>" />
											<h2><a href="index.php?page=actor&id=<?= $a->id ?>"><?= $a->name.' '.$a->surname ?></a></h2>
										
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