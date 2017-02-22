<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MethodsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MethodsTable Test Case
 */
class MethodsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\MethodsTable
     */
    public $Methods;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.methods',
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
        'app.promotions'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Methods') ? [] : ['className' => 'App\Model\Table\MethodsTable'];
        $this->Methods = TableRegistry::get('Methods', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Methods);

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
