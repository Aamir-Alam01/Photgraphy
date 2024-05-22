<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="dist/output.css">

    <!-- Remixicon Icons  -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">


    <!-- Tailwind CDN for Tailblock -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@0.7.4/dist/tailwind.min.css" rel="stylesheet">

</head>
<body class="poppins overflow-x-hidden">
    <!-- HEADER  -->
    

    <!-- HEADER  -->
    <header class="header w-[100vw]" id="header">
      <nav class="nav container w-[100vw]">
          <a href="#" class="nav__logo tracking-widest">
            <ion-icon name="camera" class="text-white text-2xl"></ion-icon> JD PRODUCTION
          </a>

          <div class="nav__menu" id="nav-menu">
              <ul class="nav__list">
                  <li class="nav__item">
                      <a href="#home" class="nav__link ">Home</a>
                  </li>
                  <li class="nav__item">
                      <a href="#about" class="nav__link">About</a>
                  </li>
                  <li class="nav__item">
                      <a href="#services" class="nav__link">Services</a>
                  </li>
                  <li class="nav__item">
                      <a href="#gallery" class="nav__link">Gallery</a>
                  </li>
                  <li class="nav__item">
                      <a href="#testimonials" class="nav__link">Testimonials</a>
                  </li>
                  <li class="nav__item">
                      <a href="#work" class="nav__link">Our Work</a>
                  </li>

                  <!-- <div class="nav__link">
                      <a href="#footer" class="button nav__button">
                          Register Now
                      </a>
                  </div> -->
              </ul>

              <div class="nav__close" id="nav-close">
                  <i class="ri-close-line"></i>
              </div>
          </div>

          <!-- Toggle button  -->
          <div class="nav__toggle" id="nav-toggle">
              <i class="ri-menu-line"></i>
          </div>
      </nav>
  </header>



  <!-- Hero -->
  
    <div id="home" style="background-image: url(assets/images/hero.jpg);" 
         class="hero h-[100vh] bg-cover bg-right bg-fixed">
         <div class=" h-[100vh] bg-[#0000005a] ">
          <h1 id="hero-head" class="text-white pt-56 text-9xl z-10 max-md:text-[7rem] max-sm:text-[4.5rem]"><span class=" text-red-600">Discover</span> <br> the Beauty of Every Frame</h1>
        </div>
    </div>


    <!-- About Us -->

    <div id="about" class="about-us text-white flex flex-col px-10 gap-10 max-md:gap-0 h-[100vh] w-[100vw]  max-lg:h-[90vh] max-md:h-[100vh]">
        <div class="grid grid-cols-2 gap-5 justify-center items-center h-[100%] max-lg:flex max-lg:flex-col-reverse max-lg:gap-10 ">
            <div class="flex justify-center items-center flex-col gap-10">
              <h1 class="text-center h-[100px] flex justify-center items-center mt-0 font-bold max-sm:mt-0 max-md:text-2xl lg:text-5xl">About JD Production</h1>
                <p class="text-center text-xl max-md:text-lg max-sm:text-sm xl:text-2xl">We have a keen eye for capturing the beauty of life through the lens. Proficient in various photography styles, from portraits to landscapes, this artist combines technical expertise with creative vision to produce captivating and memorable images that tell stories and evoke emotions.</p>
                <a href="#" class="px-8 py-4 rounded-md bg-red-600 border-none text-white border-2 hover:bg-white hover:border-red-600 hover:text-red-600 ease-in duration-300"> Contact Us</a>

            </div>
            <div class=" flex justify-center">
                <img class="h-[300px] max-sm:h-[200px] xl:h-[500px]" src="assets/images/about.jpeg" alt="">
            </div>
        </div>
        
    </div>

    


    <!-- Services  -->

    <div id="services" class="services p-10 h-[65rem] bg-black max-lg:h-[90rem] max-md:h-[160rem] max-sm:h-[140rem]">
        <h1 class="text-white text-center pt-10 pb-2 font-bold">Our Services</h1>
        <p class="text-white text-center">Your Desire, Our Dream !</p>
        <div class="cards grid place-items-center justify-center grid-cols-3 grid-rows-2 py-20 gap-10 ease-in duration-300 max-lg:grid-cols-2 max-lg:grid-rows-3 max-md:grid-cols-1 max-md:grid-rows-6">
            <div class="w-[360px] rounded-xl flex flex-col gap-2 justify-center items-center bg-white py-5 max-sm:w-[250px] max-sm:h-[280px] hover:scale-105  ease-in duration-300 hover:shadow-3xl">
                <div class="image">
                    <img class="w-[320px] rounded-xl max-sm:w-[210px]" src="assets/images/engagement.jpeg" alt="">
                </div>
                <h4 class="text-center font-bold text-black text-xl max-sm:text-lg">Engagement</h4>
                <a href="#" class="px-8 py-4 max-sm:px-5 max-sm:py-2 rounded-md  bg-red-600 text-white hover:bg-white border-2 border-white   hover:border-red-600 hover:text-red-600 ease-in duration-300"> Know More</a>
            </div>
            <div class="w-[360px] rounded-xl flex flex-col gap-2 justify-center items-center bg-white py-5 max-sm:w-[250px] max-sm:h-[280px] hover:scale-105  ease-in duration-300 hover:shadow-3xl">
                <div class="image">
                    <img class="w-[320px] rounded-xl max-sm:w-[210px]" src="assets/images/engagement.jpeg" alt="">
                </div>
                <h4 class="text-center font-bold text-black text-xl">Pre-Wedding</h4>
                <a href="#" class="px-8 py-4 max-sm:px-5 max-sm:py-2 rounded-md  bg-red-600 text-white hover:bg-white border-2 border-white   hover:border-red-600 hover:text-red-600 ease-in duration-300"> Know More</a>
            </div>
            <div class="w-[360px] rounded-xl flex flex-col gap-2 justify-center items-center bg-white py-5 max-sm:w-[250px] max-sm:h-[280px] hover:scale-105  ease-in duration-300 hover:shadow-3xl">
                <div class="image">
                    <img class="w-[320px] rounded-xl max-sm:w-[210px]" src="assets/images/engagement.jpeg" alt="">
                </div>
                <h4 class="text-center font-bold text-black text-xl max-sm:text-lg">Wedding</h4>
                <a href="#" class="px-8 py-4 max-sm:px-5 max-sm:py-2 rounded-md  bg-red-600 text-white hover:bg-white border-2 border-white   hover:border-red-600 hover:text-red-600 ease-in duration-300"> Know More</a>
            </div>
            <div class="w-[360px] rounded-xl flex flex-col gap-2 justify-center items-center bg-white py-5 max-sm:w-[250px] max-sm:h-[280px] hover:scale-105  ease-in duration-300 hover:shadow-3xl">
                <div class="image">
                    <img class="w-[320px] rounded-xl max-sm:w-[210px]" src="assets/images/engagement.jpeg" alt="">
                </div>
                <h4 class="text-center font-bold text-black text-xl max-sm:text-lg">Maternity</h4>
                <a href="#" class="px-8 py-4 max-sm:px-5 max-sm:py-2 rounded-md  bg-red-600 text-white hover:bg-white border-2 border-white   hover:border-red-600 hover:text-red-600 ease-in duration-300"> Know More</a>
            </div>
            <div class="w-[360px] rounded-xl flex flex-col gap-2 justify-center items-center bg-white py-5 max-sm:w-[250px] max-sm:h-[280px] hover:scale-105  ease-in duration-300 hover:shadow-3xl">
                <div class="image">
                    <img class="w-[320px] rounded-xl max-sm:w-[210px]" src="assets/images/engagement.jpeg" alt="">
                </div>
                <h4 class="text-center font-bold text-black text-xl max-sm:text-lg">Baby-shoot</h4>
                <a href="#" class="px-8 py-4 max-sm:px-5 max-sm:py-2 rounded-md  bg-red-600 text-white hover:bg-white border-2 border-white   hover:border-red-600 hover:text-red-600 ease-in duration-300"> Know More</a>
            </div>
            <div class="w-[360px] rounded-xl flex flex-col gap-2 justify-center items-center bg-white py-5 max-sm:w-[250px] max-sm:h-[280px] hover:scale-105  ease-in duration-300 hover:shadow-3xl">
                <div class="image">
                    <img class="w-[320px] rounded-xl max-sm:w-[210px]" src="assets/images/engagement.jpeg" alt="">
                </div>
                <h4 class="text-center font-bold text-black text-xl max-sm:text-lg">Model Shoot</h4>
                <a href="#" class="px-8 py-4 max-sm:px-5 max-sm:py-2 rounded-md  bg-red-600 text-white hover:bg-white border-2 border-white   hover:border-red-600 hover:text-red-600 ease-in duration-300"> Know More</a>
            </div>
        </div>
    </div>



    <!-- Gallery  -->


      <div style="background-image: url(assets/images/wall.jpg);" id="gallery" class="gallery bg-center bg-cover p-10 h-[65rem] max-lg:h-[90rem] max-md:h-[160rem] max-sm:h-[125rem]">
        <h1 class="text-white text-center pt-10 pb-2 font-bold text-5xl">Gallery</h1>
        <p class="text-white text-center">Memories that lasts!</p>
        <div class="cards  text-black grid place-items-center justify-center grid-cols-3 grid-rows-2 py-20 gap-10 ease-in duration-300 max-lg:grid-cols-2 max-lg:grid-rows-3 max-md:grid-cols-1 max-md:grid-rows-6">
            <div class="w-[360px] rotate-2 flex flex-col gap-2 justify-center items-center bg-white py-5 max-sm:w-[250px] max-sm:h-[240px] hover:scale-105  ease-in duration-300 hover:shadow-3xl">
                <div class="image">
                    <img class="w-[320px] max-sm:w-[210px]" src="assets/images/engagement.jpeg" alt="">
                </div>
                <h4 class="text-xl max-sm:text-lg h-10 cursive">12 Sept, 2019</h4>
            </div>
            <div class="w-[360px] rotate-[-10deg] flex flex-col gap-2 justify-center items-center bg-white py-5 max-sm:w-[250px] max-sm:h-[240px] hover:scale-105  ease-in duration-300 hover:shadow-3xl">
                <div class="image">
                    <img class="w-[320px] max-sm:w-[210px]" src="assets/images/engagement.jpeg" alt="">
                </div>
                <h4 class="text-xl max-sm:text-lg h-10 cursive">12 Sept, 2019</h4>            
            </div>
            <div class="w-[360px] rotate-6 flex flex-col gap-2 justify-center items-center bg-white py-5 max-sm:w-[250px] max-sm:h-[240px] hover:scale-105  ease-in duration-300 hover:shadow-3xl">
                <div class="image">
                    <img class="w-[320px] max-sm:w-[210px]" src="assets/images/engagement.jpeg" alt="">
                </div>
                <h4 class="text-xl max-sm:text-lg h-10 cursive">12 Sept, 2019</h4>            
            </div>
            <div class="w-[360px] rotate-[15deg] flex flex-col gap-2 justify-center items-center bg-white py-5 max-sm:w-[250px] max-sm:h-[240px] hover:scale-105  ease-in duration-300 hover:shadow-3xl">
                <div class="image">
                    <img class="w-[320px] max-sm:w-[210px]" src="assets/images/engagement.jpeg" alt="">
                </div>
                <h4 class="text-xl max-sm:text-lg h-10 cursive">12 Sept, 2019</h4>            
            </div>
            <div class="w-[360px] rotate-[5deg] flex flex-col gap-2 justify-center items-center bg-white py-5 max-sm:w-[250px] max-sm:h-[240px] hover:scale-105  ease-in duration-300 hover:shadow-3xl">
                <div class="image">
                    <img class="w-[320px] max-sm:w-[210px]" src="assets/images/engagement.jpeg" alt="">
                </div>
                <h4 class="text-xl max-sm:text-lg h-10 cursive">12 Sept, 2019</h4>            
            </div>
            <div class="w-[360px] rotate-[-25deg] flex flex-col gap-2 justify-center items-center bg-white py-5 max-sm:w-[250px] max-sm:h-[240px] hover:scale-105  ease-in duration-300 hover:shadow-3xl">
                <div class="image">
                    <img class="w-[320px] max-sm:w-[210px]" src="assets/images/engagement.jpeg" alt="">
                </div>
                <h4 class="text-xl max-sm:text-lg h-10 cursive">12 Sept, 2019</h4>            
            </div>
        </div>
    </div>




    <!-- Testimonials  -->

    <div id="testimonials" class="testimonial ">
        <h1 class="text-center text-white font-bold pt-20 pb-5">Testimonials</h1>
        <h5 class="text-xs text-center text-white pb-20">Thanks to all the supportive customers who shared their testimonials with us!</h5>
        <div class="flex flex-col items-center w-full gap-4 md:flex-row md:mb-0 flex-between">
            <div class="bg-white dark:bg-gray-800 w-80 shadow-lg mx-auto rounded-xl p-4">
                <p class="text-gray-600 dark:text-white">
                    <span class="text-lg font-bold text-red-600">
                        “
                    </span>
                    To get social media testimonials like these, keep your customers engaged with your social media accounts by posting regularly yourself
                    <span class="text-lg font-bold text-red-600">
                        ”
                    </span>
                </p>
                <div class="flex items-center mt-4">
                    <a href="#" class="relative block">
                        <img alt="profil" src="assets/icon/profile.png" class="mx-auto object-cover rounded-full h-10 w-10 "/>
                    </a>
                    <div class="flex flex-col justify-between ml-2">
                        <span class="text-sm font-semibold text-red-600">
                            Akshay Kumar
                        </span>
                        <span class="flex items-center text-xs dark:text-gray-400">
                            Asansol
                            <!-- <img src="/icons/rocket.svg" class="w-4 h-4 ml-2"/> -->
                        </span>
                    </div>
                </div>
            </div>
            <div class="bg-white dark:bg-gray-800 w-80 shadow-lg mx-auto rounded-xl p-4">
                <p class="text-gray-600 dark:text-white">
                    <span class="text-lg font-bold text-red-600">
                        “
                    </span>
                    To get social media testimonials like these, keep your customers engaged with your social media accounts by posting regularly yourself
                    <span class="text-lg font-bold text-red-600">
                        ”
                    </span>
                </p>
                <div class="flex items-center mt-4">
                    <a href="#" class="relative block">
                        <img alt="profil" src="assets/icon/profile.png" class="mx-auto object-cover rounded-full h-10 w-10 "/>
                    </a>
                    <div class="flex flex-col justify-between ml-2">
                        <span class="text-sm font-semibold text-red-600">
                            Aamir Khan
                        </span>
                        <span class="flex items-center text-xs dark:text-gray-400">
                            Delhi
                            <!-- <img src="/icons/rocket.svg" class="w-4 h-4 ml-2"/> -->
                        </span>
                    </div>
                </div>
            </div>
            <div class="bg-white dark:bg-gray-800 w-80 shadow-lg mx-auto rounded-xl p-4">
                <p class="text-gray-600 dark:text-white">
                    <span class="text-lg font-bold text-red-600">
                        “
                    </span>
                    To get social media testimonials like these, keep your customers engaged with your social media accounts by posting regularly yourself
                    <span class="text-lg font-bold text-red-600">
                        ”
                    </span>
                </p>
                <div class="flex items-center mt-4">
                    <a href="#" class="relative block">
                        <img alt="profil" src="assets/icon/profile.png" class="mx-auto object-cover rounded-full h-10 w-10 "/>
                    </a>
                    <div class="flex flex-col justify-between ml-2">
                        <span class="text-sm font-semibold text-red-600">
                            Monty Prasad
                        </span>
                        <span class="flex items-center text-xs dark:text-gray-400">
                            Durgapur
                            <!-- <img src="/icons/rocket.svg" class="w-4 h-4 ml-2"/> -->
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Videos -->
    <div id="work" class="videos-work my-10">
        <h1 class="text-center text-white font-bold my-20">Our Work</h1>
        <div class="videos-holder grid grid-cols-3 gap-10 max-lg:grid-cols-1 max-lg:grid-rows-3">
            <div class="video flex justify-center ">
                <iframe class="max-sm:h-[215px] max-sm:w-[320px]" width="420" height="315" src="https://www.youtube.com/embed/LkbsTTyFQnw?si=QL5nl7taScWhdpUy" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
            <div class="video flex justify-center ">
                <iframe class="max-sm:h-[215px] max-sm:w-[320px]"  width="420" height="315" src="https://www.youtube.com/embed/R15Cnww_CSo?si=cR61kXPRws2qNBFA`" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
            <div class="video flex justify-center ">
                <iframe class="max-sm:h-[215px] max-sm:w-[320px]"  width="420" height="315" src="https://www.youtube.com/embed/gMbBnh1Pve0?si=YEb4m4DdPGQzZwp5" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
        </div>
    </div>

    <!-- Footer  -->

    <div class="footer h-auto bg-gray-900 text-white flex flex-col p-20 max-sm:p-10">
      <div class="section grid grid-cols-4 gap-10 max-lg:grid-cols-2 max-lg:grid-rows-2 max-sm:grid-cols-1 max-sm:grid-rows-[1fr,0.5fr,0.5fr,0.5fr] auto-rows-min">
          <div class="section-1 flex flex-col gap-10">
              <div class="logo">
                  <h1 class="text-2xl">JD PRODUCTION</h1>
                  <h5>Tag Line</h5>
              </div>
              <div class="about-footer">
                  <h1 class="text-2xl primary pb-2">About Us</h1>
                  <h5>We bring your imagination to life with our technology and skills.</h5>
              </div>
              <div class="contact-footer">
                  <h1 class="text-2xl primary pb-2">Contact Us</h1>
                  <div>
                      <div class="pb-1 flex items-center">
                          <ion-icon class="primary pr-1" name="call"></ion-icon>
                          <a class="max-sm:text-sm" href="tel:">+91 9999 999 999</a>
                      </div>
                      <div class="flex items-center">
                          <ion-icon class="primary pr-2" name="mail"></ion-icon>
                          <a class="max-sm:text-sm overflow-hidden" href="mailto:binarykompass@gmail.com">binarykompass@gmail.com</a>
                      </div>
                  </div>
              </div>
          </div>
          <div class="section-2 pl-20 max-sm:pl-0 h-[200px]">
              <h1 class="pb-3 text-2xl primary">Links</h1>
              <div class="flex flex-col gap-2">
                  <a href="#">Home</a>
                  <a href="#">About</a>
                  <a href="#">Services</a>
                  <a href="#">Contact Us</a>
              </div>
          </div>
          <div class="section-3">
              <h1 class="pb-3 text-2xl primary">Helpful Links</h1>
              <div class="flex flex-col gap-2">
                  <a href="#">Services</a>
                  <a href="#">Supports</a>
                  <a href="#">Terms & Condition</a>
                  <a href="#">Privacy Policy</a>
              </div>
          </div>
          <div class="section-4 flex flex-col gap-4">
              <h1 class="">Subscribe to get more updates</h1>
              <input class="email-input sm:w-full h-[35px] rounded-md text-black" type="email" name="email" id="email" placeholder=" Enter your Email">
              <button class="button-sub sm:w-full px-[15px] py-[5px] rounded-md bg-red-600 hover:bg-white hover:text-red-600 ease-in duration-300" type="submit">Subscribe</button>
          </div>
      </div>
      <div class="mini-footer mt-10 ">
          <hr width="80%" class="m-auto ]">
          <div class="grid grid-rows-2  place-content-center pt-5">
              <div class="socials flex gap-5 text-2xl justify-center  max-sm:justify-center">
                  <a href="#"><ion-icon class="bg-red-600 p-[6px] rounded-full hover:bg-white hover:text-red-600 ease-in duration-300" name="logo-facebook"></ion-icon></a>
                  <a href="#"><ion-icon class="bg-red-600 p-[6px] rounded-full hover:bg-white hover:text-red-600 ease-in duration-300" name="logo-linkedin"></ion-icon></a>
                  <a href="#"><ion-icon class="bg-red-600 p-[6px] rounded-full hover:bg-white hover:text-red-600 ease-in duration-300" name="logo-instagram"></ion-icon></a>
                  <a href="#"><ion-icon class="bg-red-600 p-[6px] rounded-full hover:bg-white hover:text-red-600 ease-in duration-300" name="logo-whatsapp"></ion-icon></a>
              </div>
              <p class="flex justify-center text-[0.8rem]">©2023 | All rights reserved <strong><a href="https://www.binarykompass.com">&nbsp;BinaryKompass</a></strong>.</p>
          </div>
      </div>
  </div>

      <script src="assets/js/main.js"></script>

      <!-- Ion Icons  -->

      <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
      <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

</body>
</html>