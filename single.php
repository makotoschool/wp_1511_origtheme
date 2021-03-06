<?php get_header();?>
	<main>
		<div class="gloval_main clearfix">
			<section class="contents">
			
					<?php if(have_posts()):while(have_posts()):the_post();?>													
						<article class="content_sentence inset">
							<h2 class="sub_title"><?php the_title(); ?></h2>
							<?php the_category();?>	
							<div class="content"><?php the_content(); ?></div>																			
							<div class="link">	
								<?php previous_post_link('%link','前の記事',TRUE);?>
								<?php next_post_link('%link','次の記事',TRUE);?>
							</div>
						</article>	
					<?php endwhile;endif;?>						
					

			</section>
			<?php			
				if(in_category('web')){				
					get_sidebar('web');				
				}elseif(in_category('dtp')){
					get_sidebar('dtp');
				}elseif('blog'){
					get_sidebar('blog');
				}else{				
			 	get_sidebar('single');
			 	}			 
			 ?>
		</div>
	</main>
<?php get_footer(); ?>	