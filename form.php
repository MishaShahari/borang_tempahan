<!DOCTYPE html>
<html>

<head>
  <title>Borang Tempahan Kostum dan Peralatan</title>
  <link rel="stylesheet" type="text/css" href="css/form.css">
  <script src="js/validation.js" defer></script>
  <script src="js/dateRange.js" defer></script>
</head>

<body>
  <?php include 'includes/header.html'; ?>
  <div class="container">

    <div class="logo-details">
      <p><b>PUSAT KEBUDAYAAN<br>
          BAHAGIAN HAL EHWAL PELAJAR<br>
          BANGUNAN BUDISISWA<br>
          UiTM SHAH ALAM<br>
          TEL: 03-55443661<br>
          FAKS: 03-5544369</b></p>

      <img src="images/uitm_logo.svg" alt="UITM Logo" width="200" height="120">
      <img src="images/logo_pusat_kebudayaan.png" alt="Pusat Kebudayaan Logo" width="200" height="120">
    </div>

    <p>
      <b><u>WAKTU BERURUSAN</u></b><br>
      ISNIN – KHAMIS : 9.00 PAGI – 12.00 TENGAHARI <br>
      <span class="tabbed-line">: 2.00 PETANG – 4.00 PETANG </span> <br>
      JUMAAT <span class="tabbed">: 9.00 PAGI – 12.00 TENGHARI </span> <br>
    </p>

    <u><h2>BORANG TEMPAHAN KOSTUM DAN PERALATAN</h2></u>
    <span style="color: red; text-align: left;"> * required field</span> <br><br>
    <form id="submissionForm" method="post" action="success.php" onsubmit="return validate(this) && validateDateRange()">

      <fieldset>
        <legend><b>A. MAKLUMAT PROGRAM</b></legend>
        PROGRAM :
        <input type="text" name="program" required><span style="color: red; "> *</span> <br><br>

        <!-- Add an onchange attribute to the "Tarikh Pinjam" input -->
        TARIKH PINJAMAN:
        <input type="date" name="tarikhpinjam" id="tarikhpinjam" required onchange="updateTarikhPulangMin()"><span style="color: red; "> *</span><br><br>

        <!-- Add a min attribute to the "Tarikh Pulang" input -->
        TARIK PULANG:
        <input type="date" name="tarikhpulang" id="tarikhpulang" required><span style="color: red; "> *</span><br><br>

        MASA:
        <input type="time" name="masa" required><span style="color: red; "> *</span><br><br>

        PENGANJUR :
        <input type="text" name="penganjur" required><span style="color: red; "> *</span> <br><br>

        JUMLAH PESERTA:
        <input type="number" name="jumlah" required><span style="color: red; "> *</span> <br><br>

      </fieldset>

      <fieldset>
        <legend><b>B. BUTIRAN PEMOHON</b></legend>
        NAMA :
        <input type="text" name="namapemohon" required><span style="color: red; "> *</span> <br><br>

        NO. PEKERJA/NO. PELAJAR:
        <input type="text" name="nopelajar" required><span style="color: red; "> *</span> <br><br>

        JAWATAN:
        <input type="text" name="jawatanpemohon" required><span style="color: red; "> *</span> <br><br>

        BAHAGIAN/PUSAT/UNIT/FAKULTI/KOLEJ:
        <input type="text" name="bahagianpemohon" required><span style="color: red; "> *</span> <br><br>

        NO. TELEFON :
        <label for="bimbitpemohon">BIMBIT</label>
        <input type="radio" id="bimbitpemohon" name="phonetypepemohon" value="Bimbit" checked>
        <label for="pejabatpemohon">PEJABAT</label>
        <input type="radio" id="pejabatpemohon" name="phonetypepemohon" value="Pejabat">
        <input type="text" name="phonepemohon" required placeholder="Contoh: 0123456789 atau 0345678901"> <span style="color: red; "> *</span>
      </fieldset>

      <fieldset>
        <legend><b>C. BUTIRAN PENJAMIN</b></legend>
        NAMA :
        <input type="text" name="namapenjamin" required><span style="color: red; "> *</span> <br><br>

        NO. PEKERJA:
        <input type="text" name="nopekerja" required><span style="color: red; "> *</span> <br><br>

        JAWATAN:
        <input type="text" name="jawatanpenjamin" required><span style="color: red; "> *</span> <br><br>

        BAHAGIAN/PUSAT/UNIT/FAKULTI/KOLEJ:
        <input type="text" name="bahagianpenjamin" required><span style="color: red; "> *</span> <br><br>

        NO. TELEFON :
        <label for="bimbitpenjamin">BIMBIT</label>
        <input type="radio" id="bimbitpenjamin" name="phonetypepenjamin" value="Bimbit" checked>
        <label for="pejabatpenjamin">PEJABAT</label>
        <input type="radio" id="pejabatpenjamin" name="phonetypepenjamin" value="Pejabat">
        <input type="text" name="phonepenjamin" required placeholder="Contoh: 0123456789 atau 0345678901"><span style="color: red; "> *</span>
      </fieldset>

      <fieldset>
        <legend><b>PENGAKUAN PEMOHON</b></legend><span style="color: red; "> *</span>
        <input type="checkbox" name="pengakuan_pemohon" id="pengakuan_pemohon" required>
        <label for="pengakuan_pemohon">
          Saya mengaku akan bertanggungjawab terhadap semua kostum dan peralatan yang dipinjam dan
          mematuhi etika penggunaan. Saya juga bersetuju untuk membayar gantirugi sekiranya berlaku
          kerosakan dan kehilangan pada peralatan tersebut. Sekiranya saya gagal berbuat demikian pihak
          UiTM berhak mengambil tindakan sewajarnya.
        </label><br><br>
      </fieldset>

      <fieldset>
        <legend><b>D. PENGAKUAN PENJAMIN</b></legend><span style="color: red; "> *</span>
        <input type="checkbox" name="pengakuan_penjamin" id="pengakuan_penjamin" required>
        <label for="pengakuan_pemohon">
          Saya mengaku akan bertanggungjawab terhadap semua kostum dan peralatan yang dipinjam dan
          mematuhi etika penggunaan. Saya juga bersetuju untuk membayar gantirugi sekiranya berlaku
          kerosakan dan kehilangan pada peralatan tersebut. Sekiranya saya gagal berbuat demikian pihak
          UiTM berhak mengambil tindakan sewajarnya.
        </label><br><br>
      </fieldset>

      <input type="submit" name="submit" value="Hantar">
      <input type="reset" name="cancel" value="Batal">
      <div style="color: white; font-size: 18px; font-weight: bold; text-align: center;"></div>
    </form>
  </div>
  </div>
  <?php include 'includes/footer.html'; ?>
</body>

</html>
