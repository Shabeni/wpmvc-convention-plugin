<h2>Edit Convention</h2>

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
                <label for="nom">Name:</label>
                <input type="text" class="form-control" name="name" id="name" value="<?php echo $convention->name; ?>">
            </div>
            <div class="form-group">
                <label for="description">Description:</label>
                <textarea class="form-control" name="description" id="description" value="<?php echo $convention->description; ?>"></textarea>
            </div>
            <div class="form-group">
                <label for="">Type de:</label>
                <select name="type_id">
                    <?php foreach ($types as $type) : ?>
                        <?php $selected = ($type->id == $convention->type_id) ? 'selected' : ''; ?>
                        <option value="<?php echo $type->id; ?>" <?php echo $selected; ?>>
                            <?php echo $type->nom; ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </div>
            <input type="submit" class="btn btn-primary" value="Ajouter" name="btn_ajouter">
        </form>
    </div>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

