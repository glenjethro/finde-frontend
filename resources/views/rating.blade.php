@extends('layout.mainlayout')
@section('content')
    <!-- <div style="height: 600px; width: 50%; background-color: red; margin-top: 50px;">
        <i class="fa-solid fa-star"></i>
    </div> -->
    <div class="rating-base">
        <div class="rating-container">
            <div class="flex space-between">
                <div class="detail-title black" style="font-size:1.3em;">Berikan Rating dan Ulasan</div>
                <a href="detail-video" style="color: #a1a1a1; margin: 0 5px 0 0;">&#9932;</a>
            </div>

            <div class="flex">
                <img class="rating-gbr" src="{{ asset('/storage/profil.jpg') }}" alt="">
                <div class="flex column center align-start">
                    <div class="rating-text-b">Jethro</div>
                    <div class="rating-text">Bagaimana kualitas hasil edit video secara keseluruhan?</div>
                    <div class="flex" style="margin: 5px 0; color: #f49302;">
                        <i class="fa-solid fa-star star"></i>
                        <i class="fa-solid fa-star star"></i>
                        <i class="fa-solid fa-star star"></i>
                        <i class="fa-solid fa-star star"></i>
                        <i class="fa-solid fa-star star"></i>
                    </div>
                </div>
            </div>

            <div class="flex column align-start">
                <div style="margin-left: 5px;">Berikan ulasan untuk editor video dan hasil edit video</div>
                <form class="ulasan" action="">
                    <textarea name="" id="" cols="" rows=""></textarea>
                    <a class="detail-btn" style="margin-top: 5px;" href="./">Kirim</a>
                </form>
            </div>
        </div>
    </div>
@endsection