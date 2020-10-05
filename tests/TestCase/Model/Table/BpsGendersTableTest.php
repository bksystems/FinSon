<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\BpsGendersTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\BpsGendersTable Test Case
 */
class BpsGendersTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\BpsGendersTable
     */
    protected $BpsGenders;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.BpsGenders',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('BpsGenders') ? [] : ['className' => BpsGendersTable::class];
        $this->BpsGenders = $this->getTableLocator()->get('BpsGenders', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->BpsGenders);

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
