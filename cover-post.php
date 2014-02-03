<?php
/**
 * @package Beats
 */
?>

<?php if ('' != get_the_post_thumbnail()) { ?>
	<div id="cover" class="cover featured-image">
		<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
		<div class="background" style="background-image: url('<?php echo $image[0]; ?>');"></div>
		<header>
			<h2><?php the_category(', ') ?></h2>
			<h1><a href="#"><?php the_title(); ?></a></h1>
			<span>
				<?php beats_posted_on(); ?>
			</span>
		</header>
	</div>
<?php } ?>