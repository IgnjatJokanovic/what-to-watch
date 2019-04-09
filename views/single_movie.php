<?php

	include_once('models/Movie.php');
	include_once('models/ComentMovie.php');
	use models\ComentMovie;
	use models\Movie;
	ob_start();
	if(isset($_GET['id']))
	{
		$movie = new Movie();
		$id = $_GET['id'];
		$movie->findById($id);
		$instance = new ComentMovie();
		$coments = $instance->all($id);
		$i =1;
		if(empty($movie))
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
								<img src="<?= $movie->image ?>" alt="<?= $movie->alt ?>" />
							</div>
							<div id="similar-product" class="carousel slide" data-ride="carousel">
								
								  <!-- Wrapper for slides -->
								  <div class="carousel-inner">
									<?php foreach($movie->galery as $g): ?>
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
								<h2><?= $movie->title ?></h2>
								<p><strong>Rating:</strong> 
								<?php 
								if($movie->rating->avg == null)
								{
									echo "Movie not yet rated";

								}
								else
								{
									for($i = 0; $i < round($movie->rating->avg); $i++)
									{
										echo "<span>☆</span>";
									}
									

								}

								?>
								</p>
								<script>
									const ID = <?= $movie->id ?>
								</script>
								
								<p><strong>Country: </strong><?= $movie->country ?></p>
								<p><strong>Release date: </strong><?= date("d M Y", $movie->release) ?></p>
								<p><strong>Actors: </strong></p>
								<?php foreach($movie->actors as $a): ?>
									<a href="index.php?page=actor&id=<?= $a->id ?>"><?= $a->name.' '.$a->surname ?></a></br>
								<?php endforeach; ?>
								<p><strong>Categories: </strong></p>
								<?php foreach($movie->categories as $c): ?>
									<div class='badge badge-light'><?= strtoupper($c->name) ?></div>
								<?php endforeach; ?>
								<p><strong>Storyline:</strong></br><?= wordwrap($movie->story,30,"<br>\n", true) ?></p>
								<?php if(time() >= $movie->release): ?>
								<div class="rating-system2">
														<h3>Rate this movie</h3>
														<input class="input rate-movie" type="radio" value="5" name='rate2' id="star5_2" />
														<label for="star5_2"></label>
													
														<input class="input rate-movie" type="radio" value="4" name='rate2' id="star4_2" />
														<label for="star4_2"></label>
													
														<input class="input rate-movie" type="radio" value="3" name='rate2' id="star3_2" />
														<label for="star3_2"></label>
													
														<input class="input rate-movie" type="radio" value="2" name='rate2' id="star2_2" />
														<label for="star2_2"></label>
													
														<input class="input rate-movie" type="radio" value="1" name='rate2' id="star1_2" />
														<label for="star1_2"></label>
														
														<div class="text"></div>
													
									</div>
							<?php endif; ?>
							<p id="feedback_movie"></p>
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
									<p><b>Posted by:</b>&nbsp;<img src="<?= $c->src ?>" alt="<?= $c->alt ?>" width="50"/>&nbsp;<?= $c->name.' '.$c->surname.', on '.date("d M Y", $c->created_at) ?></p>
									<p><?= $c->comment ?></p>
								<?php endforeach; ?>
									<p><b>Write Your Comment</b></p>
									<form action="<?= $_SERVER['PHP_SELF'] ?>?page=movie&id=<?= $id ?>" method="post">
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
											array_push($err, "<p class='text-danger text-center'>You must write somethin in your comment</p>");
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
											$instance->id_movie = $id;
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