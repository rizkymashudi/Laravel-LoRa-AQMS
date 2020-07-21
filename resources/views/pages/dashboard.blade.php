@extends('index')

@section('content')
     <!-- Content Header (Page header) -->
     <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0 text-dark">Air Quality Monitoring System LoRa</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                <li class="breadcrumb-item active"> AQMS LoRa</li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>

    <!-- Main content -->
    <section class="content">

      <div class="container-fluid">
        <div class="row">
          <!-- /.col (LEFT) -->
          <div class="col">

            <!-- BAR CHART -->
            <div class="card card-dark">
              <div class="card-header">
                <h3 class="card-title">Grafik ISPU</h3>
                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                </div>
              </div>
              <div class="card-body">
                <div class="chart">
                  <canvas id="barChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
          </div>
          <!-- /.col (RIGHT) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
      
      <div>
        <canvas id="myChart" width="400" height="400"></canvas>
      </div>
      
    </section>

    <script>
      var ctx     = document.getElementById('myChart');
      var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
          labels : ['PM10', 'SO2', 'CO2', 'O3', 'NO2'],
          datasets: [{
            label: 'ispu',
            data: [0, 50, 100, 199, 299, 500],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
          }]
        },
        options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
          }
        }
      })
    </script>

    <script>
      $(function () {
        /* ChartJS
         * -------
         * Here we will create a few charts using ChartJS
         */
    
        //--------------
        //- AREA CHART -
        //--------------
    
        // Get context with jQuery - using jQuery's .get() method.
    
        var areaChartData = {
          labels  : ['PM10', 'SO2', 'CO2', 'O3', 'NO2'],
          datasets: [
            {
              backgroundColor     : 'rgba(60,141,188,0.9)',
              borderColor         : 'rgba(60,141,188,0.8)',
              pointRadius          : false,
              pointColor          : '#3b8bba',
              pointStrokeColor    : 'rgba(60,141,188,1)',
              pointHighlightFill  : '#fff',
              pointHighlightStroke: 'rgba(60,141,188,1)',
              data                : [0, 50, 100, 199, 299, 500]
            },
            // {
            //   label               : 'Electronics',
            //   backgroundColor     : 'rgba(210, 214, 222, 1)',
            //   borderColor         : 'rgba(210, 214, 222, 1)',
            //   pointRadius         : false,
            //   pointColor          : 'rgba(210, 214, 222, 1)',
            //   pointStrokeColor    : '#c1c7d1',
            //   pointHighlightFill  : '#fff',
            //   pointHighlightStroke: 'rgba(220,220,220,1)',
            //   data                : [65, 59, 80, 81, 56, 55, 40]
            // },
          ]
        }
    
    
        //-------------
        //- BAR CHART -
        //-------------
        var barChartCanvas = $('#barChart').get(0).getContext('2d')
        var barChartData = jQuery.extend(true, {}, areaChartData)
        var temp0 = areaChartData.datasets[0]
        barChartData.datasets[1] = temp0
    
        var barChartOptions = {
          responsive              : true,
          maintainAspectRatio     : false,
          datasetFill             : false
        }
    
        var barChart = new Chart(barChartCanvas, {
          type: 'bar', 
          data: barChartData,
          options: barChartOptions
        })
      })
    </script>
@endsection