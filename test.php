<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Responsive Navbar</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

<style type="text/css">
.selected {
    /*color:#e87c57!important;*/
    color: #393185 !important;
    font-weight: bold !important;
    /*background: #509d4d;*/
    position: relative;
    /* position: absolute; */
}

.selected:after {
    content: "";
    background-image: url(assets/images/down-arrow.svg);
    height: 20px;
    width: 20px;
    position: absolute;
    top: 20px;
    left: 0;
    right: 0;
    margin: auto;
    background-position: center;
    background-repeat: no-repeat;
}


/* navbar regular css start */
header{
  position: fixed;
  top: 0;
  left: 0;
  background-color: white;
  z-index: 1111;
}
.full-header {
    height: 100%;
  }
  
  .navbar-area {
    height: 100%;
  }
  
  .site-navbar {
    display: flex;
    justify-content: space-between;
    align-items: center;
    height: 100%;
  }
  
  .site-navbar img {
    height: 40px;
  }
  
  .site-navbar ul {
    margin: 0;
    padding: 0;
    list-style: none;
    display: flex;
  }
  
  .site-navbar ul li a {
    color: black;
    padding: 0px 20px;
    display: block;
    text-decoration: none;
    text-transform: uppercase;
  }
  
  .site-navbar ul li a:hover {}
  
  /* navbar regular css end */
  
  
  /* nav-toggler css start */
  .nav-toggler {
    border: none;
    padding: 5px;
    background-color: transparent;
    cursor: pointer;
    height: 39px;
    display: none;
  }
  
  .nav-toggler span,
  .nav-toggler span:before,
  .nav-toggler span:after {
    width: 28px;
    height: 3px;
    background-color: black;
    display: block;
    transition: .3s;
  }
  
  .nav-toggler span:before {
    content: '';
    transform: translateY(-9px);
  }
  
  .nav-toggler span:after {
    content: '';
    transform: translateY(6px);
  }
  
  .nav-toggler.toggler-open span {
    background-color: transparent;
  }
  
  .nav-toggler.toggler-open span:before {
    transform: translateY(0px) rotate(45deg);
  }
  
  .nav-toggler.toggler-open span:after {
    transform: translateY(-3px) rotate(-45deg);
  }
  
  .toggler-open {
    transition: all.6s;
  }
  
  /* nav-toggler css End */


  
/* #Navigation ================================================== */
header{
  background-color: white;
  width: 100%;
}
.header-bottom {
    position: sticky;
    top: 0;
    background-color: var(--primry-color);
    z-index: 9999;
    /* font-family: "intermedium"; */
    background-color: #fff;
    box-shadow: 11px 0px 40px -2px #00000012;
  }
  
  .navbar-link {
    display: block;
    padding: 0rem 0rem;
  }
  
  .logo img {
    width: 250px;
  }
  
  nav {
    /* height: 75px;
         */
    width: 100%;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex !important;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    -webkit-box-pack: justify;
    -ms-flex-pack: justify;
    justify-content: space-between;
    margin: auto;
    text-align: center;
    padding: 15px 0px;
    text-align: center;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    background-color: #fff;
    z-index: 111;
    top: 0;
  }
  
  .navbar {
    padding: 0;
  }
  
  ul {
    margin-bottom: 0;
  }
  
  .navbar {
    text-align: center;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-transition: all 0.5s;
    transition: all 0.5s;
  }
  
  .nav-menu li {
    list-style: none;
    padding-right: 20px;
    /*text-align: left;*/
  }
  .nav-item{
    font-size: 18px;
    font-weight: 500;
    line-height: 30px;
    font-family: p-regular;
  }
  
  .nav-menu li:last-of-type {
    padding: 0;
  }
  a.navbar-link {
    color: #0D3C00;
    transition: all 0.3s;
  }
  
  a.navbar-link:hover {
    color: #16A34A;
  }
  
  .nav-menu {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    margin: 0 auto;
    -ms-flex-pack: distribute;
    display: flex;
    align-items: center;
    justify-content: center;
  }
  
  .nav-btn{
    font-size: 18px;
    font-weight: 500;
    line-height: 24px;
    font-family: p-regular;
    background-color: #16A34A;
    color: white;
    padding: 12px 18px;
    padding-right: 50px;
    margin-left: 25px;
    border-bottom-left-radius: 15px;
    border-bottom-right-radius: 15px;
    border-top-right-radius: 15px;
    position: relative;
    text-decoration: none !important;
  }
  .nav-btn:hover{
    color: white;
  }
  .nav-btn:hover.nav-btn::before{
    right: 13px;
    transition: all ease-in-out .3s;
}
  .nav-btn::before{
    font-family: FontAwesome;
    content: "\f105";
    position: absolute;
    top: 0;
    right: 18px;
    bottom:0;
    margin: auto;
    width: 24px;
    height: 24px;
    transition: all ease-in-out .3s;

  }
  
  .nav-btn::after{
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    border: 4px solid #BEE7CC;
    border-bottom-left-radius: 15px;
    border-bottom-right-radius: 15px;
    border-top-right-radius: 15px;
    /* background-color: #BEE7CC; */
    /* z-index: 1; */
  }
  
  .hamburger {
    display: none;
    padding-right: 20px;
  }
  
  .bar,
  .fa-times {
    width: 20px;
    height: 3px;
    display: block;
    padding: 0;
    margin: 6px;
    -webkit-transition: 0.5s;
    transition: 0.5s;
    background-color: #16A34A
    ;
  }
  
  .bar:nth-child(1) {
    width: 200%;
  }
  
  .bar:nth-child(2) {
    width: 200%;
  }
  
  .bar:nth-child(3) {
    width: 200%;
  }
  
  @media (max-width: 992px) {
    .logo {
      /* padding: 10px 20px 10px 5px; */
      z-index: 123;
    }
  
    .selected:after {
      display: none;
    }
  
    .selected {
      color: #393185 !important;
      font-weight: bold !important;
      /* background: #509d4d;
             */
      position: relative;
    }
  
    .hamburger {
      display: block;
    }
  
    .active .bar:nth-child(2) {
      opacity: 0;
    }
  
    .active .bar:nth-child(1) {
      -webkit-transform: translateY(8px) rotate(-315deg);
      transform: translateY(0px) rotate(-315deg);
      width: 250%;
      /* background-color: #000; */
    }
  
    .active .bar:nth-child(3) {
      -webkit-transform: translateY(-10px) rotate(-45deg);
      transform: translateY(-10px) rotate(-45deg);
      width: 250%;
      /* background-color: #000; */
      margin-top: -10px;
    }
  
    .nav-menu {
      width: 100%;
      height: 100%;
      margin-top: 0px;
      padding-top: 100px;
      display: flex;
      flex-direction: column;
      align-items: start;
      justify-content: start;
      gap: 15px;
      position: fixed;
      left: 0;
      /* Change 'right' to 'left' and set it to -100% */
      top: 0;
      -webkit-transition: 0.5s;
      transform: translateX(-100%);
      /* Change 'translateY' to 'translateX' and set it to -100% */
      transition: 0.5s;
      background-color: #fff;
      /* background-color: var(--main-color); */
      /* backdrop-filter: blur(5px); */
    }
  
    .active {
      left: 0;
      top: 0px;
      z-index: 100;
      transform: translateX(0);
      /* Change 'translateY' to 'translateX' and set it to 0 */
      transition: 0.2s ease;
      /* backdrop-filter: blur(5px); */
    }
  
  
    .nav-menu li:first-child {
      padding-top: 40px;
    }
  
  
    .nav-menu li {
  
    }
  
    a.navbar-link {
      padding-left: 20px;
    }

  
    nav {
      padding: 15px 0px 15px 0px;
    }
    .nav-btn{
      margin-left: 0px;
    }
  
  }
  
  /*@media (max-width: 992px)*/
  
  
  .top-section {
    padding-top: 200px;
  }
  
  @media screen and (max-width: 480px) {

  }
  
</style>
<!-- ====== Bottom Nav Start===== -->
<header>
    <div class="container b-header">
        <nav>
            <div class="logo"><a href="index"><img src="assets/images/logo.svg"></a></div>
            <div class="navbar">
                <ul class="nav-menu" id="navMenus">
                    <li class="nav-item"><a href="#about" class="navbar-link">About</a></li>
                    <li class="nav-item"><a href="#Why-us" class="navbar-link">Why us</a></li>
                    <li class="nav-item"><a href="#methodology" class="navbar-link">Methodology</a></li>
                <li class="nav-item"><a href="#Technology" class="navbar-link">Technology</a></li>
                <li class="nav-item"><a href="#Reflection" class="navbar-link">Reflection</a></li>
                <!-- <li class="nav-item"><a href="Product" class="navbar-link">Product</a></li> -->
                <!-- <li class="nav-item"><a href="gallery" class="navbar-link">Infrastructure</a></li> -->
                <!-- <li class="nav-item"><a href="" class="navbar-link">Careers</a></li> -->
                <a href="#contact" class="nav-btn">Get Started </a> 
            </ul>
        </div>
        <div class="hamburger">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
        </div>
    </nav>
</div>
</header>
<!-- ====== Bottom Nav End ===== -->


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script>
        const hamburger = document.querySelector(".hamburger");
      const navMenu = document.querySelector(".nav-menu");
      // document.querySelector("body").style.overflow ="auto";

      hamburger.addEventListener("click", () => {
        hamburger.classList.toggle("active");
        navMenu.classList.toggle("active");
        document.querySelector("body").style.overflow = "block";
      });

      document.querySelectorAll(".nav-link").forEach((link) =>
        link.addEventListener("click", () => {
          document.querySelector("body").style.overflow = "auto";
          navMenu.classList.remove("active");
          hamburger.classList.remove("active");
        })
      );

</script>
</body>
</html>
