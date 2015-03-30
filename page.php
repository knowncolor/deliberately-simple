<?php theme_include('partials/header'); ?>

<main>
	<article>
		<h1><a href="<?php echo page_url(); ?>"><?php echo page_title(); ?></a></h1>
		<?php echo page_content(); ?>
	</article>
</main>

<?php theme_include('partials/footer'); ?>