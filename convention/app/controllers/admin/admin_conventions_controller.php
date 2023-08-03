<?php

class AdminConventionsController extends MvcAdminController {

    var $default_columns = array('id', 'name','description');

    public function add(){
        $ty=mvc_model('Type');
		$Types=$ty->find(
		array("selects"=>array("id",'nom '),
        "conditions"=>array('active'=>'1')

		
		)
		);
		$this->set('types',$Types);
      
        if(isset($_POST['btn_ajouter'])):
            $this->params['data']['Convention']['name']=$_POST['name'];
  
    
    $this->params['data']['Convention']['description']=$_POST['description'];
    

    $this->params['data']['Convention']['type_id']=$_POST['type_id'];
    if($this->Convention->create($this->params['data'])) echo 'Ok';
    else echo 'Not OK';
        endif;
    }

    public function edit(){
        $ty=mvc_model('Type');
		$Types=$ty->find(
		array("selects"=>array("id",'nom '),
        "conditions"=>array('active'=>'1')

		
		)
		);
		$this->set('types',$Types);
       
        $id=$this->params['id'];
        $convention=$this->Convention->find_by_id($id);
        $this->set('convention',$convention);
        if(isset($_POST['btn_ajouter'])):
            $this->params['data']['Convention']['id']=$id;
            $this->params['data']['Convention']['name']=$_POST['name'];
    $this->params['data']['Convention']['description']=$_POST['description'];
    


    $this->params['data']['Convention']['type_id']=$_POST['type_id'];
    if($this->Convention->save($this->params['data'])) echo 'Ok';
    else echo 'Not OK';
        endif;
    }

}



