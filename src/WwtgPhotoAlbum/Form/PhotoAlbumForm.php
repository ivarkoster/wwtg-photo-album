<?php
namespace WwtgPhotoAlbum\Form;

use Zend\Form\Form;

class PhotoAlbumFOrm extends Form
{

    public function __construct($name = null)
    {

        parent::__construct('photoalbum');
        $this->setAttribute('method', 'post');
        $this->setAttribute('enctype', '"multipart/form-data"');
        $this->add(array(
            'name' => 'id',
            'attributes' => array(
                'type' => 'hidden',
            ),
        ));
        $this->add(array(
            'name' => 'photoAlbumName',
            'attributes' => array(
                'type' => 'text',
            ),
            'options' => array(
                'label' => 'Photo Album Name',
            ),
        ));
        $this->add(array(
            'name' => 'parent',
            'attributes' => array(
                'type' => 'text',
            ),
            'options' => array(
                'label' => 'Belongs to Album',
            ),
        ));
        $this->add(array(
            'name' => 'photo[]',
            'attributes' => array(
                'type' => 'file',
            ),
            'options' => array(
                'label' => 'Photo 1',
            ),
        ));
        $this->add(array(
            'name' => 'photo[]',
            'attributes' => array(
                'type' => 'file',
            ),
            'options' => array(
                'label' => 'Photo 2',
            ),
        ));
        $this->add(array(
            'name' => 'photo[]',
            'attributes' => array(
                'type' => 'file',
            ),
            'options' => array(
                'label' => 'Photo 3',
            ),
        ));


    }

}