<style>
/* ====== Common ====== */
.selected {
  color: #393185 !important;
  font-weight: bold !important;
  position: relative;
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

/* ====== Header ====== */
header {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  background-color: #ffffff8f;
  backdrop-filter: blur(10px);
  z-index: 1111;
  box-shadow: 11px 0px 40px -2px #00000012;
  transition: background-color 0.4s ease, box-shadow 0.4s ease, transform 0.4s ease;
}

/* ====== Navbar ====== */
nav {
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 15px 0;
  width: 100%;
}

.logo img {
  width: 80px;
}

/* ====== Menu ====== */
.nav-menu {
  display: flex;
  align-items: center;
  justify-content: center;
  gap: 25px;
  transition: 0.3s ease-in-out;
}

.nav-item {
  list-style: none;
  font-size: 18px;
  font-weight: 500;
  font-family: p-regular;
}

.navbar-link {
  color: #0D3C00;
  text-decoration: none;
  transition: all 0.3s ease;
}
.navbar-link:hover {
  color: #16A34A;
}

/* ====== Button ====== */
.nav-btn {
  font-size: 18px;
  font-weight: 500;
  font-family: p-regular;
  background-color: #16A34A;
  color: #fff;
  padding: 12px 18px 12px 50px;
  border-radius: 0 15px 15px 15px;
  text-decoration: none;
  position: relative;
  transition: 0.3s ease;
}
.nav-btn:hover {
  color: #fff;
}
.nav-btn::before {
  content: "\f105";
  font-family: FontAwesome;
  position: absolute;
  right: 18px;
  top: 0;
  bottom: 0;
  margin: auto;
  transition: right 0.3s ease;
}
.nav-btn:hover::before {
  right: 13px;
}
.nav-btn::after {
  content: "";
  position: absolute;
  inset: 0;
  border: 4px solid #BEE7CC;
  border-radius: 0 15px 15px 15px;
}

/* ====== Hamburger ====== */
.hamburger {
  display: none;
  cursor: pointer;
  z-index: 9999;
}
.bar {
  display: block;
  width: 30px;
  height: 3px;
  background: #16A34A;
  margin: 6px;
  transition: 0.3s;
}
.hamburger.active .bar:nth-child(2) {
  opacity: 0;
}
.hamburger.active .bar:nth-child(1) {
  transform: translateY(9px) rotate(45deg);
}
.hamburger.active .bar:nth-child(3) {
  transform: translateY(-9px) rotate(-45deg);
}

/* ====== Mobile Menu ====== */
@media (max-width: 992px) {
  .nav-menu {
    flex-direction: column;
    align-items: start;
    justify-content: start;
    position: fixed;
    top: 0;
    left: -100%;
    width: 75%;
    height: 100vh;
    background: #fff;
    padding-top: 100px;
    gap: 20px;
    transition: 0.4s ease;
    overflow-y: auto;
  }
  .nav-menu.active {
    left: 0;
  }

  .nav-btn {
    margin-left: 20px;
  }

  .hamburger {
    display: block;
  }

  .selected:after {
    display: none;
  }
}

.header-call-btn {
    display: flex;
    column-gap: 0.4vw;
    padding: 0.6vw 1.4vw;
    align-items: center;
}
.header-call-btn i{
font-size:1vw;
}

</style>

<!-- ====== Navbar ====== -->
<header>
  <div class="c-container b-header">
    <nav>
      <div class="logo"><a href="index"><img src="assets/images/logo.svg" alt="Logo"></a></div>
      <div class="navbar">
        <ul class="nav-menu" id="navMenus">
          <li class="nav-item"><a href="#index.php" class="navbar-link">Home</a></li>
          <li class="nav-item"><a href="#about" class="navbar-link">About</a></li>
          <li class="nav-item"><a href="#Why-us" class="navbar-link">Why Us</a></li>
          <li class="nav-item"><a href="#methodology" class="navbar-link">Methodology</a></li>
          <li class="nav-item"><a href="#Technology" class="navbar-link">Technology</a></li>
          <li class="nav-item"><a href="#Reflection" class="navbar-link">Contact Us</a></li>
          <a class="btn-main header-call-btn" href="#"><i class="fa-solid fa-phone phone-ring"></i>Call Now</a>
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

<!-- ====== Script ====== -->
<script>
const hamburger = document.querySelector(".hamburger");
const navMenu = document.querySelector(".nav-menu");

hamburger.addEventListener("click", () => {
  hamburger.classList.toggle("active");
  navMenu.classList.toggle("active");
  document.body.style.overflow = navMenu.classList.contains("active") ? "hidden" : "auto";
});

document.querySelectorAll(".navbar-link, .nav-btn").forEach(link => {
  link.addEventListener("click", () => {
    navMenu.classList.remove("active");
    hamburger.classList.remove("active");
    document.body.style.overflow = "auto";
  });
});
</script>


<script>
let lastScrollTop = 0;

window.addEventListener("scroll", function() {
  const header = document.querySelector("header");
  const scrollY = window.scrollY;
  const scrollTrigger = window.innerHeight * 0.1; // 10% of screen height

  // === Background and shadow control ===
  if (scrollY > scrollTrigger) {
    header.style.backgroundColor = "#fff";
    header.style.boxShadow = "0 4px 20px rgba(0, 0, 0, 0.1)";
  } else {
    header.style.backgroundColor = "#ffffff8f";
    header.style.boxShadow = "11px 0px 40px -2px #00000012";
  }

  // === Hide on scroll down, show on scroll up ===
  if (scrollY > lastScrollTop && scrollY > 100) {
    // scrolling down
    header.style.transform = "translateY(-100%)";
  } else {
    // scrolling up
    header.style.transform = "translateY(0)";
  }

  lastScrollTop = scrollY <= 0 ? 0 : scrollY; // prevent negative scroll
});
</script>



<!------------------------------------------------ 
-------------- fixed bottom right icons start -------->
<div class="fixed-contact-btns">
    

    <a href="YOUR_WHATSAPP_LINK" target="_blank" class="contact-btn whatsapp-btn">
        <img src="assets/images/whatsapp.svg" alt="WhatsApp" class="whatsapp-logo">
    </a>

    <a href="tel:YOUR_PHONE_NUMBER" class="contact-btn call-btn phone-ring">
        <i class="fa-solid fa-phone"></i> 
    </a>
</div>

<style>
  .fixed-contact-btns {
    position: fixed;
    right: 1vw;
    bottom: 1.5vw;
    z-index: 1000; 
    
    opacity: 0;
    visibility: hidden;
    transition: opacity 0.3s ease, visibility 0.3s ease;
}

.fixed-contact-btns.is-visible {
    opacity: 1;
    visibility: visible;
}

.contact-btn {
    /* Base styles for all circles */
    display: flex;
    justify-content: center;
    align-items: center;
    width:2.5vw;
    height:2.5vw;
    border-radius: 50%;
    margin-top: 1vw; /* Space between icons */
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
    text-decoration: none;
}

/* Style for the WhatsApp image inside the button */
.whatsapp-logo {
    width: 100%; /* Adjust size as needed to fit the circle */
    /* height:%; */
    object-fit: contain;
}


/* 2. WhatsApp specific styling (Background is now optional if the image is transparent) */
.whatsapp-btn {
    background-color: white; 
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
}

/* 3. Call specific styling */
.call-btn {
    background-color:  var(--secondary-color);
    border:1px solid var(--secondary-color);
    color: white; /* Apply color only to icon buttons */
    font-size:1vw;
    width:2.5vw;
    height:2.5vw;
}
.call-btn:hover {
color:var(--secondary-color);
background:var(--white-color);
}
.whatsapp-btn:hover{
  transform: scale(.9);
}
</style>




<script>
window.addEventListener('scroll', function() {
    const contactBtns = document.querySelector('.fixed-contact-btns');
    
    // Calculate 10% of the total scrollable height
    const totalHeight = document.documentElement.scrollHeight - window.innerHeight;
    const scrollTrigger = totalHeight * 0.10; // 10% trigger point

    // Toggle visibility
    if (window.scrollY > scrollTrigger) {
        contactBtns.classList.add('is-visible');
    } else {
        contactBtns.classList.remove('is-visible');
    }
});
</script>

