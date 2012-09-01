<?php
App::uses('AppController', 'Controller');
/**
 * Presentes Controller
 *
 * @property Presente $Presente
 */
class PresentesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Presente->recursive = 0;
		$this->set('presentes', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Presente->id = $id;
		if (!$this->Presente->exists()) {
			throw new NotFoundException(__('Invalid presente'));
		}
		$this->set('presente', $this->Presente->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Presente->create();
			if ($this->Presente->save($this->request->data)) {
				$this->Session->setFlash(__('The presente has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The presente could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Presente->id = $id;
		if (!$this->Presente->exists()) {
			throw new NotFoundException(__('Invalid presente'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Presente->save($this->request->data)) {
				$this->Session->setFlash(__('The presente has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The presente could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Presente->read(null, $id);
		}
	}

/**
 * delete method
 *
 * @throws MethodNotAllowedException
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->Presente->id = $id;
		if (!$this->Presente->exists()) {
			throw new NotFoundException(__('Invalid presente'));
		}
		if ($this->Presente->delete()) {
			$this->Session->setFlash(__('Presente deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Presente was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
