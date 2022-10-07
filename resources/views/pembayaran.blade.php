@extends('layout.mainlayout')
@section('content')
    <div class="detail-base">
        <div class="detail-container">
            <div class="flex space-between">
                <div class="detail-title black">Detail Pembayaran</div>
                <a href="./" style="color: #a1a1a1; margin: 0 5px 0 0;">&#9932;</a>
            </div>

            <div class="ket-container">
                <div style="font-weight:bold; font-size: 1.2em;">Harga</div>
                <div style="display:flex; justify-content: space-between;">
                    <div>Tipe pencarian: Normal</div>
                    <div>Rp 75.000</div>
                </div>
                
            </div>
        </div>
        
        <div class="pembayaran-harga"  style="margin-bottom:10px;">
            <div class="detail-title black">Pilih Metode Pembayaran</div>

            <!-- PILIHAN METODE -->
            <div class="ket-container">
                <form method="get" action="">
                    <div class="metode-container">
                        <label for="">Saldo FindE.</label>
                        <input type="radio" id="saldo" name="metode-pembayaran" value="Saldo FindE.">
                    </div>

                    <div class="metode-container">
                        <label for="">
                            <div class="flex column align-start">
                                <div>QRIS - QR Code (Gopay)</div>
                                <div style="font-size: 0.8em; color: #a1a1a1;">Biaya admin 0.71% dari total pembayaran</div>
                            </div>
                        </label>
                        <input type="radio" id="gopay" name="metode-pembayaran" value="Gopay">
                    </div>

                    <!-- <div class="bayar-container">
                        <input class="bayar-btn" type="submit" Value="Bayar">
                    </div> -->
                </form>       
            </div>

            <div class="bayar-container">
                <a class="bayar-btn" href="detail-video-user">Bayar</a>
            </div>
        </div>
    </div>
@endsection