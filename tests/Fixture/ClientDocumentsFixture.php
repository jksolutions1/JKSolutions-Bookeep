<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ClientDocumentsFixture
 */
class ClientDocumentsFixture extends TestFixture
{
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'client_id' => 1,
                'document_no' => 1,
                'document_type' => 1,
            ],
        ];
        parent::init();
    }
}
