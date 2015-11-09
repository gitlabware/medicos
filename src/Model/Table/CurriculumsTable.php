<?php
namespace App\Model\Table;

use App\Model\Entity\Curriculum;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Curriculums Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Medicos
 */
class CurriculumsTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('curriculums');
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
            ->allowEmpty('titulacion');
            
        $validator
            ->add('fecha_ini', 'valid', ['rule' => 'date'])
            ->allowEmpty('fecha_ini');
            
        $validator
            ->add('fecha_fin', 'valid', ['rule' => 'date'])
            ->allowEmpty('fecha_fin');
            
        $validator
            ->allowEmpty('centro');
            
        $validator
            ->allowEmpty('puesto');
            
        $validator
            ->allowEmpty('empresa');
            
        $validator
            ->allowEmpty('descripcion');
            
        $validator
            ->add('horas', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('horas');

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
