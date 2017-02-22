<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CitiesServicesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CitiesServicesTable Test Case
 */
class CitiesServicesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\CitiesServicesTable
     */
    public $CitiesServices;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.cities_services',
        'app.cities',
        'app.countries',
        'app.users',
        'app.roles',
        'app.payments',
        'app.methods',
        'app.promotions',
        'app.progress',
        'app.applications',
        'app.services',
        'app.categories',
        'app.services_users',
        'app.ratings',
        'app.applications_payments',
        'app.specialties',
        'app.specialties_users'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('CitiesServices') ? [] : ['className' => 'App\Model\Table\CitiesServicesTable'];
        $this->CitiesServices = TableRegistry::get('CitiesServices', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->CitiesServices);

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

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
