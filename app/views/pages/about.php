<?php
require APPROOT . '/views/inc/header.php';

?>
<main>
    <div class="container-xxl py-5">
        <div class="container">
           
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="text-primary text-uppercase">
                    <?php echo $data['title']; ?>
                </h6>
                <h1 class="mb-5">
                    <?php echo $data['description']; ?>
                </h1>
            </div>
            <div class="row g-4" id='team'>
               

            </div>
        </div>
    </div>
</main>

<?php
require APPROOT . '/views/inc/footer.php';

?>