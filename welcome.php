<html>
<body background="ecom1.jpg">
<b><h2>product details are</h2></b>
 <?php
if(isset($_REQUEST['save']))
{
	$array=$_REQUEST['arr'];
	for($i=0;$i<count($array);$i++)
	{
	echo strtoupper($array[$i])."<br/>";
	}	
}
?>

</body>
</html>