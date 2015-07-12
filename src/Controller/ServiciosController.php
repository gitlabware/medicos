<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Servicios Controller
 *
 * @property \App\Model\Table\ServiciosTable $Servicios
 */
class ServiciosController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('servicios', $this->paginate($this->Servicios));
        $this->set('_serialize', ['servicios']);
    }

    /**
     * View method
     *
     * @param string|null $id Servicio id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $servicio = $this->Servicios->get($id, [
            'contain' => ['Centros']
        ]);
        $this->set('servicio', $servicio);
        $this->set('_serialize', ['servicio']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $servicio = $this->Servicios->newEntity();
        if ($this->request->is('post')) {
            $servicio = $this->Servicios->patchEntity($servicio, $this->request->data);
            if ($this->Servicios->save($servicio)) {
                $this->Flash->success(__('The servicio has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The servicio could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('servicio'));
        $this->set('_serialize', ['servicio']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Servicio id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $servicio = $this->Servicios->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $servicio = $this->Servicios->patchEntity($servicio, $this->request->data);
            if ($this->Servicios->save($servicio)) {
                $this->Flash->success(__('The servicio has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The servicio could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('servicio'));
        $this->set('_serialize', ['servicio']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Servicio id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $servicio = $this->Servicios->get($id);
        if ($this->Servicios->delete($servicio)) {
            $this->Flash->success(__('The servicio has been deleted.'));
        } else {
            $this->Flash->error(__('The servicio could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
