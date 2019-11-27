<?php
    function m_view(){
        include "connection.php";
        $query="SELECT * FROM family";
        $result=mysqli_query($conn,$query);
        $rows=[];
        if($result && mysqli_num_rows($result) > 0){
            foreach($result as $recode){
                $rows[] = $recode;
            }
        }
        return $rows ;
    }
    function m_add($data){
        $name = $_POST['user'];
        $age = $_POST['age'];
        $sex = $_POST['sex'];
        include "connection.php";
        $query = "INSERT INTO family(name,age,sex)
        VALUES ('$name','$age','$sex')";
        $result = mysqli_query($conn,$query);
        return $result;
    }

    function m_detail(){
        include "connection.php";
        $id = $_GET['id'];
        $query = " SELECT * FROM family WHERE id='$id' ";
        $result = mysqli_query($conn,$query);
        return $result;
    }
    function m_delete(){
        include "connection.php";
        $id = $_GET['id'];
        $query = "DELETE FROM family WHERE id='$id' ";
        $result = mysqli_query($conn,$query);
        if($result){
            header("Location: index.php?action=view");
        }else{
            echo " Cannot Delete";
        }
    }
    function m_edit(){
        $id = $_GET['id'];
        $name = $_POST['user'];
        $age = $_POST['age'];
        $sex = $_POST['sex'];
        include "connection.php";
        $query = "UPDATE family SET name ='$name', age ='$age', sex ='$sex' WHERE id='$id' ";
        $result = mysqli_query($conn,$query);
        return $result ;
    }
?>