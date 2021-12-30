<form method="post" action="tes.php" name="form1" onsubmit="return validate()">
<?php

$querys=mysql_query($sql);
while($results=mysql_fetch_assoc()){
	echo '<input type="checkbox" id="nama'.$results['id'].'" value="'.$results['value rows'].'">'.$results['value rows'].'<br />';		
}
 
?>
<input type="submit" name="submit" value="submit">
</form>