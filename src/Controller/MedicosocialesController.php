<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Medicosociales Controller
 *
 * @property \App\Model\Table\MedicosocialesTable $Medicosociales
 */
class MedicosocialesController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Sociales', 'Medicos']
        ];
        $this->set('medicosociales', $this->paginate($this->Medicosociales));
        $this->set('_serialize', ['medicosociales']);
    }

    /**
     * View method
     *
     * @param string|null $id Medicosociale id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $medicosociale = $this->Medicosociales->get($id, [
            'contain' => ['Sociales', 'Medicos']
        ]);
        $this->set('medicosociale', $medicosociale);
        $this->set('_serialize', ['medicosociale']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $medicosociale = $this->Medicosociales->newEntity();
        if ($this->request->is('post')) {
            $medicosociale = $this->Medicosociales->patchEntity($medicosociale, $this->request->data);
            if ($this->Medicosociales->save($medicosociale)) {
                $this->Flash->success(__('The medicosociale has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The medicosociale could not be saved. Please, try again.'));
            }
        }
        $sociales = $this->Medicosociales->Sociales->find('list', ['limit' => 200]);
        $medicos = $this->Medicosociales->Medicos->find('list', ['limit' => 200]);
        $this->set(compact('medicosociale', 'sociales', 'medicos'));
        $this->set('_serialize', ['medicosociale']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Medicosociale id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $medicosociale = $this->Medicosociales->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $medicosociale = $this->Medicosociales->patchEntity($medicosociale, $this->request->data);
            if ($this->Medicosociales->save($medicosociale)) {
                $this->Flash->success(__('The medicosociale has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The medicosociale could not be saved. Please, try again.'));
            }
        }
        $sociales = $this->Medicosociales->Sociales->find('list', ['limit' => 200]);
        $medicos = $this->Medicosociales->Medicos->find('list', ['limit' => 200]);
        $this->set(compact('medicosociale', 'sociales', 'medicos'));
        $this->set('_serialize', ['medicosociale']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Medicosociale id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $medicosociale = $this->Medicosociales->get($id);
        if ($this->Medicosociales->delete($medicosociale)) {
            $this->Flash->success(__('The medicosociale has been deleted.'));
        } else {
            $this->Flash->error(__('The medicosociale could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
