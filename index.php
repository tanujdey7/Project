<?php
include 'database.php';
if (isset($_SESSION["username"])) {
    $s1 = "SELECT * FROM login WHERE (Username = '" . $_SESSION["username"] . "' OR Email='" . $_SESSION["username"] . "')" . " AND Password='" . $_SESSION["password"] . "';";
    $result = $con->query($s1);
    $num_rows = mysqli_num_rows($result);
    $s2 = "SELECT * FROM user WHERE Username = '" . $_SESSION["username"] . "' OR Email = '" . $_SESSION["username"] . "';";
    $result = $con->query($s2);
    $row = mysqli_fetch_row($result);
    if ($num_rows != 1) {
        $ss1 = "<li><a href='login.php'>Sign In</a></li>";
        $okay = '<a class="btn btn-full" href="login.html">Sign Up for <b>free</b> Trial</a>';
    } else {
        $ss1 = '<li><a href="dashboard.php">Dashboard</a></li>' . '<li><a href="logout.php">Sign Out</a></li>';
        $okay = '<a class="btn btn-full" href="login.html">Welcome <b>'. $row[5].'</a>';
    }
} else {
    $ss1 = "<li><a href='login.php'>Sign In</a></li>";
    $okay = '<a class="btn btn-full" href="login.html">Sign Up for <b>free</b> Trial</a>';
}
?>
<!DOCTYPE html>
<html>

<head>
    <title> Index </title>
    <link rel="stylesheet" type="text/css" href="vendors/css/normalize.css">
    <link rel="stylesheet" type="text/css" href="resources/css/style.css">
    <link rel="stylesheet" type="text/css" href="vendors/css/grid.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,200,300,400&display=swap" rel="stylesheet">
    <script src="https://cdn.plot.ly/plotly-latest.min.js"></script>
</head>

<body>
    <header>
        <nav>
            <i class="logo">
                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 24 24">
                    <path d="M24 3.055l-6 1.221 1.716 1.708-5.351 5.358-3.001-3.002-7.336 7.242 1.41 1.418 5.922-5.834 2.991 2.993 6.781-6.762 1.667 1.66 1.201-6.002zm-16.69 6.477l-3.282-3.239 1.41-1.418 3.298 3.249-1.426 1.408zm15.49 3.287l1.2 6.001-6-1.221 1.716-1.708-2.13-2.133 1.411-1.408 2.136 2.129 1.667-1.66zm1.2 8.181v2h-24v-22h2v20h22z" /></svg>
            </i>
            <div class="row1">
                <ul class="main-nav js--main-nav">
                    <li><a href="#features">Features</a></li>
                    <li><a href="news.php">News</a></li>
                    <!-- <li><a href="nifty-companies.html">NIFTY</a></li> -->
                    <li><a href="#">Contact</a></li>
                    <?php echo $ss1; ?>
                </ul>
            </div>
            </div>
        </nav>
        <div class="hero-text-box">
            <h1><b>
                    <font color=#1abc9c> STOCK</font><br>
                    <font color=#26138e>FORECASTING</font>
                </b></h1><br>
            <font color=#26138e>with MACHINE LEARNING<br><br>Use Artificial Neural Networks to Predict Stock Prices &amp; their Trends</font><br><br>
            <?php echo $okay ?>
            <a class="btn btn-ghost" href="#features">Learn More</a>
        </div>
    </header>
    <section class="section-features js--section-features" id="features">
        <div class="row">
            <h2>FEATURES</h2>
        </div>

        <div class="row">
            <div class="col span-1-of-4 box">
                <i class="icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" viewBox="0 0 24 24">
                        <path d="M14.172 7.396l1.413-1.39 1.414 1.414-1.414 1.39-1.413-1.414zm2.828 16.604h6v-13h-6v13zm-.559-18.834l1.414 1.414 1.435-1.41-1.415-1.415-1.434 1.411zm.591-3.951l4.771 4.771 1.197-5.986-5.968 1.215zm-8.032 22.785h6v-9h-6v9zm-8 0h6v-6h-6v6zm13.729-14.349l-1.414-1.414-1.45 1.425-3-3.002-7.841 7.797 1.41 1.418 6.427-6.39 2.991 2.993 2.877-2.827z" /></svg></i>
                <h3>Trading Performance</h3>
                <p> More than 70% of our top recommendations led to the successful trades. We track annual return, downside risk and other metrics of our models</p>
            </div>
            <div class="col span-1-of-4 box">
                <i class="icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" viewBox="0 0 24 24">
                        <path d="M7 10h-3v-1h3v1zm6 2h3v-1h-3v1zm3-5h-12v1h12v-1zm0 6h-12v1h12v-1zm0 2h-12v1h12v-1zm0-6h-3v1h3v-1zm-4 3v-3h-4v3h4zm-1.055-7.312l.238 1.284h.5l.501-1.941h-.482l-.249 1.32-.238-1.32h-.492l-.27 1.345-.24-1.345h-.505l.46 1.941h.506l.271-1.284zm-6.945 7.312h3v-1h-3v1zm18.44 4.277c.183-2.314-.433-2.54-3.288-5.322.171 1.223.528 3.397.911 5.001.089.382-.416.621-.586.215-.204-.495-.535-2.602-.82-4.72-.154-1.134-1.661-.995-1.657.177.005 1.822.003 3.341 0 6.041-.003 2.303 1.046 2.348 1.819 4.931.132.444.246.927.339 1.399l3.842-1.339c-1.339-2.621-.693-4.689-.56-6.383zm-6.428 1.723h-13.012v-16h14v7.894c.646-.342 1.348-.274 1.877.101l.123-.018v-8.477c0-.828-.672-1.5-1.5-1.5h-15c-.828 0-1.5.671-1.5 1.5v17c0 .829.672 1.5 1.5 1.5h13.974c-.245-.515-.425-1.124-.462-2zm-3.166-12.396c-.149 0-.324-.043-.466-.116l-.024-.013-.098.398.015.008c.102.058.318.119.547.119.581 0 .788-.328.788-.61 0-.272-.161-.458-.507-.586-.254-.096-.338-.145-.338-.247 0-.098.1-.161.254-.161.136 0 .266.03.388.088l.023.011.107-.39-.015-.007c-.145-.065-.311-.098-.495-.098-.442 0-.739.239-.739.593 0 .262.181.458.535.581.227.081.304.144.304.247 0 .117-.102.183-.279.183zm-5.325.368h.485v-1.941h-.438v1.189l-.64-1.189h-.536v1.941h.438v-1.327l.691 1.327zm2.028-1.545v-.396h-1.215v1.941h1.255v-.396h-.78v-.406h.698v-.393h-.698v-.35h.74z" /></svg></i>
                <h3>Corporate News</h3>
                <p> Take into account corporate events and market news</p>
            </div>
            <div class="col span-1-of-4 box">
                <i class="icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" viewBox="0 0 24 24">
                        <path d="M10 2h-2v-2h2v2zm-8 6h-2v2h2v-2zm0-5c0-.551.448-1 1-1h4v-2h-4c-1.657 0-3 1.343-3 3v4h2v-4zm0 8h-2v2h2v-2zm14-11h-2v2h2v-2zm-3 0h-2v2h2v-2zm-11 14h-2v2h2v-2zm18-2.042h-2.277l-2.36 5.386-2.883-7.93-2.442 5.78-2.071-4.14-1.129 1.966h-2.838v6.98h16v-8.042zm-16 .063h2.259l1.768-3.081 1.935 3.866 2.589-6.126 2.899 7.976 1.62-3.697h2.93v-6.959h-16v8.021zm10 11.979h2v-2h-2v2zm8-11h2v-2h-2v2zm-20 8v-4h-2v4c0 1.657 1.343 3 3 3h4v-2h-4c-.552 0-1-.449-1-1zm20 0c0 .551-.448 1-1 1h-4v2h4c1.657 0 3-1.343 3-3v-4h-2v4zm0-11h2v-2h-2v2zm0 6h2v-2h-2v2zm2-13c0-1.657-1.343-3-3-3h-4v2h4c.552 0 1 .449 1 1v4h2v-4zm-16 21h2v-2h-2v2zm3 0h2v-2h-2v2z" /></svg></i>
                <h3> Deep Learning</h3>
                <p>Predictions are performed regularly by the state-of-art neural networks models. We have trained models for the most of the NIFTY 50 Index constituents</p>
            </div>
            <div class="col span-1-of-4 box">
                <i class="icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" viewBox="0 0 24 24">
                        <path d="M16.971 0h-9.942l-7.029 7.029v9.941l7.029 7.03h9.941l7.03-7.029v-9.942l-7.029-7.029zm-5.971 5h2v10h-2v-10zm1 14.25c-.69 0-1.25-.56-1.25-1.25s.56-1.25 1.25-1.25 1.25.56 1.25 1.25-.56 1.25-1.25 1.25z" /></svg></i>
                <h3> Signals and alerts</h3>
                <p> Buy/Sell signals based on the predictions and current prices</p>
            </div>
        </div>
        <div class="row step">
            <h4 align="center">In the world where risk-free assets like banking deposits have close to zero or even negative returns, investors are seeking for ways to save and grow their assets.</h4>
            <h4>
                <p>The Algorithm analyzes and predicts stock prices using Deep Learning and provides useful trade recommendations (Buy/Sell signals) for the individual traders and asset management companies</p><br>
                <p>Predictive models based on Recurrent Neural Networks (RNN) are at the heart of our service. We constantly improve them, try new models and new scientific approaches. We believe our model are more accurate than competitors have and our service is much easier to use by either novice or experienced traders. We are communicating with some of the professional quant traders, and working together to make our system better.</p><br>
                <b>Following steps are present in models training:</b>
                <ul>
                    <li>Loading of the historical market data from the Quandl premium datasets</li>
                    <li>Data normalization</li>
                    <li>
                        Optimization of the Recurrent Neural Network hyperparameters
                    </li>
                    <li>
                        Training and validation of the Recurrent Neural Network
                    </li>
                    <li>
                        Model backtesting.
                </ul>
                <br>
                <p>
                    Daily pipeline for models includes steps required to load and preprocess new market data, calculate model's accuracy and performance metrics and generate trading recommendations according to forecast made and strategy parameters
                </p>
            </h4>
        </div>
    </section>
    <section class="section-powered">
        <br>
        <br>
        <div class="row">
            <h2>POWERED BY</h2>
        </div>
        <div class="row">
            <div class="col span-1-of-2 box">
                <img src="resources/css/img/quandl.png">
            </div>
            <div class="col span-1-of-2 box">
                <img src="resources/css/img/tensorflow.png">
            </div>
        </div>
        <br>
        <br>
        <br>
    </section>
    <section class="section-join">
        <div class="row">
            <h2>GET IT NOW!</h2>
        </div>
        <br><br>
        <div class="row">
            <p align="center"> Get your <b>free</b> trial access to the first class stocks prediction platform and improve your trading.<br><br><br><a class="btn btn-full" href="login.html">Get it Now</a></p><br><br><br>
        </div>
        <div class="svg-row" style="width:100%;transform:translateY(5px)">
    <svg height="100%" viewBox="0 0 1600 180" class="svg-footer">
        <polygon points="886,86 800,172 714,86 -4,86 -4,204 1604,204 1604,86" style="fill:#fff;" />
      </svg>
</div>
    </section>
    <!-- <section class="section-plans" style="height:250px;">
        <div class="row">
            <h2>START GROWING TODAY</h2>
        </div>
        <div class="svg-row" style="width:100%;transform:translateY(-97px)">
    <svg height="100%" viewBox="0 0 1600 180" class="svg-footer">
        <polygon points="886,86 800,172 714,86 -4,86 -4,204 1604,204 1604,86" style="fill:#fff;" />
      </svg> -->

        <!-- <div class="row">
            <div class="col span-1-of-3">
                <div class="plan-box">
                    <div>
                        <h3>PREMIUM</h3>
                        <p class="plan-price">&#8377;1199 <span>/ month</span> </p>
                        <p class="plan-price-stock">That's only 99.9&#8377; per month</p>
                    </div>
                    <div>
                        <ul>
                            <x class="icon1">
                            <li><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M5.48 10.089l1.583-1.464c1.854.896 3.028 1.578 5.11 3.063 3.916-4.442 6.503-6.696 11.312-9.688l.515 1.186c-3.965 3.46-6.87 7.314-11.051 14.814-2.579-3.038-4.301-4.974-7.469-7.911zm12.52 3.317v6.594h-16v-16h15.141c.846-.683 1.734-1.341 2.691-2h-19.832v20h20v-11.509c-.656.888-1.318 1.854-2 2.915z"/></svg>&nbsp;Pick Stock</li>
                            <li><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M5.48 10.089l1.583-1.464c1.854.896 3.028 1.578 5.11 3.063 3.916-4.442 6.503-6.696 11.312-9.688l.515 1.186c-3.965 3.46-6.87 7.314-11.051 14.814-2.579-3.038-4.301-4.974-7.469-7.911zm12.52 3.317v6.594h-16v-16h15.141c.846-.683 1.734-1.341 2.691-2h-19.832v20h20v-11.509c-.656.888-1.318 1.854-2 2.915z"/></svg>&nbsp;Plan Your Deal</li>
                            <li><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M5.48 10.089l1.583-1.464c1.854.896 3.028 1.578 5.11 3.063 3.916-4.442 6.503-6.696 11.312-9.688l.515 1.186c-3.965 3.46-6.87 7.314-11.051 14.814-2.579-3.038-4.301-4.974-7.469-7.911zm12.52 3.317v6.594h-16v-16h15.141c.846-.683 1.734-1.341 2.691-2h-19.832v20h20v-11.509c-.656.888-1.318 1.854-2 2.915z"/></svg>&nbsp;Access to Exclusive Features</li>
                            <li><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M5.48 10.089l1.583-1.464c1.854.896 3.028 1.578 5.11 3.063 3.916-4.442 6.503-6.696 11.312-9.688l.515 1.186c-3.965 3.46-6.87 7.314-11.051 14.814-2.579-3.038-4.301-4.974-7.469-7.911zm12.52 3.317v6.594h-16v-16h15.141c.846-.683 1.734-1.341 2.691-2h-19.832v20h20v-11.509c-.656.888-1.318 1.854-2 2.915z"/></svg>&nbsp;Corporate News Portal</li>
                        </x>
                        </ul>
                    </div>
                    <div>
                        <a class="btn btn-full" href="login.html">Sign Up Now</a>
                    </div>
                </div>
            </div>
            <div class="col span-1-of-3">
                <div class="plan-box">
                    <div>
                        <h3>PRO</h3>
                        <p class="plan-price">&#8377;899 <span>/ month </span></p>
                        <p class="plan-price-stock">That's only 74.9&#8377; per month</p>
                    </div>
                    <div>
                        <ul>
                            <x class="icon1">
                            <li><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M5.48 10.089l1.583-1.464c1.854.896 3.028 1.578 5.11 3.063 3.916-4.442 6.503-6.696 11.312-9.688l.515 1.186c-3.965 3.46-6.87 7.314-11.051 14.814-2.579-3.038-4.301-4.974-7.469-7.911zm12.52 3.317v6.594h-16v-16h15.141c.846-.683 1.734-1.341 2.691-2h-19.832v20h20v-11.509c-.656.888-1.318 1.854-2 2.915z"/></svg>&nbsp;Pick Stock</li>
                            <li><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M5.48 10.089l1.583-1.464c1.854.896 3.028 1.578 5.11 3.063 3.916-4.442 6.503-6.696 11.312-9.688l.515 1.186c-3.965 3.46-6.87 7.314-11.051 14.814-2.579-3.038-4.301-4.974-7.469-7.911zm12.52 3.317v6.594h-16v-16h15.141c.846-.683 1.734-1.341 2.691-2h-19.832v20h20v-11.509c-.656.888-1.318 1.854-2 2.915z"/></svg>&nbsp;Plan Your Deal</li>
                            <li><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M5.48 10.089l1.583-1.464c1.854.896 3.028 1.578 5.11 3.063 3.916-4.442 6.503-6.696 11.312-9.688l.515 1.186c-3.965 3.46-6.87 7.314-11.051 14.814-2.579-3.038-4.301-4.974-7.469-7.911zm12.52 3.317v6.594h-16v-16h15.141c.846-.683 1.734-1.341 2.691-2h-19.832v20h20v-11.509c-.656.888-1.318 1.854-2 2.915z"/></svg>&nbsp;Access to Exclusive Features</li>
                            <li><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M5.48 10.089l1.583-1.464c1.854.896 3.028 1.578 5.11 3.063 3.916-4.442 6.503-6.696 11.312-9.688l.515 1.186c-3.965 3.46-6.87 7.314-11.051 14.814-2.579-3.038-4.301-4.974-7.469-7.911zm12.52 3.317v6.594h-16v-16h15.141c.846-.683 1.734-1.341 2.691-2h-19.832v20h20v-11.509c-.656.888-1.318 1.854-2 2.915z"/></svg>&nbsp;Corporate News Portal</li>
                            </x>
                        </ul>
                    </div>
                    <div>
                        <a class="btn btn-ghost" href="login.html">Sign Up Now</a>
                
                    </div>
                </div>
            </div>
            <div class="col span-1-of-3">
                <div class="plan-box">
                    <div>
                        <h3>STARTER</h3>
                        <p class="plan-price">&#8377;100 <span>/ month</span> </p>
                        <p class="plan-price-stock">&nbsp;</p>
                    </div>
                    <div>
                        <ul>
                            <x class="icon1">
                                <li><svg xmlns="http://www.w3.org/2000/svg" width="" height="24" viewBox="0 0 24 24"><path d="M5.48 10.089l1.583-1.464c1.854.896 3.028 1.578 5.11 3.063 3.916-4.442 6.503-6.696 11.312-9.688l.515 1.186c-3.965 3.46-6.87 7.314-11.051 14.814-2.579-3.038-4.301-4.974-7.469-7.911zm12.52 3.317v6.594h-16v-16h15.141c.846-.683 1.734-1.341 2.691-2h-19.832v20h20v-11.509c-.656.888-1.318 1.854-2 2.915z"/></svg>&nbsp;Pick Stock</li>
                                <li><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M5.48 10.089l1.583-1.464c1.854.896 3.028 1.578 5.11 3.063 3.916-4.442 6.503-6.696 11.312-9.688l.515 1.186c-3.965 3.46-6.87 7.314-11.051 14.814-2.579-3.038-4.301-4.974-7.469-7.911zm12.52 3.317v6.594h-16v-16h15.141c.846-.683 1.734-1.341 2.691-2h-19.832v20h20v-11.509c-.656.888-1.318 1.854-2 2.915z"/></svg>&nbsp;Plan Your Deal</li>
                                <li><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M22 2v20h-20v-20h20zm2-2h-24v24h24v-24zm-6 16.538l-4.592-4.548 4.546-4.587-1.416-1.403-4.545 4.589-4.588-4.543-1.405 1.405 4.593 4.552-4.547 4.592 1.405 1.405 4.555-4.596 4.591 4.55 1.403-1.416z"/></svg>&nbsp;Access to Exclusive Features</li>
                                <li><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M5.48 10.089l1.583-1.464c1.854.896 3.028 1.578 5.11 3.063 3.916-4.442 6.503-6.696 11.312-9.688l.515 1.186c-3.965 3.46-6.87 7.314-11.051 14.814-2.579-3.038-4.301-4.974-7.469-7.911zm12.52 3.317v6.594h-16v-16h15.141c.846-.683 1.734-1.341 2.691-2h-19.832v20h20v-11.509c-.656.888-1.318 1.854-2 2.915z"/></svg>&nbsp;Corporate News Portal</li>
                            </x>
                        </ul>
                    </div>
                    <div>
                        <a class="btn btn-ghost" href="login.html">Sign Up Now</a>
                    </div>
                </div>-->
        <!-- </div>
        </div>
        <br><br>
    </section> -->
    <footer><br><br><br>
        <center>
        <div class="footer"  style="font-size:2.5vh;padding-left:15%;">
            <div class="footer-content">
                <div class="footer-section" style="color:black;">
                    <h3 style="font-weight:bold;">Predictors</h3>
                    <hr style="background: #00834B;">
                    <p>Business is about people and relationships. That is why we try to outperform ourselves every time.</p>
                </div>
                <div class="footer-section"style="color:black;">
                    <h3 style="font-weight:bold;">Contact Info</h3>
                    <hr style="background: #00834B;">
                    <p><a href="https://goo.gl/maps/Dmpwd46gJQGh7ZmB9" target="blank"><img src="resources/img/location.png">Ahmedabad, Gujarat, India</a></p>
                    <p><a href="mailto: contact@predictors.com"><img src="resources/img/mail.png">contact@predictors.com</a></p>
                </div>
            </div>
            <div class="footer-section" style="color:black;">
                <h3 style="font-weight:bold;">Useful Links</h3>
                <hr style="background: #00834B;">
                <p><a href="news.php">News</a></p>
                <p><a href="#features">Features</a></p>
            </div>
        </div><br><br><br>
        <div class="footer-bottom">
            Copyright &copy; 2019 Predictors | All rights reserved | Designed & Developed by Maruf Memon, Tanuj Dey
        </div>
        </center>
    </footer>
    <script src="resources/js/script.js"></script>
</body>

</html>