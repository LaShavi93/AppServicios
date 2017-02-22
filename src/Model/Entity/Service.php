<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Service Entity.
 *
 * @property int $id
 * @property string $name
 * @property string $description
 * @property int $price
 * @property int $price_points
 * @property string $money
 * @property string $photo
 * @property string $photo_dir
 * @property string $term_condition
 * @property string $warranty
 * @property string $specification
 * @property int $category_id
 * @property \App\Model\Entity\Category $category
 * @property int $state
 * @property \App\Model\Entity\Application[] $applications
 * @property \App\Model\Entity\City[] $cities
 * @property \App\Model\Entity\User[] $users
 */
class Service extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        '*' => true,
        'id' => false,
    ];
}
