<!DOCTYPE html>
<html>

<head>
  <title>LAPORAN BULANAN DATA KELAHIRAN DI PUSKESMAS</title>
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
    <p style="text-align: center;">LAPORAN BULANAN DATA KELAHIRAN DI PUSKESMAS</p>
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
    <div style="width: 250px; margin-left: 300px; display: inline-block; vertical-align: middle; ">
        <div>
            <span  style="display: inline-block; vertical-align: middle; width: 50px; text-align: right; ">Bulan</span>
            <span  style="width: 150px; height: 30px; display: inline-block; vertical-align: middle; border: 1px solid black; margin-left: 20px; padding: 8px 0 0 8px; ">{{ $monthName }}</span>
        </div>
    </div>
  </div>

  <div style="margin-top: 20px; " >
    <div style="width: 400px; display: inline-block; vertical-align: middle; ">
      <span style="display: inline-block; vertical-align: middle; margin: 0 15px 0 15px; ">Puskesmas</span>
      <span style="width: 270px; height: 30px; display: inline-block; vertical-align: middle; border: 1px solid black; margin: 0 -3px !important; padding: 8px 0 0 8px; ">{{ ($dataPuskesmas->namaPuskesmas ?? "") }}</span>
    </div>
    <div style="width: 250px; margin-left: 300px; display: inline-block; vertical-align: middle; ">
        <div>
            <span  style="display: inline-block; vertical-align: middle; width: 50px; text-align: right; ">Tahun</span>
            <span  style="width: 150px; height: 30px; display: inline-block; vertical-align: middle; border: 1px solid black; margin-left: 20px; padding: 8px 0 0 8px; ">{{ $year }}</span>
        </div>
    </div>
  </div>

  <table style="margin-top: 20px; ">
    <thead>
      <tr>
        <td class="column5 textCenter">No</td>
        <td class="column15 textCenter">Nama Bayi</td>
        <td class="column5 textCenter">L/P</td>
        <td class="column15 textCenter">Nama Orangtua</td>
        <td class="column10 textCenter">NKK</td>
        <td class="column15 textCenter">Alamat lengkap (Nama Jalan, RT/RW, No. rumah, Desa, Kecamatan, kab/kota, Provinsi)</td>
        <td class="column10 textCenter">Tgl dan jam lahir</td>
        <td class="column10 textCenter">Umur kehamilan saat lahir</td>
        <td class="column5 textCenter">BB/TB</td>
        <td class="column10 textCenter">Normal/ dirujuk</td>
      </tr>
      <tr>
        <td class="column5 textCenter columGrey">1</td>
        <td class="column15 textCenter columGrey">2</td>
        <td class="column5 textCenter columGrey">3</td>
        <td class="column15 textCenter columGrey">4</td>
        <td class="column10 textCenter columGrey">5</td>
        <td class="column15 textCenter columGrey">6</td>
        <td class="column10 textCenter columGrey">7</td>
        <td class="column10 textCenter columGrey">8</td>
        <td class="column5 textCenter columGrey">9</td>
        <td class="column10 textCenter columGrey">10</td>
      </tr>
    </thead>
    <tbody>
      @foreach ($dataPuskesmas->data as $index => $data)
        <tr>
          <td class="column5 textCenter">{{ $index + 1 }}</td>
          <td class="column15">{{ $data['nama_bayi'] }}</td>
          <td class="column5 textCenter">{{ $data['kelamin'] }}</td>
          <td class="column15">{{ $data['nama_orang_tua'] }}</td>
          <td class="column10">{{ $data['nkk'] }}</td>
          <td class="column15">{{ $data['alamat'] }}</td>
          <td class="column10">{{ $data['tanggal_lahir'] }}</td>
          <td class="column10">{{ $data['umur'] }}</td>
          <td class="column5 textCenter">{{ $data['bb'] }}kg/{{ $data['tb'] }}cm</td>
          <td class="column10">{{ $data['normal_dirujuk'] }}</td>
        </tr>
        @endforeach
    </tbody>
  </table>
</body>

</html>