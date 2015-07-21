<?php

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Medico Entity.
 */
class Medico extends Entity {

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
    'user_id' => true,
    'sexo' => true,
    'lugar' => true,
    'fecha_nacimiento' => true,
    'especialidade' => true,
    'user' => true,
    'consultorios' => true,
    'leyenda' => true,
  ];

  protected function _getFechaNacimiento($fecha) {
    if (!empty($fecha)) {
      return $fecha->i18nFormat('YYYY-MM-dd');
    } else {
      return $fecha;
    }
  }

  /* protected function _setFechaNacimiento($fecha_nacimiento) {
    return $fecha_nacimiento;
    } */
}
