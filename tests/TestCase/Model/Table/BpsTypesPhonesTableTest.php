<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\BpsTypesPhonesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\BpsTypesPhonesTable Test Case
 */
class BpsTypesPhonesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\BpsTypesPhonesTable
     */
    protected $BpsTypesPhones;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.BpsTypesPhones',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('BpsTypesPhones') ? [] : ['className' => BpsTypesPhonesTable::class];
        $this->BpsTypesPhones = $this->getTableLocator()->get('BpsTypesPhones', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->BpsTypesPhones);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
