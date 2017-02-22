<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Application Entity.
 *
 * @property int $id
 * @property int $orderid
 * @property int $costumer_id
 * @property int $technical_id
 * @property \App\Model\Entity\User $user
 * @property int $service_id
 * @property \App\Model\Entity\Service $service
 * @property \Cake\I18n\Time $start_time
 * @property \Cake\I18n\Time $end_time
 * @property string $address
 * @property int $progress_id
 * @property \App\Model\Entity\Progres $progres
 * @property int $state
 * @property \App\Model\Entity\Rating[] $ratings
 * @property \App\Model\Entity\Payment[] $payments
 */
class Application extends Entity
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
