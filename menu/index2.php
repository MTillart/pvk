<?php
require_once 'lib/fnk.php';
require_once 'db/andmed.php';
require_once 'db/index.php';
require_once 'db/conf.php';
require_once 'db/db_fnk.php';
pais();
//echo $praed;
?>

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
                        echo '<p class="mb-0">'.$info['nimi'].'<br>';
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
    <?php
    jalus();
    ?>
