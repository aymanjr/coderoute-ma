@extends('layout')

@section('content')
    <div class="container py-5">
        <div class="row">
            <div class="col-md-4">
                <h4 class="text-center"><strong>Test Code De route</strong></h4>
                <hr>
                <a href="/quiz/1">
                    <div class="profile-card-2">
                        <img src="http://envato.jayasankarkr.in/code/profile/assets/img/profile-2.jpg"
                            class="img img-responsive">
                        <div class="profile-name">Start Maintenant</div>
                        <div class="profile-username">40 Questions</div>
                        <div class="profile-icons"><a href="">
                             <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                            <a href="#"><i class="fa-brands fa-twitter"></i></a>
                            <a href="#"><i class="fa-brands fa-linkedin"></i></i></a>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4">
                <h4 class="text-center"><strong>Cours de Code De Route</strong></h4>
                <hr>
                <a href="/courses">
                    <div class="profile-card-2">
                        <img src="http://envato.jayasankarkr.in/code/profile/assets/img/profile-2.jpg"
                            class="img img-responsive">
                        <div class="profile-name">Les Cours</div>
                        <div class="profile-username">Des Cours detailer</div>
                        <div class="profile-icons"><a href="">
                            <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                            <a href="#"><i class="fa-brands fa-twitter"></i></a>
                            <a href="#"><i class="fa-brands fa-linkedin"></i></i></a>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
@endsection
