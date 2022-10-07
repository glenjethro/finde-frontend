@extends('layout.editorlayout')
@section('content')
    <div class="saldo-base">
        <div class="saldo-container">
            <div class="flex space-between">
                <div class="detail-title black">Pilih Bank</div>
                <a href="detail-saldo-2" style="color: #a1a1a1; margin: 0 5px 0 0;">&#9932;</a>
            </div>

            <div class="bank-container flex space-between">
                <div class="flex justify-center">
                    <img src="{{ asset('/storage/bca.png') }}" alt="" class="logo-bank">
                    <label for="" style="margin: 5px;">BCA</label>
                </div>
                
                <input type="radio" id="bca" name="metode-pembayaran" value="BCA">
            </div>

            <div class="bank-container flex space-between">
                <div class="flex justify-center">
                    <img src="{{ asset('/storage/bni.png') }}" alt="" class="logo-bank">
                    <label for="" style="margin: 5px;">BNI</label>
                </div>
                
                <input type="radio" id="bni" name="metode-pembayaran" value="BNI">
            </div>

            <div class="bank-container flex space-between">
                <div class="flex justify-center">
                    <img src="{{ asset('/storage/bri.png') }}" alt="" class="logo-bank">
                    <label for="" style="margin: 5px;">BRI</label>
                </div>
                
                <input type="radio" id="bri" name="metode-pembayaran" value="BRI">
            </div>

            <div class="bank-container flex space-between">
                <div class="flex justify-center">
                    <img src="{{ asset('/storage/mandiri.png') }}" alt="" class="logo-bank">
                    <label for="" style="margin: 5px;">Mandiri</label>
                </div>
                
                <input type="radio" id="mandiri" name="metode-pembayaran" value="Mandiri">
            </div>

            <div class="bank-container flex column">
                <div class="rekening-text">Masukkan nomor rekening</div>
                <input type="text">
                <a class="rekening-btn" href="detail-saldo-4">Verifikasi</a>
            </div>
        </div>
    </div>
@endsection