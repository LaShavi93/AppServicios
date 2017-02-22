<?php
namespace App\Model\Table;

use App\Model\Entity\Application;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Applications Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Users
 * @property \Cake\ORM\Association\BelongsTo $Users
 * @property \Cake\ORM\Association\BelongsTo $Services
 * @property \Cake\ORM\Association\BelongsTo $Progress
 * @property \Cake\ORM\Association\HasMany $Ratings
 * @property \Cake\ORM\Association\BelongsToMany $Payments
 */
class ApplicationsTable extends Table
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

        $this->table('applications');
        $this->displayField('id');
        $this->primaryKey('id');

		//public $belongsTo = array('CostumerUsers' => array('className' => 'User', 'foreignKey' => 'user_id', 'dependent ' => 'false'), 'conditions' => ['Users.role_id' => '2']);
		//this->$belongsTo = array('TechnicalUsers' => array('className' => 'User', 'foreignKey' => 'user_id', 'dependent ' => 'false'), 'conditions' => ['Users.role_id' => '3']);

        //$this->belongsTo('Users', ['className' => 'Users', 'foreignKey' => 'costumer_id', 'conditions' => ['Users.role_id' => '2'], 'joinType' => 'INNER']);
        //$this->belongsTo('Users', ['className' => 'Users', 'foreignKey' => 'technical_id', 'conditions' => ['Users.role_id' => '3'], 'joinType' => 'INNER']);

        $this->belongsTo('Users', [ //CostumerUsers
            'className' => 'Users',
            'foreignKey' => 'costumer_id',
            //'conditions' => ['Users.role_id' => '2'],
            //'propertyName' => 'CostumerUsers',
            'joinType' => 'INNER'
        ]);
        
        /*$this->belongsTo('Users', [ //TechnicalUsers
            'className' => 'Users',
            'foreignKey' => 'technical_id',
            //'conditions' => ['Users.role_id' => '3'],
            //'propertyName' => 'TechnicalUsers',
            'joinType' => 'INNER'
        ]);*/
        
        $this->belongsTo('Services', [
            'foreignKey' => 'service_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Progress', [
            'foreignKey' => 'progress_id',
            'conditions' => ['Progress.type' => 'Solicitud'],
            'joinType' => 'INNER'
        ]);
        $this->hasMany('Ratings', [
            'foreignKey' => 'application_id'
        ]);
        $this->belongsToMany('Payments', [
            'foreignKey' => 'application_id',
            'targetForeignKey' => 'payment_id',
            'joinTable' => 'applications_payments'
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
            ->integer('orderid')
            ->requirePresence('orderid', 'create')
            ->notEmpty('orderid');

        $validator
            ->dateTime('start_time')
            ->requirePresence('start_time', 'create')
            ->notEmpty('start_time');

        $validator
            ->dateTime('end_time')
            ->requirePresence('end_time', 'create')
            ->notEmpty('end_time');

        $validator
            ->requirePresence('address', 'create')
            ->notEmpty('address');

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
        $rules->add($rules->existsIn(['costumer_id'], 'Users'));
        $rules->add($rules->existsIn(['technical_id'], 'Users'));
        $rules->add($rules->existsIn(['service_id'], 'Services'));
        $rules->add($rules->existsIn(['progress_id'], 'Progress'));
        return $rules;
    }
}
