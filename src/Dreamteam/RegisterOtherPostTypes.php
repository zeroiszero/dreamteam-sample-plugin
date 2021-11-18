<?php
/**
 * Register custom post types
 *
 * @package Dreamteam
 */
namespace Dreamteam;

class RegisterOtherPostTypes {
  /**
    * Run the actions
    */
  static function run() {
    add_action('init', array(get_called_class(), 'register_other_post_type'));
  }

  /**
  * Register Team Member Post Type
  *
  * @access static
  * @return void
  */
  static function register_other_post_type() {
    register_post_type( 'other',
      array(
        'labels' => array(
          'name'          => __( 'Other' ),
          'singular_name' => __( 'Other Member' ),
          'all_items'     => __( 'All Other Members' ),
          'add_new'       => __( 'Add Other Member' ),
          'add_new_item'  => __( 'Add New Other Member' ),
          'edit_item'     => __( 'Edit Other Member' ),
        ),
        'exclude_from_search' => false,
        'has_archive'         => true,
        'public'              => true,
        'rewrite'             => true,
        'show_in_nav_menus'   => false,
        'show_ui'             => true,
        'supports'            => array('title', 'editor', 'thumbnail')
      )
    );
  }
}

RegisterOtherPostTypes::run();
