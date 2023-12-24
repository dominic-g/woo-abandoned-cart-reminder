<?php
// Dashboard Page
function recover_deserted_carts_dashboard() {
    // Dashboard code here
?>

<div class="main">
    <main class="content">
        <div class="container-fluid">
            <div class="header">
                <h1 class="header-title"> Welcome back, Linda! </h1>
                <p class="header-subtitle">You have 24 new messages and 5 new notifications.</p>
            </div>
            <div class="row">
                <div class="col-xl-6 col-xxl-7">
                    <div class="card flex-fill w-100">
                        <div class="card-header">
                            <div class="card-actions float-end">
                                <a href="#" class="me-1">
                                    <i class="align-middle" data-feather="refresh-cw"></i>
                                </a>
                                <div class="d-inline-block dropdown show">
                                    <a href="#" data-bs-toggle="dropdown" data-bs-display="static">
                                        <i class="align-middle" data-feather="more-vertical"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                    </div>
                                </div>
                            </div>
                            <h5 class="card-title mb-0">Recent Movement</h5>
                        </div>
                        <div class="card-body py-3">
                            <div class="chart chart-sm">
                                <canvas id="chartjs-dashboard-line"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-xxl-5 d-flex">
                    <div class="w-100">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col mt-0">
                                                <h5 class="card-title">Sales Today</h5>
                                            </div>
                                            <div class="col-auto">
                                                <div class="avatar">
                                                    <div class="avatar-title rounded-circle bg-primary-dark">
                                                        <i class="align-middle" data-feather="truck"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <h1 class="display-5 mt-1 mb-3">2.562</h1>
                                        <div class="mb-0">
                                            <span class="text-danger">
                                                <i class="mdi mdi-arrow-bottom-right"></i> -2.65% </span> Less sales than usual
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col mt-0">
                                                <h5 class="card-title">Visitors Today</h5>
                                            </div>
                                            <div class="col-auto">
                                                <div class="avatar">
                                                    <div class="avatar-title rounded-circle bg-primary-dark">
                                                        <i class="align-middle" data-feather="users"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <h1 class="display-5 mt-1 mb-3">17.212</h1>
                                        <div class="mb-0">
                                            <span class="text-success">
                                                <i class="mdi mdi-arrow-bottom-right"></i> 5.50% </span> More visitors than usual
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col mt-0">
                                                <h5 class="card-title">Total Earnings</h5>
                                            </div>
                                            <div class="col-auto">
                                                <div class="avatar">
                                                    <div class="avatar-title rounded-circle bg-primary-dark">
                                                        <i class="align-middle" data-feather="dollar-sign"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <h1 class="display-5 mt-1 mb-3">$24.300</h1>
                                        <div class="mb-0">
                                            <span class="text-success">
                                                <i class="mdi mdi-arrow-bottom-right"></i> 8.35% </span> More earnings than usual
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col mt-0">
                                                <h5 class="card-title">Pending Orders</h5>
                                            </div>
                                            <div class="col-auto">
                                                <div class="avatar">
                                                    <div class="avatar-title rounded-circle bg-primary-dark">
                                                        <i class="align-middle" data-feather="shopping-cart"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <h1 class="display-5 mt-1 mb-3">43</h1>
                                        <div class="mb-0">
                                            <span class="text-danger">
                                                <i class="mdi mdi-arrow-bottom-right"></i> -4.25% </span> Less orders than usual
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-12 col-xxl-6 d-flex order-3 order-xxl-2">
                    <div class="card flex-fill w-100">
                        <div class="card-header">
                            <div class="card-actions float-end">
                                <a href="#" class="me-1">
                                    <i class="align-middle" data-feather="refresh-cw"></i>
                                </a>
                                <div class="d-inline-block dropdown show">
                                    <a href="#" data-bs-toggle="dropdown" data-bs-display="static">
                                        <i class="align-middle" data-feather="more-vertical"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                    </div>
                                </div>
                            </div>
                            <h5 class="card-title mb-0">Current Visitors</h5>
                        </div>
                        <div class="card-body px-4">
                            <div id="world_map" style="height:350px;"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-lg-8 col-xxl-9 d-flex">
                    <div class="card flex-fill full ">
                        <div class="card-header">
                            <div class="card-actions float-end">
                                <a href="#" class="me-1">
                                    <i class="align-middle" data-feather="refresh-cw"></i>
                                </a>
                                <div class="d-inline-block dropdown show">
                                    <a href="#" data-bs-toggle="dropdown" data-bs-display="static">
                                        <i class="align-middle" data-feather="more-vertical"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                    </div>
                                </div>
                            </div>
                            <h5 class="card-title mb-0">Latest Projects</h5>
                        </div>
                        <table id="datatables-dashboard-projects" class="table table-striped my-0">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th class="d-none d-xl-table-cell">Start Date</th>
                                    <th class="d-none d-xl-table-cell">End Date</th>
                                    <th>Status</th>
                                    <th class="d-none d-md-table-cell">Assignee</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Project Apollo</td>
                                    <td class="d-none d-xl-table-cell">01/01/2023</td>
                                    <td class="d-none d-xl-table-cell">31/06/2023</td>
                                    <td>
                                        <span class="badge bg-success">Done</span>
                                    </td>
                                    <td class="d-none d-md-table-cell">Carl Jenkins</td>
                                </tr>
                                <tr>
                                    <td>Project Fireball</td>
                                    <td class="d-none d-xl-table-cell">01/01/2023</td>
                                    <td class="d-none d-xl-table-cell">31/06/2023</td>
                                    <td>
                                        <span class="badge bg-danger">Cancelled</span>
                                    </td>
                                    <td class="d-none d-md-table-cell">Bertha Martin</td>
                                </tr>
                                <tr>
                                    <td>Project Hades</td>
                                    <td class="d-none d-xl-table-cell">01/01/2023</td>
                                    <td class="d-none d-xl-table-cell">31/06/2023</td>
                                    <td>
                                        <span class="badge bg-success">Done</span>
                                    </td>
                                    <td class="d-none d-md-table-cell">Stacie Hall</td>
                                </tr>
                                <tr>
                                    <td>Project Nitro</td>
                                    <td class="d-none d-xl-table-cell">01/01/2023</td>
                                    <td class="d-none d-xl-table-cell">31/06/2023</td>
                                    <td>
                                        <span class="badge bg-warning">In progress</span>
                                    </td>
                                    <td class="d-none d-md-table-cell">Carl Jenkins</td>
                                </tr>
                                <tr>
                                    <td>Project Phoenix</td>
                                    <td class="d-none d-xl-table-cell">01/01/2023</td>
                                    <td class="d-none d-xl-table-cell">31/06/2023</td>
                                    <td>
                                        <span class="badge bg-success">Done</span>
                                    </td>
                                    <td class="d-none d-md-table-cell">Bertha Martin</td>
                                </tr>
                                <tr>
                                    <td>Project X</td>
                                    <td class="d-none d-xl-table-cell">01/01/2023</td>
                                    <td class="d-none d-xl-table-cell">31/06/2023</td>
                                    <td>
                                        <span class="badge bg-success">Done</span>
                                    </td>
                                    <td class="d-none d-md-table-cell">Stacie Hall</td>
                                </tr>
                                <tr>
                                    <td>Project Romeo</td>
                                    <td class="d-none d-xl-table-cell">01/01/2023</td>
                                    <td class="d-none d-xl-table-cell">31/06/2023</td>
                                    <td>
                                        <span class="badge bg-success">Done</span>
                                    </td>
                                    <td class="d-none d-md-table-cell">Ashley Briggs</td>
                                </tr>
                                <tr>
                                    <td>Project Wombat</td>
                                    <td class="d-none d-xl-table-cell">01/01/2023</td>
                                    <td class="d-none d-xl-table-cell">31/06/2023</td>
                                    <td>
                                        <span class="badge bg-warning">In progress</span>
                                    </td>
                                    <td class="d-none d-md-table-cell">Bertha Martin</td>
                                </tr>
                                <tr>
                                    <td>Project Zircon</td>
                                    <td class="d-none d-xl-table-cell">01/01/2023</td>
                                    <td class="d-none d-xl-table-cell">31/06/2023</td>
                                    <td>
                                        <span class="badge bg-danger">Cancelled</span>
                                    </td>
                                    <td class="d-none d-md-table-cell">Stacie Hall</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-12 col-lg-4 col-xxl-3 d-flex">
                    <div class="card flex-fill w-100">
                        <div class="card-header">
                            <div class="card-actions float-end">
                                <a href="#" class="me-1">
                                    <i class="align-middle" data-feather="refresh-cw"></i>
                                </a>
                                <div class="d-inline-block dropdown show">
                                    <a href="#" data-bs-toggle="dropdown" data-bs-display="static">
                                        <i class="align-middle" data-feather="more-vertical"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                    </div>
                                </div>
                            </div>
                            <h5 class="card-title mb-0">Monthly Sales</h5>
                        </div>
                        <div class="card-body d-flex w-100">
                            <div class="align-self-center chart chart-lg">
                                <canvas id="chartjs-dashboard-bar"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer class="footer">
        <div class="container-fluid">
            <div class="row text-muted">
                <div class="col-8 text-start">
                    <ul class="list-inline">
                        <li class="list-inline-item">
                            <a class="text-muted" href="#">Support</a>
                        </li>
                        <li class="list-inline-item">
                            <a class="text-muted" href="#">Privacy</a>
                        </li>
                        <li class="list-inline-item">
                            <a class="text-muted" href="#">Terms of Service</a>
                        </li>
                        <li class="list-inline-item">
                            <a class="text-muted" href="#">Contact</a>
                        </li>
                    </ul>
                </div>
                <div class="col-4 text-end">
                    <p class="mb-0"> &copy; 2023 - <a class='text-muted' href='/dashboard-default'>Spark</a>
                    </p>
                </div>
            </div>
        </div>
    </footer>
</div>
<?php
}