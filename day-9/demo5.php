
$result = mysqli_query($conn, "SELECT * FROM students");

while ($row = mysqli_fetch_assoc($result)) {
    echo $row['name'] . "<br>";
}

<table border="1">
<?php while ($row = mysqli_fetch_assoc($result)) { ?>
<tr>
  <td><?= $row['name'] ?></td>
  <td><?= $row['email'] ?></td>
</tr>
<?php } ?>
</table>