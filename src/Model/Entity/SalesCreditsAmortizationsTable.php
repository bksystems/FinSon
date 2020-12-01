<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * SalesCreditsAmortizationsTable Entity
 *
 * @property string $uuid
 * @property string $sales_credit_uuid
 * @property int $number_payment
 * @property \Cake\I18n\FrozenDate $payment_date
 * @property float $amount_payment
 * @property float $principal_payment
 * @property float $interest_payment
 * @property float $balance
 * @property float $adjustment
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 */
class SalesCreditsAmortizationsTable extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'sales_credit_uuid' => true,
        'number_payment' => true,
        'payment_date' => true,
        'amount_payment' => true,
        'principal_payment' => true,
        'interest_payment' => true,
        'balance' => true,
        'adjustment' => true,
        'created' => true,
        'modified' => true,
    ];
}
