<?php
					$partner = array ("
					images/logo-sample-01.jpg", 
					"images/logo-sample-02.jpg",
					"images/logo-sample-03.png",
					"images/logo-sample-04.jpg",
					"images/logo-sample-05.jpg",
					"images/logo-sample-06.png",)
				?>
				
				<?php
				  foreach ($partner as $key){
					echo '<div class="col-md-2"><img src="'.$key.'" class="img-responsive" /></div>';
				}
				?>