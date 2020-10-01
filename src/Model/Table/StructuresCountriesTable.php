<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * StructuresCountries Model
 *
 * @method \App\Model\Entity\StructuresCountry newEmptyEntity()
 * @method \App\Model\Entity\StructuresCountry newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\StructuresCountry[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\StructuresCountry get($primaryKey, $options = [])
 * @method \App\Model\Entity\StructuresCountry findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\StructuresCountry patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\StructuresCountry[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\StructuresCountry|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\StructuresCountry saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\StructuresCountry[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\StructuresCountry[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\StructuresCountry[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\StructuresCountry[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class StructuresCountriesTable extends Table
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

        $this->setTable('structures_countries');
        $this->setDisplayField('country');
        $this->setPrimaryKey('uuid');

        $this->addBehavior('Timestamp');

        $this->hasMany('StructuresCountries')
            ->setForeignKey('structures_country_uuid');
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
            ->scalar('country')
            ->maxLength('country', 250)
            ->requirePresence('country', 'create')
            ->notEmptyString('country')
            ->add('country', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->scalar('country_key')
            ->maxLength('country_key', 3)
            ->requirePresence('country_key', 'create')
            ->notEmptyString('country_key')
            ->add('country_key', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

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
        $rules->add($rules->isUnique(['country_key']), ['errorField' => 'country_key']);
        $rules->add($rules->isUnique(['country']), ['errorField' => 'country']);

        return $rules;
    }
}
