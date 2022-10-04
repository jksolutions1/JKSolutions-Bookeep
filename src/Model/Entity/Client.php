<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Client Entity
 *
 * @property int $id
 * @property string $firstname
 * @property string $lastname
 * @property int $contactno
 * @property string $address
 * @property string $email
 * @property string $required_documents
 * @property int $payment
 *
 * @property \App\Model\Entity\Appointment[] $appointments
 * @property \App\Model\Entity\Company[] $companies
 * @property \App\Model\Entity\Document[] $documents
 * @property \App\Model\Entity\User[] $users
 */
class Client extends Entity
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
        'firstname' => true,
        'lastname' => true,
        'contactno' => true,
        'address' => true,
        'email' => true,
        'required_documents' => true,
        'user_id' => true,
        'appointments' => true,
        'companies' => true,
        'documents' => true,
        'users' => true,
    ];

    protected $_virtual = [
        'fullname'
    ];

    protected function _getFullname()
{
    return $this->firstname . ' ' . $this->lastname;
}
}
