<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Rating Entity.
 *
 * @property int $id
 * @property int $value
 * @property \Cake\I18n\Time $date
 * @property int $costumer_id
 * @property int $technical_id
 * @property \App\Model\Entity\User $user
 * @property int $application_id
 * @property \App\Model\Entity\Application $application
 * @property int $state
 */
class Rating extends Entity
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
