<?php
require APPROOT . '/views/inc/header.php';

?>

<div class="row">
    <div class="col-md-6 mx-auto">
        <div class="card card-body bg-light mt-5">
            <h2>User details</h2>

            <p>
                <strong>Name: </strong><?php echo $data['name']; ?>
            </p>
            <p>
                <strong>Email: </strong><?php echo $data['email']; ?>
            </p>
        </div>
    </div>
</div>
<?php
require APPROOT . '/views/inc/footer.php';

?>