<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Staff Entity
 *
 * @property int $id
 * @property int $staff_firstname
 * @property int $staff_lastname
 * @property int $staff_contactno
 * @property int $staff_address
 * @property int $staff_email
 */
class Staff extends Entity
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
        'staff_firstname' => true,
        'staff_lastname' => true,
        'staff_contactno' => true,
        'staff_address' => true,
        'staff_email' => true,
    ];
}
