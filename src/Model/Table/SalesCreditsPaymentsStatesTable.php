<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * SalesCreditsPaymentsStates Model
 *
 * @method \App\Model\Entity\SalesCreditsPaymentsState newEmptyEntity()
 * @method \App\Model\Entity\SalesCreditsPaymentsState newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\SalesCreditsPaymentsState[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\SalesCreditsPaymentsState get($primaryKey, $options = [])
 * @method \App\Model\Entity\SalesCreditsPaymentsState findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\SalesCreditsPaymentsState patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\SalesCreditsPaymentsState[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\SalesCreditsPaymentsState|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\SalesCreditsPaymentsState saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\SalesCreditsPaymentsState[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\SalesCreditsPaymentsState[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\SalesCreditsPaymentsState[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\SalesCreditsPaymentsState[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class SalesCreditsPaymentsStatesTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('sales_credits_payments_states');
        $this->setDisplayField('uuid');
        $this->setPrimaryKey('uuid');

        $this->addBehavior('Timestamp');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->uuid('uuid')
            ->allowEmptyString('uuid', null, 'create');

        $validator
            ->scalar('pyment_state')
            ->maxLength('pyment_state', 100)
            ->requirePresence('pyment_state', 'create')
            ->notEmptyString('pyment_state');

        $validator
            ->boolean('enable')
            ->requirePresence('enable', 'create')
            ->notEmptyString('enable');

        $validator
            ->scalar('description')
            ->requirePresence('description', 'create')
            ->notEmptyString('description');

        return $validator;
    }
}
