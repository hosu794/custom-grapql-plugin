<?php

namespace CustomGrapqlQuery;

    class FolderType extends WPObjectType {

        private static $fields;

        public function __construct() {
            $config = [
                'name' => 'FolderType',
                'fields' => self::$fields,
                'description' => __('The folder that contains a medias', 'my-domain'),
            ];
        }

        protected static function fields() {
            if(null === self::$fields) {
                $fields = [
                    'id'=> [
                        'type' => \WPGrapQL\Types::int(),
                        'description' => __( 'id number', 'your-textdomain' ),
                    ],
                    'parent' => [
                        'type' => \WPGrapQL\Types::int(),
                        'description' => __('parent id', 'your_textdomain'),
                    ],
                    'name' => [
                        'type' => \WPGrapQL\Types::string(),
                        'description' => __('name of folder', 'your_textdomain')
                    ],
                    'absolute' => [
                        'type' => \WPGrapQL\Types::string(),
                        'description' => __('absolute of folder', 'your_textdomain'),
                    ],
                    'owner' => [
                        'type' => \WPGrapQL\Types::int(),
                        'description' => __('owner of folder', 'your_textdomain')
                    ],
                    'ord' => [
                        'type' => \WPGrapQL\Types::int(),
                        'description' => __('i dunno what is it XD', 'your_textdomain')
                    ],
                    'oldCustomOrder' => [
                        'type' => \WPGrapQL\Types::int(),
                        'description' => __('i dunno what is it XD', 'your_textdomain')
                    ],
                    'type' => [
                        'type' => \WPGrapQL\Types::int(),
                        'description' => __('i dunnot what is it XD', 'your_textdomain')
                    ],
                    'restrictions' => [
                        'type' => \WPGrapQL\Types::string(),
                        'description' => __('i dunno what is it XD', 'your_textdomain')
                    ],
                    'cnt' => [
                        'type' => \WPGrapQL\Types::int(),
                        'description' => __('i dunno what is it XD', 'your_textdomain')
                    ],
                    'importId' => [
                        'type' => \WPGrapQL\Types::int(),
                        'description' => __(' dunno what is it XD', 'your_textdomain')
                    ]
                ];

                //Pass the field throught the filters, etc provided by WPObjectType
                return self::prepare_fields($fields, 'FolderType');
            }
        }

    }

?>