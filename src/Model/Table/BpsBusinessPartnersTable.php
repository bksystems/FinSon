<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * BpsBusinessPartners Model
 *
 * @method \App\Model\Entity\BpsBusinessPartner newEmptyEntity()
 * @method \App\Model\Entity\BpsBusinessPartner newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\BpsBusinessPartner[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\BpsBusinessPartner get($primaryKey, $options = [])
 * @method \App\Model\Entity\BpsBusinessPartner findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\BpsBusinessPartner patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\BpsBusinessPartner[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\BpsBusinessPartner|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\BpsBusinessPartner saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\BpsBusinessPartner[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\BpsBusinessPartner[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\BpsBusinessPartner[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\BpsBusinessPartner[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class BpsBusinessPartnersTable extends Table
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

        $this->setTable('bps_business_partners');
        $this->setDisplayField('full_name');
        $this->setPrimaryKey('uuid');

        $this->addBehavior('Timestamp');

        $this->belongsTo('StructuresCountries')
            ->setForeignKey('structures_country_uuid')
            ->setJoinType('INNER');
        
        $this->belongsTo('StructuresStates')
            ->setForeignKey('structures_state_uuid')
            ->setJoinType('INNER');
        
        $this->belongsTo('BpsGenders')
            ->setForeignKey('bps_gender_uuid')
            ->setJoinType('INNER');

        $this->hasMany('BpsBusinessPartnersPhones')
            ->setForeignKey('bps_business_partner_uuid');
        
        $this->hasMany('BpsBusinessPartnersRols')
            ->setForeignKey('bps_business_partner_uuid');      
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
            ->scalar('bps_unique_number')
            ->maxLength('bps_unique_number', 10)
            ->requirePresence('bps_unique_number', 'create')
            ->notEmptyString('bps_unique_number')
            ->add('bps_unique_number', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->scalar('bps_last_name')
            ->maxLength('bps_last_name', 110)
            ->requirePresence('bps_last_name', 'create')
            ->notEmptyString('bps_last_name');

        $validator
            ->scalar('bps_second_last_name')
            ->maxLength('bps_second_last_name', 110)
            ->allowEmptyString('bps_second_last_name');

        $validator
            ->scalar('bps_first_name')
            ->maxLength('bps_first_name', 110)
            ->requirePresence('bps_first_name', 'create')
            ->notEmptyString('bps_first_name');

        $validator
            ->scalar('bps_second_name')
            ->maxLength('bps_second_name', 110)
            ->allowEmptyString('bps_second_name');

        $validator
            ->date('bps_birthdate')
            ->requirePresence('bps_birthdate', 'create')
            ->notEmptyDate('bps_birthdate');

        $validator
            ->uuid('bps_gender_uuid')
            ->requirePresence('bps_gender_uuid', 'create')
            ->notEmptyString('bps_gender_uuid');

        $validator
            ->uuid('structures_country_uuid')
            ->requirePresence('structures_country_uuid', 'create')
            ->notEmptyString('structures_country_uuid');

        $validator
            ->uuid('structures_state_uuid')
            ->requirePresence('structures_state_uuid', 'create')
            ->notEmptyString('structures_state_uuid');

        $validator
            ->scalar('bps_unique_registry_key')
            ->maxLength('bps_unique_registry_key', 18)
            ->requirePresence('bps_unique_registry_key', 'create')
            ->notEmptyString('bps_unique_registry_key')
            ->add('bps_unique_registry_key', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->scalar('bps_elector_key')
            ->maxLength('bps_elector_key', 18)
            ->requirePresence('bps_elector_key', 'create')
            ->notEmptyString('bps_elector_key')
            ->add('bps_elector_key', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->scalar('bps_federal_taxpayer_registry')
            ->maxLength('bps_federal_taxpayer_registry', 18)
            ->requirePresence('bps_federal_taxpayer_registry', 'create')
            ->notEmptyString('bps_federal_taxpayer_registry');

        $validator
            ->scalar('bps_identification_number')
            ->maxLength('bps_identification_number', 18)
            ->requirePresence('bps_identification_number', 'create')
            ->notEmptyString('bps_identification_number');

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
        $rules->add($rules->isUnique(['bps_unique_number']), ['errorField' => 'bps_unique_number']);
        $rules->add($rules->isUnique(['bps_unique_registry_key']), ['errorField' => 'bps_unique_registry_key']);
        $rules->add($rules->isUnique(['bps_elector_key']), ['errorField' => 'bps_elector_key']);

        return $rules;
    }
}
