<?php
namespace App\Model\Table;

use App\Model\Entity\User;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Users Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Cities
 * @property \Cake\ORM\Association\BelongsTo $Roles
 * @property \Cake\ORM\Association\HasMany $Payments
 * @property \Cake\ORM\Association\BelongsToMany $Services
 * @property \Cake\ORM\Association\BelongsToMany $Specialties
 */
class UsersTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->table('users');
        $this->displayField('name');
        $this->primaryKey('id');

        $this->belongsTo('Cities', [
            'foreignKey' => 'city_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Roles', [
            'foreignKey' => 'role_id',
            'joinType' => 'INNER'
        ]);
        $this->hasMany('Payments', [
            'foreignKey' => 'user_id'
        ]);
        $this->belongsToMany('Services', [
            'foreignKey' => 'user_id',
            'targetForeignKey' => 'service_id',
            'joinTable' => 'services_users'
        ]);
        $this->belongsToMany('Specialties', [
            'foreignKey' => 'user_id',
            'targetForeignKey' => 'specialty_id',
            'joinTable' => 'specialties_users'
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->integer('cedula')
            ->requirePresence('cedula', 'create')
            ->notEmpty('cedula');

        $validator
            ->requirePresence('name', 'create')
            ->notEmpty('name');

        $validator
            ->requirePresence('lastname', 'create')
            ->notEmpty('lastname');

        $validator
            ->email('email')
            ->requirePresence('email', 'create')
            ->notEmpty('email');

        $validator
            ->requirePresence('password', 'create')
            ->notEmpty('password');

        $validator
            ->requirePresence('photo', 'create')
            ->notEmpty('photo');

        $validator
            ->requirePresence('photo_dir', 'create')
            ->notEmpty('photo_dir');

        $validator
            ->integer('cellphone')
            ->requirePresence('cellphone', 'create')
            ->notEmpty('cellphone');

        $validator
            ->requirePresence('curriculum', 'create')
            ->notEmpty('curriculum');

        $validator
            ->requirePresence('curriculum_dir', 'create')
            ->notEmpty('curriculum_dir');

        $validator
            ->integer('account')
            ->requirePresence('account', 'create')
            ->notEmpty('account');

        /*
        $validator
            ->dateTime('date')
            ->requirePresence('date', 'create')
            ->notEmpty('date');
        */

        $validator
            ->date('birthday')
            ->requirePresence('birthday', 'create')
            ->notEmpty('birthday');

        $validator
            ->integer('point')
            ->requirePresence('point', 'create')
            ->notEmpty('point');

        $validator
            ->integer('state')
            ->requirePresence('state', 'create')
            ->notEmpty('state');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->isUnique(['email']));
        $rules->add($rules->existsIn(['city_id'], 'Cities'));
        $rules->add($rules->existsIn(['role_id'], 'Roles'));
        return $rules;
    }
}
