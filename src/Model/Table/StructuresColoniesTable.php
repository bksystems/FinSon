<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * StructuresColonies Model
 *
 * @method \App\Model\Entity\StructuresColony newEmptyEntity()
 * @method \App\Model\Entity\StructuresColony newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\StructuresColony[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\StructuresColony get($primaryKey, $options = [])
 * @method \App\Model\Entity\StructuresColony findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\StructuresColony patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\StructuresColony[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\StructuresColony|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\StructuresColony saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\StructuresColony[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\StructuresColony[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\StructuresColony[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\StructuresColony[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class StructuresColoniesTable extends Table
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

        $this->setTable('structures_colonies');
        $this->setDisplayField('Colony');
        $this->setPrimaryKey('uuid');

        $this->addBehavior('Timestamp');

        $this->belongsTo('StructuresCountries')
            ->setForeignKey('structures_country_uuid')
            ->setJoinType('INNER');

        $this->belongsTo('StructuresStates')
            ->setForeignKey('structures_state_uuid')
            ->setJoinType('INNER');
        
        $this->belongsTo('StructuresMunicipalities')
            ->setForeignKey('structures_municipality_uuid')
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
            ->uuid('structures_state_uuid')
            ->requirePresence('structures_state_uuid', 'create')
            ->notEmptyString('structures_state_uuid');

        $validator
            ->uuid('structures_municipality_uuid')
            ->requirePresence('structures_municipality_uuid', 'create')
            ->notEmptyString('structures_municipality_uuid');

        $validator
            ->scalar('colony')
            ->maxLength('colony', 250)
            ->requirePresence('colony', 'create')
            ->notEmptyString('colony');

        $validator
            ->integer('postal_code')
            ->requirePresence('postal_code', 'create')
            ->notEmptyString('postal_code');

        $validator
            ->boolean('enable')
            ->notEmptyString('enable');

        $validator
            ->scalar('description')
            ->allowEmptyString('description');

        return $validator;
    }
}
