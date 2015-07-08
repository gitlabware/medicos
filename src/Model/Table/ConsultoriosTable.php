<?php
namespace App\Model\Table;

use App\Model\Entity\Consultorio;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Consultorios Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Medicos
 */
class ConsultoriosTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('consultorios');
        $this->displayField('id');
        $this->primaryKey('id');
        $this->addBehavior('Timestamp');
        $this->belongsTo('Medicos', [
            'foreignKey' => 'medico_id',
            'joinType' => 'INNER'
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->add('id', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('id', 'create');
            
        $validator
            ->allowEmpty('nombre');
            
        $validator
            ->allowEmpty('direccion');
            
        $validator
            ->allowEmpty('telefonos');
            
        $validator
            ->allowEmpty('lat');
            
        $validator
            ->allowEmpty('lng');
            
        $validator
            ->allowEmpty('horarios');
            
        $validator
            ->allowEmpty('estado');
            
        $validator
            ->allowEmpty('descripcion');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['medico_id'], 'Medicos'));
        return $rules;
    }
}
