@extends('layout.editorlayout')
@section('content')
    <div class="detail-base">
        <!-- <div class="detail-title white">Detail Pesanan</div> -->
        

        <div class="detail-container">
            <div class="flex space-between">
                <div class="detail-title black">Detail Pesanan</div>
                <a href="home-editor" style="color: #a1a1a1; margin: 0 5px 0 0;">&#9932;</a>
            </div>

            <div class="ket-container">
                <div class="flex space-between">
                    <div>ID Pesanan</div>
                    <div style="color: #a1a1a1;">3</div>
                </div>

                <div class="flex space-between">
                    <div>Pelanggan</div>
                    <div style="color: #a1a1a1;">Glenaldo</div>
                </div>

                <div class="flex space-between">
                    <div>Editor</div>
                    <div style="color: #a1a1a1;">Jethro</div>
                </div>

                <div class="flex space-between">
                    <div>Tanggal Pesanan</div>
                    <div style="color: #a1a1a1;">15 Mei 2022</div>
                </div>

                <div class="flex space-between">
                    <div>Status Pesanan</div>
                    <div style="color: #a1a1a1;">Menunggu Respon Editor</div>
                </div>
            </div>

            <!-- <div class="garis-detail"></div> -->
            <div style="margin-top: 5px;"></div>


            <!-- PEMBAYARAN -->
            <div class="ket-container">
                <div style="color: black; font-weight: bold;">Informasi Pembayaran</div>

                <div class="flex space-between">
                    <div>Harga</div>
                    <div style="color: #a1a1a1;">Rp 75.000</div>
                </div>

                <div class="flex space-between">
                    <div>Biaya Platform</div>
                    <div style="color: #a1a1a1;">-Rp 15.000</div>
                </div>

                <div class="flex space-between">
                    <div>Total Pemasukan</div>
                    <div style="font-weight: bold;">Rp 60.000</div>
                </div>
            </div>

            <!-- <div class="garis-detail"></div> -->
            <div style="margin-top: 5px;"></div>

            <div class="ket-container">
                <div class="flex space-between">
                    <div style="font-weight: bold;">Total Dibayar Pengguna Jasa</div>
                    <div style="font-weight: bold;">Rp 75.000</div>
                </div>

                <div class="flex space-between">
                    <div>Tanggal Pembayaran</div>
                    <div style="color: #a1a1a1;">15 Mei 2022</div>
                </div>
            </div>

            <a class="detail-btn" href="detail-video">Terima Pesanan</a>
            <div class="flex justify-center">
                <div style="color: red; font-size: 0.9em;">Respon Sebelum 17 Mei 23:59</div>
            </div>
        </div>
    </div>
@endsection