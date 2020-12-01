<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * SalesCreditsAmortizationsTables Model
 *
 * @method \App\Model\Entity\SalesCreditsAmortizationsTable newEmptyEntity()
 * @method \App\Model\Entity\SalesCreditsAmortizationsTable newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\SalesCreditsAmortizationsTable[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\SalesCreditsAmortizationsTable get($primaryKey, $options = [])
 * @method \App\Model\Entity\SalesCreditsAmortizationsTable findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\SalesCreditsAmortizationsTable patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\SalesCreditsAmortizationsTable[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\SalesCreditsAmortizationsTable|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\SalesCreditsAmortizationsTable saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\SalesCreditsAmortizationsTable[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\SalesCreditsAmortizationsTable[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\SalesCreditsAmortizationsTable[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\SalesCreditsAmortizationsTable[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class SalesCreditsAmortizationsTablesTable extends Table
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

        $this->setTable('sales_credits_amortizations_tables');
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
            ->uuid('sales_credit_uuid')
            ->requirePresence('sales_credit_uuid', 'create')
            ->notEmptyString('sales_credit_uuid');

        $validator
            ->integer('number_payment')
            ->requirePresence('number_payment', 'create')
            ->notEmptyString('number_payment');

        $validator
            ->date('payment_date')
            ->requirePresence('payment_date', 'create')
            ->notEmptyDate('payment_date');

        $validator
            ->numeric('amount_payment')
            ->requirePresence('amount_payment', 'create')
            ->notEmptyString('amount_payment');

        $validator
            ->numeric('principal_payment')
            ->requirePresence('principal_payment', 'create')
            ->notEmptyString('principal_payment');

        $validator
            ->numeric('interest_payment')
            ->requirePresence('interest_payment', 'create')
            ->notEmptyString('interest_payment');

        $validator
            ->numeric('balance')
            ->requirePresence('balance', 'create')
            ->notEmptyString('balance');

        $validator
            ->numeric('adjustment')
            ->requirePresence('adjustment', 'create')
            ->notEmptyString('adjustment');

        return $validator;
    }
}
