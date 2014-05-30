<?php get_header(); ?>
<div class="blog-body">
	<div class="sidebar">
		<?php if ( have_posts() ) : ?>
			<div class="list-group">
				<div class="list-group-item">
					<input class="form-control" type="text">
				</div>					
				<?php while ( have_posts() ) : ?>
					<a class="list-group-item" href="#"><?php the_post(); the_title();?></a>
				<?php endwhile; ?>	
			</div>
		<?php endif; ?>
	</div>
	<div class="content">
		TITLE
	</div>
</div>