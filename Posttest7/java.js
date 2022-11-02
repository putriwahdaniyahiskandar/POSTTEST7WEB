confirm
var nama = confirm("Welcome To Home Cleaning");
if(nama == true){
    console.log("Yes");
    } else {
        console.log("No");
    }

const ganti = document.getElementById("ganti-copyreg");
ganti = document.addEventListener("click", function(){
    var ubah = document.getElementsByClassName("footer-logo")[0]
    ubah.innerHTML = "@Copyright2020 - Putri W. I."
    ubah.style.color = "yellow"
});

