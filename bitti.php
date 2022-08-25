<!DOCTYPE html>
<html lang="tr">

<head>
  <title>İşlem</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!--===============================================================================================-->
  <link rel="icon" type="image/png" href="images/icons/favicon.ico" />
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="css/util.css">
  <link rel="stylesheet" type="text/css" href="css/main.css">
  <!--===============================================================================================-->
</head>

<body>
  <div class="container-contact100">
    <div class="wrap-contacts100">
      <div id="table">
        <div id="centeralign">
          <h2 style="font-size: 36px;font-family: 'Poppins-Bold';text-align: center;">Merhaba</h2>
          <i class="okIcon far fa-check-circle fa-5x"></i>

          <h1 class="tugce"Style="border-radius:15px;">
            İşleminiz Başarıyla Gerçekleşmiştir.Oneway Workshop Tarafından güvenli Bir Şekilde Saklanacaktır.
          </h1>

          <center>
            <div class="pt-5">
              <button type="button" style="z-index:100 !important; position:relative " id="close" class="btn btn-outline-primary btn-lg  color: #aa47f4;">Çıkış</button>
            </div>

            <div style="z-index:1 !important" class="loader">
              <div class="face">
                <div class="circle"></div>
              </div>

              <div class="face">
                <div class="circle"></div>
              </div>
            </div>
          </center>

        </div>

      </div>

    </div>
  </div>





  <div id="dropDownSelect1"></div>

  <!--===============================================================================================-->
  <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
  <!--===============================================================================================-->
  <script src="vendor/animsition/js/animsition.min.js"></script>
  <!--===============================================================================================-->
  <script src="vendor/bootstrap/js/popper.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
  <!--===============================================================================================-->
  <script src="vendor/select2/select2.min.js"></script>
  <script>
    $(".selection-2").select2({
      minimumResultsForSearch: 20,
      dropdownParent: $('#dropDownSelect1')
    });
  </script>
  <!--===============================================================================================-->
  <script src="vendor/daterangepicker/moment.min.js"></script>
  <script src="vendor/daterangepicker/daterangepicker.js"></script>
  <!--===============================================================================================-->
  <script src="vendor/countdowntime/countdowntime.js"></script>
  <!--===============================================================================================-->
  <script src="js/main.js"></script>

  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-23581568-13');
  </script>

  <script>
    function typeEffect(element, speed) {
      var text = element.innerHTML;
      element.innerHTML = "";

      var i = 0;
      var timer = setInterval(function() {
        if (i < text.length) {
          element.append(text.charAt(i));
          i++;
        } else {
          clearInterval(timer);
        }
      }, speed);
    }


    // application
    var speed = 75;
    var h1 = document.querySelector('h1');
    var p = document.querySelector('p');
    var delay = h1.innerHTML.length * speed + speed;

    // type affect to header
    typeEffect(h1, speed);


    // type affect to body
    setTimeout(function() {
      p.style.display = "inline-block";
      typeEffect(p, speed);
    }, delay);
  </script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script type="text/javascript">
    $("#close").click(() => {
      window.location.replace("index.php");
    })
  </script>

</body>

</html>