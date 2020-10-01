<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * BpsBusinessPartnersFixture
 */
class BpsBusinessPartnersFixture extends TestFixture
{
    /**
     * Fields
     *
     * @var array
     */
    // phpcs:disable
    public $fields = [
        'uuid' => ['type' => 'uuid', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'bps_unique_number' => ['type' => 'char', 'length' => 10, 'null' => false, 'default' => null, 'collate' => 'utf8_spanish_ci', 'comment' => '', 'precision' => null],
        'bps_last_name' => ['type' => 'string', 'length' => 110, 'null' => false, 'default' => null, 'collate' => 'utf8_spanish_ci', 'comment' => '', 'precision' => null],
        'bps_second_last_name' => ['type' => 'string', 'length' => 110, 'null' => true, 'default' => null, 'collate' => 'utf8_spanish_ci', 'comment' => '', 'precision' => null],
        'bps_first_name' => ['type' => 'string', 'length' => 110, 'null' => false, 'default' => null, 'collate' => 'utf8_spanish_ci', 'comment' => '', 'precision' => null],
        'bps_second_name' => ['type' => 'string', 'length' => 110, 'null' => true, 'default' => null, 'collate' => 'utf8_spanish_ci', 'comment' => '', 'precision' => null],
        'bps_birthdate' => ['type' => 'date', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'structures_country_uuid' => ['type' => 'uuid', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'structures_state_uuid' => ['type' => 'uuid', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'bps_unique_registry_key' => ['type' => 'char', 'length' => 18, 'null' => false, 'default' => null, 'collate' => 'utf8_spanish_ci', 'comment' => '', 'precision' => null],
        'bps_elector_key' => ['type' => 'char', 'length' => 18, 'null' => false, 'default' => null, 'collate' => 'utf8_spanish_ci', 'comment' => '', 'precision' => null],
        'bps_federal_taxpayer_registry' => ['type' => 'char', 'length' => 18, 'null' => false, 'default' => null, 'collate' => 'utf8_spanish_ci', 'comment' => '', 'precision' => null],
        'bps_identification_number' => ['type' => 'char', 'length' => 18, 'null' => false, 'default' => null, 'collate' => 'utf8_spanish_ci', 'comment' => '', 'precision' => null],
        'created' => ['type' => 'datetime', 'length' => null, 'precision' => null, 'null' => true, 'default' => null, 'comment' => ''],
        'modified' => ['type' => 'datetime', 'length' => null, 'precision' => null, 'null' => true, 'default' => null, 'comment' => ''],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['uuid'], 'length' => []],
            'bps_unique_number' => ['type' => 'unique', 'columns' => ['bps_unique_number'], 'length' => []],
            'bps_unique_registry_key' => ['type' => 'unique', 'columns' => ['bps_unique_registry_key'], 'length' => []],
            'bps_elector_key' => ['type' => 'unique', 'columns' => ['bps_elector_key'], 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'utf8_spanish_ci'
        ],
    ];
    // phpcs:enable
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'uuid' => 'b3727919-20ff-4994-ac38-1b7e17677aea',
                'bps_unique_number' => '',
                'bps_last_name' => 'Lorem ipsum dolor sit amet',
                'bps_second_last_name' => 'Lorem ipsum dolor sit amet',
                'bps_first_name' => 'Lorem ipsum dolor sit amet',
                'bps_second_name' => 'Lorem ipsum dolor sit amet',
                'bps_birthdate' => '2020-10-01',
                'structures_country_uuid' => 'ba924eba-8a06-4989-a186-ac40f6501edc',
                'structures_state_uuid' => 'cbd80950-7b6e-44cb-b3a1-24b1615baa74',
                'bps_unique_registry_key' => '',
                'bps_elector_key' => '',
                'bps_federal_taxpayer_registry' => '',
                'bps_identification_number' => '',
                'created' => '2020-10-01 18:18:20',
                'modified' => '2020-10-01 18:18:20',
            ],
        ];
        parent::init();
    }
}
