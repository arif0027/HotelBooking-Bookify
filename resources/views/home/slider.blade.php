<section class="banner_main">
   <div id="myCarousel" class="carousel slide banner" data-ride="carousel">
      <ol class="carousel-indicators">
         <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
         <li data-target="#myCarousel" data-slide-to="1"></li>
         <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
         <div class="carousel-item active">
            <img class="first-slide" src="images/banner1.jpg" alt="First slide">
            <div class="container">
            </div>
         </div>
         <div class="carousel-item">
            <img class="second-slide" src="images/banner2.jpg" alt="Second slide">
         </div>
         <div class="carousel-item">
            <img class="third-slide" src="images/banner3.jpg" alt="Third slide">
         </div>
      </div>
      <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
      </a>
   </div>
   <div class="booking_ocline">
      <div class="container">
         <div class="row">
            <div class="col-md-5">
               <div class="book_room">
                  <h1>Book a Room Online</h1>
                  <form class="book_now">
                     <div class="row">
                        <div class="col-md-12">
                           <span>From</span>
                           <select class="online_book" name="from" id="fromLocation">
                             <option style="background: black" selected value="dhaka">Dhaka</option>
                             <option style="background: black" value="coxsbazar">Cox's Bazar</option>
                             <option style="background: black" value="saintmartin">Saint Martin</option>
                         </select>
                        </div>
                        <div class="col-md-12">
                           <span>To</span>
                             <select class="online_book" name="to" id="toLocation">
                                <option style="background: black" selected value="coxsbazar">Cox's Bazar</option>
                                <option style="background: black" value="dhaka">Dhaka</option>
                                <option style="background: black" value="saintmartin">Saint Martin</option>
                             </select>
                        </div>
                        <div class="col-md-12">
                           <a href="{{ url('our_rooms') }}" class="book_btn" id="bookNowButton" style="text-align:center;">Book Now</a>
                        </div>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function () {
  var fromLocation = document.getElementById('fromLocation');
  var toLocation = document.getElementById('toLocation');
  var bookNowButton = document.getElementById('bookNowButton');

  function updateBookingUrl() {
     var fromValue = fromLocation.value;
     var toValue = toLocation.value;

     var ourRoomsUrl = "{{ url('our_rooms') }}";
     var ourCoxUrl = "{{ url('our_coxrooms') }}";

     if (fromValue === 'dhaka' && toValue === 'coxsbazar') {
        bookNowButton.href = ourCoxUrl;
     } else if (fromValue === 'coxsbazar' && toValue === 'dhaka') {
        bookNowButton.href = ourRoomsUrl;
     } else {
        bookNowButton.href = ourRoomsUrl;  // default URL if other combinations are not specified
     }
  }

  fromLocation.addEventListener('change', updateBookingUrl);
  toLocation.addEventListener('change', updateBookingUrl);

  // Initialize the URL based on default selections
  updateBookingUrl();
});
</script>
