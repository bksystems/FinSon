<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * BpsBusinessPartnersPhonesFixture
 */
class BpsBusinessPartnersPhonesFixture extends TestFixture
{
    /**
     * Fields
     *
     * @var array
     */
    // phpcs:disable
    public $fields = [
        'uuid' => ['type' => 'uuid', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'bps_business_partner_uuid' => ['type' => 'uuid', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'bps_types_phone_uuid' => ['type' => 'uuid', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'number' => ['type' => 'string', 'length' => 10, 'null' => false, 'default' => null, 'collate' => 'utf8_spanish_ci', 'comment' => '', 'precision' => null],
        'is_primary' => ['type' => 'boolean', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'created' => ['type' => 'datetime', 'length' => null, 'precision' => null, 'null' => true, 'default' => null, 'comment' => ''],
        'modified' => ['type' => 'datetime', 'length' => null, 'precision' => null, 'null' => true, 'default' => null, 'comment' => ''],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['uuid'], 'length' => []],
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
                'uuid' => '58bc3e41-2c4a-4058-9072-dd6567354245',
                'bps_business_partner_uuid' => 'b16b05b6-e0db-45e2-8959-38ee82123897',
                'bps_types_phone_uuid' => '6e9f2db4-c43a-4f5f-bc06-0c94c9e608f7',
                'number' => 'Lorem ip',
                'is_primary' => 1,
                'created' => '2020-11-24 20:52:20',
                'modified' => '2020-11-24 20:52:20',
            ],
        ];
        parent::init();
    }
}
