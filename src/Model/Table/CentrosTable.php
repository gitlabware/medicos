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
 * @property \Cake\ORM\Association\BelongsTo $Centros
 * @property \Cake\ORM\Association\HasMany $Centros
 */
class CentrosTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('centros');
        $this->displayField('id');
        $this->primaryKey('id');
        $this->addBehavior('Timestamp');
        $this->belongsTo('Centros', [
            'foreignKey' => 'centro_id'
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
            ->requirePresence('direccion', 'create')
            ->notEmpty('direccion');
            
        $validator
            ->requirePresence('telefonos', 'create')
            ->notEmpty('telefonos');
            
        $validator
            ->requirePresence('tipo', 'create')
            ->notEmpty('tipo');

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
        $rules->add($rules->existsIn(['centro_id'], 'Centros'));
        return $rules;
    }
}
