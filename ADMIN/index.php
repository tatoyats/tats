<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN</title>

    <link rel = "stylesheet" href = "css/style.css">
</head>
<body>

    <div class="container">
        <div class="navigation">
            <ul>

            <li>
                <a href = "#">
                    <span class = "icon"><ion-icon name="logo-apple"></ion-icon></span>
                    <span class = "title">Brand Name</span>
                </a>
            </li>

            <li>
                <a href = "#">
                    <span class = "icon"><ion-icon name="home-outline"></ion-icon></span>
                    <span class = "title">Dashboard</span>
                </a>
            </li>

            <li>
                <a href = "#">
                    <span class = "icon"><ion-icon name="people-outline"></ion-icon></span>
                    <span class = "title">Customers</span>
                </a>
            </li>

            <li>
                <a href = "#">
                    <span class = "icon"><ion-icon name="chatbubble-outline"></ion-icon></span>
                    <span class = "title">Messages</span>
                </a>
            </li>

            <li>
                <a href = "#">
                    <span class = "icon"><ion-icon name="help-outline"></ion-icon></span>
                    <span class = "title">Help</span>
                </a>
            </li>

            <li>
                <a href = "#">
                    <span class = "icon"><ion-icon name="settings-outline"></ion-icon></span>
                    <span class = "title">Settings</span>
                </a>
            </li>

            <li>
                <a href = "#">
                    <span class = "icon"><ion-icon name="lock-open-outline"></ion-icon></span>
                    <span class = "title">Password</span>
                </a>
            </li>

            <li>
                <a href = "#">
                    <span class = "icon"><ion-icon name="log-out-outline"></ion-icon></ion-icon></span>
                    <span class = "title">Sign Out</span>
                </a>
            </li>

            </ul>
        </div>

        <!--  MAIN -->

        <div class="main">
            <div class="topbar">
                <div class="toggle">
                    <ion-icon name = "menu-outline"></ion-icon>
                </div>

                <div class="search">
                    <label>
                    <input type="text" placeholder="Search here">
                    <ion-icon name = "search-outline"></ion-icon>
                    </label>
                </div>

                <div class="user">
                    <img src="imgs/profile.png">
                </div>
            </div>
             <!--  Cards -->

            <div class="cardBox">

                <div class="card">
                    <div>
                        <div class = "numbers">1,504</div>
                        <div class = "cardName">Daily Views</div>
                    </div>
                    <div class="iconBx">
                        <ion-icon name="eye-outline"></ion-icon>
                    </div>
                </div>

                <div class="card">
                    <div>
                        <div class = "numbers">80</div>
                        <div class = "cardName">Sales</div>
                    </div>
                    <div class="iconBx">
                        <ion-icon name="cart-outline"></ion-icon>
                    </div>
                </div>

                <div class="card">
                    <div>
                        <div class = "numbers">284</div>
                        <div class = "cardName">Comments</div>
                    </div>
                    <div class="iconBx">
                        <ion-icon name="chatbubbles-outline"></ion-icon>
                    </div>
                </div>

                <div class="card">
                    <div>
                        <div class = "numbers">$7,842</div>
                        <div class = "cardName">Earning</div>
                    </div>
                    <div class="iconBx">
                        <ion-icon name="cash-outline"></ion-icon>
                    </div>
                </div>

            </div>

             <!-- Order List -->

            <div class="details">
                <div class="recentOrders">
                    <div class="cardHeader">
                        <h2>Recent Orders</h2>
                        <a href = "#" class = "btn">View All</a>
                    </div>

                    <table>
                        <thead>
                            <tr>
                                <td>Name</td>
                                <td>Price</td>
                                <td>Payment</td>
                                <td>Status</td>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td>Star Refrigerator</td>
                                <td>$1200</td>
                                <td>Paid</td>
                                <td><span class = "status delivered">Delivered</span></td>
                            </tr>

                            <tr>
                                <td>Apple Watch</td>
                                <td>$100</td>
                                <td>Paid</td>
                                <td><span class = "status delivered">Delivered</span></td>
                            </tr>
                        </tbody>
                    </table>

                </div>
                <!-- New Customers -->
                <div class="recentCustomers">
                    <div class="cardHeader">
                        <h2>Recent Customers</h2>
                    </div>

                    <table>
                        <tr>
                            <td widtj="60px">
                                <div class="imgBx"><img src="imgs/user.png"></div>
                            </td>
                            <td>
                                <h4>Tatoy</h4>
                                <span>Llenos</span>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
    
   <script src="main.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script> 
</body>
</html>