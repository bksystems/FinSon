<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * BpsBusinessPartnersRolsFixture
 */
class BpsBusinessPartnersRolsFixture extends TestFixture
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
        'bps_types_rol_uuid' => ['type' => 'uuid', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
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
                'uuid' => 'b4576649-5388-4dfb-a4ee-a14068eae8e9',
                'bps_business_partner_uuid' => '62e9814c-7627-44da-a972-60be6bef8162',
                'bps_types_rol_uuid' => '90c1a950-fe05-4c23-801a-76262e105200',
                'created' => '2020-11-24 22:30:24',
                'modified' => '2020-11-24 22:30:24',
            ],
        ];
        parent::init();
    }
}
