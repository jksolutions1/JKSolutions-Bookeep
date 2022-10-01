<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ConversationtypesFixture
 */
class ConversationtypesFixture extends TestFixture
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
                'id' => 1,
                'con_id' => 1,
                'contype_type' => 1,
            ],
        ];
        parent::init();
    }
}
