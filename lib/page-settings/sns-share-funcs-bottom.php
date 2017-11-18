<?php //NS設定に必要な定数や関数

//ボトムシェアボタンの表示
define('OP_SNS_BOTTOM_SHARE_BUTTONS_VISIBLE', 'sns_bottom_share_buttons_visible');
if ( !function_exists( 'is_sns_bottom_share_buttons_visible' ) ):
function is_sns_bottom_share_buttons_visible(){
  return get_theme_option(OP_SNS_BOTTOM_SHARE_BUTTONS_VISIBLE, 1);
}
endif;

//ボトムSNSシェアメッセージ
define('OP_SNS_BOTTOM_SHARE_MESSAGE', 'sns_bottom_share_message');
if ( !function_exists( 'get_sns_bottom_share_message' ) ):
function get_sns_bottom_share_message(){
  return get_theme_option(OP_SNS_BOTTOM_SHARE_MESSAGE, 'シェアする');
}
endif;

//ボトムTwitterシェアボタンの表示
define('OP_BOTTOM_TWITTER_SHARE_BUTTON_VISIBLE', 'bottom_twitter_share_button_visible');
if ( !function_exists( 'is_bottom_twitter_share_button_visible' ) ):
function is_bottom_twitter_share_button_visible(){
  return get_theme_option(OP_BOTTOM_TWITTER_SHARE_BUTTON_VISIBLE, 1);
}
endif;

//ボトムFacebookシェアボタンの表示
define('OP_BOTTOM_FACEBOOK_SHARE_BUTTON_VISIBLE', 'facebook_share_button_visible');
if ( !function_exists( 'is_facebook_share_button_visible' ) ):
function is_facebook_share_button_visible(){
  return get_theme_option(OP_BOTTOM_FACEBOOK_SHARE_BUTTON_VISIBLE, 1);
}
endif;

//ボトムはてなブックマークシェアボタンの表示
define('OP_HATEBU_SHARE_BUTTON_VISIBLE', 'hatebu_share_button_visible');
if ( !function_exists( 'is_hatebu_share_button_visible' ) ):
function is_hatebu_share_button_visible(){
  return get_theme_option(OP_HATEBU_SHARE_BUTTON_VISIBLE, 1);
}
endif;

//ボトムGoogle+シェアボタンの表示
define('OP_GOOGLE_PLUS_SHARE_BUTTON_VISIBLE', 'google_plus_share_button_visible');
if ( !function_exists( 'is_google_plus_share_button_visible' ) ):
function is_google_plus_share_button_visible(){
  return get_theme_option(OP_GOOGLE_PLUS_SHARE_BUTTON_VISIBLE, 1);
}
endif;

//ボトムPocketシェアボタンの表示
define('OP_POCKET_SHARE_BUTTON_VISIBLE', 'pocket_share_button_visible');
if ( !function_exists( 'is_pocket_share_button_visible' ) ):
function is_pocket_share_button_visible(){
  return get_theme_option(OP_POCKET_SHARE_BUTTON_VISIBLE, 1);
}
endif;

//ボトムLINE@シェアボタンの表示
define('OP_LINE_AT_SHARE_BUTTON_VISIBLE', 'line_at_share_button_visible');
if ( !function_exists( 'is_line_at_share_button_visible' ) ):
function is_line_at_share_button_visible(){
  return get_theme_option(OP_LINE_AT_SHARE_BUTTON_VISIBLE, 1);
}
endif;

//ボトムSNSシェアボタンカラー
define('OP_SNS_SHARE_BUTTON_COLOR', 'sns_share_button_color');
if ( !function_exists( 'get_sns_share_button_color' ) ):
function get_sns_share_button_color(){
  return get_theme_option(OP_SNS_SHARE_BUTTON_COLOR, 'brand_color');
}
endif;

//ボトムSNSシェアボタンのカラム数
define('OP_SNS_SHARE_COLUMN_COUNT', 'sns_share_column_count');
if ( !function_exists( 'get_sns_share_column_count' ) ):
function get_sns_share_column_count(){
  return get_theme_option(OP_SNS_SHARE_COLUMN_COUNT, 3);
}
endif;

//ボトムSNSシェアボタンのロゴとキャプションの位置
define('OP_SNS_SHARE_LOGO_CAPTION_POSITION', 'sns_share_logo_caption_position');
if ( !function_exists( 'get_sns_share_logo_caption_position' ) ):
function get_sns_share_logo_caption_position(){
  return get_theme_option(OP_SNS_SHARE_LOGO_CAPTION_POSITION, 'left_and_right');
}
endif;
