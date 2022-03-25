<footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.1.0
    </div>
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Add Content Here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
chart.js/Chart.min.js
<!-- jQuery -->
<script src="<?php echo $level.PG_Path."jquery/jquery.min.js"?>"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo $level.PG_Path."bootstrap/js/bootstrap.bundle.min.js"?>"></script>
<!-- ChartJS -->
<script src="<?php echo $level.PG_Path."chart.js/Chart.min.js"?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo $level.DIST_Path."js/adminlte.js"?>"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo $level.DIST_Path."js/demo.js"?>"></script>
<!-- Page specific script -->
<script>
  $(function () {
    /* ChartJS
     * -------
     * Here we will create a few charts using ChartJS
     */

    //-------------
    //- BAR CHART 1 -
    //--------------
	 var barchart1 = {
      labels  : [<?php echo "'".$SPBCT1[0]["TENSP"]."'";?>, <?php echo "'".$SPBCT2[0]["TENSP"]."'";?>, <?php echo "'".$SPBCT3[0]["TENSP"]."'";?>, <?php echo "'".$SPBCT4[0]["TENSP"]."'";?>, <?php echo "'".$SPBCT5[0]["TENSP"]."'";?>, <?php echo "'".$SPBCT6[0]["TENSP"]."'";?>],
      datasets: [
        {
          label               : 'Amount',
          backgroundColor     : 'rgba(60,141,188,0.9)',
          borderColor         : 'rgba(60,141,188,0.8)',
          pointRadius          : false,
          pointColor          : '#3b8bba',
          pointStrokeColor    : 'rgba(60,141,188,1)',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(60,141,188,1)',
          data                : [<?php echo $SPBCT1[0]["SOLUONG"];?>, <?php echo $SPBCT2[0]["SOLUONG"];?>, <?php echo $SPBCT3[0]["SOLUONG"];?>, <?php echo $SPBCT4[0]["SOLUONG"];?>, <?php echo $SPBCT5[0]["SOLUONG"];?>, <?php echo $SPBCT6[0]["SOLUONG"];?>]
        },
      ]
    }
	var ChartData = $.extend(true, {}, barchart1)
	var temp0 = barchart1.datasets[0]
	ChartData.datasets[0] = temp0
    var stackedBarChartCanvas = $('#stackedBarChart1').get(0).getContext('2d')
    var stackedBarChartData = $.extend(true, {}, ChartData)

    var stackedBarChartOptions = {
      responsive              : true,
      maintainAspectRatio     : false,
      scales: {
        xAxes: [{
          stacked: true,
        }],
        yAxes: [{
          stacked: true
        }]
      }
    }

    new Chart(stackedBarChartCanvas, {
      type: 'bar',
      data: stackedBarChartData,
      options: stackedBarChartOptions
    })
    //-------------
    //- PIE CHART -
    //-------------
    // Get context with jQuery - using jQuery's .get() method.
    var pieChartCanvas = $('#pieChart').get(0).getContext('2d')
	var donutData1       = {
      labels: [
            <?php
		  foreach($TOP5SPBCTRONGNAM as $tp)
		  {
			   echo "'".$tp["TENSP"]."'";
			   echo ",";
		  }
		  ?>
      ],
      datasets: [
        {
          data: [
		  <?php
		  foreach($TOP5SPBCTRONGNAM as $tp)
		  {
			   echo $tp["SOLUONG"];
			   echo ",";
		  }
		  ?>
		  ],
          backgroundColor : ['#f56954', '#00a65a', '#f39c12', '#00c0ef', '#3c8dbc', '#d2d6de'],
        }
      ]
    }
    var pieData        = donutData1;
    var pieOptions     = {
      maintainAspectRatio : false,
      responsive : true,
    }
    //Create pie or douhnut chart
    // You can switch between pie and douhnut using the method below.
    new Chart(pieChartCanvas, {
      type: 'pie',
      data: pieData,
      options: pieOptions
    })

    //-------------
    //- BAR CHART 2-
    //-------------
      var barchart2 = {
      labels  : [<?php echo "'".$SPBCT7[0]["TENSP"]."'";?>, <?php echo "'".$SPBCT8[0]["TENSP"]."'";?>, <?php echo "'".$SPBCT9[0]["TENSP"]."'";?>, <?php echo "'".$SPBCT10[0]["TENSP"]."'";?>, <?php echo "'".$SPBCT11[0]["TENSP"]."'";?>, <?php echo "'".$SPBCT12[0]["TENSP"]."'";?>],
      datasets: [
        {
          label               : 'Amount',
          backgroundColor     : 'rgba(60,141,188,0.9)',
          borderColor         : 'rgba(60,141,188,0.8)',
          pointRadius          : false,
          pointColor          : '#3b8bba',
          pointStrokeColor    : 'rgba(60,141,188,1)',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(60,141,188,1)',
          data                : [<?php echo $SPBCT7[0]["SOLUONG"];?>, <?php echo $SPBCT8[0]["SOLUONG"];?>, <?php echo $SPBCT9[0]["SOLUONG"];?>, <?php echo $SPBCT10[0]["SOLUONG"];?>, <?php echo $SPBCT11[0]["SOLUONG"];?>, <?php echo $SPBCT12[0]["SOLUONG"];?>]
        },
      ]
    }
	var ChartData = $.extend(true, {}, barchart2)
	var temp0 = barchart2.datasets[0]
	ChartData.datasets[0] = temp0
    var stackedBarChartCanvas = $('#stackedBarChart2').get(0).getContext('2d')
    var stackedBarChartData = $.extend(true, {}, ChartData)

    var stackedBarChartOptions = {
      responsive              : true,
      maintainAspectRatio     : false,
      scales: {
        xAxes: [{
          stacked: true,
        }],
        yAxes: [{
          stacked: true
        }]
      }
    }

    new Chart(stackedBarChartCanvas, {
      type: 'bar',
      data: stackedBarChartData,
      options: stackedBarChartOptions
    })

    //---------------------
    //- STACKED BAR CHART -
    //---------------------
	var areaChartData3 = {
      labels  : ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'Septemper', 'October', 'November', 'December'],
      datasets: [
        {
          label               : 'Revenue',
          backgroundColor     : 'rgba(231, 76, 0,60)',
          borderColor         : 'rgba(60,141,188,0.8)',
          pointRadius          : false,
          pointColor          : '#e74c3c',
          pointStrokeColor    : 'rgba(60,141,188,1)',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(60,141,188,1)',
          data                : [
		  <?php
		  foreach($DOANHTHUTUNGTHANG as $tp)
		  {
			   echo $tp["DOANHTHU"];
			   if($tp["THANG"]!= 12)
			   echo ",";
		  }
		  ?>
		  ]
        },		
      ]
    }
	var ChartData = $.extend(true, {}, areaChartData3)
	var temp0 = areaChartData3.datasets[0]
	ChartData.datasets[0] = temp0
    var stackedBarChartCanvas = $('#stackedBarChart3').get(0).getContext('2d')
    var stackedBarChartData = $.extend(true, {}, ChartData)

    var stackedBarChartOptions = {
      responsive              : true,
      maintainAspectRatio     : false,
      scales: {
        xAxes: [{
          stacked: true,
        }],
        yAxes: [{
          stacked: true
        }]
      }
    }

    new Chart(stackedBarChartCanvas, {
      type: 'bar',
      data: stackedBarChartData,
      options: stackedBarChartOptions
    })
  })
</script>
</body>
</html>