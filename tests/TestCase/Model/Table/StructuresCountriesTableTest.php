<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\StructuresCountriesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\StructuresCountriesTable Test Case
 */
class StructuresCountriesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\StructuresCountriesTable
     */
    protected $StructuresCountries;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.StructuresCountries',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('StructuresCountries') ? [] : ['className' => StructuresCountriesTable::class];
        $this->StructuresCountries = $this->getTableLocator()->get('StructuresCountries', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->StructuresCountries);

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
