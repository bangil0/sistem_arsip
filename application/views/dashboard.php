





<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8"> 
        <meta charset="utf-8">
        <!-- favicon -->
        <link rel="shortcut icon" href="<?php echo base_url(); ?>asset/img/favicon.png" />
        <title>Arsip Kegiatan Login</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

        <script src="https://www.amcharts.com/lib/3/amcharts.js"></script>
<script src="https://www.amcharts.com/lib/3/serial.js"></script>
<script src="https://www.amcharts.com/lib/3/plugins/export/export.min.js"></script>
<link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
<script src="https://www.amcharts.com/lib/3/themes/light.js"></script>              
<script type="text/javascript">
var bundle = <?php echo json_encode($chart1); ?>;
console.log(bundle);
var count = Object.keys(bundle).length;
console.log("count "+count);

function generateData() {
  var dataProvider = [];
  for ( var i = 0; i < count; i++ ) {
    dataProvider.push( {
      "total": bundle[i].total,
      "bulan": bundle[i].bulan
    } );
  }
  return dataProvider;
}

// for (var i = 0; i < count; i++) { 

var chart = AmCharts.makeChart( "chartdiv", {
  "type": "serial",
  "theme": "light",
  "titles": [{
    "text": "Data Transaksi Arsip Per Bulan"
  }, {
    "text": "Sistem Informasi Arsip",
    "bold": false
  }],
  "dataProvider": generateData(),

  "gridAboveGraphs": true,
  "startDuration": 1,
  "graphs": [ {
    "balloonText": "[[category]]: <b>[[value]]</b>",
    "fillAlphas": 0.8,
    "lineAlpha": 0.2,
    "type": "column",
    "valueField": "total"
  } ],
  "chartCursor": {
    "categoryBalloonEnabled": false,
    "cursorAlpha": 0,
    "zoomable": false
  },
  "categoryField": "bulan",
  "categoryAxis": {
    "gridPosition": "start",
    "gridAlpha": 0,
    "tickPosition": "start",
    "tickLength": 20
  },
  "export": {
    "enabled": true
  }

} );
</script>
    
    </head>
    <body>
      <div id="page-wrapper">

    <div class="row">
        <div class="col-lg-12">
            <h1>Dashboard</h1>
            <ol class="breadcrumb">
                <li class="active"><i class="fa fa-dashboard fa-fw"></i>Dashboard</li>
            </ol>
            <div class="alert alert-success alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                Selamat Datang <b><?php echo $pengguna->userNamaLengkap; ?></b> di <a class="alert-link" href="#">Sistem Informasi Pengelolaan Arsip</a> 
            </div>
            
            <div class="center-block" id="chartdiv" style="width: 840px; height: 400px;"></div>
            
            
        </div>
    </div><!-- /.row -->

    </div><!-- /.row -->

    </body>
</html>
