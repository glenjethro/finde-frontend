@extends('layout.mainlayout')
@section('content')
    <div class="pencarian-base">
        <div class="pencarian-container">
            <div class="flex space-between" style="width: 100%;">
            <div href="home-editor" style="color: #a1a1a1; margin: 5px 0 0 10px; font-size: 1em;">Menampilkan 8 dari 8 editor</div>
                <div href="home-editor" style="color: #a1a1a1; margin: 5px 10px 0 0; font-size: 1em;">Halaman 1 dari 1</div>
            </div>
            <!-- baris 1 -->
            <div class="list-editor">
                <div class="editor-container">
                    <div class="flex column">
                        <div class="namagbr-container bold">
                            <img class="foto-editor" src="{{ asset('/storage/profil.jpg') }}" alt="">
                            <div style="margin-left: 6px;">Jethro</div>
                        </div>

                        <img class="foto-karya" src="{{ asset('/storage/william.jpg') }}" alt="">
                        <div class="pencarian-title">Online Video Editing</div>
                    </div>

                    <div class="flex justify-center">
                        <a class="editor-btn margin-TB" href="profil-editor" style="width: 70%;">Lihat Profil Editor</a>
                    </div>                
                </div>

                <div class="editor-container">
                    <div class="flex column">
                        <div class="namagbr-container bold">
                            <img class="foto-editor" src="{{ asset('/storage/kurniati-profil.jpg') }}" alt="">
                            <div style="margin-left: 6px;">Kurniati</div>
                        </div>
                        <img class="foto-karya" src="{{ asset('/storage/kurniati.jpg') }}" alt="">
                        <div class="pencarian-title">Jasa Edit Video Story Instagram</div>
                    </div>
                    
                    <div class="flex justify-center">
                        <a class="editor-btn margin-TB" href="profil-editor" style="width: 70%;">Lihat Profil Editor</a>
                    </div>                
                </div>

                <div class="editor-container">
                    <div class="flex column">
                        <div class="namagbr-container bold">
                            <img class="foto-editor" src="{{ asset('/storage/luthfi-profil.jpg') }}" alt="">
                            <div style="margin-left: 6px;">Luthfi</div>
                        </div>
                        <img class="foto-karya" src="{{ asset('/storage/luthfi.jpg') }}" alt="">
                        <div class="pencarian-title">editing video terserah</div>
                    </div>
                    
                    
                    <div class="flex justify-center">
                        <a class="editor-btn margin-TB" href="profil-editor" style="width: 70%;">Lihat Profil Editor</a>
                    </div>                
                </div>

                <div class="editor-container">
                    <div class="flex column">
                        <div class="namagbr-container bold">
                            <img class="foto-editor" src="{{ asset('/storage/hanif-profil.jpg') }}" alt="">
                            <div style="margin-left: 6px;">HANIF</div>
                        </div>
                        <img class="foto-karya" src="{{ asset('/storage/hanif.jpg') }}" alt="">
                        <div class="pencarian-title">PROFESIONAL VIDEO EDITOR</div>
                    </div>
                                    
                    <div class="flex justify-center">
                        <a class="editor-btn margin-TB" href="profil-editor" style="width: 70%;">Lihat Profil Editor</a>
                    </div>                
                </div>
            </div>

            <!-- baris 2 -->
            <div class="list-editor">
                <div class="editor-container">
                    <div class="flex column">
                        <div class="namagbr-container bold">
                            <img class="foto-editor" src="{{ asset('/storage/reza-profil.jpg') }}" alt="">
                            <div style="margin-left: 6px;">Reza Prasetyo</div>
                        </div>

                        <img class="foto-karya" src="{{ asset('/storage/reza.jpg') }}" alt="">
                        <div class="pencarian-title">Video Color Grading</div>
                    </div>

                    <div class="flex justify-center">
                        <a class="editor-btn margin-TB" href="profil-editor" style="width: 70%;">Lihat Profil Editor</a>
                    </div>                
                </div>

                <div class="editor-container">
                    <div class="flex column">
                        <div class="namagbr-container bold">
                            <img class="foto-editor" src="{{ asset('/storage/agatha-profil.jpg') }}" alt="">
                            <div style="margin-left: 6px;">Agatha</div>
                        </div>
                        <img class="foto-karya" src="{{ asset('/storage/agatha.jpg') }}" alt="">
                        <div class="pencarian-title">Editing Video Berkualitas, Budget Ekonomis</div>
                    </div>
                    
                    
                    <div class="flex justify-center">
                        <a class="editor-btn margin-TB" href="profil-editor" style="width: 70%;">Lihat Profil Editor</a>
                    </div>                
                </div>

                <div class="editor-container">
                    <div class="flex column">
                        <div class="namagbr-container bold">
                            <img class="foto-editor" src="{{ asset('/storage/yudha-profil.jpg') }}" alt="">
                            <div style="margin-left: 6px;">Yudha</div>
                        </div>
                        <img class="foto-karya" src="{{ asset('/storage/yudha.jpg') }}" alt="">
                        <div class="pencarian-title">Jasa Edit Video Story Instagram</div>
                    </div>
                    
                    <div class="flex justify-center">
                        <a class="editor-btn margin-TB" href="profil-editor" style="width: 70%;">Lihat Profil Editor</a>
                    </div>                
                </div>

                

                <div class="editor-container">
                    <div class="flex column">
                        <div class="namagbr-container bold">
                            <img class="foto-editor" src="{{ asset('/storage/vela-profil.jpg') }}" alt="">
                            <div style="margin-left: 6px;">Vela Liana</div>
                        </div>
                        <img class="foto-karya" src="{{ asset('/storage/vela.jpg') }}" alt="">
                        <div class="pencarian-title">Edit Video Pendek</div>
                    </div>
                                    
                    <div class="flex justify-center">
                        <a class="editor-btn margin-TB" href="profil-editor" style="width: 70%;">Lihat Profil Editor</a>
                    </div>                
                </div>
            </div>

            <div class="flex space-between" style="width: 100%;">
                <div class="detail-title black"></div>
                <div href="home-editor" style="color: #a1a1a1; margin: 0 10px 5px 0; font-size: 1.2em;">< 1 ></div>
            </div>
        </div>
    </div>
@endsection

<!-- <script src="../js/hamburger.js"></script> -->