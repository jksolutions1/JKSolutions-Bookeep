<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Document Entity
 *
 * @property int $id
 * @property string $doctype
 * @property int $client_id
 * @property string $docfile
 *
 * @property \App\Model\Entity\Client $client
 */
class Document extends Entity
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
        'doctype' => true,
        'client_id' => true,
        'docfile' => true,
        'client' => true,
    ];
}
