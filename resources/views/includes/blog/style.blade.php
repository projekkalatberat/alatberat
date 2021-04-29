 <link rel="icon" type="image/png" href="img/favicon.png" />
    <link rel="stylesheet" href="vendor/assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="vendor/assets/css/bootstrap-icons.css" />

    <!-- Bootstrap Core CSS -->
    <link href="/vendor/assets/css/bootstrap.min.css" rel="stylesheet" />
    <!-- Animate CSS -->
    <link href="/vendor/assets/css/css/animate.css" rel="stylesheet" />
    <!-- Venobox CSS -->
    <link href="/vendor/assets/css/css/venobox.css" rel="stylesheet" />

    
    <!-- Font-awesome -->
    <link
      rel="stylesheet"
      href="/vendor/assets/fonts/font-awesome/css/font-awesome.min.css"
    />
    <!-- Flaticon -->
    <link
      rel="stylesheet"
      href="/vendor/assets/fonts/flaticon/css/flaticon.css"
    />
    <!-- Google font-->
    <link
      href="https://fonts.googleapis.com/css?family=Poppins:300,400,400i,500,600,700,800,900"
      rel="stylesheet"
    />
    <!-- Main CSS -->
    <link href="/vendor/assets/css/css/style.css" rel="stylesheet" />
    <style>
      .navbar {
        padding: 20px 0;
        text-transform: uppercase;
        margin-bottom: 15px;
      }
      .navbar .navbar-brand {
        padding: 4px 0;
      }
      .navbar .navbar-nav .nav-item {
        position: relative;
      }
      .navbar .navbar-nav .nav-link {
        padding: 13px 0px;
        font-size: 16px;
        color: #777777;
        line-height: 24px;
        font-weight: 400;
        text-transform: capitalize;
        position: relative;
      }
      .navbar .navbar-nav .nav-item .nav-link::before {
        width: 0px;
        height: 2px;
        position: absolute;
        left: 50%;
        bottom: 0;
        content: "";
        background: #f89f3c;
        -webkit-transition: all 0.3s ease-in-out;
        -ms-transition: all 0.3s ease-in-out;
        -moz-transition: all 0.3s ease-in-out;
        transition: all 0.3s ease-in-out;
        -webkit-transform: translateX(-50%);
        -ms-transform: translateX(-50%);
        -moz-transform: translateX(-50%);
        transform: translateX(-50%);
      }
      .navbar .navbar-nav .nav-item {
        margin-left: 35px;
      }
      .navbar .navbar-nav .nav-item:first-child {
        margin: 0;
      }
      .navbar .navbar-nav .nav-item.active .nav-link,
      .navbar .navbar-nav .nav-link:hover {
        color: #f89f3c;
      }
      .navbar .navbar-nav .nav-item.active .nav-link::before {
        width: 30%;
      }
      .navbar .navbar-nav .nav-item.active .nav-link:hover::before,
      .navbar .navbar-nav .nav-link:hover::before {
        width: 100%;
      }
      .navbar-toggler {
        padding: 0;
        outline: none;
        border: none;
      }
      .navbar-toggler-icon {
        display: inline-block;
        width: 40px;
        height: 3px;
        background: #000;
        position: relative;
        transition: all 0.3s ease-out;
        -webkit-transition: all 0.3s ease-out;
      }
      .navbar-toggler-icon:before {
        content: "";
        position: absolute;
        left: 0px;
        top: -11px;
        width: 100%;
        height: 3px;
        background: #000;
        border-radius: 4px;
        transition: all 0.35s ease-out;
        -webkit-transition: all 0.35s ease-out;
        backface-visibility: hidden;
      }
      .navbar-toggler-icon:after {
        content: "";
        position: absolute;
        left: 0px;
        bottom: -11px;
        width: 100%;
        height: 3px;
        background: #000;
        border-radius: 4px;
        transition: all 0.35s ease-out;
        -webkit-transition: all 0.35s ease-out;
        backface-visibility: hidden;
      }
      .navbar-toggler:not(.collapsed) .navbar-toggler-icon {
        background: rgba(0, 0, 0, 0);
      }
      .navbar-toggler:not(.collapsed) .navbar-toggler-icon:before {
        transform: rotate(45deg);
        -webkit-transform: rotate(45deg);
        -ms-transform: rotate(45deg);
        top: 0px;
      }
      .navbar-toggler:not(.collapsed) .navbar-toggler-icon:after {
        transform: rotate(-45deg);
        -webkit-transform: rotate(-45deg);
        -ms-transform: rotate(-45deg);
        bottom: 0px;
      }

      @media (min-width: 767.98px) {
        .navbar-nav .nav-item .form-inline input {
          width: 315px;
          height: 58px;
          margin-left: 30px;
        }

        .navbar-nav .nav-item .form-control {
          width: 400px;
          height: 58px;
          margin-left: 40px;
          margin-right: -15px !important;
          z-index: 333px;
        }

        .navbar-nav .nav-item .okes input {
          width: 315px !important;
          height: 58px !important;
          margin-left: 30px;
        }
      }

      .navbar-nav .nav-item .oke {
        z-index: 300;
        position: absolute;
        margin: 45px;
        padding-left: -30px !important;
      }

      .navbar-nav {
        text-transform: uppercase;
        margin-right: 20px;
        font-size: 19px;
        text-decoration: none;
      }

      .navbar-nav .nav-item a {
        color: #002f34;
        text-transform: uppercase;
      }

      .navbar .nav-item button {
        width: 75px;
        height: 43px;
        top: 2px !important;
        border-radius: 30px;
        background-color: #f89f3c;
      }

      .navbar-nav .nav-item .segitiga {
        position: absolute;
        margin: 300px;
        padding-left: -30px !important;
      }
    </style>