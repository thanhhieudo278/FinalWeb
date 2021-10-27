<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Privacy policy</title>
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
                        <h1 class="mt-4">Privacy policy</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item active">Privacy policy</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-body">
                                <h6> This privacy policy sets out how “RetailTransaction Company” uses and protects any information that you give “RetailTransaction Company” when you use this website. “RetailTransaction Company” is committed to ensuring that your privacy is protected. Should we ask you to provide certain information by which you can be identified when using this website, then you can be assured that it will only be used in accordance with this privacy statement. “RetailTransaction Company” may change this policy from time to time by updating this page. You should check this page from time to time to ensure that you are happy with any changes. This policy is effective from October 1, 2012.</h6>
                                <h6>We may collect the following information: name and job title contact information including email address demographic information such as postcode, preferences and interests other information relevant to customer surveys and/or offers What we do with the information we gather We require this information to understand your needs and provide you with a better service, and in particular for the following reasons: Internal record keeping. We may use the information to improve our products and services. We may periodically send promotional emails about new products, special offers or other information which we think you may find interesting using the email address which you have provided. From time to time, we may also use your information to contact you for market research purposes. We may contact you by email, phone, fax or mail. We may use the information to customize the website according to your interests. Security. We are committed to ensuring that your information is secure. In order to prevent unauthorized access or disclosure we have put in place suitable physical, electronic and managerial procedures to safeguard and secure the information we collect online. How we use cookies. A cookie is a small file which asks permission to be placed on your computer’s hard drive. Once you agree, the file is added and the cookie helps analyze web traffic or lets you know when you visit a particular site. Cookies allow web applications to respond to you as an individual.</h6>
                                <h6> The web application can tailor its operations to your needs, likes and dislikes by gathering and remembering information about your preferences. We use traffic log cookies to identify which pages are being used. This helps us analyze data about webpage traffic and improve our website in order to tailor it to customer needs. We only use this information for statistical analysis purposes and then the data is removed from the system. Overall, cookies help us provide you with a better website, by enabling us to monitor which pages you find useful and which you do not. A cookie in no way gives us access to your computer or any information about you, other than the data you choose to share with us. You can choose to accept or decline cookies. Most web browsers automatically accept cookies, but you can usually modify your browser setting to decline cookies if you prefer. This may prevent you from taking full advantage of the website.</h6>
                            </div>
                        </div>
                        <div>
                            <h6>Copyright © 2021 RETAILTRANSACTION COMPANY.</h6>
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
