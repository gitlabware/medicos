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
 * @property \Cake\ORM\Association\HasMany $Consultorios
 */
class MedicosTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('medicos');
        $this->displayField('nombre');
        $this->primaryKey('id');
        $this->addBehavior('Timestamp');
        $this->belongsTo('Especialidades', [
            'foreignKey' => 'especialidade_id',
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
    public function validationDefault(Validator $validator)
    {
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
            ->allowEmpty('ci');
            
        $validator
            ->allowEmpty('matricula');
            
        $validator
            ->allowEmpty('mail');

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
        $rules->add($rules->existsIn(['especialidade_id'], 'Especialidades'));
        return $rules;
    }
}
