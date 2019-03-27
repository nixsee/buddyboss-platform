<?php
/**
 * BuddyBoss - Members Media Entry
 *
 * @since BuddyBoss 1.0.0
 */
?>

<li class="lg-grid-1-5 md-grid-1-3 sm-grid-1-3" data-id="<?php bp_media_id(); ?>" data-date-created="<?php bp_media_date_created(); ?>">

    <div class="bb-photo-thumb">
        <a class="bb-open-media-theatre bb-photo-cover-wrap"
           data-id="<?php bp_media_id(); ?>"
           data-attachment-full="<?php bp_media_attachment_image(); ?>"
           data-activity-id="<?php bp_media_activity_id(); ?>"
           href="#">
            <img src="<?php bp_media_attachment_image_thumbnail(); ?>"/>
        </a>
        <div class="bb-media-check-wrap">
        </div>
    </div>

</li>
