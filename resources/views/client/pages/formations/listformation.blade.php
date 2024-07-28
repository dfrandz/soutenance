@extends('client.layouts.master')

@section('content')
    <!-- Page Title-->
    <section class="page-title">
      <div class="container">
         <div class="title-outer">
            <h1>Featured Jobs</h1>
            <ul class="page-breadcrumb">
               <li><a href="#">Home</a></li>
               <li> | </li>
               <li>Featured Jobs</li>
            </ul>
         </div>
      </div>
   </section>
   <!-- Single Profile Page -->
   <section class="single-profile-page Hire-Talent-Page">
      <div class="container">
         <div class="row">
            <div class="sidebar-side col-lg-3 col-md-12 col-sm-12">
               <aside class="sidebar sticky_profile Hire-Talent">
                  <div class="hire-talent-widget timezone-widget">
                     <h4 class="widget-title-hire">Timezone</h4>
                     <div class="filter-form-widget">
                        <div class="timezone-section">
                           <div class="timezone-item">
                              <label>All US Timezones</label>
                              <input type="radio" name="timezone" value="All US">
                           </div>
                           <div class="timezone-item">
                              <label>US EST</label>
                              <input type="radio" name="timezone" value="US EST">
                           </div>
                           <div class="timezone-item">
                              <label>US PST</label>
                              <input type="radio" name="timezone" value="US PST">
                           </div>
                           <div class="timezone-item">
                              <label>Asia IST</label>
                              <input type="radio" name="timezone" value="Asia">
                           </div>
                           <div class="timezone-item">
                              <label>Europe CET</label>
                              <input type="radio" name="timezone" value="Europe">
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="hire-talent-widget">
                     <h4 class="widget-title-hire">Technical Skills</h4>
                     <div class="skill-filter">
                        <span class="skill-filter-item">Lead Generation <i class="fas fa-chevron-right"></i></span>
                        <span class="skill-filter-item">Social Media <i class="fas fa-chevron-right"></i></span>
                        <span class="skill-filter-item">Online Research <i class="fas fa-chevron-right"></i></span>
                        <span class="skill-filter-item">Google Search <i class="fas fa-chevron-right"></i></span>
                        <span class="skill-filter-item">Email Marketing <i class="fas fa-chevron-right"></i></span>
                        <span class="skill-filter-item">Sales Tasks <i class="fas fa-chevron-right"></i></span>
                     </div>
                  </div>
               </aside>
            </div>
            <!-- Profile Details -->
            <div class="col-lg-9 col-md-12 col-sm-12">
               <div class="search-sort-section">
                  <div id="search-form">
                     <i class="fas fa-search"></i>
                     <input type="text" name="search" id="searchbar" value="" placeholder="Search a skill">
                  </div>
                  <div id="sort-form">
                     <span id="sort-text">Sort By</span>
                     <select id="sort-dropdown" name="sort_by">
                        <option value="">Select</option>
                        <option value="availability">Availability</option>
                        <option value="client_feedback">Customer Reviews</option>
                        <option value="english_rating">Written English</option>
                     </select>
                  </div>
               </div>
               <div class="grid-jos-List">
                  <div class="row">
                     <div class="col-lg-4 col-md-4 col-sm-4">
                        <div class="job-grid">
                           <div class="top-left">
                              <span class="urgent">Urgent</span>
                           </div>
                           <div class="job-type with-title">
                              <a class="type-job" href="#">Full Time</a>
                           </div>
                           <div class="employer-logo">
                              <a href="#"><img src="assets/images/company/pic1.jpg" alt="company"></a>
                           </div>
                           <div class="job-information">
                              <h3 class="employer-title">
                                 <a href="#">Employer</a>
                              </h3>
                              <h2 class="job-title"><a href="#">Junior Graphic Designer</a></h2>
                              <div class="job-location">
                                 <i class="fa-solid fa-location-dot"></i>
                                 1363-1385 Sunset Blvd Los Angeles, CA 90026, USA                 
                              </div>
                           </div>
                           <div class="hire-details">                 
                              <a class="theme-btn" href="#">Apply Now <span class="fa fa-angle-right"></span></a>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-4 col-md-4 col-sm-4">
                        <div class="job-grid">
                           <div class="top-left">
                              <span class="featured-text">Featured</span>
                           </div>
                           <div class="job-type with-title">
                              <a class="type-job" href="#">Freelancer</a>
                           </div>
                           <div class="employer-logo">
                              <a href="#"><img src="assets/images/company/pic2.jpg" alt="company"></a>
                           </div>
                           <div class="job-information">
                              <h3 class="employer-title">
                                 <a href="#">Sagments</a>
                              </h3>
                              <h2 class="job-title"><a href="#">Finance Manager & Health</a></h2>
                              <div class="job-location">
                                 <i class="fa-solid fa-location-dot"></i>
                                 1363-1385 Sunset Blvd Los Angeles, CA 90026, USA                 
                              </div>
                           </div>
                           <div class="hire-details">                 
                              <a class="theme-btn" href="#">Apply Now <span class="fa fa-angle-right"></span></a>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-4 col-md-4 col-sm-4">
                        <div class="job-grid">
                           <div class="top-left">
                              <span class="urgent">Urgent</span>
                           </div>
                           <div class="job-type with-title">
                              <a class="type-job" href="#">Part Time</a>
                           </div>
                           <div class="employer-logo">
                              <a href="#"><img src="assets/images/company/pic3.jpg" alt="company"></a>
                           </div>
                           <div class="job-information">
                              <h3 class="employer-title">
                                 <a href="#">Stripe</a>
                              </h3>
                              <h2 class="job-title"><a href="#">Senior Product Designer</a></h2>
                              <div class="job-location">
                                 <i class="fa-solid fa-location-dot"></i>
                                 1363-1385 Sunset Blvd Los Angeles, CA 90026, USA                 
                              </div>
                           </div>
                           <div class="hire-details">                 
                              <a class="theme-btn" href="#">Apply Now <span class="fa fa-angle-right"></span></a>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-4 col-md-4 col-sm-4">
                        <div class="job-grid">
                           <div class="top-left">
                              <span class="featured-text">Featured</span>
                           </div>
                           <div class="job-type with-title">
                              <a class="type-job" href="#">Temporary</a>
                           </div>
                           <div class="employer-logo">
                              <a href="#"><img src="assets/images/company/pic4.jpg" alt="company"></a>
                           </div>
                           <div class="job-information">
                              <h3 class="employer-title">
                                 <a href="#">Figma</a>
                              </h3>
                              <h2 class="job-title"><a href="#">Art Production Specialist</a></h2>
                              <div class="job-location">
                                 <i class="fa-solid fa-location-dot"></i>
                                 1363-1385 Sunset Blvd Los Angeles, CA 90026, USA                 
                              </div>
                           </div>
                           <div class="hire-details">                 
                              <a class="theme-btn" href="#">Apply Now <span class="fa fa-angle-right"></span></a>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-4 col-md-4 col-sm-4">
                        <div class="job-grid">
                           <div class="top-left">
                              <span class="urgent">Urgent</span>
                           </div>
                           <div class="job-type with-title">
                              <a class="type-job" href="#">Part Time</a>
                           </div>
                           <div class="employer-logo">
                              <a href="#"><img src="assets/images/company/pic3.jpg" alt="company"></a>
                           </div>
                           <div class="job-information">
                              <h3 class="employer-title">
                                 <a href="#">Stripe</a>
                              </h3>
                              <h2 class="job-title"><a href="#">Senior Product Designer</a></h2>
                              <div class="job-location">
                                 <i class="fa-solid fa-location-dot"></i>
                                 1363-1385 Sunset Blvd Los Angeles, CA 90026, USA                 
                              </div>
                           </div>
                           <div class="hire-details">                 
                              <a class="theme-btn" href="#">Apply Now <span class="fa fa-angle-right"></span></a>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-4 col-md-4 col-sm-4">
                        <div class="job-grid">
                           <div class="top-left">
                              <span class="featured-text">Featured</span>
                           </div>
                           <div class="job-type with-title">
                              <a class="type-job" href="#">Temporary</a>
                           </div>
                           <div class="employer-logo">
                              <a href="#"><img src="assets/images/company/pic4.jpg" alt="company"></a>
                           </div>
                           <div class="job-information">
                              <h3 class="employer-title">
                                 <a href="#">Figma</a>
                              </h3>
                              <h2 class="job-title"><a href="#">Art Production Specialist</a></h2>
                              <div class="job-location">
                                 <i class="fa-solid fa-location-dot"></i>
                                 1363-1385 Sunset Blvd Los Angeles, CA 90026, USA                 
                              </div>
                           </div>
                           <div class="hire-details">                 
                              <a class="theme-btn" href="#">Apply Now <span class="fa fa-angle-right"></span></a>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-4 col-md-4 col-sm-4">
                        <div class="job-grid">
                           <div class="top-left">
                              <span class="featured-text">Featured</span>
                           </div>
                           <div class="job-type with-title">
                              <a class="type-job" href="#">Freelancer</a>
                           </div>
                           <div class="employer-logo">
                              <a href="#"><img src="assets/images/company/pic2.jpg" alt="company"></a>
                           </div>
                           <div class="job-information">
                              <h3 class="employer-title">
                                 <a href="#">Sagments</a>
                              </h3>
                              <h2 class="job-title"><a href="#">Finance Manager & Health</a></h2>
                              <div class="job-location">
                                 <i class="fa-solid fa-location-dot"></i>
                                 1363-1385 Sunset Blvd Los Angeles, CA 90026, USA                 
                              </div>
                           </div>
                           <div class="hire-details">                 
                              <a class="theme-btn" href="#">Apply Now <span class="fa fa-angle-right"></span></a>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-4 col-md-4 col-sm-4">
                        <div class="job-grid">
                           <div class="top-left">
                              <span class="urgent">Urgent</span>
                           </div>
                           <div class="job-type with-title">
                              <a class="type-job" href="#">Part Time</a>
                           </div>
                           <div class="employer-logo">
                              <a href="#"><img src="assets/images/company/pic3.jpg" alt="company"></a>
                           </div>
                           <div class="job-information">
                              <h3 class="employer-title">
                                 <a href="#">Stripe</a>
                              </h3>
                              <h2 class="job-title"><a href="#">Senior Product Designer</a></h2>
                              <div class="job-location">
                                 <i class="fa-solid fa-location-dot"></i>
                                 1363-1385 Sunset Blvd Los Angeles, CA 90026, USA                 
                              </div>
                           </div>
                           <div class="hire-details">                 
                              <a class="theme-btn" href="#">Apply Now <span class="fa fa-angle-right"></span></a>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-4 col-md-4 col-sm-4">
                        <div class="job-grid">
                           <div class="top-left">
                              <span class="featured-text">Featured</span>
                           </div>
                           <div class="job-type with-title">
                              <a class="type-job" href="#">Temporary</a>
                           </div>
                           <div class="employer-logo">
                              <a href="#"><img src="assets/images/company/pic4.jpg" alt="company"></a>
                           </div>
                           <div class="job-information">
                              <h3 class="employer-title">
                                 <a href="#">Figma</a>
                              </h3>
                              <h2 class="job-title"><a href="#">Art Production Specialist</a></h2>
                              <div class="job-location">
                                 <i class="fa-solid fa-location-dot"></i>
                                 1363-1385 Sunset Blvd Los Angeles, CA 90026, USA                 
                              </div>
                           </div>
                           <div class="hire-details">                 
                              <a class="theme-btn" href="#">Apply Now <span class="fa fa-angle-right"></span></a>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-4 col-md-4 col-sm-4">
                        <div class="job-grid">
                           <div class="top-left">
                              <span class="urgent">Urgent</span>
                           </div>
                           <div class="job-type with-title">
                              <a class="type-job" href="#">Full Time</a>
                           </div>
                           <div class="employer-logo">
                              <a href="#"><img src="assets/images/company/pic1.jpg" alt="company"></a>
                           </div>
                           <div class="job-information">
                              <h3 class="employer-title">
                                 <a href="#">Employer</a>
                              </h3>
                              <h2 class="job-title"><a href="#">Junior Graphic Designer</a></h2>
                              <div class="job-location">
                                 <i class="fa-solid fa-location-dot"></i>
                                 1363-1385 Sunset Blvd Los Angeles, CA 90026, USA                 
                              </div>
                           </div>
                           <div class="hire-details">                 
                              <a class="theme-btn" href="#">Apply Now <span class="fa fa-angle-right"></span></a>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-4 col-md-4 col-sm-4">
                        <div class="job-grid">
                           <div class="top-left">
                              <span class="featured-text">Featured</span>
                           </div>
                           <div class="job-type with-title">
                              <a class="type-job" href="#">Freelancer</a>
                           </div>
                           <div class="employer-logo">
                              <a href="#"><img src="assets/images/company/pic2.jpg" alt="company"></a>
                           </div>
                           <div class="job-information">
                              <h3 class="employer-title">
                                 <a href="#">Sagments</a>
                              </h3>
                              <h2 class="job-title"><a href="#">Finance Manager & Health</a></h2>
                              <div class="job-location">
                                 <i class="fa-solid fa-location-dot"></i>
                                 1363-1385 Sunset Blvd Los Angeles, CA 90026, USA                 
                              </div>
                           </div>
                           <div class="hire-details">                 
                              <a class="theme-btn" href="#">Apply Now <span class="fa fa-angle-right"></span></a>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-4 col-md-4 col-sm-4">
                        <div class="job-grid">
                           <div class="top-left">
                              <span class="urgent">Urgent</span>
                           </div>
                           <div class="job-type with-title">
                              <a class="type-job" href="#">Part Time</a>
                           </div>
                           <div class="employer-logo">
                              <a href="#"><img src="assets/images/company/pic3.jpg" alt="company"></a>
                           </div>
                           <div class="job-information">
                              <h3 class="employer-title">
                                 <a href="#">Stripe</a>
                              </h3>
                              <h2 class="job-title"><a href="#">Senior Product Designer</a></h2>
                              <div class="job-location">
                                 <i class="fa-solid fa-location-dot"></i>
                                 1363-1385 Sunset Blvd Los Angeles, CA 90026, USA                 
                              </div>
                           </div>
                           <div class="hire-details">                 
                              <a class="theme-btn" href="#">Apply Now <span class="fa fa-angle-right"></span></a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- Pagination -->
               <nav class="ls-pagination">
                  <ul>
                     <li class="prev"><a href="#"><i class="fa fa-arrow-left"></i></a></li>
                     <li><a href="#">1</a></li>
                     <li><a href="#" class="current-page">2</a></li>
                     <li><a href="#">3</a></li>
                     <li class="next"><a href="#"><i class="fa fa-arrow-right"></i></a></li>
                  </ul>
               </nav>
            </div>
         </div>
      </div>
   </section>
   <!-- Call To Action -->
   <section class="call-to-action-two call-to-action-bottom">
      <div class="container">
         <div class="row gird-flex">
            <div class="col-lg-7 col-md-12 col-sm-12">
               <div class="sec-title">
                  <h2>Your Dream Jobs Are Waiting</h2>
                  <div class="text">Over 1 million interactions, 50,000 success stories Make yours now.</div>
               </div>
            </div>
            <div class="col-lg-5 col-md-12 col-sm-12">
               <div class="btn-box">
                  <a href="#" class="theme-btn">Hire Talent <span class="fa fa-angle-right"></span></a>
                  <a href="#" class="theme-btn btn-style-two">Get Started <span class="fa fa-angle-right"></span></a>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- End Call To Action -->
@endsection