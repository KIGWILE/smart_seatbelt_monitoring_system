<?php

session_start();
if(!isset($_SESSION['LOGGED_IN_USER'])){
  header("Location: login.php");
  die();
}

?>

<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="">
<!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>smart seatbelt</title>
  <!--
  Stacked Template
  https://templatemo.com/tm-505-stacked
  -->
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="apple-touch-icon" href="apple-touch-icon.png">

  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/bootstrap-theme.min.css">
  <link rel="stylesheet" href="css/index.css">

  <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
</head>
<body>
  <!--[if lt IE 8]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please 
      <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
  <![endif]-->

  <nav class="nav">
    <div class="burger">
      <div class="burger__patty"></div>
    </div>
    <ul class="nav__list">
      <li class="nav__item">
        <a href="#1" class="nav__link c-blue"><img src="img/home-icon.png" alt=""></a>
      </li>
      <li class="nav__item">
        <a href="#2" class="nav__link c-yellow scrolly"><img src="img/about-icon.png" alt=""></a>
      </li>
      <li class="nav__item">
        <a href="#3" class="nav__link c-red"><img src="img/projects-icon.png" alt=""></a>
      </li>
      <li class="nav__item">
        <a href="#4" class="nav__link c-green"><img src="img/contact-icon.png" alt=""></a>
      </li>
    </ul>
  </nav>

  <!-- Home Section -->
  <section class="panel b-blue" id="1">
    <article class="panel__wrapper">
      <div class="panel__content">
        <div class="container">
          <div class="row">
            <div class="col-md-8 col-md-offset-2">
              <div class="home-content">
                <div class="home-heading">
                  <h1><em>SMART SEATBELT</em></h1>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <div class="home-box-content">
                      <div class="left-text">
                        <h4>New <em>Stacked</em> Template</h4>
                        <p>Stacked HTML CSS Template is provided by TemplateMo website. You can edit and use this template for any purpose. Please mention your friends about our website. Thank you.</p>
                        <div class="primary-button">
                          <a href="#2">Discover More</a>
                        </div>
                      </div>
                      <div class="right-image">
                        <img src="img/bus2.PNG" alt="">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </article>
  </section>

  <!-- About Section -->
  <section class="panel b-yellow" id="2">
    <article class="panel__wrapper">
      <div class="panel__content">
        <div class="container">
          <div class="row">
            <div class="col-md-8 col-md-offset-2">
              <div class="about-content">
                <div class="heading">
                  <h4>About us</h4>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <div class="about-box-content">
                      <img src="img/bus.jpg" alt="">
                    </div>
                  </div>
                  <div class="col-md-7 col-md-offset-5">
                    <div class="about-box-text">
                      <h4>Curabitur varius sapien</h4>
                      <p>Please feel free to contact us if you have any question or suggestion about our free templates. Thank you. Template redistribution is <strong>NOT allowed</strong>.</p>
                      <div class="primary-button">
                        <a href="#3">Discover More</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </article>
  </section>

  <!-- Seat Layout Section -->
  <section class="panel b-red" id="3">
    <article class="panel__wrapper">
      <div class="panel__content">
        <div class="container">
          <div class="row">
            <div class="col-md-8 col-md-offset-2">
              <div class="heading">
                <h4>Bus Seat Layout</h4>
              </div>
              <div class="seat-container">
                <div class="row seat-row header-row">
                  <div class="seat conductor">CONDUCTOR</div>
                  <div class="seat driver">DRIVER</div>
                </div>

                <div class="row seat-row">
                  <div class="seat">P1</div>
                  <div class="seat">P2</div>
                  <div class="seat">P3</div>
                  <div class="seat">P4</div>
                </div>
                <div class="row seat-row">
                  <div class="seat">P5</div>
                  <div class="seat">P6</div>
                  <div class="seat">P7</div>
                  <div class="seat">P8</div>
                </div>
                <div class="row seat-row">
                  <div class="seat">P9</div>
                  <div class="seat">P10</div>
                  <div class="seat">P11</div>
                  <div class="seat">P12</div>
                </div>
                <div class="row seat-row">
                  <div class="seat">P13</div>
                  <div class="seat">P14</div>
                  <div class="seat">P15</div>
                  <div class="seat">P16</div>
                </div>
                <div class="row seat-row">
                  <div class="seat">P17</div>
                  <div class="seat">P18</div>
                  <div class="seat">P19</div>
                  <div class="seat">P20</div>
                </div>
                <div class="row seat-row">
                  <div class="seat">P21</div>
                  <div class="seat">P22</div>
                  <div class="seat">P23</div>
                  <div class="seat">P24</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </article>
  </section>

  <!-- Contact Section -->
  <section class="panel b-green" id="4">
    <article class="panel__wrapper">
      <div class="panel__content">
        <div class="container">
          <div class="row">
            <div class="col-md-8 col-md-offset-2">
              <div class="contact-content">
                <div class="heading">
                  <h4>Contact us</h4>
                </div>
                <div class="row">
                  <div class="col-md-8">
                    <div class="contat-form">
                      <form id="contact" action="" method="post">
                        <fieldset>
                          <input name="name" type="text" class="form-control" id="name" placeholder="Your Name" required="">
                        </fieldset>
                        <fieldset>
                          <input name="email" type="email" class="form-control" id="email" placeholder="Email" required="">
                        </fieldset>
                        <fieldset>
                          <textarea name="message" rows="6" class="form-control" id="message" placeholder="Message" required=""></textarea>
                        </fieldset>
                        <fieldset>
                          <button type="submit" id="form-submit" class="btn">Send Message</button>
                        </fieldset>
                      </form>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="more-info">
                      <p>Nunc purus ligula, ullamcorper id velit id, vestibulum auc sapien. Sed quis mauris eget sem imperdiet rhoncus.<br><br>
                        <em>880 Etiam mauris erat,<br>Vestibulum eu augue nec, 10940</em></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-12">
              <div class="footer">
                <p>Copyright &copy; 2025 Your Company | Design: TemplateMo</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </article>
  </section>

  <!-- Scripts -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>
  <script src="js/vendor/bootstrap.min.js"></script>
  <script src="js/plugins.js"></script>
  <script src="js/main.js"></script>
</body>
</html>
