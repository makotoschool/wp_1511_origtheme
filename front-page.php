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
			<h2>新着記事</h2>
			<ul>				
			<li class="post_prev inset"></li>
			<li class="post_prev inset"></li>
			<li class="post_prev inset"></li>
			<li class="post_prev inset"></li>
			</ul>
		</section>
		<section class="content_fullwidth">
			<h2>固定記事</h2>
			<article class="content_sentence_fullwidth">

				
			</article>			
		</section>
	</main>
<?php get_footer(); ?>	