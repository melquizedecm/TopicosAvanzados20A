<script src="canvasjs.min.js"></script>
<script>
window.onload = function() {

var chart = new CanvasJS.Chart("chartContainer", {
  animationEnabled: true,
  title: {
    text: "Ventas anuales"
  },
  data: [{
    type: "pie",
    startAngle: 440,
    yValueFormatString: "##0.00\"%\"",
    indexLabel: "{label} {y}",
    dataPoints: [
      {y: 8.33, label: "Enero"},
      {y: 8.33, label: "Febrero"},
      {y: 8.33, label: "Marzo"},
      {y: 8.33, label: "Abril"},
      {y: 8.33, label: "Mayo"},
      {y: 8.33, label: "Junio"},
      {y: 8.33, label: "Julio"},
      {y: 8.33, label: "Agosto"},
      {y: 8.33, label: "Septiembre"},
      {y: 8.33, label: "Octubre"},
      {y: 8.33, label: "Noviembre"},
      {y: 8.33, label: "Diciembre"}
    ]
  }]
});
chart.render();

}
</script>

   <a class="nav-link" href="#collapseExample" data-toggle="collapse" ria-expanded="true">Ventas <span class="sr-only">(current)</span></a>

      
<div class="collapse" id="collapseExample">
  <div id="chartContainer" style="height: 410px; max-width: 920px; margin: 0px auto;">
    
    </div>
  
</div>