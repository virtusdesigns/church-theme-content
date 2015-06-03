<?php
/**
 * Register Taxonomies
 *
 * @package    Church_Theme_Content
 * @subpackage Functions
 * @copyright  Copyright (c) 2013 - 2015, churchthemes.com
 * @link       https://github.com/churchthemes/church-theme-content
 * @license    http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 * @since      0.9
 */

// No direct access
if ( ! defined( 'ABSPATH' ) ) exit;

/**********************************
 * SERMON TAXONOMIES
 **********************************/

/**
 * Sermon topic
 *
 * @since 0.9
 */
function ctc_register_taxonomy_sermon_topic() {

	// Arguments
	$args = array(
		'labels' => array(
			'name' 							=> _x( 'Teaching Topics', 'taxonomy general name', 'church-theme-content' ),
			'singular_name'					=> _x( 'Teaching Topic', 'taxonomy singular name', 'church-theme-content' ),
			'search_items' 					=> _x( 'Search Topics', 'teachings', 'church-theme-content' ),
			'popular_items' 				=> _x( 'Popular Topics', 'teachings', 'church-theme-content' ),
			'all_items' 					=> _x( 'All Topics', 'teachings', 'church-theme-content' ),
			'parent_item' 					=> null,
			'parent_item_colon' 			=> null,
			'edit_item' 					=> _x( 'Edit Topic', 'teachings', 'church-theme-content' ),
			'update_item' 					=> _x( 'Update Topic', 'teachings', 'church-theme-content' ),
			'add_new_item' 					=> _x( 'Add Topic', 'teachings', 'church-theme-content' ),
			'new_item_name' 				=> _x( 'New Topic', 'teachings', 'church-theme-content' ),
			'separate_items_with_commas' 	=> _x( 'Separate topics with commas', 'teachings', 'church-theme-content' ),
			'add_or_remove_items' 			=> _x( 'Add or remove topics', 'teachings', 'church-theme-content' ),
			'choose_from_most_used' 		=> _x( 'Choose from the most used topics', 'teachings', 'church-theme-content' ),
			'menu_name' 					=> _x( 'Topics', 'teaching menu name', 'church-theme-content' )
		),
		'hierarchical'	=> true, // category-style instead of tag-style
		'public' 		=> ctc_taxonomy_supported( 'teachings', 'ctc_sermon_topic' ),
		'rewrite' 		=> array(
			'slug' 			=> 'teaching-topic',
			'with_front' 	=> false,
			'hierarchical' 	=> true
		)
	);
	$args = apply_filters( 'ctc_taxonomy_sermon_topic_args', $args ); // allow filtering

	// Registration
	register_taxonomy(
		'ctc_sermon_topic',
		'ctc_sermon',
		$args
	);

}

add_action( 'init', 'ctc_register_taxonomy_sermon_topic' );

/**
 * Sermon book
 *
 * @since 0.9
 */
function ctc_register_taxonomy_sermon_book() {

	// Arguments
	$args = array(
		'labels' => array(
			'name' 							=> _x( 'Teaching Books', 'taxonomy general name', 'church-theme-content' ),
			'singular_name'					=> _x( 'Teaching Book', 'taxonomy singular name', 'church-theme-content' ),
			'search_items' 					=> _x( 'Search Books', 'teachings', 'church-theme-content' ),
			'popular_items' 				=> _x( 'Popular Books', 'teachings', 'church-theme-content' ),
			'all_items' 					=> _x( 'All Books', 'teachings', 'church-theme-content' ),
			'parent_item' 					=> null,
			'parent_item_colon' 			=> null,
			'edit_item' 					=> _x( 'Edit Book', 'teachings', 'church-theme-content' ),
			'update_item' 					=> _x( 'Update Book', 'teachings', 'church-theme-content' ),
			'add_new_item' 					=> _x( 'Add Book', 'teachings', 'church-theme-content' ),
			'new_item_name' 				=> _x( 'New Book', 'teaching', 'church-theme-content' ),
			'separate_items_with_commas' 	=> _x( 'Separate books with commas', 'teachings', 'church-theme-content' ),
			'add_or_remove_items' 			=> _x( 'Add or remove books', 'teachings', 'church-theme-content' ),
			'choose_from_most_used' 		=> _x( 'Choose from the most used books', 'teachings', 'church-theme-content' ),
			'menu_name' 					=> _x( 'Books', 'teaching menu name', 'church-theme-content' )
		),
		'hierarchical'	=> true, // category-style instead of tag-style
		'public' 		=> ctc_taxonomy_supported( 'teachings', 'ctc_sermon_book' ),
		'rewrite' 		=> array(
			'slug' 			=> 'teaching-book',
			'with_front' 	=> false,
			'hierarchical' 	=> true
		)
	);
	$args = apply_filters( 'ctc_taxonomy_sermon_book_args', $args ); // allow filtering

	// Registration
	register_taxonomy(
		'ctc_sermon_book',
		'ctc_sermon',
		$args
	);

}

add_action( 'init', 'ctc_register_taxonomy_sermon_book' );

/**
 * Sermon series
 *
 * @since 0.9
 */
function ctc_register_taxonomy_sermon_series() {

	// Arguments
	$args = array(
		'labels' => array(
			'name' 							=> _x( "Teaching Series", 'taxonomy general name', 'church-theme-content' ),
			'singular_name'					=> _x( "T Series", 'taxonomy singular name', 'church-theme-content' ),
			'search_items' 					=> _x( "Search Series", 'teachings', 'church-theme-content' ),
			'popular_items' 				=> _x( "Popular Series", 'teachings', 'church-theme-content' ),
			'all_items' 					=> _x( "All Series", 'teachings', 'church-theme-content' ),
			'parent_item' 					=> null,
			'parent_item_colon' 			=> null,
			'edit_item' 					=> _x( 'Edit Series', 'teachings', 'church-theme-content' ),
			'update_item' 					=> _x( 'Update Series', 'teachings', 'church-theme-content' ),
			'add_new_item' 					=> _x( 'Add Series', 'teachings', 'church-theme-content' ),
			'new_item_name' 				=> _x( 'New Series', 'teachings', 'church-theme-content' ),
			'separate_items_with_commas' 	=> _x( "Separate series with commas", 'teachings', 'church-theme-content' ),
			'add_or_remove_items' 			=> _x( "Add or remove series", 'teachings', 'church-theme-content' ),
			'choose_from_most_used' 		=> _x( "Choose from the most used series", 'teachings', 'church-theme-content' ),
			'menu_name' 					=> _x( "Series", 'teaching menu name', 'church-theme-content' )
		),
		'hierarchical'	=> true, // category-style instead of tag-style
		'public' 		=> ctc_taxonomy_supported( 'teachings', 'ctc_sermon_series' ),
		'rewrite' 		=> array(
			'slug' 			=> 'teaching-series',
			'with_front' 	=> false,
			'hierarchical' 	=> true
		)
	);
	$args = apply_filters( 'ctc_taxonomy_sermon_series_args', $args ); // allow filtering

	// Registration
	register_taxonomy(
		'ctc_sermon_series',
		'ctc_sermon',
		$args
	);

}

add_action( 'init', 'ctc_register_taxonomy_sermon_series' );

/**
 * Sermon speaker
 *
 * @since 0.9
 */
function ctc_register_taxonomy_sermon_speaker() {

	// Arguments
	$args = array(
		'labels' => array(
			'name' 							=> _x( 'Teaching Speakers', 'taxonomy general name', 'church-theme-content' ),
			'singular_name'					=> _x( 'Teaching Speaker', 'taxonomy singular name', 'church-theme-content' ),
			'search_items' 					=> _x( 'Search Speakers', 'teachings', 'church-theme-content' ),
			'popular_items' 				=> _x( 'Popular Speakers', 'teachings', 'church-theme-content' ),
			'all_items' 					=> _x( 'All Speakers', 'teachings', 'church-theme-content' ),
			'parent_item' 					=> null,
			'parent_item_colon' 			=> null,
			'edit_item' 					=> _x( 'Edit Speaker', 'teachings', 'church-theme-content' ),
			'update_item' 					=> _x( 'Update Speaker', 'teachings', 'church-theme-content' ),
			'add_new_item' 					=> _x( 'Add Speaker', 'teachings', 'church-theme-content' ),
			'new_item_name' 				=> _x( 'New Speaker', 'teachings', 'church-theme-content' ),
			'separate_items_with_commas' 	=> _x( 'Separate speakers with commas', 'teachings', 'church-theme-content' ),
			'add_or_remove_items' 			=> _x( 'Add or remove speakers', 'teachings', 'church-theme-content' ),
			'choose_from_most_used' 		=> _x( 'Choose from the most used speakers', 'teachings', 'church-theme-content' ),
			'menu_name' 					=> _x( 'Speakers', 'teaching menu name', 'church-theme-content' )
		),
		'hierarchical'	=> true, // category-style instead of tag-style
		'public' 		=> ctc_taxonomy_supported( 'teachings', 'ctc_sermon_speaker' ),
		'rewrite' 		=> array(
			'slug' 			=> 'teaching-speaker',
			'with_front' 	=> false,
			'hierarchical' 	=> true
		)
	);
	$args = apply_filters( 'ctc_taxonomy_sermon_speaker_args', $args ); // allow filtering

	// Registration
	register_taxonomy(
		'ctc_sermon_speaker',
		'ctc_sermon',
		$args
	);

}

add_action( 'init', 'ctc_register_taxonomy_sermon_speaker' );

/**
 * Sermon tag
 *
 * @since 0.9
 */
function ctc_register_taxonomy_sermon_tag() {

	// Arguments
	$args = array(
		'labels' => array(
			'name' 							=> _x( 'Teaching Tags', 'taxonomy general name', 'church-theme-content' ),
			'singular_name'					=> _x( 'Teaching Tag', 'taxonomy singular name', 'church-theme-content' ),
			'search_items' 					=> _x( 'Search Tags', 'teachings', 'church-theme-content' ),
			'popular_items' 				=> _x( 'Popular Tags', 'teachings', 'church-theme-content' ),
			'all_items' 					=> _x( 'All Tags', 'teachings', 'church-theme-content' ),
			'parent_item' 					=> null,
			'parent_item_colon' 			=> null,
			'edit_item' 					=> _x( 'Edit Tag', 'teachings', 'church-theme-content' ),
			'update_item' 					=> _x( 'Update Tag', 'teachings', 'church-theme-content' ),
			'add_new_item' 					=> _x( 'Add Tag', 'teachings', 'church-theme-content' ),
			'new_item_name' 				=> _x( 'New Tag', 'teachings', 'church-theme-content' ),
			'separate_items_with_commas' 	=> _x( 'Separate tags with commas', 'teachings', 'church-theme-content' ),
			'add_or_remove_items' 			=> _x( 'Add or remove tags', 'teachings', 'church-theme-content' ),
			'choose_from_most_used' 		=> _x( 'Choose from the most used tags', 'teachings', 'church-theme-content' ),
			'menu_name' 					=> _x( 'Tags', 'teaching menu name', 'church-theme-content' )
		),
		'hierarchical'	=> false, // tag style instead of category style
		'public' 		=> ctc_taxonomy_supported( 'teachings', 'ctc_sermon_tag' ),
		'rewrite' 		=> array(
			'slug' 			=> 'teaching-tag',
			'with_front'	=> false,
			'hierarchical' 	=> true
		)
	);
	$args = apply_filters( 'ctc_taxonomy_sermon_tag_args', $args ); // allow filtering

	// Registration
	register_taxonomy(
		'ctc_sermon_tag',
		'ctc_sermon',
		$args
	);

}

add_action( 'init', 'ctc_register_taxonomy_sermon_tag' );

/**********************************
 * EVENT TAXONOMIES
 **********************************/

/**
 * Event category
 *
 * @since 1.3
 */
function ctc_register_taxonomy_event_category() {

	// Arguments
	$args = array(
		'labels' => array(
			'name' 							=> _x( 'Event Categories', 'taxonomy general name', 'church-theme-content' ),
			'singular_name'					=> _x( 'Event Category', 'taxonomy singular name', 'church-theme-content' ),
			'search_items' 					=> _x( 'Search Categories', 'events', 'church-theme-content' ),
			'popular_items' 				=> _x( 'Popular Categories', 'events', 'church-theme-content' ),
			'all_items' 					=> _x( 'All Categories', 'events', 'church-theme-content' ),
			'parent_item' 					=> null,
			'parent_item_colon' 			=> null,
			'edit_item' 					=> _x( 'Edit Event Category', 'events', 'church-theme-content' ),
			'update_item' 					=> _x( 'Update Event Category', 'events', 'church-theme-content' ),
			'add_new_item' 					=> _x( 'Add Category', 'events', 'church-theme-content' ),
			'new_item_name' 				=> _x( 'New Category', 'events', 'church-theme-content' ),
			'separate_items_with_commas' 	=> _x( 'Separate categories with commas', 'events', 'church-theme-content' ),
			'add_or_remove_items' 			=> _x( 'Add or remove categories', 'events', 'church-theme-content' ),
			'choose_from_most_used' 		=> _x( 'Choose from the most used categories', 'events', 'church-theme-content' ),
			'menu_name' 					=> _x( 'Categories', 'event menu name', 'church-theme-content' )
		),
		'hierarchical'	=> true, // category-style instead of tag-style
		'public' 		=> ctc_taxonomy_supported( 'events', 'ctc_event_category' ),
		'rewrite' 		=> array(
			'slug' 			=> 'event-category',
			'with_front' 	=> false,
			'hierarchical' 	=> true
		)
	);
	$args = apply_filters( 'ctc_taxonomy_event_category_args', $args ); // allow filtering

	// Registration
	register_taxonomy(
		'ctc_event_category',
		'ctc_event',
		$args
	);

}

add_action( 'init', 'ctc_register_taxonomy_event_category' );

/**********************************
 * PERSON TAXONOMIES
 **********************************/

/**
 * Person group
 *
 * @since 0.9
 */
function ctc_register_taxonomy_person_group() {

	// Arguments
	$args = array(
		'labels' => array(
			'name' 							=> _x( 'Groups', 'taxonomy general name', 'church-theme-content' ),
			'singular_name'					=> _x( 'Group', 'taxonomy singular name', 'church-theme-content' ),
			'search_items' 					=> _x( 'Search Groups', 'people', 'church-theme-content' ),
			'popular_items' 				=> _x( 'Popular Groups', 'people', 'church-theme-content' ),
			'all_items' 					=> _x( 'All Groups', 'people', 'church-theme-content' ),
			'parent_item' 					=> null,
			'parent_item_colon' 			=> null,
			'edit_item' 					=> _x( 'Edit Group', 'people', 'church-theme-content' ),
			'update_item' 					=> _x( 'Update Group', 'people', 'church-theme-content' ),
			'add_new_item' 					=> _x( 'Add Group', 'people', 'church-theme-content' ),
			'new_item_name' 				=> _x( 'New Group', 'people', 'church-theme-content' ),
			'separate_items_with_commas' 	=> _x( 'Separate groups with commas', 'people', 'church-theme-content' ),
			'add_or_remove_items' 			=> _x( 'Add or remove groups', 'people', 'church-theme-content' ),
			'choose_from_most_used' 		=> _x( 'Choose from the most used groups', 'people', 'church-theme-content' ),
			'menu_name' 					=> _x( 'Groups', 'people menu name', 'church-theme-content' )
		),
		'hierarchical'	=> true, // category-style instead of tag-style
		'public' 		=> ctc_taxonomy_supported( 'people', 'ctc_person_group' ),
		'rewrite' 		=> array(
			'slug' 			=> 'group',
			'with_front' 	=> false,
			'hierarchical' 	=> true
		)
	);
	$args = apply_filters( 'ctc_taxonomy_person_group_args', $args ); // allow filtering

	// Registration
	register_taxonomy(
		'ctc_person_group',
		'ctc_person',
		$args
	);

}

add_action( 'init', 'ctc_register_taxonomy_person_group' );
