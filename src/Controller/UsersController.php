<?php

namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;

/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 */
class UsersController extends AppController {

  /**
   * Index method
   *
   * @return void
   */
  public $layout = 'medicos';

  public function beforeFilter(Event $event) {
    $this->Auth->allow(['registro']);
  }

  public function index() {
    $data = $this->DataTables->find('Users', [
      'contain' => []
    ]);

    $this->set([
      'data' => $data,
      '_serialize' => array_merge($this->viewVars['_serialize'], ['data'])
    ]);

    /* $this->set('users', $this->paginate($this->Users));
      $this->set('_serialize', ['users']); */
  }

  /**
   * View method
   *
   * @param string|null $id User id.
   * @return void
   * @throws \Cake\Network\Exception\NotFoundException When record not found.
   */
  public function view($id = null) {
    $user = $this->Users->get($id, [
      'contain' => []
    ]);
    $this->set('user', $user);
    $this->set('_serialize', ['user']);
  }

  /**
   * Add method
   *
   * @return void Redirects on successful add, renders view otherwise.
   */
  public function add() {
    $user = $this->Users->newEntity();
    if ($this->request->is('post')) {
      $user = $this->Users->patchEntity($user, $this->request->data);
      if ($this->Users->save($user)) {
        $this->Flash->msgbueno(__('The user has been saved.'));
        return $this->redirect(['action' => 'index']);
      } else {
        $this->Flash->msgerror(__('The user could not be saved. Please, try again.'));
      }
    }
    $this->set(compact('user'));
    $this->set('_serialize', ['user']);
  }

  /**
   * Edit method
   *
   * @param string|null $id User id.
   * @return void Redirects on successful edit, renders view otherwise.
   * @throws \Cake\Network\Exception\NotFoundException When record not found.
   */
  public function edit($id = null) {
    $user = $this->Users->get($id, [
      'contain' => []
    ]);
    if ($this->request->is(['patch', 'post', 'put'])) {
      if (!empty($this->request->data['password2'])) {
        $this->request->data['password'] = $this->request->data['password2'];
      }
      $user = $this->Users->patchEntity($user, $this->request->data);
      if ($this->Users->save($user)) {
        $this->Flash->msgbueno(__('The user has been saved.'));
        return $this->redirect(['action' => 'index']);
      } else {
        $this->Flash->msgerror(__('The user could not be saved. Please, try again.'));
      }
    }
    $this->set(compact('user'));
    $this->set('_serialize', ['user']);
  }

  /**
   * Delete method
   *
   * @param string|null $id User id.
   * @return void Redirects to index.
   * @throws \Cake\Network\Exception\NotFoundException When record not found.
   */
  public function delete($id = null) {
    $this->request->allowMethod(['post', 'delete']);
    $user = $this->Users->get($id);
    if ($this->Users->delete($user)) {
      $this->Flash->msgbueno(__('The user has been deleted.'));
    } else {
      $this->Flash->msgerror(__('The user could not be deleted. Please, try again.'));
    }
    return $this->redirect(['action' => 'index']);
  }

  public function login() {
    $this->layout = 'login';
    if ($this->request->is('post')) {
      $user = $this->Auth->identify();
      if ($user) {
        $this->Auth->setUser($user);
        return $this->redirect(['action' => 'index']);
      }
      $this->Flash->msgerror(__('Usuario o contrasena invalidos, intente nuevamente!'));
    }
  }

  public function logout() {
    return $this->redirect($this->Auth->logout());
  }

  public function registro() {
    $this->layout = 'registro';
  }

}
