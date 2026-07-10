<?php
if ($_SERVER['REQUEST_METHOD'] ==='POST') {
    echo $_POST['username'];

}
?>
<form method ="POST">
    <input type ="text" name = "username">
    <button type="submit"> Send </button>
</form>