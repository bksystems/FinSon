<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * BpsBusinessPartnersPhones Model
 *
 * @method \App\Model\Entity\BpsBusinessPartnersPhone newEmptyEntity()
 * @method \App\Model\Entity\BpsBusinessPartnersPhone newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\BpsBusinessPartnersPhone[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\BpsBusinessPartnersPhone get($primaryKey, $options = [])
 * @method \App\Model\Entity\BpsBusinessPartnersPhone findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\BpsBusinessPartnersPhone patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\BpsBusinessPartnersPhone[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\BpsBusinessPartnersPhone|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\BpsBusinessPartnersPhone saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\BpsBusinessPartnersPhone[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\BpsBusinessPartnersPhone[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\BpsBusinessPartnersPhone[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\BpsBusinessPartnersPhone[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class BpsBusinessPartnersPhonesTable extends Table
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

        $this->setTable('bps_business_partners_phones');
        $this->setDisplayField('uuid');
        $this->setPrimaryKey('uuid');

        $this->addBehavior('Timestamp');

        $this->belongsTo('BpsBusinessPartners')
            ->setForeignKey('bps_business_partner_uuid')
            ->setJoinType('INNER');

        $this->belongsTo('BpsTypesPhones')
            ->setForeignKey('bps_types_phone_uuid')
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
            ->uuid('bps_business_partner_uuid')
            ->requirePresence('bps_business_partner_uuid', 'create')
            ->notEmptyString('bps_business_partner_uuid');

        $validator
            ->uuid('bps_types_phone_uuid')
            ->requirePresence('bps_types_phone_uuid', 'create')
            ->notEmptyString('bps_types_phone_uuid');

        $validator
            ->scalar('number')
            ->maxLength('number', 10)
            ->requirePresence('number', 'create')
            ->notEmptyString('number');

        $validator
            ->boolean('is_primary')
            ->requirePresence('is_primary', 'create')
            ->notEmptyString('is_primary');

        return $validator;
    }
}
