<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * UsersFixture
 */
class UsersFixture extends TestFixture
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
                'firstname' => 1,
                'lastname' => 1,
                'role' => 1,
                'client_id' => 1,
                'Username' => 1,
                'Password' => 1,
            ],
        ];
        parent::init();
    }
}
