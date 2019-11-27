<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">Edit </div>
                <div class="card-body">
                <?php
                    foreach($data['view'] as $result){
                ?>
                    <form action="index.php?action=edit_student&id=<?php echo $result['id']?>" method="POST">
                        <div class="form-group">
                            <label for="">Useranme</label>
                            <input type="text" name="user" id="user" value="<?php echo $result['name']?>" class="form-control" placeholder="Username">
                        </div>
                        <div class="form-group">
                            <label for="">Age</label>
                            <input type="number" name="age" id="age" value="<?php echo $result['age']?>" class="form-control" placeholder="Age">
                        </div>
                        <div class="form-group">
                            <label for="radio">sex:</label><br>
                            <input type="radio" name="sex" <?php if ($result['sex']== "Male"){?> checked="checked" <?php } ?> value="Male">Male <br>
                            <input type="radio" name="sex" <?php if ($result['sex'] == "Female"){?> checked= "checked" <?php } ?> value="Female">Female
                        </div>
                        <input type="submit" class="form-control" value="Submit">
                    </form>
                    <?php 
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>