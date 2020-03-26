<!DOCTYPE html>
<html>
  <head>
    <title>News Api</title>
    <link
      href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="vendors/css/materialize.final.css" />
    <style type="text/css">
      #loader {
        height: 100vh;
        align-items: center;
        display: flex;
        justify-content: center;
      }
      * {
        margin: 0px;
        padding: 0px;
        box-sizing: border-box;
      }
      svg {
            fill: aliceblue;
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        header {
            display: flex;
            justify-content: flex-end;
            align-items: center;
            padding: 30px 10%;
            background-color: #24252a;
        }

        .logo {
            margin-right: auto;
        }

        .nav__links {
            list-style: none;
            display: flex;
        }

        .nav__links a,
        .cta,
        .overlay__content a {
            font-family: "Montserrat", sans-serif;
            font-weight: 500;
            color: #edf0f1;
            text-decoration: none;
        }

        .nav__links li {
            padding: 0px 20px;
        }

        .nav__links li a {
            transition: all 0.3s ease 0s;
        }

        .nav__links li a:hover {
            color: #0088a9;
        }

        .cta {
            padding: 9px 25px;
            background-color: rgba(0, 136, 169, 1);
            border: none;
            border-radius: 50px;
            cursor: pointer;
            transition: all 0.3s ease 0s;
        }

        .cta:hover {
            background-color: rgba(0, 136, 169, 0.8);
        }

        /* Mobile Nav */

        .menu {
            display: none;
        }

        .overlay {
            height: 100%;
            width: 0;
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            background-color: #24252a;
            overflow-x: hidden;
            transition: all 0.5s ease 0s;
        }

        .overlay__content {
            display: flex;
            height: 100%;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        .overlay a {
            padding: 15px;
            font-size: 36px;
            display: block;
            transition: all 0.3s ease 0s;
        }

        .overlay a:hover,
        .overlay a:focus {
            color: #0088a9;
        }

        .overlay .close {
            position: absolute;
            top: 20px;
            right: 45px;
            font-size: 60px;
            color: #edf0f1;
            cursor: pointer;
        }

        @media screen and (max-height: 450px) {
            .overlay a {
                font-size: 20px;
            }

            .overlay .close {
                font-size: 40px;
                top: 15px;
                right: 35px;
            }
        }

        @media only screen and (max-width: 800px) {

            .nav__links,
            .cta {
                display: none;
            }

            .menu {
                display: initial;
            }
        }
    </style>
</head>

<body class="">
    <header>
        <a class="logo" href="/">
            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 24 24">
                <path d="M24 3.055l-6 1.221 1.716 1.708-5.351 5.358-3.001-3.002-7.336 7.242 1.41 1.418 5.922-5.834 2.991 2.993 6.781-6.762 1.667 1.66 1.201-6.002zm-16.69 6.477l-3.282-3.239 1.41-1.418 3.298 3.249-1.426 1.408zm15.49 3.287l1.2 6.001-6-1.221 1.716-1.708-2.13-2.133 1.411-1.408 2.136 2.129 1.667-1.66zm1.2 8.181v2h-24v-22h2v20h22z" />
            </svg>
        </a>
        <nav>
            <ul class="nav__links">
                <li><a href="index.php">Home</a></li>
                <li><a href="news.html">News</a></li>
                <li><a class="cta" href="nifty-companies.php">NSE Details</a></li>
                <li><a href="dashboard.php">Dashboard</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </nav>
        <p onclick="openNav()" class="menu cta">Menu</p>
    </header>
    <div id="mobile__menu" class="overlay">
        <a class="close" onclick="closeNav()">&times;</a>
        <div class="overlay__content">
            <a href="index.php">Home</a>
            <a href="news.html">News</a>
            <a href="nifty-companies.php">NSE Details</a>
            <a href="dashboard.php">Dasboard</a>
            <a href="logout.php">Logout</a>
        </div>
    </div>
    <br>
    <div class="container">
      <!-- <h3 class="center" style="margin-bottom:20px;"><i class="material-icons medium hide-on-small-only" id="icons"></i></h3> -->

      <form>
        <div class="input-field">
          <i class="material-icons prefix">public</i>
          <input type="text" id="searchquery" />
          <label>Find what's happening in the India......</label>
        </div>

        <div class="row">
          <input
            type="submit"
            id="searchbtn"
            class="btn col m2 s12"
            value="search"
          />
          <input
            type="reset"
            id="searchbtn"
            class="btn col m2 s12 red right"
            value="clear"
            style="margin-top:6px;"
          />
        </div>
      </form>

      <div id="loader" style="display:none;">
        <div class="progress">
          <div class="indeterminate"></div>
        </div>
      </div>

      <div class="row">
        <div id="newsResults"></div>
      </div>
    </div>

    <div class="container">
      <div class="row">
        <div id="newsResults"></div>
      </div>

      <div id="loader">
        <div class="progress">
          <div class="indeterminate"></div>
        </div>
      </div>
    </div>

    <script src="vendors/js/jquery-3.3.1.min.js"></script>
    <script src="vendors/js/materialize.min.js"></script>
    <script src="resources/js/newsapp.js"></script>
    <script src="resources/css/nse.js"></script>
  </body>
</html>
