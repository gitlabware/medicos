<?php

namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;

/**
 * Medicos Controller
 *
 * @property \App\Model\Table\MedicosTable $Medicos
 */
class MedicosController extends AppController {

  public $layout = 'medicos';

  /**
   * Index method
   *
   * @return void
   */
  public function index() {
    $medicos = $this->Medicos->find('all')->contain(['Especialidades']);
    //debug($medicos->toArray());exit;
    $this->set(compact('medicos'));
  }

  /**
   * View method
   *
   * @param string|null $id Medico id.
   * @return void
   * @throws \Cake\Network\Exception\NotFoundException When record not found.
   */
  public function view($id = null) {
    $medico = $this->Medicos->get($id, [
      'contain' => []
    ]);
    $this->set('medico', $medico);
    $this->set('_serialize', ['medico']);
  }

  /**
   * Add method
   *
   * @return void Redirects on successful add, renders view otherwise.
   */
  public function add() {
    $medico = $this->Medicos->newEntity();
    if ($this->request->is('post')) {
      $users = TableRegistry::get('Users');
      $user = $users->newEntity();
      $dato_u['username'] = $this->request->data['ci'];
      $dato_u['password'] = $this->request->data['ci'];
      $dato_u['role'] = 'Medico';
      $user = $users->patchEntity($user, $dato_u);
      $resultado = $users->save($user);
      $this->request->data['user_id'] = $resultado->id;
      $medico = $this->Medicos->patchEntity($medico, $this->request->data);
      if ($this->Medicos->save($medico)) {
        $this->Flash->msgbueno(__('The medico has been saved.'));
        return $this->redirect(['action' => 'index']);
      } else {
        $this->Flash->msgerror(__('The medico could not be saved. Please, try again.'));
      }
    }
    $especialidades = TableRegistry::get('Especialidades');
    $listaesp = $especialidades->find('list',['keyField' => 'id', 'valueField' => 'nombre']);
    //debug($listaesp->toArray());EXIT;
    $this->set(compact('medico','listaesp'));
    $this->set('_serialize', ['medico']);
  }

  /**
   * Edit method
   *
   * @param string|null $id Medico id.
   * @return void Redirects on successful edit, renders view otherwise.
   * @throws \Cake\Network\Exception\NotFoundException When record not found.
   */
  public function edit($id = null) {
    $medico = $this->Medicos->get($id, [
      'contain' => []
    ]);
    if ($this->request->is(['patch', 'post', 'put'])) {
      $medico = $this->Medicos->patchEntity($medico, $this->request->data);
      if ($this->Medicos->save($medico)) {
        $this->Flash->msgbueno(__('The medico has been saved.'));
        return $this->redirect(['action' => 'index']);
      } else {
        $this->Flash->msgerror(__('The medico could not be saved. Please, try again.'));
      }
    }
    $especialidades = TableRegistry::get('Especialidades');
    $listaesp = $especialidades->find('list',['keyField' => 'id', 'valueField' => 'nombre']);
    $this->set(compact('medico','listaesp'));
    $this->set('_serialize', ['medico']);
  }

  /**
   * Delete method
   *
   * @param string|null $id Medico id.
   * @return void Redirects to index.
   * @throws \Cake\Network\Exception\NotFoundException When record not found.
   */
  public function delete($id = null) {
    $this->request->allowMethod(['post', 'delete']);
    $medico = $this->Medicos->get($id);
    if ($this->Medicos->delete($medico)) {
      $this->Flash->msgbueno(__('The medico has been deleted.'));
    } else {
      $this->Flash->msgerror(__('The medico could not be deleted. Please, try again.'));
    }
    return $this->redirect(['action' => 'index']);
  }

  public function perfil() {
    $medico = $this->get_medico();
    /*debug($medico);
    exit;*/
    $this->set(compact('medico'));
  }
  
  public function get_medico(){
    $idUsuario = $this->request->session()->read('Auth.User.id');
    return $this->Medicos->find()->contain(['Especialidades'])->where(['user_id' => $idUsuario])->first();
  }

}
