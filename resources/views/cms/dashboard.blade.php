@php
    $dataPoints = array(
	array("x" => 946665000000, "y" => 3289000),
	array("x" => 978287400000, "y" => 3830000),
	array("x" => 1009823400000, "y" => 2009000),
	array("x" => 1041359400000, "y" => 2840000),
	array("x" => 1072895400000, "y" => 2396000),
	array("x" => 1104517800000, "y" => 1613000),
	array("x" => 1136053800000, "y" => 1821000),
	array("x" => 1167589800000, "y" => 2000000),
	array("x" => 1199125800000, "y" => 1397000),
	array("x" => 1230748200000, "y" => 2506000),
	array("x" => 1262284200000, "y" => 6704000),
	array("x" => 1293820200000, "y" => 5704000),
	array("x" => 1325356200000, "y" => 4009000),
	array("x" => 1356978600000, "y" => 3026000),
	array("x" => 1388514600000, "y" => 2394000),
	array("x" => 1420050600000, "y" => 1872000),
	array("x" => 1451586600000, "y" => 2140000)
 );
@endphp

<script>
  window.onload = function () {
   
  var chart = new CanvasJS.Chart("chartContainer", {
    animationEnabled: true,
    title:{
      text: "Company Revenue by Year"
    },
    axisY: {
      title: "Revenue in USD",
      valueFormatString: "#0,,.",
      suffix: "mn",
      prefix: "$"
    },
    data: [{
      type: "spline",
      markerSize: 5,
      xValueFormatString: "YYYY",
      yValueFormatString: "$#,##0.##",
      xValueType: "dateTime",
      dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
    }]
  });
   
  chart.render();
   
  }
  </script>

@extends('cms.cms_master')

@section('cms_content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Dashboard</h1>
</div>

              
<div class="row">
    <div class="col-12">
      <div id="chartContainer" style="height: 370px; width: 100%;"></div>
      <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
    </div>
</div>

@endsection