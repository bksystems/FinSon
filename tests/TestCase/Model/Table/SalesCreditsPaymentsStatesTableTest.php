<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SalesCreditsPaymentsStatesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SalesCreditsPaymentsStatesTable Test Case
 */
class SalesCreditsPaymentsStatesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\SalesCreditsPaymentsStatesTable
     */
    protected $SalesCreditsPaymentsStates;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.SalesCreditsPaymentsStates',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('SalesCreditsPaymentsStates') ? [] : ['className' => SalesCreditsPaymentsStatesTable::class];
        $this->SalesCreditsPaymentsStates = $this->getTableLocator()->get('SalesCreditsPaymentsStates', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->SalesCreditsPaymentsStates);

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
