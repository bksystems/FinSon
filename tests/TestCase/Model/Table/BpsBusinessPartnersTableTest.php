<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\BpsBusinessPartnersTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\BpsBusinessPartnersTable Test Case
 */
class BpsBusinessPartnersTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\BpsBusinessPartnersTable
     */
    protected $BpsBusinessPartners;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.BpsBusinessPartners',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('BpsBusinessPartners') ? [] : ['className' => BpsBusinessPartnersTable::class];
        $this->BpsBusinessPartners = $this->getTableLocator()->get('BpsBusinessPartners', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->BpsBusinessPartners);

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
