<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Consultas Controller
 *
 * @property \App\Model\Table\ConsultasTable $Consultas
 */
class ConsultasController extends AppController
{

    public function add()
    {
      
      debug($this->request->data);exit;
        $consulta = $this->Consultas->newEntity();
        if ($this->request->is('post')) {
            $consulta = $this->Consultas->patchEntity($consulta, $this->request->data);
            if ($this->Consultas->save($consulta)) {
                //$this->Flash->success(__('The consulta has been saved.'));
                //return $this->redirect(['action' => 'index']);
            } else {
                //$this->Flash->error(__('The consulta could not be saved. Please, try again.'));
            }
        }
        //$this->set(compact('consulta'));
        //$this->set('_serialize', ['consulta']);
    }


}
