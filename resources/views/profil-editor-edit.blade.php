@extends('layout.editorlayout')
@section('content')
    <div class="profil-container">
        <!-- KARYA EDIT -->
        <input type="file" id="profil-thumbnail" name="fotoCarousel" multiple hidden/>
        <label class="flex column" for="profil-thumbnail" style="width: 100%;">
            <div class="profil-carousel" style="margin-bottom: 0;">
                <i class="fa-solid fa-plus"></i>
            </div>
        </label>
        

        <input type="file" id="profil-thumbnail" name="fotoCarousel" multiple hidden/>
        <label class="flex column" for="profil-thumbnail" style="width: 100%;">
            <div class="detail-btn" style="width: 100%; margin: 10px 0;">Upload Gambar Pratinjau</div>
        </label>

        <!-- NAMA & DESKRIPSI EDITOR -->
        <div class="namadesc-container">
            <div class="flex space-between bold" style="width: 100%;">
                <div class="fotonama">
                    <input type="file" id="profilfoto" name="fotoCarousel" multiple hidden/>
                    <label class="flex column" for="profilfoto" style="">
                        <div class="foto-editor">
                            <i class="fa-solid fa-plus"></i>
                        </div>
                    </label>

                    <div style="margin: 0 5px;">Glenaldo</div>
                </div>
            </div>

            <!-- <div class="garis"></div> -->
            
            <div class="ket-container flex column margin-TB" style="width: 100%; padding: 0;">
                <form class="profil" action="">
                    <input type="text" placeholder="Judul Profil">
                    <div class="garis" style="margin: 5px 0; width: 98%;"></div>
                    <textarea name="" id="" cols="" rows="" placeholder="Isi Deskripsi"></textarea>
                </form>
            </div>

            <a href="home-editor" class="detail-btn" style="width: 50%;">Simpan</a>
        </div>
    </div>
@endsection