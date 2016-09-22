<?php

//TODO write a function for doing grid display then the conditional function calls this grid display function

function sdm_generate_fancy2_latest_downloads_display_output($get_posts, $args) {

    $output = "";
    $output .= '<link type="text/css" rel="stylesheet" href="' . WP_SIMPLE_DL_MONITOR_URL . '/includes/templates/fancy2/sdm-fancy-2-styles.css?ver=' . WP_SIMPLE_DL_MONITOR_VERSION . '" />';

    $count = 1;
    //$output .= '<ul class="sdm_fancy2_category_items">';
    foreach ($get_posts as $item) {
        $id = $item->ID;  //Get the post ID
        $button_text = isset($args['button_text'])? $args['button_text'] : '';
        $new_window = isset($args['new_window'])? $args['new_window'] : '';

        //Create a args array
        $args = array(
            'id' => $id,
            'fancy' => '2',
            'button_text' => $button_text,
            'new_window' => $new_window,
            'css_class' => 'sdm_fancy2_grid',
        );
        $output .= sdm_generate_fancy2_display_output($args);

        if ($count % 3 == 0) {//Clear after every 3 items in the grid
            //$output .= '<div class="sdm_clear_float"></div>';
        }
        $count++;
    }
    //$output .= '</ul>';
    //$output .= '<div class="sdm_clear_float"></div>';
    return $output;
}

function sdm_generate_fancy2_category_display_output($get_posts, $args) {

    $output = "";
    $output .= '<link type="text/css" rel="stylesheet" href="' . WP_SIMPLE_DL_MONITOR_URL . '/includes/templates/fancy2/sdm-fancy-2-styles.css?ver=' . WP_SIMPLE_DL_MONITOR_VERSION . '" />';

    $count = 1;
    //$output .= '<ul class="sdm_fancy2_category_items">';
    foreach ($get_posts as $item) {
        $id = $item->ID;  //Get the post ID
        $button_text = isset($args['button_text'])? $args['button_text'] : '';
        $new_window = isset($args['new_window'])? $args['new_window'] : '';

        //Create a args array
        $args = array(
            'id' => $id,
            'fancy' => '2',
            'button_text' => $button_text,
            'new_window' => $new_window,
            'css_class' => 'sdm_fancy2_grid',
        );
        $output .= sdm_generate_fancy2_display_output($args);

        if ($count % 3 == 0) {//Clear after every 3 items in the grid
            //$output .= '<div class="sdm_clear_float"></div>';
        }
        $count++;
    }
    //$output .= '</ul>';
    //$output .= '<div class="sdm_clear_float"></div>';
    return $output;
}

/*
 * Generates the output of a single item using fancy2 sytle
 * $args array can have the following parameters
 * id, fancy, button_text, new_window
 */

function sdm_generate_fancy2_display_output($args) {

    //Get the download ID
    $id = $args['id'];
    if (!is_numeric($id)) {
        return '<div class="sdm_error_msg">Error! The shortcode is missing the ID parameter. Please refer to the documentation to learn the shortcode usage.</div>';
    }

		$main_opts = get_option('sdm_downloads_options');

    $homepage = get_bloginfo('url');
    $download_url = $homepage . '/?smd_process_download=1&download_id=' . $id;

    // Get item permalink
    $permalink = get_permalink($id);

    // Get item thumbnail
    $item_download_thumbnail = get_post_meta($id, 'sdm_upload_thumbnail', true);
		/*$item_download_imagemode = get_post_meta($id, 'sdm_upload_imagemode', true);*/
		$item_category = wp_get_post_terms($id, 'sdm_categories')[0]->name;
		$item_permalink = get_permalink($id);

    // Get item title
    $item_title = get_the_title($id);
    $isset_item_title = isset($item_title) && !empty($item_title) ? $item_title : '';
		$item_thumbnail_image_desktop = get_field('thumbnail_image_desktop', $id);
		$item_thumbnail_image_tablet = get_field('thumbnail_image_tablet', $id);
		$item_thumbnail_image_mobile = get_field('thumbnail_image_mobile', $id);

		$output  = '<a href="'.$item_permalink.'" class="resources-list-card-link">';
			$output .= '<div class="resources-list-card">';
				$output .= '<div class="resources-list-card-image-wrapper">';
					$output .= '<img class="resources-list-card-image responsive-image"';
					$output .= 'desktop-src="'.$item_thumbnail_image_desktop.'" ';
					$output .= 'tablet-src="'.$item_thumbnail_image_tablet.'" ';
					$output .= 'mobile-src="'.$item_thumbnail_image_mobile.'" >';
				$output .= '</div>';
				$output .= '<div class="resources-list-card-info">';
					$output .= '<div class="resources-list-card-category">';
						$output .= $item_category;
					$output .= '</div>';
					$output .= '<div class="resources-list-card-title ellipsis-3lines">';
						$output .= $isset_item_title;
					$output .= '</div>';
				$output .= '</div>';
			$output .= '</div>';
		$output .= '</a>';

    return $output;
}
