@extends("frontend.layouts.app")

@section("title")
    {{ app_name() }}
@endsection


@section("content")

    <!-- details-area-start -->
    <div class="tp-project__details-area pt-120 pb-120">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="tp-project__details-wrapper">
                        <div class="tp-project__details-thumb mb-55">
                            <img class="w-100" src="/assets/img/service/business-banner.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-xl-8 col-lg-8">
                    <div class="tp-project__details-content-box">
                        <div class="tp-project__details-content mb-65">
                            <h5 class="tp-project__details-title">Business Stationary</h5>
                            <p>
                                We offer a very comprehensive spot and full colour print service, printing; letterheads, compliment slips, leaflets, business cards, business packs, tickets/function cards, duplicate invoice sets, labels, envelopes, booklets, brochures and draw tickets to name just a few.
                                <br/><br/>
                                Most of our work is produced on a free artwork basis, so whether you provide the artwork or you would like our designer to compose the artwork for you there will be no extra costs.
                            </p>
                        </div>
                        
                    </div>
                </div>
                
                @include("frontend.includes.sidebar")

                <div class="col-xl-12 col-lg-12">
                    <div class="tp-project__details-slider">
                        <h5 class="tp-project__details-title pb-15">Related Work</h5>
                        <div class="tp-project__wrapper p-relative">
                            <div class="swiper-container tp-project__details-active">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="tp-project__item">
                                            <div class="tp-project__thumb p-relative">
                                                <img class="w-100" src="/assets/img/service/business-01.png" alt="">
                                                <div class="tp-project__shape">
                                                    <img  src="/assets/img/team/shape-1-1.png" alt="">
                                                </div>
                                            </div>
                                   
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="tp-project__item">
                                            <div class="tp-project__thumb p-relative">
                                                <img class="w-100" src="/assets/img/service/business-02.png" alt="">
                                                <div class="tp-project__shape">
                                                    <img  src="/assets/img/team/shape-1-1.png" alt="">
                                                </div>
                                            </div>
                                    
                                        </div>
                                    </div>
                    
                                </div>
                            </div>
                            <div class="tp-project__details-arrow-box">
                                <div class="slider-next">
                                    <button>
                                        <svg width="20" height="13" viewBox="0 0 20 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M18.7412 5.59976L13.093 0.252091C13.0141 0.175506 12.9179 0.114293 12.8107 0.0723807C12.7034 0.0304685 12.5874 0.00878155 12.4701 0.00869966C12.3528 0.00861777 12.2368 0.0301427 12.1295 0.0719051C12.0222 0.113667 11.9259 0.174747 11.8469 0.251221C11.6808 0.412803 11.5887 0.623101 11.5886 0.841249C11.5884 1.0594 11.6802 1.26981 11.8461 1.43163L15.9877 5.35164L0.88579 5.3411C0.646493 5.35626 0.422587 5.45076 0.25909 5.6056C0.0955923 5.76045 0.00462529 5.96417 0.00447755 6.17579C0.00432981 6.38741 0.0950123 6.59124 0.258294 6.74632C0.421575 6.90139 0.645348 6.99621 0.884624 7.0117L15.984 7.02224L11.837 10.9387C11.6709 11.1002 11.5788 11.3105 11.5786 11.5287C11.5785 11.7468 11.6703 11.9573 11.8362 12.1191C11.9151 12.1957 12.0112 12.2569 12.1185 12.2988C12.2257 12.3407 12.3417 12.3624 12.459 12.3625C12.5763 12.3625 12.6923 12.341 12.7997 12.2993C12.907 12.2575 13.0032 12.1964 13.0822 12.1199L18.7404 6.79116C18.9101 6.62894 19.0043 6.41636 19.0045 6.19564C19.0046 5.97493 18.9107 5.76222 18.7412 5.59976Z" fill="white"/>
                                         </svg>                                                
                                    </button>                   
                                </div>
                           </div>   
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- details-area-end -->

@endsection