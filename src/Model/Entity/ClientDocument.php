<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * ClientDocument Entity
 *
 * @property int $client_id
 * @property int $document_no
 * @property int $document_type
 *
 * @property \App\Model\Entity\Client $client
 */
class ClientDocument extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array<string, bool>
     */
    protected $_accessible = [
        'client_id' => true,
        'document_no' => true,
        'document_type' => true,
        'client' => true,
    ];
}
