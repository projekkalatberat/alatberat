   <link rel="stylesheet" href="vendor/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendor/assets/css/bootstrap-icons.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="vendor/assets/css/head.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
     <link rel="stylesheet" href="vendor/assets/css/style.css" />
     <link rel="stylesheet" href="vendor/assets/css/fontawesome-free-5.15.2-web/css/">
     <link rel="stylesheet" href="vendor/assets/css/fontawesome-free-5.15.2-web/css/all.css">

    <!-- AOS CSS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    


     <style>
        body {
        }

        h3 {
            margin: 0;
            font-size: 25px;
            font-weight: 700 !important;
        }
        a:hover,a:focus{
            text-decoration: none im !important;
            outline: none;
        }
        ul {
            margin: 0;
            padding: 0;
            list-style: none;
        }
        .amount{
            font-size: 50px;
        }
        .pricing-table {
            text-align: center;
            background-color: #FF006E;
            color: #feeac9;
            margin: 0 20px;
            margin-bottom: 10px;
            padding: 30px 0 40px;
            position: relative;
        }
        .pricing-table.blue {
           background-color: #FF006E;
        }
        .pricing-table:after{
            background-color: #fff;
            bottom: -60px;
            content: "";
            height: 60px;
            position: absolute;
            width: 60%;
            left: 50%;
            transform: rotate(-12deg);
            transform-origin: left top 0;
        }
        .pricing-table:before{
            background-color: #fff;
            bottom: -60px;
            content: "";
            height: 60px;
            position: absolute;
            width: 60%;
            right: 50%;
            transform: rotate(12deg);
            transform-origin: right top 0;
        }
        .pricing-table .pricing-header{
            background-color: #e3d1b9;
            color:#635a5b;
            padding: 20px 0;
            margin: 0 -20px 10px;
            position: relative;
            text-transform: uppercase;
            letter-spacing: 2px;
            box-shadow: inset 0 0 10px #635a5b;
        }
        .pricing-table .pricing-header:after{
            content: "";
            position: absolute;
            bottom: -40px;
            right: 0;
            border-top: 20px solid #958b72;
            border-right: 20px solid transparent;
            border-bottom: 20px solid transparent;
        }

        .pricing-table .pricing-header:before{
            content: "";
            position: absolute;
            bottom: -40px;
            left: 0;
            border-top: 20px solid #958b72;
            border-left: 20px solid transparent;
            border-bottom: 20px solid transparent;
        }
       
        .pricing-table .price-value{
            margin-bottom: 10px;
            font-size: 50px;
        }
        .pricing-table .price-value .time{
            font-size: 17px;
        }
        
        .pricing-table .pricingContent ul{
            font-size: 17px;
            line-height: 50px;
            letter-spacing: 1px;
            padding: 0 20px;
            margin-bottom: 20px;
        }
        .pricing-table .pricingContent ul li{
            border-bottom: 2px dotted #EEE1D3;
        }
        .pricing-table .pricingContent ul li:last-child{
            border-bottom: none;
        }
        .pricing-table .pricingTable-Sign-Up a{
            display: inline-block;
            padding: 10px 25px;
            font-size: 17px;
            font-weight: 700;
            letter-spacing: 1px;
            color:#635a5b;
            background-color:#E3D1B9;
            transition:all 0.3s ease 0s;
            box-shadow: inset 0 0 10px #635a5b;
        }

        @media screen and (max-width:990px){
            .pricing-table{
                margin-bottom: 30px;
            }
        }
    </style>
