$(function() {

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
                data                : [30, 150, 70, 20, 330, 80, 43]
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
                data                : [30, 150, 70, 20, 330, 80, 43]
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
                data                : [30, 150, 70, 20, 330, 80, 43]
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
                data                : [30, 150, 70, 20, 330, 80, 43]
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
                data                : [30, 150, 70, 20, 330, 80, 43]
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
});