<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * BpsTypesPhones Model
 *
 * @method \App\Model\Entity\BpsTypesPhone newEmptyEntity()
 * @method \App\Model\Entity\BpsTypesPhone newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\BpsTypesPhone[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\BpsTypesPhone get($primaryKey, $options = [])
 * @method \App\Model\Entity\BpsTypesPhone findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\BpsTypesPhone patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\BpsTypesPhone[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\BpsTypesPhone|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\BpsTypesPhone saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\BpsTypesPhone[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\BpsTypesPhone[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\BpsTypesPhone[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\BpsTypesPhone[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class BpsTypesPhonesTable extends Table
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

        $this->setTable('bps_types_phones');
        $this->setDisplayField('type_phone');
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
            ->scalar('type_phone')
            ->maxLength('type_phone', 50)
            ->requirePresence('type_phone', 'create')
            ->notEmptyString('type_phone')
            ->add('type_phone', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

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
        $rules->add($rules->isUnique(['type_phone']), ['errorField' => 'type_phone']);

        return $rules;
    }
}
