<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Conversationtype Entity
 *
 * @property int $id
 * @property int $con_id
 * @property int $contype_type
 *
 * @property \App\Model\Entity\Conversation $conversation
 */
class Conversationtype extends Entity
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
        'con_id' => true,
        'contype_type' => true,
        'conversation' => true,
    ];
}
