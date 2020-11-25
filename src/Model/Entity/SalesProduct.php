<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * SalesProduct Entity
 *
 * @property string $uuid
 * @property string $product_name
 * @property string $sales_types_payment_uuid
 * @property float $anual_rate
 * @property bool $enable
 * @property string $description
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 */
class SalesProduct extends Entity
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
        'product_name' => true,
        'sales_types_payment_uuid' => true,
        'number_payments' => true,
        'anual_rate' => true,
        'enable' => true,
        'description' => true,
        'created' => true,
        'modified' => true,
    ];
}
