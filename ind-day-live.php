<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>corona live website</title>
<?php include 'link/link.php' ?>
<?php include 'css/style.php' ?>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light p-3 nav_style">
    <a class="navbar-brand pl-5" href="#">COVID-19</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto pr-5 text-capitalize">
        <li class="nav-item active">
          <a class="nav-link" href="index.php">Home </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="ind-day-live.php">inddaylive</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="indupdate.php">indialiveupd</a>
        </li>
      </ul>
    </div>
  </nav>
  <div class="main_header">
    <div class="row w-100 h-100">
      <div class="col-lg-5 col-md-5 col-12 order-lg-1 order-2">
        <div class="leftside w-100 h-100 d-flex justify-content-center align-items-center">
          <img src="images/logo.png" alt="corona logo" width="300" height="300">
        </div>
      </div>
      <div class="col-lg-7 col-md-7 col-12 order-lg-2 order-1">
        <div class="rightside w-100 h-100 d-flex justify-content-center align-items-center  ">
          <h1>Let's stay safe & fight together with <br> cor<span class="corona_rot"> <img src="images/corona2.png"
                alt="corona images" width="90" height="90"></span>na virus</h1>
        </div>
      </div>
    </div>
  </div>
  <section class="corona_update">
    <div class="mb-3">
      <h3 class="text-center text-uppercase">COVID-19 live update</h3>
    </div>
    <div class="table-responsive">
      <table class="table table-border table-striped text-center" id="tbval">
        <tr>
          <th>date</th>
          <th>totalconfirmed
          <th>
          <th>dailyrecovered</th>
          <th>dailyconfirmed</th>
          <th>totaldecreased</th>
          <th>totaldeceased</th>
          <th>TotalRecovered</th>


        </tr>
        <?php
              $data = file_get_contents('https://api.covid19india.org/data.json');
              $daywise = json_decode($data,true);
              
            //   echo "<pre>";
            //   print_r($daywise);
              $stateCount = count($daywise['cases_time_series']);
              
            //   echo $daywise['cases_time_series'][1]['date'];
            $i=0;
            while($i < $stateCount){

          ?>
        <tr>
          <td>
            <?php echo $daywise['cases_time_series'][$i]['date'] ?>
          </td>
          <td>
            <?php echo $daywise['cases_time_series'][$i]['totalconfirmed'] ?>
          </td>
          <td m-auto>
            <?php echo $daywise['cases_time_series'][$i]['dailyrecovered'] ?>
          </td>
          <td>
            <?php echo $daywise['cases_time_series'][$i]['dailyconfirmed'] ?>
          </td>
          <td>
            <?php echo $daywise['cases_time_series'][$i]['dailydeceased'] ?>
          </td>
          <td>
            <?php echo $daywise['cases_time_series'][$i]['totaldeceased'] ?>
          </td>
          <td>
            <?php echo $daywise['cases_time_series'][$i]['totalrecovered'] ?>
          </td>

        </tr>
        <!-- echo $coronadata['Countries'][$i]['Country'] . "<br>";
              echo $coronadata['Countries'][$i]['TotalConfirmed'] . "<br>";
              echo $coronadata['Countries'][$i]['TotalRecovered'] . "<br>";
              echo $coronadata['Countries'][$i]['TotalDeaths'] . "<br>";
              echo $coronadata['Countries'][$i]['NewConfirmed'] . "<br>";
              echo $coronadata['Countries'][$i]['NewRecovered'] ." <br>";
              echo $coronadata['Countries'][$i]['NewDeaths'] . "<br>"; -->

        <?php
              $i++;
            }
          ?>
      </table>
    </div>
  </section>