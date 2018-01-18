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

    <div id="icon-options-general" class="icon32"></div>
    <h1><?php esc_attr_e( 'Contact Info Bar Settings', 'WpAdminStyle' ); ?></h1>

    <div id="poststuff">

        <div id="post-body" class="metabox-holder columns-2">

            <!-- main content -->
            <div id="post-body-content">

                <div class="meta-box-sortables ui-sortable">

                    <div class="postbox">

                        <h2><span><?php esc_attr_e( 'General Settings', 'WpAdminStyle' ); ?></span></h2>

                        <div class="inside">

                            <form method="post" name="contact_bar_options" action="options.php">

                            <?php
                                //Grab all options
                                $options = get_option($this->plugin_name);

                                // Cleanup
                                $activated = $options['activated'];
                            ?>

                            <?php
                                settings_fields($this->plugin_name);
                                do_settings_sections($this->plugin_name);
                            ?>

                                <!-- remove some meta and generators from the <head> -->
                                <fieldset>
                                    <legend class="screen-reader-text"><span>Show Contact Info Bar</span></legend>
                                    <label for="<?php echo $this->plugin_name; ?>-activated">
                                        <input type="checkbox" id="<?php echo $this->plugin_name; ?>-activated" name="<?php echo $this->plugin_name; ?>[activated]" value="1" <?php checked($activated, 1); ?> />
                                        <span><?php esc_attr_e('Show Contact Info Bar', $this->plugin_name); ?></span>
                                    </label>
                                </fieldset>
                                <br>
                                <h2><?php esc_attr_e( 'Design / Layout Style', 'WpAdminStyle' ); ?></h2>

                                <select name="" id="">
                                    <option selected="selected" value="">Notice</option>
                                    <option value="">Notice w/ Call To Action</option>
                                    <option value="">Two Column</option>
                                </select>
                                <br><br>
                                <h2><?php esc_attr_e( 'Content Sections', 'WpAdminStyle' ); ?></h2>
                                    <textarea id="" name="" cols="80" rows="10">Left Section</textarea><br>
                                    <textarea id="" name="" cols="80" rows="10">Middle Section</textarea><br>
                                    <textarea id="" name="" cols="80" rows="10">Right Section</textarea><br>

                                <?php submit_button('Save all changes', 'primary','submit', TRUE); ?>

                            </form>

                        </div>
                        <!-- .inside -->

                    </div>
                    <!-- .postbox -->

                </div>
                <!-- .meta-box-sortables .ui-sortable -->

            </div>
            <!-- post-body-content -->

            <!-- sidebar -->
            <div id="postbox-container-1" class="postbox-container">

                <div class="meta-box-sortables">

                    <div class="postbox">

                        <h2><span><?php esc_attr_e(
                                    'Sidebar Content Header', 'WpAdminStyle'
                                ); ?></span></h2>

                        <div class="inside">
                            <p><?php esc_attr_e(
                                    'Everything you see here, from the documentation to the code itself, was created by and for the community. WordPress is an Open Source project, which means there are hundreds of people all over the world working on it. (More than most commercial platforms.) It also means you are free to use it for anything from your cat’s home page to a Fortune 500 web site without paying anyone a license fee and a number of other important freedoms.',
                                    'WpAdminStyle'
                                ); ?></p>
                        </div>
                        <!-- .inside -->

                    </div>
                    <!-- .postbox -->

                </div>
                <!-- .meta-box-sortables -->

            </div>
            <!-- #postbox-container-1 .postbox-container -->

        </div>
        <!-- #post-body .metabox-holder .columns-2 -->

        <br class="clear">
    </div>
    <!-- #poststuff -->

</div> <!-- .wrap -->