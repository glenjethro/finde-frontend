@extends('layout.adminlayout')
@section('content')
    <div class="aprv-base">
        <div class="menu-admin">
            <a class="menu-container" href="home-admin">Home</a>
            <a class="menu-container" href="daftar-keuangan">Keuangan</a>
            <a class="menu-container" href="daftar-pengguna">Daftar Pengguna</a>
            <a class="menu-container" href="daftar-editor">Daftar Editor Video</a>
        </div>

        <div class="aprv-container">
            <div class="aprv-fotodata" style="margin-top: 50px;">
                <div class="flex space-between" style="width: 100%;">
                    <div class="detail-title black">Data Diri Pengguna</div>
                    <a href="daftar-pengguna" style="color: #a1a1a1; margin: 0 5px 0 0;">&#9932;</a>
                </div>
            </div>

            <div class="pengguna-container" style="margin-bottom: 50px; ">
                <div class="aprv-fotodata" style="width: 100%;">
                    <img src="{{ asset('/storage/profile.png') }}" alt="" class="aprv-foto">
                    <div class="data-user">
                        <div class="flex">
                            <div class="data-container-1">ID User</div>
                            <div class="data-container-2">1</div>
                        </div>

                        <div class="flex">
                            <div class="data-container-1">Nama</div>
                            <div class="data-container-2">Jethro</div>
                        </div>

                        <div class="flex">
                            <div class="data-container-1">Alamat email</div>
                            <div class="data-container-2">jethro@gmail.com</div>
                        </div>

                        <div class="flex">
                            <div class="data-container-1">Nomor telepon</div>
                            <div class="data-container-2">087877236644</div>
                        </div>

                        <div class="flex">
                            <div class="data-container-1">Tipe editor</div>
                            <div class="status editor-normal" style="width: 10%;">Normal</div>
                        </div>

                        <div class="flex column align-start" style="margin-top: 10px;">
                            <div class="flex" style="width: 100%; margin-bottom: 10px;">
                                <div class="data-container-1">Foto selfie dengan KTP</div>
                                <div class="status editor-normal" id="gambar" style="width: 10%; 
                                color: white; 
                                font-weight: bold; 
                                color: white; 
                                background-color: #00b33c; 
                                cursor: pointer;">
                                Tampilkan</div>
                            </div>

                            <div class="selfie-container" id="menu" style="display: none;">
                                <!-- <img src="{{ asset('/storage/selfie.jpg') }}" alt=""> -->
                                <img src="{{ asset('/storage/selfie-ktp-2.png') }}" alt="">
                            </div>
                    </div>
                    </div>
                </div>

                <div class="transaksi-container">
                    <div class="detail-title black">Riwayat Transaksi</div>
                    <div class="history-saldo">
                        <div class="history-credit">
                            <div class="flex column align-start">
                                <div class="history-date">17 Mei 2022</div>
                                <div class="history-desc">Penarikan Dana</div>
                            </div>

                            <div class="history-amount">Rp 50.000</div>
                        </div>

                        <div class="history-debit">
                            <div class="flex column align-start">
                                <div class="history-date">13 Mei 2022</div>
                                <div class="history-desc">Pesanan selesai (ID Pesanan: 2)</div>
                            </div>

                            <div class="history-amount">Rp 60.000</div>
                        </div>

                        <div class="history-debit">
                            <div class="flex column align-start">
                                <div class="history-date">7 Mei 2022</div>
                                <div class="history-desc">Pesanan selesai (ID Pesanan: 1)</div>
                            </div>

                            <div class="history-amount">Rp 60.000</div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
@endsection