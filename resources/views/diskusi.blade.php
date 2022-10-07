@extends('layout.mainlayout')
@section('content')
    <div class="diskusi-container" style="margin-top: 50px;">
        <div class="menu-konfirmasi white">
            <div class="fotonama-chat">
                <img class="foto-chat" src="{{ asset('/storage/profil.jpg') }}" alt="">
                <div class="margin-LR bold">Jethro</div>
            </div>
            <!-- KONFIRMASI -->
            <div>
                <a href="upload">
                    <div class="konfirmasi-btn white">Konfirmasi</div>
                </a>
                
                <a href="./">
                    <div class="batal-btn white">Batal</div>
                </a>
            </div>
            
        </div>

        <div class="chat-container">
            <div class="chat-box">
                <div class="chat margin-LR">
                    <div class="flex-chat flex-end">
                        <div class="flex-chat column">
                            <div class="box2">Siang</div>
                            <!-- <div class="align-end" style="font-size: 0.8em">19:00</div> -->
                        </div>
                    </div>

                    <div class="flex-chat flex-end">
                        <div class="flex-chat column">
                            <div class="box2">Mau tanya, kalau edit konten reel ig bisa kah?</div>
                            <div class="align-end" style="font-size: 0.8em">Dibaca 13:00</div>
                        </div>
                    </div>

                    <div class="flex-chat">
                        <div class="flex-chat column">
                            <div class="box1">siang, bisa kak.</div>
                        </div>
                    </div>

                    <div class="flex-chat">
                        <div class="flex-chat column">
                            <div class="box1">konsep nya mau sprti apa kak?</div>
                        </div>
                    </div>

                    <div class="flex-chat">
                        <div class="flex-chat column">
                            <div class="box1">utk durasi video maks nya 1 menit ya</div>
                            <div style="font-size: 0.8em">13:01</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="wrapper">
                <form action="">
                    <textarea type="text" placeholder="Ketik pesan"></textarea>
                </form>
            </div>
        </div>
    </div>
@endsection