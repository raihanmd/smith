<?php
session_start();
require "function.php";

if(!isset($_SESSION['login'])){
    header("Location: index.php");
    exit;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dahsboard</title>
    <!-- <script src="https://cdn.tailwindcss.com"></script> -->
    <link rel="stylesheet" href="css/dash.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Sharp:opsz,wght,FILL,GRAD@48,400,0,0" />
</head>
<body>
    <!-- <div class="w-full h-12 bg-slate-700">
        <ul class="flex justify-between">
            <li>
                <a href="logout.php">Logout</a>
            </li>
            <li> 
            </li>
        </ul>
    </div>
    <div class="bg-slate-700 w-12 h-screen fixed hidden">
        <div>
            
        </div>
    </div>
    <div class="sidebar">
        <nav>
            <ul>
                <li>
                    <a href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-house-door" viewBox="0 0 16 16">
                            <path d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146zM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4H2.5z"/>
                        </svg>
                        <p>Home</p>
                    </a>
                </li>
            </ul>
        </nav>
    </div> -->
    <div class="container">
        <aside>
            <div class="top">
                <div class="logo">
                    <h2>SMI<span class="danger">TH</span></h2>
                </div>
                <div class="close" id="close-btn">
                    <span class="material-symbols-sharp">close</span>
                </div>
            </div>

            <div class="sidebar">
                <a href="#">
                    <span class="material-symbols-sharp">dashboard</span>
                    <h3>Dashboard</h3>
                </a>
                <a href="#" class="active">
                    <span class="material-symbols-sharp">person</span>
                    <h3>Customers</h3>
                </a>
                <a href="#">
                    <span class="material-symbols-sharp">receipt_long</span>
                    <h3>Orders</h3>
                </a>
                <a href="#">
                    <span class="material-symbols-sharp">insights</span>
                    <h3>Analytics</h3>
                </a>
                <a href="#">
                    <span class="material-symbols-sharp">mail_outline</span>
                    <h3>Messages</h3>
                    <span class="message-count">100</span>
                </a>
                <a href="#">
                    <span class="material-symbols-sharp">inventory</span>
                    <h3>Products</h3>
                </a>
                <a href="#">
                    <span class="material-symbols-sharp">report_gmailerrorred</span>
                    <h3>Report</h3>
                </a>
                <a href="#">
                    <span class="material-symbols-sharp">settings</span>
                    <h3>Setting</h3>
                </a>
                <a href="#">
                    <span class="material-symbols-sharp">add</span>
                    <h3>Add Product</h3>
                </a>
                <a href="logout.php">
                    <span class="material-symbols-sharp">logout</span>
                    <h3>Logout</h3>
                </a>
            </div>
        </aside>

        <!-- END ASIDE -->

        <main>
            <h1>Dashboard</h1>

            <div class="date">
                <input type="date">
            </div>

            <div class="insights">
                <div class="sales">
                    <span class="material-symbols-sharp">analytics</span>
                    <div class="middle">
                        <div class="left">
                            <h3>Total Sales</h3>
                            <h1>$73.39</h1>
                        </div>
                        <div class="progress">
                            <svg>
                                <circle cx="38" cy="38" r="36"></circle>
                            </svg>
                            <div class="number">
                                <p>81%</p>
                            </div>
                        </div>
                    </div>
                    <small class="text-muted">Last 24 Hours</small>
                </div>
                <!-- --------------- END SALES --------------- -->
                <div class="expenses">
                    <span class="material-symbols-sharp">bar_chart</span>
                    <div class="middle">
                        <div class="left">
                            <h3>Total Expences</h3>
                            <h1>$45.89</h1>
                        </div>
                        <div class="progress">
                            <svg>
                                <circle cx="38" cy="38" r="36"></circle>
                            </svg>
                            <div class="number">
                                <p>63%</p>
                            </div>
                        </div>
                    </div>
                    <small class="text-muted">Last 24 Hours</small>
                </div>
                <!-- --------------- END EXPENSES --------------- -->
                <div class="income">
                    <span class="material-symbols-sharp">stacked_line_chart</span>
                    <div class="middle">
                        <div class="left">
                            <h3>Total Income</h3>
                            <h1>$12.16</h1>
                        </div>
                        <div class="progress">
                            <svg>
                                <circle cx="38" cy="38" r="36"></circle>
                            </svg>
                            <div class="number">
                                <p>44%</p>
                            </div>
                        </div>
                    </div>
                    <small class="text-muted">Last 24 Hours</small>
                </div>
                <!-- --------------- END INCOME --------------- -->
            </div>
            <!-- ------------------------- END INSIGHTS ----------------------- -->

            <div class="recent-orders">
                <h2>Recent Orders</h2>
                <table>
                    <thead>
                        <tr>
                            <th>Product Name</th>
                            <th>Product Number</th>
                            <th>Payment</th>
                            <th>Status</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Foldable Mini Drone</td>
                            <td>83623</td>
                            <td>Due</td>
                            <td class="warning">Pending</td>
                            <td class="primary">Details</td>
                        </tr>
                        <tr>
                            <td>Foldable Mini Drone</td>
                            <td>83623</td>
                            <td>Due</td>
                            <td class="warning">Pending</td>
                            <td class="primary">Details</td>
                        </tr>
                        <tr>
                            <td>Foldable Mini Drone</td>
                            <td>83623</td>
                            <td>Due</td>
                            <td class="warning">Pending</td>
                            <td class="primary">Details</td>
                        </tr>
                        <tr>
                            <td>Foldable Mini Drone</td>
                            <td>83623</td>
                            <td>Due</td>
                            <td class="warning">Pending</td>
                            <td class="primary">Details</td>
                        </tr>
                        <tr>
                            <td>Foldable Mini Drone</td>
                            <td>83623</td>
                            <td>Due</td>
                            <td class="warning">Pending</td>
                            <td class="primary">Details</td>
                        </tr>
                        <tr>
                            <td>Foldable Mini Drone</td>
                            <td>83623</td>
                            <td>Due</td>
                            <td class="warning">Pending</td>
                            <td class="primary">Details</td>
                        </tr>
                        <tr>
                            <td>Foldable Mini Drone</td>
                            <td>83623</td>
                            <td>Due</td>
                            <td class="warning">Pending</td>
                            <td class="primary">Details</td>
                        </tr>
                    </tbody>
                </table>
                <a href="#">Show All</a>
            </div>
        </main>
        <!-- ============================== END MAIN ============================== -->
        <div class="right">
            <div class="top">
                <button id="menu-btn">
                    <span class="material-icons-sharp">menu</span>
                </button>
                <div class="theme-toggler">
                    <span class="material-icons-sharp active">light_mode</span>
                    <span class="material-icons-sharp">dark_mode</span>
                </div>
                <div class="profile">
                    <div class="info">
                        <p>Hey, <b>Dan</b></p>
                        <small class="text-muted">Admin</small>
                    </div>
                    <div class="profile-photo">
                        <img src="img/ben-den-engelsen-YUu9UAcOKZ4-unsplash.jpg" alt="">
                    </div>
                </div>
            </div>

            <div class="recent-update">
                <h2>Recent Updates</h2>
                <div class="updates">
                    <div class="update">
                        <div class="profile-photo">
                            <img src="img/ben-den-engelsen-YUu9UAcOKZ4-unsplash.jpg" alt="">
                        </div>
                        <div class="message">
                            <p><b>Mike Mamba</b> Recieved his order of Night Play Button.</p>
                            <small class="text-muted">2 Minutes Ago</small>
                        </div>
                    </div>
                    <div class="update">
                        <div class="profile-photo">
                            <img src="img/ben-den-engelsen-YUu9UAcOKZ4-unsplash.jpg" alt="">
                        </div>
                        <div class="message">
                            <p><b>Mike Mamba</b> Recieved his order of Night Play Button.</p>
                            <small class="text-muted">2 Minutes Ago</small>
                        </div>
                    </div>
                    <div class="update">
                        <div class="profile-photo">
                            <img src="img/ben-den-engelsen-YUu9UAcOKZ4-unsplash.jpg" alt="">
                        </div>
                        <div class="message">
                            <p><b>Mike Mamba</b> Recieved his order of Night Play Button.</p>
                            <small class="text-muted">2 Minutes Ago</small>
                        </div>
                    </div>
                </div>
                <!-- ======================= END RECENT UPDATES ================== -->
                <div class="sales-analytics">
                    <h2>Sales Analytics</h2>
                    <div class="item online">
                        <div class="icon">
                            <span class="material-icons-sharp">shopping_cart</span>
                        </div>
                        <div class="right">
                            <div class="info">
                                <h3>ONLINE ORDERS</h3>
                                <small class="text-moted">Last 24 Hours</small>
                            </div>
                            <h5 class="danger">-17%</h5>
                            <h3>1100</h3>
                        </div>
                    </div>
                    <div class="item offline">
                        <div class="icon">
                            <span class="material-icons-sharp">local_mall</span>
                        </div>
                        <div class="right">
                            <div class="info">
                                <h3>OFFLINE ORDERS</h3>
                                <small class="text-moted">Last 24 Hours</small>
                            </div>
                            <h5 class="success">+39%</h5>
                            <h3>3869</h3>
                        </div>
                    </div>
                    <div class="item customers">
                        <div class="icon">
                            <span class="material-icons-sharp">person</span>
                        </div>
                        <div class="right">
                            <div class="info">
                                <h3>NEW CUSTOMERS</h3>
                                <small class="text-moted">Last 24 Hours</small>
                            </div>
                            <h5 class="success">+35%</h5>
                            <h3>849</h3>
                        </div>
                    </div>
                    <div class="item add-product">
                        <div>
                            <span class="material-icons-sharp">add</span>
                            <h3>Add Product</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="js/dash.js"></script>
    <script>
        const sideMenu = document.querySelector('aside');
        const menuBtn = document.querySelector('#menu-btn');
        const closeBtn = document.querySelector('#close-btn');

        menuBtn.addEventListener('click', () => {
            sideMenu.style.display = 'block';
        })
        closeBtn.addEventListener('click', () => {
            sideMenu.style.display = 'none';
        })
    </script>
</body>
</html>