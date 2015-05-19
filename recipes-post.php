			<!-- REPATER FOR RECIPE BOX -->
			<?php if( have_rows('recipe_box') ): ?>
            <a href="#sp-dd-btn">
                    <div class="recipe-box-btn">
                        RECIPE
                    </div>
            </a>
    		<div class="recipe-box">
    		<?php while( have_rows('recipe_box') ): the_row(); ?>

 			<div class="recipe-header-container">
 				<h2><?php the_sub_field('heading_rb'); ?></h2>
        	</div><!--recipe-body-container-->

        	<div class="recipe-body-container">
        		<section>
        			<?php the_sub_field('recipe_rb'); ?>
        		</section>
        	</div><!--recipe-body-container-->
        	<!-- REPATER FOR RECIPE BOX ends -->
    		<?php endwhile; ?>
    		</div><!--Recipe-box-->
			<?php endif; ?>