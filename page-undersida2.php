<?php get_header() ?>

		<main>
			<section>
				<div class="container">
					<div class="row">
						<div id="primary" class="col-xs-12 col-md-9 col-md-push-3">

      <?php
        if ( have_posts() ) {

									while ( have_posts() ) {
						
									the_post();
									the_content();
								}
							}
							?>
						
      </div>
						<aside id="secondary side-menu" class="col-xs-12 col-md-3 col-md-pull-9">
							
       <?php wp_nav_menu(
			array(
		
			)
			);

   // register_sidebar();
   //     dynamic_sidebar();

			?>
							</ul>
						</aside>
					</div>
				</div>
			</section>
		</main>

  <?php get_footer() ?>
