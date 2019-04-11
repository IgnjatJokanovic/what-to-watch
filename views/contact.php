<div id="contact-page" class="container mt-100">
    	<div class="bg">
	    	<div class="row">    		
	    		<div class="col-sm-12">    			   			
					<h2 class="title text-center">Contact <strong>Us</strong></h2>    			    				    				
				</div>			 		
			</div>    	
    		<div class="row">  	
	    		<div class="col-sm-8">
	    			<div class="contact-form mt-200">
	    				<div class="status alert alert-success" style="display: none"></div>
						<?php include "views/feedback.php"; ?>
				    	<form id="main-contact-form" action="php/contact.php" class="contact-form row" name="contact-form" method="post">
				            <div class="form-group col-md-12">
				                <textarea name="message" id="message" required="required" class="form-control" rows="8" placeholder="Your Message Here"></textarea>
				            </div>                        
				            <div class="form-group col-md-12">
				                <input type="submit" name="submit" class="btn btn-primary pull-right" value="Submit">
				            </div>
				        </form>
	    			</div>
	    		</div>	
	    	</div>  
    	</div>	
    </div><!--/#contact-page-->