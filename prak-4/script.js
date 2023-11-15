function hitungGanjilGenap() {
    var bilangan = parseInt(document.getElementById("bilangan").value);

    if (bilangan <= 0 || isNaN(bilangan)) {
        alert("Masukkan bilangan bulat positif yang valid.");
    } else {
        var jumlahGanjil = 0;
        var jumlahGenap = 0;

        for (var i = 1; i <= bilangan; i++) {
            if (i % 2 === 0) {
                
                jumlahGenap++;
            } else {
               
                jumlahGanjil++;
            }
        }
    }
        document.getElementById("hasil").innerHTML = "Jumlah Ganjil: " + jumlahGanjil + "<br>Jumlah Genap: " + jumlahGenap;
}