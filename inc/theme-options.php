<?php
/**
 * Theme Options Page
 * 
 * Creates a custom Theme Options page in WordPress admin area
 */

// Exit if accessed directly
if (!defined('ABSPATH')) {
    exit;
}

if (!function_exists('consultancy_theme_options_page')) {
    function consultancy_theme_options_page() {
        add_menu_page(
            __('Theme Options', 'consultancy'),
            __('Theme Options', 'consultancy'),
            'manage_options',
            'consultancy-theme-options',
            'consultancy_theme_options_content',
            get_template_directory_uri() . '/assets/images/icons/options_icon.svg',
            60
        );
    }
    add_action('admin_menu', 'consultancy_theme_options_page');
}

if (!function_exists('consultancy_register_settings')) {
    function consultancy_register_settings() {
        register_setting(
            'consultancy_theme_options_group',
            'consultancy_theme_options',
            'consultancy_sanitize_options'
        );

        add_settings_section(
            'consultancy_general_section',
            __('General Settings', 'consultancy'),
            'consultancy_section_callback',
            'consultancy-theme-options'
        );

        add_settings_field(
            'company_logo',
            __('Company Logo', 'consultancy'),
            'consultancy_logo_field_callback',
            'consultancy-theme-options',
            'consultancy_general_section'
        );

        add_settings_field(
            'primary_color',
            __('Primary Color', 'consultancy'),
            'consultancy_color_field_callback',
            'consultancy-theme-options',
            'consultancy_general_section'
        );

        add_settings_field(
            'footer_text',
            __('Footer Text', 'consultancy'),
            'consultancy_text_field_callback',
            'consultancy-theme-options',
            'consultancy_general_section',
            ['field' => 'footer_text']
        );

        add_settings_field(
            'social_media',
            __('Social Media Links', 'consultancy'),
            'consultancy_social_media_callback',
            'consultancy-theme-options',
            'consultancy_general_section'
        );
    }
    add_action('admin_init', 'consultancy_register_settings');
}

if (!function_exists('consultancy_section_callback')) {
    function consultancy_section_callback() {
        echo '<p>' . __('Customize your theme settings below:', 'consultancy') . '</p>';
    }
}

if (!function_exists('consultancy_logo_field_callback')) {
    function consultancy_logo_field_callback() {
        $options = get_option('consultancy_theme_options');
        $logo = isset($options['company_logo']) ? $options['company_logo'] : '';
        ?>
        <div class="logo-preview-wrapper">
            <input type="text" id="company_logo" name="consultancy_theme_options[company_logo]" value="<?php echo esc_url($logo); ?>" class="regular-text">
            <input type="button" class="button button-secondary" id="upload_logo_button" value="<?php esc_attr_e('Upload Logo', 'consultancy'); ?>">
            <div class="logo-preview">
                <?php if (!empty($logo)) : ?>
                    <img src="<?php echo esc_url($logo); ?>" alt="Logo Preview" style="max-width: 300px; margin-top: 10px;">
                <?php endif; ?>
            </div>
        </div>
        <p class="description"><?php _e('Upload or select your company logo', 'consultancy'); ?></p>
        <script>
            jQuery(document).ready(function($) {
                $('#upload_logo_button').click(function(e) {
                    e.preventDefault();
                    var image = wp.media({
                        title: '<?php _e('Upload or Select Logo', 'consultancy'); ?>',
                        multiple: false
                    }).open().on('select', function() {
                        var uploaded_image = image.state().get('selection').first();
                        var image_url = uploaded_image.toJSON().url;
                        $('#company_logo').val(image_url);
                        $('.logo-preview').html('<img src="' + image_url + '" alt="Logo Preview" style="max-width: 300px; margin-top: 10px;">');
                    });
                });
            });
        </script>
        <?php
    }
}

if (!function_exists('consultancy_color_field_callback')) {
    function consultancy_color_field_callback() {
        $options = get_option('consultancy_theme_options');
        $color = isset($options['primary_color']) ? $options['primary_color'] : '#3498db';
        ?>
        <input type="text" id="primary_color" name="consultancy_theme_options[primary_color]" value="<?php echo esc_attr($color); ?>" class="color-picker">
        <p class="description"><?php _e('Choose the primary color for your theme', 'consultancy'); ?></p>
        <script>
            jQuery(document).ready(function($) {
                $('.color-picker').wpColorPicker();
            });
        </script>
        <?php
    }
}

if (!function_exists('consultancy_text_field_callback')) {
    function consultancy_text_field_callback($args) {
        $options = get_option('consultancy_theme_options');
        $field = $args['field'];
        $value = isset($options[$field]) ? $options[$field] : '';
        ?>
        <textarea id="<?php echo esc_attr($field); ?>" name="consultancy_theme_options[<?php echo esc_attr($field); ?>]" class="regular-text"><?php echo esc_textarea($value); ?></textarea>
        <?php
    }
}

if (!function_exists('consultancy_social_media_callback')) {
    function consultancy_social_media_callback() {
        $options = get_option('consultancy_theme_options');
        $facebook = isset($options['facebook']) ? $options['facebook'] : '';
        $twitter = isset($options['twitter']) ? $options['twitter'] : '';
        $instagram = isset($options['instagram']) ? $options['instagram'] : '';
        $linkedin = isset($options['linkedin']) ? $options['linkedin'] : '';
        ?>
        <p>
            <label for="facebook"><?php _e('Facebook:', 'consultancy'); ?></label>
            <input type="url" id="facebook" name="consultancy_theme_options[facebook]" value="<?php echo esc_url($facebook); ?>" class="regular-text">
        </p>
        <p>
            <label for="twitter"><?php _e('Twitter:', 'consultancy'); ?></label>
            <input type="url" id="twitter" name="consultancy_theme_options[twitter]" value="<?php echo esc_url($twitter); ?>" class="regular-text">
        </p>
        <p>
            <label for="instagram"><?php _e('Instagram:', 'consultancy'); ?></label>
            <input type="url" id="instagram" name="consultancy_theme_options[instagram]" value="<?php echo esc_url($instagram); ?>" class="regular-text">
        </p>
        <p>
            <label for="linkedin"><?php _e('LinkedIn:', 'consultancy'); ?></label>
            <input type="url" id="linkedin" name="consultancy_theme_options[linkedin]" value="<?php echo esc_url($linkedin); ?>" class="regular-text">
        </p>
        <?php
    }
}

if (!function_exists('consultancy_sanitize_options')) {
    function consultancy_sanitize_options($input) {
        $output = [];

        if (isset($input['company_logo'])) {
            $output['company_logo'] = esc_url_raw($input['company_logo']);
        }

        if (isset($input['primary_color'])) {
            $output['primary_color'] = sanitize_hex_color($input['primary_color']);
        }

        if (isset($input['footer_text'])) {
            $output['footer_text'] = sanitize_text_field($input['footer_text']);
        }

        $social_platforms = ['facebook', 'twitter', 'instagram', 'linkedin'];
        foreach ($social_platforms as $platform) {
            if (isset($input[$platform])) {
                $output[$platform] = esc_url_raw($input[$platform]);
            }
        }

        if (isset($input['stack_logos']) && is_array($input['stack_logos'])) {
            $output['stack_logos'] = array_map('esc_url_raw', $input['stack_logos']);
        }

        return $output;
    }
}

if (!function_exists('consultancy_theme_options_content')) {
    function consultancy_theme_options_content() {
        if (!current_user_can('manage_options')) return;
        ?>
        <div class="wrap">
            <h1><?php echo esc_html(get_admin_page_title()); ?></h1>
            <form method="post" action="options.php">
                <?php
                settings_fields('consultancy_theme_options_group');
                do_settings_sections('consultancy-theme-options');
                submit_button();
                ?>
            </form>
        </div>
        <?php
    }
}

if (!function_exists('consultancy_theme_options_scripts')) {
    function consultancy_theme_options_scripts($hook) {
        if ($hook != 'toplevel_page_consultancy-theme-options') return;
        wp_enqueue_style('wp-color-picker');
        wp_enqueue_script('wp-color-picker');
        wp_enqueue_media();
    }
    add_action('admin_enqueue_scripts', 'consultancy_theme_options_scripts');
}

if (!function_exists('consultancy_get_theme_option')) {
    function consultancy_get_theme_option($option, $default = '') {
        $options = get_option('consultancy_theme_options');
        return isset($options[$option]) ? $options[$option] : $default;
    }
}

// Logo Upload Function

if (!function_exists('consultancy_add_stack_logos_section')) {
    function consultancy_add_stack_logos_section() {
        add_settings_section(
            'consultancy_stack_logos_section',
            __('Stack/Partner Logos', 'consultancy'),
            'consultancy_stack_logos_section_callback',
            'consultancy-theme-options'
        );

        add_settings_field(
            'stack_logos',
            __('Logo Gallery', 'consultancy'),
            'consultancy_stack_logos_callback',
            'consultancy-theme-options',
            'consultancy_stack_logos_section'
        );
    }
    add_action('admin_init', 'consultancy_add_stack_logos_section');
}

if (!function_exists('consultancy_stack_logos_section_callback')) {
    function consultancy_stack_logos_section_callback() {
        echo '<p>' . __('Upload and manage logos for technologies, partners, or clients to display on your site.', 'consultancy') . '</p>';
    }
}

if (!function_exists('consultancy_stack_logos_callback')) {
    function consultancy_stack_logos_callback() {
     // Get saved stack logos
     $options = get_option('consultancy_theme_options');
     $stack_logos = isset($options['stack_logos']) && is_array($options['stack_logos']) ? $options['stack_logos'] : array();
     
     // Unique ID for the gallery container
     $gallery_id = 'stack-logos-gallery';
     ?>
     <div class="stack-logos-container">
         <!-- Hidden input to store the JSON data -->
         <input type="hidden" id="stack_logos_data" name="consultancy_theme_options[stack_logos]" value="<?php echo esc_attr(wp_json_encode($stack_logos)); ?>">
         
         <!-- Gallery preview area -->
         <div id="<?php echo esc_attr($gallery_id); ?>" class="stack-logos-gallery">
             <?php if (!empty($stack_logos)) : ?>
                 <?php foreach ($stack_logos as $index => $logo) : ?>
                     <div class="stack-logo-item" data-id="<?php echo esc_attr($index); ?>">
                         <img src="<?php echo esc_url($logo['url']); ?>" alt="<?php echo esc_attr($logo['title']); ?>">
                         <div class="stack-logo-actions">
                             <span class="dashicons dashicons-edit edit-logo-title" title="<?php esc_attr_e('Edit Title', 'consultancy'); ?>"></span>
                             <span class="dashicons dashicons-trash remove-logo" title="<?php esc_attr_e('Remove', 'consultancy'); ?>"></span>
                         </div>
                         <div class="stack-logo-title"><?php echo esc_html($logo['title']); ?></div>
                     </div>
                 <?php endforeach; ?>
             <?php else : ?>
                 <p class="no-logos-message"><?php _e('No logos added yet.', 'consultancy'); ?></p>
             <?php endif; ?>
             <div class="clear"></div>
         </div>
         
         <!-- Add logo button -->
         <div class="stack-logos-actions">
             <button type="button" class="button add-stack-logo">
                 <?php _e('Add Logo', 'consultancy'); ?>
             </button>
         </div>
     </div>
     
     <style>
         .stack-logos-gallery {
             display: flex;
             flex-wrap: wrap;
             margin-bottom: 15px;
             gap: 15px;
         }
         .stack-logo-item {
             position: relative;
             width: 150px;
             height: 150px;
             border: 1px solid #ddd;
             background: #f9f9f9;
             text-align: center;
             display: flex;
             flex-direction: column;
             justify-content: center;
             align-items: center;
             padding: 10px;
             box-sizing: border-box;
         }
         .stack-logo-item img {
             max-width: 100%;
             max-height: 80px;
             width: auto;
             height: auto;
             display: block;
             margin: 0 auto 10px;
         }
         .stack-logo-actions {
             position: absolute;
             top: 5px;
             right: 5px;
             display: none;
         }
         .stack-logo-item:hover .stack-logo-actions {
             display: block;
         }
         .stack-logo-actions .dashicons {
             cursor: pointer;
             background: rgba(255, 255, 255, 0.8);
             border-radius: 50%;
             margin-left: 5px;
         }
         .stack-logo-actions .dashicons-trash {
             color: #d63638;
         }
         .stack-logo-title {
             font-size: 12px;
             color: #333;
             margin-top: auto;
             word-break: break-word;
             overflow: hidden;
             width: 100%;
             text-overflow: ellipsis;
         }
         .stack-logos-actions {
             margin-top: 10px;
         }
         .clear {
             clear: both;
         }
         .no-logos-message {
             font-style: italic;
             color: #999;
         }
     </style>
     
     <script>
     jQuery(document).ready(function($) {
         // Variable to hold the stack logos data
         let stackLogos = <?php echo !empty($stack_logos) ? wp_json_encode($stack_logos) : '[]'; ?>;
         
         // Function to update the input field with the latest data
         function updateStackLogosData() {
             $('#stack_logos_data').val(JSON.stringify(stackLogos));
         }
         
         // Function to refresh the gallery display
         function refreshGallery() {
             const $gallery = $('#<?php echo esc_attr($gallery_id); ?>');
             $gallery.empty();
             
             if (stackLogos.length === 0) {
                 $gallery.append('<p class="no-logos-message"><?php _e('No logos added yet.', 'consultancy'); ?></p>');
                 return;
             }
             
             $.each(stackLogos, function(index, logo) {
                 const $logoItem = $(`
                     <div class="stack-logo-item" data-id="${index}">
                         <img src="${logo.url}" alt="${logo.title}">
                         <div class="stack-logo-actions">
                             <span class="dashicons dashicons-edit edit-logo-title" title="<?php esc_attr_e('Edit Title', 'consultancy'); ?>"></span>
                             <span class="dashicons dashicons-trash remove-logo" title="<?php esc_attr_e('Remove', 'consultancy'); ?>"></span>
                         </div>
                         <div class="stack-logo-title">${logo.title}</div>
                     </div>
                 `);
                 
                 $gallery.append($logoItem);
             });
             
             $gallery.append('<div class="clear"></div>');
         }
         
         // Add new logo
         $('.add-stack-logo').on('click', function(e) {
             e.preventDefault();
             
             const frame = wp.media({
                 title: '<?php _e('Select or Upload Logo', 'consultancy'); ?>',
                 button: {
                     text: '<?php _e('Use this logo', 'consultancy'); ?>'
                 },
                 multiple: false
             });
             
             frame.on('select', function() {
                 const attachment = frame.state().get('selection').first().toJSON();
                 
                 // Prompt for a title
                 const title = prompt('<?php _e('Enter logo title:', 'consultancy'); ?>', attachment.title);
                 
                 if (title !== null) {
                     // Add to our array
                     stackLogos.push({
                         id: attachment.id,
                         url: attachment.url,
                         title: title
                     });
                     
                     // Update the input and refresh display
                     updateStackLogosData();
                     refreshGallery();
                 }
             });
             
             frame.open();
         });
         
         // Remove logo
         $(document).on('click', '.remove-logo', function() {
             const $logoItem = $(this).closest('.stack-logo-item');
             const index = parseInt($logoItem.data('id'));
             
             if (confirm('<?php _e('Are you sure you want to remove this logo?', 'consultancy'); ?>')) {
                 // Remove from array
                 stackLogos = stackLogos.filter((_, i) => i !== index);
                 
                 // Update the input and refresh display
                 updateStackLogosData();
                 refreshGallery();
             }
         });
         
         // Edit logo title
         $(document).on('click', '.edit-logo-title', function() {
             const $logoItem = $(this).closest('.stack-logo-item');
             const index = parseInt($logoItem.data('id'));
             const currentTitle = stackLogos[index].title;
             
             const newTitle = prompt('<?php _e('Edit logo title:', 'consultancy'); ?>', currentTitle);
             
             if (newTitle !== null && newTitle !== currentTitle) {
                 // Update title
                 stackLogos[index].title = newTitle;
                 
                 // Update the input and refresh display
                 updateStackLogosData();
                 $logoItem.find('.stack-logo-title').text(newTitle);
             }
         });
     });
     </script>
     <?php
 }
}
 
 /**
  * Update the existing sanitization function to handle the stack logos
  * or register a custom sanitization function if needed
  */
 function consultancy_sanitize_options($input) {
     $output = array();
     
     // Handle existing fields from your original function
     if (isset($input['company_logo'])) {
         $output['company_logo'] = esc_url_raw($input['company_logo']);
     }
     
     if (isset($input['primary_color'])) {
         $output['primary_color'] = sanitize_hex_color($input['primary_color']);
     }
     
     if (isset($input['footer_text'])) {
         $output['footer_text'] = sanitize_text_field($input['footer_text']);
     }
     
     // Social media URLs
     $social_platforms = ['facebook', 'twitter', 'instagram', 'linkedin'];
     foreach ($social_platforms as $platform) {
         if (isset($input[$platform])) {
             $output[$platform] = esc_url_raw($input[$platform]);
         }
     }
     
     // Handle stack logos
     if (isset($input['stack_logos'])) {
         $stack_logos_raw = $input['stack_logos'];
         
         // Check if it's a JSON string and decode it
         if (is_string($stack_logos_raw) && !empty($stack_logos_raw)) {
             $logos_array = json_decode(stripslashes($stack_logos_raw), true);
             
             if (is_array($logos_array)) {
                 $sanitized_logos = array();
                 
                 foreach ($logos_array as $logo) {
                     if (isset($logo['id'], $logo['url'], $logo['title'])) {
                         $sanitized_logos[] = array(
                             'id' => absint($logo['id']),
                             'url' => esc_url_raw($logo['url']),
                             'title' => sanitize_text_field($logo['title'])
                         );
                     }
                 }
                 
                 $output['stack_logos'] = $sanitized_logos;
             }
         } else if (is_array($stack_logos_raw)) {
             // If it's already an array
             $sanitized_logos = array();
             
             foreach ($stack_logos_raw as $logo) {
                 if (isset($logo['id'], $logo['url'], $logo['title'])) {
                     $sanitized_logos[] = array(
                         'id' => absint($logo['id']),
                         'url' => esc_url_raw($logo['url']),
                         'title' => sanitize_text_field($logo['title'])
                     );
                 }
             }
             
             $output['stack_logos'] = $sanitized_logos;
         }
     }
     
     return $output;
 }
 
 /**
  * Helper function to get stack logos
  */
 function consultancy_get_stack_logos() {
     $options = get_option('consultancy_theme_options');
     return isset($options['stack_logos']) && is_array($options['stack_logos']) ? $options['stack_logos'] : array();
 }
 
 /**
  * Example function to display stack logos
  */
 function consultancy_display_stack_logos($wrapper_class = 'stack-logos-display', $logo_class = 'stack-logo') {
     $stack_logos = consultancy_get_stack_logos();
     
     if (empty($stack_logos)) {
         return;
     }
     
     echo '<div class="' . esc_attr($wrapper_class) . '">';
     
     foreach ($stack_logos as $logo) {
         echo '<div class="' . esc_attr($logo_class) . '">';
         echo '<img src="' . esc_url($logo['url']) . '" alt="' . esc_attr($logo['title']) . '">';
         echo '</div>';
     }
     
     echo '</div>';
 }
 
 /**
  * Debug function - can be used to check what data is being saved
  * You can remove this after verifying everything works correctly
  */
 function consultancy_debug_stack_logos_save() {
     // Only run on the options page
     $screen = get_current_screen();
     if ($screen && $screen->id === 'toplevel_page_consultancy-theme-options') {
         if (isset($_POST['consultancy_theme_options']) && isset($_POST['consultancy_theme_options']['stack_logos'])) {
             error_log('Raw stack logos value: ' . print_r($_POST['consultancy_theme_options']['stack_logos'], true));
         }
     }
 }
 // Uncomment for debugging
 // add_action('admin_init', 'consultancy_debug_stack_logos_save');