<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * SalesProductsTypesStates Model
 *
 * @method \App\Model\Entity\SalesProductsTypesState newEmptyEntity()
 * @method \App\Model\Entity\SalesProductsTypesState newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\SalesProductsTypesState[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\SalesProductsTypesState get($primaryKey, $options = [])
 * @method \App\Model\Entity\SalesProductsTypesState findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\SalesProductsTypesState patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\SalesProductsTypesState[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\SalesProductsTypesState|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\SalesProductsTypesState saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\SalesProductsTypesState[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\SalesProductsTypesState[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\SalesProductsTypesState[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\SalesProductsTypesState[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class SalesProductsTypesStatesTable extends Table
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

        $this->setTable('sales_products_types_states');
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
            ->scalar('type_state')
            ->maxLength('type_state', 100)
            ->requirePresence('type_state', 'create')
            ->notEmptyString('type_state');

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
