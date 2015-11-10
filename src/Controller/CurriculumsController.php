<?php

namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;

/**
 * Curriculums Controller
 *
 * @property \App\Model\Table\CurriculumsTable $Curriculums
 */
class CurriculumsController extends AppController {

  /**
   * Index method
   *
   * @return void
   */
  public $layout = 'medicos';

  public function index() {
    
  }

  public function formulario() {
    $idMedico = $this->get_id_medico();
    $curriculum = $this->Curriculums->find()->where(['medico_id' => $idMedico])->first();
    if (empty($curriculum)) {
      $curriculum = $this->Curriculums->newEntity();
    }
    if (!empty($this->request->data)) {

      $this->request->data['medico_id'] = $idMedico;
      //   debug($this->request->data);
      //exit;
      $curriculum = $this->Curriculums->patchEntity($curriculum, $this->request->data);
      //debug($curriculum);
      //debug($this->request->data);
      // exit;
      if ($this->Curriculums->save($curriculum)) {


        $this->Flash->success(__('Se ha registrado correctamente!!'));
        return $this->redirect(['action' => 'formulario']);
      } else {
        $this->Flash->error(__('No se ha podido registrar intente nuevamente!!'));
      }
    }
    // $this->set('curriculums', $this->paginate($this->Curriculums));
    // $this->set('_serialize', ['curriculums']);
    //$curriculums = $this->Curriculums->find('all')->contain(['Origens']);
    //debug($farmacias->toArray());exit;
    //$this->set(compact('curriculums'));
    $verformulario = $this->Curriculums->find()->where(['medico_id' => $idMedico])->first();
    $this->set(compact('curriculum', 'verformulario'));
    // debug($verformulario);
    //   exit;
  }

  /**
   * View method
   *
   * @param string|null $id Curriculum id.
   * @return void
   * @throws \Cake\Network\Exception\NotFoundException When record not found.
   */
  public function view($id = null) {
    $curriculum = $this->Curriculums->get($id, [
      'contain' => []
    ]);
    $this->set('curriculum', $curriculum);
    $this->set('_serialize', ['curriculum']);
  }

  /**
   * Add method
   *
   * @return void Redirects on successful add, renders view otherwise.
   */
  public function add() {
    $curriculum = $this->Curriculums->newEntity();
    if ($this->request->is('post')) {
      $curriculum = $this->Curriculums->patchEntity($curriculum, $this->request->data);
      if ($this->Curriculums->save($curriculum)) {
        $this->Flash->success(__('The curriculum has been saved.'));
        return $this->redirect(['action' => 'index']);
      } else {
        $this->Flash->error(__('The curriculum could not be saved. Please, try again.'));
      }
    }
    $this->set(compact('curriculum'));
    $this->set('_serialize', ['curriculum']);
  }

  /**
   * Edit method
   *
   * @param string|null $id Curriculum id.
   * @return void Redirects on successful edit, renders view otherwise.
   * @throws \Cake\Network\Exception\NotFoundException When record not found.
   */
  public function edit($id = null) {
    $curriculum = $this->Curriculums->get($id, [
      'contain' => []
    ]);
    if ($this->request->is(['patch', 'post', 'put'])) {
      $curriculum = $this->Curriculums->patchEntity($curriculum, $this->request->data);
      if ($this->Curriculums->save($curriculum)) {
        $this->Flash->success(__('The curriculum has been saved.'));
        return $this->redirect(['action' => 'index']);
      } else {
        $this->Flash->error(__('The curriculum could not be saved. Please, try again.'));
      }
    }
    $this->set(compact('curriculum'));
    $this->set('_serialize', ['curriculum']);
  }

  /**
   * Delete method
   *
   * @param string|null $id Curriculum id.
   * @return void Redirects to index.
   * @throws \Cake\Network\Exception\NotFoundException When record not found.
   */
  public function delete($id = null) {
    $this->request->allowMethod(['post', 'delete']);
    $curriculum = $this->Curriculums->get($id);
    if ($this->Curriculums->delete($curriculum)) {
      $this->Flash->success(__('The curriculum has been deleted.'));
    } else {
      $this->Flash->error(__('The curriculum could not be deleted. Please, try again.'));
    }
    return $this->redirect(['action' => 'index']);
  }

  public function get_id_medico() {
    $medicos = TableRegistry::get('Medicos');
    $idUsuario = $this->request->session()->read('Auth.User.id');
    return $medicos->find()->where(['user_id' => $idUsuario])->first()->id;
  }

  public function registro($idCurriculum = null) {
    if (!empty($idCurriculum)) {
      $curriculum = $this->Curriculums->get($idCurriculum);
    } else {
      $curriculum = $this->Curriculums->newEntity();
    }
    if (!empty($this->request->data['fecha_ini']['year'])) {
      $this->request->data['fecha_ini'] = $this->request->data['fecha_ini']['year'] . '-01-01';
      $this->request->data['fecha_fin'] = $this->request->data['fecha_fin']['year'] . '-01-01';
    }
    $this->request->data['medico_id'] = $this->get_id_medico();

    $curriculum = $this->Curriculums->patchEntity($curriculum, $this->request->data);

    if (!empty($curriculum->errors())) {
      $this->Flash->msgerror(current(current($curriculum->errors())));
    } else {
      if ($this->Curriculums->save($curriculum)) {
        $this->Flash->msgbueno(__('Se ha registrado correctamente!!'));
      } else {
        $this->Flash->msgerror(__('No se ha podido registrar intente nuevamente!!'));
      }
    }
    return $this->redirect(['action' => 'perfil', "controller" => 'Medicos']);
  }

  public function curriculum_acad($idCurriculum = null) {
    $this->layout = 'ajax';
    if (!empty($idCurriculum)) {
      $curriculum = $this->Curriculums->get($idCurriculum);
    } else {
      $curriculum = $this->Curriculums->newEntity();
    }

    $this->set(compact('curriculum'));
  }

  public function curriculum_expe($idCurriculum = null) {
    $this->layout = 'ajax';
    if (!empty($idCurriculum)) {
      $curriculum = $this->Curriculums->get($idCurriculum);
    } else {
      $curriculum = $this->Curriculums->newEntity();
    }

    $this->set(compact('curriculum'));
  }

  public function curriculum_comple($idCurriculum = null) {
    $this->layout = 'ajax';
    if (!empty($idCurriculum)) {
      $curriculum = $this->Curriculums->get($idCurriculum);
    } else {
      $curriculum = $this->Curriculums->newEntity();
    }

    $this->set(compact('curriculum'));
  }
  
  public function eliminar($idCurriculum = null){
    $curriculum = $this->Curriculums->get($idCurriculum);
    if($this->Curriculums->delete($curriculum)){
      $this->Flash->msgbueno('Se ha eliminado del curriculum correctamente!!');
    }else{
      $this->Curriculums->msgerror('No se ha podido eliminar del curriculum. Intente nuevamente!!');
    }
    $this->redirect($this->referer());
  }

}
