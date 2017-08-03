<?php
/*
Plugin Name: 		JSB Admin Footer
Plugin URI: 		http://justsomeblah.wordpress.com/products/wordpress/plugins/
Description: 		Using WordPress for a client or just want you back-end to look a bit more professional? Try JSB Admin Footer which allows you to have custom text, images and HTML in the footer.Requires at least: 	3.0
Tested up to: 		3.8.1
Version: 			1.0
Tags: 				JustSomeBlah, Admin, Footer, Just, Some, Blah, Custom,
Author: 			Just Some Blah
Author URI:			http://justsomeblah.wordpress.com/
*/

// Hook for adding admin menus
add_action('admin_menu', 'jsb_admin_footer_menu');

function jsb_admin_footer_menu() {
	add_options_page('JSB Admin Footer', 'JSB Admin Footer', 10, __FILE__, 'jsb_admin_footer_page');
}

function jsb_admin_footer_page() {
?>
	<div class="wrap">
	<h2>DW Admin Footer</h2>
		<div id="poststuff" class="metabox-holder">
		<div class="postbox">
            <h3 class="hndle"><span>Tips</span></h3>
            <div class="inside">
            	<p>Here are a few tips when you are entering HTML into the box above.</p>
            	<h4>Hyperlinks</h4>
				<p>Use the following if wanting to add a hyperlink add <code>&lt;a href=&quot;&quot; &gt;&lt;/a&gt;</code>
				Enter your URL into the &quot;&quot; after href in the above text.
If you want this to open in a new tab/window, add <code>target=&quot;_blank&quot;</code> after just after the closing quote mark (&quot;) but before &gt;
Enter the text you want to appear between <code>&gt; and &lt;/a&gt;</code><p>You should have something like the following <code>&lt;a href=&quot;http://www.danielwoolnough.me.uk/&quot; target=&quot;_blank&quot;&gt;Daniel Woolnough&lt;/a&gt;</code></p>
				<h4>Bold and Italics</h4>
				<p>Use <code>&lt;strong&gt;TEXT HERE&lt;/strong&gt;</code> to get bold text like this - <strong>TEXT HERE</strong></p>
				<p>Use <code>&lt;em&gt;TEXT HERE&lt;/em&gt;</code> to get italicised text like this - <em>TEXT HERE</em></p>
            </div>
		</div>

        <div class="postbox">
            <h3 class="hndle"><span>This Is Your Part</span></h3>
            <div class="inside">
            <form method="post" action="options.php">
				<?php wp_nonce_field('update-options'); ?>
                
                <table class="form-table">
                
                <tr valign="top">
                <th scope="row">Footer Text/HTML</th>
                <td><textarea name="jsb_admin_footer" rows="12" cols="60" tabindex="1"><?php echo get_option('jsb_admin_footer'); ?></textarea></td>
                </tr>
                 
                </table>
                
                <input type="hidden" name="action" value="update" />
                <input type="hidden" name="page_options" value="jsb_admin_footer" />
                
                <p class="submit">
                <input type="submit" class="button-primary" value="<?php _e('Save Changes') ?>" tabindex="2" />
                </p>
                
			</form>
            </div>
	</div><!--/postbox-->
    	
		
        <div class="postbox">
            <h3 class="hndle"><span>Share and Donate</span></h3>
            <div class="inside">
				<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top" style="width: 33%; float:left">
				<input type="hidden" name="cmd" value="_s-xclick">
				<input type="hidden" name="hosted_button_id" value="Y32TGZXQTV4ZY">
				<input type="image" src="./paypal.png" border="0" name="submit" alt="PayPal – The safer, easier way to pay online.">
				<img alt="" border="0" src="https://www.paypalobjects.com/en_GB/i/scr/pixel.gif" width="1" height="1">
				</form>
            	<p style="width: 65%">Well, what do you think? Let us know. If you love (or even like) our plugin, if you can please consider making a donation<br>
            	Small or large, every little help. We appreciate all donations as it goes towards our coffee fund. Thank you for your generosity.</p>
            	<p style="width: 65%">If you paid for this plugin, please get a refund. </p>
            </div>
		</div>
		
        <div class="postbox">
            <h3 class="hndle"><span>About The Plugin</span></h3>
            <div class="inside">
            	<p>JSB Admin Footer allows you to add a little bit of customisability to your WordPress back-end.</p>
            	<p>You can add text, images and HTML to your footer using this simple plugin. Unlike other plugins, ours it simple and not bloated with lots of extra features no one can understand. </p>
            	<p>Only administrators are able to see this plugin and update the text BUT whatever you put in there is shown to everyone who uses the WordPress back-end of your website. This is ideal for client websites to add their copyright, intranet links, Social links, corporate webmail or contact information. You can even leave it blank to remove all the text from the footer.</p>
            	<p>If you have any problems, please feel free to use the support forum on this plugin, although we cannot guarantee to find a solution, we will try our best to help.</p>
            	<p>NOTE: This plugin only changes the left hand text of the footer and leaved the version number in place. </p>
            </div>
		</div>

	</div>

	</div><!--/wrap-->
    
<?php
} //end jsb_admin_footer_menu function

/*this code will add the filter to the footer text*/
add_filter('admin_footer_text', 'remove_footer_admin'); //change admin footer text

function remove_footer_admin () {
	echo get_option( 'jsb_admin_footer' );
} 

?>