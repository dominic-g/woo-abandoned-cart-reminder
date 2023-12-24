<?php
function recover_deserted_carts_emails(){
    ?>
    <main class="content">
        <div class="container-fluid">
            <div class="header">
                <h1 class="header-title">
                    Clients
                </h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/dashboard-default">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="#">Pages</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Clients</li>
                    </ol>
                </nav>
            </div>
            <div class="row">
                <div class="col-xxl-9">
                    <div class="card full">
                        <div class="card-header">
                            <div class="card-actions float-end">
                                <a href="#" class="me-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-refresh-cw align-middle">
                                        <polyline points="23 4 23 10 17 10"></polyline>
                                        <polyline points="1 20 1 14 7 14"></polyline>
                                        <path d="M3.51 9a9 9 0 0 1 14.85-3.36L23 10M1 14l4.64 4.36A9 9 0 0 0 20.49 15"></path>
                                    </svg>
                                </a>
                                <div class="d-inline-block dropdown show">
                                    <a href="#" data-bs-toggle="dropdown" data-bs-display="static">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical align-middle">
                                            <circle cx="12" cy="12" r="1"></circle>
                                            <circle cx="12" cy="5" r="1"></circle>
                                            <circle cx="12" cy="19" r="1"></circle>
                                        </svg>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                    </div>
                                </div>
                            </div>
                            <h5 class="card-title mb-0">Clients</h5>
                        </div>
                        <div class="card-body">
                            <div id="datatables-clients_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer">
                                <div class="row">
                                    <div class="col-sm-12 col-md-6">
                                        <div class="dataTables_length" id="datatables-clients_length">
                                            <label>
                                                Show 
                                                <select name="datatables-clients_length" aria-controls="datatables-clients" class="form-select form-select-sm">
                                                    <option value="10">10</option>
                                                    <option value="25">25</option>
                                                    <option value="50">50</option>
                                                    <option value="100">100</option>
                                                </select>
                                                entries
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6">
                                        <div id="datatables-clients_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="datatables-clients"></label></div>
                                    </div>
                                </div>
                                <div class="row dt-row">
                                    <div class="col-sm-12">
                                        <table id="datatables-clients" class="table table-striped dataTable no-footer dtr-inline" style="width: 100%;" aria-describedby="datatables-clients_info">
                                            <thead>
                                                <tr>
                                                    <th class="sorting" tabindex="0" aria-controls="datatables-clients" rowspan="1" colspan="1" style="width: 59px;" aria-label="#: activate to sort column ascending">#</th>
                                                    <th class="sorting sorting_asc" tabindex="0" aria-controls="datatables-clients" rowspan="1" colspan="1" style="width: 214px;" aria-sort="ascending" aria-label="Name: activate to sort column descending">Name</th>
                                                    <th class="sorting" tabindex="0" aria-controls="datatables-clients" rowspan="1" colspan="1" style="width: 177px;" aria-label="Company: activate to sort column ascending">Company</th>
                                                    <th class="sorting" tabindex="0" aria-controls="datatables-clients" rowspan="1" colspan="1" style="width: 276px;" aria-label="Email: activate to sort column ascending">Email</th>
                                                    <th class="sorting" tabindex="0" aria-controls="datatables-clients" rowspan="1" colspan="1" style="width: 102px;" aria-label="Status: activate to sort column ascending">Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="odd">
                                                    <td class="dtr-control"><img src="img/avatars/avatar-3.jpg" width="32" height="32" class="rounded-circle my-n1" alt="Avatar"></td>
                                                    <td class="sorting_1">Angelica Ramos</td>
                                                    <td>The Wiz</td>
                                                    <td>angelica@ramos.com</td>
                                                    <td><span class="badge bg-success">Active</span></td>
                                                </tr>
                                                <tr class="even">
                                                    <td class="dtr-control" tabindex="0"><img src="img/avatars/avatar.jpg" width="32" height="32" class="rounded-circle my-n1" alt="Avatar"></td>
                                                    <td class="sorting_1">Ashton Cox</td>
                                                    <td>Levitz Furniture</td>
                                                    <td>ashton@cox.com</td>
                                                    <td><span class="badge bg-success">Active</span></td>
                                                </tr>
                                                <tr class="odd">
                                                    <td class="dtr-control"><img src="img/avatars/avatar-4.jpg" width="32" height="32" class="rounded-circle my-n1" alt="Avatar"></td>
                                                    <td class="sorting_1">Brenden Wagner</td>
                                                    <td>The Wiz</td>
                                                    <td>brenden@wagner.com</td>
                                                    <td><span class="badge bg-warning">Inactive</span></td>
                                                </tr>
                                                <tr class="even">
                                                    <td class="dtr-control" tabindex="0"><img src="img/avatars/avatar-2.jpg" width="32" height="32" class="rounded-circle my-n1" alt="Avatar"></td>
                                                    <td class="sorting_1">Charde Marshall</td>
                                                    <td>Price Savers</td>
                                                    <td>charde@marshall.com</td>
                                                    <td><span class="badge bg-success">Active</span></td>
                                                </tr>
                                                <tr class="odd">
                                                    <td class="dtr-control"><img src="img/avatars/avatar-3.jpg" width="32" height="32" class="rounded-circle my-n1" alt="Avatar"></td>
                                                    <td class="sorting_1">Doris Wilder</td>
                                                    <td>Red Robin Stores</td>
                                                    <td>doris@wilder.com</td>
                                                    <td><span class="badge bg-warning">Inactive</span></td>
                                                </tr>
                                                <tr class="even">
                                                    <td class="dtr-control"><img src="img/avatars/avatar-4.jpg" width="32" height="32" class="rounded-circle my-n1" alt="Avatar"></td>
                                                    <td class="sorting_1">Fiona Green</td>
                                                    <td>The Sample</td>
                                                    <td>fiona@green.com</td>
                                                    <td><span class="badge bg-warning">Inactive</span></td>
                                                </tr>
                                                <tr class="odd">
                                                    <td class="dtr-control" tabindex="0"><img src="img/avatars/avatar.jpg" width="32" height="32" class="rounded-circle my-n1" alt="Avatar"></td>
                                                    <td class="sorting_1">Garrett Winters</td>
                                                    <td>Good Guys</td>
                                                    <td>garrett@winters.com</td>
                                                    <td><span class="badge bg-success">Active</span></td>
                                                </tr>
                                                <tr class="even">
                                                    <td class="dtr-control"><img src="img/avatars/avatar-5.jpg" width="32" height="32" class="rounded-circle my-n1" alt="Avatar"></td>
                                                    <td class="sorting_1">Gavin Cortez</td>
                                                    <td>Red Robin Stores</td>
                                                    <td>gavin@cortez.com</td>
                                                    <td><span class="badge bg-success">Active</span></td>
                                                </tr>
                                                <tr class="odd">
                                                    <td class="dtr-control" tabindex="0"><img src="img/avatars/avatar-2.jpg" width="32" height="32" class="rounded-circle my-n1" alt="Avatar"></td>
                                                    <td class="sorting_1">Haley Kennedy</td>
                                                    <td>Helping Hand</td>
                                                    <td>haley@kennedy.com</td>
                                                    <td><span class="badge bg-danger">Deleted</span></td>
                                                </tr>
                                                <tr class="even">
                                                    <td class="dtr-control"><img src="img/avatars/avatar-5.jpg" width="32" height="32" class="rounded-circle my-n1" alt="Avatar"></td>
                                                    <td class="sorting_1">Howard Hatfield</td>
                                                    <td>Price Savers</td>
                                                    <td>howard@hatfield.com</td>
                                                    <td><span class="badge bg-warning">Inactive</span></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12 col-md-5">
                                        <div class="dataTables_info" id="datatables-clients_info" role="status" aria-live="polite">Showing 1 to 10 of 20 entries</div>
                                    </div>
                                    <div class="col-sm-12 col-md-7">
                                        <div class="dataTables_paginate paging_simple_numbers" id="datatables-clients_paginate">
                                            <ul class="pagination">
                                                <li class="paginate_button page-item previous disabled" id="datatables-clients_previous"><a aria-controls="datatables-clients" aria-disabled="true" aria-role="link" data-dt-idx="previous" tabindex="0" class="page-link">Previous</a></li>
                                                <li class="paginate_button page-item active"><a href="#" aria-controls="datatables-clients" aria-role="link" aria-current="page" data-dt-idx="0" tabindex="0" class="page-link">1</a></li>
                                                <li class="paginate_button page-item "><a href="#" aria-controls="datatables-clients" aria-role="link" data-dt-idx="1" tabindex="0" class="page-link">2</a></li>
                                                <li class="paginate_button page-item next" id="datatables-clients_next"><a href="#" aria-controls="datatables-clients" aria-role="link" data-dt-idx="next" tabindex="0" class="page-link">Next</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <?php
}