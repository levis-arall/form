<?php
session_start();
ob_start();

if (isset($_POST['next'])) {
    $firma_adi = $_POST['firma_adi'];
    $yetkili_adi = $_POST['yetkili_adi'];
    $tel = $_POST['tel'];
    $email = $_POST['email'];
    $service = $_POST['service'];

    $_SESSION['firma_adi'] = $firma_adi;
    $_SESSION['yetkili_adi'] = $yetkili_adi;
    $_SESSION['tel'] = $tel;
    $_SESSION['email'] = $email;
    $_SESSION['service'] = $service;

    header('location:form2.php');
}
?>
<!DOCTYPE html>
<html lang="tr">

<head>
    <title>Oneway Workshop From</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="images/icons/favicon.ico" />
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
    <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
    <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
    <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
    <div class="container-contact100">
        <div class="wrap-contact100">
            <form method="post" action="" class="contact100-form validate-form">
                <span class="contact100-form-title">
                    <h2 style="font-size: 31px;">Oneway Workshop</h2>
                    <span class="paragraf">Sosyal Medya Özel Günler Listesi Formu</span>
                </span>

                <div class="wrap-input100 validate-input" data-validate="Name is required">
                    <span class="label-input100">FİRMA ADINIZ</span>
                    <input class="input100" type="text" name="firma_adi" placeholder="Firma Adınız">
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 validate-input" data-validate="Name is required">
                    <span class="label-input100">FİRMA YETKİLİ ADI</span>
                    <input class="input100" type="text" name="yetkili_adi" placeholder="Firma Yetkili Adınız">
                    <span class="focus-input100"></span>
                </div>
                <div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
                    <span class="label-input100">TELEFON</span>
                    <input class="input100" type="number" name="tel" placeholder="Telefon">
                    <span class="focus-input100"></span>

                </div>

                <div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
                    <span class="label-input100">MAİL ADRESİNİZ</span>
                    <input class="input100" type="text" name="email" placeholder="Mail Adresiniz">
                    <span class="focus-input100"></span>

                </div>

                <div class="wrap-input100 input100-select">
                    <span class="label-input100">Sektörüne Özel Günler Var mı</span>
                    <div>
                        <select class="selection-2" name="service">
                            <option value="Seçiniz" style="coıor:#beb9b9;">Seçiniz</option>
                            <option value="EVET">Evet</option>
                            <option value="HAYIR">Hayır</option>
                        </select>
                    </div>
                    <span class="focus-input100"></span>
                </div>
                <div class="container-contact100-form-btn">
                    <div class="wrap-contact100-form-btn">
                        <div class="contact100-form-bgbtn"></div>
                        <button name="next" class="contact100-form-btn">
                            <span>
                                Sonraki
                                <i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
                            </span>
                        </button>
                    </div>
                </div>
            </form>

        </div>
    </div>
    <div id="dropDownSelect1"></div>

    <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
    <script src="vendor/animsition/js/animsition.min.js"></script>
    <script src="vendor/bootstrap/js/popper.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="vendor/select2/select2.min.js"></script>
    <script>
        $(".selection-2").select2({
            minimumResultsForSearch: 20,
            dropdownParent: $('#dropDownSelect1')
        });
    </script>
    <script src="vendor/daterangepicker/moment.min.js"></script>
    <script src="vendor/daterangepicker/daterangepicker.js"></script>
    <script src="vendor/countdowntime/countdowntime.js"></script>
    <script src="js/main.js"></script>

    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-23581568-13');
    </script>

</body>

</html>