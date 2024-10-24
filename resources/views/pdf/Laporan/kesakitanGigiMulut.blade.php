<!DOCTYPE html>
<html>

<head>
  <title>LAPORAN BULANAN KESAKITAN GIGI DAN MULUT</title>
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
    <p style="text-align: center; ">Formulir 10</p>
    <p style="text-align: center; ">LAPORAN BULANAN KESAKITAN GIGI DAN MULUT</p>
  </div>

  @php
    // Check if the current record exists
    if (isset($dataPuskesmas->current) && !is_null($dataPuskesmas->current)) {
        // Access the bulan_tahun directly as it's an object
        $dateString = $dataPuskesmas->current->bulan_tahun; 
        
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
            <span  style="width: 50px; height: 30px; display: inline-block; vertical-align: middle; border: 1px solid black; margin-left: 10px; padding: 8px 0 0 8px; ">{{ ($dataPuskesmas->current->jumlah_puskesmas_pembantu ?? 0) }}</span>
        </div>
    </div>
    <div style="width: 200px; margin-left: 20px; display: inline-block; vertical-align: middle;  ">
        <div>
            <span  style="display: inline-block; vertical-align: middle; width: 120px; text-wrap: wrap; text-align: right; ">Jml Poskesdes/ bidan desa</span>
            <span  style="width: 50px; height: 30px; display: inline-block; vertical-align: middle; border: 1px solid black; margin-left: 10px; padding: 8px 0 0 8px; ">{{ ($dataPuskesmas->current->jumlah_poskesdes ?? 0) }}</span>
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
            <span  style="width: 50px; height: 30px; display: inline-block; vertical-align: middle; border: 1px solid black; margin-left: 10px; padding: 8px 0 0 8px; ">{{ ($dataPuskesmas->current->jumlah_laporan_puskesma_pembantu ?? 0) }}</span>
        </div>
    </div>
    <div style="width: 200px; margin-left: 20px; display: inline-block; vertical-align: middle; ">
        <div>
            <span  style="display: inline-block; vertical-align: middle; width: 120px; text-align: right; ">Jml melapor</span>
            <span  style="width: 50px; height: 30px; display: inline-block; vertical-align: middle; border: 1px solid black; margin-left: 10px; padding: 8px 0 0 8px; ">{{ ($dataPuskesmas->current->jumlah_laporan_poskesdes ?? 0) }}</span>
        </div>
    </div>
  </div>

  <table style="margin-top: 20px; ">
    <thead>
      <tr>
        <td class="column3 textCenter" rowspan="2">No</td>
        <td class="column15 textCenter" rowspan="2">JENIS PENYAKIT</td>
        <td class="column3 textCenter" rowspan="2">ICD  10</td>
        <td class="column65 textCenter" colspan="13">JUMLAH KASUS BARU (Umur dan Jenis Kelamin)</td>
        <td class="column15 textCenter" colspan="3">JUMLAH KASUS LAMA</td>
      </tr>
      <tr>
        <td class="column3 textCenter">0-4 th</td>
        <td class="column3 textCenter">5-6 th</td>
        <td class="column3 textCenter">7-11 th</td>
        <td class="column3 textCenter">12 th</td>
        <td class="column3 textCenter">13-14 th</td>
        <td class="column3 textCenter">15-18 th</td>
        <td class="column3 textCenter">19-34 th</td>
        <td class="column3 textCenter">35-44 th</td>
        <td class="column3 textCenter">45-64 th</td>
        <td class="column3 textCenter">>64 th</td>
        <td class="column3 textCenter">L</td>
        <td class="column3 textCenter">P</td>
        <td class="column3 textCenter">JML</td>
        <td class="column3 textCenter">L</td>
        <td class="column3 textCenter">P</td>
        <td class="column3 textCenter">JML</td>
      </tr>
      <tr>
        <td class="column3 textCenter columGrey">1</td>
        <td class="column15 textCenter columGrey">2</td>
        <td class="column3 textCenter columGrey">3</td>
        <td class="column3 textCenter columGrey">4</td>
        <td class="column3 textCenter columGrey">5</td>
        <td class="column3 textCenter columGrey">6</td>
        <td class="column3 textCenter columGrey">7</td>
        <td class="column3 textCenter columGrey">8</td>
        <td class="column3 textCenter columGrey">9</td>
        <td class="column3 textCenter columGrey">10</td>
        <td class="column3 textCenter columGrey">11</td>
        <td class="column3 textCenter columGrey">12</td>
        <td class="column3 textCenter columGrey">>13</td>
        <td class="column3 textCenter columGrey">14</td>
        <td class="column3 textCenter columGrey">15</td>
        <td class="column3 textCenter columGrey">16</td>
        <td class="column3 textCenter columGrey">17</td>
        <td class="column3 textCenter columGrey">18</td>
        <td class="column3 textCenter columGrey">19</td>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td class="column3 textCenter">1</td>
        <td class="column15">Persistensi gigi sulung</td>
        <td class="column3">K00.6</td>
        <td class="column3">{{ ($dataPuskesmas->current->k0_4_tahun ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->k0_6_tahun ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->k0_11_tahun ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->k0_12_tahun ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->k0_14_tahun ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->k0_18_tahun ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->k0_34_tahun ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->k0_44_tahun ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->k0_64_tahun ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->k0_lebih_64_tahun ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->k0_l ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->k0_p ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->k0_4_tahun ?? 0) + ($dataPuskesmas->current->k0_6_tahun ?? 0) + ($dataPuskesmas->current->k0_11_tahun ?? 0) + ($dataPuskesmas->current->k0_12_tahun ?? 0) + ($dataPuskesmas->current->k0_14_tahun ?? 0) + ($dataPuskesmas->current->k0_18_tahun ?? 0) + ($dataPuskesmas->current->k0_34_tahun ?? 0) + ($dataPuskesmas->current->k0_44_tahun ?? 0) + ($dataPuskesmas->current->k0_64_tahun ?? 0) + ($dataPuskesmas->current->k0_lebih_64_tahun ?? 0) + ($dataPuskesmas->current->k0_l ?? 0) + ($dataPuskesmas->current->k0_p ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->previous->k0_l_lama ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->previous->k0_p_lama ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->previous->k0_l_lama ?? 0) + ($dataPuskesmas->previous->k0_p_lama ?? 0) }}</td>
      </tr>
      <tr>
        <td class="column3 textCenter">2</td>
        <td class="column15">Impaksi M3 klasifikasi IA</td>
        <td class="column3">K01.1</td>
        <td class="column3">{{ ($dataPuskesmas->current->k1_4_tahun ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->k1_6_tahun ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->k1_11_tahun ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->k1_12_tahun ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->k1_14_tahun ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->k1_18_tahun ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->k1_34_tahun ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->k1_44_tahun ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->k1_64_tahun ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->k1_lebih_64_tahun ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->k1_l ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->k1_p ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->k1_4_tahun ?? 0) + ($dataPuskesmas->current->k1_6_tahun ?? 0) + ($dataPuskesmas->current->k1_11_tahun ?? 0) + ($dataPuskesmas->current->k1_12_tahun ?? 0) + ($dataPuskesmas->current->k1_14_tahun ?? 0) + ($dataPuskesmas->current->k1_18_tahun ?? 0) + ($dataPuskesmas->current->k1_34_tahun ?? 0) + ($dataPuskesmas->current->k1_44_tahun ?? 0) + ($dataPuskesmas->current->k1_64_tahun ?? 0) + ($dataPuskesmas->current->k1_lebih_64_tahun ?? 0) + ($dataPuskesmas->current->k1_l ?? 0) + ($dataPuskesmas->current->k1_p ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->previous->k1_l_lama ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->previous->k1_p_lama ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->previous->k1_l_lama ?? 0) + ($dataPuskesmas->previous->k1_p_lama ?? 0) }}</td>
      </tr>
      <tr>
        <td class="column3 textCenter">3</td>
        <td class="column15">Karies gigi</td>
        <td class="column3">K02</td>
        <td class="column3">{{ ($dataPuskesmas->current->k2_4_tahun ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->k2_6_tahun ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->k2_11_tahun ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->k2_12_tahun ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->k2_14_tahun ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->k2_18_tahun ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->k2_34_tahun ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->k2_44_tahun ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->k2_64_tahun ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->k2_lebih_64_tahun ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->k2_l ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->k2_p ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->k2_4_tahun ?? 0) + ($dataPuskesmas->current->k2_6_tahun ?? 0) + ($dataPuskesmas->current->k2_11_tahun ?? 0) + ($dataPuskesmas->current->k2_12_tahun ?? 0) + ($dataPuskesmas->current->k2_14_tahun ?? 0) + ($dataPuskesmas->current->k2_18_tahun ?? 0) + ($dataPuskesmas->current->k2_34_tahun ?? 0) + ($dataPuskesmas->current->k2_44_tahun ?? 0) + ($dataPuskesmas->current->k2_64_tahun ?? 0) + ($dataPuskesmas->current->k2_lebih_64_tahun ?? 0) + ($dataPuskesmas->current->k2_l ?? 0) + ($dataPuskesmas->current->k2_p ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->previous->k2_l_lama ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->previous->k2_p_lama ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->previous->k2_l_lama ?? 0) + ($dataPuskesmas->previous->k2_p_lama ?? 0) }}</td>
      </tr>
      <tr>
        <td class="column3 textCenter">4</td>
        <td class="column15">Penyakit jaringan keras gigi lainnya</td>
        <td class="column3">K03</td>
        <td class="column3">{{ ($dataPuskesmas->current->k3_4_tahun ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->k3_6_tahun ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->k3_11_tahun ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->k3_12_tahun ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->k3_14_tahun ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->k3_18_tahun ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->k3_34_tahun ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->k3_44_tahun ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->k3_64_tahun ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->k3_lebih_64_tahun ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->k3_l ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->k3_p ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->k3_4_tahun ?? 0) + ($dataPuskesmas->current->k3_6_tahun ?? 0) + ($dataPuskesmas->current->k3_11_tahun ?? 0) + ($dataPuskesmas->current->k3_12_tahun ?? 0) + ($dataPuskesmas->current->k3_14_tahun ?? 0) + ($dataPuskesmas->current->k3_18_tahun ?? 0) + ($dataPuskesmas->current->k3_34_tahun ?? 0) + ($dataPuskesmas->current->k3_44_tahun ?? 0) + ($dataPuskesmas->current->k3_64_tahun ?? 0) + ($dataPuskesmas->current->k3_lebih_64_tahun ?? 0) + ($dataPuskesmas->current->k3_l ?? 0) + ($dataPuskesmas->current->k3_p ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->previous->k3_l_lama ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->previous->k3_p_lama ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->previous->k3_l_lama ?? 0) + ($dataPuskesmas->previous->k3_p_lama ?? 0) }}</td>
      </tr>
      <tr>
        <td class="column3 textCenter">5</td>
        <td class="column15">Penyakit pulpa dan jaringan periapikal</td>
        <td class="column3">K04</td>
        <td class="column3">{{ ($dataPuskesmas->current->k4_4_tahun ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->k4_6_tahun ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->k4_11_tahun ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->k4_12_tahun ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->k4_14_tahun ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->k4_18_tahun ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->k4_34_tahun ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->k4_44_tahun ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->k4_64_tahun ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->k4_lebih_64_tahun ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->k4_l ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->k4_p ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->k4_4_tahun ?? 0) + ($dataPuskesmas->current->k4_6_tahun ?? 0) + ($dataPuskesmas->current->k4_11_tahun ?? 0) + ($dataPuskesmas->current->k4_12_tahun ?? 0) + ($dataPuskesmas->current->k4_14_tahun ?? 0) + ($dataPuskesmas->current->k4_18_tahun ?? 0) + ($dataPuskesmas->current->k4_34_tahun ?? 0) + ($dataPuskesmas->current->k4_44_tahun ?? 0) + ($dataPuskesmas->current->k4_64_tahun ?? 0) + ($dataPuskesmas->current->k4_lebih_64_tahun ?? 0) + ($dataPuskesmas->current->k4_l ?? 0) + ($dataPuskesmas->current->k4_p ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->previous->k4_l_lama ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->previous->k4_p_lama ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->previous->k4_l_lama ?? 0) + ($dataPuskesmas->previous->k4_p_lama ?? 0) }}</td>
      </tr>
      <tr>
        <td class="column3 textCenter">6</td>
        <td class="column15">Gingivitis dan penyakit periodental</td>
        <td class="column3">K05</td>
        <td class="column3">{{ ($dataPuskesmas->current->k5_4_tahun ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->k5_6_tahun ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->k5_11_tahun ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->k5_12_tahun ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->k5_14_tahun ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->k5_18_tahun ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->k5_34_tahun ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->k5_44_tahun ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->k5_64_tahun ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->k5_lebih_64_tahun ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->k5_l ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->k5_p ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->k5_4_tahun ?? 0) + ($dataPuskesmas->current->k5_6_tahun ?? 0) + ($dataPuskesmas->current->k5_11_tahun ?? 0) + ($dataPuskesmas->current->k5_12_tahun ?? 0) + ($dataPuskesmas->current->k5_14_tahun ?? 0) + ($dataPuskesmas->current->k5_18_tahun ?? 0) + ($dataPuskesmas->current->k5_34_tahun ?? 0) + ($dataPuskesmas->current->k5_44_tahun ?? 0) + ($dataPuskesmas->current->k5_64_tahun ?? 0) + ($dataPuskesmas->current->k5_lebih_64_tahun ?? 0) + ($dataPuskesmas->current->k5_l ?? 0) + ($dataPuskesmas->current->k5_p ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->previous->k5_l_lama ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->previous->k5_p_lama ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->previous->k5_l_lama ?? 0) + ($dataPuskesmas->previous->k5_p_lama ?? 0) }}</td>
      </tr>
      <tr>
        <td class="column3 textCenter">7</td>
        <td class="column15">Anomali dentofasial</td>
        <td class="column3">K07</td>
        <td class="column3">{{ ($dataPuskesmas->current->k7_4_tahun ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->k7_6_tahun ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->k7_11_tahun ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->k7_12_tahun ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->k7_14_tahun ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->k7_18_tahun ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->k7_34_tahun ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->k7_44_tahun ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->k7_64_tahun ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->k7_lebih_64_tahun ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->k7_l ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->k7_p ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->k7_4_tahun ?? 0) + ($dataPuskesmas->current->k7_6_tahun ?? 0) + ($dataPuskesmas->current->k7_11_tahun ?? 0) + ($dataPuskesmas->current->k7_12_tahun ?? 0) + ($dataPuskesmas->current->k7_14_tahun ?? 0) + ($dataPuskesmas->current->k7_18_tahun ?? 0) + ($dataPuskesmas->current->k7_34_tahun ?? 0) + ($dataPuskesmas->current->k7_44_tahun ?? 0) + ($dataPuskesmas->current->k7_64_tahun ?? 0) + ($dataPuskesmas->current->k7_lebih_64_tahun ?? 0) + ($dataPuskesmas->current->k7_l ?? 0) + ($dataPuskesmas->current->k7_p ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->previous->k7_l_lama ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->previous->k7_p_lama ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->previous->k7_l_lama ?? 0) + ($dataPuskesmas->previous->k7_p_lama ?? 0) }}</td>
      </tr>
      <tr>
        <td class="column3 textCenter">8</td>
        <td class="column15">Gangguan gigi dan jaringan penyangga lainnya</td>
        <td class="column3">K08</td>
        <td class="column3">{{ ($dataPuskesmas->current->k8_4_tahun ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->k8_6_tahun ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->k8_11_tahun ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->k8_12_tahun ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->k8_14_tahun ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->k8_18_tahun ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->k8_34_tahun ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->k8_44_tahun ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->k8_64_tahun ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->k8_lebih_64_tahun ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->k8_l ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->k8_p ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->k8_4_tahun ?? 0) + ($dataPuskesmas->current->k8_6_tahun ?? 0) + ($dataPuskesmas->current->k8_11_tahun ?? 0) + ($dataPuskesmas->current->k8_12_tahun ?? 0) + ($dataPuskesmas->current->k8_14_tahun ?? 0) + ($dataPuskesmas->current->k8_18_tahun ?? 0) + ($dataPuskesmas->current->k8_34_tahun ?? 0) + ($dataPuskesmas->current->k8_44_tahun ?? 0) + ($dataPuskesmas->current->k8_64_tahun ?? 0) + ($dataPuskesmas->current->k8_lebih_64_tahun ?? 0) + ($dataPuskesmas->current->k8_l ?? 0) + ($dataPuskesmas->current->k8_p ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->previous->k8_l_lama ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->previous->k8_p_lama ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->previous->k8_l_lama ?? 0) + ($dataPuskesmas->previous->k8_p_lama ?? 0) }}</td>
      </tr>
      <tr>
        <td class="column3 textCenter">9</td>
        <td class="column15">Stomatitis dan lesi-lesi berhubungan</td>
        <td class="column3">K12</td>
        <td class="column3">{{ ($dataPuskesmas->current->k12_4_tahun ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->k12_6_tahun ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->k12_11_tahun ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->k12_12_tahun ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->k12_14_tahun ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->k12_18_tahun ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->k12_34_tahun ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->k12_44_tahun ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->k12_64_tahun ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->k12_lebih_64_tahun ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->k12_l ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->k12_p ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->k12_4_tahun ?? 0) + ($dataPuskesmas->current->k12_6_tahun ?? 0) + ($dataPuskesmas->current->k12_11_tahun ?? 0) + ($dataPuskesmas->current->k12_12_tahun ?? 0) + ($dataPuskesmas->current->k12_14_tahun ?? 0) + ($dataPuskesmas->current->k12_18_tahun ?? 0) + ($dataPuskesmas->current->k12_34_tahun ?? 0) + ($dataPuskesmas->current->k12_44_tahun ?? 0) + ($dataPuskesmas->current->k12_64_tahun ?? 0) + ($dataPuskesmas->current->k12_lebih_64_tahun ?? 0) + ($dataPuskesmas->current->k12_l ?? 0) + ($dataPuskesmas->current->k12_p ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->previous->k12_l_lama ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->previous->k12_p_lama ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->previous->k12_l_lama ?? 0) + ($dataPuskesmas->previous->k12_p_lama ?? 0) }}</td>
      </tr>
      <tr>
        <td class="column3 textCenter">10</td>
        <td class="column15">Angular Cheilitis</td>
        <td class="column3">K13.0</td>
        <td class="column3">{{ ($dataPuskesmas->current->k13_4_tahun ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->k13_6_tahun ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->k13_11_tahun ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->k13_12_tahun ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->k13_14_tahun ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->k13_18_tahun ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->k13_34_tahun ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->k13_44_tahun ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->k13_64_tahun ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->k13_lebih_64_tahun ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->k13_l ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->k13_p ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->k13_4_tahun ?? 0) + ($dataPuskesmas->current->k13_6_tahun ?? 0) + ($dataPuskesmas->current->k13_11_tahun ?? 0) + ($dataPuskesmas->current->k13_12_tahun ?? 0) + ($dataPuskesmas->current->k13_14_tahun ?? 0) + ($dataPuskesmas->current->k13_18_tahun ?? 0) + ($dataPuskesmas->current->k13_34_tahun ?? 0) + ($dataPuskesmas->current->k13_44_tahun ?? 0) + ($dataPuskesmas->current->k13_64_tahun ?? 0) + ($dataPuskesmas->current->k13_lebih_64_tahun ?? 0) + ($dataPuskesmas->current->k13_l ?? 0) + ($dataPuskesmas->current->k13_p ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->previous->k13_l_lama ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->previous->k13_p_lama ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->previous->k13_l_lama ?? 0) + ($dataPuskesmas->previous->k13_p_lama ?? 0) }}</td>
      </tr>
      <tr>
        <td class="column3 textCenter">11</td>
        <td class="column15">Eritema Multiformis</td>
        <td class="column3">L51</td>
        <td class="column3">{{ ($dataPuskesmas->current->k51_4_tahun ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->k51_6_tahun ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->k51_11_tahun ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->k51_12_tahun ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->k51_14_tahun ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->k51_18_tahun ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->k51_34_tahun ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->k51_44_tahun ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->k51_64_tahun ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->k51_lebih_64_tahun ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->k51_l ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->k51_p ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->k51_4_tahun ?? 0) + ($dataPuskesmas->current->k51_6_tahun ?? 0) + ($dataPuskesmas->current->k51_11_tahun ?? 0) + ($dataPuskesmas->current->k51_12_tahun ?? 0) + ($dataPuskesmas->current->k51_14_tahun ?? 0) + ($dataPuskesmas->current->k51_18_tahun ?? 0) + ($dataPuskesmas->current->k51_34_tahun ?? 0) + ($dataPuskesmas->current->k51_44_tahun ?? 0) + ($dataPuskesmas->current->k51_64_tahun ?? 0) + ($dataPuskesmas->current->k51_lebih_64_tahun ?? 0) + ($dataPuskesmas->current->k51_l ?? 0) + ($dataPuskesmas->current->k51_p ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->previous->k51_l_lama ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->previous->k51_p_lama ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->previous->k51_l_lama ?? 0) + ($dataPuskesmas->previous->k51_p_lama ?? 0) }}</td>
      </tr>
      <tr>
        <td class="column3 textCenter">12</td>
        <td class="column15">Nyeri orfasial</td>
        <td class="column3">R.51</td>
        <td class="column3">{{ ($dataPuskesmas->current->r51_4_tahun ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->r51_6_tahun ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->r51_11_tahun ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->r51_12_tahun ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->r51_14_tahun ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->r51_18_tahun ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->r51_34_tahun ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->r51_44_tahun ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->r51_64_tahun ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->r51_lebih_64_tahun ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->r51_l ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->r51_p ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->r51_4_tahun ?? 0) + ($dataPuskesmas->current->r51_6_tahun ?? 0) + ($dataPuskesmas->current->r51_11_tahun ?? 0) + ($dataPuskesmas->current->r51_12_tahun ?? 0) + ($dataPuskesmas->current->r51_14_tahun ?? 0) + ($dataPuskesmas->current->r51_18_tahun ?? 0) + ($dataPuskesmas->current->r51_34_tahun ?? 0) + ($dataPuskesmas->current->r51_44_tahun ?? 0) + ($dataPuskesmas->current->r51_64_tahun ?? 0) + ($dataPuskesmas->current->r51_lebih_64_tahun ?? 0) + ($dataPuskesmas->current->r51_l ?? 0) + ($dataPuskesmas->current->r51_p ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->previous->r51_l_lama ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->previous->r51_p_lama ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->previous->r51_l_lama ?? 0) + ($dataPuskesmas->previous->r51_p_lama ?? 0) }}</td>
      </tr>
      <tr>
        <td class="column3 textCenter">13</td>
        <td class="column15">Fraktur mahkota yang tidak merusak pulpa</td>
        <td class="column3">S02.5</td>
        <td class="column3">{{ ($dataPuskesmas->current->s2_4_tahun ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->s2_6_tahun ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->s2_11_tahun ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->s2_12_tahun ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->s2_14_tahun ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->s2_18_tahun ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->s2_34_tahun ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->s2_44_tahun ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->s2_64_tahun ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->s2_lebih_64_tahun ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->s2_l ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->s2_p ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->s2_4_tahun ?? 0) + ($dataPuskesmas->current->s2_6_tahun ?? 0) + ($dataPuskesmas->current->s2_11_tahun ?? 0) + ($dataPuskesmas->current->s2_12_tahun ?? 0) + ($dataPuskesmas->current->s2_14_tahun ?? 0) + ($dataPuskesmas->current->s2_18_tahun ?? 0) + ($dataPuskesmas->current->s2_34_tahun ?? 0) + ($dataPuskesmas->current->s2_44_tahun ?? 0) + ($dataPuskesmas->current->s2_64_tahun ?? 0) + ($dataPuskesmas->current->s2_lebih_64_tahun ?? 0) + ($dataPuskesmas->current->s2_l ?? 0) + ($dataPuskesmas->current->s2_p ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->previous->s2_l_lama ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->previous->s2_p_lama ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->previous->s2_l_lama ?? 0) + ($dataPuskesmas->previous->s2_p_lama ?? 0) }}</td>
      </tr>
    </tbody>
  </table>
</body>

</html>