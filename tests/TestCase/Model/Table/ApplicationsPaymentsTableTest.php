<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ApplicationsPaymentsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ApplicationsPaymentsTable Test Case
 */
class ApplicationsPaymentsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ApplicationsPaymentsTable
     */
    public $ApplicationsPayments;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.applications_payments',
        'app.applications',
        'app.users',
        'app.cities',
        'app.countries',
        'app.services',
        'app.categories',
        'app.cities_services',
        'app.services_users',
        'app.roles',
        'app.payments',
        'app.methods',
        'app.promotions',
        'app.progress',
        'app.specialties',
        'app.specialties_users',
        'app.ratings'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('ApplicationsPayments') ? [] : ['className' => 'App\Model\Table\ApplicationsPaymentsTable'];
        $this->ApplicationsPayments = TableRegistry::get('ApplicationsPayments', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ApplicationsPayments);

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
