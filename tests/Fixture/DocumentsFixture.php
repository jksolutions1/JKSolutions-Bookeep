<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * DocumentsFixture
 */
class DocumentsFixture extends TestFixture
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
                'no' => 1,
                'client_engagement_agreement_doc' => 1,
                'authority_for_agent_doc' => 1,
            ],
        ];
        parent::init();
    }
}
