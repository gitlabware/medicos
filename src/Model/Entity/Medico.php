<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Medico Entity.
 */
class Medico extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'nombre' => true,
        'telefonos' => true,
        'direccion' => true,
        'ci' => true,
        'matricula' => true,
        'mail' => true,
        'especialidade_id' => true,
    ];
}
