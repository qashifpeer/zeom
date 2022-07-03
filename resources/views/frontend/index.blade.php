@extends('frontend.layouts.app')
@section('content_main')

{{-- Carousal   --}}

<div class="bd-example">
    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item">
          <svg class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="800" height="400" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: First slide" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"></rect><text x="50%" y="50%" fill="#555" dy=".3em">First slide</text></svg>

        </div>
        <div class="carousel-item active carousel-item-start">
          <svg class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="800" height="400" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Second slide" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#666"></rect><text x="50%" y="50%" fill="#444" dy=".3em">Second slide</text></svg>

        </div>
        <div class="carousel-item carousel-item-next carousel-item-start">
          <svg class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="800" height="400" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Third slide" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#555"></rect><text x="50%" y="50%" fill="#333" dy=".3em">Third slide</text></svg>

        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
   </div>  {{-- Carousal Ends--}}


   <section>
    <div class="wrapper row0">

        <div id="intro" class="clear">
            <ul class="no-space">
                <li>
                    <a href="" class="block">
                        <div class="block push-30">
                            <span class=" cc circle icon-bullhorn"><i class="fa-solid fa-graduation-cap"></i></span>
                        </div>
                        <h6 class="nospace">Academic</h6>
                    </a>
                </li>
                <li>
                    <a href="" class="block">
                        <div class="block push-30">
                            <span class=" cc circle icon-bullhorn"><i class="fa-solid fa-person-chalkboard"></i></span>
                        </div>
                        <h6 class="nospace">Teaching</h6>
                    </a>
                </li>
                <li>
                    <a href="" class="block">
                        <div class="block push-30">
                            <span class=" cc circle icon-bullhorn"><i class="fa-solid fa-keyboard"></i></span>
                        </div>
                        <h6 class="nospace">Non-Teaching</h6>
                    </a>
                </li>
                <li>
                    <a href="" class="block">
                        <div class="block push-30">
                            <span class=" cc circle icon-bullhorn"><i class="fa-solid fa-download"></i></span>
                        </div>
                        <h6 class="nospace">Downloads</h6>
                    </a>
                </li>
                <li>
                    <a href="" class="block">
                        <div class="block push-30">
                            <span class=" cc circle icon-bullhorn"><i class="fa-solid fa-image"></i></span>
                        </div>
                        <h6 class="nospace">Galery</h6>
                    </a>
                </li>
                <li>
                    <a href="" class="block">
                        <div class="block push-30">
                            <span class=" cc circle icon-bullhorn"><i class="fa-solid fa-calendar-check"></i></span>
                        </div>
                        <h6 class="nospace">Events</h6>
                    </a>
                </li>

            </ul>

        </div>


        {{-- < class="row bg-success">
        <div class="col-md-2">Accademic</div>
        <div class="col-md-2">Teaching</div>
        <div class="col-md-2">Non-Teaching</div>
        <div class="col-md-2">Downloads</div>
        <div class="col-md-2">Gallery</div>
        <div class="col-md-2">Events</div> --}}




</div>

</section>

@endsection

