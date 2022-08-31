<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Document Entity
 *
 * @property int $id
 * @property string $client_engagement_agreement_doc
 * @property string $authority_for_agent_doc
 *
 * @property \App\Model\Entity\ClientDocument[] $client_documents
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
        'client_engagement_agreement_doc' => true,
        'authority_for_agent_doc' => true,
        'client_documents' => true,
    ];
}
