<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Mensaje Entity.
 */
class Mensaje extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'user_id' => true,
        'consulta_id' => true,
        'mensaje' => true,
        'estado' => true,
        'user' => true,
        'consulta' => true,
    ];
}
