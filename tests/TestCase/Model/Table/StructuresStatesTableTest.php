<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\StructuresStatesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\StructuresStatesTable Test Case
 */
class StructuresStatesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\StructuresStatesTable
     */
    protected $StructuresStates;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.StructuresStates',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('StructuresStates') ? [] : ['className' => StructuresStatesTable::class];
        $this->StructuresStates = $this->getTableLocator()->get('StructuresStates', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->StructuresStates);

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
