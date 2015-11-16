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

      debug($this->request->data);
      exit;
    }
  }

  public function mipaginador() {
    //$condiciones1 = [];
    $condiciones2 = [];
    $condiciones3 = [];
    $condiciones4 = [];
    //debug($this->request->data);exit;
    if (!empty($this->request->data['busqueda'])) {
      $frase = $this->request->data['busqueda'];
      //debug($this->request->data['busqueda']);exit;
      //$condiciones1['Users.username LIKE'] = "%$frase%";
      $condiciones2['Medicos.nombre LIKE'] = "%$frase%";
      $condiciones3['Farmacias.nombre LIKE'] = "%$frase%";
      $condiciones4['Centros.nombre LIKE'] = "%$frase%";
    }
    $distancia = [];
    $distancia[""] = '';
    //debug($distancia);exit;
    if (isset($this->request->data['lat']) && isset($this->request->data['lgt']) && $this->request->data['lat'] != '' && $this->request->data['lgt'] != '') {
      /* debug($this->request->data);
        exit; */
      $R = 6378137;
      $p1_lat = $this->request->data['lat'];
      $p1_long = $this->request->data['lgt'];
      $dLat = "RADIANS($p1_lat - lat)";
      $dLong = "RADIANS($p1_long - lng)";
      $a = "(SIN($dLat/2) * SIN($dLat/2) + COS(RADIANS($p1_lat)) * COS(RADIANS(lat)) * SIN($dLong/2) * SIN($dLong/2))";
      $c = "(2 * ATAN2(SQRT($a),SQRT(1-$a)))";
      $d = "$R * $c";
      $distancia["$d"] = 'literal';
    }
    //$usuarios = $this->Users->find()->select(['mifrase' => 'Users.username','t'])->where($condiciones1);
    $medicos = TableRegistry::get('Medicos');
    $farmacias = TableRegistry::get('Farmacias');
    $centros = TableRegistry::get('Centros');
    $consultorios = TableRegistry::get('Consultorios');
    $l_medicos = $medicos->find();
    $l_farmacias = $farmacias->find();
    $l_centros = $centros->find();
    $l_consultorios = $consultorios->find();

    $l_consultorios = $l_consultorios->contain(['Medicos', 'Medicos' => ['Especialidades']])->select([
        'id' => 'Medicos.id',
        'nombre' => 'Medicos.nombre',
        'especialidad' => 'Especialidades.nombre',
        'sexo' => 'Medicos.sexo',
        'imagen' => 'Medicos.url',
        'mail' => 'Medicos.mail',
        'direccion' => 'Consultorios.direccion',
        'Medicos.telefonos',
        'tipo' => $l_medicos->func()->concat(['Medicos']),
        'distancia' => $l_farmacias->func()->concat([''])
      ])->where($condiciones2);
    //debug($l_consultorios->toArray());exit;
    $l_medicos = $l_medicos->contain(['Especialidades','Consultorios' => ['Medicos']])->select([
        'id' => 'Medicos.id',
        'nombre' => 'Medicos.nombre',
        'especialidad' => 'Especialidades.nombre',
        'sexo' => 'Medicos.sexo',
        'imagen' => 'Medicos.url',
        'mail' => 'Medicos.mail',
        'direccion' => $l_medicos->func()->concat(['']),
        'Medicos.telefonos',
        'tipo' => $l_medicos->func()->concat(['Medicos']),
        'distancia' => $l_farmacias->func()->concat([''])
      ])->where($condiciones2);
   //debug($l_medicos->toArray());exit;
    $l_farmacias = $l_farmacias->select([
        'id',
        'nombre' => 'Farmacias.nombre',
        'especialidad' => $l_farmacias->func()->concat(['']),
        'sexo' => $l_farmacias->func()->concat(['']),
        'imagen' => $l_farmacias->func()->concat(['']),
        'mail' => $l_farmacias->func()->concat(['']),
        'Farmacias.direccion',
        'Farmacias.telefonos',
        'tipo' => $l_farmacias->func()->concat(['Farmacias']),
        'distancia' => $l_farmacias->func()->concat($distancia)
      ])->where($condiciones3);
    $l_centros = $l_centros->select([
        'id',
        'nombre' => 'Centros.nombre',
        'especialidad' => $l_centros->func()->concat(['']),
        'sexo' => $l_centros->func()->concat(['']),
        'imagen' => $l_centros->func()->concat(['']),
        'mail' => $l_centros->func()->concat(['']),
        'Centros.direccion',
        'Centros.telefonos',
        'tipo' => $l_centros->func()->concat(['Centros']),
        'distancia' => $l_farmacias->func()->concat([''])
      ])->where($condiciones4);

    $this->paginate = [
      'limit' => 3
    ];
    $l_medicos->unionAll($l_farmacias);
    $l_medicos->unionAll($l_centros);
    $l_medicos->unionAll($l_consultorios);
    //$l_medicos = $l_medicos->find();
    //debug($l_medicos->toArray());exit;
    $this->set('l_medicos', $this->paginate($l_medicos));
  }

}
