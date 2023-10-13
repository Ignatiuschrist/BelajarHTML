function hitung() {
    var angka1 = parseFloat(document.getElementById("angka1").value);
    var angka2 = parseFloat(document.getElementById("angka2").value);
    var operator = document.getElementById("operator").value;
    var hasilElement = document.getElementById("hasil");
    // nestedif
    if (!isNaN(angka1) && !isNaN(angka2)) {
        if (operator == 'tambah') {
            var hasil = angka1 + angka2; // Ganti operasi ini sesuai yang diinginkan (+, -, *, /, dll.)
            hasilElement.textContent = hasil;
        } else  if (operator == 'kurang') {
            var hasil = angka1 - angka2; // Ganti operasi ini sesuai yang diinginkan (+, -, *, /, dll.)
            hasilElement.textContent = hasil;
        } else  if (operator == 'kali') {
            var hasil = angka1 * angka2; // Ganti operasi ini sesuai yang diinginkan (+, -, *, /, dll.)
            hasilElement.textContent = hasil;
        } else  if (operator == 'bagi') {
            var hasil = angka1 / angka2; // Ganti operasi ini sesuai yang diinginkan (+, -, *, /, dll.)
            hasilElement.textContent = hasil;
        }    
    } else {
        hasilElement.textContent = "Masukkan angka yang valid di kedua input.";
    }
    
}