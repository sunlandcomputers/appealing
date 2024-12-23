<?php
// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}
/* ------------------------------------------------------------------------ *
 * Setting Registration for theme Appealing
 * ------------------------------------------------------------------------ */

/**
 * Initializes the theme options page by registering the Sections,
 * Fields, and Settings.
 *
 * This function is registered with the 'admin_init' hook.
 */
add_action( 'admin_init', 'appealing_add_theme_settings' );
add_action( 'admin_menu', 'appealing_add_options_page' );
/**
 * Add theme menu
 *
 * @since 1.0.6
 * @uses add_theme_page()
 * $page_title, $menu_title, $capability, $menu_slug, $function
 */

function appealing_add_options_page() {

    add_theme_page(

        __( 'Instructions Etc', 'appealing' ),
        __( 'Theme Overview', 'appealing' ),
        'edit_theme_options',
        'appealing_page_elements',
        'appealing_display_options_page'
    );
}

/**
 * Add theme settings and section
 *
 * @since 1.0.6
 * @uses add_settings_section()
 * $id, $title, $callback, $page
 */
function appealing_add_theme_settings() {

        add_settings_section (
            'appealing_page_section',
            __( 'Theme Overview', 'appealing' ),
            'appealing_options_page_callback',
            'appealing_page_elements'
        );
}

function appealing_options_page_callback() {

    echo esc_attr( '<h2>' );
    esc_html_e( 'Appealing Theme Instructions and General Information', 'appealing' );
    echo esc_attr( '</h2>' );
}

/**
 * This function renders the interface elements.
 *
 * It accepts an array of arguments and expects the first element in the array to be the description
 * to be displayed.
 */
function appealing_display_options_page() {
$adurl = admin_url( 'customize.php?autofocus[control]=appealing_custom_teaser_length' );
//$plgurl = "https://wordpress.org/plugins/depict/";
?>

<div class="wrap">
    <h1><div id="icon-info" class="dashicons dashicons-welcome-learn-more"></div>
    <?php esc_html_e( 'appealing theme page', 'appealing' ); ?></h1>

        <h3><?php esc_html_e( 'General Overview of Theme Settings', 'appealing' ); ?></h3>

        <table class="widefat">

<thead><tr>
<th width="220"><?php esc_html_e( 'Excerpt Instructions', 'appealing' ); ?></th>
<th width="200"><?php esc_html_e( 'Two Part Page', 'appealing' ); ?></th>
<th width="150"><?php esc_html_e( 'Three Wide Page', 'appealing' ); ?></th>
<th width="150"><?php esc_html_e( 'Tips and Information', 'appealing' ); ?></th>
</tr></thead><tbody>

<tr>

<td>
<p><?php esc_html_e( 'To utilize the Pullquote excerpt option you will need to enable the Screen Options from the Pages or Posts Editor page. See first picture below.', 'appealing' ); ?></p>
<p><?php esc_html_e( 'To add the Pullquote you will use the Excerpt box which should now appear at the bottom of the Editor box. See picture 2 below.', 'appealing' ); ?></p>
<figure>
<a href="<?php echo esc_url( get_template_directory_uri() ) . '/assets/imgs/screenshot-03.png'; ?>"><img src="<?php echo esc_url( get_template_directory_uri() ) . '/assets/imgs/screenshot-03.png'; ?>" alt="" width="220" /></a>
</figure>
<figcaption>
<?php esc_html_e( 'Screen Options pull-down menu', 'appealing' ); ?>
</figcaption>
</td>

<td><p>
<?php esc_html_e( 'Page template that is TwoPart Template can divide the page content by using the', 'appealing' ); ?>
<br><code>&lt;!--more--></code> 
<?php esc_html_e( 'tag.', 'appealing' ) ?>
<sup><?php esc_html_e( '1', 'appealing' ) ?></sup> <strong>
<?php esc_html_e( 'Place the more-tag at the point where you want the page content to split in half.', 'appealing' ); ?></strong> 
<?php esc_html_e( 'Test your height by viewing and pre-defining your content with a private page in order to achieve a balanced layout of paragraphs prior to publishing.', 'appealing' ); ?>
<sup><?php esc_html_e( '2', 'appealing' ) ?></sup> <b><?php esc_html_e( 'Shift+Alt+j', 'appealing' ) ?></b> 
<?php esc_html_e( 'in editor will justify text alignment.', 'appealing' ); ?></p></td>

<td>
<?php esc_html_e( 'Three Width Page Template is a normal copy of your content and displays the page with small sidebar on the left and a wider sidebar on the right.', 'appealing' ); ?>
<p><?php esc_html_e( 'Also note that if theme is set to render posts &lt;blog> as home page  Three Wide Template will be the home page.', 'appealing' ); ?></p></td>

<td>
<strong><?php esc_html_e( 'Mobile Navigation', 'appealing' ); ?></strong>
<br>
<p><?php esc_html_e( 'Set you preferences for mobile navigation in the Customizer to allow the top level menu item to be a tap only, on dropdowns; or as a non-mobile menu to allow the top level item to be a clickable link.', 'appealing' ); ?></p></td>
</tr>

<tr>
<td>
<figure>
<a href="<?php echo esc_url( get_template_directory_uri() ) . '/assets/imgs/screenshot-04.png'; ?>">
<img src="<?php echo esc_url( get_template_directory_uri() ) . '/assets/imgs/screenshot-04.png'; ?>" width="220"/></a>
</figure>
<figcaption>
<?php esc_html_e( 'Editor Excerpt meta-box for Pullquote', 'appealing' ); ?>
</figcaption>
<br>
<strong><?php esc_html_e( 'Bottom Menu (Social Links)', 'appealing' ); ?></strong><br>
<span><?php esc_html_e( 'To set up social media links in the page footer: Appearance > Menus - then <Custom Links> to the left. Footer does not support depths.', 'appealing' ); ?></span>
<hr>
<strong><?php esc_html_e( 'Customize Theme', 'appealing' ); ?></strong>
<p><?php esc_html_e( 'To set up the Pullquote color, width and length, open Customizer', 'appealing' ); ?></p>
<center>
<a href="<?php echo esc_url( $adurl ); ?>" class="button-primary"><?php esc_html_e( 'Customizer', 'appealing' ); ?></a>
</center>
</td>

<td>
<figure class="aligncenter">
<img src="<?php echo esc_url( get_template_directory_uri() ) . '/assets/imgs/screenshot-twopart.png'; ?>"  height="210"/>
</figure>

<p><small><sup>1</sup>
<?php esc_html_e( 'ref. use more tag in editor:', 'appealing' ); ?> https://codex.wordpress.org/Customizing_the_Read_More</small></p>

<p><small><sup>2</sup>
<?php esc_html_e( 'ref. private page viewing:', 'appealing' ); ?> https://codex.wordpress.org/Content_Visibility</small></p></td>

<td>
<figure>
<img src="<?php echo esc_url( get_template_directory_uri() ) . '/assets/imgs/screenshot-05.png'; ?>" width="160"/>
</figure>
<figcaption>
<?php esc_html_e( 'Three Wide Template', 'appealing' ); ?>
</figcaption>
<br>
<strong><?php esc_html_e( 'Full width Template', 'appealing' ); ?></strong>
<p><?php esc_html_e( 'Appealing has an additional template Full Width Page that can be used for galleries or larger content.', 'appealing' ); ?></p></td>

<td>
<strong><?php esc_html_e( 'Other notes', 'appealing' ); ?></strong>
<p><?php esc_html_e( 'By hiding titles of posts/pages, your titles can be added from your Editor to give better SEO URLs and puts title where you want it in the article. h3 tag is pre styled to match theme. The Editor Title box will be the url name which, is required.', 'appealing' ); ?></p>
<p><a href="//themes.tradesouthwest.com/wordpress/" target="_blank" title="=|="><?php esc_html_e( 'Tradesouthwest', 'appealing' ); ?></a></p></td>
</tr></tbody></table>

<table><tbody>
<tr>
<td><p><?php esc_html_e( 'Try the Plugin Depict by TSW to create an expanded Author Profile.', 'appealing' ); ?></p>
<p><?php esc_html_e( 'Plugin can be found online at ', 'appealing' ); ?> 
<a href="https://wordpress.org/plugins/depict/" 
   title="<?php esc_attr_e('w.org plugins', 'appealing'); ?>" 
   target="_blank">https://wordpress.org/plugins/depict/ </a> </p> </td>
<td> <p>&nbsp; &nbsp; &nbsp; &nbsp; <a href="https://paypal.me/tradesouthwest" class="button button-primary"  title="<?php esc_attr_e('paypal.me/tradesouthwest Opens in new window', 'appealing'); ?>" target="_blank"><?php esc_html_e( 'Donate if you like.', 'appealing' ); ?></a> 
<span> <a href="https://bsky.app/tradesouthwest" title="<?php esc_attr_e('BlueSky', 'appealing'); ?>" target="_blank"> 
<img src="<?php echo esc_url( get_template_directory_uri() ) . '/assets/imgs/bluesky.jpg'; ?>" alt="<?php esc_attr_e('tweet', 'appealing'); ?>" height="28"/></a></span></p></td>
</tr></tbody></table>
</div>

<?php
}
?>
