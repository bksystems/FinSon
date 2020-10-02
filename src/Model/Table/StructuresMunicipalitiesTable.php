<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * StructuresMunicipalities Model
 *
 * @method \App\Model\Entity\StructuresMunicipality newEmptyEntity()
 * @method \App\Model\Entity\StructuresMunicipality newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\StructuresMunicipality[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\StructuresMunicipality get($primaryKey, $options = [])
 * @method \App\Model\Entity\StructuresMunicipality findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\StructuresMunicipality patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\StructuresMunicipality[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\StructuresMunicipality|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\StructuresMunicipality saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\StructuresMunicipality[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\StructuresMunicipality[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\StructuresMunicipality[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\StructuresMunicipality[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class StructuresMunicipalitiesTable extends Table
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

        $this->setTable('structures_municipalities');
        $this->setDisplayField('municipality');
        $this->setPrimaryKey('uuid');

        $this->addBehavior('Timestamp');

        $this->belongsTo('StructuresCountries')
            ->setForeignKey('structures_country_uuid')
            ->setJoinType('INNER');
    
        $this->belongsTo('StructuresStates')
            ->setForeignKey('structures_state_uuid')
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
            ->scalar('municipality')
            ->maxLength('municipality', 250)
            ->requirePresence('municipality', 'create')
            ->notEmptyString('municipality');

        $validator
            ->scalar('municipality_key')
            ->maxLength('municipality_key', 3)
            ->requirePresence('municipality_key', 'create')
            ->notEmptyString('municipality_key');

        $validator
            ->boolean('enable')
            ->notEmptyString('enable');

        $validator
            ->scalar('description')
            ->allowEmptyString('description');

        return $validator;
    }
}
