<?php

if (!defined('WP_UNINSTALL_PLUGIN')) {
    exit();
}

delete_option('kt_color_grid_version');
delete_option('kt_color_grid_custom');
delete_option('kt_color_grid_sets');
