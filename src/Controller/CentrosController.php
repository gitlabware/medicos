<?php

namespace App\Controller;

use App\Controller\AppController;

/**
 * Centros Controller
 *
 * @property \App\Model\Table\CentrosTable $Centros
 */
class CentrosController extends AppController {

  public $layout = 'medicos';
  public $tipos = ['Hospital' => 'Hospital'];

  /**
   * Index method
   *
   * @return void
   */
  public function index() {

    $this->set('centros', $this->paginate($this->Centros));
    $this->set('_serialize', ['centros']);
  }

  /**
   * View method
   *
   * @param string|null $id Centro id.
   * @return void
   * @throws \Cake\Network\Exception\NotFoundException When record not found.
   */
  public function view($id = null) {
    $centro = $this->Centros->get($id, [
      'contain' => ['Servicios', 'Centros']
    ]);
    $this->set('centro', $centro);
    $this->set('_serialize', ['centro']);
  }

  /**
   * Add method
   *
   * @return void Redirects on successful add, renders view otherwise.
   */
  public function add() {
    $centro = $this->Centros->newEntity();
    if ($this->request->is('post')) {
      $centro = $this->Centros->patchEntity($centro, $this->request->data);
      if ($this->Centros->save($centro)) {
        $this->Flash->success(__('The centro has been saved.'));
        return $this->redirect(['action' => 'index']);
      } else {
        $this->Flash->error(__('The centro could not be saved. Please, try again.'));
      }
    }
    $centros = $this->Centros->find('list', ['limit' => 200, 'keyField' => 'id', 'valueField' => 'nombre'])->where(['Centros.centro_id IS' => NULL]);
    $tipos = $this->tipos;
    $this->set(compact('centro', 'tipos', 'centros'));
    $this->set('_serialize', ['centro']);
  }

  /**
   * Edit method
   *
   * @param string|null $id Centro id.
   * @return void Redirects on successful edit, renders view otherwise.
   * @throws \Cake\Network\Exception\NotFoundException When record not found.
   */
  public function edit($id = null) {
    $centro = $this->Centros->get($id, [
      'contain' => []
    ]);
    if ($this->request->is(['patch', 'post', 'put'])) {
      $centro = $this->Centros->patchEntity($centro, $this->request->data);
      if ($this->Centros->save($centro)) {
        $this->Flash->success(__('The centro has been saved.'));
        return $this->redirect(['action' => 'index']);
      } else {
        $this->Flash->error(__('The centro could not be saved. Please, try again.'));
      }
    }
    $centros = $this->Centros->find('list', ['limit' => 200, 'keyField' => 'id', 'valueField' => 'nombre'])->where(['Centros.centro_id IS' => NULL]);
    $tipos = $this->tipos;
    $this->set(compact('centro', 'centros', 'tipos'));
    $this->set('_serialize', ['centro']);
  }

  /**
   * Delete method
   *
   * @param string|null $id Centro id.
   * @return void Redirects to index.
   * @throws \Cake\Network\Exception\NotFoundException When record not found.
   */
  public function delete($id = null) {
    $this->request->allowMethod(['post', 'delete']);
    $centro = $this->Centros->get($id);
    if ($this->Centros->delete($centro)) {
      $this->Flash->success(__('The centro has been deleted.'));
    } else {
      $this->Flash->error(__('The centro could not be deleted. Please, try again.'));
    }
    return $this->redirect(['action' => 'index']);
  }

}
