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
                <h3 class="card-title">Grafik Index Standar Pencemaran Udara (ISPU)</h3>
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

            <div class="row">
              <div class="col-md-6">
                <!-- MAP -->
                <div class="card card-dark">
                  <div class="card-header">
                    <h3 class="card-title">Lokasi Sensor</h3>
                    <div class="card-tools">
                      <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                    </div>
                  </div>
                  <div class="card-body">
                    <div class="map">
                      <div class="border border-dark" id="map" style="width: auto; height: 274px;"></div>
                    </div>
                  </div>
                </div>

              </div>
              <div class="col-md-6">
                <!-- GRAFIK PM10 -->
                <div class="card card-dark">
                  <div class="card-header">
                    <h3 class="card-title">Grafik PM<sub>10</sub></h3>
                    <div class="card-tools">
                      <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                    </div>
                  </div>
                  <div class="card-body">
                    <div class="chart">
                      <canvas id="lineChartPM" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                    </div>
                    <div class="container">
                      <div class="row">
                        <div class="col text-center">
                          <table border="0" style="margin:auto; margin-top:auto; margin-bottom:auto; height:15px;">
                            <tr>
                              <td valign="middle"><p style="margin:auto; font-size:15px;">Particulate Matter, PM<sub>10</sub> (Periode Pengukuran Rata-rata 24 Jam) &#181;g / m<sup>3</sup></p></td>
                            </tr>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- /.card-body -->
                </div>
                <!-- END GRAFIK PM10 -->
              </div>
            </div>
            

            <!-- GRAFIK PER PARTIKULAT -->
            <div class="row">
              <div class="col-md-6">
                <!-- GRAFIK SO2 -->
                <div class="card card-dark">
                  <div class="card-header">
                    <h3 class="card-title">Grafik SO<sub>2</sub></h3>
                    <div class="card-tools">
                      <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                    </div>
                  </div>
                  <div class="card-body">
                    <div class="chart">
                      <canvas id="lineChartSO" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                    </div>
                    <div class="container">
                      <div class="row">
                        <div class="col text-center">
                          <table border="0" style="margin:auto; margin-top:auto; margin-bottom:auto; height:15px;">
                            <tr>
                              <td valign="middle"><p style="margin:auto; font-size:15px;">Sulfur Dioksida, SO<sub>2</sub> (Periode Pengukuran Rata-rata 24 Jam) &#181;g / m<sup>3</sup></p></td>
                            </tr>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- END GRAFIK SO2 -->
              </div>

              <div class="col-md-6">
                <!-- GRAFIK CO2 -->
                <div class="card card-dark">
                  <div class="card-header">
                    <h3 class="card-title">Grafik CO<sub>2</sub></h3>
                    <div class="card-tools">
                      <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                    </div>
                  </div>
                  <div class="card-body">
                    <div class="chart">
                      <canvas id="lineChartCO" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                    </div>
                    <div class="container">
                      <div class="row">
                        <div class="col text-center">
                          <table border="0" style="margin:auto; margin-top:auto; margin-bottom:auto; height:15px;">
                            <tr>
                              <td valign="middle"><p style="margin:auto; font-size:15px;">Carbon monoksida, CO<sub>2</sub> (Periode Pengukuran Rata-rata 8 Jam) &#181;g / m<sup>3</sup></p></td>
                            </tr>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- END GRAFIK CO2 -->
              </div>

              <div class="col-md-6">
                <!-- GRAFIK O3 -->
                <div class="card card-dark">
                  <div class="card-header">
                    <h3 class="card-title">Grafik O<sub>3</sub></h3>
                    <div class="card-tools">
                      <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                    </div>
                  </div>
                  <div class="card-body">
                    <div class="chart">
                      <canvas id="lineChartO" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                    </div>
                    <div class="container">
                      <div class="row">
                        <div class="col text-center">
                          <table border="0" style="margin:auto; margin-top:auto; margin-bottom:auto; height:15px;">
                            <tr>
                              <td valign="middle"><p style="margin:auto; font-size:15px;">Ozon, O<sub>3</sub> (Periode Pengukuran Rata-rata 1 Jam) &#181;g / m<sup>3</sup></p></td>
                            </tr>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- END GRAFIK O3 -->
              </div>
              
              <div class="col-md-6">
                <!-- GRAFIK NO2 -->
                <div class="card card-dark">
                  <div class="card-header">
                    <h3 class="card-title">Grafik NO<sub>2</sub></h3>
                    <div class="card-tools">
                      <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                    </div>
                  </div>
                  <div class="card-body">
                    <div class="chart">
                      <canvas id="lineChartNO" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                    </div>
                    <div class="container">
                      <div class="row">
                        <div class="col text-center">
                          <table border="0" style="margin:auto; margin-top:auto; margin-bottom:auto; height:15px;">
                            <tr>
                              <td valign="middle"><p style="margin:auto; font-size:15px;">Nitrogen Dioksida, NO<sub>2</sub> (Periode Pengukuran Rata-rata 1 Jam) &#181;g / m<sup>3</sup></p></td>
                            </tr>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- END GRAFIK NO2 -->
              </div>

            </div>

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

      var chartColors = {
        color1: 'rgba(0, 128, 0)',    //green
        color2: 'rgba(0, 0, 255)',    //blue
        color3: 'rgba(255, 255, 0)',  //yellow
        color4: 'rgba(255, 0, 0)',    //red
        color5: 'rgba(0, 0, 0)'       //black
      };

      $(function () {
        /* ChartJS
         * -------
         * Here we will create a few charts using ChartJS
         */

        //------------------
        //- BAR CHART ISPU -
        //------------------
    
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
          labels  : [ PM10, SO2, CO2, O3, NO2 ],
          datasets: [
            {
              label               : 'partikulat udara',
              backgroundColor     : ["#008000", "#008000","#008000","#008000","#008000"],
              borderColor         : 'rgba(0, 0, 0)',
              pointRadius         : false,
              pointColor          : '#3b8bba',
              pointStrokeColor    : 'rgba(60,141,188,1)',
              pointHighlightFill  : '#fff',
              pointHighlightStroke: 'rgba(60,141,188,1)',
              data                : [330, 150, 70, 20, {{ $data->payloadtotal }}]
            }
          ]
        }
    
        var barChartCanvas = $('#barChart').get(0).getContext('2d')
        var barChartData = jQuery.extend(true, {}, areaChartData)
        var temp0 = areaChartData.datasets[0]
        barChartData.datasets[0] = temp0
        
        
        
        var barChartOptions = {
          responsive              : true,
          maintainAspectRatio     : false,
          datasetFill             : false,
          legend:{
            display : false
          },
          scales: {
              yAxes: [{
                display: true,
                stacked: true,
                ticks: {
                  min : 0,
                  max : 500,
                  stepSize : 100
                },
                scaleLabel: {
                  display: true,
                  labelString: 'ISPU'
                }
              }],
              xAxes: [{
                barPercentage: 0.4
              }]
          },
          annotation: {
              annotations: [{
                id: 'hline2',
                type: 'line',
                mode: 'horizontal',
                scaleID: 'y-axis-0',
                value: '51',
                borderColor: 'rgba(0, 0, 255)',
                borderWidth: 1,
                // label: {
                //   xAdjust: 2,
                //   content: "Sedang",
                //   fontColor: "#acacac",
                //   fontSize: 9,
                //   backgroundColor: "white",
                //   position: 'left',
                //   enabled: true,
                // }
              }, {
                id: 'hline3',
                type: 'line',
                mode: 'horizontal',
                scaleID: 'y-axis-0',
                value: '101',
                borderColor: 'rgba(255, 255, 0)',
                borderWidth: 1,
                // label: {
                //   xAdjust: 2,
                //   content: "Tidak sehat",
                //   fontColor: "#acacac",
                //   fontSize: 9,
                //   backgroundColor: "white",
                //   position: 'left',
                //   enabled: true,
                // }
              }, {
                id: 'hline4',
                type: 'line',
                mode: 'horizontal',
                scaleID: 'y-axis-0',
                value: '200',
                borderColor: 'rgba(255, 0, 0)',
                borderWidth: 1,
                // label: {
                //   xAdjust: 2,
                //   content: "Sangat tidak sehat",
                //   fontColor: "#acacac",
                //   fontSize: 9,
                //   backgroundColor: "white",
                //   position: 'left',
                //   enabled: true,
                // }
              },  {
                id: 'hline5',
                type: 'line',
                mode: 'horizontal',
                scaleID: 'y-axis-0',
                value: '300',
                borderColor: 'rgba(0, 0, 0)',
                borderWidth: 2,
                // label: {
                //   xAdjust: 2,
                //   content: "BERBAHAYA!",
                //   fontColor: "#acacac",
                //   fontSize: 9,
                //   backgroundColor: "white",
                //   position: 'left',
                //   enabled: true,
                // }
              }
              
              ],
              drawTime: "afterDraw" // (default)
          }

        }

    
        var barChart = new Chart(barChartCanvas, {
          type: 'bar', 
          data: barChartData,
          options: barChartOptions,
        })



        var dataset = barChart.data.datasets[0];
        for (var i = 0; i < dataset.data.length; i++) {
          
          if (dataset.data[i] >= 0 && dataset.data[i] <= 50) {
            dataset.backgroundColor[i] = chartColors.color1;
          }
          else if ((dataset.data[i] >= 51) && (dataset.data[i] <= 100)){
            dataset.backgroundColor[i] =  chartColors.color2;
          }
          else if((dataset.data[i] >= 101) && (dataset.data[i] <= 199)){
            dataset.backgroundColor[i] = chartColors.color3;
          }
          else if((dataset.data[i] >= 200) && (dataset.data[i] <= 299)){
            dataset.backgroundColor[i] = chartColors.color4;
          }
          else{
            dataset.backgroundColor[i] = chartColors.color5;
          }
        }
        barChart.update();


        //-------------------
        //- LINE CHART PM10 -
        //-------------------

        function newDate(days){
          return moment().add(days, 'd');
        }
        
        var lineChartPMData = {
          labels  : [ '01:00', '02:00', '03:00', '04:00', '05:00', '06:00', '07:00', '08:00', '09:00', '10:00', '11:00', '12:00', '13:00', '14:00', '15:00', '16:00', '17:00', '18:00', '19:00', '20:00', '21:00', '22:00', '23:00', '00:00'],
          datasets: [
            {
              label               : PM10,
              borderColor         : 'rgba(52, 189, 235)',
              pointBorderWidth    : 3,
              fill                : false,
              lineTension         : 0,
              data                : [{{ $data->payloadtotal }}, 150, 70, 20, 330, 80, 43]
            }
          ]
        }
        
        var lineChartPM = $('#lineChartPM').get(0).getContext('2d')
        var chartPMData = jQuery.extend(true, {}, lineChartPMData)
        var temp1       = lineChartPMData.datasets[0]
        chartPMData.datasets[0] = temp1


        var PMChartOptions = {
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
                },
                scaleLabel: {
                  display: true,
                  labelString: 'ISPU'
                }
              }],
          },
          
        }

        var myLineChart = new Chart(lineChartPM, {
            type: 'line',
            data: chartPMData,
            options: PMChartOptions
        });
        // END LINE CHART PM10 //


        //------------------
        //- LINE CHART SO2 -
        //------------------
        var lineChartSOData = {
          labels  : [ 'senin', 'selasa', 'rabu', 'kamis', 'jumat', 'sabtu', 'minggu'],
          datasets: [
            {
              label               : SO2,
              borderColor         : 'rgba(52, 189, 235)',
              pointBorderWidth    : 3,
              fill                : false,
              lineTension         : 0,
              data                : [{{ $data->payloadtotal }}, 150, 70, 20, 330, 80, 43]
            }
          ]
        }
        
        var lineChartSO = $('#lineChartSO').get(0).getContext('2d')
        var chartSOData = jQuery.extend(true, {}, lineChartSOData)
        var temp2       = lineChartSOData.datasets[0]
        chartSOData.datasets[0] = temp2

        var SOChartOptions = {
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
                },
                scaleLabel: {
                  display: true,
                  labelString: 'ISPU'
                }
              }],
              // xAxes: [{
              //   barPercentage: 0.4
              // }]
          }
        }

        var myLineChartSO = new Chart(lineChartSO, {
            type: 'line',
            data: chartSOData,
            options: SOChartOptions
        });
        // END LINE CHART SO2


        //------------------
        //- LINE CHART CO2 -
        //------------------
        var lineChartCOData = {
          labels  : ['01:00', '02:00', '03:00', '04:00', '05:00', '06:00', '07:00', '08:00', '09:00', '10:00', '11:00', '12:00', '13:00', '14:00', '15:00', '16:00', '17:00', '18:00', '19:00', '20:00', '21:00', '22:00', '23:00', '00:00'],
          datasets: [
            {
              label               : CO2,
              borderColor         : 'rgba(52, 189, 235)',
              pointBorderWidth    : 3,
              fill                : false,
              lineTension         : 0,
              data                : [{{ $data->payloadtotal }}, 150, 70, 20, 330, 80, 43]
            }
          ]
        }
        
        var lineChartCO = $('#lineChartCO').get(0).getContext('2d')
        var chartCOData = jQuery.extend(true, {}, lineChartCOData)
        var temp3       = lineChartCOData.datasets[0]
        chartCOData.datasets[0] = temp3

        var COChartOptions = {
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
                },
                scaleLabel: {
                  display: true,
                  labelString: 'ISPU'
                }
              }],
              
          }
        }

        var myLineChartCO = new Chart(lineChartCO, {
            type: 'line',
            data: chartCOData,
            options: COChartOptions
        });
        // END LINE CHART CO2


        //------------------
        //- LINE CHART SO2 -
        //------------------
        var lineChartSOData = {
          labels  : [ 'senin', 'selasa', 'rabu', 'kamis', 'jumat', 'sabtu', 'minggu'],
          datasets: [
            {
              label               : SO2,
              borderColor         : 'rgba(52, 189, 235)',
              pointBorderWidth    : 3,
              fill                : false,
              lineTension         : 0,
              data                : [{{ $data->payloadtotal }}, 150, 70, 20, 330, 80, 43]
            }
          ]
        }
        
        var lineChartSO = $('#lineChartSO').get(0).getContext('2d')
        var chartSOData = jQuery.extend(true, {}, lineChartSOData)
        var temp4       = lineChartSOData.datasets[0]
        chartSOData.datasets[0] = temp4


        var SOChartOptions = {
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
                },
                scaleLabel: {
                  display: true,
                  labelString: 'ISPU'
                }
              }],
              // xAxes: [{
              //   barPercentage: 0.4
              // }]
          }
        }

        var myLineChartSO = new Chart(lineChartSO, {
            type: 'line',
            data: chartSOData,
            options: SOChartOptions
        });
        // END LINE CHART SO2


        //------------------
        //- LINE CHART O3  -
        //------------------
        var lineChartOData = {
          labels  : [ 'senin', 'selasa', 'rabu', 'kamis', 'jumat', 'sabtu', 'minggu'],
          datasets: [
            {
              label               : O3,
              borderColor         : 'rgba(52, 189, 235)',
              pointBorderWidth    : 3,
              fill                : false,
              lineTension         : 0,
              data                : [{{ $data->payloadtotal }}, 150, 70, 20, 330, 80, 43]
            }
          ]
        }
        
      
        var lineChartO  = $('#lineChartO').get(0).getContext('2d')
        var chartOData  = jQuery.extend(true, {}, lineChartOData)
        var temp5       = lineChartOData.datasets[0]
        chartOData.datasets[0] = temp5


        var OChartOptions = {
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
                },
                scaleLabel: {
                  display: true,
                  labelString: 'ISPU'
                }
              }],
              // xAxes: [{
              //   barPercentage: 0.4
              // }]
          }
        }

        var myLineChartO = new Chart(lineChartO, {
            type: 'line',
            data: chartOData,
            options: OChartOptions
        });
        // END LINE CHART O3


        //------------------
        //- LINE CHART NO2 -
        //------------------

        var lineChartNOData = {
          labels  : [ 'senin', 'selasa', 'rabu', 'kamis', 'jumat', 'sabtu', 'minggu'],
          datasets: [
            {
              label               : NO2,
              borderColor         : 'rgba(52, 189, 235)',
              pointBorderWidth    : 3,
              fill                : false,
              lineTension         : 0,
              data                : [{{ $data->payloadtotal }}, 150, 70, 20, 330, 80, 43]
            }
          ]
        }
        
      
        var lineChartNO  = $('#lineChartNO').get(0).getContext('2d')
        var chartNOData  = jQuery.extend(true, {}, lineChartNOData)
        var temp6        = lineChartNOData.datasets[0]
        chartNOData.datasets[0] = temp6


        var NOChartOptions = {
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
                },
                scaleLabel: {
                  display: true,
                  labelString: 'ISPU'
                }
              }],
              // xAxes: [{
              //   barPercentage: 0.4
              // }]
          }
        }

        var myLineChartNO = new Chart(lineChartNO, {
            type: 'line',
            data: chartNOData,
            options: NOChartOptions
        });

        // END LINE CHART NO2

      })

      /*======================= GMAP API ========================== */

      //pengkondisian warna circle Sensor Node A untuk CO2
      if((70 >= 0) && (70 <= 50)){
        var colorCO2 = chartColors.color1;
      } else if ((70 >= 51 ) && (70 <= 100)) {
        var colorCO2 = chartColors.color2;
      } else if ((70 >= 101) && (70 <= 199)) {
        var colorCO2 = chartColors.color3;
      } else if ((70 >= 200) && (70 <= 299)) {
        var colorCO2 = chartColors.color4;
      } else {
        var colorCO2 = chartColors.color5;
      }

      //pengkondisian warna circle Sensor Node B untuk O3
      if((20 >= 0) && (20 <= 50)){
        var colorO3 = chartColors.color1;
      } else if ((20 >= 51 ) && (20 <= 100)) {
        var colorO3 = chartColors.color2;
      } else if ((20 >= 101) && (20 <= 199)) {
        var colorO3 = chartColors.color3;
      } else if ((20 >= 200) && (20 <= 299)) {
        var colorO3 = chartColors.color4;
      } else {
        var colorO3 = chartColors.color5;
      }

      //pengkondisian warna circle sensor node C untuk NO2
      if(({{ $data->payloadtotal }} >= 0) && ({{ $data->payloadtotal }} <= 50)){
        var colorNO2 = chartColors.color1;
      } else if (({{ $data->payloadtotal }} >= 51 ) && ({{ $data->payloadtotal }} <= 100)) {
        var colorNO2 = chartColors.color2;
      } else if (({{ $data->payloadtotal }} >= 101) && ({{ $data->payloadtotal }} <= 199)) {
        var colorNO2 = chartColors.color3;
      } else if (({{ $data->payloadtotal }} >= 200) && ({{ $data->payloadtotal }} <= 299)) {
        var colorNO2 = chartColors.color4;
      } else {
        var colorNO2 = chartColors.color5;
      }

       //pengkondisian warna circle Sensor Node D untuk SO2
       if((150 >= 0) && (150 <= 50)){
        var colorSO2 = chartColors.color1;
      } else if ((150 >= 51 ) && (150 <= 100)) {
        var colorSO2 = chartColors.color2;
      } else if ((150 >= 101) && (150 <= 199)) {
        var colorSO2 = chartColors.color3;
      } else if ((150 >= 200) && (150 <= 299)) {
        var colorSO2 = chartColors.color4;
      } else {
        var colorSO2 = chartColors.color5;
      }

       //pengkondisian warna circle Sensor Node E untuk PM10
       if((330 >= 0) && (330 <= 50)){
        var colorPM10 = chartColors.color1;
      } else if ((330 >= 51 ) && (330 <= 100)) {
        var colorPM10 = chartColors.color2;
      } else if ((330 >= 101) && (330 <= 199)) {
        var colorPM10 = chartColors.color3;
      } else if ((330 >= 200) && (330 <= 299)) {
        var colorPM10 = chartColors.color4;
      } else {
        var colorPM10 = chartColors.color5;
      }

      /* GMAP API FOR SENSOR LOCATION */
      var nodePoints = {};

      nodePoints[0] = {
        center: new google.maps.LatLng(1.119679, 104.048445),
        id: 0,
        addr: '<div id="content">' +
              '<div id="siteNotice">' +
              "</div>" +
              '<h5 id="firstHeading" class="firstHeading">Sensor Node A</h5>' +
              '<div id="bodyContent">' +
              "<p>partikel udara : </p>" +
              "<p>Kadar ISPU : </p>" +
              "<p>keterangan : </p>" +
              "</div>" +
              "</div>",
        magnitude: 40,
        color: colorCO2
      };

      nodePoints[1] = {
        center: new google.maps.LatLng(1.119758, 104.049405),
        id: 1,
        addr: '<div id="content">' +
              '<div id="siteNotice">' +
              "</div>" +
              '<h5 id="firstHeading" class="firstHeading">Sensor Node B</h5>' +
              '<div id="bodyContent">' +
              "<p>partikel udara : </p>" +
              "<p>Kadar ISPU : </p>" +
              "<p>keterangan : </p>" +
              "</div>" +
              "</div>",
        magnitude: 40,
        color: colorO3
      };

      nodePoints[2] = {
        center: new google.maps.LatLng(1.118752, 104.050337),
        id: 2,
        addr: '<div id="content">' +
              '<div id="siteNotice">' +
              "</div>" +
              '<h5 id="firstHeading" class="firstHeading">Sensor Node C</h5>' +
              '<div id="bodyContent">' +
              "<p>partikel udara : </p>" +
              "<p>Kadar ISPU : </p>" +
              "<p>keterangan : </p>" +
              "</div>" +
              "</div>",
        magnitude: 40,
        color: colorNO2
      };

      nodePoints[3] = {
        center: new google.maps.LatLng(1.118869, 104.047097),
        id: 3,
        addr: '<div id="content">' +
              '<div id="siteNotice">' +
              "</div>" +
              '<h5 id="firstHeading" class="firstHeading">Sensor Node D</h5>' +
              '<div id="bodyContent">' +
              "<p>partikel udara : </p>" +
              "<p>Kadar ISPU : </p>" +
              "<p>keterangan : </p>" +
              "</div>" +
              "</div>",
        magnitude: 40,
        color: colorSO2
      };

      nodePoints[4] = {
        center: new google.maps.LatLng(1.117819, 104.047335),
        id: 4,
        addr: '<div id="content">' +
              '<div id="siteNotice">' +
              "</div>" +
              '<h5 id="firstHeading" class="firstHeading">Sensor Node E</h5>' +
              '<div id="bodyContent">' +
              "<p>partikel udara : </p>" +
              "<p>Kadar ISPU : </p>" +
              "<p>keterangan : </p>" +
              "</div>" +
              "</div>",
        magnitude: 40,
        color: colorPM10
      };

      var nodeCircle;
      var infoWindow = new google.maps.InfoWindow();
      
      function initialize(){
        var mapOptions = {
          zoom: 17,
          center: new google.maps.LatLng(1.118709, 104.048585),
          mapTypeId: google.maps.MapTypeId.ROADMAP
        };

        var map = new google.maps.Map(document.getElementById('map'), mapOptions);

        for (i in nodePoints) {
          var magnitudeOptions = {
            strokeColor: "#00B01D",
            strokeOpacity: 0.8,
            strokeWeight: 0,
            fillColor: nodePoints[i].color,
            fillOpacity: 0.35,
            map: map,
            center: nodePoints[i].center,
            radius: nodePoints[i].magnitude,
            id:nodePoints[i].id,
            addr:nodePoints[i].addr,
            infoWindowIndex: i
          };
        nodeCircle = new google.maps.Circle(magnitudeOptions);

        google.maps.event.addListener(nodeCircle, 'click', (function(nodeCircle, i) {
          console.log('aaa');
          return function(){
            infoWindow.setContent(nodePoints[i].addr);
            infoWindow.setPosition(nodeCircle.getCenter());
            infoWindow.open(map);
          }
        })(nodeCircle, i));
        }
      } 
      google.maps.event.addDomListener(window, 'load', initialize);
    </script>

@endsection