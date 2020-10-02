<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\StructuresMunicipalitiesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\StructuresMunicipalitiesTable Test Case
 */
class StructuresMunicipalitiesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\StructuresMunicipalitiesTable
     */
    protected $StructuresMunicipalities;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.StructuresMunicipalities',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('StructuresMunicipalities') ? [] : ['className' => StructuresMunicipalitiesTable::class];
        $this->StructuresMunicipalities = $this->getTableLocator()->get('StructuresMunicipalities', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->StructuresMunicipalities);

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
