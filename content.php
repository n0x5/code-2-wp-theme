<div class="content">
		<div class="metainfo">
		<div class="metatitle1">
		<?php the_time('F jS, Y') ?><br />
		<?php the_category(', '); ?><br />

<span class="post-format">
                                <a class="format-standard" href="?post_format=standard"><?php echo get_post_format_string( 'standard' ); ?></a>
                        </span>


                </div><br />
		</div>
		<div class="entry">
			<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h2>
			<div class="post-entry"><?php the_content('more))'); ?></div>
		</div>
</div>
