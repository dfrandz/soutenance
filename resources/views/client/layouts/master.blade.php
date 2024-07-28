<!DOCTYPE html>
<html lang="en">
   
<!-- Mirrored from employee-hiring.creativbydesigns.com/demo/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 13 Mar 2024 23:56:44 GMT -->
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <title>Home</title>
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <link rel="icon" href="{{asset('client/images/favicon.png')}}" type="image/png" sizes="16x16">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
      <!-- Stylesheets -->
      <link href="{{asset("client/css/bootstrap.css")}}" rel="stylesheet">
      <link href="{{asset('client/css/style.css')}}" rel="stylesheet">
      <link href="{{asset('client/css/slick.css')}}" rel="stylesheet">
   </head>
   <body>

    {{-- header start --}}
    @include('client.layouts.header')
    {{-- header end --}}
       
    @yield('content')
         
    {{-- footer start --}}
    @include('client.layouts.footer')
    {{-- footer end --}}

      <!-- Modal Box-->
      <div class="modal fade Free-Consultation" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
         <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
               <div class="modal-header">
                  <h4 class="modal-title" id="exampleModalLongTitle">Hire A Virtual Assistant</h4>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
               </div>
               <div class="modal-body">
                  <form>
                     <div class="row">
                        <div class="col-sm-6">
                           <input type="text" placeholder="First Name*" required="">
                        </div>
                        <div class="col-sm-6">
                           <input type="text" placeholder="Last Name*" required="">
                        </div>
                        <div class="col-sm-6">
                           <input type="email" placeholder="Email Id*" required="">
                        </div>
                        <div class="col-sm-6">
                           <input type="text" placeholder="Phone Number" required="">
                        </div>
                        <div class="col-sm-12 checkmark-looking">
                           <h6>What are you looking for?</h6>
                           <div class="radio-group">
                              <label class="widthSet">I want to hire remote staff
                              <input type="radio" name="Are you looking for" checked="" value="I want to hire a Virtual Assistant"><span class="checkmark"></span>
                              </label>
                              <label class="widthSet">I want to create my work from home profile
                              <input type="radio" name="Are you looking for" value="I want to work as a Virtual Assistant"><span class="checkmark"></span>
                              </label>
                           </div>
                        </div>
                        <div class="col-sm-12">               
                           <textarea type="text" placeholder="Tell us the work or processes that you want to outsource to your VA(s) (150-200 words)*"></textarea>
                           <button type="submit" class="theme-btn">Submit Now! <span class="fa fa-angle-right"></span></button>
                        </div>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
      <!-- JavaScript -->  
      <script  src="{{asset('client/js/jquery-3.6.0.min.js')}}"></script>
      <script src="{{asset('client/js/slick.min.js')}}"></script>
      <script src="{{asset("client/js/bootstrap.min.js")}}"></script>
      <script src="{{asset('client/js/custom.js')}}"></script>
      <script src="{{asset('client/js/bootstrap.min.js')}}"></script>
   </body>

<!-- Mirrored from employee-hiring.creativbydesigns.com/demo/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 13 Mar 2024 23:57:09 GMT -->
</html>