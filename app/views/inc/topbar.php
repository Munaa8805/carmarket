<?php




$this->work = $this->model('Worktime');


$worktime = $this->work->getWorkTime();
$address = $this->work->getAddress();



// echo 'nowsh';
// var_dump($worktime[0]->name);
// echo 'nowsh1111';

?>


<div class="container-fluid bg-light p-0">
    <div class="row gx-0 d-none d-lg-flex">
        <div class="col-lg-7 px-5 text-start">
            <div class="h-100 d-inline-flex align-items-center py-3 me-4">
                <small class="fa fa-map-marker-alt text-primary me-2"></small>
                <small>
                <?php echo $address[0]->address . ' - '. $address[0]->street .', '. $address[0]->city .', '. $address[0]->state.', '. $address[0]->country   ?>
                </small>
            </div>
            <div class="h-100 d-inline-flex align-items-center py-3">
                <small class="far fa-clock text-primary me-2"></small>
                <small>Mon - Fri : <?php echo $worktime[0]->name ?></small>

            </div>
        </div>
        <div class="col-lg-5 px-5 text-end">
            <div class="h-100 d-inline-flex align-items-center py-3 me-4">
                <small class="fa fa-phone-alt text-primary me-2"></small>
                <small>+
                <?php echo $address[0]->phone ?>
                </small>
            </div>
            <div class="h-100 d-inline-flex align-items-center">
                <a class="btn btn-sm-square bg-white text-primary me-1" href="https://www.munaa.me" target="_blank"><i class="fab fa-facebook-f"></i></a>
                <a class="btn btn-sm-square bg-white text-primary me-1" href="https://www.munaa.me" target="_blank"><i class="fab fa-twitter"></i></a>
                <a class="btn btn-sm-square bg-white text-primary me-1" href="https://www.munaa.me" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                <a class="btn btn-sm-square bg-white text-primary me-0" href="https://www.munaa.me" target="_blank"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
    </div>
</div>