<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ServicesUsersTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ServicesUsersTable Test Case
 */
class ServicesUsersTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ServicesUsersTable
     */
    public $ServicesUsers;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.services_users',
        'app.services',
        'app.categories',
        'app.applications',
        'app.users',
        'app.cities',
        'app.countries',
        'app.cities_services',
        'app.roles',
        'app.payments',
        'app.methods',
        'app.promotions',
        'app.progress',
        'app.applications_payments',
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
        $config = TableRegistry::exists('ServicesUsers') ? [] : ['className' => 'App\Model\Table\ServicesUsersTable'];
        $this->ServicesUsers = TableRegistry::get('ServicesUsers', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ServicesUsers);

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
