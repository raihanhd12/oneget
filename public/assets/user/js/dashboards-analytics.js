/**
 * Dashboard Analytics
 */

'use strict';

(function () {
  let cardColor, headingColor, axisColor, shadeColor, borderColor;

  cardColor = config.colors.cardColor;
  headingColor = config.colors.headingColor;
  axisColor = config.colors.axisColor;
  borderColor = config.colors.borderColor;

  // Pertumbuhan Pengikut Chart
  // --------------------------------------------------------------------
  if (document.getElementById('monthSelector')) {
    // Logika untuk chart di halaman pertama
    document.getElementById('monthSelector').addEventListener('change', function () {
      var selectedMonth = this.value; // Mengambil nilai bulan yang dipilih dari dropdown

      // Data yang sesuai untuk bulan yang dipilih
      var newData = [];
      var monthsData = [];
      if (selectedMonth == '0') {
        newData = [45, 52, 38, 24, 33, 26, 21, 20, 6, 8];
        monthsData = ['Jan 1', 'Jan 4', 'Jan 7', 'Jan 10', 'Jan 13', 'Jan 16', 'Jan 19', 'Jan 22', 'Jan 25', 'Jan 28'];
      } else if (selectedMonth == '1') {
        newData = [45, 52, 38, 24, 33, 28, 15, 20, 6, 30];
        monthsData = ['Feb 1', 'Feb 4', 'Feb 7', 'Feb 10', 'Feb 13', 'Feb 16', 'Feb 19', 'Feb 22', 'Feb 25', 'Feb 28'];
      } else if (selectedMonth == '2') {
        newData = [15, 32, 38, 24, 33, 26, 45, 20, 6, 8];
        monthsData = ['Mar 1', 'Mar 4', 'Mar 7', 'Mar 10', 'Mar 13', 'Mar 16', 'Mar 19', 'Mar 22', 'Mar 25', 'Mar 28'];
      }

      followersChart.updateSeries([{
        data: newData,
      }]);

      // Perbarui kategori x-axis (categories)
      followersChart.updateOptions({
        xaxis: {
          categories: monthsData
        }
      });
    });
  }
  
  var followersChartOptions = {
    series: [{
      name: "Pengikut",
      data: [45, 52, 38, 24, 33, 26, 21, 20, 6, 8]
    }
    ],
    chart: {
      height: 270,
      type: 'line',
      zoom: {
        enabled: false
      },
      toolbar: {
        show: false, // Nonaktifkan toolbar
      }
    },
    colors: ['#9D3FE7'],
    dataLabels: {
      enabled: false
    },
    stroke: {
      width: 3,
      curve: 'straight',
      dashArray: 0
    },
    title: {
      text: 'Pertumbuhan Pengikut',
      align: 'left',
      style: {
        color: 'rgba(0, 0, 0, 0.80)',
        fontStyle: 'normal',
        fontWeight: 600,
      }
    },
    legend: {
      tooltipHoverFormatter: function (val, opts) {
        return val + ' - ' + opts.w.globals.series[opts.seriesIndex][opts.dataPointIndex] + ''
      }
    },
    markers: {
      size: 0,
      hover: {
        sizeOffset: 6
      },
    },
    xaxis: {
      categories: ['Jan 1', 'Jan 4', 'Jan 7', 'Jan 10', 'Jan 13', 'Jan 16', 'Jan 19', 'Jan 22', 'Jan 25', 'Jan 28'],
    },
    yaxis: {
      tickAmount: 4 // Mengatur jumlah nilai yang ditampilkan pada sumbu Y
    },
    tooltip: {
      y: {
        title: {
          formatter: function (val) {
            return val
          }
        },
      },
    },
  };

  var followersChart = new ApexCharts(document.querySelector("#followersChart"), followersChartOptions);
  followersChart.render();

  // Umur Pengikut Chart
  //---------------------------------------------------------------------
  var ageChartOptions = {
    series: [{
      data: [8, 15, 13, 10]
    }],
    chart: {
      height: 270,
      type: 'bar',
      toolbar: {
        show: false, // Nonaktifkan toolbar
      }
    },
    colors: ['#3CC7F4'],
    plotOptions: {
      bar: {
        columnWidth: '45%',
        distributed: true,
      }
    },
    dataLabels: {
      enabled: false
    },
    legend: {
      show: false
    },
    xaxis: {
      categories: ['11-20', '21-30', '31-40', '41-50'],
    },
    yaxis: {
      tickAmount: 4 // Mengatur jumlah kategori pada sumbu Y menjadi 4
    },
    title: {
      text: "Umur Pengikut",
      align: "left",
      style: {
        color: 'rgba(0, 0, 0, 0.80)',
        fontStyle: 'normal',
        fontWeight: 600,
      }
    }
  };

  var ageChart = new ApexCharts(document.querySelector("#ageChart"), ageChartOptions);
  ageChart.render();

  // //Gender Pengikut Chart
  // //---------------------------------------------------------------------
  var genderChartOptions = {
    series: [66.7, 33.3],
    chart: {
      type: 'pie',
      height: 330,
    },
    labels: ['Wanita', 'Pria'],
    colors: ['#E2FBE5', '#1ED875'],
    legend: {
      show: true,
      position: 'bottom'
    },
    title: {
      text: 'Gender Pengikut',
      align: 'left',
      style: {
        fontStyle: 'normal',
        fontWeight: 600,
      },
      color: 'rgba(0, 0, 0, 0.80)',
    },
    dataLabels: {
      style: {
        fontStyle: 'normal',
        fontWeight: 500,
      },
      colors: ['#000', '#000'],
      formatter: function (val, opts) {
        return val + '%';
      }
    },
    tooltip: {
      style: {
        color: '#000' // Ubah warna teks tooltip di sini
      },
    }
  };

  var genderChart = new ApexCharts(document.querySelector("#genderChart"), genderChartOptions);
  genderChart.render();


  // Rekomendasi Waktu Chart
  // --------------------------------------------------------------------

  if (document.getElementById('monthSelectorTime')) {
    // Logika untuk chart di halaman pertama
    document.getElementById('monthSelectorTime').addEventListener('change', function () {
      var monthSelectorTime = this.value; // Mengambil nilai bulan yang dipilih dari dropdown

      // Data dummy yang sesuai untuk setiap bulan yang dipilih
      var newDataTime = [];

      if (monthSelectorTime == '0') {
        newDataTime = [
          { name: '00:00', data: [30, 50, 70, 90, 80, 75, 65] },
          { name: '05:00', data: [40, 60, 60, 80, 70, 65, 55] },
          { name: '10:00', data: [50, 70, 50, 70, 60, 55, 45] },
          { name: '15:00', data: [60, 80, 40, 60, 50, 45, 35] },
          { name: '20:00', data: [70, 90, 30, 50, 40, 35, 25] }
        ];
      } else if (monthSelectorTime == '1') {
        newDataTime = [
          { name: '00:00', data: [15, 35, 45, 75, 45, 10, 90] },
          { name: '05:00', data: [45, 65, 65, 85, 75, 70, 60] },
          { name: '10:00', data: [55, 75, 55, 75, 65, 60, 50] },
          { name: '15:00', data: [65, 85, 45, 65, 55, 50, 40] },
          { name: '20:00', data: [75, 95, 35, 55, 45, 40, 30] }
        ];
      } else if (monthSelectorTime == '2') {
        newDataTime = [
          { name: '00:00', data: [25, 45, 65, 85, 75, 70, 60] },
          { name: '05:00', data: [35, 55, 55, 75, 65, 60, 50] },
          { name: '10:00', data: [45, 65, 45, 65, 55, 50, 40] },
          { name: '15:00', data: [55, 75, 35, 55, 45, 40, 30] },
          { name: '20:00', data: [65, 85, 25, 45, 35, 30, 20] }
        ];
      }

      // Mengupdate series pada chart dengan data baru
      timeChart.updateSeries(newDataTime);
    });
  }
  

  var timeChartOptions = {
    series: [
      {
        name: '00:00',
        data: [30, 40, 50, 60, 70, 80, 70]
      },
      {
        name: '05:00',
        data: [50, 60, 70, 80, 90, 80, 70]
      },
      {
        name: '10:00',
        data: [70, 60, 50, 40, 30, 20, 10]
      },
      {
        name: '15:00',
        data: [90, 80, 70, 60, 50, 40, 30]
      },
      {
        name: '20:00',
        data: [80, 70, 60, 50, 40, 30, 20]
      },
    ],
    chart: {
      height: 280,
      type: 'heatmap',
      toolbar: {
        show: false, // Nonaktifkan toolbar
      }
    },
    dataLabels: {
      enabled: false
    },
    plotOptions: {
      heatmap: {
        colorScale: {
          inverse: true
        }
      }
    },
    colors: ["#DD5E66"],
    xaxis: {
      type: 'category',
      categories: ['Sen', 'Sel', 'Rab', 'Kam', 'Jum', 'Sab', 'Min']
    },
    title: {
      text: 'Rekomendasi Waktu',
      align: 'left',
      style: {
        fontStyle: 'normal',
        fontWeight: 600,
      },
    },
  };

  var timeChart = new ApexCharts(document.querySelector("#timeChart"), timeChartOptions);
  timeChart.render();

  //Like Tiktok Chart
  //---------------------------------------------------------------------
  if (document.getElementById('monthSelectorTiktok')) {
    // Logika untuk chart di halaman pertama
    document.getElementById('monthSelectorTiktok').addEventListener('change', function () {
      var monthSelectorTiktok = this.value;

      var newDataTiktok = [];
      var monthsDataTiktok = [];
      if (monthSelectorTiktok == '0') {
        newDataTiktok = [45, 52, 38, 24, 33, 26, 21, 20, 6, 8];
        monthsDataTiktok = ['Jan 1', 'Jan 4', 'Jan 7', 'Jan 10', 'Jan 13', 'Jan 16', 'Jan 19', 'Jan 22', 'Jan 25', 'Jan 28'];
      } else if (monthSelectorTiktok == '1') {
        newDataTiktok = [45, 52, 38, 24, 33, 28, 15, 20, 6, 30];
        monthsDataTiktok = ['Feb 1', 'Feb 4', 'Feb 7', 'Feb 10', 'Feb 13', 'Feb 16', 'Feb 19', 'Feb 22', 'Feb 25', 'Feb 28'];
      } else if (monthSelectorTiktok == '2') {
        newDataTiktok = [15, 32, 38, 24, 33, 26, 45, 20, 6, 8];
        monthsDataTiktok = ['Mar 1', 'Mar 4', 'Mar 7', 'Mar 10', 'Mar 13', 'Mar 16', 'Mar 19', 'Mar 22', 'Mar 25', 'Mar 28'];
      }

      likeTiktokChart.updateSeries([{
        data: newDataTiktok,
      }]);

      likeTiktokChart.updateOptions({
        xaxis: {
          categories: monthsDataTiktok
        }
      });
    });
  }

  var likeTiktokChartOptions = {
    series: [{
      name: "Suka",
      data: [45, 52, 38, 24, 33, 26, 21, 20, 6, 8]
    }
    ],
    chart: {
      height: 270,
      type: 'line',
      zoom: {
        enabled: false
      },
      toolbar: {
        show: false, // Nonaktifkan toolbar
      }
    },
    colors: ['#FF3D40'],
    dataLabels: {
      enabled: false
    },
    stroke: {
      width: 3,
      curve: 'straight',
      dashArray: 0
    },
    title: {
      text: 'Pertumbuhan Suka',
      align: 'left',
      style: {
        color: 'rgba(0, 0, 0, 0.80)',
        fontStyle: 'normal',
        fontWeight: 600,
      }
    },
    legend: {
      tooltipHoverFormatter: function (val, opts) {
        return val + ' - ' + opts.w.globals.series[opts.seriesIndex][opts.dataPointIndex] + ''
      }
    },
    markers: {
      size: 0,
      hover: {
        sizeOffset: 6
      },
    },
    xaxis: {
      categories: ['Jan 1', 'Jan 4', 'Jan 7', 'Jan 10', 'Jan 13', 'Jan 16', 'Jan 19', 'Jan 22', 'Jan 25', 'Jan 28'],
    },
    yaxis: {
      tickAmount: 4 // Mengatur jumlah nilai yang ditampilkan pada sumbu Y
    },
    tooltip: {
      y: {
        title: {
          formatter: function (val) {
            return val
          }
        },
      },
    },
  };

  var likeTiktokChart = new ApexCharts(document.querySelector("#likeTiktokChart"), likeTiktokChartOptions);
  likeTiktokChart.render();

  //Like Instagram Chart
  //---------------------------------------------------------------------
  if (document.getElementById('monthSelectorInstagram')) {
    // Logika untuk chart di halaman pertama
    document.getElementById('monthSelectorInstagram').addEventListener('change', function () {
      var monthSelectorInstagram = this.value;

      var newDataInstagram = [];
      var monthsDataInstagram = [];
      if (monthSelectorInstagram == '0') {
        newDataInstagram = [45, 52, 38, 24, 33, 26, 21, 20, 6, 8];
        monthsDataInstagram = ['Jan 1', 'Jan 4', 'Jan 7', 'Jan 10', 'Jan 13', 'Jan 16', 'Jan 19', 'Jan 22', 'Jan 25', 'Jan 28'];
      } else if (monthSelectorInstagram == '1') {
        newDataInstagram = [45, 52, 38, 24, 33, 28, 15, 20, 6, 30];
        monthsDataInstagram = ['Feb 1', 'Feb 4', 'Feb 7', 'Feb 10', 'Feb 13', 'Feb 16', 'Feb 19', 'Feb 22', 'Feb 25', 'Feb 28'];
      } else if (monthSelectorInstagram == '2') {
        newDataInstagram = [15, 32, 38, 24, 33, 26, 45, 20, 6, 8];
        monthsDataInstagram = ['Mar 1', 'Mar 4', 'Mar 7', 'Mar 10', 'Mar 13', 'Mar 16', 'Mar 19', 'Mar 22', 'Mar 25', 'Mar 28'];
      }

      likeInstagramChart.updateSeries([{
        data: newDataInstagram,
      }]);

      likeInstagramChart.updateOptions({
        xaxis: {
          categories: monthsDataInstagram
        }
      });
    });
  }

  var likeInstagramChartOptions = {
    series: [{
      name: "Impression",
      data: [45, 52, 38, 24, 33, 26, 21, 20, 6, 8]
    }
    ],
    chart: {
      height: 230,
      type: 'line',
      zoom: {
        enabled: false
      },
      toolbar: {
        show: false, // Nonaktifkan toolbar
      }
    },
    colors: ['#1ED875'],
    dataLabels: {
      enabled: false
    },
    stroke: {
      width: 3,
      curve: 'straight',
      dashArray: 0
    },
    title: {
      text: 'Pertumbuhan Impression',
      align: 'left',
      style: {
        color: 'rgba(0, 0, 0, 0.80)',
        fontStyle: 'normal',
        fontWeight: 600,
      }
    },
    legend: {
      tooltipHoverFormatter: function (val, opts) {
        return val + ' - ' + opts.w.globals.series[opts.seriesIndex][opts.dataPointIndex] + ''
      }
    },
    markers: {
      size: 0,
      hover: {
        sizeOffset: 6
      },
    },
    xaxis: {
      categories: ['Jan 1', 'Jan 4', 'Jan 7', 'Jan 10', 'Jan 13', 'Jan 16', 'Jan 19', 'Jan 22', 'Jan 25', 'Jan 28'],
    },
    yaxis: {
      tickAmount: 4 // Mengatur jumlah nilai yang ditampilkan pada sumbu Y
    },
    tooltip: {
      y: {
        title: {
          formatter: function (val) {
            return val
          }
        },
      },
    },
  };

  var likeInstagramChart = new ApexCharts(document.querySelector("#likeInstagramChart"), likeInstagramChartOptions);
  likeInstagramChart.render();

  //Like Facebook Chart
  //---------------------------------------------------------------------
  if (document.getElementById('monthSelectorFacebook')) {
    // Logika untuk chart di halaman pertama
    document.getElementById('monthSelectorFacebook').addEventListener('change', function () {
      var monthSelectorFacebook = this.value;

      var newDataFacebook = [];
      var monthsDataFacebook = [];
      if (monthSelectorFacebook == '0') {
        newDataFacebook = [45, 52, 38, 24, 33, 26, 21, 20, 6, 8];
        monthsDataFacebook = ['Jan 1', 'Jan 4', 'Jan 7', 'Jan 10', 'Jan 13', 'Jan 16', 'Jan 19', 'Jan 22', 'Jan 25', 'Jan 28'];
      } else if (monthSelectorFacebook == '1') {
        newDataFacebook = [45, 52, 38, 24, 33, 28, 15, 20, 6, 30];
        monthsDataFacebook = ['Feb 1', 'Feb 4', 'Feb 7', 'Feb 10', 'Feb 13', 'Feb 16', 'Feb 19', 'Feb 22', 'Feb 25', 'Feb 28'];
      } else if (monthSelectorFacebook == '2') {
        newDataFacebook = [15, 32, 38, 24, 33, 26, 45, 20, 6, 8];
        monthsDataFacebook = ['Mar 1', 'Mar 4', 'Mar 7', 'Mar 10', 'Mar 13', 'Mar 16', 'Mar 19', 'Mar 22', 'Mar 25', 'Mar 28'];
      }

      likeFacebookChart.updateSeries([{
        data: newDataFacebook,
      }]);

      likeFacebookChart.updateOptions({
        xaxis: {
          categories: monthsDataFacebook
        }
      });
    });
  }

  var likeFacebookChartOptions = {
    series: [{
      name: "Impression",
      data: [45, 52, 38, 24, 33, 26, 21, 20, 6, 8]
    }
    ],
    chart: {
      height: 230,
      type: 'line',
      zoom: {
        enabled: false
      },
      toolbar: {
        show: false, // Nonaktifkan toolbar
      }
    },
    colors: ['#FFA12E'],
    dataLabels: {
      enabled: false
    },
    stroke: {
      width: 3,
      curve: 'straight',
      dashArray: 0
    },
    title: {
      text: 'Pertumbuhan Suka',
      align: 'left',
      style: {
        color: 'rgba(0, 0, 0, 0.80)',
        fontStyle: 'normal',
        fontWeight: 600,
      }
    },
    legend: {
      tooltipHoverFormatter: function (val, opts) {
        return val + ' - ' + opts.w.globals.series[opts.seriesIndex][opts.dataPointIndex] + ''
      }
    },
    markers: {
      size: 0,
      hover: {
        sizeOffset: 6
      },
    },
    xaxis: {
      categories: ['Jan 1', 'Jan 4', 'Jan 7', 'Jan 10', 'Jan 13', 'Jan 16', 'Jan 19', 'Jan 22', 'Jan 25', 'Jan 28'],
    },
    yaxis: {
      tickAmount: 4 // Mengatur jumlah nilai yang ditampilkan pada sumbu Y
    },
    tooltip: {
      y: {
        title: {
          formatter: function (val) {
            return val
          }
        },
      },
    },
  };

  var likeFacebookChart = new ApexCharts(document.querySelector("#likeFacebookChart"), likeFacebookChartOptions);
  likeFacebookChart.render();

  // Sentiment Analisis Chart
  // -------------------------------------------------------------------------
  var sentimentAnalysisChartOptions = {
    series: [66.7, 33.3],
    chart: {
      type: 'pie',
      height: 330,
    },
    labels: ['Positif', 'Negatif'],
    colors: ['#3CC7F4', '#E6F2F6'],
    legend: {
      show: true,
      position: 'bottom'
    },
    title: {
      text: 'Analisis Komentar',
      align: 'left',
      style: {
        fontStyle: 'normal',
        fontWeight: 600,
      },
    },
    dataLabels: {
      style: {
        fontStyle: 'normal',
        fontWeight: 500,
      },
      // Menentukan warna untuk setiap data label
      colors: ['#000', '#000'],
      formatter: function (val, opts) {
        return val + '%';
      }
    }
  };

  var sentimentAnalysisChart = new ApexCharts(document.querySelector("#sentimentAnalysisChart"), sentimentAnalysisChartOptions);
  sentimentAnalysisChart.render();

  // Sentiment Analisis Instagram Chart
  // -------------------------------------------------------------------------
  var sentimentAnalysisInstagramChartOptions = {
    series: [66.7, 33.3],
    chart: {
      type: 'pie',
      height: 355,
    },
    labels: ['Positif', 'Negatif'],
    colors: ['#FFA12E', '#F9EFED'],
    legend: {
      show: true,
      position: 'bottom'
    },
    title: {
      text: 'Analisis Komentar',
      align: 'left',
      style: {
        fontStyle: 'normal',
        fontWeight: 600,
      },
    },
    dataLabels: {
      style: {
        fontStyle: 'normal',
        fontWeight: 500,
      },
      // Menentukan warna untuk setiap data label
      colors: ['#000', '#000'],
      formatter: function (val, opts) {
        return val + '%';
      }
    }
  };

  var sentimentAnalysisInstagramChart = new ApexCharts(document.querySelector("#sentimentAnalysisInstagramChart"), sentimentAnalysisInstagramChartOptions);
  sentimentAnalysisInstagramChart.render();

  // Sentiment Analisis Facebook Chart
  // -------------------------------------------------------------------------
  var sentimentAnalysisFacebookChartOptions = {
    series: [66.7, 33.3],
    chart: {
      type: 'pie',
      height: 355,
    },
    labels: ['Positif', 'Negatif'],
    colors: ['#656EEA', '#E9EAFE'],
    legend: {
      show: true,
      position: 'bottom'
    },
    title: {
      text: 'Analisis Komentar',
      align: 'left',
      style: {
        fontStyle: 'normal',
        fontWeight: 600,
      },
    },
    dataLabels: {
      style: {
        fontStyle: 'normal',
        fontWeight: 500,
      },
      // Menentukan warna untuk setiap data label
      colors: ['#000', '#000'],
      formatter: function (val, opts) {
        return val + '%';
      }
    }
  };

  var sentimentAnalysisFacebookChart = new ApexCharts(document.querySelector("#sentimentAnalysisFacebookChart"), sentimentAnalysisFacebookChartOptions);
  sentimentAnalysisFacebookChart.render();

  // Total Revenue Report Chart - Bar Chart
  // --------------------------------------------------------------------
  const totalRevenueChartEl = document.querySelector('#totalRevenueChart'),
    totalRevenueChartOptions = {
      series: [
        {
          name: '2021',
          data: [18, 7, 15, 29, 18, 12, 9]
        },
        {
          name: '2020',
          data: [-13, -18, -9, -14, -5, -17, -15]
        }
      ],
      chart: {
        height: 300,
        stacked: true,
        type: 'bar',
        toolbar: { show: false }
      },
      plotOptions: {
        bar: {
          horizontal: false,
          columnWidth: '33%',
          borderRadius: 12,
          startingShape: 'rounded',
          endingShape: 'rounded'
        }
      },
      colors: [config.colors.primary, config.colors.info],
      dataLabels: {
        enabled: false
      },
      stroke: {
        curve: 'smooth',
        width: 6,
        lineCap: 'round',
        colors: [cardColor]
      },
      legend: {
        show: true,
        horizontalAlign: 'left',
        position: 'top',
        markers: {
          height: 8,
          width: 8,
          radius: 12,
          offsetX: -3
        },
        labels: {
          colors: axisColor
        },
        itemMargin: {
          horizontal: 10
        }
      },
      grid: {
        borderColor: borderColor,
        padding: {
          top: 0,
          bottom: -8,
          left: 20,
          right: 20
        }
      },
      xaxis: {
        categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul'],
        labels: {
          style: {
            fontSize: '13px',
            colors: axisColor
          }
        },
        axisTicks: {
          show: false
        },
        axisBorder: {
          show: false
        }
      },
      yaxis: {
        labels: {
          style: {
            fontSize: '13px',
            colors: axisColor
          }
        }
      },
      responsive: [
        {
          breakpoint: 1700,
          options: {
            plotOptions: {
              bar: {
                borderRadius: 10,
                columnWidth: '32%'
              }
            }
          }
        },
        {
          breakpoint: 1580,
          options: {
            plotOptions: {
              bar: {
                borderRadius: 10,
                columnWidth: '35%'
              }
            }
          }
        },
        {
          breakpoint: 1440,
          options: {
            plotOptions: {
              bar: {
                borderRadius: 10,
                columnWidth: '42%'
              }
            }
          }
        },
        {
          breakpoint: 1300,
          options: {
            plotOptions: {
              bar: {
                borderRadius: 10,
                columnWidth: '48%'
              }
            }
          }
        },
        {
          breakpoint: 1200,
          options: {
            plotOptions: {
              bar: {
                borderRadius: 10,
                columnWidth: '40%'
              }
            }
          }
        },
        {
          breakpoint: 1040,
          options: {
            plotOptions: {
              bar: {
                borderRadius: 11,
                columnWidth: '48%'
              }
            }
          }
        },
        {
          breakpoint: 991,
          options: {
            plotOptions: {
              bar: {
                borderRadius: 10,
                columnWidth: '30%'
              }
            }
          }
        },
        {
          breakpoint: 840,
          options: {
            plotOptions: {
              bar: {
                borderRadius: 10,
                columnWidth: '35%'
              }
            }
          }
        },
        {
          breakpoint: 768,
          options: {
            plotOptions: {
              bar: {
                borderRadius: 10,
                columnWidth: '28%'
              }
            }
          }
        },
        {
          breakpoint: 640,
          options: {
            plotOptions: {
              bar: {
                borderRadius: 10,
                columnWidth: '32%'
              }
            }
          }
        },
        {
          breakpoint: 576,
          options: {
            plotOptions: {
              bar: {
                borderRadius: 10,
                columnWidth: '37%'
              }
            }
          }
        },
        {
          breakpoint: 480,
          options: {
            plotOptions: {
              bar: {
                borderRadius: 10,
                columnWidth: '45%'
              }
            }
          }
        },
        {
          breakpoint: 420,
          options: {
            plotOptions: {
              bar: {
                borderRadius: 10,
                columnWidth: '52%'
              }
            }
          }
        },
        {
          breakpoint: 380,
          options: {
            plotOptions: {
              bar: {
                borderRadius: 10,
                columnWidth: '60%'
              }
            }
          }
        }
      ],
      states: {
        hover: {
          filter: {
            type: 'none'
          }
        },
        active: {
          filter: {
            type: 'none'
          }
        }
      }
    };
  if (typeof totalRevenueChartEl !== undefined && totalRevenueChartEl !== null) {
    const totalRevenueChart = new ApexCharts(totalRevenueChartEl, totalRevenueChartOptions);
    totalRevenueChart.render();
  }

  // Growth Chart - Radial Bar Chart
  // --------------------------------------------------------------------
  const growthChartEl = document.querySelector('#growthChart'),
    growthChartOptions = {
      series: [78],
      labels: ['Growth'],
      chart: {
        height: 240,
        type: 'radialBar'
      },
      plotOptions: {
        radialBar: {
          size: 150,
          offsetY: 10,
          startAngle: -150,
          endAngle: 150,
          hollow: {
            size: '55%'
          },
          track: {
            background: cardColor,
            strokeWidth: '100%'
          },
          dataLabels: {
            name: {
              offsetY: 15,
              color: headingColor,
              fontSize: '15px',
              fontWeight: '500',
              fontFamily: 'Public Sans'
            },
            value: {
              offsetY: -25,
              color: headingColor,
              fontSize: '22px',
              fontWeight: '500',
              fontFamily: 'Public Sans'
            }
          }
        }
      },
      colors: [config.colors.primary],
      fill: {
        type: 'gradient',
        gradient: {
          shade: 'dark',
          shadeIntensity: 0.5,
          gradientToColors: [config.colors.primary],
          inverseColors: true,
          opacityFrom: 1,
          opacityTo: 0.6,
          stops: [30, 70, 100]
        }
      },
      stroke: {
        dashArray: 5
      },
      grid: {
        padding: {
          top: -35,
          bottom: -10
        }
      },
      states: {
        hover: {
          filter: {
            type: 'none'
          }
        },
        active: {
          filter: {
            type: 'none'
          }
        }
      }
    };
  if (typeof growthChartEl !== undefined && growthChartEl !== null) {
    const growthChart = new ApexCharts(growthChartEl, growthChartOptions);
    growthChart.render();
  }

  // Profit Report Line Chart
  // --------------------------------------------------------------------
  const profileReportChartEl = document.querySelector('#profileReportChart'),
    profileReportChartConfig = {
      chart: {
        height: 80,
        // width: 175,
        type: 'line',
        toolbar: {
          show: false
        },
        dropShadow: {
          enabled: true,
          top: 10,
          left: 5,
          blur: 3,
          color: config.colors.warning,
          opacity: 0.15
        },
        sparkline: {
          enabled: true
        }
      },
      grid: {
        show: false,
        padding: {
          right: 8
        }
      },
      colors: [config.colors.warning],
      dataLabels: {
        enabled: false
      },
      stroke: {
        width: 5,
        curve: 'smooth'
      },
      series: [
        {
          data: [110, 270, 145, 245, 205, 285]
        }
      ],
      xaxis: {
        show: false,
        lines: {
          show: false
        },
        labels: {
          show: false
        },
        axisBorder: {
          show: false
        }
      },
      yaxis: {
        show: false
      }
    };
  if (typeof profileReportChartEl !== undefined && profileReportChartEl !== null) {
    const profileReportChart = new ApexCharts(profileReportChartEl, profileReportChartConfig);
    profileReportChart.render();
  }

  // Order Statistics Chart
  // --------------------------------------------------------------------
  const chartOrderStatistics = document.querySelector('#orderStatisticsChart'),
    orderChartConfig = {
      chart: {
        height: 165,
        width: 130,
        type: 'donut'
      },
      labels: ['Electronic', 'Sports', 'Decor', 'Fashion'],
      series: [85, 15, 50, 50],
      colors: [config.colors.primary, config.colors.secondary, config.colors.info, config.colors.success],
      stroke: {
        width: 5,
        colors: [cardColor]
      },
      dataLabels: {
        enabled: false,
        formatter: function (val, opt) {
          return parseInt(val) + '%';
        }
      },
      legend: {
        show: false
      },
      grid: {
        padding: {
          top: 0,
          bottom: 0,
          right: 15
        }
      },
      states: {
        hover: {
          filter: { type: 'none' }
        },
        active: {
          filter: { type: 'none' }
        }
      },
      plotOptions: {
        pie: {
          donut: {
            size: '75%',
            labels: {
              show: true,
              value: {
                fontSize: '1.5rem',
                fontFamily: 'Public Sans',
                color: headingColor,
                offsetY: -15,
                formatter: function (val) {
                  return parseInt(val) + '%';
                }
              },
              name: {
                offsetY: 20,
                fontFamily: 'Public Sans'
              },
              total: {
                show: true,
                fontSize: '0.8125rem',
                color: axisColor,
                label: 'Weekly',
                formatter: function (w) {
                  return '38%';
                }
              }
            }
          }
        }
      }
    };
  if (typeof chartOrderStatistics !== undefined && chartOrderStatistics !== null) {
    const statisticsChart = new ApexCharts(chartOrderStatistics, orderChartConfig);
    statisticsChart.render();
  }

  // Income Chart - Area chart
  // --------------------------------------------------------------------
  const incomeChartEl = document.querySelector('#incomeChart'),
    incomeChartConfig = {
      series: [
        {
          data: [24, 21, 30, 22, 42, 26, 35, 29]
        }
      ],
      chart: {
        height: 215,
        parentHeightOffset: 0,
        parentWidthOffset: 0,
        toolbar: {
          show: false
        },
        type: 'area'
      },
      dataLabels: {
        enabled: false
      },
      stroke: {
        width: 2,
        curve: 'smooth'
      },
      legend: {
        show: false
      },
      markers: {
        size: 6,
        colors: 'transparent',
        strokeColors: 'transparent',
        strokeWidth: 4,
        discrete: [
          {
            fillColor: config.colors.white,
            seriesIndex: 0,
            dataPointIndex: 7,
            strokeColor: config.colors.primary,
            strokeWidth: 2,
            size: 6,
            radius: 8
          }
        ],
        hover: {
          size: 7
        }
      },
      colors: [config.colors.primary],
      fill: {
        type: 'gradient',
        gradient: {
          shade: shadeColor,
          shadeIntensity: 0.6,
          opacityFrom: 0.5,
          opacityTo: 0.25,
          stops: [0, 95, 100]
        }
      },
      grid: {
        borderColor: borderColor,
        strokeDashArray: 3,
        padding: {
          top: -20,
          bottom: -8,
          left: -10,
          right: 8
        }
      },
      xaxis: {
        categories: ['', 'Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul'],
        axisBorder: {
          show: false
        },
        axisTicks: {
          show: false
        },
        labels: {
          show: true,
          style: {
            fontSize: '13px',
            colors: axisColor
          }
        }
      },
      yaxis: {
        labels: {
          show: false
        },
        min: 10,
        max: 50,
        tickAmount: 4
      }
    };
  if (typeof incomeChartEl !== undefined && incomeChartEl !== null) {
    const incomeChart = new ApexCharts(incomeChartEl, incomeChartConfig);
    incomeChart.render();
  }

  // Expenses Mini Chart - Radial Chart
  // --------------------------------------------------------------------
  const weeklyExpensesEl = document.querySelector('#expensesOfWeek'),
    weeklyExpensesConfig = {
      series: [65],
      chart: {
        width: 60,
        height: 60,
        type: 'radialBar'
      },
      plotOptions: {
        radialBar: {
          startAngle: 0,
          endAngle: 360,
          strokeWidth: '8',
          hollow: {
            margin: 2,
            size: '45%'
          },
          track: {
            strokeWidth: '50%',
            background: borderColor
          },
          dataLabels: {
            show: true,
            name: {
              show: false
            },
            value: {
              formatter: function (val) {
                return '$' + parseInt(val);
              },
              offsetY: 5,
              color: '#697a8d',
              fontSize: '13px',
              show: true
            }
          }
        }
      },
      fill: {
        type: 'solid',
        colors: config.colors.primary
      },
      stroke: {
        lineCap: 'round'
      },
      grid: {
        padding: {
          top: -10,
          bottom: -15,
          left: -10,
          right: -10
        }
      },
      states: {
        hover: {
          filter: {
            type: 'none'
          }
        },
        active: {
          filter: {
            type: 'none'
          }
        }
      }
    };
  if (typeof weeklyExpensesEl !== undefined && weeklyExpensesEl !== null) {
    const weeklyExpenses = new ApexCharts(weeklyExpensesEl, weeklyExpensesConfig);
    weeklyExpenses.render();
  }
})();
