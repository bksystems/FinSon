<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * StructuresState Entity
 *
 * @property string $uuid
 * @property string $structures_country_uuid
 * @property string $state
 * @property string $state_key
 * @property string $state_renapo
 * @property bool $enable
 * @property string|null $description
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 */
class StructuresState extends Entity
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
        'structures_country_uuid' => true,
        'state' => true,
        'state_key' => true,
        'state_renapo' => true,
        'enable' => true,
        'description' => true,
        'created' => true,
        'modified' => true,
    ];
}
