<?php
include 'config/db.php';
$result = $conn->query("SELECT * FROM users");
?>
<!DOCTYPE html>
<html lang="en">
<head><meta charset="UTF-8"><title>Admin Panel</title></head>
<body>
<h2>Admin Panel - User Management</h2>
<table border="1">
<tr><th>ID</th><th>Name</th><th>Email</th><th>Role</th></tr>
<?php while($row = $result->fetch_assoc()) { ?>
<tr>
<td><?php echo $row['user_id']; ?></td>
<td><?php echo $row['name']; ?></td>
<td><?php echo $row['email']; ?></td>
<td><?php echo $row['role']; ?></td>
</tr>
<?php } ?>
</table>
</body>
</html>
