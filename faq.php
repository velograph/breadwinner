<?php
/**
 * Template Name: FAQ
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package Breadwinner Cycles
 */

get_header(); ?>

<div class="faqs">

	<?php while ( have_posts() ) : the_post(); ?>

		<div class="section-title">

			<h2><?php the_title(); ?></h2>

		</div>

		<?php if( have_rows('question_and_answer') ) : ?>

			<div class="faq-container">
		    <?php while ( have_rows('question_and_answer') ) : ?>

		        <?php the_row(); ?>

				<div class="faq">
			        <?php if( get_row_layout() == 'faq' ) : ?>

						<div class="question"><?php the_sub_field('question'); ?></div>
			            <div class="answer"><?php the_sub_field('answer'); ?></div>

			        <?php endif; ?>
				</div>

		    <?php endwhile; ?>

			</div>

		<?php endif; ?>

	<?php endwhile; // end of the loop. ?>

</div>

<?php get_footer(); ?>
