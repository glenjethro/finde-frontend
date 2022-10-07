@extends('layout.editorlayout')
@section('content')
    <div class="saldo-base">
        <div class="saldo-container">
            <div class="flex space-between">
                <div class="detail-title black">Detail Saldo</div>
                <a href="home-editor" style="color: #a1a1a1; margin: 0 5px 0 0;">&#9932;</a>
            </div>

            <div class="total-container flex space-between">
                <div>Saldo</div>
                <div>Rp 120.000</div>
            </div>

            <div class="account-container" style="margin-top: 5px;">
                <div class="flex space-between">
                    <div>Pilih akun bank</div>
                    <a href="detail-saldo-3">
                        <div class="account-btn">Hubunkgan Rekening Bank</div>
                    </a>
                </div>

                <div class="account-garis"></div>

                <div class="account-desc">
                    <i class="fa-solid fa-building-columns bank-logo"></i>
                    <div class="flex column account-text" style="font-size: 0.8em;">
                        <b>Belum ada rekening bank yang terhubung</b>
                        <div>Hubungkan rekening bank agar kamu bisa menarik dana dari saldo FindE mu kapan pun kamu perlu</div>
                    </div>
                </div>
            </div>
        </div>

        <div class="saldo-container">
            <div class="detail-title black">Riwayat Saldo</div>
            <div class="history-saldo">
                <div class="history-debit">
                    <div class="flex column align-start">
                        <div class="history-date">13 Mei 2022</div>
                        <div class="history-desc">Pesanan selesai (ID Pesanan: 2)</div>
                    </div>

                    <div class="history-amount green red">Rp 60.000</div>
                </div>

                <div class="history-debit">
                    <div class="flex column align-start">
                        <div class="history-date">7 Mei 2022</div>
                        <div class="history-desc">Pesanan selesai (ID Pesanan: 1)</div>
                    </div>

                    <div class="history-amount green red">Rp 60.000</div>
                </div>
            </div>
        </div>
    </div>
@endsection