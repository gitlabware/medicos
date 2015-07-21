<?php

namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;

/**
 * Consultorios Controller
 *
 * @property \App\Model\Table\ConsultoriosTable $Consultorios
 */
class ConsultoriosController extends AppController {

  public $layout = 'medicos';

  /**
   * Index method
   *
   * @return void
   */
  public function index($idMedico = NULL) {
    $medicos = TableRegistry::get('Medicos');
    $medico = $medicos->find()->where(['id' => $idMedico])->first();
    //debug($medico->toArray());exit;
    $consultorios = $this->Consultorios->find('all', ['contain' => ['Medicos']])->where(['Consultorios.medico_id' => $idMedico]);
    $this->set(compact('consultorios', 'medico', 'idMedico'));
  }

  /**
   * View method
   *
   * @param string|null $id Consultorio id.
   * @return void
   * @throws \Cake\Network\Exception\NotFoundException When record not found.
   */
  public function view($id = null) {
    $consultorio = $this->Consultorios->get($id, [
      'contain' => ['Medicos']
    ]);
    $this->set('consultorio', $consultorio);
    $this->set('_serialize', ['consultorio']);
  }

  /**
   * Add method
   *
   * @return void Redirects on successful add, renders view otherwise.
   */
  public function add($idMedico = null) {
    $consultorio = $this->Consultorios->newEntity();
    if ($this->request->is('post')) {
      $consultorio = $this->Consultorios->patchEntity($consultorio, $this->request->data);
      if ($this->Consultorios->save($consultorio)) {
        $this->Flash->msgbueno(__('The consultorio has been saved.'));
        return $this->redirect(['action' => 'index', $idMedico]);
      } else {
        $this->Flash->msgerror(__('The consultorio could not be saved. Please, try again.'));
      }
    }
    $medicos = TableRegistry::get('Medicos');
    $medico = $medicos->find()->where(['id' => $idMedico])->first();
    $this->set(compact('consultorio', 'medico', 'idMedico'));
    $this->set('_serialize', ['consultorio']);
  }

  /**
   * Edit method
   *
   * @param string|null $id Consultorio id.
   * @return void Redirects on successful edit, renders view otherwise.
   * @throws \Cake\Network\Exception\NotFoundException When record not found.
   */
  public function edit($id = null, $idMedico = null) {
    $consultorio = $this->Consultorios->get($id, [
      'contain' => []
    ]);
    if ($this->request->is(['patch', 'post', 'put'])) {
      $consultorio = $this->Consultorios->patchEntity($consultorio, $this->request->data);
      if ($this->Consultorios->save($consultorio)) {
        $this->Flash->msgbueno(__('The consultorio has been saved.'));
        return $this->redirect(['action' => 'index', $idMedico]);
      } else {
        $this->Flash->msgerror(__('The consultorio could not be saved. Please, try again.'));
      }
    }
    //debug($consultorio);exit;
    $medicos = TableRegistry::get('Medicos');
    $medico = $medicos->find()->where(['id' => $idMedico])->first();
    $this->set(compact('consultorio', 'medico', 'idMedico'));
    $this->set('_serialize', ['consultorio']);
  }

  /**
   * Delete method
   *
   * @param string|null $id Consultorio id.
   * @return void Redirects to index.
   * @throws \Cake\Network\Exception\NotFoundException When record not found.
   */
  public function delete($id = null, $idMedico = null) {
    $this->request->allowMethod(['post', 'delete']);
    $consultorio = $this->Consultorios->get($id);
    if ($this->Consultorios->delete($consultorio)) {
      $this->Flash->msgbueno(__('The consultorio has been deleted.'));
    } else {
      $this->Flash->msgerror(__('The consultorio could not be deleted. Please, try again.'));
    }
    return $this->redirect(['action' => 'index', $idMedico]);
  }

  public function ajax_m_consul_t($idConsultorio = null) {
    $this->layout = 'ajax';
    $consultorio = $this->Consultorios->get($idConsultorio);
    //debug($consultorio);exit;
    $this->set(compact('consultorio', 'idConsultorio'));
  }

  public function edit_cons($idConsultorio = null) {
    $consultorio = $this->Consultorios->get($idConsultorio, [
      'contain' => []
    ]);
    $idMedico = $this->get_medico()->id;
    if ($this->request->is(['patch', 'post', 'put'])) {
      
      $consultorio = $this->Consultorios->patchEntity($consultorio, $this->request->data);
      if ($this->Consultorios->save($consultorio)) {
        $this->Flash->msgbueno(__('The consultorio has been saved.'));
        return $this->redirect(['controller' => 'Medicos','action' => 'perfil']);
      } else {
        $this->Flash->msgerror(__('The consultorio could not be saved. Please, try again.'));
      }
    }
    //debug($consultorio);exit;
    $medicos = TableRegistry::get('Medicos');
    $medico = $medicos->find()->where(['id' => $idMedico])->first();
    //debug($consultorio);exit;
    $this->set(compact('consultorio', 'medico', 'idMedico'));
    $this->set('_serialize', ['consultorio']);
  }

  public function get_medico() {
    $medicos = TableRegistry::get('Medicos');
    $idUsuario = $this->request->session()->read('Auth.User.id');
    return $medicos->find()->contain(['Especialidades'])->where(['user_id' => $idUsuario])->first();
  }

  public function add_cons() {
    $idMedico = $this->get_medico()->id;
    $consultorio = $this->Consultorios->newEntity();
    if ($this->request->is('post')) {
      $consultorio = $this->Consultorios->patchEntity($consultorio, $this->request->data);
      if ($this->Consultorios->save($consultorio)) {
        $this->Flash->msgbueno(__('The consultorio has been saved.'));
        return $this->redirect(['controller' => 'Medicos','action' => 'perfil']);
      } else {
        $this->Flash->msgerror(__('The consultorio could not be saved. Please, try again.'));
      }
    }
    $medicos = TableRegistry::get('Medicos');
    $medico = $medicos->find()->where(['id' => $idMedico])->first();
    $this->set(compact('consultorio', 'medico', 'idMedico'));
    $this->set('_serialize', ['consultorio']);
  }
}
