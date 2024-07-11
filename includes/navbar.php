<nav class="navbar navbar-expand-lg bg-light fixed-top shadow-lg">
                <div class="container">
                    <a class="navbar-brand mx-auto d-lg-none" href="index.php">
                        Njala University
                        <strong class="d-block fw-bold fst-italic">Grading System</strong>
                    </a>

                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav mx-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="#hero"><i class="bi-house"></i> Home</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="#about"><i class="bi-back"></i> Scope</a>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link nav dropdown-toggle" data-bs-toggle="dropdown" href="#timeline"><i class="bi-building"></i>Schools</a>
                                <div class="dropdown-menu">
                                <?php
                                    $readqueryrun = $Controller->readSchoolComponent();
                                    while($row = mysqli_fetch_assoc($readqueryrun)){ ?>
                                    <a class="dropdown-item" href="#"><?php echo $row['school'];?></a>
                                    <?php } ?>
                                </div>
                            </li>

                            <a class="navbar-brand d-none d-lg-block" href="index.php">
                            Njala University
                                <strong class="d-block fw-bold fst-italic">Grading System</strong>
                            </a>

                            <li class="nav-item">
                                <a class="nav-link" href="#reviews" data-bs-toggle="modal" data-bs-target="#grade"><i class="bi-app-indicator"></i> Exams </a>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link nav dropdown-toggle" data-bs-toggle="dropdown" href="#timeline"><i class="bi-back"></i> Department</a>
                                <div class="dropdown-menu">
                                <?php
                                    $readqueryrun = $Controller->readDepartmentComponent();
                                    while($row = mysqli_fetch_assoc($readqueryrun)){ ?>
                                    <a class="dropdown-item" href="#"><?php echo $row['department'];?></a>
                                    <?php } ?>
                                </div>
                            </li>
                            

                         <button class="btn btn-primary me-auto fw-bold" data-bs-toggle="modal" data-bs-target="#login" >Login <i class="bi-people"></i></button>
                        </ul>
                    </div>

                </div>
            </nav>
