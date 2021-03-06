<!DOCTYPE HTML>
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mine</title>

    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/common.css" />
    <link rel="stylesheet" href="css/main.css" />
</head>

<body>
    <main class="_main">
        <div class="">
            <!-- Side bar -->

            <!-- Side bar -->

            <!-- Side bar -->
            <div class="_1sidebar">
                <div class="_1sidebar_main _bg_default">
                    <div class="logo">
                        <a href="index.html">
                            <h3 class="logo_img">School mangement</h3>
                        </a>
                    </div>

                    <ul class="_navbar">
                        <li>
                            <div class="nav_item">
                                <div class="nav_item_icon">
                                    <i class="fas fa-chart-pie"></i>
                                </div>

                                <span class="nav_item_text">Clases</span>

                                <span class="nav_item_errow"><i class="fas fa-chevron-down"></i></span>
                            </div>

                            <ul class="nav">
                                <li class="nav_active"><a href="firstYear">Inter 1st year</a></li>
                                <li><a href="secondYear">Inter 2nd year </a></li>
                            </ul>
                        </li>





                        <li>
                            <div class="nav_item">
                                <div class="nav_item_icon">
                                    <i class="fas fa-copy"></i>
                                </div>
                                <a href="/group">
                                    <span class="nav_item_text">Group list</span>
                                </a>

                            </div>
                        </li>
                        <li>
                            <div class="nav_item">
                                <div class="nav_item_icon">
                                    <i class="fas fa-copy"></i>
                                </div>

                                <span class="nav_item_text">Logout</span>

                            </div>

                        </li>
                    </ul>
                </div>
            </div>
            <!-- Side bar -->

            <!-- Content with menu -->
            <div class="_content">
                <!-- Menu -->
                <div class="_1menu _d_flex justify-content-between _bg_default">
                    <div class="_1menu_search">
                        <p class="_1menu_search_icon"><i class="fas fa-search"></i></p>
                        <input type="text" placeholder="Serach">
                    </div>

                    <div class="_1menu_list">

                        <li>
                            <div class="profile">
                                <img src="img/mobile2.png" alt="" title="">
                            </div>

                            <div class="profile_drop">
                                <div class="profile_drop_mian">
                                    <p class="profile_drop_title"><i class="fas fa-crown"></i> Go Pro</p>


                                    <ul class="profile_drop_list">
                                        <li><a href="">Logout</a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </div>
                </div>
                <!-- Menu -->

                <!-- Content -->

                <!-- <div class="_1card _padd20 _mar_b15 _b_radious7 _5box_shadow _0border"><a href="">A payout for $921.42</a> was deposited 13 days ago. Your next deposit is expected on Tuesday, March 13.</div> -->

                <div class="row">

                    <div class="col-12 col-md-12 col-lg-12">
                        <div class="_1card _mar_b15 _b_radious7 _5box_shadow _0border">
                            <div class="_1card_header _padd20">
                                <p class="_1card_header_title">1st year student list</p>

                                <div class="_dashboard_actions">
                                    <button class="_btn_sm"><i class="fas fa-plus"></i> New</button>
                                    <button class="_btn_sm _mar_l5 _mar_r5"><i class="fas fa-filter"></i> Filter</button>
                                    <button class="_btn_sm"><i class="fas fa-file-export"></i> Export</button>
                                </div>
                            </div>

                            <div class="">
                                <div class="_table_responsive">
                                    <table class="_table">
                                        <thead class="bg-200 text-900">
                                            <tr>
                                                <th>Name</th>
                                                <th>total section</th>
                                                <th>total student</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <tr>
                                                <td>
                                                    <a href="">Science</a>
                                                </td>
                                                <td>3</td>
                                                <td>50</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <a href="">commerce</a>
                                                </td>
                                                <td>3</td>
                                                <td>50</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <a href="">Humanities</a>
                                                </td>
                                                <td>3</td>
                                                <td>50</td>
                                            </tr>




                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Content -->
            </div>
            <!-- Content with menu -->
        </div>
    </main>


    <script src="https://code.jquery.com/jquery-3.4.0.min.js" integrity="sha256-BJeo0qm959uMBGb65z40ejJYGSgR7REI4+CW1fNKwOg=" crossorigin="anonymous">
    </script>
    <script src="https://cdn.plot.ly/plotly-latest.min.js"></script>
    <script type="text/javascript" src="js/script.js"></script>
</body>

</html>