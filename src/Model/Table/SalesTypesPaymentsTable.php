<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * SalesTypesPayments Model
 *
 * @method \App\Model\Entity\SalesTypesPayment newEmptyEntity()
 * @method \App\Model\Entity\SalesTypesPayment newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\SalesTypesPayment[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\SalesTypesPayment get($primaryKey, $options = [])
 * @method \App\Model\Entity\SalesTypesPayment findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\SalesTypesPayment patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\SalesTypesPayment[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\SalesTypesPayment|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\SalesTypesPayment saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\SalesTypesPayment[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\SalesTypesPayment[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\SalesTypesPayment[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\SalesTypesPayment[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class SalesTypesPaymentsTable extends Table
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

        $this->setTable('sales_types_payments');
        $this->setDisplayField('type_pyment');
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
            ->scalar('type_pyment')
            ->maxLength('type_pyment', 100)
            ->requirePresence('type_pyment', 'create')
            ->notEmptyString('type_pyment')
            ->add('type_pyment', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->integer('paydays')
            ->requirePresence('paydays', 'create')
            ->notEmptyString('paydays');

        $validator
            ->scalar('description')
            ->requirePresence('description', 'create')
            ->notEmptyString('description');

        $validator
            ->boolean('enable')
            ->requirePresence('enable', 'create')
            ->notEmptyString('enable');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules): RulesChecker
    {
        $rules->add($rules->isUnique(['type_pyment']), ['errorField' => 'type_pyment']);

        return $rules;
    }
}
