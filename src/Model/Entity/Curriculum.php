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
}
