﻿<?php include_once 'database.php';
if(count($_POST)>0) {
mysqli_query($conn,"UPDATE users set id='" . $_POST['id'] . "', full_name='" . $_POST['full_name'] . "',  email='" . $_POST['email'] . "' WHERE id='" . $_POST['id'] . "'");
$message = "Record Modified Successfully";
}
$result = mysqli_query($conn,"Select * from `users` where id like '%$search%' 
or full_name like '%$search%'
or email like '%$search%'
");
// session_start();
// $_SESSION['user_id'] = $current_user_id;
// $result = mysqli_query($connection, "SELECT * FROM users WHERE id='" . $_SESSION['user_id'] . "'");
$row= mysqli_fetch_array($result);
?>
<html>
<head>
<title>Add New User</title>
<link rel="stylesheet" type="text/css" href="styles.css" />
</head>
<body>
<form name="frmUser" method="post" action="">
<div style="width:500px;">
<div class="message"><?php if(isset($message)) { echo $message; } ?></div> <div align="right" style="padding-bottom:5px;"><a href="retrieve.php" class="link"><img alt='List' title='List' src='images/list.png' width='15px' height='15px'/> List User</a></div>
<table border="0" cellpadding="10" cellspacing="0" width="500" align="center" class="tblSaveForm">
<tr class="header">
<td colspan="2">Edit User</td>
</tr>
<tr>
<td><label>id</label></td>
<td><input type="hidden" name="id" class="txtField" value="<?php echo $row['id']; ?>"><input type="text" name="userName" class="txtField" value="<?php echo $row['id']; ?>"></td>
</tr>
<tr>
<td><label>Full Name</label></td>
<td><input type="text" name="full_name" class="txtField" value="<?php echo $row['full_name']; ?>"></td>


<tr>
<td><label>Email</label></td>
<td><input type="text" name="email" class="txtField" value="<?php echo $row['email']; ?>"></td>
</tr>
<tr>
<td colspan="2"><input type="submit" name="submit" value="Submit" class="buttom"></td>
</tr>
</table>
</div>
</form>
</body>
</html> 