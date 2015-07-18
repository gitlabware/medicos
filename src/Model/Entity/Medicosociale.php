<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Medicosociale Entity.
 */
class Medicosociale extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'sociale_id' => true,
        'medico_id' => true,
        'url' => true,
        'sociale' => true,
        'medico' => true,
    ];
}
