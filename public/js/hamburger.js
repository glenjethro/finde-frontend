const gambar = document.getElementById("gambar");

gambar.onclick = function(){
    const x = document.getElementById("menu");
    if (x.style.display === "none"){
        x.style.display = "flex";
    }
    else {
        x.style.display = "none";
    }
}