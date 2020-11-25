<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * SalesTypesPayment Entity
 *
 * @property string $uuid
 * @property string $type_pyment
 * @property int $paydays
 * @property string $description
 * @property bool $enable
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 */
class SalesTypesPayment extends Entity
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
        'type_pyment' => true,
        'paydays' => true,
        'description' => true,
        'enable' => true,
        'created' => true,
        'modified' => true,
    ];
}
