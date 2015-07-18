<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Sociale Entity.
 */
class Sociale extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'nombre' => true,
        'icono' => true,
        'medicosociales' => true,
    ];
}
