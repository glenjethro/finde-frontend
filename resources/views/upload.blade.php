@extends('layout.mainlayout')
@section('content')
    <div class="upload-base">
        <div class="upload-container">
            <div class="flex space-between" style="margin-bottom: 5px;">
                <div class="detail-title black">Upload</div>
                <a href="home-editor" style="color: #a1a1a1; margin: 0 5px 0 0;">&#9932;</a>
            </div>

            <input type="file" id="karya-edit" name="karyaEdit" multiple hidden/>
            <label for="karya-edit">
                <div class="upload-drag">
                    <i class="fa-solid fa-arrow-up-from-bracket upload-icon"></i>
                    <div style="color: #a1a1a1;">Pilih File</div>
                </div>
            </label>

            <textarea class="upload-textarea" type="text" name="ketVideo" id="ketVideo" autocomplete="off" 
            placeholder="Isi Keterangan Video"></textarea>

            <a class="detail-btn" href="home-editor">Kirim</a>
        </div>
    </div>


    <!-- <div class="form-container" style="height: 700px;">
        <div class="form-bg">
            <div class="flex space-between">
                <div></div>
                <a href="" style="color: white;">&#9932;</a>
            </div>

            <form action="" class="form">
                <div class="sub-form" style="font-size: 1.5em; margin-bottom: 5px;">Untuk melanjutkan pesanan, upload potongan gambar atau videomu terlebih dahulu</div>
                <div class="garis" style="width: 100%; margin: 5px 0 20px 0;"></div>
                
                INPUT
                <textarea class="" type="text" name="ketVideo" id="ketVideo" autocomplete="off" 
                placeholder="Keterangan video"></textarea>

                <input type="file" id="karya-edit" name="karyaEdit" multiple hidden/>
                <label for="karya-edit" class="flex column">
                    <div class="upload-btn">Upload video disini</div>
                    <div class="upload-notif">Belum ada file yang dipilih</div>
                </label>

                <br>
                <br>
                <a href="pembayaran">asdasd</a>
                <input type="submit" class="upload-btn" value="Lanjut" style="border-radius: 15px; margin-bottom: 0; width: 50%;">

            </form>

            <div class="error" id="error"></div>
        </div>
    </div> -->
@endsection