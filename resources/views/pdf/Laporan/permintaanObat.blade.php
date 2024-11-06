<!DOCTYPE html>
<html>

<head>
  <title>LAPORAN BULANAN PEMAKAIAN DAN LEMBAR PERMINTAAN OBAT</title>
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
      font-size: 14px;
    }

    th {
      text-align: center;
      font-weight: 400;
    }

    .column2-5 {
      width: 2.5%;
    }

    .column3 {
      width: 3%;
      text-align: center;
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
      background: #BEBEBE;
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
    <p style="text-align: center;">Formulir 16</p>
    <p style="text-align: center;">LAPORAN BULANAN PEMAKAIAN DAN LEMBAR PERMINTAAN OBAT</p>
  </div>

  @php
    // Check if the current record exists
    if (isset($dataPuskesmas->permintaanObat) && !is_null($dataPuskesmas->permintaanObat)) {
        // Access the bulan_tahun directly as it's an object
        $dateString = $dataPuskesmas->permintaanObat->bulan_tahun; 
        
        // Create a Carbon instance
        $date = \Carbon\Carbon::parse($dateString);
        
        // Get the year and month name
        $year = $date->format('Y'); // 'Y' gives a 4-digit year
        // $monthName = $date->format('F'); // 'F' gives the full textual representation of the month -> hasilnya ini seperti "Oktober"
        $monthName = $date->format('m'); // 'F' gives the full textual representation of the month -> hasilnya ini seperti "10"
    } else {
        // Handle the case where current record is not set
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
    <div style="width: 150px; margin-left: 50px; display: inline-block; vertical-align: middle; ">
        <div>
            <span  style="display: inline-block; vertical-align: middle; width: 50px; text-align: right; ">Bulan</span>
            <span  style="width: 50px; height: 30px; display: inline-block; vertical-align: middle; border: 1px solid black; margin-left: 10px; padding: 8px 0 0 8px; ">{{ $monthName }}</span>
        </div>
    </div>
    <div style="width: 150px; margin-left: 20px; display: inline-block; vertical-align: middle; ">
        <div>
            <span  style="display: inline-block; vertical-align: middle; width: 50px; text-align: right; ">Jml. PP</span>
            <span  style="width: 50px; height: 30px; display: inline-block; vertical-align: middle; border: 1px solid black; margin-left: 10px; padding: 8px 0 0 8px; ">{{ ($dataPuskesmas->permintaanObat->jumlah_pp ?? 0) }}</span>
        </div>
    </div>
    <div style="width: 200px; margin-left: 20px; display: inline-block; vertical-align: middle;  ">
        <div>
            <span  style="display: inline-block; vertical-align: middle; width: 120px; text-wrap: wrap; text-align: right; ">Jml Poskesdes/ bidan desa</span>
            <span  style="width: 50px; height: 30px; display: inline-block; vertical-align: middle; border: 1px solid black; margin-left: 10px; padding: 8px 0 0 8px; ">{{ ($dataPuskesmas->permintaanObat->jumlah_poskesdes ?? 0) }}</span>
        </div>
    </div>
  </div>

  <div style="margin-top: 20px; " >
    <div style="width: 400px; display: inline-block; vertical-align: middle; ">
      <span style="display: inline-block; vertical-align: middle; margin: 0 15px 0 15px; ">Puskesmas</span>
      <span style="width: 270px; height: 30px; display: inline-block; vertical-align: middle; border: 1px solid black; margin: 0 -3px !important; padding: 8px 0 0 8px; ">{{ ($dataPuskesmas->namaPuskesmas ?? "") }}</span>
    </div>
    <div style="width: 150px; margin-left: 50px; display: inline-block; vertical-align: middle; ">
        <div>
            <span  style="display: inline-block; vertical-align: middle; width: 50px; text-align: right; ">Tahun</span>
            <span  style="width: 50px; height: 30px; display: inline-block; vertical-align: middle; border: 1px solid black; margin-left: 10px; padding: 8px 0 0 8px; ">{{ $year }}</span>
        </div>
    </div>
    <div style="width: 150px; margin-left: 20px; display: inline-block; vertical-align: middle; ">
        <div>
            <span  style="display: inline-block; vertical-align: middle; width: 50px; text-align: right; ">Jml melapor</span>
            <span  style="width: 50px; height: 30px; display: inline-block; vertical-align: middle; border: 1px solid black; margin-left: 10px; padding: 8px 0 0 8px; ">{{ ($dataPuskesmas->permintaanObat->jumlah_melapor_pp ?? 0) }}</span>
        </div>
    </div>
    <div style="width: 200px; margin-left: 20px; display: inline-block; vertical-align: middle; ">
        <div>
            <span  style="display: inline-block; vertical-align: middle; width: 120px; text-align: right; ">Jml melapor</span>
            <span  style="width: 50px; height: 30px; display: inline-block; vertical-align: middle; border: 1px solid black; margin-left: 10px; padding: 8px 0 0 8px; ">{{ ($dataPuskesmas->permintaanObat->jumlah_melapor_poskesdes ?? 0) }}</span>
        </div>
    </div>
  </div>

  <table>
    <thead>
      <tr>
        <td class="column5 textCenter">No</td>
        <td class="column5 textCenter">Kode Obat</td>
        <td class="column10 textCenter">Nama Obat</td>
        <td class="column5 textCenter">Satuan</td>
        <td class="column5 textCenter">Stok Awal</td>
        <td class="column10 textCenter">Penerimaan</td>
        <td class="column10 textCenter">Persediaan</td>
        <td class="column10 textCenter">Pemakaian</td>
        <td class="column5 textCenter">Stok Akhir</td>
        <td class="column5 textCenter">Stok Optimum</td>
        <td class="column10 textCenter">Perminatan</td>
        <td class="column10 textCenter">Pemberian</td>
        <td class="column10 textCenter">Keterangan (Rusak, ED/ Sampling, dll)</td>
      </tr>
      <tr>
        <td class="column5 textCenter columGrey">1</td>
        <td class="column5 textCenter columGrey">2</td>
        <td class="column10 textCenter columGrey">3</td>
        <td class="column5 textCenter columGrey">4</td>
        <td class="column5 textCenter columGrey">5</td>
        <td class="column10 textCenter columGrey">6</td>
        <td class="column10 textCenter columGrey">7</td>
        <td class="column10 textCenter columGrey">8</td>
        <td class="column5 textCenter columGrey">9</td>
        <td class="column5 textCenter columGrey">10</td>
        <td class="column10 textCenter columGrey">11</td>
        <td class="column10 textCenter columGrey">12</td>
        <td class="column10 textCenter columGrey">13</td>
      </tr>
    </thead>
    <tbody>
      @foreach ($dataPuskesmas->permintaanObat->permintaan_obat as $index => $data)
        <tr>
          <td class="column5">no{{ $index+1 }}</td>
          <td class="column5">{{ $data['kode_obat'] ?? "" }}</td>
          <td class="column10">{{ $data['nama_obat'] ?? "" }}</td>
          <td class="column5">{{ $data['satuan'] ?? "" }}</td>
          <td class="column5">{{ $data['stock_awal'] ?? "" }}</td>
          <td class="column10">{{ $data['penerimaan'] ?? "" }}</td>
          <td class="column10">{{ $data['persediaan'] ?? "" }}</td>
          <td class="column10">{{ $data['pemakaiaan'] ?? "" }}</td>
          <td class="column5">{{ $data['stock_akhir'] ?? "" }}</td>
          <td class="column5">{{ $data['stock_optimum'] ?? "" }}</td>
          <td class="column10">{{ $data['permintaan'] ?? "" }}</td>
          <td class="column10">{{ $data['pemberian'] ?? "" }}</td>
          <td class="column10">{{ $data['keterangan_rusak'] ?? "" }}</td>
        </tr>
      @endforeach
    </tbody>
  </table>

  <table style="margin-top: 20px;">
    <thead>
      <tr>
        <td class="column20 textCenter" rowspan="2">Jumlah Kunjungan Resep</td>
        <td class="column20 textCenter" colspan="2">Umum</td>
        <td class="column20 textCenter" rowspan="2">JKN</td>
        <td class="column20 textCenter" rowspan="2">Jumlah</td>
      </tr>
      <tr>
        <td class="column20 textCenter">Bayar</td>
        <td class="column20 textCenter">Tidak</td>
      </tr>
      <tr>
        <td class="column20 textCenter columGrey">1</td>
        <td class="column20 textCenter columGrey">2</td>
        <td class="column20 textCenter columGrey">3</td>
        <td class="column20 textCenter columGrey">4</td>
        <td class="column20 textCenter columGrey">5</td>
      </tr>
    </thead>
    <tbody>
      @foreach ($dataPuskesmas->permintaanObat->kunjungan_resep as $index => $data)
        <tr>
          <td class="column20 textCenter">{{ $data['jumlah_kunjungan_resep'] ?? "" }}</td>
          <td class="column20 textCenter">{{ $data['umum_bayar'] ?? "" }}</td>
          <td class="column20 textCenter">{{ $data['umum_tidak_bayar'] ?? "" }}</td>
          <td class="column20 textCenter">{{ $data['jkn'] ?? "" }}</td>
          <td class="column20 textCenter">{{ $data['jumlah'] ?? "" }}</td>
        </tr>
      @endforeach
    </tbody>
  </table>

  <table style="margin-top: 20px;">
    <tbody>
      <tr>
        <td class="column25 textCenter" style="border-bottom: 0;">Mengetahu/Menyetujui<br>Kepala Dinas Kesehatan Kab/Kota</td>
        <td class="column25 textCenter" style="border-bottom: 0;">Yang Menyerahkan<br>Kepala IFK</td>
        <td class="column25 textCenter" style="border-bottom: 0;">Yang Meminta<br>Kepala Puskesmas</td>
        <td class="column25 textCenter" style="border-bottom: 0;">Yang Menerima<br>Petugas Puskesmas</td>
      </tr>
      <tr>
        <td class="column25 textCenter" style="border-top: 0; border-bottom: 0; min-height: 30px;"></td>
        <td class="column25 textCenter" style="border-top: 0; border-bottom: 0; min-height: 30px;"></td>
        <td class="column25 textCenter" style="border-top: 0; border-bottom: 0; min-height: 30px;"></td>
        <td class="column25 textCenter" style="border-top: 0; border-bottom: 0; min-height: 30px;"></td>
      </tr>
      <tr>
        <td class="column25" style="border-top: 0;">NIP</td>
        <td class="column25" style="border-top: 0;">NIP</td>
        <td class="column25" style="border-top: 0;">NIP</td>
        <td class="column25" style="border-top: 0;">NIP</td>
      </tr>
    </tbody>
  </table>
</body>

</html>