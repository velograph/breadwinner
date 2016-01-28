<div class="bike-archive">

	<div class="bikes">

		<div class="section-header">

			<h4>Road</h4>

		</div>

		<!-- End Section header -->

		<div class="portal-container">

			<?php

				$args = array(
					'post_type' => 'product',
					'tax_query' => array(
						relation => 'AND',
						array(
							'taxonomy' => 'product_cat',
							'field' => 'slug',
							'terms' => 'bikes',
						),
						array(
							'taxonomy' => 'product_cat',
							'field' => 'slug',
							'terms' => 'road',
						),
					),
				);
				$query = new WP_Query($args);

				if($query->have_posts()) : ?>

				<?php while($query->have_posts()) : ?>

					<?php $query->the_post(); ?>

					<div class="portal">
						<a href="<?php the_permalink(); ?>">
							<?php the_post_thumbnail(); ?>
							<div class="overlay">&nbsp;</div>
							<h6 class="title"><?php the_title() ?></h6>
						</a>
					</div>

				<?php endwhile;
				wp_reset_query(); ?>

			<?php endif; ?>

		</div>

		<div class="section-header">

			<h4>Dirt</h4>

		</div>

		<!-- End Section header -->

		<div class="portal-container">

			<?php

				$args = array(
					'post_type' => 'product',
					'tax_query' => array(
						relation => 'AND',
						array(
							'taxonomy' => 'product_cat',
							'field' => 'slug',
							'terms' => 'bikes',
						),
						array(
							'taxonomy' => 'product_cat',
							'field' => 'slug',
							'terms' => 'dirt',
						),
					),
				);
				$query = new WP_Query($args);

				if($query->have_posts()) : ?>

				<?php while($query->have_posts()) : ?>

					<?php $query->the_post(); ?>

					<div class="portal">
						<a href="<?php the_permalink(); ?>">
							<?php the_post_thumbnail(); ?>
							<div class="overlay">&nbsp;</div>
							<h6 class="title"><?php the_title() ?></h6>
						</a>
					</div>

				<?php endwhile;
				wp_reset_query(); ?>

			<?php endif; ?>

		</div>

		<div class="section-header">

			<h4>Mountain</h4>

		</div>

		<!-- End Section header -->

		<div class="portal-container">

			<?php

				$args = array(
					'post_type' => 'product',
					'tax_query' => array(
						relation => 'AND',
						array(
							'taxonomy' => 'product_cat',
							'field' => 'slug',
							'terms' => 'bikes',
						),
						array(
							'taxonomy' => 'product_cat',
							'field' => 'slug',
							'terms' => 'mountain',
						),
					),
				);
				$query = new WP_Query($args);

				if($query->have_posts()) : ?>

				<?php while($query->have_posts()) : ?>

					<?php $query->the_post(); ?>

					<div class="portal">
						<a href="<?php the_permalink(); ?>">
							<?php the_post_thumbnail(); ?>
							<div class="overlay">&nbsp;</div>
							<h6 class="title"><?php the_title() ?></h6>
						</a>
					</div>

				<?php endwhile;
				wp_reset_query(); ?>

			<?php endif; ?>

		</div>

	</div>

</div>
