<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">Add New</div>
                <div class="card-body">
                    <form action="index.php?action=add_student" method="POST">
                        <div class="form-group">
                            <label for="">Useranme</label>
                            <input type="text" name="user" id="user" class="form-control" placeholder="Username">
                        </div>
                        <div class="form-group">
                            <label for="">Age</label>
                            <input type="number" name="age" id="age" class="form-control" placeholder="Age">
                        </div>
                        <div class="form-group">
                            <label for="">Sex</label>
                            <select name="sex" id="sex">
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                            </select>
                        </div>
                        <input type="submit" class="form-control" value="Submit">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>