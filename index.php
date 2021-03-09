<?php

use CustomGrapqlQuery\FolderType;
use Table\FolderTypeTable\FolderTypeTable;

/**
 * Plugin Name:     WPGraphql Medias by folder, using Real Media Library (FREE)
 * Plugin URI:
 * Description:     A WPGraphQL Extension that adds a medias filtered by folder id
 * Author:          WPGraphQL, Grzegorz Szczęsny
 * Author URI:      intelligentprogrammer.com
 * Text Domain:     wp-graphql-medias-by-folder-id
 * Domain Path:     /languages
 * Version:         1.0.0
 *
 * @package         WP_Graphql_MEDIA_BY_ID
 **/


add_filter('graphql_root_queries', function($fields) {

    array_push($fields['FolderType'], [
        'type' => \WPGraphQL\Types::list_of( (new FolderType)->instance()),
        'dddescription' => __( 'Get a list of FolderType', 'your-textdomain' ),
        'resolve' => function( $root, $args, $context, $info ) {

            $folderTypeTable = (new FolderTypeTable)->instance();

            return $folderTypeTable->getItems();
        }
    ]);

    // $fields['FolderType'] => [
    //     'type' => \WPGraphQL\Types::list_of( new FolderType() ),
    //     'dddescription' => __( 'Get a list of FolderType', 'your-textdomain' ),
    //     'resolve' => function( $root, $args, $context, $info ) {

    //          return FolderTypeTable::getItems();
    //     }
    //  ];

    return $fields;

} );



?>