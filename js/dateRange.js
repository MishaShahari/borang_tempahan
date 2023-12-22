// dateRange.js
function updateTarikhPulangMin() {
  // Get the value of the selected "Tarikh Pinjam"
  var tarikhPinjam = document.getElementById('tarikhpinjam').value;

  // Set the minimum date for "Tarikh Pulang" to the selected "Tarikh Pinjam"
  document.getElementById('tarikhpulang').min = tarikhPinjam;

  // If you want to clear the selected "Tarikh Pulang" when changing "Tarikh Pinjam"
  document.getElementById('tarikhpulang').value = '';
}
