<!DOCTYPE html>
<html>

<head>
  <title>LAPORAN BULANAN KESEHATAN KERJA DAN OLAH RAGA</title>
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

    .textCenter {
      text-align: center;
    }
  </style>
</head>

<body>
  <div class="head">
    <p style="text-align: center;">Formulir 9</p>
    <p style="text-align: center;">LAPORAN BULANAN KESEHATAN KERJA DAN OLAH RAGA</p>
  </div>

  @php
    // Check if the current record exists
    if (isset($dataPuskesmas->data[0])) {  // Access the first element of the data array
        // Access the bulan_tahun directly as it's an object
        $dateString = $dataPuskesmas->data[0]->bulan_tahun; // Use '->' to access object properties
        
        // Create a Carbon instance
        $date = \Carbon\Carbon::parse($dateString);
        
        // Get the year and month name
        $year = $date->format('Y'); // 'Y' gives a 4-digit year
        $monthName = $date->format('m'); // 'm' gives the numeric representation of the month (e.g., "10" for October)
    } else {
        // Handle the case where the record is not set
        $year = null;
        $monthName = null;
        // Log an error or take appropriate action
        \Log::info("Current record is not available in dataPuskesmas.");
    }
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
      <span style="width: 270px; height: 30px; display: inline-block; vertical-align: middle; border: 1px solid black; margin: 0 -3px !important; padding: 8px 0 0 8px; ">{{ ($dataPuskesmas->namaPuskesmas ?? "") }}</span>
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
        <td class="column5 textCenter">No</td>
        <td class="column80 textCenter">Kegiatan</td>
        <td class="column15 textCenter">Jumlah</td>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td class="column5  textCenter">1.</td>
        <td class="column80 ">Pelayanan kesehatan kerja dasar yang dilaksanakan di internal dan eksternal puskesmas</td>
        <td class="column15 "></td>
      </tr>
      <tr>
        <td class="column5  textCenter"></td>
        <td class="column80 ">a. Jumlah kelompok kerja yang dibina</td>
        <td class="column15 ">{{ $dataPuskesmas->kesehatan[0]['jumlah_kelompok_kerja_yang_dibina'] ?? "" }}</td>
      </tr>
      <tr>
        <td class="column5  textCenter"></td>
        <td class="column80 ">b. Jumlah tempat kerja yang teridentifikasi potensi bahaya</td>
        <td class="column15 ">{{ $dataPuskesmas->kesehatan[0]['jumlah_tempat_kerja_potensi_bahaya'] ?? "" }}</td>
      </tr>
      <tr>
        <td class="column5  textCenter"></td>
        <td class="column80 ">c. Jumlah tempat kerja yang dibina</td>
        <td class="column15 ">{{ $dataPuskesmas->kesehatan[0]['jumlah_tempat_kerja_yang_dibina'] ?? "" }}</td>
      </tr>
      <tr>
        <td class="column5  textCenter"></td>
        <td class="column80 ">d. Jumlah kasus penyakit pada pekerja.</td>
        <td class="column15 "></td>
      </tr>
      @foreach ($dataPuskesmas->kesehatan[0]['kasus_penyakit'] as $index => $data)
        <tr>
          <td class="column5  textCenter"></td>
          <td class="column80 ">&nbsp;&nbsp;{{ $index }}) {{ $data['nama_kasus'] }}</td>
          <td class="column15 ">{{ $data['jumlah'] }}</td>
        </tr>
      @endforeach
      <tr>
        <td class="column5  textCenter"></td>
        <td class="column80 ">e. Jumlah pekerja yang mendapatkan pelayanan promotif, preventif dan/atau rehabilitatif berdasarkan jenis pelayanan</td>
        <td class="column15 "></td>
      </tr>
      <tr>
        <td class="column5  textCenter"></td>
        <td class="column80 ">&nbsp;&nbsp;1) Promotif</td>
        <td class="column15 ">{{ $dataPuskesmas->kesehatan[0]['jumlah_pelayanan_promotif'] ?? 0 }}</td>
      </tr>
      <tr>
        <td class="column5  textCenter"></td>
        <td class="column80 ">&nbsp;&nbsp;2) Preventif</td>
        <td class="column15 ">{{ $dataPuskesmas->kesehatan[0]['jumlah_pelayanan_preventif'] ?? 0 }}</td>
      </tr>
      <tr>
        <td class="column5  textCenter"></td>
        <td class="column80 ">&nbsp;&nbsp;3) Kuratif</td>
        <td class="column15 ">{{ $dataPuskesmas->kesehatan[0]['jumlah_pelayanan_kuratif'] ?? 0 }}</td>
      </tr>
      <tr>
        <td class="column5  textCenter"></td>
        <td class="column80 ">&nbsp;&nbsp;4) Rehabilitati</td>
        <td class="column15 ">{{ $dataPuskesmas->kesehatan[0]['jumlah_pelayanan_rehabilitatif'] ?? 0 }}</td>
      </tr>
      <tr>
        <td class="column5  textCenter"></td>
        <td class="column80 ">f. Penerapan kewaspadaan standar di lingkungan puskesmas</td>
        <td class="column15 ">{{ $dataPuskesmas->kesehatan[0]['penerapan_kewaspadaan_standar_puskesmas'] ?? 0 }}</td>
      </tr>
      <tr>
        <td class="column5  textCenter">2.</td>
        <td class="column80 ">Kesehatan Olahraga</td>
        <td class="column15 "></td>
      </tr>
      <tr>
        <td class="column5  textCenter"></td>
        <td class="column80 ">a. Jumlah kelompok olahraga terdaftar di puskesmas pada bulan ini</td>
        <td class="column15 ">{{ $dataPuskesmas->kesehatan[0]['jumlah_kelompok_olahraga_terdaftar_puskesmas'] ?? 0 }}</td>
      </tr>
      <tr>
        <td class="column5  textCenter"></td>
        <td class="column80 ">b. Jumlah kelompok olahraga yang dibina puskesmas</td>
        <td class="column15 ">{{ $dataPuskesmas->kesehatan[0]['jumlah_kelompok_olahraga_dibina_puskesmas'] ?? 0 }}</td>
      </tr>
      <tr>
        <td class="column5  textCenter"></td>
        <td class="column80 ">c. Jumlah kelompok olahraga yang diperiksa kesehatan anggotanya</td>
        <td class="column15 ">{{ $dataPuskesmas->kesehatan[0]['jumlah_kelompok_olahraga_anggota_diperiksa'] ?? 0 }}</td>
      </tr>
      <tr>
        <td class="column5  textCenter"></td>
        <td class="column80 ">d. Jumlah kelompok olahraga yang dilakukan penyuluhan</td>
        <td class="column15 ">{{ $dataPuskesmas->kesehatan[0]['jumlah_kelompok_olahraga_penyuluhan'] ?? 0 }}</td>
      </tr>
      <tr>
        <td class="column5  textCenter"></td>
        <td class="column80 ">e. Jumlah orang yang mendapatkan konsultasi kesehatan olahraga</td>
        <td class="column15 ">{{ $dataPuskesmas->kesehatan[0]['jumlah_orang_konsultasi_kesehatan'] ?? 0 }}</td>
      </tr>
      <tr>
        <td class="column5  textCenter"></td>
        <td class="column80 ">f. Jumlah orang yang diukur tingkat kebugaran jasmani</td>
        <td class="column15 ">{{ $dataPuskesmas->kesehatan[0]['jumlah_orang_diukur_kebugaran'] ?? 0 }}</td>
      </tr>
      <tr>
        <td class="column5  textCenter"></td>
        <td class="column80 ">g. Jumlah orang yang mendapatkan penanganan cedera olahraga akut</td>
        <td class="column15 ">{{ $dataPuskesmas->kesehatan[0]['jumlah_orang_dapat_penanganan_cidera_akut'] ?? 0 }}</td>
      </tr>
      <tr>
        <td class="column5  textCenter"></td>
        <td class="column80 ">h. Jumlah atlet yang dilayani kesehatan pada even olahraga</td>
        <td class="column15 ">{{ $dataPuskesmas->kesehatan[0]['jumlah_atlet_dilayani_kesehatan'] ?? 0 }}</td>
      </tr>
      <tr>
        <td class="column5  textCenter">3.</td>
        <td class="column80 ">Jumlah POS UKK yang dibina puskesmas bulan ini</td>
        <td class="column15 ">{{ $dataPuskesmas->kesehatan[0]['jumlah_pos_ukk'] ?? 0 }}</td>
      </tr>
    </tbody>
  </table>
  <table style="margin-top: 20px; ">
    <thead>
      <tr>
        <td class="column100 columGrey" colspan="3">Program Pelayanan Kesehatan Tradisonal dan Komplementer</td>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td class="column5  textCenter">1.</td>
        <td class="column80 ">Jumlah kunjungan kasus dengan pelayanan akupresur di puskesmas </td>
        <td class="column15 ">{{ $dataPuskesmas->kesehatan[0]['jumlah_kunjungan_kasus_pelayanan_akupresur'] ?? 0 }}</td>
      </tr>
    </tbody>
  </table>
</body>

</html>