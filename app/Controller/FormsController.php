<?php
App::uses('AppController', 'Controller');
/**
 * Forms Controller
 *
 * @property Form $Form
 * @property PaginatorComponent $Paginator
 */
class FormsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Form->recursive = 0;
		$this->set('forms', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Form->exists($id)) {
			throw new NotFoundException(__('Invalid form'));
		}
		$options = array('conditions' => array('Form.' . $this->Form->primaryKey => $id));
		$this->set('form', $this->Form->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Form->create();
			if ($this->Form->save($this->request->data)) {
				$this->Flash->success(__('The form has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The form could not be saved. Please, try again.'));
			}
		}
		$users = $this->Form->User->find('list');
		$this->set(compact('users'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Form->exists($id)) {
			throw new NotFoundException(__('Invalid form'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Form->save($this->request->data)) {
				$this->Flash->success(__('The form has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The form could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Form.' . $this->Form->primaryKey => $id));
			$this->request->data = $this->Form->find('first', $options);
		}
		$users = $this->Form->User->find('list');
		$this->set(compact('users'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Form->id = $id;
		if (!$this->Form->exists()) {
			throw new NotFoundException(__('Invalid form'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Form->delete()) {
			$this->Flash->success(__('The form has been deleted.'));
		} else {
			$this->Flash->error(__('The form could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
