<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\BpsBusinessPartnersPhonesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\BpsBusinessPartnersPhonesTable Test Case
 */
class BpsBusinessPartnersPhonesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\BpsBusinessPartnersPhonesTable
     */
    protected $BpsBusinessPartnersPhones;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.BpsBusinessPartnersPhones',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('BpsBusinessPartnersPhones') ? [] : ['className' => BpsBusinessPartnersPhonesTable::class];
        $this->BpsBusinessPartnersPhones = $this->getTableLocator()->get('BpsBusinessPartnersPhones', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->BpsBusinessPartnersPhones);

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
