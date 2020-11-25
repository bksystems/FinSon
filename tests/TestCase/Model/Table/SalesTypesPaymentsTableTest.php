<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SalesTypesPaymentsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SalesTypesPaymentsTable Test Case
 */
class SalesTypesPaymentsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\SalesTypesPaymentsTable
     */
    protected $SalesTypesPayments;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.SalesTypesPayments',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('SalesTypesPayments') ? [] : ['className' => SalesTypesPaymentsTable::class];
        $this->SalesTypesPayments = $this->getTableLocator()->get('SalesTypesPayments', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->SalesTypesPayments);

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
