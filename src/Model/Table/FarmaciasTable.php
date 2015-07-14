<?php

namespace App\Model\Table;

use App\Model\Entity\Farmacia;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Farmacias Model
 *
 */
class FarmaciasTable extends Table {

  /**
   * Initialize method
   *
   * @param array $config The configuration for the Table.
   * @return void
   */
  public function initialize(array $config) {
    $this->table('farmacias');
    $this->displayField('id');
    $this->primaryKey('id');
    $this->addBehavior('Timestamp');
    $this->belongsTo('Origens', [
      'className' => 'Farmacias',
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
      ->add('origenid', 'valid', ['rule' => 'numeric'])
      ->allowEmpty('origenid');

    return $validator;
  }
  

}
