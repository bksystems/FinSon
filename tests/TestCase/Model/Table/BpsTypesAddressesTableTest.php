<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\BpsTypesAddressesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\BpsTypesAddressesTable Test Case
 */
class BpsTypesAddressesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\BpsTypesAddressesTable
     */
    protected $BpsTypesAddresses;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.BpsTypesAddresses',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('BpsTypesAddresses') ? [] : ['className' => BpsTypesAddressesTable::class];
        $this->BpsTypesAddresses = $this->getTableLocator()->get('BpsTypesAddresses', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->BpsTypesAddresses);

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
