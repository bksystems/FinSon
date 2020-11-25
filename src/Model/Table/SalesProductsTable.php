<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * SalesProducts Model
 *
 * @method \App\Model\Entity\SalesProduct newEmptyEntity()
 * @method \App\Model\Entity\SalesProduct newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\SalesProduct[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\SalesProduct get($primaryKey, $options = [])
 * @method \App\Model\Entity\SalesProduct findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\SalesProduct patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\SalesProduct[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\SalesProduct|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\SalesProduct saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\SalesProduct[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\SalesProduct[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\SalesProduct[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\SalesProduct[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class SalesProductsTable extends Table
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

        $this->setTable('sales_products');
        $this->setDisplayField('product_name');
        $this->setPrimaryKey('uuid');

        $this->belongsTo('SalesTypesPayments')
            ->setForeignKey('sales_types_payment_uuid')
            ->setJoinType('INNER');

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
            ->scalar('product_name')
            ->maxLength('product_name', 100)
            ->requirePresence('product_name', 'create')
            ->notEmptyString('product_name')
            ->add('product_name', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->uuid('sales_types_payment_uuid')
            ->requirePresence('sales_types_payment_uuid', 'create')
            ->notEmptyString('sales_types_payment_uuid');
        
        $validator
            ->numeric('number_payments')
            ->requirePresence('number_payments', 'create')
            ->notEmptyString('number_payments');

        $validator
            ->numeric('anual_rate')
            ->requirePresence('anual_rate', 'create')
            ->notEmptyString('anual_rate');

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

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules): RulesChecker
    {
        $rules->add($rules->isUnique(['product_name']), ['errorField' => 'product_name']);

        return $rules;
    }
}
