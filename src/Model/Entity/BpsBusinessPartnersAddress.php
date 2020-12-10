<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * BpsBusinessPartnersAddress Entity
 *
 * @property string $uuid
 * @property string $bps_types_address
 * @property string $bps_business_partner_uuid
 * @property string $structures_colony_uuid
 * @property int $postal_code
 * @property string $address
 * @property string $external_number
 * @property string $internal_number
 * @property string $address_between
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 */
class BpsBusinessPartnersAddress extends Entity
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
        'bps_types_address' => true,
        'bps_business_partner_uuid' => true,
        'structures_colony_uuid' => true,
        'postal_code' => true,
        'address' => true,
        'external_number' => true,
        'internal_number' => true,
        'address_between' => true,
        'created' => true,
        'modified' => true,
    ];
}
