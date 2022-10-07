@extends('layout.editorlayout')
@section('content')
    <div class="rating-base">
        <div class="notif-container">
            <div class="flex space-between">
                <div class="detail-title black">Detail Rating</div>
                <a href="home-editor" style="color: #a1a1a1; margin: 0 5px 0 0;">&#9932;</a>
            </div>

            <div class="msg-container">
                <div class="flex" style="width: 80%;">
                    <img src="{{ asset('/storage/profile.png') }}" alt="" class="rating-foto">
                    <div class="msg-detail">
                        <b style="color: #547980;">Brando Randy</b>
                        <div style="font-size: 0.8em;"><b>12 Mei 2022</b></div>
                        <div style="font-size: 0.9em;">Sangat responsif, revisi cepat, memahami apa yang dikerjakan dan sangat kooperatif</div>
                    </div>
                </div>

                <div class="flex bold" style="margin-right: 10px;">
                    <i class="fa-solid fa-star star" style="font-size: 0.9em; color: #f49302;"></i>
                    <div style="font-size: 1.1em;">5</div>
                </div>
            </div>

            <div class="msg-container">
                <div class="flex" style="width: 80%;">
                    <img src="{{ asset('/storage/profile.png') }}" alt="" class="rating-foto">
                    <div class="msg-detail">
                        <b style="color: #547980;">Juned</b>
                        <div style="font-size: 0.8em;"><b>8 Mei 2022</b></div>
                        <div style="font-size: 0.9em;">kerja seuai jadwal tepat waktu</div>
                    </div>
                </div>

                <div class="flex bold" style="margin-right: 10px;">
                    <i class="fa-solid fa-star star" style="font-size: 0.9em; color: #f49302;"></i>
                    <div style="font-size: 1.1em;">4</div>
                </div>
            </div>
        </div>
    </div>
@endsection