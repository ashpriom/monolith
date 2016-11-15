<?php

/**

Template Name: Monolith Homepage

 */



get_header(); ?>



	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<div class="row">
				<?php global $post;
	          	$args = array( 'posts_per_page' => 2);
	          	$monolithposts = get_posts( $args );
	          	foreach( $monolithposts as $post ) :  setup_postdata($post); ?>
	            	<article id="post-<?php the_ID(); ?>" class="col-md-6">
						<?php if ( has_post_thumbnail() ): ?>
							<div class="article_thumbnail">
								<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('article-full'); ?></a>
							</div>
						<?php endif; ?>
						<h2 class="article_title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
					</article>
	        	<?php endforeach; ?>
            </div>

            <div class="row">
				<?php global $post;
	          	$args = array( 'posts_per_page' => 2,'offset'=> 2);
	          	$monolithposts = get_posts( $args );
	          	foreach( $monolithposts as $post ) :  setup_postdata($post); ?>
	            	<article id="post-<?php the_ID(); ?>" class="col-md-6">
						<?php if ( has_post_thumbnail() ): ?>
							<div class="article_thumbnail">
								<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('article-full'); ?></a>
							</div>
						<?php endif; ?>
						<h2 class="article_title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
					</article>
	        	<?php endforeach; ?>
            </div>

            <div class="row">
				<?php global $post;
	          	$args = array( 'posts_per_page' => 2,'offset' => 4);
	          	$monolithposts = get_posts( $args );
	          	foreach( $monolithposts as $post ) :  setup_postdata($post); ?>
	            	<article id="post-<?php the_ID(); ?>" class="col-md-6">
						<?php if ( has_post_thumbnail() ): ?>
							<div class="article_thumbnail">
								<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('article-full'); ?></a>
							</div>
						<?php endif; ?>
						<h2 class="article_title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
					</article>
	        	<?php endforeach; ?>
            </div>

		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_sidebar(); ?>

<?php get_footer(); ?>

