<?php
namespace App\Model\Table;

use App\Model\Entity\Service;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Services Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Categories
 * @property \Cake\ORM\Association\HasMany $Applications
 * @property \Cake\ORM\Association\BelongsToMany $Cities
 * @property \Cake\ORM\Association\BelongsToMany $Users
 */
class ServicesTable extends Table
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

        $this->table('services');
        $this->displayField('name');
        $this->primaryKey('id');

        $this->belongsTo('Categories', [
            'foreignKey' => 'category_id',
            'joinType' => 'INNER'
        ]);
        $this->hasMany('Applications', [
            'foreignKey' => 'service_id'
        ]);
        $this->belongsToMany('Cities', [
            'foreignKey' => 'service_id',
            'targetForeignKey' => 'city_id',
            'joinTable' => 'cities_services'
        ]);
        $this->belongsToMany('Users', [
            'foreignKey' => 'service_id',
            'targetForeignKey' => 'user_id',
            'joinTable' => 'services_users'
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
            ->integer('price')
            ->requirePresence('price', 'create')
            ->notEmpty('price');

        $validator
            ->integer('price_points')
            ->requirePresence('price_points', 'create')
            ->notEmpty('price_points');

        $validator
            ->requirePresence('money', 'create')
            ->notEmpty('money');

        $validator
            ->requirePresence('photo', 'create')
            ->notEmpty('photo');

        $validator
            ->requirePresence('photo_dir', 'create')
            ->notEmpty('photo_dir');

        $validator
            ->requirePresence('term_condition', 'create')
            ->notEmpty('term_condition');

        $validator
            ->requirePresence('warranty', 'create')
            ->notEmpty('warranty');

        $validator
            ->requirePresence('specification', 'create')
            ->notEmpty('specification');

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
        $rules->add($rules->existsIn(['category_id'], 'Categories'));
        return $rules;
    }
}
