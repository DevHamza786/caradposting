@extends('home.layouts.app')
@section('content')
    <section class="banner">
        <div class="container">
            <div class="MuiGrid-root MuiGrid-container MuiGrid-item MuiGrid-direction-xs-column MuiGrid-grid-xs-12 css-rjsjy0"
                style="background-size:cover;min-height:257px;border-radius:6px">
                <h1 class="MuiTypography-root MuiTypography-h5 css-1px8evw" data-testid="hero-title">The best place to rent
                    your car, motorbike and yatch in Dubai</h1>
                <div class="MuiBox-root css-1sido8c">
                    <div class="MuiBox-root css-70qvj9">


                    </div>
                    <div class="MuiGrid-root MuiGrid-container css-kcr3a5">
                        <div class="MuiGrid-root MuiGrid-item MuiGrid-grid-xs-12 MuiGrid-grid-md-10 css-1kijih2">
                            <form>
                                <div class="MuiAutocomplete-root MuiAutocomplete-hasPopupIcon css-id14lt">
                                    <div class="MuiBox-root css-0">
                                        <div class="MuiFormControl-root MuiFormControl-fullWidth MuiTextField-root css-ocy3q4"
                                            data-testid="search-input">
                                            <div style="padding-left:16px;padding-right:16px"
                                                class="MuiInputBase-root MuiOutlinedInput-root MuiInputBase-colorPrimary MuiInputBase-fullWidth MuiInputBase-formControl MuiInputBase-adornedEnd MuiAutocomplete-inputRoot css-18vx6wv">
                                                <input aria-invalid="false" autocomplete="off" id=":R9la6n4d6:"
                                                    placeholder="Search for anything" type="text"
                                                    class="MuiInputBase-input MuiOutlinedInput-input MuiInputBase-inputAdornedEnd MuiAutocomplete-input MuiAutocomplete-inputFocused css-1bjlmdj"
                                                    aria-autocomplete="list" aria-expanded="false" autocapitalize="none"
                                                    spellcheck="false" role="combobox" value=""><img
                                                    class="MuiBox-root css-19rsff" alt="Search"
                                                    src="https://dbzproperty-a.akamaihd.net/frontend-web/listings/assets/homepage/search.svg">
                                                <fieldset aria-hidden="true"
                                                    class="MuiOutlinedInput-notchedOutline css-igs3ac">
                                                    <legend class="css-hdw1oc"><span
                                                            class="notranslate">&ZeroWidthSpace;</span></legend>
                                                </fieldset>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="MuiGrid-root MuiGrid-item MuiGrid-grid-xs-2 MuiGrid-grid-md-2 css-11w2184"><button
                                class="MuiButtonBase-root MuiButton-root MuiButton-contained MuiButton-containedPrimary MuiButton-sizeMedium MuiButton-containedSizeMedium MuiButton-fullWidth css-nzmd8g"
                                tabindex="0" type="button" data-testid="search-button">Search</button></div>
                    </div>
                </div>
            </div>



        </div>
    </section>

    <section class="carss">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2 class="main-h2">Featured By Sayjar</h2>
                </div>

                <div class="col-md-6">
                    <div class="view">
                        <a href="#">View All</a>
                    </div>
                </div>




            </div>
            <div class="row">
                <div class="g-4 col-lg-3 col-md-6 col-12">
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
                <div class="g-4 col-lg-3 col-md-6 col-12">
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
                <div class="g-4 col-lg-3 col-md-6 col-12">
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
                <div class="g-4 col-lg-3 col-md-6 col-12">
                    <div class="border border-secondary h-100 rounded overflow-hidden">
                        <div class="position-relative">
                            <img src="/public/adpost/images/t1.jpg" class="w-100 border-bottom border-secondary"
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

    </section>


    <section class="carss">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2 class="main-h2">Latest Car Rental Offers in Dubai</h2>
                </div>

                <div class="col-md-6">
                    <div class="view">
                        <a href="#">View All</a>
                    </div>
                </div>


                <p class="para">Choose among cars with in-demand driving features and high mileage, and rent a car at the
                    best price. Exclusive car rental discounts, updated seasonally!</p>

            </div>
            <div class="row">
                <div class="g-4 col-lg-3 col-md-6 col-12">
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
                <div class="g-4 col-lg-3 col-md-6 col-12">
                    <div class="border border-secondary h-100 rounded overflow-hidden">
                        <div class="position-relative">
                            <img src="/public/adpost/images/car1.jpeg" class="w-100 border-bottom border-secondary"
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
                <div class="g-4 col-lg-3 col-md-6 col-12">
                    <div class="border border-secondary h-100 rounded overflow-hidden">
                        <div class="position-relative">
                            <img src="/public/adpost/images/car1.jpeg" class="w-100 border-bottom border-secondary"
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
                <div class="g-4 col-lg-3 col-md-6 col-12">
                    <div class="border border-secondary h-100 rounded overflow-hidden">
                        <div class="position-relative">
                            <img src="/public/adpost/images/car2.jpeg" class="w-100 border-bottom border-secondary"
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

    </section>



    <section class="carss">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2 class="main-h2">Latest Bikes Rental Offers in Dubai</h2>
                </div>

                <div class="col-md-6">
                    <div class="view">
                        <a href="#">View All</a>
                    </div>
                </div>


                <p class="para">Choose among Bikes with in-demand driving features and high mileage, and rent a Bikes at
                    the best price. Exclusive Bikes rental discounts, updated seasonally!</p>

            </div>
            <div class="row">
                <div class="g-4 col-lg-3 col-md-6 col-12">
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
                <div class="g-4 col-lg-3 col-md-6 col-12">
                    <div class="border border-secondary h-100 rounded overflow-hidden">
                        <div class="position-relative">
                            <img src="/public/adpost/images/b2.jpg" class="w-100 border-bottom border-secondary"
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
                <div class="g-4 col-lg-3 col-md-6 col-12">
                    <div class="border border-secondary h-100 rounded overflow-hidden">
                        <div class="position-relative">
                            <img src="/public/adpost/images/b3.png" class="w-100 border-bottom border-secondary"
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
                <div class="g-4 col-lg-3 col-md-6 col-12">
                    <div class="border border-secondary h-100 rounded overflow-hidden">
                        <div class="position-relative">
                            <img src="/public/adpost/images/b4.jpg" class="w-100 border-bottom border-secondary"
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

    </section>


    <section class="carss">

        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2 class="main-h2">Latest Yacht/Ships Rental Offers in Dubai</h2>
                </div>

                <div class="col-md-6">
                    <div class="view">
                        <a href="#">View All</a>
                    </div>
                </div>


                <p class="para">Choose among Yacht/Ships with in-demand driving features and high mileage, and rent a
                    Yacth/Ships at the best price. Exclusive Yacth/Ships rental discounts, updated seasonally!</p>

            </div>
            <div class="row">
                <div class="g-4 col-lg-3 col-md-6 col-12">
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
                <div class="g-4 col-lg-3 col-md-6 col-12">
                    <div class="border border-secondary h-100 rounded overflow-hidden">
                        <div class="position-relative">
                            <img src="/public/adpost/images/y2.jpg" class="w-100 border-bottom border-secondary"
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
                <div class="g-4 col-lg-3 col-md-6 col-12">
                    <div class="border border-secondary h-100 rounded overflow-hidden">
                        <div class="position-relative">
                            <img src="/public/adpost/images/y3.jpg" class="w-100 border-bottom border-secondary"
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
                <div class="g-4 col-lg-3 col-md-6 col-12">
                    <div class="border border-secondary h-100 rounded overflow-hidden">
                        <div class="position-relative">
                            <img src="/public/adpost/images/y4.jpg" class="w-100 border-bottom border-secondary"
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

    </section>





    <section class="carss">

        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2 class="main-h2">Latest Trucks Rental Offers in Dubai</h2>
                </div>

                <div class="col-md-6">
                    <div class="view">
                        <a href="#">View All</a>
                    </div>
                </div>


                <p class="para">Choose among Trucks with in-demand driving features and high mileage, and rent a Trucks
                    at the best price. Exclusive Trucks rental discounts, updated seasonally!</p>

            </div>
            <div class="row">
                <div class="g-4 col-lg-3 col-md-6 col-12">
                    <div class="border border-secondary h-100 rounded overflow-hidden">
                        <div class="position-relative">
                            <img src="/public/adpost/images/t1.jpg" class="w-100 border-bottom border-secondary"
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
                <div class="g-4 col-lg-3 col-md-6 col-12">
                    <div class="border border-secondary h-100 rounded overflow-hidden">
                        <div class="position-relative">
                            <img src="/public/adpost/images/t2.jpg" class="w-100 border-bottom border-secondary"
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
                <div class="g-4 col-lg-3 col-md-6 col-12">
                    <div class="border border-secondary h-100 rounded overflow-hidden">
                        <div class="position-relative">
                            <img src="/public/adpost/images/t3.jpg" class="w-100 border-bottom border-secondary"
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
                <div class="g-4 col-lg-3 col-md-6 col-12">
                    <div class="border border-secondary h-100 rounded overflow-hidden">
                        <div class="position-relative">
                            <img src="/public/adpost/images/t4.jpg" class="w-100 border-bottom border-secondary"
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

    </section>
@endsection
