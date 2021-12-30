<script type="application/javascript">
function validate(){
 
<?php
// file connect database
$sql="SELECT * FROM db_category ORDER BY ID_cat";
$query=$mysqli->query($sql);
while($result=$query->fetch_assoc()){
	$ID_cat =$result['ID_cat'];
	echo '	var pilihan'.$result['ID_cat'].' = document.getElementById("nama'.$result['ID_cat'].'").checked;';	
 
	echo 'if(pilihan'.$ID_cat.'==""){
	alert("check box tidak boleh kosong");
	return false ;
	}
';
 
 
 
	}
?>
	return true;
}
 
</script>
<form method="post" action="tes.php" name="form1" onsubmit="return validate()">
<?php
$sqls="SELECT * FROM db_category ORDER BY ID_cat";
$querys=$mysqli->query($sql);
while($results=$querys->fetch_assoc()){
	echo '<input type="checkbox" id="nama'.$results['ID_cat'].'" value="'.$results['cat_name'].'">'.$results['cat_name'].'<br />';		
}
 
?>
<input type="submit" name="submit" value="submit">
</form>