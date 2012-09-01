<?php
class HomeController extends AppController {
    
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
}