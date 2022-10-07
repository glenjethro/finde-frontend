@extends('layout.adminlayout')
@section('content')
<div class="admin-container">
    <div class="menu-admin">
        <a class="menu-container" href="home-admin">Home</a>
        <a class="menu-container" href="daftar-keuangan">Keuangan</a>
        <a class="menu-container" href="daftar-pengguna">Daftar Pengguna</a>
        <a class="menu-container" href="daftar-editor">Daftar Editor Video</a>
    </div>

    <div class="admin-content">
        <!-- daftar pengguna -->
        <div class="approval-container">
            <div class="flex-column">
                
            </div>

            <div class="approval-judul" style="margin-bottom: 0; margin-top: 50px; font-size: 1.7em;">Keuangan</div>

            <div class="search-container">
                <div class="stats" style="width: 100%; height: 90px;">
                    <div class="stats-logo" style="background-color: #00b33c; width: 10%;">
                        <i class="fa-solid fa-dollar-sign"></i>
                    </div>

                    <div class="stats-text-container" style="width: 90%;">
                        <div class="stats-text" id="gambar">Total Pemasukan - Mei 2022</div>

                        <div class="dropdown" id="menu">
                            <div>Total Pemasukan - Januari</div>
                            <div>Total Pemasukan - Februari</div>
                            <div>Total Pemasukan - Maret</div>
                            <div>Total Pemasukan - April</div>
                            <div>Total Pemasukan - Mei</div>
                        </div>

                        <div class="stats-text-b" style="font-size: 1.5em;">Rp 1.540.000</div>
                        <div class="flex space-between">
                            <div></div>
                            <div class="download-btn">
                                <i class="fa-solid fa-download"></i>
                                <div style="margin-left: 5px;">sebagai .xls</div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>

            <div class="approval-list" style="height: 500px;">
                <div class="history-debit">
                    <div class="flex column align-start">
                        <div class="history-date">15 Mei 2022</div>
                        <div class="history-desc">Pesanan selesai (ID Pesanan: 1)</div>
                    </div>

                    <div class="history-amount">Rp 15.000</div>
                </div>

                <div class="history-debit">
                    <div class="flex column align-start">
                        <div class="history-date">15 Mei 2022</div>
                        <div class="history-desc">Pesanan selesai (ID Pesanan: 1)</div>
                    </div>

                    <div class="history-amount">Rp 15.000</div>
                </div>

                <div class="history-debit">
                    <div class="flex column align-start">
                        <div class="history-date">15 Mei 2022</div>
                        <div class="history-desc">Pesanan selesai (ID Pesanan: 1)</div>
                    </div>

                    <div class="history-amount">Rp 15.000</div>
                </div>

                <div class="history-debit">
                    <div class="flex column align-start">
                        <div class="history-date">15 Mei 2022</div>
                        <div class="history-desc">Pesanan selesai (ID Pesanan: 1)</div>
                    </div>

                    <div class="history-amount">Rp 35.000</div>
                </div>

                <div class="history-debit">
                    <div class="flex column align-start">
                        <div class="history-date">15 Mei 2022</div>
                        <div class="history-desc">Pesanan selesai (ID Pesanan: 1)</div>
                    </div>

                    <div class="history-amount">Rp 15.000</div>
                </div>

                <div class="history-debit">
                    <div class="flex column align-start">
                        <div class="history-date">15 Mei 2022</div>
                        <div class="history-desc">Pesanan selesai (ID Pesanan: 1)</div>
                    </div>

                    <div class="history-amount">Rp 35.000</div>
                </div>

                <div class="history-debit">
                    <div class="flex column align-start">
                        <div class="history-date">15 Mei 2022</div>
                        <div class="history-desc">Pesanan selesai (ID Pesanan: 1)</div>
                    </div>

                    <div class="history-amount">Rp 15.000</div>
                </div>

                <div class="history-debit">
                    <div class="flex column align-start">
                        <div class="history-date">15 Mei 2022</div>
                        <div class="history-desc">Pesanan selesai (ID Pesanan: 1)</div>
                    </div>

                    <div class="history-amount">Rp 35.000</div>
                </div>

                <div class="history-debit">
                    <div class="flex column align-start">
                        <div class="history-date">15 Mei 2022</div>
                        <div class="history-desc">Pesanan selesai (ID Pesanan: 1)</div>
                    </div>

                    <div class="history-amount">Rp 35.000</div>
                </div>

                <div class="history-debit">
                    <div class="flex column align-start">
                        <div class="history-date">15 Mei 2022</div>
                        <div class="history-desc">Pesanan selesai (ID Pesanan: 1)</div>
                    </div>

                    <div class="history-amount">Rp 15.000</div>
                </div>

                <div class="history-debit">
                    <div class="flex column align-start">
                        <div class="history-date">15 Mei 2022</div>
                        <div class="history-desc">Pesanan selesai (ID Pesanan: 1)</div>
                    </div>

                    <div class="history-amount">Rp 15.000</div>
                </div>

                <div class="history-debit">
                    <div class="flex column align-start">
                        <div class="history-date">15 Mei 2022</div>
                        <div class="history-desc">Pesanan selesai (ID Pesanan: 1)</div>
                    </div>

                    <div class="history-amount">Rp 15.000</div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection