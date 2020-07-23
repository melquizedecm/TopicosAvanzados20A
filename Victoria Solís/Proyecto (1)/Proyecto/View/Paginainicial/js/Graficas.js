/* 
5. Ventas totales del día, mes, año (Con gráfico)
6. Ganancias del día, mes, año (Con gráficos)
*/

// Use Morris.Bar
new Morris.Bar({
  //Identificación (ID) del elemento en el que dibujar el gráfico.
  element: 'ventasAnio',
  // Registros de datos de gráficos: cada entrada en esta matriz corresponde a un punto en
  // el gráfico.
  data: [
    { x : '2015' , TC : 13452 , B : 13291, E : 11517, TR : 13051, FC : 13476, BM : 12256 },   
    { x : '2016' , TC : 12637 , B : 13547, E : 13134, TR : 11235, FC : 15436, BM : 12312  },   
    { x : '2017' , TC : 15231 , B : 15266, E : 16622, TR : 18114, FC : 12563, BM : 13536  },   
    { x : '2018' , TC : 16342 , B : 15572, E : 16343, TR : 16154, FC : 13434, BM : 16324  },   
    { x : '2019' , TC : 18134 , B : 16234, E : 16535, TR : 14553, FC : 14646, BM : 14636  },   
    { x : '2020' , TC : 10233 , B : 18422, E : 15122, TR : 14363, FC : 14323, BM : 12422  }  
  ],
  // El nombre del atributo de registro de datos que contiene valores x.
  xkey: 'x',
  // Una lista de nombres de atributos de registro de datos que contienen valores y.
  ykeys: ['TC', 'B', 'E', 'TR', 'FC', 'BM'],
  labels: ['TC', 'B', 'E', 'TR', 'FC', 'BM'],
  barColors: function (row, series, type) {
    if (type === 'bar') {
      //Se maneja el tipo de color de la Gráfica. 
      var green = Math.ceil(38 * row.y / this.ymax);
      return 'rgb(' + green + ',135,12)';
    }
    else {
      return '#0000';
    }
  }, 
  resize: true
});
  /*
  // Etiquetas para los ykeys: se mostrarán al pasar el mouse sobre el
  // gráfico.
  labels: ['Value'],
  resize: true
});
*/

// Usa Morris.Area en lugar de Morris.Line
Morris.Area({
  element : 'ventasMes' , 
  data : [ 
    { x : '2015-02-24' , TC : 3324 , B : 4563, E : 2570, TR : 2300, FC : 3236, BM : 2220 },   
    { x : '2016-03-24' , TC : 5124 , B : 2345, E : 4150, TR : 5450, FC : 1885, BM : 4234 },   
    { x : '2017-04-24' , TC : 1124 , B : 2435, E : 3250, TR : 6850, FC : 1637, BM : 3426 },   
    { x : '2018-05-24' , TC : 1234 , B : 3456, E : 5350, TR : 1723, FC : 1074, BM : 5629 },   
    { x : '2019-06-24' , TC : 4574 , B : 3740, E : 6512, TR : 5140, FC : 5076, BM : 2352 },   
    { x : '2020-07-24' , TC : 2788 , B : 3457, E : 2232, TR : 3670, FC : 2678, BM : 6372 }   
  ],
  xkey: 'x',
  ykeys: ['TC', 'B', 'E', 'TR', 'FC', 'BM'],
  labels: ['TC', 'B', 'E', 'TR', 'FC', 'BM'],
  resize: true
});

Morris.Donut({
  element: 'ventasDia',
  data: [
    {value: 15, label: 'TACOS', formatted: 'al menos 15%' },
    {value: 10, label: 'BURRITACO', formatted: 'aprox. 10%' },
    {value: 20, label: 'ENSALADA', formatted: 'aprox. 20%' },
    {value: 30, label: 'TORTA', formatted: 'al menos 30%' },
    {value: 10, label: 'FRIJOLES CHARROS', formatted: 'al menos 10%' },
    {value: 15, label: 'BURRITACOS MINIS', formatted: 'al menos 15%' }
  ],
  resize: true,
  formatter: function (x, data) { return data.formatted; }
}); 




//####################################################################################################




Morris.Bar({
  //Identificación (ID) del elemento en el que dibujar el gráfico.
  element: 'gananciasAnio',
  // Registros de datos de gráficos: cada entrada en esta matriz corresponde a un punto en
  // el gráfico.
  data: [
    { x : '2015' , TC : 3 , B : 7, E : 57, TR : 30, FC : 36, BM : 20 },   
    { x : '2016' , TC : 3 , B : 4, E : 15, TR : 45, FC : 85, BM : 7  },   
    { x : '2017' , TC : 5 , B : 1, E : 25, TR : 85, FC : 46, BM : 26  },   
    { x : '2018' , TC : 2 , B : 5, E : 35, TR : 23, FC : 10, BM : 9  },   
    { x : '2019' , TC : 8 , B : 2, E : 65, TR : 14, FC : 5, BM : 2  },   
    { x : '2020' , TC : 4 , B : 4, E : 22, TR : 67, FC : 2, BM : 72  }  
  ],
  // El nombre del atributo de registro de datos que contiene valores x.
  xkey: 'x',
  // Una lista de nombres de atributos de registro de datos que contienen valores y.
  ykeys: ['TC', 'B', 'E', 'TR', 'FC', 'BM'],
  labels: ['TC', 'B', 'E', 'TR', 'FC', 'BM'],
  barColors: function (row, series, type) {
    if (type === 'bar') {
      //Se maneja el tipo de color de la Gráfica. 
      var green = Math.ceil(38 * row.y / this.ymax);
      return 'rgb(' + green + ',135,12)';
    }
    else {
      return '#0000';
    }
  }, 
  resize: true
});

// Usa Morris.Area en lugar de Morris.Line
Morris.Area({
  element : 'gananciasMes' , 
  data : [ 
    { x : '2015-02-24' , TC : 3 , B : 7, E : 57, TR : 30, FC : 36, BM : 20 },   
    { x : '2016-03-24' , TC : 3 , B : 4, E : 15, TR : 45, FC : 85, BM : 7  },   
    { x : '2017-04-24' , TC : 5 , B : 1, E : 25, TR : 85, FC : 46, BM : 26  },   
    { x : '2018-05-24' , TC : 2 , B : 5, E : 35, TR : 23, FC : 10, BM : 9  },   
    { x : '2019-06-24' , TC : 8 , B : 2, E : 65, TR : 14, FC : 5, BM : 2  },   
    { x : '2020-07-24' , TC : 4 , B : 4, E : 22, TR : 67, FC : 2, BM : 72  }   
  ],
  xkey: 'x',
  ykeys: ['TC', 'B', 'E', 'TR', 'FC', 'BM'],
  labels: ['TC', 'B', 'E', 'TR', 'FC', 'BM'],
  resize: true
});

Morris.Donut({
  element: 'gananciasDia',
  data: [
    {value: 15, label: 'TACOS', formatted: 'al menos 15%' },
    {value: 10, label: 'BURRITACO', formatted: 'aprox. 10%' },
    {value: 20, label: 'ENSALADA', formatted: 'aprox. 20%' },
    {value: 30, label: 'TORTA', formatted: 'al menos 30%' },
    {value: 10, label: 'FRIJOLES CHARROS', formatted: 'al menos 10%' },
    {value: 15, label: 'BURRITACOS MINIS', formatted: 'al menos 15%' }
  ],
  resize: true,
  formatter: function (x, data) { return data.formatted; }
});
//**********************************************************************