@extends('layouts.main')
@section('css')
<link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/charts/apexcharts.css">
<link rel="stylesheet" type="text/css" href="../../../app-assets/css/plugins/charts/chart-apex.css">
@endsection
@section('content')
<div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper container-xxl p-0">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-start mb-0">Trips Analytics</h2>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">
                <div class="row">
                    <div class="col-xl-4 col-12">
                        <table class="table table-responsive">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Vehicle Model</th>
                                    <th>Total Trip</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($trips_per_car as $key => $veh)
                                <tr>
                                    <td>{{ $key +1 }}</td>
                                    <td>{{ $veh->vehice->model }}</td>
                                    <td><b>{{ $veh->total }}</b></td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!--div class="col-xl-6 col-12">
                        <div class="card">
                            <div class="card-header flex-column align-items-start">
                                <h4 class="card-title mb-75">Expense Ratio</h4>
                                <span class="card-subtitle text-muted">Spending on various categories </span>
                            </div>
                            <div class="card-body">
                                <div id="donut-chart"></div>
                            </div>
                        </div>
                    </div-->
                    <div class="col-xl-8 col-12">
                      <div id="donutchart" style="width: 900px; height: 500px;"></div>
                    </div>

                </div>
            </div>
        </div>
    </div>
  @endsection

  @section('js')

  <script src="../../../app-assets/vendors/js/charts/apexcharts.min.js"></script>
  <script src="https://code.highcharts.com/highcharts.js"></script>
  <script type="text/javascript">
    $(function () {
        'use strict';

        var flatPicker = $('.flat-picker'),
          isRtl = $('html').attr('data-textdirection') === 'rtl',
          chartColors = {
            column: {
              series1: '#826af9',
              series2: '#d2b0ff',
              bg: '#f8d3ff'
            },
            success: {
              shade_100: '#7eefc7',
              shade_200: '#06774f'
            },
            donut: {
              series1: '#ffe700',
              series2: '#00d4bd',
              series3: '#826bf8',
              series4: '#2b9bf4',
              series5: '#FFA1A1'
            },
            area: {
              series3: '#a4f8cd',
              series2: '#60f2ca',
              series1: '#2bdac7'
            }
          };

        var donutChartEl = document.querySelector('#donut-chart'),
          donutChartConfig = {
            chart: {
              height: 350,
              type: 'donut'
            },
            legend: {
              show: true,
              position: 'bottom'
            },
            labels: ['Operational', 'Networking', 'Hiring', 'R&D'],
            series: [85, 16, 50, 15, 35],
            colors: [
              chartColors.donut.series1,
              chartColors.donut.series5,
              chartColors.donut.series3,
              chartColors.donut.series2
            ],
            dataLabels: {
              enabled: true,
              formatter: function (val, opt) {
                return parseInt(val) + '%';
              }
            },
            plotOptions: {
              pie: {
                donut: {
                  labels: {
                    show: true,
                    name: {
                      fontSize: '2rem',
                      fontFamily: 'Montserrat'
                    },
                    value: {
                      fontSize: '1rem',
                      fontFamily: 'Montserrat',
                      formatter: function (val) {
                        return parseInt(val) + '%';
                      }
                    },
                    total: {
                      show: true,
                      fontSize: '1.5rem',
                      label: 'Operational',
                      formatter: function (w) {
                        return '31%';
                      }
                    }
                  }
                }
              }
            },
            responsive: [
              {
                breakpoint: 992,
                options: {
                  chart: {
                    height: 380
                  }
                }
              },
              {
                breakpoint: 576,
                options: {
                  chart: {
                    height: 320
                  },
                  plotOptions: {
                    pie: {
                      donut: {
                        labels: {
                          show: true,
                          name: {
                            fontSize: '1.5rem'
                          },
                          value: {
                            fontSize: '1rem'
                          },
                          total: {
                            fontSize: '1.5rem'
                          }
                        }
                      }
                    }
                  }
                }
              }
            ]
          };

        if (typeof donutChartEl !== undefined && donutChartEl !== null) {
          var donutChart = new ApexCharts(donutChartEl, donutChartConfig);
          donutChart.render();
        }


        new Vue({
        el: '#app',
        components: {
          apexchart: VueApexCharts,
        },
        data: {
          
          series: [44, 55, 41, 17, 15],
          chartOptions: {
            chart: {
              type: 'donut',
            },
            responsive: [{
              breakpoint: 480,
              options: {
                chart: {
                  width: 200
                },
                legend: {
                  position: 'bottom'
                }
              }
            }]
          },
          
          
        },
        
      })
    });
  </script>

  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Vehicle', 'Total Trips'],
          <?php echo($chartData) ?>
        ]);

        var options = {
          title: 'Trips Analytics',
          pieHole: 0.7,
        };

        var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
        chart.draw(data, options);
      }
    </script>

</script>
    @endsection






