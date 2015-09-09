<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Mensajes Controller
 *
 * @property \App\Model\Table\MensajesTable $Mensajes
 */
class MensajesController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users', 'Consultas']
        ];
        $this->set('mensajes', $this->paginate($this->Mensajes));
        $this->set('_serialize', ['mensajes']);
    }

    /**
     * View method
     *
     * @param string|null $id Mensaje id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $mensaje = $this->Mensajes->get($id, [
            'contain' => ['Users', 'Consultas']
        ]);
        $this->set('mensaje', $mensaje);
        $this->set('_serialize', ['mensaje']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $mensaje = $this->Mensajes->newEntity();
        if ($this->request->is('post')) {
            $mensaje = $this->Mensajes->patchEntity($mensaje, $this->request->data);
            if ($this->Mensajes->save($mensaje)) {
                $this->Flash->success(__('The mensaje has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The mensaje could not be saved. Please, try again.'));
            }
        }
        $users = $this->Mensajes->Users->find('list', ['limit' => 200]);
        $consultas = $this->Mensajes->Consultas->find('list', ['limit' => 200]);
        $this->set(compact('mensaje', 'users', 'consultas'));
        $this->set('_serialize', ['mensaje']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Mensaje id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $mensaje = $this->Mensajes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $mensaje = $this->Mensajes->patchEntity($mensaje, $this->request->data);
            if ($this->Mensajes->save($mensaje)) {
                $this->Flash->success(__('The mensaje has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The mensaje could not be saved. Please, try again.'));
            }
        }
        $users = $this->Mensajes->Users->find('list', ['limit' => 200]);
        $consultas = $this->Mensajes->Consultas->find('list', ['limit' => 200]);
        $this->set(compact('mensaje', 'users', 'consultas'));
        $this->set('_serialize', ['mensaje']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Mensaje id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $mensaje = $this->Mensajes->get($id);
        if ($this->Mensajes->delete($mensaje)) {
            $this->Flash->success(__('The mensaje has been deleted.'));
        } else {
            $this->Flash->error(__('The mensaje could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
