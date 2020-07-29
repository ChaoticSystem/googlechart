<?php

$oposicionalgobierno = [
    "oposicion" => "oposicion idiota que no sabe como tumbar a maduro",
    "number" => "50",
];

$socialistascomemierda = [
    "socialista" => "socialistas come mierda",
    "number" => "20",
];


$guardianacionaljalabola = [
    "guardia" => "guardia nacional jalabola",
    "number" => "30",
];


$loscarevergasquepiensanqueuns3minivale100dolares = [
    "loscarevergasquepiensanqueuns3minivale100dolares" => "los carevergas que piensan que un s3 mini vale 100d olares",
    "number" => "30",
];


$lagentequequieresalirdelpais = [
    "lagentequequieresalirdelpais" => "la gente que quiere salir del pais",
    "number" => "30",
];


?>


<html lang="es">
  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cronoa2.0 - Estadisticas </title>
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" media="screen">
    <script type="text/javascript" src="jquery-1.11.1.min.js"></script>
	<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

	
</head>

<script type="text/javascript">
google.charts.load('current',{'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);
function drawChart()
{
var data = google.visualization.arrayToDataTable([

['Tipo', 'Number'],
<?php

echo "['".$oposicionalgobierno["oposicion"]."', ".$oposicionalgobierno["number"]."],  ";
echo "['".$socialistascomemierda["socialista"]."', ".$socialistascomemierda["number"]."],  ";
echo "['".$guardianacionaljalabola["guardia"]."', ".$guardianacionaljalabola["number"]."],  ";
echo "['".$loscarevergasquepiensanqueuns3minivale100dolares["loscarevergasquepiensanqueuns3minivale100dolares"]."', ".$guardianacionaljalabola["number"]."],  ";
echo "['".$lagentequequieresalirdelpais["lagentequequieresalirdelpais"]."', ".$guardianacionaljalabola["number"]."],  ";


?>
  ]);
var options = {
  title:'Como veo a mi pais',
  is3D: true,
};

var chart =new  google.visualization.PieChart(document.getElementById('piechart'));

chart.draw(data, options);

function selectHandler() {
          var selectedItem = chart.getSelection()[0];
          if (selectedItem) {
            var topping = data.getValue(selectedItem.row,0);
            var topping2 = data.getValue(selectedItem.row,1);
            alert('Eventos de tipo:' + ' '+ topping+ ' existen registrados' +topping2 );
          }
        }

        google.visualization.events.addListener(chart, 'select', selectHandler);    
        chart.draw(data, options);
      
}

</script>

</head>
<body>
<div style="width:100%;"  >
<h3 align="center">Ejemplo</h3>
<div id="piechart" style="width:1500px; height:1000px;"></div>

</div>


</body>

</html>

	
	
	
