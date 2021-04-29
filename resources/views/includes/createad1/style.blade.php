   <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="vendor/assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="vendor/assets/css/bootstrap-icons.css" />

    <!-- Custom CSS -->
    <link rel="stylesheet" href="vendor/assets/css/head.css" />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap"
      rel="stylesheet"
    />

    <link rel="stylesheet" href="vendor/assets/css/style.css" />

    <!-- AOS CSS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />

    <style>
      #wizardNav {
  overflow: hidden;
  width: 100%;
  display: flex;
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
  font-size: 15px !important;
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
  color: black;
  font-weight: 400;
}

#wizardNav a:last-child::after, #wizardNav a:last-child::before  {
  content: none;
}
    </style>
