<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * SalesCredit Entity
 *
 * @property string $uuid
 * @property string $bps_business_partner_uuid
 * @property string $sales_product_uuid
 * @property \Cake\I18n\FrozenDate $init_date_credit
 * @property \Cake\I18n\FrozenDate $end_date_credit
 * @property string $sales_products_types_state_uuid
 * @property float $requested_amount
 * @property float $amount_payable
 * @property float $payment
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 */
class SalesCredit extends Entity
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
        'bps_business_partner_uuid' => true,
        'sales_product_uuid' => true,
        'init_date_credit' => true,
        'end_date_credit' => true,
        'sales_products_types_state_uuid' => true,
        'requested_amount' => true,
        'amount_payable' => true,
        'payment' => true,
        'created' => true,
        'modified' => true,
    ];
}
