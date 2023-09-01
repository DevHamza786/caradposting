<html lang="en">

<head>
    <meta charset="utf-8">
       <link rel="shortcut icon" href="{{ asset('panel/assets/images/side-logo.png') }}" />
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="theme-color" content="#000000">
    <meta name="description"
        content="Exotic and Unique Cars Boutique Based in Riyadh, UAE. Established in 2014 as a One-stop Shop for Car Collecting Enthusiasts">
    <link rel="apple-touch-icon" href="/logo192.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    {{--
      <link rel="manifest" href="/manifest.json">
      --}}
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Seven Car Lounge</title>
    <script defer="defer" src="{{ asset('home/assets/js/main.7a4af184.js') }}"></script>
    <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
    <link href="{{ asset('home/assets/css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('home/assets/css/cat.css') }}" rel="stylesheet">
</head>

<body>
   
    <div id="root">
        <div class="bg-black">
            <div class="header_bg">
                <div>
                    <div class="mobil_device row"><i class="fa-solid fa-bars"></i></div>
                    <div class="Nav_row row">
                        <div class="col-md-7">
                            <div class="logo_search">
                                <div class="logo"><a href="/"><img class="img-fluid"
                                            src="{{ asset('home/assets/images/logo.png') }}" alt="Site Logo"></a></div>
                            </div>
                        </div>
                        <div class="col-md-5 ">
                            <div class="menu_right">
                                <a activeclassname="active" aria-current="page" class="f-m fw-bolder text-white active"
                                    href="/">Home</a><a href="#"><button class="f-m fw-bolder text-dark"
                                        style="background: #fcaf17;">Rent with us</button></a>
                                        <a
                                    href="{{ route('login') }}"><button class="f-m fw-bolder">Login</button></a>
                                   
                                <a href="#">
                                    <!--<select class="f-m fw-bolder">-->
                                    <!--    <option>En</option>-->
                                    <!--    <option>Ar</option>-->
                                    <!--</select>-->
                                    <div class="gtranslate_wrapper"></div>
<script>window.gtranslateSettings = {"default_language":"en","languages":["en","ar"],"wrapper_selector":".gtranslate_wrapper"}</script>
<script src="https://cdn.gtranslate.net/widgets/latest/dropdown.js" defer></script>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="row"></div>
                </div>
            </div>
            <div class="nvbar nvbar-expand-lg nvbar-light bg-light nvbar-light nvbar-box-shadow" id="nvbar">
                <ul id="mnu-primary-mnu" class="nvbar-nav ml-auto flex-wrap">
                    <li class="dropdwn nav-item">
                        <a href="javascript:void(0)" class="dropdwn-toggle nav-link first-link " data-toggle="dropdwn"
                            aria-haspopup="true" aria-expanded="false">
                          <img src="/home/assets/images/car (1).png">
                            Cars
                        </a>
                        <ul class="dropdwn-mnu dropdwn-mega p-0 mt-0 mt-md-20">
                            <li>
                                <div class="flex-column flex-lg-row flex-nowrap roww m-0">
                                    <div
                                        class="p-0 rounded-left dropdwn-column dropdwn-column-img bg-secondary d-none d-lg-block">
                                        <img loading="lazy" alt="OCD menu"
                                            title="UAE's no. 1 car rental &amp; leasing marketplace"
                                            src="/public/adpost/images/c7.jpg"
                                            class="img-fluid rounded-left attachment-large size-large mnu-img-lft">
                                
                                    </div>
                                    <div class="dropdwn-column">
                                        <nav>
                                            <ul class="listinlin">
                                                @foreach (menuType('car') as $submenu)
                                                    <li class="mnu-item-16210">
                                                        <a href="#"
                                                            class="dropdwn-item">
                                                            {{ $submenu->name }}
                                                        </a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdwn nav-item">
                        <a href="javascript:void(0)" class="dropdwn-toggle nav-link first-link " data-toggle="dropdwn"
                            aria-haspopup="true" aria-expanded="false">
                            <img src="/home/assets/images/bycicle.png">
                            Bikes
                        </a>
                        <ul class="dropdwn-mnu dropdwn-mega p-0 mt-0 mt-md-20">
                            <li>
                                <div class="flex-column flex-lg-row flex-nowrap roww m-0">
                                    <div
                                        class="p-0 rounded-left dropdwn-column dropdwn-column-img bg-secondary d-none d-lg-block">
                                        <img loading="lazy" alt="OCD menu"
                                            title="UAE's no. 1 car rental &amp; leasing marketplace"
                                            src="/public/adpost/images/b1.jpg"
                                            class="img-fluid rounded-left attachment-large size-large mnu-img-lft">
                                  
                                    </div>
                                    <div class="dropdwn-column">
                                        <nav>
                                            <ul class="listinlin">
                                                @foreach (menuType('bike') as $submenu)
                                                    <li class="mnu-item-16210">
                                                        <a href="#"
                                                            class="dropdwn-item">
                                                            {{ $submenu->name }}
                                                        </a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdwn nav-item">
                        <a href="javascript:void(0)" class="dropdwn-toggle nav-link first-link "
                            data-toggle="dropdwn" aria-haspopup="true" aria-expanded="false">
                         <img src="/home/assets/images/speedboat.png">
                            Motorboats
                        </a>
                        <ul class="dropdwn-mnu dropdwn-mega p-0 mt-0 mt-md-20">
                            <li>
                                <div class="flex-column flex-lg-row flex-nowrap roww m-0">
                                    <div
                                        class="p-0 rounded-left dropdwn-column dropdwn-column-img bg-secondary d-none d-lg-block">
                                        <img loading="lazy" alt="OCD menu"
                                            title="UAE's no. 1 car rental &amp; leasing marketplace"
                                            src="/public/adpost/images/y1.jpg"
                                            class="img-fluid rounded-left attachment-large size-large mnu-img-lft">
                                        
                                    </div>
                                    <div class="dropdwn-column">
                                        <nav>
                                            <ul class="listinlin">
                                                @foreach (menuType('motorboats') as $submenu)
                                                    <li class="mnu-item-16210">
                                                        <a href="#"
                                                            class="dropdwn-item">
                                                            {{ $submenu->name }}
                                                        </a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdwn nav-item">
                        <a href="javascript:void(0)" class="dropdwn-toggle nav-link first-link "
                            data-toggle="dropdwn" aria-haspopup="true" aria-expanded="false">
                           <img src="/home/assets/images/dumper-truck.png">
                            Heavy Vehicles
                        </a>
                        <ul class="dropdwn-mnu dropdwn-mega p-0 mt-0 mt-md-20">
                            <li>
                                <div class="flex-column flex-lg-row flex-nowrap roww m-0">
                                    <div
                                        class="p-0 rounded-left dropdwn-column dropdwn-column-img bg-secondary d-none d-lg-block">
                                        <img loading="lazy" alt="OCD menu"
                                            title="UAE's no. 1 car rental &amp; leasing marketplace"
                                            src="/public/adpost/images/t4.jpg"
                                            class="img-fluid rounded-left attachment-large size-large mnu-img-lft">
                                        <aside class="desktop-app">
                                            <!-- new changes start -->
                                            <span class="f-20 font-bold text-center downloadapptext">
                                                <span class="text-black">Rent Heavyvihcles near you</span> <br> <span
                                                    class=" d-block">the easy way!</span> <a
                                                    href="https://www.oneclickdrive.com/car-rental-app"
                                                    class="d-block f-14 gtdocd">Get the OneClickDrive App</a>
                                            </span>
                                            <!-- new changes end -->
                                        </aside>
                                    </div>
                                    <div class="dropdwn-column">
                                        <nav>
                                            <ul class="listinlin">
                                                @foreach (menuType('heavyvihcles') as $submenu)
                                                    <li class="mnu-item-16210">
                                                        <a href="#"
                                                            class="dropdwn-item">
                                                            {{ $submenu->name }}
                                                        </a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </li>
                </ul>
                @yield('content')
            </div>
        </div>
    </div>
    <div class="footer_bg border-top border-secondary">
        <div class="container">
            <div class="footer_row row">
                <div class="col-md-5">
                    <div class="footer_text">
                        <div class="footer_logo"><img class="img-fluid"
                                src="{{ asset('home/assets/images/logo.png ') }}" alt=""></div>
                        <p class="text-center f-s"><a class="email_info text-white" href="#">info@abc.com</a>
                        </p>
                    </div>
                </div>
            
                <div class="col-md-3">
                    <div class="footer_text">
                        <div class="footer_heading">
                            <h2 class="f-m">About</h2>
                        </div>
                        <div class="footer_menu f-s">
                            <li><a class="text-white" href="/about-us">About Us</a></li>
                            <li><a class="text-white" href="/renting-guide">Renting Guide</a></li>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="footer_text">
                        <div class="footer_heading">
                            <h2 class="f-m">company</h2>
                        </div>
                        <div class="footer_menu f-s">
                            <li><a class="text-white" href="/privacy-policy">Privacy and Policy</a></li>
                            <li><a class="text-white" href="/terms-conditions">Terms and Conditions</a></li>
                            <li><a class="text-white" href="/contact-us">Contact Us</a></li>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer_bottom">
            <div class="container">
                <div class="row">
                    <div class="f-s col-md-6">
                        <p>all rights reserved, 2021</p>
                    </div>
                    <div class="col-md-6">
                        <div class="social_icon"><a target="_blank" href="#"><i
                                    class="fa-brands text-white fa-facebook-f"></i></a><a target="_blank"
                                href="#"><i class="fa-brands text-white fa-twitter"></i></a><a target="_blank"
                                href="#"><i class="fa-brands text-white fa-instagram"></i></a><a
                                target="_blank" href="#"><i
                                    class="fa-brands text-white fa-linkedin-in"></i></a><a target="_blank"
                                href="#"><i class="fa-brands text-white fa-youtube"></i></a></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container me modall animate">
            <!-- upper button section to select
               the login or signup form -->
            <div class="sliders"></div>
            <div class="btn">
                <button class="close">&times;</button>
                <button class="login">Login</button>
                <button class="signup">Signup</button>
            </div>
            <!-- Form section that contains the
               login and the signup form -->
            <div class="form-section">
                <!-- login form -->
                <div class="login-box">
                    <input type="email" class="email ele" placeholder="youremail@email.com">
                    <input type="password" class="password ele" placeholder="password">
                    <button class="clkbtn">Login</button>
                </div>
                <!-- signup form -->
                <div class="signup-box">
                    <input type="text" class="name ele" placeholder="Enter your name">
                    <input type="email" class="email ele" placeholder="youremail@email.com">
                    <input type="password" class="password ele" placeholder="password">
                    <input type="password" class="password ele" placeholder="Confirm password">
                    <button class="clkbtn">Signup</button>
                </div>
            </div>
        </div>
    </div>
    <div class="Toastify"></div>
    </div>
    </div>

<script>
    $(document).ready(function(){$("#show_less").click(function(){$(".otherlinksqik").toggle(),$(".otherlinksqik").toggleClass("ani"),$(".viewmor").toggleClass("dnone"),$(".show-more-less .fa").toggleClass("showls")})});for(var acc=document.getElementsByClassName("accordion"),i=0;i<acc.length;i++)acc[i].addEventListener("click",function(){this.classList.toggle("active");var n=this.nextElementSibling;n.style.maxHeight?n.style.maxHeight=null:n.style.maxHeight=n.scrollHeight+"%"});$(function(){function n(n,t){this.el=n||{},this.multiple=t||!1,this.el.find(".bukfiltitle").on("click",{el:this.el,multiple:this.multiple},this.dropdwn)}n.prototype.dropdwn=function(n){var t=n.data.el;$this=$(this),$next=$this.next(),$next.slideToggle(),$this.parent().toggleClass("open"),n.data.multiple||t.find(".submnu").not($next).slideUp().parent().removeClass("open")},new n($(".aconfil"),!1)}),$(".sortboxmn input:checkbox").on("click",function(){var n,t=$(this);t.is(":checked")?(n="input:checkbox[name='"+t.attr("name")+"']",$(n).prop("checked",!1),t.prop("checked",!0)):t.prop("checked",!1)}),$(".sortboxmn .srtlnk ").click(function(){$(".sortboxmn .srtlnk.selected").removeClass("selected"),$(this).addClass("selected")}),$(".sortboxmn input").click(function(){($(".sortboxmn .srtlnk").hasClass("selected")?$(".sortboxmn .srtlnk"):$(".sortboxmn .srtlnk.selected")).removeClass("selected")});var modal1=document.getElementById("sorting-bar"),bttn=document.getElementById("sortlink"),spans=document.getElementsByClassName("sortcl")[0];bttn.onclick=function(){modal1.style.display="block",modal1.classList.add("in")},spans.onclick=function(){modal1.style.display="none",modal1.classList.remove("in")},window.onclick=function(n){n.target==modal&&(modal1.style.display="none",modal1.classList.remove("in"))};var modal=document.getElementById("myModal"),span=(bttn=document.getElementById("filterlink"),document.getElementsByClassName("cls")[0]);bttn.onclick=function(){modal.style.display="block",modal.classList.add("in")},span.onclick=function(){modal.style.display="none",modal.classList.remove("in")},window.onclick=function(n){n.target==modal&&(modal.style.display="none",modal.classList.remove("in"))};var findcar=document.getElementById("findmcar"),bttn=document.getElementById("findmeacarbtn"),span=document.getElementsByClassName("fincarclose")[0];bttn.onclick=function(){findcar.style.display="flex"},span.onclick=function(){findcar.style.display="none"},window.onclick=function(n){n.target==modale&&(findcar.style.display="none")};var modale=document.getElementById("enquirymodal"),bttn=document.getElementById("mailenqbtn"),span=document.getElementsByClassName("enqclose")[0];bttn.onclick=function(){modale.style.display="flex"},span.onclick=function(){modale.style.display="none"},window.onclick=function(n){n.target==modale&&(modale.style.display="none")},$(function(){$(".faqbottom .accordion").click(function(){$(this).toggleClass("hit")})}),$(document).ready(function(){$(".mailbox").click(function(){$("html").addClass("noscroll")}),$(".enqclose").click(function(){$("html").removeClass("noscroll")}),$(".modal").click(function(){$("html").removeClass("noscroll")}),$(".stickybttnsortfil").click(function(){$("html").addClass("noscroll")}),$(".sortcl").click(function(){$("html").removeClass("noscroll")}),$(".cls").click(function(){$("html").removeClass("noscroll")}),$("#findmeacarbtn").click(function(){$("html").addClass("noscroll")}),$(".fincarclose").click(function(){$("html").removeClass("noscroll")})}),$(window).resize(function(){var n;($(window).width()<730||$(window).height()<1030)&&(window.onscroll=function(){window.pageYOffset>=n?document.getElementById("hidesortfiltab").style.display="none ":document.getElementById("hidesortfiltab").style.display="flex "},n=document.getElementById("hidfilter").offsetTop)});var modalsup=document.getElementById("mbsuploc"),span=(bttn=document.getElementById("mbsuploctop"),document.getElementsByClassName("clss")[0]);bttn.onclick=function(){modalsup.style.display="block",modalsup.classList.add("in")},span.onclick=function(){modalsup.style.display="none",modalsup.classList.remove("in")},window.onclick=function(n){n.target==modalsup&&(modalsup.style.display="none",modalsup.classList.remove("in"))},$(document).ready(function(){$("#mbsuploctop").click(function(){$("html, body").addClass("overflow-hidden")}),$(".clss").click(function(){$("html, body").removeClass("overflow-hidden")}),$(".modal").click(function(){$("html, body").removeClass("overflow-hidden")})});
    </script>

</html>
