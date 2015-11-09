<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Curriculum Entity.
 */
class Curriculum extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'titulacion' => true,
        'fecha_ini' => true,
        'fecha_fin' => true,
        'centro' => true,
        'puesto' => true,
        'empresa' => true,
        'descripcion' => true,
        'horas' => true,
        'medico_id' => true,
        'medico' => true,
    ];
    protected function _getFechaFin($fecha_fin) {
    if (!empty($fecha_fin)) {
      return $fecha_fin->i18nFormat('YYYY-MM-dd');
    } else {
      return $fecha_fin;
    }
  }
   protected function _getFechaIni($fecha) {
    if (!empty($fecha)) {
      return $fecha->i18nFormat('YYYY-MM-dd');
    } else {
      return $fecha;
    }
  }
}
