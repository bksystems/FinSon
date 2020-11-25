<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SalesProductsTypesStatesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SalesProductsTypesStatesTable Test Case
 */
class SalesProductsTypesStatesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\SalesProductsTypesStatesTable
     */
    protected $SalesProductsTypesStates;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.SalesProductsTypesStates',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('SalesProductsTypesStates') ? [] : ['className' => SalesProductsTypesStatesTable::class];
        $this->SalesProductsTypesStates = $this->getTableLocator()->get('SalesProductsTypesStates', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->SalesProductsTypesStates);

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
