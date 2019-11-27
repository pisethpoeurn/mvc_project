<?php
    $data = array();
    myFunction($data);
    function myFunction(&$data){
        $function = "view";
        if(isset($_GET['action'])){
            $function = $_GET['action'];
        }
        $function($data);
    }
    function view(&$data){
        $data['view']= m_view();
        $data['page']= "task/view";
    }
    function add_form(&$data){
        $data['page']="task/add";
    }
    function add_student(&$data){
        $result = m_add($_POST);
        if($result){
            $action="view";
        }else{
            $action="add_form";
        }
        header("Location: index.php?action=$action");
    }
    function detail(&$data){
        $data['view'] = m_detail();
        $data['page'] = 'task/detail';
    }
    function delete(&$data){
       m_delete();
    }
    function edit(&$data){
        $data['view'] = m_detail();
        $data['page'] = "task/edit";
    }
    function edit_student(&$data){
        $result = m_edit();
        if($result){
            $action ="view";
        }else{
            $action ="edit_student";
        }
        header("Location: index.php?action=$action");
    }
?>