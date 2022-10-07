@extends('layout.mainlayout')
@section('content')
    <div class="snk-base">
        <div class="menu-snk">
            <a href="snk" class="menu-container">Syarat dan Ketentuan</a>
            <a href="cara-penggunaan-pengguna" class="menu-container">Cara Penggunaan FindE</a>
        </div>

        <div class="penggunaan-base">
        <div style="font-size: 2em; font-weight: bold; color: black; margin: 20px 0 30px 0; text-align: center;">Bagaimana cara menggunakan FindE?</div>
        <div class="flex space-between" style="width: 35%;">
            <a href="cara-penggunaan-pengguna" style="text-align: center;">
                <div class="penggunaan-btn">Untuk Penyewa Jasa</div>
            </a>
            
            <a href="cara-penggunaan-editor" style="text-align: center;">
                <div class="penggunaan-btn">Untuk Editor</div>
            </a>
        </div>
        

            <div class="penggunaan-container">
                <div class="flex">
                    <img src="{{ asset('/storage/diskusi.png') }}" alt="" style="height: 50px; width: 50px; margin: 0 10px;" class="bold">

                    <div class="penggunaan-desc">
                        <b>1. Diskusikan konsep video dengan pelanggan</b>
                        <div style="margin: 5px 0;">
                            <div>- Jika kamu belum menerima respons dari editor, kamu dapat berbicara dengan pengguna lainnya</div>
                            <div>- Sistem tidak mengijinkan kamu untuk bertukar kontak seperti nomor telephone, atau email dengan editor.</div>
                            <div>- Kamu dapat melakukan konfirmasi dengan menekan tombol "Konfirmasi" pada chat box jika sudah menyetujui hasil diskusi</div>
                            <div>- Kedua pihak (penyewa dan editor) harus melakukan konfirmasi untuk melanjutkan pesanan</div>
                            <div>- Jika kedua pihak sudah melakukan konfirmasi, kamu tidak dapat melakukan diskusi dengan pengguna lainnya sampai kamu menyelesaikan pesanan</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="penggunaan-container">
                <div class="flex">
                    <img src="{{ asset('/storage/bayar.png') }}" alt="" style="height: 50px; width: 50px; margin: 0 10px;" class="bold">

                    <div class="penggunaan-desc">
                        <b>2. Tunggu pelanggan mengirimkan uang ke sistem</b>
                        <div style="margin: 5px 0;">
                            <div>- Jangan mulai bekerja sebelum kamu mendapatkan notifikasi dari sistem</div>
                            <div>- Jika pelanggan sudah membayar, kamu dapat mengklik tombol "Terima Pesanan" dan mulai bekerja</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="penggunaan-container">
                <div class="flex">
                    <img src="{{ asset('/storage/tunggu.png') }}" alt="" style="height: 50px; width: 50px; margin: 0 10px;" class="bold">

                    <div class="penggunaan-desc">
                        <b>3. Kirim hasil edit yang sudah kamu kerjakan</b>
                        <div style="margin: 5px 0;">
                            <div>- Klik tombol "Upload" untuk mengirim hasil edit mu</div>
                            <div>- Jika pelanggan sudah melakukan konfirmasi pesanan selesai, tarif akan dikirimkan ke Saldo FindE oleh sistem</div>                          
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
@endsection