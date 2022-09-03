<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ClientdocumentsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ClientdocumentsTable Test Case
 */
class ClientdocumentsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ClientdocumentsTable
     */
    protected $Clientdocuments;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Clientdocuments',
        'app.Clients',
        'app.Documents',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Clientdocuments') ? [] : ['className' => ClientdocumentsTable::class];
        $this->Clientdocuments = $this->getTableLocator()->get('Clientdocuments', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Clientdocuments);

        parent::tearDown();
    }
}
