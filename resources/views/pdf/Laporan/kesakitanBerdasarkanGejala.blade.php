<!DOCTYPE html>
<html>

<head>
  <title>LAPORAN BULANAN KESAKITAN BERDASARKAN GEJALA, PENYEBAB PENYAKIT ATAU KONDISI PASIEN</title>
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
      font-size: 14px;
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
    <p>Formulir 10</p>
    <p>LAPORAN BULANAN KESAKITAN BERDASARKAN GEJALA, PENYEBAB PENYAKIT ATAU KONDISI PASIEN</p>
  </div>

  <table>
    <thead>
      <tr>
        <td class="column5 textCenter" rowspan="2">No</td>
        <td class="column10 textCenter" rowspan="2">GEJALA, PENYEBAB PENYAKIT ATAU KONDISI PASIEN</td>
        <td class="column5 textCenter" rowspan="2">Kode Unik</td>
        <td class="column65 textCenter" colspan="13">JUMLAH KASUS BARU (Umur dan Jenis Kelamin)</td>
        <td class="column15 textCenter" colspan="3">JUMLAH KASUS LAMA</td>
      </tr>
      <tr>
        <td class="column5 textCenter">0-7 hari</td>
        <td class="column5 textCenter">8-28 hari</td>
        <td class="column5 textCenter">1-11 bl</td>
        <td class="column5 textCenter">1-4 th</td>
        <td class="column5 textCenter">5-9 th</td>
        <td class="column5 textCenter">10-14 th</td>
        <td class="column5 textCenter">15-19 th</td>
        <td class="column5 textCenter">20-44 th</td>
        <td class="column5 textCenter">45-59 th</td>
        <td class="column5 textCenter">>59 th</td>
        <td class="column5 textCenter">L</td>
        <td class="column5 textCenter">P</td>
        <td class="column5 textCenter">JML</td>
        <td class="column5 textCenter">L</td>
        <td class="column5 textCenter">P</td>
        <td class="column5 textCenter">JML</td>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td class="column5 textCenter">A</td>
        <td class="column10">INFEKSI PADA USUS</td>
        <td class="column5 columGrey"></td>
        <td class="column5 columGrey"></td>
        <td class="column5 columGrey"></td>
        <td class="column5 columGrey"></td>
        <td class="column5 columGrey"></td>
        <td class="column5 columGrey"></td>
        <td class="column5 columGrey"></td>
        <td class="column5 columGrey"></td>
        <td class="column5 columGrey"></td>
        <td class="column5 columGrey"></td>
        <td class="column5 columGrey"></td>
        <td class="column5 columGrey"></td>
        <td class="column5 columGrey"></td>
        <td class="column5 columGrey"></td>
        <td class="column5 columGrey"></td>
        <td class="column5 columGrey"></td>
        <td class="column5 columGrey"></td>
      </tr>
      <tr>
        <td class="column5 textCenter">1</td>
        <td class="column10">Diare tanpa dehidrasi</td>
        <td class="column5">{{ $dataPuskesmas->data->diare_tanpa_dehidrasi_kode }}</td>
        <td class="column5">{{ $dataPuskesmas->data->diare_tanpa_dehidrasi_7hari }}</td>
        <td class="column5">{{ $dataPuskesmas->data->diare_tanpa_dehidrasi_28hari }}</td>
        <td class="column5">{{ $dataPuskesmas->data->diare_tanpa_dehidrasi_11bulan }}</td>
        <td class="column5">{{ $dataPuskesmas->data->diare_tanpa_dehidrasi_4tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->data->diare_tanpa_dehidrasi_9tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->data->diare_tanpa_dehidrasi_14tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->data->diare_tanpa_dehidrasi_19tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->data->diare_tanpa_dehidrasi_44tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->data->diare_tanpa_dehidrasi_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->data->diare_tanpa_dehidrasi_lebih_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->data->diare_tanpa_dehidrasi_l }}</td>
        <td class="column5">{{ $dataPuskesmas->data->diare_tanpa_dehidrasi_p }}</td>
        <td class="column5">{{ $dataPuskesmas->data->diare_tanpa_dehidrasi_7hari + $dataPuskesmas->data->diare_tanpa_dehidrasi_28hari + $dataPuskesmas->data->diare_tanpa_dehidrasi_11bulan + $dataPuskesmas->data->diare_tanpa_dehidrasi_4tahun + $dataPuskesmas->data->diare_tanpa_dehidrasi_9tahun + $dataPuskesmas->data->diare_tanpa_dehidrasi_14tahun + $dataPuskesmas->data->diare_tanpa_dehidrasi_44tahun + $dataPuskesmas->data->diare_tanpa_dehidrasi_59tahun + $dataPuskesmas->data->diare_tanpa_dehidrasi_lebih_59tahun + $dataPuskesmas->data->diare_tanpa_dehidrasi_l + $dataPuskesmas->data->diare_tanpa_dehidrasi_p }}</td>
        <td class="column5">{{ $dataPuskesmas->data->diare_tanpa_dehidrasi_l_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->data->diare_tanpa_dehidrasi_p_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->data->diare_tanpa_dehidrasi_l_lama + $dataPuskesmas->data->diare_tanpa_dehidrasi_p_lama }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">2</td>
        <td class="column10">Diare dengan dehidrasi ringan-sedang</td>
        <td class="column5">{{ $dataPuskesmas->data->diare_dehidrasi_sedang_kode }}</td>
        <td class="column5">{{ $dataPuskesmas->data->diare_dehidrasi_sedang_7hari }}</td>
        <td class="column5">{{ $dataPuskesmas->data->diare_dehidrasi_sedang_28hari }}</td>
        <td class="column5">{{ $dataPuskesmas->data->diare_dehidrasi_sedang_11bulan }}</td>
        <td class="column5">{{ $dataPuskesmas->data->diare_dehidrasi_sedang_4tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->data->diare_dehidrasi_sedang_9tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->data->diare_dehidrasi_sedang_14tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->data->diare_dehidrasi_sedang_19tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->data->diare_dehidrasi_sedang_44tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->data->diare_dehidrasi_sedang_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->data->diare_dehidrasi_sedang_lebih_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->data->diare_dehidrasi_sedang_l }}</td>
        <td class="column5">{{ $dataPuskesmas->data->diare_dehidrasi_sedang_p }}</td>
        <td class="column5">{{ $dataPuskesmas->data->diare_dehidrasi_sedang_7hari + $dataPuskesmas->data->diare_dehidrasi_sedang_28hari + $dataPuskesmas->data->diare_dehidrasi_sedang_11bulan + $dataPuskesmas->data->diare_dehidrasi_sedang_4tahun + $dataPuskesmas->data->diare_dehidrasi_sedang_9tahun + $dataPuskesmas->data->diare_dehidrasi_sedang_14tahun + $dataPuskesmas->data->diare_dehidrasi_sedang_44tahun + $dataPuskesmas->data->diare_dehidrasi_sedang_59tahun + $dataPuskesmas->data->diare_dehidrasi_sedang_lebih_59tahun + $dataPuskesmas->data->diare_dehidrasi_sedang_l + $dataPuskesmas->data->diare_dehidrasi_sedang_p }}</td>
        <td class="column5">{{ $dataPuskesmas->data->diare_dehidrasi_sedang_l_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->data->diare_dehidrasi_sedang_p_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->data->diare_dehidrasi_sedang_l_lama + $dataPuskesmas->data->diare_dehidrasi_sedang_p_lama }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">3</td>
        <td class="column10">Diare dengan dehidrasi berat</td>
        <td class="column5">{{ $dataPuskesmas->data->diare_dehidrasi_berat_kode }}</td>
        <td class="column5">{{ $dataPuskesmas->data->diare_dehidrasi_berat_7hari }}</td>
        <td class="column5">{{ $dataPuskesmas->data->diare_dehidrasi_berat_28hari }}</td>
        <td class="column5">{{ $dataPuskesmas->data->diare_dehidrasi_berat_11bulan }}</td>
        <td class="column5">{{ $dataPuskesmas->data->diare_dehidrasi_berat_4tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->data->diare_dehidrasi_berat_9tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->data->diare_dehidrasi_berat_14tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->data->diare_dehidrasi_berat_19tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->data->diare_dehidrasi_berat_44tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->data->diare_dehidrasi_berat_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->data->diare_dehidrasi_berat_lebih_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->data->diare_dehidrasi_berat_l }}</td>
        <td class="column5">{{ $dataPuskesmas->data->diare_dehidrasi_berat_p }}</td>
        <td class="column5">{{ $dataPuskesmas->data->diare_dehidrasi_berat_7hari + $dataPuskesmas->data->diare_dehidrasi_berat_28hari + $dataPuskesmas->data->diare_dehidrasi_berat_11bulan + $dataPuskesmas->data->diare_dehidrasi_berat_4tahun + $dataPuskesmas->data->diare_dehidrasi_berat_9tahun + $dataPuskesmas->data->diare_dehidrasi_berat_14tahun + $dataPuskesmas->data->diare_dehidrasi_berat_44tahun + $dataPuskesmas->data->diare_dehidrasi_berat_59tahun + $dataPuskesmas->data->diare_dehidrasi_berat_lebih_59tahun + $dataPuskesmas->data->diare_dehidrasi_berat_l + $dataPuskesmas->data->diare_dehidrasi_berat_p }}</td>
        <td class="column5">{{ $dataPuskesmas->data->diare_dehidrasi_berat_l_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->data->diare_dehidrasi_berat_p_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->data->diare_dehidrasi_berat_l_lama + $dataPuskesmas->data->diare_dehidrasi_berat_p_lama }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">B</td>
        <td class="column10">INFEKSI PADA SALURAN PERNAFASAN</td>
        <td class="column5 columGrey"></td>
        <td class="column5 columGrey"></td>
        <td class="column5 columGrey"></td>
        <td class="column5 columGrey"></td>
        <td class="column5 columGrey"></td>
        <td class="column5 columGrey"></td>
        <td class="column5 columGrey"></td>
        <td class="column5 columGrey"></td>
        <td class="column5 columGrey"></td>
        <td class="column5 columGrey"></td>
        <td class="column5 columGrey"></td>
        <td class="column5 columGrey"></td>
        <td class="column5 columGrey"></td>
        <td class="column5 columGrey"></td>
        <td class="column5 columGrey"></td>
        <td class="column5 columGrey"></td>
        <td class="column5 columGrey"></td>
      </tr>
      <tr>
        <td class="column5 textCenter">1</td>
        <td class="column10">Pneumonia berat</td>
        <td class="column5">{{ $dataPuskesmas->data->penuomonia_kode }}</td>
        <td class="column5">{{ $dataPuskesmas->data->penuomonia_7hari }}</td>
        <td class="column5">{{ $dataPuskesmas->data->penuomonia_28hari }}</td>
        <td class="column5">{{ $dataPuskesmas->data->penuomonia_11bulan }}</td>
        <td class="column5">{{ $dataPuskesmas->data->penuomonia_4tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->data->penuomonia_9tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->data->penuomonia_14tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->data->penuomonia_19tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->data->penuomonia_44tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->data->penuomonia_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->data->penuomonia_lebih_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->data->penuomonia_l }}</td>
        <td class="column5">{{ $dataPuskesmas->data->penuomonia_p }}</td>
        <td class="column5">{{ $dataPuskesmas->data->penuomonia_7hari + $dataPuskesmas->data->penuomonia_28hari + $dataPuskesmas->data->penuomonia_11bulan + $dataPuskesmas->data->penuomonia_4tahun + $dataPuskesmas->data->penuomonia_9tahun + $dataPuskesmas->data->penuomonia_14tahun + $dataPuskesmas->data->penuomonia_44tahun + $dataPuskesmas->data->penuomonia_59tahun + $dataPuskesmas->data->penuomonia_lebih_59tahun + $dataPuskesmas->data->penuomonia_l + $dataPuskesmas->data->penuomonia_p }}</td>
        <td class="column5">{{ $dataPuskesmas->data->penuomonia_l_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->data->penuomonia_p_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->data->penuomonia_l_lama + $dataPuskesmas->data->penuomonia_p_lama }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">C</td>
        <td class="column10">INFEKSI UMUM BAKTERI</td>
        <td class="column5 columGrey"></td>
        <td class="column5 columGrey"></td>
        <td class="column5 columGrey"></td>
        <td class="column5 columGrey"></td>
        <td class="column5 columGrey"></td>
        <td class="column5 columGrey"></td>
        <td class="column5 columGrey"></td>
        <td class="column5 columGrey"></td>
        <td class="column5 columGrey"></td>
        <td class="column5 columGrey"></td>
        <td class="column5 columGrey"></td>
        <td class="column5 columGrey"></td>
        <td class="column5 columGrey"></td>
        <td class="column5 columGrey"></td>
        <td class="column5 columGrey"></td>
        <td class="column5 columGrey"></td>
        <td class="column5 columGrey"></td>
      </tr>
      <tr>
        <td class="column5 textCenter">1</td>
        <td class="column10">Demam tifoid probable</td>
        <td class="column5">{{ $dataPuskesmas->data->demam_probable_kode }}</td>
        <td class="column5">{{ $dataPuskesmas->data->demam_probable_7hari }}</td>
        <td class="column5">{{ $dataPuskesmas->data->demam_probable_28hari }}</td>
        <td class="column5">{{ $dataPuskesmas->data->demam_probable_11bulan }}</td>
        <td class="column5">{{ $dataPuskesmas->data->demam_probable_4tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->data->demam_probable_9tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->data->demam_probable_14tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->data->demam_probable_19tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->data->demam_probable_44tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->data->demam_probable_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->data->demam_probable_lebih_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->data->demam_probable_l }}</td>
        <td class="column5">{{ $dataPuskesmas->data->demam_probable_p }}</td>
        <td class="column5">{{ $dataPuskesmas->data->demam_probable_7hari + $dataPuskesmas->data->demam_probable_28hari + $dataPuskesmas->data->demam_probable_11bulan + $dataPuskesmas->data->demam_probable_4tahun + $dataPuskesmas->data->demam_probable_9tahun + $dataPuskesmas->data->demam_probable_14tahun + $dataPuskesmas->data->demam_probable_44tahun + $dataPuskesmas->data->demam_probable_59tahun + $dataPuskesmas->data->demam_probable_lebih_59tahun + $dataPuskesmas->data->demam_probable_l + $dataPuskesmas->data->demam_probable_p }}</td>
        <td class="column5">{{ $dataPuskesmas->data->demam_probable_l_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->data->demam_probable_p_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->data->demam_probable_l_lama + $dataPuskesmas->data->demam_probable_p_lama }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">2</td>
        <td class="column10">Demam tifoid konfirmasi</td>
        <td class="column5">{{ $dataPuskesmas->data->demam_konfirmasi_kode }}</td>
        <td class="column5">{{ $dataPuskesmas->data->demam_konfirmasi_7hari }}</td>
        <td class="column5">{{ $dataPuskesmas->data->demam_konfirmasi_28hari }}</td>
        <td class="column5">{{ $dataPuskesmas->data->demam_konfirmasi_11bulan }}</td>
        <td class="column5">{{ $dataPuskesmas->data->demam_konfirmasi_4tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->data->demam_konfirmasi_9tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->data->demam_konfirmasi_14tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->data->demam_konfirmasi_19tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->data->demam_konfirmasi_44tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->data->demam_konfirmasi_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->data->demam_konfirmasi_lebih_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->data->demam_konfirmasi_l }}</td>
        <td class="column5">{{ $dataPuskesmas->data->demam_konfirmasi_p }}</td>
        <td class="column5">{{ $dataPuskesmas->data->demam_konfirmasi_7hari + $dataPuskesmas->data->demam_konfirmasi_28hari + $dataPuskesmas->data->demam_konfirmasi_11bulan + $dataPuskesmas->data->demam_konfirmasi_4tahun + $dataPuskesmas->data->demam_konfirmasi_9tahun + $dataPuskesmas->data->demam_konfirmasi_14tahun + $dataPuskesmas->data->demam_konfirmasi_44tahun + $dataPuskesmas->data->demam_konfirmasi_59tahun + $dataPuskesmas->data->demam_konfirmasi_lebih_59tahun + $dataPuskesmas->data->demam_konfirmasi_l + $dataPuskesmas->data->demam_konfirmasi_p }}</td>
        <td class="column5">{{ $dataPuskesmas->data->demam_konfirmasi_l_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->data->demam_konfirmasi_p_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->data->demam_konfirmasi_l_lama + $dataPuskesmas->data->demam_konfirmasi_p_lama }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">D</td>
        <td class="column10">INFEKSI UMUM VIRUS</td>
        <td class="column5 columGrey"></td>
        <td class="column5 columGrey"></td>
        <td class="column5 columGrey"></td>
        <td class="column5 columGrey"></td>
        <td class="column5 columGrey"></td>
        <td class="column5 columGrey"></td>
        <td class="column5 columGrey"></td>
        <td class="column5 columGrey"></td>
        <td class="column5 columGrey"></td>
        <td class="column5 columGrey"></td>
        <td class="column5 columGrey"></td>
        <td class="column5 columGrey"></td>
        <td class="column5 columGrey"></td>
        <td class="column5 columGrey"></td>
        <td class="column5 columGrey"></td>
        <td class="column5 columGrey"></td>
        <td class="column5 columGrey"></td>
      </tr>
      <tr>
        <td class="column5 textCenter">1</td>
        <td class="column10">Acute flaccid paralysis (AFP)</td>
        <td class="column5">{{ $dataPuskesmas->data->afp_kode }}</td>
        <td class="column5">{{ $dataPuskesmas->data->afp_7hari }}</td>
        <td class="column5">{{ $dataPuskesmas->data->afp_28hari }}</td>
        <td class="column5">{{ $dataPuskesmas->data->afp_11bulan }}</td>
        <td class="column5">{{ $dataPuskesmas->data->afp_4tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->data->afp_9tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->data->afp_14tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->data->afp_19tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->data->afp_44tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->data->afp_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->data->afp_lebih_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->data->afp_l }}</td>
        <td class="column5">{{ $dataPuskesmas->data->afp_p }}</td>
        <td class="column5">{{ $dataPuskesmas->data->afp_7hari + $dataPuskesmas->data->afp_28hari + $dataPuskesmas->data->afp_11bulan + $dataPuskesmas->data->afp_4tahun + $dataPuskesmas->data->afp_9tahun + $dataPuskesmas->data->afp_14tahun + $dataPuskesmas->data->afp_44tahun + $dataPuskesmas->data->afp_59tahun + $dataPuskesmas->data->afp_lebih_59tahun + $dataPuskesmas->data->afp_l + $dataPuskesmas->data->afp_p }}</td>
        <td class="column5">{{ $dataPuskesmas->data->afp_l_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->data->afp_p_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->data->afp_l_lama + $dataPuskesmas->data->afp_p_lama }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">2</td>
        <td class="column10">Hepatitis klinis (ikterik/warna urine seperti teh)</td>
        <td class="column5">{{ $dataPuskesmas->data->hepatitis_klinis_kode }}</td>
        <td class="column5">{{ $dataPuskesmas->data->hepatitis_klinis_7hari }}</td>
        <td class="column5">{{ $dataPuskesmas->data->hepatitis_klinis_28hari }}</td>
        <td class="column5">{{ $dataPuskesmas->data->hepatitis_klinis_11bulan }}</td>
        <td class="column5">{{ $dataPuskesmas->data->hepatitis_klinis_4tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->data->hepatitis_klinis_9tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->data->hepatitis_klinis_14tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->data->hepatitis_klinis_19tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->data->hepatitis_klinis_44tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->data->hepatitis_klinis_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->data->hepatitis_klinis_lebih_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->data->hepatitis_klinis_l }}</td>
        <td class="column5">{{ $dataPuskesmas->data->hepatitis_klinis_p }}</td>
        <td class="column5">{{ $dataPuskesmas->data->hepatitis_klinis_7hari + $dataPuskesmas->data->hepatitis_klinis_28hari + $dataPuskesmas->data->hepatitis_klinis_11bulan + $dataPuskesmas->data->hepatitis_klinis_4tahun + $dataPuskesmas->data->hepatitis_klinis_9tahun + $dataPuskesmas->data->hepatitis_klinis_14tahun + $dataPuskesmas->data->hepatitis_klinis_44tahun + $dataPuskesmas->data->hepatitis_klinis_59tahun + $dataPuskesmas->data->hepatitis_klinis_lebih_59tahun + $dataPuskesmas->data->hepatitis_klinis_l + $dataPuskesmas->data->hepatitis_klinis_p }}</td>
        <td class="column5">{{ $dataPuskesmas->data->hepatitis_klinis_l_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->data->hepatitis_klinis_p_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->data->hepatitis_klinis_l_lama + $dataPuskesmas->data->hepatitis_klinis_p_lama }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">E</td>
        <td class="column10">GANGGUAN MATA DAN ADNEKSA</td>
        <td class="column5 columGrey"></td>
        <td class="column5 columGrey"></td>
        <td class="column5 columGrey"></td>
        <td class="column5 columGrey"></td>
        <td class="column5 columGrey"></td>
        <td class="column5 columGrey"></td>
        <td class="column5 columGrey"></td>
        <td class="column5 columGrey"></td>
        <td class="column5 columGrey"></td>
        <td class="column5 columGrey"></td>
        <td class="column5 columGrey"></td>
        <td class="column5 columGrey"></td>
        <td class="column5 columGrey"></td>
        <td class="column5 columGrey"></td>
        <td class="column5 columGrey"></td>
        <td class="column5 columGrey"></td>
        <td class="column5 columGrey"></td>
      </tr>
      <tr>
        <td class="column5 textCenter">1</td>
        <td class="column10">Buta</td>
        <td class="column5">{{ $dataPuskesmas->data->buta_kode }}</td>
        <td class="column5">{{ $dataPuskesmas->data->buta_7hari }}</td>
        <td class="column5">{{ $dataPuskesmas->data->buta_28hari }}</td>
        <td class="column5">{{ $dataPuskesmas->data->buta_11bulan }}</td>
        <td class="column5">{{ $dataPuskesmas->data->buta_4tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->data->buta_9tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->data->buta_14tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->data->buta_19tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->data->buta_44tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->data->buta_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->data->buta_lebih_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->data->buta_l }}</td>
        <td class="column5">{{ $dataPuskesmas->data->buta_p }}</td>
        <td class="column5">{{ $dataPuskesmas->data->buta_7hari + $dataPuskesmas->data->buta_28hari + $dataPuskesmas->data->buta_11bulan + $dataPuskesmas->data->buta_4tahun + $dataPuskesmas->data->buta_9tahun + $dataPuskesmas->data->buta_14tahun + $dataPuskesmas->data->buta_44tahun + $dataPuskesmas->data->buta_59tahun + $dataPuskesmas->data->buta_lebih_59tahun + $dataPuskesmas->data->buta_l + $dataPuskesmas->data->buta_p }}</td>
        <td class="column5">{{ $dataPuskesmas->data->buta_l_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->data->buta_p_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->data->buta_l_lama + $dataPuskesmas->data->buta_p_lama }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">F</td>
        <td class="column10">KECELAKAAN DAN KERACUNAN</td>
        <td class="column5 columGrey"></td>
        <td class="column5 columGrey"></td>
        <td class="column5 columGrey"></td>
        <td class="column5 columGrey"></td>
        <td class="column5 columGrey"></td>
        <td class="column5 columGrey"></td>
        <td class="column5 columGrey"></td>
        <td class="column5 columGrey"></td>
        <td class="column5 columGrey"></td>
        <td class="column5 columGrey"></td>
        <td class="column5 columGrey"></td>
        <td class="column5 columGrey"></td>
        <td class="column5 columGrey"></td>
        <td class="column5 columGrey"></td>
        <td class="column5 columGrey"></td>
        <td class="column5 columGrey"></td>
        <td class="column5 columGrey"></td>
      </tr>
      <tr>
        <td class="column5 textCenter">1</td>
        <td class="column10">Cedera akibat kecelakaan transport</td>
        <td class="column5">{{ $dataPuskesmas->data->cedera_transport_kode }}</td>
        <td class="column5">{{ $dataPuskesmas->data->cedera_transport_7hari }}</td>
        <td class="column5">{{ $dataPuskesmas->data->cedera_transport_28hari }}</td>
        <td class="column5">{{ $dataPuskesmas->data->cedera_transport_11bulan }}</td>
        <td class="column5">{{ $dataPuskesmas->data->cedera_transport_4tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->data->cedera_transport_9tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->data->cedera_transport_14tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->data->cedera_transport_19tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->data->cedera_transport_44tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->data->cedera_transport_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->data->cedera_transport_lebih_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->data->cedera_transport_l }}</td>
        <td class="column5">{{ $dataPuskesmas->data->cedera_transport_p }}</td>
        <td class="column5">{{ $dataPuskesmas->data->cedera_transport_7hari + $dataPuskesmas->data->cedera_transport_28hari + $dataPuskesmas->data->cedera_transport_11bulan + $dataPuskesmas->data->cedera_transport_4tahun + $dataPuskesmas->data->cedera_transport_9tahun + $dataPuskesmas->data->cedera_transport_14tahun + $dataPuskesmas->data->cedera_transport_44tahun + $dataPuskesmas->data->cedera_transport_59tahun + $dataPuskesmas->data->cedera_transport_lebih_59tahun + $dataPuskesmas->data->cedera_transport_l + $dataPuskesmas->data->cedera_transport_p }}</td>
        <td class="column5">{{ $dataPuskesmas->data->cedera_transport_l_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->data->cedera_transport_p_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->data->cedera_transport_l_lama + $dataPuskesmas->data->cedera_transport_p_lama }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">2</td>
        <td class="column10">Cedera akibat tenggelam</td>
        <td class="column5">{{ $dataPuskesmas->data->cedera_tenggelam_kode }}</td>
        <td class="column5">{{ $dataPuskesmas->data->cedera_tenggelam_7hari }}</td>
        <td class="column5">{{ $dataPuskesmas->data->cedera_tenggelam_28hari }}</td>
        <td class="column5">{{ $dataPuskesmas->data->cedera_tenggelam_11bulan }}</td>
        <td class="column5">{{ $dataPuskesmas->data->cedera_tenggelam_4tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->data->cedera_tenggelam_9tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->data->cedera_tenggelam_14tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->data->cedera_tenggelam_19tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->data->cedera_tenggelam_44tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->data->cedera_tenggelam_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->data->cedera_tenggelam_lebih_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->data->cedera_tenggelam_l }}</td>
        <td class="column5">{{ $dataPuskesmas->data->cedera_tenggelam_p }}</td>
        <td class="column5">{{ $dataPuskesmas->data->cedera_tenggelam_7hari + $dataPuskesmas->data->cedera_tenggelam_28hari + $dataPuskesmas->data->cedera_tenggelam_11bulan + $dataPuskesmas->data->cedera_tenggelam_4tahun + $dataPuskesmas->data->cedera_tenggelam_9tahun + $dataPuskesmas->data->cedera_tenggelam_14tahun + $dataPuskesmas->data->cedera_tenggelam_44tahun + $dataPuskesmas->data->cedera_tenggelam_59tahun + $dataPuskesmas->data->cedera_tenggelam_lebih_59tahun + $dataPuskesmas->data->cedera_tenggelam_l + $dataPuskesmas->data->cedera_tenggelam_p }}</td>
        <td class="column5">{{ $dataPuskesmas->data->cedera_tenggelam_l_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->data->cedera_tenggelam_p_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->data->cedera_tenggelam_l_lama + $dataPuskesmas->data->cedera_tenggelam_p_lama }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">3</td>
        <td class="column10">Cedera akibat jatuh</td>
        <td class="column5">{{ $dataPuskesmas->data->cedera_jatuh_kode }}</td>
        <td class="column5">{{ $dataPuskesmas->data->cedera_jatuh_7hari }}</td>
        <td class="column5">{{ $dataPuskesmas->data->cedera_jatuh_28hari }}</td>
        <td class="column5">{{ $dataPuskesmas->data->cedera_jatuh_11bulan }}</td>
        <td class="column5">{{ $dataPuskesmas->data->cedera_jatuh_4tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->data->cedera_jatuh_9tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->data->cedera_jatuh_14tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->data->cedera_jatuh_19tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->data->cedera_jatuh_44tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->data->cedera_jatuh_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->data->cedera_jatuh_lebih_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->data->cedera_jatuh_l }}</td>
        <td class="column5">{{ $dataPuskesmas->data->cedera_jatuh_p }}</td>
        <td class="column5">{{ $dataPuskesmas->data->cedera_jatuh_7hari + $dataPuskesmas->data->cedera_jatuh_28hari + $dataPuskesmas->data->cedera_jatuh_11bulan + $dataPuskesmas->data->cedera_jatuh_4tahun + $dataPuskesmas->data->cedera_jatuh_9tahun + $dataPuskesmas->data->cedera_jatuh_14tahun + $dataPuskesmas->data->cedera_jatuh_44tahun + $dataPuskesmas->data->cedera_jatuh_59tahun + $dataPuskesmas->data->cedera_jatuh_lebih_59tahun + $dataPuskesmas->data->cedera_jatuh_l + $dataPuskesmas->data->cedera_jatuh_p }}</td>
        <td class="column5">{{ $dataPuskesmas->data->cedera_jatuh_l_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->data->cedera_jatuh_p_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->data->cedera_jatuh_l_lama + $dataPuskesmas->data->cedera_jatuh_p_lama }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">4</td>
        <td class="column10">Cedera akibat terbakar</td>
        <td class="column5">{{ $dataPuskesmas->data->cedera_terbakar_kode }}</td>
        <td class="column5">{{ $dataPuskesmas->data->cedera_terbakar_7hari }}</td>
        <td class="column5">{{ $dataPuskesmas->data->cedera_terbakar_28hari }}</td>
        <td class="column5">{{ $dataPuskesmas->data->cedera_terbakar_11bulan }}</td>
        <td class="column5">{{ $dataPuskesmas->data->cedera_terbakar_4tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->data->cedera_terbakar_9tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->data->cedera_terbakar_14tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->data->cedera_terbakar_19tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->data->cedera_terbakar_44tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->data->cedera_terbakar_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->data->cedera_terbakar_lebih_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->data->cedera_terbakar_l }}</td>
        <td class="column5">{{ $dataPuskesmas->data->cedera_terbakar_p }}</td>
        <td class="column5">{{ $dataPuskesmas->data->cedera_terbakar_7hari + $dataPuskesmas->data->cedera_terbakar_28hari + $dataPuskesmas->data->cedera_terbakar_11bulan + $dataPuskesmas->data->cedera_terbakar_4tahun + $dataPuskesmas->data->cedera_terbakar_9tahun + $dataPuskesmas->data->cedera_terbakar_14tahun + $dataPuskesmas->data->cedera_terbakar_44tahun + $dataPuskesmas->data->cedera_terbakar_59tahun + $dataPuskesmas->data->cedera_terbakar_lebih_59tahun + $dataPuskesmas->data->cedera_terbakar_l + $dataPuskesmas->data->cedera_terbakar_p }}</td>
        <td class="column5">{{ $dataPuskesmas->data->cedera_terbakar_l_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->data->cedera_terbakar_p_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->data->cedera_terbakar_l_lama + $dataPuskesmas->data->cedera_terbakar_p_lama }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">5</td>
        <td class="column10">Cedera akibat digigit ular</td>
        <td class="column5">{{ $dataPuskesmas->data->cedera_ular_kode }}</td>
        <td class="column5">{{ $dataPuskesmas->data->cedera_ular_7hari }}</td>
        <td class="column5">{{ $dataPuskesmas->data->cedera_ular_28hari }}</td>
        <td class="column5">{{ $dataPuskesmas->data->cedera_ular_11bulan }}</td>
        <td class="column5">{{ $dataPuskesmas->data->cedera_ular_4tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->data->cedera_ular_9tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->data->cedera_ular_14tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->data->cedera_ular_19tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->data->cedera_ular_44tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->data->cedera_ular_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->data->cedera_ular_lebih_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->data->cedera_ular_l }}</td>
        <td class="column5">{{ $dataPuskesmas->data->cedera_ular_p }}</td>
        <td class="column5">{{ $dataPuskesmas->data->cedera_ular_7hari + $dataPuskesmas->data->cedera_ular_28hari + $dataPuskesmas->data->cedera_ular_11bulan + $dataPuskesmas->data->cedera_ular_4tahun + $dataPuskesmas->data->cedera_ular_9tahun + $dataPuskesmas->data->cedera_ular_14tahun + $dataPuskesmas->data->cedera_ular_44tahun + $dataPuskesmas->data->cedera_ular_59tahun + $dataPuskesmas->data->cedera_ular_lebih_59tahun + $dataPuskesmas->data->cedera_ular_l + $dataPuskesmas->data->cedera_ular_p }}</td>
        <td class="column5">{{ $dataPuskesmas->data->cedera_ular_l_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->data->cedera_ular_p_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->data->cedera_ular_l_lama + $dataPuskesmas->data->cedera_ular_p_lama }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">6</td>
        <td class="column10">Cedera atau gangguan kesehatan akibat kekerasan fisik</td>
        <td class="column5">{{ $dataPuskesmas->data->cedera_fisik_kode }}</td>
        <td class="column5">{{ $dataPuskesmas->data->cedera_fisik_7hari }}</td>
        <td class="column5">{{ $dataPuskesmas->data->cedera_fisik_28hari }}</td>
        <td class="column5">{{ $dataPuskesmas->data->cedera_fisik_11bulan }}</td>
        <td class="column5">{{ $dataPuskesmas->data->cedera_fisik_4tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->data->cedera_fisik_9tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->data->cedera_fisik_14tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->data->cedera_fisik_19tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->data->cedera_fisik_44tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->data->cedera_fisik_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->data->cedera_fisik_lebih_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->data->cedera_fisik_l }}</td>
        <td class="column5">{{ $dataPuskesmas->data->cedera_fisik_p }}</td>
        <td class="column5">{{ $dataPuskesmas->data->cedera_fisik_7hari + $dataPuskesmas->data->cedera_fisik_28hari + $dataPuskesmas->data->cedera_fisik_11bulan + $dataPuskesmas->data->cedera_fisik_4tahun + $dataPuskesmas->data->cedera_fisik_9tahun + $dataPuskesmas->data->cedera_fisik_14tahun + $dataPuskesmas->data->cedera_fisik_44tahun + $dataPuskesmas->data->cedera_fisik_59tahun + $dataPuskesmas->data->cedera_fisik_lebih_59tahun + $dataPuskesmas->data->cedera_fisik_l + $dataPuskesmas->data->cedera_fisik_p }}</td>
        <td class="column5">{{ $dataPuskesmas->data->cedera_fisik_l_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->data->cedera_fisik_p_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->data->cedera_fisik_l_lama + $dataPuskesmas->data->cedera_fisik_p_lama }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">7</td>
        <td class="column10">Gangguan kesehatan akibat kekerasan mental</td>
        <td class="column5">{{ $dataPuskesmas->data->cedera_mental_kode }}</td>
        <td class="column5">{{ $dataPuskesmas->data->cedera_mental_7hari }}</td>
        <td class="column5">{{ $dataPuskesmas->data->cedera_mental_28hari }}</td>
        <td class="column5">{{ $dataPuskesmas->data->cedera_mental_11bulan }}</td>
        <td class="column5">{{ $dataPuskesmas->data->cedera_mental_4tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->data->cedera_mental_9tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->data->cedera_mental_14tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->data->cedera_mental_19tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->data->cedera_mental_44tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->data->cedera_mental_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->data->cedera_mental_lebih_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->data->cedera_mental_l }}</td>
        <td class="column5">{{ $dataPuskesmas->data->cedera_mental_p }}</td>
        <td class="column5">{{ $dataPuskesmas->data->cedera_mental_7hari + $dataPuskesmas->data->cedera_mental_28hari + $dataPuskesmas->data->cedera_mental_11bulan + $dataPuskesmas->data->cedera_mental_4tahun + $dataPuskesmas->data->cedera_mental_9tahun + $dataPuskesmas->data->cedera_mental_14tahun + $dataPuskesmas->data->cedera_mental_44tahun + $dataPuskesmas->data->cedera_mental_59tahun + $dataPuskesmas->data->cedera_mental_lebih_59tahun + $dataPuskesmas->data->cedera_mental_l + $dataPuskesmas->data->cedera_mental_p }}</td>
        <td class="column5">{{ $dataPuskesmas->data->cedera_mental_l_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->data->cedera_mental_p_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->data->cedera_mental_l_lama + $dataPuskesmas->data->cedera_mental_p_lama }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">8</td>
        <td class="column10">Gangguan kesehatan akibat kekerasan seksual</td>
        <td class="column5">{{ $dataPuskesmas->data->kekerasan_seksual_kode }}</td>
        <td class="column5">{{ $dataPuskesmas->data->kekerasan_seksual_7hari }}</td>
        <td class="column5">{{ $dataPuskesmas->data->kekerasan_seksual_28hari }}</td>
        <td class="column5">{{ $dataPuskesmas->data->kekerasan_seksual_11bulan }}</td>
        <td class="column5">{{ $dataPuskesmas->data->kekerasan_seksual_4tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->data->kekerasan_seksual_9tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->data->kekerasan_seksual_14tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->data->kekerasan_seksual_19tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->data->kekerasan_seksual_44tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->data->kekerasan_seksual_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->data->kekerasan_seksual_lebih_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->data->kekerasan_seksual_l }}</td>
        <td class="column5">{{ $dataPuskesmas->data->kekerasan_seksual_p }}</td>
        <td class="column5">{{ $dataPuskesmas->data->kekerasan_seksual_7hari + $dataPuskesmas->data->kekerasan_seksual_28hari + $dataPuskesmas->data->kekerasan_seksual_11bulan + $dataPuskesmas->data->kekerasan_seksual_4tahun + $dataPuskesmas->data->kekerasan_seksual_9tahun + $dataPuskesmas->data->kekerasan_seksual_14tahun + $dataPuskesmas->data->kekerasan_seksual_44tahun + $dataPuskesmas->data->kekerasan_seksual_59tahun + $dataPuskesmas->data->kekerasan_seksual_lebih_59tahun + $dataPuskesmas->data->kekerasan_seksual_l + $dataPuskesmas->data->kekerasan_seksual_p }}</td>
        <td class="column5">{{ $dataPuskesmas->data->kekerasan_seksual_l_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->data->kekerasan_seksual_p_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->data->kekerasan_seksual_l_lama + $dataPuskesmas->data->kekerasan_seksual_p_lama }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">9</td>
        <td class="column10">Keracunan bahan kimia (bukan makanan)</td>
        <td class="column5">{{ $dataPuskesmas->data->keracunan_kimia_kode }}</td>
        <td class="column5">{{ $dataPuskesmas->data->keracunan_kimia_7hari }}</td>
        <td class="column5">{{ $dataPuskesmas->data->keracunan_kimia_28hari }}</td>
        <td class="column5">{{ $dataPuskesmas->data->keracunan_kimia_11bulan }}</td>
        <td class="column5">{{ $dataPuskesmas->data->keracunan_kimia_4tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->data->keracunan_kimia_9tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->data->keracunan_kimia_14tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->data->keracunan_kimia_19tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->data->keracunan_kimia_44tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->data->keracunan_kimia_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->data->keracunan_kimia_lebih_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->data->keracunan_kimia_l }}</td>
        <td class="column5">{{ $dataPuskesmas->data->keracunan_kimia_p }}</td>
        <td class="column5">{{ $dataPuskesmas->data->keracunan_kimia_7hari + $dataPuskesmas->data->keracunan_kimia_28hari + $dataPuskesmas->data->keracunan_kimia_11bulan + $dataPuskesmas->data->keracunan_kimia_4tahun + $dataPuskesmas->data->keracunan_kimia_9tahun + $dataPuskesmas->data->keracunan_kimia_14tahun + $dataPuskesmas->data->keracunan_kimia_44tahun + $dataPuskesmas->data->keracunan_kimia_59tahun + $dataPuskesmas->data->keracunan_kimia_lebih_59tahun + $dataPuskesmas->data->keracunan_kimia_l + $dataPuskesmas->data->keracunan_kimia_p }}</td>
        <td class="column5">{{ $dataPuskesmas->data->keracunan_kimia_l_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->data->keracunan_kimia_p_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->data->keracunan_kimia_l_lama + $dataPuskesmas->data->keracunan_kimia_p_lama }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">10</td>
        <td class="column10">Keracunan makanan</td>
        <td class="column5">{{ $dataPuskesmas->data->keracunan_makanan_kode }}</td>
        <td class="column5">{{ $dataPuskesmas->data->keracunan_makanan_7hari }}</td>
        <td class="column5">{{ $dataPuskesmas->data->keracunan_makanan_28hari }}</td>
        <td class="column5">{{ $dataPuskesmas->data->keracunan_makanan_11bulan }}</td>
        <td class="column5">{{ $dataPuskesmas->data->keracunan_makanan_4tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->data->keracunan_makanan_9tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->data->keracunan_makanan_14tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->data->keracunan_makanan_19tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->data->keracunan_makanan_44tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->data->keracunan_makanan_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->data->keracunan_makanan_lebih_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->data->keracunan_makanan_l }}</td>
        <td class="column5">{{ $dataPuskesmas->data->keracunan_makanan_p }}</td>
        <td class="column5">{{ $dataPuskesmas->data->keracunan_makanan_7hari + $dataPuskesmas->data->keracunan_makanan_28hari + $dataPuskesmas->data->keracunan_makanan_11bulan + $dataPuskesmas->data->keracunan_makanan_4tahun + $dataPuskesmas->data->keracunan_makanan_9tahun + $dataPuskesmas->data->keracunan_makanan_14tahun + $dataPuskesmas->data->keracunan_makanan_44tahun + $dataPuskesmas->data->keracunan_makanan_59tahun + $dataPuskesmas->data->keracunan_makanan_lebih_59tahun + $dataPuskesmas->data->keracunan_makanan_l + $dataPuskesmas->data->keracunan_makanan_p }}</td>
        <td class="column5">{{ $dataPuskesmas->data->keracunan_makanan_l_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->data->keracunan_makanan_p_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->data->keracunan_makanan_l_lama + $dataPuskesmas->data->keracunan_makanan_p_lama }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">G</td>
        <td class="column10">GANGGUAN (CEDERA, PENYAKIT) AKIBAT KERJA</td>
        <td class="column5 columGrey"></td>
        <td class="column5 columGrey"></td>
        <td class="column5 columGrey"></td>
        <td class="column5 columGrey"></td>
        <td class="column5 columGrey"></td>
        <td class="column5 columGrey"></td>
        <td class="column5 columGrey"></td>
        <td class="column5 columGrey"></td>
        <td class="column5 columGrey"></td>
        <td class="column5 columGrey"></td>
        <td class="column5 columGrey"></td>
        <td class="column5 columGrey"></td>
        <td class="column5 columGrey"></td>
        <td class="column5 columGrey"></td>
        <td class="column5 columGrey"></td>
        <td class="column5 columGrey"></td>
        <td class="column5 columGrey"></td>
      </tr>
      <tr>
        <td class="column5 textCenter">1</td>
        <td class="column10">Sakit akibat kerja</td>
        <td class="column5">{{ $dataPuskesmas->data->sakit_kerja_kode }}</td>
        <td class="column5">{{ $dataPuskesmas->data->sakit_kerja_7hari }}</td>
        <td class="column5">{{ $dataPuskesmas->data->sakit_kerja_28hari }}</td>
        <td class="column5">{{ $dataPuskesmas->data->sakit_kerja_11bulan }}</td>
        <td class="column5">{{ $dataPuskesmas->data->sakit_kerja_4tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->data->sakit_kerja_9tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->data->sakit_kerja_14tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->data->sakit_kerja_19tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->data->sakit_kerja_44tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->data->sakit_kerja_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->data->sakit_kerja_lebih_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->data->sakit_kerja_l }}</td>
        <td class="column5">{{ $dataPuskesmas->data->sakit_kerja_p }}</td>
        <td class="column5">{{ $dataPuskesmas->data->sakit_kerja_7hari + $dataPuskesmas->data->sakit_kerja_28hari + $dataPuskesmas->data->sakit_kerja_11bulan + $dataPuskesmas->data->sakit_kerja_4tahun + $dataPuskesmas->data->sakit_kerja_9tahun + $dataPuskesmas->data->sakit_kerja_14tahun + $dataPuskesmas->data->sakit_kerja_44tahun + $dataPuskesmas->data->sakit_kerja_59tahun + $dataPuskesmas->data->sakit_kerja_lebih_59tahun + $dataPuskesmas->data->sakit_kerja_l + $dataPuskesmas->data->sakit_kerja_p }}</td>
        <td class="column5">{{ $dataPuskesmas->data->sakit_kerja_l_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->data->sakit_kerja_p_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->data->sakit_kerja_l_lama + $dataPuskesmas->data->sakit_kerja_p_lama }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">2</td>
        <td class="column10">Cedera/kecelakaan akibat kerja</td>
        <td class="column5">{{ $dataPuskesmas->data->cedera_kerja_kode }}</td>
        <td class="column5">{{ $dataPuskesmas->data->cedera_kerja_7hari }}</td>
        <td class="column5">{{ $dataPuskesmas->data->cedera_kerja_28hari }}</td>
        <td class="column5">{{ $dataPuskesmas->data->cedera_kerja_11bulan }}</td>
        <td class="column5">{{ $dataPuskesmas->data->cedera_kerja_4tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->data->cedera_kerja_9tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->data->cedera_kerja_14tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->data->cedera_kerja_19tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->data->cedera_kerja_44tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->data->cedera_kerja_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->data->cedera_kerja_lebih_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->data->cedera_kerja_l }}</td>
        <td class="column5">{{ $dataPuskesmas->data->cedera_kerja_p }}</td>
        <td class="column5">{{ $dataPuskesmas->data->cedera_kerja_7hari + $dataPuskesmas->data->cedera_kerja_28hari + $dataPuskesmas->data->cedera_kerja_11bulan + $dataPuskesmas->data->cedera_kerja_4tahun + $dataPuskesmas->data->cedera_kerja_9tahun + $dataPuskesmas->data->cedera_kerja_14tahun + $dataPuskesmas->data->cedera_kerja_44tahun + $dataPuskesmas->data->cedera_kerja_59tahun + $dataPuskesmas->data->cedera_kerja_lebih_59tahun + $dataPuskesmas->data->cedera_kerja_l + $dataPuskesmas->data->cedera_kerja_p }}</td>
        <td class="column5">{{ $dataPuskesmas->data->cedera_kerja_l_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->data->cedera_kerja_p_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->data->cedera_kerja_l_lama + $dataPuskesmas->data->cedera_kerja_p_lama }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">H</td>
        <td class="column10">GANGGUAN MENTAL</td>
        <td class="column5 columGrey"></td>
        <td class="column5 columGrey"></td>
        <td class="column5 columGrey"></td>
        <td class="column5 columGrey"></td>
        <td class="column5 columGrey"></td>
        <td class="column5 columGrey"></td>
        <td class="column5 columGrey"></td>
        <td class="column5 columGrey"></td>
        <td class="column5 columGrey"></td>
        <td class="column5 columGrey"></td>
        <td class="column5 columGrey"></td>
        <td class="column5 columGrey"></td>
        <td class="column5 columGrey"></td>
        <td class="column5 columGrey"></td>
        <td class="column5 columGrey"></td>
        <td class="column5 columGrey"></td>
        <td class="column5 columGrey"></td>
      </tr>
      <tr>
        <td class="column5 textCenter">1</td>
        <td class="column10">Percobaan tindakan bunuh diri</td>
        <td class="column5">{{ $dataPuskesmas->data->bunuh_diri_kode }}</td>
        <td class="column5">{{ $dataPuskesmas->data->bunuh_diri_7hari }}</td>
        <td class="column5">{{ $dataPuskesmas->data->bunuh_diri_28hari }}</td>
        <td class="column5">{{ $dataPuskesmas->data->bunuh_diri_11bulan }}</td>
        <td class="column5">{{ $dataPuskesmas->data->bunuh_diri_4tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->data->bunuh_diri_9tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->data->bunuh_diri_14tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->data->bunuh_diri_19tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->data->bunuh_diri_44tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->data->bunuh_diri_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->data->bunuh_diri_lebih_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->data->bunuh_diri_l }}</td>
        <td class="column5">{{ $dataPuskesmas->data->bunuh_diri_p }}</td>
        <td class="column5">{{ $dataPuskesmas->data->bunuh_diri_7hari + $dataPuskesmas->data->bunuh_diri_28hari + $dataPuskesmas->data->bunuh_diri_11bulan + $dataPuskesmas->data->bunuh_diri_4tahun + $dataPuskesmas->data->bunuh_diri_9tahun + $dataPuskesmas->data->bunuh_diri_14tahun + $dataPuskesmas->data->bunuh_diri_44tahun + $dataPuskesmas->data->bunuh_diri_59tahun + $dataPuskesmas->data->bunuh_diri_lebih_59tahun + $dataPuskesmas->data->bunuh_diri_l + $dataPuskesmas->data->bunuh_diri_p }}</td>
        <td class="column5">{{ $dataPuskesmas->data->bunuh_diri_l_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->data->bunuh_diri_p_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->data->bunuh_diri_l_lama + $dataPuskesmas->data->bunuh_diri_p_lama }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">I</td>
        <td class="column10">PENYAKIT LAINNYA</td>
        <td class="column5 columGrey"></td>
        <td class="column5 columGrey"></td>
        <td class="column5 columGrey"></td>
        <td class="column5 columGrey"></td>
        <td class="column5 columGrey"></td>
        <td class="column5 columGrey"></td>
        <td class="column5 columGrey"></td>
        <td class="column5 columGrey"></td>
        <td class="column5 columGrey"></td>
        <td class="column5 columGrey"></td>
        <td class="column5 columGrey"></td>
        <td class="column5 columGrey"></td>
        <td class="column5 columGrey"></td>
        <td class="column5 columGrey"></td>
        <td class="column5 columGrey"></td>
        <td class="column5 columGrey"></td>
        <td class="column5 columGrey"></td>
      </tr>
      <tr>
        <td class="column5 textCenter">1</td>
        <td class="column10">Trauma lahir</td>
        <td class="column5">{{ $dataPuskesmas->data->trauma_lahir_kode }}</td>
        <td class="column5">{{ $dataPuskesmas->data->trauma_lahir_7hari }}</td>
        <td class="column5">{{ $dataPuskesmas->data->trauma_lahir_28hari }}</td>
        <td class="column5">{{ $dataPuskesmas->data->trauma_lahir_11bulan }}</td>
        <td class="column5">{{ $dataPuskesmas->data->trauma_lahir_4tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->data->trauma_lahir_9tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->data->trauma_lahir_14tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->data->trauma_lahir_19tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->data->trauma_lahir_44tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->data->trauma_lahir_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->data->trauma_lahir_lebih_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->data->trauma_lahir_l }}</td>
        <td class="column5">{{ $dataPuskesmas->data->trauma_lahir_p }}</td>
        <td class="column5">{{ $dataPuskesmas->data->trauma_lahir_7hari + $dataPuskesmas->data->trauma_lahir_28hari + $dataPuskesmas->data->trauma_lahir_11bulan + $dataPuskesmas->data->trauma_lahir_4tahun + $dataPuskesmas->data->trauma_lahir_9tahun + $dataPuskesmas->data->trauma_lahir_14tahun + $dataPuskesmas->data->trauma_lahir_44tahun + $dataPuskesmas->data->trauma_lahir_59tahun + $dataPuskesmas->data->trauma_lahir_lebih_59tahun + $dataPuskesmas->data->trauma_lahir_l + $dataPuskesmas->data->trauma_lahir_p }}</td>
        <td class="column5">{{ $dataPuskesmas->data->trauma_lahir_l_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->data->trauma_lahir_p_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->data->trauma_lahir_l_lama + $dataPuskesmas->data->trauma_lahir_p_lama }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">J</td>
        <td class="column10">KELAINAN BAWAAN LAINNYA</td>
        <td class="column5 columGrey"></td>
        <td class="column5 columGrey"></td>
        <td class="column5 columGrey"></td>
        <td class="column5 columGrey"></td>
        <td class="column5 columGrey"></td>
        <td class="column5 columGrey"></td>
        <td class="column5 columGrey"></td>
        <td class="column5 columGrey"></td>
        <td class="column5 columGrey"></td>
        <td class="column5 columGrey"></td>
        <td class="column5 columGrey"></td>
        <td class="column5 columGrey"></td>
        <td class="column5 columGrey"></td>
        <td class="column5 columGrey"></td>
        <td class="column5 columGrey"></td>
        <td class="column5 columGrey"></td>
        <td class="column5 columGrey"></td>
      </tr>
      <tr>
        <td class="column5 textCenter">1</td>
        <td class="column10">Kembar siam</td>
        <td class="column5">{{ $dataPuskesmas->data->kembar_siam_kode }}</td>
        <td class="column5">{{ $dataPuskesmas->data->kembar_siam_7hari }}</td>
        <td class="column5">{{ $dataPuskesmas->data->kembar_siam_28hari }}</td>
        <td class="column5">{{ $dataPuskesmas->data->kembar_siam_11bulan }}</td>
        <td class="column5">{{ $dataPuskesmas->data->kembar_siam_4tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->data->kembar_siam_9tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->data->kembar_siam_14tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->data->kembar_siam_19tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->data->kembar_siam_44tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->data->kembar_siam_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->data->kembar_siam_lebih_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->data->kembar_siam_l }}</td>
        <td class="column5">{{ $dataPuskesmas->data->kembar_siam_p }}</td>
        <td class="column5">{{ $dataPuskesmas->data->kembar_siam_7hari + $dataPuskesmas->data->kembar_siam_28hari + $dataPuskesmas->data->kembar_siam_11bulan + $dataPuskesmas->data->kembar_siam_4tahun + $dataPuskesmas->data->kembar_siam_9tahun + $dataPuskesmas->data->kembar_siam_14tahun + $dataPuskesmas->data->kembar_siam_44tahun + $dataPuskesmas->data->kembar_siam_59tahun + $dataPuskesmas->data->kembar_siam_lebih_59tahun + $dataPuskesmas->data->kembar_siam_l + $dataPuskesmas->data->kembar_siam_p }}</td>
        <td class="column5">{{ $dataPuskesmas->data->kembar_siam_l_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->data->kembar_siam_p_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->data->kembar_siam_l_lama + $dataPuskesmas->data->kembar_siam_p_lama }}</td>
      </tr>
    </tbody>
  </table>
</body>

</html>