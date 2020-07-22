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
                <div class="container">
                  <div class="row">
                    <div class="col text-center">
                      <table border="0" style="margin:auto; margin-top:auto; margin-bottom:auto; height:15px;">
                        <tr>
                          <td valign="middle"><div class="square" style="background-color: green;"></div></td>
                          <td valign="middle"><p style="margin:auto; font-size:15px;">0 - 50 &nbsp; : &nbsp; Baik</p></td>
                        </tr>
                      </table>
                    </div>
                    <div class="col text-center">
                      <table style="margin:auto; margin-top:auto; margin-bottom:auto; height:15px;">
                        <tr>
                          <td valign="middle"><div class="square" style="background-color: blue;"></div></td>
                          <td valign="middle"><p style="margin:auto; font-size:15px;">51 - 100 &nbsp; : &nbsp; Sedang</p></td>
                        </tr>
                        </table>
                    </div>
                    <div class="col text-center">
                      <table style="margin:auto; margin-top:auto; margin-bottom:auto; height:15px;">
                        <tr>
                          <td valign="middle"><div class="square" style="background-color: yellow;"></div></td>
                          <td valign="middle"><p style="margin:auto; font-size:15px;">101 - 199 &nbsp; : &nbsp; Tidak sehat</p></td>
                        </tr>
                      </table>
                    </div>
                    <div class="col text-center">
                      <table style="margin:auto; margin-top:auto;margin-bottom:auto;">
                        <tr>
                          <td valign="middle"><div class="square" style="background-color: red;"></div></td>
                          <td valign="middle"><p style="margin:auto; font-size:15px;">200 - 299 &nbsp; : &nbsp; Sangat tidak sehat</p></td>
                        </tr>
                      </table>
                    </div>
                    <div class="col text-center">
                      <table style="margin:auto; margin-top:auto; margin-bottom:auto; height:15px;">
                        <tr>
                          <td valign="middle"><div class="square" style="background-color: black;"></td>
                          <td valign="middle"><p style="margin:auto; font-size:15px;">300 - lebih &nbsp; : &nbsp; Berbahaya</p></td>
                        </tr>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
          </div>
          <!-- /.col (RIGHT) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    
      
    </section>

    <style>
      .square{
          width: 10px;
          height: 10px;
          border-radius: 0.1rem;
      }
    </style>
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
        // variable PM10
        var PM  = 'PM'
        var satu = "\u2081" //unicode 1
        var nol = "\u2080"  //unicode 0
        var PM10 = PM+satu+nol

        // variable SO2
        var SO = 'SO'
        var dua= '\u2082' //unicode 2
        var SO2= SO+dua

        // variable CO2
        var CO = 'CO'
        var two= '\u2082' //unicode 2
        var CO2=  CO+two

        // variable O3
        var O = "O"
        var tiga = "\u2083" //unicode 3
        var O3 = O+tiga

        // variable NO2
        var NO = "NO"
        var loro = "\u2082" //unicode 2
        var NO2 = NO+loro

        var areaChartData = {
          labels  : [ PM10, SO2, CO2, O3, NO2],
          datasets: [
            {
              label               : 'partikulat udara',
              backgroundColor     : 'rgba(50, 168, 82)',
              borderColor         : 'rgba(50, 168, 82)',
              pointRadius         : false,
              pointColor          : '#3b8bba',
              pointStrokeColor    : 'rgba(60,141,188,1)',
              pointHighlightFill  : '#fff',
              pointHighlightStroke: 'rgba(60,141,188,1)',
              data                : [{{ $data->payloadtotal }}, 100, 199, 299, 330]
            }
          ]
        }
    
    
        //-------------
        //- BAR CHART -
        //-------------
        var barChartCanvas = $('#barChart').get(0).getContext('2d')
        var barChartData = jQuery.extend(true, {}, areaChartData)
        var temp0 = areaChartData.datasets[0]
        barChartData.datasets[0] = temp0
    
        var barChartOptions = {
          responsive              : true,
          maintainAspectRatio     : false,
          datasetFill             : false,
          scales: {
              yAxes: [{
                display: true,
                stacked: true,
                ticks: {
                  min : 0,
                  max : 500,
                  stepSize : 100
                }
              }],
              xAxes: [{
                barPercentage: 0.4
              }]
          }

        }
    
        var barChart = new Chart(barChartCanvas, {
          type: 'bar', 
          data: barChartData,
          options: barChartOptions
        })
      })
    </script>
@endsection