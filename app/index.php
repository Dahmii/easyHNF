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
                    

                    <div class="row g-3 g-xxl-6">
                        <div class="col-xxl-12">
                            <div class="vstack gap-3 gap-md-6">
                                <!-- <div class="row g-3">
                                    <div class="col-md col-sm-6">
                                        <div class="card border-primary-hover">
                                            <div class="card-body p-4">
                                                <div class="d-flex align-items-center gap-2">
                                                    <span class="badge badge-lg icon icon-lg icon-shape text-lg rounded-circle bg-danger text-white flex-none" alt="..."><i class="bi bi-download"></i></span> <span class="fw-bold">App Download</span>
                                                </div>
                                                <div class="text-m fw-semibold mt-3">3.2893</div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md col-sm-6">
                                        <div class="card border-primary-hover">
                                            <div class="card-body p-4">
                                                <div class="d-flex align-items-center gap-2">
                                                    <span class="badge badge-lg icon icon-lg icon-shape text-lg rounded-circle bg-danger text-white flex-none" alt="..."><i class="bi bi-stoplights"></i></span> <span class="fw-bold">Site Traffic</span>
                                                </div>
                                                <div class="text-m fw-semibold mt-3">3.2893</div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md col-sm-6">
                                        <div class="card border-primary-hover">
                                            <div class="card-body p-4">
                                                <div class="d-flex align-items-center gap-2">
                                                    <span class="badge badge-lg icon icon-lg icon-shape text-lg rounded-circle bg-danger text-white flex-none" alt="..."><i class="bi bi-book"></i></span> <span class="fw-bold">Meal Plan</span>
                                                </div>
                                                <div class="text-m fw-semibold mt-3">3</div>
                                            </div>
                                        </div>
                                    </div>
                                </div> -->


                                <!-- <div class="card">
                                    <div class="card-body pb-0">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div>
                                                <h5>Meal Plans</h5>
                                            </div>
                                            <div class="hstack align-items-center">
                                                <a href="#" class="btn btn-sm btn-neutral d-none d-sm-inline-flex"> <span class="pe-2">View all</span><span> <i class="bi bi-arrow-right"></i></span></a>
                                            </div>
                                        </div>
                                        <div class="table-responsive mb-10 mt-5">
                                            <table class="table table-hover table-striped table-sm table-nowrap">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">
                                                            <div class="d-flex align-items-center gap-2 ps-1">
                                                                <span>Topic</span>
                                                            </div>
                                                        </th>
                                                        <th scope="col">Scripture</th>
                                                        <th scope="col">Memory Verse</th>
                                                        <th scope="col">Date</th>
                                                        <th scope="col" class="d-none text-end d-xl-table-cell">Action</th>
                                                    </tr>
                                                </thead>

                                                <tbody>
                                                    <?php
                                                    $select_query = "SELECT * FROM tbl_devotionals ORDER BY dateCreated DESC LIMIT 10";
                                                        $result = mysqli_query($conn, $select_query);
                                                        if (mysqli_num_rows($result) > 0) {
                                                            // output data of each row
                                                            while($row = mysqli_fetch_assoc($result)) {
                                                                $id = $row['id'];
                                                                $topic = $row['topic'];
                                                                $scripture = $row['scripture'];
                                                                $memoryVerse = $row['memoryVerse'];
                                                                $dateCreated = $row['dateCreated'];
                                                                $date = strtotime($dateCreated);
                                                    ?>
                                                    <tr>
                                                        <td>
                                                            <div class="d-flex align-items-center gap-3 ps-1">
                                                                <div class="d-xl-inline-flex icon icon-shape w-rem-8 h-rem-8 rounded-circle text-sm bg-primary bg-opacity-25 text-primary"><i class="bi bi-book-fill"></i></div>
                                                                <div><span class="d-block text-heading fw-bold"><?php echo $topic; ?></span></div>
                                                            </div>
                                                        </td>
                                                        <td><?php echo $scripture; ?></td>
                                                        <td><?php echo $memoryVerse; ?></td>
                                                        <td><?php echo date('j F Y', $date); ?></td>
                                                        <td class="text-end">
                                                            <div class="dropdown">
                                                            <button type="button" class="btn btn-sm btn-square btn-neutral w-rem-6 h-rem-6" data-bs-toggle="dropdown" aria-haspopup="false" aria-expanded="false"><i class="bi bi-three-dots"></i></button>
                                                                <ul class="dropdown-menu dropdown-menu-xs">
                                                                    <li><a href="#" class="view_devotional dropdown-item" id="<? echo $id; ?>"><i class="bi bi-eye me-2"></i>View</a></li>
                                                                    <li><a class="dropdown-item" href="edit-devotional?id=<? echo $id; ?>"><i class="bi bi-pencil-square me-2"></i>Edit</a></li>
                                                                    <li><button type="button" class="dropdown-item" data-id="<? echo $id; ?>" onclick="confirmDevotionalDelete(this);"><i class="bi bi-trash3 me-2"></i>Delete</button></li>
                                                                </ul>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <?php
                                                            }
                                                        }
                                                    ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div> -->

                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
    </div>

<?php include "./components/footer.php"; ?>