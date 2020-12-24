
<nav class="navbar navbar-light navbar-expand-lg bg-light px-4 py-3 shadow">
    <a class="navbar-brand d-flex align-items-center" href="<?= BASE_PAGE ?>">
        <img src="<?= IMG_PATH . "logo-korea.png"; ?>" width="50" height="50" class="d-inline-block align-top" alt="">
        <div class="ml-4">
            <h4 class="mb-0">COVID-19 Information System</h4>
            <h4 class="mb-0">South Korea</h4>
        </div>
    </a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-lg-4">
            <li class="nav-item p-2">
                <h5 class="m-0">
                    <a class="nav-link font-weight-bold" href="<?= BASE_PAGE ?>">Home</a>
                </h5>
            </li>
            <li class="nav-item p-2">
                <h5 class="m-0">
                    <a class="nav-link font-weight-bold" href="<?= BASE_PAGE ?>data">Data</a>
                </h5>
            </li>
        </ul>
        
        <!-- LOGOUT DROPDOWN -->
        
        <div class="ml-auto">
            <?php
                if(isset($user_information)) {
                    echo '
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                ' . $user_information['username'] . '
                            </button>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="'. BASE_PAGE .'admin?page=patient&data=1">Patients</a>
                                <a class="dropdown-item" href="'. BASE_PAGE .'admin?page=user">Users</a>
                                <a class="dropdown-item" href="'. BASE_PAGE .'logout">Logout</a>
                            </div>
                        </div>
                    ';
                }
                else {
                    echo '        
                        <div class="nav-item p-2">
                            <h5 class="m-0">
                                <a class="nav-link font-weight-bold" href="./login">Login</a>
                            </h5>
                        </div>
                    ';
                }
            ?>
        </div> 
    </div>
</nav>