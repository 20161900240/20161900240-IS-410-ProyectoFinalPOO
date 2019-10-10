
var meses = new Array("Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");
var diasSemana = new Array("Domingo", "Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado");
var f = new Date();
var hoy = diasSemana[f.getDay()] + ", " + f.getDate() + " de " + meses[f.getDay()] + " de " + f.getFullYear();
var ayer = diasSemana[f.getDay() - 1] + ", " + (f.getDate() - 1) + " de " + meses[f.getDay()] + " de " + f.getFullYear();
var anteAyer = diasSemana[f.getDay() - 2] + ", " + (f.getDate() - 2) + " de " + meses[f.getDay()] + " de " + f.getFullYear();
var anteAnteAyer = diasSemana[f.getDay() - 3] + ", " + (f.getDate() - 3) + " de " + meses[f.getDay()] + " de " + f.getFullYear();

am4core.useTheme(am4themes_animated);

var x = 50;
// create chart
var chart = am4core.createFromConfig({
  // Data
  "data":
    [
      
      {
        "Day": anteAnteAyer,
        "Venta": 10,
      },
      {
        "Day": anteAyer,
        "Venta": 40,
      },
      {
        "Day": ayer,
        "Venta": 28,
        "lineStroke": "3,3",
        "lineOpacity": 0.5
      },
      {
        "Day": hoy,
        "Venta": 5,
        "stroke": "3,3",
        "opacity": 0.5
      }
    ],

  // Category axis
  "xAxes":
    [
      {
        "type": "CategoryAxis",
        "renderer":
        {
          "grid":
          {
            "location": 0,
            "disabled": true
          }
        },
        "dataFields":
        {
          "category": "Day"
        }
      }
    ],

  // Value axis
  "yAxes": [
    {
      "type": "ValueAxis",
      "min": 0,
      "tooltip": {
        "disabled": true
      }
    }
  ],

  // Series
  "series":
    [
      {
        "id": "s1",
        "type": "ColumnSeries",
        "dataFields":
        {
          "categoryX": "Day",
          "valueY": "Venta"
        },
        "tooltipText": "Venta: {valueY.value}",
        "sequencedInterpolation": true,
        "columns": {
          "cornerRadiusTopLeft": 10,
          "cornerRadiusTopRight": 10,
          "strokeWidth": 1,
          "strokeOpacity": 1,
          "propertyFields": {
            "strokeDasharray": "stroke",
            "fillOpacity": "opacity"
          }
        }
      }
    ],
  "cursor": {
    "behavior": "none",
    "lineX": {
      "opacity": 0
    },
    "lineY": {
      "opacity": 0
    }
  }
},
  "grafico-venta-por-dia", "XYChart"
);
