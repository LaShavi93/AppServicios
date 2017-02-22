<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;
use Cake\Auth\DefaultPasswordHasher;

/**
 * User Entity.
 *
 * @property int $id
 * @property int $city_id
 * @property \App\Model\Entity\City $city
 * @property int $role_id
 * @property \App\Model\Entity\Role $role
 * @property int $cedula
 * @property string $name
 * @property string $lastname
 * @property string $email
 * @property string $password
 * @property string $photo
 * @property string $photo_dir
 * @property int $cellphone
 * @property string $curriculum
 * @property string $curriculum_dir
 * @property int $account
 * @property \Cake\I18n\Time $date
 * @property \Cake\I18n\Time $birthday
 * @property int $point
 * @property int $state
 * @property \App\Model\Entity\Payment[] $payments
 * @property \App\Model\Entity\Service[] $services
 * @property \App\Model\Entity\Specialty[] $specialties
 */
class User extends Entity
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
     
    protected function _setPassword($value)
    {
        $hasher = new DefaultPasswordHasher();
        return $hasher->hash($value);
    }
    
    protected $_accessible = [
        '*' => true,
        'id' => false,
    ];

    /**
     * Fields that are excluded from JSON an array versions of the entity.
     *
     * @var array
     */
    protected $_hidden = [
        'password'
    ];
}
