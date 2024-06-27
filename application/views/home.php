<!-- modal booking form start -->
<div class="booking-model">
   <div class="modal fade" id="popUpBookingForm" tabindex="-1">
      <div class="modal-dialog modal-dialog-centered">
         <div class="modal-content">
            <div class="modal-header">
               <h5 class="modal-title" id="staticBackdropLabel">Booking Form</h5>
               <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
               <div class="modal-body-top mb-20">
                  <div class="d-flex gap-24 justify-content-between align-items-center mb-30">
                     <h6 class="guest-title small">Adult</h6>
                     <div class="guest-number">
                        <span class="guest-number-minus">
                           <i class="fa-sharp fa-regular fa-minus"></i>
                        </span>
                        <input class="guest-number-input" type="text" value="3">
                        <span class="guest-number-plus">
                           <i class="fa-sharp fa-regular fa-plus"></i>
                        </span>
                     </div>
                  </div>
                  <div class="d-flex gap-24 justify-content-between align-items-center mb-30">
                     <h6 class="guest-title small">Infant</h6>
                     <div class="guest-number">
                        <span class="guest-number-minus">
                           <i class="fa-sharp fa-regular fa-minus"></i>
                        </span>
                        <input class="guest-number-input" type="text" value="1">
                        <span class="guest-number-plus">
                           <i class="fa-sharp fa-regular fa-plus"></i>
                        </span>
                     </div>
                  </div>
                  <div class="d-flex gap-10 justify-content-between align-items-center">
                     <h6 class="guest-title small">Date</h6>
                     <div class="booking-modal-form-input">
                        <input class="form-control" id="selectingMultipleDate" type="text"
                           placeholder="Select Your date Range" readonly="readonly">
                     </div>
                  </div>
               </div>
               <div class="modal-body-bottom">
                  <h6 class="mb-10">Add Infant's Ages</h6>
                  <div class="booking-infant-age">
                     <select name="years" id="years">
                        <option>9 Years</option>
                        <option>10 Years</option>
                        <option selected>11 Years</option>
                     </select>
                  </div>
               </div>
            </div>
            <div class="modal-footer">
               <a href="#" class="bd-primary-btn btn-style is-bg radius-60">
                  <span class="bd-primary-btn-text">Continue</span>
                  <span class="bd-primary-btn-circle"></span>
               </a>
            </div>
         </div>
      </div>
   </div>
</div>
<!-- modal booking form end -->

<!-- Body main wrapper start -->
<main class="main-area fix">

   <!-- Banner area start -->
   <section class="bd-banner-area banner-style-two banner-slider-mask">

      <div class="swiper banner-two-active p-relative">
         <div class="swiper-wrapper">
            <div class="swiper-slide">
               <div class="banner-slider-wrapper">
                  <div class="banner-two-image" data-background="<?= IMAGE ?>banner/banner-2-img-1.png">
                  </div>
                  <div class="container">
                     <div class="row justify-content-center">
                        <div class="col-xxl-9 col-xl-9 col-lg-10">
                           <div class="banner-two-content">
                              <h1 class="banner-title medium fw-7 mb-20 white-text">
                                 Mountain Serenity: Finding <span class="yellow-shape">Peace <img
                                       src="<?= IMAGE ?>shapes/yellow-shape.png" alt="yellow-shape"></span>Amidst
                                 Alpine Majesty
                              </h1>
                              <p class="banner-description mb-20">A picturesque picnic for two, basking in nature's
                                 serenity, forging memories to last a lifetime.</p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="swiper-slide">
               <div class="banner-slider-wrapper">
                  <div class="banner-two-image" data-background="<?= IMAGE ?>banner/banner-2-img-2.png">
                  </div>
                  <div class="container">
                     <div class="row justify-content-center">
                        <div class="col-xxl-9 col-xl-9 col-lg-10">
                           <div class="banner-two-content">
                              <h1 class="banner-title medium fw-7 mb-20 white-text">
                                 Conquering the Waves: <span class="yellow-shape">Thrilling <img
                                       src="<?= IMAGE ?>shapes/yellow-shape.png" alt="yellow-shape"></span>Water Mount
                                 Adventure
                              </h1>
                              <p class="banner-description mb-20">Riding the waves: A man finds joy and adventure on his
                                 water mount.</p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="swiper-slide">
               <div class="banner-slider-wrapper">
                  <div class="banner-two-image" data-background="<?= IMAGE ?>banner/banner-2-img-3.png">
                  </div>
                  <div class="container">
                     <div class="row justify-content-center">
                        <div class="col-xxl-9 col-xl-9 col-lg-10">
                           <div class="banner-two-content">
                              <h1 class="banner-title medium fw-7 mb-20 white-text">
                                 Glide into Adventure: Couples <span class="yellow-shape">Water <img
                                       src="<?= IMAGE ?>shapes/yellow-shape.png" alt="yellow-shape"></span>Skating
                                 Delight
                              </h1>
                              <p class="banner-description mb-20">Embrace the thrill as couples glide together, savoring
                                 the joy of water skating delightfully.</p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- navigation button start -->
         <div class="banner-nav-btn  d-md-block">
            <div class="banner-navigation-btn-2">
               <button class="banner-navigation-prev"><i class="fa-regular fa-angle-left"></i></button>
               <button class="banner-navigation-next"><i class="fa-regular fa-angle-right"></i></button>
            </div>
         </div>
         <!-- navigation button end -->
      </div>
   </section>
   <!-- Banner area start -->


   <section class="bd-team-area section-space ">
      <div class="container">

         <div class="row gy-24 align-items-center justify-content-between section-title-space">
            <div class="col-xl-6 col-md-8">
               <div class="section-title-wrapper">
                  <span class="section-subtitle mb-10">Upcoming</span>
                  <h2 class="section-title">Upcoming Adventure</h2>
               </div>
            </div>
            <div class="col-xl-2 col-md-4">
               <div class="destination-btn text-md-end">
                  <a href="#" class="bd-primary-btn btn-style has-arrow radius-60">
                     <span class="bd-primary-btn-arrow arrow-right"><i class="fa-regular fa-arrow-right"></i></span>
                     <span class="bd-primary-btn-text">View More</span>
                     <span class="bd-primary-btn-circle"></span>
                     <span class="bd-primary-btn-arrow arrow-left"><i class="fa-regular fa-arrow-right"></i></span>
                  </a>

               </div>
            </div>
         </div>
         <div class="row gy-24">
            <div class="col-xl-3 col-lg-4 col-md-12">
               <div class="trip-row-col">
                  <div class="trip-wrapper trip-style-one border-tag p-relative">
                     <div class="trip-thumb image-overly">
                        <a href="#"><img src="<?= IMAGE ?>trip/trip-img-13.png" alt="image"></a>
                     </div>
                     <div class="trip-tag">
                        <a class="trip-tag-border" href="#">3 Slots Available</a>
                     </div>
                     <div class="trip-content">
                        <h5 class="trip-title white-text underline-two mb-3"><a href="#">Mesmerising Malvanthige</a>
                        </h5>
                        <div class="offer">

                        </div>
                        <div class="blog-meta-item">
                           <span class="meta-icon">
                              <i class="fa-solid fa-calendar-check"></i>
                           </span>Departure date
                           <span class="meta-text"><a href="#">Jan 25 2024</a></span>
                        </div>
                     </div>
                     <span class="tour-price tour-favorite2 b3 ">₹1234.00</span>
                     <div class="tour-location">
                        <span><a href="#"> 2N 3D</a></span>
                     </div>
                  </div>
                  <div class="trip-wrapper trip-style-one border-tag p-relative">
                     <div class="trip-thumb image-overly">
                        <a href="#"><img src="<?= IMAGE ?>trip/trip-img-16.png" alt="image"></a>
                     </div>
                     <div class="trip-tag">
                        <a class="trip-tag-border" href="#">5 Slots Available</a>
                     </div>
                     <div class="trip-content">
                        <h5 class="trip-title white-text underline-two mb-3"><a href="#">Mystic Meghalaya</a></h5>

                        <div class="blog-meta-item">
                           <span class="meta-icon">
                              <i class="fa-solid fa-calendar-check"></i>
                           </span>Departure date
                           <span class="meta-text"><a href="#">Jan 25 2024</a></span>
                        </div>
                     </div>
                     <span class="tour-price tour-favorite2 b3 ">₹1234.00</span>
                     <div class="tour-location">
                        <span><a href="#"> 2N 3D</a></span>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-xl-6 col-lg-8 col-md-12">
               <div class="trip-wrapper trip-style-one border-tag p-relative">
                  <div class="trip-thumb image-overly">
                     <a href="#"><img src="<?= IMAGE ?>trip/trip-img-14.png" alt="image"></a>
                  </div>
                  <div class="trip-tag">
                     <a class="trip-tag-border" href="#">3 Slots Available</a>
                  </div>
                  <div class="trip-content">
                     <h5 class="trip-title white-text underline-two mb-3"><a href="#">Mesmerising Malvanthige</a></h5>

                     <div class="blog-meta-item">
                        <span class="meta-icon">
                           <i class="fa-solid fa-calendar-check"></i>
                        </span>Departure date
                        <span class="meta-text"><a href="#">Jan 25 2024</a></span>
                     </div>
                  </div>
                  <span class="tour-price tour-favorite2 b3 ">₹1234.00</span>
                  <div class="tour-location">
                     <span><a href="#"> 2N 3D</a></span>
                  </div>
               </div>
               <div class="row gy-24">
                  <div class="col-md-6">
                     <div class="trip-wrapper trip-style-one border-tag p-relative">
                        <div class="trip-thumb image-overly">
                           <a href="#"><img src="<?= IMAGE ?>trip/trip-img-17.png" alt="image"></a>
                        </div>
                        <div class="trip-tag">
                           <a class="trip-tag-border" href="#">2 Slots Available</a>
                        </div>
                        <div class="trip-content">
                           <h5 class="trip-title white-text underline-two mb-3"><a href="#">Mystic Meghalaya</a></h5>

                           <div class="blog-meta-item">
                              <span class="meta-icon">
                                 <i class="fa-solid fa-calendar-check"></i>
                              </span>Departure date
                              <span class="meta-text"><a href="#">Jan 25 2024</a></span>
                           </div>
                        </div>
                        <span class="tour-price tour-favorite2 b3 ">₹1234.00</span>
                        <div class="tour-location">
                           <span><a href="#"> 2N 3D</a></span>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="trip-wrapper trip-style-one border-tag p-relative">
                        <div class="trip-thumb image-overly">
                           <a href="#"><img src="<?= IMAGE ?>trip/trip-img-18.png" alt="image"></a>
                        </div>
                        <div class="trip-tag">
                           <a class="trip-tag-border" href="#">2 Slots Available</a>
                        </div>
                        <div class="trip-content">
                           <h5 class="trip-title white-text underline-two mb-3"><a href="#">Mesmerising Malvanthige</a>
                           </h5>

                           <div class="blog-meta-item">
                              <span class="meta-icon">
                                 <i class="fa-solid fa-calendar-check"></i>
                              </span>Departure date
                              <span class="meta-text"><a href="#">Jan 25 2024</a></span>
                           </div>
                        </div>
                        <span class="tour-price tour-favorite2 b3 ">₹1234.00</span>
                        <div class="tour-location">
                           <span><a href="#"> 2N 3D</a></span>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-xl-3 col-lg-12 col-md-12">
               <div class="trip-flex">
                  <div class="trip-wrapper trip-style-one border-tag p-relative">
                     <div class="trip-thumb image-overly">
                        <a href="#"><img src="<?= IMAGE ?>trip/trip-img-15.png" alt="image"></a>
                     </div>
                     <div class="trip-tag">
                        <a class="trip-tag-border" href="#">5 Slots Available</a>
                     </div>
                     <div class="trip-content">
                        <h5 class="trip-title white-text underline-two mb-3"><a href="#">Mystic Meghalaya</a></h5>

                        <div class="blog-meta-item">
                           <span class="meta-icon">
                              <i class="fa-solid fa-calendar-check"></i>
                           </span>Departure date
                           <span class="meta-text"><a href="#">Jan 25 2024</a></span>
                        </div>
                     </div>
                     <span class="tour-price tour-favorite2 b3 ">₹1234.00</span>
                     <div class="tour-location">
                        <span><a href="#"> 2N 3D</a></span>
                     </div>
                  </div>
                  <div class="offer-wrapper offer-style-five mt-24">
                     <div class="offer-thumb">
                        <img src="<?= IMAGE ?>trip/trip-img-15.png" alt="image">
                     </div>
                     <div class="offer-content">
                        <p class="title-font mb-20">Enjoy Up to Half Off!</p>
                        <h4 class="white-text offer-mb">Members Saving up to 50%</h4>
                        <div class="offer-btn">
                           <a href="booking.html"
                              class="bd-primary-btn btn-style has-arrow is-bg btn-tertiary is-white radius-60">
                              <span class="bd-primary-btn-arrow arrow-right"><i
                                    class="fa-regular fa-arrow-right"></i></span>
                              <span class="bd-primary-btn-text">Book Now</span>
                              <span class="bd-primary-btn-circle"></span>
                              <span class="bd-primary-btn-arrow arrow-left"><i
                                    class="fa-regular fa-arrow-right"></i></span>
                           </a>

                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>




      </div>
      </div>
   </section>


   <section class="bd-team-area section-space flash-white">
      <div class="container">
         <div class="row gy-24 align-items-center justify-content-between section-title-space">
            <div class="col-xl-6 col-md-8 col-sm-7">
               <div class="section-title-wrapper">
                  <span class="section-subtitle mb-10">Activities</span>
                  <h2 class="section-title">Activities</h2>
               </div>
            </div>
            <div class="col-xl-3 col-md-3 col-sm-3">
               <div class="tour-navigation btn-navigation p-relative style-three d-flex justify-content-md-end">
                  <button class="tourigo-navigation-prev" style="background: #fff"><i
                        class="fa-regular fa-angle-left"></i></button>
                  <button class="tourigo-navigation-next" style="background: #fff"><i
                        class="fa-regular fa-angle-right"></i></button>
               </div>
            </div>
         </div>

         <div class="tour-slide-wrapper p-relative">
            <div class="swiper tour-three-active">
               <div class="swiper-wrapper">
                  <div class="swiper-slide">
                     <div class="tour-wrapper style-one">
                        <div class="p-relative">
                           <div class="tour-thumb image-overly">
                              <a href="#"><img src="<?= IMAGE ?>tour/tour-img-12.png" alt="image"></a>
                              <span class="tour-price tour-favorite2 b3 ">₹1234.00</span>
                           </div>
                           <div class="trip-tag">
                              <a class="trip-tag-border" href="#">5 Slots Available</a>
                           </div>
                           <div class="tour-meta d-flex align-items-center justify-content-between">
                              <button class="tour-favorite tour-like">
                                 <i class="fa-solid fa-heart"></i>
                              </button>
                              <div class="tour-location">
                                 <span><a href="#"> 2N 3D</a></span>
                              </div>

                           </div>
                        </div>
                        <div class="tour-content">
                           <div class="tour-rating d-flex flex-wrap align-items-center gap-10 mb-10">
                              <div class="tour-rating-icon fs-14 d-flex rating-color">
                                 <i class="fa-solid fa-star"></i>
                                 <i class="fa-solid fa-star"></i>
                                 <i class="fa-solid fa-star"></i>
                                 <i class="fa-solid fa-star"></i>
                                 <i class="fa-solid fa-star"></i>
                              </div>
                              <div class="tour-rating-text">
                                 <span>5 (313 Ratings)</span>
                              </div>
                           </div>
                           <h5 class="tour-title fw-5 underline "><a href="#">Island Hopping in the Caribbean: Sun &
                                 Sea</a></h5>

                           <!-- <div class="tour-divider"></div> -->
                           <div class="tour-meta d-flex align-items-center justify-content-between">
                              <div class="time d-flex align-items-center gap--5">
                                 <div class="blog-meta-item">
                                    <span class="meta-icon">
                                       <i class="fa-solid fa-calendar-check"></i>
                                    </span>Departure date
                                    <span class="meta-text"><a href="#">Jan 25 2024</a></span>
                                 </div>
                              </div>
                              <!--  -->
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="swiper-slide">
                     <div class="tour-wrapper style-one">
                        <div class="p-relative">
                           <div class="tour-thumb image-overly">
                              <a href="#"><img src="<?= IMAGE ?>tour/tour-img-2.png" alt="image"></a>
                              <span class="tour-price tour-favorite2 b3 ">₹1234.00</span>
                           </div>
                           <div class="trip-tag">
                              <a class="trip-tag-border" href="#">5 Slots Available</a>
                           </div>
                           <div class="tour-meta d-flex align-items-center justify-content-between">
                              <button class="tour-favorite tour-like">
                                 <i class="fa-solid fa-heart"></i>
                              </button>
                              <div class="tour-location">
                                 <span><a href="#"> 2N 3D</a></span>
                              </div>
                           </div>
                        </div>
                        <div class="tour-content">
                           <div class="tour-rating d-flex flex-wrap align-items-center gap-10 mb-10">
                              <div class="tour-rating-icon fs-14 d-flex rating-color">
                                 <i class="fa-solid fa-star"></i>
                                 <i class="fa-solid fa-star"></i>
                                 <i class="fa-solid fa-star"></i>
                                 <i class="fa-solid fa-star"></i>
                                 <i class="fa-solid fa-star"></i>
                              </div>
                              <div class="tour-rating-text">
                                 <span>4.8 (313 Ratings)</span>
                              </div>
                           </div>
                           <h5 class="tour-title fw-5 underline "><a href="#">Tropical Paradise Retreat: Sun, Sand,
                                 Serenity</a></h5>
                           <div class="tour-meta d-flex align-items-center justify-content-between">
                              <div class="time d-flex align-items-center gap--5">
                                 <div class="blog-meta-item">
                                    <span class="meta-icon">
                                       <i class="fa-solid fa-calendar-check"></i>
                                    </span>Departure date
                                    <span class="meta-text"><a href="#">Jan 25 2024</a></span>
                                 </div>
                              </div>
                              <!--  -->
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="swiper-slide">
                     <div class="tour-wrapper style-one">
                        <div class="p-relative">
                           <div class="tour-thumb image-overly">
                              <a href="#"><img src="<?= IMAGE ?>tour/tour-img-13.png" alt="image"></a>
                              <span class="tour-price tour-favorite2 b3 ">₹1234.00</span>
                           </div>
                           <div class="trip-tag">
                              <a class="trip-tag-border" href="#">5 Slots Available</a>
                           </div>
                           <div class="tour-meta d-flex align-items-center justify-content-between">
                              <button class="tour-favorite tour-like">
                                 <i class="fa-solid fa-heart"></i>
                              </button>
                              <div class="tour-location">
                                 <span><a href="#"> 2N 3D</a></span>
                              </div>
                           </div>
                        </div>
                        <div class="tour-content">
                           <div class="tour-rating d-flex flex-wrap align-items-center gap-10 mb-10">
                              <div class="tour-rating-icon fs-14 d-flex rating-color">
                                 <i class="fa-solid fa-star"></i>
                                 <i class="fa-solid fa-star"></i>
                                 <i class="fa-solid fa-star"></i>
                                 <i class="fa-solid fa-star"></i>
                                 <i class="fa-solid fa-star"></i>
                              </div>
                              <div class="tour-rating-text">
                                 <span>4.8 (125 Ratings)</span>
                              </div>
                           </div>
                           <h5 class="tour-title fw-5 underline "><a href="#">Safari Expedition: Wildlife Encounters in
                                 Africa</a></h5>
                           <div class="tour-meta d-flex align-items-center justify-content-between">
                              <div class="time d-flex align-items-center gap--5">
                                 <div class="blog-meta-item">
                                    <span class="meta-icon">
                                       <i class="fa-solid fa-calendar-check"></i>
                                    </span>Departure date
                                    <span class="meta-text"><a href="#">Jan 25 2024</a></span>
                                 </div>
                              </div>
                              <!--  -->
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="swiper-slide">
                     <div class="tour-wrapper style-one">
                        <div class="p-relative">
                           <div class="tour-thumb image-overly">
                              <a href="#"><img src="<?= IMAGE ?>tour/tour-img-14.png" alt="image"></a>
                              <span class="tour-price tour-favorite2 b3 ">₹1234.00</span>
                           </div>
                           <div class="trip-tag">
                              <a class="trip-tag-border" href="#">5 Slots Available</a>
                           </div>
                           <div class="tour-meta d-flex align-items-center justify-content-between">
                              <button class="tour-favorite tour-like">
                                 <i class="fa-solid fa-heart"></i>
                              </button>
                              <div class="tour-location">
                                 <span><a href="#"> 2N 3D</a></span>
                              </div>
                           </div>
                        </div>
                        <div class="tour-content">
                           <div class="tour-rating d-flex flex-wrap align-items-center gap-10 mb-10">
                              <div class="tour-rating-icon fs-14 d-flex rating-color">
                                 <i class="fa-solid fa-star"></i>
                                 <i class="fa-solid fa-star"></i>
                                 <i class="fa-solid fa-star"></i>
                                 <i class="fa-solid fa-star"></i>
                                 <i class="fa-solid fa-star"></i>
                              </div>
                              <div class="tour-rating-text">
                                 <span>4.8 (320 Ratings)</span>
                              </div>
                           </div>
                           <h5 class="tour-title fw-5 underline "><a href="#">Asian Discovery: Temples, Traditions,
                                 Tastings</a></h5>
                           <div class="tour-meta d-flex align-items-center justify-content-between">
                              <div class="time d-flex align-items-center gap--5">
                                 <div class="blog-meta-item">
                                    <span class="meta-icon">
                                       <i class="fa-solid fa-calendar-check"></i>
                                    </span>Departure date
                                    <span class="meta-text"><a href="#">Jan 25 2024</a></span>
                                 </div>
                              </div>
                              <!--  -->
                           </div>

                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="slider-pagination bd-pagination mt-20 justify-content-center"></div>


      </div>
      </div>
   </section>


   <!-- activities area start -->
   <section class="bd-activities-area section-space  p-relative">
      <div class="container">
         <div class="row gy-24 align-items-center justify-content-between section-title-space">
            <div class="col-xl-6 col-md-8">
               <div class="section-title-wrapper">
                  <span class="section-subtitle mb-10">Tours</span>
                  <h2 class="section-title">Domestic Tours</h2>
               </div>
            </div>
            <div class="col-xl-2 col-md-4">
               <div class="destination-btn text-md-end">
                  <a href="#" class="bd-primary-btn btn-style has-arrow radius-60">
                     <span class="bd-primary-btn-arrow arrow-right"><i class="fa-regular fa-arrow-right"></i></span>
                     <span class="bd-primary-btn-text">View More</span>
                     <span class="bd-primary-btn-circle"></span>
                     <span class="bd-primary-btn-arrow arrow-left"><i class="fa-regular fa-arrow-right"></i></span>
                  </a>

               </div>
            </div>
         </div>
         <div class="row gy-24">
            <div class="col-xl-3 col-lg-4 col-md-4">
               <div class="activity-wrapper activity-style-two">
                  <div class="activity-thumb image-overly">
                     <a href="#"><img src="<?= IMAGE ?>activity/activity-img-5.png" alt="image"></a>
                     <span class="tour-price tour-favorite1 b3 ">₹1234.00</span>
                  </div>

                  <div class="activity-content">
                     <div class="activity-title-wrap">
                        <h5 class="activity-title underline-two mb-3"><a href="#">Kerala</a></h5>

                     </div>
                  </div>
                  <div class="tour-location">
                     <span><a href="#"> 2N 3D</a></span>
                  </div>
               </div>
               <div class="activity-wrapper activity-style-two">
                  <div class="activity-thumb image-overly">
                     <a href="#"><img src="<?= IMAGE ?>activity/activity-img-6.png" alt="image"></a>
                     <span class="tour-price tour-favorite1 b3 ">₹1234.00</span>
                  </div>

                  <div class="activity-content">
                     <div class="activity-title-wrap">
                        <h5 class="activity-title underline-two mb-3"><a href="#">Andaman</a></h5>

                     </div>
                  </div>
                  <div class="tour-location">
                     <span><a href="#"> 2N 3D</a></span>
                  </div>
               </div>
            </div>
            <div class="col-xl-6 col-lg-8 col-md-8">
               <div class="activity-wrapper activity-style-two">
                  <div class="activity-thumb image-overly">
                     <a href="#"><img src="<?= IMAGE ?>activity/activity-img-7.png" alt="image"></a>
                     <span class="tour-price tour-favorite1 b3 ">₹1234.00</span>
                  </div>

                  <div class="activity-content">
                     <div class="activity-title-wrap">
                        <h5 class="activity-title underline-two mb-3"><a href="#">Kashmir</a></h5>

                     </div>
                  </div>
                  <div class="tour-location">
                     <span><a href="#"> 2N 3D</a></span>
                  </div>
               </div>
               <div class="row gy-24">
                  <div class="col-xl-6 col-lg-6 col-md-6">
                     <div class="activity-wrapper activity-style-two">
                        <div class="activity-thumb image-overly">
                           <a href="#"><img src="<?= IMAGE ?>activity/activity-img-8.png" alt="image"></a>
                           <span class="tour-price tour-favorite1 b3 ">₹1234.00</span>
                        </div>

                        <div class="activity-content">
                           <div class="activity-title-wrap">
                              <h5 class="activity-title underline-two mb-3"><a href="#">Himachal</a></h5>

                           </div>
                        </div>
                        <div class="tour-location">
                           <span><a href="#"> 2N 3D</a></span>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-6 col-lg-6 col-md-6">
                     <div class="activity-wrapper activity-style-two">
                        <div class="activity-thumb image-overly">
                           <a href="#"><img src="<?= IMAGE ?>activity/activity-img-9.png" alt="image"></a>
                           <span class="tour-price tour-favorite1 b3 ">₹1234.00</span>
                        </div>

                        <div class="activity-content">
                           <div class="activity-title-wrap">
                              <h5 class="activity-title underline-two mb-3"><a href="#">Rajasthan</a></h5>

                           </div>
                        </div>
                        <div class="tour-location">
                           <span><a href="#"> 2N 3D</a></span>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-12">
               <div class="offer-wrapper offer-style-five">
                  <div class="offer-thumb">
                     <img src="<?= IMAGE ?>activity/activity-img-10.png" alt="image">

                  </div>

                  <div class="offer-content">
                     <p class="title-font mb-20">Enjoy Up to Half Off!</p>
                     <h4 class="offer-title white-text mb-40">Unlock Special Savings: Up to 50% Off Your Next Adventure!
                     </h4>

                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- activities area start -->
   <!-- destination area start -->
   <section class="bd-destination-area section-space p-relative half-bg">
      <div class="container">
         <div class="row gy-24 align-items-center justify-content-between section-title-space">
            <div class="col-xl-6 col-md-7">
               <div class="section-title-wrapper">
                  <span class="section-subtitle white-text mb-10">Tours</span>
                  <h2 class="section-title white-text">International Tours</h2>
               </div>
            </div>
            <div class="col-xl-2 col-md-3">
               <div class="destination-btn text-md-end">
                  <a href="#" class="bd-primary-btn btn-style has-arrow is-bg btn-tertiary is-white radius-60">
                     <span class="bd-primary-btn-arrow arrow-right"><i class="fa-regular fa-arrow-right"></i></span>
                     <span class="bd-primary-btn-text">See all</span>
                     <span class="bd-primary-btn-circle"></span>
                     <span class="bd-primary-btn-arrow arrow-left"><i class="fa-regular fa-arrow-right"></i></span>
                  </a>

               </div>
            </div>
         </div>
         <div class="swiper activity-activation">
            <div class="swiper-wrapper">
               <div class="row gy-24">
                  <div class="col-xxl-4 col-xl-4 col-lg-6 col-md-6">
                     <div class="tour-wrapper style-one">
                        <div class="p-relative">
                           <div class="tour-thumb image-overly">
                              <a href="#"><img src="<?= IMAGE ?>tour/tour-img-5.png" alt="image"></a>
                              <span class="tour-price tour-favorite1 b3 ">₹1234.00</span>
                           </div>

                           <div class="tour-meta d-flex align-items-center justify-content-between">
                              <button class="tour-favorite tour-like">
                                 <i class="fa-solid fa-heart"></i>
                              </button>
                              <div class="tour-location">
                                 <span><a href="#"> 2N 3D</a></span>
                              </div>
                           </div>
                        </div>
                        <div class="tour-content">
                           <div class="tour-rating d-flex flex-wrap align-items-center gap-10 mb-10">
                              <div class="tour-rating-icon fs-14 d-flex rating-color">
                                 <i class="fa-solid fa-star"></i>
                                 <i class="fa-solid fa-star"></i>
                                 <i class="fa-solid fa-star"></i>
                                 <i class="fa-solid fa-star"></i>
                                 <i class="fa-solid fa-star"></i>
                              </div>
                              <div class="tour-rating-text">
                                 <span>4.8 (313 Ratings)</span>
                              </div>
                           </div>
                           <h5 class="tour-title fw-5 underline "><a href="#">The Maldives is named after the main
                                 island and capital,</a></h5>

                        </div>
                     </div>
                  </div>
                  <div class="col-xxl-4 col-xl-4 col-lg-6 col-md-6">
                     <div class="tour-wrapper style-one">
                        <div class="p-relative">
                           <div class="tour-thumb image-overly">
                              <a href="#"><img src="<?= IMAGE ?>tour/tour-img-6.png" alt="image"></a>
                              <span class="tour-price tour-favorite1 b3 ">₹1234.00</span>
                           </div>

                           <div class="tour-meta d-flex align-items-center justify-content-between">
                              <button class="tour-favorite tour-like">
                                 <i class="fa-solid fa-heart"></i>
                              </button>
                              <div class="tour-location">
                                 <span><a href="#"> 2N 3D</a></span>
                              </div>
                           </div>
                        </div>
                        <div class="tour-content">
                           <div class="tour-rating d-flex flex-wrap align-items-center gap-10 mb-10">
                              <div class="tour-rating-icon fs-14 d-flex rating-color">
                                 <i class="fa-solid fa-star"></i>
                                 <i class="fa-solid fa-star"></i>
                                 <i class="fa-solid fa-star"></i>
                                 <i class="fa-solid fa-star"></i>
                                 <i class="fa-solid fa-star"></i>
                              </div>
                              <div class="tour-rating-text">
                                 <span>5 (313 Ratings)</span>
                              </div>
                           </div>
                           <h5 class="tour-title fw-5 underline "><a href="#">Dubai is a city and emirate in the United
                                 Arab Emirates </a></h5>

                        </div>
                     </div>
                  </div>
                  <div class="col-xxl-4 col-xl-4 col-lg-6 col-md-6">
                     <div class="tour-wrapper style-one">
                        <div class="p-relative">
                           <div class="tour-thumb image-overly">
                              <a href="#"><img src="<?= IMAGE ?>tour/tour-img-7.png" alt="image"></a>
                              <span class="tour-price tour-favorite1 b3 ">₹1234.00</span>
                           </div>


                           <div class="tour-meta d-flex align-items-center justify-content-between">
                              <button class="tour-favorite tour-like">
                                 <i class="fa-solid fa-heart"></i>
                              </button>
                              <div class="tour-location">
                                 <span><a href="#"> 2N 3D</a></span>
                              </div>
                           </div>
                        </div>
                        <div class="tour-content">
                           <div class="tour-rating d-flex flex-wrap align-items-center gap-10 mb-10">
                              <div class="tour-rating-icon fs-14 d-flex rating-color">
                                 <i class="fa-solid fa-star"></i>
                                 <i class="fa-solid fa-star"></i>
                                 <i class="fa-solid fa-star"></i>
                                 <i class="fa-solid fa-star"></i>
                                 <i class="fa-solid fa-star"></i>
                              </div>
                              <div class="tour-rating-text">
                                 <span>4.8 (150 Ratings)</span>
                              </div>
                           </div>
                           <h5 class="tour-title fw-5 underline "><a href="#">Thailand is a Southeast Asian country.
                              </a></h5>

                        </div>
                     </div>
                  </div>
                  <div class="col-xxl-4 col-xl-4 col-lg-6 col-md-6">
                     <div class="tour-wrapper style-one">
                        <div class="p-relative">
                           <div class="tour-thumb image-overly">
                              <a href="#"><img src="<?= IMAGE ?>tour/tour-img-4.png" alt="image"></a>
                              <span class="tour-price tour-favorite1 b3 ">₹1234.00</span>
                           </div>

                           <div class="tour-meta d-flex align-items-center justify-content-between">
                              <button class="tour-favorite tour-like">
                                 <i class="fa-solid fa-heart"></i>
                              </button>
                              <div class="tour-location">
                                 <span><a href="#"> 2N 3D</a></span>
                              </div>
                           </div>
                        </div>
                        <div class="tour-content">
                           <div class="tour-rating d-flex flex-wrap align-items-center gap-10 mb-10">
                              <div class="tour-rating-icon fs-14 d-flex rating-color">
                                 <i class="fa-solid fa-star"></i>
                                 <i class="fa-solid fa-star"></i>
                                 <i class="fa-solid fa-star"></i>
                                 <i class="fa-solid fa-star"></i>
                                 <i class="fa-solid fa-star"></i>
                              </div>
                              <div class="tour-rating-text">
                                 <span>4.9 (255 Ratings)</span>
                              </div>
                           </div>
                           <h5 class="tour-title fw-5 underline "><a href="#">Vietnam is a Southeast Asian country known
                                 for its </a></h5>

                        </div>
                     </div>
                  </div>
                  <div class="col-xxl-4 col-xl-4 col-lg-6 col-md-6">
                     <div class="tour-wrapper style-one">
                        <div class="p-relative">
                           <div class="tour-thumb image-overly">
                              <a href="#"><img src="<?= IMAGE ?>tour/tour-img-8.png" alt="image"></a>
                              <span class="tour-price tour-favorite1 b3 ">₹1234.00</span>
                           </div>

                           <div class="tour-meta d-flex align-items-center justify-content-between">
                              <button class="tour-favorite tour-like">
                                 <i class="fa-solid fa-heart"></i>
                              </button>
                              <div class="tour-location">
                                 <span><a href="#"> 2N 3D</a></span>
                              </div>
                           </div>
                        </div>
                        <div class="tour-content">
                           <div class="tour-rating d-flex flex-wrap align-items-center gap-10 mb-10">
                              <div class="tour-rating-icon fs-14 d-flex rating-color">
                                 <i class="fa-solid fa-star"></i>
                                 <i class="fa-solid fa-star"></i>
                                 <i class="fa-solid fa-star"></i>
                                 <i class="fa-solid fa-star"></i>
                                 <i class="fa-solid fa-star"></i>
                              </div>
                              <div class="tour-rating-text">
                                 <span>4.8 (315 Ratings)</span>
                              </div>
                           </div>
                           <h5 class="tour-title fw-5 underline "><a href="#">Singapore, officially the Republic of
                                 Singapore </a></h5>

                        </div>
                     </div>
                  </div>
                  <div class="col-xxl-4 col-xl-4 col-lg-6 col-md-6">
                     <div class="tour-wrapper style-one">
                        <div class="p-relative">
                           <div class="tour-thumb image-overly">
                              <a href="#"><img src="<?= IMAGE ?>tour/tour-img-9.png" alt="image"></a>
                              <span class="tour-price tour-favorite1 b3 ">₹1234.00</span>
                           </div>

                           <div class="tour-meta d-flex align-items-center justify-content-between">
                              <button class="tour-favorite tour-like">
                                 <i class="fa-solid fa-heart"></i>
                              </button>
                              <div class="tour-location">
                                 <span><a href="#"> 2N 3D</a></span>
                              </div>
                           </div>
                        </div>
                        <div class="tour-content">
                           <div class="tour-rating d-flex flex-wrap align-items-center gap-10 mb-10">
                              <div class="tour-rating-icon fs-14 d-flex rating-color">
                                 <i class="fa-solid fa-star"></i>
                                 <i class="fa-solid fa-star"></i>
                                 <i class="fa-solid fa-star"></i>
                                 <i class="fa-solid fa-star"></i>
                                 <i class="fa-solid fa-star"></i>
                              </div>
                              <div class="tour-rating-text">
                                 <span>4.6 (20 Ratings)</span>
                              </div>
                           </div>
                           <h5 class="tour-title fw-5 underline"><a href="#">Bali is a province of Indonesia and the
                                 westernmost </a></h5>

                        </div>
                     </div>
                  </div>
                  <!--  <div class="col-xxl-4 col-xl-4 col-lg-6 col-md-6">
                        <div class="tour-wrapper style-one">
                            <div class="p-relative">
                                <div class="tour-thumb image-overly">
                                    <a href="#"><img src="<?= IMAGE ?>tour/tour-img-10.png" alt="image"></a>
                                </div>
                                <div class="tour-meta d-flex align-items-center justify-content-between">
                                    <button class="tour-favorite tour-like">
                                        <i class="fa-solid fa-heart"></i>
                                    </button>
                                    <div class="tour-location">
                                        <span><a href="#"><i class="fa-regular fa-location-dot"></i> Australia</a></span>
                                    </div>
                                </div>
                            </div>
                            <div class="tour-content">
                                <div class="tour-rating d-flex flex-wrap align-items-center gap-10 mb-10">
                                    <div class="tour-rating-icon fs-14 d-flex rating-color">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                    </div>
                                    <div class="tour-rating-text">
                                        <span>4.8 (360 Ratings)</span>
                                    </div>
                                </div>
                                <h5 class="tour-title fw-5 underline "><a href="#">Australia is the largest country by area in Oceania </a></h5>
                                
                            </div>
                        </div>
                    </div> -->
                  <!-- <div class="col-xxl-3 col-xl-4 col-lg-6 col-md-6">
                        <div class="tour-wrapper style-one">
                            <div class="p-relative">
                                <div class="tour-thumb image-overly">
                                    <a href="#"><img src="<?= IMAGE ?>tour/tour-img-11.png" alt="image"></a>
                                </div>
                                <div class="tour-meta d-flex align-items-center justify-content-between">
                                    <button class="tour-favorite tour-like">
                                        <i class="fa-solid fa-heart"></i>
                                    </button>
                                    <div class="tour-location">
                                        <span><a href="#"><i class="fa-regular fa-location-dot"></i> Shenzhen, China</a></span>
                                    </div>
                                </div>
                            </div>
                            <div class="tour-content">
                                <div class="tour-rating d-flex flex-wrap align-items-center gap-10 mb-10">
                                    <div class="tour-rating-icon fs-14 d-flex rating-color">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                    </div>
                                    <div class="tour-rating-text">
                                        <span>5 (313 Ratings)</span>
                                    </div>
                                </div>
                                <h5 class="tour-title fw-5 underline mb-5"><a href="#">Trekking the Inca Trail: Ancient Ruins Await</a></h5>
                                <span class="tour-price b3">$1695.00</span>
                                <div class="tour-divider"></div>

                                <div class="tour-meta d-flex align-items-center justify-content-between">
                                    <div class="time d-flex align-items-center gap--5">
                                        <i class="fa-solid fa-heart"></i>
                                        <span>8 days</span>
                                    </div>
                                    <div class="tour-btn">
                                        <button class="bd-text-btn style-two" type="button" data-bs-toggle="modal" data-bs-target="#popUpBookingForm">Book Now
                                            <span class="icon__box">
                        <i class="fa-regular fa-arrow-right-long icon__first"></i>
                        <i class="fa-regular fa-arrow-right-long icon__second"></i>
                    </span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->
               </div>

            </div>

         </div>
      </div>
   </section>
   <!-- destination area end -->

   <!-- section divider start -->
   <div class="section-divider"></div>
   <!-- section divider start -->


   <!-- tour area start -->
   <section class="bd-tour-area section-space">
      <div class="container">
         <div class="row gy-24 align-items-center justify-content-between section-title-space">
            <div class="col-lg-6 col-md-8">
               <div class="section-title-wrapper">
                  <span class="section-subtitle mb-10">Group Tours</span>
                  <h2 class="section-title">Upcoming Tours</h2>
               </div>
            </div>
            <div class="col-xl-3 col-md-3 col-sm-3">
               <div class="tour-navigation btn-navigation p-relative style-three d-flex justify-content-md-end">
                  <button class="tourigo-navigation-prev"><i class="fa-regular fa-angle-left"></i></button>
                  <button class="tourigo-navigation-next"><i class="fa-regular fa-angle-right"></i></button>
               </div>
            </div>
         </div>
         <div class="row gy-24">
            <div class="col-xxl-3 col-xl-3 col-lg-4 order-lg-0 order-1">
               <div class="cta-wrapper cta-style-four">
                  <div class="cta-thumb-four">
                     <img src="<?= IMAGE ?>cta/cta-img-4.jpg" alt="image">
                  </div>
                  <div class="cta-content">
                     <span class="cta-subtitle">Get Dubai Desert Deal</span>
                     <h3 class="cta-title white-text mb-25">Book Your Tickets Now</h3>

                  </div>
               </div>
            </div>
            <div class="col-xxl-9 col-xl-9 col-lg-8 order-lg-1 order-0">
               <div class="tour-slide-wrapper p-relative">
                  <div class="swiper tour-three-active">
                     <div class="swiper-wrapper">
                        <div class="swiper-slide">
                           <div class="tour-wrapper style-one">
                              <div class="p-relative">
                                 <div class="tour-thumb image-overly">
                                    <a href="#"><img src="<?= IMAGE ?>tour/tour-img-12.png" alt="image"></a>
                                    <span class="tour-price tour-favorite3 b3 ">₹1234.00</span>
                                 </div>
                                 <div class="trip-tag">
                                    <a class="trip-tag-border" href="#">5 Slots Available</a>
                                 </div>
                                 <div class="tour-meta d-flex align-items-center justify-content-between">
                                    <button class="tour-favorite tour-like">
                                       <i class="fa-solid fa-heart"></i>
                                    </button>
                                    <div class="tour-location">
                                       <span><a href="#"> 2N 3D</a></span>
                                    </div>
                                 </div>
                              </div>
                              <div class="tour-content">
                                 <div class="tour-rating d-flex flex-wrap align-items-center gap-10 mb-10">
                                    <div class="tour-rating-icon fs-14 d-flex rating-color">
                                       <i class="fa-solid fa-star"></i>
                                       <i class="fa-solid fa-star"></i>
                                       <i class="fa-solid fa-star"></i>
                                       <i class="fa-solid fa-star"></i>
                                       <i class="fa-solid fa-star"></i>
                                    </div>
                                    <div class="tour-rating-text">
                                       <span>5 (313 Ratings)</span>
                                    </div>
                                 </div>
                                 <h5 class="tour-title fw-5 underline mb-3"><a href="#">Island Hopping in the Caribbean:
                                       Sun & Sea</a></h5>
                                 <div class="blog-meta-item">
                                    <span class="meta-icon">
                                       <i class="fa-solid fa-calendar-check"></i>
                                    </span>Departure date
                                    <span class="meta-text"><a href="#">Jan 25 2024</a></span>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="swiper-slide">
                           <div class="tour-wrapper style-one">
                              <div class="p-relative">
                                 <div class="tour-thumb image-overly">
                                    <a href="#"><img src="<?= IMAGE ?>tour/tour-img-2.png" alt="image"></a>
                                    <span class="tour-price tour-favorite3 b3 ">₹1234.00</span>
                                 </div>
                                 <div class="trip-tag">
                                    <a class="trip-tag-border" href="#">5 Slots Available</a>
                                 </div>
                                 <div class="tour-meta d-flex align-items-center justify-content-between">
                                    <button class="tour-favorite tour-like">
                                       <i class="fa-solid fa-heart"></i>
                                    </button>
                                    <div class="tour-location">
                                       <span><a href="#"> 2N 3D</a></span>
                                    </div>
                                 </div>
                              </div>
                              <div class="tour-content">
                                 <div class="tour-rating d-flex flex-wrap align-items-center gap-10 mb-10">
                                    <div class="tour-rating-icon fs-14 d-flex rating-color">
                                       <i class="fa-solid fa-star"></i>
                                       <i class="fa-solid fa-star"></i>
                                       <i class="fa-solid fa-star"></i>
                                       <i class="fa-solid fa-star"></i>
                                       <i class="fa-solid fa-star"></i>
                                    </div>
                                    <div class="tour-rating-text">
                                       <span>4.8 (313 Ratings)</span>
                                    </div>
                                 </div>
                                 <h5 class="tour-title fw-5 underline mb-3"><a href="#">Tropical Paradise Retreat: Sun,
                                       Sand, Serenity</a></h5>
                                 <div class="blog-meta-item">
                                    <span class="meta-icon">
                                       <i class="fa-solid fa-calendar-check"></i>
                                    </span>Departure date
                                    <span class="meta-text"><a href="#">Jan 25 2024</a></span>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="swiper-slide">
                           <div class="tour-wrapper style-one">
                              <div class="p-relative">
                                 <div class="tour-thumb image-overly">
                                    <a href="#"><img src="<?= IMAGE ?>tour/tour-img-13.png" alt="image"></a>
                                    <span class="tour-price tour-favorite3 b3 ">₹1234.00</span>
                                 </div>

                                 <div class="trip-tag">
                                    <a class="trip-tag-border" href="#">5 Slots Available</a>
                                 </div>
                                 <div class="tour-meta d-flex align-items-center justify-content-between">
                                    <button class="tour-favorite tour-like">
                                       <i class="fa-solid fa-heart"></i>
                                    </button>
                                    <div class="tour-location">
                                       <span><a href="#"> 2N 3D</a></span>
                                    </div>
                                 </div>
                              </div>
                              <div class="tour-content">
                                 <div class="tour-rating d-flex flex-wrap align-items-center gap-10 mb-10">
                                    <div class="tour-rating-icon fs-14 d-flex rating-color">
                                       <i class="fa-solid fa-star"></i>
                                       <i class="fa-solid fa-star"></i>
                                       <i class="fa-solid fa-star"></i>
                                       <i class="fa-solid fa-star"></i>
                                       <i class="fa-solid fa-star"></i>
                                    </div>
                                    <div class="tour-rating-text">
                                       <span>4.8 (125 Ratings)</span>
                                    </div>
                                 </div>
                                 <h5 class="tour-title fw-5 underline mb-3"><a href="#">Safari Expedition: Wildlife
                                       Encounters in Africa</a></h5>
                                 <div class="blog-meta-item">
                                    <span class="meta-icon">
                                       <i class="fa-solid fa-calendar-check"></i>
                                    </span>Departure date
                                    <span class="meta-text"><a href="#">Jan 25 2024</a></span>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="swiper-slide">
                           <div class="tour-wrapper style-one">
                              <div class="p-relative">
                                 <div class="tour-thumb image-overly">
                                    <a href="#"><img src="<?= IMAGE ?>tour/tour-img-14.png" alt="image"></a>
                                    <span class="tour-price tour-favorite3 b3 ">₹1234.00</span>
                                 </div>
                                 <div class="trip-tag">
                                    <a class="trip-tag-border" href="#">2 Slots Available</a>
                                 </div>

                                 <div class="tour-meta d-flex align-items-center justify-content-between">
                                    <button class="tour-favorite tour-like">
                                       <i class="fa-solid fa-heart"></i>
                                    </button>
                                    <div class="tour-location">
                                       <span><a href="#"> 2N 3D</a></span>
                                    </div>
                                 </div>
                              </div>
                              <div class="tour-content">
                                 <div class="tour-rating d-flex flex-wrap align-items-center gap-10 mb-10">
                                    <div class="tour-rating-icon fs-14 d-flex rating-color">
                                       <i class="fa-solid fa-star"></i>
                                       <i class="fa-solid fa-star"></i>
                                       <i class="fa-solid fa-star"></i>
                                       <i class="fa-solid fa-star"></i>
                                       <i class="fa-solid fa-star"></i>
                                    </div>
                                    <div class="tour-rating-text">
                                       <span>4.8 (320 Ratings)</span>
                                    </div>
                                 </div>
                                 <h5 class="tour-title fw-5 underline mb-3"><a href="#">Asian Discovery: Temples,
                                       Traditions, Tastings</a></h5>
                                 <span class="tour-price tour-favorite3 b3 ">₹1234.00</span>
                                 <div class="blog-meta-item">
                                    <span class="meta-icon">
                                       <i class="fa-solid fa-calendar-check"></i>
                                    </span>Departure date
                                    <span class="meta-text"><a href="#">Jan 25 2024</a></span>
                                 </div>

                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- tour area end -->



   <!-- testimonial area start -->
   <section class="bd-testimonial-area testimonial-space section-space-top flash-white p-relative">
      <div class="container">
         <div class="row gy-24 align-items-center justify-content-between section-title-space">
            <div class="col-lg-6 col-md-8">
               <div class="section-title-wrapper">
                  <span class="section-subtitle mb-10">Testimonials </span>
                  <h2 class="section-title">Customers Feedback</h2>
               </div>
            </div>
            <div class="col-xl-3 col-md-3 col-sm-3">
               <div class="tour-navigation btn-navigation p-relative style-three d-flex justify-content-md-end">
                  <button class="tourigo-navigation-prev" style="    background: #fff;"><i
                        class="fa-regular fa-angle-left"></i></button>
                  <button class="tourigo-navigation-next" style="    background: #fff;"><i
                        class="fa-regular fa-angle-right"></i></button>
               </div>
            </div>
         </div>
         <!-- <div class="row gy-24 align-items-center text-center justify-content-center section-title-space">
                    <div class="col-xl-6">
                        <div class="section-title-wrapper">
                            <span class="section-subtitle mb-10">Testimonials</span>
                            <h2 class="section-title">Customers Feedback</h2>
                        </div>
                    </div>
                </div> -->
      </div>
      <div class="container">
         <div class="swiper testimonial-active-two">
            <div class="swiper-wrapper">
               <div class="swiper-slide">
                  <div class="testimonial-card testimonial-card-alpha">
                     <div class="testimonial-overlay-img">
                        <img src="<?= IMAGE ?>reviewer-1.png" alt="">
                     </div>
                     <div class="testimonial-card-top">
                        <div class="qoute-icon"><i class="bx bxs-quote-left"></i></div>
                        <div class="testimonial-thumb"><img src="<?= IMAGE ?>r-sm2.png" alt=""></div>
                        <h3 class="testimonial-count">01</h3>
                     </div>
                     <div class="testimonial-body">
                        <p>Duis rutrum nisl urna. Maecenas vel libero this
                           faucibus nisi venenatis hendrerit a id lectus.P
                           Suspendissendt molestie turpis nec laciniane
                           vehicula volutpat purus.</p>
                        <div class="testimonial-bottom">
                           <div class="reviewer-info">
                              <h4 class="reviewer-name">Adam Groff</h4>
                              <h6>Traveller</h6>
                           </div>
                           <ul class="testimonial-rating">
                              <li><i class="bi bi-star-fill"></i></li>
                              <li><i class="bi bi-star-fill"></i></li>
                              <li><i class="bi bi-star-fill"></i></li>
                              <li><i class="bi bi-star-fill"></i></li>
                              <li><i class="bi bi-star-fill"></i></li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="swiper-slide">
                  <div class="testimonial-card testimonial-card-alpha">
                     <div class="testimonial-overlay-img">
                        <img src="<?= IMAGE ?>reviewer-1.png" alt="">
                     </div>
                     <div class="testimonial-card-top">
                        <div class="qoute-icon"><i class="bx bxs-quote-left"></i></div>
                        <div class="testimonial-thumb"><img src="<?= IMAGE ?>r-sm2.png" alt=""></div>
                        <h3 class="testimonial-count">02</h3>
                     </div>
                     <div class="testimonial-body">
                        <p>Duis rutrum nisl urna. Maecenas vel libero this
                           faucibus nisi venenatis hendrerit a id lectus.P
                           Suspendissendt molestie turpis nec laciniane
                           vehicula volutpat purus.</p>
                        <div class="testimonial-bottom">
                           <div class="reviewer-info">
                              <h4 class="reviewer-name">Adam Groff</h4>
                              <h6>Traveller</h6>
                           </div>
                           <ul class="testimonial-rating">
                              <li><i class="bi bi-star-fill"></i></li>
                              <li><i class="bi bi-star-fill"></i></li>
                              <li><i class="bi bi-star-fill"></i></li>
                              <li><i class="bi bi-star-fill"></i></li>
                              <li><i class="bi bi-star-fill"></i></li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="swiper-slide">
                  <div class="testimonial-card testimonial-card-alpha">
                     <div class="testimonial-overlay-img">
                        <img src="<?= IMAGE ?>reviewer-1.png" alt="">
                     </div>
                     <div class="testimonial-card-top">
                        <div class="qoute-icon"><i class="bx bxs-quote-left"></i></div>
                        <div class="testimonial-thumb"><img src="<?= IMAGE ?>r-sm2.png" alt=""></div>
                        <h3 class="testimonial-count">03</h3>
                     </div>
                     <div class="testimonial-body">
                        <p>Duis rutrum nisl urna. Maecenas vel libero this
                           faucibus nisi venenatis hendrerit a id lectus.P
                           Suspendissendt molestie turpis nec laciniane
                           vehicula volutpat purus.</p>
                        <div class="testimonial-bottom">
                           <div class="reviewer-info">
                              <h4 class="reviewer-name">Adam Groff</h4>
                              <h6>Traveller</h6>
                           </div>
                           <ul class="testimonial-rating">
                              <li><i class="bi bi-star-fill"></i></li>
                              <li><i class="bi bi-star-fill"></i></li>
                              <li><i class="bi bi-star-fill"></i></li>
                              <li><i class="bi bi-star-fill"></i></li>
                              <li><i class="bi bi-star-fill"></i></li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="swiper-slide">
                  <div class="testimonial-card testimonial-card-alpha">
                     <div class="testimonial-overlay-img">
                        <img src="<?= IMAGE ?>reviewer-1.png" alt="">
                     </div>
                     <div class="testimonial-card-top">
                        <div class="qoute-icon"><i class="bx bxs-quote-left"></i></div>
                        <div class="testimonial-thumb"><img src="<?= IMAGE ?>r-sm2.png" alt=""></div>
                        <h3 class="testimonial-count">04</h3>
                     </div>
                     <div class="testimonial-body">
                        <p>Duis rutrum nisl urna. Maecenas vel libero this
                           faucibus nisi venenatis hendrerit a id lectus.P
                           Suspendissendt molestie turpis nec laciniane
                           vehicula volutpat purus.</p>
                        <div class="testimonial-bottom">
                           <div class="reviewer-info">
                              <h4 class="reviewer-name">Adam Groff</h4>
                              <h6>Traveller</h6>
                           </div>
                           <ul class="testimonial-rating">
                              <li><i class="bi bi-star-fill"></i></li>
                              <li><i class="bi bi-star-fill"></i></li>
                              <li><i class="bi bi-star-fill"></i></li>
                              <li><i class="bi bi-star-fill"></i></li>
                              <li><i class="bi bi-star-fill"></i></li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="swiper-slide">
                  <div class="testimonial-card testimonial-card-alpha">
                     <div class="testimonial-overlay-img">
                        <img src="<?= IMAGE ?>reviewer-1.png" alt="">
                     </div>
                     <div class="testimonial-card-top">
                        <div class="qoute-icon"><i class="bx bxs-quote-left"></i></div>
                        <div class="testimonial-thumb"><img src="<?= IMAGE ?>r-sm2.png" alt=""></div>
                        <h3 class="testimonial-count">05</h3>
                     </div>
                     <div class="testimonial-body">
                        <p>Duis rutrum nisl urna. Maecenas vel libero this
                           faucibus nisi venenatis hendrerit a id lectus.P
                           Suspendissendt molestie turpis nec laciniane
                           vehicula volutpat purus.</p>
                        <div class="testimonial-bottom">
                           <div class="reviewer-info">
                              <h4 class="reviewer-name">Adam Groff</h4>
                              <h6>Traveller</h6>
                           </div>
                           <ul class="testimonial-rating">
                              <li><i class="bi bi-star-fill"></i></li>
                              <li><i class="bi bi-star-fill"></i></li>
                              <li><i class="bi bi-star-fill"></i></li>
                              <li><i class="bi bi-star-fill"></i></li>
                              <li><i class="bi bi-star-fill"></i></li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="slider-pagination-wrapper">
               <div class="slider-pagination bd-pagination mt-50 justify-content-center"></div>
            </div>
         </div>
      </div>
   </section>
   <!-- testimonial area start -->
   <div class="it-work-area it-work-bg grey-bg pt-120 pb-120" data-background="<?= IMAGE ?>work-bg.jpg"
      style="background-image: url(&quot;assets/img/home-2/work/work-bg.jpg&quot;);">
      <div class="container">
         <div class="row align-items-center justify-content-center section-title-space">
            <div class="col-xl-6">
               <div class="section-title-wrapper text-center">
                  <span class="section-subtitle mb-10">Offers</span>
                  <h2 class="section-title">Services Offered</h2>
               </div>
            </div>
         </div>
         <div class="it-work-wrap p-relative">

            <div class="row counter-row">
               <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                  <div class="it-work-item text-center p-relative">
                     <div class="it-work-quantity fix p-relative">
                     </div>
                     <div class="it-work-box">
                        <h3 class="it-work-title">
                           <a href="#">Adventure Tours</a>
                        </h3>
                        <p>Explore offbeat destinations with our carefully crafted adventure tours, including activities
                           such as trekking, camping, water sports, and wildlife excursions.</p>
                     </div>
                  </div>
               </div>
               <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                  <div class="it-work-item text-center p-relative">
                     <div class="it-work-quantity fix p-relative">
                     </div>
                     <div class="it-work-box">
                        <h3 class="it-work-title">
                           <a href="#">Customized Packages</a>
                        </h3>
                        <p>Tailor your adventure according to your preferences with our customizable packages, ensuring
                           a personalized and memorable experience.</p>
                     </div>
                  </div>
               </div>
               <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                  <div class="it-work-item text-center p-relative">
                     <div class="it-work-quantity fix p-relative">
                     </div>
                     <div class="it-work-box">
                        <h3 class="it-work-title">
                           <a href="#">Environmental Workshops</a>
                        </h3>
                        <p>Engage in educational workshops focused on sustainable travel practices, environmental
                           conservation, and responsible tourism.</p>
                     </div>
                  </div>
               </div>
               <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                  <div class="it-work-item text-center p-relative">
                     <div class="it-work-quantity fix p-relative">
                     </div>
                     <div class="it-work-box">
                        <h3 class="it-work-title">
                           <a href="#">Corporate Retreats</a>
                        </h3>
                        <p>Plan team-building and corporate retreats with a touch of adventure, fostering teamwork and
                           rejuvenation.</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>

   <!-- download area end -->
   <!-- <section class="bd-chose-area section-space">
            <div class="container">
                <div class="row align-items-center justify-content-center section-title-space">
                    <div class="col-xl-6">
                        <div class="section-title-wrapper text-center">
                            <span class="section-subtitle mb-10">Offers</span>
                            <h2 class="section-title">Services Offered</h2>
                        </div>
                    </div>
                </div>
                <div class="row gy-24">
                    <ol>
  <li style="--accent-color: #7f3d5a">
    
     <div class="chose-wrapper">
                            <div class="chose-item">
                                <div class="chose-icon"><span><i class="fa-regular fa-user"></i></span></div>
                                <h6 class="chose-title">Adventure Tours</h6>
                                <p class="chose-desc">Explore offbeat destinations with our carefully crafted adventure tours, including activities such as trekking, camping, water sports, and wildlife excursions.</p>
                            </div>
                        </div>
  </li>
  <li style="--accent-color: #7f3d5a">
     <div class="chose-wrapper">
                            <div class="chose-item">
                                <div class="chose-icon"><i class="fa-solid fa-hourglass"></i></div>
                                <h6 class="chose-title">Customized Packages </h6>
                                <p class="chose-desc">Tailor your adventure according to your preferences with our
customizable packages, ensuring a personalized and memorable experience.</p>
                            </div>
                        </div>
  </li>
  <li style="--accent-color: #7f3d5a">
     <div class="chose-wrapper">
                            <div class="chose-item">
                                <div class="chose-icon"><i class="fa-sharp fa-light fa-face-smile"></i></div>
                                <h6 class="chose-title">Environmental Workshops </h6>
                                <p class="chose-desc">Engage in educational workshops focused on sustainable
travel practices, environmental conservation, and responsible tourism.</p>
                            </div>
                        </div>
  </li>
  <li style="--accent-color: #7f3d5a">
    <div class="chose-wrapper">
                            <div class="chose-item">
                                <div class="chose-icon"><i class="fa-sharp fa-regular fa-lock"></i></div>
                                <h6 class="chose-title">Corporate Retreats</h6>
                                <p class="chose-desc">Plan team-building and corporate retreats with a touch of adventure,
fostering teamwork and rejuvenation.</p>
                            </div>
                        </div>
  </li>
</ol>
                    
                   
                    
                </div>
            </div>
        </section> -->
   <!-- chose area end -->
   <section class="bd-offer-area section-space" id="offer">
      <div class="container">
         <div class="row gy-24">
            <div class="col-xxl-6 col-xl-6 col-xl-6 col-lg-6 col-md-12 wow fadeInLeft"
               style="visibility: visible; animation-name: fadeInLeft;">
               <div class="offer-wrapper offer-style-four theme-bg">
                  <div class="offer-content-wrapper">
                     <div class="offer-content mb-25">
                        <h2 class="section-title white-text mb-10">Special 30% off</h2>
                        <h5 class="offer-subtitle color-warning mb-10">Select Hotel Deals</h5>
                        <p>Share the core values and principles that drive your company. Emphasize a commitment to
                           custome.</p>
                     </div>
                     <div class="offer-btn">
                        <a href="contact.html"
                           class="bd-primary-btn btn-style has-arrow is-bg btn-tertiary is-white radius-60">
                           <span class="bd-primary-btn-arrow arrow-right"><i
                                 class="fa-regular fa-arrow-right"></i></span>
                           <span class="bd-primary-btn-text">Know More</span>
                           <span class="bd-primary-btn-circle"></span>
                           <span class="bd-primary-btn-arrow arrow-left"><i
                                 class="fa-regular fa-arrow-right"></i></span>
                        </a>

                     </div>
                  </div>
                  <div class="offer-image">
                     <img src="<?= IMAGE ?>offer/offer-img-4.png" alt="image">
                  </div>
               </div>
            </div>
            <div class="col-xxl-6 col-xl-6 col-xl-6 col-lg-6 col-md-12 wow fadeInRight"
               style="visibility: visible; animation-name: fadeInRight;">
               <div class="offer-wrapper offer-style-four warning-bg">
                  <div class="offer-content-wrapper">
                     <div class="offer-content mb-25">
                        <h2 class="section-title white-text mb-10">Get 20% off</h2>
                        <span class="b4">Lets Explore the World</span>
                     </div>
                     <div class="offer-btn">
                        <a href="contact.html" class="bd-primary-btn btn-style has-arrow is-bg is-white radius-60">
                           <span class="bd-primary-btn-arrow arrow-right"><i
                                 class="fa-regular fa-arrow-right"></i></span>
                           <span class="bd-primary-btn-text">Know More</span>
                           <span class="bd-primary-btn-circle"></span>
                           <span class="bd-primary-btn-arrow arrow-left"><i
                                 class="fa-regular fa-arrow-right"></i></span>
                        </a>

                     </div>
                  </div>
                  <div class="offer-image">
                     <img src="<?= IMAGE ?>offer/offer-img-5.png" alt="image">
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>


   <section class="bd-cta-area section-space-small cta-image-bg image-bg p-relative fix"
      data-background="<?= IMAGE ?>cta/cta-img-3.png"
      style="background-image: url(&quot;<?= IMAGE ?>cta/cta-img-3.png&quot;);">
      <div class="container">
         <div class="cta-three-shape">
            <div class="cta-three-shape-one p-absolute">
               <img src="<?= IMAGE ?>shapes/cta-star.png" alt="shape">
            </div>
            <div class="cta-three-shape-two p-absolute">
               <img src="<?= IMAGE ?>shapes/cta-eye.png" alt="shape">
            </div>
            <div class="cta-three-shape-three p-absolute">
               <img src="<?= IMAGE ?>shapes/cta-x.png" alt="shape">
            </div>
            <div class="cta-three-shape-four p-absolute">
               <img src="<?= IMAGE ?>shapes/cta-star.png" alt="shape">
            </div>
            <div class="cta-three-shape-five p-absolute">
               <img src="<?= IMAGE ?>shapes/cta-eye.png" alt="shape">
            </div>
            <div class="cta-three-shape-six p-absolute">
               <img src="<?= IMAGE ?>shapes/cta-x.png" alt="shape">
            </div>
            <div class="cta-three-shape-seven p-absolute">
               <img src="<?= IMAGE ?>shapes/cta-line.png" alt="shape">
            </div>
            <div class="cta-three-shape-eight p-absolute">
               <img src="<?= IMAGE ?>shapes/plane-6.png" alt="shape">
            </div>
         </div>
         <div class="row gy-24 align-items-center justify-content-center">
            <div class="col-xl-6 col-md-8">
               <div class="cta-content-wrapper cta-style-three text-center position-relative z-index-5">
                  <span class="section-subtitle color-warning mb-15">Find New Places To Visit</span>
                  <h2 class="section-title white-text mb-20">Get Ready to Escape from Reality!</h2>
                  <p>Escape from Reality is not just a travel experience; It's a journey into the extraordinary. Join us
                     on an adventure where you can escape the mundane, embrace the thrill, and leave a positive impact
                     on the world. Travel with purpose; Travel with Escape from Reality.
                  </p>
                  <div class="cta-btn">
                     <a href="booking.html"
                        class="bd-primary-btn btn-style has-arrow is-bg btn-tertiary is-white radius-60">
                        <span class="bd-primary-btn-arrow arrow-right"><i class="fa-regular fa-arrow-right"></i></span>
                        <span class="bd-primary-btn-text">Explore Now</span>
                        <span class="bd-primary-btn-circle"></span>
                        <span class="bd-primary-btn-arrow arrow-left"><i class="fa-regular fa-arrow-right"></i></span>
                     </a>

                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>

   <!-- blog area start -->
   <section class="bd-blog-area section-space">
      <div class="container">
         <div class="row gy-24 align-items-center justify-content-between section-title-space">
            <div class="col-xl-8 col-lg-8">
               <div class="section-title-wrapper">
                  <span class="section-subtitle mb-10">Our Blog</span>
                  <h2 class="section-title">Blog </h2>
               </div>
            </div>
            <div class="col-xl-3 col-lg-3">
               <div class="blog-btn text-md-end">
                  <a href="#" class="bd-primary-btn btn-style has-arrow is-bg radius-60">
                     <span class="bd-primary-btn-arrow arrow-right"><i class="fa-regular fa-arrow-right"></i></span>
                     <span class="bd-primary-btn-text">See More</span>
                     <span class="bd-primary-btn-circle"></span>
                     <span class="bd-primary-btn-arrow arrow-left"><i class="fa-regular fa-arrow-right"></i></span>
                  </a>

               </div>
            </div>
         </div>
         <div class="swiper blog_activation">
            <div class="swiper-wrapper">
               <div class="swiper-slide">
                  <article class="bd-blog-wrapper blog-default blog-style-three">
                     <div class="blog-thumb image-hover-effect">
                        <a href="#"><img src="<?= IMAGE ?>blog/blog-image-5.png" alt="img"></a>
                     </div>
                     <div class="blog-tag">
                        <span><a href="#">Travel</a></span>
                     </div>
                     <div class="blog-content">
                        <div class="blog-meta-list">
                           <div class="blog-meta-item">
                              <span class="meta-icon">
                                 <i class="fa-solid fa-person"></i>
                              </span>
                              <span class="meta-text">By <a class="meta-author" href="#">Admin</a></span>
                           </div>
                           <div class="blog-meta-item">
                              <span class="meta-icon">
                                 <i class="fa-solid fa-calendar-check"></i>
                              </span>
                              <span class="meta-text"><a href="#">Jan 25 2024</a></span>
                           </div>
                        </div>
                        <h5 class="blog-title mb-30 underline"><a href="#">Exploring the World, One Adventure at a
                              Time</a></h5>
                        <div class="blog-btn">
                           <a href="#" class="bd-primary-btn btn-style has-arrow radius-60">
                              <span class="bd-primary-btn-arrow arrow-right"><i
                                    class="fa-regular fa-arrow-right"></i></span>
                              <span class="bd-primary-btn-text">Read More</span>
                              <span class="bd-primary-btn-circle"></span>
                              <span class="bd-primary-btn-arrow arrow-left"><i
                                    class="fa-regular fa-arrow-right"></i></span>
                           </a>

                        </div>
                     </div>
                  </article>
               </div>
               <div class="swiper-slide">
                  <article class="bd-blog-wrapper blog-default blog-style-three">
                     <div class="blog-thumb image-hover-effect">
                        <a href="#"><img src="<?= IMAGE ?>blog/blog-image-6.png" alt="img"></a>
                     </div>
                     <div class="blog-tag">
                        <span><a href="#">Travel</a></span>
                     </div>
                     <div class="blog-content">
                        <div class="blog-meta-list">
                           <div class="blog-meta-item">
                              <span class="meta-icon">
                                 <i class="fa-solid fa-person"></i>
                              </span>
                              <span class="meta-text">By <a class="meta-author" href="#">Admin </a></span>
                           </div>
                           <div class="blog-meta-item">
                              <span class="meta-icon">
                                 <i class="fa-solid fa-calendar-check"></i>
                              </span>
                              <span class="meta-text"><a href="#">Jan 25 2024</a></span>
                           </div>
                        </div>
                        <h5 class="blog-title mb-30 underline"><a href="#">Unveiling Hidden Gems Around the Globe</a>
                        </h5>
                        <div class="blog-btn">
                           <a href="#" class="bd-primary-btn btn-style has-arrow radius-60">
                              <span class="bd-primary-btn-arrow arrow-right"><i
                                    class="fa-regular fa-arrow-right"></i></span>
                              <span class="bd-primary-btn-text">Read More</span>
                              <span class="bd-primary-btn-circle"></span>
                              <span class="bd-primary-btn-arrow arrow-left"><i
                                    class="fa-regular fa-arrow-right"></i></span>
                           </a>

                        </div>
                     </div>
                  </article>
               </div>
               <div class="swiper-slide">
                  <article class="bd-blog-wrapper blog-default blog-style-three">
                     <div class="blog-thumb image-hover-effect">
                        <a href="#"><img src="<?= IMAGE ?>blog/blog-image-2.png" alt="img"></a>
                     </div>
                     <div class="blog-tag">
                        <span><a href="#">Wellness</a></span>
                     </div>
                     <div class="blog-content">
                        <div class="blog-meta-list">
                           <div class="blog-meta-item">
                              <span class="meta-icon">
                                 <i class="fa-solid fa-person"></i>
                              </span>
                              <span class="meta-text">By <a class="meta-author" href="#">Admin </a></span>
                           </div>
                           <div class="blog-meta-item">
                              <span class="meta-icon">
                                 <i class="fa-solid fa-calendar-check"></i>
                              </span>
                              <span class="meta-text"><a href="#">Jan 25 2024</a></span>
                           </div>
                        </div>
                        <h5 class="blog-title mb-30 underline"><a href="#">Where Every Destination Tells a Story</a>
                        </h5>
                        <div class="blog-btn">
                           <a href="#" class="bd-primary-btn btn-style has-arrow radius-60">
                              <span class="bd-primary-btn-arrow arrow-right"><i
                                    class="fa-regular fa-arrow-right"></i></span>
                              <span class="bd-primary-btn-text">Read More</span>
                              <span class="bd-primary-btn-circle"></span>
                              <span class="bd-primary-btn-arrow arrow-left"><i
                                    class="fa-regular fa-arrow-right"></i></span>
                           </a>

                        </div>
                     </div>
                  </article>
               </div>
               <div class="swiper-slide">
                  <article class="bd-blog-wrapper blog-default blog-style-three">
                     <div class="blog-thumb image-hover-effect">
                        <a href="#"><img src="<?= IMAGE ?>blog/blog-image-4.png" alt="img"></a>
                     </div>
                     <div class="blog-tag">
                        <span><a href="#">Trip</a></span>
                     </div>
                     <div class="blog-content">
                        <div class="blog-meta-list">
                           <div class="blog-meta-item">
                              <span class="meta-icon">
                                 <i class="fa-solid fa-person"></i>
                              </span>
                              <span class="meta-text">By <a class="meta-author" href="#">Admin </a></span>
                           </div>
                           <div class="blog-meta-item">
                              <span class="meta-icon">
                                 <i class="fa-solid fa-calendar-check"></i>
                              </span>
                              <span class="meta-text"><a href="#">January 02 2024</a></span>
                           </div>
                        </div>
                        <h5 class="blog-title mb-30 underline"><a href="#">Embark on Your Next Adventure with Us</a>
                        </h5>
                        <div class="blog-btn">
                           <a href="#" class="bd-primary-btn btn-style has-arrow radius-60">
                              <span class="bd-primary-btn-arrow arrow-right"><i
                                    class="fa-regular fa-arrow-right"></i></span>
                              <span class="bd-primary-btn-text">Read More</span>
                              <span class="bd-primary-btn-circle"></span>
                              <span class="bd-primary-btn-arrow arrow-left"><i
                                    class="fa-regular fa-arrow-right"></i></span>
                           </a>

                        </div>
                     </div>
                  </article>
               </div>
            </div>
         </div>
         <div class="blog-slider-pagination bd-pagination mt-20 justify-content-center"></div>
      </div>
   </section>
   <!-- blog area end -->


   <!-- cta area start -->
   <section class="bd-cta-section theme-bg fix p-relative">
      <div class="cta-shape-bg" data-background="<?= IMAGE ?>cta/cta-img-2-bg.png">
      </div>
      <div class="container">
         <div class="cta-three-shape">
            <div class="cta-three-shape-one p-absolute">
               <img src="<?= IMAGE ?>shapes/cta-star.png" alt="shape">
            </div>
            <div class="cta-three-shape-two p-absolute">
               <img src="<?= IMAGE ?>shapes/cta-eye.png" alt="shape">
            </div>
            <div class="cta-three-shape-three p-absolute">
               <img src="<?= IMAGE ?>shapes/cta-x.png" alt="shape">
            </div>
            <div class="cta-three-shape-four p-absolute">
               <img src="<?= IMAGE ?>shapes/cta-star.png" alt="shape">
            </div>
            <div class="cta-three-shape-six p-absolute">
               <img src="<?= IMAGE ?>shapes/cta-x.png" alt="shape">
            </div>
         </div>
         <div class="row align-items-center">
            <div class="col-xl-6 col-lg-4 order-lg-0 order-1 wow fadeInLeft">
               <div class="cta-thumb-wrap cta-style-two p-relative">
                  <div class="cta-thumb-two">
                     <img src="<?= IMAGE ?>cta/cta-img-2.png" alt="image">
                  </div>
               </div>
            </div>
            <div class="col-xl-5 col-lg-6 order-lg-1 order-0">
               <div class="cta-wrapper cta-style-two">
                  <div class="section-title-wrapper mb-35">
                     <h2 class="section-title small white-text mb-15">Subscribe To Our Mailing List & Stay Up To Date
                     </h2>
                     <p class="white-text">Share the core values and principles that drive your company Emphasize a
                        commitment to customer satisfaction</p>
                     <div class="cta-form">
                        <form action="#">
                           <div class="cta-input white-button">
                              <input type="text" placeholder="Your email address">
                              <button type="submit" class="bd-primary-btn btn-style has-arrow is-bg radius-8">
                                 <span class="bd-primary-btn-arrow arrow-right"><i
                                       class="fa-regular fa-arrow-right"></i></span>
                                 <span class="bd-primary-btn-text">Subscribe Now</span>
                                 <span class="bd-primary-btn-circle"></span>
                                 <span class="bd-primary-btn-arrow arrow-left"><i
                                       class="fa-regular fa-arrow-right"></i></span>
                              </button>
                           </div>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- cta area end -->



</main>
<!-- Body main wrapper end -->