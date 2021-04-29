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
    <link rel="stylesheet" href="vendor/assets/css/fontawesome-free-5.15.2-web/css/all.css"

    <!-- AOS CSS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <link rel="stylesheet" href="vendor/assets/css/style.css" />

    <title>Alat Berat</title>
    <style>
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