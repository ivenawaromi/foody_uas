<?php $__env->startSection('content'); ?>
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>

    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="<?php echo e(Vite::asset('resources/img/aptz6.jpg')); ?>" class="d-block img-fluid w-100" alt="appetizer">
            <div class="carousel-caption d-none d-md-block">
                <h5 class="text-black">Canapé</h5>
                <p class="text-black">Easy-to-eat snacks, made with the basic ingredients of a small piece of bread or cake with various toppings,
                    and served traditionally
                </p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="<?php echo e(Vite::asset('resources/img/sp2.jpg')); ?>" class="d-block img-fluid w-100" alt="soup">
            <div class="carousel-caption d-none d-md-block">
                <h5>Tom Yam</h5>
                <p>one of the most famous Thai dishes, in the form of a soup with a spicy sour taste and
                    strong aromatics from various spices from the Asian continent
                </p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="<?php echo e(Vite::asset('resources/img/mc3.jpg')); ?>" class="d-img-fluid w-100" alt="Main Course">
            <div class="carousel-caption d-none d-md-block">
                <h5 class="text-black">Sate Lilit</h5>
                <p class="text-black">Sate lilit can be made from several types of meat, including pork, beef, chicken and sea fish.
                    Sate lilit has a distinctive appearance, namely an appetizing yellow color.
                </p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="<?php echo e(Vite::asset('resources/img/ds3.jpg')); ?>" class="d-block img-fluid w-100" alt="dessert">
            <div class="carousel-caption d-none d-md-block">
                <h5>Gelato</h5>
                <p>A type of ice cream originating from Italy. Although similar to ice cream,
                    gelato has a denser texture and creamier consistency
                </p>
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
</div>

<?php echo $__env->make('layouts.categori', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<br>
<div class="container my-5">
    <div class="row p-4 pb-0 pe-lg-0 pt-lg-5 align-items-center rounded-3 border shadow-lg">
        <div class="col-lg-7 p-3 p-lg-5 pt-lg-3">
            <h1 class="display-4 fw-bold lh-1">Reservation</h1>
            <p class="lead">
                Avoid long queues and secure your place with us by reserving a table in advance.
                Fill out the form on our website or Reservation in here!
            </p>
            <div class="d-grid gap-2 d-md-flex justify-content-md-start mb-4 mb-lg-3">
                <a href="<?php echo e(route('resev.create')); ?>" class="btn btn-md" style="background-color: #fca838">Reservation</a>
            </div>
        </div>
        <div class="col-lg-4 offset-lg-1 p-0 overflow-hidden">
            <img src="<?php echo e(Vite::asset('resources/img/cover1.png')); ?>" alt="cover home" class="rounded-lg-3" width="500">
        </div>
    </div>
</div>

<br>
<div class="row">
    <div class="col-md-5 mt-5">
        <img src="<?php echo e(Vite::asset('resources/img/logo.png')); ?>" class="img-thumbnail mt-4" alt="logo">
    </div>
    <div class="col-md-7" style="padding: 80px">
        <h2 style="text-align: left">PalateParadise</h2>
        <p style="text-align: left">
            <br>
            <p><strong> Welcome to PalateParadise! </strong></p>
            <br>
            At PalateParadise, we present a culinary experience that will excite
            your taste buds and pamper your taste buds. From delicious classic
            dishes to innovative culinary creations, we present the best choices
            to fulfill your desires.
            <br>
            <br>

            We believe that food is not just a necessity, but also an art that
            enriches life. Every dish we serve is a perfect blend of quality
            ingredients, skilled cooking techniques and a unique touch of creativity.
            <br>
            <br>

            With a passion for delivering the best flavors, we invite you to explore
            the limitless world of flavors at PalateParadise. Make every visit a
            memorable and satisfying culinary adventure!
            <br>
            <br>
            <p>Enjoy your culinary experience at PalateParadise - a paradise for your taste buds! <i class="bi bi-emoji-smile"></i></p>
        </p>
    </div>
</div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ASUS\framework\UAS\listFoody\resources\views/home.blade.php ENDPATH**/ ?>