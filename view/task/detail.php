<div class="container">
    <div class="row">
        <div class="col-12">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Age</th>
                        <th>Sex</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <?php
                if(isset($data['view'])) {
                    foreach($data['view'] as $result){
                ?>
                <tbody>
                    <tr>
                        <td><?php echo $result['id']?></td>
                        <td><?php echo $result['name']?></td>
                        <td><?php echo $result['age']?></td>
                        <td><?php echo $result['sex']?></td>
                    </tr>
                </tbody>
                <?php
                    }
                }
                ?>
            </table>
        </div>
    </div>
</div>