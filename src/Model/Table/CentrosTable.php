<?php

namespace App\Model\Table;

use App\Model\Entity\Centro;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Centros Model
 *
 */
class CentrosTable extends Table {

  /**
   * Initialize method
   *
   * @param array $config The configuration for the Table.
   * @return void
   */
  public function initialize(array $config) {
    $this->table('centros');
    $this->displayField('id');
    $this->primaryKey('id');
    $this->addBehavior('Timestamp');
    $this->belongsTo('Origens', [
      'className' => 'Centros',
      'foreignKey' => 'origenid'
    ]);
  }

  /**
   * Default validation rules.
   *
   * @param \Cake\Validation\Validator $validator Validator instance.
   * @return \Cake\Validation\Validator
   */
  public function validationDefault(Validator $validator) {
    $validator
      ->add('id', 'valid', ['rule' => 'numeric'])
      ->allowEmpty('id', 'create');

    $validator
      ->requirePresence('nombre', 'create')
      ->notEmpty('nombre');

    $validator
      ->requirePresence('direccion', 'create')
      ->notEmpty('direccion');

    $validator
      ->requirePresence('telefonos', 'create')
      ->notEmpty('telefonos');

    $validator
      ->requirePresence('tipo', 'create')
      ->notEmpty('tipo');

    $validator
      ->add('origenid', 'valid', ['rule' => 'numeric'])
      ->allowEmpty('origenid');

    $validator
      ->requirePresence('lat', 'create')
      ->notEmpty('lat','Es necesario que seleccion el lugar en el mapa');

    $validator
      ->requirePresence('lng', 'create')
      ->notEmpty('lng','Es necesario que seleccion el lugar en el mapa');

    return $validator;
  }

}
