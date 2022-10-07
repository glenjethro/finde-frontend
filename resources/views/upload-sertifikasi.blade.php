@extends('layout.mainlayout')
@section('content')
    <div class="form-base">
        <div class="form-bg" style="padding: 10px;">
            <div class="flex column" style="width: 100%;">
                <div class="ktp-container" style="background-color: #f7f7f7;">
                    <i class="fa-solid fa-file-circle-check sertif-icon"></i>

                    <div class="ktp-isi" style="width: 100%;">
                        <div class="margin-LR">• Foto dari sertifikasi editor video milik diri sendiri</div>
                        <div class="margin-LR">• Hasil foto terlihat dan terbaca dengan jelas</div>
                        <div class="margin-LR">• Foto tidak boleh terpotong dan terhalangi oleh apapun</div>
                    </div>
                </div>

                <div class="font-snk" style="width: 100%; text-align: center; margin-top: 30px;">Dengan mengklik <b>"Kirim"</b>, saya menyetujui <a href="snk">Syarat dan Ketentuan</a> dan <a href="snk">Kebijakan Privasi</a> yang berlaku</div>
            </div>

            <div class="ktp-container">
                <div class="ktp-title">Upload Foto Sertifikasi Editor Video</div>

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

                <a class="pilihan-btn" href="home-registered">Kirim</a>
            </div>
        </div>
    </div>
@endsection