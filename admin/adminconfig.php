<?php
$sql = "SELECT * FROM contacts";
$result = mysqli_query($conn, $sql);
$i = 1;
if (mysqli_num_rows($result) > 0) {
?>
<table class="table table-bordered table-hover table-striped">
	<tr>
		<th>Complete Name</th>
		<th>Email</th>
		<th>Category</th>
		<th>Message</th>
	</tr>
	<?php
	while ($row = mysqli_fetch_assoc($result)) {		
	?>
	<tr>
		<td><?php echo $i; ?></td>
		<td><?php echo $row['firstname']; ?></td>
        <td><?php echo $row['lastname']; ?></td>
		<td><?php echo $row['email']; ?></td>
        <td><?php echo $row['category']; ?></td>
		<td><?php echo $row['message']; ?></td>
	</tr>
	<?php
    $i++;
	}
	?>
</table>
<?php
}
?>