<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Medicos Controller
 *
 * @property \App\Model\Table\MedicosTable $Medicos
 */
class MedicosController extends AppController
{
  public $layout = 'medicos';
    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('medicos', $this->paginate($this->Medicos));
        $this->set('_serialize', ['medicos']);
    }

    /**
     * View method
     *
     * @param string|null $id Medico id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
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
    public function add()
    {
        $medico = $this->Medicos->newEntity();
        if ($this->request->is('post')) {
            $medico = $this->Medicos->patchEntity($medico, $this->request->data);
            if ($this->Medicos->save($medico)) {
                $this->Flash->success(__('The medico has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The medico could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('medico'));
        $this->set('_serialize', ['medico']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Medico id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $medico = $this->Medicos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $medico = $this->Medicos->patchEntity($medico, $this->request->data);
            if ($this->Medicos->save($medico)) {
                $this->Flash->success(__('The medico has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The medico could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('medico'));
        $this->set('_serialize', ['medico']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Medico id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $medico = $this->Medicos->get($id);
        if ($this->Medicos->delete($medico)) {
            $this->Flash->success(__('The medico has been deleted.'));
        } else {
            $this->Flash->error(__('The medico could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
    
    public function perfil(){
      
    }
}
