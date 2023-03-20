function showHarga() {
  var produk = document.getElementById("kelas_penumpang").value;
  var harga = document.getElementById("harga");
  if (produk == "") {
    harga.value = "";
    return;
  }
  var xmlhttp = new XMLHttpRequest();
  xmlhttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      harga.value = this.responseText;
    }
  };
  xmlhttp.open("GET", "getHarga.php?id=" + produk, true);
  xmlhttp.send();
}
