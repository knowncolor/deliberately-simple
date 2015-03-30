<?php theme_include('partials/header'); ?>

<main>
	<?php if(has_posts()): ?> 

	    <?php $i = 0; while(posts()): $i++; ?>
			<article>
				<time datetime="<?php echo deliberately_simple_html5_datetime(article_time()); ?>"><?php echo article_date(); ?></time>
				<h1><a href="<?php echo article_url(); ?>"><?php echo article_title(); ?></a></h1>
				<p><?php echo article_description(); ?></p>
			</article>
		<?php endwhile; ?>
		
	<?php else: ?>
		<p>There are no posts - get to it!</p>
	<?php endif; ?>  
</main>

<?php theme_include('partials/footer'); ?>
