<div class="page-content">
  <div class="page-header">
      <div class="container-fluid">
          <h2 class="h5 no-margin-bottom">Dashboard</h2>
      </div>
  </div>
  <section class="no-padding-top no-padding-bottom">
      <div class="container-fluid">
          <div class="row">
              <div class="col-md-3 col-sm-6">
                  <div class="statistic-block block">
                      <div class="progress-details d-flex align-items-end justify-content-between">
                          <div class="title">
                              <div class="icon"><i class="icon-user-1"></i></div><strong>Users</strong>
                          </div>
                          <div class="number dashtext-1">{{ $userCount }}</div>
                      </div>
                      <div class="progress progress-template">
                          <div role="progressbar" style="width: {{ $userCount }}%" aria-valuenow="{{ $userCount }}" aria-valuemin="0" aria-valuemax="100" class="progress-bar progress-bar-template dashbg-1"></div>
                      </div>
                  </div>
              </div>
              <div class="col-md-3 col-sm-6">
                  <div class="statistic-block block">
                      <div class="progress-details d-flex align-items-end justify-content-between">
                          <div class="title">
                              <div class="icon"><i class="icon-contract"></i></div><strong>Hotel</strong>
                          </div>
                          <div class="number dashtext-2">{{ $hotelCount }}</div>
                      </div>
                      <div class="progress progress-template">
                          <div role="progressbar" style="width: {{ $hotelCount }}%" aria-valuenow="{{ $hotelCount }}" aria-valuemin="0" aria-valuemax="100" class="progress-bar progress-bar-template dashbg-2"></div>
                      </div>
                  </div>
              </div>
              <div class="col-md-3 col-sm-6">
                  <div class="statistic-block block">
                      <div class="progress-details d-flex align-items-end justify-content-between">
                          <div class="title">
                              <div class="icon"><i class="icon-paper-and-pencil"></i></div><strong>Room</strong>
                          </div>
                          <div class="number dashtext-3">{{ $roomCount }}</div>
                      </div>
                      <div class="progress progress-template">
                          <div role="progressbar" style="width: {{ $roomCount }}%" aria-valuenow="{{ $roomCount }}" aria-valuemin="0" aria-valuemax="100" class="progress-bar progress-bar-template dashbg-3"></div>
                      </div>
                  </div>
              </div>
              <div class="col-md-3 col-sm-6">
                  <div class="statistic-block block">
                      <div class="progress-details d-flex align-items-end justify-content-between">
                          <div class="title">
                              <div class="icon"><i class="icon-writing-whiteboard"></i></div><strong>Booking</strong>
                          </div>
                          <div class="number dashtext-4">{{ $bookingCount }}</div>
                      </div>
                      <div class="progress progress-template">
                          <div role="progressbar" style="width: {{ $bookingCount }}%" aria-valuenow="{{ $bookingCount }}" aria-valuemin="0" aria-valuemax="100" class="progress-bar progress-bar-template dashbg-4"></div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>
  <!-- Additional sections can go here -->

  <section class="no-padding-bottom">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-4">
          <div class="bar-chart block no-margin-bottom">
            <canvas id="barChartExample1"></canvas>
          </div>
          <div class="bar-chart block">
            <canvas id="barChartExample2"></canvas>
          </div>
        </div>
        <div class="col-lg-8">
          <div class="line-cahrt block">
            <canvas id="lineCahrt"></canvas>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>

    
      
   