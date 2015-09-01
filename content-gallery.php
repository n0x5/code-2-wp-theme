<div class="content">
		<div class="metainfo">
		<div class="metatitle1">
		<?php the_time('F jS, Y') ?><br />
                <?php the_category(', '); ?><br />
<span class="post-format">
				<a class="format-gallery" href="<?php echo esc_url( get_post_format_link( 'gallery' ) ); ?>"><?php echo get_post_format_string( 'gallery' ); ?></a>
			</span><br />
                </div><br />
		</div>
		<div class="entry">
 <h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h2>
<div class="post-entry"><?php the_content('more))'); ?></div>
<div class="gallery">
<?php
	$images =& get_children( array (
		'post_parent' => $post->ID,
                 'order' => 'ASC',
		'post_type' => 'attachment',
		'post_mime_type' => 'image'
	));

	if ( empty($images) ) {
		// no attachments here
	} else {
		foreach ( $images as $attachment_id => $attachment ) {
                         $meta = wp_get_attachment_metadata($attachment_id);
                         $meta2 = "$meta[width] x $meta[height]";
			 $imgthumb = wp_get_attachment_image( $attachment_id, 'thumbnail' );
          $imgurl = esc_url( wp_get_attachment_url($attachment_id) );
 //                       $imgurl = wp_get_attachment_link($id) );
    
           echo "<div class=\"imgc\"><a href=\"$imgurl\">$imgthumb </a><div class=\"dimensions\"> $meta2 </div> </div>";
           
    
		}
	}
?>


		</div>
	</div>
</div>

