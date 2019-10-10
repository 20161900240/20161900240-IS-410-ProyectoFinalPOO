// Set theme
am4core.useTheme(am4themes_animated);

var x = 50;
// create chart
var chart = am4core.createFromConfig({
    // Data
    "data":
     [
        {
          "month": "Enero",
          "Seguidores": x
        },
        {
          "month": "Febrero",
          "Seguidores": 30
        },
        {
          "month": "Marzo",
          "Seguidores": 34
        },
        {
          "month": "Abril",
            "Seguidores": 29
        },
        {
          "month": "Mayo",
          "Seguidores": 24
        },
        {
          "month": "Junio",
          "Seguidores": 20
        },
        {
          "month": "Julio",
          "Seguidores": 21
        },
        {
          "month": "Agosto",
          "Seguidores": 20
        },
        {
          "month": "Septiembre",
          "Seguidores": 20
        },
        {
          "month": "Octubre",
          "Seguidores": 20
        },
        {
          "month": "Noviembre",
          "Seguidores": 28,
        // "lineStroke": "3,3",
        // "lineOpacity": 0.5
        },
        {
          "month": "Diciembre",
          "Seguidores": 1,
        // "stroke": "3,3",
        // "opacity": 0.5
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
            "category": "month"
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
            "categoryX": "month",
            "valueY": "Seguidores"
           },
           "tooltipText": "Seguidores: {valueY.value}",
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
  "grafico-seguidores", "XYChart"
);

