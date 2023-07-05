<?php
/**
 * A unique identifier is defined to store the options in the database and reference them from the theme.
 */
function optionsframework_option_name() {
	// Change this to use your theme slug
	return 'fwdown-set';
}

/**
 * Defines an array of options that will be used to generate the settings page and be saved in the database.
 * When creating the 'id' fields, make sure to use all lowercase and no spaces.
 *
 * If you are making your theme translatable, you should replace 'fwdown'
 * with the actual text domain for your theme.  Read more:
 * http://codex.wordpress.org/Function_Reference/load_theme_textdomain
 */

function optionsframework_options() {

	$options = array();

	$options[] = array(
		'name' => __( '基础设置', 'fwdown' ),
		'type' => 'heading'
	);
	$options[] = array(
		'name' => __( 'LOGO设置', 'fwdown' ),
		'desc' => __( 'logo设置', 'fwdown' ),
		'id' => 'logo',
		'type' => 'upload'
	);
	
	$options[] = array(
		'name' => __( '板块一设置', 'fwdown' ),
		'type' => 'heading'
	);
	
	$options[] = array(
		'name' => __( '版块一', 'fwdown' ),
		'desc' => __( '版权一的图片，文字信息更换', 'fwdown' ),
		'type' => 'info'
	);
	
	$options[] = array(
		'name' => __( '', 'fwdown' ),
		'desc' => __( '版块一标题设置', 'fwdown' ),
		'id' => 'title1',
		'type' => 'upload'
	);
	
	$options[] = array(
		'name' => __( '', 'fwdown' ),
		'desc' => __( '版块一描述', 'fwdown' ),
		'id' => 'desc1',
		'type' => 'textarea'
	);
	$options[] = array(
		'name' => __( '', 'fwdown' ),
		'desc' => __( '版块一背景', 'fwdown' ),
		'id' => 'bg1',
		'type' => 'upload'
	);
	
	$options[] = array(
		'name' => __( '', 'fwdown' ),
		'desc' => __( '版块一视频', 'fwdown' ),
		'id' => 'video1',
		'type' => 'upload'
	);
	
	
	$options[] = array(
		'name' => __( '板块二设置', 'fwdown' ),
		'type' => 'heading'
	);
	
	$options[] = array(
		'name' => __( '版块二', 'fwdown' ),
		'desc' => __( '版权二的图片，文字信息更换', 'fwdown' ),
		'type' => 'info'
	);
	
	$options[] = array(
		'name' => __( '', 'fwdown' ),
		'desc' => __( '版块二标题设置', 'fwdown' ),
		'id' => 'title2',
		'type' => 'upload'
	);
	
	$options[] = array(
		'name' => __( '', 'fwdown' ),
		'desc' => __( '版块二描述', 'fwdown' ),
		'id' => 'desc2',
		'type' => 'textarea'
	);
	$options[] = array(
		'name' => __( '', 'fwdown' ),
		'desc' => __( '版块二背景', 'fwdown' ),
		'id' => 'bg2',
		'type' => 'upload'
	);
	$options[] = array(
		'name' => __( '', 'fwdown' ),
		'desc' => __( '版块二素材背景图片', 'fwdown' ),
		'id' => 'sucai2',
		'type' => 'upload'
	);
	$options[] = array(
		'name' => __( '', 'fwdown' ),
		'desc' => __( '版块二跳转按钮', 'fwdown' ),
		'id' => 'btn2_code',
		'type' => 'textarea'
	);
	
	//板块三
	$options[] = array(
    'name' => __( '板块三设置', 'fwdown' ),
    'type' => 'heading'
);

$options[] = array(
    'name' => __( '版块三', 'fwdown' ),
    'desc' => __( '版权三的图片，文字信息更换', 'fwdown' ),
    'type' => 'info'
);

$options[] = array(
    'name' => __( '', 'fwdown' ),
    'desc' => __( '版块三标题设置', 'fwdown' ),
    'id' => 'title3',
    'type' => 'upload'
);

$options[] = array(
    'name' => __( '', 'fwdown' ),
    'desc' => __( '版块三描述', 'fwdown' ),
    'id' => 'desc3',
    'type' => 'textarea'
);
$options[] = array(
    'name' => __( '', 'fwdown' ),
    'desc' => __( '版块三背景', 'fwdown' ),
    'id' => 'bg3',
    'type' => 'upload'
);
$options[] = array(
    'name' => __( '', 'fwdown' ),
    'desc' => __( '版块三素材背景图片', 'fwdown' ),
    'id' => 'sucai3',
    'type' => 'upload'
);
$options[] = array(
    'name' => __( '', 'fwdown' ),
    'desc' => __( '版块三跳转按钮', 'fwdown' ),
    'id' => 'btn3_code',
    'type' => 'textarea'
);
//板块四

$options[] = array(
    'name' => __( '板块四设置', 'fwdown' ),
    'type' => 'heading'
);

$options[] = array(
    'name' => __( '版块四', 'fwdown' ),
    'desc' => __( '版权四的图片，文字信息更换', 'fwdown' ),
    'type' => 'info'
);

$options[] = array(
    'name' => __( '', 'fwdown' ),
    'desc' => __( '版块四标题设置', 'fwdown' ),
    'id' => 'title4',
    'type' => 'upload'
);

$options[] = array(
    'name' => __( '', 'fwdown' ),
    'desc' => __( '版块四描述', 'fwdown' ),
    'id' => 'desc4',
    'type' => 'textarea'
);
$options[] = array(
    'name' => __( '', 'fwdown' ),
    'desc' => __( '版块四背景', 'fwdown' ),
    'id' => 'bg4',
    'type' => 'upload'
);
$options[] = array(
    'name' => __( '', 'fwdown' ),
    'desc' => __( '版块四素材背景图片', 'fwdown' ),
    'id' => 'sucai4',
    'type' => 'upload'
);
$options[] = array(
    'name' => __( '', 'fwdown' ),
    'desc' => __( '版块四跳转按钮', 'fwdown' ),
    'id' => 'btn4_code',
    'type' => 'textarea'
);
//板块五


$options[] = array(
    'name' => __( '板块五设置', 'fwdown' ),
    'type' => 'heading'
);

$options[] = array(
    'name' => __( '版块五', 'fwdown' ),
    'desc' => __( '版权五的图片，文字信息更换', 'fwdown' ),
    'type' => 'info'
);

$options[] = array(
    'name' => __( '', 'fwdown' ),
    'desc' => __( '版块五标题设置', 'fwdown' ),
    'id' => 'title5',
    'type' => 'upload'
);

$options[] = array(
    'name' => __( '', 'fwdown' ),
    'desc' => __( '版块五描述', 'fwdown' ),
    'id' => 'desc5',
    'type' => 'textarea'
);
$options[] = array(
    'name' => __( '', 'fwdown' ),
    'desc' => __( '版块五背景', 'fwdown' ),
    'id' => 'bg5',
    'type' => 'upload'
);
$options[] = array(
    'name' => __( '', 'fwdown' ),
    'desc' => __( '版块五素材背景图片', 'fwdown' ),
    'id' => 'sucai5',
    'type' => 'upload'
);
$options[] = array(
    'name' => __( '', 'fwdown' ),
    'desc' => __( '版块五跳转按钮', 'fwdown' ),
    'id' => 'btn5_code',
    'type' => 'textarea'
);

//板块六


$options[] = array(
    'name' => __( '板块六设置', 'fwdown' ),
    'type' => 'heading'
);

$options[] = array(
    'name' => __( '版块六', 'fwdown' ),
    'desc' => __( '版权六的图片，文字信息更换', 'fwdown' ),
    'type' => 'info'
);

$options[] = array(
    'name' => __( '', 'fwdown' ),
    'desc' => __( '版块六标题设置', 'fwdown' ),
    'id' => 'title6',
    'type' => 'upload'
);

$options[] = array(
    'name' => __( '', 'fwdown' ),
    'desc' => __( '版块六描述', 'fwdown' ),
    'id' => 'desc6',
    'type' => 'textarea'
);
$options[] = array(
    'name' => __( '', 'fwdown' ),
    'desc' => __( '版块六背景', 'fwdown' ),
    'id' => 'bg6',
    'type' => 'upload'
);
$options[] = array(
    'name' => __( '', 'fwdown' ),
    'desc' => __( '版块六素材背景图片', 'fwdown' ),
    'id' => 'sucai6',
    'type' => 'upload'
);
$options[] = array(
    'name' => __( '', 'fwdown' ),
    'desc' => __( '版块六跳转按钮', 'fwdown' ),
    'id' => 'btn6_code',
    'type' => 'textarea'
);
//板块七

$options[] = array(
    'name' => __( '板块七设置', 'fwdown' ),
    'type' => 'heading'
);

$options[] = array(
    'name' => __( '版块七', 'fwdown' ),
    'desc' => __( '版权七的图片，文字信息更换', 'fwdown' ),
    'type' => 'info'
);

$options[] = array(
    'name' => __( '', 'fwdown' ),
    'desc' => __( '版块七标题设置', 'fwdown' ),
    'id' => 'title7',
    'type' => 'upload'
);

$options[] = array(
    'name' => __( '', 'fwdown' ),
    'desc' => __( '版块七背景', 'fwdown' ),
    'id' => 'bg7',
    'type' => 'upload'
);

$options[] = array(
    'name' => __( '', 'fwdown' ),
    'desc' => __( '版块七跳转按钮', 'fwdown' ),
    'id' => 'btn7_code',
    'type' => 'textarea'
);
//板块八
	$options[] = array(
		'name' => __( 'Input Text Mini', 'fwdown' ),
		'desc' => __( 'A mini text input field.', 'fwdown' ),
		'id' => 'example_text_mini',
		'std' => 'Default',
		'class' => 'mini',
		'type' => 'text'
	);

	$options[] = array(
		'name' => __( 'Input Text', 'fwdown' ),
		'desc' => __( 'A text input field.', 'fwdown' ),
		'id' => 'example_text',
		'std' => 'Default Value',
		'type' => 'text'
	);

	$options[] = array(
		'name' => __( 'Example Info', 'fwdown' ),
		'desc' => __( 'This is just some example information you can put in the panel.', 'fwdown' ),
		'type' => 'info'
	);

	$options[] = array(
		'name' => __( 'Input Checkbox', 'fwdown' ),
		'desc' => __( 'Example checkbox, defaults to true.', 'fwdown' ),
		'id' => 'example_checkbox',
		'std' => '1',
		'type' => 'checkbox'
	);

	$options[] = array(
		'name' => __( 'Advanced Settings', 'fwdown' ),
		'type' => 'heading'
	);


	$options[] = array(
		'name' => __( 'Uploader Test', 'fwdown' ),
		'desc' => __( 'This creates a full size uploader that previews the image.', 'fwdown' ),
		'id' => 'example_uploader',
		'type' => 'upload'
	);
	
	$options[] = array(
		'name' => __( 'Text Editor', 'fwdown' ),
		'type' => 'heading'
	);

	/**
	 * For $settings options see:
	 * http://codex.wordpress.org/Function_Reference/wp_editor
	 *
	 * 'media_buttons' are not supported as there is no post to attach items to
	 * 'textarea_name' is set by the 'id' you choose
	 */

	$wp_editor_settings = array(
		'wpautop' => true, // Default
		'textarea_rows' => 5,
		'tinymce' => array( 'plugins' => 'wordpress,wplink' )
	);

	$options[] = array(
		'name' => __( 'Default Text Editor', 'fwdown' ),
		'desc' => sprintf( __( 'You can also pass settings to the editor.  Read more about wp_editor in <a href="%1$s" target="_blank">the WordPress codex</a>', 'fwdown' ), 'http://codex.wordpress.org/Function_Reference/wp_editor' ),
		'id' => 'example_editor',
		'type' => 'editor',
		'settings' => $wp_editor_settings
	);
	
	$options[] = array(
	    'name' => __( 'accordion', 'fwdown' ),
		'desc' => __( 'accordion.', 'fwdown' ),
		'id' => "example_accordion",
		'type' => 'accordion'
	);
	return $options;
}