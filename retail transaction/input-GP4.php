<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Input gasoline pump 4</title>
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="index.php">RETAIL TRANSACTION</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                    <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
                </div>
            </form>
                       <!-- copy phần chung của các trang từ đây-->
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="login.php">Sign In</a></li>
                        <li><hr class="dropdown-divider" /></li>
                        <li><a class="dropdown-item" href="login.php">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <!-- sửa tarbar bên trái  -->
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            
                            <a class="nav-link" href="index.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Home
                            </a>
                            <div class="sb-sidenav-menu-heading">Pump gasoline management</div>
                            <a class="nav-link collapsed"  data-bs-toggle="collapse" data-bs-target="#collapseLayouts1">
                                <!-- lấy icon ở https://fontawesome.com/-->
                                <div class="sb-nav-link-icon"><i class="fas fa-gas-pump"></i></i></div>
                                Gasoline pump 1
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>

                            <div class="collapse" id="collapseLayouts1" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="input-GP1.php">
                                        <div class="sb-nav-link-icon"><i class="fas fa-keyboard"></i></div>
                                        Input</a>
                                    <a class="nav-link" href="tables-GP1.php">
                                        <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                        Table
                                    </a>
                                    <a class="nav-link" href="charts-GP1.php">
                                        <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                        Chart 
                                    </a>
                                </nav>
                            </div>
                            
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts2">
                                 <!-- lấy icon ở https://fontawesome.com/-->
                                 <div class="sb-nav-link-icon"><i class="fas fa-gas-pump"></i></i></div>
                                Gasoline pump 2
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts2" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                    <a class="nav-link" href="input-GP2.php">
                                        <div class="sb-nav-link-icon"><i class="fas fa-keyboard"></i></div>
                                        Input</a>
                                    <a class="nav-link" href="tables-GP2.php">
                                        <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                        Table
                                    </a>
                                    <a class="nav-link" href="charts-GP2.php">
                                        <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                        Chart 
                                    </a>
                                   
                                </nav>
                            </div>

                            <!-- thêm 2 cái gasoline pump 3,4  -->
                            
                            

                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts3" >
                                 <!-- lấy icon ở https://fontawesome.com/-->
                                 <div class="sb-nav-link-icon"><i class="fas fa-gas-pump"></i></i></div>
                                Gasoline pump 3
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts3" aria-labelledby="headingThree" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="input-GP3.php">
                                        <div class="sb-nav-link-icon"><i class="fas fa-keyboard"></i></div>
                                        Input</a>
                                    <a class="nav-link" href="tables-GP3.php">
                                        <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                        Table
                                    </a>
                                    <a class="nav-link" href="charts-GP3.php">
                                        <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                        Chart 
                                    </a>
                                </nav>
                            </div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts4">
                                 <!-- lấy icon ở https://fontawesome.com/-->
                                 <div class="sb-nav-link-icon"><i class="fas fa-gas-pump"></i></i></div>
                                Gasoline pump 4
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts4" aria-labelledby="headingFour" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                    <a class="nav-link" href="input-GP4.php">
                                        <div class="sb-nav-link-icon"><i class="fas fa-keyboard"></i></div>
                                        Input</a>
                                    <a class="nav-link" href="tables-GP4.php">
                                        <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                        Table
                                    </a>
                                    <a class="nav-link" href="charts-GP4.php">
                                        <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                        Chart 
                                    </a>                                 
                                </nav>
                            </div>

                            <!-- thêm 2 cái gasoline pump 3,4  -->


                            <div class="sb-sidenav-menu-heading">Others</div>
                            <a class="nav-link" href="setting.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-cog"></i></div>
                                My account
                            </a>
                            <a class="nav-link" href="notification.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-bell"></i></div>
                                Notification
                            </a>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        Admin
                    </div>
                </nav>
            </div>
            <!--copy phần chung đến đây hết-->
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Input gasoline pump 4</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item active">Input gasoline pump 4</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-body">
                                <form action="#" method="POST" name="laform">
                                    Date:  <input type="date" id="date" /> <br/>
                                    Types: <input type="text" id="types" /> <br/>
                                    Old capacity: <input type="number" id="oldcap" /> <br/>
                                    New capacity: <input type="number" id="newcap" /> <br/>
                                    Volume: <input type="number" id="volume" /> <br/>
                                    Price: <input type="number" id="price" /> <br/>
                                    Total: <input type="number" id="total" /> <br/>
                                    Search: <input type="text" id="search" /> <br/>
                                    <input type="button" onclick="" value="Add" id="add" />
                                    <input type="button" onclick="" value="Upgrade" id="upgrade" />
                                    <input type="button" onclick="" value="Remove" id="remove" />
                                    <input type="button" onclick="" value="Search" id="searchbtn" />
                                </form>
                            </div>
                        </div>
                        <div style="height: 100vh"></div>
                        
                    </div>
                </main>
                 <!--copy phần đuôi chung html -->
                 <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Group 9 Website</div>
                            <div>
                                <a href="PrivacyPolicy.php">Privacy Policy</a>
                                &middot;
                                <a href="TermsConditions.php">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
                <!--copy phần đuôi chung html -->
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>
