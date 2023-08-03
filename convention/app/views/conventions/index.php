<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Document</title>
<!-- Include Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
rel="stylesheet">
<!-- Include jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- Include DataTables CSS and JS -->
<link href="https://cdn.datatables.net/1.11.4/css/dataTables.bootstrap5.min.css"
rel="stylesheet">
<script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.4/js/dataTables.bootstrap5.min.js"></script>
</head>
<body>


<h2>Conventions</h2>


<div class="table-responsive">
<table id="myTable" class="table table-striped">
<thead>
<tr>
<th>ID</th>
<th>Name</th>
<th class="fw-bold text-primary">Description</th>
<th>date</th>
<th>type_id</th>
</tr>
</thead>
<tbody>
<?php foreach ($emp as $object): ?>
<tr>
<td><?= $object->id; ?></td>
<td><?= $object->name; ?></td>
<td><?= $object->description; ?></td>
<td><?= $object->date; ?></td>
<td><?= $object->type_id; ?></td>
</tr>
<?php endforeach; ?>
</tbody>
</table>

</div>
<script>
$(document).ready(function() {
$('#myTable').DataTable();
});
</script>
</body>
</html>