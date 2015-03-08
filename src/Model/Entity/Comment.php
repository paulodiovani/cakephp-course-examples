<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Comment Entity.
 */
class Comment extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'post_id' => true,
        'name' => true,
        'email' => true,
        'comment' => true,
        'post' => true,
    ];
}
