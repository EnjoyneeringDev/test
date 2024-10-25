<!DOCTYPE html>
<html>

<head>
  <title>LAPORAN  KLB 24 Jam (W1)</title>
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
    <p style="text-align: center;">Formulir 18</p>
    <p style="text-align: center;">LAPORAN  KLB 24 Jam (W1)</p>
  </div>

  @php
    // Assuming you have your date string in $dataPuskesmas->data[0]['bulan_tahun']
    $dateString = $dataPuskesmas->data[0]['bulan_tahun'];

    // Try parsing the date string using Carbon
    try {
        $date = \Carbon\Carbon::parse($dateString);

        // Get the year, month, and day
        $day = $date->format('d'); // 'd' gives the day with leading zeros (01-31)
        $month = $date->format('m'); // 'm' gives the numeric month (01-12)
        $monthName = $date->format('F'); // 'F' gives the full textual representation of the month
        $year = $date->format('Y'); // 'Y' gives the 4-digit year
    } catch (\Exception $e) {
        // Handle parsing error if the date format is invalid
        $day = 'Invalid';
        $month = 'Invalid';
        $monthName = 'Invalid';
        $year = 'Invalid';
    }
  @endphp
  
  <div style="margin-top: 50px; ">
    <div style="width: 600px; display: inline-block; vertical-align: middle; ">
      <span style="display: inline-block; vertical-align: middle; margin-left: 30px; width: 130px; ">Nama Puskesmas</span>
      <span style="display: inline-block; vertical-align: middle; ">:</span>
      <span style="display: inline-block; vertical-align: middle; margin-left: 10px; ">{{ $dataPuskesmas->namaPuskesmas ?? "" }}</span>
      <span style="display: inline-block; vertical-align: middle; margin-left: 30px; width: 40px; ">Kode</span>
      <span style="display: inline-block; vertical-align: middle; ">:</span>
      <span style="display: inline-block; vertical-align: middle; margin-left: 10px; ">{{ $dataPuskesmas->idLaporan }}</span>
    </div>
  </div>

  <div style="margin-top: 10px; ">
    <div style="width: 500px; display: inline-block; vertical-align: middle; ">
      <span style="display: inline-block; vertical-align: middle; margin-left: 30px; width: 20px; ">No</span>
      <span style="display: inline-block; vertical-align: middle; ">:</span>
      <span style="display: inline-block; vertical-align: middle; margin-left: 10px; ">{{ $dataPuskesmas->idLaporan }}</span>
    </div>
  </div>

  <div style="margin-top: 25px; ">
    <div style="width: 500px; display: inline-block; vertical-align: middle; ">
      <span style="display: inline-block; vertical-align: middle; margin-left: 30px; width: 200px; ">Kepada Yth</span>
      <span style="display: inline-block; vertical-align: middle; ">:</span>
      <span style="display: inline-block; vertical-align: middle; margin-left: 10px; ">{{ $dataPuskesmas->data[0]['kepada'] ?? "" }}</span>
    </div>
  </div>
  <div style="margin-top: 10px; ">
    <div style="width: 500px; display: inline-block; vertical-align: middle; ">
      <span style="display: inline-block; vertical-align: middle; margin-left: 30px; width: 200px; ">Pada tanggal/bulan/tahun </span>
      <span style="display: inline-block; vertical-align: middle; ">:</span>
      <span style="display: inline-block; vertical-align: middle; margin-left: 10px; ">{{ $day }}/{{ $month }}/{{ $year }}</span>
    </div>
  </div>
  <div style="margin-top: 10px; ">
    <div style="width: 500px; display: inline-block; vertical-align: middle; ">
      <span style="display: inline-block; vertical-align: middle; margin-left: 30px; width: 200px; ">Desa/Kelurahan </span>
      <span style="display: inline-block; vertical-align: middle; ">:</span>
      <span style="display: inline-block; vertical-align: middle; margin-left: 10px; ">{{ $dataPuskesmas->data[0]['desa_kelurahan'] }}</span>
    </div>
  </div>
  <div style="margin-top: 10px; ">
    <div style="width: 500px; display: inline-block; vertical-align: middle; ">
      <span style="display: inline-block; vertical-align: middle; margin-left: 30px; width: 200px; ">Kecamatan </span>
      <span style="display: inline-block; vertical-align: middle; ">:</span>
      <span style="display: inline-block; vertical-align: middle; margin-left: 10px; ">{{ $dataPuskesmas->data[0]['kecamatan'] }}</span>
    </div>
  </div>
  <div style="margin-top: 10px; ">
    <div style="width: 500px; display: inline-block; vertical-align: middle; ">
      <span style="display: inline-block; vertical-align: middle; margin-left: 30px; width: 200px; ">Telah terjadi sejumlah </span>
      <span style="display: inline-block; vertical-align: middle; ">:</span>
      <span style="display: inline-block; vertical-align: middle; margin-left: 10px; ">{{ $dataPuskesmas->data[0]['penderita'] ?? 0 }} penderita</span>
    </div>
  </div>
  <div style="margin-top: 10px; ">
    <div style="width: 500px; display: inline-block; vertical-align: middle; ">
      <span style="display: inline-block; vertical-align: middle; margin-left: 30px; width: 200px; ">dan sejumlah </span>
      <span style="display: inline-block; vertical-align: middle; ">:</span>
      <span style="display: inline-block; vertical-align: middle; margin-left: 10px; ">{{ $dataPuskesmas->data[0]['kematian'] ?? 0 }} kematian</span>
    </div>
  </div>

  <div style="margin-top: 30px; ">
    <div style="width: 500px; display: inline-block; vertical-align: middle; ">
      <span style="display: inline-block; vertical-align: middle; margin-left: 30px; ">Tersangka penyakit (beri tanda “v”) :</span>
    </div>
  </div>
  <div style="margin-top: 10px; ">
    <div style="width: 150px; display: inline-block; vertical-align: middle; ">
      <span style="display: inline-block; vertical-align: middle; width: 80px; ">Kolera</span>
      <span style="width: 20px; height: 20px; display: inline-block; vertical-align: middle; border: 1px solid black; margin: 0 -3px !important; padding: 3px 0 0 8px; ">{{ $dataPuskesmas->data[0]['kolera'] ? 'v' : '' }}</span>
    </div>
    <div style="width: 150px; display: inline-block; vertical-align: middle; ">
      <span style="display: inline-block; vertical-align: middle; width: 80px; ">Polio</span>
      <span style="width: 20px; height: 20px; display: inline-block; vertical-align: middle; border: 1px solid black; margin: 0 -3px !important; padding: 3px 0 0 8px; ">{{ $dataPuskesmas->data[0]['polio'] ? 'v' : '' }}</span>
    </div>
    <div style="width: 190px; display: inline-block; vertical-align: middle; ">
      <span style="display: inline-block; vertical-align: middle; width: 120px; ">Malaria</span>
      <span style="width: 20px; height: 20px; display: inline-block; vertical-align: middle; border: 1px solid black; margin: 0 -3px !important; padding: 3px 0 0 8px; ">{{ $dataPuskesmas->data[0]['malaria'] ? 'v' : '' }}</span>
    </div>
    <div style="width: 190px; display: inline-block; vertical-align: middle; ">
      <span style="display: inline-block; vertical-align: middle; width: 130px; ">Chikungunya</span>
      <span style="width: 20px; height: 20px; display: inline-block; vertical-align: middle; border: 1px solid black; margin: 0 -3px !important; padding: 3px 0 0 8px; ">{{ $dataPuskesmas->data[0]['chikungunya'] ? 'v' : '' }}</span>
    </div>
  </div>
  <div style="margin-top: 10px; ">
    <div style="width: 150px; display: inline-block; vertical-align: middle; ">
      <span style="display: inline-block; vertical-align: middle; width: 80px; ">Pes</span>
      <span style="width: 20px; height: 20px; display: inline-block; vertical-align: middle; border: 1px solid black; margin: 0 -3px !important; padding: 3px 0 0 8px; ">{{ $dataPuskesmas->data[0]['Pes'] ? 'v' : '' }}</span>
    </div>
    <div style="width: 150px; display: inline-block; vertical-align: middle; ">
      <span style="display: inline-block; vertical-align: middle; width: 80px; ">Difteri</span>
      <span style="width: 20px; height: 20px; display: inline-block; vertical-align: middle; border: 1px solid black; margin: 0 -3px !important; padding: 3px 0 0 8px; ">{{ $dataPuskesmas->data[0]['difteri'] ? 'v' : '' }}</span>
    </div>
    <div style="width: 190px; display: inline-block; vertical-align: middle; ">
      <span style="display: inline-block; vertical-align: middle; width: 120px; ">Avian Inf</span>
      <span style="width: 20px; height: 20px; display: inline-block; vertical-align: middle; border: 1px solid black; margin: 0 -3px !important; padding: 3px 0 0 8px; ">{{ $dataPuskesmas->data[0]['avian'] ? 'v' : '' }}</span>
    </div>
    <div style="width: 190px; display: inline-block; vertical-align: middle; ">
      <span style="display: inline-block; vertical-align: middle; width: 130px; ">Keracunan</span>
      <span style="width: 20px; height: 20px; display: inline-block; vertical-align: middle; border: 1px solid black; margin: 0 -3px !important; padding: 3px 0 0 8px; ">{{ $dataPuskesmas->data[0]['keracunan'] ? 'v' : '' }}</span>
    </div>
  </div>
  <div style="margin-top: 10px; ">
    <div style="width: 150px; display: inline-block; vertical-align: middle; ">
      <span style="display: inline-block; vertical-align: middle; width: 80px; ">DBD</span>
      <span style="width: 20px; height: 20px; display: inline-block; vertical-align: middle; border: 1px solid black; margin: 0 -3px !important; padding: 3px 0 0 8px; ">{{ $dataPuskesmas->data[0]['dbd'] ? 'v' : '' }}</span>
    </div>
    <div style="width: 150px; display: inline-block; vertical-align: middle; ">
      <span style="display: inline-block; vertical-align: middle; width: 80px; ">Pertusis</span>
      <span style="width: 20px; height: 20px; display: inline-block; vertical-align: middle; border: 1px solid black; margin: 0 -3px !important; padding: 3px 0 0 8px; ">{{ $dataPuskesmas->data[0]['pertusis'] ? 'v' : '' }}</span>
    </div>
    <div style="width: 190px; display: inline-block; vertical-align: middle; ">
      <span style="display: inline-block; vertical-align: middle; width: 120px; ">Antraks</span>
      <span style="width: 20px; height: 20px; display: inline-block; vertical-align: middle; border: 1px solid black; margin: 0 -3px !important; padding: 3px 0 0 8px; ">{{ $dataPuskesmas->data[0]['antraks'] ? 'v' : '' }}</span>
    </div>
    {{--<div style="width: 190px; display: inline-block; vertical-align: middle; ">
      <span style="display: inline-block; vertical-align: middle; width: 130px; ">.....</span>
      <span style="width: 20px; height: 20px; display: inline-block; vertical-align: middle; border: 1px solid black; margin: 0 -3px !important; padding: 3px 0 0 8px; ">{{ $dataPuskesmas->data[0]['kolera'] ? 'v' : '' }}</span>
    </div>--}}
  </div>
  <div style="margin-top: 10px; ">
    <div style="width: 150px; display: inline-block; vertical-align: middle; ">
      <span style="display: inline-block; vertical-align: middle; width: 80px; ">Campak</span>
      <span style="width: 20px; height: 20px; display: inline-block; vertical-align: middle; border: 1px solid black; margin: 0 -3px !important; padding: 3px 0 0 8px; ">{{ $dataPuskesmas->data[0]['campak'] ? 'v' : '' }}</span>
    </div>
    <div style="width: 150px; display: inline-block; vertical-align: middle; ">
      <span style="display: inline-block; vertical-align: middle; width: 80px; ">Rabies</span>
      <span style="width: 20px; height: 20px; display: inline-block; vertical-align: middle; border: 1px solid black; margin: 0 -3px !important; padding: 3px 0 0 8px; ">{{ $dataPuskesmas->data[0]['rabies'] ? 'v' : '' }}</span>
    </div>
    <div style="width: 190px; display: inline-block; vertical-align: middle; ">
      <span style="display: inline-block; vertical-align: middle; width: 120px; ">Leptospirosis</span>
      <span style="width: 20px; height: 20px; display: inline-block; vertical-align: middle; border: 1px solid black; margin: 0 -3px !important; padding: 3px 0 0 8px; ">{{ $dataPuskesmas->data[0]['leptospirosis'] ? 'v' : '' }}</span>
    </div>
  </div>

  <div style="margin-top: 30px; ">
    <div style="width: 500px; display: inline-block; vertical-align: middle; ">
      <span style="display: inline-block; vertical-align: middle; margin-left: 30px; ">Tersangka penyakit (beri tanda “v”) :</span>
    </div>
  </div>
  <div style="margin-top: 10px; ">
    <div style="width: 200px; display: inline-block; vertical-align: middle; ">
      <span style="display: inline-block; vertical-align: middle; width: 120px; ">Muntah</span>
      <span style="width: 20px; height: 20px; display: inline-block; vertical-align: middle; border: 1px solid black; margin: 0 -3px !important; padding: 3px 0 0 8px; ">{{ $dataPuskesmas->data[0]['muntah'] ? 'v' : '' }}</span>
    </div>
    <div style="width: 230px; display: inline-block; vertical-align: middle; ">
      <span style="display: inline-block; vertical-align: middle; width: 180px; ">Panas/demam</span>
      <span style="width: 20px; height: 20px; display: inline-block; vertical-align: middle; border: 1px solid black; margin: 0 -3px !important; padding: 3px 0 0 8px; ">{{ $dataPuskesmas->data[0]['panas_demam'] ? 'v' : '' }}</span>
    </div>
    <div style="width: 245px; display: inline-block; vertical-align: middle; ">
      <span style="display: inline-block; vertical-align: middle; width: 195px; ">Bercak putih faring</span>
      <span style="width: 20px; height: 20px; display: inline-block; vertical-align: middle; border: 1px solid black; margin: 0 -3px !important; padding: 3px 0 0 8px; ">{{ $dataPuskesmas->data[0]['bercak_merah_kulit'] ? 'v' : '' }}</span>
    </div>
  </div>
  <div style="margin-top: 10px; ">
    <div style="width: 200px; display: inline-block; vertical-align: middle; ">
      <span style="display: inline-block; vertical-align: middle; width: 120px; ">Berak-berak</span>
      <span style="width: 20px; height: 20px; display: inline-block; vertical-align: middle; border: 1px solid black; margin: 0 -3px !important; padding: 3px 0 0 8px; ">{{ $dataPuskesmas->data[0]['berak'] ? 'v' : '' }}</span>
    </div>
    <div style="width: 230px; display: inline-block; vertical-align: middle; ">
      <span style="display: inline-block; vertical-align: middle; width: 180px; ">Batuk</span>
      <span style="width: 20px; height: 20px; display: inline-block; vertical-align: middle; border: 1px solid black; margin: 0 -3px !important; padding: 3px 0 0 8px; ">{{ $dataPuskesmas->data[0]['batuk'] ? 'v' : '' }}</span>
    </div>
    <div style="width: 245px; display: inline-block; vertical-align: middle; ">
      <span style="display: inline-block; vertical-align: middle; width: 195px; ">Meringkil pada lipatan paha/ketiak</span>
      <span style="width: 20px; height: 20px; display: inline-block; vertical-align: middle; border: 1px solid black; margin: 0 -3px !important; padding: 3px 0 0 8px; ">{{ $dataPuskesmas->data[0]['meringkil'] ? 'v' : '' }}</span>
    </div>
  </div>
  <div style="margin-top: 10px; ">
    <div style="width: 200px; display: inline-block; vertical-align: middle; ">
      <span style="display: inline-block; vertical-align: middle; width: 120px; ">Menggigil</span>
      <span style="width: 20px; height: 20px; display: inline-block; vertical-align: middle; border: 1px solid black; margin: 0 -3px !important; padding: 3px 0 0 8px; ">{{ $dataPuskesmas->data[0]['menggigil'] ? 'v' : '' }}</span>
    </div>
    <div style="width: 230px; display: inline-block; vertical-align: middle; ">
      <span style="display: inline-block; vertical-align: middle; width: 180px; ">Pilek</span>
      <span style="width: 20px; height: 20px; display: inline-block; vertical-align: middle; border: 1px solid black; margin: 0 -3px !important; padding: 3px 0 0 8px; ">{{ $dataPuskesmas->data[0]['pilek'] ? 'v' : '' }}</span>
    </div>
    <div style="width: 245px; display: inline-block; vertical-align: middle; ">
      <span style="display: inline-block; vertical-align: middle; width: 195px; ">Perdarahan</span>
      <span style="width: 20px; height: 20px; display: inline-block; vertical-align: middle; border: 1px solid black; margin: 0 -3px !important; padding: 3px 0 0 8px; ">{{ $dataPuskesmas->data[0]['pendarahan'] ? 'v' : '' }}</span>
    </div>
  </div>
  <div style="margin-top: 10px; ">
    <div style="width: 200px; display: inline-block; vertical-align: middle; ">
      <span style="display: inline-block; vertical-align: middle; width: 120px; ">Turgor jelek</span>
      <span style="width: 20px; height: 20px; display: inline-block; vertical-align: middle; border: 1px solid black; margin: 0 -3px !important; padding: 3px 0 0 8px; ">{{ $dataPuskesmas->data[0]['turgor_jelek'] ? 'v' : '' }}</span>
    </div>
    <div style="width: 230px; display: inline-block; vertical-align: middle; ">
      <span style="display: inline-block; vertical-align: middle; width: 180px; ">Pusing</span>
      <span style="width: 20px; height: 20px; display: inline-block; vertical-align: middle; border: 1px solid black; margin: 0 -3px !important; padding: 3px 0 0 8px; ">{{ $dataPuskesmas->data[0]['pusing'] ? 'v' : '' }}</span>
    </div>
    <div style="width: 245px; display: inline-block; vertical-align: middle; ">
      <span style="display: inline-block; vertical-align: middle; width: 195px; ">Gatal-gatal</span>
      <span style="width: 20px; height: 20px; display: inline-block; vertical-align: middle; border: 1px solid black; margin: 0 -3px !important; padding: 3px 0 0 8px; ">{{ $dataPuskesmas->data[0]['gatal'] ? 'v' : '' }}</span>
    </div>
  </div>
  <div style="margin-top: 10px; ">
    <div style="width: 200px; display: inline-block; vertical-align: middle; ">
      <span style="display: inline-block; vertical-align: middle; width: 120px; ">Kaku kuduk</span>
      <span style="width: 20px; height: 20px; display: inline-block; vertical-align: middle; border: 1px solid black; margin: 0 -3px !important; padding: 3px 0 0 8px; ">{{ $dataPuskesmas->data[0]['kaku_kuduk'] ? 'v' : '' }}</span>
    </div>
    <div style="width: 230px; display: inline-block; vertical-align: middle; ">
      <span style="display: inline-block; vertical-align: middle; width: 180px; ">Kesadaran menurun</span>
      <span style="width: 20px; height: 20px; display: inline-block; vertical-align: middle; border: 1px solid black; margin: 0 -3px !important; padding: 3px 0 0 8px; ">{{ $dataPuskesmas->data[0]['kesadaran_menurun'] ? 'v' : '' }}</span>
    </div>
    {{--<div style="width: 245px; display: inline-block; vertical-align: middle; ">
      <span style="display: inline-block; vertical-align: middle; width: 195px; ">.....</span>
      <span style="width: 20px; height: 20px; display: inline-block; vertical-align: middle; border: 1px solid black; margin: 0 -3px !important; padding: 3px 0 0 8px; ">{{ $dataPuskesmas->data[0]['kolera'] ? 'v' : '' }}</span>
    </div>--}}
  </div>
  <div style="margin-top: 10px; ">
    <div style="width: 200px; display: inline-block; vertical-align: middle; ">
      <span style="display: inline-block; vertical-align: middle; width: 120px; ">Sakit perut</span>
      <span style="width: 20px; height: 20px; display: inline-block; vertical-align: middle; border: 1px solid black; margin: 0 -3px !important; padding: 3px 0 0 8px; ">{{ $dataPuskesmas->data[0]['sakit_perut'] ? 'v' : '' }}</span>
    </div>
    <div style="width: 230px; display: inline-block; vertical-align: middle; ">
      <span style="display: inline-block; vertical-align: middle; width: 180px; ">Pingsan</span>
      <span style="width: 20px; height: 20px; display: inline-block; vertical-align: middle; border: 1px solid black; margin: 0 -3px !important; padding: 3px 0 0 8px; ">{{ $dataPuskesmas->data[0]['pingsan'] ? 'v' : '' }}</span>
    </div>
  </div>
  <div style="margin-top: 10px; ">
    <div style="width: 200px; display: inline-block; vertical-align: middle; ">
      <span style="display: inline-block; vertical-align: middle; width: 120px; ">Hidrofobi</span>
      <span style="width: 20px; height: 20px; display: inline-block; vertical-align: middle; border: 1px solid black; margin: 0 -3px !important; padding: 3px 0 0 8px; ">{{ $dataPuskesmas->data[0]['hidrofobi'] ? 'v' : '' }}</span>
    </div>
    <div style="width: 230px; display: inline-block; vertical-align: middle; ">
      <span style="display: inline-block; vertical-align: middle; width: 180px; ">Bercak merah di kulit</span>
      <span style="width: 20px; height: 20px; display: inline-block; vertical-align: middle; border: 1px solid black; margin: 0 -3px !important; padding: 3px 0 0 8px; ">{{ $dataPuskesmas->data[0]['bercak_merah_kulit'] ? 'v' : '' }}</span>
    </div>
  </div>
  <div style="margin-top: 10px; ">
    <div style="width: 200px; display: inline-block; vertical-align: middle; ">
      <span style="display: inline-block; vertical-align: middle; width: 120px; ">Kejang-kejang</span>
      <span style="width: 20px; height: 20px; display: inline-block; vertical-align: middle; border: 1px solid black; margin: 0 -3px !important; padding: 3px 0 0 8px; ">{{ $dataPuskesmas->data[0]['kejang'] ? 'v' : '' }}</span>
    </div>
    <div style="width: 230px; display: inline-block; vertical-align: middle; ">
      <span style="display: inline-block; vertical-align: middle; width: 180px; ">Lumpuh</span>
      <span style="width: 20px; height: 20px; display: inline-block; vertical-align: middle; border: 1px solid black; margin: 0 -3px !important; padding: 3px 0 0 8px; ">{{ $dataPuskesmas->data[0]['lumpuh'] ? 'v' : '' }}</span>
    </div>
  </div>
  <div style="margin-top: 10px; ">
    <div style="width: 200px; display: inline-block; vertical-align: middle; ">
      <span style="display: inline-block; vertical-align: middle; width: 120px; ">Syok</span>
      <span style="width: 20px; height: 20px; display: inline-block; vertical-align: middle; border: 1px solid black; margin: 0 -3px !important; padding: 3px 0 0 8px; ">{{ $dataPuskesmas->data[0]['syok'] ? 'v' : '' }}</span>
    </div>
    <div style="width: 230px; display: inline-block; vertical-align: middle; ">
      <span style="display: inline-block; vertical-align: middle; width: 180px; ">Ikterus</span>
      <span style="width: 20px; height: 20px; display: inline-block; vertical-align: middle; border: 1px solid black; margin: 0 -3px !important; padding: 3px 0 0 8px; ">{{ $dataPuskesmas->data[0]['ikterus'] ? 'v' : '' }}</span>
    </div>
  </div>
  <div style="margin-top: 10px; ">
    <div style="width: 200px; display: inline-block; vertical-align: middle; ">
      <span style="display: inline-block; vertical-align: middle; width: 120px; ">Batuk beruntun</span>
      <span style="width: 20px; height: 20px; display: inline-block; vertical-align: middle; border: 1px solid black; margin: 0 -3px !important; padding: 3px 0 0 8px; ">{{ $dataPuskesmas->data[0]['batuk_beruntun'] ? 'v' : '' }}</span>
    </div>
    <div style="width: 230px; display: inline-block; vertical-align: middle; ">
      <span style="display: inline-block; vertical-align: middle; width: 180px; ">Mulut suka dibuka</span>
      <span style="width: 20px; height: 20px; display: inline-block; vertical-align: middle; border: 1px solid black; margin: 0 -3px !important; padding: 3px 0 0 8px; ">{{ $dataPuskesmas->data[0]['mulut_suka_dibuka'] ? 'v' : '' }}</span>
    </div>
  </div>
  
  <div style="margin-top: 50px; ">
    <div style="width: 500px; display: inline-block; vertical-align: middle; ">
      <span style="display: inline-block; vertical-align: middle; margin-left: 30px; width: 250px; ">Tindakan yang telah diambil</span>
      <span style="display: inline-block; vertical-align: middle; ">:</span>
    </div>
  </div>
  <div style="margin-top: 30px; ">
    <div style="width: 500px; display: inline-block; vertical-align: middle; ">
      <span style="display: inline-block; vertical-align: middle; margin-left: 30px; ">{{ $dataPuskesmas->data[0]['tindakan'] ?? "" }}</span>
    </div>
  </div>
  <div style="margin-top: 10px; ">
    <div style="width: 500px; display: inline-block; vertical-align: middle; ">
      <span style="display: inline-block; vertical-align: middle; margin-left: 30px; width: 200px; ">Telp dan Email</span>
      <span style="display: inline-block; vertical-align: middle; ">:</span>
      <span style="display: inline-block; vertical-align: middle; margin-left: 10px; ">{{ $dataPuskesmas->data[0]['telp'] ?? "" }} - {{ $dataPuskesmas->data[0]['email'] ?? "" }}</span>
    </div>
  </div>
  <div style="margin-top: 30px; ">
    <div style="width: 500px; display: inline-block; vertical-align: middle; ">
      <span style="display: inline-block; vertical-align: middle; margin-left: 30px; ">Sorong Selatan, {{ $day }}/{{ $month }}/{{ $year }}</span>
    </div>
  </div>
  <div style="margin-top: 10px; ">
    <div style="width: 500px; display: inline-block; vertical-align: middle; ">
      <span style="display: inline-block; vertical-align: middle; margin-left: 30px; ">Kepala Puskesmas</span>
    </div>
  </div>

</body>

</html>