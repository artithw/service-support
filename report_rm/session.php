<div data-role="page" data-theme="b" id="page-1">

<?php
@session_start();
if($_GET[chwpart]!=''){
      $_SESSION[chwpart]=$_GET[chwpart];
echo "<META HTTP-EQUIV='Refresh' CONTENT='0;URL=report/bar-changwat/index.php'>";	
}else if($_GET[dx]!=''){
      $_SESSION[dx]=$_GET['dx'];
	echo "<META HTTP-EQUIV='Refresh' CONTENT='0;URL=report/top5desead/index.php'>";	

}else{ 
 echo "<META HTTP-EQUIV='Refresh' CONTENT='0;URL=../../index.php'>";	
}
?>
</div>