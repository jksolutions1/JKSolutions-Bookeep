<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * User Entity
 *
 * @property int $id
 * @property string $firstname
 * @property string $lastname
 * @property string $role
 * @property int $client_id
 * @property string $Username
 * @property string $Password
 *
 * @property \App\Model\Entity\Client $client
 * @property \App\Model\Entity\Admin[] $admins
 */
class User extends Entity
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
        'role' => true,
        'client_id' => true,
        'Username' => true,
        'Password' => true,
        'client' => true,
        'admins' => true,
    ];
}
