<?php

namespace App\Controller;

use App\Controller\AppController;

/**
 * Farmacias Controller
 *
 * @property \App\Model\Table\FarmaciasTable $Farmacias
 */
class FarmaciasController extends AppController {

  public $layout = 'medicos';

  /**
   * Index method
   *
   * @return void
   */
  public function index() {
    $farmacias = $this->Farmacias->find('all')->contain(['Origens']);
    //debug($farmacias->toArray());exit;
    $this->set(compact('farmacias'));
  }

  /**
   * View method
   *
   * @param string|null $id Farmacia id.
   * @return void
   * @throws \Cake\Network\Exception\NotFoundException When record not found.
   */
  public function view($id = null) {
    $farmacia = $this->Farmacias->get($id, [
      'contain' => ['Farmacias']
    ]);
    $this->set('farmacia', $farmacia);
    $this->set('_serialize', ['farmacia']);
  }

  /**
   * Add method
   *
   * @return void Redirects on successful add, renders view otherwise.
   */
  public function add() {
    $farmacia = $this->Farmacias->newEntity();
    if ($this->request->is('post')) {
      $farmacia = $this->Farmacias->patchEntity($farmacia, $this->request->data);
      if ($this->Farmacias->save($farmacia)) {
        $this->Flash->msgbueno(__('The farmacia has been saved.'));
        return $this->redirect(['action' => 'index']);
      } else {
        $this->Flash->msgerror(__('The farmacia could not be saved. Please, try again.'));
      }
    }
    $farmacias = $this->Farmacias->find('list', ['keyField' => 'id', 'valueField' => 'nombre'])->where(['Farmacias.origenid IS' => NULL]);
    $this->set(compact('farmacia', 'farmacias'));
    $this->set('_serialize', ['farmacia']);
  }

  /**
   * Edit method
   *
   * @param string|null $id Farmacia id.
   * @return void Redirects on successful edit, renders view otherwise.
   * @throws \Cake\Network\Exception\NotFoundException When record not found.
   */
  public function edit($id = null) {
    $farmacia = $this->Farmacias->get($id, [
      'contain' => []
    ]);
    if ($this->request->is(['patch', 'post', 'put'])) {
      $farmacia = $this->Farmacias->patchEntity($farmacia, $this->request->data);
      if ($this->Farmacias->save($farmacia)) {
        $this->Flash->msgbueno(__('The farmacia has been saved.'));
        return $this->redirect(['action' => 'index']);
      } else {
        $this->Flash->msgerror(__('The farmacia could not be saved. Please, try again.'));
      }
    }
    $farmacias = $this->Farmacias->find('list', ['keyField' => 'id', 'valueField' => 'nombre'])->where(['Farmacias.origenid IS' => NULL]);
    $this->set(compact('farmacia', 'farmacias'));
    $this->set('_serialize', ['farmacia']);
  }

  /**
   * Delete method
   *
   * @param string|null $id Farmacia id.
   * @return void Redirects to index.
   * @throws \Cake\Network\Exception\NotFoundException When record not found.
   */
  public function delete($id = null) {
    $this->request->allowMethod(['post', 'delete']);
    $farmacia = $this->Farmacias->get($id);
    if ($this->Farmacias->delete($farmacia)) {
      $this->Flash->msgbueno(__('The farmacia has been deleted.'));
    } else {
      $this->Flash->msgerror(__('The farmacia could not be deleted. Please, try again.'));
    }
    return $this->redirect(['action' => 'index']);
  }

}
