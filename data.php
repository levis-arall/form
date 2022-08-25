<?php
require_once("SimpleXLSX.php");

function xlsxData()
{
    if ($xlsx = SimpleXLSX::parse('ozel_gunler.xlsx')) {
        //print_r($xlsx->rows());
        //$data = $xlsx->rows();
        return $xlsx->rows();
    } else {
        echo "Dosya bulunamadı";
    }
    /*foreach ($data as $row) {
        var_dump($row[0] . " - " . $row[2]);
    }*/
}


/* //yedek
foreach($datax as $k => $v): ?>
    <select class="selection-2" name="service">
        <?php foreach($datax[$k] as $kk => $vv): ?>
            <option selected>seçiniz</option>
            <option value="<?=$kk."-".$vv?>"><?=$kk." - ".$vv?></option>
        <?php endforeach; ?>
    </select>
endforeach; */