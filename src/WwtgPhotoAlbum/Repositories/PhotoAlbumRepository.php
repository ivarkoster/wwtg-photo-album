<?php
namespace WwtgPhotoAlbum\Repositories;

use Doctrine\ORM\EntityRepository;


class PhotoAlbumRepository extends EntityRepository
{

    public function countAlbums()
    {
        $dql = "SELECT COUNT(pa.id) as aantalAlbums FROM PhotoAlbum\Entity\PhotoAlbum pa";
                $query = $this->getEntityManager()->createQuery($dql);
        $row = $query->getResult();

        return $row[0]['aantalAlbums'];
    }


}