<?php

	include_once('models/Actor.php');
	include_once('models/ComentActor.php');
	use models\ComentActor;
	use models\Actor;
	
	if(isset($_GET['id']))
	{
		$actor = new Actor();
		$id = $_GET['id'];
		$actor->findById($id);
		$instance = new ComentActor();
		$coments = $instance->all($id);
		$i =1;
		ob_start();
		if(empty($actor))
		{
			header("Location: index.php");
		}
	}
	else{
		header("Location: index.php");
	}
		
	
    ?>

<section>
		<div class="container">
			<div class="row">
                <?php
                    include_once('views/widgets.php');
                ?>
				
				<div class="col-sm-9 padding-right">
					<div class="product-details"><!--product-details-->
						<div class="col-sm-5">
							<div class="view-product">
								<img src="<?= $actor->image ?>" alt="<?= $actor->alt ?>" />
							</div>
							<div id="similar-product" class="carousel slide" data-ride="carousel">
								
								  <!-- Wrapper for slides -->
								  <div class="carousel-inner">
									<?php foreach($actor->galery as $g): ?>
										<?php if($i%3 == 1): ?>
											<div class="item <?= $i == 1?'active':'' ?>">
										<?php endif; ?>
												<a href="<?= $g->src ?>" data-lightbox="roadtrip"><img src="<?= $g->src ?>" width="85" alt="<?= $g->alt ?>"></a>
										<?php if($i%3 == 0): ?>
											</div>
										<?php endif; ?>
											<?php $i++; ?>
									<?php endforeach; ?>
										
									</div>

								  <!-- Controls -->
								  <a class="left item-control" href="#similar-product" data-slide="prev">
									<i class="fa fa-angle-left"></i>
								  </a>
								  <a class="right item-control" href="#similar-product" data-slide="next">
									<i class="fa fa-angle-right"></i>
								  </a>
							</div>

						</div>
						<div class="col-sm-7">
							<div class="product-information"><!--/product-information-->
								<h2><?= $actor->name.' '.$actor->surname ?></h2>
								<p><strong>Rating:</strong> 
								<?php 
								if($actor->rating->avg == null)
								{
									echo "Actor not yet rated";

								}
								else
								{
									for($i = 0; $i < round($actor->rating->avg); $i++)
									{
										echo "<span>☆</span>";
									}
									

								}

								?>
								<p><strong>Bio:</strong></br><?= wordwrap($actor->description,30,"<br>\n", true) ?></p>
								<script>
									const ID = <?= $actor->id ?>
								</script>
								<div class="rating-system2">
														<h3>Rate this actor</h3>
														<input class="input rate-actor" type="radio" value="5" name='rate2' id="star5_2" />
														<label for="star5_2"></label>
													
														<input class="input rate-actor" type="radio" value="4" name='rate2' id="star4_2" />
														<label for="star4_2"></label>
													
														<input class="input rate-actor" type="radio" value="3" name='rate2' id="star3_2" />
														<label for="star3_2"></label>
													
														<input class="input rate-actor" type="radio" value="2" name='rate2' id="star2_2" />
														<label for="star2_2"></label>
													
														<input class="input rate-actor" type="radio" value="1" name='rate2' id="star1_2" />
														<label for="star1_2"></label>
														
														<div class="text"></div>
													
									</div>
									<p id="feedback_actor"></p>
							</div><!--/product-information-->
						</div>
					</div><!--/product-details-->
					
					<div class="category-tab shop-details-tab"><!--category-tab-->
						<div class="col-sm-12">
							<h3>Comments:</h3>
						</div>
						<div class="tab-content">
							
							
							<div class="tab-pane fade active in" id="reviews" >
								<div class="col-sm-12">
								<?php foreach($coments as $c): ?>
									<p><b>Posted by:</b> <?= $c->name.' '.$c->surname.', on '.date("d M Y", $c->created_at) ?></p>
									<p><?= $c->comment ?></p>
								<?php endforeach; ?>
									<p><b>Write Your Comment</b></p>
									<form action="php/actor_comment.php" method="post">
										<textarea name="body" ></textarea>
										<input type="hidden" name="id" value="<?= $actor->id ?>">
										<button type="submit" name="comment" class="btn btn-default pull-right">
											Submit
										</button>
									</form>
									<?php include "views/feedback.php"; ?>
								</div>
							</div>
							
						</div>
					</div><!--/category-tab-->
					
				
					
				</div>
			</div>
		</div>
	</section>