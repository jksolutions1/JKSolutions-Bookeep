<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ConversationsFixture
 */
class ConversationsFixture extends TestFixture
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
                'con_type' => 'Lorem ipsum dolor sit amet',
                'con_description' => 'Lorem ipsum dolor sit amet',
                'client_id' => 1,
            ],
        ];
        parent::init();
    }
}
