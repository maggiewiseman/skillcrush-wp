<article id="post-<?php the_ID(); ?>" class="post-entry">
	<div class="entry-wrap">
		<header class="entry-header">
      <div class="entry-meta">
		    <h3 class="entry-time"><?php the_date(); ?></h3>
	    </div>
			<h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
		</header>
		<div class="entry-summary">
		<?php
		if ( is_single() ) :
			/* translators: %s: Name of current post */
			the_content( sprintf(
				__( 'Continue reading %s', 'skillcrushstarter' ),
				the_title( '<span class="screen-reader-text">', '</span>', false )
			) );

			wp_link_pages( array(
				'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentyfifteen' ) . '</span>',
				'after'       => '</div>',
				'link_before' => '<span>',
				'link_after'  => '</span>',
				'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'twentyfifteen' ) . ' </span>%',
				'separator'   => '<span class="screen-reader-text">, </span>',
			) );
			else :

			/* translators: %s: Name of current post */
			the_excerpt( sprintf(
				__( 'Continue reading %s', 'skillcrushstarter' ),
				the_title( '<span class="screen-reader-text">', '</span>', false )
			) );

			wp_link_pages( array(
				'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentyfifteen' ) . '</span>',
				'after'       => '</div>',
				'link_before' => '<span>',
				'link_after'  => '</span>',
				'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'twentyfifteen' ) . ' </span>%',
				'separator'   => '<span class="screen-reader-text">, </span>',
			) );
			endif;
		?>
	</div><!-- .entry-content -->
    <footer class="entry-footer">
        <div class="entry-meta">
          <span class="entry-terms comments author">
            Written by <?php the_author(); ?>
            /
            Posted in <?php the_category(', '); ?>
            /
            <?php echo get_comments_number(); ?> comments
          </span>
        </div>
      </footer>
	</div>
</article>

