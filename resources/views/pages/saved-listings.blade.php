@extends ('layouts.account')


@section('page-title', 'User Saved Listings')
@section('page-bg', 'https://images.pexels.com/photos/5874584/pexels-photo-5874584.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1')


@section('content')
<div class="listings-properties">
        <div class="row">
            <div class="col-sm-12 col-lg-4 col-xl-4">
                <div class="listings-properties__item">
                    <img src="https://images.pexels.com/photos/1457842/pexels-photo-1457842.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="">
                    <div class="listings-properties__saved">
                        <i class="fa-solid fa-heart"></i>
                      </div>
                    <span class="listings-properties__item-price">
                        $350,000
                    </span>
                    <span class="listings-properties__item-details">
                        <i class="fa-solid fa-bed"></i> 4 <i class="fa-solid fa-bath"></i> 3 <i class="fa-solid fa-ruler-triangle"></i> <i class="fa-solid fa-ruler"></i> 2440 SQFT
                    </span>
  
                    <span class="listings-properties__item-address">
                        2135 Davis St, <br>
                        Mesquite, TX 75149
                    </span>
                    <div class="listings-properties__item-line">

                    </div>
                    <span class="listings-properties__item-owner">
                        John Doe
                    </span>
                </div>
            </div>

        </div>
</div>
@endsection