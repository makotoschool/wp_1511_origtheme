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
		<?php
		$num=4;
		$category='web';
		 get_template_part('new_post');
		$category='dtp';
		 get_template_part('new_post'); 
		$category='blog';
		 get_template_part('new_post'); 
		 
		 ?>
		
		<section class="content_fullwidth">
			<h2>固定記事</h2>
			<article class="content_sentence_fullwidth">

				
			</article>			
		</section>
	</main>
<?php get_footer(); ?>	