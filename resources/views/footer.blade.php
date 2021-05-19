<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>

<script>

    var valeurs=[];
    var times = [];
    vals.forEach(getVals);
    dates.forEach(getDays);
    
    function getVals(item, index) {
        valeurs.push(item.valeur);
    }

    function getDays(item, index){
        
        let t= item.date;
        times.push(t);
    }

    console.log(dates);
    var optionss = {
        series: [{
          name: "PH",
          data: vals
      }],
        chart: {
        height: 350,
        type: 'line',
        zoom: {
          enabled: false
        }
      },
      dataLabels: {
        enabled: false
      },
      stroke: {
        curve: 'straight'
      },
      grid: {
        row: {
          colors: ['#f3f3f3', 'transparent'], // takes an array which will be repeated on columns
          opacity: 0.5
        },
      },
      xaxis: {
        categories: dates,
      }
      };
      
      var chartt = new ApexCharts(document.querySelector("#ph"), optionss);
      chartt.render();
      

</script>