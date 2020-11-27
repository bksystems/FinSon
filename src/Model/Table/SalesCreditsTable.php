<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * SalesCredits Model
 *
 * @method \App\Model\Entity\SalesCredit newEmptyEntity()
 * @method \App\Model\Entity\SalesCredit newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\SalesCredit[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\SalesCredit get($primaryKey, $options = [])
 * @method \App\Model\Entity\SalesCredit findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\SalesCredit patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\SalesCredit[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\SalesCredit|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\SalesCredit saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\SalesCredit[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\SalesCredit[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\SalesCredit[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\SalesCredit[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class SalesCreditsTable extends Table
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

        $this->setTable('sales_credits');
        $this->setDisplayField('uuid');
        $this->setPrimaryKey('uuid');

        $this->belongsTo('BpsBusinessPartners')
            ->setForeignKey('bps_business_partner_uuid')
            ->setJoinType('INNER');
        
        $this->belongsTo('SalesProducts')
            ->setForeignKey('sales_product_uuid')
            ->setJoinType('INNER');

        $this->belongsTo('SalesProductsTypesStates')
            ->setForeignKey('sales_products_types_state_uuid')
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
            ->uuid('sales_product_uuid')
            ->requirePresence('sales_product_uuid', 'create')
            ->notEmptyString('sales_product_uuid');

        $validator
            ->date('init_date_credit')
            ->requirePresence('init_date_credit', 'create')
            ->notEmptyDate('init_date_credit');

        $validator
            ->date('end_date_credit')
            //->requirePresence('end_date_credit', 'create')
            ->allowEmptyTime('end_date_credit');

        $validator
            ->uuid('sales_products_types_state_uuid')
            //->requirePresence('sales_products_types_state_uuid', 'create')
            ->allowEmptyString('sales_products_types_state_uuid');

        $validator
            ->numeric('requested_amount')
            ->requirePresence('requested_amount', 'create')
            ->notEmptyString('requested_amount');

        $validator
            ->numeric('amount_payable')
            //->requirePresence('amount_payable', 'create')
            ->allowEmptyString('amount_payable');

        $validator
            ->numeric('payment')
            //->requirePresence('payment', 'create')
            ->allowEmptyString('payment');

        return $validator;
    }
}
