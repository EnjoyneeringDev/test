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
      font-size: 16px;
      font-weight: 400;
      font-family: Arial, Helvetica, sans-serif;
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
    <p style="text-align: center;">Formulir 8</p>
    <p style="text-align: center;">LAPORAN BULANAN KEPERAWATAN KESEHATAN MASYARAKAT</p>
  </div>

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
        <td class="column5 textCenter">No</td>
        <td class="column80 textCenter" colspan="2">KEGIATAN</td>
        <td class="column15 textCenter">JUMLAH</td>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td class="column5 textCenter" rowspan="3" style="vertical-align: top;">1.</td>
        <td class="column80" colspan="2">SASARAN INDIVIDU</td>
        <td class="column15"></td>
      </tr>
      <tr>
        <td class="column5 textCenter">a.</td>
        <td class="column75">Jumlah individu yang mendapatkan asuhan keperawatan di puskesmas</td>
        <td class="column15">{{ $dataPuskesmas->data[0]['jumlah_individu_mendapatkan_asuhan_keperawatan'] }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">b.</td>
        <td class="column75">Jumlah individu dengan hasil asuhan keperawatan membutuhkan tindak lanjut perawatan</td>
        <td class="column15">{{ $dataPuskesmas->data[0]['jumlah_individu_asuhan_keperawatan_perlu_tindak_lanjut'] }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter" rowspan="7" style="vertical-align: top;">2.</td>
        <td class="column80" colspan="2">SASARAN KELUARGA </td>
        <td class="column15"></td>
      </tr>
      <tr>
        <td class="column5 textCenter">a.</td>
        <td class="column75">Jumlah keluarga binaan yang mendapatkan asuhan keperawatan</td>
        <td class="column15">{{ $dataPuskesmas->data[0]['jumlah_keluarga_binaan_dapat_asuhan_keperawatan'] }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">b.</td>
        <td class="column75">Jumlah keluarga binaan dengan hasil asuhan KM-I</td>
        <td class="column15">{{ $dataPuskesmas->data[0]['jumlah_keluarga_binaan_asuhan_km1'] }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">c.</td>
        <td class="column75">Jumlah keluarga binaan dengan hasil asuhan KM-II</td>
        <td class="column15">{{ $dataPuskesmas->data[0]['jumlah_keluarga_binaan_asuhan_km2'] }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">d.</td>
        <td class="column75">Jumlah keluarga binaan dengan hasil asuhan KM-III</td>
        <td class="column15">{{ $dataPuskesmas->data[0]['jumlah_keluarga_binaan_asuhan_km3'] }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">e.</td>
        <td class="column75">Jumlah keluarga binaan dengan hasil asuhan KM-IV</td>
        <td class="column15">{{ $dataPuskesmas->data[0]['jumlah_keluarga_binaan_asuhan_km4'] }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">f.</td>
        <td class="column75">Jumlah keluarga binaan dengan hasil asuhan lepas bina</td>
        <td class="column15">{{ $dataPuskesmas->data[0]['jumlah_keluarga_binaan_asuhan_lepas_bina'] }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter" rowspan="6" style="vertical-align: top;">3.</td>
        <td class="column80" colspan="2">SASARAN KELOMPOK</td>
        <td class="column15"></td>
      </tr>
      <tr>
        <td class="column5 textCenter">a.</td>
        <td class="column75">Jumlah kelompok binaan yang mendapatkan asuhan keperawatan</td>
        <td class="column15">{{ $dataPuskesmas->data[0]['jumlah_kelompok_binaan_dapat_asuhan_keperawatan'] }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">b.</td>
        <td class="column75">Jumlah kelompok binaan dengan hasil asuhan KM-I </td>
        <td class="column15">{{ $dataPuskesmas->data[0]['jumlah_kelompok_binaan_asuhan_km1'] }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">c.</td>
        <td class="column75">Jumlah kelompok binaan dengan hasil asuhan KM-II</td>
        <td class="column15">{{ $dataPuskesmas->data[0]['jumlah_kelompok_binaan_asuhan_km2'] }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">d.</td>
        <td class="column75">Jumlah kelompok binaan dengan hasil asuhan KM-III</td>
        <td class="column15">{{ $dataPuskesmas->data[0]['jumlah_kelompok_binaan_asuhan_km3'] }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">e.</td>
        <td class="column75">Jumlah kelompok binaan dengan hasil asuhan KM-IV</td>
        <td class="column15">{{ $dataPuskesmas->data[0]['jumlah_kelompok_binaan_asuhan_km4'] }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter" rowspan="3" style="vertical-align: top;">4.</td>
        <td class="column80" colspan="2">SASARAN DESA/KELURAHAN BINAAN </td>
        <td class="column15"></td>
      </tr>
      <tr>
        <td class="column5 textCenter">a.</td>
        <td class="column75">Jumlah desa/kelurahan binaan yang mendapatkan asuhan keperawatan</td>
        <td class="column15">{{ $dataPuskesmas->data[0]['jumlah_desa_kelurahan_binaan_dapat_asuhan_keperawatan'] }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">b.</td>
        <td class="column75">Jumlah desa/kelurahan binaan yang sudah <i>total coverage</i> dalam melaksanakan kegiatan PIS/PK</td>
        <td class="column15">{{ $dataPuskesmas->data[0]['jumlah_desa_kelurahan_binaan_pis_pk'] }}</td>
      </tr>
    </tbody>
  </table>
</body>

</html>