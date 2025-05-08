<?php

/**
 * Meta fields for pages
 */
function consultancy_page_meta_fields() {
	// Single meta box containing both fields
	add_meta_box(
		'consultancy_page_meta',
		__( 'Button Settings', 'consultancy' ),
		'consultancy_page_meta_callback',
		'page',
		'normal',
		'high'
	);
}
add_action( 'add_meta_boxes', 'consultancy_page_meta_fields' );

function consultancy_page_meta_callback( $post ) {
	wp_nonce_field( 'consultancy_page_meta_nonce', 'consultancy_page_meta_nonce' );
	
	// Get the saved values
	$button_link = get_post_meta( $post->ID, '_consultancy_page_meta_button_link', true );
	$button_text = get_post_meta( $post->ID, '_consultancy_page_meta_button_text', true );
	?>
	<p>
		<label for="consultancy_page_meta_button_link">
			<?php esc_html_e( 'Button link', 'consultancy' ); ?>
		</label>
		<input type="text" id="consultancy_page_meta_button_link" name="consultancy_page_meta_button_link" value="<?php echo esc_attr( $button_link ); ?>" style="width: 100%;" />
	</p>
	<p>
		<label for="consultancy_page_meta_button_text">
			<?php esc_html_e( 'Button text', 'consultancy' ); ?>
		</label>
		<input type="text" id="consultancy_page_meta_button_text" name="consultancy_page_meta_button_text" value="<?php echo esc_attr( $button_text ); ?>" style="width: 100%;" />
	</p>
	<?php
}

function consultancy_save_page_meta_fields( $post_id ) {
	if ( ! isset( $_POST['consultancy_page_meta_nonce'] ) || ! wp_verify_nonce( $_POST['consultancy_page_meta_nonce'], 'consultancy_page_meta_nonce' ) ) {
		return;
	}

	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
		return;
	}

	if ( ! current_user_can( 'edit_post', $post_id ) ) {
		return;
	}

	// Save button link
	$button_link = isset( $_POST['consultancy_page_meta_button_link'] ) ? sanitize_text_field( $_POST['consultancy_page_meta_button_link'] ) : '';
	update_post_meta( $post_id, '_consultancy_page_meta_button_link', $button_link );
	
	// Save button text
	$button_text = isset( $_POST['consultancy_page_meta_button_text'] ) ? sanitize_text_field( $_POST['consultancy_page_meta_button_text'] ) : '';
	update_post_meta( $post_id, '_consultancy_page_meta_button_text', $button_text );
}
add_action( 'save_post', 'consultancy_save_page_meta_fields' );