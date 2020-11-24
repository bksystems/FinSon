<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\BpsBusinessPartnersRolsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\BpsBusinessPartnersRolsTable Test Case
 */
class BpsBusinessPartnersRolsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\BpsBusinessPartnersRolsTable
     */
    protected $BpsBusinessPartnersRols;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.BpsBusinessPartnersRols',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('BpsBusinessPartnersRols') ? [] : ['className' => BpsBusinessPartnersRolsTable::class];
        $this->BpsBusinessPartnersRols = $this->getTableLocator()->get('BpsBusinessPartnersRols', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->BpsBusinessPartnersRols);

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
