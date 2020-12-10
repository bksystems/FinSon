<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * BpsBusinessPartnersAddresses Model
 *
 * @method \App\Model\Entity\BpsBusinessPartnersAddress newEmptyEntity()
 * @method \App\Model\Entity\BpsBusinessPartnersAddress newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\BpsBusinessPartnersAddress[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\BpsBusinessPartnersAddress get($primaryKey, $options = [])
 * @method \App\Model\Entity\BpsBusinessPartnersAddress findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\BpsBusinessPartnersAddress patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\BpsBusinessPartnersAddress[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\BpsBusinessPartnersAddress|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\BpsBusinessPartnersAddress saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\BpsBusinessPartnersAddress[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\BpsBusinessPartnersAddress[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\BpsBusinessPartnersAddress[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\BpsBusinessPartnersAddress[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class BpsBusinessPartnersAddressesTable extends Table
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

        $this->setTable('bps_business_partners_addresses');
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
            ->uuid('bps_types_address')
            ->requirePresence('bps_types_address', 'create')
            ->notEmptyString('bps_types_address');

        $validator
            ->uuid('bps_business_partner_uuid')
            ->requirePresence('bps_business_partner_uuid', 'create')
            ->notEmptyString('bps_business_partner_uuid');

        $validator
            ->uuid('structures_colony_uuid')
            ->requirePresence('structures_colony_uuid', 'create')
            ->notEmptyString('structures_colony_uuid');

        $validator
            ->requirePresence('postal_code', 'create')
            ->notEmptyString('postal_code');

        $validator
            ->scalar('address')
            ->maxLength('address', 250)
            ->requirePresence('address', 'create')
            ->notEmptyString('address');

        $validator
            ->scalar('external_number')
            ->maxLength('external_number', 30)
            ->requirePresence('external_number', 'create')
            ->notEmptyString('external_number');

        $validator
            ->scalar('internal_number')
            ->maxLength('internal_number', 30)
            ->requirePresence('internal_number', 'create')
            ->notEmptyString('internal_number');

        $validator
            ->scalar('address_between')
            ->maxLength('address_between', 150)
            ->requirePresence('address_between', 'create')
            ->notEmptyString('address_between');

        return $validator;
    }
}
