<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SpecialtiesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SpecialtiesTable Test Case
 */
class SpecialtiesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\SpecialtiesTable
     */
    public $Specialties;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.specialties',
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
        $config = TableRegistry::exists('Specialties') ? [] : ['className' => 'App\Model\Table\SpecialtiesTable'];
        $this->Specialties = TableRegistry::get('Specialties', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Specialties);

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
