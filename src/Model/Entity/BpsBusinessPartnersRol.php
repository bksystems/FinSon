<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * BpsBusinessPartnersRol Entity
 *
 * @property string $uuid
 * @property string $bps_business_partner_uuid
 * @property string $bps_types_rol_uuid
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 */
class BpsBusinessPartnersRol extends Entity
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
        'bps_types_rol_uuid' => true,
        'created' => true,
        'modified' => true,
    ];
}
