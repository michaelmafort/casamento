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
        
    public function list_presentes(){
        $this->layout = null;
        $this->set('presentes', $this->Presente->find('all', array('order' => array('Presente.price' => 'asc'))));
    }
        
    public function gift() {
        App::uses('CakeEmail', 'Network/Email');
        header('Content-Type: application/json; charset=utf-8');
        $this->layout = null;
        $response = new stdClass();
        $response->success = false;
        $response->message = "Erro ao salvar, tente novamente.";
        
        if($this->request->is('post')) {
            $this->Presente->create();
            $this->request->data['Presente']['checked'] = 1;
            if( $this->Presente->save($this->request->data) ){
                $presente = $this->Presente->read();
                $response->success = true;
                $response->message = !empty($this->request->data['Presente']['name']) ? $this->request->data['Presente']['name'] . ', agradecemos o seu presente.' : '';
                $response->name = !empty($this->request->data['Presente']['name']) ? $this->request->data['Presente']['name'] : 'Caro amigo(a)';
                $response->presente = $presente['Presente']['title'];
                $response->link = $presente['Presente']['url'];
                
                $email = new CakeEmail;
                $email->template('agradecimento', 'default')
                    ->sender('flaviaemichael@michaelmafort.com.br', 'Casamento Flávia e Michael')
                    ->emailFormat('html')
                    ->to($this->request->data['Presente']['email'])
                    ->from(array('flaviaemichael@michaelmafort.com.br' => 'Casamento Flávia e Michael'))
                    ->replyTo('flaviaemichael@gmail.com')
                    ->subject('Agradecemos o seu presente')
                    ->send();
            }
        }
        echo json_encode($response);
        exit;
    }
}
