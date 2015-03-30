<?php theme_include('partials/header'); ?>

<main>
	<article>
		<time datetime="<?php echo deliberately_simple_html5_datetime(article_time()); ?>"><?php echo article_date(); ?></time>
		<h1><a href="<?php echo article_url(); ?>"><?php echo article_title(); ?></a></h1>
		<p><?php echo article_description(); ?></p>
		<?php echo article_markdown(); ?>
	</article>
</main>

<?php theme_include('partials/footer'); ?>