<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Consultorio Entity.
 */
class Consultorio extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'medico_id' => true,
        'nombre' => true,
        'direccion' => true,
        'telefonos' => true,
        'lat' => true,
        'lng' => true,
        'horarios' => true,
        'estado' => true,
        'descripcion' => true,
        'medico' => true,
    ];
}
