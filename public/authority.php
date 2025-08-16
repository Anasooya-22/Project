<?php
include 'config/db.php';
$result = $conn->query("SELECT * FROM reports");
?>
<!DOCTYPE html>
<html lang="en">
<head><meta charset="UTF-8"><title>Authority Dashboard</title></head>
<body>
<h2>Authority Dashboard</h2>
<table border="1">
<tr><th>ID</th><th>Title</th><th>Description</th><th>Location</th><th>Status</th></tr>
<?php while($row = $result->fetch_assoc()) { ?>
<tr>
<td><?php echo $row['report_id']; ?></td>
<td><?php echo $row['title']; ?></td>
<td><?php echo $row['description']; ?></td>
<td><?php echo $row['location']; ?></td>
<td><?php echo $row['status']; ?></td>
</tr>
<?php } ?>
</table>
</body>
</html>
