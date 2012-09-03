<?php
class HomeController extends AppController {
    public $layout = 'casamento';
    public $uses = array('Presente');
    
    public function index() {
        
    }
    
    public function igreja() {
        $this->set('title_for_layout', 'Flavia & Michael - A igreja');
    }
    
    public function lua_de_mel() {
        $this->set('title_for_layout', 'Flavia & Michael - Lua de mel');
    }
    
    public function padrinhos() {
        $this->set('title_for_layout', 'Flavia & Michael - Padrinhos');
    }
    
    public function fotos() {
        $this->set('title_for_layout', 'Flavia & Michael - Fotos');
    }
    
    public function presentear() {
        $this->set('presentes', $this->Presente->find('all', array('order' => array('Presente.price' => 'asc'))));
//        $this->view = 'presentear_comingsoon';
        $this->set('title_for_layout', 'Flavia & Michael - Presentes');
    }
}