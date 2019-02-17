<div class="col-sm-3">
					<div class="left-sidebar">
						<h2>Category</h2>
						
						<div class="panel-group category-products" id="accordian"><!--category-productsr-->
						<?php foreach($category->presentCategories() as $c): ?>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="index.php?page=category&id=<?= $c->id ?>"><?= $c->name ?></a></h4>
								</div>
							</div>
						<?php endforeach; ?>
						</div><!--/category-products-->
					
					</div>
				</div>