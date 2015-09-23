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
            ->allowEmpty('titulobt');
            
        $validator
            ->allowEmpty('anoini');
            
        $validator
            ->allowEmpty('anofin');
            
        $validator
            ->allowEmpty('centroestu');
            
        $validator
            ->allowEmpty('puestocupado');
            
        $validator
            ->allowEmpty('nom_empre');
            
        $validator
            ->add('fechaini', 'valid', ['rule' => 'date'])
            ->allowEmpty('fechaini');
            
        $validator
            ->add('fechafin', 'valid', ['rule' => 'date'])
            ->allowEmpty('fechafin');
            
        $validator
            ->allowEmpty('descrip');
            
        $validator
            ->allowEmpty('nomcurso');
            
        $validator
            ->allowEmpty('horas');
            
        $validator
            ->allowEmpty('tipo');
            
        $validator
            ->allowEmpty('cent_est');
            
        $validator
            ->add('fech_fin', 'valid', ['rule' => 'date'])
            ->allowEmpty('fech_fin');
            
        $validator
            ->add('fech_ini', 'valid', ['rule' => 'date'])
            ->allowEmpty('fech_ini');

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
