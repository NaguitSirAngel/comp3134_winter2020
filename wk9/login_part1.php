<h1>Weak Password</h1>
<form method="post">
 <label>Password</label>
 <input type="password" name="password">
 <br/>
 <input type="submit">
</form>
<?php
$passwords = array("123456","123456789","qwerty","password","111111","12345678","abc123","1234567","password1","12345");
for($x = 0; $x<count($passwords; $x++;)){
    if($_POST["password"] == $passwords[$x]){
        echo "Successfully Authenticated";
    }
}
?>