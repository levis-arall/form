<?php
include 'data.php';
$xml = xlsxData();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Özel /Günler</title>
    

    <style>
        td {
            border: 1px #DDD solid;
            padding: 5px;
            cursor: pointer;
        }

        .selected {
            background-color: brown;
            color: #FFF;
        }
    </style>
</head>
<body>
    <center>
    <table id="table">
        <?php foreach ($xml as $x) { ?>
            <tr>
                <td>
                    <input type="radio" name="" id="radio">
                </td>
                <td><?= $x[0] ?></td>
                <td><?= $x[2] ?></td>
            </tr>
        <?php } ?>
    </table>
    <button type="button" class="btn btn-danger">Onayla</button>
    </center>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script type="text/javascript">
        $("input:radio").on("click", function(e) {
            var inp = $(this); //cache the selector
            if (inp.is(".theone")) { //see if it has the selected class
                inp.prop("checked", false).removeClass("theone");
                return;
            }
            $("input:radio[name='" + inp.prop("name") + "'].theone").removeClass("theone");
            inp.addClass("theone");
        });
    </script>
    </body>
    </html>