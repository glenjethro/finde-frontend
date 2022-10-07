@extends('layout.mainlayout')
@section('content')
    <div class="detail-base">
        <div class="detail-container">
            <div class="flex space-between">
                <div class="detail-title black">Request Revisi</div>
                <a href="video2" style="color: #a1a1a1; margin: 0 5px 0 0;">&#9932;</a>
            </div>

            <div class="">
                <form action="" class="input-deskripsi">                   
                    <textarea class="" type="text" name="ketRevisi" id="ketRevisi" autocomplete="off" 
                    placeholder="Keterangan revisi"></textarea>

                    <div class="flex column">
                        <a href="pembayaran" class="detail-btn">Ajukan Request</a>
                    </div>
                    <!-- <input type="submit" class="upload-btn" value="Ajukan Request" style="border-radius: 15px; margin-bottom: 0; width: 50%;"> -->
                </form>
            </div>
        </div>
    </div>
@endsection

<!-- <form action="" class="form">
        <div class="sub-form" style="margin: 0 0 5px 0;">Request Revisi</div>
        <div class="garis" style="width: 100%; margin: 5px 0 20px 0;"></div>
        
        INPUT
        <textarea class="input-deskripsi" type="text" name="ketRevisi" id="ketRevisi" autocomplete="off" 
        placeholder="Keterangan revisi"></textarea>

        <br>
        <a href="pembayaran">asdasd</a>
        <input type="submit" class="upload-btn" value="Ajukan Request" style="border-radius: 15px; margin-bottom: 0; width: 50%;">

</form> -->