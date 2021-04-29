    <link rel="stylesheet" href="vendor/assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="vendor/assets/css/bootstrap-icons.css" />

    <!-- Custom CSS -->
    <link rel="stylesheet" href="vendor/assets/css/head.css" />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="vendor/assets/css/fontawesome-free-5.15.2-web/css/all.css">
    <link rel="stylesheet" href="vendor/assets/css/style.css" />

    <!-- AOS CSS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />

    <title>Alat Berat</title>

    <style>
        body
{
  background-color:#f5f5f5;
}
.imagePreview {
    width: 100%;
    height: 180px;
    background-position: center center;
  background:url(http://cliquecities.com/assets/no-image-e3699ae23f866f6cbdf8ba2443ee5c4e.jpg);
  background-color:#fff;
    background-size: cover;
  background-repeat:no-repeat;
    display: inline-block;
  box-shadow:0px -3px 6px 2px rgba(0,0,0,0.2);
}
.btn-primary
{
  display:block;
  border-radius:0px;
  box-shadow:0px 4px 6px 2px rgba(0,0,0,0.2);
  margin-top:-5px;
}
.imgUp
{
  margin-bottom:15px;
}
.del
{
  position:absolute;
  top:0px;
  right:15px;
  width:30px;
  height:30px;
  text-align:center;
  line-height:30px;
  background-color:rgba(255,255,255,0.6);
  cursor:pointer;
}
.imgAdd
{
  width:30px;
  height:30px;
  border-radius:50%;
  background-color:#4bd7ef;
  color:#fff;
  box-shadow:0px 0px 2px 1px rgba(0,0,0,0.2);
  text-align:center;
  line-height:30px;
  margin-top:0px;
  cursor:pointer;
  font-size:15px;
}


#wizardNav {
  overflow: hidden;
  width: 100%;
}

#wizardNav a {
  background-color: #E4E4E4;
  border-radius: 5px;
  display: inline;
  padding: 10px 20px 10px 50px;
  width: auto;
  position: relative;
  min-width: 33%;
  height: 70px;
}

#wizardNav a::first-child {
  padding: 10px 20px;
}

.text {
  z-index: 9;
  position: absolute;
}

#wizardNav a::before, #wizardNav a::after {
	content: " ";
  top: -10px;
  bottom: 0;
	height: 62px;
  width: 62px;
  position: absolute;
  transform: rotate(45deg);
  transform-origin: 0 0;
}

#wizardNav a::before {
    z-index: 3;
    background: white;
    right: -56px;
}

#wizardNav a:after {
	  background: #E4E4E4;
    right: -47px;
    z-index: 3;
}

#wizardNav a:hover, #wizardNav a:hover:after {
  background: blue;
  color: white;
}

#wizardNav a:last-child::after, #wizardNav a:last-child::before  {
  content: none;
}
    </style>