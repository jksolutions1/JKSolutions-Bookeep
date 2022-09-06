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
                'id' => 1,
                'doctype' => 'Lorem ipsum dolor sit amet',
                'client_id' => 1,
                'docfile' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
