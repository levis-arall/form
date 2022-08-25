<?php
session_start();
ob_start();

error_reporting(E_ALL);
ini_set("display_errors", 1);

require("class.phpmailer.php");
$mail = new PHPMailer();

include 'data.php';
$xlsxData = xlsxData();

$datax = [];

foreach ($xlsxData as $row) {

    if ($row[0] != null && count(explode(" ", $row[0])) == 1) {
        if (!isset($datax[$row[0]])) {
            $datax[$row[0]] = [];
        }
    } else {
        foreach ($datax as $k => $v) {
            if (in_array($k, explode(" ", $row[0]))) {
                $datax[$k][$row[0]] = $row[2];
            }
        }
    }
}

if(!isset($_SESSION['yetkili_adi'])){
    header('location:index.php');
}
if (isset($_POST['finn'])) {
    $days = $_POST['days'];
    $count = count($days);

    $mail->SMTPDebug  = 2;
    $mail->IsSMTP(true);  // Mailimizin SMTP ile gönderilecegini belirtiyoruz
    $mail->From     = $_SESSION['yetkili_adi'];
    $mail->Sender   = 'tugce@vertexarea.com'; //"admin@localhost";//Gönderen Mail adresi
    //$mail->ReplyTo  = ($_POST["mailiniz"]);//"admin@localhost";//Tekrar gönderimdeki mail adersi
    // $mail->AddReplyTo=($_POST["mailiniz"]);//"admin@localhost";//Tekrar gönderimdeki mail adersi
    $mail->FromName = $_SESSION['email'];
    $mail->Host     = "mail.vertexarea.com"; //"localhost"; //SMTP server adresi
    $mail->SMTPAuth = true; //SMTP server'a kullanici adi ile baglanilcagini belirtiyoruz
    $mail->SMTPSecure = false;
    $mail->SMTPAutoTLS = false;
    $mail->Port     = 587; //Natro SMPT Mail Portu
    $mail->CharSet = 'UTF-8'; //Türkçe yazı karakterleri için CharSet  ayarını bu şekilde yapıyoruz.
    $mail->Username = "tugce@vertexarea.com"; //"admin@localhost"; //SMTP kullanici adi
    $mail->Password = "rs59r9V_A.S@A7l="; //""; //SMTP mailinizin sifresi
    $mail->WordWrap = 50;
    $mail->IsHTML(true); //Mailimizin HTML formatinda hazirlanacagini bildiriyoruz.
    $mail->Subject  = " /PHP SMTP Ayarları/Mail Konusu"; //"Deneme Maili"; // Mailin Konusu Konu
    //Mailimizin gövdesi: (HTML ile)
    $body  = "						" . "Mail İçeriği Başlığı" . "<br><br>";
    $body .= "Gönderen Adi		: " . $_SESSION['yetkili_adi'] . "<br>";
    $body .= "E-posta Adresi	: " . $_SESSION['email'] . "<br>";
    $body .= "Telefonu&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: " . $_SESSION['tel'] . "<br>";
    $body .= "Hizmet: " . $_SESSION['service'] . "		:<br>";
    for ($i = 0; $i < $count; $i++) {
        $body .= "Seçilen gün: " . $days[$i] . "<br>";
    }

    $textBody = $body; //"Bu mail bir deneme mailidir. SMTP server ile gönderilmistir.";
    $mail->Body = $body;
    $mail->AltBody = 'text_body';

    if ($mail->Send()) echo "Sorunuz gönderildimiştir. <br>Natro Sistem Uzmanlarımız müsait olduğunda yanıtlayacaktır.";
    else echo "Form göndermede hata oldu! Daha sonra tekrar deneyiniz.";
    $mail->ClearAddresses();
    $mail->ClearAttachments();
    $mail->AddAddress("tugce@vertexarea.com"); // Mail gönderilecek adresleri ekliyoruz.
    $mail->Send();
    $mail->ClearAddresses();
    $mail->ClearAttachments();

    session_destroy();
    session_unset();
    header('location:bitti.php');
}
?>
<!DOCTYPE html>
<html lang="tr">

<head>
    <title>Oneway Workshop From</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="images/icons/favicon.ico" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
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
        <div class="wrap-contact100">
            <form method="post" action="" class="contact100-form validate-form">
            <span class="contact100-form-title">
					<h2 style="font-size: 31px; margin-bottom: 46px;">Merhaba</h2>
					<h5 class="yazi-items">Şubat Ayı Sosyal Medya İçerik Planımızın hazırlık sürecini sağlıklı
                   bir şekilde yürütebilmek adına aşağıdaki soruları eksiksiz ve zamanında yanıtlamanızı rica ederiz. 
                   Yardımlarınız ve direktifleriniz için şimdiden teşekkür ederiz. </h5> 
				</span>

                <?php foreach ($datax as $k => $v) : ?>
                    <div class="wrap-input100 input100-select">
                        <span class="label-input100"><?= $k ?> ayı özel gün seçiniz.</span>
                        <div style="margin-top: 8px;">
                            <select id="select" class="selection-2" name="days[]" multiple>
                                <?php foreach ($datax[$k] as $kk => $vv) : ?>
                                    <option value="<?= $kk . "-" . $vv ?>"><?= $kk . " - " . $vv ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <span class="focus-input100"></span>
                    </div>
                <?php endforeach; ?>
                <div class="container-contact100-form-btn">
                    <div class="wrap-contact100-form-btn">
                        <div class="contact100-form-bgbtn"></div>
                        <button class="contact100-form-btn" name="finn">
                            <span>
                                İleri
                                <i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
                            </span>
                        </button>
                    </div>
                </div>
            </form>
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


</body>

</html>