<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Consulta Entity.
 */
class Consulta extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'nombre' => true,
        'estado' => true,
        'mensajes' => true,
    ];
}
