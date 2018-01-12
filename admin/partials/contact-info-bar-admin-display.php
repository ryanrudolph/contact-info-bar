<?php

/**
 * Provide a admin area view for the plugin
 *
 * This file is used to markup the admin-facing aspects of the plugin.
 *
 * @link       https://www.ryanrudolph.com
 * @since      1.0.0
 *
 * @package    Contact_Info_Bar
 * @subpackage Contact_Info_Bar/admin/partials
 */
?>

<!-- This file should primarily consist of HTML with a little bit of PHP. -->

<div class="wrap">

    <h2><?php echo esc_html(get_admin_page_title()); ?></h2>

    <form method="post" name="contact_bar_options" action="options.php">

    <?php
        //Grab all options
        $options = get_option($this->plugin_name);

        // Cleanup
        $active = $options['active'];
        $comments_css_cleanup = $options['comments_css_cleanup'];
    ?>

    <?php
        settings_fields($this->plugin_name);
        do_settings_sections($this->plugin_name);
    ?>

        <!-- remove some meta and generators from the <head> -->
        <fieldset>
            <legend class="screen-reader-text"><span>Show Contact Info Bar</span></legend>
            <label for="<?php echo $this->plugin_name; ?>-active">
                <input type="checkbox" id="<?php echo $this->plugin_name; ?>-active" name="<?php echo $this->plugin_name; ?> [active]" value="1" <?php checked($active, 1); ?> />
                <span><?php esc_attr_e('Show Contact Info Bar', $this->plugin_name); ?></span>
            </label>
        </fieldset>

            <!-- remove injected CSS from comments widgets -->
    <fieldset>
        <legend class="screen-reader-text"><span>Remove Injected CSS for comment widget</span></legend>
        <label for="<?php echo $this->plugin_name; ?>-comments_css_cleanup">
            <input type="checkbox" id="<?php echo $this->plugin_name; ?>-comments_css_cleanup" name="<?php echo $this->plugin_name; ?>[comments_css_cleanup]" value="1" <?php checked($comments_css_cleanup, 1); ?> />
            <span><?php esc_attr_e('Remove Injected CSS for comment widget', $this->plugin_name); ?></span>
        </label>
    </fieldset>

        <?php submit_button('Save all changes', 'primary','submit', TRUE); ?>

    </form>

</div>