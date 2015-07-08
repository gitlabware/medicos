<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Especialidade Entity.
 */
class Especialidade extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'nombre' => true,
        'estado' => true,
        'descripcion' => true,
        'medicos' => true,
    ];
}
