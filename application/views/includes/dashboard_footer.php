<footer class="text-center">
        <div class="mb-2">
          <small>
            © 2022 made with <i class="fa fa-heart" style="color:red"></i> by - <a target="_blank" rel="noopener noreferrer" href="https://azouaoui.netlify.com">
              Mohamed Azouaoui
            </a>
          </small>
        </div>
        <div>
          <a href="https://github.com/azouaoui-med" target="_blank">
            <img alt="GitHub followers" src="https://img.shields.io/github/followers/azouaoui-med?label=github&style=social" />
          </a>
          <a href="https://twitter.com/azouaoui_med" target="_blank">
            <img alt="Twitter Follow" src="https://img.shields.io/twitter/follow/azouaoui_med?label=twitter&style=social" />
          </a>
        </div>
      </footer>
    </div>
  </main>
  <!-- page-content" -->
</div>
<!-- page-wrapper -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
    
</body>

</html>
      <!-- End Navbar -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.9.1/chart.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.9.1/chart.esm.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.9.1/chart.esm.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.9.1/chart.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.9.1/chart.mjs"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.9.1/helpers.esm.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.9.1/helpers.esm.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.9.1/helpers.mjs"></script>
  <script>

    jQuery(function ($) {

    $(".sidebar-dropdown > a").click(function() {
    $(".sidebar-submenu").slideUp(200);
    if (
    $(this)
      .parent()
      .hasClass("active")
    ) {
    $(".sidebar-dropdown").removeClass("active");
    $(this)
      .parent()
      .removeClass("active");
    } else {
    $(".sidebar-dropdown").removeClass("active");
    $(this)
      .next(".sidebar-submenu")
      .slideDown(200);
    $(this)
      .parent()
      .addClass("active");
    }
    });

    $("#close-sidebar").click(function() {
    $(".page-wrapper").removeClass("toggled");
    });
    $("#show-sidebar").click(function() {
    $(".page-wrapper").addClass("toggled");
    });
    });

    $(document).ready(function() {
      $().ready(function() {
        $sidebar = $('.sidebar');
        $navbar = $('.navbar');
        $main_panel = $('.main-panel');

        $full_page = $('.full-page');

        $sidebar_responsive = $('body > .navbar-collapse');
        sidebar_mini_active = true;
        white_color = false;

        window_width = $(window).width();

        fixed_plugin_open = $('.sidebar .sidebar-wrapper .nav li.active a p').html();



        $('.fixed-plugin a').click(function(event) {
          if ($(this).hasClass('switch-trigger')) {
            if (event.stopPropagation) {
              event.stopPropagation();
            } else if (window.event) {
              window.event.cancelBubble = true;
            }
          }
        });

        $('.fixed-plugin .background-color span').click(function() {
          $(this).siblings().removeClass('active');
          $(this).addClass('active');

          var new_color = $(this).data('color');

          if ($sidebar.length != 0) {
            $sidebar.attr('data', new_color);
          }

          if ($main_panel.length != 0) {
            $main_panel.attr('data', new_color);
          }

          if ($full_page.length != 0) {
            $full_page.attr('filter-color', new_color);
          }

          if ($sidebar_responsive.length != 0) {
            $sidebar_responsive.attr('data', new_color);
          }
        });

        $('.switch-sidebar-mini input').on("switchChange.bootstrapSwitch", function() {
          var $btn = $(this);

          if (sidebar_mini_active == true) {
            $('body').removeClass('sidebar-mini');
            sidebar_mini_active = false;
            blackDashboard.showSidebarMessage('Sidebar mini deactivated...');
          } else {
            $('body').addClass('sidebar-mini');
            sidebar_mini_active = true;
            blackDashboard.showSidebarMessage('Sidebar mini activated...');
          }

          // we simulate the window Resize so the charts will get updated in realtime.
          var simulateWindowResize = setInterval(function() {
            window.dispatchEvent(new Event('resize'));
          }, 180);

          // we stop the simulation of Window Resize after the animations are completed
          setTimeout(function() {
            clearInterval(simulateWindowResize);
          }, 1000);
        });

        $('.switch-change-color input').on("switchChange.bootstrapSwitch", function() {
          var $btn = $(this);

          if (white_color == true) {

            $('body').addClass('change-background');
            setTimeout(function() {
              $('body').removeClass('change-background');
              $('body').removeClass('white-content');
            }, 900);
            white_color = false;
          } else {

            $('body').addClass('change-background');
            setTimeout(function() {
              $('body').removeClass('change-background');
              $('body').addClass('white-content');
            }, 900);

            white_color = true;
          }


        });

        $('.light-badge').click(function() {
          $('body').addClass('white-content');
        });

        $('.dark-badge').click(function() {
          $('body').removeClass('white-content');
        });
      });
    });
  </script>
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/js/demos.js
      demo.initDashboardPageCharts();

    });
  </script>
  <script src="https://cdn.trackjs.com/agent/v3/latest/t.js"></script>
  <script>
    window.TrackJS &&
      TrackJS.install({
        token: "ee6fab19c5a04ac1a32a645abde4613a",
        application: "black-dashboard-free"
      });
  </script>
  
<!--   Core JS Files   -->
	<script src=<?php echo base_url('/application/views/dashboard/assets/js/core/jquery.min.js') ?>></script>
	<script src=<?php echo base_url('/application/views/dashboard/assets/js/core/popper.min.js') ?>></script>
	<script src=<?php echo base_url('/application/views/dashboard/assets/js/core/bootstrap.min.js') ?>></script>
	<script src=<?php echo base_url('/application/views/dashboard/assets/js/plugins/perfect-scrollbar.jquery.min.js') ?>></script>
	<!--  Google Maps Plugin    -->
	<!-- Place this tag in your head or just before your close body tag. -->
	<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
	<!-- Chart JS -->
	<script src=<?php echo base_url('/application/views/dashboard/assets/js/plugins/chartjs.min.js') ?>></script>
	<!--  Notifications Plugin    -->
	<script src=<?php echo base_url('/application/views/dashboard/assets/js/plugins/bootstrap-notify.js') ?>></script>
	<!-- Control Center for Black Dashboard: parallax effects, scripts for the example pages etc -->
	<script src=<?php echo base_url('/application/views/dashboard/assets/js/black-dashboard.min.js?v=1.0.0') ?>></script><!-- Black Dashboard DEMO methods, don't include it in your project! -->
	<script src=<?php echo base_url('/application/views/dashboard/assets/demo/demo.js') ?>></script>
  <script>
    function changeActiveTab(active_tab, active_tab_content){
      if(active_tab_content == "tabs-2"){
        showQuest();
      }
      if(active_tab_content == "tabs-3"){
        showQuestPar();
      }

      if(active_tab_content == "tabs-4"){
        showStatistics(document.getElementById('id_oferecimentos').value, document.getElementById('estatisticas'), 'a');
      }

      localStorage.setItem('last_tab', active_tab);
      localStorage.setItem('last_tab_content', active_tab_content);
    }

    $(document).ready(function() {
      $().ready(function() {
        $sidebar = $('.sidebar');
        $navbar = $('.navbar');
        $main_panel = $('.main-panel');

        $full_page = $('.full-page');

        $sidebar_responsive = $('body > .navbar-collapse');
        sidebar_mini_active = true;
        white_color = false;

        window_width = $(window).width();

        fixed_plugin_open = $('.sidebar .sidebar-wrapper .nav li.active a p').html();



        $('.fixed-plugin a').click(function(event) {
          if ($(this).hasClass('switch-trigger')) {
            if (event.stopPropagation) {
              event.stopPropagation();
            } else if (window.event) {
              window.event.cancelBubble = true;
            }
          }
        });

        $('.fixed-plugin .background-color span').click(function() {
          $(this).siblings().removeClass('active');
          $(this).addClass('active');

          var new_color = $(this).data('color');

          if ($sidebar.length != 0) {
            $sidebar.attr('data', new_color);
          }

          if ($main_panel.length != 0) {
            $main_panel.attr('data', new_color);
          }

          if ($full_page.length != 0) {
            $full_page.attr('filter-color', new_color);
          }

          if ($sidebar_responsive.length != 0) {
            $sidebar_responsive.attr('data', new_color);
          }
        });

        $('.switch-sidebar-mini input').on("switchChange.bootstrapSwitch", function() {
          var $btn = $(this);

          if (sidebar_mini_active == true) {
            $('body').removeClass('sidebar-mini');
            sidebar_mini_active = false;
            blackDashboard.showSidebarMessage('Sidebar mini deactivated...');
          } else {
            $('body').addClass('sidebar-mini');
            sidebar_mini_active = true;
            blackDashboard.showSidebarMessage('Sidebar mini activated...');
          }

          // we simulate the window Resize so the charts will get updated in realtime.
          var simulateWindowResize = setInterval(function() {
            window.dispatchEvent(new Event('resize'));
          }, 180);

          // we stop the simulation of Window Resize after the animations are completed
          setTimeout(function() {
            clearInterval(simulateWindowResize);
          }, 1000);
        });

        $('.switch-change-color input').on("switchChange.bootstrapSwitch", function() {
          var $btn = $(this);

          if (white_color == true) {

            $('body').addClass('change-background');
            setTimeout(function() {
              $('body').removeClass('change-background');
              $('body').removeClass('white-content');
            }, 900);
            white_color = false;
          } else {

            $('body').addClass('change-background');
            setTimeout(function() {
              $('body').removeClass('change-background');
              $('body').addClass('white-content');
            }, 900);

            white_color = true;
          }


        });

        $('.light-badge').click(function() {
          $('body').addClass('white-content');
        });

        $('.dark-badge').click(function() {
          $('body').removeClass('white-content');
        });
      });
    });


    function criarGraficoBarras(id_pergunta, pergunta, dominios, verde, amarelo, vermelho){
        var divColuna = document.createElement('DIV');
        divColuna.setAttribute("class", "col-md-12");
        var divCard = document.createElement('DIV');
        divCard.setAttribute("class", "card");
        var divCardHeader = document.createElement('DIV');
        divCardHeader.setAttribute("class", "card-header");
        var divCardTitle = document.createElement('DIV');
        divCardTitle.setAttribute("class", "card-title");
        divCardTitle.innerHTML = pergunta;
        var divCardBody = document.createElement('DIV');
        divCardBody.setAttribute("class", "card-body");
        var divChartContainer = document.createElement('DIV');
        divChartContainer.setAttribute("class", "chart-container");
        var divCSM = document.createElement('DIV');
        divCSM.setAttribute("class", "chartjs-size-monitor");
        divCSM.setAttribute("style", "position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;");
        var divCSME = document.createElement('DIV');
        divCSME.setAttribute("class", "chartjs-size-monitor-expand");
        divCSME.setAttribute("style", "position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;");
        var divCSMS = document.createElement('DIV');
        divCSMS.setAttribute("class", "chartjs-size-monitor-shrink");
        divCSMS.setAttribute("style", "position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;");    
        var divStyle1 = document.createElement('DIV');
        divStyle1.setAttribute("style", "position:absolute;width:1000000px;height:1000000px;left:0;top:0;");
        var divStyle2 = document.createElement('DIV');
        divStyle2.setAttribute("style", "position:absolute;width:200%;height:200%;left:0; top:0;");
        var canvas = document.createElement('canvas');
        canvas.setAttribute("style", "width: 380px; height: 300px; display: block;");
        canvas.setAttribute("width", "760");
        canvas.setAttribute("height", "600");
        canvas.setAttribute("class", "chartjs-render-monitor");
        canvas.setAttribute("id", "chart_" + id_pergunta);

        //Unir as divs
        divCSMS.appendChild(divStyle2);
        divCSME.appendChild(divStyle1);
        divCSM.appendChild(divCSME);
        divCSM.appendChild(divCSMS);
        divChartContainer.appendChild(divCSM);
        divChartContainer.appendChild(canvas);
        divCardBody.appendChild(divChartContainer);
        divCardHeader.appendChild(divCardTitle);
        divCard.appendChild(divCardHeader);
        divCard.appendChild(divCardBody);
        divColuna.appendChild(divCard);

        var multipleBarChart = canvas.getContext('2d');
        var color = Chart.helpers.color;

        var myMultipleBarChart = new Chart(multipleBarChart, {
            type: 'bar',
            data: {
                labels: dominios,
                datasets : [{
                    label: "Verde",
                    backgroundColor: '#46D24A',
                    borderColor: '#46D24A',
                    data: verde,
                },{
                    label: "Amarelo",
                    backgroundColor: '#FFB559',
                    borderColor: '#FFB559',
                    data: amarelo,
                }, {
                    label: "Vermelho",
                    backgroundColor: '#F36A71',
                    borderColor: '#F36A71',
                    data: vermelho,
                }],
            },
            options: {
                responsive: true, 
                maintainAspectRatio: false,
                legend: {
                    position : 'bottom'
                },
                title: {
                    display: true,
                    text: pergunta
                },
                tooltips: {
                    mode: 'index',
                    intersect: false
                },
                responsive: true,
                scales: {
                    xAxes: [{
                        stacked: true,
                        
                    }],
                    yAxes: [{
                        stacked: true, 
                        ticks: {
                            stepSize: 1
                        }
                                       
                    }]
                },
                parsing: false
            }
        });
        return divColuna;
    }
  </script>
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/js/demos.js
      demo.initDashboardPageCharts();

    });
  </script>
  <script src="https://cdn.trackjs.com/agent/v3/latest/t.js"></script>
  <script>
    window.TrackJS &&
      TrackJS.install({
        token: "ee6fab19c5a04ac1a32a645abde4613a",
        application: "black-dashboard-free"
      });
  </script>
</body>
</html>