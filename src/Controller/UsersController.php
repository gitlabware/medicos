<?php

namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;
use Cake\ORM\TableRegistry;

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
    $this->Auth->allow(['registro', 'prueba', 'buscador']);
    
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
        $this->Flash->msgbueno(__('Se registro correctamente!!'));
        return $this->redirect(['action' => 'index']);
      } else {
        $this->Flash->msgerror(__('No se pudo registrar intente nuevamente'));
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
        $this->Flash->msgbueno(__('Se registro correctamente!!'));
        return $this->redirect(['action' => 'index']);
      } else {
        $this->Flash->msgerror(__('No se pudo registrar intente nuevamente'));
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
      $this->Flash->msgbueno(__('El usuario se elimino correctamente!!'));
    } else {
      $this->Flash->msgerror(__('El usuario podira no haberse eliminado!!!'));
    }
    return $this->redirect(['action' => 'index']);
  }

  public function login() {
    $this->layout = 'login';
    if ($this->request->is('post')) {
      $user = $this->Auth->identify();
      if ($user) {
        $this->Auth->setUser($user);
        switch ($user['role']) {
          case 'Administrador':
            return $this->redirect(['action' => 'index']);
            break;
          case 'Medico':
            return $this->redirect(['controller' => 'Medicos', 'action' => 'perfil']);
            break;
        }
        return $this->redirect(['action' => 'index']);
      }
      $this->Flash->msgerror(__('Usuario o contrasena invalidos, intente nuevamente!'));
    }
  }

  public function logout() {
    return $this->redirect($this->Auth->logout());
  }

  public function registro() {
    $this->layout = 'login';
    $medicos = TableRegistry::get('Medicos');
    $medico = $medicos->newEntity();
    if ($this->request->is('post')) {
      $user = $this->Users->newEntity();
      $dato_u['username'] = $this->request->data['ci'];
      $dato_u['password'] = $this->request->data['password'];
      $dato_u['role'] = 'Medico';
      $user = $this->Users->patchEntity($user, $dato_u);

      //debug($this->request->data);
      if (empty($user->errors())) {
        $resultado = $this->Users->save($user);
        if (!empty($resultado) && $resultado != FALSE) {
          $this->request->data['user_id'] = $resultado->id;
          $medico = $medicos->patchEntity($medico, $this->request->data);
          //debug($medico);exit;
          if (empty($medico->errors())) {
            if ($medicos->save($medico)) {
              $this->request->data = $dato_u;
              $user = $this->Auth->identify();
              if ($user) {
                $this->Auth->setUser($user);
                $this->Flash->msgbueno(__('Se ha registrado correctamente!!'));
                return $this->redirect(['controller' => 'Medicos', 'action' => 'perfil']);
              } else {
                $this->Flash->msgerror(__('No se pudo Iniciar sesion!!!'));
              }
            } else {
              $this->Users->delete($user);
              $this->Flash->msgerror(__('No se pudo registrarse intente nuevamente!!'));
            }
          } else {
            $this->Flash->msgerror(current(current($medico->errors())));
          }
        } else {
          $this->Flash->msgerror(__('No se pudo registrarse intente nuevamente!!'));
        }
      } else {
        $this->Flash->msgerror(current(current($user->errors())));
      }
    }

    $especialidades = TableRegistry::get('Especialidades');
    $listaesp = $especialidades->find('list', ['keyField' => 'id', 'valueField' => 'nombre']);
    $this->set(compact('listaesp', 'medico'));
  }

  public function buscador() {
    $this->layout = 'login';
    if (!empty($this->request->data)) {
      /*debug($this->request->data);
      exit;*/
    }
  }

}
