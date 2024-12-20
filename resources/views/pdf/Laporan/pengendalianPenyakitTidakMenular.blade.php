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
    <p style="text-align: center;">Formulir 7</p>
    <p style="text-align: center;">LAPORAN BULANAN PENGENDALIAN PENYAKIT TIDAK MENULAR </p>
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
        <td class="column80 textCenter">Kegiatan/Variabel</td>
        <td class="column15 textCenter">Jumlah</td>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td class="column5 columGrey textCenter">A</td>
        <td class="column80 columGrey">Deteksi Dini Kanker Leher Rahim dan Payudara</td>
        <td class="column15 columGrey"></td>
      </tr>
      <tr>
        <td class="column5 textCenter">1.</td>
        <td class="column80">Jumlah perempuan 30-50 tahun yang diperiksa IVASADANIS (pemeriksaan payudara klinis)</td>
        <td class="column15">{{ $dataPuskesmas->data[0]['jumlah_perempuan_30_50_periksa_payudara_klinis'] }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">2.</td>
        <td class="column80">Persentase cakupan perempuan 30-50 tahun yang diperiksa IVA-SADANIS</td>
        <td class="column15">{{ $dataPuskesmas->data[0]['jumlah_perempuan_iva_positif'] }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter" rowspan="9" style="vertical-align: top;">3.</td>
        <td class="column80">Jumlah perempuan usia 30-50 tahun dengan:</td>
        <td class="column15 columGrey"></td>
      </tr>
      <tr>
        <td class="column80">a.  IVA positif </td>
        <td class="column15">{{ $dataPuskesmas->data[0]['jumlah_perempuan_iva_positif'] }}</td>
      </tr>
      <tr>
        <td class="column80">b.  dicurigai kanker serviks</td>
        <td class="column15">{{ $dataPuskesmas->data[0]['jumlah_perempuan_dicurigai_kanker_serviks'] }}</td>
      </tr>
      <tr>
        <td class="column80">c. kelainan ginekologi lain</td>
        <td class="column15">{{ $dataPuskesmas->data[0]['jumlah_perempuan_kelainan_ginekologi_lain'] }}</td>
      </tr>
      <tr>
        <td class="column80">d. pap smear positif</td>
        <td class="column15">{{ $dataPuskesmas->data[0]['jumlah_perempuan_pap_smear_positif'] }}</td>
      </tr>
      <tr>
        <td class="column80">e. IVA positif yang sudah dikrioterapi</td>
        <td class="column15">{{ $dataPuskesmas->data[0]['jumlah_perempuan_iva_positif_sudah_dikiroterapi'] }}</td>
      </tr>
      <tr>
        <td class="column80">f. benjolan payudara</td>
        <td class="column15">{{ $dataPuskesmas->data[0]['jumlah_perempuan_dengan_benjolan_payudara'] }}</td>
      </tr>
      <tr>
        <td class="column80">g. dicurigai kanker payudara</td>
        <td class="column15">{{ $dataPuskesmas->data[0]['jumlah_perempuan_dicurigai_kanker_payudara'] }}</td>
      </tr>
      <tr>
        <td class="column80">h. kelainan payudara lainnya</td>
        <td class="column15">{{ $dataPuskesmas->data[0]['jumlah_perempuan_dengan_kelainan_payudara_lainnya'] }}</td>
      </tr>
      <tr>
        <td class="column5 columGrey textCenter">B</td>
        <td class="column80 columGrey">Pemeriksaan Faktor Risiko PTM</td>
        <td class="column15 columGrey"></td>
      </tr>
      <tr>
        <td class="column5 textCenter">1.</td>
        <td class="column80">Jumlah penduduk berusia 15-59 tahun melakukan pemeriksaan di Posbindu PTM</td>
        <td class="column15">{{ $dataPuskesmas->data[0]['jumlah_penduduk_15_59_periksa_posbindu'] }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter" rowspan="13" style="vertical-align: top;">2.</td>
        <td class="column80">Jumlah penduduk berusia ≥15 tahun melakukan pemeriksaan di Posbindu PTM dengan masalah kesehatan sebagai berikut:</td>
        <td class="column15 columGrey"></td>
      </tr>
      <tr>
        <td class="column80">a.  merokok</td>
        <td class="column15">{{ $dataPuskesmas->data[0]['jumlah_periksa_posbindu_masalah_merokok'] }}</td>
      </tr>
      <tr>
        <td class="column80">b.  kurang mengkonsumsi buah dan sayur</td>
        <td class="column15">{{ $dataPuskesmas->data[0]['jumlah_periksa_posbindu_masalah_kurang_konsumsi_buah_sayur'] }}</td>
      </tr>
      <tr>
        <td class="column80">c. kurang melakukan aktivitas fisik</td>
        <td class="column15">{{ $dataPuskesmas->data[0]['jumlah_periksa_posbindu_masalah_kurang_aktivitas_fisik'] }}</td>
      </tr>
      <tr>
        <td class="column80">d.   mengkonsumi alcohol</td>
        <td class="column15">{{ $dataPuskesmas->data[0]['jumlah_periksa_posbindu_masalah_konsumsi_alcohol'] }}</td>
      </tr>
      <tr>
        <td class="column80">e.  obesitas</td>
        <td class="column15">{{ $dataPuskesmas->data[0]['jumlah_periksa_posbindu_masalah_obesitas'] }}</td>
      </tr>
      <tr>
        <td class="column80">f. obesitas sentral</td>
        <td class="column15">{{ $dataPuskesmas->data[0]['jumlah_periksa_posbindu_masalah_obesitas_sentral'] }}</td>
      </tr>
      <tr>
        <td class="column80">g.  menderita tekanan darah tinggi</td>
        <td class="column15">{{ $dataPuskesmas->data[0]['jumlah_periksa_posbindu_masalah_tekanan_darah_tinggi'] }}</td>
      </tr>
      <tr>
        <td class="column80">h. Hiperglikemia</td>
        <td class="column15">{{ $dataPuskesmas->data[0]['jumlah_periksa_posbindu_masalah_hiperglikemia'] }}</td>
      </tr>
      <tr>
        <td class="column80">i.  Hiperkolesterolemia</td>
        <td class="column15">{{ $dataPuskesmas->data[0]['jumlah_periksa_posbindu_masalah_hiperkolesterolemia'] }}</td>
      </tr>
      <tr>
        <td class="column80">j. gangguan penglihatan</td>
        <td class="column15">{{ $dataPuskesmas->data[0]['jumlah_periksa_posbindu_masalah_penglihatan'] }}</td>
      </tr>
      <tr>
        <td class="column80">k. gangguan pendengaran</td>
        <td class="column15">{{ $dataPuskesmas->data[0]['jumlah_periksa_posbindu_masalah_pendengaran'] }}</td>
      </tr>
      <tr>
        <td class="column80">l.  gangguan emosi mental</td>
        <td class="column15">{{ $dataPuskesmas->data[0]['jumlah_periksa_posbindu_masalah_emosi_mental'] }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter" rowspan="3" style="vertical-align: top;">3.</td>
        <td class="column80">Gangguan PTM dengan penyakit penyerta Lain</td>
        <td class="column15 columGrey"></td>
      </tr>
      <tr>
        <td class="column80">a.    diabetes melitus dengan TB</td>
        <td class="column15">{{ $dataPuskesmas->data[0]['gangguan_ptm_diabetes_melitus_tb'] }}</td>
      </tr>
      <tr>
        <td class="column80">b.    diabetes melitus gestasional</td>
        <td class="column15">{{ $dataPuskesmas->data[0]['gangguan_ptm_diabetes_melitus_gestasional'] }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter" rowspan="4" style="vertical-align: top;">4.</td>
        <td class="column80">Jumlah penduduk mengikuti konseling kesehatan:</td>
        <td class="column15 columGrey"></td>
      </tr>
      <tr>
        <td class="column80">a. mengikuti konseling diet</td>
        <td class="column15">{{ $dataPuskesmas->data[0]['jumlah_penduduk_mengikuti_konseling_diet'] }}</td>
      </tr>
      <tr>
        <td class="column80">b.  mengikuti konseling berhenti merokok</td>
        <td class="column15">{{ $dataPuskesmas->data[0]['jumlah_penduduk_mengikuti_konseling_berhenti_merokok'] }}</td>
      </tr>
      <tr>
        <td class="column80">c. mengikuti konseling IVA-SADANIS</td>
        <td class="column15">{{ $dataPuskesmas->data[0]['jumlah_penduduk_mengikuti_konseling_iva_sadanis'] }}</td>
      </tr>
    </tbody>
  </table>
</body>

</html>