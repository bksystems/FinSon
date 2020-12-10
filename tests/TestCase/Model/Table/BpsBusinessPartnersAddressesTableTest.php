<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\BpsBusinessPartnersAddressesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\BpsBusinessPartnersAddressesTable Test Case
 */
class BpsBusinessPartnersAddressesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\BpsBusinessPartnersAddressesTable
     */
    protected $BpsBusinessPartnersAddresses;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.BpsBusinessPartnersAddresses',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('BpsBusinessPartnersAddresses') ? [] : ['className' => BpsBusinessPartnersAddressesTable::class];
        $this->BpsBusinessPartnersAddresses = $this->getTableLocator()->get('BpsBusinessPartnersAddresses', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->BpsBusinessPartnersAddresses);

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
}
