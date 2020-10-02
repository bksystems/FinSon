<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\StructuresColoniesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\StructuresColoniesTable Test Case
 */
class StructuresColoniesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\StructuresColoniesTable
     */
    protected $StructuresColonies;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.StructuresColonies',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('StructuresColonies') ? [] : ['className' => StructuresColoniesTable::class];
        $this->StructuresColonies = $this->getTableLocator()->get('StructuresColonies', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->StructuresColonies);

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
