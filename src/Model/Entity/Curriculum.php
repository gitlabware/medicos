<?php

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Curriculum Entity.
 */
class Curriculum extends Entity {

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'titulobt' => true,
        'anoini' => true,
        'anofin' => true,
        'centroestu' => true,
        'puestocupado' => true,
        'nom_empre' => true,
        'fechaini' => true,
        'fechafin' => true,
        'descrip' => true,
        'nomcurso' => true,
        'horas' => true,
        'tipo' => true,
        'medico_id' => true,
        'cent_est' => true,
        'fech_fin' => true,
        'fech_ini' => true,
        'medico' => true,
    ];

    protected function _getFechIni($fecha) {
        if (!empty($fecha)) {
            return $fecha->i18nFormat('YYYY-MM-dd');
        } else {
            return $fecha;
        }
    }
    protected function _getFechFin($fecha) {
        if (!empty($fecha)) {
            return $fecha->i18nFormat('YYYY-MM-dd');
        } else {
            return $fecha;
        }
    }
     protected function _getFechaini($fecha) {
        if (!empty($fecha)) {
            return $fecha->i18nFormat('YYYY-MM-dd');
        } else {
            return $fecha;
        }
    }
     protected function _getFechafin($fecha) {
        if (!empty($fecha)) {
            return $fecha->i18nFormat('YYYY-MM-dd');
        } else {
            return $fecha;
        }
    }

}
