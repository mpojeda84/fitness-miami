<?php 
function ulysses_blog( $atts ){
	// START BLOG SECTION 
	<div class="blog-post-section carousel" id="<?php echo esc_attr( $section_id ); ?>">
		<div class="container">
			<div class="site-title">
				<p><?php echo esc_attr( $sub_title ); ?></p>
				<h1><?php echo esc_attr( $title ); ?></h1>
				<div class="site-dots d-text-c carousel-arrows"><i class="fa fa-times-2"></i><i class="fa fa-times-2"></i></div>
			</div>
			<!-- Blog Post Owl Carousel -->
			<div id="blog-post" class="trainers-slider blog-post">
				<?php 
				query_posts('posts_per_page='.get_option('posts_per_page'));			
				while ( have_posts() ) : the_post();
					$the_day = get_the_date( 'd', get_the_ID() );
					$the_month = get_the_date( 'M', get_the_ID() );
					$the_year = get_the_date( 'y', get_the_ID() );
					?>
					<div class="item">
						<div class="blog-entry">
							<div class="entry-date"><span class="d-text-c"><?php echo esc_attr( $the_day ); ?></span><?php echo esc_attr( $the_month ); ?></div>
							<div class="entry-cover">
								<?php 
								if ( has_post_thumbnail() ) : ?>
									<a href="<?php echo esc_url( get_permalink() ); ?>"><?php the_post_thumbnail('thumb-495-495'); ?></a>
								<h2><a href="<?php echo esc_url( get_permalink() ); ?>"><?php the_title(); ?></a></h2>