<?php
return array(
    'controllers' => array(
        'invokables' => array(
            'WwtgPhotoAlbum\Controller\PhotoAlbum' => 'WwtgPhotoAlbum\Controller\PhotoAlbumController',
            'WwtgPhotoAlbum\Controller\Admin' => 'WwtgPhotoAlbum\Controller\AdminController',
        ),
    ),

    'router' => array(
        'routes' => array(
            'photoalbum' => array(
                'type' => 'segment',
                'may_terminate' => true,
                'options' => array(
                    'route' => '/photoalbum[/:action][/:id]',
                    'constraints' => array(
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'id' => '[0-9]+',
                    ),
                    'defaults' => array(
                        'controller' => 'WwtgPhotoAlbum\Controller\PhotoAlbum',
                        'action' => 'index',
                    ),
                ),
            ),
            //dependency: ZfcAdmin module
            //configure routes for the zfcAdmin module
            'zfcadmin' => array(
                'child_routes' => array(
                    'photoAlbumAdmin' => array(
                        'type' => 'segment',
                        'may_terminate' => true,
                        'options' => array(
                            'route' => '/photoalbum[/:action][/:id]',
                            'constraints' => array(
                                'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                                'id' => '[0-9]+',
                            ),
                            'defaults' => array(
                                'controller' => 'WwtgPhotoAlbum\Controller\Admin',
                                'action' => 'index',
                            ),
                        ),
                    ),
                ),
            ),
        ),
    ),

    'view_manager' => array(
        'template_path_stack' => array(
            'wwtgphotoalbum' => __DIR__ . '/../view',
        ),
    ),
);