<!DOCTYPE html>
<html lang="en">

<head>
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
          <th>Country</th>
          <th>TotalConfirmed</th>
          <th>TotalRecover</th>
          <th>TotalDeath</th>
          <th>NewConfirmed</th>
          <th>NewRecovered</th>
          <th>NewDeath</th>
        </tr>
        <?php
              $data = file_get_contents('https://api.covid19api.com/summary');
              $coronadata = json_decode($data,true);
              
              // echo "<pre>";
              // print_r($coronadata);
              $countryCount = count($coronadata['Countries']);
              
              // echo $coronadata['Countries'][1]['Country'];
              $i=1;
              while($i < $countryCount){

            ?>
        <tr>
          <td>
            <?php echo $coronadata['Countries'][$i]['Country'] ?>
          </td>
          <td>
            <?php echo $coronadata['Countries'][$i]['TotalConfirmed'] ?>
          </td>
          <td>
            <?php echo $coronadata['Countries'][$i]['TotalRecovered'] ?>
          </td>
          <td>
            <?php echo $coronadata['Countries'][$i]['TotalDeaths'] ?>
          </td>
          <td>
            <?php echo $coronadata['Countries'][$i]['NewConfirmed'] ?>
          </td>
          <td>
            <?php echo $coronadata['Countries'][$i]['NewRecovered'] ?>
          </td>
          <td>
            <?php echo $coronadata['Countries'][$i]['NewDeaths'] ?>
          </td>
        </tr>
 

        <?php
                $i++;
              }
            ?>
      </table>
    </div>
  </section>
  <div class="container-fluid sub_section pt-5 pb-5" id="aboutid">
    <div class="section_header text-center mt-5 mb-5">
      <h1>About COVID-19</h1>
    </div>
    <div class="row pt-5">
      <div class="col-lg-5 col-md-6 col-12 ml-5">
        <img src="images/about.png" alt="about photo" class="img-fluid">
      </div>
      <div class="col-lg-6 col-md-6 col-12">
        <h2>What is COVID-19 (corona virus)</h2>
        <p>Coronavirus disease (COVID-19) is an infectious disease caused by a newly discovered coronavirus.Most people
          infected with the COVID-19 virus will experience mild to moderate respiratory illness and recover without
          requiring special treatment. Older people, and those with underlying medical problems like cardiovascular.</p>
        <p>The best way to prevent and slow down transmission is be well informed about the COVID-19 virus, the disease
          it causes and how it spreads. Protect yourself and others from infection by washing your hands or using an
          alcohol based rub frequently and not touching your face. </p>
        <p>The COVID-19 virus spreads primarily through droplets of saliva or discharge from the nose when an infected
          person coughs or sneezes, so it’s important that you also practice respiratory etiquette.</p>
      </div>
    </div>
  </div>
  <div class="container-fluid sub_section pt-5 pb-5" id="aboutid">
    <div class="section_header text-center mt-5 mb-5">
      <h1>COVID-19 symptions</h1>
    </div>
    <div class="row">
      <div class="col-lg-4 col-md-4 col-12 mt-5">
        <figure class="text-center">
          <img src="images/feaver.png" alt="fever photo" class="img-fluid" width="120" height="120">
          <figcaption>feaver</figcaption>
        </figure>
      </div>
      <div class="col-lg-4 col-md-4 col-12 mt-5">
        <figure class="text-center">
          <img src="images/cold.png" alt="fever photo" class="img-fluid" width="120" height="120">
          <figcaption>cold</figcaption>
        </figure>
      </div>
      <div class="col-lg-4 col-md-4 col-12 mt-5">
        <figure class="text-center">
          <img src="images/cought.png" alt="fever photo" class="img-fluid" width="120" height="120">
          <figcaption>cought</figcaption>
        </figure>
      </div>
      <div class="col-lg-4 col-md-4 col-12 mt-5">
        <figure class="text-center">
          <img src="images/diff-bre.png" alt="fever photo" class="img-fluid" width="120" height="120">
          <figcaption>diff-bre</figcaption>
        </figure>
      </div>
      <div class="col-lg-4 col-md-4 col-12 mt-5">
        <figure class="text-center">
          <img src="images/runny-nose.png" alt="fever photo" class="img-fluid" width="120" height="120">
          <figcaption>runny-nose</figcaption>
        </figure>
      </div>
      <div class="col-lg-4 col-md-4 col-12 mt-5">
        <figure class="text-center">
          <img src="images/tired.png" alt="fever photo" class="img-fluid" width="120" height="120">
          <figcaption>tired</figcaption>
        </figure>
      </div>
    </div>
  </div>

</body>

</html>