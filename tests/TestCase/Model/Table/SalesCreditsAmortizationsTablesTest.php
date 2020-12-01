<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SalesCreditsAmortizationsTables;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SalesCreditsAmortizationsTables Test Case
 */
class SalesCreditsAmortizationsTablesTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\SalesCreditsAmortizationsTables
     */
    protected $SalesCreditsAmortizationsTables;

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('SalesCreditsAmortizationss') ? [] : ['className' => SalesCreditsAmortizationsTables::class];
        $this->SalesCreditsAmortizationsTables = $this->getTableLocator()->get('SalesCreditsAmortizationss', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->SalesCreditsAmortizationsTables);

        parent::tearDown();
    }
}
