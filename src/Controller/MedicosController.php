<?php

namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;

/**
 * Medicos Controller
 *
 * @property \App\Model\Table\MedicosTable $Medicos
 */
class MedicosController extends AppController {

  public $layout = 'medicos';

  /**
   * Index method
   *
   * @return void
   */
  public function index() {
    $medicos = $this->Medicos->find('all')->contain(['Especialidades']);
    //debug($medicos->toArray());exit;
    $this->set(compact('medicos'));
  }

  /**
   * View method
   *
   * @param string|null $id Medico id.
   * @return void
   * @throws \Cake\Network\Exception\NotFoundException When record not found.
   */
  public function view($id = null) {
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
  public function add() {
    $medico = $this->Medicos->newEntity();
    if ($this->request->is('post')) {
      /*debug($this->request->data);
        exit; */
      $users = TableRegistry::get('Users');
      $user = $users->newEntity();
      $dato_u['username'] = $this->request->data['Medico']['ci'];
      $dato_u['password'] = $this->request->data['Medico']['ci'];
      $dato_u['role'] = 'Medico';
      $user = $users->patchEntity($user, $dato_u);
      if (empty($user->errors())) {
        $resultado = $users->save($user);
        $this->request->data['Medico']['user_id'] = $resultado->id;
        $medico = $this->Medicos->patchEntity($medico, $this->request->data['Medico']);
        if (empty($medico->errors())) {
          $res_medico = $this->Medicos->save($medico);
          if ($this->request->data['Consultorio']['confirmacion'] == 1) {
            $this->request->data['Consultorio']['medico_id'] = $res_medico->id;
            $consultorios = TableRegistry::get('Consultorios');
            $consultorio = $consultorios->newEntity();
            $consultorio = $consultorios->patchEntity($consultorio, $this->request->data['Consultorio']);
            if (empty($consultorio->errors())) {
              $consultorios->save($consultorio);
              $this->Flash->msgbueno(__('El medico ha sido registrado correctamente!!'));
              return $this->redirect(['action' => 'index']);
            } else {
              $consultorio = $consultorios->get($res_medico->id);
              $consultorios->delete($consultorio);
              $this->Flash->msgerror(current(current($consultorio->errors())));
            }
          } else {
            $this->Flash->msgbueno(__('El medico ha sido registrado correctamente!!'));
            return $this->redirect(['action' => 'index']);
          }
        } else {
          $user = $users->get($resultado->id);
          $users->delete($user);
          $this->Flash->msgerror(current(current($medico->errors())));
        }
      } else {
        $this->Flash->msgerror(current(current($user->errors())));
      }
    }
    $especialidades = TableRegistry::get('Especialidades');
    $listaesp = $especialidades->find('list', ['keyField' => 'id', 'valueField' => 'nombre']);
    //debug($listaesp->toArray());EXIT;
    $this->set(compact('medico', 'listaesp'));
    $this->set('_serialize', ['medico']);
  }

  /**
   * Edit method
   *
   * @param string|null $id Medico id.
   * @return void Redirects on successful edit, renders view otherwise.
   * @throws \Cake\Network\Exception\NotFoundException When record not found.
   */
  public function edit($id = null) {
    $medico = $this->Medicos->get($id, [
      'contain' => []
    ]);
    if ($this->request->is(['patch', 'post', 'put'])) {
      $medico = $this->Medicos->patchEntity($medico, $this->request->data);
      if (!empty($medico->errors())) {
        $this->Flash->msgerror(current(current($medico->errors())));
      } else {
        if ($this->Medicos->save($medico)) {
          $this->Flash->msgbueno(__('The medico has been saved.'));
          return $this->redirect(['action' => 'index']);
        } else {
          $this->Flash->msgerror(__('The medico could not be saved. Please, try again.'));
        }
      }
    }
    $especialidades = TableRegistry::get('Especialidades');
    $listaesp = $especialidades->find('list', ['keyField' => 'id', 'valueField' => 'nombre']);
    $this->set(compact('medico', 'listaesp'));
    $this->set('_serialize', ['medico']);
  }

  /**
   * Delete method
   *
   * @param string|null $id Medico id.
   * @return void Redirects to index.
   * @throws \Cake\Network\Exception\NotFoundException When record not found.
   */
  public function delete($id = null) {
    $this->request->allowMethod(['post', 'delete']);
    $medico = $this->Medicos->get($id);
    if ($this->Medicos->delete($medico)) {
      $this->Flash->msgbueno(__('The medico has been deleted.'));
    } else {
      $this->Flash->msgerror(__('The medico could not be deleted. Please, try again.'));
    }
    return $this->redirect(['action' => 'index']);
  }

  public function perfil() {
    $medico = $this->get_medico();
    /* debug($medico);
      exit; */
    $sociales = TableRegistry::get('Sociales');
    $lsociales = $sociales->find('all');
    $consultorios = TableRegistry::get('Consultorios');
    $lconsultorios = $consultorios->find()->select(['id','nombre'])->where(['medico_id' => $medico->id]);
    //debug($lconsultorios->toArray());exit;
    $this->set(compact('medico', 'lsociales','lconsultorios'));
  }

  public function get_medico() {
    $idUsuario = $this->request->session()->read('Auth.User.id');
    return $this->Medicos->find()->contain(['Especialidades'])->where(['user_id' => $idUsuario])->first();
  }

  public function editar_perfil() {
    $medico = $this->get_medico();
    $this->set(compact('medico'));
  }

  public function ajax_edit1() {
    $this->layout = 'ajax';
    $medico = $this->Medicos->find()->where(['Medicos.user_id' => $this->request->session()->read('Auth.User.id')])->first();
    if ($this->request->is(['patch', 'post', 'put'])) {
      $medico = $this->Medicos->patchEntity($medico, $this->request->data);
      if (!empty($medico->errors())) {
        $this->Flash->msgerror(current(current($medico->errors())));
      } else {
        if ($this->Medicos->save($medico)) {
          $this->Flash->msgbueno(__('Se ha registrado correctamente los datos'));
          return $this->redirect(['action' => 'perfil']);
        } else {
          $this->Flash->msgerror(__('El medico no se ha podido registrar intente nuevamente'));
        }
      }
    }
    $this->set(compact('medico'));
  }

  public function ajax_sociales($idMedico = null, $idSocial = null) {
    $this->layout = 'ajax';
    $sociales = TableRegistry::get('Sociales');
    $social = $sociales->find()->where(['id' => $idSocial])->first();
    $msociales = TableRegistry::get('Medicosociales');
    $medicosociale = $msociales->find()->where(['sociale_id' => $idSocial, 'medico_id' => $idMedico])->first();
    if (empty($medicosociale)) {

      $medicosociale = $msociales->newEntity();
    }
    if ($this->request->is(['patch', 'post', 'put'])) {

      $medicosociale = $msociales->patchEntity($medicosociale, $this->request->data);

      $msociales->save($medicosociale);
      $this->Flash->msgbueno("Se registro correctamente!!", 'msgbueno');
      $this->redirect($this->referer());
    }
    $this->set(compact('social', 'medicosociale', 'idMedico'));
  }

  public function ajax_edit2() {
    $this->layout = 'ajax';
    $medico = $this->Medicos->find()->where(['Medicos.user_id' => $this->request->session()->read('Auth.User.id')])->first();
    if ($this->request->is(['patch', 'post', 'put'])) {
      $medico = $this->Medicos->patchEntity($medico, $this->request->data);
      if (!empty($medico->errors())) {
        $this->Flash->msgerror(current(current($medico->errors())));
      } else {
        if ($this->Medicos->save($medico)) {
          $this->Flash->msgbueno(__('Se ha registrado correctamente los datos'));
          return $this->redirect(['action' => 'perfil']);
        } else {
          $this->Flash->msgerror(__('El medico no se ha podido registrar intente nuevamente'));
        }
      }
    }
    $especialidades = TableRegistry::get('Especialidades');
    $listaesp = $especialidades->find('list', ['keyField' => 'id', 'valueField' => 'nombre']);
    $this->set(compact('medico', 'listaesp'));
  }

  public function ajax_ubicacion() {
    $this->layout = 'ajax';
    $medico = $this->Medicos->find()->where(['Medicos.user_id' => $this->request->session()->read('Auth.User.id')])->first();
    if ($this->request->is(['patch', 'post', 'put'])) {
      $medico = $this->Medicos->patchEntity($medico, $this->request->data);
      if (!empty($medico->errors())) {
        $this->Flash->msgerror(current(current($medico->errors())));
      } else {
        if ($this->Medicos->save($medico)) {
          $this->Flash->msgbueno(__('Se ha registrado correctamente los datos'));
          return $this->redirect(['action' => 'perfil']);
        } else {
          $this->Flash->msgerror(__('El medico no se ha podido registrar intente nuevamente'));
        }
      }
    }
    $this->set(compact('medico'));
  }

  public function busca_medicos() {
    /* debug($this->request->data['buscador']);
      exit; */
    $buscado = $this->request->data['buscador'];
    $resultados = $this->Medicos->find('all')->Where(['nombre LIKE' => "%" . $buscado . "%"]);
    debug($resultados);
    exit;
  }

}
