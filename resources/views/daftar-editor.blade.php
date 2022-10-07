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
        <!-- <div class="admin-dashboard">
            <div class="stats">
                <div class="stats-logo green">
                    <i class="fa-solid fa-dollar-sign"></i>
                </div>

                <div class="stats-text-container">
                    <div class="stats-text">Total Pemasukan</div>
                    <div class="stats-text-b">Rp 100.000.000</div>
                </div>
            </div>
            
            <div class="stats">
                <div class="stats-logo red">
                <i class="fa-solid fa-cart-shopping"></i>
                </div>

                <div class="stats-text-container">
                    <div class="stats-text">Total Pesanan</div>
                    <div class="stats-text-b">100</div>
                </div>
            </div>

            <div class="stats">
                <div class="stats-logo blue">
                <i class="fa-solid fa-users"></i>
                </div>

                <div class="stats-text-container">
                    <div class="stats-text">Total Pengguna</div>
                    <div class="stats-text-b">53</div>
                </div>
            </div>

            <div class="stats">
                <div class="stats-logo yellow">
                <i class="fa-solid fa-photo-film"></i>
                </div>

                <div class="stats-text-container">
                    <div class="stats-text">Total Editor Video</div>
                    <div class="stats-text-b">15</div>
                </div>
            </div>
        </div> -->

        <!-- daftar pengguna -->
        <div class="approval-container">
            <div class="approval-judul" style="margin-bottom: 0; margin-top: 50px; font-size: 1.7em;">Daftar Editor</div>

            <div class="search-container">
                <input type="text">
                <div class="search-btn">Cari</div>
            </div>

            <div class="approval-list" style="height: 500px;">
                
                <a class="approval-content" href="data-pengguna">
                    <div class="flex space-between">
                        <div class="flex column align-start">
                            <div class="approval-title">Jethro</div>
                            <div class="approval-date">15 Mei 2022</div>
                        </div>

                        <div class="approval-status">
                            <div class="approval-id">ID Pengguna: 7</div>
                            <div class="status editor-normal">Normal</div>
                        </div>
                    </div>
                </a>

                <div class="approval-content">
                    <div class="flex space-between">
                        <div class="flex column align-start">
                            <div class="approval-title">William</div>
                            <div class="approval-date">15 Mei 2022</div>
                        </div>

                        <div class="approval-status">
                            <div class="approval-id">ID Pengguna: 7</div>
                            <div class="status editor-premium">Premium</div>
                        </div>
                    </div>
                </div>

                <div class="approval-content">
                    <div class="flex space-between">
                        <div class="flex column align-start">
                            <div class="approval-title">Janice Tanuwijaya</div>
                            <div class="approval-date">15 Mei 2022</div>
                        </div>

                        <div class="approval-status">
                            <div class="approval-id">ID Pengguna: 7</div>
                            <div class="status editor-normal">Normal</div>
                        </div>
                    </div>
                </div>

                <div class="approval-content">
                    <div class="flex space-between">
                        <div class="flex column align-start">
                            <div class="approval-title">Vela Liana</div>
                            <div class="approval-date">15 Mei 2022</div>
                        </div>

                        <div class="approval-status">
                            <div class="approval-id">ID Pengguna: 7</div>
                            <div class="status editor-normal">Normal</div>
                        </div>
                    </div>
                </div>

                <div class="approval-content">
                    <div class="flex space-between">
                        <div class="flex column align-start">
                            <div class="approval-title">Agatha</div>
                            <div class="approval-date">15 Mei 2022</div>
                        </div>

                        <div class="approval-status">
                            <div class="approval-id">ID Pengguna: 7</div>
                            <div class="status editor-normal">Normal</div>
                        </div>
                    </div>
                </div>

                <div class="approval-content">
                    <div class="flex space-between">
                        <div class="flex column align-start">
                            <div class="approval-title">Luthfi</div>
                            <div class="approval-date">15 Mei 2022</div>
                        </div>

                        <div class="approval-status">
                            <div class="approval-id">ID Pengguna: 7</div>
                            <div class="status editor-normal">Normal</div>
                        </div>
                    </div>
                </div>

                <div class="approval-content">
                    <div class="flex space-between">
                        <div class="flex column align-start">
                            <div class="approval-title">Nurina</div>
                            <div class="approval-date">15 Mei 2022</div>
                        </div>

                        <div class="approval-status">
                            <div class="approval-id">ID Pengguna: 7</div>
                            <div class="status editor-premium">Premium</div>
                        </div>
                    </div>
                </div>

                <div class="approval-content">
                    <div class="flex space-between">
                        <div class="flex column align-start">
                            <div class="approval-title">HANIF</div>
                            <div class="approval-date">15 Mei 2022</div>
                        </div>

                        <div class="approval-status">
                            <div class="approval-id">ID Pengguna: 7</div>
                            <div class="status editor-normal">Normal</div>
                        </div>
                    </div>
                </div>

                <div class="approval-content">
                    <div class="flex space-between">
                        <div class="flex column align-start">
                            <div class="approval-title">Kurniati</div>
                            <div class="approval-date">15 Mei 2022</div>
                        </div>

                        <div class="approval-status">
                            <div class="approval-id">ID Pengguna: 7</div>
                            <div class="status editor-normal">Normal</div>
                        </div>
                    </div>
                </div>

                <div class="approval-content">
                    <div class="flex space-between">
                        <div class="flex column align-start">
                            <div class="approval-title">Reza Prasetyo</div>
                            <div class="approval-date">15 Mei 2022</div>
                        </div>

                        <div class="approval-status">
                            <div class="approval-id">ID Pengguna: 7</div>
                            <div class="status editor-normal">Normal</div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection