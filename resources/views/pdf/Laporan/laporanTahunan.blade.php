<!DOCTYPE html>
<html>

<head>
  <title>LAPORAN TAHUNAN PROGRAM</title>
  <style>
    @page {
      size: A4 landscape;
      padding: 0;
    }

    body {
      font-family: Arial, sans-serif;
      padding: 50px 0 50px;
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

    .column100 {
      width: 100%;
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
    <p style="text-align: center;">Formulir 19</p>
    <p style="text-align: center;">LAPORAN TAHUNAN PROGRAM</p>
  </div>

  <div style="margin-top: 50px; "></div>
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
  </div>

  <div style="margin-top: 20px; " >
    <div style="width: 400px; display: inline-block; vertical-align: middle; ">
      <span style="display: inline-block; vertical-align: middle; margin: 0 15px 0 15px; ">Puskesmas</span>
      <span style="width: 270px; height: 30px; display: inline-block; vertical-align: middle; border: 1px solid black; margin: 0 -3px !important; padding: 8px 0 0 8px; ">Puskesmas Pucang Sewu</span>
    </div>
    <div style="width: 250px; margin-left: 300px; display: inline-block; vertical-align: middle; ">
        <div>
            <span  style="display: inline-block; vertical-align: middle; width: 50px; text-align: right; ">Tahun</span>
            <span  style="width: 150px; height: 30px; display: inline-block; vertical-align: middle; border: 1px solid black; margin-left: 20px; padding: 8px 0 0 8px; ">2024</span>
        </div>
    </div>
  </div>

  <table style="margin-top: 20px; ">
    <thead>
      <tr>
        <td class="column100 " colspan="6" >1. PROMOSI KESEHATAN</td>
      </tr>
      <tr>
        <td class="column100 " colspan="6" >a. Desa yang Memanfaatkan Dana Desa untuk UKBM</td>
      </tr>
      </tr>
      <tr>
        <td class="column5 textCenter">No.</td>
        <td class="column25 textCenter">Nama desa</td>
        <td class="column20 textCenter">Total Dana Desa</td>
        <td class="column20 textCenter">Kegiatan untuk mendukung Kesehatan</td>
        <td class="column20 textCenter">Jumlah Anggaran Kegiatan untuk Mendukung Kesehatan</td>
        <td class="column10 textCenter">Persentase</td>
      </tr>
      <tr>
        <td class="column5 textCenter columGrey">1</td>
        <td class="column25 textCenter columGrey">2</td>
        <td class="column20 textCenter columGrey">3</td>
        <td class="column20 textCenter columGrey">4</td>
        <td class="column20 textCenter columGrey">5</td>
        <td class="column10 textCenter columGrey">6=5/3*100%</td>
      </tr>
    </thead>
    <tbody>
      @foreach ($dataPuskesmas->promosiKesehatan as $index => $data)
        <tr>
          <td class="column5 textCenter">{{ $index + 1 }}</td>
          <td class="column25">{{ $data['namaDesa'] }}</td>
          <td class="column20">{{ $data['totalDana'] }}</td>
          <td class="column20">{{ $data['kegiatan'] }}</td>
          <td class="column20">{{ $data['anggaran'] }}</td>
          <td class="column10">{{ $data['anggaran']/$data['totalDana']*100% }}</td>
        </tr>
        @endforeach
    </tbody>
  </table>

  <div style="page-break-before: always;"></div>

  @php
    $totalUkbm = [
        'pratama' => 0,
        'madya' => 0,
        'purnama' => 0,
        'mandiri' => 0,
        'poskesdes' => 0,
        'posbindu' => 0,
        'posyandu' => 0,
        'tb' => 0,
        'posmaldes' => 0,
        'poskestren' => 0,
        'ukk' => 0,
        'ukbm' => 0,
        'kader' => 0,
        'kaderDilatih' => 0
    ];
  @endphp

  <table >
    <thead>
      <tr>
        <td class="column100 " colspan="16" >b. UKBM Di Wilayah Kerja Puskesmas</td>
      </tr>
      </tr>
      <tr>
        <td class="column5 textCenter">No.</td>
        <td class="column25 textCenter">Nama desa</td>
        <td class="column20 textCenter">Total Dana Desa</td>
        <td class="column20 textCenter">Kegiatan untuk mendukung Kesehatan</td>
        <td class="column20 textCenter">Jumlah Anggaran Kegiatan untuk Mendukung Kesehatan</td>
        <td class="column10 textCenter">Persentase</td>
      </tr>
      <tr>
        <td class="column5 textCenter" rowspan="2">No.</td>
        <td class="column25 textCenter" rowspan="2">Desa/ Kelurahan</td>
        <td class="column20 textCenter" colspan="4">Posyandu</td>
        <td class="column5" rowspan="2">
          <span span style="display: inline-block; transform: rotate(-90deg); transform-origin: center; white-space: nowrap; margin: 0; width: 10px; ">
            Poskesdes 
          </span>
        </td>
        <td class="column5" rowspan="2">
          <span span style="display: inline-block; transform: rotate(-90deg); transform-origin: center; white-space: nowrap; margin: 0; width: 10px; ">
            Posbindu PTM 
          </span>
        </td>
        <td class="column5" rowspan="2">
          <span span style="display: inline-block; transform: rotate(-90deg); transform-origin: center; white-space: nowrap; margin: 0; width: 10px; ">
            Posyandu Lansia 
          </span>
        </td>
        <td class="column5" rowspan="2">
          <span span style="display: inline-block; transform: rotate(-90deg); transform-origin: center; white-space: nowrap; margin: 0; width: 10px; ">
            Pos TB Desa 
          </span>
        </td>
        <td class="column5" rowspan="2">
          <span span style="display: inline-block; transform: rotate(-90deg); transform-origin: center; white-space: nowrap; margin: 0; width: 10px; ">
            Posmaldes 
          </span>
        </td>
        <td class="column5" rowspan="2">
          <span span style="display: inline-block; transform: rotate(-90deg); transform-origin: center; white-space: nowrap; margin: 0; width: 10px; ">
            Poskestren 
          </span>
        </td>
        <td class="column5" rowspan="2">
          <span span style="display: inline-block; transform: rotate(-90deg); transform-origin: center; white-space: nowrap; margin: 0; width: 10px; ">
            Pos UKK 
          </span>
        </td>
        <td class="column5" rowspan="2">
          <span span style="display: inline-block; transform: rotate(-90deg); transform-origin: center; white-space: nowrap; margin: 0; width: 10px; ">
            UKBM Lainnya 
          </span>
        </td>
        <td class="column5" rowspan="2">
          <span span style="display: inline-block; transform: rotate(-90deg); transform-origin: center; white-space: nowrap; margin: 0; width: 10px; ">
            Jumlah Kader 
          </span>
        </td>
        <td class="column5" rowspan="2">
          <span span style="display: inline-block; transform: rotate(-90deg); transform-origin: center; white-space: nowrap; margin: 0; width: 10px; ">
            Jumlah Kader yang Dilatih
          </span>
        </td>
      </tr>
      <tr>
        <td class="column5 textCenter columGrey">1</td>
        <td class="column25 textCenter columGrey">2</td>
        <td class="column5 textCenter columGrey">3</td>
        <td class="column5 textCenter columGrey">4</td>
        <td class="column5 textCenter columGrey">5</td>
        <td class="column5 textCenter columGrey">6</td>
        <td class="column5 textCenter columGrey">7</td>
        <td class="column5 textCenter columGrey">8</td>
        <td class="column5 textCenter columGrey">9</td>
        <td class="column5 textCenter columGrey">10</td>
        <td class="column5 textCenter columGrey">11</td>
        <td class="column5 textCenter columGrey">12</td>
        <td class="column5 textCenter columGrey">13</td>
        <td class="column5 textCenter columGrey">14</td>
        <td class="column5 textCenter columGrey">15</td>
        <td class="column5 textCenter columGrey">16</td>
      </tr>
    </thead>
    <tbody>
      @foreach ($dataPuskesmas->ukbm as $index => $data)
        <tr>
          <td class="column5 textCenter">{{ $index + 1 }}</td>
          <td class="column25">{{ $data['namaDesa'] }}</td>
          <td class="column5">{{ $data['pratama'] }}</td>
          <td class="column5">{{ $data['madya'] }}</td>
          <td class="column5">{{ $data['purnama'] }}</td>
          <td class="column5">{{ $data['mandiri'] }}</td>
          <td class="column5">{{ $data['poskesdes'] }}</td>
          <td class="column5">{{ $data['posbindu'] }}</td>
          <td class="column5">{{ $data['posyandu'] }}</td>
          <td class="column5">{{ $data['tb'] }}</td>
          <td class="column5">{{ $data['posmaldes'] }}</td>
          <td class="column5">{{ $data['poskestren'] }}</td>
          <td class="column5">{{ $data['ukk'] }}</td>
          <td class="column5">{{ $data['ukbm'] }}</td>
          <td class="column5">{{ $data['kader'] }}</td>
          <td class="column5">{{ $data['kaderDilatih'] }}</td>
        </tr>
        @php
          $totalUkbm['pratama'] += $data['pratama'];
          $totalUkbm['madya'] += $data['madya'];
          $totalUkbm['purnama'] += $data['purnama'];
          $totalUkbm['mandiri'] += $data['mandiri'];
          $totalUkbm['poskesdes'] += $data['poskesdes'];
          $totalUkbm['posbindu'] += $data['posbindu'];
          $totalUkbm['posyandu'] += $data['posyandu'];
          $totalUkbm['tb'] += $data['tb'];
          $totalUkbm['posmaldes'] += $data['posmaldes'];
          $totalUkbm['poskestren'] += $data['poskestren'];
          $totalUkbm['ukk'] += $data['ukk'];
          $totalUkbm['ukbm'] += $data['ukbm'];
          $totalUkbm['kader'] += $data['kader'];
          $totalUkbm['kaderDilatih'] += $data['kaderDilatih'];
        @endphp
      @endforeach
      <tr>
        <td class="column5 textCenter"></td>
        <td class="column25">Jumlah</td>
        <td class="column5">{{ $totalUkbm['pratama'] }}</td>
        <td class="column5">{{ $totalUkbm['madya'] }}</td>
        <td class="column5">{{ $totalUkbm['purnama'] }}</td>
        <td class="column5">{{ $totalUkbm['mandiri'] }}</td>
        <td class="column5">{{ $totalUkbm['poskesdes'] }}</td>
        <td class="column5">{{ $totalUkbm['posbindu'] }}</td>
        <td class="column5">{{ $totalUkbm['posyandu'] }}</td>
        <td class="column5">{{ $totalUkbm['tb'] }}</td>
        <td class="column5">{{ $totalUkbm['posmaldes'] }}</td>
        <td class="column5">{{ $totalUkbm['poskestren'] }}</td>
        <td class="column5">{{ $totalUkbm['ukk'] }}</td>
        <td class="column5">{{ $totalUkbm['ukbm'] }}</td>
        <td class="column5">{{ $totalUkbm['kader'] }}</td>
        <td class="column5">{{ $totalUkbm['kaderDilatih'] }}</td>
      </tr>
    </tbody>
  </table>

  <div style="page-break-before: always;"></div>

  <table>
    <thead>
      <tr>
        <td class="column100 " colspan="7" >c. Kemitraan Bidang Kesehatan</td>
      </tr>
      </tr>
      <tr>
        <td class="column5 textCenter">No.</td>
        <td class="column20 textCenter">Nama Mitra</td>
        <td class="column20 textCenter">Alamat Mitra</td>
        <td class="column20 textCenter">Bentuk Kemitraan</td>
        <td class="column15 textCenter">Ruang Lingkup</td>
        <td class="column20 textCenter">Lokasi Kemitraan</td>
      </tr>
      <tr>
        <td class="column5 textCenter columGrey">1</td>
        <td class="column20 textCenter columGrey">2</td>
        <td class="column20 textCenter columGrey">3</td>
        <td class="column20 textCenter columGrey">4</td>
        <td class="column15 textCenter columGrey">5</td>
        <td class="column20 textCenter columGrey">6</td>
      </tr>
    </thead>
    <tbody>
      @foreach ($dataPuskesmas->kemitraan as $index => $data)
        <tr>
          <td class="column5 textCenter">{{ $index + 1 }}</td>
          <td class="column20">{{ $data['namaMitra'] }}</td>
          <td class="column20">{{ $data['alamat'] }}</td>
          <td class="column20">{{ $data['namaDesa'] }}</td>
          <td class="column20">{{ $data['bentukKemitraan'] }}</td>
          <td class="column15">{{ $data['ruangLingkung'] }}</td>
          <td class="column20">{{ $data['lokasiKemitraan'] }}</td>
        </tr>
        @endforeach
    </tbody>
  </table>

  <table style="margin-top: 20px;">
    <tbody>
      <tr>
        <td class="column75">d. Jumlah SD/sederajat yang memiliki UKS</td>
        <td class="column15">{{ $dataPuskesmas->sdMemilikiUks }}</td>
        <td class="column10">Sekolah</td>
      </tr>
      <tr>
        <td class="column75">e. Jumlah SLTP/sederajat yang memiliki UKS</td>
        <td class="column15">{{ $dataPuskesmas->sltpMemilikiUks }}</td>
        <td class="column10">Sekolah</td>
      </tr>
    </tbody>
  </table>

  <div style="page-break-before: always;"></div>

  <table>
    <thead>
      <tr>
        <td class="column100 " colspan="6" >2. PENGENDALIAN FILARIASIS</td>
      </tr>
      <tr>
        <td class="column100 " colspan="6" >a. Jumlah Penderita Kronis Filariasis</td>
      </tr>
      </tr>
      <tr>
        <td class="column5 textCenter" rowspan="2">No.</td>
        <td class="column55 textCenter" rowspan="2">Desa/ Kelurahan</td>
        <td class="column40 textCenter" colspan="4">Umur</td>
      </tr>
      <tr>
        <td class="column10 textCenter"><5 th</td>
        <td class="column10 textCenter">5-14 th</td>
        <td class="column10 textCenter">>14 th</td>
        <td class="column10 textCenter">Total</td>
      </tr>
      <tr>
        <td class="column5 textCenter columGrey">1</td>
        <td class="column55 textCenter columGrey">2</td>
        <td class="column10 textCenter columGrey">3</td>
        <td class="column10 textCenter columGrey">4</td>
        <td class="column10 textCenter columGrey">5</td>
        <td class="column10 textCenter columGrey">6</td>
      </tr>
    </thead>
    <tbody>
      @foreach ($dataPuskesmas->filiriasis as $index => $data)
        <tr>
          <td class="column5 textCenter">{{ $index + 1 }}</td>
          <td class="column55">{{ $data['namaDesa'] }}</td>
          <td class="column10">{{ $data['5th'] }}</td>
          <td class="column10">{{ $data['14th'] }}</td>
          <td class="column10">{{ $data['lebih14th'] }}</td>
          <td class="column10">{{ $data['5th'] + $data['14th'] + $data['lebih14th'] }}</td>
        </tr>
        @endforeach
    </tbody>
  </table>

  <div style="page-break-before: always;"></div>

  <table>
    <thead>
      <tr>
        <td class="column100 " colspan="14" >b. Cakupan POMP Filariasis</td>
      </tr>
      </tr>
      <tr>
        <td class="column5 textCenter" rowspan="2">No.</td>
        <td class="column25 textCenter" rowspan="2">Desa/ Kelurahan</td>
        <td class="column20 textCenter" colspan="4">Sasaran</td>
        <td class="column20 textCenter" colspan="4">Mendapat Obat</td>
        <td class="column20 textCenter" colspan="4">Cakupan</td>
      </tr>
      <tr>
        <td class="column5 textCenter">2-4</td>
        <td class="column5 textCenter">2-4</td>
        <td class="column5 textCenter">>14</td>
        <td class="column5 textCenter">Total</td>
        <td class="column5 textCenter">2-4</td>
        <td class="column5 textCenter">2-4</td>
        <td class="column5 textCenter">>14</td>
        <td class="column5 textCenter">Total</td>
        <td class="column5 textCenter">2-4</td>
        <td class="column5 textCenter">2-4</td>
        <td class="column5 textCenter">>14</td>
        <td class="column5 textCenter">Total</td>
      </tr>
      <tr>
        <td class="column5 textCenter columGrey">1</td>
        <td class="column25 textCenter columGrey">2</td>
        <td class="column5 textCenter columGrey">3</td>
        <td class="column5 textCenter columGrey">4</td>
        <td class="column5 textCenter columGrey">5</td>
        <td class="column5 textCenter columGrey">6</td>
        <td class="column5 textCenter columGrey">7</td>
        <td class="column5 textCenter columGrey">8</td>
        <td class="column5 textCenter columGrey">9</td>
        <td class="column5 textCenter columGrey">10</td>
        <td class="column5 textCenter columGrey">11</td>
        <td class="column5 textCenter columGrey">12</td>
        <td class="column5 textCenter columGrey">13</td>
        <td class="column5 textCenter columGrey">14</td>
      </tr>
    </thead>
    <tbody>
      @foreach ($dataPuskesmas->filiriasis as $index => $data)
        <tr>
          <td class="column5 textCenter">{{ $index + 1 }}</td>
          <td class="column55">{{ $data['namaDesa'] }}</td>
          <td class="column5">{{ $data['sasaran2'] }}</td>
          <td class="column5">{{ $data['sasaran5'] }}</td>
          <td class="column5">{{ $data['sasaran14'] }}</td>
          <td class="column5">{{ $data['sasaran2'] + $data['sasaran5'] + $data['sasaran14'] }}</td>
          <td class="column5">{{ $data['obat2'] }}</td>
          <td class="column5">{{ $data['obat5'] }}</td>
          <td class="column5">{{ $data['obat14'] }}</td>
          <td class="column5">{{ $data['obat2'] + $data['obat5'] + $data['obat14'] }}</td>
          <td class="column5">{{ $data['cakupan2'] }}</td>
          <td class="column5">{{ $data['cakupan5'] }}</td>
          <td class="column5">{{ $data['cakupan14'] }}</td>
          <td class="column5">{{ $data['cakupan2'] + $data['cakupan5'] + $data['cakupan14'] }}</td>
        </tr>
        @endforeach
    </tbody>
  </table>

  <div style="page-break-before: always;"></div>

  <table>
    <thead>
      <tr>
        <td class="column100 " colspan="15" >3. IMUNISASI</td>
      </tr>
      <tr>
        <td class="column100 " colspan="15" >a. Imunisasi DT dan Campak Anak Sekolah Kelas 1 SD (BIAS DT dan Campak/MR)</td>
      </tr>
      </tr>
      <tr>
        <td class="column5 textCenter" rowspan="3">No.</td>
        <td class="column20 textCenter" rowspan="3">Nama Sekolah</td>
        <td class="column15 textCenter" rowspan="3">Desa/ Kelurahan</td>
        <td class="column10 textCenter" rowspan="2" colspan="2">Sasaran</td>
        <td class="column25 textCenter" colspan="5">Imunisasi DT</td>
        <td class="column25 textCenter" colspan="5">Imunisasi Campak/MR</td>
      </tr>
      <tr>
        <td class="column5 textCenter">L</td>
        <td class="column5 textCenter">P</td>
        <td class="column10 textCenter" colspan="2">Hasil</td>
        <td class="column15 textCenter" colspan="3">% Cakupan</td>
        <td class="column10 textCenter" colspan="2">Hasil</td>
        <td class="column15 textCenter" colspan="3">% Cakupan</td>
      </tr>
      <tr>
        <td class="column5 textCenter">L</td>
        <td class="column5 textCenter">P</td>
        <td class="column5 textCenter">L</td>
        <td class="column5 textCenter">P</td>
        <td class="column5 textCenter">T</td>
        <td class="column5 textCenter">L</td>
        <td class="column5 textCenter">P</td>
        <td class="column5 textCenter">L</td>
        <td class="column5 textCenter">P</td>
        <td class="column5 textCenter">T</td>
      </tr>
      <tr>
        <td class="column5 textCenter columGrey">1</td>
        <td class="column20 textCenter columGrey">2</td>
        <td class="column15 textCenter columGrey">3</td>
        <td class="column5 textCenter columGrey">4</td>
        <td class="column5 textCenter columGrey">5</td>
        <td class="column5 textCenter columGrey">6</td>
        <td class="column5 textCenter columGrey">7</td>
        <td class="column5 textCenter columGrey">8</td>
        <td class="column5 textCenter columGrey">9</td>
        <td class="column5 textCenter columGrey">10</td>
        <td class="column5 textCenter columGrey">11</td>
        <td class="column5 textCenter columGrey">12</td>
        <td class="column5 textCenter columGrey">13</td>
        <td class="column5 textCenter columGrey">14</td>
        <td class="column5 textCenter columGrey">15</td>
      </tr>
    </thead>
    <tbody>
      @foreach ($dataPuskesmas->imunisasiSdKelas1 as $index => $data)
        <tr>
          <td class="column5 textCenter">{{ $index + 1 }}</td>
          <td class="column20">{{ $data['namaSekolah'] }}</td>
          <td class="column15">{{ $data['desa'] }}</td>
          <td class="column5">{{ $data['sasaranL'] }}</td>
          <td class="column5">{{ $data['sasaranP'] }}</td>
          <td class="column5">{{ $data['dtHasilL'] }}</td>
          <td class="column5">{{ $data['dtHasilP'] }}</td>
          <td class="column5">{{ $data['dtCakupanlL'] }}</td>
          <td class="column5">{{ $data['dtCakupanlP'] }}</td>
          <td class="column5">{{ $data['dtCakupanlL'] + $data['dtCakupanlP'] }}</td>
          <td class="column5">{{ $data['campakHasilL'] }}</td>
          <td class="column5">{{ $data['campakHasilP'] }}</td>
          <td class="column5">{{ $data['campakCakupanlL'] }}</td>
          <td class="column5">{{ $data['campakCakupanlP'] }}</td>
          <td class="column5">{{ $data['campakCakupanlL'] + $data['campakCakupanlP'] }}</td>
        </tr>
        @endforeach
    </tbody>
  </table>

  <div style="page-break-before: always;"></div>

  <table>
    <thead>
      <tr>
        <td class="column100 " colspan="10" >b. Imunisasi Td Anak Sekolah Dasar (sederajat) kelas 2 dan 5</td>
      </tr>
      </tr>
      <tr>
        <td class="column5 textCenter" rowspan="3">No.</td>
        <td class="column30 textCenter" rowspan="3">Nama Sekolah</td>
        <td class="column30 textCenter" rowspan="3">Desa/ Kelurahan</td>
        <td class="column10 textCenter" rowspan="2" colspan="2">Sasaran</td>
        <td class="column25 textCenter" colspan="5">Imunisasi DT</td>
      </tr>
      <tr>
        <td class="column5 textCenter">L</td>
        <td class="column5 textCenter">P</td>
        <td class="column10 textCenter" colspan="2">Hasil</td>
        <td class="column15 textCenter" colspan="3">% Cakupan</td>
      </tr>
      <tr>
        <td class="column5 textCenter">L</td>
        <td class="column5 textCenter">P</td>
        <td class="column5 textCenter">L</td>
        <td class="column5 textCenter">P</td>
        <td class="column5 textCenter">T</td>
      </tr>
      <tr>
        <td class="column5 textCenter columGrey">1</td>
        <td class="column30 textCenter columGrey">2</td>
        <td class="column30 textCenter columGrey">3</td>
        <td class="column5 textCenter columGrey">4</td>
        <td class="column5 textCenter columGrey">5</td>
        <td class="column5 textCenter columGrey">6</td>
        <td class="column5 textCenter columGrey">7</td>
        <td class="column5 textCenter columGrey">8</td>
        <td class="column5 textCenter columGrey">9</td>
        <td class="column5 textCenter columGrey">10</td>
      </tr>
    </thead>
    <tbody>
      @foreach ($dataPuskesmas->imunisasiSdKelas2 as $index => $data)
        <tr>
          <td class="column5 textCenter">{{ $index + 1 }}</td>
          <td class="column30">{{ $data['namaSekolah'] }}</td>
          <td class="column30">{{ $data['desa'] }}</td>
          <td class="column5">{{ $data['sasaranL'] }}</td>
          <td class="column5">{{ $data['sasaranP'] }}</td>
          <td class="column5">{{ $data['dtHasilL'] }}</td>
          <td class="column5">{{ $data['dtHasilP'] }}</td>
          <td class="column5">{{ $data['dtCakupanlL'] }}</td>
          <td class="column5">{{ $data['dtCakupanlP'] }}</td>
          <td class="column5">{{ $data['dtCakupanlL'] + $data['dtCakupanlP'] }}</td>
        </tr>
        @endforeach
    </tbody>
  </table>

  <div style="page-break-before: always;"></div>

  <table>
    <thead>
      <tr>
        <td class="column100 " colspan="5" >c. Jumlah Desa/Kelurahan UCI  (Imunisasi Dasar lengkap)</td>
      </tr>
      </tr>
      <tr>
        <td class="column5 textCenter">No.</td>
        <td class="column30 textCenter">Nama Desa/Kelurahan</td>
        <td class="column25 textCenter">Sasaran</td>
        <td class="column20 textCenter">Bayi Mendapat  IDL</td>
        <td class="column20 textCenter">% Cakupan IDL</td>
      </tr>
      <tr>
        <td class="column5 textCenter columGrey">1</td>
        <td class="column30 textCenter columGrey">2</td>
        <td class="column25 textCenter columGrey">3</td>
        <td class="column20 textCenter columGrey">4</td>
        <td class="column20 textCenter columGrey">5</td>
      </tr>
    </thead>
    <tbody>
      @foreach ($dataPuskesmas->imunisasiLengkap as $index => $data)
        <tr>
          <td class="column5 textCenter">{{ $index + 1 }}</td>
          <td class="column30">{{ $data['namaDesa'] }}</td>
          <td class="column25">{{ $data['sasaran'] }}</td>
          <td class="column20">{{ $data['idl'] }}</td>
          <td class="column20">{{ $data['cakupanIdl'] }}</td>
        </tr>
        @endforeach
    </tbody>
  </table>

  <div style="page-break-before: always;"></div>

  <table>
    <thead>
      <tr>
        <td class="column100 " colspan="5" >4.  Program Kesehatan Anak</td>
      </tr>
      </tr>
      <tr>
        <td class="column75 textCenter">Uraian</td>
        <td class="column25 textCenter" colspan="2">Data</td>
      </tr>
      <tr>
        <td class="column75 textCenter columGrey">1</td>
        <td class="column15 textCenter columGrey">2</td>
        <td class="column10 textCenter columGrey">3</td>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td class="column75">a. Jumlah Balita yang telah mendapatkan pelayanan stimulasi deteksi dan intervensi dini tumbuh kembang (SDIDTK) sebanyak  2 kali dalam tahun ini.</td>
        <td class="column15">{{ $dataPuskesmas->kesehatanAnak[0]['balita'] }}</td>
        <td class="column10">Balita</td>
      </tr>
      <tr>
        <td class="column75">b. Jumlah anak prasekolah yang dilakukan pemeriksaan indeks karies</td>
        <td class="column15">{{ $dataPuskesmas->kesehatanAnak[0]['anak'] }}</td>
        <td class="column10">Balita</td>
      </tr>
      <tr>
        <td class="column75">c.   Puskesmas mampu tata laksana kekerasan terhadap perempuan dan anak</td>
        <td class="column25" colspan="2">{{ $dataPuskesmas->kesehatanAnak[0]['perempuan'] }}</td>
      </tr>
    </tbody>
  </table>

  <table style="margin-top: 20px;">
    <thead>
      <tr>
        <td class="column100 " colspan="8" >5. Program Kesehatan Lingkungan</td>
      </tr>
      <tr>
        <td class="column100 " colspan="8" >a. Sarana Air Minum</td>
      </tr>
      <tr>
        <td class="column40 textCenter" rowspan="2">Sarana</td>
        <td class="column25 textCenter" colspan="6">Jumlah Sarana Menurut Tingkat Risiko Pencemaran</td>
      </tr>
      <tr>
        <td class="column10 textCenter">Belum IKL</td>
        <td class="column10 textCenter">Rendah</td>
        <td class="column10 textCenter">Sedang</td>
        <td class="column10 textCenter">Tinggi</td>
        <td class="column10 textCenter">Amat Tinggi</td>
        <td class="column10 textCenter">Sertifikat</td>
      </tr>
      <tr>
        <td class="column40 textCenter columGrey">1</td>
        <td class="column10 textCenter columGrey">2</td>
        <td class="column10 textCenter columGrey">3</td>
        <td class="column10 textCenter columGrey">4</td>
        <td class="column10 textCenter columGrey">5</td>
        <td class="column10 textCenter columGrey">6</td>
        <td class="column10 textCenter columGrey">7</td>
        <td class="column10 textCenter columGrey">8</td>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td class="column40">1) Perpipaan PAM</td>
        <td class="column10">{{ $dataPuskesmas->saranaAirMinum[0]['pamIkl'] }}</td>
        <td class="column10">{{ $dataPuskesmas->saranaAirMinum[0]['pamRendah'] }}</td>
        <td class="column10">{{ $dataPuskesmas->saranaAirMinum[0]['pamSedang'] }}</td>
        <td class="column10">{{ $dataPuskesmas->saranaAirMinum[0]['pamTinggi'] }}</td>
        <td class="column10">{{ $dataPuskesmas->saranaAirMinum[0]['pamAmatTinggi'] }}</td>
        <td class="column10">{{ $dataPuskesmas->saranaAirMinum[0]['pamSertifikat'] }}</td>
      </tr>
      <tr>
        <td class="column40">2) Perpipaan non PAM (sarana komunal)</td>
        <td class="column10">{{ $dataPuskesmas->saranaAirMinum[0]['nonPamIkl'] }}</td>
        <td class="column10">{{ $dataPuskesmas->saranaAirMinum[0]['nonPamRendah'] }}</td>
        <td class="column10">{{ $dataPuskesmas->saranaAirMinum[0]['nonPamSedang'] }}</td>
        <td class="column10">{{ $dataPuskesmas->saranaAirMinum[0]['nonPamTinggi'] }}</td>
        <td class="column10">{{ $dataPuskesmas->saranaAirMinum[0]['nonPamAmatTinggi'] }}</td>
        <td class="column10">{{ $dataPuskesmas->saranaAirMinum[0]['nonPamSertifikat'] }}</td>
      </tr>
      <tr>
        <td class="column40">3) Depot air minum</td>
        <td class="column10">{{ $dataPuskesmas->saranaAirMinum[0]['depotIkl'] }}</td>
        <td class="column10">{{ $dataPuskesmas->saranaAirMinum[0]['depotRendah'] }}</td>
        <td class="column10">{{ $dataPuskesmas->saranaAirMinum[0]['depotSedang'] }}</td>
        <td class="column10">{{ $dataPuskesmas->saranaAirMinum[0]['depotTinggi'] }}</td>
        <td class="column10">{{ $dataPuskesmas->saranaAirMinum[0]['depotAmatTinggi'] }}</td>
        <td class="column10">{{ $dataPuskesmas->saranaAirMinum[0]['depotSertifikat'] }}</td>
      </tr>
      <tr>
        <td class="column40">4) Sumur gali</td>
        <td class="column10">{{ $dataPuskesmas->saranaAirMinum[0]['sumurGaliIkl'] }}</td>
        <td class="column10">{{ $dataPuskesmas->saranaAirMinum[0]['sumurGaliRendah'] }}</td>
        <td class="column10">{{ $dataPuskesmas->saranaAirMinum[0]['sumurGaliSedang'] }}</td>
        <td class="column10">{{ $dataPuskesmas->saranaAirMinum[0]['sumurGaliTinggi'] }}</td>
        <td class="column10">{{ $dataPuskesmas->saranaAirMinum[0]['sumurGaliAmatTinggi'] }}</td>
        <td class="column10">{{ $dataPuskesmas->saranaAirMinum[0]['sumurGaliSertifikat'] }}</td>
      </tr>
      <tr>
        <td class="column40">5) Penampungan air hujan</td>
        <td class="column10">{{ $dataPuskesmas->saranaAirMinum[0]['airHujanIkl'] }}</td>
        <td class="column10">{{ $dataPuskesmas->saranaAirMinum[0]['airHujanRendah'] }}</td>
        <td class="column10">{{ $dataPuskesmas->saranaAirMinum[0]['airHujanSedang'] }}</td>
        <td class="column10">{{ $dataPuskesmas->saranaAirMinum[0]['airHujanTinggi'] }}</td>
        <td class="column10">{{ $dataPuskesmas->saranaAirMinum[0]['airHujanAmatTinggi'] }}</td>
        <td class="column10">{{ $dataPuskesmas->saranaAirMinum[0]['airHujanSertifikat'] }}</td>
      </tr>
      <tr>
        <td class="column40">6) Perlindungan mata air</td>
        <td class="column10">{{ $dataPuskesmas->saranaAirMinum[0]['mataAirIkl'] }}</td>
        <td class="column10">{{ $dataPuskesmas->saranaAirMinum[0]['mataAirRendah'] }}</td>
        <td class="column10">{{ $dataPuskesmas->saranaAirMinum[0]['mataAirSedang'] }}</td>
        <td class="column10">{{ $dataPuskesmas->saranaAirMinum[0]['mataAirTinggi'] }}</td>
        <td class="column10">{{ $dataPuskesmas->saranaAirMinum[0]['mataAirAmatTinggi'] }}</td>
        <td class="column10">{{ $dataPuskesmas->saranaAirMinum[0]['mataAirSertifikat'] }}</td>
      </tr>
      <tr>
        <td class="column40">7) Sumur bor dengan pompa</td>
        <td class="column10">{{ $dataPuskesmas->saranaAirMinum[0]['sumurBorIkl'] }}</td>
        <td class="column10">{{ $dataPuskesmas->saranaAirMinum[0]['sumurBorRendah'] }}</td>
        <td class="column10">{{ $dataPuskesmas->saranaAirMinum[0]['sumurBorSedang'] }}</td>
        <td class="column10">{{ $dataPuskesmas->saranaAirMinum[0]['sumurBorTinggi'] }}</td>
        <td class="column10">{{ $dataPuskesmas->saranaAirMinum[0]['sumurBorAmatTinggi'] }}</td>
        <td class="column10">{{ $dataPuskesmas->saranaAirMinum[0]['sumurBorSertifikat'] }}</td>
      </tr>
      <tr>
        <td class="column40">8) Terminal air</td>
        <td class="column10">{{ $dataPuskesmas->saranaAirMinum[0]['terminalIkl'] }}</td>
        <td class="column10">{{ $dataPuskesmas->saranaAirMinum[0]['terminalRendah'] }}</td>
        <td class="column10">{{ $dataPuskesmas->saranaAirMinum[0]['terminalSedang'] }}</td>
        <td class="column10">{{ $dataPuskesmas->saranaAirMinum[0]['terminalTinggi'] }}</td>
        <td class="column10">{{ $dataPuskesmas->saranaAirMinum[0]['terminalAmatTinggi'] }}</td>
        <td class="column10">{{ $dataPuskesmas->saranaAirMinum[0]['terminalSertifikat'] }}</td>
      </tr>
      <tr>
        <td class="column40">9) Mobil tangki</td>
        <td class="column10">{{ $dataPuskesmas->saranaAirMinum[0]['mobilIkl'] }}</td>
        <td class="column10">{{ $dataPuskesmas->saranaAirMinum[0]['mobilRendah'] }}</td>
        <td class="column10">{{ $dataPuskesmas->saranaAirMinum[0]['mobilSedang'] }}</td>
        <td class="column10">{{ $dataPuskesmas->saranaAirMinum[0]['mobilTinggi'] }}</td>
        <td class="column10">{{ $dataPuskesmas->saranaAirMinum[0]['mobilAmatTinggi'] }}</td>
        <td class="column10">{{ $dataPuskesmas->saranaAirMinum[0]['mobilSertifikat'] }}</td>
      </tr>
    </tbody>
  </table>
  <table>
    <thead>
      <tr>
        <td class="column40 textCenter" rowspan="2">Sarana</td>
        <td class="column60 textCenter" colspan="4">Jumlah Sarana Menurut Klasifikasi Standar Kesehatan</td>
      </tr>
      <tr>
        <td class="column15 textCenter">Belum IKL</td>
        <td class="column15 textCenter">Tidak Memenuhi Syarat</td>
        <td class="column15 textCenter">Memenuhi syarat</td>
        <td class="column15 textCenter">Sertifikat</td>
      </tr>
      <tr>
        <td class="column40 textCenter columGrey">1</td>
        <td class="column15 textCenter columGrey">2</td>
        <td class="column15 textCenter columGrey">3</td>
        <td class="column15 textCenter columGrey">4</td>
        <td class="column15 textCenter columGrey">5</td>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td class="column100" colspan="5">b. Rumah dan Jamban</td>
      </tr>
      <tr>
        <td class="column40">&nbsp;&nbsp; 1) Jumlah rumah</td>
        <td class="column15">{{ $dataPuskesmas->saranaStandarKesehatan[0]['rumahIkl'] }}</td>
        <td class="column15">{{ $dataPuskesmas->saranaStandarKesehatan[0]['rumahTidakMemenuhiSyarat'] }}</td>
        <td class="column15">{{ $dataPuskesmas->saranaStandarKesehatan[0]['rumahMemenuhiSyarat'] }}</td>
        <td class="column15">{{ $dataPuskesmas->saranaStandarKesehatan[0]['rumahSertifikat'] }}</td>
      </tr>
      <tr>
        <td class="column40">&nbsp;&nbsp; 2) Jumlah jamban</td>
        <td class="column15">{{ $dataPuskesmas->saranaStandarKesehatan[0]['jambanIkl'] }}</td>
        <td class="column15">{{ $dataPuskesmas->saranaStandarKesehatan[0]['jambanTidakMemenuhiSyarat'] }}</td>
        <td class="column15">{{ $dataPuskesmas->saranaStandarKesehatan[0]['jambanMemenuhiSyarat'] }}</td>
        <td class="column15">{{ $dataPuskesmas->saranaStandarKesehatan[0]['jambanSertifikat'] }}</td>
      </tr>
      <tr>
        <td class="column100" colspan="5">c. Jumlah Tempat Pengelolaan Makanan (TPM) siap saji terdaftar</td>
      </tr>
      <tr>
        <td class="column40">&nbsp;&nbsp; 1) Rumah makan/ restoran</td>
        <td class="column15">{{ $dataPuskesmas->saranaStandarKesehatan[0]['rumahMakanIkl'] }}</td>
        <td class="column15">{{ $dataPuskesmas->saranaStandarKesehatan[0]['rumahMakanTidakMemenuhiSyarat'] }}</td>
        <td class="column15">{{ $dataPuskesmas->saranaStandarKesehatan[0]['rumahMakanMemenuhiSyarat'] }}</td>
        <td class="column15">{{ $dataPuskesmas->saranaStandarKesehatan[0]['rumahMakanSertifikat'] }}</td>
      </tr>
      <tr>
        <td class="column40">&nbsp;&nbsp; 2) Jumlah restoran</td>
        <td class="column15">{{ $dataPuskesmas->saranaStandarKesehatan[0]['restoIkl'] }}</td>
        <td class="column15">{{ $dataPuskesmas->saranaStandarKesehatan[0]['restoTidakMemenuhiSyarat'] }}</td>
        <td class="column15">{{ $dataPuskesmas->saranaStandarKesehatan[0]['restoMemenuhiSyarat'] }}</td>
        <td class="column15">{{ $dataPuskesmas->saranaStandarKesehatan[0]['restoSertifikat'] }}</td>
      </tr>
      <tr>
        <td class="column40">&nbsp;&nbsp; 3) Jasaboga</td>
        <td class="column15">{{ $dataPuskesmas->saranaStandarKesehatan[0]['jasabogaIkl'] }}</td>
        <td class="column15">{{ $dataPuskesmas->saranaStandarKesehatan[0]['jasabogaTidakMemenuhiSyarat'] }}</td>
        <td class="column15">{{ $dataPuskesmas->saranaStandarKesehatan[0]['jasabogaMemenuhiSyarat'] }}</td>
        <td class="column15">{{ $dataPuskesmas->saranaStandarKesehatan[0]['jasabogaSertifikat'] }}</td>
      </tr>
      <tr>
        <td class="column40">&nbsp;&nbsp; 4) Depot air minum</td>
        <td class="column15">{{ $dataPuskesmas->saranaStandarKesehatan[0]['depotIkl'] }}</td>
        <td class="column15">{{ $dataPuskesmas->saranaStandarKesehatan[0]['depotTidakMemenuhiSyarat'] }}</td>
        <td class="column15">{{ $dataPuskesmas->saranaStandarKesehatan[0]['depotMemenuhiSyarat'] }}</td>
        <td class="column15">{{ $dataPuskesmas->saranaStandarKesehatan[0]['depotSertifikat'] }}</td>
      </tr>
      <tr>
        <td class="column40">&nbsp;&nbsp; 5) Sentra makanan jajanan</td>
        <td class="column15"></td>
        <td class="column15"></td>
        <td class="column15"></td>
        <td class="column15"></td>
      </tr>
      <tr>
        <td class="column40">&nbsp;&nbsp;&nbsp;&nbsp; a) Kantin sekolah</td>
        <td class="column15">{{ $dataPuskesmas->saranaStandarKesehatan[0]['kantinSekolahIkl'] }}</td>
        <td class="column15">{{ $dataPuskesmas->saranaStandarKesehatan[0]['kantinSekolahTidakMemenuhiSyarat'] }}</td>
        <td class="column15">{{ $dataPuskesmas->saranaStandarKesehatan[0]['kantinSekolahMemenuhiSyarat'] }}</td>
        <td class="column15">{{ $dataPuskesmas->saranaStandarKesehatan[0]['kantinSekolahSertifikat'] }}</td>
      </tr>
      <tr>
        <td class="column40">&nbsp;&nbsp;&nbsp;&nbsp; b) Jumlah kantin institusi</td>
        <td class="column15">{{ $dataPuskesmas->saranaStandarKesehatan[0]['kantinInstitusiIkl'] }}</td>
        <td class="column15">{{ $dataPuskesmas->saranaStandarKesehatan[0]['kantinInstitusiTidakMemenuhiSyarat'] }}</td>
        <td class="column15">{{ $dataPuskesmas->saranaStandarKesehatan[0]['kantinInstitusiMemenuhiSyarat'] }}</td>
        <td class="column15">{{ $dataPuskesmas->saranaStandarKesehatan[0]['kantinInstitusiSertifikat'] }}</td>
      </tr>
      <tr>
        <td class="column40">&nbsp;&nbsp;&nbsp;&nbsp; c) Jumlah pedagang kaki lima pangan siap saji (kuliner)</td>
        <td class="column15">{{ $dataPuskesmas->saranaStandarKesehatan[0]['pklIkl'] }}</td>
        <td class="column15">{{ $dataPuskesmas->saranaStandarKesehatan[0]['pklTidakMemenuhiSyarat'] }}</td>
        <td class="column15">{{ $dataPuskesmas->saranaStandarKesehatan[0]['pklMemenuhiSyarat'] }}</td>
        <td class="column15">{{ $dataPuskesmas->saranaStandarKesehatan[0]['pklSertifikat'] }}</td>
      </tr>
      <tr>
        <td class="column40">d. Jumlah Tempat Penampungan Sampah Sementara</td>
        <td class="column15">{{ $dataPuskesmas->saranaStandarKesehatan[0]['tpsIkl'] }}</td>
        <td class="column15">{{ $dataPuskesmas->saranaStandarKesehatan[0]['tpsTidakMemenuhiSyarat'] }}</td>
        <td class="column15">{{ $dataPuskesmas->saranaStandarKesehatan[0]['tpsMemenuhiSyarat'] }}</td>
        <td class="column15">{{ $dataPuskesmas->saranaStandarKesehatan[0]['tpsSertifikat'] }}</td>
      </tr>
      <tr>
        <td class="column100" colspan="5">e.  Jumlah TTU Terdaftar </td>
      </tr>
      <tr>
        <td class="column40">&nbsp;&nbsp; 1) Sarana pendidikan (sekolah, pesantren)</td>
        <td class="column15"></td>
        <td class="column15"></td>
        <td class="column15"></td>
        <td class="column15"></td>
      </tr>
      <tr>
        <td class="column40">&nbsp;&nbsp;&nbsp;&nbsp; a) Jumlah Sekolah</td>
        <td class="column15">{{ $dataPuskesmas->saranaStandarKesehatan[0]['sekolahIkl'] }}</td>
        <td class="column15">{{ $dataPuskesmas->saranaStandarKesehatan[0]['sekolahTidakMemenuhiSyarat'] }}</td>
        <td class="column15">{{ $dataPuskesmas->saranaStandarKesehatan[0]['sekolahMemenuhiSyarat'] }}</td>
        <td class="column15">{{ $dataPuskesmas->saranaStandarKesehatan[0]['sekolahSertifikat'] }}</td>
      </tr>
      <tr>
        <td class="column40">&nbsp;&nbsp;&nbsp;&nbsp; b) Jumlah Pondok Pesantren</td>
        <td class="column15">{{ $dataPuskesmas->saranaStandarKesehatan[0]['ponpesIkl'] }}</td>
        <td class="column15">{{ $dataPuskesmas->saranaStandarKesehatan[0]['ponpesTidakMemenuhiSyarat'] }}</td>
        <td class="column15">{{ $dataPuskesmas->saranaStandarKesehatan[0]['ponpesMemenuhiSyarat'] }}</td>
        <td class="column15">{{ $dataPuskesmas->saranaStandarKesehatan[0]['ponpesSertifikat'] }}</td>
      </tr>
      <tr>
        <td class="column40">&nbsp;&nbsp; 2) Pasar</td>
        <td class="column15"></td>
        <td class="column15"></td>
        <td class="column15"></td>
        <td class="column15"></td>
      </tr>
      <tr>
        <td class="column40">&nbsp;&nbsp;&nbsp;&nbsp; a) Pasar tradisional</td>
        <td class="column15">{{ $dataPuskesmas->saranaStandarKesehatan[0]['pasarTradisionalIkl'] }}</td>
        <td class="column15">{{ $dataPuskesmas->saranaStandarKesehatan[0]['pasarTradisionalTidakMemenuhiSyarat'] }}</td>
        <td class="column15">{{ $dataPuskesmas->saranaStandarKesehatan[0]['pasarTradisionalMemenuhiSyarat'] }}</td>
        <td class="column15">{{ $dataPuskesmas->saranaStandarKesehatan[0]['pasarTradisionalSertifikat'] }}</td>
      </tr>
      <tr>
        <td class="column40">&nbsp;&nbsp;&nbsp;&nbsp; b) Pasar modern</td>
        <td class="column15">{{ $dataPuskesmas->saranaStandarKesehatan[0]['pasarModernIkl'] }}</td>
        <td class="column15">{{ $dataPuskesmas->saranaStandarKesehatan[0]['pasarModernTidakMemenuhiSyarat'] }}</td>
        <td class="column15">{{ $dataPuskesmas->saranaStandarKesehatan[0]['pasarModernMemenuhiSyarat'] }}</td>
        <td class="column15">{{ $dataPuskesmas->saranaStandarKesehatan[0]['pasarModernSertifikat'] }}</td>
      </tr>
      <tr>
        <td class="column40">&nbsp;&nbsp; 3) Jumlah Fasilitas pelayanan kesehatan (RS, puskesmas, puskesmas pembantu, dsb)</td>
        <td class="column15">{{ $dataPuskesmas->saranaStandarKesehatan[0]['kesehatanIkl'] }}</td>
        <td class="column15">{{ $dataPuskesmas->saranaStandarKesehatan[0]['kesehatanTidakMemenuhiSyarat'] }}</td>
        <td class="column15">{{ $dataPuskesmas->saranaStandarKesehatan[0]['kesehatanMemenuhiSyarat'] }}</td>
        <td class="column15">{{ $dataPuskesmas->saranaStandarKesehatan[0]['kesehatanSertifikat'] }}</td>
      </tr>
      <tr>
        <td class="column40">&nbsp;&nbsp; 4) Tempat ibadah</td>
        <td class="column15">{{ $dataPuskesmas->saranaStandarKesehatan[0]['ibadahIkl'] }}</td>
        <td class="column15">{{ $dataPuskesmas->saranaStandarKesehatan[0]['ibadahTidakMemenuhiSyarat'] }}</td>
        <td class="column15">{{ $dataPuskesmas->saranaStandarKesehatan[0]['ibadahMemenuhiSyarat'] }}</td>
        <td class="column15">{{ $dataPuskesmas->saranaStandarKesehatan[0]['ibadahSertifikat'] }}</td>
      </tr>
      <tr>
        <td class="column40">&nbsp;&nbsp; 5) Hotel (hotel bintang, hotel non bintang)</td>
        <td class="column15">{{ $dataPuskesmas->saranaStandarKesehatan[0]['hotelIkl'] }}</td>
        <td class="column15">{{ $dataPuskesmas->saranaStandarKesehatan[0]['hotelTidakMemenuhiSyarat'] }}</td>
        <td class="column15">{{ $dataPuskesmas->saranaStandarKesehatan[0]['hotelMemenuhiSyarat'] }}</td>
        <td class="column15">{{ $dataPuskesmas->saranaStandarKesehatan[0]['hotelSertifikat'] }}</td>
      </tr>
      <tr>
        <td class="column40">&nbsp;&nbsp; 6) Terminal kendaraan umum, stasiun</td>
        <td class="column15">{{ $dataPuskesmas->saranaStandarKesehatan[0]['terminalIkl'] }}</td>
        <td class="column15">{{ $dataPuskesmas->saranaStandarKesehatan[0]['terminalTidakMemenuhiSyarat'] }}</td>
        <td class="column15">{{ $dataPuskesmas->saranaStandarKesehatan[0]['terminalMemenuhiSyarat'] }}</td>
        <td class="column15">{{ $dataPuskesmas->saranaStandarKesehatan[0]['terminalSertifikat'] }}</td>
      </tr>
      <tr>
        <td class="column40">&nbsp;&nbsp; 7) Tempat rekreasi, hiburan, wisata</td>
        <td class="column15">{{ $dataPuskesmas->saranaStandarKesehatan[0]['wisataIkl'] }}</td>
        <td class="column15">{{ $dataPuskesmas->saranaStandarKesehatan[0]['wisataTidakMemenuhiSyarat'] }}</td>
        <td class="column15">{{ $dataPuskesmas->saranaStandarKesehatan[0]['wisataMemenuhiSyarat'] }}</td>
        <td class="column15">{{ $dataPuskesmas->saranaStandarKesehatan[0]['wisataSertifikat'] }}</td>
      </tr>
      <tr>
        <td class="column40">&nbsp;&nbsp; 8) Lembaga pemasyarakatan, rumah tahanan</td>
        <td class="column15">{{ $dataPuskesmas->saranaStandarKesehatan[0]['lapasIkl'] }}</td>
        <td class="column15">{{ $dataPuskesmas->saranaStandarKesehatan[0]['lapasTidakMemenuhiSyarat'] }}</td>
        <td class="column15">{{ $dataPuskesmas->saranaStandarKesehatan[0]['lapasMemenuhiSyarat'] }}</td>
        <td class="column15">{{ $dataPuskesmas->saranaStandarKesehatan[0]['lapasSertifikat'] }}</td>
      </tr>
      <tr>
        <td class="column40">&nbsp;&nbsp; 9) Sarana transportasi darat</td>
        <td class="column15">{{ $dataPuskesmas->saranaStandarKesehatan[0]['transportasitIkl'] }}</td>
        <td class="column15">{{ $dataPuskesmas->saranaStandarKesehatan[0]['transportasitTidakMemenuhiSyarat'] }}</td>
        <td class="column15">{{ $dataPuskesmas->saranaStandarKesehatan[0]['transportasitMemenuhiSyarat'] }}</td>
        <td class="column15">{{ $dataPuskesmas->saranaStandarKesehatan[0]['transportasitSertifikat'] }}</td>
      </tr>
    </tbody>
  </table>

  <div style="page-break-before: always;"></div>

  <table>
    <thead>
      <tr>
        <td class="column100 " colspan="5" >6. Program Pelayanan Kesehatan Tradisional </td>
      </tr>
      </tr>
      <tr>
        <td class="column75 textCenter">Uraian</td>
        <td class="column25 textCenter" colspan="2">Data</td>
      </tr>
      <tr>
        <td class="column75 textCenter columGrey">1</td>
        <td class="column15 textCenter columGrey">2</td>
        <td class="column10 textCenter columGrey">3</td>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td class="column75">a. Jumlah tenaga Penyehat Tradisional (Hattra) di wilayah puskesmas terdaftar (STPT)</td>
        <td class="column15">{{ $dataPuskesmas->kesehatanTradisional[0]['orang'] }}</td>
        <td class="column10">Balita</td>
      </tr>
      <tr>
        <td class="column75">b. Jumlah posyandu yang melaksanakan asuhan Mandiri Kesehatan Tradisional </td>
        <td class="column15">{{ $dataPuskesmas->kesehatanTradisional[0]['posyandu'] }}</td>
        <td class="column10">Balita</td>
      </tr>
    </tbody>
  </table>

  <div style="page-break-before: always;"></div>

  <table>
    <thead>
      <tr>
        <td class="column100 " colspan="5" >7. Pelaksanaan K3 Di Lingkungan Puskesmas</td>
      </tr>
      </tr>
      <tr>
        <td class="column75 textCenter">Uraian</td>
        <td class="column25 textCenter">Data</td>
      </tr>
      <tr>
        <td class="column75 textCenter columGrey">1</td>
        <td class="column25 textCenter columGrey">2</td>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td class="column75">a. Terdapat kebijakan tertulis pelaksanaan K3 di Lingkungan Sekolah</td>
        <td class="column25">{{ $dataPuskesmas->lingkunganPuskesmas[0]['k3'] }}</td>
      </tr>
      <tr>
        <td class="column75">b. Tim K3 di Puskesmas (SK Kepala Puskesmas)</td>
        <td class="column25">{{ $dataPuskesmas->lingkunganPuskesmas[0]['timK3'] }}</td>
      </tr>
      <tr>
        <td class="column75">c. Penerapan Kewaspadaan Standar di Lingkungan Puskesmas</td>
        <td class="column25">{{ $dataPuskesmas->lingkunganPuskesmas[0]['penerapanKewaspadaan'] }}</td>
      </tr>
    </tbody>
  </table>
</body>

</html>