	<div class="post" id="post-<?php the_ID(); ?>">

		<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h2>
		<p class="small">
			<?php the_time('Y-m-d') ?> &nbsp;|&nbsp; 
			<!-- by <?php the_author() ?> -->
			[<?php the_category(', '); ?>]
			<?php
				if($post->comment_count > 0) { 
						echo ' &nbsp;|&nbsp; ';
						comments_popup_link('', '1 comment', '% comments'); 
				}
				
				edit_post_link('[edit]', ' &nbsp;|&nbsp; ', '');
			?>
		</p>

		<div class="entry">
			<?php the_content('Read the rest of this entry &raquo;'); ?>
		</div>

	</div> <!-- /post -->
