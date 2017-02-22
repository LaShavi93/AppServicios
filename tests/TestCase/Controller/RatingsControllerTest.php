<?php
namespace App\Test\TestCase\Controller;

use App\Controller\RatingsController;
use Cake\TestSuite\IntegrationTestCase;

/**
 * App\Controller\RatingsController Test Case
 */
class RatingsControllerTest extends IntegrationTestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.ratings',
        'app.users',
        'app.cities',
        'app.countries',
        'app.services',
        'app.categories',
        'app.applications',
        'app.progress',
        'app.payments',
        'app.methods',
        'app.promotions',
        'app.applications_payments',
        'app.cities_services',
        'app.services_users',
        'app.roles',
        'app.specialties',
        'app.specialties_users'
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