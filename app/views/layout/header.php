    <div class="container ">
        <div class="row">
            <div class="col-12">
                <header>
                    <div class="row bg-primary">
                        <div class="col-6 ">
                            <div class="text-white h3 pt-2">Axixa Technologies</div>

                        </div>
                        <div class="col-6">
                            <nav class="navbar navbar-dark navbar-expand-lg bg-primary">
                                <div class="container-fluid">

                                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                                        <span class="navbar-toggler-icon"></span>
                                    </button>
                                    <div class="collapse navbar-collapse" id="navbarNav">
                                        <ul class="navbar-nav">
                                            <?php
                                            if (Session::get('logindtl')) { ?>
                                                <li class="nav-item">
                                                    <a class="nav-link active" aria-current="page" href="<?= ROOT . 'disease'; ?>">Disease</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link active" aria-current="page" href="<?= ROOT . 'disease/create'; ?>">Create Disease</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="#">Features</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="#">Pricing</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link " aria-current="page" href="<?= ROOT . 'user/logout'; ?>">Logout</a>
                                                </li>
                                            <?php } else { ?>
                                                <li class="nav-item">
                                                    <a class="nav-link active" aria-current="page" href="<?= ROOT . 'user'; ?>">Login</a>
                                                </li>

                                            <?php } ?>
                                            <li class="nav-item">
                                                <a class="nav-link active" aria-current="page" href="<?= ROOT . 'employee'; ?>">Employee</a>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                            </nav>
                        </div>
                    </div>
                </header>
            </div>
            <div class="col-12 pt-3 pb-3 bg-white" style="min-height: 400px;">