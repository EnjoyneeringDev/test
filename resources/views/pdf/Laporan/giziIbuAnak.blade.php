<!DOCTYPE html>
<html>

<head>
  <title>LAPORAN BULANAN GIZI, KESEHATAN IBU DAN ANAK</title>
  <style>
    @page {
      size: A4 portrait;
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
    <p style="text-align: center;">Formulir 4</p>
    <p style="text-align: center;">LAPORAN BULANAN GIZI, KESEHATAN IBU DAN ANAK</p>
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

  @php
    $totalIbuAnak = [
      'jumlah_puskesmas_pembantu' => 0,
      'jumlah_lapor_puskesmas_pembantu' => 0,
      'jumlah_poskesdes_bidan_desa' => 0,
      'jumlah_lapor_poskesdes' => 0,
      'jumlah_ibu_hamil_terdaftar' => 0,
      'jumlah_ibu_hamil_dapat_tablet_darah' => 0,
      'jumlah_ibu_hamil_anemia' => 0,
      'jumlah_ibu_hamil_kek' => 0,
      'jumlah_ibu_hamil_kek_dapat_pmt' => 0,
      'jumlah_ibu_nifas_dapat_vit_a' => 0,
      'jumlah_bayi_baru_lahir_imd' => 0,
      'jumlah_bayi_baru_lahir_asi' => 0,
      'jumlah_bayi_bblr' => 0,
      'jumlah_bayi_6_11_bulan_dapat_vit_a' => 0,
      'jumlah_balita_terdaftar' => 0,
      'jumlah_anak_balita_dapat_vit_a' => 0,
      'jumlah_balita_punya_kia' => 0,
      'jumlah_balita_ditimbang' => 0,
      'jumlah_balita_ditimbang_naik_bb' => 0,
      'jumlah_balita_ditimbang_tidak_naik_bb' => 0,
      'jumlah_balita_ditimbang_tidak_naik_bb_2x' => 0,
      'jumlah_balita_bgm' => 0,
      'jumlah_balita_kurus' => 0,
      'jumlah_balita_kurus_dapat_pmt' => 0,
      'jumlah_balita_gizi_buruk' => 0,
      'jumlah_kunjungan_k4_ibu_hamil' => 0,
      'jumlah_ibu_hamil_malaria' => 0,
      'jumlah_ibu_hamil_tb' => 0,
      'jumlah_ibu_hamil_sifilis_positif' => 0,
      'jumlah_ibu_hamil_hiv_positif' => 0,
      'jumlah_ibu_hamil_hepatitis_b' => 0,
      'jumlah_ibu_dengan_komplikasi_rujuk_rs' => 0,
      'jumlah_ibu_hamil_ikut_kelas_ibu_hamil' => 0,
      'jumlah_ibu_bersalin_di_fasilitas' => 0,
      'jumlah_ibu_nifas_dapat_kf4' => 0,
      'jumlah_peserta_kb_mkjp' => 0,
      'jumlah_peserta_kb_non_mkjp' => 0,
      'jumlah_pendonor_dilakukan_seleksi' => 0,
      'jumlah_pendonor_tidak_lolos_seleksi' => 0,
      'jumlah_pendonor_lolos_seleksi' => 0,
      'jumlah_pendonor_lolos_o_rh_plus' => 0,
      'jumlah_pendonor_lolos_o_rh_minus' => 0,
      'jumlah_pendonor_lolos_a_rh_plus' => 0,
      'jumlah_pendonor_lolos_a_rh_minus' => 0,
      'jumlah_pendonor_lolos_b_rh_plus' => 0,
      'jumlah_pendonor_lolos_b_rh_minus' => 0,
      'jumlah_pendonor_lolos_ab_rh_plus' => 0,
      'jumlah_pendonor_lolos_ab_rh_minus' => 0,
      'jumlah_kn1' => 0,
      'jumlah_kn_lengkap' => 0,
      'jumlah_neonatus_shk' => 0,
      'jumlah_kekerasan_anak_visum' => 0,
      'jumlah_lansia_dapat_layanan_kesehatan' => 0,
      'jumlah_lansia_diskrining_kesehatan' => 0,
      'jumlah_lansia_kemandirian_a' => 0,
      'jumlah_lansia_kemandirian_b' => 0,
      'jumlah_lansia_kemandirian_c' => 0,
    ];
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
      <span  style="width: 100px; height: 30px; display: inline-block; vertical-align: middle; border: 1px solid black; margin-left: 20px; padding: 8px 0 0 8px; ">{{ ($totalIbuAnak['jumlah_puskesmas_pembantu'] ?? 0) }}</span>
    </div>
    <div style="width: 240px; margin-left: 40px; display: inline-block; vertical-align: middle; ">
      <span  style="display: inline-block; vertical-align: middle; width: 100px; text-align: right; ">Jml Lapor</span>
      <span  style="width: 100px; height: 30px; display: inline-block; vertical-align: middle; border: 1px solid black; margin-left: 10px; padding: 8px 0 0 8px; ">{{ ($totalIbuAnak['jumlah_lapor_puskesmas_pembantu'] ?? 0) }}</span>
    </div>
  </div>

  <div style="margin-top: 20px; " >
    <div style="width: 400px; display: inline-block; vertical-align: middle; ">
      <span style="display: inline-block; vertical-align: middle; width: 265px; text-align: right; ">Jml Poskesdes/bidan desa</span>
      <span  style="width: 100px; height: 30px; display: inline-block; vertical-align: middle; border: 1px solid black; margin-left: 20px; padding: 8px 0 0 8px; ">{{ ($totalIbuAnak['jumlah_poskesdes_bidan_desa'] ?? 0) }}</span>
    </div>
    <div style="width: 240px; margin-left: 40px; display: inline-block; vertical-align: middle; ">
      <span  style="display: inline-block; vertical-align: middle; width: 100px; text-align: right; ">Jml Lapor</span>
      <span  style="width: 100px; height: 30px; display: inline-block; vertical-align: middle; border: 1px solid black; margin-left: 10px; padding: 8px 0 0 8px; ">{{ ($totalIbuAnak['jumlah_lapor_poskesdes'] ?? 0) }}</span>
    </div>
  </div>

  @php
    $chunkedDesaEntries = array_chunk($dataPuskesmas->data->toArray(), 5); // Split into chunks of 4
  @endphp

  @foreach ($chunkedDesaEntries as $index => $desaChunk)
    @php
      $isLastChunk = ($index === count($chunkedDesaEntries) - 1);
    @endphp
    @if ($index > 0)
      <div style="page-break-before: always;"></div>
      <p>Data Lanjutan :</p>
    @endif
    <table style="margin-top: 20px; ">
      <thead>
        <tr>
          <td class="column5 textCenter">No</td>
          <td class="column45 textCenter">Kegiatan</td>
          @foreach ($desaChunk as $desa)
            @php
              $desaData = \App\Models\DesaKelurahanPuskesmas::where('id', $desa['desa_kelurahan_puskesmas_id'])->get();
            @endphp
            <td class="column10 textCenter">{{ $desaData[0]['name'] }}</td>
          @endforeach

          @if ($isLastChunk)
            <td class="column10 textCenter">Jumlah</td>
          @endif
        </tr>
      </thead>
      <tbody>
        <tr>
          <td class="column50" colspan="2">PROGRAM GIZI </td>
          @foreach ($desaChunk as $desa)
            <td class="column10 textCenter columGrey"></td>
          @endforeach

          @if ($isLastChunk)
            <td class="column10 textCenter columGrey"></td>
          @endif
        </tr>
        <tr>
          <td class="column5 textCenter">1</td>
          <td class="column45">Jumlah ibu hamil terdaftar bulan ini</td>
          @foreach ($desaChunk as $desa)
            @php
              $totalIbuAnak['jumlah_puskesmas_pembantu'] += $desa['jumlah_puskesmas_pembantu'];
              $totalIbuAnak['jumlah_lapor_puskesmas_pembantu'] += $desa['jumlah_lapor_puskesmas_pembantu'];
              $totalIbuAnak['jumlah_poskesdes_bidan_desa'] += $desa['jumlah_poskesdes_bidan_desa'];
              $totalIbuAnak['jumlah_ibu_hamil_terdaftar'] += $desa['jumlah_ibu_hamil_terdaftar'];
              $totalIbuAnak['jumlah_ibu_hamil_terdaftar'] += $desa['jumlah_ibu_hamil_terdaftar'];
            @endphp
            <td class="column10 textCenter">{{ $desa['jumlah_ibu_hamil_terdaftar'] ?? 0 }}</td>
          @endforeach

          @if ($isLastChunk)
            <td class="column10 textCenter">{{ $totalIbuAnak['jumlah_ibu_hamil_terdaftar'] ?? 0 }}</td>
          @endif
        </tr>
        <tr>
          <td class="column5 textCenter">2</td>
          <td class="column45">Jumlah Ibu hamil dapat tablet tambah darah minimal 90 tablet</td>
          @foreach ($desaChunk as $desa)
            @php
              $totalIbuAnak['jumlah_ibu_hamil_dapat_tablet_darah'] += $desa['jumlah_ibu_hamil_dapat_tablet_darah'];
            @endphp
            <td class="column10 textCenter">{{ $desa['jumlah_ibu_hamil_dapat_tablet_darah'] ?? 0 }}</td>
          @endforeach

          @if ($isLastChunk)
            <td class="column10 textCenter">{{ $totalIbuAnak['jumlah_ibu_hamil_dapat_tablet_darah'] ?? 0 }}</td>
          @endif
        </tr>
        <tr>
          <td class="column5 textCenter">3</td>
          <td class="column45">Jumlah ibu hamil anemia</td>
          @foreach ($desaChunk as $desa)
            @php
              $totalIbuAnak['jumlah_ibu_hamil_anemia'] += $desa['jumlah_ibu_hamil_anemia'];
            @endphp
            <td class="column10 textCenter">{{ $desa['jumlah_ibu_hamil_anemia'] ?? 0 }}</td>
          @endforeach

          @if ($isLastChunk)
            <td class="column10 textCenter">{{ $totalIbuAnak['jumlah_ibu_hamil_anemia'] ?? 0 }}</td>
          @endif
        </tr>
        <tr>
          <td class="column5 textCenter">4</td>
          <td class="column45">Jumlah ibu hamil Kurang Energi Kronis (KEK) </td>
          @foreach ($desaChunk as $desa)
            @php
              $totalIbuAnak['jumlah_ibu_hamil_kek'] += $desa['jumlah_ibu_hamil_kek'];
            @endphp
            <td class="column10 textCenter">{{ $desa['jumlah_ibu_hamil_kek'] ?? 0 }}</td>
          @endforeach

          @if ($isLastChunk)
            <td class="column10 textCenter">{{ $totalIbuAnak['jumlah_ibu_hamil_kek'] ?? 0 }}</td>
          @endif
        </tr>
        <tr>
          <td class="column5 textCenter">5</td>
          <td class="column45">Jumlah ibu hamil KEK dapat PMT ibu bumil</td>
          @foreach ($desaChunk as $desa)
            @php
              $totalIbuAnak['jumlah_ibu_hamil_kek_dapat_pmt'] += $desa['jumlah_ibu_hamil_kek_dapat_pmt'];
            @endphp
            <td class="column10 textCenter">{{ $desa['jumlah_ibu_hamil_kek_dapat_pmt'] ?? 0 }}</td>
          @endforeach

          @if ($isLastChunk)
            <td class="column10 textCenter">{{ $totalIbuAnak['jumlah_ibu_hamil_kek_dapat_pmt'] ?? 0 }}</td>
          @endif
        </tr>
        <tr>
          <td class="column5 textCenter">6</td>
          <td class="column45">Jumlah ibu nifas dapat Vitamin A dosis tinggi (2 kapsul)</td>
          @foreach ($desaChunk as $desa)
            @php
              $totalIbuAnak['jumlah_ibu_nifas_dapat_vit_a'] += $desa['jumlah_ibu_nifas_dapat_vit_a'];
            @endphp
            <td class="column10 textCenter">{{ $desa['jumlah_ibu_nifas_dapat_vit_a'] ?? 0 }}</td>
          @endforeach

          @if ($isLastChunk)
            <td class="column10 textCenter">{{ $totalIbuAnak['jumlah_ibu_nifas_dapat_vit_a'] ?? 0 }}</td>
          @endif
        </tr>
        <tr>
          <td class="column5 textCenter">7</td>
          <td class="column45">Jumlah bayi baru lahir mendapat Inisiasi Menyusui Dini (IMD)</td>
          @foreach ($desaChunk as $desa)
            @php
              $totalIbuAnak['jumlah_bayi_baru_lahir_imd'] += $desa['jumlah_bayi_baru_lahir_imd'];
            @endphp
            <td class="column10 textCenter">{{ $desa['jumlah_bayi_baru_lahir_imd'] ?? 0 }}</td>
          @endforeach

          @if ($isLastChunk)
            <td class="column10 textCenter">{{ $totalIbuAnak['jumlah_bayi_baru_lahir_imd'] ?? 0 }}</td>
          @endif
        </tr>
        <tr>
          <td class="column5 textCenter">8</td>
          <td class="column45">Jumlah bayi mendapat ASI ekslusif</td>
          @foreach ($desaChunk as $desa)
            @php
              $totalIbuAnak['jumlah_bayi_baru_lahir_asi'] += $desa['jumlah_bayi_baru_lahir_asi'];
            @endphp
            <td class="column10 textCenter">{{ $desa['jumlah_bayi_baru_lahir_asi'] ?? 0 }}</td>
          @endforeach

          @if ($isLastChunk)
            <td class="column10 textCenter">{{ $totalIbuAnak['jumlah_bayi_baru_lahir_asi'] ?? 0 }}</td>
          @endif
        </tr>
        <tr>
          <td class="column5 textCenter">9</td>
          <td class="column45">Jumlah bayi dengan Berat Badan Lahir Rendah (BBLR)</td>
          @foreach ($desaChunk as $desa)
            @php
              $totalIbuAnak['jumlah_bayi_bblr'] += $desa['jumlah_bayi_bblr'];
            @endphp
            <td class="column10 textCenter">{{ $desa['jumlah_bayi_bblr'] ?? 0 }}</td>
          @endforeach

          @if ($isLastChunk)
            <td class="column10 textCenter">{{ $totalIbuAnak['jumlah_bayi_bblr'] ?? 0 }}</td>
          @endif
        </tr>
        <tr>
          <td class="column5 textCenter">10</td>
          <td class="column45">Jumlah bayi 6-11 bulan mendapat Vit. A (100.000 IU)</td>
          @foreach ($desaChunk as $desa)
            @php
              $totalIbuAnak['jumlah_bayi_6_11_bulan_dapat_vit_a'] += $desa['jumlah_bayi_6_11_bulan_dapat_vit_a'];
            @endphp
            <td class="column10 textCenter">{{ $desa['jumlah_bayi_6_11_bulan_dapat_vit_a'] ?? 0 }}</td>
          @endforeach

          @if ($isLastChunk)
            <td class="column10 textCenter">{{ $totalIbuAnak['jumlah_bayi_6_11_bulan_dapat_vit_a'] ?? 0 }}</td>
          @endif
        </tr>
        <tr>
          <td class="column5 textCenter">11</td>
          <td class="column45">Jumlah Balita (terdaftar bulan ini)</td>
          @foreach ($desaChunk as $desa)
            @php
              $totalIbuAnak['jumlah_balita_terdaftar'] += $desa['jumlah_balita_terdaftar'];
            @endphp
            <td class="column10 textCenter">{{ $desa['jumlah_balita_terdaftar'] ?? 0 }}</td>
          @endforeach

          @if ($isLastChunk)
            <td class="column10 textCenter">{{ $totalIbuAnak['jumlah_balita_terdaftar'] ?? 0 }}</td>
          @endif
        </tr>
        <tr>
          <td class="column5 textCenter">12</td>
          <td class="column45">Jumlah anak Balita dapat Vitamin A dosis tinggi (200.000 IU)</td>
          @foreach ($desaChunk as $desa)
            @php
              $totalIbuAnak['jumlah_anak_balita_dapat_vit_a'] += $desa['jumlah_anak_balita_dapat_vit_a'];
            @endphp
            <td class="column10 textCenter">{{ $desa['jumlah_anak_balita_dapat_vit_a'] ?? 0 }}</td>
          @endforeach

          @if ($isLastChunk)
            <td class="column10 textCenter">{{ $totalIbuAnak['jumlah_anak_balita_dapat_vit_a'] ?? 0 }}</td>
          @endif
        </tr>
        <tr>
          <td class="column5 textCenter">13</td>
          <td class="column45">Jumlah Balita punya Buku KIA (terdaftar bulan ini)</td>
          @foreach ($desaChunk as $desa)
            @php
              $totalIbuAnak['jumlah_balita_punya_kia'] += $desa['jumlah_balita_punya_kia'];
            @endphp
            <td class="column10 textCenter">{{ $desa['jumlah_balita_punya_kia'] ?? 0 }}</td>
          @endforeach

          @if ($isLastChunk)
            <td class="column10 textCenter">{{ $totalIbuAnak['jumlah_balita_punya_kia'] ?? 0 }}</td>
          @endif
        </tr>
        <tr>
          <td class="column5 textCenter">14</td>
          <td class="column45">Jumlah Balita ditimbang (D)</td>
          @foreach ($desaChunk as $desa)
            @php
              $totalIbuAnak['jumlah_balita_ditimbang'] += $desa['jumlah_balita_ditimbang'];
            @endphp
            <td class="column10 textCenter">{{ $desa['jumlah_balita_ditimbang'] ?? 0 }}</td>
          @endforeach

          @if ($isLastChunk)
            <td class="column10 textCenter">{{ $totalIbuAnak['jumlah_balita_ditimbang'] ?? 0 }}</td>
          @endif
        </tr>
        <tr>
          <td class="column5 textCenter">15</td>
          <td class="column45">Jumlah Balita ditimbang yang naik berat badannya (N)</td>
          @foreach ($desaChunk as $desa)
            @php
              $totalIbuAnak['jumlah_balita_ditimbang_naik_bb'] += $desa['jumlah_balita_ditimbang_naik_bb'];
            @endphp
            <td class="column10 textCenter">{{ $desa['jumlah_balita_ditimbang_naik_bb'] ?? 0 }}</td>
          @endforeach

          @if ($isLastChunk)
            <td class="column10 textCenter">{{ $totalIbuAnak['jumlah_balita_ditimbang_naik_bb'] ?? 0 }}</td>
          @endif
        </tr>
        <tr>
          <td class="column5 textCenter">16</td>
          <td class="column45">Jumlah Balita ditimbang yang tidak naik berat badannya (T)</td>
          @foreach ($desaChunk as $desa)
            @php
              $totalIbuAnak['jumlah_balita_ditimbang_tidak_naik_bb'] += $desa['jumlah_balita_ditimbang_tidak_naik_bb'];
            @endphp
            <td class="column10 textCenter">{{ $desa['jumlah_balita_ditimbang_tidak_naik_bb'] ?? 0 }}</td>
          @endforeach

          @if ($isLastChunk)
            <td class="column10 textCenter">{{ $totalIbuAnak['jumlah_balita_ditimbang_tidak_naik_bb'] ?? 0 }}</td>
          @endif
        </tr>
        <tr>
          <td class="column5 textCenter">17</td>
          <td class="column45">Jumlah Balita ditimbang yang tidak naik berat badannya 2 kali berturutturut (2T)</td>
          @foreach ($desaChunk as $desa)
            @php
              $totalIbuAnak['jumlah_balita_ditimbang_tidak_naik_bb_2x'] += $desa['jumlah_balita_ditimbang_tidak_naik_bb_2x'];
            @endphp
            <td class="column10 textCenter">{{ $desa['jumlah_balita_ditimbang_tidak_naik_bb_2x'] ?? 0 }}</td>
          @endforeach

          @if ($isLastChunk)
            <td class="column10 textCenter">{{ $totalIbuAnak['jumlah_balita_ditimbang_tidak_naik_bb_2x'] ?? 0 }}</td>
          @endif
        </tr>
        <tr>
          <td class="column5 textCenter">18</td>
          <td class="column45">Jumlah Balita di bawah garis merah (BGM)</td>
          @foreach ($desaChunk as $desa)
            @php
              $totalIbuAnak['jumlah_balita_bgm'] += $desa['jumlah_balita_bgm'];
            @endphp
            <td class="column10 textCenter">{{ $desa['jumlah_balita_bgm'] ?? 0 }}</td>
          @endforeach

          @if ($isLastChunk)
            <td class="column10 textCenter">{{ $totalIbuAnak['jumlah_balita_bgm'] ?? 0 }}</td>
          @endif
        </tr>
        <tr>
          <td class="column5 textCenter">19</td>
          <td class="column45">Jumlah Balita kurus</td>
          @foreach ($desaChunk as $desa)
            @php
              $totalIbuAnak['jumlah_balita_kurus'] += $desa['jumlah_balita_kurus'];
            @endphp
            <td class="column10 textCenter">{{ $desa['jumlah_balita_kurus'] ?? 0 }}</td>
          @endforeach

          @if ($isLastChunk)
            <td class="column10 textCenter">{{ $totalIbuAnak['jumlah_balita_kurus'] ?? 0 }}</td>
          @endif
        </tr>
        <tr>
          <td class="column5 textCenter">20</td>
          <td class="column45">Jumlah Balita kurus mendapat makanan tambahan (PMT)</td>
          @foreach ($desaChunk as $desa)
            @php
              $totalIbuAnak['jumlah_balita_kurus_dapat_pmt'] += $desa['jumlah_balita_kurus_dapat_pmt'];
            @endphp
            <td class="column10 textCenter">{{ $desa['jumlah_balita_kurus_dapat_pmt'] ?? 0 }}</td>
          @endforeach

          @if ($isLastChunk)
            <td class="column10 textCenter">{{ $totalIbuAnak['jumlah_balita_kurus_dapat_pmt'] ?? 0 }}</td>
          @endif
        </tr>
        <tr>
          <td class="column5 textCenter">21</td>
          <td class="column45">Jumlah kasus Balita gizi buruk</td>
          @foreach ($desaChunk as $desa)
            @php
              $totalIbuAnak['jumlah_balita_gizi_buruk'] += $desa['jumlah_balita_gizi_buruk'] ?? 0;
            @endphp
            <td class="column10 textCenter">{{ $desa['jumlah_balita_gizi_buruk'] ?? 0 }}</td>
          @endforeach

          @if ($isLastChunk)
            <td class="column10 textCenter">{{ $totalIbuAnak['jumlah_balita_gizi_buruk'] ?? 0 }}</td>
          @endif
        </tr>
        <tr>
          <td class="column50" colspan="2">PROGRAM KESEHATAN IBU</td>
          @foreach ($desaChunk as $desa)
            <td class="column10 textCenter columGrey"></td>
          @endforeach

          @if ($isLastChunk)
            <td class="column10 textCenter columGrey"></td>
          @endif
        </tr>
        <tr>
          <td class="column5 textCenter">1</td>
          <td class="column45">Jumlah kunjungan K4 ibu hamil</td>
          @foreach ($desaChunk as $desa)
            @php
              $totalIbuAnak['jumlah_kunjungan_k4_ibu_hamil'] += $desa['jumlah_kunjungan_k4_ibu_hamil'];
            @endphp
            <td class="column10 textCenter">{{ $desa['jumlah_kunjungan_k4_ibu_hamil'] ?? 0 }}</td>
          @endforeach

          @if ($isLastChunk)
            <td class="column10 textCenter">{{ $totalIbuAnak['jumlah_kunjungan_k4_ibu_hamil'] ?? 0 }}</td>
          @endif
        </tr>
        <tr>
          <td class="column5 textCenter">2</td>
          <td class="column45">Jumlah ibu hamil dengan malaria</td>
          @foreach ($desaChunk as $desa)
            @php
              $totalIbuAnak['jumlah_ibu_hamil_malaria'] += $desa['jumlah_ibu_hamil_malaria'];
            @endphp
            <td class="column10 textCenter">{{ $desa['jumlah_ibu_hamil_malaria'] ?? 0 }}</td>
          @endforeach

          @if ($isLastChunk)
            <td class="column10 textCenter">{{ $totalIbuAnak['jumlah_ibu_hamil_malaria'] ?? 0 }}</td>
          @endif
        </tr>
        <tr>
          <td class="column5 textCenter">3</td>
          <td class="column45">Jumlah ibu hamil dengan TB</td>
          @foreach ($desaChunk as $desa)
            @php
              $totalIbuAnak['jumlah_ibu_hamil_tb'] += $desa['jumlah_ibu_hamil_tb'];
            @endphp
            <td class="column10 textCenter">{{ $desa['jumlah_ibu_hamil_tb'] ?? 0 }}</td>
          @endforeach

          @if ($isLastChunk)
            <td class="column10 textCenter">{{ $totalIbuAnak['jumlah_ibu_hamil_tb'] ?? 0 }}</td>
          @endif
        </tr>
        <tr>
          <td class="column5 textCenter">4</td>
          <td class="column45">Jumlah ibu hamil dengan sifilis positif (laboratorium)</td>
          @foreach ($desaChunk as $desa)
            @php
              $totalIbuAnak['jumlah_ibu_hamil_sifilis_positif'] += $desa['jumlah_ibu_hamil_sifilis_positif'];
            @endphp
            <td class="column10 textCenter">{{ $desa['jumlah_ibu_hamil_sifilis_positif'] ?? 0 }}</td>
          @endforeach

          @if ($isLastChunk)
            <td class="column10 textCenter">{{ $totalIbuAnak['jumlah_ibu_hamil_sifilis_positif'] ?? 0 }}</td>
          @endif
        </tr>
        <tr>
          <td class="column5 textCenter">5</td>
          <td class="column45">Jumlah ibu hamil dengan HIV positif</td>
          @foreach ($desaChunk as $desa)
            @php
              $totalIbuAnak['jumlah_ibu_hamil_hiv_positif'] += $desa['jumlah_ibu_hamil_hiv_positif'];
            @endphp
            <td class="column10 textCenter">{{ $desa['jumlah_ibu_hamil_hiv_positif'] ?? 0 }}</td>
          @endforeach

          @if ($isLastChunk)
            <td class="column10 textCenter">{{ $totalIbuAnak['jumlah_ibu_hamil_hiv_positif'] ?? 0 }}</td>
          @endif
        </tr>
        <tr>
          <td class="column5 textCenter">6</td>
          <td class="column45">Jumlah ibu hamil dengan Hepatitis B</td>
          @foreach ($desaChunk as $desa)
            @php
              $totalIbuAnak['jumlah_ibu_hamil_hepatitis_b'] += $desa['jumlah_ibu_hamil_hepatitis_b'];
            @endphp
            <td class="column10 textCenter">{{ $desa['jumlah_ibu_hamil_hepatitis_b'] ?? 0 }}</td>
          @endforeach

          @if ($isLastChunk)
            <td class="column10 textCenter">{{ $totalIbuAnak['jumlah_ibu_hamil_hepatitis_b'] ?? 0 }}</td>
          @endif
        </tr>
        <tr>
          <td class="column5 textCenter">7</td>
          <td class="column45">Jumlah ibu hamil, ibu bersalin, dan ibu nifas dengan komplikasi (perdarahan, infeksi, abortus, keracunan kehamilan, partus lama)  yang dirujuk ke RS</td>
          @foreach ($desaChunk as $desa)
            @php
              $totalIbuAnak['jumlah_ibu_dengan_komplikasi_rujuk_rs'] += $desa['jumlah_ibu_dengan_komplikasi_rujuk_rs'];
            @endphp
            <td class="column10 textCenter">{{ $desa['jumlah_ibu_dengan_komplikasi_rujuk_rs'] ?? 0 }}</td>
          @endforeach

          @if ($isLastChunk)
            <td class="column10 textCenter">{{ $totalIbuAnak['jumlah_ibu_dengan_komplikasi_rujuk_rs'] ?? 0 }}</td>
          @endif
        </tr>
        <tr>
          <td class="column5 textCenter">8</td>
          <td class="column45">Jumlah ibu hamil yang mengikuti kelas ibu hamil</td>
          @foreach ($desaChunk as $desa)
            @php
              $totalIbuAnak['jumlah_ibu_hamil_ikut_kelas_ibu_hamil'] += $desa['jumlah_ibu_hamil_ikut_kelas_ibu_hamil'];
            @endphp
            <td class="column10 textCenter">{{ $desa['jumlah_ibu_hamil_ikut_kelas_ibu_hamil'] ?? 0 }}</td>
          @endforeach

          @if ($isLastChunk)
            <td class="column10 textCenter">{{ $totalIbuAnak['jumlah_ibu_hamil_ikut_kelas_ibu_hamil'] ?? 0 }}</td>
          @endif
        </tr>
        <tr>
          <td class="column5 textCenter">9</td>
          <td class="column45">Jumlah ibu bersalin di fasilitas pelayanan kesehatan</td>
          @foreach ($desaChunk as $desa)
            @php
              $totalIbuAnak['jumlah_ibu_bersalin_di_fasilitas'] += $desa['jumlah_ibu_bersalin_di_fasilitas'];
            @endphp
            <td class="column10 textCenter">{{ $desa['jumlah_ibu_bersalin_di_fasilitas'] ?? 0 }}</td>
          @endforeach

          @if ($isLastChunk)
            <td class="column10 textCenter">{{ $totalIbuAnak['jumlah_ibu_bersalin_di_fasilitas'] ?? 0 }}</td>
          @endif
        </tr>
        <tr>
          <td class="column5 textCenter">10</td>
          <td class="column45">Jumlah ibu nifas yang mendapat pelayanan nifas lengkap (KF4)</td>
          @foreach ($desaChunk as $desa)
            @php
              $totalIbuAnak['jumlah_ibu_nifas_dapat_kf4'] += $desa['jumlah_ibu_nifas_dapat_kf4'];
            @endphp
            <td class="column10 textCenter">{{ $desa['jumlah_ibu_nifas_dapat_kf4'] ?? 0 }}</td>
          @endforeach

          @if ($isLastChunk)
            <td class="column10 textCenter">{{ $totalIbuAnak['jumlah_ibu_nifas_dapat_kf4'] ?? 0 }}</td>
          @endif
        </tr>
        <tr>
          <td class="column5 textCenter">11</td>
          <td class="column45">Jumlah Peserta KB Pasca Persalinan (per metode kontrasepsi) </td>
          @foreach ($desaChunk as $desa)
            <td class="column10 textCenter">{{ $identitasPuskesmas->kelas10->email ?? 0 }}</td>
          @endforeach

          @if ($isLastChunk)
            <td class="column10 textCenter">{{ $identitasPuskesmas->kelas10->email ?? 0 }}</td>
          @endif
        </tr>
        <tr>
          <td class="column5 textCenter"></td>
          <td class="column45">&nbsp; &nbsp; a.  MKJP (Metode Kontrasepsi Jangka Panjang)</td>
          @foreach ($desaChunk as $desa)
            @php
              $totalIbuAnak['jumlah_peserta_kb_mkjp'] += $desa['jumlah_peserta_kb_mkjp'];
            @endphp
            <td class="column10 textCenter">{{ $desa['jumlah_peserta_kb_mkjp'] ?? 0 }}</td>
          @endforeach

          @if ($isLastChunk)
            <td class="column10 textCenter">{{ $totalIbuAnak['jumlah_peserta_kb_mkjp'] ?? 0 }}</td>
          @endif
        </tr>
        <tr>
          <td class="column5 textCenter"></td>
          <td class="column45">&nbsp; &nbsp; b.  Non MKJP</td>
          @foreach ($desaChunk as $desa)
            @php
              $totalIbuAnak['jumlah_peserta_kb_non_mkjp'] += $desa['jumlah_peserta_kb_non_mkjp'];
            @endphp
            <td class="column10 textCenter">{{ $desa['jumlah_peserta_kb_non_mkjp'] ?? 0 }}</td>
          @endforeach

          @if ($isLastChunk)
            <td class="column10 textCenter">{{ $totalIbuAnak['jumlah_peserta_kb_non_mkjp'] ?? 0 }}</td>
          @endif
        </tr>
        <tr>
          <td class="column5 textCenter">12</td>
          <td class="column45">Calon pendonor darah pendamping ibu hamil</td>
          @foreach ($desaChunk as $desa)
            <td class="column10 textCenter">{{ $identitasPuskesmas->kelas10->email ?? 0 }}</td>
          @endforeach

          @if ($isLastChunk)
            <td class="column10 textCenter">{{ $identitasPuskesmas->kelas10->email ?? 0 }}</td>
          @endif
        </tr>
        <tr>
          <td class="column5 textCenter"></td>
          <td class="column45">&nbsp;&nbsp; a. Jumlah calon pendonor yang dilakukan seleksi</td>
          @foreach ($desaChunk as $desa)
            @php
              $totalIbuAnak['jumlah_pendonor_dilakukan_seleksi'] += $desa['jumlah_pendonor_dilakukan_seleksi'];
            @endphp
            <td class="column10 textCenter">{{ $desa['jumlah_pendonor_dilakukan_seleksi'] ?? 0 }}</td>
          @endforeach

          @if ($isLastChunk)
            <td class="column10 textCenter">{{ $totalIbuAnak['jumlah_pendonor_dilakukan_seleksi'] ?? 0 }}</td>
          @endif
        </tr>
        <tr>
          <td class="column5 textCenter"></td>
          <td class="column45">&nbsp;&nbsp; b. Jumlah calon pendonor yang tidak lolos seleksi</td>
          @foreach ($desaChunk as $desa)
            @php
              $totalIbuAnak['jumlah_pendonor_tidak_lolos_seleksi'] += $desa['jumlah_pendonor_tidak_lolos_seleksi'];
            @endphp
            <td class="column10 textCenter">{{ $desa['jumlah_pendonor_tidak_lolos_seleksi'] ?? 0 }}</td>
          @endforeach

          @if ($isLastChunk)
            <td class="column10 textCenter">{{ $totalIbuAnak['jumlah_pendonor_tidak_lolos_seleksi'] ?? 0 }}</td>
          @endif
        </tr>
        <tr>
          <td class="column5 textCenter"></td>
          <td class="column45">&nbsp;&nbsp; c. Jumlah calon pendonor yang lolos seleksi</td>
          @foreach ($desaChunk as $desa)
            @php
              $totalIbuAnak['jumlah_pendonor_lolos_seleksi'] += $desa['jumlah_pendonor_lolos_seleksi'];
            @endphp
            <td class="column10 textCenter">{{ $desa['jumlah_pendonor_lolos_seleksi'] ?? 0 }}</td>
          @endforeach

          @if ($isLastChunk)
            <td class="column10 textCenter">{{ $totalIbuAnak['jumlah_pendonor_lolos_seleksi'] ?? 0 }}</td>
          @endif
        </tr>
        <tr>
          <td class="column5 textCenter"></td>
          <td class="column45">&nbsp;&nbsp; d. Jumlah calon pendonor yang lolos seleksi dengan golongan darah O (Rh+)</td>
          @foreach ($desaChunk as $desa)
            @php
              $totalIbuAnak['jumlah_pendonor_lolos_o_rh_plus'] += $desa['jumlah_pendonor_lolos_o_rh_plus'];
            @endphp
            <td class="column10 textCenter">{{ $desa['jumlah_pendonor_lolos_o_rh_plus'] ?? 0 }}</td>
          @endforeach

          @if ($isLastChunk)
            <td class="column10 textCenter">{{ $totalIbuAnak['jumlah_pendonor_lolos_o_rh_plus'] ?? 0 }}</td>
          @endif
        </tr>
        <tr>
          <td class="column5 textCenter"></td>
          <td class="column45">&nbsp;&nbsp; e. Jumlah calon pendonor yang lolos seleksi dengan golongan darah O (Rh-)</td>
          @foreach ($desaChunk as $desa)
            @php
              $totalIbuAnak['jumlah_pendonor_lolos_o_rh_minus'] += $desa['jumlah_pendonor_lolos_o_rh_minus'];
            @endphp
            <td class="column10 textCenter">{{ $desa['jumlah_pendonor_lolos_o_rh_minus'] ?? 0 }}</td>
          @endforeach

          @if ($isLastChunk)
            <td class="column10 textCenter">{{ $totalIbuAnak['jumlah_pendonor_lolos_o_rh_minus'] ?? 0 }}</td>
          @endif
        </tr>
        <tr>
          <td class="column5 textCenter"></td>
          <td class="column45">&nbsp;&nbsp; f. Jumlah calon pendonor yang lolos seleksi dengan golongan darah A (Rh+)</td>
          @foreach ($desaChunk as $desa)
            @php
              $totalIbuAnak['jumlah_pendonor_lolos_a_rh_plus'] += $desa['jumlah_pendonor_lolos_a_rh_plus'];
            @endphp
            <td class="column10 textCenter">{{ $desa['jumlah_pendonor_lolos_a_rh_plus'] ?? 0 }}</td>
          @endforeach

          @if ($isLastChunk)
            <td class="column10 textCenter">{{ $totalIbuAnak['jumlah_pendonor_lolos_a_rh_plus'] ?? 0 }}</td>
          @endif
        </tr>
        <tr>
          <td class="column5 textCenter"></td>
          <td class="column45">&nbsp;&nbsp; g. Jumlah calon pendonor yang lolos seleksi dengan golongan darah A (Rh-)</td>
          @foreach ($desaChunk as $desa)
            @php
              $totalIbuAnak['jumlah_pendonor_lolos_a_rh_minus'] += $desa['jumlah_pendonor_lolos_a_rh_minus'];
            @endphp
            <td class="column10 textCenter">{{ $desa['jumlah_pendonor_lolos_a_rh_minus'] ?? 0 }}</td>
          @endforeach

          @if ($isLastChunk)
            <td class="column10 textCenter">{{ $totalIbuAnak['jumlah_pendonor_lolos_a_rh_minus'] ?? 0 }}</td>
          @endif
        </tr>
        <tr>
          <td class="column5 textCenter"></td>
          <td class="column45">&nbsp;&nbsp; h. Jumlah calon pendonor yang lolos seleksi dengan golongan darah B (Rh+)</td>
          @foreach ($desaChunk as $desa)
            @php
              $totalIbuAnak['jumlah_pendonor_lolos_b_rh_plus'] += $desa['jumlah_pendonor_lolos_b_rh_plus'];
            @endphp
            <td class="column10 textCenter">{{ $desa['jumlah_pendonor_lolos_b_rh_plus'] ?? 0 }}</td>
          @endforeach

          @if ($isLastChunk)
            <td class="column10 textCenter">{{ $totalIbuAnak['jumlah_pendonor_lolos_b_rh_plus'] ?? 0 }}</td>
          @endif
        </tr>
        <tr>
          <td class="column5 textCenter"></td>
          <td class="column45">&nbsp;&nbsp; i. Jumlah calon pendonor yang lolos seleksi dengan golongan darah B (Rh-)</td>
          @foreach ($desaChunk as $desa)
            @php
              $totalIbuAnak['jumlah_pendonor_lolos_b_rh_minus'] += $desa['jumlah_pendonor_lolos_b_rh_minus'];
            @endphp
            <td class="column10 textCenter">{{ $desa['jumlah_pendonor_lolos_b_rh_minus'] ?? 0 }}</td>
          @endforeach

          @if ($isLastChunk)
            <td class="column10 textCenter">{{ $totalIbuAnak['jumlah_pendonor_lolos_b_rh_minus'] ?? 0 }}</td>
          @endif
        </tr>
        <tr>
          <td class="column5 textCenter"></td>
          <td class="column45">&nbsp;&nbsp; j. Jumlah calon pendonor yang lolos seleksi dengan golongan darah AB (Rh+)</td>
          @foreach ($desaChunk as $desa)
            @php
              $totalIbuAnak['jumlah_pendonor_lolos_ab_rh_plus'] += $desa['jumlah_pendonor_lolos_ab_rh_plus'];
            @endphp
            <td class="column10 textCenter">{{ $desa['jumlah_pendonor_lolos_ab_rh_plus'] ?? 0 }}</td>
          @endforeach

          @if ($isLastChunk)
            <td class="column10 textCenter">{{ $totalIbuAnak['jumlah_pendonor_lolos_ab_rh_plus'] ?? 0 }}</td>
          @endif
        </tr>
        <tr>
          <td class="column5 textCenter"></td>
          <td class="column45">&nbsp;&nbsp; k. Jumlah calon pendonor yang lolos seleksi dengan golongan darah AB (Rh-)</td>
          @foreach ($desaChunk as $desa)
            @php
              $totalIbuAnak['jumlah_pendonor_lolos_ab_rh_minus'] += $desa['jumlah_pendonor_lolos_ab_rh_minus'];
            @endphp
            <td class="column10 textCenter">{{ $desa['jumlah_pendonor_lolos_ab_rh_minus'] ?? 0 }}</td>
          @endforeach

          @if ($isLastChunk)
            <td class="column10 textCenter">{{ $totalIbuAnak['jumlah_pendonor_lolos_ab_rh_minus'] ?? 0 }}</td>
          @endif
        </tr>
        <tr>
          <td class="column50" colspan="2">PROGRAM KESEHATAN ANAK</td>
          @foreach ($desaChunk as $desa)
            <td class="column10 textCenter columGrey"></td>
          @endforeach

          @if ($isLastChunk)
            <td class="column10 textCenter columGrey"></td>
          @endif
        </tr>
        <tr>
          <td class="column5 textCenter">1</td>
          <td class="column45">Jumlah Kunjungan Neonatal Pertama (KN1)</td>
          @foreach ($desaChunk as $desa)
            @php
              $totalIbuAnak['jumlah_kn1'] += $desa['jumlah_kn1'];
            @endphp
            <td class="column10 textCenter">{{ $desa['jumlah_kn1'] ?? 0 }}</td>
          @endforeach

          @if ($isLastChunk)
            <td class="column10 textCenter">{{ $totalIbuAnak['jumlah_kn1'] ?? 0 }}</td>
          @endif
        </tr>
        <tr>
          <td class="column5 textCenter">2</td>
          <td class="column45">Jumlah Kunjungan Neonatal Lengkap (KN lengkap)</td>
          @foreach ($desaChunk as $desa)
            @php
              $totalIbuAnak['jumlah_kn_lengkap'] += $desa['jumlah_kn_lengkap'];
            @endphp
            <td class="column10 textCenter">{{ $desa['jumlah_kn_lengkap'] ?? 0 }}</td>
          @endforeach

          @if ($isLastChunk)
            <td class="column10 textCenter">{{ $totalIbuAnak['jumlah_kn_lengkap'] ?? 0 }}</td>
          @endif
        </tr>
        <tr>
          <td class="column5 textCenter">3</td>
          <td class="column45">Jumlah neonatus yang mendapat pelayanan skrining hipotiroid kongenital (SHK) </td>
          @foreach ($desaChunk as $desa)
            @php
              $totalIbuAnak['jumlah_neonatus_shk'] += $desa['jumlah_neonatus_shk'];
            @endphp
            <td class="column10 textCenter">{{ $desa['jumlah_neonatus_shk'] ?? 0 }}</td>
          @endforeach

          @if ($isLastChunk)
            <td class="column10 textCenter">{{ $totalIbuAnak['jumlah_neonatus_shk'] ?? 0 }}</td>
          @endif
        </tr>
        <tr>
          <td class="column5 textCenter">4</td>
          <td class="column45">Jumlah kasus korban kekerasan anak dan perempuan > 18 tahun yang mendapat pelayanan kesehatan (pelayanan medis, visum, pelayanan konseling) </td>
          @foreach ($desaChunk as $desa)
            @php
              $totalIbuAnak['jumlah_kekerasan_anak_visum'] += $desa['jumlah_kekerasan_anak_visum'];
            @endphp
            <td class="column10 textCenter">{{ $desa['jumlah_kekerasan_anak_visum'] ?? 0 }}</td>
          @endforeach

          @if ($isLastChunk)
            <td class="column10 textCenter">{{ $totalIbuAnak['jumlah_kekerasan_anak_visum'] ?? 0 }}</td>
          @endif
        </tr>
        <tr>
          <td class="column50" colspan="2">PROGRAM KESEHATAN LANSIA</td>
          @foreach ($desaChunk as $desa)
            <td class="column10 textCenter columGrey"></td>
          @endforeach

          @if ($isLastChunk)
            <td class="column10 textCenter columGrey"></td>
          @endif
        </tr>
        <tr>
          <td class="column5 textCenter">1</td>
          <td class="column45">Jumlah lansia ( > 60 tahun) yang mendapatkan pelayanan kesehatan (baru pertama kali tahun ini)</td>
          @foreach ($desaChunk as $desa)
            @php
              $totalIbuAnak['jumlah_lansia_dapat_layanan_kesehatan'] += $desa['jumlah_lansia_dapat_layanan_kesehatan'];
            @endphp
            <td class="column10 textCenter">{{ $desa['jumlah_lansia_dapat_layanan_kesehatan'] ?? 0 }}</td>
          @endforeach

          @if ($isLastChunk)
            <td class="column10 textCenter">{{ $totalIbuAnak['jumlah_lansia_dapat_layanan_kesehatan'] ?? 0 }}</td>
          @endif
        </tr>
        <tr>
          <td class="column5 textCenter">2</td>
          <td class="column45">Jumlah lansia ( > 60 tahun) yang diskrining kesehatannya</td>
          @foreach ($desaChunk as $desa)
            @php
              $totalIbuAnak['jumlah_lansia_diskrining_kesehatan'] += $desa['jumlah_lansia_diskrining_kesehatan'];
            @endphp
            <td class="column10 textCenter">{{ $desa['jumlah_lansia_diskrining_kesehatan'] ?? 0 }}</td>
          @endforeach

          @if ($isLastChunk)
            <td class="column10 textCenter">{{ $totalIbuAnak['jumlah_lansia_diskrining_kesehatan'] ?? 0 }}</td>
          @endif
        </tr>
        <tr>
          <td class="column5 textCenter">3</td>
          <td class="column45">Jumlah Lansia ( > 60 tahun) dengan Tingkat Kemandirian A </td>
          @foreach ($desaChunk as $desa)
            @php
              $totalIbuAnak['jumlah_lansia_kemandirian_a'] += $desa['jumlah_lansia_kemandirian_a'];
            @endphp
            <td class="column10 textCenter">{{ $desa['jumlah_lansia_kemandirian_a'] ?? 0 }}</td>
          @endforeach

          @if ($isLastChunk)
            <td class="column10 textCenter">{{ $totalIbuAnak['jumlah_lansia_kemandirian_a'] ?? 0 }}</td>
          @endif
        </tr>
        <tr>
          <td class="column5 textCenter">4</td>
          <td class="column45">Jumlah Lansia ( > 60 tahun) dengan Tingkat Kemandirian B </td>
          @foreach ($desaChunk as $desa)
            @php
              $totalIbuAnak['jumlah_lansia_kemandirian_b'] += $desa['jumlah_lansia_kemandirian_b'];
            @endphp
            <td class="column10 textCenter">{{ $desa['jumlah_lansia_kemandirian_b'] ?? 0 }}</td>
          @endforeach

          @if ($isLastChunk)
            <td class="column10 textCenter">{{ $totalIbuAnak['jumlah_lansia_kemandirian_b'] ?? 0 }}</td>
          @endif
        </tr>
        <tr>
          <td class="column5 textCenter">5</td>
          <td class="column45">Jumlah Lansia ( > 60 tahun) dengan Tingkat Kemandirian C</td>
          @foreach ($desaChunk as $desa)
            @php
              $totalIbuAnak['jumlah_lansia_kemandirian_c'] += $desa['jumlah_lansia_kemandirian_c'];
            @endphp
            <td class="column10 textCenter">{{ $desa['jumlah_lansia_kemandirian_c'] ?? 0 }}</td>
          @endforeach

          @if ($isLastChunk)
            <td class="column10 textCenter">{{ $totalIbuAnak['jumlah_lansia_kemandirian_c'] ?? 0 }}</td>
          @endif
        </tr>
      </tbody>
    </table>

  @endforeach
  
  <table style="margin-top: 20px; ">
    <thead>
      <tr>
        <td class="column5 textCenter">No</td>
        <td class="column55 textCenter">Kegiatan</td>
        <td class="column10 textCenter">Kelas 1</td>
        <td class="column10 textCenter">Kelas 7</td>
        <td class="column10 textCenter">Kelas 10</td>
        <td class="column10 textCenter">Jumlah</td>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td class="column5 textCenter">1</td>
        <td class="column55">Jumlah sekolah yang mendapatkan penjaringan kesehatan</td>
        <td class="column10 textCenter">{{ $identitasPuskesmas->kelas1->jumlah_sekolah_penjaringan_kesehatan ?? 0 }}</td>
        <td class="column10 textCenter">{{ $identitasPuskesmas->kelas7->jumlah_sekolah_penjaringan_kesehatan ?? 0 }}</td>
        <td class="column10 textCenter">{{ $identitasPuskesmas->kelas10->jumlah_sekolah_penjaringan_kesehatan ?? 0 }}</td>
        <td class="column10 textCenter">{{ $identitasPuskesmas->kelas1->jumlah_sekolah_penjaringan_kesehatan + $identitasPuskesmas->kelas7->jumlah_sekolah_penjaringan_kesehatan + $identitasPuskesmas->kelas10->jumlah_sekolah_penjaringan_kesehatan }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">2</td>
        <td class="column55">Jumlah peserta didik yang mendapatkan penjaringan kesehatan</td>
        <td class="column10 textCenter">{{ $identitasPuskesmas->kelas1->jumlah_peserta_penjaringan_kesehatan ?? 0 }}</td>
        <td class="column10 textCenter">{{ $identitasPuskesmas->kelas7->jumlah_peserta_penjaringan_kesehatan ?? 0 }}</td>
        <td class="column10 textCenter">{{ $identitasPuskesmas->kelas10->jumlah_peserta_penjaringan_kesehatan ?? 0 }}</td>
        <td class="column10 textCenter">{{ $identitasPuskesmas->kelas1->jumlah_peserta_penjaringan_kesehatan + $identitasPuskesmas->kelas10->jumlah_peserta_penjaringan_kesehatan + $identitasPuskesmas->kelas10->jumlah_peserta_penjaringan_kesehatan }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">3</td>
        <td class="column55">Jumlah anak pendidikan dasar (kelas 19) yang mendapatkan pelayanan kesehatan sesuai standar </td>
        <td class="column10 textCenter">{{ $identitasPuskesmas->kelas1->jumlah_anak_pelayanan_kesehatan ?? 0 }}</td>
        <td class="column10 textCenter">{{ $identitasPuskesmas->kelas7->jumlah_anak_pelayanan_kesehatan ?? 0 }}</td>
        <td class="column10 textCenter">{{ $identitasPuskesmas->kelas10->jumlah_anak_pelayanan_kesehatan ?? 0 }}</td>
        <td class="column10 textCenter">{{ $identitasPuskesmas->kelas1->jumlah_anak_pelayanan_kesehatan + $identitasPuskesmas->kelas7->jumlah_anak_pelayanan_kesehatan + $identitasPuskesmas->kelas10->jumlah_anak_pelayanan_kesehatan }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">4</td>
        <td class="column55">Jumlah kasus yang ditemukan pada penjaringan kesehatan:</td>
        <td class="column10 textCenter columGrey"></td>
        <td class="column10 textCenter columGrey"></td>
        <td class="column10 textCenter columGrey"></td>
        <td class="column10 textCenter columGrey"></td>
      </tr>
      <tr>
        <td class="column5 textCenter"></td>
        <td class="column55">&nbsp;&nbsp; a. Hipertensi </td>
        <td class="column10 textCenter">{{ $identitasPuskesmas->kelas1->jumlah_hipertensi ?? 0 }}</td>
        <td class="column10 textCenter">{{ $identitasPuskesmas->kelas7->jumlah_hipertensi ?? 0 }}</td>
        <td class="column10 textCenter">{{ $identitasPuskesmas->kelas10->jumlah_hipertensi ?? 0 }}</td>
        <td class="column10 textCenter">{{ $identitasPuskesmas->kelas1->jumlah_hipertensi + $identitasPuskesmas->kelas7->jumlah_hipertensi + $identitasPuskesmas->kelas10->jumlah_hipertensi }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter"></td>
        <td class="column55">&nbsp;&nbsp; b. Anemia Klinis</td>
        <td class="column10 textCenter">{{ $identitasPuskesmas->kelas1->jumlah_anemia_klinis ?? 0 }}</td>
        <td class="column10 textCenter">{{ $identitasPuskesmas->kelas7->jumlah_anemia_klinis ?? 0 }}</td>
        <td class="column10 textCenter">{{ $identitasPuskesmas->kelas10->jumlah_anemia_klinis ?? 0 }}</td>
        <td class="column10 textCenter">{{ $identitasPuskesmas->kelas1->jumlah_anemia_klinis + $identitasPuskesmas->kelas7->jumlah_anemia_klinis + $identitasPuskesmas->kelas10->jumlah_anemia_klinis }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter"></td>
        <td class="column55">&nbsp;&nbsp; c. Kurus dan sangat kurus</td>
        <td class="column10 textCenter">{{ $identitasPuskesmas->kelas1->jumlah_kurus_sangat_kurus ?? 0 }}</td>
        <td class="column10 textCenter">{{ $identitasPuskesmas->kelas7->jumlah_kurus_sangat_kurus ?? 0 }}</td>
        <td class="column10 textCenter">{{ $identitasPuskesmas->kelas10->jumlah_kurus_sangat_kurus ?? 0 }}</td>
        <td class="column10 textCenter">{{ $identitasPuskesmas->kelas1->jumlah_kurus_sangat_kurus + $identitasPuskesmas->kelas7->jumlah_kurus_sangat_kurus + $identitasPuskesmas->kelas10->jumlah_kurus_sangat_kurus }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter"></td>
        <td class="column55">&nbsp;&nbsp; d. Gemuk dan sangat gemuk</td>
        <td class="column10 textCenter">{{ $identitasPuskesmas->kelas1->jumlah_gemuk_sangat_gemuk ?? 0 }}</td>
        <td class="column10 textCenter">{{ $identitasPuskesmas->kelas7->jumlah_gemuk_sangat_gemuk ?? 0 }}</td>
        <td class="column10 textCenter">{{ $identitasPuskesmas->kelas10->jumlah_gemuk_sangat_gemuk ?? 0 }}</td>
        <td class="column10 textCenter">{{ $identitasPuskesmas->kelas1->jumlah_gemuk_sangat_gemuk + $identitasPuskesmas->kelas7->jumlah_gemuk_sangat_gemuk + $identitasPuskesmas->kelas10->jumlah_gemuk_sangat_gemuk }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter"></td>
        <td class="column55">&nbsp;&nbsp; e. Karies</td>
        <td class="column10 textCenter">{{ $identitasPuskesmas->kelas1->jumlah_karies ?? 0 }}</td>
        <td class="column10 textCenter">{{ $identitasPuskesmas->kelas7->jumlah_karies ?? 0 }}</td>
        <td class="column10 textCenter">{{ $identitasPuskesmas->kelas10->jumlah_karies ?? 0 }}</td>
        <td class="column10 textCenter">{{ $identitasPuskesmas->kelas1->jumlah_karies + $identitasPuskesmas->kelas7->jumlah_karies + $identitasPuskesmas->kelas10->jumlah_karies }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter"></td>
        <td class="column55">&nbsp;&nbsp; f. Gangguan penglihatan</td>
        <td class="column10 textCenter">{{ $identitasPuskesmas->kelas1->jumlah_gangguan_penglihatan ?? 0 }}</td>
        <td class="column10 textCenter">{{ $identitasPuskesmas->kelas7->jumlah_gangguan_penglihatan ?? 0 }}</td>
        <td class="column10 textCenter">{{ $identitasPuskesmas->kelas10->jumlah_gangguan_penglihatan ?? 0 }}</td>
        <td class="column10 textCenter">{{ $identitasPuskesmas->kelas1->jumlah_gangguan_penglihatan + $identitasPuskesmas->kelas7->jumlah_gangguan_penglihatan + $identitasPuskesmas->kelas10->jumlah_gangguan_penglihatan }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter"></td>
        <td class="column55">&nbsp;&nbsp; g. Gangguan pendengaran</td>
        <td class="column10 textCenter">{{ $identitasPuskesmas->kelas1->jumlah_gangguan_pendengaran ?? 0 }}</td>
        <td class="column10 textCenter">{{ $identitasPuskesmas->kelas7->jumlah_gangguan_pendengaran ?? 0 }}</td>
        <td class="column10 textCenter">{{ $identitasPuskesmas->kelas10->jumlah_gangguan_pendengaran ?? 0 }}</td>
        <td class="column10 textCenter">{{ $identitasPuskesmas->kelas1->jumlah_gangguan_pendengaran + $identitasPuskesmas->kelas7->jumlah_gangguan_pendengaran + $identitasPuskesmas->kelas10->jumlah_gangguan_pendengaran }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter"></td>
        <td class="column55">&nbsp;&nbsp; h. Dugaan IMS</td>
        <td class="column10 textCenter">{{ $identitasPuskesmas->kelas1->jumlah_dugaan_ims ?? 0 }}</td>
        <td class="column10 textCenter">{{ $identitasPuskesmas->kelas7->jumlah_dugaan_ims ?? 0 }}</td>
        <td class="column10 textCenter">{{ $identitasPuskesmas->kelas10->jumlah_dugaan_ims ?? 0 }}</td>
        <td class="column10 textCenter">{{ $identitasPuskesmas->kelas1->jumlah_dugaan_ims + $identitasPuskesmas->kelas7->jumlah_dugaan_ims + $identitasPuskesmas->kelas10->jumlah_dugaan_ims }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter"></td>
        <td class="column55">&nbsp;&nbsp; i. Dugaan mengalami kekerasan seksual </td>
        <td class="column10 textCenter">{{ $identitasPuskesmas->kelas1->jumlah_dugaan_kekerasan_seksual ?? 0 }}</td>
        <td class="column10 textCenter">{{ $identitasPuskesmas->kelas7->jumlah_dugaan_kekerasan_seksual ?? 0 }}</td>
        <td class="column10 textCenter">{{ $identitasPuskesmas->kelas10->jumlah_dugaan_kekerasan_seksual ?? 0 }}</td>
        <td class="column10 textCenter">{{ $identitasPuskesmas->kelas1->jumlah_dugaan_kekerasan_seksual + $identitasPuskesmas->kelas7->jumlah_dugaan_kekerasan_seksual + $identitasPuskesmas->kelas10->jumlah_dugaan_kekerasan_seksual }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">5</td>
        <td class="column55">Jumlah peserta didik yang mendapatkan rujukan ke puskesmas</td>
        <td class="column10 textCenter">{{ $identitasPuskesmas->kelas1->jumlah_dapat_rujukan_puskesmas ?? 0 }}</td>
        <td class="column10 textCenter">{{ $identitasPuskesmas->kelas7->jumlah_dapat_rujukan_puskesmas ?? 0 }}</td>
        <td class="column10 textCenter">{{ $identitasPuskesmas->kelas10->jumlah_dapat_rujukan_puskesmas ?? 0 }}</td>
        <td class="column10 textCenter">{{ $identitasPuskesmas->kelas1->jumlah_dapat_rujukan_puskesmas + $identitasPuskesmas->kelas7->jumlah_dapat_rujukan_puskesmas + $identitasPuskesmas->kelas10->jumlah_dapat_rujukan_puskesmas }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">6</td>
        <td class="column55">Jumlah peserta didik yang mendapatkan Pelayanan Kesehatan Peduli Remaja (PKPR)</td>
        <td class="column10 textCenter">{{ $identitasPuskesmas->kelas1->jumlah_mendapatkan_pkpr ?? 0 }}</td>
        <td class="column10 textCenter">{{ $identitasPuskesmas->kelas7->jumlah_mendapatkan_pkpr ?? 0 }}</td>
        <td class="column10 textCenter">{{ $identitasPuskesmas->kelas10->jumlah_mendapatkan_pkpr ?? 0 }}</td>
        <td class="column10 textCenter">{{ $identitasPuskesmas->kelas1->jumlah_mendapatkan_pkpr + $identitasPuskesmas->kelas7->jumlah_mendapatkan_pkpr + $identitasPuskesmas->kelas10->jumlah_mendapatkan_pkpr }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">7</td>
        <td class="column55">Jumlah remaja putri yang telah mendapat tablet tambah darah dalam bulan ini (TTD)</td>
        <td class="column10 textCenter">{{ $identitasPuskesmas->kelas1->jumlah_mendapatkan_ttd ?? 0 }}</td>
        <td class="column10 textCenter">{{ $identitasPuskesmas->kelas7->jumlah_mendapatkan_ttd ?? 0 }}</td>
        <td class="column10 textCenter">{{ $identitasPuskesmas->kelas10->jumlah_mendapatkan_ttd ?? 0 }}</td>
        <td class="column10 textCenter">{{ $identitasPuskesmas->kelas1->jumlah_mendapatkan_ttd + $identitasPuskesmas->kelas7->jumlah_mendapatkan_ttd + $identitasPuskesmas->kelas10->jumlah_mendapatkan_ttd }}</td>
      </tr>
    </tbody>
  </table>
</body>

</html>