@extends('home.layouts.app')

@section('title', 'Events | Mwalimu Junior School')
@section('description', 'Mwalimu Junior School is ...')

@section('content')

  <!--==============================
    Breadcumb
============================== -->
<div class="breadcumb-wrapper " data-bg-src="https://fakeimg.pl/1200x600">
        <div class="container z-index-common">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">School Events</h1>
                <p class="breadcumb-text">Montessori Is A Nurturing And Holistic Approach To Learning</p>
                <div class="breadcumb-menu-wrap">
                    <ul class="breadcumb-menu">
                        <li><a href="{{ route('home.index')}}">Home</a></li>
                        <li>Our Nurturing Events</li>
                    </ul>
                </div>
            </div>
        </div>
    </div><!--==============================
    Classes Area
    ==============================-->
    <section class=" space-top space-extra-bottom">
        <div class="container">
            
        <div class="row justify-content-center">
                
            <div class="col-sm-6 col-lg-4 col-xl-3">
                    <div class="class-style2">
                        <h3 class="class-title h5"><a class="text-inherit" href="#">School Graduation</a></h3>
                        <div class="class-img">
                            <div class="img"><a href="#"><img src="https://fakeimg.pl/230x230"
                                        alt="class"></a></div>
                            <span class="class-number">01</span>
                        </div>
                        <p class="class-info">Date: <span class="info">12th Dec, 2024</span></p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4 col-xl-3">
                <div class="class-style2">
                        <h3 class="class-title h5"><a class="text-inherit" href="#">School Graduation</a></h3>
                        <div class="class-img">
                            <div class="img"><a href="#"><img src="https://fakeimg.pl/230x230"
                                        alt="class"></a></div>
                            <span class="class-number">01</span>
                        </div>
                        <p class="class-info">Date: <span class="info">12th Dec, 2024</span></p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4 col-xl-3">
                <div class="class-style2">
                        <h3 class="class-title h5"><a class="text-inherit" href="#">School Graduation</a></h3>
                        <div class="class-img">
                            <div class="img"><a href="#"><img src="https://fakeimg.pl/230x230"
                                        alt="class"></a></div>
                            <span class="class-number">01</span>
                        </div>
                        <p class="class-info">Date: <span class="info">12th Dec, 2024</span></p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4 col-xl-3">
                <div class="class-style2">
                        <h3 class="class-title h5"><a class="text-inherit" href="#">School Graduation</a></h3>
                        <div class="class-img">
                            <div class="img"><a href="#"><img src="https://fakeimg.pl/230x230"
                                        alt="class"></a></div>
                            <span class="class-number">01</span>
                        </div>
                        <p class="class-info">Date: <span class="info">12th Dec, 2024</span></p>
                    </div>
                </div>

            </div>

            <div class="text-center">
                <div class="vs-pagination pt-md-3">
                    <a href="#" class="pagi-btn">Prev</a>
                    <ul>
                        <li><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">...</a></li>
                        <li><a href="#">12</a></li>
                    </ul>
                    <a href="#" class="pagi-btn">next</a>
                </div>
            </div>
        </div>
    </section>
    

@endsection