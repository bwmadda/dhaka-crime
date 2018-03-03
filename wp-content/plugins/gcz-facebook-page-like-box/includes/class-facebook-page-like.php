<?php 
	class gcz_facebook_page_like_box extends WP_Widget{
		public function __construct(){
			parent::__construct(
				'gcz_facebook_page_like',
				__('Facebook Like Box','gcz'),
				array(
					'description' => __('This is a Simple Facebook Page Like Box', 'gcz')
				)
			);
		}

		function form($instance){
			$instance = wp_parse_args( (array) $instance,
				array(
					'title' => 'Facebook Like Box',
					'fb_page_url' => '',
					'fb_tabs' => 'timeline',
					'fb_width' => '',
					'fb_height' => '',
					'fb_use_small_header' => '',
					'fb_hide_cover_photo' => '',
					'fb_show_friends_faces' => 'true',

				)
			);
			if (isset($instance['title'])) {
				$title = $instance['title'];
			}
			if (isset($instance['fb_page_url'])){
				$fb_page_url = $instance['fb_page_url'];
			}			
			if (isset($instance['fb_tabs'])){
				$fb_tabs = $instance['fb_tabs'];
			}
			if (isset($instance['fb_width'])){
				$fb_width = $instance['fb_width'];
			}
			if (isset($instance['fb_height'])){
				$fb_height = $instance['fb_height'];
			}			
			if (isset($instance['fb_use_small_header'])){
				$fb_use_small_header = $instance['fb_use_small_header'] ? 'true' : 'false';
			}
			if (isset($instance['fb_hide_cover_photo'])){
				$fb_hide_cover_photo = $instance['fb_hide_cover_photo'] ? 'true' : 'false';
			}			
			if (isset($instance['fb_show_friends_faces'])){
				$fb_show_friends_faces = $instance['fb_show_friends_faces'] ? 'true' : 'false';
			}

			

			?>
			<p>
				<label for="<?php echo $this->get_field_id( 'title' ); ?>">Title: 
					<input id="<?php echo $this->get_field_id( 'title' ); ?>" type="text" value="<?php echo esc_html($title); ?>" name="<?php echo $this->get_field_name('title') ?>" class="widefat">
				</label>
			</p>
			<p>
				<label for="<?php echo $this->get_field_id( 'fb_page_url' ); ?>">Facebook Page URL: 
					<input id="<?php echo $this->get_field_id( 'fb_page_url' ); ?>" type="text" value="<?php echo esc_url($fb_page_url); ?>" name="<?php echo $this->get_field_name('fb_page_url') ?>" class="widefat">
				</label>
			</p>
			<p>
				<label for="<?php echo $this->get_field_id( 'fb_tabs' ); ?>">Tabs: 
					<input id="<?php echo $this->get_field_id( 'fb_tabs' ); ?>" type="text" value="<?php echo esc_attr($fb_tabs); ?>" name="<?php echo $this->get_field_name('fb_tabs') ?>" class="widefat">
				</label>
				<small>Tabs to render i.e. timeline, events, messages</small>
			</p>
			<p>
				<label for="<?php echo $this->get_field_id( 'fb_width' ); ?>">Width: 
					<input id="<?php echo $this->get_field_id( 'fb_width' ); ?>" type="text" value="<?php echo absint($fb_width); ?>" name="<?php echo $this->get_field_name('fb_width') ?>" class="widefat">
				</label>
			</p>			
			<p>
				<label for="<?php echo $this->get_field_id( 'fb_height' ); ?>">Height: 
					<input id="<?php echo $this->get_field_id( 'fb_height' ); ?>" type="text" value="<?php echo absint($fb_height); ?>" name="<?php echo $this->get_field_name('fb_height') ?>" class="widefat">
				</label>
			</p>			
			<p>
				<input <?php if(isset($fb_use_small_header)){ checked( $fb_use_small_header, 'true' ); }?> type="checkbox" name="<?php echo $this->get_field_name('fb_use_small_header'); ?>" id="<?php echo $this->get_field_id('fb_use_small_header'); ?>" class="checkbox">
				<label for="<?php echo  $this->get_field_id('fb_use_small_header'); ?>">Small Header</label>
				<input <?php if(isset($fb_hide_cover_photo)){ checked( $fb_hide_cover_photo, 'true' ); }?> type="checkbox" name="<?php echo $this->get_field_name('fb_hide_cover_photo'); ?>" id="<?php echo $this->get_field_id('fb_hide_cover_photo'); ?>" class="checkbox">
				<label for="<?php echo  $this->get_field_id('fb_hide_cover_photo'); ?>">Hide Cover Photo</label>				
				<input <?php if(isset($fb_show_friends_faces)){ checked( $fb_show_friends_faces, 'true' ); }?> type="checkbox" name="<?php echo $this->get_field_name('fb_show_friends_faces'); ?>" id="<?php echo $this->get_field_id('fb_show_friends_faces'); ?>" class="checkbox">
				<label for="<?php echo  $this->get_field_id('fb_show_friends_faces'); ?>">Show Friend's Faces</label>
			</p>


			<?php
		} 
		function update($new_instance, $old_instance){
			$instance = $old_instance;
			$instance['title'] = strip_tags($new_instance['title']);
			$instance['fb_page_url'] = esc_url($new_instance['fb_page_url']);
			$instance['fb_tabs'] = strip_tags($new_instance['fb_tabs']);
			$instance['fb_width'] = absint($new_instance['fb_width']);
			$instance['fb_height'] = absint($new_instance['fb_height']);
			$instance['fb_use_small_header'] = strip_tags($new_instance['fb_use_small_header']);
			$instance['fb_hide_cover_photo'] = strip_tags($new_instance['fb_hide_cover_photo']);
			$instance['fb_show_friends_faces'] = strip_tags($new_instance['fb_show_friends_faces']);

			return $instance;
		}
		function widget($args, $instance){
			extract( $args );

			if (isset($instance['title'])) {
				$title = $instance['title'];
			}

			if (isset($instance['fb_page_url'])) {
				$fb_page_url = $instance['fb_page_url'];
			}			
			if (isset($instance['fb_tabs'])) {
				$fb_tabs = $instance['fb_tabs'];
			}
			if (isset($instance['fb_width'])) {
				$fb_width = $instance['fb_width'];
			}			
			if (isset($instance['fb_height'])) {
				$fb_height = $instance['fb_height'];
			}			
			if (isset($instance['fb_use_small_header'])) {
				$fb_use_small_header = $instance['fb_use_small_header'];
			}			
			if (isset($instance['fb_hide_cover_photo'])) {
				$fb_hide_cover_photo = $instance['fb_hide_cover_photo'];
			}			
			if (isset($instance['fb_show_friends_faces'])) {
				$fb_show_friends_faces = $instance['fb_show_friends_faces'];
			}

			echo $args['before_widget'];

			echo $args['before_title'].$title.$args['after_title'];
			?>
				<div class="fb-page" data-href="<?php echo $fb_page_url;?>" data-tabs="<?php echo $fb_tabs;?>" data-width="<?php if(!empty($fb_width)){echo $fb_width;} ?>" data-height="<?php if(!empty($fb_height)){echo $fb_height;}?>" data-small-header="<?php if($fb_use_small_header == 'on'){echo 'true';}else{echo 'false';} ?>" data-adapt-container-width="true" data-hide-cover="<?php if($fb_hide_cover_photo == 'on'){echo 'true';}else{echo 'false';}?>" data-show-facepile="<?php if($fb_show_friends_faces == 'on'){echo 'true';}else{echo 'false';}?>">
				</div>
				<script>
					(function(d, s, id) {
					  var js, fjs = d.getElementsByTagName(s)[0];
					  if (d.getElementById(id)) return;
					  js = d.createElement(s); js.id = id;
					  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5&appId=1482187375359470";
					  fjs.parentNode.insertBefore(js, fjs);
					}(document, 'script', 'facebook-jssdk'));
				</script>
			<?php
			echo $args['after_widget'];
		}

	}
?>