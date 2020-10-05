<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * BpsTypesAddresses Model
 *
 * @method \App\Model\Entity\BpsTypesAddress newEmptyEntity()
 * @method \App\Model\Entity\BpsTypesAddress newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\BpsTypesAddress[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\BpsTypesAddress get($primaryKey, $options = [])
 * @method \App\Model\Entity\BpsTypesAddress findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\BpsTypesAddress patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\BpsTypesAddress[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\BpsTypesAddress|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\BpsTypesAddress saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\BpsTypesAddress[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\BpsTypesAddress[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\BpsTypesAddress[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\BpsTypesAddress[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class BpsTypesAddressesTable extends Table
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

        $this->setTable('bps_types_addresses');
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
            ->scalar('type_address')
            ->maxLength('type_address', 50)
            ->requirePresence('type_address', 'create')
            ->notEmptyString('type_address')
            ->add('type_address', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->boolean('enable')
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
        $rules->add($rules->isUnique(['type_address']), ['errorField' => 'type_address']);

        return $rules;
    }
}
