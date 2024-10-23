<!DOCTYPE html>
<html>

<head>
  <title>LAPORAN BULANAN PENGENDALIAN PENYAKIT MENULAR</title>
  <style>
    body {
      font-family: Arial, sans-serif;
    }

    table {
      width: 100%;
      border-collapse: collapse;
    }

    th,
    td {
      border: 1px solid black;
      padding: 8px;
      text-align: left;
    }

    th {
      text-align: center;
      font-weight: 400;
    }

    .column2-5 {
      width: 2.5%;
    }

    .column5 {
      width: 5%;
    }

    .column7-5 {
      width: 7.5%;
    }

    .column10 {
      width: 10%;
    }

    .column12-5 {
      width: 12.5%;
    }

    .column15 {
      width: 15%;
    }

    .column20 {
      width: 20%;
    }

    .column25 {
      width: 25%;
    }

    .column30 {
      width: 30%;
    }

    .column35 {
      width: 35%;
    }

    .column40 {
      width: 40%;
    }

    .column45 {
      width: 45%;
    }

    .column50 {
      width: 50%;
    }

    .column55 {
      width: 55%;
    }

    .column60 {
      width: 60%;
    }

    .column65 {
      width: 60%;
    }

    .column70 {
      width: 60%;
    }

    .column75 {
      width: 60%;
    }

    .column80 {
      width: 60%;
    }

    .column95 {
      width: 95%;
    }

    .columGrey {
      background: #F1F1F1;
    }

    .head {
      display: flex;
      flex-direction: column;
      align-items: center;
      gap: 4px;
    }

    .head p {
      margin: 0;
    }

    .headerForm {
      border: none !important;
      margin: 30px 0;
    }

    .headerFormLeft,
    .headerFormRight,
    .headerForm .dataLeft,
    .headerForm .dataRight {
      border: none !important;
    }

    .headerFormLeft {
      width: 50vw;
    }

    .headerFormRight {
      width: 30vw;
      padding-left: 20vw;
    }

    .headerForm .dataLeft {
      /* background: blue; */
      width: 70px;
      /* background: red; */
    }

    .headerForm .dataRight {
      /* background: red; */
      border: 1px solid black !important;
      /* background: blue; */
    }
  </style>
</head>

<body>
  <div class="head">
    <p style="text-align: center;">Formulir 6</p>
    <p style="text-align: center;">LAPORAN BULANAN PENGENDALIAN PENYAKIT MENULAR </p>
  </div>

  <!-- <table class="headerForm">
    <tr>
      <td class="headerFormLeft" style="width: 150px;">
        <table class="itemHeader">
          <tr>
            <td class="dataLeft">Kode</td>
            <td class="dataRight" style="width: 10px;">1</td>
            <td class="dataRight" style="width: 10px;">2</td>
            <td class="dataRight" style="width: 10px;">3</td>
            <td class="dataRight" style="width: 10px;">4</td>
            <td class="dataRight" style="width: 10px;">5</td>
            <td class="dataRight" style="width: 10px;">6</td>
            <td class="dataRight" style="width: 10px;">7</td>
          </tr> 
        </table>
      </td>
      <td class="headerFormRight" styles="width: 400px;">
        <table class="itemHeader">
          <tr>
            <td class="dataLeft" style="padding-left: 100px; padding-right: -300px; margin-right: -300px; width: 10px;">Bulan</td>
            <td class="dataRight" style="width: 100px; margin-left: -300px;">1</td>
          </tr>
        </table>
      </td>
    </tr>
    <tr>
      <td class="headerFormLeft" styles="width: 300px;">
        <table class="itemHeader">
          <tr>
            <td class="dataLeft">Puskesmas</td>
            <td class="dataRight" style="width: 200px;">1</td>
          </tr>
        </table>
      </td>
      <td class="headerFormRight" styles="width: 200px;">
        <table class="itemHeader">
          <tr>
            <td class="dataLeft" style="padding-left: 100px; padding-right: -300px; margin-right: -300px; width: 10px;">Tahun</td>
            <td class="dataRight" style="width: 100px; margin-left: -300px;">1</td>
          </tr>
        </table>
      </td>
    </tr>
  </table> -->

  @php
    // Assuming you have your date string
    $dateString = $dataPuskesmas->data[0]['bulan_tahun'];
    // Create a Carbon instance
    $date = \Carbon\Carbon::parse($dateString);
    // Get the year
    $year = $date->format('Y'); // 'Y' gives a 4-digit year
    $monthName = $date->format('F'); // 'F' gives the full textual representation of the month
  @endphp

  <div style="margin-top: 50px; ">
    <div style="width: 400px; display: inline-block; vertical-align: middle; ">
      <span style="display: inline-block; vertical-align: middle; margin: 0 60px 0 15px; ">Kode</span>
      @foreach (str_split($dataPuskesmas->idLaporan) as $digit)
        <span style="width: 20px; height: 30px; display: inline-block; vertical-align: middle; border: 1px solid black; margin: 0 -3px !important; padding: 8px 0 0 8px;">
          {{ $digit }}
        </span>
      @endforeach
    </div>
    <div style="width: 200px; margin-left: 80px; display: inline-block; vertical-align: middle; ">
        <div>
            <span  style="display: inline-block; vertical-align: middle; width: 50px; ">Bulan</span>
            <span  style="width: 100px; height: 30px; display: inline-block; vertical-align: middle; border: 1px solid black; margin-left: 20px; padding: 8px 0 0 8px; ">{{ $monthName }}</span>
        </div>
    </div>
  </div>

  <div style="margin-top: 20px; " >
    <div style="width: 400px; display: inline-block; vertical-align: middle; ">
      <span style="display: inline-block; vertical-align: middle; margin: 0 15px 0 15px; ">Puskesmas</span>
      <span style="width: 270px; height: 30px; display: inline-block; vertical-align: middle; border: 1px solid black; margin: 0 -3px !important; padding: 8px 0 0 8px; ">{{ $dataPuskesmas->namaPuskesmas ?? "" }}</span>
    </div>
    <div style="width: 200px; margin-left: 80px; display: inline-block; vertical-align: middle; ">
        <div>
            <span  style="display: inline-block; vertical-align: middle; width: 50px; ">Tahun</span>
            <span  style="width: 100px; height: 30px; display: inline-block; vertical-align: middle; border: 1px solid black; margin-left: 20px; padding: 8px 0 0 8px; ">{{ $year }}</span>
        </div>
    </div>
  </div>

  <table style="margin-top: 20px; ">
    <thead>
      <tr>
        <td class="column5">No</td>
        <td class="column80">Kegiatan</td>
        <td class="column15">Jumlah</td>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td class="column5 columGrey">A</td>
        <td class="column80 columGrey">MALARIA</td>
        <td class="column15 columGrey"></td>
      </tr>
      <tr>
        <td class="column5">1.</td>
        <td class="column80">Jumlah suspek malaria ditemukan</td>
        <td class="column15">{{ $dataPuskesmas->data[0]['suspek_malaria'] ?? 0 }}</td>
      </tr>
      <tr>
        <td class="column5">2.</td>
        <td class="column80">Jumlah suspek malaria diperiksa mikroskopis/RDT </td>
        <td class="column15">{{ $dataPuskesmas->data[0]['suspek_malaria_rdt'] ?? 0 }}</td>
      </tr>
      <tr>
        <td class="column5">3.</td>
        <td class="column80">Jumlah malaria positif (sama dengan jumlah malaria positif pada Laporan Bulanan Data Kesakitan) </td>
        <td class="column15">{{ $dataPuskesmas->data[0]['malaria_positif'] ?? 0 }}</td>
      </tr>
      <tr>
        <td class="column5">4.</td>
        <td class="column80">Jumlah malaria positif Plasmodium falsiparum</td>
        <td class="column15">{{ $dataPuskesmas->data[0]['malaria_positif_plasmodium'] ?? 0 }}</td>
      </tr>
      <tr>
        <td class="column5">5.</td>
        <td class="column80">Jumlah malaria positif indigenous</td>
        <td class="column15">{{ $dataPuskesmas->data[0]['malaria_positif_indigenous'] ?? 0 }}</td>
      </tr>
      <tr>
        <td class="column5">6.</td>
        <td class="column80">Jumlah malaria positif import</td>
        <td class="column15">{{ $dataPuskesmas->data[0]['malaria_positif_import'] ?? 0 }}</td>
      </tr>
      <tr>
        <td class="column5">7.</td>
        <td class="column80">Jumlah malaria positif diobati standar</td>
        <td class="column15">{{ $dataPuskesmas->data[0]['malaria_positif_diobati_standar'] ?? 0 }}</td>
      </tr>
      <tr>
        <td class="column5">8.</td>
        <td class="column80">Jumlah kelambu berinsektisida yang dibagikan</td>
        <td class="column15">{{ $dataPuskesmas->data[0]['kelambu_berinsektisida_dibagikan'] ?? 0 }}</td>
      </tr>
      <tr>
        <td class="column5 columGrey">B</td>
        <td class="column80 columGrey">DBD (Demam Berdarah Dengue)</td>
        <td class="column15 columGrey"></td>
      </tr>
      <tr>
        <td class="column5">1.</td>
        <td class="column80">Jumlah kelurahan/desa berisiko penularan DBD (ada kelompok/cluster dalam 3 tahun terakhir)</td>
        <td class="column15">{{ $dataPuskesmas->data[0]['kelurahan_berisiko_dbd'] ?? 0 }}</td>
      </tr>
      <tr>
        <td class="column5">2.</td>
        <td class="column80">Jumlah kelurahan/desa berisiko penularan DBD diperiksa jentik</td>
        <td class="column15">{{ $dataPuskesmas->data[0]['kelurahan_berisiko_dbd_diperiksa_jentik'] ?? 0 }}</td>
      </tr>
      <tr>
        <td class="column5">3.</td>
        <td class="column80">Jumlah kelurahan/desa berisiko penularan DBD bebas jentik (ada jentik <5 rmh/bangunan) </td>
        <td class="column15">{{ $dataPuskesmas->data[0]['kelurahan_berisiko_dbd_tidak_diperiksa_jentik'] ?? 0 }}</td>
      </tr>
      <tr>
        <td class="column5">4.</td>
        <td class="column80">Jumlah fogging focus</td>
        <td class="column15">{{ $dataPuskesmas->data[0]['fogging_focus'] ?? 0 }}</td>
      </tr>
      <tr>
        <td class="column5">5.</td>
        <td class="column80">Jumlah kelurahan/desa yang dilakukan larvasidasi</td>
        <td class="column15">{{ $dataPuskesmas->data[0]['kelurahan_dilakukan_larvadisasi'] ?? 0 }}</td>
      </tr>
      <tr>
        <td class="column5">6.</td>
        <td class="column80">Jumlah kelurahan/desa yang dilakukan PSN 3M Plus</td>
        <td class="column15">{{ $dataPuskesmas->data[0]['kelurahan_dilakukan_psn_3m_plus'] ?? 0 }}</td>
      </tr>
      <tr>
        <td class="column5">7.</td>
        <td class="column80">Jumlah sekolah diperiksa jentik</td>
        <td class="column15">{{ $dataPuskesmas->data[0]['sekolah_diperiksa_jentik'] ?? 0 }}</td>
      </tr>
      <tr>
        <td class="column5">8.</td>
        <td class="column80">Jumlah sekolah diperiksa dan bebas dari jentik</td>
        <td class="column15">{{ $dataPuskesmas->data[0]['sekolah_diperiksa_bebas_jentik'] ?? 0 }}</td>
      </tr>
      <tr>
        <td class="column5">9.</td>
        <td class="column80">Jumlah RS/puskesmas/klinik diperiksa jentik</td>
        <td class="column15">{{ $dataPuskesmas->data[0]['puskesmas_diperiksa_jetik'] ?? 0 }}</td>
      </tr>
      <tr>
        <td class="column5">10.</td>
        <td class="column80">Jumlah RS/puskesmas/klinik diperiksa dan bebas dari jentik</td>
        <td class="column15">{{ $dataPuskesmas->data[0]['puskesmas_diperiksa_bebas_jentik'] ?? 0 }}</td>
      </tr>
      <tr>
        <td class="column5">11.</td>
        <td class="column80">Jumlah tempat-tempat umum lainnya diperiksa jentik</td>
        <td class="column15">{{ $dataPuskesmas->data[0]['tempat_umum_diperiksa_jetik'] ?? 0 }}</td>
      </tr>
      <tr>
        <td class="column5">12.</td>
        <td class="column80">Jumlah tempat - tempat umum lainnya diperiksa dan bebas jentik</td>
        <td class="column15">{{ $dataPuskesmas->data[0]['tempat_umum_diperiksa_bebas_jentik'] ?? 0 }}</td>
      </tr>
      <tr>
        <td class="column5 columGrey">C</td>
        <td class="column80 columGrey">KECACINGAN</td>
        <td class="column15 columGrey"></td>
      </tr>
      <tr>
        <td class="column5">1</td>
        <td class="column80">Jumlah anak balita (1-4 tahun) yang diperiksa cacing pada tinjanya</td>
        <td class="column15">{{ $dataPuskesmas->data[0]['anak_balita_diperiksa_cacing'] ?? 0 }}</td>
      </tr>
      <tr>
        <td class="column5">2.</td>
        <td class="column80">Jumlah anak prasekolah (5-6 tahun) yang diperiksa cacing pada tinjanya</td>
        <td class="column15">{{ $dataPuskesmas->data[0]['anak_prasekolah_diperiksa_cacing'] ?? 0 }}</td>
      </tr>
      <tr>
        <td class="column5">3.</td>
        <td class="column80">Jumlah anak sekolah (7-12 tahun) yang diperiksa cacing pada tinjanya</td>
        <td class="column15">{{ $dataPuskesmas->data[0]['anak_sekolah_diperiksa_cacing'] ?? 0 }}</td>
      </tr>
      <tr>
        <td class="column5">4.</td>
        <td class="column80">Jumlah anak balita (1-4 tahun) yang ditemukan positif telur cacing pada pemeriksaan tinjanya</td>
        <td class="column15">{{ $dataPuskesmas->data[0]['anak_balita_positif_telur_cacing'] ?? 0 }}</td>
      </tr>
      <tr>
        <td class="column5">5.</td>
        <td class="column80">Jumlah anak prasekolah (5-6 tahun) yang ditemukan positif telur cacing pada pemeriksaan tinjanya</td>
        <td class="column15">{{ $dataPuskesmas->data[0]['anak_prasekolah_positif_telur_cacing'] ?? 0 }}</td>
      </tr>
      <tr>
        <td class="column5">6.</td>
        <td class="column80">Jumlah anak sekolah (7-12 tahun) yang ditemukan positif telur cacing pada pemeriksaan tinjanya</td>
        <td class="column15">{{ $dataPuskesmas->data[0]['anak_sekolah_positif_telur_cacing'] ?? 0 }}</td>
      </tr>
      <tr>
        <td class="column5">7.</td>
        <td class="column80">Jumlah anak balita (1-4 tahun) yang minum obat cacing (Albendazole)</td>
        <td class="column15">{{ $dataPuskesmas->data[0]['anak_balita_minum_obat_cacing'] ?? 0 }}</td>
      </tr>
      <tr>
        <td class="column5">8.</td>
        <td class="column80">Jumlah anak prasekolah (5-6 tahun) yang minum obat cacing (Albendazole)</td>
        <td class="column15">{{ $dataPuskesmas->data[0]['anak_prasekolah_minum_obat_cacing'] ?? 0 }}</td>
      </tr>
      <tr>
        <td class="column5">9.</td>
        <td class="column80">Jumlah anak sekolah (7-12 tahun) yang minum obat cacing (Albendazole)</td>
        <td class="column15">{{ $dataPuskesmas->data[0]['anak_sekolah_minum_obat_cacing'] ?? 0 }}</td>
      </tr>
      <tr>
        <td class="column5">10.</td>
        <td class="column80">Jumlah SD/MI yang anak didiknya mendapat obat cacing (Albendazole) I</td>
        <td class="column15">{{ $dataPuskesmas->data[0]['anak_sd_dapat_obat_cacing1'] ?? 0 }}</td>
      </tr>
      <tr>
        <td class="column5">11.</td>
        <td class="column80">Jumlah SD/MI yang anak didiknya mendapat obat cacing (Albendazole) II tahun ini</td>
        <td class="column15">{{ $dataPuskesmas->data[0]['anak_sd_dapat_obat_cacing2'] ?? 0 }}</td>
      </tr>
      <tr>
        <td class="column5">12.</td>
        <td class="column80">Jumlah ibu hamil dites cacing tinjanya</td>
        <td class="column15">{{ $dataPuskesmas->data[0]['ibu_hamil_tes_cacing'] ?? 0 }}</td>
      </tr>
      <tr>
        <td class="column5">13.</td>
        <td class="column80">Jumlah ibu hamil cacingan ditangani (mendapat albendazole) (baru/ulang)</td>
        <td class="column15">{{ $dataPuskesmas->data[0]['ibu_hamil_cacingan'] ?? 0 }}</td>
      </tr>
      <tr>
        <td class="column5 columGrey">D</td>
        <td class="column80 columGrey">RABIES</td>
        <td class="column15 columGrey"></td>
      </tr>
      <tr>
        <td class="column5">1.</td>
        <td class="column80">Jumlah kasus Gigitan Hewan Penular Rabies (GHPR) pada anak laki-laki (umur  <15 tahun)</td>
        <td class="column15">{{ $dataPuskesmas->data[0]['rabies_pada_anak_laki'] ?? 0 }}</td>
      </tr>
      <tr>
        <td class="column5">2.</td>
        <td class="column80">Jumlah kasus GHPR pada laki-laki dewasa (umur > 15 tahun)</td>
        <td class="column15">{{ $dataPuskesmas->data[0]['rabies_pada_dewasa_laki'] ?? 0 }}</td>
      </tr>
      <tr>
        <td class="column5">3.</td>
        <td class="column80">Jumlah kasus GHPR pada anak perempuan (umur  <15 tahun)</td>
        <td class="column15">{{ $dataPuskesmas->data[0]['rabies_pada_anak_perempuan'] ?? 0 }}</td>
      </tr>
      <tr>
        <td class="column5">4.</td>
        <td class="column80">Jumlah kasus GHPR pada perempuan dewasa (umur > 15 tahun)</td>
        <td class="column15">{{ $dataPuskesmas->data[0]['rabies_pada_dewasa_perempuan'] ?? 0 }}</td>
      </tr>
      <tr>
        <td class="column5">5.</td>
        <td class="column80">Jumlah kasus GHPR yang mendapatkan Vaksin Anti Rabies (VAR)/SAR</td>
        <td class="column15">{{ $dataPuskesmas->data[0]['dapat_vaksin_anti_rabies'] ?? 0 }}</td>
      </tr>
      <tr>
        <td class="column5">6.</td>
        <td class="column80">Jumlah kasus Rabies (Kasus Lyssa) yang mendapatkan VAR/SAR  secara lengkap</td>
        <td class="column15">{{ $dataPuskesmas->data[0]['kasus_rabies_dapat_var_lengkap'] ?? 0 }}</td>
      </tr>
      <tr>
        <td class="column5">7.</td>
        <td class="column80">Jumlah kasus Rabies (Kasus Lyssa) yang tidak mendapatkan VAR/SAR secara lengkap</td>
        <td class="column15">{{ $dataPuskesmas->data[0]['kasus_rabies_tidak_dapat_var_lengkap'] ?? 0 }}</td>
      </tr>
      <tr>
        <td class="column5 columGrey">E</td>
        <td class="column80 columGrey">DIARE</td>
        <td class="column15 columGrey"></td>
      </tr>
      <tr>
        <td class="column5">1.</td>
        <td class="column80">Jumlah penderita diare pada bayi dapat oralit</td>
        <td class="column15">{{ $dataPuskesmas->data[0]['bayi_diare_oralit'] ?? 0 }}</td>
      </tr>
      <tr>
        <td class="column5">2.</td>
        <td class="column80">Jumlah penderita diare pada bayi dapat Zink</td>
        <td class="column15">{{ $dataPuskesmas->data[0]['bayi_diare_zink'] ?? 0 }}</td>
      </tr>
      <tr>
        <td class="column5">3.</td>
        <td class="column80">Jumlah penderita diare pada bayi dapat oralit dan Zink</td>
        <td class="column15">{{ $dataPuskesmas->data[0]['bayi_diare_oralit_zink'] ?? 0 }}</td>
      </tr>
      <tr>
        <td class="column5">4.</td>
        <td class="column80">Jumlah penderita diare pada bayi dapat Infus</td>
        <td class="column15">{{ $dataPuskesmas->data[0]['bayi_diare_infus'] ?? 0 }}</td>
      </tr>
      <tr>
        <td class="column5">5.</td>
        <td class="column80">Jumlah penderita diare pada anak balita dapat oralit</td>
        <td class="column15">{{ $dataPuskesmas->data[0]['balita_diare_oralit'] ?? 0 }}</td>
      </tr>
      <tr>
        <td class="column5">6.</td>
        <td class="column80">Jumlah penderita diare pada anak balita Zink</td>
        <td class="column15">{{ $dataPuskesmas->data[0]['balita_diare_zink'] ?? 0 }}</td>
      </tr>
      <tr>
        <td class="column5">7.</td>
        <td class="column80">Jumlah penderita diare pada anak balita dapat oralit dan Zink</td>
        <td class="column15">{{ $dataPuskesmas->data[0]['balita_diare_oralit_zink'] ?? 0 }}</td>
      </tr>
      <tr>
        <td class="column5">8.</td>
        <td class="column80">Jumlah penderita diare pada anak balita dapat Infus</td>
        <td class="column15">{{ $dataPuskesmas->data[0]['balita_diare_infus'] ?? 0 }}</td>
      </tr>
      <tr>
        <td class="column5">9.</td>
        <td class="column80">Jumlah penderita diare umur ≥ 5 tahun dapat oralit</td>
        <td class="column15">{{ $dataPuskesmas->data[0]['anak_dewasa_diare_oralit'] ?? 0 }}</td>
      </tr>
      <tr>
        <td class="column5">10.</td>
        <td class="column80">Jumlah penderita diare umur ≥ 5 tahun dapat infus</td>
        <td class="column15">{{ $dataPuskesmas->data[0]['anak_dewasa_diare_zink'] ?? 0 }}</td>
      </tr>
      <tr>
        <td class="column5 columGrey">F</td>
        <td class="column80 columGrey">HEPATITIS</td>
        <td class="column15 columGrey"></td>
      </tr>
      <tr>
        <td class="column5">1.</td>
        <td class="column80">Jumlah kasus suspek hepatitis yang dirujuk</td>
        <td class="column15">{{ $dataPuskesmas->data[0]['suspek_hepatitis_dirujuk'] ?? 0 }}</td>
      </tr>
      <tr>
        <td class="column5 columGrey">G</td>
        <td class="column80 columGrey">TB PARU</td>
        <td class="column15 columGrey"></td>
      </tr>
      <tr>
        <td class="column5">1.</td>
        <td class="column80">Jumlah pasien tuberculosis paru terkonfirmasi bakteriologis (BTA/biakan/tes cepat) baru diobati</td>
        <td class="column15">{{ $dataPuskesmas->data[0]['pasien_tb_paru_diobati'] ?? 0 }}</td>
      </tr>
      <tr>
        <td class="column5">2.</td>
        <td class="column80">Jumlah pasien tuberculosis selain paru (klinis paru, BTA negatif, rontgen positif)  yang diobati</td>
        <td class="column15">{{ $dataPuskesmas->data[0]['pasien_tb_non_paru_diobati'] ?? 0 }}</td>
      </tr>
      <tr>
        <td class="column5">3.</td>
        <td class="column80">Jumlah pasien tuberculosis anak (0-14 tahun) yang diobati</td>
        <td class="column15">{{ $dataPuskesmas->data[0]['tb_anak_diobati'] ?? 0 }}</td>
      </tr>
      <tr>
        <td class="column5">4.</td>
        <td class="column80">Jumlah pasien tuberculosis yang diobati bulan ini</td>
        <td class="column15">{{ $dataPuskesmas->data[0]['pasien_tb_diobati'] ?? 0 }}</td>
      </tr>
      <tr>
        <td class="column5">5.</td>
        <td class="column80">Jumlah pasien tuberculosis paru terkonfirmasi bakteriologis yang sembuh</td>
        <td class="column15">{{ $dataPuskesmas->data[0]['pasien_tb_sembuh'] ?? 0 }}</td>
      </tr>
      <tr>
        <td class="column5">6.</td>
        <td class="column80">Jumlah pasien tuberculosis paru terkonfirmasi bakteriologis yang mendapat pengobatan lengkap</td>
        <td class="column15">{{ $dataPuskesmas->data[0]['pasien_tb_pengobatan_lengkap'] ?? 0 }}</td>
      </tr>
      <tr>
        <td class="column5">7.</td>
        <td class="column80">Jumlah pasien tuberculosis (paru BTA negatif, rontgen positif) baru yang mendapat pengobatan lengkap)</td>
        <td class="column15">{{ $dataPuskesmas->data[0]['pasien_tb_baru_pengobatan_lengkap'] ?? 0 }}</td>
      </tr>
      <tr>
        <td class="column5">8.</td>
        <td class="column80">Jumlah pasien tuberculosis kambuh</td>
        <td class="column15">{{ $dataPuskesmas->data[0]['pasien_tb_kambuh'] ?? 0 }}</td>
      </tr>
      <tr>
        <td class="column5 columGrey">H</td>
        <td class="column80 columGrey">KUSTAS</td>
        <td class="column15 columGrey"></td>
      </tr>
      <tr>
        <td class="column5">1.</td>
        <td class="column80">Jumlah penderita kusta baru tipe PB dan MB</td>
        <td class="column15">{{ $dataPuskesmas->data[0]['kusta_baru'] ?? 0 }}</td>
      </tr>
      <tr>
        <td class="column5">2.</td>
        <td class="column80">Jumlah penderita kusta (MB dan PB) baru dengan cacat tingkat 0</td>
        <td class="column15">{{ $dataPuskesmas->data[0]['kusta_tingkat_0'] ?? 0 }}</td>
      </tr>
      <tr>
        <td class="column5">3.</td>
        <td class="column80">Jumlah penderita kusta (MB dan PB) baru dengan cacat tingkat 2 </td>
        <td class="column15">{{ $dataPuskesmas->data[0]['kusta_tingkat_2'] ?? 0 }}</td>
      </tr>
      <tr>
        <td class="column5">4.</td>
        <td class="column80">Jumlah penderita kusta baru anak</td>
        <td class="column15">{{ $dataPuskesmas->data[0]['kusta_baru_anak'] ?? 0 }}</td>
      </tr>
      <tr>
        <td class="column5">5.</td>
        <td class="column80">Jumlah kasus indeks (MB dan PB) yang kontaknya dilakukan pemeriksaan kusta</td>
        <td class="column15">{{ $dataPuskesmas->data[0]['kasus_indeks_yang_kontaknya_diperiksa_kusta'] ?? 0 }}</td>
      </tr>
      <tr>
        <td class="column5">6.</td>
        <td class="column80">Jumlah penderita kusta (PB dan MB) masih dalam pengobatan MDT</td>
        <td class="column15">{{ $dataPuskesmas->data[0]['pasien_kusta_dalam_perawatan'] ?? 0 }}</td>
      </tr>
      <tr>
        <td class="column5">7.</td>
        <td class="column80">Jumlah penderita kusta (PB) dinyatakan default</td>
        <td class="column15">{{ $dataPuskesmas->data[0]['pasien_kusta_default'] ?? 0 }}</td>
      </tr>
      <tr>
        <td class="column5 columGrey">I</td>
        <td class="column80 columGrey">FRAMBUSIA</td>
        <td class="column15 columGrey"></td>
      </tr>
      <tr>
        <td class="column5">1.</td>
        <td class="column80">Jumlah penderita frambusia suspek</td>
        <td class="column15">{{ $dataPuskesmas->data[0]['frambusia_suspek'] ?? 0 }}</td>
      </tr>
      <tr>
        <td class="column5">2.</td>
        <td class="column80">Jumlah penderita frambusia suspek diperiksa serologi (pemeriksaan cepat/RDT)</td>
        <td class="column15">{{ $dataPuskesmas->data[0]['frambusia_diperiksa_serologi'] ?? 0 }}</td>
      </tr>
      <tr>
        <td class="column5">3.</td>
        <td class="column80">Jumlah penderita frambusia konfirmasi (RDT +)</td>
        <td class="column15">{{ $dataPuskesmas->data[0]['frambusia_konfirmasi'] ?? 0 }}</td>
      </tr>
      <tr>
        <td class="column5">4.</td>
        <td class="column80">Jumlah SD/MI dilakukan pemeriksaan frambusia </td>
        <td class="column15">{{ $dataPuskesmas->data[0]['sd_diperiksa_frambusia'] ?? 0 }}</td>
      </tr>
      <tr>
        <td class="column5 columGrey">J</td>
        <td class="column80 columGrey">HIV-AIDS</td>
        <td class="column15 columGrey"></td>
      </tr>
      <tr>
        <td class="column5">1.</td>
        <td class="column80">Jumlah orang dites HIV</td>
        <td class="column15">{{ $dataPuskesmas->data[0]['orang_tes_hiv'] ?? 0 }}</td>
      </tr>
      <tr>
        <td class="column5">2.</td>
        <td class="column80">Jumlah orang dengan HIV positif </td>
        <td class="column15">{{ $dataPuskesmas->data[0]['orang_positif_hiv'] ?? 0 }}</td>
      </tr>
      <tr>
        <td class="column5">3.</td>
        <td class="column80">Jumlah ibu hamil dites HIV</td>
        <td class="column15">{{ $dataPuskesmas->data[0]['ibu_hamil_tes_hiv'] ?? 0 }}</td>
      </tr>
      <tr>
        <td class="column5">4.</td>
        <td class="column80">Jumlah ibu hamil dengan HIV positif </td>
        <td class="column15">{{ $dataPuskesmas->data[0]['ibu_hamil_positif_hiv'] ?? 0 }}</td>
      </tr>
      <tr>
        <td class="column5 columGrey">K</td>
        <td class="column80 columGrey">PENYAKIT KELAMIN</td>
        <td class="column15 columGrey"></td>
      </tr>
      <tr>
        <td class="column5">1.</td>
        <td class="column80">Jumlah pasien yang dites sifilis</td>
        <td class="column15">{{ $dataPuskesmas->data[0]['pasien_tes_sifilis'] ?? 0 }}</td>
      </tr>
      <tr>
        <td class="column5">2.</td>
        <td class="column80">Jumlah pasien positif sifilis </td>
        <td class="column15">{{ $dataPuskesmas->data[0]['pasien_positif_sifilis'] ?? 0 }}</td>
      </tr>
      <tr>
        <td class="column5">3.</td>
        <td class="column80">Jumlah pasien sifilis yang diobati</td>
        <td class="column15">{{ $dataPuskesmas->data[0]['pasien_sifilis_diobati'] ?? 0 }}</td>
      </tr>
      <tr>
        <td class="column5">4.</td>
        <td class="column80">Jumlah ibu hamil yang dites sifilis</td>
        <td class="column15">{{ $dataPuskesmas->data[0]['ibu_hamil_tes_sifilis'] ?? 0 }}</td>
      </tr>
      <tr>
        <td class="column5">5.</td>
        <td class="column80">Jumlah ibu hamil positif  sifilis</td>
        <td class="column15">{{ $dataPuskesmas->data[0]['ibu_hamil_positif_sifilis'] ?? 0 }}</td>
      </tr>
      <tr>
        <td class="column5">6.</td>
        <td class="column80">Jumlah ibu hamil sifilis yang diobati</td>
        <td class="column15">{{ $dataPuskesmas->data[0]['ibu_hamil_sifilis_diobati'] ?? 0 }}</td>
      </tr>
      <tr>
        <td class="column5 columGrey">L</td>
        <td class="column80 columGrey">ISPA</td>
        <td class="column15 columGrey"></td>
      </tr>
      <tr>
        <td class="column5">1.</td>
        <td class="column80">Jumlah kunjungan Balita batuk atau kesukaran bernapas</td>
        <td class="column15">{{ $dataPuskesmas->data[0]['kunjungan_balita_batuk'] ?? 0 }}</td>
      </tr>
      <tr>
        <td class="column5">2.</td>
        <td class="column80">Jumlah Balita batuk atau kesukaran bernafas yang dihitung napas atau dilihat ada tidaknya tarikan dinding dada kedalam</td>
        <td class="column15">{{ $dataPuskesmas->data[0]['kunjungan_balita_batuk_2'] ?? 0 }}</td>
      </tr>
    </tbody>
  </table>
</body>

</html>