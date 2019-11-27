<a href="index.php?action=add_form" class="btn btn-success">Add New</a>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Age</th>
            <th>Sex</th>
            <th>Action</th>
        </tr>
    </thead>
    <?php 
        if(isset($data['view'])){
            foreach($data['view'] as $result){
    ?>
    <tbody>
        <tr>
            <td><?php echo $result['id']?></td>
            <td><?php echo $result['name']?></td>
            <td><?php echo $result['age']?></td>
            <td><?php echo $result['sex']?></td>
            <td>
                <a href="index.php?action=detail&id=<?php echo $result['id']?>"><i class="material-icons">remove_red_eye</i></a>
                <a href="index.php?action=edit&id=<?php echo $result['id']?>"><i class="material-icons">edit</i></a>
                <a href="index.php?action=delete&id=<?php echo $result['id']?>"><i class="material-icons" onClick="return confirm('Are your sure to delete?')">delete</i></a>
            </td>
        </tr>
    </tbody>
    <?php
         }
        }
    ?>
</table>