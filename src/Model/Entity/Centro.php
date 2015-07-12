<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Centro Entity.
 */
class Centro extends Entity
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
        'tipo' => true,
        'centro_id' => true,
        'centros' => true,
    ];
}
