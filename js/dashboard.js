(function ($) {
  'use strict';
  $(function () {
    if ($("#order-chart").length) {
      var areaData = {
        labels: ["10", "", "", "20", "", "", "30", "", "", "40", "", "", "50", "", "", "60", "", "", "70"],
        datasets: [
          {
            data: [200, 480, 700, 600, 620, 350, 380, 350, 850, "600", "650", "350", "590", "350", "620", "500", "990", "780", "650"],
            borderColor: [
              '#4747A1'
            ],
            borderWidth: 2,
            fill: false,
            label: "Orders"
          },
          {
            data: [400, 450, 410, 500, 480, 600, 450, 550, 460, "560", "450", "700", "450", "640", "550", "650", "400", "850", "800"],
            borderColor: [
              '#F09397'
            ],
            borderWidth: 2,
            fill: false,
            label: "Downloads"
          }
        ]
      };
      var areaOptions = {
        responsive: true,
        maintainAspectRatio: true,
        plugins: {
          filler: {
            propagate: false
          }
        },
        scales: {
          xAxes: [{
            display: true,
            ticks: {
              display: true,
              padding: 10,
              fontColor: "#6C7383"
            },
            gridLines: {
              display: false,
              drawBorder: false,
              color: 'transparent',
              zeroLineColor: '#eeeeee'
            }
          }],
          yAxes: [{
            display: true,
            ticks: {
              display: true,
              autoSkip: false,
              maxRotation: 0,
              stepSize: 200,
              min: 200,
              max: 1200,
              padding: 18,
              fontColor: "#6C7383"
            },
            gridLines: {
              display: true,
              color: "#f2f2f2",
              drawBorder: false
            }
          }]
        },
        legend: {
          display: false
        },
        tooltips: {
          enabled: true
        },
        elements: {
          line: {
            tension: .35
          },
          point: {
            radius: 0
          }
        }
      }
      var revenueChartCanvas = $("#order-chart").get(0).getContext("2d");
      var revenueChart = new Chart(revenueChartCanvas, {
        type: 'line',
        data: areaData,
        options: areaOptions
      });
    }
    if ($("#order-chart-dark").length) {
      var areaData = {
        labels: ["10", "", "", "20", "", "", "30", "", "", "40", "", "", "50", "", "", "60", "", "", "70"],
        datasets: [
          {
            data: [200, 480, 700, 600, 620, 350, 380, 350, 850, "600", "650", "350", "590", "350", "620", "500", "990", "780", "650"],
            borderColor: [
              '#4747A1'
            ],
            borderWidth: 2,
            fill: false,
            label: "Orders"
          },
          {
            data: [400, 450, 410, 500, 480, 600, 450, 550, 460, "560", "450", "700", "450", "640", "550", "650", "400", "850", "800"],
            borderColor: [
              '#F09397'
            ],
            borderWidth: 2,
            fill: false,
            label: "Downloads"
          }
        ]
      };
      var areaOptions = {
        responsive: true,
        maintainAspectRatio: true,
        plugins: {
          filler: {
            propagate: false
          }
        },
        scales: {
          xAxes: [{
            display: true,
            ticks: {
              display: true,
              padding: 10,
              fontColor: "#fff"
            },
            gridLines: {
              display: false,
              drawBorder: false,
              color: 'transparent',
              zeroLineColor: '#575757'
            }
          }],
          yAxes: [{
            display: true,
            ticks: {
              display: true,
              autoSkip: false,
              maxRotation: 0,
              stepSize: 200,
              min: 200,
              max: 1200,
              padding: 18,
              fontColor: "#fff"
            },
            gridLines: {
              display: true,
              color: "#575757",
              drawBorder: false
            }
          }]
        },
        legend: {
          display: false
        },
        tooltips: {
          enabled: true
        },
        elements: {
          line: {
            tension: .35
          },
          point: {
            radius: 0
          }
        }
      }
      var revenueChartCanvas = $("#order-chart-dark").get(0).getContext("2d");
      var revenueChart = new Chart(revenueChartCanvas, {
        type: 'line',
        data: areaData,
        options: areaOptions
      });
    }
    if ($("#sales-chart").length) {
      var SalesChartCanvas = $("#sales-chart").get(0).getContext("2d");
      var SalesChart = new Chart(SalesChartCanvas, {
        type: 'bar',
        data: {
          labels: ["Jan", "Feb", "Mar", "Apr", "May"],
          datasets: [{
            label: 'Offline Sales',
            data: [480, 230, 470, 210, 330],
            backgroundColor: '#98BDFF'
          },
          {
            label: 'Online Sales',
            data: [400, 340, 550, 480, 170],
            backgroundColor: '#4B49AC'
          }
          ]
        },
        options: {
          cornerRadius: 5,
          responsive: true,
          maintainAspectRatio: true,
          layout: {
            padding: {
              left: 0,
              right: 0,
              top: 20,
              bottom: 0
            }
          },
          scales: {
            yAxes: [{
              display: true,
              gridLines: {
                display: true,
                drawBorder: false,
                color: "#F2F2F2"
              },
              ticks: {
                display: true,
                min: 0,
                max: 560,
                callback: function (value, index, values) {
                  return value + '$';
                },
                autoSkip: true,
                maxTicksLimit: 10,
                fontColor: "#6C7383"
              }
            }],
            xAxes: [{
              stacked: false,
              ticks: {
                beginAtZero: true,
                fontColor: "#6C7383"
              },
              gridLines: {
                color: "rgba(0, 0, 0, 0)",
                display: false
              },
              barPercentage: 1
            }]
          },
          legend: {
            display: false
          },
          elements: {
            point: {
              radius: 0
            }
          }
        },
      });
      document.getElementById('sales-legend').innerHTML = SalesChart.generateLegend();
    }
    if ($("#sales-chart-dark").length) {
      var SalesChartCanvas = $("#sales-chart-dark").get(0).getContext("2d");
      var SalesChart = new Chart(SalesChartCanvas, {
        type: 'bar',
        data: {
          labels: ["Jan", "Feb", "Mar", "Apr", "May"],
          datasets: [{
            label: 'Offline Sales',
            data: [480, 230, 470, 210, 330],
            backgroundColor: '#98BDFF'
          },
          {
            label: 'Online Sales',
            data: [400, 340, 550, 480, 170],
            backgroundColor: '#4B49AC'
          }
          ]
        },
        options: {
          cornerRadius: 5,
          responsive: true,
          maintainAspectRatio: true,
          layout: {
            padding: {
              left: 0,
              right: 0,
              top: 20,
              bottom: 0
            }
          },
          scales: {
            yAxes: [{
              display: true,
              gridLines: {
                display: true,
                drawBorder: false,
                color: "#575757"
              },
              ticks: {
                display: true,
                min: 0,
                max: 500,
                callback: function (value, index, values) {
                  return value + '$';
                },
                autoSkip: true,
                maxTicksLimit: 10,
                fontColor: "#F0F0F0"
              }
            }],
            xAxes: [{
              stacked: false,
              ticks: {
                beginAtZero: true,
                fontColor: "#F0F0F0"
              },
              gridLines: {
                color: "#575757",
                display: false
              },
              barPercentage: 1
            }]
          },
          legend: {
            display: false
          },
          elements: {
            point: {
              radius: 0
            }
          }
        },
      });
      document.getElementById('sales-legend').innerHTML = SalesChart.generateLegend();
    }
    if ($("#north-america-chart").length) {
      var areaData = {
        labels: ["Jan", "Feb", "Mar"],
        datasets: [{
          data: [100, 50, 50],
          backgroundColor: [
            "#4B49AC", "#FFC100", "#248AFD",
          ],
          borderColor: "rgba(0,0,0,0)"
        }
        ]
      };
      var areaOptions = {
        responsive: true,
        maintainAspectRatio: true,
        segmentShowStroke: false,
        cutoutPercentage: 78,
        elements: {
          arc: {
            borderWidth: 4
          }
        },
        legend: {
          display: false
        },
        tooltips: {
          enabled: true
        },
        legendCallback: function (chart) {
          var text = [];
          text.push('<div class="report-chart">');
          text.push('<div class="d-flex justify-content-between mx-4 mx-xl-5 mt-3"><div class="d-flex align-items-center"><div class="mr-3" style="width:20px; height:20px; border-radius: 50%; background-color: ' + chart.data.datasets[0].backgroundColor[0] + '"></div><p class="mb-0">Offline sales</p></div>');
          text.push('<p class="mb-0">88333</p>');
          text.push('</div>');
          text.push('<div class="d-flex justify-content-between mx-4 mx-xl-5 mt-3"><div class="d-flex align-items-center"><div class="mr-3" style="width:20px; height:20px; border-radius: 50%; background-color: ' + chart.data.datasets[0].backgroundColor[1] + '"></div><p class="mb-0">Online sales</p></div>');
          text.push('<p class="mb-0">66093</p>');
          text.push('</div>');
          text.push('<div class="d-flex justify-content-between mx-4 mx-xl-5 mt-3"><div class="d-flex align-items-center"><div class="mr-3" style="width:20px; height:20px; border-radius: 50%; background-color: ' + chart.data.datasets[0].backgroundColor[2] + '"></div><p class="mb-0">Returns</p></div>');
          text.push('<p class="mb-0">39836</p>');
          text.push('</div>');
          text.push('</div>');
          return text.join("");
        },
      }
      var northAmericaChartPlugins = {
        beforeDraw: function (chart) {
          var width = chart.chart.width,
            height = chart.chart.height,
            ctx = chart.chart.ctx;

          ctx.restore();
          var fontSize = 3.125;
          ctx.font = "500 " + fontSize + "em sans-serif";
          ctx.textBaseline = "middle";
          ctx.fillStyle = "#13381B";

          var text = "90",
            textX = Math.round((width - ctx.measureText(text).width) / 2),
            textY = height / 2;

          ctx.fillText(text, textX, textY);
          ctx.save();
        }
      }
      var northAmericaChartCanvas = $("#north-america-chart").get(0).getContext("2d");
      var northAmericaChart = new Chart(northAmericaChartCanvas, {
        type: 'doughnut',
        data: areaData,
        options: areaOptions,
        plugins: northAmericaChartPlugins
      });
      document.getElementById('north-america-legend').innerHTML = northAmericaChart.generateLegend();
    }
    if ($("#north-america-chart-dark").length) {
      var areaData = {
        labels: ["Jan", "Feb", "Mar"],
        datasets: [{
          data: [100, 50, 50],
          backgroundColor: [
            "#4B49AC", "#FFC100", "#248AFD",
          ],
          borderColor: "rgba(0,0,0,0)"
        }
        ]
      };
      var areaOptions = {
        responsive: true,
        maintainAspectRatio: true,
        segmentShowStroke: false,
        cutoutPercentage: 78,
        elements: {
          arc: {
            borderWidth: 4
          }
        },
        legend: {
          display: false
        },
        tooltips: {
          enabled: true
        },
        legendCallback: function (chart) {
          var text = [];
          text.push('<div class="report-chart">');
          text.push('<div class="d-flex justify-content-between mx-4 mx-xl-5 mt-3"><div class="d-flex align-items-center"><div class="mr-3" style="width:20px; height:20px; border-radius: 50%; background-color: ' + chart.data.datasets[0].backgroundColor[0] + '"></div><p class="mb-0">Offline sales</p></div>');
          text.push('<p class="mb-0">88333</p>');
          text.push('</div>');
          text.push('<div class="d-flex justify-content-between mx-4 mx-xl-5 mt-3"><div class="d-flex align-items-center"><div class="mr-3" style="width:20px; height:20px; border-radius: 50%; background-color: ' + chart.data.datasets[0].backgroundColor[1] + '"></div><p class="mb-0">Online sales</p></div>');
          text.push('<p class="mb-0">66093</p>');
          text.push('</div>');
          text.push('<div class="d-flex justify-content-between mx-4 mx-xl-5 mt-3"><div class="d-flex align-items-center"><div class="mr-3" style="width:20px; height:20px; border-radius: 50%; background-color: ' + chart.data.datasets[0].backgroundColor[2] + '"></div><p class="mb-0">Returns</p></div>');
          text.push('<p class="mb-0">39836</p>');
          text.push('</div>');
          text.push('</div>');
          return text.join("");
        },
      }
      var northAmericaChartPlugins = {
        beforeDraw: function (chart) {
          var width = chart.chart.width,
            height = chart.chart.height,
            ctx = chart.chart.ctx;

          ctx.restore();
          var fontSize = 3.125;
          ctx.font = "500 " + fontSize + "em sans-serif";
          ctx.textBaseline = "middle";
          ctx.fillStyle = "#fff";

          var text = "90",
            textX = Math.round((width - ctx.measureText(text).width) / 2),
            textY = height / 2;

          ctx.fillText(text, textX, textY);
          ctx.save();
        }
      }
      var northAmericaChartCanvas = $("#north-america-chart-dark").get(0).getContext("2d");
      var northAmericaChart = new Chart(northAmericaChartCanvas, {
        type: 'doughnut',
        data: areaData,
        options: areaOptions,
        plugins: northAmericaChartPlugins
      });
      document.getElementById('north-america-legend').innerHTML = northAmericaChart.generateLegend();
    }

    if ($("#south-america-chart").length) {
      var areaData = {
        labels: ["Jan", "Feb", "Mar"],
        datasets: [{
          data: [60, 70, 70],
          backgroundColor: [
            "#4B49AC", "#FFC100", "#248AFD",
          ],
          borderColor: "rgba(0,0,0,0)"
        }
        ]
      };
      var areaOptions = {
        responsive: true,
        maintainAspectRatio: true,
        segmentShowStroke: false,
        cutoutPercentage: 78,
        elements: {
          arc: {
            borderWidth: 4
          }
        },
        legend: {
          display: false
        },
        tooltips: {
          enabled: true
        },
        legendCallback: function (chart) {
          var text = [];
          text.push('<div class="report-chart">');
          text.push('<div class="d-flex justify-content-between mx-4 mx-xl-5 mt-3"><div class="d-flex align-items-center"><div class="mr-3" style="width:20px; height:20px; border-radius: 50%; background-color: ' + chart.data.datasets[0].backgroundColor[0] + '"></div><p class="mb-0">Offline sales</p></div>');
          text.push('<p class="mb-0">495343</p>');
          text.push('</div>');
          text.push('<div class="d-flex justify-content-between mx-4 mx-xl-5 mt-3"><div class="d-flex align-items-center"><div class="mr-3" style="width:20px; height:20px; border-radius: 50%; background-color: ' + chart.data.datasets[0].backgroundColor[1] + '"></div><p class="mb-0">Online sales</p></div>');
          text.push('<p class="mb-0">630983</p>');
          text.push('</div>');
          text.push('<div class="d-flex justify-content-between mx-4 mx-xl-5 mt-3"><div class="d-flex align-items-center"><div class="mr-3" style="width:20px; height:20px; border-radius: 50%; background-color: ' + chart.data.datasets[0].backgroundColor[2] + '"></div><p class="mb-0">Returns</p></div>');
          text.push('<p class="mb-0">290831</p>');
          text.push('</div>');
          text.push('</div>');
          return text.join("");
        },
      }
      var southAmericaChartPlugins = {
        beforeDraw: function (chart) {
          var width = chart.chart.width,
            height = chart.chart.height,
            ctx = chart.chart.ctx;

          ctx.restore();
          var fontSize = 3.125;
          ctx.font = "600 " + fontSize + "em sans-serif";
          ctx.textBaseline = "middle";
          ctx.fillStyle = "#000";

          var text = "76",
            textX = Math.round((width - ctx.measureText(text).width) / 2),
            textY = height / 2;

          ctx.fillText(text, textX, textY);
          ctx.save();
        }
      }
      var southAmericaChartCanvas = $("#south-america-chart").get(0).getContext("2d");
      var southAmericaChart = new Chart(southAmericaChartCanvas, {
        type: 'doughnut',
        data: areaData,
        options: areaOptions,
        plugins: southAmericaChartPlugins
      });
      document.getElementById('south-america-legend').innerHTML = southAmericaChart.generateLegend();
    }
    if ($("#south-america-chart-dark").length) {
      var areaData = {
        labels: ["Jan", "Feb", "Mar"],
        datasets: [{
          data: [60, 70, 70],
          backgroundColor: [
            "#4B49AC", "#FFC100", "#248AFD",
          ],
          borderColor: "rgba(0,0,0,0)"
        }
        ]
      };
      var areaOptions = {
        responsive: true,
        maintainAspectRatio: true,
        segmentShowStroke: false,
        cutoutPercentage: 78,
        elements: {
          arc: {
            borderWidth: 4
          }
        },
        legend: {
          display: false
        },
        tooltips: {
          enabled: true
        },
        legendCallback: function (chart) {
          var text = [];
          text.push('<div class="report-chart">');
          text.push('<div class="d-flex justify-content-between mx-4 mx-xl-5 mt-3"><div class="d-flex align-items-center"><div class="mr-3" style="width:20px; height:20px; border-radius: 50%; background-color: ' + chart.data.datasets[0].backgroundColor[0] + '"></div><p class="mb-0">Offline sales</p></div>');
          text.push('<p class="mb-0">495343</p>');
          text.push('</div>');
          text.push('<div class="d-flex justify-content-between mx-4 mx-xl-5 mt-3"><div class="d-flex align-items-center"><div class="mr-3" style="width:20px; height:20px; border-radius: 50%; background-color: ' + chart.data.datasets[0].backgroundColor[1] + '"></div><p class="mb-0">Online sales</p></div>');
          text.push('<p class="mb-0">630983</p>');
          text.push('</div>');
          text.push('<div class="d-flex justify-content-between mx-4 mx-xl-5 mt-3"><div class="d-flex align-items-center"><div class="mr-3" style="width:20px; height:20px; border-radius: 50%; background-color: ' + chart.data.datasets[0].backgroundColor[2] + '"></div><p class="mb-0">Returns</p></div>');
          text.push('<p class="mb-0">290831</p>');
          text.push('</div>');
          text.push('</div>');
          return text.join("");
        },
      }
      var southAmericaChartPlugins = {
        beforeDraw: function (chart) {
          var width = chart.chart.width,
            height = chart.chart.height,
            ctx = chart.chart.ctx;

          ctx.restore();
          var fontSize = 3.125;
          ctx.font = "600 " + fontSize + "em sans-serif";
          ctx.textBaseline = "middle";
          ctx.fillStyle = "#fff";

          var text = "76",
            textX = Math.round((width - ctx.measureText(text).width) / 2),
            textY = height / 2;

          ctx.fillText(text, textX, textY);
          ctx.save();
        }
      }
      var southAmericaChartCanvas = $("#south-america-chart-dark").get(0).getContext("2d");
      var southAmericaChart = new Chart(southAmericaChartCanvas, {
        type: 'doughnut',
        data: areaData,
        options: areaOptions,
        plugins: southAmericaChartPlugins
      });
      document.getElementById('south-america-legend').innerHTML = southAmericaChart.generateLegend();
    }

    function format(d) {
      return d;
      // `d` is the original data object for the row
      // return '<table cellpadding="5" cellspacing="0" border="0" style="width:100%;">'+
      //     '<tr class="expanded-row">'+
      //         '<td colspan="8" class="row-bg"><div><div class="d-flex justify-content-between"><div class="cell-hilighted"><div class="d-flex mb-2"><div class="mr-2 min-width-cell"><p>Policy start date</p><h6>25/04/2020</h6></div><div class="min-width-cell"><p>Policy end date</p><h6>24/04/2021</h6></div></div><div class="d-flex"><div class="mr-2 min-width-cell"><p>Sum insured</p><h5>$26,000</h5></div><div class="min-width-cell"><p>Premium</p><h5>$1200</h5></div></div></div><div class="expanded-table-normal-cell"><div class="mr-2 mb-4"><p>Quote no.</p><h6>Incs234</h6></div><div class="mr-2"><p>Vehicle Reg. No.</p><h6>KL-65-A-7004</h6></div></div><div class="expanded-table-normal-cell"><div class="mr-2 mb-4"><p>Policy number</p><h6>Incsq123456</h6></div><div class="mr-2"><p>Policy number</p><h6>Incsq123456</h6></div></div><div class="expanded-table-normal-cell"><div class="mr-2 mb-3 d-flex"><div class="highlighted-alpha"> A</div><div><p>Agent / Broker</p><h6>Abcd Enterprices</h6></div></div><div class="mr-2 d-flex"> <img src="../../images/faces/face5.jpg" alt="profile"/><div><p>Policy holder Name & ID Number</p><h6>Phillip Harris / 1234567</h6></div></div></div><div class="expanded-table-normal-cell"><div class="mr-2 mb-4"><p>Branch</p><h6>Koramangala, Bangalore</h6></div></div><div class="expanded-table-normal-cell"><div class="mr-2 mb-4"><p>Channel</p><h6>Online</h6></div></div></div></div></td>'
      //     '</tr>'+
      // '</table>';
    }
    var table = $('#example').DataTable({
      "ajax": "js/data.txt",
      "columns": [
        { "data": "Quote" },
        { "data": "Product" },
        { "data": "Business" },
        { "data": "Policy" },
        { "data": "Premium" },
        { "data": "Status" },
        { "data": "Updated" },
        {
          "className": 'details-control',
          "orderable": false,
          "data": null,
          "defaultContent": ''
        }
      ],
      "order": [[1, 'asc']],
      "paging": false,
      "ordering": true,
      "info": false,
      "filter": false,
      columnDefs: [{
        orderable: false,
        className: 'select-checkbox',
        targets: 0
      }],
      select: {
        style: 'os',
        selector: 'td:first-child'
      }
    });
    //-------------------------- students update------------------------------------------------
    $('.newstudent').on('click', function (e) {
      e.preventDefault();
      $parentDiv = $(this).closest('div.viewStudents_data');
      // console.log('hwlo');
      var recordId = $(this).data('record_id'),
        sName = $parentDiv.find('.sName').text(),
        fName = $parentDiv.find('.fName').text(),
        mName = $parentDiv.find('.mName').text(),
        mobile = $parentDiv.find('.mobile').text(),
        r_No = $parentDiv.find('.roll_no').text(),
        birth = $parentDiv.find('.dob').text(),
        gender = $parentDiv.find('.gender').text(),
        category = $parentDiv.find('.category').text(),
        caste = $parentDiv.find('.caste').text(),
        email = $parentDiv.find('.email').text(),
        addmision = $parentDiv.find('.admission_date').text(),
        address = $parentDiv.find('.address').text(),
        student_district = $parentDiv.find('.student_district_name').text(),
        aadharNo = $parentDiv.find('.aadhar_no').text(),
        familyId = $parentDiv.find('.ppp').text(),
        vaccine_id = $parentDiv.find('.sel').text();
      console.log(vaccine_id);
      $('#studentrejister').find('#sname').text(sName);
      $('#studentrejister').find('#fname').text(fName);
      $('#studentrejister').find('#mName').text(mName);
      $('#studentrejister').find('#email').text(email);
      $('#studentrejister').find('#mobile').text(mobile);
      $('#studentrejister').find('#roll_no').text(r_No);
      $('#studentrejister').find('#addmission').text(addmision);
      $('#studentrejister').find('#aadhar').text(aadharNo);
      $('#studentrejister').find('#ppp').text(familyId);
      $('#studentrejister').find('#ppp').text(vaccine_id);
      $("#rejister").modal('show');
    });
    $('.newstudent').on('click', function () {

      $("#rejister").modal('show');
    });
    $('.vaccinestudents').on('click', function () {
      $("#vaccination").modal('show');
    });


  });
  (jQuery);
});
// $(document).on('click', 'td.details-control', function () {
//   var tr = $(this).closest('tr');
//   var targetTr = tr.next('tr');
//   if (targetTr.is(':visible')) {
//     targetTr.hide();
//     tr.removeClass('shown');
//   } else {
//     tr.addClass('shown');
//     targetTr.show();
//   }
// });
$(document).on('click', 'td.details-control', function () {
  var tr = $(this).closest('tr');
  var targetTr = tr.next('tr');
  $('#studentsTable').find('tr.target_row').hide();
  targetTr.show();
  $('tr.upper_row').removeClass('shown');
  tr.addClass('shown');
})
$('.editRecord').on('click', function (e) {
  e.preventDefault();
  $parentTr = $(this).closest('tr');
  var recordId = $(this).data('record_id'),
    sName = $parentTr.find('.v_name').text(),
    fName = $parentTr.find('.v_company').text();
  $('#updateVaccine').find('#recordid').val(recordId);
  $('#updateVaccine').find('#name').val(sName);
  // console.log(sName);
  $('#updateVaccine').find('#company').val(fName);
  $("#MyPopup").modal('show');
});
$('.editStudentsRecord').on('click', function (e) {
  e.preventDefault(); e.stopPropagation();
  $parentDiv = $(this).closest('div.viewStudents_data');
  var recordId = $(this).data('record_id'),
    sName = $parentDiv.find('.sName').text(),
    fName = $parentDiv.find('.fName').text(),
    mName = $parentDiv.find('.mName').text(),
    mobile = $parentDiv.find('.mobile').text(),
    r_No = $parentDiv.find('.roll_no').text(),
    birth = $parentDiv.find('.dob').text(),
    gender = $parentDiv.find('.gender').text(),
    category = $parentDiv.find('.category').text(),
    caste = $parentDiv.find('.caste').text(),
    email = $parentDiv.find('.email').text(),
    addmision = $parentDiv.find('.admission_date').text(),
    address = $parentDiv.find('.address').text(),
    student_district = $parentDiv.find('.student_district_name').text(),
    aadharNo = $parentDiv.find('.aadhar_no').text(),
    familyId = $parentDiv.find('.ppp').text();
    vacineId = $parentDiv.find('.vaccine_name').data('vacineid');
    currentPositive = $parentDiv.find('#currentStatusStatus').data('currentstatus');
  // console.log(sName,fName,mName,mobile,r_No,birth,gender,category,caste,email,addmision,address,student_district,aadharNo,familyId);
  $('#updateStudent').find('#updateStudent').val(recordId);
  $('#updateStudent').find('#sname').val(sName);
  $('#updateStudent').find('#fname').val(fName);
  $('#updateStudent').find('#mName').val(mName);
  $('#updateStudent').find('#email').val(email);
  $('#updateStudent').find('#mobile').val(mobile);
  $('#updateStudent').find('#roll_no').val(r_No);
  $('#updateStudent').find('#addmission').val(addmision);
  $('#updateStudent').find('#aadhar').val(aadharNo);
  $('#updateStudent').find('#ppp').val(familyId);
  $('#updateStudent').find('#vaccineId').val(vacineId);
  // currentPositive = currentPositive == 0 ? 1 : 0;
  $('#updateStudent').find('#currentStatusStatusUpdate').prop('checked', currentPositive);
  $("#MyPopup").modal('show');
});
$('.editStudentsCovidRecord').on('click', function (e, $parentDiv) {
  e.preventDefault();
  $parentDiv = $(this).closest('div.covidNP');
  var recordId = $(this).data('record_id'),
    sName = $parentDiv.find('.sName').text(),
    fName = $parentDiv.find('.fName').text(),
    mName = $parentDiv.find('.mName').text(),
    mobile = $parentDiv.find('.mobile').text(),
    r_No = $parentDiv.find('.roll_no').text(),
    birth = $parentDiv.find('.dob').text(),
    gender = $parentDiv.find('.gender').text(),
    category = $parentDiv.find('.category').text(),
    caste = $parentDiv.find('.caste').text(),
    email = $parentDiv.find('.email').text(),
    addmision = $parentDiv.find('.admission_date').text(),
    address = $parentDiv.find('.address').text(),
    student_district = $parentDiv.find('.student_district_name').text(),
    aadharNo = $parentDiv.find('.aadhar_no').text(),
    familyId = $parentDiv.find('.ppp').text();
  // familyId = $parentDiv.find('#selectVaccine').text();
  console.log(sName, fName, mName, mobile, r_No, birth, gender, category, caste, email, addmision, address, student_district, aadharNo, familyId);
  console.log(recordId);
  $('#updateStudentscovid').find('#updateCovid').val(recordId);
  $('#updateStudentscovid').find('#sname').val(sName);
  $('#updateStudentscovid').find('#fname').val(fName);
  $('#updateStudentscovid').find('#mName').val(mName);
  $('#updateStudentscovid').find('#email').val(email);
  $('#updateStudentscovid').find('#mobile').val(mobile);
  $('#updateStudentscovid').find('#roll_no').val(r_No);
  $('#updateStudentscovid').find('#addmission').val(addmision);
  $('#updateStudentscovid').find('#aadhar').val(aadharNo);
  $('#updateStudentscovid').find('#ppp').val(familyId);
  // $('#updateStudentscovid').find('#selectVaccine').val(familyId);
  $("#MyPopup").modal('show');
});
// -----------------------------------students registraion starts here ------------
$('.vaccinestudent').on('click', function (e) {
  e.preventDefault();
  $parentDiv = $(this).closest('div.view_data');
  var sName = $parentDiv.find('.name').text(),
    fName = $parentDiv.find('.company').text();
  // console.log(sName);
  $('#updateVaccineRwcords').find('#name').text(sName);
  $('#updateVaccineRwcords').find('#company').text(fName);
  $("#updateVaccineRecords").modal('show');
});
$('.covidCheck').on('click', function (e) {
  e.preventDefault();
  $parentDiv = $(this).closest('div.viewStudents_data');
  var sName = $parentDiv.find('.sName').text(),
    fName = $parentDiv.find('.fName').text(),
    mName = $parentDiv.find('.mName').text(),
    mobile = $parentDiv.find('.mobile').text(),
    r_No = $parentDiv.find('.roll_no').text(),
    birth = $parentDiv.find('.dob').text(),
    gender = $parentDiv.find('.gender').text(),
    category = $parentDiv.find('.category').text(),
    caste = $parentDiv.find('.caste').text(),
    email = $parentDiv.find('.email').text(),
    addmision = $parentDiv.find('.admission_date').text(),
    address = $parentDiv.find('.address').text(),
    student_district = $parentDiv.find('.student_district_name').text(),
    aadharNo = $parentDiv.find('.aadhar_no').text(),
    familyId = $parentDiv.find('.ppp').text();
  // console.log(sName,fName,mName,mobile,r_No,birth,gender,category,caste,email,addmision,address,student_district,aadharNo,familyId);
  // console.log(recordId);
  // $('#updateStudents').find('#updateStudent').text(recordId);
  $('#covidDataUpdate').find('#sname').text(sName);
  $('#covidDataUpdate').find('#fname').text(fName);
  $('#covidDataUpdate').find('#mName').text(mName);
  $('#covidDataUpdate').find('#email').text(email);
  $('#covidDataUpdate').find('#mobile').text(mobile);
  $('#covidDataUpdate').find('#roll_no').text(r_No);
  $('#covidDataUpdate').find('#addmission').text(addmision);
  $('#covidDataUpdate').find('#aadhar').text(aadharNo);
  $('#covidDataUpdate').find('#ppp').text(familyId);
  $("#covid_np").modal('show');
});
//------------------------------------------Delete with ajax-------------------------------
$('.delete').on('click', function () {
  var delable_id = $(this).data('dell_id');
  Swal.fire({
    title: 'Are you sure?',
    text: "You won't be able to revert this!",
    icon: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Yes, delete it!'
  }).then((result) => {
    if (result.isConfirmed) {
      $.ajax({
        url: 'functions/ajax.php',
        type: 'POST',
        dataType: 'json',
        data: { id: delable_id },
        success: function (response) {
          if (response == 1) {
            $('.delid-' + delable_id).remove();
          }
        }
      });
      Swal.fire(
        'Deleted!',
        'Your file has been deleted.',
        'success'
      )
    }
  });
});
$('.delete1').on('click', function () {
  var delable_id = $(this).data('dell_id');
  // console.log(delable_id);
  Swal.fire({
    title: 'Are you sure?',
    text: "You won't be able to revert this!",
    icon: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Yes, delete it!'
  }).then((result) => {
    if (result.isConfirmed) {
      $.ajax({
        url: 'functions/ajax.php',
        type: 'POST',
        dataType: 'json',
        data: { ids: delable_id },
        success: function (response) {
          if (response == 1) {
            $('.delid-' + delable_id).remove();
          }
        }
      });
      Swal.fire(
        'Deleted!',
        'Your file has been deleted.',
        'success'
      )
    }
  });
});
$('.delete2').on('click', function () {
  var delable_id = $(this).data('dell_id');
  Swal.fire({
    title: 'Are you sure?',
    text: "You won't be able to revert this!",
    icon: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Yes, delete it!'
  }).then((result) => {
    if (result.isConfirmed) {
      $.ajax({
        url: 'functions/ajax.php',
        type: 'POST',
        dataType: 'json',
        data: { ida: delable_id },
        success: function (response) {
          if (response == 1) {
            $('.delid-' + delable_id).remove();
          }
        }
      });
      Swal.fire(
        'Deleted!',
        'Your file has been deleted.',
        'success'
      )
    }
  });
});
// --------------------------------validation starts------------------------------
  $("#submitNewRecords").on('click', function (e) {
    // e.preventDefault();
    var studentName = $('#stName').val();
    var email = $('#stEmail').val();
    var phone = $('#stMobile').val();
    var roll_no = $('#stRollNo').val();
    var admision = $('#stAddmission').val();
    var aadhar = $('#stAadhar').val();
    var fatherName = $('#stfName').val();
    var motherName = $('#stmName').val();
    var className = $('#stClass').val();
    var ppp = $('#ppp').val();
    var select = $('#vacsId').val();
    if (studentName == "") {
      alert('Student name is required');
      return false;
    } else if (fatherName == "") {
      alert('Father name is required');
      return false;
    } else if (motherName == "") {
      alert('mother Name is required');
      return false;
    } else if (email == "") {
      alert('Email  is required');
      return false;
    } else if (phone == "") {
      alert('mobile no is  required');
      return false;
    } else if (roll_no == "") {
      alert('Student Roll no  is required');
      return false;
    } else if (className == "") {
      alert('Class name is required');
      return false;
    } else if (admision == "") {
      alert('Addmison Date is required');
      return false;
    } else if (aadhar == "") {
      alert('Aadhar number is required');
      return false;
    } else if (ppp == "") {
      alert('Family Id number is required');
      return false;
    } else if (select == "") {
      alert('Vaccine name  is required');
      return false;
    }
    $('#studentrejister').submit();
  });
// --------------------------------Update Student------------------------------
  $("#updateStudentBtn").on('click', function (e) {
    // e.preventDefault();
    var studentName = $('#sname').val();
    var email = $('#email').val();
    var phone = $('#mobile').val();
    var roll_no = $('#roll_no').val();
    var admision = $('#addmission').val();
    var aadhar = $('#aadhar').val();
    var fatherName = $('#fname').val();
    var motherName = $('#mName').val();
    var className = $('#stClass').val();
    var ppp = $('#ppp').val();
    var vaccineId = $('#vaccineId').val();
    if (studentName == "") {
      alert('Student name is required');
      return false;
    } 
    // else if (fatherName == "") {
    //   alert('Father name is required');
    //   return false;
    // } else if (motherName == "") {
    //   alert('mother Name is required');
    //   return false;
    // } 
    else if (email == "") {
      alert('Email  is required');
      return false;
    } else if (phone == "") {
      alert('mobile no is  required');
      return false;
    } else if (roll_no == "") {
      alert('Student Roll no  is required');
      return false;
    // } else if (className == "") {
    //   alert('Class name is required');
    //   return false;
    } else if (admision == "") {
      alert('Addmison Date is required');
      return false;
    } else if (aadhar == "") {
      alert('Aadhar number is required');
      return false;
    // } else if (ppp == "") {
    //   alert('Family Id number is required');
    //   return false;
    } else if (vaccineId == "") {
      alert('Vaccine name  is required');
      return false;
    }
    $('#updateStudent').submit();
  });