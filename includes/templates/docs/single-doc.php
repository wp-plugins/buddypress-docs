<?php if ( have_posts() ) : while ( have_posts() ) : the_post() ?>

<?php include( apply_filters( 'bp_docs_header_template', $template_path . 'docs-header.php' ) ) ?>

<h2><?php the_title() ?> 
	<?php if ( bp_docs_current_user_can( 'edit' ) ) : ?>
		
		<a class="button" href="<?php bp_docs_group_doc_permalink() ?>/edit"><?php _e( 'Edit', 'bp-docs' ) ?></a> 

	<?php endif ?>
</h2> 

<?php the_content() ?>

<div class="doc-meta">
	<?php do_action( 'bp_docs_single_doc_meta' ) ?>
</div>

<?php comments_template() ?>

<?php endwhile; endif ?>