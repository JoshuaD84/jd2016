<?php

function jd2016_customize_register( $wp_customize ) {
	/**
	 * Adds textarea support to the theme customizer
	 */
	class jd2016_textarea_control extends WP_Customize_Control {
	    public $type = 'textarea';

	    public function render_content() {
	        ?>
	            <label>
	                <span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
	                <textarea rows="5" style="width:100%;" <?php $this->link(); ?>><?php echo esc_textarea( $this->value() ); ?></textarea>
	            </label>
	        <?php
	    }
	}

	/* ==========================================================================
    Social Icons
    ========================================================================== */

	$wp_customize->add_section(
	    'jd2016_social',
	    array(
	        'title'     => 'Social URLs',
	        'priority'  => 199
	    )
	);
	$wp_customize->add_setting('jd2016_social_facebook', array('transport' => 'refresh', 'sanitize_callback' => 'jd2016_sanitize_uri'));
	$wp_customize->add_control('jd2016_social_facebook', array('section' => 'jd2016_social', 'label' => 'Facebook', 'type' => 'text'));
	$wp_customize->add_setting('jd2016_social_github', array('transport' => 'refresh', 'sanitize_callback' => 'jd2016_sanitize_uri'));
	$wp_customize->add_control('jd2016_social_github', array('section' => 'jd2016_social', 'label' => 'GitHub', 'type' => 'text'));
	$wp_customize->add_setting('jd2016_social_google', array('transport' => 'refresh', 'sanitize_callback' => 'jd2016_sanitize_uri'));
	$wp_customize->add_control('jd2016_social_google', array('section' => 'jd2016_social', 'label' => 'Google+', 'type' => 'text'));
	$wp_customize->add_setting('jd2016_social_instagram', array('transport' => 'refresh', 'sanitize_callback' => 'jd2016_sanitize_uri'));
	$wp_customize->add_control('jd2016_social_instagram', array('section' => 'jd2016_social', 'label' => 'Instagram', 'type' => 'text'));
	$wp_customize->add_setting('jd2016_social_soundcloud', array('transport' => 'refresh', 'sanitize_callback' => 'jd2016_sanitize_uri'));
	$wp_customize->add_control('jd2016_social_soundcloud', array('section' => 'jd2016_social', 'label' => 'SoundCloud', 'type' => 'text'));
	$wp_customize->add_setting('jd2016_social_stack_overflow', array('transport' => 'refresh', 'sanitize_callback' => 'jd2016_sanitize_uri'));
	$wp_customize->add_control('jd2016_social_stack_overflow', array('section' => 'jd2016_social', 'label' => 'Stack Overflow', 'type' => 'text'));
	$wp_customize->add_setting('jd2016_social_stack_exchange', array('transport' => 'refresh', 'sanitize_callback' => 'jd2016_sanitize_uri'));
	$wp_customize->add_control('jd2016_social_stack_exchange', array('section' => 'jd2016_social', 'label' => 'Stack Exchange', 'type' => 'text'));
	$wp_customize->add_setting('jd2016_social_website', array('transport' => 'refresh', 'sanitize_callback' => 'jd2016_sanitize_uri'));
	$wp_customize->add_control('jd2016_social_website', array('section' => 'jd2016_social', 'label' => 'Website', 'type' => 'text'));
	$wp_customize->add_setting('jd2016_social_lol', array('transport' => 'refresh', 'sanitize_callback' => 'jd2016_sanitize_uri'));
	$wp_customize->add_control('jd2016_social_lol', array('section' => 'jd2016_social', 'label' => 'League of Legends', 'type' => 'text'));
	$wp_customize->add_setting('jd2016_social_quora', array('transport' => 'refresh', 'sanitize_callback' => 'jd2016_sanitize_uri'));
	$wp_customize->add_control('jd2016_social_quora', array('section' => 'jd2016_social', 'label' => 'Quora', 'type' => 'text'));
   
   $wp_customize->add_setting('jd2016_social_dnd', array('transport' => 'refresh', 'sanitize_callback' => 'jd2016_sanitize_uri'));
	$wp_customize->add_control('jd2016_social_dnd', array('section' => 'jd2016_social', 'label' => 'Dungeons & Dragons', 'type' => 'text'));
}
add_action( 'customize_register', 'jd2016_customize_register' );

function jd2016_sanitize_uri($uri){
	if('' === $uri){
		return '';
	}
	return esc_url_raw($uri);
}


