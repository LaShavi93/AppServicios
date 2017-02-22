<?php
namespace App\Test\TestCase\Controller;

use App\Controller\ServicesController;
use Cake\TestSuite\IntegrationTestCase;

/**
 * App\Controller\ServicesController Test Case
 */
class ServicesControllerTest extends IntegrationTestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
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
        'app.services_users',
        'app.specialties',
        'app.specialties_users',
        'app.ratings'
    ];

    /**
     * Test index method
     *
     * @return void
     */
    public function testIndex()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test view method
     *
     * @return void
     */
    public function testView()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test add method
     *
     * @return void
     */
    public function testAdd()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test edit method
     *
     * @return void
     */
    public function testEdit()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test delete method
     *
     * @return void
     */
    public function testDelete()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
