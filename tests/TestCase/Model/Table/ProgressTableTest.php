<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ProgressTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ProgressTable Test Case
 */
class ProgressTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ProgressTable
     */
    public $Progress;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.progress'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Progress') ? [] : ['className' => 'App\Model\Table\ProgressTable'];
        $this->Progress = TableRegistry::get('Progress', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Progress);

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
