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
                    <img src="{{ asset('/storage/cari.png') }}" alt="" style="height: 50px; width: 50px; margin: 0 10px;" class="bold">

                    <div class="penggunaan-desc">
                        <b>1. Cari editor berdasarkan tipe pencarian</b>
                        <div style="margin: 5px 0;">
                            <div>- Tipe pencarian normal</div>
                            <div>- Tipe pencarian premium</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="penggunaan-container">
                <div class="flex">
                    <img src="{{ asset('/storage/diskusi.png') }}" alt="" style="height: 50px; width: 50px; margin: 0 10px;" class="bold">

                    <div class="penggunaan-desc">
                        <b>2. Diskusikan konsep video dengan editor</b>
                        <div style="margin: 5px 0;">
                            <div>- Jika kamu belum menerima respons dari editor, kamu dapat berbicara dengan editor lainnya</div>
                            <div>- Kamu dapat berbicara dengan editor maksimal 5 orang per hari</div>
                            <div>- Sistem tidak mengijinkan kamu untuk bertukar kontak seperti nomor telephone, atau email dengan editor.</div>
                            <div>- Kamu dapat melakukan konfirmasi dengan menekan tombol "Konfirmasi" pada chat box jika sudah menyetujui hasil diskusi</div>
                            <div>- Kedua pihak (penyewa dan editor) harus melakukan konfirmasi untuk melanjutkan pesanan</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="penggunaan-container">
                <div class="flex">
                    <img src="{{ asset('/storage/bayar.png') }}" alt="" style="height: 50px; width: 50px; margin: 0 10px;" class="bold">

                    <div class="penggunaan-desc">
                        <b>3. Melakukan pembayaran</b>
                        <div style="margin: 5px 0;">
                            <div>- Setelah melakukan upload bahan-bahan untuk editor, sistem akan menampilkan detail pembayaran</div>
                            <div>- Kamu dapat melakukan pembayaran dengan 2 cara, via Saldo FindE dan Gopay</div>
                            <div>- Sistem tidak mengijinkan kamu untuk bertukar kontak seperti nomor telephone, atau email dengan editor</div>
                            <div>- Sistem akan menyimpan uang kamu sampai editor menyelesaikan tugasnya</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="penggunaan-container">
                <div class="flex">
                    <img src="{{ asset('/storage/tunggu.png') }}" alt="" style="height: 50px; width: 50px; margin: 0 10px;" class="bold">

                    <div class="penggunaan-desc">
                        <b>4. Menunggu editor mengirim hasil edit</b>
                        <div style="margin: 5px 0;">
                            <div>- Teliti kembali hasil video yang dikirimkan oleh editor</div>
                            <div>- Klik "Request Revisi" jika editor hasil edit tidak sesuai dengan diskusi</div>
                            <div>- Untuk revisi ke-2 dan selanjutnya akan dikenakan charge</div>
                            <div>- Klik "Konfirmasi Pesanan Selesai" jika editor sudah bekerja sesuai hasil diskusi</div>
                            <div>- Editor menerima pembayaran setelah kamu melakukan konfirmasi pesanan selesai</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="penggunaan-container">
                <div class="flex">
                    <img src="{{ asset('/storage/review.png') }}" alt="" style="height: 50px; width: 50px; margin: 0 10px;" class="bold">

                    <div class="penggunaan-desc">
                        <b>5. Berikan rating dan ulasan</b>
                        <div style="margin: 5px 0;">
                            <div>- Berikan rating dan ulasan kepada editor</div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection