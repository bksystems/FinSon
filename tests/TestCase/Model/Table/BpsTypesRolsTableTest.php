<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\BpsTypesRolsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\BpsTypesRolsTable Test Case
 */
class BpsTypesRolsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\BpsTypesRolsTable
     */
    protected $BpsTypesRols;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.BpsTypesRols',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('BpsTypesRols') ? [] : ['className' => BpsTypesRolsTable::class];
        $this->BpsTypesRols = $this->getTableLocator()->get('BpsTypesRols', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->BpsTypesRols);

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
