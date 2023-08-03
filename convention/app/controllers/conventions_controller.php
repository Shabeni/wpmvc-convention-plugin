<?php

class ConventionsController extends MvcPublicController {

    public function index(){
        $objects=$this->Convention->find();
        $this->set('emp',$objects);
        }
        
}
