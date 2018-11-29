<form name="nameOfForm" method="get" action="<?php echo $_SERVER['PHP_SELF']; ?>">
<?php
$years = array();
for ($i = 1900; $i < 2026; $i++)
{
  $years[] = $i;
}
echo "<select name='Year'>";
foreach($years as $option){
	echo "<option value='{$option}'>{$option}</option>";
}
echo "</select>";
?>
<input type="submit" name="submit" value="Save Year" />
</form>
<?php
if($_GET){
   echo 'The year selected is '.$_GET['Year'];
}
// also you can retrieve all the elements of the form creating dynamic variables like this
if($_GET){
  foreach($_GET as $k=>$v){
     ${$k}=$v;
  }
}
?>
