@extends('home.layouts.app')
@section('content')
    <div class="container">
        <div class="roww rivcol">
            <div class="col-md-12">
                <div class="filter-container">
                    <ul>
                        <li>
                            <h3 class="filter-heading">City</h3>
                            <select class="filter-select" id="cityFilter">
                                <option value="karachi">Karachi</option>
                                <option value="lahore">Lahore</option>
                            </select>
                        </li>
                        <li>
                            <h3 class="filter-heading">Make</h3>
                            <select class="filter-select" id="makeFilter">
                                <option value="suzuki">Suzuki</option>
                                <option value="honda">Honda</option>
                            </select>
                        </li>
                        <li>
                            <h3 class="filter-heading">Category</h3>
                            <select class="filter-select" id="categoryFilter">
                                <option value="sports car">Sports Car</option>
                                <option value="rangrover">Range Rover</option>
                            </select>
                        </li>
                        <li>
                            <h3 class="filter-heading">Price Range (OMR)</h3>
                            <div>
                                <input type="number" placeholder="Min Price" id="minPrice">
                                <input type="number" placeholder="Max Price" id="maxPrice">
                            </div>
                        </li>
                        <li>
                            <button class="filter-button" id="applyFilterButton">Apply Filter</button>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-md-12">

                <div class="g-4 col-lg-6 col-md-6 col-12">
                    <div class="border border-secondary h-100 rounded overflow-hidden">
                        <div class="position-relative">
                            <img src="/adpost/images/c7.jpg" class="w-100 border-bottom border-secondary"
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
                            <img src="/adpost/images/b1.jpg" class="w-100 border-bottom border-secondary"
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
                            <img src="/adpost/images/y1.jpg" class="w-100 border-bottom border-secondary"
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
    <script>
        $(document).ready(function() {
            // Define the applyFilter function
            function applyFilter() {
                // Get selected filter values using jQuery
                const city = $("#cityFilter").val();
                const make = $("#makeFilter").val();
                const category = $("#categoryFilter").val();
                const minPrice = $("#minPrice").val();
                const maxPrice = $("#maxPrice").val();

                // You can perform filtering logic here based on the selected values
                // For demonstration purposes, let's just log the selected values
                console.log("Selected City:", city);
                console.log("Selected Make:", make);
                console.log("Selected Category:", category);
                console.log("Min Price:", minPrice);
                console.log("Max Price:", maxPrice);
            }

            // Attach a click event handler to the "Apply Filter" button
            $("#applyFilterButton").click(applyFilter);
        });
    </script>
@endsection
