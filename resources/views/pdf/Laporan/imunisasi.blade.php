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

    .column17-5 {
      width: 17.5%;
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
    $totalJumlahPuskesmasPembantu = 0;
    $totalJumlahLaporPuskesmasPembantu = 0;
    $totalJumlahPoskesdes = 0;
    $totalJumlahLaporPoskesdes = 0;

    if (isset($dataPuskesmas->time)) {  // Access the first element of the data array
      // Access the bulan_tahun directly as it's an object
      $dateString = $dataPuskesmas->time; // Use '->' to access object properties
      
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
      @foreach (str_split($dataPuskesmas->id_laporan) as $digit)
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
            <span  style="width: 50px; height: 30px; display: inline-block; vertical-align: middle; border: 1px solid black; margin-left: 10px; padding: 8px 0 0 8px; ">{{ $totalJumlahPuskesmasPembantu }}</span>
        </div>
    </div>
    <div style="width: 200px; margin-left: 20px; display: inline-block; vertical-align: middle;  ">
        <div>
            <span  style="display: inline-block; vertical-align: middle; width: 120px; text-wrap: wrap; text-align: right; ">Jml Poskesdes/ bidan desa</span>
            <span  style="width: 50px; height: 30px; display: inline-block; vertical-align: middle; border: 1px solid black; margin-left: 10px; padding: 8px 0 0 8px; ">{{ $totalJumlahPoskesdes }}</span>
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
            <span  style="width: 50px; height: 30px; display: inline-block; vertical-align: middle; border: 1px solid black; margin-left: 10px; padding: 8px 0 0 8px; ">{{ $totalJumlahLaporPuskesmasPembantu }}</span>
        </div>
    </div>
    <div style="width: 200px; margin-left: 20px; display: inline-block; vertical-align: middle; ">
        <div>
            <span  style="display: inline-block; vertical-align: middle; width: 120px; text-align: right; ">Jml melapor</span>
            <span  style="width: 50px; height: 30px; display: inline-block; vertical-align: middle; border: 1px solid black; margin-left: 10px; padding: 8px 0 0 8px; ">{{ $totalJumlahLaporPoskesdes }}</span>
        </div>
    </div>
  </div>

  @php
    $rowspanCount = count($dataPuskesmas->desa);
  @endphp

  <table style="margin-top: 20px; ">
    <thead>
      <tr>
        <td class="column5 textCenter" rowspan="3" >No</td>
        <td class="column17-5 textCenter" rowspan="3" >Desa</td>
        <td class="column15 textCenter" rowspan="2" colspan="3">Sasaran Bayi</td>
        <td class="column15 textCenter" rowspan="2" colspan="3">Sasaran Surviving Infant</td>
        <td class="column45 textCenter" colspan="9">Hasil Imunisasi Bayi (0-11 bulan)</td>
        <td class="column2-5 textCenter columGrey" rowspan="{{ $rowspanCount + 4 }}" style="width: 20px; ">
            <span style="display: inline-block; transform: rotate(90deg); transform-origin: center; white-space: nowrap; margin: 0; width: 10px; ">
                Sambungan
            </span>
        </td>
      </tr>
      <tr>
        <td class="column5 textCenter" colspan="3">HB0<24 jam</td>
        <td class="column5 textCenter" colspan="3">HB0 1-7 hari</td>
        <td class="column5 textCenter" colspan="3">BCG</td>
      </tr>
      <tr>
        <td class="column5 textCenter" >L</td>
        <td class="column5 textCenter" >P</td>
        <td class="column5 textCenter" >JML</td>
        <td class="column5 textCenter" >L</td>
        <td class="column5 textCenter" >P</td>
        <td class="column5 textCenter" >JML</td>
        <td class="column5 textCenter" >L</td>
        <td class="column5 textCenter" >P</td>
        <td class="column5 textCenter" >JML</td>
        <td class="column5 textCenter" >L</td>
        <td class="column5 textCenter" >P</td>
        <td class="column5 textCenter" >JML</td>
        <td class="column5 textCenter" >L</td>
        <td class="column5 textCenter" >P</td>
        <td class="column5 textCenter" >JML</td>
      </tr>
      <tr>
        <td class="column5 textCenter columGrey" >1</td>
        <td class="column15 textCenter columGrey" >2</td>
        <td class="column5 textCenter columGrey" >3</td>
        <td class="column5 textCenter columGrey" >4</td>
        <td class="column5 textCenter columGrey" >5</td>
        <td class="column5 textCenter columGrey" >6</td>
        <td class="column5 textCenter columGrey" >7</td>
        <td class="column5 textCenter columGrey" >8</td>
        <td class="column5 textCenter columGrey" >9</td>
        <td class="column5 textCenter columGrey" >10</td>
        <td class="column5 textCenter columGrey" >11</td>
        <td class="column5 textCenter columGrey" >12</td>
        <td class="column5 textCenter columGrey" >13</td>
        <td class="column5 textCenter columGrey" >14</td>
        <td class="column5 textCenter columGrey" >15</td>
        <td class="column5 textCenter columGrey" >16</td>
        <td class="column5 textCenter columGrey" >17</td>
      </tr>
    </thead>
    <tbody>
      @foreach ($dataPuskesmas->desa as $index => $data)
        @php
          $imunisasi = \App\Models\Imunisasi::where('desa_kelurahan_puskesmas_id', $data['id'])->get();

          if (isset($imunisasi[0])) {
            $totalJumlahPuskesmasPembantu += $imunisasi[0]['jumlah_puskesmas_pembantu'];
            $totalJumlahLaporPuskesmasPembantu += $imunisasi[0]['jumlah_lapor_puskesmas_pembantu'];
            $totalJumlahPoskesdes += $imunisasi[0]['jumlah_poskesdes_bidan_desa'];
            $totalJumlahLaporPoskesdes += $imunisasi[0]['jumlah_lapor_poskesdes'];
          }
        @endphp

        <tr>
          <td class="column5 textCenter " >{{ $index+1 }}</td>
          <td class="column15 " >{{ $data['name'] ?? "" }}</td>
          <td class="column5 textCenter " >{{ $imunisasi[0]['sasaran_bayi_l'] ?? 0 }}</td>
          <td class="column5 textCenter " >{{ $imunisasi[0]['sasaran_bayi_p'] ?? 0 }}</td>
          <td class="column5 textCenter " >{{ $imunisasi[0]['sasaran_bayi_jumlah'] ?? 0 }}</td>
          <td class="column5 textCenter " >{{ $imunisasi[0]['sasaran_surviving_infant_l'] ?? 0 }}</td>
          <td class="column5 textCenter " >{{ $imunisasi[0]['sasaran_surviving_infant_p'] ?? 0 }}</td>
          <td class="column5 textCenter " >{{ $imunisasi[0]['sasaran_surviving_infant_jumlah'] ?? 0 }}</td>
          <td class="column5 textCenter " >{{ $imunisasi[0]['hbo_24_jam_l'] ?? 0 }}</td>
          <td class="column5 textCenter " >{{ $imunisasi[0]['hbo_24_jam_p'] ?? 0 }}</td>
          <td class="column5 textCenter " >{{ $imunisasi[0]['hbo_24_jam_jumlah'] ?? 0 }}</td>
          <td class="column5 textCenter " >{{ $imunisasi[0]['hbo_seminggu_l'] ?? 0 }}</td>
          <td class="column5 textCenter " >{{ $imunisasi[0]['hbo_seminggu_p'] ?? 0 }}</td>
          <td class="column5 textCenter " >{{ $imunisasi[0]['hbo_seminggu_jumlah'] ?? 0 }}</td>
          <td class="column5 textCenter " >{{ $imunisasi[0]['bcg_seminggu_l'] ?? 0 }}</td>
          <td class="column5 textCenter " >{{ $imunisasi[0]['bcg_seminggu_p'] ?? 0 }}</td>
          <td class="column5 textCenter " >{{ $imunisasi[0]['bcg_seminggu_jumlah'] ?? 0 }}</td>
        </tr>
      @endforeach
    </tbody>
  </table>

  <div style="page-break-before: always;"></div>
  <p>LAPORAN BULANAN IMUNISASI (lanjutan) </p>
  <table style="margin-top: 20px; ">
    <thead>
      <tr>
        <td class="column5 textCenter" rowspan="3" >No</td>
        <td class="column17-5 textCenter" rowspan="3" >Desa</td>
        <td class="column75 textCenter" colspan="15">Hasil Imunisasi Bayi (0-11 bulan)</td>
        <td class="column2-5 textCenter columGrey" rowspan="{{ $rowspanCount + 4 }}" style="width: 20px; ">
            <span style="display: inline-block; transform: rotate(90deg); transform-origin: center; white-space: nowrap; margin: 0; width: 10px; ">
                Sambungan
            </span>
        </td>
      </tr>
      <tr>
        <td class="column5 textCenter" colspan="3">Polio 1</td>
        <td class="column5 textCenter" colspan="3">DPT-HB-Hib1</td>
        <td class="column5 textCenter" colspan="3">Polio 2</td>
        <td class="column5 textCenter" colspan="3">DPT-HB-Hib2</td>
        <td class="column5 textCenter" colspan="3">Polio 3</td>
      </tr>
      <tr>
        <td class="column5 textCenter" >L</td>
        <td class="column5 textCenter" >P</td>
        <td class="column5 textCenter" >JML</td>
        <td class="column5 textCenter" >L</td>
        <td class="column5 textCenter" >P</td>
        <td class="column5 textCenter" >JML</td>
        <td class="column5 textCenter" >L</td>
        <td class="column5 textCenter" >P</td>
        <td class="column5 textCenter" >JML</td>
        <td class="column5 textCenter" >L</td>
        <td class="column5 textCenter" >P</td>
        <td class="column5 textCenter" >JML</td>
        <td class="column5 textCenter" >L</td>
        <td class="column5 textCenter" >P</td>
        <td class="column5 textCenter" >JML</td>
      </tr>
      <tr>
        <td class="column5 textCenter columGrey" >1</td>
        <td class="column15 textCenter columGrey" >2</td>
        <td class="column5 textCenter columGrey" >18</td>
        <td class="column5 textCenter columGrey" >19</td>
        <td class="column5 textCenter columGrey" >20</td>
        <td class="column5 textCenter columGrey" >21</td>
        <td class="column5 textCenter columGrey" >22</td>
        <td class="column5 textCenter columGrey" >23</td>
        <td class="column5 textCenter columGrey" >24</td>
        <td class="column5 textCenter columGrey" >25</td>
        <td class="column5 textCenter columGrey" >26</td>
        <td class="column5 textCenter columGrey" >27</td>
        <td class="column5 textCenter columGrey" >28</td>
        <td class="column5 textCenter columGrey" >29</td>
        <td class="column5 textCenter columGrey" >30</td>
        <td class="column5 textCenter columGrey" >31</td>
        <td class="column5 textCenter columGrey" >32</td>
      </tr>
    </thead>
    <tbody>
      @foreach ($dataPuskesmas->desa as $index => $data)
        @php
          $imunisasi = \App\Models\Imunisasi::where('desa_kelurahan_puskesmas_id', $data['id'])->get();
        @endphp
        <tr>
          <td class="column5 textCenter " >{{ $index+1 }}</td>
          <td class="column15 " >{{ $data['name'] ?? "" }}</td>
          <td class="column5 textCenter " >{{ $imunisasi[0]['polio_1_l'] ?? 0 }}</td>
          <td class="column5 textCenter " >{{ $imunisasi[0]['polio_1_p'] ?? 0 }}</td>
          <td class="column5 textCenter " >{{ $imunisasi[0]['polio_1_jumlah'] ?? 0 }}</td>
          <td class="column5 textCenter " >{{ $imunisasi[0]['dpt_hb_hib1_l'] ?? 0 }}</td>
          <td class="column5 textCenter " >{{ $imunisasi[0]['dpt_hb_hib1_p'] ?? 0 }}</td>
          <td class="column5 textCenter " >{{ $imunisasi[0]['dpt_hb_hib1_jumlah'] ?? 0 }}</td>
          <td class="column5 textCenter " >{{ $imunisasi[0]['polio_2_l'] ?? 0 }}</td>
          <td class="column5 textCenter " >{{ $imunisasi[0]['polio_2_p'] ?? 0 }}</td>
          <td class="column5 textCenter " >{{ $imunisasi[0]['polio_2_jumlah'] ?? 0 }}</td>
          <td class="column5 textCenter " >{{ $imunisasi[0]['dpt_hb_hib2_l'] ?? 0 }}</td>
          <td class="column5 textCenter " >{{ $imunisasi[0]['dpt_hb_hib2_p'] ?? 0 }}</td>
          <td class="column5 textCenter " >{{ $imunisasi[0]['dpt_hb_hib2_jumlah'] ?? 0 }}</td>
          <td class="column5 textCenter " >{{ $imunisasi[0]['polio_3_l'] ?? 0 }}</td>
          <td class="column5 textCenter " >{{ $imunisasi[0]['polio_3_p'] ?? 0 }}</td>
          <td class="column5 textCenter " >{{ $imunisasi[0]['polio_3_jumlah'] ?? 0 }}</td>
        </tr>
      @endforeach
    </tbody>
  </table>
  
  <div style="page-break-before: always;"></div>
  <p>LAPORAN BULANAN IMUNISASI (lanjutan) </p>
  <table style="margin-top: 20px; ">
    <thead>
      <tr>
        <td class="column5 textCenter" rowspan="3" >No</td>
        <td class="column17-5 textCenter" rowspan="3" >Desa</td>
        <td class="column75 textCenter" colspan="15">Hasil Imunisasi Bayi (0-11 bulan)</td>
        <td class="column2-5 textCenter columGrey" rowspan="{{ $rowspanCount + 4 }}" style="width: 20px; ">
            <span style="display: inline-block; transform: rotate(90deg); transform-origin: center; white-space: nowrap; margin: 0; width: 10px; ">
                Sambungan
            </span>
        </td>
      </tr>
      <tr>
        <td class="column5 textCenter" colspan="3">DPT HB-Hib3</td>
        <td class="column5 textCenter" colspan="3">Polio 4</td>
        <td class="column5 textCenter" colspan="3">IPV</td>
        <td class="column5 textCenter" colspan="3">Campak/MR</td>
        <td class="column5 textCenter" colspan="3">Imunisasi Dasar Lengkap</td>
      </tr>
      <tr>
        <td class="column5 textCenter" >L</td>
        <td class="column5 textCenter" >P</td>
        <td class="column5 textCenter" >JML</td>
        <td class="column5 textCenter" >L</td>
        <td class="column5 textCenter" >P</td>
        <td class="column5 textCenter" >JML</td>
        <td class="column5 textCenter" >L</td>
        <td class="column5 textCenter" >P</td>
        <td class="column5 textCenter" >JML</td>
        <td class="column5 textCenter" >L</td>
        <td class="column5 textCenter" >P</td>
        <td class="column5 textCenter" >JML</td>
        <td class="column5 textCenter" >L</td>
        <td class="column5 textCenter" >P</td>
        <td class="column5 textCenter" >JML</td>
      </tr>
      <tr>
        <td class="column5 textCenter columGrey" >1</td>
        <td class="column15 textCenter columGrey" >2</td>
        <td class="column5 textCenter columGrey" >33</td>
        <td class="column5 textCenter columGrey" >34</td>
        <td class="column5 textCenter columGrey" >35</td>
        <td class="column5 textCenter columGrey" >36</td>
        <td class="column5 textCenter columGrey" >37</td>
        <td class="column5 textCenter columGrey" >38</td>
        <td class="column5 textCenter columGrey" >39</td>
        <td class="column5 textCenter columGrey" >40</td>
        <td class="column5 textCenter columGrey" >41</td>
        <td class="column5 textCenter columGrey" >42</td>
        <td class="column5 textCenter columGrey" >43</td>
        <td class="column5 textCenter columGrey" >44</td>
        <td class="column5 textCenter columGrey" >45</td>
        <td class="column5 textCenter columGrey" >46</td>
        <td class="column5 textCenter columGrey" >47</td>
      </tr>
    </thead>
    <tbody>
      @foreach ($dataPuskesmas->desa as $index => $data)
        @php
          $imunisasi = \App\Models\Imunisasi::where('desa_kelurahan_puskesmas_id', $data['id'])->get();
        @endphp
        <tr>
          <td class="column5 textCenter " >{{ $index+1 }}</td>
          <td class="column15 " >{{ $data['name'] ?? "" }}</td>
          <td class="column5 textCenter " >{{ $imunisasi[0]['dpt_hb_hib3_l'] ?? 0 }}</td>
          <td class="column5 textCenter " >{{ $imunisasi[0]['dpt_hb_hib3_p'] ?? 0 }}</td>
          <td class="column5 textCenter " >{{ $imunisasi[0]['dpt_hb_hib3_jumlah'] ?? 0 }}</td>
          <td class="column5 textCenter " >{{ $imunisasi[0]['polio_4_l'] ?? 0 }}</td>
          <td class="column5 textCenter " >{{ $imunisasi[0]['polio_4_p'] ?? 0 }}</td>
          <td class="column5 textCenter " >{{ $imunisasi[0]['polio_4_jumlah'] ?? 0 }}</td>
          <td class="column5 textCenter " >{{ $imunisasi[0]['ipv_l'] ?? 0 }}</td>
          <td class="column5 textCenter " >{{ $imunisasi[0]['ipv_p'] ?? 0 }}</td>
          <td class="column5 textCenter " >{{ $imunisasi[0]['ipv_jumlah'] ?? 0 }}</td>
          <td class="column5 textCenter " >{{ $imunisasi[0]['campak_l'] ?? 0 }}</td>
          <td class="column5 textCenter " >{{ $imunisasi[0]['campak_p'] ?? 0 }}</td>
          <td class="column5 textCenter " >{{ $imunisasi[0]['campak_jumlah'] ?? 0 }}</td>
          <td class="column5 textCenter " >{{ $imunisasi[0]['dasar_l'] ?? 0 }}</td>
          <td class="column5 textCenter " >{{ $imunisasi[0]['dasar_p'] ?? 0 }}</td>
          <td class="column5 textCenter " >{{ $imunisasi[0]['dasar_jumlah'] ?? 0 }}</td>
        </tr>
      @endforeach
    </tbody>
  </table>

  <div style="page-break-before: always;"></div>
  <p>LAPORAN BULANAN IMUNISASI (lanjutan) </p>
  <table style="margin-top: 20px; ">
    <thead>
      <tr>
        <td class="column5 textCenter" rowspan="3" >No</td>
        <td class="column15 textCenter" rowspan="3" >Desa</td>
        <td class="column15 textCenter" rowspan="2" colspan="3">Sasaran BADUTA</td>
        <td class="column30 textCenter" colspan="6">Hasil Imunisasi Lanjutan BADUTA</td>
        <td class="column7-5 textCenter" rowspan="3">Sasaran WUS</td>
        <td class="column25 textCenter" colspan="5" rowspan="2">Hasil Imunisasi Lanjutan  Td Pada WUS</td>
      </tr>
      <tr>
        <td class="column5 textCenter" colspan="3">DPT-HB-Hib4</td>
        <td class="column5 textCenter" colspan="3">DPT-HB-Hib4</td>
      </tr>
      <tr>
        <td class="column5 textCenter" >L</td>
        <td class="column5 textCenter" >P</td>
        <td class="column5 textCenter" >JML</td>
        <td class="column5 textCenter" >L</td>
        <td class="column5 textCenter" >P</td>
        <td class="column5 textCenter" >JML</td>
        <td class="column5 textCenter" >L</td>
        <td class="column5 textCenter" >P</td>
        <td class="column5 textCenter" >JML</td>
        <td class="column5 textCenter" >Td1</td>
        <td class="column5 textCenter" >Td2</td>
        <td class="column5 textCenter" >Td3</td>
        <td class="column5 textCenter" >Td4</td>
        <td class="column5 textCenter" >Td5</td>
      </tr>
      <tr>
          <td class="column5 textCenter columGrey " >1</td>
          <td class="column15 columGrey textCenter " >2</td>
          <td class="column5 columGrey textCenter " >48</td>
          <td class="column5 columGrey textCenter " >49</td>
          <td class="column5 columGrey textCenter " >50</td>
          <td class="column5 columGrey textCenter " >51</td>
          <td class="column5 columGrey textCenter " >52</td>
          <td class="column5 columGrey textCenter " >53</td>
          <td class="column5 columGrey textCenter " >54</td>
          <td class="column5 columGrey textCenter " >55</td>
          <td class="column5 columGrey textCenter " >56</td>
          <td class="column7-5 columGrey textCenter " >57</td>
          <td class="column5 columGrey textCenter " >58</td>
          <td class="column5 columGrey textCenter " >59</td>
          <td class="column5 columGrey textCenter " >60</td>
          <td class="column5 columGrey textCenter " >61</td>
          <td class="column5 columGrey textCenter " >62</td>
      </tr>
    </thead>
    <tbody>
      @foreach ($dataPuskesmas->desa as $index => $data)
        @php
          $imunisasi = \App\Models\Imunisasi::where('desa_kelurahan_puskesmas_id', $data['id'])->get();
        @endphp
        <tr>
          <td class="column5 textCenter " >{{ $index+1 }}</td>
          <td class="column15 " >{{ $data['name'] ?? "" }}</td>
          <td class="column5 textCenter " >{{ $imunisasi[0]['dpt_hb_hib4_l'] ?? 0 }}</td>
          <td class="column5 textCenter " >{{ $imunisasi[0]['dpt_hb_hib4_p'] ?? 0 }}</td>
          <td class="column5 textCenter " >{{ $imunisasi[0]['dpt_hb_hib4_jumlah'] ?? 0 }}</td>
          <td class="column5 textCenter " >{{ $imunisasi[0]['campak_2_l'] ?? 0 }}</td>
          <td class="column5 textCenter " >{{ $imunisasi[0]['campak_2_p'] ?? 0 }}</td>
          <td class="column5 textCenter " >{{ $imunisasi[0]['campak_2_jumlah'] ?? 0 }}</td>
          <td class="column5 textCenter " >{{ $imunisasi[0]['sasaran_campak2_l'] ?? 0 }}</td>
          <td class="column5 textCenter " >{{ $imunisasi[0]['sasaran_campak2_p'] ?? 0 }}</td>
          <td class="column5 textCenter " >{{ $imunisasi[0]['sasaran_campak2_jumlah'] ?? 0 }}</td>
          <td class="column7-5 textCenter " >{{ $imunisasi[0]['sasaran_wus'] ?? 0 }}</td>
          <td class="column5 textCenter " >{{ $imunisasi[0]['td1'] ?? 0 }}</td>
          <td class="column5 textCenter " >{{ $imunisasi[0]['td2'] ?? 0 }}</td>
          <td class="column5 textCenter " >{{ $imunisasi[0]['td3'] ?? 0 }}</td>
          <td class="column5 textCenter " >{{ $imunisasi[0]['td4'] ?? 0 }}</td>
          <td class="column5 textCenter " >{{ $imunisasi[0]['td5'] ?? 0 }}</td>
        </tr>
      @endforeach
    </tbody>
  </table>
</body>

</html>