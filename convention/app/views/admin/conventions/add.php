<h2>Add Convention</h2>




<?php 


?>
<!DOCTYPE html>
<html>
<head>
    <title>Form Example</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <form action="" method="post">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" name="name" id="name" required>
            </div>
            <div class="form-group">
                <label for="description">Description:</label>
                <textarea class="form-control" name="description" id="description" required></textarea>
            </div>
            <div class="form-group">
                <label for="">Type:</label>
                <select class="form-control" name="type_id" id="type_id" required>
                    <?php foreach($types as $type):?>
                        <option value="<?= $type->id;?>"><?= $type->nom;?></option>
                    <?php endforeach;?>    
                </select>
            </div>
            <input type="submit" class="btn btn-primary" value="Ajouter" name="btn_ajouter">
        </form>
    </div>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>



