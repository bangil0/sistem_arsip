





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



var chart = AmCharts.makeChart( "chartdiv", {
  "type": "serial",
  "theme": "light",
  "titles": [{
    "text": "Data Transaksi Arsip"
  }, {
    "text": "Sistem Informasi Arsip",
    "bold": false
  }],

  "dataProvider": [ {
      "total": bundle.total,
      "bulan": bundle.bulan
  },
  //foreach
  // for (var i = 0; i < bundle.length; i++) { 
  //     {
  //       "country": bundle[i],
  //       "visits": bundle[i]
  //     }
  //    console.log(bundle[i]);
  // }
  //end foreach
  ],

  "gridAboveGraphs": true,
  "startDuration": 1,
  "graphs": [ {
    "balloonText": "[[category]]: <b>[[value]]</b>",
    "fillAlphas": 0.8,
    "lineAlpha": 0.2,
    "type": "column",
    "valueField": "bulan"
  } ],
  "chartCursor": {
    "categoryBalloonEnabled": false,
    "cursorAlpha": 0,
    "zoomable": false
  },
  "categoryField": "total",
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
            <div id="chartdiv" style="width: 640px; height: 400px;"></div>
        </div>
    </div><!-- /.row -->

    </div><!-- /.row -->

    </body>
</html>
