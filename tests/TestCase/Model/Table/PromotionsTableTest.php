<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PromotionsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PromotionsTable Test Case
 */
class PromotionsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\PromotionsTable
     */
    public $Promotions;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.promotions',
        'app.payments',
        'app.users',
        'app.cities',
        'app.countries',
        'app.services',
        'app.categories',
        'app.applications',
        'app.progress',
        'app.ratings',
        'app.applications_payments',
        'app.cities_services',
        'app.services_users',
        'app.roles',
        'app.specialties',
        'app.specialties_users',
        'app.methods'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Promotions') ? [] : ['className' => 'App\Model\Table\PromotionsTable'];
        $this->Promotions = TableRegistry::get('Promotions', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Promotions);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
