<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SpecialtiesUsersTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SpecialtiesUsersTable Test Case
 */
class SpecialtiesUsersTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\SpecialtiesUsersTable
     */
    public $SpecialtiesUsers;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.specialties_users',
        'app.users',
        'app.cities',
        'app.countries',
        'app.services',
        'app.categories',
        'app.applications',
        'app.progress',
        'app.ratings',
        'app.payments',
        'app.methods',
        'app.promotions',
        'app.applications_payments',
        'app.cities_services',
        'app.services_users',
        'app.roles',
        'app.specialties'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('SpecialtiesUsers') ? [] : ['className' => 'App\Model\Table\SpecialtiesUsersTable'];
        $this->SpecialtiesUsers = TableRegistry::get('SpecialtiesUsers', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->SpecialtiesUsers);

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
