<?php 

class Social_Links_Widget extends WP_Widget {

	/**
	 * Sets up the widgets name etc
	 */
	public function __construct() {
		parent::__construct(
			'social_links_widget', // Base ID
			esc_html__( 'Social Links Widget', 'social_links_domain' ), // Name
			array( 'description' => esc_html__( 'Uzabila Social Links and Icons for Profile', 'social_links_domain' ), ) // Args
		);
	}

	/**
	 * Outputs the content of the widget
	 *
	 * @param array $args
	 * @param array $instance
	 */
	public function widget( $args, $instance ) {
		// outputs the content of the widget
		?>
		<p>Testing Widget</p>
	<?php }

	/**
	 * Outputs the options form on admin
	 *
	 * @param array $instance The widget options
	 */
	public function form( $instance ) {
		// outputs the options form on admin
		$this->getForm( $instance );
	}

	/**
	 * Processing widget options on save
	 *
	 * @param array $new_instance The new options
	 * @param array $old_instance The previous options
	 *
	 * @return array
	 */
	public function update( $new_instance, $old_instance ) {
		// processes widget options to be saved
		$instance = [
			'facebook_link' => (!empty($new_instance['facebook_link'])) ? strip_tags($new_instance['facebook_link']) : '',
			'twitter_link' => (!empty($new_instance['twitter_link'])) ? strip_tags($new_instance['twitter_link']) : '',
			'linkedin_link' => (!empty($new_instance['linkedin_link'])) ? strip_tags($new_instance['linkedin_link']) : '',
			'google_link' => (!empty($new_instance['google_link'])) ? strip_tags($new_instance['google_link']) : '',
			'facebook_icon' => (!empty($new_instance['facebook_icon'])) ? strip_tags($new_instance['facebook_icon']) : '',
			'twitter_icon' => (!empty($new_instance['twitter_icon'])) ? strip_tags($new_instance['twitter_icon']) : '',
			'linkedin_icon' => (!empty($new_instance['linkedin_icon'])) ? strip_tags($new_instance['linkedin_icon']) : '',
			'google_icon' => (!empty($new_instance['google_icons'])) ? strip_tags($new_instance['google_icon']) : '',
			'icon_width' => (!empty($new_instance['icon_width'])) ? strip_tags($new_instance['icon_width']) : ''
		];

		return $instance;

	}

	/**
	 * Display Form
	 *
	 * @param array $instance The widget options
	 */
	public function getForm( $instance ) {
		// Get Facebook Link
		if( isset($instance['facebook_link'])){
			$facebook_link = esc_attr( $instance['facebook_link'] );
		} else {
			$facebook_link = 'https://facebook.com/';
		}

		// Get Twitter Link
		if( isset($instance['twitter_link'])){
			$twitter_link = esc_attr( $instance['twitter_link'] );
		} else {
			$twitter_link = 'https://twitter.com/';
		}

		// Get Linkedin Link
		if( isset($instance['linkedin_link'])){
			$linkedin_link = esc_attr( $instance['linkedin_link'] );
		} else {
			$linkedin_link = 'https://linkedin.com/';
		}

		// Get Google Link
		if( isset($instance['google_link'])){
			$google_link = esc_attr( $instance['google_link'] );
		} else {
			$google_link = 'http://plus.google.com/';
		}

		// Get facebook icon
		if( isset($instance['facebook_icon'])){
			$facebook_icon = esc_attr( $instance['facebook_icon'] );
		} else {
			$facebook_icon = plugins_url() . '/uzabila-social-links/icons/facebook.png';
		}

		// Get Twitter icon
		if( isset($instance['twitter_icon'])){
			$twitter_icon = esc_attr( $instance['twitter_icon'] );
		} else {
			$twitter_icon = plugins_url() . '/uzabila-social-links/icons/twitter.png';
		}

		// Get Linkedin icon
		if( isset($instance['linkedin_icon'])){
			$linkedin_icon = esc_attr( $instance['linkedin_icon'] );
		} else {
			$linkedin_icon = plugins_url() . '/uzabila-social-links/icons/linkedin.png';
		}

		// Get Google icon
		if( isset($instance['google_icon'])){
			$google_icon = esc_attr( $instance['google_icon'] );
		} else {
			$google_icon = plugins_url() . '/uzabila-social-links/icons/google-plus.png';
		}

		// Get icons Width
		if( isset($instance['icon_width'])){
			$icon_width = esc_attr( $instance['icon_width'] );
		} else {
			$icon_width = 32;
		}


		?>
		<h4>Facebook</h4>
		<p>
			<label for="<?php echo $this->get_field_id('facebook_link'); ?>"><?php _e('Link'); ?></label>
			<input class="widefat" id="<?php echo $this->get_field_id('facebook_link'); ?>" type="text" name="<?php echo $this->get_field_name('facebook_link'); ?>" value="<?php echo esc_attr( $facebook_link ); ?>">
		</p>
		<p>
			<label for="<?php echo $this->get_field_id('facebook_icon'); ?>"><?php _e('Icon'); ?></label>
			<input class="widefat" id="<?php echo $this->get_field_id('facebook_icon'); ?>" type="text" name="<?php echo $this->get_field_name('facebook_icon'); ?>" value="<?php echo esc_attr( $facebook_icon ); ?>">
		</p>

		<h4>Twitter</h4>
		<p>
			<label for="<?php echo $this->get_field_id('twitter_link'); ?>"><?php _e('Link'); ?></label>
			<input class="widefat" id="<?php echo $this->get_field_id('twitter_link'); ?>" type="text" name="<?php echo $this->get_field_name('twitter_link'); ?>" value="<?php echo esc_attr( $twitter_link ); ?>">
		</p>
		<p>
			<label for="<?php echo $this->get_field_id('twitter_icon'); ?>"><?php _e('Icon'); ?></label>
			<input class="widefat" id="<?php echo $this->get_field_id('twitter_icon'); ?>" type="text" name="<?php echo $this->get_field_name('twitter_icon'); ?>" value="<?php echo esc_attr( $twitter_icon ); ?>">
		</p>

		<h4>LinkedIn</h4>
		<p>
			<label for="<?php echo $this->get_field_id('linkedin_link'); ?>"><?php _e('Link'); ?></label>
			<input class="widefat" id="<?php echo $this->get_field_id('linkedin_link'); ?>" type="text" name="<?php echo $this->get_field_name('linkedin_link'); ?>" value="<?php echo esc_attr( $linkedin_link ); ?>">
		</p>
		<p>
			<label for="<?php echo $this->get_field_id('linkedin_icon'); ?>"><?php _e('Icon'); ?></label>
			<input class="widefat" id="<?php echo $this->get_field_id('linkedin_icon'); ?>" type="text" name="<?php echo $this->get_field_name('linkedin_icon'); ?>" value="<?php echo esc_attr( $linkedin_icon ); ?>">
		</p>

		<h4>Google Plus</h4>
		<p>
			<label for="<?php echo $this->get_field_id('google_link'); ?>"><?php _e('Link'); ?></label>
			<input class="widefat" id="<?php echo $this->get_field_id('google_link'); ?>" type="text" name="<?php echo $this->get_field_name('google_link'); ?>" value="<?php echo esc_attr( $google_link ); ?>">
		</p>
		<p>
			<label for="<?php echo $this->get_field_id('google_icon'); ?>"><?php _e('Icon'); ?></label>
			<input class="widefat" id="<?php echo $this->get_field_id('google_icon'); ?>" type="text" name="<?php echo $this->get_field_name('google_icon'); ?>" value="<?php echo esc_attr( $google_icon ); ?>">
		</p>

		<h4>Icon Width</h4>
		<p>
			<label for="<?php echo $this->get_field_id('icon_width'); ?>"><?php _e('Width'); ?></label>
			<input class="widefat" id="<?php echo $this->get_field_id('icon_width'); ?>" type="text" name="<?php echo $this->get_field_name('icon_width'); ?>" value="<?php echo esc_attr( $icon_width ); ?>">
		</p>

	<?php }
}