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
                <span class="record">Entrada 1: <?= $workingHours->time1 ?? '---' ?></span>
                <span class="record">Saída 1: <?= $workingHours->time2 ?? '---' ?></span>
            </div>
            <div class="d-flex justify-content-around m-5 ">
                <span class="record">Entrada 2: <?= $workingHours->time3 ?? '---' ?></span>
                <span class="record">Saída 2: <?= $workingHours->time4 ?? '---' ?></span>
            </div>
            <div class="card-footer d-flex justify-content-center">
                <a href="innout.php" class="btn btn-success btn-lg">
                    <i class="icofont-check mr-1"></i>
                    Bater o ponto
                </a>
            </div>
        </div>
    </div>
    <form class="mt-5" action="innout.php" method="post">
        <div class="input-group no-border">
            <input type="text" name="forcedTime" class="form-control" placeholder="Informe a hora de fazer o batimento">
            <button class="btn btn-danger ml-3">
                Simular Ponto
            </button>
        </div>

    </form>
</main>