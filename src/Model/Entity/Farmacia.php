<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Farmacia Entity.
 */
class Farmacia extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'nombre' => true,
        'direccion' => true,
        'telefonos' => true,
        'origenid' => true,
        'lat' => true,
        'lng' => true,
        'origen' => true,
    ];
}
