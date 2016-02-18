<section class="content_fullwidth clearfix">
			<h2 class="sub_title"><?php global $category; echo $category;?>の新着記事</h2>
			<ul>
			<?php
				global $num;
				$args=array(
					'posts_per_page'=>$num,
					'category_name'=>$category
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