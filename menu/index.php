<?php
$praed = array(
    array(
        'nimetus' => "Sealihapada ploomide ja aprikoosiga",
        'kirjeldus' =>"sealihapada, lisand, salat, leib",
        'hind' => 2.65
    ),
    array(
        'nimetus' => "Praetud kanakints",
        'kirjeldus' =>"praetud kana, lisand, salat, leib",
        'hind' => 2.50));
$supid = array(
    array(
        'nimetus' => "Rassolnik",
        'kirjeldus' =>"supp, hapukoor, leib",
        'hind' => 1.10
    ),
    array(
        'nimetus' => "Seljanka",
        'kirjeldus' =>"supp, hapukoor, leib",
        'hind' => 1.10
    ));
$magustoit = array(
    array(
        'nimetus' => "Kohupiima kreem",
        'kirjeldus' =>"kohupiim, moos",
        'hind' => 0.80
    ),
    array(
        'nimetus' => "Kamamaius",
        'kirjeldus' =>"kama, kohupiim, moos",
        'hind' => 0.60
    ));
$jooks = array(
    array(
        'nimetus' => "Piim",
        'hind' => 0.30
    ),
    array(
        'nimetus' => "Morss",
        'hind' => 0.20
    ));
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<div class="container-fluid">
    <div class="accordion" id="accordion">
        <div class="card m-3">
            <div class="card-header">
                <a href="#praed" data-toggle="collapse" class="card-link">Praed</a>
            </div>
            <?php
            echo'
            <div id="praed" class="collapse show">
                <div class="card-body">';
            foreach ($praed as $praad=>$info){

                    echo'<ul class="panel-heading text-center list-group">';
                        echo'<li id="praad1" class="list-group-item"><p class="mb-0">'.$info['nimetus'].'<br>';
                                            echo '</ul>';
                }
                echo '</div>';
            </div>';
            ?>
        </div>
        <div class="card m-3">
            <div class="card-header">
                <a href="#supp" data-toggle="collapse" class="card-link">Supid</a>
            </div>
            <?php
            echo'
            <div id="supp" class="collapse show">
                <div class="card-body">
                    <ul class="panel-heading text-center list-group">
                        <li id="supp1" class="list-group-item"><p class="mb-0">Supp 1<span class="hind bg-success badge ">Hind</span><span class="hind badge">Hind</span><br><span class="small text-secondary">Millest toit koosneb</span></p></li>
                        <li id="supp2" class="list-group-item"><p class="mb-0">Supp 2<span class="hind bg-success badge ">Hind</span><span class="hind badge">Hind</span><br><span class="small text-secondary">Millest toit koosneb</span></p></li>
                        <li id="supp3" class="list-group-item"><p class="mb-0">Supp 3<span class="hind bg-success badge ">Hind</span><span class="hind badge">Hind</span><br><span class="small text-secondary">Millest toit koosneb</span></p></li>
                    </ul></div>
                </div>
            </div>';
            ?>
        </div>
        <div class="card m-3">
            <div class="card-header">

                <a href="#magus" data-toggle="collapse" class="card-link">Magustoit</a>
            </div>
            <?php
            echo '
            <div id="magus" class="collapse show">
                <div class="card-body">
                    <ul class="panel-heading text-center list-group">
                        <li id="magus 1" class="list-group-item"><p class="mb-0">Magus 1<span class="hind bg-success badge ">Hind</span><span class="hind badge">Hind</span><br><span class="small text-secondary">Millest toit koosneb</span></p></li>
                        <li id="magus 2" class="list-group-item"><p class="mb-0">Magus 2<span class="hind bg-success badge ">Hind</span><span class="hind badge">Hind</span><br><span class="small text-secondary">Millest toit koosneb</span></p></li>
                        <li id="magus 3" class="list-group-item"><p class="mb-0">Magus 3<span class="hind bg-success badge ">Hind</span><span class="hind badge">Hind</span><br><span class="small text-secondary">Millest toit koosneb</span></p></li>
                    </ul>
                </div>
            </div>';
            ?>
        </div>
        <div class="card m-3">
            <div class="card-header">
                <a href="#jook" data-toggle="collapse" class="card-link">Joogid</a>
            </div>
            <?php
            echo '
            <div id="jook" class="collapse show">
                <div class="card-body">
                    <ul class="panel-heading text-center list-group">
                        <li id="jook1" class="list-group-item"><p class="mb-0">Jook 1<span class="hind badge">Hind</span><br><span class="small text-secondary">Millest toit koosneb</span></p></li>
                        <li id="jook2" class="list-group-item"><p class="mb-0">Jook 2<span class="hind badge">Hind</span><br><span class="small text-secondary">Millest toit koosneb</span></p></li>
                        <li id="jook3" class="list-group-item"><p class="mb-0">Jook 3<span class="hind badge">Hind</span><br><span class="small text-secondary">Millest toit koosneb</span></p></li>
                        <li id="jook4" class="list-group-item"><p class="mb-0">Jook 4<span class="hind badge">Hind</span><br><span class="small text-secondary">Millest toit koosneb</span></p></li>
                        <li id="jook5" class="list-group-item"><p class="mb-0">Jook 5<span class="hind badge">Hind</span><br><span class="small text-secondary">Millest toit koosneb</span></p></li>
                    </ul>
                </div>
            </div>';
            ?>
        </div>
    </div>


    </div>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>
</html>';
?>