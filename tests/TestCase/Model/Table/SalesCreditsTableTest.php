<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SalesCreditsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SalesCreditsTable Test Case
 */
class SalesCreditsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\SalesCreditsTable
     */
    protected $SalesCredits;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.SalesCredits',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('SalesCredits') ? [] : ['className' => SalesCreditsTable::class];
        $this->SalesCredits = $this->getTableLocator()->get('SalesCredits', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->SalesCredits);

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
