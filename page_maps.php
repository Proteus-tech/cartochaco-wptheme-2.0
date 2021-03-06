<?php get_header(); ?>

<?php if(have_posts()) : the_post(); ?>
	<section id="content" class="single-post bblanco">
		<header class="single-post-header">
			<div class="container">
				<div class="twelve columns">
					<h1 class="mayusculas"><?php the_title(); ?></h1>
				</div>
			</div>
		</header>
		<div class="container">
			<div class="twelve columns">
				<?php the_content(); ?>
				<?php
				wp_link_pages( array(
					'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'jeo' ) . '</span>',
					'after'       => '</div>',
					'link_before' => '<span>',
					'link_after'  => '</span>',
				) );
				?>
			</div>
		</div>
	</section>
<?php endif; ?>

<?php get_footer(); ?>