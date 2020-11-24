<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * BpsBusinessPartnersRols Model
 *
 * @method \App\Model\Entity\BpsBusinessPartnersRol newEmptyEntity()
 * @method \App\Model\Entity\BpsBusinessPartnersRol newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\BpsBusinessPartnersRol[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\BpsBusinessPartnersRol get($primaryKey, $options = [])
 * @method \App\Model\Entity\BpsBusinessPartnersRol findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\BpsBusinessPartnersRol patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\BpsBusinessPartnersRol[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\BpsBusinessPartnersRol|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\BpsBusinessPartnersRol saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\BpsBusinessPartnersRol[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\BpsBusinessPartnersRol[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\BpsBusinessPartnersRol[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\BpsBusinessPartnersRol[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class BpsBusinessPartnersRolsTable extends Table
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

        $this->setTable('bps_business_partners_rols');
        $this->setDisplayField('uuid');
        $this->setPrimaryKey('uuid');

        $this->belongsTo('BpsBusinessPartners')
            ->setForeignKey('bps_business_partner_uuid')
            ->setJoinType('INNER');

        $this->belongsTo('BpsTypesRols')
            ->setForeignKey('bps_types_rol_uuid')
            ->setJoinType('INNER');

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
            ->uuid('bps_business_partner_uuid')
            ->requirePresence('bps_business_partner_uuid', 'create')
            ->notEmptyString('bps_business_partner_uuid');

        $validator
            ->uuid('bps_types_rol_uuid')
            ->requirePresence('bps_types_rol_uuid', 'create')
            ->notEmptyString('bps_types_rol_uuid');

        return $validator;
    }
}
