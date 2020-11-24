<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * BpsTypesRols Model
 *
 * @method \App\Model\Entity\BpsTypesRol newEmptyEntity()
 * @method \App\Model\Entity\BpsTypesRol newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\BpsTypesRol[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\BpsTypesRol get($primaryKey, $options = [])
 * @method \App\Model\Entity\BpsTypesRol findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\BpsTypesRol patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\BpsTypesRol[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\BpsTypesRol|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\BpsTypesRol saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\BpsTypesRol[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\BpsTypesRol[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\BpsTypesRol[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\BpsTypesRol[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class BpsTypesRolsTable extends Table
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

        $this->setTable('bps_types_rols');
        $this->setDisplayField('type_rol');
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
            ->scalar('type_rol')
            ->maxLength('type_rol', 150)
            ->requirePresence('type_rol', 'create')
            ->notEmptyString('type_rol')
            ->add('type_rol', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->boolean('enable')
            ->requirePresence('enable', 'create')
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
        $rules->add($rules->isUnique(['type_rol']), ['errorField' => 'type_rol']);

        return $rules;
    }
}
