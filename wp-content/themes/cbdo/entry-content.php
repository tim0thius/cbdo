<section class="entry-content">
		<div class="grid grid--center">
			<div class="grid__item palm--one-whole lap--one-third one-quarter">
				<?php if ( has_post_thumbnail() ) { the_post_thumbnail('post-thumbnail', ['class' => 'entry-image']); } ?>
			</div><!-- 
			--><div class="grid__item palm--one-whole lap--two-thirds three-quarters">
				<header>
					<?php if ( is_singular() ) { echo '<h1 class="entry-title">'; } else { echo '<h2 class="entry-title">'; } ?><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="bookmark"><?php the_title(); ?></a>
					
					<?php if ( is_singular() ) { echo '</h1>'; } else { echo '</h2>'; } ?>
					<span class="entry-date"><?php the_date(); ?></span>
				</header>
				<p><?php the_content(); ?></p>
				
			</div>	
	</div>
</section>