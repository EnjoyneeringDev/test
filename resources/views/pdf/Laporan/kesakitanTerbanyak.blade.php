<!DOCTYPE html>
<html>

<head>
  <title>LAPORAN BULANAN KESAKITAN TERBANYAK </title>
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
    <p style="text-align: center;">Formulir 14</p>
    <p style="text-align: center;">LAPORAN BULANAN KESAKITAN TERBANYAK </p>
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

  <div style="margin-top: 50px; "></div>
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
            <span  style="display: inline-block; vertical-align: middle; width: 50px; text-align: right; ">Bulan</span>
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
            <span  style="display: inline-block; vertical-align: middle; width: 50px; text-align: right; ">Tahun</span>
            <span  style="width: 100px; height: 30px; display: inline-block; vertical-align: middle; border: 1px solid black; margin-left: 20px; padding: 8px 0 0 8px; ">{{ $year }}</span>
        </div>
    </div>
  </div>

  <div style="margin-top: 20px; " >
    <div style="width: 400px; display: inline-block; vertical-align: middle; ">
      <span style="display: inline-block; vertical-align: middle; width: 265px; text-align: right; ">Jumlah Puskesmas Pembantu</span>
      <span  style="width: 100px; height: 30px; display: inline-block; vertical-align: middle; border: 1px solid black; margin-left: 20px; padding: 8px 0 0 8px; ">{{ ($dataPuskesmas->data[0]->jumlah_puskesmas_pembantu ?? 0) }}</span>
    </div>
    <div style="width: 240px; margin-left: 40px; display: inline-block; vertical-align: middle; ">
      <span  style="display: inline-block; vertical-align: middle; width: 100px; text-align: right; ">Jml Lapor</span>
      <span  style="width: 100px; height: 30px; display: inline-block; vertical-align: middle; border: 1px solid black; margin-left: 10px; padding: 8px 0 0 8px; ">{{ ($dataPuskesmas->data[0]->jumlah_lapor_puskesmas_pembantu ?? 0) }}</span>
    </div>
  </div>

  <div style="margin-top: 20px; " >
    <div style="width: 400px; display: inline-block; vertical-align: middle; ">
      <span style="display: inline-block; vertical-align: middle; width: 265px; text-align: right; ">Jml Poskesdes/bidan desa</span>
      <span  style="width: 100px; height: 30px; display: inline-block; vertical-align: middle; border: 1px solid black; margin-left: 20px; padding: 8px 0 0 8px; ">{{ ($dataPuskesmas->data[0]->jumlah_poskesdes ?? 0) }}</span>
    </div>
    <div style="width: 240px; margin-left: 40px; display: inline-block; vertical-align: middle; ">
      <span  style="display: inline-block; vertical-align: middle; width: 100px; text-align: right; ">Jml Lapor</span>
      <span  style="width: 100px; height: 30px; display: inline-block; vertical-align: middle; border: 1px solid black; margin-left: 10px; padding: 8px 0 0 8px; ">{{ ($dataPuskesmas->data[0]->jumlah_laporan_poskesdes ?? 0) }}</span>
    </div>
  </div>

  <table style="margin-top: 20px; ">
    <thead>
      <tr>
        <td class="column5 textCenter">No</td>
        <td class="column45 textCenter">Jenis Penyakit Terbanyak </td>
        <td class="column10 textCenter" >ICD 10</td>
        <td class="column20 textCenter">Jumlah Kasus Baru</td>
        <td class="column20 textCenter">Jumlah Kasus Lama</td>
      </tr>
    </thead>
    <tbody>
      @foreach ($dataPuskesmas->data as $data)
        @foreach ($data['penyakit'] as $index => $penyakit)
          <tr>
            <td class="column5 textCenter">{{ $index + 1 }}</td>
            <td class="column45">{{ $penyakit['jenis_penyakit_terbanyak'] }}</td>
            <td class="column10">{{ $penyakit['icd10'] }}</td>
            <td class="column20">{{ $penyakit['jumlah_kasus_baru'] }}</td>
            <td class="column20">{{ $penyakit['jumlah_kasus_lama'] }}</td>
          </tr>
        @endforeach
      @endforeach
    </tbody>
  </table>
</body>

</html>