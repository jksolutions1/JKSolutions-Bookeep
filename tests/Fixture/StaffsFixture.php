<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * StaffsFixture
 */
class StaffsFixture extends TestFixture
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
                'staff_firstname' => 1,
                'staff_lastname' => 1,
                'staff_contactno' => 1,
                'staff_address' => 1,
                'staff_email' => 1,
            ],
        ];
        parent::init();
    }
}
