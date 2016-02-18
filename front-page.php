<?php get_header();?>
	<main>
		<div class="gloval_main clearfix">
			<section class="contents">
				<article class="content_sentence inset">
					<?php if(have_posts()):while(have_posts()):the_post();?>							
						<h2 class="sub_title"><?php the_title(); ?></h2>
						<div class="content"><?php the_content(); ?></div>													
					<?php endwhile;endif;?>						
				</article>		

			</section>

			<?php get_sidebar(); ?>

		</div>
		<section class="content_fullwidth clearfix">
			<h2 class="sub_title">WEB新着記事</h2>
			<ul>
			<?php
				$args=array(
					'posts_per_page'=>4,
					'category_name'=>'web'
				); 
				$posts=get_posts($args);
				
				foreach($posts as $post):
					setup_postdata($post);?>
				<li class="post_prev inset">	
					<a href="<?php the_permalink( ); ?>"><h3><?php the_title(); ?></h3></a>
					<div class="post_prev_content">
						<?php the_post_thumbnail('thumbnail'); ?>
						<?php the_excerpt(); ?>
					</div>
				</li>
				<?php endforeach;?>
			</ul>
		</section>
		<section class="content_fullwidth clearfix">
			<h2 class="sub_title">DTP新着記事</h2>
			<ul>
			<?php
				$args=array(
					'posts_per_page'=>4,
					'category_name'=>'dtp'
				); 
				$posts=get_posts($args);
				
				foreach($posts as $post):
					setup_postdata($post);?>
				<li class="post_prev inset">	
					<a href="<?php the_permalink( ); ?>"><h3><?php the_title(); ?></h3></a>
					<div class="post_prev_content">
						<?php the_post_thumbnail('thumbnail'); ?>
						<?php the_excerpt(); ?>
					</div>
				</li>
				<?php endforeach;?>
			</ul>
		</section>
		<section class="content_fullwidth">
			<h2>固定記事</h2>
			<article class="content_sentence_fullwidth">

				
			</article>			
		</section>
	</main>
<?php get_footer(); ?>	