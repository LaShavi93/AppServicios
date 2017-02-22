<?php
namespace App\Model\Table;

use App\Model\Entity\Specialty;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Specialties Model
 *
 * @property \Cake\ORM\Association\BelongsToMany $Users
 */
class SpecialtiesTable extends Table
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

        $this->table('specialties');
        $this->displayField('name');
        $this->primaryKey('id');

        $this->belongsToMany('Users', [
            'foreignKey' => 'specialty_id',
            'targetForeignKey' => 'user_id',
            'joinTable' => 'specialties_users',
            'conditions' => ['Users.role_id' => '3']
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
            ->requirePresence('name', 'create')
            ->notEmpty('name');

        $validator
            ->requirePresence('description', 'create')
            ->notEmpty('description');

        $validator
            ->integer('state')
            ->requirePresence('state', 'create')
            ->notEmpty('state');

        return $validator;
    }
}
