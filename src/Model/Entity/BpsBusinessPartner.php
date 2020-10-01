<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * BpsBusinessPartner Entity
 *
 * @property string $uuid
 * @property string $bps_unique_number
 * @property string $bps_last_name
 * @property string|null $bps_second_last_name
 * @property string $bps_first_name
 * @property string|null $bps_second_name
 * @property \Cake\I18n\FrozenDate $bps_birthdate
 * @property string $structures_country_uuid
 * @property string $structures_state_uuid
 * @property string $bps_unique_registry_key
 * @property string $bps_elector_key
 * @property string $bps_federal_taxpayer_registry
 * @property string $bps_identification_number
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 */
class BpsBusinessPartner extends Entity
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
        'bps_unique_number' => true,
        'bps_last_name' => true,
        'bps_second_last_name' => true,
        'bps_first_name' => true,
        'bps_second_name' => true,
        'bps_birthdate' => true,
        'structures_country_uuid' => true,
        'structures_state_uuid' => true,
        'bps_unique_registry_key' => true,
        'bps_elector_key' => true,
        'bps_federal_taxpayer_registry' => true,
        'bps_identification_number' => true,
        'created' => true,
        'modified' => true,
    ];
}
