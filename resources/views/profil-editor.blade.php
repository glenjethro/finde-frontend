@extends('layout.mainlayout')
@section('content')
    <div class="profil-container">
        <!-- KARYA EDIT -->
        <img class="profil-carousel" src="{{ asset('/storage/william.jpg') }}" alt="">
        <!-- NAMA & DESKRIPSI EDITOR -->
        <div class="namadesc-container">
            <div class="flex space-between bold" style="width: 100%;">
                <div class="fotonama">
                    <img class="foto-editor" src="{{ asset('/storage/profil.jpg') }}" alt="">
                    <div style="margin: 0 5px;">Jethro</div>
                </div>
                
                <div class="flex">
                    <i class="fa-solid fa-star star" style="font-size: 1.2em; color: #f49302;"></i>
                    <div style="font-size: 1.5em; padding: 2px;">4.5</div>
                </div>
                
            </div>

            <!-- <div class="garis"></div> -->
            <div class="ket-container flex column margin-TB">
                <div class="profil-title">Online Video Editing</div>
                <div class="garis" style="margin: 5px 0;"></div>
                Halo, terimakasih sudah mampir !
                <br>
                Saya seorang editing video profesional yang berpengalaman selama 5 tahun mengerjakan berbagai macam project editing video. Saya dapat mengedit video kamu secepat mungkin dan tetap menjaga kualitas.
            </div>

            <a href="diskusi" class="detail-btn" style="width: 100%; padding: 2px 0;">Mulai Diskusi</a>
        </div>

        <!-- ulasan -->
        <div class="namadesc-container" style="margin-top: 20px;">
            <div class="flex space-between bold" style="width: 100%;">
                <div class="fotonama">
                    <div style="margin: 0 5px;">Ulasan pengguna lainnya</div>
                </div>
            </div>

            <div class="msg-container" style="width: 97%;">
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

            <div class="msg-container" style="width: 97%;">
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