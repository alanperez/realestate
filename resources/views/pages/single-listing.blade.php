@extends ('layouts.main')
@section('page-title', '2314 Grand St - Max Realtor')
@section('content')

<div class="single-listing-page">
    <div class="listing-top">
      <img class="listing-top__img" src="https://images.pexels.com/photos/106399/pexels-photo-106399.jpeg">
      <div class="listing-top__form-wrapper">
        <div class="container">
          <form class="listing-top__form">
            <label class="listing-top__form-label">Schedule A Tour</label>
            <div class="listing-top__form-group listing-top__form-group--horz">
              <div class="listing-top__form-option">In-Person</div>
              <div class="listing-top__form-option">Video</div>
            </div>
            <label class="listing-top__form-label">Date</label>
            <div class="listing-top__form-group listing-top__form-group--horz">
              <div class="listing-top__form-option">March 2</div>
            </div>
            <label class="listing-top__form-label">Time</label>
            <div class="listing-top__form-group">
              <div class="listing-top__form-option">11 AM</div>
            </div>
            <label class="listing-top__form-label">Personal Info</label>
            <div class="listing-top__form-group ">
              <div class="listing-top__form-option">Enter Phone</div>
            </div>
            <div class="listing-top__form-group">
              <div class="listing-top__form-option">Enter Email</div>
            </div>
            <div class="listing-top__form-group">
              <button type="submit" class="listing-top__form-button">Schedule A Tour</button>
            </div>
            
          </form>
        </div>
        
      </div>
    </div>
    <section class="listing-info">
        <div class="container">
          <div class="row">
            <div class="col-md-7">
              <h1>8600 Thackery St<br>
              Dallas, TX 75230
              </h1>
              <div class="listing-info__details">
                <span class="listing-info__details-text"><i class="fa-solid fa-bed"></i> 5</span>
                <span class="listing-info__details-text"><i class="fa-solid fa-bath"></i> 5.2</span>
                <span class="listing-info__details-text"><i class="fa-solid fa-ruler"></i> 7260 SQFT</span>
              </div>
            </div>
            <div class="col-md-5">
              <span class="listing-info__agent-title">Agent</span>
              <span class="listing-info__agent-name">John Smith</span>
              <p class="listing-info__agent-profile">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Asperiores, nostrum hic voluptates enim delectus iusto sequi veritatis commodi ipsa tempore quam dolorem ex, dolorum earum quod aliquam. Itaque, modi quod.</p>
            </div>
          </div>
        </div>
    </section>

    <section class="listing-extras">
        <div class="container">
          <div class="row">
            <div class="col-md-7">
              <div class="listing-extras__details">
                <h2>More Info</h2>
                <p>7260 Sq. Ft. / 2 Story Floorplan / 5 BR / 5.2 Bath / Formal Dining  / Front Courtyard Entry / Temperature Controlled  Wine Display with Glass Doors / Family Room + Study + Huge Game Room Media Combo+ Finished AC Flex Space / Stunning Design Elements throughout/ Elegant Kitchen with Professional Appliances / Butler’s Pantry / Master Retreat down with Oversized Closet / Utility Room / Large Covered Outdoor Living  w/ Outdoor Grill and Fireplace/ 4 Car Garage</p>
                <h3>Details</h3>
                <ul>
                  <li>Luxury Outdoor Kitchens and Living</li>
                  <li>Lutron RadioRa2 Standard in Kitchen</li>
                  <li>Structured Wiring Package</li>
                  <li>Tella Firma Foundations</li>
                  <li>Temperature Controlled Wine Rooms</li>
                  <li>HERS Ratings from 51-55</li>
                  <li>17 Seer Variable Speed HVAC</li>
                  <li>Burgess 3rd Party Inspections</li>
                  <li>2x6 Exterior Walls</li>
                  <li>Owens Corning ComfortBuilt™ Program</li>
                </ul>
              </div>
              
            </div>
            <div class="col-md-5">
              <div class="listing-extras__gallery">
                <h2>Images</h2>
                <img src="https://images.pexels.com/photos/106399/pexels-photo-106399.jpeg" alt="">
                <img src="https://images.pexels.com/photos/1643383/pexels-photo-1643383.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="">
                <img src="https://images.pexels.com/photos/6207947/pexels-photo-6207947.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="">
                <img src="https://images.pexels.com/photos/7061663/pexels-photo-7061663.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="">
              </div>
            </div>
          </div>
        </div>
      </section>
</div>
@endsection