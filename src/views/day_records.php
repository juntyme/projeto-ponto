<main class="content">
    <?php

    renderTitle(
        'Registrar Ponto',
        'Mantenha seu ponto consistente!',
        'icofont-check-alt'
    );

    include(TEMPLATE_PATH . "/messages.php");

    ?>
    <div class="card">
        <div class="card-header">
            <h3><?= $today ?></h3>
            <p>Os batimentos efetuados hoje</p>
        </div>
        <div class="card-body">
            <div class="d-flex  justify-content-around m-5">
                <span class="record">Endrata 1: ---</span>
                <span class="record">Saída 1: ---</span>
            </div>
            <div class="d-flex justify-content-around m-5 ">
                <span class="record">Endrata 1: ---</span>
                <span class="record">Saída 1: ---</span>
            </div>
            <div class="card-footer d-flex justify-content-center">
                <a href="???" class="btn btn-success btn-lg">
                    <i class="icofont-check mr-1"></i>
                    Bater o ponto
                </a>
            </div>
        </div>
    </div>
</main>