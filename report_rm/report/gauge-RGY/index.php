 
		<script type="text/javascript" src="report_rm/jquery.js"></script>
		<script type="text/javascript">
		$(function () {
	
    var chart = new Highcharts.Chart({
	
	    chart: {
	        renderTo: 'container',
	        type: 'gauge',
	        plotBackgroundColor: null,
	        plotBackgroundImage: null,
	        plotBorderWidth: 0,
	        plotShadow: false
	    },
	    
	    title: {
	       text: ''
	    },
	    
	    pane: {
	        startAngle: -150,
	        endAngle: 150,
	        background: [{
	            backgroundColor: {
	                linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
	                stops: [
	                    [0, '#FFF'],
	                    [1, '#333']
	                ]
	            },
	            borderWidth: 0,
	            outerRadius: '109%'
	        }, {
	            backgroundColor: {
	                linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
	                stops: [
	                    [0, '#333'],
	                    [1, '#FFF']
	                ]
	            },
	            borderWidth: 1,
	            outerRadius: '107%'
	        }, {
	            // default background
	        }, {
	            backgroundColor: '#DDD',
	            borderWidth: 0,
	            outerRadius: '105%',
	            innerRadius: '103%'
	        }]
	    },
	       
	    // the value axis
	    yAxis: {
	        min: 0,
	        max: 100,
	        
	        minorTickInterval: 'auto',
	        minorTickWidth: 1,
	        minorTickLength: 10,
	        minorTickPosition: 'inside',
	        minorTickColor: '#666',
	
	        tickPixelInterval: 30,
	        tickWidth: 2,
	        tickPosition: 'inside',
	        tickLength: 10,
	        tickColor: '#666',
	        labels: {
	            step: 2,
	            rotation: 'auto'
	        },
	        title: {
	           text: 'RISK'
	        },
	        plotBands: [{
	            from: 0,
	            to: 17.5,
	            color: '#55BF3B' // green
	        },{
	            from: 17.5,
	            to: 35,
	            color: '#55BF3B' // green
	        }, {
	            from: 35,
	            to: 65,
	            color: '#DDDF0D' // yellow
	        }, {
	            from: 65,
	            to: 100,
	            color: '#DF5353' // red
	        }]        
	    },
	
	    series: [{
	        name: 'ระดับความเสี่ยง',
	        data: [70],
	        tooltip: {
	            valueSuffix: '%'
	        }
	    }]
	
	}, 
	// Add some life
	function (chart) {
	    setInterval(function () {
	        var point = chart.series[0].points[0],
	            newVal,
	          //  inc = Math.round((Math.random() - 0.5) * 20);   รันออโต้
	            inc = Math.round((Math.random() - 0.5) * 20);
	        
	        newVal = point.y + inc;
	        if (newVal < 0 || newVal > 100) {
	            newVal = point.y - inc;
	        }
	        
	        point.update(newVal);
	        
	    },3000);
	});
});
		</script>
  <script src="report_rm/highcharts.js"></script>
<script src="report_rm/highcharts-more.js"></script>
<script src="report_rm/exporting.js"></script>
 
<div id="container" style="width: 350px; height: 250px; margin: 0 auto"></div>
 