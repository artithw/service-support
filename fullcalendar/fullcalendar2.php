<?php @session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ระบบข้อมูลบุคคลากรโรงพยาบาล</title>
<LINK REL="SHORTCUT ICON" HREF="../images/logo.png">
    <link rel="stylesheet" href="js/fullcalendar-2.1.1/fullcalendar.min.css">
    <script type="text/javascript">
            $(function() {
                $('#calendar').fullCalendar({
                    header: {
                        left: 'month,agendaWeek,agendaDay',
                        center: 'title',
                        right: 'prev,next today'
                    },
                    editable: true,
                    theme: true,
                    events: "data_events2.php?gData=1",
                    loading: function(bool) {
                        if (bool)
                            $('#loading').show();
                        else
                            $('#loading').hide();
                    },
                    eventLimit:true,  
                    lang:'th'// put your options and callbacks here  
                });

            });
        </script>
    <style type="text/css">
    html,body{
        maring:0;padding:0;
        font-family:tahoma, "Microsoft Sans Serif", sans-serif, Verdana;   
        font-size:12px;
    }
	#calendar{
		max-width: 700px;
		margin: 0 auto;
        font-size:13px;
	}        
    </style>
</head>
<body>
<center><h1>ปฏิทินการใช้รถยนต์</h1></center>
<div style="margin:auto;width:800px;">
 <div id='calendar'></div>
 </div>
<br>
<div align="center">
<?php
include '../connection/connect.php';
$li_car=  mysqli_query($db, "SELECT license_name FROM ss_carlicense ORDER BY license_id ASC") or die(mysqli_error($db));
$code_color=array("1"=>"#1e6c06","2"=>"#930606","3"=>"#416cbb","4"=>"purple","5"=>"#d92727","6"=>"orange","7"=>"yellow");
$i=1;
while ($row = mysqli_fetch_array($li_car)) {  ?>
<a style="background-color:<?= $code_color[$i]?>; color: white"><?= $row['license_name']?></a> 
<?php $i++; }?>
</div>
    
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>    
<script type="text/javascript" src="js/fullcalendar-2.1.1/lib/moment.min.js"></script>
<script type="text/javascript" src="js/fullcalendar-2.1.1/fullcalendar.min.js"></script>
<script type="text/javascript" src="js/fullcalendar-2.1.1/lang/th.js"></script>
<script type="text/javascript" src="script2.js"></script>            
</body>
</html>