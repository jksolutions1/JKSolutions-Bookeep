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
 * @property string $adress
 * @property string $email
 * @property string $appointment_list
 * @property string $required_documents
 * @property int $payment
 * @property string $Username
 * @property string $Password
 *
 * @property \App\Model\Entity\ClientDocument[] $client_documents
 * @property \App\Model\Entity\Company[] $companies
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
        'adress' => true,
        'email' => true,
        'appointment_list' => true,
        'required_documents' => true,
        'payment' => true,
        'Username' => true,
        'Password' => true,
        'client_documents' => true,
        'companies' => true,
        'users' => true,
    ];
}
