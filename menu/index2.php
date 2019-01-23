<?php
function soodus($hind, $soodusProtsent)
{
    return round($hind * ((100 - $soodusProtsent) / 100), 2);
}
    $praed = array(
        array(
            'nimetus' => "Sealihapada ploomide ja aprikoosiga",
            'kirjeldus' =>"sealihapada, lisand, salat, leib",
            'hind' => '2.65'
        ),
        array(
            'nimetus' => "Praetud kanakints",
            'kirjeldus' =>"praetud kana, lisand, salat, leib",
            'hind' => '2.50'));
    $supid = array(
        array(
            'nimetus' => "Rassolnik",
            'kirjeldus' =>"supp, hapukoor, leib",
            'hind' => '1.10'
        ),
        array(
            'nimetus' => "Seljanka",
            'kirjeldus' =>"supp, hapukoor, leib",
            'hind' => '1.10'
        ));
    $magustoit = array(
        array(
            'nimetus' => "Kohupiima kreem",
            'kirjeldus' =>"kohupiim, moos",
            'hind' => '0.80'
        ),
        array(
            'nimetus' => "Kamamaius",
            'kirjeldus' =>"kama, kohupiim, moos",
            'hind' => '0.60'
        ));
    $joogid = array(
        array(
            'nimetus' => "Piim",
            'hind' => '0.20'
        ),
        array(
            'nimetus' => "Morss",
            'hind' => '0.20'
        ));

?>
<!doctype html>
<html lang="et">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sookla menuu</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
<div class="container-fluid text-center">
    <div class="row">
        <div class="col">
            <div id="accordion">
                <div class="card m-3">
                    <div class="card-header">
                        <a href="#praed" data-parent="#accordion" data-toggle="collapse"><h2
                                    class="text-dark">PRAED</h2>

                        </a>
                    </div>
                    <?php
                    echo '<div id="praed" class="">';
                    foreach ($praed as $praad=>$info){
                        echo '<ul class="list-group">';
                        echo '<p class="mb-0">'.$info['nimetus'].'<br>';
                        echo '<span class="small text-secondary">'.$info['kirjeldus'].'</span><br>';
                        echo '<span class="badge badge-info">'.$info['hind'].'&euro;</span>';
                        echo '<span class= "badge badge-success">'.soodus($info['hind'], 15).'&euro;</span>';
                        echo '</p>
                            </li>';
                        echo '</ul>';
                    }
                    echo '</div>';

                    ?>
                </div>
                <div class="card m-3">
                    <div class="card/header">
                        <a href="#supid" data-parent="#accordion" data-toggle="collapse">
                            <h2 class="text-dark">SUPID</h2>
                        </a>
                    </div>
                    <?php
                    echo '<div id="supid" class="">';
                    foreach ($supid as $supp=>$info){
                        echo '<ul class="list-group">';
                        echo '<p class="mb-0">'.$info['nimetus'].'<br>';
                        echo '<span class="small text-secondary">'.$info['kirjeldus'].'</span><br>';
                        echo '<span class="badge badge-info">'.$info['hind'].'&euro;</span>';
                        echo '<span class= "badge badge-success">'.soodus($info['hind'], 15).'&euro;</span>';
                        echo '</p>
                            </li>';
                        echo '</ul>';
                    }
                    echo '</div>';

                    ?>

                </div>
                <div class="card m-3">
                    <div class="card/header">
                        <a href="#magustoit" data-parent="#accordion" data-toggle="collapse">
                            <h2 class="text-dark">MAGUSTOIT</h2>
                        </a>
                    </div>
                    <?php
                    echo '<div id="magustoit" class="">';
                    foreach ($magustoit as $magus=>$info){
                        echo '<ul class="list-group">';
                        echo '<p class="mb-0">'.$info['nimetus'].'<br>';
                        echo '<span class="badge badge-info">'.$info['hind'].'&euro;</span>';
                        echo '</p>
                            </li>';
                        echo '</ul>';
                    }
                    echo '</div>';

                    ?>


                </div>
                <div class="card m-3">
                    <div class="card/header">
                        <a href="#magustoit" data-parent="#accordion" data-toggle="collapse">
                            <h2 class="text-dark">JOOGID</h2>
                        </a>
                    </div>
                    <?php
                    echo '<div id="joogid" class="">';
                    foreach ($joogid as $jook=>$info){
                        echo '<ul class="list-group">';
                        echo '<p class="mb-0">'.$info['nimetus'].'<br>';
                        echo '<span class="badge badge-info">'.$info['hind'].'&euro;</span>';
                        echo '</p>
                            </li>';
                        echo '</ul>';
                    }
                    echo '</div>';

                    ?>

            </div>
        </div>
    </div>
</div>

</body>
</html>
