<?php
if( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
}

$events_label_plural = tribe_get_event_label_plural();

$posts = tribe_get_list_widget_events();

if( $posts ) : ?>

	<ol class="hfeed vcalendar">
		<?php
		foreach ( $posts as $post ) :
			setup_postdata( $post );
            ?>
			<li class="tribe-events-list-widget-events <?php tribe_events_event_classes() ?>">

                <?php do_action( 'tribe_events_list_widget_before_the_event_title' ); ?>
                <div class="list-date">
                    <span class="list-month"><?php echo tribe_get_start_date( $post->ID, false, 'F' ) ?></span>
                    <span class="list-daynumber"><?php echo tribe_get_start_date( $post->ID, false, 'd' ) ?></span>
                    <span class="list-dayname"> <?php echo tribe_get_start_date( $post->ID, false, 'l' ) ?></span>
                </div>
				<h4 class="entry-title summary">
					<a href="<?php echo esc_url( tribe_get_event_link() ); ?>" rel="bookmark"><?php the_title(); ?></a>
				</h4>
					<div class="list-info-link"><a href="<?php echo esc_url( tribe_get_event_link() ); ?>" rel="bookmark">Info &amp; Anfahrt &raquo;</a></div>

				<?php do_action( 'tribe_events_list_widget_after_the_event_title' ); ?>

				<?php do_action( 'tribe_events_list_widget_before_the_meta' ) ?>

				<?php do_action( 'tribe_events_list_widget_after_the_meta' ) ?>
			</li>
		<?php
		endforeach;
		?>
	</ol><!-- .hfeed -->

<?php
else : ?>
	<p><?php printf( __( 'There are no upcoming %s at this time.', 'the-events-calendar' ), strtolower( $events_label_plural ) ); ?></p>
<?php
endif;
