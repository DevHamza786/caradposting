@extends('home.layouts.app')
@section('content')
    <div class="container">
        <div class="roww rivcol">
            <div class="col-md-3">
                <!-- COMPANY TAB -->
                <div class="mdl mdl-only-mob hidden " id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                    aria-hidden="true">
                    <div class="mdlhd only-mob">
                        <div class="alb m-0 filhd">
                            <div class="text-orange"> <button type="button" class="cls" data-dismiss="modal"
                                    aria-hidden="true"><span class="fa fa-chevron-left only-mob"> × </span></button> Filters
                            </div>
                        </div>
                    </div>
                    <div class="mdldilg">
                        <div class="mdlcnt">
                            <div class="mdbdy">
                                <input type="hidden" name="lease_page" id="lease_page" value="">
                                <input type="hidden" name="seodetails" id="seodetails" value="1"> <input
                                    type="hidden" name="search_redirect_url" id="search_redirect_url"
                                    value="rent-cheap-economy-cars-dubai"> <input type="hidden" width="250px"
                                    name="seoparameters" id="seoparameters"
                                    value="{&quot;order&quot;:&quot;featured&quot;,&quot;emirate&quot;:&quot;Dubai&quot;,&quot;group[]&quot;:&quot;28&quot;}">
                                <input type="hidden" width="250px" name="seoparameters_group" id="seoparameters_group"
                                    value="28">

                                <div class="showForMobile">
                                    <form id="search_form" method="get">
                                        <input type="hidden" value="" name="client_id"> <input type="hidden"
                                            value="" name="monthly"> <input type="hidden" value="featured"
                                            name="order">
                                        <aside id="scrollfilterby" class="bukfils p-0 bg-white">
                                            <ul class="desktop list bukfillst aconfil" id="aconfil">
                                                <li id="main_verified">
                                                    <div class="checkbox checkbox-small mnvery disply-block  m-b-20"> <span
                                                            class="round"> <input name="verified_listing"
                                                                id="verified_listing" class="i-check verifyy"
                                                                type="checkbox" value="1"> <label
                                                                for="verified_listing"></label> </span><span
                                                            class="m-l-30"><img loading="lazy" width="30" height="17"
                                                                src="https://www.oneclickdrive.com/application/views/images/logo-icon.png?v=1"
                                                                alt="OCD Logo"
                                                                title="UAE's no. 1 car rental &amp; leasing marketplace"
                                                                class="ocd-latestlogo"></span>
                                                        <span class="f-13 verycartext">Verified Cars</span>
                                                        <span
                                                            style="display:none;float:right;margin-top:5px;margin-right:5%;"
                                                            id="search_z"><button class="updatebttn bttn bttn-primary"
                                                                type="submit">Update</button></span>
                                                    </div>
                                                </li>
                                                <li id="maindiv_open_now">
                                                    <div class="checkbox checkbox-small mnvery disply-block p-t-15 m-b-20">
                                                        <span class="round"> <input class="i-check" name="open_now"
                                                                id="open_now" value="1" type="checkbox"> <label
                                                                for="open_now"></label> </span><span
                                                            class="f-13 verycartext m-l-30"
                                                            title="Filter search results as per your requirement">Open
                                                            Now</span>
                                                        <span style="display:none;float:right;margin-top:-15%;"
                                                            id="search_z1"><button class="updatebttn bttn bttn-primary"
                                                                type="submit">Update</button></span>
                                                    </div>
                                                </li>
                                                <li class="">
                                                    <h5 class="bukfiltitle arrow clsd"> <label title="Filter as per your location but know that most of our suppliers deliver the car to your location within the emirate"><span>Location</span></label> </h5>
                                                    <div class="dnone submnu" style="display: block;">
                                                    <input type="hidden" name="emirate" id="emirate" value="Dubai">
                            <div class="searchable_emirate">
                                         <input type="text" value="Dubai" id="emirate2" autocomplete="off" name="emirate2" placeholder="Select City" onclick="this.select();" onchange="checkTextField(this);" onkeydown="filterFunction2(this,event)">
                        <ul id="desktop_emirate">
                        <li class="dd_country">&nbsp;&nbsp;United Arab Emirates</li>
                        <li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Abu Dhabi</li>
                        <li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ajman</li>

                        </ul></div><span id="show_before2"><label title="Select your location within the selected emirate">Area</label><select class="fomcntrl" name="branches" onchange="return show_pop('x')" id="branches">  <option value="" selected="selected">Select Location</option>
                                                                                                                                            <option value="Abu Hail">Abu Hail  </option>
                                                                                                                                                <option value="Al Awir">Al Awir  </option>
                                                                                                                                                <option value="Al Barsha">Al Barsha  </option>
                                                                                                                                                <option value="Al Barsha 1">Al Barsha 1  </option>
                                                                                                                                                <option value="Al Estiqlal St">Al Estiqlal St  </option>
                                                                                                                                                <option value="Al Garhoud">Al Garhoud  </option>
                                                                                                                                                <option value="Al Jaddaf">Al Jaddaf  </option>

                                                         </select>
                                                        <span style="float:right;display:none;margin-top:5px;" id="search_x" class="ocd_searchupt"><button class="updatebttn bttn bttn-primary" type="submit">Update</button></span>
                                                        </span>
                                            <span id="show_heading2" style="border-top:1px;display:none;"> <label title="Select your location within the selected emirate">Area</label>  <div id="show_sub_categories2" style="color:black">
                                                    <img src="https://www.oneclickdrive.com/loader.gif" style="margin-top:8px; float:left" id="loader" loading="lazy" alt="loading.." title="loading">
                                                </div>
                                                <span style="" class="ocd_searchupt" id="search_b"><button class="updatebttn bttn bttn-primary" type="submit">Update</button></span>
                                            </span>                                      </div>
                                                </li>
                                                <li>
                                                    <h5 class="bukfiltitle arrow clsd"> <label
                                                            title="Have a car in mind? Select it and see offers accordingly">Car
                                                            Brand / Model</label> </h5>
                                                    <div class="submnu" style="display:none;">
                                                        <div> <input type="hidden" id="language" value="english">
                                                            <input type="hidden" id="css" value=""> <label
                                                                title="">Car Brand</label> <span id="show_before4">
                                                                <select class="fomcntrl" name="carmake" id="carmake">
                                                                    <option value="0">Select Car Make</option>
                                                                    <option value="15">Chevrolet (64)</option>
                                                                    <option value="92">Citroen (4)</option>

                                                                </select> <span
                                                                    style="float:right;display:none;margin-top:5px;"
                                                                    id="search_d" class=""><button
                                                                        class="updatebttn bttn bttn-primary"
                                                                        type="submit">Update</button></span>
                                                            </span> <span id="show_heading4"
                                                                style="border-top:1px;display:none;">
                                                                <div>
                                                                    <span id="show_sub_categories4">
                                                                    </span>
                                                                    <span style="float:right;display:none;margin-top:10px;"
                                                                        id="search_m" class=""><button
                                                                            class="updatebttn bttn bttn-primary"
                                                                            type="submit">Update</button></span>
                                                                </div>
                                                            </span>
                                                        </div>
                                                        <div class="m-t-20 m-b-10"> <span id="show_before"> <label
                                                                    title="">Car Model</label>
                                                                <select class="fomcntrl" disabled="disabled">
                                                                    <option value="+">Select brand first</option>
                                                                </select> </span>
                                                            <span id="show_heading" class="bodrdis"> <label
                                                                    title="">Car Model</label>
                                                                <div id="show_sub_categories" style="color:black">
                                                                    <img src="https://www.oneclickdrive.com/loader.gif"
                                                                        style="margin-top:8px; float:left" id="loader2"
                                                                        alt="loading.." title="loading">
                                                                </div>
                                                                <span id="search_e" class="ocd_searchupt"><button
                                                                        class="updatebttn bttn bttn-primary"
                                                                        type="submit">Update</button></span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li id="show_before5">
                                                    <h5 class="bukfiltitle arrow clsd"> <label
                                                            title="Have a model year preference? Select it and see offers accordingly">Model
                                                            Year</label> </h5>
                                                    <div class="submnu"> <select class="fomcntrl" name="year"
                                                            id="year" onchange="show_year_data(this.value);">
                                                            <option value="">Select</option>

                                                            <option value="2024">2024</option>

                                                            <option value="2023">2023</option>


                                                        </select> <span style="display:none;" id="search_l"
                                                            class="ocd_searchupt"><button
                                                                class="updatebttn bttn bttn-primary"
                                                                type="submit">Update</button></span>
                                                    </div>
                                                </li>
                                                <li id="show_heading5" style="display:none;">
                                                    <h5 class="bukfiltitle arrow clsd"> <label
                                                            title="Have a model year preference? Select it and see offers accordingly">Model
                                                            Year</label> </h5>
                                                    <div class="submnu"> <span id="show_sub_categories5"
                                                            style="color:black">
                                                            <img src="https://www.oneclickdrive.com/loader.gif"
                                                                style="margin-top:8px; float:left" id="loader5"
                                                                alt="loading.." title="loading">
                                                        </span>
                                                        <span style="" id="search_q" class="ocd_searchupt"><button
                                                                class="updatebttn bttn bttn-primary"
                                                                type="submit">Update</button></span>
                                                    </div>
                                                </li>
                                                <li id="show_before7">
                                                    <h5 class="bukfiltitle arrow clsd"> <label
                                                            title="Filter cars based on your requirement">No. of
                                                            Seats</label> </h5>
                                                    <div class="submnu">

                                                        <div class="checkbox">
                                                            <div class="round"> <input class="i-check pass_check"
                                                                    name="pass[]" type="checkbox" value="3,4,5"
                                                                    id="checkbox1-0"> <label for="checkbox1-0"
                                                                    class="iCheck-helper"> </label> </div> <span
                                                                class="f-12 m-t-4 pull-left">4-5 Seats (611)</span>
                                                        </div>
                                                        <div class="checkbox">
                                                            <div class="round"> <input class="i-check pass_check"
                                                                    name="pass[]" type="checkbox" value="6,7"
                                                                    id="checkbox1-1"> <label for="checkbox1-1"
                                                                    class="iCheck-helper"> </label> </div> <span
                                                                class="f-12 m-t-4 pull-left">6-7 Seats (94)</span>
                                                            <span id="search_g" style="float:right;display:none;"
                                                                class="ocd_searchupt"><button
                                                                    class="updatebttn bttn bttn-primary"
                                                                    type="submit">Update</button></span>
                                                        </div>
                                                        <div class="checkbox">
                                                            <div class="round"> <input class="i-check pass_check"
                                                                    name="pass[]" type="checkbox" value="8"
                                                                    id="checkbox1-2"> <label for="checkbox1-2"
                                                                    class="iCheck-helper"> </label> </div> <span
                                                                class="f-12 m-t-4 pull-left">8-12 Seats (9)</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li id="show_heading7" style="display:none;">
                                                    <h5 class="bukfiltitle arrow clsd"> <label
                                                            title="Filter cars based on your requirement">No. of
                                                            Seats</label> </h5>
                                                    <div class="submnu"><span id="show_sub_categories7"
                                                            style="color:black">
                                                            <img src="https://www.oneclickdrive.com/loader.gif"
                                                                style="margin-top:8px; float:left" id="loader7"
                                                                alt="loading.." title="loading">
                                                        </span></div>
                                                </li>
                                                <li id="show_before8">
                                                    <h5 class="bukfiltitle arrow clsd"> <label
                                                            title="Great! You know your car rental requirement">Vehicle
                                                            Type</label> </h5>
                                                    <div class="dnone submnu" ">


                <div class="checkbox">
                <div class="round"> <input name="group[]" class="i-check Check_type" type="checkbox" value="11" id="checkbox1type-18"> <label for="checkbox1type-18" class="iCheck-helper" title="Light-duty truck with an enclosed cab and open cargo area"> </label> </div> <span class="f-12 m-t-4 pull-left" title="Light-duty truck with an enclosed cab and open cargo area">  Pickup Truck (4) </span>  </div>

                <div class="checkbox">
                <div class="round"> <input name="group[]" class="i-check Check_type" type="checkbox" value="3" id="checkbox1type-19"> <label for="checkbox1type-19" class="iCheck-helper" title="Available for private and corporate leasing"> </label> </div> <span class="f-12 m-t-4 pull-left" title="Available for private and corporate leasing">  Bus (2) </span>  </div>

                </div>
                </li>
                <li id="show_heading8" style="display:none;">
                    <h5 class="bukfiltitle arrow clsd"> <label title="Great! You know your car rental requirement"> Vehicle Type </label> </h5>
                    <div class="dnone submnu"><span id="show_sub_categories8" style="color:black">
            <img src="https://www.oneclickdrive.com/loader.gif" style="margin-top:8px; float:left" id="loader8" alt="loading.." title="loading">
            </span></div>
                </li>

                <li>
                    <h5 class="bukfiltitle arrow clsd"> <label title="Great! You have a budget in mind">Price Range</label> </h5>
                    <div class="submnu">
                        <div class="aedpr">
                                            <div class="wpb_column column_cantenar col-md-12 p-l-0 p-r-0"> <label>Max Day Budget</label>
                                <div class="vc_column-inner wpb_wrapper">
                                    <div class="input-group"> <span>AED</span> <input type="number" value="" min="50" onkeypress="return isNumber(event)" onclick="return show_pop('s')" id="day_price_filter" name="day-budget" class="fomcntrl ui-autocomplete-input" title="Minimum AED 50 / day" placeholder="200" spellcheck="false" dir="auto" autocomplete="off"> </div>
                                </div>
                            </div>
                            <div class="wpb_column column_cantenar col-md-12 p-l-0 p-r-0"> <label>Max Monthly Budget</label>
                                <div class="vc_column-inner wpb_wrapper">
                                <div class="input-group"> <span>AED</span> <input type="number" value="" min="1300" onkeypress="return isNumber(event)" onclick="return show_pop('s')" id="month_price_filter" name="month-budget" class="fomcntrl ui-autocomplete-input" title="Minimum AED 1300 / month" placeholder="3000" spellcheck="false" dir="auto" autocomplete="off"> </div>
                                </div>
                            </div>                    <span style="display:none;margin-top:4%;" id="reset_filter" class="col-md-6"><a style="    border-bottom: 1px solid orange;" href="javascript:void(0);">Reset</a></span>
                                    <span id="search_s" style="" class="ocd_searchupt"><button style="" class="updatebttn bttn bttn-primary" type="submit">Update</button></span>

                        </div>
                    </div>
                </li>
                        <li id="show_before6">
                    <h5 class="bukfiltitle arrow clsd"> <label title="Select your rental period!">Rental Period</label> </h5>
                    <div class="submnu">
                        <div class="wpb_column column_cantenar col-md-12 p-l-0 p-r-0"> <label><i>Monthly’s are most discounted</i></label>
                            <div class="vc_column-inner wpb_wrapper">

                                                <select class="fomcntrl" onchange="return show_data_byperiod(this.value);" id="min_days_booking" name="min_days_booking">
                                <option value="0">Select rental period</option>

                                    <option value="1">1 day</option>

                                    <option value="2">2 day</option>

                                <option value="7">7+ days</option>
                                <option value="30">Monthly</option>
                            </select>

                             </div>
                            <span id="search_k" style="" class=" ocd_searchupt"><button style="" class="updatebttn bttn bttn-primary" type="submit">Update</button></span>    </div>
                    </div>
                </li>









            </ul>
            <input type="hidden" name="filter" value="1">
            </aside>

            </form></div>
            </div>
            </div>
            </div>


                      </div>
    </div>

<div class="col-md-9">

    <div class="g-4 col-lg-6 col-md-6 col-12">
        <div class="border border-secondary h-100 rounded overflow-hidden">
            <div class="position-relative">
                <img src="/public/adpost/images/c7.jpg" class="w-100 border-bottom border-secondary"
                    style="aspect-ratio: 1.5 / 1; cursor: pointer; object-fit: cover; object-position: center center;">
                <div class="car-time-and-price d-flex"></div>
            </div>
            <div class="p-3">
                <div class="car-bid-shareMark d-flex align-items-center justify-content-between">
                    <div class="car-shareMark"><button type="button" class="text-light btn btn-link"><i
                                class="fa-solid fa-share-nodes"></i></button><button type="button"
                            class="text-light btn btn-link"><i class="fa-regular fa-bookmark"></i></button>
                    </div>
                    <div class="m-0 p-0 priz-mn sldpric roww justbet text-black">
                        <div class="price_style p-0 m-b-10">
                            <s class="d-block cutpr"></s><span class="text-orange f-16"> AED 170</span><span
                                class="currency_style f-12 font-reg m-t-5"> / day</span>
                            <div class="mileage_style f-13">250 km</div>
                        </div>
                        <div class="price_style p-0 m-b-10">
                            <s class="d-block cutpr">AED 3300</s><span class="text-orange f-16">AED
                                3000</span><span class="currency_style f-13 font-reg m-t-5"> / mo.</span>
                            <div class="mileage_style f-13">4500 km</div>
                        </div>
                    </div>
                </div>
                <a class="car-title-link" href="/car/range-rover-1235">
                    <h5 class="auction-card-title fw-bold text-uppercase pt-3" style="color: white;">Range
                        Rover</h5>
                </a>
                <p class="text-muted">First Edition P530 | 2022</p>
                <div class="d-flex align-items-center">
                    <div class="text-muted d-flex align-items-center"><img
                            src="https://www.oneclickdrive.com/application/views/img/company/luxurysupercar-rental1.png"
                            alt="" class="me-1l"></div>
                    <div class="text-muted d-flex align-items-center"><img src="https://flagcdn.com/sa.svg"
                            alt="" class="me-1" style="width: 20px; height: 15px;"><span
                            class="text-capitalize">saudi arabia</span></div>
                </div>
            </div>


        </div>
    </div>
    <div class="g-4 col-lg-6 col-md-6 col-12">
        <div class="border border-secondary h-100 rounded overflow-hidden">
            <div class="position-relative">
                <img src="/public/adpost/images/b1.jpg" class="w-100 border-bottom border-secondary"
                    style="aspect-ratio: 1.5 / 1; cursor: pointer; object-fit: cover; object-position: center center;">
                <div class="car-time-and-price d-flex"></div>
            </div>
            <div class="p-3">
                <div class="car-bid-shareMark d-flex align-items-center justify-content-between">
                    <div class="car-shareMark"><button type="button" class="text-light btn btn-link"><i
                                class="fa-solid fa-share-nodes"></i></button><button type="button"
                            class="text-light btn btn-link"><i class="fa-regular fa-bookmark"></i></button>
                    </div>
                    <div class="m-0 p-0 priz-mn sldpric roww justbet text-black">
                        <div class="price_style p-0 m-b-10">
                            <s class="d-block cutpr"></s><span class="text-orange f-16"> AED 170</span><span
                                class="currency_style f-12 font-reg m-t-5"> / day</span>
                            <div class="mileage_style f-13">250 km</div>
                        </div>
                        <div class="price_style p-0 m-b-10">
                            <s class="d-block cutpr">AED 3300</s><span class="text-orange f-16">AED
                                3000</span><span class="currency_style f-13 font-reg m-t-5"> / mo.</span>
                            <div class="mileage_style f-13">4500 km</div>
                        </div>
                    </div>
                </div>
                <a class="car-title-link" href="/car/range-rover-1235">
                    <h5 class="auction-card-title fw-bold text-uppercase pt-3" style="color: white;">Range
                        Rover</h5>
                </a>
                <p class="text-muted">First Edition P530 | 2022</p>
                <div class="d-flex align-items-center">
                    <div class="text-muted d-flex align-items-center"><img
                            src="https://www.oneclickdrive.com/application/views/img/company/luxurysupercar-rental1.png"
                            alt="" class="me-1l"></div>
                    <div class="text-muted d-flex align-items-center"><img src="https://flagcdn.com/sa.svg"
                            alt="" class="me-1" style="width: 20px; height: 15px;"><span
                            class="text-capitalize">saudi arabia</span></div>
                </div>
            </div>


        </div>
    </div>
    <div class="g-4 col-lg-6 col-md-6 col-12">
        <div class="border border-secondary h-100 rounded overflow-hidden">
            <div class="position-relative">
                <img src="/public/adpost/images/y1.jpg" class="w-100 border-bottom border-secondary"
                    style="aspect-ratio: 1.5 / 1; cursor: pointer; object-fit: cover; object-position: center center;">
                <div class="car-time-and-price d-flex"></div>
            </div>
            <div class="p-3">
                <div class="car-bid-shareMark d-flex align-items-center justify-content-between">
                    <div class="car-shareMark"><button type="button" class="text-light btn btn-link"><i
                                class="fa-solid fa-share-nodes"></i></button><button type="button"
                            class="text-light btn btn-link"><i class="fa-regular fa-bookmark"></i></button>
                    </div>
                    <div class="m-0 p-0 priz-mn sldpric roww justbet text-black">
                        <div class="price_style p-0 m-b-10">
                            <s class="d-block cutpr"></s><span class="text-orange f-16"> AED 170</span><span
                                class="currency_style f-12 font-reg m-t-5"> / day</span>
                            <div class="mileage_style f-13">250 km</div>
                        </div>
                        <div class="price_style p-0 m-b-10">
                            <s class="d-block cutpr">AED 3300</s><span class="text-orange f-16">AED
                                3000</span><span class="currency_style f-13 font-reg m-t-5"> / mo.</span>
                            <div class="mileage_style f-13">4500 km</div>
                        </div>
                    </div>
                </div>
                <a class="car-title-link" href="/car/range-rover-1235">
                    <h5 class="auction-card-title fw-bold text-uppercase pt-3" style="color: white;">Range
                        Rover</h5>
                </a>
                <p class="text-muted">First Edition P530 | 2022</p>
                <div class="d-flex align-items-center">
                    <div class="text-muted d-flex align-items-center"><img
                            src="https://www.oneclickdrive.com/application/views/img/company/luxurysupercar-rental1.png"
                            alt="" class="me-1l"></div>
                    <div class="text-muted d-flex align-items-center"><img src="https://flagcdn.com/sa.svg"
                            alt="" class="me-1" style="width: 20px; height: 15px;"><span
                            class="text-capitalize">saudi arabia</span></div>
                </div>
            </div>


        </div>
    </div>
</div>
                {{-- <div class="bg-black" style="min-height: 100vh;">
                <div class="py-4 container">
                    <div class="row">
                        <div class="col-md-6 col-xs-6">
                            <h2 class="al-cars">{{ ucwords(request()->type) }}</h2>
                        </div>

                    </div>
                    <div class="row">



                        @foreach ($users as $key => $d)
                        <div class="g-4 col-lg-3 col-md-6 col-12">
                            <div class="border border-secondary h-100 rounded overflow-hidden">
                                <div class="position-relative">
                                    <img src="{{ asset('public/adpost/features/image/' . $d->feature_image) }}"
                                        class="w-100 border-bottom border-secondary"
                                        style="aspect-ratio: 1.5 / 1; cursor: pointer; object-fit: cover; object-position: center center;">
                                    <div class="car-time-and-price d-flex"></div>
                                </div>
                                <div class="p-3">
                                    <div class="car-bid-shareMark d-flex align-items-center justify-content-between">
                                        <div class="car-shareMark"><button type="button"
                                                class="text-light btn btn-link"><i
                                                    class="fa-solid fa-share-nodes"></i></button><button type="button"
                                                class="text-light btn btn-link"><i
                                                    class="fa-regular fa-bookmark"></i></button></div>
                                        <div class="px-1 text-uppercase rounded" style="background: #dd5645;">
                                            <span>AED {{ $d->price }}</span>
                                        </div>
                                    </div>
                                    <a class="car-title-link" href="cars.html">
                                        <h5 class="auction-card-title fw-bold text-uppercase pt-3"
                                            style="color: white;">{{ $d->title }}</h5>
                                    </a>
                                    <p class="text-muted">{{ $d->description }}</p>

                                    <div class="d-flex align-items-center lo lof">
                                        <div class="text-muted d-flex align-items-center"><img
                                                src="{{ asset('public/company/logo/' . $d->company_logo) }}" alt=""
                                                class="me-1" style="width: 100px; height: 40px;"></div>
                                    </div>
                                    <div class="d-flex align-items-center lo">
                                        <div class="text-muted d-flex align-items-center"><img
                                                src="https://flagcdn.com/ae.svg" alt="" class="me-1"
                                                style="width: 20px; height: 15px;"><span
                                                class="text-capitalize">UAE</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>

                </div>
            </div> --}}




            </div>
        </div>
     </div>
@endsection
