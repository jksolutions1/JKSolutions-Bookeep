<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Appointment Entity
 *
 * @property int $id
 * @property string|null $appointment_description
 * @property int $client_id
 * @property int $company_id
 * @property \Cake\I18n\FrozenTime $date
 * @property string|null $address
 *
 * @property \App\Model\Entity\Client $client
 * @property \App\Model\Entity\Company $company
 */
class Appointment extends Entity
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
        'appointment_description' => true,
        'client_id' => true,
        'company_id' => true,
        'date' => true,
        'address' => true,
        'client' => true,
        'company' => true,
    ];
}
