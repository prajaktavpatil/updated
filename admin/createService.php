<!--
=========================================================
* Material Dashboard Dark Edition - v2.1.0
=========================================================

* Product Page: https://www.creative-tim.com/product/material-dashboard-dark
* Copyright 2019 Creative Tim (http://www.creative-tim.com)

* Coded by www.creative-tim.com

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <link
      rel="apple-touch-icon"
      sizes="76x76"
      href="./assets/img/apple-icon.png"
    />
    <link rel="icon" type="image/png" href="../assets/img/favicon.png" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>
      Create Service
    </title>
    <meta
      content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no"
      name="viewport"
    />
    <!--     Fonts and icons     -->
    <link
      rel="stylesheet"
      type="text/css"
      href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons"
    />
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css"
    />
    <!-- CSS Files -->
    <link
      href="./assets/css/material-dashboard.css?v=2.1.0"
      rel="stylesheet"
    />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="./assets/demo/demo.css" rel="stylesheet" />
  </head>

  <body class="dark-edition">
    <div class="wrapper">
      <div
        class="sidebar"
        data-color="purple"
        data-background-color="black"
        data-image="./assets/img/sidebar-2.jpg"
      >
        <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
        <div class="logo">
          <a href="http://www.creative-tim.com" class="simple-text logo-normal">
            Logo
          </a>
        </div>
        <div class="sidebar-wrapper">
          <ul class="nav">
            <li class="nav-item">
              <a class="nav-link" href="./dashboard.html">
                <i class="material-icons">dashboard</i>
                <p>Dashboard</p>
              </a>
            </li>
            <li class="navbar-item">
              <a
                href="#client"
                class="nav-link text-muted"
                data-toggle="collapse"
                >Client</a
              >
              <div class="collapse" id="client">
                <ul class="list-unstyled">
                  <li class="nav-item">
                    <a
                      class="nav-link text-muted"
                      name
                      href="/examples/addClient.html"
                      >Add Client</a
                    >
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-muted" href="#">Assign Service</a>
                  </li>
                  <li class="nav-item active">
                    <a class="nav-link text-muted" href="#">Modify Service</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-muted" href="#">Create Package</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-muted" href="#">Auto SLA</a>
                  </li>
                </ul>
              </div>
            </li>
            <li class="navbar-item">
              <a href="#" class="nav-link text-muted">Master</a>
            </li>
            <li class="navbar-item">
              <a href="#" class="nav-link text-muted">Report</a>
            </li>
            <li class="navbar-item">
              <a href="#" class="nav-link text-muted">Task</a>
            </li>
            <li class="navbar-item">
              <a href="#" class="nav-link text-muted">User</a>
            </li>
            <!-- <li class="nav-item active-pro ">
                <a class="nav-link" href="./upgrade.html">
                    <i class="material-icons">unarchive</i>
                    <p>Upgrade to PRO</p>
                </a>
            </li> -->
          </ul>
        </div>
      </div>
      <div class="main-panel">
        <!-- Navbar -->
        <nav
          class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top"
          id="navigation-example"
        >
          <div class="container-fluid">
            <div class="navbar-wrapper">
              <a class="navbar-brand" href="javascript:void(0)"
                >Create Service</a
              >
            </div>
            <button
              class="navbar-toggler"
              type="button"
              data-toggle="collapse"
              aria-controls="navigation-index"
              aria-expanded="false"
              aria-label="Toggle navigation"
              data-target="#navigation-example"
            >
              <span class="sr-only">Toggle navigation</span>
              <span class="navbar-toggler-icon icon-bar"></span>
              <span class="navbar-toggler-icon icon-bar"></span>
              <span class="navbar-toggler-icon icon-bar"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end">
              <form class="navbar-form">
                <div class="input-group no-border">
                  <input
                    type="text"
                    value=""
                    class="form-control"
                    placeholder="Search..."
                  />
                  <button
                    type="submit"
                    class="btn btn-default btn-round btn-just-icon"
                  >
                    <i class="material-icons">search</i>
                    <div class="ripple-container"></div>
                  </button>
                </div>
              </form>
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link" href="javascript:void(0)">
                    <i class="material-icons">dashboard</i>
                    <p class="d-lg-none d-md-block">
                      Stats
                    </p>
                  </a>
                </li>
                <li class="nav-item dropdown">
                  <a
                    class="nav-link"
                    href="javscript:void(0)"
                    id="navbarDropdownMenuLink"
                    data-toggle="dropdown"
                    aria-haspopup="true"
                    aria-expanded="false"
                  >
                    <i class="material-icons">notifications</i>
                    <span class="notification">5</span>
                    <p class="d-lg-none d-md-block">
                      Some Actions
                    </p>
                  </a>
                  <div
                    class="dropdown-menu dropdown-menu-right"
                    aria-labelledby="navbarDropdownMenuLink"
                  >
                    <a class="dropdown-item" href="javascript:void(0)"
                      >Mike John responded to your email</a
                    >
                    <a class="dropdown-item" href="javascript:void(0)"
                      >You have 5 new tasks</a
                    >
                    <a class="dropdown-item" href="javascript:void(0)"
                      >You're now friend with Andrew</a
                    >
                    <a class="dropdown-item" href="javascript:void(0)"
                      >Another Notification</a
                    >
                    <a class="dropdown-item" href="javascript:void(0)"
                      >Another One</a
                    >
                  </div>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="javascript:void(0)">
                    <i class="material-icons">person</i>
                    <p class="d-lg-none d-md-block">
                      Account
                    </p>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
        <!-- End Navbar -->
        <div class="content">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-12">
                <div class="card">
                  <div class="card-header card-header-primary">
                    <h4 class="card-title">Service</h4>
                  </div>
                  <div class="card-body">
                    <div class="row">
                      <button id="createNew" class="btn btn-primary">
                        Create New
                      </button>
                      <button id="updateService" class="btn btn-primary">
                        update Service
                      </button>
                    </div>
                    <form id="ajax" style="margin-top: 4%; display: none;">
                      <div class="row justify-content-start">
                        <div class="form-group col-md-4">
                          <label for="Service Type" style="margin-left: 4%;"
                            >Service Type</label
                          >
                          <select
                            id="select_service_type"
                            name="select_service_type"
                            onchange="T3();"//getservice(this.value);
                            class="form-control"
                            required
                          >
                            <option selected>Choose...</option>
                            <option>EDUCATION</option>
                          </select>
                        </div>
                      </div>
                      <div
                        class="row justify-content-start"
                        style="margin-top: 2%;"
                      >
                        <div class="form-group col-md-4">
                          <label for="Service Name" style="margin-left: 4%;"
                            >Service Name</label
                          >
                          <input
                          id="Service Name"
                            type="text"
                            onchange="T3();"
                            class="form-control"
                            placeholder=""
                          />
                        </div>
                        <button class="btn btn-primary" onclick=" TestIT2();">Add</button>
                      </div>
                      <div class="row justify-content-end">
                        
                        <button
                          type="button"
                          class="btn btn-primary"
                          style="margin-right: 3%;"
                          onclick="formReset()"
                        >
                          Cancel
                        </button>
                      </div>
                      <hr />
                      <div class="row">
                        <div class="col-md-12">
                          <div class="card">
                            <div class="card-header card-header-primary">
                              <h3 class="card-title">Service List</h3>
                            </div>
                            <table
                              class="table table-hover"
                              style="margin-top: 4%;"
                            >
                              <thead class="text-primary thead-dark">
                                <th>
                                  Sr No.
                                </th>

                                <th>
                                  Service
                                </th>
                                <th>
                                  Service Type
                                </th>
                                <th>
                                  Country
                                </th>
                                <th >
                                  Currency
                                </th>
                                <th >
                                  Price
                                </th>
                                <th >
                                  Edit
                                </th>
                                <th >
                                  Delete
                                </th>
                                <th>
                                Add Documents
                                </th>
                              </thead>
                              <tbody id="table">
                               
                              </tbody>
                            </table>
                          </div>
                        </div>
                      </div>
                    </form>
                    <form id="ajax2" style="margin-top: 4%; display: none;">
                      <div class="row justify-content-between">
                        <div class="form-group col-md-4">
                          <label for="Service Type" style="margin-left: 4%;"
                            >Service Type</label
                          >
                          <select
                            id="select_service_type1"
                            onchange="T33();"
                            name="select_service_type1"
                            class="form-control"
                            required
                          >
                            <option selected>Choose...</option>
                            <option>EDUCATION</option>
                          </select>
                        </div>
                        <div class="form-group col-md-6">
                          <div class="row justify-content-around">
                          <a href="docs/book1.xlsx" download>
                          <button
                          type="button"
                          class="btn btn-primary">
                           Download Excel
                        </button></a>
                            <button 
                            type="button"
                            class="btn btn-primary">
                              Upload Excel
                            </button>
                          </div>
                        </div>
                      </div>
                      <div
                        class="row justify-content-start"
                        style="margin-top: 1%;"
                      >
                        <div class="form-group col-md-4">
                          <label for="Service Name" style="margin-left: 4%;"
                            >Service Name</label
                          >
                          <select
                            id="select_service_name"
                            onchange="T33();"
                            class="form-control"
                            required
                          >
                            <option selected>Choose...</option>
                            <option>fgg</option>
                          </select>
                        </div>
                      </div>
                      <div
                        class="row justify-content-start"
                        style="margin-top: 1%;"
                      >
                        <div class="form-group col-md-4">
                          <label for="Service Name" style="margin-left: 4%;"
                            >Select Country</label
                          >
                          <select id="locality-dropdown" onclick="getpackage(this.value)" 
                          onchange="T33();"
                          class="form-control" required>
                            <option selected>Choose...</option>
                            <option>India</option>
                          </select>
                        </div>
                       
                        <button
                          type="button"
                          class="btn btn-primary"
                          style="margin-right: 3%;"
                          onclick="T33();"
                        >
                          search
                        </button>
                      </div>
                      <div
                        class="row justify-content-end"
                        style="margin-top: 4%;"
                      >
             
                        <button
                          type="button"
                          class="btn btn-primary"
                          style="margin-right: 3%;"
                          onclick="formReset();"
                        >
                          Cancel
                        </button>
                      </div>
                      <hr />
                      <div class="row">
                        <div class="col-md-12">
                          <div class="card">
                            <div class="card-header card-header-primary">
                              <h3 class="card-title">Service List</h3>
                            </div>
                            <table
                              class="table table-hover"
                              style="margin-top: 4%;"
                            >
                              <thead class="text-primary thead-dark">
                                <th>
                                  Sr No.
                                </th>

                                <th>
                                  Service
                                </th>
                                <th>
                                  Service Type
                                </th>
                                <th>
                                  Country
                                </th>
                                <th >
                                  Currency
                                </th>
                                <th >
                                  Price
                                </th>
                                <th >
                                  Edit
                                </th>
                                <th >
                                  Delete
                                </th>
                              </thead>
                              <tbody id="table1">

                              </tbody>
                            </table>
                          </div>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <script>
          const x = new Date().getFullYear();
          let date = document.getElementById("date");
          date.innerHTML = "&copy; " + x + date.innerHTML;
        </script>
        
        
      </div>
    </div>
    <!--   Core JS Files   -->
    <script src="./assets/js/core/jquery.min.js"></script>
    <script src="./assets/js/core/popper.min.js"></script>
    <script src="./assets/js/core/bootstrap-material-design.min.js"></script>
    <script src="https://unpkg.com/default-passive-events"></script>
    <script src="./assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <!--  Google Maps Plugin    -->
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
    <!-- Chartist JS -->
    <script src="./assets/js/plugins/chartist.min.js"></script>
    <!--  Notifications Plugin    -->
    <script src="./assets/js/plugins/bootstrap-notify.js"></script>
    <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="./assets/js/material-dashboard.js?v=2.1.0"></script>
    <!-- Material Dashboard DEMO methods, don't include it in your project! -->
    <script src="./assets/demo/demo.js"></script>
     <script src="updateservice.js"></script>
    <script src="createService.js"></script>
    <script>
      function formReset() {
        document.getElementById("ajax").reset();
      }

      var button1 = document.getElementById("createNew");
      var button2 = document.getElementById("updateService");
      button1.onclick = function () {
        var div1 = document.getElementById("ajax");
        var div2 = document.getElementById("ajax2");
        if (div1.style.display !== "none") {
          div2.style.display = "none";
          div1.style.display = "none";
          button1.classList.remove("btn-success");
          button1.classList.add("btn-primary");
        } else {
          div2.style.display = "none";
          div1.style.display = "block";
          button1.classList.remove("btn-primary");
          button1.classList.add("btn-success");
          if (button2.classList.contains("btn-success")) {
            button2.classList.remove("btn-success");
            button2.classList.add("btn-primary");
          }
        }
      };
      button2.onclick = function () {
        var div1 = document.getElementById("ajax");
        var div2 = document.getElementById("ajax2");
        if (div2.style.display !== "none") {
          div1.style.display = "none";
          div2.style.display = "none";
          button2.classList.remove("btn-success");
          button2.classList.add("btn-primary");
        } else {
          div1.style.display = "none";
          div2.style.display = "block";
          button2.classList.remove("btn-primary");
          button2.classList.add("btn-success");
          if (button1.classList.contains("btn-success")) {
            button1.classList.remove("btn-success");
            button1.classList.add("btn-primary");
          }
        }
      };

      $(document).ready(function () {
        $().ready(function () {
          $sidebar = $(".sidebar");

          $sidebar_img_container = $sidebar.find(".sidebar-background");

          $full_page = $(".full-page");

          $sidebar_responsive = $("body > .navbar-collapse");

          window_width = $(window).width();

          $(".fixed-plugin a").click(function (event) {
            // Alex if we click on switch, stop propagation of the event, so the dropdown will not be hide, otherwise we set the  section active
            if ($(this).hasClass("switch-trigger")) {
              if (event.stopPropagation) {
                event.stopPropagation();
              } else if (window.event) {
                window.event.cancelBubble = true;
              }
            }
          });

          $(".fixed-plugin .active-color span").click(function () {
            $full_page_background = $(".full-page-background");

            $(this).siblings().removeClass("active");
            $(this).addClass("active");

            var new_color = $(this).data("color");

            if ($sidebar.length != 0) {
              $sidebar.attr("data-color", new_color);
            }

            if ($full_page.length != 0) {
              $full_page.attr("filter-color", new_color);
            }

            if ($sidebar_responsive.length != 0) {
              $sidebar_responsive.attr("data-color", new_color);
            }
          });

          $(".fixed-plugin .background-color .badge").click(function () {
            $(this).siblings().removeClass("active");
            $(this).addClass("active");

            var new_color = $(this).data("background-color");

            if ($sidebar.length != 0) {
              $sidebar.attr("data-background-color", new_color);
            }
          });

          $(".fixed-plugin .img-holder").click(function () {
            $full_page_background = $(".full-page-background");

            $(this).parent("li").siblings().removeClass("active");
            $(this).parent("li").addClass("active");

            var new_image = $(this).find("img").attr("src");

            if (
              $sidebar_img_container.length != 0 &&
              $(".switch-sidebar-image input:checked").length != 0
            ) {
              $sidebar_img_container.fadeOut("fast", function () {
                $sidebar_img_container.css(
                  "background-image",
                  'url("' + new_image + '")'
                );
                $sidebar_img_container.fadeIn("fast");
              });
            }

            if (
              $full_page_background.length != 0 &&
              $(".switch-sidebar-image input:checked").length != 0
            ) {
              var new_image_full_page = $(".fixed-plugin li.active .img-holder")
                .find("img")
                .data("src");

              $full_page_background.fadeOut("fast", function () {
                $full_page_background.css(
                  "background-image",
                  'url("' + new_image_full_page + '")'
                );
                $full_page_background.fadeIn("fast");
              });
            }

            if ($(".switch-sidebar-image input:checked").length == 0) {
              var new_image = $(".fixed-plugin li.active .img-holder")
                .find("img")
                .attr("src");
              var new_image_full_page = $(".fixed-plugin li.active .img-holder")
                .find("img")
                .data("src");

              $sidebar_img_container.css(
                "background-image",
                'url("' + new_image + '")'
              );
              $full_page_background.css(
                "background-image",
                'url("' + new_image_full_page + '")'
              );
            }

            if ($sidebar_responsive.length != 0) {
              $sidebar_responsive.css(
                "background-image",
                'url("' + new_image + '")'
              );
            }
          });

          $(".switch-sidebar-image input").change(function () {
            $full_page_background = $(".full-page-background");

            $input = $(this);

            if ($input.is(":checked")) {
              if ($sidebar_img_container.length != 0) {
                $sidebar_img_container.fadeIn("fast");
                $sidebar.attr("data-image", "#");
              }

              if ($full_page_background.length != 0) {
                $full_page_background.fadeIn("fast");
                $full_page.attr("data-image", "#");
              }

              background_image = true;
            } else {
              if ($sidebar_img_container.length != 0) {
                $sidebar.removeAttr("data-image");
                $sidebar_img_container.fadeOut("fast");
              }

              if ($full_page_background.length != 0) {
                $full_page.removeAttr("data-image", "#");
                $full_page_background.fadeOut("fast");
              }

              background_image = false;
            }
          });

          $(".switch-sidebar-mini input").change(function () {
            $body = $("body");

            $input = $(this);

            if (md.misc.sidebar_mini_active == true) {
              $("body").removeClass("sidebar-mini");
              md.misc.sidebar_mini_active = false;

              $(".sidebar .sidebar-wrapper, .main-panel").perfectScrollbar();
            } else {
              $(".sidebar .sidebar-wrapper, .main-panel").perfectScrollbar(
                "destroy"
              );

              setTimeout(function () {
                $("body").addClass("sidebar-mini");

                md.misc.sidebar_mini_active = true;
              }, 300);
            }

            // we simulate the window Resize so the charts will get updated in realtime.
            var simulateWindowResize = setInterval(function () {
              window.dispatchEvent(new Event("resize"));
            }, 180);

            // we stop the simulation of Window Resize after the animations are completed
            setTimeout(function () {
              clearInterval(simulateWindowResize);
            }, 1000);
          });
        });
      });

      let form = document.getElementById("ajax");
      form.addEventListener(
        "submit",
        function (ev) {
          let oData = new FormData(form);
          for (let pair of oData.entries()) {
            console.log(pair[0] + ", " + pair[1]);
          }
          ev.preventDefault();
        },
        false
      );
    </script>
      <script src="js/createorder12.js"></script> 
  </body>
</html>
