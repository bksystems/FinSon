<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * StructuresStates Model
 *
 * @method \App\Model\Entity\StructuresState newEmptyEntity()
 * @method \App\Model\Entity\StructuresState newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\StructuresState[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\StructuresState get($primaryKey, $options = [])
 * @method \App\Model\Entity\StructuresState findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\StructuresState patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\StructuresState[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\StructuresState|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\StructuresState saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\StructuresState[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\StructuresState[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\StructuresState[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\StructuresState[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class StructuresStatesTable extends Table
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

        $this->setTable('structures_states');
        $this->setDisplayField('state');
        $this->setPrimaryKey('uuid');

        $this->addBehavior('Timestamp');

        $this->belongsTo('StructuresCountries')
            ->setForeignKey('structures_country_uuid')
            ->setJoinType('INNER');

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
            ->uuid('structures_country_uuid')
            ->requirePresence('structures_country_uuid', 'create')
            ->notEmptyString('structures_country_uuid');

        $validator
            ->scalar('state')
            ->maxLength('state', 250)
            ->requirePresence('state', 'create')
            ->notEmptyString('state')
            ->add('state', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->scalar('state_key')
            ->maxLength('state_key', 3)
            ->requirePresence('state_key', 'create')
            ->notEmptyString('state_key')
            ->add('state_key', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->scalar('state_renapo')
            ->maxLength('state_renapo', 2)
            ->requirePresence('state_renapo', 'create')
            ->notEmptyString('state_renapo')
            ->add('state_renapo', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->boolean('enable')
            ->notEmptyString('enable');

        $validator
            ->scalar('description')
            ->allowEmptyString('description');

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
        $rules->add($rules->isUnique(['state_renapo']), ['errorField' => 'state_renapo']);
        $rules->add($rules->isUnique(['state']), ['errorField' => 'state']);
        $rules->add($rules->isUnique(['state_key']), ['errorField' => 'state_key']);

        return $rules;
    }
}
