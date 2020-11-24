<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * BpsTypesRolsFixture
 */
class BpsTypesRolsFixture extends TestFixture
{
    /**
     * Fields
     *
     * @var array
     */
    // phpcs:disable
    public $fields = [
        'uuid' => ['type' => 'uuid', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'type_rol' => ['type' => 'string', 'length' => 150, 'null' => false, 'default' => null, 'collate' => 'utf8_spanish_ci', 'comment' => '', 'precision' => null],
        'enable' => ['type' => 'boolean', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'description' => ['type' => 'text', 'length' => null, 'null' => true, 'default' => null, 'collate' => 'utf8_spanish_ci', 'comment' => '', 'precision' => null],
        'created' => ['type' => 'datetime', 'length' => null, 'precision' => null, 'null' => true, 'default' => null, 'comment' => ''],
        'modified' => ['type' => 'datetime', 'length' => null, 'precision' => null, 'null' => true, 'default' => null, 'comment' => ''],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['uuid'], 'length' => []],
            'type_rol' => ['type' => 'unique', 'columns' => ['type_rol'], 'length' => []],
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
                'uuid' => 'a72f2e9c-05d6-41f8-9342-4008b9e53bd6',
                'type_rol' => 'Lorem ipsum dolor sit amet',
                'enable' => 1,
                'description' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
                'created' => '2020-11-24 22:20:59',
                'modified' => '2020-11-24 22:20:59',
            ],
        ];
        parent::init();
    }
}
