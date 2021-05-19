<script>
    var options = {
        series: [{
        name: 'Degrés',
        data: vals
      }],
        chart: {
        height: 350,
        type: 'line',
      },
      stroke: {
        width: 7,
        curve: 'smooth'
      },
      xaxis: {
        type: 'datetime',
        categories: dates,
        tickAmount: 12,
        labels: {
          formatter: function(value, timestamp, opts) {
            return opts.dateFormatter(new Date(timestamp), 'dd MMM')
          }
        }
      },
      fill: {
        type: 'gradient',
        gradient: {
          shade: 'dark',
          gradientToColors: [ '#FDD835'],
          shadeIntensity: 1,
          type: 'horizontal',
          opacityFrom: 1,
          opacityTo: 1,
          stops: [0, 100, 100, 100]
        },
      },
      markers: {
        size: 4,
        colors: ["#FFA41B"],
        strokeColors: "#fff",
        strokeWidth: 2,
        hover: {
          size: 7,
        }
      },
      yaxis: {
        min: -10,
        max: 40,
        title: {
          text: 'Température',
        },
      }
      };
    
      var chart = new ApexCharts(document.querySelector("#temp"), options);
      chart.render();
    
</script>