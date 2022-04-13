<?php include"includes/header.php" ?>

            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Dashboard</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                        <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="card visit-card text-white mb-4 ">
                                    <div class="card-body">Today's visitors</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link card_text" href="#">15.05k</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card visit-card text-white mb-4">
                                    <div class="card-body">Visitors on the week</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link card_text" href="#">123.67k</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card visit-card text-white mb-4">
                                    <div class="card-body">Visitors on the month</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link card_text" href="#">123.45k</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card visit-card text-white mb-4">
                                    <div class="card-body">Total Visitors</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link card_text" href="#">123.00m</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fas fa-chart-area me-1"></i>
                                        Visitors Chart
                                    </div>
                                    <div class="card-body"><canvas id="myAreaChart" width="100%" height="40"></canvas></div>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-4">
                            <div class="card-header">
                            <i class="fa-solid fa-newspaper"></i>
                                Recent Posts
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>Heading</th>
                                            <th>Category</th>
                                            <th>Writer</th>
                                            <th>view</th>
                                            <th>Post date</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                             <th>Heading</th>
                                            <th>Category</th>
                                            <th>Writer</th>
                                            <th>view</th>
                                            <th>Post date</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <tr>
                                            <td>ঘাটে লঞ্চ ভিড়তেও টাকা, ছাড়তেও টাকা </td>
                                            <td>লাইফস্টাইল</td>
                                            <td>Abdur rahman</td>
                                            <td>7564</td>
                                            <td>Today 09:10pm</td>
                                        </tr>
                                        <tr>
                                            <td>ঘাটে লঞ্চ ভিড়তেও টাকা, ছাড়তেও টাকা </td>
                                            <td>লাইফস্টাইল</td>
                                            <td>Abdur rahman</td>
                                            <td>7564</td>
                                            <td>Today 09:10pm</td>
                                        </tr>
                                        <tr>
                                            <td>ঘাটে লঞ্চ ভিড়তেও টাকা, ছাড়তেও টাকা </td>
                                            <td>লাইফস্টাইল</td>
                                            <td>Abdur rahman</td>
                                            <td>7564</td>
                                            <td>Today 09:10pm</td>
                                        </tr>
                                        <tr>
                                            <td>ঘাটে লঞ্চ ভিড়তেও টাকা, ছাড়তেও টাকা </td>
                                            <td>লাইফস্টাইল</td>
                                            <td>Abdur rahman</td>
                                            <td>7564</td>
                                            <td>Today 09:10pm</td>
                                        </tr>
                                        <tr>
                                            <td>ঘাটে লঞ্চ ভিড়তেও টাকা, ছাড়তেও টাকা </td>
                                            <td>লাইফস্টাইল</td>
                                            <td>Abdur rahman</td>
                                            <td>7564</td>
                                            <td>Today 09:10pm</td>
                                        </tr>
                                        <tr>
                                            <td>ঘাটে লঞ্চ ভিড়তেও টাকা, ছাড়তেও টাকা </td>
                                            <td>লাইফস্টাইল</td>
                                            <td>Abdur rahman</td>
                                            <td>7564</td>
                                            <td>Today 09:10pm</td>
                                        </tr>
                                        <tr>
                                            <td>ঘাটে লঞ্চ ভিড়তেও টাকা, ছাড়তেও টাকা </td>
                                            <td>লাইফস্টাইল</td>
                                            <td>Abdur rahman</td>
                                            <td>7564</td>
                                            <td>Today 09:10pm</td>
                                        </tr>
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>

<!-- sibscriber list ---------------------------------------------->

                        <div class="container-fluid">
                            <div class="row header subscriber">
                               <span>subscriber</span>
                            </div>
                            <table id="example" class="table table-striped table-bordered" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>Email Address</th>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>masudur rahman</td>
                                        <td>tayef</td>
                                        <td>masudurrahman@gmail.com</td>
                                    </tr>
                                    <tr>
                                        <td>masudur rahman</td>
                                        <td>tayef</td>
                                        <td>masudurrahman@gmail.com</td>
                                    </tr>
                                    <tr>
                                        <td>masudur rahman</td>
                                        <td>tayef</td>
                                        <td>masudurrahman@gmail.com</td>
                                    </tr>
                                    <tr>
                                        <td>masudur rahman</td>
                                        <td>tayef</td>
                                        <td>masudurrahman@gmail.com</td>
                                    </tr>
                                    <tr>
                                        <td>masudur rahman</td>
                                        <td>tayef</td>
                                        <td>masudurrahman@gmail.com</td>
                                    </tr>
                                    <tr>
                                        <td>masudur rahman</td>
                                        <td>tayef</td>
                                        <td>masudurrahman@gmail.com</td>
                                    </tr>
                                    <tr>
                                        <td>masudur rahman</td>
                                        <td>tayef</td>
                                        <td>masudurrahman@gmail.com</td>
                                    </tr>
                                    <tr>
                                        <td>masudur rahman</td>
                                        <td>tayef</td>
                                        <td>masudurrahman@gmail.com</td>
                                    </tr>
                                    <tr>
                                        <td>masudur rahman</td>
                                        <td>tayef</td>
                                        <td>masudurrahman@gmail.com</td>
                                    </tr>
                                    <tr>
                                        <td>masudur rahman</td>
                                        <td>tayef</td>
                                        <td>masudurrahman@gmail.com</td>
                                    </tr>
                                    <tr>
                                        <td>masudur rahman</td>
                                        <td>tayef</td>
                                        <td>masudurrahman@gmail.com</td>
                                    </tr>
                                    <tr>
                                        <td>masudur rahman</td>
                                        <td>tayef</td>
                                        <td>masudurrahman@gmail.com</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
















                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2022</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="js/dashbord.js"></script>
        <script src="js/scripts.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/1.10.2/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>
</html>
