<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ClientDocumentsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ClientDocumentsTable Test Case
 */
class ClientDocumentsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ClientDocumentsTable
     */
    protected $ClientDocuments;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.ClientDocuments',
        'app.Clients',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('ClientDocuments') ? [] : ['className' => ClientDocumentsTable::class];
        $this->ClientDocuments = $this->getTableLocator()->get('ClientDocuments', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->ClientDocuments);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\ClientDocumentsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\ClientDocumentsTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
