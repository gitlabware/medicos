<?php

namespace App\Model\Table;

use App\Model\Entity\Medico;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Medicos Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Especialidades
 * @property \Cake\ORM\Association\BelongsTo $Users
 * @property \Cake\ORM\Association\HasMany $Consultorios
 */
class MedicosTable extends Table {

  /**
   * Initialize method
   *
   * @param array $config The configuration for the Table.
   * @return void
   */
  public function initialize(array $config) {
    $this->table('medicos');
    $this->displayField('nombre');
    $this->primaryKey('id');
    $this->addBehavior('Timestamp');
    $this->belongsTo('Especialidades', [
      'foreignKey' => 'especialidade_id',
      'joinType' => 'INNER'
    ]);
    $this->belongsTo('Users', [
      'foreignKey' => 'user_id',
      'joinType' => 'INNER'
    ]);
    $this->hasMany('Consultorios', [
      'foreignKey' => 'medico_id'
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
      ->allowEmpty('telefonos');

    $validator
      ->allowEmpty('direccion');

    $validator
      ->requirePresence('ci', 'create')
      ->notEmpty('ci');

    $validator
      ->allowEmpty('matricula');

    $validator
      ->allowEmpty('mail');

    $validator
      ->requirePresence('sexo', 'create')
      ->notEmpty('sexo');

    $validator
      ->allowEmpty('lugar');

    $validator
      ->add('fecha_nacimiento', 'valid', ['rule' => 'date', 'message' => 'No es correcto el formato de la fecha de nacimiento'])
      ->requirePresence('fecha_nacimiento', 'create')
      ->notEmpty('fecha_nacimiento');

    $validator
      ->allowEmpty('leyenda');
    $validator
      ->allowEmpty('url');

    return $validator;
  }

  /**
   * Returns a rules checker object that will be used for validating
   * application integrity.
   *
   * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
   * @return \Cake\ORM\RulesChecker
   */
  public function buildRules(RulesChecker $rules) {
    $rules->add($rules->existsIn(['especialidade_id'], 'Especialidades'));
    $rules->add($rules->existsIn(['user_id'], 'Users'));
    return $rules;
  }

}
