<?php

namespace WPS;


if (!defined('ABSPATH')) {
	exit;
}


if (!class_exists('Utils')) {

	class Utils {

	  /*

	  Checks for a valid backend nonce
	  - Predicate Function (returns boolean)

	  */
	  public static function valid_backend_nonce($nonce) {
	    return wp_verify_nonce($nonce, WPS_BACKEND_NONCE_ACTION);
	  }


	  /*

	  Checks for a valid frontend nonce
	  - Predicate Function (returns boolean)

	  */
	  public static function valid_frontend_nonce($nonce) {
			return wp_verify_nonce($nonce, WPS_FRONTEND_NONCE_ACTION);
	  }


	  /*

	  Filter errors
	  - Predicate Function (returns boolean)

	  */
	  public static function filter_errors($item) {
	    return is_wp_error($item);
	  }


		/*

	  Filter errors
	  - Predicate Function (returns boolean)

	  */
	  public static function filter_error_messages($error) {

			if (isset($error->errors) && isset($error->errors['error'])) {
				return $error->errors['error'][0];
			}

	  }

		public static function filter_non_empty($item) {
			return !empty($item);
		}


		/*

		Helper for throwing WP_Errors

		*/
		public static function wp_error($message) {
			return new \WP_Error('error', $message);
		}


		/*

		Loops through items and returns only those with values
		of WP_Error instances

		*/
		public static function return_only_errors($items) {
			return array_filter($items, [__CLASS__, 'filter_errors'], ARRAY_FILTER_USE_BOTH);
		}


		/*

		Loops through items and returns only those with values
		of WP_Error instances

		*/
		public static function return_only_error_messages($array_of_errors) {
			return array_values( array_map([__CLASS__, 'filter_error_messages'], $array_of_errors) );
		}


	  /*

	  Filter Errors With Messages

	  */
	  public function filter_errors_with_messages($title, $error) {
	    return $error->get_error_message();
	  }


		/*

		Loops through items and returns only those with values
		of WP_Error instances

		*/
		public static function return_non_empty($items) {
			return array_filter($items, [__CLASS__, 'filter_non_empty'], ARRAY_FILTER_USE_BOTH);
		}


	  /*

	  Generate and return hash

	  */
	  public static function hash_unique($content) {
	    return wp_hash($content);
	  }


		/*

	  Generate and return hash

	  */
	  public static function hash_static($content) {
	    return md5($content);
	  }


		/*

	  Generate and return hash

	  */
	  public static function hash_static_num($content) {
			return crc32( self::hash_static($content) );
	  }


	  /*

	  Sort Product Images

	  */
	  public static function sort_product_images($a, $b) {

			$a = self::convert_array_to_object($a);
			$b = self::convert_array_to_object($b);

	    $a = (int) $a->position;
	    $b = (int) $b->position;

	    if ($a == $b) {
	      return 0;
	    }

	    return ($a < $b) ? -1 : 1;

	  }


		/*

	  Sort Product Images By Position

		TODO: Need to check if this passes or fails

	  */
	  public static function sort_product_images_by_position($images) {

			if ( is_array($images) ) {
				usort($images, array(__CLASS__, "sort_product_images"));
			}

			return $images;

	  }


	  /*

	  Empty Connection
	  - Predicate Function (returns boolean)

	  */
	  public static function emptyConnection($connection) {

	    if (!is_object($connection)) {
	      return true;

	    } else {

	      if (property_exists($connection, 'api_key') && $connection->api_key) {
	        return false;

	      } else {
	        return true;

	      }

	    }

	  }



	  /*

	  Back From Shopify
	  - Predicate Function (returns boolean)

	  */
	  public static function backFromShopify() {

	    if(isset($_GET["auth"]) && trim($_GET["auth"]) == 'true') {
	      return true;

	    } else {
	      return false;
	    }

	  }


	  /*

	  Is Manually Sorted
	  - Predicate Function (returns boolean)

	  */
	  public static function wps_is_manually_sorted($shortcodeArgs) {

	    if (isset($shortcodeArgs['custom']) && isset($shortcodeArgs['custom']['titles']) && isset($shortcodeArgs['custom']['orderby']) && is_array($shortcodeArgs['custom']['titles']) && $shortcodeArgs['custom']['orderby'] === 'manual') {
	      return true;

	    } else {
	      return false;
	    }

	  }


	  /*

	  Construct proper path to wp-admin folder

	  */
	  public static function wps_manually_sort_posts_by_title($sortedArray, $unsortedArray) {

	    $finalArray = array();

	    foreach ($sortedArray as $key => $needle) {

	      foreach ($unsortedArray as $key => $post) {

	        if ($post->title === $needle) {
	          $finalArray[] = $post;
	        }

	      }

	    }

	    return $finalArray;

	  }


	  /*

	  Construct proper path to wp-admin folder

	  */
	  public static function construct_admin_path_from_urls($homeURL, $adminURL) {

			if (strpos($homeURL, 'https://') !== false) {
				$homeProtocol = 'https';

			} else {
				$homeProtocol = 'http';
			}

			if (strpos($adminURL, 'https://') !== false) {
				$adminProtocol = 'https';

			} else {
				$adminProtocol = 'http';
			}

			$explodedHome = explode($homeProtocol, $homeURL);
			$explodedAdmin = explode($adminProtocol, $adminURL);

			$explodedHomeFiltered = array_values(array_filter($explodedHome))[0];
			$explodedAdminFiltered = array_values(array_filter($explodedAdmin))[0];

			$adminPath = explode($explodedHomeFiltered, $explodedAdminFiltered);

			return array_values(array_filter($adminPath))[0];

	  }


		/*

		Returns the first item in an array

		*/
		public static function get_first_array_item($array) {

			reset($array);
			return current($array);

		}


	  /*

	  extract_ids_from_object

	  */
	  public static function extract_ids_from_object($items) {

	    $item_ids = array();

	    foreach ($items as $key => $item) {
	      $item_ids[] = $item->id;
	    }

	    return $item_ids;

	  }


		public static function lessen_array_by($array, $criteria = []) {

			return array_map(function($obj) use($criteria) {
				return Utils::keep_only_props($obj, $criteria);
			}, $array);

		}


		public static function keep_only_props($obj, $props) {

			foreach ($obj as $key => $value) {

				if (!in_array($key, $props)) {
					unset($obj->$key);
				}

			}

			return $obj;

		}


	  /*

	  convert_to_comma_string

	  */
	  public static function convert_to_comma_string($items) {
	    return implode(', ', $items);
	  }


		/*

	  convert_to_comma_string

	  */
	  public static function convert_to_comma_string_backticks($items) {
	    return implode('`, `', $items);
	  }


	  /*

	  Get single shop info value

	  */
	  public static function flatten_image_prop($items) {

	    $items_copy = $items;
			$items_copy = Utils::convert_array_to_object($items_copy);

	    if ( self::has($items_copy, 'image') && self::has($items_copy->image, 'src') ) {
				$items_copy->image = $items_copy->image->src;

			} else {
				$items_copy->image = '';
			}

	    return $items_copy;

	  }


	  /*

	  $items = Items currently living in database to compare against
	  $diff = An array of IDs to be deleted from database

		Returns Array

		TODO: This could be slow if we need to loop through all products ... revist

	  */
	  public static function filter_items_by_id($items, $diff, $keyToCheck = 'id') {

	    $finalResuts = [];

	    foreach ($items as $key => $value) {

	      foreach ($diff as $key => $diffID) {

	        if (is_object($value)) {

	          if ($diffID === $value->$keyToCheck) {
	            $finalResuts[] = $value;
	          }

	        } else {

	          if ($diffID === $value[$keyToCheck]) {
	            $finalResuts[] = $value;
	          }

	        }

	      }

	    }

	    return $finalResuts;

	  }


		public static function gather_item_ids($current_items, $new_items, $num_dimensions, $key_to_check) {

			return [
				'current'	=> self::get_item_ids($current_items, $num_dimensions, $key_to_check),
				'new'			=> self::get_item_ids($new_items, $num_dimensions, $key_to_check)
			];

		}


	  /*

	  Find Items to Delete

		Returns Array

	  */
	  public static function find_items_to_delete($current_items, $new_items, $num_dimensions = false, $key_to_check = 'id') {

			$ids_to_check = self::gather_item_ids($current_items, $new_items, $num_dimensions, $key_to_check);

			// Deletes ids in 'current' that arent in 'new'
	    $difference = array_values( array_diff($ids_to_check['current'], $ids_to_check['new']) );

	    return self::filter_items_by_id($current_items, $difference, $key_to_check);

	  }


	  /*

	  @param $current_items = array of arrays
	  @param $new_items = array of arrays

		Returns Array

	  */
	  public static function find_items_to_add($current_items, $new_items, $num_dimensions = false, $key_to_check = 'id') {

			$ids_to_check = self::gather_item_ids($current_items, $new_items, $num_dimensions, $key_to_check);

			// Adds ids from 'new' that arent in 'current'
	    $difference = array_values( array_diff($ids_to_check['new'], $ids_to_check['current']) );

	    return self::filter_items_by_id($new_items, $difference, $key_to_check);

	  }


	  /*

	  get_item_ids

	  */
	  public static function get_item_ids($items, $one_dimension = false, $key_to_check = 'id') {

	    $items = self::convert_to_assoc_array($items);

	    $results = [];

	    if ($one_dimension) {

	      foreach ($items as $item) {

	        if (isset($item[$key_to_check]) && $item[$key_to_check]) {
	          $results[] = $item[$key_to_check];
	        }

	      }

	    } else {

	      foreach ($items as $sub_array) {

	        foreach ($sub_array as $item) {

	          if (isset($item[$key_to_check]) && $item[$key_to_check]) {
	            $results[] = $item[$key_to_check];
	          }

	        }

	      }

	    }

	    return $results;

	  }


	  /*

	  convert_object_to_array

	  */
	  public static function convert_object_to_array($maybe_object) {

			if ( is_array($maybe_object) ) {
				return $maybe_object;
			}

			// Unable to convert to Object from these. Return false.
			if (is_float($maybe_object) || is_int($maybe_object) || is_bool($maybe_object)) {
				return self::wp_error( __('Unabled to convert data type to Array', WPS_PLUGIN_TEXT_DOMAIN ) );
			}

			return (array) $maybe_object;

	  }


		/*

	  Converts an array to object

	  */
	  public static function convert_array_to_object($maybe_array) {

			if (is_object($maybe_array)) {
				return $maybe_array;
			}

			// Unable to convert to Object from these. Return false.
			if (is_float($maybe_array) || is_int($maybe_array) || is_bool($maybe_array)) {
				return self::wp_error( __('Unabled to convert data type to Object', WPS_PLUGIN_TEXT_DOMAIN ) );
			}

			if (is_array($maybe_array)) {
				return json_decode( json_encode($maybe_array), false );
			}

	  }


		/*

	  Converts to an associative array

	  */
		public static function convert_to_assoc_array($items) {
			return json_decode( json_encode($items), true );
		}


	  /*

	  Maybe serialize data

	  */
	  public static function serialize_data_for_db($data) {

	    $dataSerialized = array();

	    foreach ($data as $key => $value) {

				/*

				IMPORTANT -- Need to check for both Array and Objects
				otherwise the following error is thrown and data not saved:

				mysqli_real_escape_string() expects parameter 2 to be string, object given

				*/
	      if (is_array($value) || is_object($value)) {
	        $value = maybe_serialize($value);
	      }

	      $dataSerialized[$key] = $value;

	    }

	    return $dataSerialized;

	  }


	  /*

	  Add product data to database

	  */
	  public static function wps_get_domain_prefix($domain) {

	    $prefix = explode(WPS_SHOPIFY_DOMAIN_SUFFIX, $domain);

	    return $prefix[0];

	  }


	  /*

		Remove all spaces from string

		*/
		public static function wps_mask_value($string) {
	    $length = strlen($string);
	    $stringNew = str_repeat('•', $length - 4) . $string[$length-4] . $string[$length-3] . $string[$length-2] . $string[$length-1];
			return $stringNew;
		}


	  /*

		Remove all spaces from string

		*/
		public static function wps_remove_spaces_from_string($string) {
			return str_replace(' ', '', $string);
		}













		public static function construct_flattened_object($items_flattened, $type) {

			$items_obj = new \stdClass;
			$items_obj->{$type} = $items_flattened;

			return $items_obj;

		}



		public static function flatten_array_into_object($items, $type) {

			// Need to check since $items comes directly from a request
			if (is_wp_error($items)) {
				return $items;
			}

			$items_flattened = [];

			foreach ($items as $item_wrap) {

				foreach ($item_wrap as $single_item) {
					$items_flattened[] = $single_item;
				}

			}

			return self::construct_flattened_object($items_flattened, $type);

		}









































		/*

		Map products shortcode arguments

		Defines the available shortcode arguments by checking
		if they exist and applying them to the custom property.

		The returned value eventually gets passed to wps_clauses_mod

		*/
		public static function map_products_args_to_query($shortcodeArgs) {

			$shortcode_args = array(
				'post_type'         => WPS_PRODUCTS_POST_TYPE_SLUG,
				'post_status'       => 'publish',
				'paged'             => 1
			);

			//
			// Order
			//
			if ( !empty($shortcodeArgs['order']) ) {
				$shortcode_args['custom']['order'] = $shortcodeArgs['order'];
			}

			//
			// Order by
			//
			if ( !empty($shortcodeArgs['orderby']) ) {
				$shortcode_args['custom']['orderby'] = $shortcodeArgs['orderby'];
			}

			//
			// IDs
			//
			if ( !empty($shortcodeArgs['ids']) ) {
				$shortcode_args['custom']['ids'] = $shortcodeArgs['ids'];
			}

			//
			// Meta Slugs
			//
			if ( !empty($shortcodeArgs['slugs']) ) {
				$shortcode_args['custom']['slugs'] = $shortcodeArgs['slugs'];
			}

			//
			// Meta Title
			//
			if ( !empty($shortcodeArgs['titles']) ) {
				$shortcode_args['custom']['titles'] = $shortcodeArgs['titles'];
			}

			//
			// Descriptions
			//
			if ( !empty($shortcodeArgs['desc']) ) {
				$shortcode_args['custom']['desc'] = $shortcodeArgs['desc'];
			}

			//
			// Tags
			//
			if ( !empty($shortcodeArgs['tags']) ) {
				$shortcode_args['custom']['tags'] = $shortcodeArgs['tags'];
			}

			//
			// Vendors
			//
			if ( !empty($shortcodeArgs['vendors']) ) {
				$shortcode_args['custom']['vendors'] = $shortcodeArgs['vendors'];
			}

			//
			// Variants
			//
			if ( !empty($shortcodeArgs['variants']) ) {
				$shortcode_args['custom']['variants'] = $shortcodeArgs['variants'];
			}

			//
			// Type
			//
			if ( !empty($shortcodeArgs['types']) ) {
				$shortcode_args['custom']['types'] = $shortcodeArgs['types'];
			}

			//
			// Options
			//
			if ( !empty($shortcodeArgs['options']) ) {
				$shortcode_args['custom']['options'] = $shortcodeArgs['options'];
			}

			//
			// Available
			//
			if ( !empty($shortcodeArgs['available']) ) {
				$shortcode_args['custom']['available'] = $shortcodeArgs['available'];
			}

			//
			// Collections
			//
			if ( !empty($shortcodeArgs['collections']) ) {
				$shortcode_args['custom']['collections'] = $shortcodeArgs['collections'];
			}

			//
			// Collection Slugs
			//
			if ( !empty($shortcodeArgs['collection_slugs']) ) {
				$shortcode_args['custom']['collection_slugs'] = $shortcodeArgs['collection_slugs'];
			}

			//
			// Limit
			//
			if ( !empty($shortcodeArgs['limit']) ) {
				$shortcode_args['custom']['limit'] = $shortcodeArgs['limit'];
			}

			//
			// Items per row
			//
			if ( !empty($shortcodeArgs['items-per-row']) ) {
				$shortcode_args['custom']['items-per-row'] = $shortcodeArgs['items-per-row'];
			}

			//
			// Pagination
			//
			if ( !empty($shortcodeArgs['pagination']) ) {
				$shortcode_args['custom']['pagination'] = false;
			}

			//
			// Page
			//
			if ( !empty($shortcodeArgs['page']) ) {
				$shortcode_args['paged'] = $shortcodeArgs['page'];
			}

			//
			// Add to cart
			//
			if ( !empty($shortcodeArgs['add-to-cart']) ) {
				$shortcode_args['custom']['add-to-cart'] = $shortcodeArgs['add-to-cart'];
			}

			//
			// Breadcrumbs
			//
			if ( !empty($shortcodeArgs['breadcrumbs']) ) {
				$shortcode_args['custom']['breadcrumbs'] = $shortcodeArgs['breadcrumbs'];
			}

			//
			// Keep permalinks
			//
			if ( !empty($shortcodeArgs['keep-permalinks']) ) {
				$shortcode_args['custom']['keep-permalinks'] = $shortcodeArgs['keep-permalinks'];
			}

			return $shortcode_args;

		}


		/*

		Map collections shortcode arguments

		Defines the available shortcode arguments by checking
		if they exist and applying them to the custom property.

		The returned value eventually gets passed to wps_clauses_mod

		*/
		public static function map_collections_args_to_query($shortcodeArgs) {

			$query = array(
				'post_type'         => WPS_COLLECTIONS_POST_TYPE_SLUG,
				'post_status'       => 'publish',
				'paged'             => 1
			);

			//
			// Order
			//
			if (isset($shortcodeArgs['order']) && $shortcodeArgs['order']) {
				$shortcode_args['custom']['order'] = $shortcodeArgs['order'];
			}

			//
			// Order by
			//
			if (isset($shortcodeArgs['orderby']) && $shortcodeArgs['orderby']) {
				$shortcode_args['custom']['orderby'] = $shortcodeArgs['orderby'];
			}

			//
			// IDs
			//
			if (isset($shortcodeArgs['ids']) && $shortcodeArgs['ids']) {
				$shortcode_args['custom']['ids'] = $shortcodeArgs['ids'];
			}

			//
			// Meta Slugs
			//
			if (isset($shortcodeArgs['slugs']) && $shortcodeArgs['slugs']) {
				$shortcode_args['custom']['slugs'] = $shortcodeArgs['slugs'];
			}

			//
			// Meta Title
			//
			if (isset($shortcodeArgs['titles']) && $shortcodeArgs['titles']) {
				$shortcode_args['custom']['titles'] = $shortcodeArgs['titles'];
			}

			//
			// Descriptions
			//
			if (isset($shortcodeArgs['desc']) && $shortcodeArgs['desc']) {
				$shortcode_args['custom']['desc'] = $shortcodeArgs['desc'];
			}

			//
			// Limit
			//
			if (isset($shortcodeArgs['limit']) && $shortcodeArgs['limit']) {
				$shortcode_args['custom']['limit'] = $shortcodeArgs['limit'];
			}

			//
			// Items per row
			//
			if (isset($shortcodeArgs['items-per-row']) && $shortcodeArgs['items-per-row']) {
				$shortcode_args['custom']['items-per-row'] = $shortcodeArgs['items-per-row'];
			}

			//
			// Pagination
			//
			if (isset($shortcodeArgs['pagination'])) {
				$shortcode_args['custom']['pagination'] = false;
			}

			//
			// Breadcrumbs
			//
			if (isset($shortcodeArgs['breadcrumbs']) && $shortcodeArgs['breadcrumbs']) {
				$shortcode_args['custom']['breadcrumbs'] = $shortcodeArgs['breadcrumbs'];
			}

			//
			// Keep permalinks
			//
			if (isset($shortcodeArgs['keep-permalinks']) && $shortcodeArgs['keep-permalinks']) {
				$shortcode_args['custom']['keep-permalinks'] = $shortcodeArgs['keep-permalinks'];
			}

			return $shortcode_args;

		}


	  /*

	  Formats products shortcode args
	  Returns SQL query

	  TODO: Combine with wps_format_collections_shortcode_args

	  */
	  public static function wps_format_products_shortcode_args($shortcodeArgs) {

	    if ( isset($shortcodeArgs) && $shortcodeArgs ) {

	      foreach ($shortcodeArgs as $key => $arg) {

	        if (strpos($arg, ',') !== false) {
	          $shortcodeArgs[$key] = self::comma_list_to_array( trim($arg) );

	        } else {
	          $shortcodeArgs[$key] = trim($arg);

	        }

	      }

	      $productsQuery = self::map_products_args_to_query($shortcodeArgs);

	      return $productsQuery;


	    } else {
	      return array();

	    }

	  }


	  /*

	  Formats collections shortcode args
	  Returns SQL query

	  TODO: Combine with wps_format_products_shortcode_args

	  */
		public static function wps_format_collections_shortcode_args($shortcodeArgs) {

	    if ( isset($shortcodeArgs) && $shortcodeArgs ) {

	      foreach ($shortcodeArgs as $key => $arg) {

	        if (strpos($arg, ',') !== false) {
	          $shortcodeArgs[$key] = self::comma_list_to_array( trim($arg) );

	        } else {
	          $shortcodeArgs[$key] = trim($arg);

	        }

	      }

	      $collectionsQuery = self::map_collections_args_to_query($shortcodeArgs);
	      return $collectionsQuery;

	    } else {
	      return array();

	    }


		}


		/*

		Turns comma seperated list into array

		*/
		public static function comma_list_to_array($string) {
	    return array_map('trim', explode(',', $string));
		}



		public static function is_empty($array_or_object) {
			return count($array_or_object) <= 0;
		}



	  /*

		Removes duplicates

		*/
		public static function wps_remove_duplicates($collectionIDs) {

	    $dups = array();

	    foreach ( array_count_values($collectionIDs) as $collection => $ID ) {

	      if ($ID > 1) {
	        $dups[] = $collection;
	      }

		  }

	    return $dups;

	  }


	  /*

	  Delete product data from database

	  */
	  public static function wps_delete_product_data($postID, $type, $dataToDelete) {

	  	foreach ($dataToDelete as $key => $value) {
	  		delete_post_meta($postID, $type, $value);
	  	}

	  }


	  /*

	  Add product data to database

	  */
	  public static function wps_add_product_data($postID, $type, $dataToAdd) {

	    foreach ($dataToAdd as $key => $value) {
	      add_post_meta($postID, $type, $value);
	    }

	  }


	  /*

	  Return product collections

	  */
	  public static function wps_return_product_collections($collects) {

	    $collectionIDs = array();

	    foreach ($collects as $key => $value) {
	      array_push($collectionIDs, $collects[$key]->collection_id);
	    }

	    return $collectionIDs;

	  }


	  /*

	  Find existing products

	  */
	  public static function wps_find_existing_products() {

	    $existingProducts = array();

	    $posts = get_posts(array(
	      'posts_per_page'   => -1,
	      'post_type'        => WPS_PRODUCTS_POST_TYPE_SLUG,
	      'post_status'      => 'publish'
	    ));

	    foreach ($posts as $post) {
				$existingProducts[$post->ID] = $post->post_name;
			}

	    return $existingProducts;

	  }


	  /*

	  Get collection ID by Handle

	  */
	  public static function wps_get_collection_id_by_handle($handle) {

	    $args = array(
	      'post_type' => WPS_COLLECTIONS_POST_TYPE_SLUG,
	      'post_status' => 'publish',
	      'posts_per_page' -1,
	      'meta_query' => array(
	        array(
	          'key'    => 'wps_collection_handle',
	          'value'  => $handle
	        )
	      )
	    );

	    $collection = get_posts($args);


	    if(isset($collection) && $collection) {
	      $collectionID = get_post_meta( $collection[0]->ID, 'wps_collection_id', true );
	      return $collectionID;

	    } else {
	      return false;
	    }

	  }


	  /*

	  Construct Products Args

	  */
	  public function wps_construct_products_args() {

	    /*

	    Check what was passed in and contruct our arguments for WP_Query

	    */
	    if( isset($wps_shortcode_atts['collections']) && $wps_shortcode_atts['collections']) {

	      // Removing all spaces
	      // $collections = Utils::wps_remove_spaces_from_string($wps_shortcode_atts['collections']);

	      // If user passed in collection as handle, find ID version
	      if(!ctype_digit($wps_shortcode_atts['collections'])) {
	        $collections = Utils::wps_get_collection_id_by_handle($wps_shortcode_atts['collections']);
	      } else {
	        $collections = $wps_shortcode_atts['collections'];
	      }


	      // $collectionIDs = self::comma_list_to_array($collections);

	      $args = array(
	        'post_type' => WPS_PRODUCTS_POST_TYPE_SLUG,
	        'post_status' => 'publish',
	        'posts_per_page' => $wps_shortcode_atts['limit'] ? $wps_shortcode_atts['limit'] : -1,
	        'paged' => $paged,
	        'meta_query' => array(
	          array(
	            'key'    => 'wps_product_collections',
	            'value'  => $collections
	          )
	        )
	      );

	    } else {

	      if( isset($wps_shortcode_atts['products']) && $wps_shortcode_atts['products'] ) {
	        $products = Utils::wps_remove_spaces_from_string($wps_shortcode_atts['products']);
	        $productIDs = self::comma_list_to_array($products);

	        $args = array(
	          'post__in' => $productIDs,
	          'post_type' => WPS_PRODUCTS_POST_TYPE_SLUG,
	          'post_status' => 'publish',
	          'paged' => $paged,
	          'posts_per_page' => $wps_shortcode_atts['limit']
	        );

	      } else {

	        $args = array(
	          'post_type' => WPS_PRODUCTS_POST_TYPE_SLUG,
	          'post_status' => 'publish',
	          'paged' => $paged,
	          'posts_per_page' => $wps_shortcode_atts['limit']
	        );

	      }

	    }

	  }


		/*

		Checks if needle exists in associative array

		*/
		public static function in_assoc($needle, $array) {

			$key = array_keys($array);
	    $value = array_values($array);

	    if (in_array($needle,$key)) {
				return true;

			} elseif (in_array($needle,$value)) {
				return true;

			} else {
				return false;

			}

		}


		/*

		Responsible for checking whether a variant is available for
		purchase.  must be an (object)

		$variant is expected to have the following properties:

		$variant->inventory_management
		$variant->inventory_quantity
		$variant->inventory_policy

		*/
		public static function is_available_to_buy($variant) {

			if ( !is_object($variant) ) {
				$variant = self::convert_array_to_object($variant);
			}

			// User has set Shopify to track the product's inventory
			if ($variant->inventory_management === 'shopify') {

				// If the product's inventory is 0 or less than 0
				if ($variant->inventory_quantity <= 0) {

					// If 'Allow customers to purchase this product when it's out of stock' is unchecked
					if ($variant->inventory_policy === 'deny') {

						return false;

					} else {
						return true;
					}

				} else {
					return true;
				}

			// User has set product to "do not track inventory" (always able to purchase)
			} else {
				return true;

			}

		}


	  /*

	  Product Inventory
		Checks whether a product's variant(s) are in stock or not

	  */
	  public static function product_inventory($product, $variants = false) {

			$product = self::convert_array_to_object($product);

			if ($variants) {
				return array_values( array_filter($variants, [__CLASS__, 'is_available_to_buy']) );
			}

			if (!self::has($product, 'variants')) {
				return [];
			}

			return array_values( array_filter($product->variants, [__CLASS__, 'is_available_to_buy']) );

	  }


	  /*

	  Construct Option Selections

	  */
	  public static function construct_option_selections($selectedOptions) {

	    $newSelectedOptions = $selectedOptions;
	    $indexx = 1;

	    foreach ($newSelectedOptions as $key => $optionVal) {

				// stripcslashes is import incase user has quotes within variant name
	      $newSelectedOptions['option' . $indexx] = stripcslashes($optionVal);
	      $indexx++;

	      unset($newSelectedOptions[$key]);

	    }

	    return $newSelectedOptions;

	  }


	  /*

	  Filter Variants To Options Values

	  */
	  public static function filter_variants_to_options_values($variants) {

			$variants = self::convert_object_to_array($variants);

	    return array_map(function($variant) {

				$variant = (array) $variant;

	      return array_filter($variant, function($k, $v) {

	        return strpos($v, 'option') !== false;

	      }, ARRAY_FILTER_USE_BOTH );

	    }, $variants);

	  }


	  /*

	  Generic function to sort by a specific key / value

	  */
	  public static function sort_by($array, $key) {

			$array = self::convert_object_to_array($array);

	    usort($array, function($a, $b) use (&$key) {

				$a = self::convert_object_to_array($a);
				$b = self::convert_object_to_array($b);

	      $a = $a[$key];
	      $b = $b[$key];

	      if ($a == $b) return 0;
	      return ($a < $b) ? -1 : 1;

	    });

			return self::convert_array_to_object($array);

	  }


	  /*

	  Generic function to sort by a specific key / value

	  */
	  public static function shift_arrays_up($array) {

			$newArray = [];

			foreach ($array as $index => $countArray) {

				foreach ($countArray as $name => $count) {
					$newArray[$name] = $count;
				}

			}

			return $newArray;

	  }


		/*

	  Generic function to sort by a specific key / value

	  */
	  public static function get_current_page($postVariables) {

			if (!isset($postVariables['currentPage']) || !$postVariables['currentPage']) {
				$currentPage = 1;

			} else {
				$currentPage = $postVariables['currentPage'];
			}

			return $currentPage;

	  }


		/*

		Gets the number of button columns per product

		*/
		public static function get_product_button_width($product) {

			if (count($product->options) === 1) {

			  if (count($product->variants) > 1) {
			    $col = 2;

			  } else {
			    $col = 1;
			  }

			} else if (count($product->options) === 2) {
			  $col = 1;

			} else if (count($product->options) === 3) {
			  $col = 1;

			} else {
			  $col = 1;
			}

			return $col;

		}


		/*

		Ensures scripts don't timeout

		*/
		public static function prevent_timeouts() {

			if ( !function_exists('ini_get') || !ini_get('safe_mode') ) {
				@set_time_limit(0);
			}

		}


		/*

		Check is an Object has a property

		*/
		public static function has($item, $property) {

			if ( is_array($item) ) {
				$item = self::convert_array_to_object($item);
			}

			return is_object($item) && property_exists($item, $property) ? true : false;
		}


		/*

		Checks if item is NOT an empty array

		*/
		public static function array_not_empty($maybe_array) {

			if (is_array($maybe_array) && !empty($maybe_array)) {
				return true;

			} else {
				return false;
			}

		}


		/*

		Checks if item is an empty array

		*/
		public static function array_is_empty($maybe_array) {

			if (is_array($maybe_array) && empty($maybe_array)) {
				return true;

			} else {
				return false;
			}

		}


		/*

		Checks if item is an empty array

		*/
		public static function object_is_empty($object) {

			$object_copy = $object;
			$object_copy = (array) $object_copy;

			if ( count( array_filter($object_copy) ) == 0 ) {
				return true;

			} else {
				return false;
			}

		}


		/*

		If the product or collection has the Online Sales channel enabled ...

		If published_at is null, we know the user turned off the Online Store sales channel.
		TODO: Shopify may implement better sales channel checking in the future API. We should
		then check for Buy Button visibility as-well.

		*/
		public static function is_data_published($item) {

			if (property_exists($item, 'published_at') && $item->published_at !== null) {
				return true;

			} else {
				return false;
			}

		}


		/*

		Wraps something with an array

		*/
		public static function wrap_in_array($something) {

			if (!is_array($something)) {
				$something = [$something];
			}

			return $something;

		}


		/*

		Runs for every insertion and update to to DB

		*/
		public static function convert_needed_values_to_datetime($data_array) {

			$data_array = self::convert_object_to_array($data_array);

			foreach ($data_array as $key => $value) {

				switch ($key) {

					case 'created_at':
						$data_array[$key] = self::convert_string_to_datetime($value);
						break;

					case 'updated_at':
						$data_array[$key] = self::convert_string_to_datetime($value);
						break;

					case 'published_at':
						$data_array[$key] = self::convert_string_to_datetime($value);
						break;

					case 'closed_at':
						$data_array[$key] = self::convert_string_to_datetime($value);
						break;

					case 'cancelled_at':
						$data_array[$key] = self::convert_string_to_datetime($value);
						break;

					case 'processed_at':
						$data_array[$key] = self::convert_string_to_datetime($value);
						break;

					case 'expires':
						$data_array[$key] = self::convert_string_to_datetime($value);
						break;

					default:
						break;
				}

			}

			return $data_array;

		}


		/*

		Converts a string to datetime

		*/
		public static function convert_string_to_datetime($date_string) {

			if (is_string($date_string)) {
				return date("Y-m-d H:i:s", strtotime($date_string));

			} else {
				return $date_string;
			}

		}


		/*

		Converts a url to protocol relative

		*/
		public static function convert_to_relative_url($url) {

			if (strpos($url, '://') === false) {
			  return $url;

			} else {
				return '//' . explode("://", $url)[1];
			}

		}


		/*

		Converts a url to HTTPS

		*/
		public static function convert_to_https_url($url) {

			if (strpos($url, '://') === false) {
			  return $url;

			} else {
				return 'https://' . explode("://", $url)[1];
			}

		}


		/*

		Removes object properties specified by keys

		*/
		public static function unset_by($object, $keys = []) {

			foreach ($keys as $key) {
				unset($object->{$key});
			}

			return $object;

		}


		/*

		Removes object properties specified by keys

		$item: Represents an object

		*/
		public static function unset_all_except($item, $exception) {

			if (!self::has($item, $exception)) {
				return $item;
			}

			foreach($item as $key => $value) {

				if ($key !== $exception) {
					unset($item->{$key});
				}

			}

			return $item;

		}


		/*

		Filters out any data specified by $criteria

		$items: Represents an array of objects
		$criteria: Represents an array of strings to check object keys by

		*/
		public static function filter_data_by($items, $criteria = []) {

			if (!$criteria) {
				return $items;
			}

			return array_map(function($item) use ($criteria) {
				return self::unset_by($item, $criteria);
			}, $items);

		}


		/*

		Filters out all data NOT specified by $exception

		$items: Represents an array of objects
		$exception: Represents a string to check object keys by

		*/
		public static function filter_data_except($items, $exception = false) {

			if (!$exception) {
				return $items;
			}

			return array_map(function($item) use ($exception) {
				return self::unset_all_except($item, $exception);
			}, $items);

		}


		/*

		Helper for checking whether the bootstrapping has occured or not.

		*/
		public static function plugin_ready() {
			return get_option('wp_shopify_is_ready');
		}


		/*

		Calculates row difference

		*/
		public static function different_row_amount($columns_new, $columns_current) {
			return count($columns_new) > count($columns_current);
		}


		public static function flatten_array($array) {

			$result = [];

			if ( !is_array($array) ) {
			  $array = func_get_args();
			}

			foreach ($array as $key => $value) {

				if (is_array($value)) {
					$result = array_merge($result, self::flatten_array($value));

			  } else {
					$result = array_merge($result, array($key => $value));

			  }

			}

			return $result;

		}


		public static function convert_array_to_in_string($array) {
			return "('" . implode("', '", $array) . "')";
		}


		public static function first_num($num) {

			$num_split = str_split($num);

			return (int) $num_split[0];

		}


		public static function get_last_index($array_size) {
			return $array_size - 1;
		}


	}

}
