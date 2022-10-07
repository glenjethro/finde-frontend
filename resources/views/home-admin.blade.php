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
        <div class="admin-dashboard">
            <div class="stats">
                <div class="stats-logo green">
                    <i class="fa-solid fa-dollar-sign"></i>
                </div>

                <div class="stats-text-container">
                    <div class="stats-text">Total Pemasukan</div>
                    <div class="stats-text-b">Rp 1.540.000</div>
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
        </div>

        <!-- list approval -->
        <div class="approval-container">
            <div class="approval-judul">List Approval Editor</div>

            <div class="approval-list">
                <a class="approval-content" href="approval">
                    <div class="flex space-between">
                        <div class="flex column align-start">
                            <div class="approval-title">Agung</div>
                            <div class="approval-date">15 Mei 2022</div>
                        </div>

                        <div class="approval-status">
                            <div class="approval-id">ID Pengguna: 7</div>
                            <div class="status notyet">Not Yet</div>
                        </div>
                    </div>
                </a>

                <div class="approval-content">
                    <div class="flex space-between">
                        <div class="flex column align-start">
                            <div class="approval-title">Glenaldo</div>
                            <div class="approval-date">15 Mei 2022</div>
                        </div>

                        <div class="approval-status">
                            <div class="approval-id">ID Pengguna: 7</div>
                            <div class="status notyet">Not Yet</div>
                        </div>
                    </div>
                </div>

                <div class="approval-content">
                    <div class="flex space-between">
                        <div class="flex column align-start">
                            <div class="approval-title">Randy Saputra</div>
                            <div class="approval-date">15 Mei 2022</div>
                        </div>

                        <div class="approval-status">
                            <div class="approval-id">ID Pengguna: 7</div>
                            <div class="status reject">Rejected</div>
                        </div>
                    </div>
                </div>

                <div class="approval-content">
                    <div class="flex space-between">
                        <div class="flex column align-start">
                            <div class="approval-title">Jethro</div>
                            <div class="approval-date">15 Mei 2022</div>
                        </div>

                        <div class="approval-status">
                            <div class="approval-id">ID Pengguna: 7</div>
                            <div class="status approve">Approved</div>
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
                            <div class="status approve">Approved</div>
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
                            <div class="status approve">Approved</div>
                        </div>
                    </div>
                </div>

                <div class="approval-content">
                    <div class="flex space-between">
                        <div class="flex column align-start">
                            <div class="approval-title">Evander Marcel</div>
                            <div class="approval-date">15 Mei 2022</div>
                        </div>

                        <div class="approval-status">
                            <div class="approval-id">ID Pengguna: 7</div>
                            <div class="status reject">Rejected</div>
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
                            <div class="status approve">Approved</div>
                        </div>
                    </div>
                </div>

                <div class="approval-content">
                    <div class="flex space-between">
                        <div class="flex column align-start">
                            <div class="approval-title">William</div>
                            <div class="approval-date">15 Mei 2022</div>
                        </div>

                        <div class="approval-status">
                            <div class="approval-id">ID Pengguna: 7</div>
                            <div class="status reject">Rejected</div>
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
                            <div class="status approve">Approved</div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection