@extends('layout.mainlayout')
@section('content')
    <div class="form-base">
        <div class="form-bg" style="padding: 10px; height: 70%;">
            <div class="flex column" style="width: 100%;">
                <div class="ktp-container" style="background-color: #f7f7f7;">
                    <img class="ktp-foto" src="{{ asset('/storage/selfie-ktp.png') }}" alt="">

                    <div class="ktp-isi">
                        <div class="margin-LR">• Terdapat gambar diri pemilik identitas pada foto KTP</div>
                        <div class="margin-LR">• Foto selfie membawa kartu identitas haruslah terlihat wajah</div>
                        <div class="margin-LR">• Foto selfie membawa kartu identitas tidak boleh berdua dengan orang lain</div>
                        <div class="margin-LR">• KTP terlihat dan terbaca dengan jelas</div>
                    </div>
                </div>

                <div class="font-snk" style="width: 100%; text-align: center; margin-top: 5px;">Dengan mengklik <b>"Lanjut"</b>, saya menyetujui <a href="snk">Syarat dan Ketentuan</a> dan <a href="snk">Kebijakan Privasi</a> yang berlaku</div>
            </div>
            


            <div class="ktp-container">
                <div class="ktp-title">Upload Foto Selfie Dengan KTP</div>

                <!-- <input type="file" id="foto-ktp" name="fotoKTP" multiple hidden/>
                <label for="foto-ktp">
                    <div class="ktp-btn">Upload</div>
                </label> -->

                <input type="file" id="karya-edit" name="karyaEdit" multiple hidden/>
                <label for="karya-edit" style="width: 70%; margin: 20px 0;">
                    <div class="upload-drag" style="width: 100%;">
                        <i class="fa-solid fa-arrow-up-from-bracket upload-icon"></i>
                        <div style="color: #a1a1a1;">Pilih File</div>
                    </div>
                </label>

                <a class="pilihan-btn" href="sertifikasi">Lanjut</a>
            </div>
        </div>
    </div>
@endsection