<?php
    $page = "Dashboard";
    include "./components/header.php";
    include "./components/modals.php";
?>
    <div class="d-flex flex-column flex-lg-row h-lg-100 gap-1">
        <?php include "./components/side-nav.php"; ?>
        <div class="flex-lg-fill overflow-x-auto ps-lg-1 vstack vh-lg-100 position-relative">
            <?php include "./components/topnav.php"; ?>
            <div class="flex-fill overflow-y-lg-auto scrollbar bg-body rounded-top-4 rounded-top-start-lg-4 rounded-top-end-lg-0 border-top border-lg shadow-2">
                <main class="container-fluid px-3 py-5 p-lg-6 p-xxl-8">
                    <div class="mb-6 mb-xl-10">
                        <div class="row align-items-center">
                            <div class="container">
                                <h3 class="ls-tight">Hey, <?php echo $_SESSION['first_name']; ?></h3>
                                <h5 class="text-dark mt-0 lead" id="greet"></h5>
                            </div>
                            <div class="d-flex">
                                <h2 class="ls-tight"></h2>
                            </div>
                        </div>
                    </div>

                    <div class="py-lg-10 mb-10">
                        <div class="container">
                            <div style="display: <?php if (!$subscription_plan){ echo 'unset';}else{ echo 'none';}?>">
                                <div class="alert alert-warning text-center" role="alert">Hey, <a href="subscription" class="fw-bold text-dark">Click Here</a> to subscribe to a plan to start enjoying the healthy life.</div>
                            </div>
                        </div>
                    </div>


                    <div class="py-lg-10">
                        <div class="container mw-screen-xl">
                            <div class="py-10 rounded-5 px-lg-16 text-center text-md-start" style="background-image: url('./assets/img/communitybg.jpg'); background-repeat: no-repeat; background-size: cover;">
                                <div class="row justify-content-center">
                                    <div class="col-12 col-md-12 col-lg-12 text-center">
                                        <h3 class="ls-tight fw-bolder display-4 mb-5 text-white">Expert tips & tricks</h3>
                                        <p class="lead text-white opacity-8 mb-10">Connect with others who share your goals and get motivated by their success stories.</p>
                                        <div class="mx-n2">
                                            <a href="https://www.instagram.com/easyhnf/" target="_blank" class="btn btn-lg btn-light mx-2 px-lg-8">Join our community</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 col-md-6 col-lg-4 mt-6">
                                    <div class="py-10 rounded-5 px-lg-16 text-center text-md-start" style="background-image: url('./assets/img/meal_plan.jpg'); background-repeat: no-repeat; background-size: cover;">
                                        <div class="row justify-content-center">
                                            <div class="col-12 col-md-12 col-lg-12 text-center">
                                                <h2 class="ls-tight fw-bolder mb-5 text-white">My Meal Plan</h2>
                                                <p class="lead text-white opacity-8 mb-10">Discover the joy of healthy eating with this inspiring meal plan.</p>
                                                <div class="mx-n2">
                                                    <a href="my-plan" class="btn btn-light mx-2 px-lg-8">View Plan</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 col-md-6 col-lg-4 mt-6">
                                    <div class="py-10 rounded-5 px-lg-16 text-center text-md-start" style="background-image: url('./assets/img/meals.jpg'); background-repeat: no-repeat; background-size: cover;">
                                        <div class="row justify-content-center">
                                            <div class="col-12 col-md-12 col-lg-12 text-center">
                                                <h2 class="ls-tight fw-bolder mb-5 text-white">My Meals</h2>
                                                <p class="lead text-white opacity-8 mb-10">Take control of your health, one delicious meal at a time.</p>
                                                <div class="mx-n2">
                                                    <a href="https://www.instagram.com/easyhnf/" class="btn btn-light mx-2 px-lg-8">View Meals</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 col-md-6 col-lg-4 mt-6">
                                    <div class="py-10 rounded-5 px-lg-16 text-center text-md-start" style="background-image: url('./assets/img/session.jpg'); background-repeat: no-repeat; background-size: cover;">
                                        <div class="row justify-content-center">
                                            <div class="col-12 col-md-12 col-lg-12 text-center">
                                                <h2 class="ls-tight fw-bolder mb-5 text-white">Book a Session</h2>
                                                <p class="lead text-white opacity-8 mb-10">Get expert guidance for healthy eating habits that last.</p>
                                                <div class="mx-n2">
                                                    <a href="booking" class="btn btn-light mx-2 px-lg-8">Book a Session</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
    </div>

<?php include "./components/footer.php"; ?>