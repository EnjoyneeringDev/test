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

  <div style="margin-top: 50px; ">
    <div style="width: 400px; display: inline-block; vertical-align: middle; ">
      <span style="display: inline-block; vertical-align: middle; margin: 0 60px 0 15px; ">Kode</span>
      <span style="width: 20px; height: 30px; display: inline-block; vertical-align: middle; border: 1px solid black; margin: 0 -3px !important; padding: 8px 0 0 8px; ">1</span>
      <span style="width: 20px; height: 30px; display: inline-block; vertical-align: middle; border: 1px solid black; margin: 0 -3px !important; padding: 8px 0 0 8px; ">2</span>
      <span style="width: 20px; height: 30px; display: inline-block; vertical-align: middle; border: 1px solid black; margin: 0 -3px !important; padding: 8px 0 0 8px; ">3</span>
      <span style="width: 20px; height: 30px; display: inline-block; vertical-align: middle; border: 1px solid black; margin: 0 -3px !important; padding: 8px 0 0 8px; ">4</span>
      <span style="width: 20px; height: 30px; display: inline-block; vertical-align: middle; border: 1px solid black; margin: 0 -3px !important; padding: 8px 0 0 8px; ">5</span>
      <span style="width: 20px; height: 30px; display: inline-block; vertical-align: middle; border: 1px solid black; margin: 0 -3px !important; padding: 8px 0 0 8px; ">6</span>
      <span style="width: 20px; height: 30px; display: inline-block; vertical-align: middle; border: 1px solid black; margin: 0 -3px !important; padding: 8px 0 0 8px; ">7</span>
    </div>
    <div style="width: 200px; margin-left: 80px; display: inline-block; vertical-align: middle; ">
        <div>
            <span  style="display: inline-block; vertical-align: middle; width: 50px; ">Bulan</span>
            <span  style="width: 100px; height: 30px; display: inline-block; vertical-align: middle; border: 1px solid black; margin-left: 20px; padding: 8px 0 0 8px; ">November</span>
        </div>
    </div>
  </div>

  <div style="margin-top: 20px; " >
    <div style="width: 400px; display: inline-block; vertical-align: middle; ">
      <span style="display: inline-block; vertical-align: middle; margin: 0 15px 0 15px; ">Puskesmas</span>
      <span style="width: 270px; height: 30px; display: inline-block; vertical-align: middle; border: 1px solid black; margin: 0 -3px !important; padding: 8px 0 0 8px; ">Puskesmas Pucang Sewu</span>
    </div>
    <div style="width: 200px; margin-left: 80px; display: inline-block; vertical-align: middle; ">
        <div>
            <span  style="display: inline-block; vertical-align: middle; width: 50px; ">Tahun</span>
            <span  style="width: 100px; height: 30px; display: inline-block; vertical-align: middle; border: 1px solid black; margin-left: 20px; padding: 8px 0 0 8px; ">2024</span>
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
        <td class="column15 ">{{ $dataPuskesmas->kesehatan[0]['kelompok_kerja_dibina'] }}</td>
      </tr>
      <tr>
        <td class="column5  textCenter"></td>
        <td class="column80 ">b. Jumlah tempat kerja yang teridentifikasi potensi bahaya</td>
        <td class="column15 ">{{ $dataPuskesmas->kesehatan[0]['tempat_kerja_potensi_bahaya'] }}</td>
      </tr>
      <tr>
        <td class="column5  textCenter"></td>
        <td class="column80 ">c. Jumlah tempat kerja yang dibina</td>
        <td class="column15 ">{{ $dataPuskesmas->kesehatan[0]['tempat_kerja_dibina'] }}</td>
      </tr>
      <tr>
        <td class="column5  textCenter"></td>
        <td class="column80 ">d. Jumlah kasus penyakit pada pekerja.</td>
        <td class="column15 "></td>
      </tr>
      @foreach ($dataPuskesmas->kesehatanKerja as $index => $data)
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
        <td class="column15 ">{{ $dataPuskesmas->kesehatan[0]['jenis_pelayanan_promotif'] }}</td>
      </tr>
      <tr>
        <td class="column5  textCenter"></td>
        <td class="column80 ">&nbsp;&nbsp;2) Preventif</td>
        <td class="column15 ">{{ $dataPuskesmas->kesehatan[0]['jenis_pelayanan_preventif'] }}</td>
      </tr>
      <tr>
        <td class="column5  textCenter"></td>
        <td class="column80 ">&nbsp;&nbsp;3) Kuratif</td>
        <td class="column15 ">{{ $dataPuskesmas->kesehatan[0]['jenis_pelayanan_kuratif'] }}</td>
      </tr>
      <tr>
        <td class="column5  textCenter"></td>
        <td class="column80 ">&nbsp;&nbsp;4) Rehabilitati</td>
        <td class="column15 ">{{ $dataPuskesmas->kesehatan[0]['jenis_pelayanan_rehabilitatif'] }}</td>
      </tr>
      <tr>
        <td class="column5  textCenter"></td>
        <td class="column80 ">f. Penerapan kewaspadaan standar di lingkungan puskesmas</td>
        <td class="column15 ">{{ $dataPuskesmas->kesehatan[0]['kewaspadaan_standar_lingkungan'] }}</td>
      </tr>
      <tr>
        <td class="column5  textCenter">2.</td>
        <td class="column80 ">Kesehatan Olahraga</td>
        <td class="column15 "></td>
      </tr>
      <tr>
        <td class="column5  textCenter"></td>
        <td class="column80 ">a. Jumlah kelompok olahraga terdaftar di puskesmas pada bulan ini</td>
        <td class="column15 ">{{ $dataPuskesmas->kesehatan[0]['kelompok_olahraga_terdaftar'] }}</td>
      </tr>
      <tr>
        <td class="column5  textCenter"></td>
        <td class="column80 ">b. Jumlah kelompok olahraga yang dibina puskesmas</td>
        <td class="column15 ">{{ $dataPuskesmas->kesehatan[0]['kelompok_olahraga_dibina'] }}</td>
      </tr>
      <tr>
        <td class="column5  textCenter"></td>
        <td class="column80 ">c. Jumlah kelompok olahraga yang diperiksa kesehatan anggotanya</td>
        <td class="column15 ">{{ $dataPuskesmas->kesehatan[0]['kelompok_olahraga_diperiksa_anggotanya'] }}</td>
      </tr>
      <tr>
        <td class="column5  textCenter"></td>
        <td class="column80 ">d. Jumlah kelompok olahraga yang dilakukan penyuluhan</td>
        <td class="column15 ">{{ $dataPuskesmas->kesehatan[0]['kelompok_olahraga_dilakukan_penyuluhan'] }}</td>
      </tr>
      <tr>
        <td class="column5  textCenter"></td>
        <td class="column80 ">e. Jumlah orang yang mendapatkan konsultasi kesehatan olahraga</td>
        <td class="column15 ">{{ $dataPuskesmas->kesehatan[0]['orang_diukur_tingkat_kebugaran'] }}</td>
      </tr>
      <tr>
        <td class="column5  textCenter"></td>
        <td class="column80 ">f. Jumlah orang yang diukur tingkat kebugaran jasmani</td>
        <td class="column15 ">{{ $dataPuskesmas->kesehatan[0]['orang_dapat_penanganan_cedera'] }}</td>
      </tr>
      <tr>
        <td class="column5  textCenter"></td>
        <td class="column80 ">g. Jumlah orang yang mendapatkan penanganan cedera olahraga akut</td>
        <td class="column15 ">{{ $dataPuskesmas->kesehatan[0]['atlet_dilayani_kesehatan_saat_event'] }}</td>
      </tr>
      <tr>
        <td class="column5  textCenter"></td>
        <td class="column80 ">h. Jumlah atlet yang dilayani kesehatan pada even olahraga</td>
        <td class="column15 ">{{ $dataPuskesmas->kesehatan[0]['kunjungan_dengan_pelayanan_akupresur'] }}</td>
      </tr>
      <tr>
        <td class="column5  textCenter">3.</td>
        <td class="column80 ">Jumlah POS UKK yang dibina puskesmas bulan ini</td>
        <td class="column15 ">{{ $dataPuskesmas->kesehatan[0]['jumlah_pos_ukk_dibina'] }}</td>
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
        <td class="column15 ">{{ $dataPuskesmas->kesehatan[0]['kunjungan_kasus_akupresur'] }}</td>
      </tr>
    </tbody>
  </table>
</body>

</html>