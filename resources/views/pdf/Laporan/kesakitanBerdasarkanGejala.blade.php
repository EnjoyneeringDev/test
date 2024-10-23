<!DOCTYPE html>
<html>

<head>
  <title>LAPORAN BULANAN KESAKITAN BERDASARKAN GEJALA, PENYEBAB PENYAKIT ATAU KONDISI PASIEN</title>
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
    <p style="text-align: center;">Formulir 10</p>
    <p style="text-align: center;">LAPORAN BULANAN KESAKITAN BERDASARKAN GEJALA, PENYEBAB PENYAKIT ATAU KONDISI PASIEN</p>
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
      <span style="width: 270px; height: 30px; display: inline-block; vertical-align: middle; border: 1px solid black; margin: 0) -3px !important; padding: 8px 0 0 8px; ">{{ ($dataPuskesmas->namaPuskesmas ?? "") }}</span>
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

  <table>
    <thead>
      <tr>
        <td class="column3 textCenter" rowspan="2">No</td>
        <td class="column15 textCenter" rowspan="2">GEJALA, PENYEBAB PENYAKIT ATAU KONDISI PASIEN</td>
        <td class="column3 textCenter" rowspan="2">Kode Unik</td>
        <td class="column65 textCenter" colspan="13">JUMLAH KASUS BARU (Umur dan Jenis Kelamin)</td>
        <td class="column15 textCenter" colspan="3">JUMLAH KASUS LAMA</td>
      </tr>
      <tr>
        <td class="column3 textCenter">0-7 hari</td>
        <td class="column3 textCenter">8-28 hari</td>
        <td class="column3 textCenter">1-11 bl</td>
        <td class="column3 textCenter">1-4 th</td>
        <td class="column3 textCenter">5-9 th</td>
        <td class="column3 textCenter">10-14 th</td>
        <td class="column3 textCenter">15-19 th</td>
        <td class="column3 textCenter">20-44 th</td>
        <td class="column3 textCenter">45-59 th</td>
        <td class="column3 textCenter">>59 th</td>
        <td class="column3 textCenter">L</td>
        <td class="column3 textCenter">P</td>
        <td class="column3 textCenter">JML</td>
        <td class="column3 textCenter">L</td>
        <td class="column3 textCenter">P</td>
        <td class="column3 textCenter">JML</td>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td class="column3 textCenter">A</td>
        <td class="column15">INFEKSI PADA USUS</td>
        <td class="column3 columGrey"></td>
        <td class="column3 columGrey"></td>
        <td class="column3 columGrey"></td>
        <td class="column3 columGrey"></td>
        <td class="column3 columGrey"></td>
        <td class="column3 columGrey"></td>
        <td class="column3 columGrey"></td>
        <td class="column3 columGrey"></td>
        <td class="column3 columGrey"></td>
        <td class="column3 columGrey"></td>
        <td class="column3 columGrey"></td>
        <td class="column3 columGrey"></td>
        <td class="column3 columGrey"></td>
        <td class="column3 columGrey"></td>
        <td class="column3 columGrey"></td>
        <td class="column3 columGrey"></td>
        <td class="column3 columGrey"></td>
      </tr>
      <tr>
        <td class="column3 textCenter">1</td>
        <td class="column15">Diare tanpa dehidrasi</td>
        <td class="column3">{{ ($dataPuskesmas->current->diare_tanpa_dehidrasi_kode ?? "") }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->diare_tanpa_dehidrasi_7hari ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->diare_tanpa_dehidrasi_28hari ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->diare_tanpa_dehidrasi_11bulan ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->diare_tanpa_dehidrasi_4tahun ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->diare_tanpa_dehidrasi_9tahun ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->diare_tanpa_dehidrasi_14tahun ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->diare_tanpa_dehidrasi_19tahun ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->diare_tanpa_dehidrasi_44tahun ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->diare_tanpa_dehidrasi_59tahun ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->diare_tanpa_dehidrasi_lebih_59tahun ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->diare_tanpa_dehidrasi_l ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->diare_tanpa_dehidrasi_p ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->diare_tanpa_dehidrasi_7hari ?? 0) + ($dataPuskesmas->current->diare_tanpa_dehidrasi_28hari ?? 0) + ($dataPuskesmas->current->diare_tanpa_dehidrasi_11bulan ?? 0) + ($dataPuskesmas->current->diare_tanpa_dehidrasi_4tahun ?? 0) + ($dataPuskesmas->current->diare_tanpa_dehidrasi_9tahun ?? 0) + ($dataPuskesmas->current->diare_tanpa_dehidrasi_14tahun ?? 0) + ($dataPuskesmas->current->diare_tanpa_dehidrasi_44tahun ?? 0) + ($dataPuskesmas->current->diare_tanpa_dehidrasi_59tahun ?? 0) + ($dataPuskesmas->current->diare_tanpa_dehidrasi_lebih_59tahun ?? 0) + ($dataPuskesmas->current->diare_tanpa_dehidrasi_l ?? 0) + ($dataPuskesmas->current->diare_tanpa_dehidrasi_p ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->previous->diare_tanpa_dehidrasi_l_lama ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->previous->diare_tanpa_dehidrasi_p_lama ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->previous->diare_tanpa_dehidrasi_l_lama ?? 0) + ($dataPuskesmas->previous->diare_tanpa_dehidrasi_p_lama ?? 0) }}</td>
      </tr>
      <tr>
        <td class="column3 textCenter">2</td>
        <td class="column15">Diare dengan dehidrasi ringan-sedang</td>
        <td class="column3">{{ ($dataPuskesmas->current->diare_dehidrasi_sedang_kode ?? "") }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->diare_dehidrasi_sedang_7hari ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->diare_dehidrasi_sedang_28hari ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->diare_dehidrasi_sedang_11bulan ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->diare_dehidrasi_sedang_4tahun ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->diare_dehidrasi_sedang_9tahun ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->diare_dehidrasi_sedang_14tahun ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->diare_dehidrasi_sedang_19tahun ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->diare_dehidrasi_sedang_44tahun ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->diare_dehidrasi_sedang_59tahun ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->diare_dehidrasi_sedang_lebih_59tahun ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->diare_dehidrasi_sedang_l ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->diare_dehidrasi_sedang_p ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->diare_dehidrasi_sedang_7hari ?? 0) + ($dataPuskesmas->current->diare_dehidrasi_sedang_28hari ?? 0) + ($dataPuskesmas->current->diare_dehidrasi_sedang_11bulan ?? 0) + ($dataPuskesmas->current->diare_dehidrasi_sedang_4tahun ?? 0) + ($dataPuskesmas->current->diare_dehidrasi_sedang_9tahun ?? 0) + ($dataPuskesmas->current->diare_dehidrasi_sedang_14tahun ?? 0) + ($dataPuskesmas->current->diare_dehidrasi_sedang_44tahun ?? 0) + ($dataPuskesmas->current->diare_dehidrasi_sedang_59tahun ?? 0) + ($dataPuskesmas->current->diare_dehidrasi_sedang_lebih_59tahun ?? 0) + ($dataPuskesmas->current->diare_dehidrasi_sedang_l ?? 0) + ($dataPuskesmas->current->diare_dehidrasi_sedang_p ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->previous->diare_dehidrasi_sedang_l_lama ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->previous->diare_dehidrasi_sedang_p_lama ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->previous->diare_dehidrasi_sedang_l_lama ?? 0) + ($dataPuskesmas->previous->diare_dehidrasi_sedang_p_lama ?? 0) }}</td>
      </tr>
      <tr>
        <td class="column3 textCenter">3</td>
        <td class="column15">Diare dengan dehidrasi berat</td>
        <td class="column3">{{ ($dataPuskesmas->current->diare_dehidrasi_berat_kode ?? "") }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->diare_dehidrasi_berat_7hari ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->diare_dehidrasi_berat_28hari ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->diare_dehidrasi_berat_11bulan ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->diare_dehidrasi_berat_4tahun ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->diare_dehidrasi_berat_9tahun ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->diare_dehidrasi_berat_14tahun ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->diare_dehidrasi_berat_19tahun ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->diare_dehidrasi_berat_44tahun ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->diare_dehidrasi_berat_59tahun ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->diare_dehidrasi_berat_lebih_59tahun ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->diare_dehidrasi_berat_l ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->diare_dehidrasi_berat_p ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->diare_dehidrasi_berat_7hari ?? 0) + ($dataPuskesmas->current->diare_dehidrasi_berat_28hari ?? 0) + ($dataPuskesmas->current->diare_dehidrasi_berat_11bulan ?? 0) + ($dataPuskesmas->current->diare_dehidrasi_berat_4tahun ?? 0) + ($dataPuskesmas->current->diare_dehidrasi_berat_9tahun ?? 0) + ($dataPuskesmas->current->diare_dehidrasi_berat_14tahun ?? 0) + ($dataPuskesmas->current->diare_dehidrasi_berat_44tahun ?? 0) + ($dataPuskesmas->current->diare_dehidrasi_berat_59tahun ?? 0) + ($dataPuskesmas->current->diare_dehidrasi_berat_lebih_59tahun ?? 0) + ($dataPuskesmas->current->diare_dehidrasi_berat_l ?? 0) + ($dataPuskesmas->current->diare_dehidrasi_berat_p ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->previous->diare_dehidrasi_berat_l_lama ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->previous->diare_dehidrasi_berat_p_lama ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->previous->diare_dehidrasi_berat_l_lama ?? 0) + ($dataPuskesmas->previous->diare_dehidrasi_berat_p_lama ?? 0) }}</td>
      </tr>
      <tr>
        <td class="column3 textCenter">B</td>
        <td class="column15">INFEKSI PADA SALURAN PERNAFASAN</td>
        <td class="column3 columGrey"></td>
        <td class="column3 columGrey"></td>
        <td class="column3 columGrey"></td>
        <td class="column3 columGrey"></td>
        <td class="column3 columGrey"></td>
        <td class="column3 columGrey"></td>
        <td class="column3 columGrey"></td>
        <td class="column3 columGrey"></td>
        <td class="column3 columGrey"></td>
        <td class="column3 columGrey"></td>
        <td class="column3 columGrey"></td>
        <td class="column3 columGrey"></td>
        <td class="column3 columGrey"></td>
        <td class="column3 columGrey"></td>
        <td class="column3 columGrey"></td>
        <td class="column3 columGrey"></td>
        <td class="column3 columGrey"></td>
      </tr>
      <tr>
        <td class="column3 textCenter">1</td>
        <td class="column15">Pneumonia berat</td>
        <td class="column3">{{ ($dataPuskesmas->current->penuomonia_kode ?? "") }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->penuomonia_7hari ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->penuomonia_28hari ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->penuomonia_11bulan ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->penuomonia_4tahun ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->penuomonia_9tahun ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->penuomonia_14tahun ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->penuomonia_19tahun ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->penuomonia_44tahun ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->penuomonia_59tahun ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->penuomonia_lebih_59tahun ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->penuomonia_l ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->penuomonia_p ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->penuomonia_7hari ?? 0) + ($dataPuskesmas->current->penuomonia_28hari ?? 0) + ($dataPuskesmas->current->penuomonia_11bulan ?? 0) + ($dataPuskesmas->current->penuomonia_4tahun ?? 0) + ($dataPuskesmas->current->penuomonia_9tahun ?? 0) + ($dataPuskesmas->current->penuomonia_14tahun ?? 0) + ($dataPuskesmas->current->penuomonia_44tahun ?? 0) + ($dataPuskesmas->current->penuomonia_59tahun ?? 0) + ($dataPuskesmas->current->penuomonia_lebih_59tahun ?? 0) + ($dataPuskesmas->current->penuomonia_l ?? 0) + ($dataPuskesmas->current->penuomonia_p ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->previous->penuomonia_l_lama ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->previous->penuomonia_p_lama ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->previous->penuomonia_l_lama ?? 0) + ($dataPuskesmas->previous->penuomonia_p_lama ?? 0) }}</td>
      </tr>
      <tr>
        <td class="column3 textCenter">C</td>
        <td class="column15">INFEKSI UMUM BAKTERI</td>
        <td class="column3 columGrey"></td>
        <td class="column3 columGrey"></td>
        <td class="column3 columGrey"></td>
        <td class="column3 columGrey"></td>
        <td class="column3 columGrey"></td>
        <td class="column3 columGrey"></td>
        <td class="column3 columGrey"></td>
        <td class="column3 columGrey"></td>
        <td class="column3 columGrey"></td>
        <td class="column3 columGrey"></td>
        <td class="column3 columGrey"></td>
        <td class="column3 columGrey"></td>
        <td class="column3 columGrey"></td>
        <td class="column3 columGrey"></td>
        <td class="column3 columGrey"></td>
        <td class="column3 columGrey"></td>
        <td class="column3 columGrey"></td>
      </tr>
      <tr>
        <td class="column3 textCenter">1</td>
        <td class="column15">Demam tifoid probable</td>
        <td class="column3">{{ ($dataPuskesmas->current->demam_probable_kode ?? "") }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->demam_probable_7hari ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->demam_probable_28hari ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->demam_probable_11bulan ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->demam_probable_4tahun ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->demam_probable_9tahun ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->demam_probable_14tahun ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->demam_probable_19tahun ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->demam_probable_44tahun ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->demam_probable_59tahun ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->demam_probable_lebih_59tahun ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->demam_probable_l ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->demam_probable_p ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->demam_probable_7hari ?? 0) + ($dataPuskesmas->current->demam_probable_28hari ?? 0) + ($dataPuskesmas->current->demam_probable_11bulan ?? 0) + ($dataPuskesmas->current->demam_probable_4tahun ?? 0) + ($dataPuskesmas->current->demam_probable_9tahun ?? 0) + ($dataPuskesmas->current->demam_probable_14tahun ?? 0) + ($dataPuskesmas->current->demam_probable_44tahun ?? 0) + ($dataPuskesmas->current->demam_probable_59tahun ?? 0) + ($dataPuskesmas->current->demam_probable_lebih_59tahun ?? 0) + ($dataPuskesmas->current->demam_probable_l ?? 0) + ($dataPuskesmas->current->demam_probable_p ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->previous->demam_probable_l_lama ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->previous->demam_probable_p_lama ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->previous->demam_probable_l_lama ?? 0) + ($dataPuskesmas->previous->demam_probable_p_lama ?? 0) }}</td>
      </tr>
      <tr>
        <td class="column3 textCenter">2</td>
        <td class="column15">Demam tifoid konfirmasi</td>
        <td class="column3">{{ ($dataPuskesmas->current->demam_konfirmasi_kode ?? "") }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->demam_konfirmasi_7hari ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->demam_konfirmasi_28hari ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->demam_konfirmasi_11bulan ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->demam_konfirmasi_4tahun ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->demam_konfirmasi_9tahun ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->demam_konfirmasi_14tahun ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->demam_konfirmasi_19tahun ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->demam_konfirmasi_44tahun ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->demam_konfirmasi_59tahun ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->demam_konfirmasi_lebih_59tahun ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->demam_konfirmasi_l ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->demam_konfirmasi_p ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->demam_konfirmasi_7hari ?? 0) + ($dataPuskesmas->current->demam_konfirmasi_28hari ?? 0) + ($dataPuskesmas->current->demam_konfirmasi_11bulan ?? 0) + ($dataPuskesmas->current->demam_konfirmasi_4tahun ?? 0) + ($dataPuskesmas->current->demam_konfirmasi_9tahun ?? 0) + ($dataPuskesmas->current->demam_konfirmasi_14tahun ?? 0) + ($dataPuskesmas->current->demam_konfirmasi_44tahun ?? 0) + ($dataPuskesmas->current->demam_konfirmasi_59tahun ?? 0) + ($dataPuskesmas->current->demam_konfirmasi_lebih_59tahun ?? 0) + ($dataPuskesmas->current->demam_konfirmasi_l ?? 0) + ($dataPuskesmas->current->demam_konfirmasi_p ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->previous->demam_konfirmasi_l_lama ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->previous->demam_konfirmasi_p_lama ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->previous->demam_konfirmasi_l_lama ?? 0) + ($dataPuskesmas->previous->demam_konfirmasi_p_lama ?? 0) }}</td>
      </tr>
      <tr>
        <td class="column3 textCenter">D</td>
        <td class="column15">INFEKSI UMUM VIRUS</td>
        <td class="column3 columGrey"></td>
        <td class="column3 columGrey"></td>
        <td class="column3 columGrey"></td>
        <td class="column3 columGrey"></td>
        <td class="column3 columGrey"></td>
        <td class="column3 columGrey"></td>
        <td class="column3 columGrey"></td>
        <td class="column3 columGrey"></td>
        <td class="column3 columGrey"></td>
        <td class="column3 columGrey"></td>
        <td class="column3 columGrey"></td>
        <td class="column3 columGrey"></td>
        <td class="column3 columGrey"></td>
        <td class="column3 columGrey"></td>
        <td class="column3 columGrey"></td>
        <td class="column3 columGrey"></td>
        <td class="column3 columGrey"></td>
      </tr>
      <tr>
        <td class="column3 textCenter">1</td>
        <td class="column15">Acute flaccid paralysis (AFP)</td>
        <td class="column3">{{ ($dataPuskesmas->current->afp_kode ?? "") }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->afp_7hari ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->afp_28hari ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->afp_11bulan ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->afp_4tahun ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->afp_9tahun ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->afp_14tahun ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->afp_19tahun ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->afp_44tahun ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->afp_59tahun ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->afp_lebih_59tahun ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->afp_l ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->afp_p ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->afp_7hari ?? 0) + ($dataPuskesmas->current->afp_28hari ?? 0) + ($dataPuskesmas->current->afp_11bulan ?? 0) + ($dataPuskesmas->current->afp_4tahun ?? 0) + ($dataPuskesmas->current->afp_9tahun ?? 0) + ($dataPuskesmas->current->afp_14tahun ?? 0) + ($dataPuskesmas->current->afp_44tahun ?? 0) + ($dataPuskesmas->current->afp_59tahun ?? 0) + ($dataPuskesmas->current->afp_lebih_59tahun ?? 0) + ($dataPuskesmas->current->afp_l ?? 0) + ($dataPuskesmas->current->afp_p ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->previous->afp_l_lama ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->previous->afp_p_lama ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->previous->afp_l_lama ?? 0) + ($dataPuskesmas->previous->afp_p_lama ?? 0) }}</td>
      </tr>
      <tr>
        <td class="column3 textCenter">2</td>
        <td class="column15">Hepatitis klinis (ikterik/warna urine seperti teh)</td>
        <td class="column3">{{ ($dataPuskesmas->current->hepatitis_klinis_kode ?? "") }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->hepatitis_klinis_7hari ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->hepatitis_klinis_28hari ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->hepatitis_klinis_11bulan ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->hepatitis_klinis_4tahun ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->hepatitis_klinis_9tahun ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->hepatitis_klinis_14tahun ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->hepatitis_klinis_19tahun ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->hepatitis_klinis_44tahun ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->hepatitis_klinis_59tahun ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->hepatitis_klinis_lebih_59tahun ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->hepatitis_klinis_l ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->hepatitis_klinis_p ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->hepatitis_klinis_7hari ?? 0) + ($dataPuskesmas->current->hepatitis_klinis_28hari ?? 0) + ($dataPuskesmas->current->hepatitis_klinis_11bulan ?? 0) + ($dataPuskesmas->current->hepatitis_klinis_4tahun ?? 0) + ($dataPuskesmas->current->hepatitis_klinis_9tahun ?? 0) + ($dataPuskesmas->current->hepatitis_klinis_14tahun ?? 0) + ($dataPuskesmas->current->hepatitis_klinis_44tahun ?? 0) + ($dataPuskesmas->current->hepatitis_klinis_59tahun ?? 0) + ($dataPuskesmas->current->hepatitis_klinis_lebih_59tahun ?? 0) + ($dataPuskesmas->current->hepatitis_klinis_l ?? 0) + ($dataPuskesmas->current->hepatitis_klinis_p ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->previous->hepatitis_klinis_l_lama ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->previous->hepatitis_klinis_p_lama ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->previous->hepatitis_klinis_l_lama ?? 0) + ($dataPuskesmas->previous->hepatitis_klinis_p_lama ?? 0) }}</td>
      </tr>
      <tr>
        <td class="column3 textCenter">E</td>
        <td class="column15">GANGGUAN MATA DAN ADNEKSA</td>
        <td class="column3 columGrey"></td>
        <td class="column3 columGrey"></td>
        <td class="column3 columGrey"></td>
        <td class="column3 columGrey"></td>
        <td class="column3 columGrey"></td>
        <td class="column3 columGrey"></td>
        <td class="column3 columGrey"></td>
        <td class="column3 columGrey"></td>
        <td class="column3 columGrey"></td>
        <td class="column3 columGrey"></td>
        <td class="column3 columGrey"></td>
        <td class="column3 columGrey"></td>
        <td class="column3 columGrey"></td>
        <td class="column3 columGrey"></td>
        <td class="column3 columGrey"></td>
        <td class="column3 columGrey"></td>
        <td class="column3 columGrey"></td>
      </tr>
      <tr>
        <td class="column3 textCenter">1</td>
        <td class="column15">Buta</td>
        <td class="column3">{{ ($dataPuskesmas->current->buta_kode ?? "") }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->buta_7hari ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->buta_28hari ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->buta_11bulan ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->buta_4tahun ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->buta_9tahun ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->buta_14tahun ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->buta_19tahun ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->buta_44tahun ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->buta_59tahun ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->buta_lebih_59tahun ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->buta_l ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->buta_p ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->buta_7hari ?? 0) + ($dataPuskesmas->current->buta_28hari ?? 0) + ($dataPuskesmas->current->buta_11bulan ?? 0) + ($dataPuskesmas->current->buta_4tahun ?? 0) + ($dataPuskesmas->current->buta_9tahun ?? 0) + ($dataPuskesmas->current->buta_14tahun ?? 0) + ($dataPuskesmas->current->buta_44tahun ?? 0) + ($dataPuskesmas->current->buta_59tahun ?? 0) + ($dataPuskesmas->current->buta_lebih_59tahun ?? 0) + ($dataPuskesmas->current->buta_l ?? 0) + ($dataPuskesmas->current->buta_p ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->previous->buta_l_lama ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->previous->buta_p_lama ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->previous->buta_l_lama ?? 0) + ($dataPuskesmas->previous->buta_p_lama ?? 0) }}</td>
      </tr>
      <tr>
        <td class="column3 textCenter">F</td>
        <td class="column15">KECELAKAAN DAN KERACUNAN</td>
        <td class="column3 columGrey"></td>
        <td class="column3 columGrey"></td>
        <td class="column3 columGrey"></td>
        <td class="column3 columGrey"></td>
        <td class="column3 columGrey"></td>
        <td class="column3 columGrey"></td>
        <td class="column3 columGrey"></td>
        <td class="column3 columGrey"></td>
        <td class="column3 columGrey"></td>
        <td class="column3 columGrey"></td>
        <td class="column3 columGrey"></td>
        <td class="column3 columGrey"></td>
        <td class="column3 columGrey"></td>
        <td class="column3 columGrey"></td>
        <td class="column3 columGrey"></td>
        <td class="column3 columGrey"></td>
        <td class="column3 columGrey"></td>
      </tr>
      <tr>
        <td class="column3 textCenter">1</td>
        <td class="column15">Cedera akibat kecelakaan transport</td>
        <td class="column3">{{ ($dataPuskesmas->current->cedera_transport_kode ?? "") }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->cedera_transport_7hari ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->cedera_transport_28hari ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->cedera_transport_11bulan ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->cedera_transport_4tahun ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->cedera_transport_9tahun ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->cedera_transport_14tahun ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->cedera_transport_19tahun ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->cedera_transport_44tahun ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->cedera_transport_59tahun ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->cedera_transport_lebih_59tahun ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->cedera_transport_l ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->cedera_transport_p ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->cedera_transport_7hari ?? 0) + ($dataPuskesmas->current->cedera_transport_28hari ?? 0) + ($dataPuskesmas->current->cedera_transport_11bulan ?? 0) + ($dataPuskesmas->current->cedera_transport_4tahun ?? 0) + ($dataPuskesmas->current->cedera_transport_9tahun ?? 0) + ($dataPuskesmas->current->cedera_transport_14tahun ?? 0) + ($dataPuskesmas->current->cedera_transport_44tahun ?? 0) + ($dataPuskesmas->current->cedera_transport_59tahun ?? 0) + ($dataPuskesmas->current->cedera_transport_lebih_59tahun ?? 0) + ($dataPuskesmas->current->cedera_transport_l ?? 0) + ($dataPuskesmas->current->cedera_transport_p ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->previous->cedera_transport_l_lama ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->previous->cedera_transport_p_lama ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->previous->cedera_transport_l_lama ?? 0) + ($dataPuskesmas->previous->cedera_transport_p_lama ?? 0) }}</td>
      </tr>
      <tr>
        <td class="column3 textCenter">2</td>
        <td class="column15">Cedera akibat tenggelam</td>
        <td class="column3">{{ ($dataPuskesmas->current->cedera_tenggelam_kode ?? "") }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->cedera_tenggelam_7hari ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->cedera_tenggelam_28hari ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->cedera_tenggelam_11bulan ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->cedera_tenggelam_4tahun ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->cedera_tenggelam_9tahun ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->cedera_tenggelam_14tahun ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->cedera_tenggelam_19tahun ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->cedera_tenggelam_44tahun ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->cedera_tenggelam_59tahun ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->cedera_tenggelam_lebih_59tahun ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->cedera_tenggelam_l ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->cedera_tenggelam_p ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->cedera_tenggelam_7hari ?? 0) + ($dataPuskesmas->current->cedera_tenggelam_28hari ?? 0) + ($dataPuskesmas->current->cedera_tenggelam_11bulan ?? 0) + ($dataPuskesmas->current->cedera_tenggelam_4tahun ?? 0) + ($dataPuskesmas->current->cedera_tenggelam_9tahun ?? 0) + ($dataPuskesmas->current->cedera_tenggelam_14tahun ?? 0) + ($dataPuskesmas->current->cedera_tenggelam_44tahun ?? 0) + ($dataPuskesmas->current->cedera_tenggelam_59tahun ?? 0) + ($dataPuskesmas->current->cedera_tenggelam_lebih_59tahun ?? 0) + ($dataPuskesmas->current->cedera_tenggelam_l ?? 0) + ($dataPuskesmas->current->cedera_tenggelam_p ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->previous->cedera_tenggelam_l_lama ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->previous->cedera_tenggelam_p_lama ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->previous->cedera_tenggelam_l_lama ?? 0) + ($dataPuskesmas->previous->cedera_tenggelam_p_lama ?? 0) }}</td>
      </tr>
      <tr>
        <td class="column3 textCenter">3</td>
        <td class="column15">Cedera akibat jatuh</td>
        <td class="column3">{{ ($dataPuskesmas->current->cedera_jatuh_kode ?? "") }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->cedera_jatuh_7hari ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->cedera_jatuh_28hari ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->cedera_jatuh_11bulan ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->cedera_jatuh_4tahun ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->cedera_jatuh_9tahun ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->cedera_jatuh_14tahun ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->cedera_jatuh_19tahun ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->cedera_jatuh_44tahun ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->cedera_jatuh_59tahun ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->cedera_jatuh_lebih_59tahun ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->cedera_jatuh_l ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->cedera_jatuh_p ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->cedera_jatuh_7hari ?? 0) + ($dataPuskesmas->current->cedera_jatuh_28hari ?? 0) + ($dataPuskesmas->current->cedera_jatuh_11bulan ?? 0) + ($dataPuskesmas->current->cedera_jatuh_4tahun ?? 0) + ($dataPuskesmas->current->cedera_jatuh_9tahun ?? 0) + ($dataPuskesmas->current->cedera_jatuh_14tahun ?? 0) + ($dataPuskesmas->current->cedera_jatuh_44tahun ?? 0) + ($dataPuskesmas->current->cedera_jatuh_59tahun ?? 0) + ($dataPuskesmas->current->cedera_jatuh_lebih_59tahun ?? 0) + ($dataPuskesmas->current->cedera_jatuh_l ?? 0) + ($dataPuskesmas->current->cedera_jatuh_p ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->previous->cedera_jatuh_l_lama ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->previous->cedera_jatuh_p_lama ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->previous->cedera_jatuh_l_lama ?? 0) + ($dataPuskesmas->previous->cedera_jatuh_p_lama ?? 0) }}</td>
      </tr>
      <tr>
        <td class="column3 textCenter">4</td>
        <td class="column15">Cedera akibat terbakar</td>
        <td class="column3">{{ ($dataPuskesmas->current->cedera_terbakar_kode ?? "") }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->cedera_terbakar_7hari ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->cedera_terbakar_28hari ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->cedera_terbakar_11bulan ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->cedera_terbakar_4tahun ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->cedera_terbakar_9tahun ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->cedera_terbakar_14tahun ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->cedera_terbakar_19tahun ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->cedera_terbakar_44tahun ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->cedera_terbakar_59tahun ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->cedera_terbakar_lebih_59tahun ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->cedera_terbakar_l ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->cedera_terbakar_p ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->cedera_terbakar_7hari ?? 0) + ($dataPuskesmas->current->cedera_terbakar_28hari ?? 0) + ($dataPuskesmas->current->cedera_terbakar_11bulan ?? 0) + ($dataPuskesmas->current->cedera_terbakar_4tahun ?? 0) + ($dataPuskesmas->current->cedera_terbakar_9tahun ?? 0) + ($dataPuskesmas->current->cedera_terbakar_14tahun ?? 0) + ($dataPuskesmas->current->cedera_terbakar_44tahun ?? 0) + ($dataPuskesmas->current->cedera_terbakar_59tahun ?? 0) + ($dataPuskesmas->current->cedera_terbakar_lebih_59tahun ?? 0) + ($dataPuskesmas->current->cedera_terbakar_l ?? 0) + ($dataPuskesmas->current->cedera_terbakar_p ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->previous->cedera_terbakar_l_lama ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->previous->cedera_terbakar_p_lama ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->previous->cedera_terbakar_l_lama ?? 0) + ($dataPuskesmas->previous->cedera_terbakar_p_lama ?? 0) }}</td>
      </tr>
      <tr>
        <td class="column3 textCenter">5</td>
        <td class="column15">Cedera akibat digigit ular</td>
        <td class="column3">{{ ($dataPuskesmas->current->cedera_ular_kode ?? "") }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->cedera_ular_7hari ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->cedera_ular_28hari ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->cedera_ular_11bulan ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->cedera_ular_4tahun ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->cedera_ular_9tahun ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->cedera_ular_14tahun ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->cedera_ular_19tahun ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->cedera_ular_44tahun ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->cedera_ular_59tahun ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->cedera_ular_lebih_59tahun ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->cedera_ular_l ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->cedera_ular_p ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->cedera_ular_7hari ?? 0) + ($dataPuskesmas->current->cedera_ular_28hari ?? 0) + ($dataPuskesmas->current->cedera_ular_11bulan ?? 0) + ($dataPuskesmas->current->cedera_ular_4tahun ?? 0) + ($dataPuskesmas->current->cedera_ular_9tahun ?? 0) + ($dataPuskesmas->current->cedera_ular_14tahun ?? 0) + ($dataPuskesmas->current->cedera_ular_44tahun ?? 0) + ($dataPuskesmas->current->cedera_ular_59tahun ?? 0) + ($dataPuskesmas->current->cedera_ular_lebih_59tahun ?? 0) + ($dataPuskesmas->current->cedera_ular_l ?? 0) + ($dataPuskesmas->current->cedera_ular_p ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->previous->cedera_ular_l_lama ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->previous->cedera_ular_p_lama ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->previous->cedera_ular_l_lama ?? 0) + ($dataPuskesmas->previous->cedera_ular_p_lama ?? 0) }}</td>
      </tr>
      <tr>
        <td class="column3 textCenter">6</td>
        <td class="column15">Cedera atau gangguan kesehatan akibat kekerasan fisik</td>
        <td class="column3">{{ ($dataPuskesmas->current->cedera_fisik_kode ?? "") }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->cedera_fisik_7hari ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->cedera_fisik_28hari ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->cedera_fisik_11bulan ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->cedera_fisik_4tahun ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->cedera_fisik_9tahun ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->cedera_fisik_14tahun ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->cedera_fisik_19tahun ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->cedera_fisik_44tahun ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->cedera_fisik_59tahun ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->cedera_fisik_lebih_59tahun ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->cedera_fisik_l ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->cedera_fisik_p ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->cedera_fisik_7hari ?? 0) + ($dataPuskesmas->current->cedera_fisik_28hari ?? 0) + ($dataPuskesmas->current->cedera_fisik_11bulan ?? 0) + ($dataPuskesmas->current->cedera_fisik_4tahun ?? 0) + ($dataPuskesmas->current->cedera_fisik_9tahun ?? 0) + ($dataPuskesmas->current->cedera_fisik_14tahun ?? 0) + ($dataPuskesmas->current->cedera_fisik_44tahun ?? 0) + ($dataPuskesmas->current->cedera_fisik_59tahun ?? 0) + ($dataPuskesmas->current->cedera_fisik_lebih_59tahun ?? 0) + ($dataPuskesmas->current->cedera_fisik_l ?? 0) + ($dataPuskesmas->current->cedera_fisik_p ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->previous->cedera_fisik_l_lama ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->previous->cedera_fisik_p_lama ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->previous->cedera_fisik_l_lama ?? 0) + ($dataPuskesmas->previous->cedera_fisik_p_lama ?? 0) }}</td>
      </tr>
      <tr>
        <td class="column3 textCenter">7</td>
        <td class="column15">Gangguan kesehatan akibat kekerasan mental</td>
        <td class="column3">{{ ($dataPuskesmas->current->cedera_mental_kode ?? "") }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->cedera_mental_7hari ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->cedera_mental_28hari ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->cedera_mental_11bulan ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->cedera_mental_4tahun ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->cedera_mental_9tahun ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->cedera_mental_14tahun ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->cedera_mental_19tahun ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->cedera_mental_44tahun ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->cedera_mental_59tahun ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->cedera_mental_lebih_59tahun ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->cedera_mental_l ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->cedera_mental_p ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->cedera_mental_7hari ?? 0) + ($dataPuskesmas->current->cedera_mental_28hari ?? 0) + ($dataPuskesmas->current->cedera_mental_11bulan ?? 0) + ($dataPuskesmas->current->cedera_mental_4tahun ?? 0) + ($dataPuskesmas->current->cedera_mental_9tahun ?? 0) + ($dataPuskesmas->current->cedera_mental_14tahun ?? 0) + ($dataPuskesmas->current->cedera_mental_44tahun ?? 0) + ($dataPuskesmas->current->cedera_mental_59tahun ?? 0) + ($dataPuskesmas->current->cedera_mental_lebih_59tahun ?? 0) + ($dataPuskesmas->current->cedera_mental_l ?? 0) + ($dataPuskesmas->current->cedera_mental_p ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->previous->cedera_mental_l_lama ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->previous->cedera_mental_p_lama ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->previous->cedera_mental_l_lama ?? 0) + ($dataPuskesmas->previous->cedera_mental_p_lama ?? 0) }}</td>
      </tr>
      <tr>
        <td class="column3 textCenter">8</td>
        <td class="column15">Gangguan kesehatan akibat kekerasan seksual</td>
        <td class="column3">{{ ($dataPuskesmas->current->kekerasan_seksual_kode ?? "") }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->kekerasan_seksual_7hari ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->kekerasan_seksual_28hari ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->kekerasan_seksual_11bulan ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->kekerasan_seksual_4tahun ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->kekerasan_seksual_9tahun ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->kekerasan_seksual_14tahun ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->kekerasan_seksual_19tahun ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->kekerasan_seksual_44tahun ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->kekerasan_seksual_59tahun ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->kekerasan_seksual_lebih_59tahun ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->kekerasan_seksual_l ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->kekerasan_seksual_p ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->kekerasan_seksual_7hari ?? 0) + ($dataPuskesmas->current->kekerasan_seksual_28hari ?? 0) + ($dataPuskesmas->current->kekerasan_seksual_11bulan ?? 0) + ($dataPuskesmas->current->kekerasan_seksual_4tahun ?? 0) + ($dataPuskesmas->current->kekerasan_seksual_9tahun ?? 0) + ($dataPuskesmas->current->kekerasan_seksual_14tahun ?? 0) + ($dataPuskesmas->current->kekerasan_seksual_44tahun ?? 0) + ($dataPuskesmas->current->kekerasan_seksual_59tahun ?? 0) + ($dataPuskesmas->current->kekerasan_seksual_lebih_59tahun ?? 0) + ($dataPuskesmas->current->kekerasan_seksual_l ?? 0) + ($dataPuskesmas->current->kekerasan_seksual_p ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->previous->kekerasan_seksual_l_lama ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->previous->kekerasan_seksual_p_lama ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->previous->kekerasan_seksual_l_lama ?? 0) + ($dataPuskesmas->previous->kekerasan_seksual_p_lama ?? 0) }}</td>
      </tr>
      <tr>
        <td class="column3 textCenter">9</td>
        <td class="column15">Keracunan bahan kimia (bukan makanan)</td>
        <td class="column3">{{ ($dataPuskesmas->current->keracunan_kimia_kode ?? "") }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->keracunan_kimia_7hari ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->keracunan_kimia_28hari ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->keracunan_kimia_11bulan ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->keracunan_kimia_4tahun ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->keracunan_kimia_9tahun ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->keracunan_kimia_14tahun ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->keracunan_kimia_19tahun ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->keracunan_kimia_44tahun ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->keracunan_kimia_59tahun ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->keracunan_kimia_lebih_59tahun ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->keracunan_kimia_l ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->keracunan_kimia_p ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->keracunan_kimia_7hari ?? 0) + ($dataPuskesmas->current->keracunan_kimia_28hari ?? 0) + ($dataPuskesmas->current->keracunan_kimia_11bulan ?? 0) + ($dataPuskesmas->current->keracunan_kimia_4tahun ?? 0) + ($dataPuskesmas->current->keracunan_kimia_9tahun ?? 0) + ($dataPuskesmas->current->keracunan_kimia_14tahun ?? 0) + ($dataPuskesmas->current->keracunan_kimia_44tahun ?? 0) + ($dataPuskesmas->current->keracunan_kimia_59tahun ?? 0) + ($dataPuskesmas->current->keracunan_kimia_lebih_59tahun ?? 0) + ($dataPuskesmas->current->keracunan_kimia_l ?? 0) + ($dataPuskesmas->current->keracunan_kimia_p ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->previous->keracunan_kimia_l_lama ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->previous->keracunan_kimia_p_lama ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->previous->keracunan_kimia_l_lama ?? 0) + ($dataPuskesmas->previous->keracunan_kimia_p_lama ?? 0) }}</td>
      </tr>
      <tr>
        <td class="column3 textCenter">10</td>
        <td class="column15">Keracunan makanan</td>
        <td class="column3">{{ ($dataPuskesmas->current->keracunan_makanan_kode ?? "") }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->keracunan_makanan_7hari ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->keracunan_makanan_28hari ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->keracunan_makanan_11bulan ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->keracunan_makanan_4tahun ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->keracunan_makanan_9tahun ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->keracunan_makanan_14tahun ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->keracunan_makanan_19tahun ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->keracunan_makanan_44tahun ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->keracunan_makanan_59tahun ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->keracunan_makanan_lebih_59tahun ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->keracunan_makanan_l ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->keracunan_makanan_p ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->keracunan_makanan_7hari ?? 0) + ($dataPuskesmas->current->keracunan_makanan_28hari ?? 0) + ($dataPuskesmas->current->keracunan_makanan_11bulan ?? 0) + ($dataPuskesmas->current->keracunan_makanan_4tahun ?? 0) + ($dataPuskesmas->current->keracunan_makanan_9tahun ?? 0) + ($dataPuskesmas->current->keracunan_makanan_14tahun ?? 0) + ($dataPuskesmas->current->keracunan_makanan_44tahun ?? 0) + ($dataPuskesmas->current->keracunan_makanan_59tahun ?? 0) + ($dataPuskesmas->current->keracunan_makanan_lebih_59tahun ?? 0) + ($dataPuskesmas->current->keracunan_makanan_l ?? 0) + ($dataPuskesmas->current->keracunan_makanan_p ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->previous->keracunan_makanan_l_lama ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->previous->keracunan_makanan_p_lama ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->previous->keracunan_makanan_l_lama ?? 0) + ($dataPuskesmas->previous->keracunan_makanan_p_lama ?? 0) }}</td>
      </tr>
      <tr>
        <td class="column3 textCenter">G</td>
        <td class="column15">GANGGUAN (CEDERA, PENYAKIT) AKIBAT KERJA</td>
        <td class="column3 columGrey"></td>
        <td class="column3 columGrey"></td>
        <td class="column3 columGrey"></td>
        <td class="column3 columGrey"></td>
        <td class="column3 columGrey"></td>
        <td class="column3 columGrey"></td>
        <td class="column3 columGrey"></td>
        <td class="column3 columGrey"></td>
        <td class="column3 columGrey"></td>
        <td class="column3 columGrey"></td>
        <td class="column3 columGrey"></td>
        <td class="column3 columGrey"></td>
        <td class="column3 columGrey"></td>
        <td class="column3 columGrey"></td>
        <td class="column3 columGrey"></td>
        <td class="column3 columGrey"></td>
        <td class="column3 columGrey"></td>
      </tr>
      <tr>
        <td class="column3 textCenter">1</td>
        <td class="column15">Sakit akibat kerja</td>
        <td class="column3">{{ ($dataPuskesmas->current->sakit_kerja_kode ?? "") }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->sakit_kerja_7hari ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->sakit_kerja_28hari ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->sakit_kerja_11bulan ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->sakit_kerja_4tahun ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->sakit_kerja_9tahun ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->sakit_kerja_14tahun ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->sakit_kerja_19tahun ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->sakit_kerja_44tahun ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->sakit_kerja_59tahun ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->sakit_kerja_lebih_59tahun ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->sakit_kerja_l ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->sakit_kerja_p ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->sakit_kerja_7hari ?? 0) + ($dataPuskesmas->current->sakit_kerja_28hari ?? 0) + ($dataPuskesmas->current->sakit_kerja_11bulan ?? 0) + ($dataPuskesmas->current->sakit_kerja_4tahun ?? 0) + ($dataPuskesmas->current->sakit_kerja_9tahun ?? 0) + ($dataPuskesmas->current->sakit_kerja_14tahun ?? 0) + ($dataPuskesmas->current->sakit_kerja_44tahun ?? 0) + ($dataPuskesmas->current->sakit_kerja_59tahun ?? 0) + ($dataPuskesmas->current->sakit_kerja_lebih_59tahun ?? 0) + ($dataPuskesmas->current->sakit_kerja_l ?? 0) + ($dataPuskesmas->current->sakit_kerja_p ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->previous->sakit_kerja_l_lama ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->previous->sakit_kerja_p_lama ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->previous->sakit_kerja_l_lama ?? 0) + ($dataPuskesmas->previous->sakit_kerja_p_lama ?? 0) }}</td>
      </tr>
      <tr>
        <td class="column3 textCenter">2</td>
        <td class="column15">Cedera/kecelakaan akibat kerja</td>
        <td class="column3">{{ ($dataPuskesmas->current->cedera_kerja_kode ?? "") }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->cedera_kerja_7hari ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->cedera_kerja_28hari ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->cedera_kerja_11bulan ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->cedera_kerja_4tahun ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->cedera_kerja_9tahun ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->cedera_kerja_14tahun ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->cedera_kerja_19tahun ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->cedera_kerja_44tahun ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->cedera_kerja_59tahun ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->cedera_kerja_lebih_59tahun ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->cedera_kerja_l ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->cedera_kerja_p ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->cedera_kerja_7hari ?? 0) + ($dataPuskesmas->current->cedera_kerja_28hari ?? 0) + ($dataPuskesmas->current->cedera_kerja_11bulan ?? 0) + ($dataPuskesmas->current->cedera_kerja_4tahun ?? 0) + ($dataPuskesmas->current->cedera_kerja_9tahun ?? 0) + ($dataPuskesmas->current->cedera_kerja_14tahun ?? 0) + ($dataPuskesmas->current->cedera_kerja_44tahun ?? 0) + ($dataPuskesmas->current->cedera_kerja_59tahun ?? 0) + ($dataPuskesmas->current->cedera_kerja_lebih_59tahun ?? 0) + ($dataPuskesmas->current->cedera_kerja_l ?? 0) + ($dataPuskesmas->current->cedera_kerja_p ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->previous->cedera_kerja_l_lama ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->previous->cedera_kerja_p_lama ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->previous->cedera_kerja_l_lama ?? 0) + ($dataPuskesmas->previous->cedera_kerja_p_lama ?? 0) }}</td>
      </tr>
      <tr>
        <td class="column3 textCenter">H</td>
        <td class="column15">GANGGUAN MENTAL</td>
        <td class="column3 columGrey"></td>
        <td class="column3 columGrey"></td>
        <td class="column3 columGrey"></td>
        <td class="column3 columGrey"></td>
        <td class="column3 columGrey"></td>
        <td class="column3 columGrey"></td>
        <td class="column3 columGrey"></td>
        <td class="column3 columGrey"></td>
        <td class="column3 columGrey"></td>
        <td class="column3 columGrey"></td>
        <td class="column3 columGrey"></td>
        <td class="column3 columGrey"></td>
        <td class="column3 columGrey"></td>
        <td class="column3 columGrey"></td>
        <td class="column3 columGrey"></td>
        <td class="column3 columGrey"></td>
        <td class="column3 columGrey"></td>
      </tr>
      <tr>
        <td class="column3 textCenter">1</td>
        <td class="column15">Percobaan tindakan bunuh diri</td>
        <td class="column3">{{ ($dataPuskesmas->current->bunuh_diri_kode ?? "") }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->bunuh_diri_7hari ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->bunuh_diri_28hari ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->bunuh_diri_11bulan ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->bunuh_diri_4tahun ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->bunuh_diri_9tahun ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->bunuh_diri_14tahun ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->bunuh_diri_19tahun ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->bunuh_diri_44tahun ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->bunuh_diri_59tahun ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->bunuh_diri_lebih_59tahun ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->bunuh_diri_l ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->bunuh_diri_p ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->bunuh_diri_7hari ?? 0) + ($dataPuskesmas->current->bunuh_diri_28hari ?? 0) + ($dataPuskesmas->current->bunuh_diri_11bulan ?? 0) + ($dataPuskesmas->current->bunuh_diri_4tahun ?? 0) + ($dataPuskesmas->current->bunuh_diri_9tahun ?? 0) + ($dataPuskesmas->current->bunuh_diri_14tahun ?? 0) + ($dataPuskesmas->current->bunuh_diri_44tahun ?? 0) + ($dataPuskesmas->current->bunuh_diri_59tahun ?? 0) + ($dataPuskesmas->current->bunuh_diri_lebih_59tahun ?? 0) + ($dataPuskesmas->current->bunuh_diri_l ?? 0) + ($dataPuskesmas->current->bunuh_diri_p ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->previous->bunuh_diri_l_lama ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->previous->bunuh_diri_p_lama ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->previous->bunuh_diri_l_lama ?? 0) + ($dataPuskesmas->previous->bunuh_diri_p_lama ?? 0) }}</td>
      </tr>
      <tr>
        <td class="column3 textCenter">I</td>
        <td class="column15">PENYAKIT LAINNYA</td>
        <td class="column3 columGrey"></td>
        <td class="column3 columGrey"></td>
        <td class="column3 columGrey"></td>
        <td class="column3 columGrey"></td>
        <td class="column3 columGrey"></td>
        <td class="column3 columGrey"></td>
        <td class="column3 columGrey"></td>
        <td class="column3 columGrey"></td>
        <td class="column3 columGrey"></td>
        <td class="column3 columGrey"></td>
        <td class="column3 columGrey"></td>
        <td class="column3 columGrey"></td>
        <td class="column3 columGrey"></td>
        <td class="column3 columGrey"></td>
        <td class="column3 columGrey"></td>
        <td class="column3 columGrey"></td>
        <td class="column3 columGrey"></td>
      </tr>
      <tr>
        <td class="column3 textCenter">1</td>
        <td class="column15">Trauma lahir</td>
        <td class="column3">{{ ($dataPuskesmas->current->trauma_lahir_kode ?? "") }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->trauma_lahir_7hari ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->trauma_lahir_28hari ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->trauma_lahir_11bulan ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->trauma_lahir_4tahun ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->trauma_lahir_9tahun ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->trauma_lahir_14tahun ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->trauma_lahir_19tahun ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->trauma_lahir_44tahun ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->trauma_lahir_59tahun ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->trauma_lahir_lebih_59tahun ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->trauma_lahir_l ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->trauma_lahir_p ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->trauma_lahir_7hari ?? 0) + ($dataPuskesmas->current->trauma_lahir_28hari ?? 0) + ($dataPuskesmas->current->trauma_lahir_11bulan ?? 0) + ($dataPuskesmas->current->trauma_lahir_4tahun ?? 0) + ($dataPuskesmas->current->trauma_lahir_9tahun ?? 0) + ($dataPuskesmas->current->trauma_lahir_14tahun ?? 0) + ($dataPuskesmas->current->trauma_lahir_44tahun ?? 0) + ($dataPuskesmas->current->trauma_lahir_59tahun ?? 0) + ($dataPuskesmas->current->trauma_lahir_lebih_59tahun ?? 0) + ($dataPuskesmas->current->trauma_lahir_l ?? 0) + ($dataPuskesmas->current->trauma_lahir_p ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->previous->trauma_lahir_l_lama ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->previous->trauma_lahir_p_lama ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->previous->trauma_lahir_l_lama ?? 0) + ($dataPuskesmas->previous->trauma_lahir_p_lama ?? 0) }}</td>
      </tr>
      <tr>
        <td class="column3 textCenter">J</td>
        <td class="column15">KELAINAN BAWAAN LAINNYA</td>
        <td class="column3 columGrey"></td>
        <td class="column3 columGrey"></td>
        <td class="column3 columGrey"></td>
        <td class="column3 columGrey"></td>
        <td class="column3 columGrey"></td>
        <td class="column3 columGrey"></td>
        <td class="column3 columGrey"></td>
        <td class="column3 columGrey"></td>
        <td class="column3 columGrey"></td>
        <td class="column3 columGrey"></td>
        <td class="column3 columGrey"></td>
        <td class="column3 columGrey"></td>
        <td class="column3 columGrey"></td>
        <td class="column3 columGrey"></td>
        <td class="column3 columGrey"></td>
        <td class="column3 columGrey"></td>
        <td class="column3 columGrey"></td>
      </tr>
      <tr>
        <td class="column3 textCenter">1</td>
        <td class="column15">Kembar siam</td>
        <td class="column3">{{ ($dataPuskesmas->current->kembar_siam_kode ?? "") }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->kembar_siam_7hari ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->kembar_siam_28hari ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->kembar_siam_11bulan ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->kembar_siam_4tahun ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->kembar_siam_9tahun ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->kembar_siam_14tahun ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->kembar_siam_19tahun ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->kembar_siam_44tahun ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->kembar_siam_59tahun ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->kembar_siam_lebih_59tahun ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->kembar_siam_l ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->kembar_siam_p ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->current->kembar_siam_7hari ?? 0) + ($dataPuskesmas->current->kembar_siam_28hari ?? 0) + ($dataPuskesmas->current->kembar_siam_11bulan ?? 0) + ($dataPuskesmas->current->kembar_siam_4tahun ?? 0) + ($dataPuskesmas->current->kembar_siam_9tahun ?? 0) + ($dataPuskesmas->current->kembar_siam_14tahun ?? 0) + ($dataPuskesmas->current->kembar_siam_44tahun ?? 0) + ($dataPuskesmas->current->kembar_siam_59tahun ?? 0) + ($dataPuskesmas->current->kembar_siam_lebih_59tahun ?? 0) + ($dataPuskesmas->current->kembar_siam_l ?? 0) + ($dataPuskesmas->current->kembar_siam_p ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->previous->kembar_siam_l_lama ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->previous->kembar_siam_p_lama ?? 0) }}</td>
        <td class="column3">{{ ($dataPuskesmas->previous->kembar_siam_l_lama ?? 0) + ($dataPuskesmas->previous->kembar_siam_p_lama ?? 0) }}</td>
      </tr>
    </tbody>
  </table>
</body>

</html>