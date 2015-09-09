<?php

namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of EspecialidadesController
 *
 * @author gary
 */
class EspecialidadesController extends AppController {

    //put your code here

    public $layout = 'medicos';

    public function index() {
        $data = $this->DataTables->find('Especialidades', [
            'contain' => []
        ]);

        $this->set([
            'data' => $data,
            '_serialize' => array_merge($this->viewVars['_serialize'], ['data'])
        ]);

        /* $this->set('users', $this->paginate($this->Especialidad));
          $this->set('_serialize', ['users']); */
    }

    public function add() {
        $especialidad = $this->Especialidades->newEntity();
        if ($this->request->is('post')) {
            $especialidad = $this->Especialidades->patchEntity($especialidad, $this->request->data);
            if (!empty($especialidad->errors())) {
                $this->Flash->msgerror(current($especialidad->errors())['_empty']);
            } else {
                if ($this->Especialidades->save($especialidad)) {
                    $this->Flash->msgbueno(__('Se ha registrado correctamente!!'));
                    return $this->redirect(['action' => 'index']);
                } else {
                    $this->Flash->msgerror(__('No se ha podido registrar intente nuevamente!!'));
                }
            }
        }
        $this->set(compact('especialidad'));
        $this->set('_serialize', ['especialidad']);
    }

    public function edit($id = null) {
        $especialidad = $this->Especialidades->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {

            $especialidad = $this->Especialidades->patchEntity($especialidad, $this->request->data);
            if ($this->Especialidades->save($especialidad)) {
                $this->Flash->msgbueno(__('Se registro correctamente!!'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->msgerror(__('No se pudo registrar intente nuevamente'));
            }
        }
        $this->set(compact('especialidad'));
        $this->set('_serialize', ['especialidad']);
    }

    public function delete($id = null) {
        $this->request->allowMethod(['post', 'delete']);
        $especialidad = $this->Especialidades->get($id);
        if ($this->Especialidades->delete($especialidad)) {
            $this->Flash->msgbueno(__('Se elimino correctamente!!'));
        } else {
            $this->Flash->msgerror(__('No se ha podido eliminar intente nuevamente'));
        }
        return $this->redirect(['action' => 'index']);
    }

}
