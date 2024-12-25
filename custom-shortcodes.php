<?php
function mk_frontpage_block(){
    ob_start(); ?>

    <div class="row">
        <div class="col-lg-6 pb-2 pb-lg-0">
            <div class="card rounded text-dark d-flex align-items-center px-3 pb-3 h-100" style="min-height: 50vh; background: #dddddd;">
                <img src="<?= esc_url(get_stylesheet_directory_uri() . '/assets/img/trachtenpaar.svg'); ?>" alt="Trachtenpaar" class="w-75" id="trachtenpaar" style="margin-top: -10rem">
                <div class="mt-3 pt-3 border-top w-75 border-dark"></div>
                <h3 class="text-center">Termine</h3>
                <p class="text-center">Von unseren traditionellen Einmärschen über die Konzerte bis hin zu speziellen Anlässen gibt es hier alle Informationen über Veranstaltungen, bei denen wir dabei sind.</p>
                <a href="/termine" class="btn btn-outline-dark stretched-link d-flex">
                    <span class="material-symbols-rounded" aria-hidden="true" >arrow_right_alt</span>
                    <span class="visually-hidden">Termine</span>
                </a>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="row">
                <div class="col-sm-6 pb-2 pb-lg-3 pe-sm-1 pe-lg-2">
                    <div class="card bg-primary rounded text-white d-flex align-items-center align-items-sm-start text-center text-sm-start p-3" style="min-height: 25vh;">
                        <img src="<?= esc_url(get_stylesheet_directory_uri() . '/assets/img/icons/family_star_24dp_FFFFFF_FILL1_wght400_GRAD0_opsz24.svg'); ?>" alt="Chronik Icon" aria-hidden="true" style="height: 73px; width: auto;" class="pb-2">
                        <h3 class="fs-5">Jungmusiker</h3>
                        <p>Hier gibt es alle Informationen zum Jugendorchester Gries & Obernberg.</p>
                        <a href="/termines" class="btn btn-outline-light stretched-link d-flex">
                            <span class="material-symbols-rounded" aria-hidden="true" >arrow_right_alt</span>
                            <span class="visually-hidden">Jungmusiker</span>
                        </a>
                    </div>
                </div>
                <div class="col-sm-6 pb-2 pb-lg-3 ps-sm-1 ps-lg-2">
                    <div class="card bg-primary rounded text-white d-flex align-items-center align-items-sm-start text-center text-sm-start p-3" style="min-height: 25vh;">
                        <img src="<?= esc_url(get_stylesheet_directory_uri() . '/assets/img/icons/groups_24dp_FFFFFF_FILL1_wght400_GRAD0_opsz24.svg'); ?>" alt="Chronik Icon" aria-hidden="true" style="height: 73px; width: auto;" class="pb-2">
                        <h3 class="fs-5">Mitglieder</h3>
                        <p>Hier findest du Informationen über unsere Mitglieder.</p>
                        <a href="/termines" class="btn btn-outline-light stretched-link d-flex">
                            <span class="material-symbols-rounded" aria-hidden="true" >arrow_right_alt</span>
                            <span class="visually-hidden">Jungmusiker</span>
                        </a>
                    </div>
                </div>
                <div class="col-sm-6 pb-2 pb-lg-0 pe-sm-1 pe-lg-2">
                    <div class="card bg-primary rounded text-white d-flex align-items-center align-items-sm-start text-center text-sm-start p-3" style="min-height: 25vh;">
                        <img src="<?= esc_url(get_stylesheet_directory_uri() . '/assets/img/icons/mail_24dp_FFFFFF_FILL1_wght400_GRAD0_opsz24.svg'); ?>" alt="Chronik Icon" aria-hidden="true" style="height: 73px; width: auto;" class="pb-2">
                        <h3 class="fs-5">Kontakt</h3>
                        <p>Hier hast du die Möglichkeit unsere Ausschussmitglieder zu kontaktieren.</p>
                        <a href="/termines" class="btn btn-outline-light stretched-link d-flex">
                            <span class="material-symbols-rounded" aria-hidden="true" >arrow_right_alt</span>
                            <span class="visually-hidden">Jungmusiker</span>
                        </a>
                    </div>
                </div>
                <div class="col-sm-6 pb-2 pb-lg-0 ps-sm-1 ps-lg-2">
                    <div class="card bg-primary rounded text-white d-flex align-items-center align-items-sm-start text-center text-sm-start p-3" style="min-height: 25vh;">
                        <img src="<?= esc_url(get_stylesheet_directory_uri() . '/assets/img/icons/chronic_24dp_FFFFFF_FILL1_wght400_GRAD0_opsz24.svg'); ?>" alt="Chronik Icon" aria-hidden="true" style="height: 73px; width: auto;" class="pb-2">
                        <h3 class="fs-5">Chronik</h3>
                        <p>Hier gibt es eine Kurzzusammenfassung über unsere Geschichte.</p>
                        <a href="/termines" class="btn btn-outline-light stretched-link d-flex">
                            <span class="material-symbols-rounded" aria-hidden="true" >arrow_right_alt</span>
                            <span class="visually-hidden">Jungmusiker</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
    $myvariable = ob_get_clean();
    return $myvariable;
}

add_shortcode('mk_frontpage_block', 'mk_frontpage_block');