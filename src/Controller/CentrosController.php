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
    $centros = $this->Centros->find('all')->contain(['Origens']);
    /* debug($centros->toArray());
      exit; */
    $this->set(compact('centros'));
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
      if (!empty($centro->errors())) {
        $this->Flash->msgerror(current($centro->errors())['_empty']);
      } else {
        if ($this->Centros->save($centro)) {
          $this->Flash->msgbueno(__('Se ha registrado correctamente!!'));
          return $this->redirect(['action' => 'index']);
        } else {
          $this->Flash->msgerror(__('No se ha podido registrar intente nuevamente!!'));
        }
      }
    }
    $centros = $this->Centros->find('list', ['limit' => 200, 'keyField' => 'id', 'valueField' => 'nombre'])->where(['Centros.origenid IS' => NULL]);
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
        $this->Flash->msgbueno(__('Se registrado correctamente!!'));
        return $this->redirect(['action' => 'index']);
      } else {
        $this->Flash->msgerror(__('No se ha podido registrar intente nuevamente!!'));
      }
    }
    $centros = $this->Centros->find('list', ['limit' => 200, 'keyField' => 'id', 'valueField' => 'nombre'])->where(['Centros.origenid IS' => NULL]);
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
      $this->Flash->msgbueno(__('Se elimino correctamente!!'));
    } else {
      $this->Flash->msgerror(__('No se ha podido eliminar intente nuevamente'));
    }
    return $this->redirect(['action' => 'index']);
  }

  public function ajax_servicios() {
    $this->layout = 'ajax';
    $centro = $this->Centros->newEntity();
    $this->loadModel('Sevicios');
    $lservicios = $this->Sevicios->find('list', ['keyField' => 'id', 'valueField' => 'nombre']);
    debug($lservicios);
    exit;
    $this->set(compact('centro', 'lservicios'));
  }
  public function buscador() {
    $centros = $this->Centros->find()->toArray();
    //debug($medicos);exit;
    $this->set(compact('centros'));
  }
  public function ajax_b_centros() {
    $this->layout = 'ajax';
    $dato = $this->request->data['dato'];
    $centros = $this->Centros->find()      
      ->where([
        'Centros.nombre LIKE' => "%".$dato."%"
      ]);
    //  ->toArray();
    $this->set(compact('centros'));
  }  

}
