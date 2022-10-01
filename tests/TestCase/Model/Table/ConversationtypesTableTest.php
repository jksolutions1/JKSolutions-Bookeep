<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ConversationtypesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ConversationtypesTable Test Case
 */
class ConversationtypesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ConversationtypesTable
     */
    protected $Conversationtypes;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Conversationtypes',
        'app.Conversations',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Conversationtypes') ? [] : ['className' => ConversationtypesTable::class];
        $this->Conversationtypes = $this->getTableLocator()->get('Conversationtypes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Conversationtypes);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\ConversationtypesTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\ConversationtypesTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
