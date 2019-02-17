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
												<a href="<?= $g->src ?>"><img src="<?= $g->src ?>" width="85" alt="<?= $g->alt ?>"></a>
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
								<p>Rating: 
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
								<p>Bio:</br><?= wordwrap($actor->description,30,"<br>\n", true) ?></p>
								<div class="rating-system2">
														<h3>Rate this actor</h3>
														<input class="input" type="radio" value="1" name='rate2' id="star5_2" />
														<label for="star5_2"></label>
													
														<input class="input" type="radio" value="2" name='rate2' id="star4_2" />
														<label for="star4_2"></label>
													
														<input class="input" type="radio" value="3" name='rate2' id="star3_2" />
														<label for="star3_2"></label>
													
														<input class="input" type="radio" value="4" name='rate2' id="star2_2" />
														<label for="star2_2"></label>
													
														<input class="input" type="radio" value="5" name='rate2' id="star1_2" />
														<label for="star1_2"></label>
														
														<div class="text"></div>
													
									</div>
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
									<form action="<?= $_SERVER['PHP_SELF'] ?>?page=actor&id=<?= $id ?>" method="post">
										<textarea name="body" ></textarea>
										
										<button type="submit" name="comment" class="btn btn-default pull-right">
											Submit
										</button>
									</form>
									<?php
									if(isset($_POST['comment']))
									{
										$err = array();
										extract($_POST);
										$validator = "/^[A-Za-z0-9\s]+$/";
										if(!isset($_SESSION['user']))
										{
											array_push($err, "<p class='text-danger'>You must be logged in to comment</p>");
										}
										if(isset($_SESSION['user']) && $body == '')
										{
											array_push($err, "<p class='text-danger'>You must write somethin in your comment</p>");
										}
										if(isset($_SESSION['user']) && $body != '' && !preg_match($validator, $body))
										{
											array_push($err, "<p class='text-danger'>You can write only numbers and letters in comment</p>");
										}
										if(empty($err))
										{
											
											$instance->comment = $body;
											$instance->created_at = time();
											$instance->id_user = $_SESSION['user']->id;
											$instance->id_actor = $id;
											$instance->save();
											header("Refresh:0");
											ob_end_flush(); 

										}
										else{
											foreach($err as $e)
											{
												echo $e;
											}
										}

									}



									?>
								</div>
							</div>
							
						</div>
					</div><!--/category-tab-->
					
				
					
				</div>
			</div>
		</div>
	</section>