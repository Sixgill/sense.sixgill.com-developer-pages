<?php
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
/*
Plugin Name: Async JavaScript
Plugin URI: http://cloughit.com.au/product/async-javascript/
Description: Async JavaScript adds a 'async' or 'defer' attribute to scripts loaded via wp_enqueue_script
Version: 1.16.06.22
Author: Clough I.T. Solutions
Author URI: http://www.cloughit.com.au/
Text Domain: async-javascript
License: GNU General Public License v2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
*/
/**
 *  aj_admin_init()
 *
 *  register admin stylesheets and javascripts
 *
 *  @param      n/a
 *  @return     n/a
 */
add_action('admin_init','aj_admin_init');
function aj_admin_init() {
    define( 'AJ_PLUGIN_URL', trailingslashit( plugin_dir_url( __FILE__ ) ) );
    define( 'AJ_PLUGIN_DIR', trailingslashit( plugin_dir_path( __FILE__ ) ) );
    define( 'AJ_VERSION', '1.16.06.22' );
    wp_register_style(
        'aj_admin_styles',
        plugins_url('/css/admin.css',__FILE__)
    );
    wp_enqueue_style('aj_admin_styles');
    wp_enqueue_script(
        'aj_admin_scripts',
        plugins_url('/js/admin.js',__FILE__),
        array('jquery'),
        time()
    );
    wp_localize_script( 'aj_admin_scripts', 'aj', array( 'ajaxurl' => admin_url( 'admin-ajax.php' ) ) );
    register_setting( 'aj_options', 'aj_enabled' );
    register_setting( 'aj_options', 'aj_method' );
    register_setting( 'aj_options', 'aj_exclusions' );
    register_setting( 'aj_options', 'aj_upgrade_notice' );
    register_setting( 'aj_options', 'autoptimize_enabled' );
    register_setting( 'aj_options', 'aj_autoptimize_enabled' );
    $autoptimize_enabled = get_option('autoptimize_enabled');
    $aj_autoptimize_enabled = get_option('aj_autoptimize_enabled');
    if ( $autoptimize_enabled !== false && $aj_autoptimize_enabled === false ) {
        $aj_autoptimize_enabled = $autoptimize_enabled;
        update_option( 'aj_autoptimize_enabled', $aj_autoptimize_enabled );
        delete_option( 'autoptimize_enabled' );
    }
}
/**
 *  async_javascript_menu()
 *
 *  register admin menu
 *
 *  @param      n/a
 *  @return     n/a
 */
add_action('admin_menu','async_javascript_menu');
function async_javascript_menu() {
    //add_menu_page('Async JavaScript Admin','Async JavaScript','manage_options','async-javascript','async_javascript_admin');
	add_submenu_page(
		'options-general.php',
		'Async JavaScript Admin',
		'Async JavaScript',
		'manage_options',
		'async-javascript',
		'async_javascript_admin'
	);

}
/**
 *  async_javascript_admin()
 *
 *  admin page
 *
 *  @param      n/a
 *  @return     n/a
 */
function async_javascript_admin() {
    // Display settings saved message if optioned updated
    /*if( isset($_GET['settings-updated']) && $_GET['settings-updated'] == 'true' ) {
        echo '<div class="updated"><p><strong>Settings saved.</strong></p></div>';
    }*/
    // load settings from database
    ?>
    <div class="wrap">
        <h2>Async JavaScript Settings</h2>
        <form action="options.php" method="post" name="options">
            <?php
            settings_fields( 'aj_options' );
            do_settings_sections( 'aj_options' );
            $aj_enabled = (get_option('aj_enabled') == 1) ? array(true,'checked','') : array(false,'','style="display:none;"');
            $aj_method = (get_option('aj_method') != 'async') ? 'defer' : 'async';
            $aj_exclusions = get_option('aj_exclusions');
            $aj_autoptimize_enabled = (get_option('aj_autoptimize_enabled') == 1) ? 'checked' : '';
            ?>
            <table class="form-table" width="100%" cellpadding="10">
                <tbody>
                    <tr>
                        <td style="width:75%;vertical-align: top;">
                            <table class="form-table" width="100%" cellpadding="10">
                                <tbody>
                                    <tr><td scope="row" align="left" colspan="2"><h3>Enable Async JavaScript</h3></td></tr>
                                    <tr><td scope="row" align="left" colspan="2">When you enable Async JavaScript, when a script is loaded via the 'wp_enqueue_script' method, this plugin will add a 'async' or 'defer' attribute.</td></tr>
                                    <tr><td scope="row" align="left" colspan="2">This action helps to eliminate render-blocking JavaScript in above-the-fold content.  This can also help to increase your pagespeed which in turn will assist in improving your page ranking.</td></tr>
                                    <tr>
                                        <td scope="row" align="left" colspan="2">
                                            There are several ways an external script can be executed:
                                            <ul style="list-style:disc inside;">
                                                <li>If async is present: The script is executed asynchronously with the rest of the page (the script will be executed while the page continues the parsing)</li>
                                                <li>If async is not present and defer is present: The script is executed when the page has finished parsing</li>
                                                <li>If neither async or defer is present: The script is fetched and executed immediately, before the browser continues parsing the page</li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr><td scope="row" align="left" colspan="2"><strong>Note: </strong>There have been instances where enabling Async JavaScript has 'broken' the javascript delivery.  Should this happen to you, I highly recommend installing the <a href="https://wordpress.org/plugins/autoptimize/" target="_blank">Autoptimize</a> plugin which will combine your javascript, further enhancing pagespeed and eliminating this issue.</td></tr>
                                    <tr>
                                        <td scope="row" align="left" style="width:20%;"><label>Enable Async JavaScript</label></td>
                                        <td scope="row" align="left"><input type="checkbox" name="aj_enabled" id="aj_enabled" value="1" <?php echo $aj_enabled[1]; ?> /></td>
                                    </tr>
                                </tbody>
                            </table>
                            <table class="form-table aj_method" width="100%" cellpadding="10">
                                <tbody>
                                    <tr><td scope="row" align="left" colspan="2"><h3>Async JavaScript Method</h3></td></tr>
                                    <tr><td scope="row" align="left" colspan="2">Please select the method (async or defer) that you wish to enable:</td></tr>
                                    <tr>
                                        <td scope="row" align="left" style="width:20%;">Method</td>
                                        <td scope="row" align="left"><input type="radio" name="aj_method" value="async" <?php if ($aj_method == 'async') { echo 'checked'; } ?> /> Async <input type="radio" name="aj_method" value="defer" <?php if ($aj_method == 'defer') { echo 'checked'; } ?> /> Defer </td>
                                    </tr>
                                </tbody>
                            </table>
                            <table class="form-table" width="100%" cellpadding="10">
                                <tbody>
                                    <tr><td scope="row" align="left" colspan="2"><hr/><h3>Script Exclusion</h3></td></tr>
                                    <tr><td scope="row" align="left" colspan="2"><hr/>Please list any scripts which you would like excluded from being Async/Defered during page load. (comma seperated list eg: jquery.js,jquery-ui.js)</td></tr>
                                    <tr>
                                        <td scope="row" align="left" style="width:20%;">Exclusions</td>
                                        <td scope="row" align="left"><textarea name="aj_exclusions" style="width:95%;"><?php echo $aj_exclusions; ?></textarea></td>
                                    </tr>
                                </tbody>
                            </table>
                            <table class="form-table aj_method" width="100%" cellpadding="10">
                                <tbody>
                                    <tr><td scope="row" align="left" colspan="2"><hr/><h3>Async JavaScript For Plugins</h3></td></tr>
                                    <tr><td scope="row" align="left" colspan="2"><hr/><strong>Note: </strong>This will attempt to add the 'async' or 'defer' attribute to scripts loaded via a plugin (ie, not via 'wp_enqueue_script').  If you have a plugin that you would like added to this list please lodge a ticket at <a href="http://cloughit.com.au/support/">http://cloughit.com.au/support/</a></td></tr>
                                    <?php
                                    $plugins = false;
                                    if (is_plugin_active('autoptimize/autoptimize.php')) {
                                        ?>
                                        <tr><td scope="row" align="left" colspan="2"><hr/><h4>Autoptimize - <a href="https://wordpress.org/plugins/autoptimize/" target="_blank"><?php echo 'https://wordpress.org/plugins/autoptimize/'; ?></a></h4></td></tr>
                                        <tr>
                                            <td scope="row" align="left" style="width:20%;"><label>Enable Autoptimize Support</label></td>
                                            <td scope="row" align="left"><input type="checkbox" name="aj_autoptimize_enabled" value="1" <?php echo $aj_autoptimize_enabled; ?> /></td>
                                        </tr>
                                        <?php
                                        $plugins = true;
                                    }
									if ( !$plugins ) {
										?>
										<tr><td scope="row" align="left" colspan="2">No supported plugins installed or activated.</td></tr>
										<?php
									}
                                    ?>
                                </tbody>
                            </table>
                            <?php submit_button(); ?>
                        </td>
                        <td style="width:25%;vertical-align: top;">
                            <a href="http://cloughit.com.au/product/async-javascript-pro/" target="_blank"><img src="<?php echo AJ_PLUGIN_URL; ?>images/async-javascript-pro.jpg" style="max-width:100%;"></a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </form>
    </div>
    <?php
}
/**
 *  async_js()
 *
 *  add 'async' or 'defer' attribute to '<script>' tasks called via wp_enqueue_script using the 'script_loader_tag' filter
 *
 *  @param      string      $tag        The <script> tag for the enqueued script.
 *  @param      string      $handle     The script's registered handle.
 *  @param      string      $src        The script's source URL.
 *  @return     string      $tag        Modified <script> tag
 *
 */
add_filter('script_loader_tag','async_js',20,3);
function async_js($tag,$handle,$src) {
    $aj_enabled = (get_option('aj_enabled') == 1) ? true : false;
    $aj_method = (get_option('aj_method') != 'async') ? 'defer' : 'async';
    $aj_exclusions = get_option('aj_exclusions');
    $array_exclusions = !empty($aj_exclusions) ? explode(',',$aj_exclusions) : array();
    if (false !== $aj_enabled && false === is_admin()) {
        if (is_array($array_exclusions) && !empty($array_exclusions)) {
            foreach ($array_exclusions as $exclusion) {
                if ( $exclusion != '' ) {
                    if (false !== strpos(strtolower($src),strtolower($exclusion))) {
                        return $tag;
                    }
                }
            }
        }
		$tag = str_replace( 'src=', $aj_method . "='" . $aj_method . "' src=", $tag );
        return $tag;
    }
    return $tag;
} // end async_js()
/**
 *  my_autoptimize_defer()
 *
 *  Adds support for Autoptimize plugin.  Adds 'async' attribute to '<script>' tasks called via autoptimize_filter_js_defer filter
 *  Autoptimize: https://wordpress.org/plugins/autoptimize/
 *
 *  @param      string      $defer      current value of $defer as passed to function
 *  @return     string                  'async' attribute
 */
add_filter('autoptimize_filter_js_defer','my_autoptimize_defer',11);
function my_autoptimize_defer($defer) {
    $aj_enabled = (get_option('aj_enabled') == 1) ? true : false;
    $aj_method = (get_option('aj_method') != 'async') ? 'defer' : 'async';
    $aj_autoptimize_enabled = (get_option('aj_autoptimize_enabled') == 1) ? true : false;
    if (false !== $aj_enabled && false === is_admin()) {
        if (false !== $aj_autoptimize_enabled) {
            return " " . $aj_method . "='" . $aj_method . "' ";
        }
    }
}
?>