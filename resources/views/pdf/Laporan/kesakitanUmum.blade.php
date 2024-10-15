<!DOCTYPE html>
<html>

<head>
  <title>LAPORAN BULANAN KESAKITAN UMUM</title>
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
    <p>LAPORAN BULANAN KESAKITAN UMUM</p>
  </div>
  <table>
    <thead>
      <tr>
        <td class="column5 textCenter" rowspan="2">No</td>
        <td class="column10 textCenter" rowspan="2">JENIS PENYAKIT</td>
        <td class="column5 textCenter" rowspan="2">ICD 10</td>
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
        <td class="column10">KELOMPOK UMUM</td>
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
        <td class="column10">Alergi makanan</td>
        <td class="column5">L27.2 </td>
        <td class="column5">{{ $dataPuskesmas->kelompokUmum->l272_7hari }}</td>
        <td class="column5">{{ $dataPuskesmas->kelompokUmum->l272_28hari }}</td>
        <td class="column5">{{ $dataPuskesmas->kelompokUmum->l272_11bulan }}</td>
        <td class="column5">{{ $dataPuskesmas->kelompokUmum->l272_4tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kelompokUmum->l272_9tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kelompokUmum->l272_14tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kelompokUmum->l272_19tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kelompokUmum->l272_44tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kelompokUmum->l272_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kelompokUmum->l272_lebih_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kelompokUmum->l272_l }}</td>
        <td class="column5">{{ $dataPuskesmas->kelompokUmum->l272_p }}</td>
        <td class="column5">{{ $dataPuskesmas->kelompokUmum->l272_7hari + $dataPuskesmas->kelompokUmum->l272_28hari + $dataPuskesmas->kelompokUmum->l272_11bulan + $dataPuskesmas->kelompokUmum->l272_4tahun + $dataPuskesmas->kelompokUmum->l272_9tahun + $dataPuskesmas->kelompokUmum->l272_14tahun + $dataPuskesmas->kelompokUmum->l272_19tahun + $dataPuskesmas->kelompokUmum->l272_44tahun + $dataPuskesmas->kelompokUmum->l272_59tahun + $dataPuskesmas->kelompokUmum->l272_lebih_59tahun + $dataPuskesmas->kelompokUmum->l272_l + $dataPuskesmas->kelompokUmum->l272_p  }}</td>
        <td class="column5">{{ $dataPuskesmas->kelompokUmum->l272_l_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->kelompokUmum->l272_p_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->kelompokUmum->l272_l_lama + $dataPuskesmas->kelompokUmum->l272_p_lama }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">2</td>
        <td class="column10">Chikungunya</td>
        <td class="column5">A92.0</td>
        <td class="column5">{{ $dataPuskesmas->kelompokUmum->a92_7hari }}</td>
        <td class="column5">{{ $dataPuskesmas->kelompokUmum->a92_28hari }}</td>
        <td class="column5">{{ $dataPuskesmas->kelompokUmum->a92_11bulan }}</td>
        <td class="column5">{{ $dataPuskesmas->kelompokUmum->a92_4tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kelompokUmum->a92_9tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kelompokUmum->a92_14tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kelompokUmum->a92_19tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kelompokUmum->a92_44tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kelompokUmum->a92_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kelompokUmum->a92_lebih_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kelompokUmum->a92_l }}</td>
        <td class="column5">{{ $dataPuskesmas->kelompokUmum->a92_p }}</td>
        <td class="column5">{{ $dataPuskesmas->kelompokUmum->a92_7hari + $dataPuskesmas->kelompokUmum->a92_28hari + $dataPuskesmas->kelompokUmum->a92_11bulan + $dataPuskesmas->kelompokUmum->a92_4tahun + $dataPuskesmas->kelompokUmum->a92_9tahun + $dataPuskesmas->kelompokUmum->a92_14tahun + $dataPuskesmas->kelompokUmum->a92_19tahun + $dataPuskesmas->kelompokUmum->a92_44tahun + $dataPuskesmas->kelompokUmum->a92_59tahun + $dataPuskesmas->kelompokUmum->a92_lebih_59tahun + $dataPuskesmas->kelompokUmum->a92_l + $dataPuskesmas->kelompokUmum->a92_p  }}</td>
        <td class="column5">{{ $dataPuskesmas->kelompokUmum->a92_l_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->kelompokUmum->a92_p_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->kelompokUmum->a92_l_lama + $dataPuskesmas->kelompokUmum->a92_p_lama }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">3</td>
        <td class="column10">Demam dengue dan demam berdarah dengue</td>
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
        <td class="column5 textCenter"></td>
        <td class="column10">a. Demam berdarah dengue</td>
        <td class="column5">A91</td>
        <td class="column5">{{ $dataPuskesmas->kelompokUmum->a91_7hari }}</td>
        <td class="column5">{{ $dataPuskesmas->kelompokUmum->a91_28hari }}</td>
        <td class="column5">{{ $dataPuskesmas->kelompokUmum->a91_11bulan }}</td>
        <td class="column5">{{ $dataPuskesmas->kelompokUmum->a91_4tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kelompokUmum->a91_9tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kelompokUmum->a91_14tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kelompokUmum->a91_19tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kelompokUmum->a91_44tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kelompokUmum->a91_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kelompokUmum->a91_lebih_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kelompokUmum->a91_l }}</td>
        <td class="column5">{{ $dataPuskesmas->kelompokUmum->a91_p }}</td>
        <td class="column5">{{ $dataPuskesmas->kelompokUmum->a91_7hari + $dataPuskesmas->kelompokUmum->a91_28hari + $dataPuskesmas->kelompokUmum->a91_11bulan + $dataPuskesmas->kelompokUmum->a91_4tahun + $dataPuskesmas->kelompokUmum->a91_9tahun + $dataPuskesmas->kelompokUmum->a91_14tahun + $dataPuskesmas->kelompokUmum->a91_19tahun + $dataPuskesmas->kelompokUmum->a91_44tahun + $dataPuskesmas->kelompokUmum->a91_59tahun + $dataPuskesmas->kelompokUmum->a91_lebih_59tahun + $dataPuskesmas->kelompokUmum->a91_l + $dataPuskesmas->kelompokUmum->a91_p  }}</td>
        <td class="column5">{{ $dataPuskesmas->kelompokUmum->a91_l_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->kelompokUmum->a91_p_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->kelompokUmum->a91_l_lama + $dataPuskesmas->kelompokUmum->a91_p_lama }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter"></td>
        <td class="column10">b. Demam dengue</td>
        <td class="column5">A90</td>
        <td class="column5">{{ $dataPuskesmas->kelompokUmum->a90_7hari }}</td>
        <td class="column5">{{ $dataPuskesmas->kelompokUmum->a90_28hari }}</td>
        <td class="column5">{{ $dataPuskesmas->kelompokUmum->a90_11bulan }}</td>
        <td class="column5">{{ $dataPuskesmas->kelompokUmum->a90_4tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kelompokUmum->a90_9tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kelompokUmum->a90_14tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kelompokUmum->a90_19tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kelompokUmum->a90_44tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kelompokUmum->a90_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kelompokUmum->a90_lebih_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kelompokUmum->a90_l }}</td>
        <td class="column5">{{ $dataPuskesmas->kelompokUmum->a90_p }}</td>
        <td class="column5">{{ $dataPuskesmas->kelompokUmum->a90_7hari + $dataPuskesmas->kelompokUmum->a90_28hari + $dataPuskesmas->kelompokUmum->a90_11bulan + $dataPuskesmas->kelompokUmum->a90_4tahun + $dataPuskesmas->kelompokUmum->a90_9tahun + $dataPuskesmas->kelompokUmum->a90_14tahun + $dataPuskesmas->kelompokUmum->a90_19tahun + $dataPuskesmas->kelompokUmum->a90_44tahun + $dataPuskesmas->kelompokUmum->a90_59tahun + $dataPuskesmas->kelompokUmum->a90_lebih_59tahun + $dataPuskesmas->kelompokUmum->a90_l + $dataPuskesmas->kelompokUmum->a90_p  }}</td>
        <td class="column5">{{ $dataPuskesmas->kelompokUmum->a90_l_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->kelompokUmum->a90_p_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->kelompokUmum->a90_l_lama + $dataPuskesmas->kelompokUmum->a90_p_lama }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">4</td>
        <td class="column10">Filariasis</td>
        <td class="column5">B74</td>
        <td class="column5">{{ $dataPuskesmas->kelompokUmum->b74_7hari }}</td>
        <td class="column5">{{ $dataPuskesmas->kelompokUmum->b74_28hari }}</td>
        <td class="column5">{{ $dataPuskesmas->kelompokUmum->b74_11bulan }}</td>
        <td class="column5">{{ $dataPuskesmas->kelompokUmum->b74_4tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kelompokUmum->b74_9tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kelompokUmum->b74_14tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kelompokUmum->b74_19tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kelompokUmum->b74_44tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kelompokUmum->b74_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kelompokUmum->b74_lebih_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kelompokUmum->b74_l }}</td>
        <td class="column5">{{ $dataPuskesmas->kelompokUmum->b74_p }}</td>
        <td class="column5">{{ $dataPuskesmas->kelompokUmum->b74_7hari + $dataPuskesmas->kelompokUmum->b74_28hari + $dataPuskesmas->kelompokUmum->b74_11bulan + $dataPuskesmas->kelompokUmum->b74_4tahun + $dataPuskesmas->kelompokUmum->b74_9tahun + $dataPuskesmas->kelompokUmum->b74_14tahun + $dataPuskesmas->kelompokUmum->b74_19tahun + $dataPuskesmas->kelompokUmum->b74_44tahun + $dataPuskesmas->kelompokUmum->b74_59tahun + $dataPuskesmas->kelompokUmum->b74_lebih_59tahun + $dataPuskesmas->kelompokUmum->b74_l + $dataPuskesmas->kelompokUmum->b74_p  }}</td>
        <td class="column5">{{ $dataPuskesmas->kelompokUmum->b74_l_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->kelompokUmum->b74_p_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->kelompokUmum->b74_l_lama + $dataPuskesmas->kelompokUmum->b74_p_lama }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">5</td>
        <td class="column10">Infeksi pada Umbilikus</td>
        <td class="column5">P38</td>
        <td class="column5">{{ $dataPuskesmas->kelompokUmum->p38_7hari }}</td>
        <td class="column5">{{ $dataPuskesmas->kelompokUmum->p38_28hari }}</td>
        <td class="column5">{{ $dataPuskesmas->kelompokUmum->p38_11bulan }}</td>
        <td class="column5">{{ $dataPuskesmas->kelompokUmum->p38_4tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kelompokUmum->p38_9tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kelompokUmum->p38_14tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kelompokUmum->p38_19tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kelompokUmum->p38_44tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kelompokUmum->p38_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kelompokUmum->p38_lebih_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kelompokUmum->p38_l }}</td>
        <td class="column5">{{ $dataPuskesmas->kelompokUmum->p38_p }}</td>
        <td class="column5">{{ $dataPuskesmas->kelompokUmum->p38_7hari + $dataPuskesmas->kelompokUmum->p38_28hari + $dataPuskesmas->kelompokUmum->p38_11bulan + $dataPuskesmas->kelompokUmum->p38_4tahun + $dataPuskesmas->kelompokUmum->p38_9tahun + $dataPuskesmas->kelompokUmum->p38_14tahun + $dataPuskesmas->kelompokUmum->p38_19tahun + $dataPuskesmas->kelompokUmum->p38_44tahun + $dataPuskesmas->kelompokUmum->p38_59tahun + $dataPuskesmas->kelompokUmum->p38_lebih_59tahun + $dataPuskesmas->kelompokUmum->p38_l + $dataPuskesmas->kelompokUmum->p38_p  }}</td>
        <td class="column5">{{ $dataPuskesmas->kelompokUmum->p38_l_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->kelompokUmum->p38_p_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->kelompokUmum->p38_l_lama + $dataPuskesmas->kelompokUmum->p38_p_lama }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">6</td>
        <td class="column10">Kandidiasis Mulut</td>
        <td class="column5">B37.9</td>
        <td class="column5">{{ $dataPuskesmas->kelompokUmum->b379_7hari }}</td>
        <td class="column5">{{ $dataPuskesmas->kelompokUmum->b379_28hari }}</td>
        <td class="column5">{{ $dataPuskesmas->kelompokUmum->b379_11bulan }}</td>
        <td class="column5">{{ $dataPuskesmas->kelompokUmum->b379_4tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kelompokUmum->b379_9tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kelompokUmum->b379_14tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kelompokUmum->b379_19tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kelompokUmum->b379_44tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kelompokUmum->b379_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kelompokUmum->b379_lebih_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kelompokUmum->b379_l }}</td>
        <td class="column5">{{ $dataPuskesmas->kelompokUmum->b379_p }}</td>
        <td class="column5">{{ $dataPuskesmas->kelompokUmum->b379_7hari + $dataPuskesmas->kelompokUmum->b379_28hari + $dataPuskesmas->kelompokUmum->b379_11bulan + $dataPuskesmas->kelompokUmum->b379_4tahun + $dataPuskesmas->kelompokUmum->b379_9tahun + $dataPuskesmas->kelompokUmum->b379_14tahun + $dataPuskesmas->kelompokUmum->b379_19tahun + $dataPuskesmas->kelompokUmum->b379_44tahun + $dataPuskesmas->kelompokUmum->b379_59tahun + $dataPuskesmas->kelompokUmum->b379_lebih_59tahun + $dataPuskesmas->kelompokUmum->b379_l + $dataPuskesmas->kelompokUmum->b379_p  }}</td>
        <td class="column5">{{ $dataPuskesmas->kelompokUmum->b379_l_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->kelompokUmum->b379_p_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->kelompokUmum->b379_l_lama + $dataPuskesmas->kelompokUmum->b379_p_lama }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">7</td>
        <td class="column10">Keracunan makanan</td>
        <td class="column5">T62.2</td>
        <td class="column5">{{ $dataPuskesmas->kelompokUmum->t622_7hari }}</td>
        <td class="column5">{{ $dataPuskesmas->kelompokUmum->t622_28hari }}</td>
        <td class="column5">{{ $dataPuskesmas->kelompokUmum->t622_11bulan }}</td>
        <td class="column5">{{ $dataPuskesmas->kelompokUmum->t622_4tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kelompokUmum->t622_9tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kelompokUmum->t622_14tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kelompokUmum->t622_19tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kelompokUmum->t622_44tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kelompokUmum->t622_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kelompokUmum->t622_lebih_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kelompokUmum->t622_l }}</td>
        <td class="column5">{{ $dataPuskesmas->kelompokUmum->t622_p }}</td>
        <td class="column5">{{ $dataPuskesmas->kelompokUmum->t622_7hari + $dataPuskesmas->kelompokUmum->t622_28hari + $dataPuskesmas->kelompokUmum->t622_11bulan + $dataPuskesmas->kelompokUmum->t622_4tahun + $dataPuskesmas->kelompokUmum->t622_9tahun + $dataPuskesmas->kelompokUmum->t622_14tahun + $dataPuskesmas->kelompokUmum->t622_19tahun + $dataPuskesmas->kelompokUmum->t622_44tahun + $dataPuskesmas->kelompokUmum->t622_59tahun + $dataPuskesmas->kelompokUmum->t622_lebih_59tahun + $dataPuskesmas->kelompokUmum->t622_l + $dataPuskesmas->kelompokUmum->t622_p  }}</td>
        <td class="column5">{{ $dataPuskesmas->kelompokUmum->t622_l_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->kelompokUmum->t622_p_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->kelompokUmum->t622_l_lama + $dataPuskesmas->kelompokUmum->t622_p_lama }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">8</td>
        <td class="column10">Lepra</td>
        <td class="column5">A30</td>
        <td class="column5">{{ $dataPuskesmas->kelompokUmum->a30_7hari }}</td>
        <td class="column5">{{ $dataPuskesmas->kelompokUmum->a30_28hari }}</td>
        <td class="column5">{{ $dataPuskesmas->kelompokUmum->a30_11bulan }}</td>
        <td class="column5">{{ $dataPuskesmas->kelompokUmum->a30_4tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kelompokUmum->a30_9tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kelompokUmum->a30_14tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kelompokUmum->a30_19tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kelompokUmum->a30_44tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kelompokUmum->a30_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kelompokUmum->a30_lebih_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kelompokUmum->a30_l }}</td>
        <td class="column5">{{ $dataPuskesmas->kelompokUmum->a30_p }}</td>
        <td class="column5">{{ $dataPuskesmas->kelompokUmum->a30_7hari + $dataPuskesmas->kelompokUmum->a30_28hari + $dataPuskesmas->kelompokUmum->a30_11bulan + $dataPuskesmas->kelompokUmum->a30_4tahun + $dataPuskesmas->kelompokUmum->a30_9tahun + $dataPuskesmas->kelompokUmum->a30_14tahun + $dataPuskesmas->kelompokUmum->a30_19tahun + $dataPuskesmas->kelompokUmum->a30_44tahun + $dataPuskesmas->kelompokUmum->a30_59tahun + $dataPuskesmas->kelompokUmum->a30_lebih_59tahun + $dataPuskesmas->kelompokUmum->a30_l + $dataPuskesmas->kelompokUmum->a30_p  }}</td>
        <td class="column5">{{ $dataPuskesmas->kelompokUmum->a30_l_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->kelompokUmum->a30_p_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->kelompokUmum->a30_l_lama + $dataPuskesmas->kelompokUmum->a30_p_lama }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">9</td>
        <td class="column10">Leptospirosis</td>
        <td class="column5">A27.9</td>
        <td class="column5">{{ $dataPuskesmas->kelompokUmum->a279_7hari }}</td>
        <td class="column5">{{ $dataPuskesmas->kelompokUmum->a279_28hari }}</td>
        <td class="column5">{{ $dataPuskesmas->kelompokUmum->a279_11bulan }}</td>
        <td class="column5">{{ $dataPuskesmas->kelompokUmum->a279_4tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kelompokUmum->a279_9tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kelompokUmum->a279_14tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kelompokUmum->a279_19tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kelompokUmum->a279_44tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kelompokUmum->a279_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kelompokUmum->a279_lebih_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kelompokUmum->a279_l }}</td>
        <td class="column5">{{ $dataPuskesmas->kelompokUmum->a279_p }}</td>
        <td class="column5">{{ $dataPuskesmas->kelompokUmum->a279_7hari + $dataPuskesmas->kelompokUmum->a279_28hari + $dataPuskesmas->kelompokUmum->a279_11bulan + $dataPuskesmas->kelompokUmum->a279_4tahun + $dataPuskesmas->kelompokUmum->a279_9tahun + $dataPuskesmas->kelompokUmum->a279_14tahun + $dataPuskesmas->kelompokUmum->a279_19tahun + $dataPuskesmas->kelompokUmum->a279_44tahun + $dataPuskesmas->kelompokUmum->a279_59tahun + $dataPuskesmas->kelompokUmum->a279_lebih_59tahun + $dataPuskesmas->kelompokUmum->a279_l + $dataPuskesmas->kelompokUmum->a279_p  }}</td>
        <td class="column5">{{ $dataPuskesmas->kelompokUmum->a279_l_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->kelompokUmum->a279_p_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->kelompokUmum->a279_l_lama + $dataPuskesmas->kelompokUmum->a279_p_lama }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">10</td>
        <td class="column10">Malaria</td>
        <td class="column5">B54</td>
        <td class="column5">{{ $dataPuskesmas->kelompokUmum->b54_7hari }}</td>
        <td class="column5">{{ $dataPuskesmas->kelompokUmum->b54_28hari }}</td>
        <td class="column5">{{ $dataPuskesmas->kelompokUmum->b54_11bulan }}</td>
        <td class="column5">{{ $dataPuskesmas->kelompokUmum->b54_4tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kelompokUmum->b54_9tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kelompokUmum->b54_14tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kelompokUmum->b54_19tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kelompokUmum->b54_44tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kelompokUmum->b54_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kelompokUmum->b54_lebih_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kelompokUmum->b54_l }}</td>
        <td class="column5">{{ $dataPuskesmas->kelompokUmum->b54_p }}</td>
        <td class="column5">{{ $dataPuskesmas->kelompokUmum->b54_7hari + $dataPuskesmas->kelompokUmum->b54_28hari + $dataPuskesmas->kelompokUmum->b54_11bulan + $dataPuskesmas->kelompokUmum->b54_4tahun + $dataPuskesmas->kelompokUmum->b54_9tahun + $dataPuskesmas->kelompokUmum->b54_14tahun + $dataPuskesmas->kelompokUmum->b54_19tahun + $dataPuskesmas->kelompokUmum->b54_44tahun + $dataPuskesmas->kelompokUmum->b54_59tahun + $dataPuskesmas->kelompokUmum->b54_lebih_59tahun + $dataPuskesmas->kelompokUmum->b54_l + $dataPuskesmas->kelompokUmum->b54_p  }}</td>
        <td class="column5">{{ $dataPuskesmas->kelompokUmum->b54_l_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->kelompokUmum->b54_p_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->kelompokUmum->b54_l_lama + $dataPuskesmas->kelompokUmum->b54_p_lama }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">11</td>
        <td class="column10">Morbili (Campak)</td>
        <td class="column5">B05.9</td>
        <td class="column5">{{ $dataPuskesmas->kelompokUmum->b059_7hari }}</td>
        <td class="column5">{{ $dataPuskesmas->kelompokUmum->b059_28hari }}</td>
        <td class="column5">{{ $dataPuskesmas->kelompokUmum->b059_11bulan }}</td>
        <td class="column5">{{ $dataPuskesmas->kelompokUmum->b059_4tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kelompokUmum->b059_9tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kelompokUmum->b059_14tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kelompokUmum->b059_19tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kelompokUmum->b059_44tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kelompokUmum->b059_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kelompokUmum->b059_lebih_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kelompokUmum->b059_l }}</td>
        <td class="column5">{{ $dataPuskesmas->kelompokUmum->b059_p }}</td>
        <td class="column5">{{ $dataPuskesmas->kelompokUmum->b059_7hari + $dataPuskesmas->kelompokUmum->b059_28hari + $dataPuskesmas->kelompokUmum->b059_11bulan + $dataPuskesmas->kelompokUmum->b059_4tahun + $dataPuskesmas->kelompokUmum->b059_9tahun + $dataPuskesmas->kelompokUmum->b059_14tahun + $dataPuskesmas->kelompokUmum->b059_19tahun + $dataPuskesmas->kelompokUmum->b059_44tahun + $dataPuskesmas->kelompokUmum->b059_59tahun + $dataPuskesmas->kelompokUmum->b059_lebih_59tahun + $dataPuskesmas->kelompokUmum->b059_l + $dataPuskesmas->kelompokUmum->b059_p  }}</td>
        <td class="column5">{{ $dataPuskesmas->kelompokUmum->b059_l_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->kelompokUmum->b059_p_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->kelompokUmum->b059_l_lama + $dataPuskesmas->kelompokUmum->b059_p_lama }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">12</td>
        <td class="column10">Reaksi Anafilaktik</td>
        <td class="column5">T78.2</td>
        <td class="column5">{{ $dataPuskesmas->kelompokUmum->t782_7hari }}</td>
        <td class="column5">{{ $dataPuskesmas->kelompokUmum->t782_28hari }}</td>
        <td class="column5">{{ $dataPuskesmas->kelompokUmum->t782_11bulan }}</td>
        <td class="column5">{{ $dataPuskesmas->kelompokUmum->t782_4tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kelompokUmum->t782_9tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kelompokUmum->t782_14tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kelompokUmum->t782_19tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kelompokUmum->t782_44tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kelompokUmum->t782_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kelompokUmum->t782_lebih_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kelompokUmum->t782_l }}</td>
        <td class="column5">{{ $dataPuskesmas->kelompokUmum->t782_p }}</td>
        <td class="column5">{{ $dataPuskesmas->kelompokUmum->t782_7hari + $dataPuskesmas->kelompokUmum->t782_28hari + $dataPuskesmas->kelompokUmum->t782_11bulan + $dataPuskesmas->kelompokUmum->t782_4tahun + $dataPuskesmas->kelompokUmum->t782_9tahun + $dataPuskesmas->kelompokUmum->t782_14tahun + $dataPuskesmas->kelompokUmum->t782_19tahun + $dataPuskesmas->kelompokUmum->t782_44tahun + $dataPuskesmas->kelompokUmum->t782_59tahun + $dataPuskesmas->kelompokUmum->t782_lebih_59tahun + $dataPuskesmas->kelompokUmum->t782_l + $dataPuskesmas->kelompokUmum->t782_p  }}</td>
        <td class="column5">{{ $dataPuskesmas->kelompokUmum->t782_l_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->kelompokUmum->t782_p_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->kelompokUmum->t782_l_lama + $dataPuskesmas->kelompokUmum->t782_p_lama }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">13</td>
        <td class="column10">Syok</td>
        <td class="column5">R57.9</td>
        <td class="column5">{{ $dataPuskesmas->kelompokUmum->r579_7hari }}</td>
        <td class="column5">{{ $dataPuskesmas->kelompokUmum->r579_28hari }}</td>
        <td class="column5">{{ $dataPuskesmas->kelompokUmum->r579_11bulan }}</td>
        <td class="column5">{{ $dataPuskesmas->kelompokUmum->r579_4tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kelompokUmum->r579_9tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kelompokUmum->r579_14tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kelompokUmum->r579_19tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kelompokUmum->r579_44tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kelompokUmum->r579_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kelompokUmum->r579_lebih_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kelompokUmum->r579_l }}</td>
        <td class="column5">{{ $dataPuskesmas->kelompokUmum->r579_p }}</td>
        <td class="column5">{{ $dataPuskesmas->kelompokUmum->r579_7hari + $dataPuskesmas->kelompokUmum->r579_28hari + $dataPuskesmas->kelompokUmum->r579_11bulan + $dataPuskesmas->kelompokUmum->r579_4tahun + $dataPuskesmas->kelompokUmum->r579_9tahun + $dataPuskesmas->kelompokUmum->r579_14tahun + $dataPuskesmas->kelompokUmum->r579_19tahun + $dataPuskesmas->kelompokUmum->r579_44tahun + $dataPuskesmas->kelompokUmum->r579_59tahun + $dataPuskesmas->kelompokUmum->r579_lebih_59tahun + $dataPuskesmas->kelompokUmum->r579_l + $dataPuskesmas->kelompokUmum->r579_p  }}</td>
        <td class="column5">{{ $dataPuskesmas->kelompokUmum->r579_l_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->kelompokUmum->r579_p_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->kelompokUmum->r579_l_lama + $dataPuskesmas->kelompokUmum->r579_p_lama }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">14</td>
        <td class="column10">TB selain Paru (ekstra Paru)</td>
        <td class="column5">A18</td>
        <td class="column5">{{ $dataPuskesmas->kelompokUmum->a18_7hari }}</td>
        <td class="column5">{{ $dataPuskesmas->kelompokUmum->a18_28hari }}</td>
        <td class="column5">{{ $dataPuskesmas->kelompokUmum->a18_11bulan }}</td>
        <td class="column5">{{ $dataPuskesmas->kelompokUmum->a18_4tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kelompokUmum->a18_9tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kelompokUmum->a18_14tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kelompokUmum->a18_19tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kelompokUmum->a18_44tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kelompokUmum->a18_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kelompokUmum->a18_lebih_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kelompokUmum->a18_l }}</td>
        <td class="column5">{{ $dataPuskesmas->kelompokUmum->a18_p }}</td>
        <td class="column5">{{ $dataPuskesmas->kelompokUmum->a18_7hari + $dataPuskesmas->kelompokUmum->a18_28hari + $dataPuskesmas->kelompokUmum->a18_11bulan + $dataPuskesmas->kelompokUmum->a18_4tahun + $dataPuskesmas->kelompokUmum->a18_9tahun + $dataPuskesmas->kelompokUmum->a18_14tahun + $dataPuskesmas->kelompokUmum->a18_19tahun + $dataPuskesmas->kelompokUmum->a18_44tahun + $dataPuskesmas->kelompokUmum->a18_59tahun + $dataPuskesmas->kelompokUmum->a18_lebih_59tahun + $dataPuskesmas->kelompokUmum->a18_l + $dataPuskesmas->kelompokUmum->a18_p  }}</td>
        <td class="column5">{{ $dataPuskesmas->kelompokUmum->a18_l_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->kelompokUmum->a18_p_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->kelompokUmum->a18_l_lama + $dataPuskesmas->kelompokUmum->a18_p_lama }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">15</td>
        <td class="column10">Tuberkulosis (TB) Paru</td>
        <td class="column5">A15</td>
        <td class="column5">{{ $dataPuskesmas->kelompokUmum->a15_7hari }}</td>
        <td class="column5">{{ $dataPuskesmas->kelompokUmum->a15_28hari }}</td>
        <td class="column5">{{ $dataPuskesmas->kelompokUmum->a15_11bulan }}</td>
        <td class="column5">{{ $dataPuskesmas->kelompokUmum->a15_4tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kelompokUmum->a15_9tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kelompokUmum->a15_14tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kelompokUmum->a15_19tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kelompokUmum->a15_44tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kelompokUmum->a15_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kelompokUmum->a15_lebih_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kelompokUmum->a15_l }}</td>
        <td class="column5">{{ $dataPuskesmas->kelompokUmum->a15_p }}</td>
        <td class="column5">{{ $dataPuskesmas->kelompokUmum->a15_7hari + $dataPuskesmas->kelompokUmum->a15_28hari + $dataPuskesmas->kelompokUmum->a15_11bulan + $dataPuskesmas->kelompokUmum->a15_4tahun + $dataPuskesmas->kelompokUmum->a15_9tahun + $dataPuskesmas->kelompokUmum->a15_14tahun + $dataPuskesmas->kelompokUmum->a15_19tahun + $dataPuskesmas->kelompokUmum->a15_44tahun + $dataPuskesmas->kelompokUmum->a15_59tahun + $dataPuskesmas->kelompokUmum->a15_lebih_59tahun + $dataPuskesmas->kelompokUmum->a15_l + $dataPuskesmas->kelompokUmum->a15_p  }}</td>
        <td class="column5">{{ $dataPuskesmas->kelompokUmum->a15_l_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->kelompokUmum->a15_p_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->kelompokUmum->a15_l_lama + $dataPuskesmas->kelompokUmum->a15_p_lama }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">16</td>
        <td class="column10">Tuberkulosis dengan HIV</td>
        <td class="column5">B20.0</td>
        <td class="column5">{{ $dataPuskesmas->kelompokUmum->b200_7hari }}</td>
        <td class="column5">{{ $dataPuskesmas->kelompokUmum->b200_28hari }}</td>
        <td class="column5">{{ $dataPuskesmas->kelompokUmum->b200_11bulan }}</td>
        <td class="column5">{{ $dataPuskesmas->kelompokUmum->b200_4tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kelompokUmum->b200_9tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kelompokUmum->b200_14tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kelompokUmum->b200_19tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kelompokUmum->b200_44tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kelompokUmum->b200_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kelompokUmum->b200_lebih_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kelompokUmum->b200_l }}</td>
        <td class="column5">{{ $dataPuskesmas->kelompokUmum->b200_p }}</td>
        <td class="column5">{{ $dataPuskesmas->kelompokUmum->b200_7hari + $dataPuskesmas->kelompokUmum->b200_28hari + $dataPuskesmas->kelompokUmum->b200_11bulan + $dataPuskesmas->kelompokUmum->b200_4tahun + $dataPuskesmas->kelompokUmum->b200_9tahun + $dataPuskesmas->kelompokUmum->b200_14tahun + $dataPuskesmas->kelompokUmum->b200_19tahun + $dataPuskesmas->kelompokUmum->b200_44tahun + $dataPuskesmas->kelompokUmum->b200_59tahun + $dataPuskesmas->kelompokUmum->b200_lebih_59tahun + $dataPuskesmas->kelompokUmum->b200_l + $dataPuskesmas->kelompokUmum->b200_p  }}</td>
        <td class="column5">{{ $dataPuskesmas->kelompokUmum->b200_l_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->kelompokUmum->b200_p_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->kelompokUmum->b200_l_lama + $dataPuskesmas->kelompokUmum->b200_p_lama }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">17</td>
        <td class="column10">Varisela</td>
        <td class="column5">B01.9</td>
        <td class="column5">{{ $dataPuskesmas->kelompokUmum->b019_7hari }}</td>
        <td class="column5">{{ $dataPuskesmas->kelompokUmum->b019_28hari }}</td>
        <td class="column5">{{ $dataPuskesmas->kelompokUmum->b019_11bulan }}</td>
        <td class="column5">{{ $dataPuskesmas->kelompokUmum->b019_4tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kelompokUmum->b019_9tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kelompokUmum->b019_14tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kelompokUmum->b019_19tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kelompokUmum->b019_44tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kelompokUmum->b019_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kelompokUmum->b019_lebih_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kelompokUmum->b019_l }}</td>
        <td class="column5">{{ $dataPuskesmas->kelompokUmum->b019_p }}</td>
        <td class="column5">{{ $dataPuskesmas->kelompokUmum->b019_7hari + $dataPuskesmas->kelompokUmum->b019_28hari + $dataPuskesmas->kelompokUmum->b019_11bulan + $dataPuskesmas->kelompokUmum->b019_4tahun + $dataPuskesmas->kelompokUmum->b019_9tahun + $dataPuskesmas->kelompokUmum->b019_14tahun + $dataPuskesmas->kelompokUmum->b019_19tahun + $dataPuskesmas->kelompokUmum->b019_44tahun + $dataPuskesmas->kelompokUmum->b019_59tahun + $dataPuskesmas->kelompokUmum->b019_lebih_59tahun + $dataPuskesmas->kelompokUmum->b019_l + $dataPuskesmas->kelompokUmum->b019_p  }}</td>
        <td class="column5">{{ $dataPuskesmas->kelompokUmum->b019_l_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->kelompokUmum->b019_p_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->kelompokUmum->b019_l_lama + $dataPuskesmas->kelompokUmum->b019_p_lama }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">B</td>
        <td class="column10">DARAH, PEMBENTUKAN DARAH DAN SISTEM IMUN</td>
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
        <td class="column10">Anemia defisiensi besi </td>
        <td class="column5">D50.9</td>
        <td class="column5">{{ $dataPuskesmas->darah->d509_7hari }}</td>
        <td class="column5">{{ $dataPuskesmas->darah->d509_28hari }}</td>
        <td class="column5">{{ $dataPuskesmas->darah->d509_11bulan }}</td>
        <td class="column5">{{ $dataPuskesmas->darah->d509_4tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->darah->d509_9tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->darah->d509_14tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->darah->d509_19tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->darah->d509_44tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->darah->d509_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->darah->d509_lebih_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->darah->d509_l }}</td>
        <td class="column5">{{ $dataPuskesmas->darah->d509_p }}</td>
        <td class="column5">{{ $dataPuskesmas->darah->d509_7hari + $dataPuskesmas->darah->d509_28hari + $dataPuskesmas->darah->d509_11bulan + $dataPuskesmas->darah->d509_4tahun + $dataPuskesmas->darah->d509_9tahun + $dataPuskesmas->darah->d509_14tahun + $dataPuskesmas->darah->d509_19tahun + $dataPuskesmas->darah->d509_44tahun + $dataPuskesmas->darah->d509_59tahun + $dataPuskesmas->darah->d509_lebih_59tahun + $dataPuskesmas->darah->d509_l + $dataPuskesmas->darah->d509_p  }}</td>
        <td class="column5">{{ $dataPuskesmas->darah->d509_l_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->darah->d509_p_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->darah->d509_l_lama + $dataPuskesmas->darah->d509_p_lama }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">2</td>
        <td class="column10">HIV/ AIDS tanpa komplikasi</td>
        <td class="column5">Z21</td>
        <td class="column5">{{ $dataPuskesmas->darah->z21_7hari }}</td>
        <td class="column5">{{ $dataPuskesmas->darah->z21_28hari }}</td>
        <td class="column5">{{ $dataPuskesmas->darah->z21_11bulan }}</td>
        <td class="column5">{{ $dataPuskesmas->darah->z21_4tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->darah->z21_9tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->darah->z21_14tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->darah->z21_19tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->darah->z21_44tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->darah->z21_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->darah->z21_lebih_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->darah->z21_l }}</td>
        <td class="column5">{{ $dataPuskesmas->darah->z21_p }}</td>
        <td class="column5">{{ $dataPuskesmas->darah->z21_7hari + $dataPuskesmas->darah->z21_28hari + $dataPuskesmas->darah->z21_11bulan + $dataPuskesmas->darah->z21_4tahun + $dataPuskesmas->darah->z21_9tahun + $dataPuskesmas->darah->z21_14tahun + $dataPuskesmas->darah->z21_19tahun + $dataPuskesmas->darah->z21_44tahun + $dataPuskesmas->darah->z21_59tahun + $dataPuskesmas->darah->z21_lebih_59tahun + $dataPuskesmas->darah->z21_l + $dataPuskesmas->darah->z21_p  }}</td>
        <td class="column5">{{ $dataPuskesmas->darah->z21_l_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->darah->z21_p_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->darah->z21_l_lama + $dataPuskesmas->darah->z21_p_lama }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">3</td>
        <td class="column10">Leukemia</td>
        <td class="column5">D55</td>
        <td class="column5">{{ $dataPuskesmas->darah->d55_7hari }}</td>
        <td class="column5">{{ $dataPuskesmas->darah->d55_28hari }}</td>
        <td class="column5">{{ $dataPuskesmas->darah->d55_11bulan }}</td>
        <td class="column5">{{ $dataPuskesmas->darah->d55_4tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->darah->d55_9tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->darah->d55_14tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->darah->d55_19tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->darah->d55_44tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->darah->d55_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->darah->d55_lebih_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->darah->d55_l }}</td>
        <td class="column5">{{ $dataPuskesmas->darah->d55_p }}</td>
        <td class="column5">{{ $dataPuskesmas->darah->d55_7hari + $dataPuskesmas->darah->d55_28hari + $dataPuskesmas->darah->d55_11bulan + $dataPuskesmas->darah->d55_4tahun + $dataPuskesmas->darah->d55_9tahun + $dataPuskesmas->darah->d55_14tahun + $dataPuskesmas->darah->d55_19tahun + $dataPuskesmas->darah->d55_44tahun + $dataPuskesmas->darah->d55_59tahun + $dataPuskesmas->darah->d55_lebih_59tahun + $dataPuskesmas->darah->d55_l + $dataPuskesmas->darah->d55_p  }}</td>
        <td class="column5">{{ $dataPuskesmas->darah->d55_l_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->darah->d55_p_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->darah->d55_l_lama + $dataPuskesmas->darah->d55_p_lama }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">4</td>
        <td class="column10">Limfadenitis</td>
        <td class="column5">B70</td>
        <td class="column5">{{ $dataPuskesmas->darah->b70_7hari }}</td>
        <td class="column5">{{ $dataPuskesmas->darah->b70_28hari }}</td>
        <td class="column5">{{ $dataPuskesmas->darah->b70_11bulan }}</td>
        <td class="column5">{{ $dataPuskesmas->darah->b70_4tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->darah->b70_9tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->darah->b70_14tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->darah->b70_19tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->darah->b70_44tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->darah->b70_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->darah->b70_lebih_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->darah->b70_l }}</td>
        <td class="column5">{{ $dataPuskesmas->darah->b70_p }}</td>
        <td class="column5">{{ $dataPuskesmas->darah->b70_7hari + $dataPuskesmas->darah->b70_28hari + $dataPuskesmas->darah->b70_11bulan + $dataPuskesmas->darah->b70_4tahun + $dataPuskesmas->darah->b70_9tahun + $dataPuskesmas->darah->b70_14tahun + $dataPuskesmas->darah->b70_19tahun + $dataPuskesmas->darah->b70_44tahun + $dataPuskesmas->darah->b70_59tahun + $dataPuskesmas->darah->b70_lebih_59tahun + $dataPuskesmas->darah->b70_l + $dataPuskesmas->darah->b70_p  }}</td>
        <td class="column5">{{ $dataPuskesmas->darah->b70_l_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->darah->b70_p_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->darah->b70_l_lama + $dataPuskesmas->darah->b70_p_lama }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">5</td>
        <td class="column10">Limfoma Maligna</td>
        <td class="column5">C85.9</td>
        <td class="column5">{{ $dataPuskesmas->darah->c859_7hari }}</td>
        <td class="column5">{{ $dataPuskesmas->darah->c859_28hari }}</td>
        <td class="column5">{{ $dataPuskesmas->darah->c859_11bulan }}</td>
        <td class="column5">{{ $dataPuskesmas->darah->c859_4tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->darah->c859_9tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->darah->c859_14tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->darah->c859_19tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->darah->c859_44tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->darah->c859_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->darah->c859_lebih_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->darah->c859_l }}</td>
        <td class="column5">{{ $dataPuskesmas->darah->c859_p }}</td>
        <td class="column5">{{ $dataPuskesmas->darah->c859_7hari + $dataPuskesmas->darah->c859_28hari + $dataPuskesmas->darah->c859_11bulan + $dataPuskesmas->darah->c859_4tahun + $dataPuskesmas->darah->c859_9tahun + $dataPuskesmas->darah->c859_14tahun + $dataPuskesmas->darah->c859_19tahun + $dataPuskesmas->darah->c859_44tahun + $dataPuskesmas->darah->c859_59tahun + $dataPuskesmas->darah->c859_lebih_59tahun + $dataPuskesmas->darah->c859_l + $dataPuskesmas->darah->c859_p  }}</td>
        <td class="column5">{{ $dataPuskesmas->darah->c859_l_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->darah->c859_p_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->darah->c859_l_lama + $dataPuskesmas->darah->c859_p_lama }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">6</td>
        <td class="column10">Lupus Eritematosus Sistemik</td>
        <td class="column5">M32</td>
        <td class="column5">{{ $dataPuskesmas->darah->m32_7hari }}</td>
        <td class="column5">{{ $dataPuskesmas->darah->m32_28hari }}</td>
        <td class="column5">{{ $dataPuskesmas->darah->m32_11bulan }}</td>
        <td class="column5">{{ $dataPuskesmas->darah->m32_4tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->darah->m32_9tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->darah->m32_14tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->darah->m32_19tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->darah->m32_44tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->darah->m32_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->darah->m32_lebih_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->darah->m32_l }}</td>
        <td class="column5">{{ $dataPuskesmas->darah->m32_p }}</td>
        <td class="column5">{{ $dataPuskesmas->darah->m32_7hari + $dataPuskesmas->darah->m32_28hari + $dataPuskesmas->darah->m32_11bulan + $dataPuskesmas->darah->m32_4tahun + $dataPuskesmas->darah->m32_9tahun + $dataPuskesmas->darah->m32_14tahun + $dataPuskesmas->darah->m32_19tahun + $dataPuskesmas->darah->m32_44tahun + $dataPuskesmas->darah->m32_59tahun + $dataPuskesmas->darah->m32_lebih_59tahun + $dataPuskesmas->darah->m32_l + $dataPuskesmas->darah->m32_p  }}</td>
        <td class="column5">{{ $dataPuskesmas->darah->m32_l_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->darah->m32_p_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->darah->m32_l_lama + $dataPuskesmas->darah->m32_p_lama }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">7</td>
        <td class="column10">Thalasemia</td>
        <td class="column5">D56</td>
        <td class="column5">{{ $dataPuskesmas->darah->d56_7hari }}</td>
        <td class="column5">{{ $dataPuskesmas->darah->d56_28hari }}</td>
        <td class="column5">{{ $dataPuskesmas->darah->d56_11bulan }}</td>
        <td class="column5">{{ $dataPuskesmas->darah->d56_4tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->darah->d56_9tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->darah->d56_14tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->darah->d56_19tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->darah->d56_44tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->darah->d56_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->darah->d56_lebih_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->darah->d56_l }}</td>
        <td class="column5">{{ $dataPuskesmas->darah->d56_p }}</td>
        <td class="column5">{{ $dataPuskesmas->darah->d56_7hari + $dataPuskesmas->darah->d56_28hari + $dataPuskesmas->darah->d56_11bulan + $dataPuskesmas->darah->d56_4tahun + $dataPuskesmas->darah->d56_9tahun + $dataPuskesmas->darah->d56_14tahun + $dataPuskesmas->darah->d56_19tahun + $dataPuskesmas->darah->d56_44tahun + $dataPuskesmas->darah->d56_59tahun + $dataPuskesmas->darah->d56_lebih_59tahun + $dataPuskesmas->darah->d56_l + $dataPuskesmas->darah->d56_p  }}</td>
        <td class="column5">{{ $dataPuskesmas->darah->d56_l_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->darah->d56_p_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->darah->d56_l_lama + $dataPuskesmas->darah->d56_p_lama }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">C</td>
        <td class="column10">DIGESTIVE</td>
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
        <td class="column10">Ankilostomiosis</td>
        <td class="column5">B76.0</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->b760_7hari }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->b760_28hari }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->b760_11bulan }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->b760_4tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->b760_9tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->b760_14tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->b760_19tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->b760_44tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->b760_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->b760_lebih_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->b760_l }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->b760_p }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->b760_7hari + $dataPuskesmas->disgestive->b760_28hari + $dataPuskesmas->disgestive->b760_11bulan + $dataPuskesmas->disgestive->b760_4tahun + $dataPuskesmas->disgestive->b760_9tahun + $dataPuskesmas->disgestive->b760_14tahun + $dataPuskesmas->disgestive->b760_19tahun + $dataPuskesmas->disgestive->b760_44tahun + $dataPuskesmas->disgestive->b760_59tahun + $dataPuskesmas->disgestive->b760_lebih_59tahun + $dataPuskesmas->disgestive->b760_l + $dataPuskesmas->disgestive->b760_p  }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->b760_l_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->b760_p_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->b760_l_lama + $dataPuskesmas->disgestive->b760_p_lama }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">2</td>
        <td class="column10">Apendisitis Akut</td>
        <td class="column5">K.35.9</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->k359_7hari }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->k359_28hari }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->k359_11bulan }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->k359_4tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->k359_9tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->k359_14tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->k359_19tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->k359_44tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->k359_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->k359_lebih_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->k359_l }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->k359_p }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->k359_7hari + $dataPuskesmas->disgestive->k359_28hari + $dataPuskesmas->disgestive->k359_11bulan + $dataPuskesmas->disgestive->k359_4tahun + $dataPuskesmas->disgestive->k359_9tahun + $dataPuskesmas->disgestive->k359_14tahun + $dataPuskesmas->disgestive->k359_19tahun + $dataPuskesmas->disgestive->k359_44tahun + $dataPuskesmas->disgestive->k359_59tahun + $dataPuskesmas->disgestive->k359_lebih_59tahun + $dataPuskesmas->disgestive->k359_l + $dataPuskesmas->disgestive->k359_p  }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->k359_l_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->k359_p_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->k359_l_lama + $dataPuskesmas->disgestive->k359_p_lama }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">3</td>
        <td class="column10">Askariasis</td>
        <td class="column5">B77.9</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->b779_7hari }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->b779_28hari }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->b779_11bulan }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->b779_4tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->b779_9tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->b779_14tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->b779_19tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->b779_44tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->b779_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->b779_lebih_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->b779_l }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->b779_p }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->b779_7hari + $dataPuskesmas->disgestive->b779_28hari + $dataPuskesmas->disgestive->b779_11bulan + $dataPuskesmas->disgestive->b779_4tahun + $dataPuskesmas->disgestive->b779_9tahun + $dataPuskesmas->disgestive->b779_14tahun + $dataPuskesmas->disgestive->b779_19tahun + $dataPuskesmas->disgestive->b779_44tahun + $dataPuskesmas->disgestive->b779_59tahun + $dataPuskesmas->disgestive->b779_lebih_59tahun + $dataPuskesmas->disgestive->b779_l + $dataPuskesmas->disgestive->b779_p  }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->b779_l_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->b779_p_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->b779_l_lama + $dataPuskesmas->disgestive->b779_p_lama }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">4</td>
        <td class="column10">Atresia (ani) dengan atau tanpa fistula</td>
        <td class="column5">Q42</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->q42_7hari }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->q42_28hari }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->q42_11bulan }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->q42_4tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->q42_9tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->q42_14tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->q42_19tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->q42_44tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->q42_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->q42_lebih_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->q42_l }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->q42_p }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->q42_7hari + $dataPuskesmas->disgestive->q42_28hari + $dataPuskesmas->disgestive->q42_11bulan + $dataPuskesmas->disgestive->q42_4tahun + $dataPuskesmas->disgestive->q42_9tahun + $dataPuskesmas->disgestive->q42_14tahun + $dataPuskesmas->disgestive->q42_19tahun + $dataPuskesmas->disgestive->q42_44tahun + $dataPuskesmas->disgestive->q42_59tahun + $dataPuskesmas->disgestive->q42_lebih_59tahun + $dataPuskesmas->disgestive->q42_l + $dataPuskesmas->disgestive->q42_p  }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->q42_l_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->q42_p_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->q42_l_lama + $dataPuskesmas->disgestive->q42_p_lama }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">5</td>
        <td class="column10">Bibir dan langit-langit sumbing</td>
        <td class="column5">Q37.9</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->q379_7hari }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->q379_28hari }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->q379_11bulan }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->q379_4tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->q379_9tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->q379_14tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->q379_19tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->q379_44tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->q379_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->q379_lebih_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->q379_l }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->q379_p }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->q379_7hari + $dataPuskesmas->disgestive->q379_28hari + $dataPuskesmas->disgestive->q379_11bulan + $dataPuskesmas->disgestive->q379_4tahun + $dataPuskesmas->disgestive->q379_9tahun + $dataPuskesmas->disgestive->q379_14tahun + $dataPuskesmas->disgestive->q379_19tahun + $dataPuskesmas->disgestive->q379_44tahun + $dataPuskesmas->disgestive->q379_59tahun + $dataPuskesmas->disgestive->q379_lebih_59tahun + $dataPuskesmas->disgestive->q379_l + $dataPuskesmas->disgestive->q379_p  }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->q379_l_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->q379_p_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->q379_l_lama + $dataPuskesmas->disgestive->q379_p_lama }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">6</td>
        <td class="column10">Bibir sumbing</td>
        <td class="column5">Q36.9</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->q369_7hari }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->q369_28hari }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->q369_11bulan }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->q369_4tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->q369_9tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->q369_14tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->q369_19tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->q369_44tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->q369_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->q369_lebih_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->q369_l }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->q369_p }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->q369_7hari + $dataPuskesmas->disgestive->q369_28hari + $dataPuskesmas->disgestive->q369_11bulan + $dataPuskesmas->disgestive->q369_4tahun + $dataPuskesmas->disgestive->q369_9tahun + $dataPuskesmas->disgestive->q369_14tahun + $dataPuskesmas->disgestive->q369_19tahun + $dataPuskesmas->disgestive->q369_44tahun + $dataPuskesmas->disgestive->q369_59tahun + $dataPuskesmas->disgestive->q369_lebih_59tahun + $dataPuskesmas->disgestive->q369_l + $dataPuskesmas->disgestive->q369_p  }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->q369_l_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->q369_p_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->q369_l_lama + $dataPuskesmas->disgestive->q369_p_lama }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">7</td>
        <td class="column10">Demam tifoid</td>
        <td class="column5">A01.0</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->a010_7hari }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->a010_28hari }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->a010_11bulan }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->a010_4tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->a010_9tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->a010_14tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->a010_19tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->a010_44tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->a010_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->a010_lebih_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->a010_l }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->a010_p }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->a010_7hari + $dataPuskesmas->disgestive->a010_28hari + $dataPuskesmas->disgestive->a010_11bulan + $dataPuskesmas->disgestive->a010_4tahun + $dataPuskesmas->disgestive->a010_9tahun + $dataPuskesmas->disgestive->a010_14tahun + $dataPuskesmas->disgestive->a010_19tahun + $dataPuskesmas->disgestive->a010_44tahun + $dataPuskesmas->disgestive->a010_59tahun + $dataPuskesmas->disgestive->a010_lebih_59tahun + $dataPuskesmas->disgestive->a010_l + $dataPuskesmas->disgestive->a010_p  }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->a010_l_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->a010_p_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->a010_l_lama + $dataPuskesmas->disgestive->a010_p_lama }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">8</td>
        <td class="column10">Disentri basiler dan disentri amuba</td>
        <td class="column5">A06.0</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->a060_7hari }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->a060_28hari }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->a060_11bulan }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->a060_4tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->a060_9tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->a060_14tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->a060_19tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->a060_44tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->a060_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->a060_lebih_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->a060_l }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->a060_p }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->a060_7hari + $dataPuskesmas->disgestive->a060_28hari + $dataPuskesmas->disgestive->a060_11bulan + $dataPuskesmas->disgestive->a060_4tahun + $dataPuskesmas->disgestive->a060_9tahun + $dataPuskesmas->disgestive->a060_14tahun + $dataPuskesmas->disgestive->a060_19tahun + $dataPuskesmas->disgestive->a060_44tahun + $dataPuskesmas->disgestive->a060_59tahun + $dataPuskesmas->disgestive->a060_lebih_59tahun + $dataPuskesmas->disgestive->a060_l + $dataPuskesmas->disgestive->a060_p  }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->a060_l_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->a060_p_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->a060_l_lama + $dataPuskesmas->disgestive->a060_p_lama }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">9</td>
        <td class="column10">Gastritis</td>
        <td class="column5">K29.7</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->a297_7hari }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->a297_28hari }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->a297_11bulan }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->a297_4tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->a297_9tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->a297_14tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->a297_19tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->a297_44tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->a297_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->a297_lebih_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->a297_l }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->a297_p }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->a297_7hari + $dataPuskesmas->disgestive->a297_28hari + $dataPuskesmas->disgestive->a297_11bulan + $dataPuskesmas->disgestive->a297_4tahun + $dataPuskesmas->disgestive->a297_9tahun + $dataPuskesmas->disgestive->a297_14tahun + $dataPuskesmas->disgestive->a297_19tahun + $dataPuskesmas->disgestive->a297_44tahun + $dataPuskesmas->disgestive->a297_59tahun + $dataPuskesmas->disgestive->a297_lebih_59tahun + $dataPuskesmas->disgestive->a297_l + $dataPuskesmas->disgestive->a297_p  }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->a297_l_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->a297_p_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->a297_l_lama + $dataPuskesmas->disgestive->a297_p_lama }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">10</td>
        <td class="column10">Gastroenteritis (Kolera dan Giardiasis)</td>
        <td class="column5">A09</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->a09_7hari }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->a09_28hari }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->a09_11bulan }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->a09_4tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->a09_9tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->a09_14tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->a09_19tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->a09_44tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->a09_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->a09_lebih_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->a09_l }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->a09_p }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->a09_7hari + $dataPuskesmas->disgestive->a09_28hari + $dataPuskesmas->disgestive->a09_11bulan + $dataPuskesmas->disgestive->a09_4tahun + $dataPuskesmas->disgestive->a09_9tahun + $dataPuskesmas->disgestive->a09_14tahun + $dataPuskesmas->disgestive->a09_19tahun + $dataPuskesmas->disgestive->a09_44tahun + $dataPuskesmas->disgestive->a09_59tahun + $dataPuskesmas->disgestive->a09_lebih_59tahun + $dataPuskesmas->disgestive->a09_l + $dataPuskesmas->disgestive->a09_p  }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->a09_l_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->a09_p_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->a09_l_lama + $dataPuskesmas->disgestive->a09_p_lama }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">11</td>
        <td class="column10">Gastroschisis</td>
        <td class="column5">Q79.3</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->q793_7hari }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->q793_28hari }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->q793_11bulan }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->q793_4tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->q793_9tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->q793_14tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->q793_19tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->q793_44tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->q793_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->q793_lebih_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->q793_l }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->q793_p }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->q793_7hari + $dataPuskesmas->disgestive->q793_28hari + $dataPuskesmas->disgestive->q793_11bulan + $dataPuskesmas->disgestive->q793_4tahun + $dataPuskesmas->disgestive->q793_9tahun + $dataPuskesmas->disgestive->q793_14tahun + $dataPuskesmas->disgestive->q793_19tahun + $dataPuskesmas->disgestive->q793_44tahun + $dataPuskesmas->disgestive->q793_59tahun + $dataPuskesmas->disgestive->q793_lebih_59tahun + $dataPuskesmas->disgestive->q793_l + $dataPuskesmas->disgestive->q793_p  }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->q793_l_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->q793_p_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->q793_l_lama + $dataPuskesmas->disgestive->q793_p_lama }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">12</td>
        <td class="column10">Hemoroid grade 1-2</td>
        <td class="column5">I84 </td>
        <td class="column5">{{ $dataPuskesmas->disgestive->i84_7hari }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->i84_28hari }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->i84_11bulan }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->i84_4tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->i84_9tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->i84_14tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->i84_19tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->i84_44tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->i84_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->i84_lebih_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->i84_l }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->i84_p }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->i84_7hari + $dataPuskesmas->disgestive->i84_28hari + $dataPuskesmas->disgestive->i84_11bulan + $dataPuskesmas->disgestive->i84_4tahun + $dataPuskesmas->disgestive->i84_9tahun + $dataPuskesmas->disgestive->i84_14tahun + $dataPuskesmas->disgestive->i84_19tahun + $dataPuskesmas->disgestive->i84_44tahun + $dataPuskesmas->disgestive->i84_59tahun + $dataPuskesmas->disgestive->i84_lebih_59tahun + $dataPuskesmas->disgestive->i84_l + $dataPuskesmas->disgestive->i84_p  }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->i84_l_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->i84_p_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->i84_l_lama + $dataPuskesmas->disgestive->i84_p_lama }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">13</td>
        <td class="column10">Hepatitis A</td>
        <td class="column5">B15</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->b15_7hari }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->b15_28hari }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->b15_11bulan }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->b15_4tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->b15_9tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->b15_14tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->b15_19tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->b15_44tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->b15_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->b15_lebih_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->b15_l }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->b15_p }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->b15_7hari + $dataPuskesmas->disgestive->b15_28hari + $dataPuskesmas->disgestive->b15_11bulan + $dataPuskesmas->disgestive->b15_4tahun + $dataPuskesmas->disgestive->b15_9tahun + $dataPuskesmas->disgestive->b15_14tahun + $dataPuskesmas->disgestive->b15_19tahun + $dataPuskesmas->disgestive->b15_44tahun + $dataPuskesmas->disgestive->b15_59tahun + $dataPuskesmas->disgestive->b15_lebih_59tahun + $dataPuskesmas->disgestive->b15_l + $dataPuskesmas->disgestive->b15_p  }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->b15_l_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->b15_p_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->b15_l_lama + $dataPuskesmas->disgestive->b15_p_lama }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">14</td>
        <td class="column10">Hepatitis B</td>
        <td class="column5">B16</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->b16_7hari }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->b16_28hari }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->b16_11bulan }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->b16_4tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->b16_9tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->b16_14tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->b16_19tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->b16_44tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->b16_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->b16_lebih_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->b16_l }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->b16_p }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->b16_7hari + $dataPuskesmas->disgestive->b16_28hari + $dataPuskesmas->disgestive->b16_11bulan + $dataPuskesmas->disgestive->b16_4tahun + $dataPuskesmas->disgestive->b16_9tahun + $dataPuskesmas->disgestive->b16_14tahun + $dataPuskesmas->disgestive->b16_19tahun + $dataPuskesmas->disgestive->b16_44tahun + $dataPuskesmas->disgestive->b16_59tahun + $dataPuskesmas->disgestive->b16_lebih_59tahun + $dataPuskesmas->disgestive->b16_l + $dataPuskesmas->disgestive->b16_p  }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->b16_l_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->b16_p_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->b16_l_lama + $dataPuskesmas->disgestive->b16_p_lama }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">15</td>
        <td class="column10">Hepatitis C</td>
        <td class="column5">B18.2</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->b182_7hari }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->b182_28hari }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->b182_11bulan }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->b182_4tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->b182_9tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->b182_14tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->b182_19tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->b182_44tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->b182_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->b182_lebih_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->b182_l }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->b182_p }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->b182_7hari + $dataPuskesmas->disgestive->b182_28hari + $dataPuskesmas->disgestive->b182_11bulan + $dataPuskesmas->disgestive->b182_4tahun + $dataPuskesmas->disgestive->b182_9tahun + $dataPuskesmas->disgestive->b182_14tahun + $dataPuskesmas->disgestive->b182_19tahun + $dataPuskesmas->disgestive->b182_44tahun + $dataPuskesmas->disgestive->b182_59tahun + $dataPuskesmas->disgestive->b182_lebih_59tahun + $dataPuskesmas->disgestive->b182_l + $dataPuskesmas->disgestive->b182_p  }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->b182_l_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->b182_p_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->b182_l_lama + $dataPuskesmas->disgestive->b182_p_lama }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">16</td>
        <td class="column10">Intoleransi makanan</td>
        <td class="column5">K90.4</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->k904_7hari }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->k904_28hari }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->k904_11bulan }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->k904_4tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->k904_9tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->k904_14tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->k904_19tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->k904_44tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->k904_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->k904_lebih_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->k904_l }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->k904_p }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->k904_7hari + $dataPuskesmas->disgestive->k904_28hari + $dataPuskesmas->disgestive->k904_11bulan + $dataPuskesmas->disgestive->k904_4tahun + $dataPuskesmas->disgestive->k904_9tahun + $dataPuskesmas->disgestive->k904_14tahun + $dataPuskesmas->disgestive->k904_19tahun + $dataPuskesmas->disgestive->k904_44tahun + $dataPuskesmas->disgestive->k904_59tahun + $dataPuskesmas->disgestive->k904_lebih_59tahun + $dataPuskesmas->disgestive->k904_l + $dataPuskesmas->disgestive->k904_p  }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->k904_l_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->k904_p_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->k904_l_lama + $dataPuskesmas->disgestive->k904_p_lama }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">17</td>
        <td class="column10">Kolesistitis</td>
        <td class="column5">K81.9</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->k819_7hari }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->k819_28hari }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->k819_11bulan }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->k819_4tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->k819_9tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->k819_14tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->k819_19tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->k819_44tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->k819_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->k819_lebih_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->k819_l }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->k819_p }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->k819_7hari + $dataPuskesmas->disgestive->k819_28hari + $dataPuskesmas->disgestive->k819_11bulan + $dataPuskesmas->disgestive->k819_4tahun + $dataPuskesmas->disgestive->k819_9tahun + $dataPuskesmas->disgestive->k819_14tahun + $dataPuskesmas->disgestive->k819_19tahun + $dataPuskesmas->disgestive->k819_44tahun + $dataPuskesmas->disgestive->k819_59tahun + $dataPuskesmas->disgestive->k819_lebih_59tahun + $dataPuskesmas->disgestive->k819_l + $dataPuskesmas->disgestive->k819_p  }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->k819_l_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->k819_p_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->k819_l_lama + $dataPuskesmas->disgestive->k819_p_lama }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">18</td>
        <td class="column10">Langit-langit sumbing</td>
        <td class="column5">Q35</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->q35_7hari }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->q35_28hari }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->q35_11bulan }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->q35_4tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->q35_9tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->q35_14tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->q35_19tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->q35_44tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->q35_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->q35_lebih_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->q35_l }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->q35_p }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->q35_7hari + $dataPuskesmas->disgestive->q35_28hari + $dataPuskesmas->disgestive->q35_11bulan + $dataPuskesmas->disgestive->q35_4tahun + $dataPuskesmas->disgestive->q35_9tahun + $dataPuskesmas->disgestive->q35_14tahun + $dataPuskesmas->disgestive->q35_19tahun + $dataPuskesmas->disgestive->q35_44tahun + $dataPuskesmas->disgestive->q35_59tahun + $dataPuskesmas->disgestive->q35_lebih_59tahun + $dataPuskesmas->disgestive->q35_l + $dataPuskesmas->disgestive->q35_p  }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->q35_l_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->q35_p_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->q35_l_lama + $dataPuskesmas->disgestive->q35_p_lama }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">19</td>
        <td class="column10">Malabsorbsi makanan</td>
        <td class="column5">K90.9</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->k909_7hari }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->k909_28hari }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->k909_11bulan }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->k909_4tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->k909_9tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->k909_14tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->k909_19tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->k909_44tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->k909_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->k909_lebih_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->k909_l }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->k909_p }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->k909_7hari + $dataPuskesmas->disgestive->k909_28hari + $dataPuskesmas->disgestive->k909_11bulan + $dataPuskesmas->disgestive->k909_4tahun + $dataPuskesmas->disgestive->k909_9tahun + $dataPuskesmas->disgestive->k909_14tahun + $dataPuskesmas->disgestive->k909_19tahun + $dataPuskesmas->disgestive->k909_44tahun + $dataPuskesmas->disgestive->k909_59tahun + $dataPuskesmas->disgestive->k909_lebih_59tahun + $dataPuskesmas->disgestive->k909_l + $dataPuskesmas->disgestive->k909_p  }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->k909_l_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->k909_p_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->k909_l_lama + $dataPuskesmas->disgestive->k909_p_lama }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">20</td>
        <td class="column10">Omphalocele</td>
        <td class="column5">Q79.2</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->q792_7hari }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->q792_28hari }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->q792_11bulan }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->q792_4tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->q792_9tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->q792_14tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->q792_19tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->q792_44tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->q792_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->q792_lebih_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->q792_l }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->q792_p }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->q792_7hari + $dataPuskesmas->disgestive->q792_28hari + $dataPuskesmas->disgestive->q792_11bulan + $dataPuskesmas->disgestive->q792_4tahun + $dataPuskesmas->disgestive->q792_9tahun + $dataPuskesmas->disgestive->q792_14tahun + $dataPuskesmas->disgestive->q792_19tahun + $dataPuskesmas->disgestive->q792_44tahun + $dataPuskesmas->disgestive->q792_59tahun + $dataPuskesmas->disgestive->q792_lebih_59tahun + $dataPuskesmas->disgestive->q792_l + $dataPuskesmas->disgestive->q792_p  }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->q792_l_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->q792_p_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->q792_l_lama + $dataPuskesmas->disgestive->q792_p_lama }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">21</td>
        <td class="column10">Parotitis</td>
        <td class="column5">B26</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->b26_7hari }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->b26_28hari }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->b26_11bulan }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->b26_4tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->b26_9tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->b26_14tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->b26_19tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->b26_44tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->b26_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->b26_lebih_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->b26_l }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->b26_p }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->b26_7hari + $dataPuskesmas->disgestive->b26_28hari + $dataPuskesmas->disgestive->b26_11bulan + $dataPuskesmas->disgestive->b26_4tahun + $dataPuskesmas->disgestive->b26_9tahun + $dataPuskesmas->disgestive->b26_14tahun + $dataPuskesmas->disgestive->b26_19tahun + $dataPuskesmas->disgestive->b26_44tahun + $dataPuskesmas->disgestive->b26_59tahun + $dataPuskesmas->disgestive->b26_lebih_59tahun + $dataPuskesmas->disgestive->b26_l + $dataPuskesmas->disgestive->b26_p  }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->b26_l_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->b26_p_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->b26_l_lama + $dataPuskesmas->disgestive->b26_p_lama }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter" rowspan="2">22</td>
        <td class="column10" rowspan="2">Perdarahan gastrointestinal </td>
        <td class="column5">K92.2</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->k922_7hari }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->k922_28hari }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->k922_11bulan }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->k922_4tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->k922_9tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->k922_14tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->k922_19tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->k922_44tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->k922_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->k922_lebih_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->k922_l }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->k922_p }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->k922_7hari + $dataPuskesmas->disgestive->k922_28hari + $dataPuskesmas->disgestive->k922_11bulan + $dataPuskesmas->disgestive->k922_4tahun + $dataPuskesmas->disgestive->k922_9tahun + $dataPuskesmas->disgestive->k922_14tahun + $dataPuskesmas->disgestive->k922_19tahun + $dataPuskesmas->disgestive->k922_44tahun + $dataPuskesmas->disgestive->k922_59tahun + $dataPuskesmas->disgestive->k922_lebih_59tahun + $dataPuskesmas->disgestive->k922_l + $dataPuskesmas->disgestive->k922_p  }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->k922_l_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->k922_p_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->k922_l_lama + $dataPuskesmas->disgestive->k922_p_lama }}</td>
      </tr>
      <tr>
        <td class="column5">K62.5</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->k625_7hari }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->k625_28hari }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->k625_11bulan }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->k625_4tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->k625_9tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->k625_14tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->k625_19tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->k625_44tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->k625_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->k625_lebih_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->k625_l }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->k625_p }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->k625_7hari + $dataPuskesmas->disgestive->k625_28hari + $dataPuskesmas->disgestive->k625_11bulan + $dataPuskesmas->disgestive->k625_4tahun + $dataPuskesmas->disgestive->k625_9tahun + $dataPuskesmas->disgestive->k625_14tahun + $dataPuskesmas->disgestive->k625_19tahun + $dataPuskesmas->disgestive->k625_44tahun + $dataPuskesmas->disgestive->k625_59tahun + $dataPuskesmas->disgestive->k625_lebih_59tahun + $dataPuskesmas->disgestive->k625_l + $dataPuskesmas->disgestive->k625_p  }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->k625_l_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->k625_p_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->k625_l_lama + $dataPuskesmas->disgestive->k625_p_lama }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">23</td>
        <td class="column10">Peritonitis</td>
        <td class="column5">K65.9</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->k659_7hari }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->k659_28hari }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->k659_11bulan }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->k659_4tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->k659_9tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->k659_14tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->k659_19tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->k659_44tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->k659_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->k659_lebih_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->k659_l }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->k659_p }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->k659_7hari + $dataPuskesmas->disgestive->k659_28hari + $dataPuskesmas->disgestive->k659_11bulan + $dataPuskesmas->disgestive->k659_4tahun + $dataPuskesmas->disgestive->k659_9tahun + $dataPuskesmas->disgestive->k659_14tahun + $dataPuskesmas->disgestive->k659_19tahun + $dataPuskesmas->disgestive->k659_44tahun + $dataPuskesmas->disgestive->k659_59tahun + $dataPuskesmas->disgestive->k659_lebih_59tahun + $dataPuskesmas->disgestive->k659_l + $dataPuskesmas->disgestive->k659_p  }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->k659_l_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->k659_p_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->k659_l_lama + $dataPuskesmas->disgestive->k659_p_lama }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">24</td>
        <td class="column10">Refluks gastroesofageal</td>
        <td class="column5">K21.9</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->k219_7hari }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->k219_28hari }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->k219_11bulan }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->k219_4tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->k219_9tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->k219_14tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->k219_19tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->k219_44tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->k219_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->k219_lebih_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->k219_l }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->k219_p }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->k219_7hari + $dataPuskesmas->disgestive->k219_28hari + $dataPuskesmas->disgestive->k219_11bulan + $dataPuskesmas->disgestive->k219_4tahun + $dataPuskesmas->disgestive->k219_9tahun + $dataPuskesmas->disgestive->k219_14tahun + $dataPuskesmas->disgestive->k219_19tahun + $dataPuskesmas->disgestive->k219_44tahun + $dataPuskesmas->disgestive->k219_59tahun + $dataPuskesmas->disgestive->k219_lebih_59tahun + $dataPuskesmas->disgestive->k219_l + $dataPuskesmas->disgestive->k219_p  }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->k219_l_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->k219_p_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->k219_l_lama + $dataPuskesmas->disgestive->k219_p_lama }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter" rowspan="2">25</td>
        <td class="column10" rowspan="2">Skistosomiasis</td>
        <td class="column5">B65.9</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->b659_7hari }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->b659_28hari }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->b659_11bulan }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->b659_4tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->b659_9tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->b659_14tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->b659_19tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->b659_44tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->b659_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->b659_lebih_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->b659_l }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->b659_p }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->b659_7hari + $dataPuskesmas->disgestive->b659_28hari + $dataPuskesmas->disgestive->b659_11bulan + $dataPuskesmas->disgestive->b659_4tahun + $dataPuskesmas->disgestive->b659_9tahun + $dataPuskesmas->disgestive->b659_14tahun + $dataPuskesmas->disgestive->b659_19tahun + $dataPuskesmas->disgestive->b659_44tahun + $dataPuskesmas->disgestive->b659_59tahun + $dataPuskesmas->disgestive->b659_lebih_59tahun + $dataPuskesmas->disgestive->b659_l + $dataPuskesmas->disgestive->b659_p  }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->b659_l_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->b659_p_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->b659_l_lama + $dataPuskesmas->disgestive->b659_p_lama }}</td>
      </tr>
      <tr>
        <td class="column5">B65.2</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->b652_7hari }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->b652_28hari }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->b652_11bulan }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->b652_4tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->b652_9tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->b652_14tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->b652_19tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->b652_44tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->b652_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->b652_lebih_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->b652_l }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->b652_p }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->b652_7hari + $dataPuskesmas->disgestive->b652_28hari + $dataPuskesmas->disgestive->b652_11bulan + $dataPuskesmas->disgestive->b652_4tahun + $dataPuskesmas->disgestive->b652_9tahun + $dataPuskesmas->disgestive->b652_14tahun + $dataPuskesmas->disgestive->b652_19tahun + $dataPuskesmas->disgestive->b652_44tahun + $dataPuskesmas->disgestive->b652_59tahun + $dataPuskesmas->disgestive->b652_lebih_59tahun + $dataPuskesmas->disgestive->b652_l + $dataPuskesmas->disgestive->b652_p  }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->b652_l_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->b652_p_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->b652_l_lama + $dataPuskesmas->disgestive->b652_p_lama }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">26</td>
        <td class="column10">Strongiloidiasis</td>
        <td class="column5">B78.9</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->b789_7hari }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->b789_28hari }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->b789_11bulan }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->b789_4tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->b789_9tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->b789_14tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->b789_19tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->b789_44tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->b789_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->b789_lebih_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->b789_l }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->b789_p }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->b789_7hari + $dataPuskesmas->disgestive->b789_28hari + $dataPuskesmas->disgestive->b789_11bulan + $dataPuskesmas->disgestive->b789_4tahun + $dataPuskesmas->disgestive->b789_9tahun + $dataPuskesmas->disgestive->b789_14tahun + $dataPuskesmas->disgestive->b789_19tahun + $dataPuskesmas->disgestive->b789_44tahun + $dataPuskesmas->disgestive->b789_59tahun + $dataPuskesmas->disgestive->b789_lebih_59tahun + $dataPuskesmas->disgestive->b789_l + $dataPuskesmas->disgestive->b789_p  }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->b789_l_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->b789_p_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->b789_l_lama + $dataPuskesmas->disgestive->b789_p_lama }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">27</td>
        <td class="column10">Taeniasis</td>
        <td class="column5">B68.9</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->b689_7hari }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->b689_28hari }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->b689_11bulan }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->b689_4tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->b689_9tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->b689_14tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->b689_19tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->b689_44tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->b689_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->b689_lebih_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->b689_l }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->b689_p }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->b689_7hari + $dataPuskesmas->disgestive->b689_28hari + $dataPuskesmas->disgestive->b689_11bulan + $dataPuskesmas->disgestive->b689_4tahun + $dataPuskesmas->disgestive->b689_9tahun + $dataPuskesmas->disgestive->b689_14tahun + $dataPuskesmas->disgestive->b689_19tahun + $dataPuskesmas->disgestive->b689_44tahun + $dataPuskesmas->disgestive->b689_59tahun + $dataPuskesmas->disgestive->b689_lebih_59tahun + $dataPuskesmas->disgestive->b689_l + $dataPuskesmas->disgestive->b689_p  }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->b689_l_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->b689_p_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->b689_l_lama + $dataPuskesmas->disgestive->b689_p_lama }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">28</td>
        <td class="column10">Ulkus mulut</td>
        <td class="column5">K12</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->k12_7hari }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->k12_28hari }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->k12_11bulan }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->k12_4tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->k12_9tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->k12_14tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->k12_19tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->k12_44tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->k12_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->k12_lebih_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->k12_l }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->k12_p }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->k12_7hari + $dataPuskesmas->disgestive->k12_28hari + $dataPuskesmas->disgestive->k12_11bulan + $dataPuskesmas->disgestive->k12_4tahun + $dataPuskesmas->disgestive->k12_9tahun + $dataPuskesmas->disgestive->k12_14tahun + $dataPuskesmas->disgestive->k12_19tahun + $dataPuskesmas->disgestive->k12_44tahun + $dataPuskesmas->disgestive->k12_59tahun + $dataPuskesmas->disgestive->k12_lebih_59tahun + $dataPuskesmas->disgestive->k12_l + $dataPuskesmas->disgestive->k12_p  }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->k12_l_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->k12_p_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->disgestive->k12_l_lama + $dataPuskesmas->disgestive->k12_p_lama }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">D</td>
        <td class="column10">MATA</td>
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
        <td class="column10">Astigmatisme</td>
        <td class="column5">H52.2</td>
        <td class="column5">{{ $dataPuskesmas->mata->h522_7hari }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->h522_28hari }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->h522_11bulan }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->h522_4tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->h522_9tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->h522_14tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->h522_19tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->h522_44tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->h522_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->h522_lebih_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->h522_l }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->h522_p }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->h522_7hari + $dataPuskesmas->mata->h522_28hari + $dataPuskesmas->mata->h522_11bulan + $dataPuskesmas->mata->h522_4tahun + $dataPuskesmas->mata->h522_9tahun + $dataPuskesmas->mata->h522_14tahun + $dataPuskesmas->mata->h522_19tahun + $dataPuskesmas->mata->h522_44tahun + $dataPuskesmas->mata->h522_59tahun + $dataPuskesmas->mata->h522_lebih_59tahun + $dataPuskesmas->mata->h522_l + $dataPuskesmas->mata->h522_p  }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->h522_l_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->h522_p_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->h522_l_lama + $dataPuskesmas->mata->h522_p_lama }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">2</td>
        <td class="column10">Benda asing di konjungtiva</td>
        <td class="column5">T15.9</td>
        <td class="column5">{{ $dataPuskesmas->mata->t159_7hari }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->t159_28hari }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->t159_11bulan }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->t159_4tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->t159_9tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->t159_14tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->t159_19tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->t159_44tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->t159_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->t159_lebih_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->t159_l }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->t159_p }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->t159_7hari + $dataPuskesmas->mata->t159_28hari + $dataPuskesmas->mata->t159_11bulan + $dataPuskesmas->mata->t159_4tahun + $dataPuskesmas->mata->t159_9tahun + $dataPuskesmas->mata->t159_14tahun + $dataPuskesmas->mata->t159_19tahun + $dataPuskesmas->mata->t159_44tahun + $dataPuskesmas->mata->t159_59tahun + $dataPuskesmas->mata->t159_lebih_59tahun + $dataPuskesmas->mata->t159_l + $dataPuskesmas->mata->t159_p  }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->t159_l_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->t159_p_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->t159_l_lama + $dataPuskesmas->mata->t159_p_lama }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">3</td>
        <td class="column10">Blefaritis</td>
        <td class="column5">H01.0</td>
        <td class="column5">{{ $dataPuskesmas->mata->h010_7hari }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->h010_28hari }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->h010_11bulan }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->h010_4tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->h010_9tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->h010_14tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->h010_19tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->h010_44tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->h010_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->h010_lebih_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->h010_l }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->h010_p }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->h010_7hari + $dataPuskesmas->mata->h010_28hari + $dataPuskesmas->mata->h010_11bulan + $dataPuskesmas->mata->h010_4tahun + $dataPuskesmas->mata->h010_9tahun + $dataPuskesmas->mata->h010_14tahun + $dataPuskesmas->mata->h010_19tahun + $dataPuskesmas->mata->h010_44tahun + $dataPuskesmas->mata->h010_59tahun + $dataPuskesmas->mata->h010_lebih_59tahun + $dataPuskesmas->mata->h010_l + $dataPuskesmas->mata->h010_p  }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->h010_l_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->h010_p_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->h010_l_lama + $dataPuskesmas->mata->h010_p_lama }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">4</td>
        <td class="column10">Buta senja</td>
        <td class="column5">H53.6</td>
        <td class="column5">{{ $dataPuskesmas->mata->h536_7hari }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->h536_28hari }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->h536_11bulan }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->h536_4tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->h536_9tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->h536_14tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->h536_19tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->h536_44tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->h536_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->h536_lebih_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->h536_l }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->h536_p }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->h536_7hari + $dataPuskesmas->mata->h536_28hari + $dataPuskesmas->mata->h536_11bulan + $dataPuskesmas->mata->h536_4tahun + $dataPuskesmas->mata->h536_9tahun + $dataPuskesmas->mata->h536_14tahun + $dataPuskesmas->mata->h536_19tahun + $dataPuskesmas->mata->h536_44tahun + $dataPuskesmas->mata->h536_59tahun + $dataPuskesmas->mata->h536_lebih_59tahun + $dataPuskesmas->mata->h536_l + $dataPuskesmas->mata->h536_p  }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->h536_l_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->h536_p_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->h536_l_lama + $dataPuskesmas->mata->h536_p_lama }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">5</td>
        <td class="column10">Episkleritis</td>
        <td class="column5">H15.1</td>
        <td class="column5">{{ $dataPuskesmas->mata->h151_7hari }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->h151_28hari }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->h151_11bulan }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->h151_4tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->h151_9tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->h151_14tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->h151_19tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->h151_44tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->h151_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->h151_lebih_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->h151_l }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->h151_p }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->h151_7hari + $dataPuskesmas->mata->h151_28hari + $dataPuskesmas->mata->h151_11bulan + $dataPuskesmas->mata->h151_4tahun + $dataPuskesmas->mata->h151_9tahun + $dataPuskesmas->mata->h151_14tahun + $dataPuskesmas->mata->h151_19tahun + $dataPuskesmas->mata->h151_44tahun + $dataPuskesmas->mata->h151_59tahun + $dataPuskesmas->mata->h151_lebih_59tahun + $dataPuskesmas->mata->h151_l + $dataPuskesmas->mata->h151_p  }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->h151_l_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->h151_p_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->h151_l_lama + $dataPuskesmas->mata->h151_p_lama }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">6</td>
        <td class="column10">Glaukoma akut</td>
        <td class="column5">H40.2</td>
        <td class="column5">{{ $dataPuskesmas->mata->h402_7hari }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->h402_28hari }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->h402_11bulan }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->h402_4tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->h402_9tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->h402_14tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->h402_19tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->h402_44tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->h402_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->h402_lebih_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->h402_l }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->h402_p }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->h402_7hari + $dataPuskesmas->mata->h402_28hari + $dataPuskesmas->mata->h402_11bulan + $dataPuskesmas->mata->h402_4tahun + $dataPuskesmas->mata->h402_9tahun + $dataPuskesmas->mata->h402_14tahun + $dataPuskesmas->mata->h402_19tahun + $dataPuskesmas->mata->h402_44tahun + $dataPuskesmas->mata->h402_59tahun + $dataPuskesmas->mata->h402_lebih_59tahun + $dataPuskesmas->mata->h402_l + $dataPuskesmas->mata->h402_p  }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->h402_l_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->h402_p_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->h402_l_lama + $dataPuskesmas->mata->h402_p_lama }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">7</td>
        <td class="column10">Glaukoma kronis</td>
        <td class="column5">H40.2</td>
        <td class="column5">{{ $dataPuskesmas->mata->h402_2_7hari }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->h402_2_28hari }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->h402_2_11bulan }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->h402_2_4tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->h402_2_9tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->h402_2_14tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->h402_2_19tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->h402_2_44tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->h402_2_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->h402_2_lebih_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->h402_2_l }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->h402_2_p }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->h402_2_7hari + $dataPuskesmas->mata->h402_2_28hari + $dataPuskesmas->mata->h402_2_11bulan + $dataPuskesmas->mata->h402_2_4tahun + $dataPuskesmas->mata->h402_2_9tahun + $dataPuskesmas->mata->h402_2_14tahun + $dataPuskesmas->mata->h402_2_19tahun + $dataPuskesmas->mata->h402_2_44tahun + $dataPuskesmas->mata->h402_2_59tahun + $dataPuskesmas->mata->h402_2_lebih_59tahun + $dataPuskesmas->mata->h402_2_l + $dataPuskesmas->mata->h402_2_p  }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->h402_2_l_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->h402_2_p_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->h402_2_l_lama + $dataPuskesmas->mata->h402_2_p_lama }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">8</td>
        <td class="column10">Hifema</td>
        <td class="column5">H21.0</td>
        <td class="column5">{{ $dataPuskesmas->mata->h210_7hari }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->h210_28hari }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->h210_11bulan }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->h210_4tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->h210_9tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->h210_14tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->h210_19tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->h210_44tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->h210_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->h210_lebih_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->h210_l }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->h210_p }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->h210_7hari + $dataPuskesmas->mata->h210_28hari + $dataPuskesmas->mata->h210_11bulan + $dataPuskesmas->mata->h210_4tahun + $dataPuskesmas->mata->h210_9tahun + $dataPuskesmas->mata->h210_14tahun + $dataPuskesmas->mata->h210_19tahun + $dataPuskesmas->mata->h210_44tahun + $dataPuskesmas->mata->h210_59tahun + $dataPuskesmas->mata->h210_lebih_59tahun + $dataPuskesmas->mata->h210_l + $dataPuskesmas->mata->h210_p  }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->h210_l_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->h210_p_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->h210_l_lama + $dataPuskesmas->mata->h210_p_lama }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">9</td>
        <td class="column10">Hipermetropia</td>
        <td class="column5">H52.0</td>
        <td class="column5">{{ $dataPuskesmas->mata->h520_7hari }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->h520_28hari }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->h520_11bulan }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->h520_4tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->h520_9tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->h520_14tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->h520_19tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->h520_44tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->h520_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->h520_lebih_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->h520_l }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->h520_p }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->h520_7hari + $dataPuskesmas->mata->h520_28hari + $dataPuskesmas->mata->h520_11bulan + $dataPuskesmas->mata->h520_4tahun + $dataPuskesmas->mata->h520_9tahun + $dataPuskesmas->mata->h520_14tahun + $dataPuskesmas->mata->h520_19tahun + $dataPuskesmas->mata->h520_44tahun + $dataPuskesmas->mata->h520_59tahun + $dataPuskesmas->mata->h520_lebih_59tahun + $dataPuskesmas->mata->h520_l + $dataPuskesmas->mata->h520_p  }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->h520_l_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->h520_p_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->h520_l_lama + $dataPuskesmas->mata->h520_p_lama }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">10</td>
        <td class="column10">Hordeolum</td>
        <td class="column5">H00.0</td>
        <td class="column5">{{ $dataPuskesmas->mata->h000_7hari }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->h000_28hari }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->h000_11bulan }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->h000_4tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->h000_9tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->h000_14tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->h000_19tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->h000_44tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->h000_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->h000_lebih_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->h000_l }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->h000_p }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->h000_7hari + $dataPuskesmas->mata->h000_28hari + $dataPuskesmas->mata->h000_11bulan + $dataPuskesmas->mata->h000_4tahun + $dataPuskesmas->mata->h000_9tahun + $dataPuskesmas->mata->h000_14tahun + $dataPuskesmas->mata->h000_19tahun + $dataPuskesmas->mata->h000_44tahun + $dataPuskesmas->mata->h000_59tahun + $dataPuskesmas->mata->h000_lebih_59tahun + $dataPuskesmas->mata->h000_l + $dataPuskesmas->mata->h000_p  }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->h000_l_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->h000_p_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->h000_l_lama + $dataPuskesmas->mata->h000_p_lama }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">11</td>
        <td class="column10">Katarak kongenital</td>
        <td class="column5">Q12.0</td>
        <td class="column5">{{ $dataPuskesmas->mata->q120_7hari }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->q120_28hari }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->q120_11bulan }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->q120_4tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->q120_9tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->q120_14tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->q120_19tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->q120_44tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->q120_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->q120_lebih_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->q120_l }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->q120_p }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->q120_7hari + $dataPuskesmas->mata->q120_28hari + $dataPuskesmas->mata->q120_11bulan + $dataPuskesmas->mata->q120_4tahun + $dataPuskesmas->mata->q120_9tahun + $dataPuskesmas->mata->q120_14tahun + $dataPuskesmas->mata->q120_19tahun + $dataPuskesmas->mata->q120_44tahun + $dataPuskesmas->mata->q120_59tahun + $dataPuskesmas->mata->q120_lebih_59tahun + $dataPuskesmas->mata->q120_l + $dataPuskesmas->mata->q120_p  }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->q120_l_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->q120_p_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->q120_l_lama + $dataPuskesmas->mata->q120_p_lama }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">12</td>
        <td class="column10">Katarak pada pasien dewasa</td>
        <td class="column5">H26.9</td>
        <td class="column5">{{ $dataPuskesmas->mata->h269_7hari }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->h269_28hari }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->h269_11bulan }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->h269_4tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->h269_9tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->h269_14tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->h269_19tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->h269_44tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->h269_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->h269_lebih_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->h269_l }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->h269_p }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->h269_7hari + $dataPuskesmas->mata->h269_28hari + $dataPuskesmas->mata->h269_11bulan + $dataPuskesmas->mata->h269_4tahun + $dataPuskesmas->mata->h269_9tahun + $dataPuskesmas->mata->h269_14tahun + $dataPuskesmas->mata->h269_19tahun + $dataPuskesmas->mata->h269_44tahun + $dataPuskesmas->mata->h269_59tahun + $dataPuskesmas->mata->h269_lebih_59tahun + $dataPuskesmas->mata->h269_l + $dataPuskesmas->mata->h269_p  }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->h269_l_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->h269_p_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->h269_l_lama + $dataPuskesmas->mata->h269_p_lama }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">13</td>
        <td class="column10">Konjungtivitis</td>
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
        <td class="column5 textCenter"></td>
        <td class="column10">a. Konjungtivitis alergi</td>
        <td class="column5">H10.1</td>
        <td class="column5">{{ $dataPuskesmas->mata->h101_7hari }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->h101_28hari }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->h101_11bulan }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->h101_4tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->h101_9tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->h101_14tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->h101_19tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->h101_44tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->h101_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->h101_lebih_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->h101_l }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->h101_p }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->h101_7hari + $dataPuskesmas->mata->h101_28hari + $dataPuskesmas->mata->h101_11bulan + $dataPuskesmas->mata->h101_4tahun + $dataPuskesmas->mata->h101_9tahun + $dataPuskesmas->mata->h101_14tahun + $dataPuskesmas->mata->h101_19tahun + $dataPuskesmas->mata->h101_44tahun + $dataPuskesmas->mata->h101_59tahun + $dataPuskesmas->mata->h101_lebih_59tahun + $dataPuskesmas->mata->h101_l + $dataPuskesmas->mata->h101_p  }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->h101_l_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->h101_p_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->h101_l_lama + $dataPuskesmas->mata->h101_p_lama }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter"></td>
        <td class="column10">b. Konjungtivitis infeksi</td>
        <td class="column5">H10.9</td>
        <td class="column5">{{ $dataPuskesmas->mata->h109_7hari }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->h109_28hari }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->h109_11bulan }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->h109_4tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->h109_9tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->h109_14tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->h109_19tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->h109_44tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->h109_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->h109_lebih_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->h109_l }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->h109_p }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->h109_7hari + $dataPuskesmas->mata->h109_28hari + $dataPuskesmas->mata->h109_11bulan + $dataPuskesmas->mata->h109_4tahun + $dataPuskesmas->mata->h109_9tahun + $dataPuskesmas->mata->h109_14tahun + $dataPuskesmas->mata->h109_19tahun + $dataPuskesmas->mata->h109_44tahun + $dataPuskesmas->mata->h109_59tahun + $dataPuskesmas->mata->h109_lebih_59tahun + $dataPuskesmas->mata->h109_l + $dataPuskesmas->mata->h109_p  }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->h109_l_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->h109_p_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->h109_l_lama + $dataPuskesmas->mata->h109_p_lama }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">14</td>
        <td class="column10">Laserasi kelopak mata</td>
        <td class="column5">S01.1</td>
        <td class="column5">{{ $dataPuskesmas->mata->s011_7hari }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->s011_28hari }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->s011_11bulan }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->s011_4tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->s011_9tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->s011_14tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->s011_19tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->s011_44tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->s011_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->s011_lebih_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->s011_l }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->s011_p }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->s011_7hari + $dataPuskesmas->mata->s011_28hari + $dataPuskesmas->mata->s011_11bulan + $dataPuskesmas->mata->s011_4tahun + $dataPuskesmas->mata->s011_9tahun + $dataPuskesmas->mata->s011_14tahun + $dataPuskesmas->mata->s011_19tahun + $dataPuskesmas->mata->s011_44tahun + $dataPuskesmas->mata->s011_59tahun + $dataPuskesmas->mata->s011_lebih_59tahun + $dataPuskesmas->mata->s011_l + $dataPuskesmas->mata->s011_p  }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->s011_l_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->s011_p_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->s011_l_lama + $dataPuskesmas->mata->s011_p_lama }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">15</td>
        <td class="column10">Low vision</td>
        <td class="column5">H.54</td>
        <td class="column5">{{ $dataPuskesmas->mata->h54_7hari }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->h54_28hari }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->h54_11bulan }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->h54_4tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->h54_9tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->h54_14tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->h54_19tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->h54_44tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->h54_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->h54_lebih_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->h54_l }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->h54_p }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->h54_7hari + $dataPuskesmas->mata->h54_28hari + $dataPuskesmas->mata->h54_11bulan + $dataPuskesmas->mata->h54_4tahun + $dataPuskesmas->mata->h54_9tahun + $dataPuskesmas->mata->h54_14tahun + $dataPuskesmas->mata->h54_19tahun + $dataPuskesmas->mata->h54_44tahun + $dataPuskesmas->mata->h54_59tahun + $dataPuskesmas->mata->h54_lebih_59tahun + $dataPuskesmas->mata->h54_l + $dataPuskesmas->mata->h54_p  }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->h54_l_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->h54_p_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->h54_l_lama + $dataPuskesmas->mata->h54_p_lama }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">16</td>
        <td class="column10">Mata kering</td>
        <td class="column5">H04.1</td>
        <td class="column5">{{ $dataPuskesmas->mata->h041_7hari }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->h041_28hari }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->h041_11bulan }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->h041_4tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->h041_9tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->h041_14tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->h041_19tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->h041_44tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->h041_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->h041_lebih_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->h041_l }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->h041_p }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->h041_7hari + $dataPuskesmas->mata->h041_28hari + $dataPuskesmas->mata->h041_11bulan + $dataPuskesmas->mata->h041_4tahun + $dataPuskesmas->mata->h041_9tahun + $dataPuskesmas->mata->h041_14tahun + $dataPuskesmas->mata->h041_19tahun + $dataPuskesmas->mata->h041_44tahun + $dataPuskesmas->mata->h041_59tahun + $dataPuskesmas->mata->h041_lebih_59tahun + $dataPuskesmas->mata->h041_l + $dataPuskesmas->mata->h041_p  }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->h041_l_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->h041_p_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->h041_l_lama + $dataPuskesmas->mata->h041_p_lama }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">17</td>
        <td class="column10">Miopia ringan</td>
        <td class="column5">H52.1</td>
        <td class="column5">{{ $dataPuskesmas->mata->h521_7hari }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->h521_28hari }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->h521_11bulan }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->h521_4tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->h521_9tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->h521_14tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->h521_19tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->h521_44tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->h521_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->h521_lebih_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->h521_l }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->h521_p }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->h521_7hari + $dataPuskesmas->mata->h521_28hari + $dataPuskesmas->mata->h521_11bulan + $dataPuskesmas->mata->h521_4tahun + $dataPuskesmas->mata->h521_9tahun + $dataPuskesmas->mata->h521_14tahun + $dataPuskesmas->mata->h521_19tahun + $dataPuskesmas->mata->h521_44tahun + $dataPuskesmas->mata->h521_59tahun + $dataPuskesmas->mata->h521_lebih_59tahun + $dataPuskesmas->mata->h521_l + $dataPuskesmas->mata->h521_p  }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->h521_l_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->h521_p_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->h521_l_lama + $dataPuskesmas->mata->h521_p_lama }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">18</td>
        <td class="column10">Perdarahan subkonjungtiva</td>
        <td class="column5">H57.8</td>
        <td class="column5">{{ $dataPuskesmas->mata->h578_7hari }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->h578_28hari }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->h578_11bulan }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->h578_4tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->h578_9tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->h578_14tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->h578_19tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->h578_44tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->h578_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->h578_lebih_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->h578_l }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->h578_p }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->h578_7hari + $dataPuskesmas->mata->h578_28hari + $dataPuskesmas->mata->h578_11bulan + $dataPuskesmas->mata->h578_4tahun + $dataPuskesmas->mata->h578_9tahun + $dataPuskesmas->mata->h578_14tahun + $dataPuskesmas->mata->h578_19tahun + $dataPuskesmas->mata->h578_44tahun + $dataPuskesmas->mata->h578_59tahun + $dataPuskesmas->mata->h578_lebih_59tahun + $dataPuskesmas->mata->h578_l + $dataPuskesmas->mata->h578_p  }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->h578_l_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->h578_p_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->h578_l_lama + $dataPuskesmas->mata->h578_p_lama }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">19</td>
        <td class="column10">Presbiopia</td>
        <td class="column5">H52.4</td>
        <td class="column5">{{ $dataPuskesmas->mata->h524_7hari }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->h524_28hari }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->h524_11bulan }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->h524_4tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->h524_9tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->h524_14tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->h524_19tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->h524_44tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->h524_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->h524_lebih_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->h524_l }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->h524_p }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->h524_7hari + $dataPuskesmas->mata->h524_28hari + $dataPuskesmas->mata->h524_11bulan + $dataPuskesmas->mata->h524_4tahun + $dataPuskesmas->mata->h524_9tahun + $dataPuskesmas->mata->h524_14tahun + $dataPuskesmas->mata->h524_19tahun + $dataPuskesmas->mata->h524_44tahun + $dataPuskesmas->mata->h524_59tahun + $dataPuskesmas->mata->h524_lebih_59tahun + $dataPuskesmas->mata->h524_l + $dataPuskesmas->mata->h524_p  }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->h524_l_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->h524_p_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->h524_l_lama + $dataPuskesmas->mata->h524_p_lama }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">20</td>
        <td class="column10">Pterygium</td>
        <td class="column5">H11.0</td>
        <td class="column5">{{ $dataPuskesmas->mata->h110_7hari }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->h110_28hari }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->h110_11bulan }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->h110_4tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->h110_9tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->h110_14tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->h110_19tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->h110_44tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->h110_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->h110_lebih_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->h110_l }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->h110_p }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->h110_7hari + $dataPuskesmas->mata->h110_28hari + $dataPuskesmas->mata->h110_11bulan + $dataPuskesmas->mata->h110_4tahun + $dataPuskesmas->mata->h110_9tahun + $dataPuskesmas->mata->h110_14tahun + $dataPuskesmas->mata->h110_19tahun + $dataPuskesmas->mata->h110_44tahun + $dataPuskesmas->mata->h110_59tahun + $dataPuskesmas->mata->h110_lebih_59tahun + $dataPuskesmas->mata->h110_l + $dataPuskesmas->mata->h110_p  }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->h110_l_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->h110_p_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->h110_l_lama + $dataPuskesmas->mata->h110_p_lama }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">21</td>
        <td class="column10">Retinoblastoma</td>
        <td class="column5">C69.21</td>
        <td class="column5">{{ $dataPuskesmas->mata->c6921_7hari }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->c6921_28hari }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->c6921_11bulan }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->c6921_4tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->c6921_9tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->c6921_14tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->c6921_19tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->c6921_44tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->c6921_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->c6921_lebih_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->c6921_l }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->c6921_p }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->c6921_7hari + $dataPuskesmas->mata->c6921_28hari + $dataPuskesmas->mata->c6921_11bulan + $dataPuskesmas->mata->c6921_4tahun + $dataPuskesmas->mata->c6921_9tahun + $dataPuskesmas->mata->c6921_14tahun + $dataPuskesmas->mata->c6921_19tahun + $dataPuskesmas->mata->c6921_44tahun + $dataPuskesmas->mata->c6921_59tahun + $dataPuskesmas->mata->c6921_lebih_59tahun + $dataPuskesmas->mata->c6921_l + $dataPuskesmas->mata->c6921_p  }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->c6921_l_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->c6921_p_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->c6921_l_lama + $dataPuskesmas->mata->c6921_p_lama }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">22</td>
        <td class="column10">Retinopati diabetik</td>
        <td class="column5">H36.0</td>
        <td class="column5">{{ $dataPuskesmas->mata->h360_7hari }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->h360_28hari }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->h360_11bulan }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->h360_4tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->h360_9tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->h360_14tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->h360_19tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->h360_44tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->h360_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->h360_lebih_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->h360_l }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->h360_p }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->h360_7hari + $dataPuskesmas->mata->h360_28hari + $dataPuskesmas->mata->h360_11bulan + $dataPuskesmas->mata->h360_4tahun + $dataPuskesmas->mata->h360_9tahun + $dataPuskesmas->mata->h360_14tahun + $dataPuskesmas->mata->h360_19tahun + $dataPuskesmas->mata->h360_44tahun + $dataPuskesmas->mata->h360_59tahun + $dataPuskesmas->mata->h360_lebih_59tahun + $dataPuskesmas->mata->h360_l + $dataPuskesmas->mata->h360_p  }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->h360_l_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->h360_p_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->h360_l_lama + $dataPuskesmas->mata->h360_p_lama }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">23</td>
        <td class="column10">Trauma kimia mata</td>
        <td class="column5">T26</td>
        <td class="column5">{{ $dataPuskesmas->mata->t26_7hari }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->t26_28hari }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->t26_11bulan }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->t26_4tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->t26_9tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->t26_14tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->t26_19tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->t26_44tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->t26_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->t26_lebih_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->t26_l }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->t26_p }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->t26_7hari + $dataPuskesmas->mata->t26_28hari + $dataPuskesmas->mata->t26_11bulan + $dataPuskesmas->mata->t26_4tahun + $dataPuskesmas->mata->t26_9tahun + $dataPuskesmas->mata->t26_14tahun + $dataPuskesmas->mata->t26_19tahun + $dataPuskesmas->mata->t26_44tahun + $dataPuskesmas->mata->t26_59tahun + $dataPuskesmas->mata->t26_lebih_59tahun + $dataPuskesmas->mata->t26_l + $dataPuskesmas->mata->t26_p  }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->t26_l_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->t26_p_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->t26_l_lama + $dataPuskesmas->mata->t26_p_lama }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">24</td>
        <td class="column10">Trikiasis</td>
        <td class="column5">H02</td>
        <td class="column5">{{ $dataPuskesmas->mata->h02_7hari }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->h02_28hari }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->h02_11bulan }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->h02_4tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->h02_9tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->h02_14tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->h02_19tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->h02_44tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->h02_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->h02_lebih_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->h02_l }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->h02_p }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->h02_7hari + $dataPuskesmas->mata->h02_28hari + $dataPuskesmas->mata->h02_11bulan + $dataPuskesmas->mata->h02_4tahun + $dataPuskesmas->mata->h02_9tahun + $dataPuskesmas->mata->h02_14tahun + $dataPuskesmas->mata->h02_19tahun + $dataPuskesmas->mata->h02_44tahun + $dataPuskesmas->mata->h02_59tahun + $dataPuskesmas->mata->h02_lebih_59tahun + $dataPuskesmas->mata->h02_l + $dataPuskesmas->mata->h02_p  }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->h02_l_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->h02_p_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->mata->h02_l_lama + $dataPuskesmas->mata->h02_p_lama }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">E</td>
        <td class="column10">TELINGA</td>
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
        <td class="column10">Benda asing ditelinga</td>
        <td class="column5">T16</td>
        <td class="column5">{{ $dataPuskesmas->telinga->t16_7hari }}</td>
        <td class="column5">{{ $dataPuskesmas->telinga->t16_28hari }}</td>
        <td class="column5">{{ $dataPuskesmas->telinga->t16_11bulan }}</td>
        <td class="column5">{{ $dataPuskesmas->telinga->t16_4tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->telinga->t16_9tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->telinga->t16_14tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->telinga->t16_19tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->telinga->t16_44tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->telinga->t16_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->telinga->t16_lebih_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->telinga->t16_l }}</td>
        <td class="column5">{{ $dataPuskesmas->telinga->t16_p }}</td>
        <td class="column5">{{ $dataPuskesmas->telinga->t16_7hari + $dataPuskesmas->telinga->t16_28hari + $dataPuskesmas->telinga->t16_11bulan + $dataPuskesmas->telinga->t16_4tahun + $dataPuskesmas->telinga->t16_9tahun + $dataPuskesmas->telinga->t16_14tahun + $dataPuskesmas->telinga->t16_19tahun + $dataPuskesmas->telinga->t16_44tahun + $dataPuskesmas->telinga->t16_59tahun + $dataPuskesmas->telinga->t16_lebih_59tahun + $dataPuskesmas->telinga->t16_l + $dataPuskesmas->telinga->t16_p  }}</td>
        <td class="column5">{{ $dataPuskesmas->telinga->t16_l_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->telinga->t16_p_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->telinga->t16_l_lama + $dataPuskesmas->telinga->t16_p_lama }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter"><2/td>
        <td class="column10">Mastoiditis</td>
        <td class="column5">H70</td>
        <td class="column5">{{ $dataPuskesmas->telinga->h70_7hari }}</td>
        <td class="column5">{{ $dataPuskesmas->telinga->h70_28hari }}</td>
        <td class="column5">{{ $dataPuskesmas->telinga->h70_11bulan }}</td>
        <td class="column5">{{ $dataPuskesmas->telinga->h70_4tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->telinga->h70_9tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->telinga->h70_14tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->telinga->h70_19tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->telinga->h70_44tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->telinga->h70_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->telinga->h70_lebih_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->telinga->h70_l }}</td>
        <td class="column5">{{ $dataPuskesmas->telinga->h70_p }}</td>
        <td class="column5">{{ $dataPuskesmas->telinga->h70_7hari + $dataPuskesmas->telinga->h70_28hari + $dataPuskesmas->telinga->h70_11bulan + $dataPuskesmas->telinga->h70_4tahun + $dataPuskesmas->telinga->h70_9tahun + $dataPuskesmas->telinga->h70_14tahun + $dataPuskesmas->telinga->h70_19tahun + $dataPuskesmas->telinga->h70_44tahun + $dataPuskesmas->telinga->h70_59tahun + $dataPuskesmas->telinga->h70_lebih_59tahun + $dataPuskesmas->telinga->h70_l + $dataPuskesmas->telinga->h70_p  }}</td>
        <td class="column5">{{ $dataPuskesmas->telinga->h70_l_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->telinga->h70_p_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->telinga->h70_l_lama + $dataPuskesmas->telinga->h70_p_lama }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">3</td>
        <td class="column10">Otitis eksterna</td>
        <td class="column5">H60.9</td>
        <td class="column5">{{ $dataPuskesmas->telinga->h609_7hari }}</td>
        <td class="column5">{{ $dataPuskesmas->telinga->h609_28hari }}</td>
        <td class="column5">{{ $dataPuskesmas->telinga->h609_11bulan }}</td>
        <td class="column5">{{ $dataPuskesmas->telinga->h609_4tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->telinga->h609_9tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->telinga->h609_14tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->telinga->h609_19tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->telinga->h609_44tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->telinga->h609_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->telinga->h609_lebih_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->telinga->h609_l }}</td>
        <td class="column5">{{ $dataPuskesmas->telinga->h609_p }}</td>
        <td class="column5">{{ $dataPuskesmas->telinga->h609_7hari + $dataPuskesmas->telinga->h609_28hari + $dataPuskesmas->telinga->h609_11bulan + $dataPuskesmas->telinga->h609_4tahun + $dataPuskesmas->telinga->h609_9tahun + $dataPuskesmas->telinga->h609_14tahun + $dataPuskesmas->telinga->h609_19tahun + $dataPuskesmas->telinga->h609_44tahun + $dataPuskesmas->telinga->h609_59tahun + $dataPuskesmas->telinga->h609_lebih_59tahun + $dataPuskesmas->telinga->h609_l + $dataPuskesmas->telinga->h609_p  }}</td>
        <td class="column5">{{ $dataPuskesmas->telinga->h609_l_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->telinga->h609_p_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->telinga->h609_l_lama + $dataPuskesmas->telinga->h609_p_lama }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">4</td>
        <td class="column10">Otitis media akut</td>
        <td class="column5">H65</td>
        <td class="column5">{{ $dataPuskesmas->telinga->h65_7hari }}</td>
        <td class="column5">{{ $dataPuskesmas->telinga->h65_28hari }}</td>
        <td class="column5">{{ $dataPuskesmas->telinga->h65_11bulan }}</td>
        <td class="column5">{{ $dataPuskesmas->telinga->h65_4tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->telinga->h65_9tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->telinga->h65_14tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->telinga->h65_19tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->telinga->h65_44tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->telinga->h65_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->telinga->h65_lebih_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->telinga->h65_l }}</td>
        <td class="column5">{{ $dataPuskesmas->telinga->h65_p }}</td>
        <td class="column5">{{ $dataPuskesmas->telinga->h65_7hari + $dataPuskesmas->telinga->h65_28hari + $dataPuskesmas->telinga->h65_11bulan + $dataPuskesmas->telinga->h65_4tahun + $dataPuskesmas->telinga->h65_9tahun + $dataPuskesmas->telinga->h65_14tahun + $dataPuskesmas->telinga->h65_19tahun + $dataPuskesmas->telinga->h65_44tahun + $dataPuskesmas->telinga->h65_59tahun + $dataPuskesmas->telinga->h65_lebih_59tahun + $dataPuskesmas->telinga->h65_l + $dataPuskesmas->telinga->h65_p  }}</td>
        <td class="column5">{{ $dataPuskesmas->telinga->h65_l_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->telinga->h65_p_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->telinga->h65_l_lama + $dataPuskesmas->telinga->h65_p_lama }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">5</td>
        <td class="column10">Otitis media supuratif kronik</td>
        <td class="column5">H66</td>
        <td class="column5">{{ $dataPuskesmas->telinga->h66_7hari }}</td>
        <td class="column5">{{ $dataPuskesmas->telinga->h66_28hari }}</td>
        <td class="column5">{{ $dataPuskesmas->telinga->h66_11bulan }}</td>
        <td class="column5">{{ $dataPuskesmas->telinga->h66_4tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->telinga->h66_9tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->telinga->h66_14tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->telinga->h66_19tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->telinga->h66_44tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->telinga->h66_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->telinga->h66_lebih_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->telinga->h66_l }}</td>
        <td class="column5">{{ $dataPuskesmas->telinga->h66_p }}</td>
        <td class="column5">{{ $dataPuskesmas->telinga->h66_7hari + $dataPuskesmas->telinga->h66_28hari + $dataPuskesmas->telinga->h66_11bulan + $dataPuskesmas->telinga->h66_4tahun + $dataPuskesmas->telinga->h66_9tahun + $dataPuskesmas->telinga->h66_14tahun + $dataPuskesmas->telinga->h66_19tahun + $dataPuskesmas->telinga->h66_44tahun + $dataPuskesmas->telinga->h66_59tahun + $dataPuskesmas->telinga->h66_lebih_59tahun + $dataPuskesmas->telinga->h66_l + $dataPuskesmas->telinga->h66_p  }}</td>
        <td class="column5">{{ $dataPuskesmas->telinga->h66_l_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->telinga->h66_p_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->telinga->h66_l_lama + $dataPuskesmas->telinga->h66_p_lama }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">6</td>
        <td class="column10">Presbiakusis</td>
        <td class="column5">H91.1</td>
        <td class="column5">{{ $dataPuskesmas->telinga->h911_7hari }}</td>
        <td class="column5">{{ $dataPuskesmas->telinga->h911_28hari }}</td>
        <td class="column5">{{ $dataPuskesmas->telinga->h911_11bulan }}</td>
        <td class="column5">{{ $dataPuskesmas->telinga->h911_4tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->telinga->h911_9tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->telinga->h911_14tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->telinga->h911_19tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->telinga->h911_44tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->telinga->h911_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->telinga->h911_lebih_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->telinga->h911_l }}</td>
        <td class="column5">{{ $dataPuskesmas->telinga->h911_p }}</td>
        <td class="column5">{{ $dataPuskesmas->telinga->h911_7hari + $dataPuskesmas->telinga->h911_28hari + $dataPuskesmas->telinga->h911_11bulan + $dataPuskesmas->telinga->h911_4tahun + $dataPuskesmas->telinga->h911_9tahun + $dataPuskesmas->telinga->h911_14tahun + $dataPuskesmas->telinga->h911_19tahun + $dataPuskesmas->telinga->h911_44tahun + $dataPuskesmas->telinga->h911_59tahun + $dataPuskesmas->telinga->h911_lebih_59tahun + $dataPuskesmas->telinga->h911_l + $dataPuskesmas->telinga->h911_p  }}</td>
        <td class="column5">{{ $dataPuskesmas->telinga->h911_l_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->telinga->h911_p_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->telinga->h911_l_lama + $dataPuskesmas->telinga->h911_p_lama }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">7</td>
        <td class="column10">Serumen prop</td>
        <td class="column5">H61.2</td>
        <td class="column5">{{ $dataPuskesmas->telinga->h612_7hari }}</td>
        <td class="column5">{{ $dataPuskesmas->telinga->h612_28hari }}</td>
        <td class="column5">{{ $dataPuskesmas->telinga->h612_11bulan }}</td>
        <td class="column5">{{ $dataPuskesmas->telinga->h612_4tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->telinga->h612_9tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->telinga->h612_14tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->telinga->h612_19tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->telinga->h612_44tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->telinga->h612_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->telinga->h612_lebih_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->telinga->h612_l }}</td>
        <td class="column5">{{ $dataPuskesmas->telinga->h612_p }}</td>
        <td class="column5">{{ $dataPuskesmas->telinga->h612_7hari + $dataPuskesmas->telinga->h612_28hari + $dataPuskesmas->telinga->h612_11bulan + $dataPuskesmas->telinga->h612_4tahun + $dataPuskesmas->telinga->h612_9tahun + $dataPuskesmas->telinga->h612_14tahun + $dataPuskesmas->telinga->h612_19tahun + $dataPuskesmas->telinga->h612_44tahun + $dataPuskesmas->telinga->h612_59tahun + $dataPuskesmas->telinga->h612_lebih_59tahun + $dataPuskesmas->telinga->h612_l + $dataPuskesmas->telinga->h612_p  }}</td>
        <td class="column5">{{ $dataPuskesmas->telinga->h612_l_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->telinga->h612_p_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->telinga->h612_l_lama + $dataPuskesmas->telinga->h612_p_lama }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">8</td>
        <td class="column10">Tuli akibat bising</td>
        <td class="column5">H83</td>
        <td class="column5">{{ $dataPuskesmas->telinga->h83_7hari }}</td>
        <td class="column5">{{ $dataPuskesmas->telinga->h83_28hari }}</td>
        <td class="column5">{{ $dataPuskesmas->telinga->h83_11bulan }}</td>
        <td class="column5">{{ $dataPuskesmas->telinga->h83_4tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->telinga->h83_9tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->telinga->h83_14tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->telinga->h83_19tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->telinga->h83_44tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->telinga->h83_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->telinga->h83_lebih_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->telinga->h83_l }}</td>
        <td class="column5">{{ $dataPuskesmas->telinga->h83_p }}</td>
        <td class="column5">{{ $dataPuskesmas->telinga->h83_7hari + $dataPuskesmas->telinga->h83_28hari + $dataPuskesmas->telinga->h83_11bulan + $dataPuskesmas->telinga->h83_4tahun + $dataPuskesmas->telinga->h83_9tahun + $dataPuskesmas->telinga->h83_14tahun + $dataPuskesmas->telinga->h83_19tahun + $dataPuskesmas->telinga->h83_44tahun + $dataPuskesmas->telinga->h83_59tahun + $dataPuskesmas->telinga->h83_lebih_59tahun + $dataPuskesmas->telinga->h83_l + $dataPuskesmas->telinga->h83_p  }}</td>
        <td class="column5">{{ $dataPuskesmas->telinga->h83_l_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->telinga->h83_p_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->telinga->h83_l_lama + $dataPuskesmas->telinga->h83_p_lama }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">9</td>
        <td class="column10">Tuli kongenital</td>
        <td class="column5">H90</td>
        <td class="column5">{{ $dataPuskesmas->telinga->h90_7hari }}</td>
        <td class="column5">{{ $dataPuskesmas->telinga->h90_28hari }}</td>
        <td class="column5">{{ $dataPuskesmas->telinga->h90_11bulan }}</td>
        <td class="column5">{{ $dataPuskesmas->telinga->h90_4tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->telinga->h90_9tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->telinga->h90_14tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->telinga->h90_19tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->telinga->h90_44tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->telinga->h90_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->telinga->h90_lebih_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->telinga->h90_l }}</td>
        <td class="column5">{{ $dataPuskesmas->telinga->h90_p }}</td>
        <td class="column5">{{ $dataPuskesmas->telinga->h90_7hari + $dataPuskesmas->telinga->h90_28hari + $dataPuskesmas->telinga->h90_11bulan + $dataPuskesmas->telinga->h90_4tahun + $dataPuskesmas->telinga->h90_9tahun + $dataPuskesmas->telinga->h90_14tahun + $dataPuskesmas->telinga->h90_19tahun + $dataPuskesmas->telinga->h90_44tahun + $dataPuskesmas->telinga->h90_59tahun + $dataPuskesmas->telinga->h90_lebih_59tahun + $dataPuskesmas->telinga->h90_l + $dataPuskesmas->telinga->h90_p  }}</td>
        <td class="column5">{{ $dataPuskesmas->telinga->h90_l_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->telinga->h90_p_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->telinga->h90_l_lama + $dataPuskesmas->telinga->h90_p_lama }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">F</td>
        <td class="column10">KARDIOVASKULER</td>
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
        <td class="column10">Angina pektoris stabil</td>
        <td class="column5">I20.9</td>
        <td class="column5">{{ $dataPuskesmas->kardiovaskuler->i209_7hari }}</td>
        <td class="column5">{{ $dataPuskesmas->kardiovaskuler->i209_28hari }}</td>
        <td class="column5">{{ $dataPuskesmas->kardiovaskuler->i209_11bulan }}</td>
        <td class="column5">{{ $dataPuskesmas->kardiovaskuler->i209_4tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kardiovaskuler->i209_9tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kardiovaskuler->i209_14tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kardiovaskuler->i209_19tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kardiovaskuler->i209_44tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kardiovaskuler->i209_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kardiovaskuler->i209_lebih_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kardiovaskuler->i209_l }}</td>
        <td class="column5">{{ $dataPuskesmas->kardiovaskuler->i209_p }}</td>
        <td class="column5">{{ $dataPuskesmas->kardiovaskuler->i209_7hari + $dataPuskesmas->kardiovaskuler->i209_28hari + $dataPuskesmas->kardiovaskuler->i209_11bulan + $dataPuskesmas->kardiovaskuler->i209_4tahun + $dataPuskesmas->kardiovaskuler->i209_9tahun + $dataPuskesmas->kardiovaskuler->i209_14tahun + $dataPuskesmas->kardiovaskuler->i209_19tahun + $dataPuskesmas->kardiovaskuler->i209_44tahun + $dataPuskesmas->kardiovaskuler->i209_59tahun + $dataPuskesmas->kardiovaskuler->i209_lebih_59tahun + $dataPuskesmas->kardiovaskuler->i209_l + $dataPuskesmas->kardiovaskuler->i209_p  }}</td>
        <td class="column5">{{ $dataPuskesmas->kardiovaskuler->i209_l_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->kardiovaskuler->i209_p_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->kardiovaskuler->i209_l_lama + $dataPuskesmas->kardiovaskuler->i209_p_lama }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">2</td>
        <td class="column10">Cardiorespiratory arrest</td>
        <td class="column5">R09.2</td>
        <td class="column5">{{ $dataPuskesmas->kardiovaskuler->r092_7hari }}</td>
        <td class="column5">{{ $dataPuskesmas->kardiovaskuler->r092_28hari }}</td>
        <td class="column5">{{ $dataPuskesmas->kardiovaskuler->r092_11bulan }}</td>
        <td class="column5">{{ $dataPuskesmas->kardiovaskuler->r092_4tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kardiovaskuler->r092_9tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kardiovaskuler->r092_14tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kardiovaskuler->r092_19tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kardiovaskuler->r092_44tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kardiovaskuler->r092_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kardiovaskuler->r092_lebih_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kardiovaskuler->r092_l }}</td>
        <td class="column5">{{ $dataPuskesmas->kardiovaskuler->r092_p }}</td>
        <td class="column5">{{ $dataPuskesmas->kardiovaskuler->r092_7hari + $dataPuskesmas->kardiovaskuler->r092_28hari + $dataPuskesmas->kardiovaskuler->r092_11bulan + $dataPuskesmas->kardiovaskuler->r092_4tahun + $dataPuskesmas->kardiovaskuler->r092_9tahun + $dataPuskesmas->kardiovaskuler->r092_14tahun + $dataPuskesmas->kardiovaskuler->r092_19tahun + $dataPuskesmas->kardiovaskuler->r092_44tahun + $dataPuskesmas->kardiovaskuler->r092_59tahun + $dataPuskesmas->kardiovaskuler->r092_lebih_59tahun + $dataPuskesmas->kardiovaskuler->r092_l + $dataPuskesmas->kardiovaskuler->r092_p  }}</td>
        <td class="column5">{{ $dataPuskesmas->kardiovaskuler->r092_l_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->kardiovaskuler->r092_p_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->kardiovaskuler->r092_l_lama + $dataPuskesmas->kardiovaskuler->r092_p_lama }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">3</td>
        <td class="column10">Gagal jantung akut dan kronik</td>
        <td class="column5">I50.9</td>
        <td class="column5">{{ $dataPuskesmas->kardiovaskuler->i509_7hari }}</td>
        <td class="column5">{{ $dataPuskesmas->kardiovaskuler->i509_28hari }}</td>
        <td class="column5">{{ $dataPuskesmas->kardiovaskuler->i509_11bulan }}</td>
        <td class="column5">{{ $dataPuskesmas->kardiovaskuler->i509_4tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kardiovaskuler->i509_9tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kardiovaskuler->i509_14tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kardiovaskuler->i509_19tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kardiovaskuler->i509_44tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kardiovaskuler->i509_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kardiovaskuler->i509_lebih_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kardiovaskuler->i509_l }}</td>
        <td class="column5">{{ $dataPuskesmas->kardiovaskuler->i509_p }}</td>
        <td class="column5">{{ $dataPuskesmas->kardiovaskuler->i509_7hari + $dataPuskesmas->kardiovaskuler->i509_28hari + $dataPuskesmas->kardiovaskuler->i509_11bulan + $dataPuskesmas->kardiovaskuler->i509_4tahun + $dataPuskesmas->kardiovaskuler->i509_9tahun + $dataPuskesmas->kardiovaskuler->i509_14tahun + $dataPuskesmas->kardiovaskuler->i509_19tahun + $dataPuskesmas->kardiovaskuler->i509_44tahun + $dataPuskesmas->kardiovaskuler->i509_59tahun + $dataPuskesmas->kardiovaskuler->i509_lebih_59tahun + $dataPuskesmas->kardiovaskuler->i509_l + $dataPuskesmas->kardiovaskuler->i509_p  }}</td>
        <td class="column5">{{ $dataPuskesmas->kardiovaskuler->i509_l_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->kardiovaskuler->i509_p_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->kardiovaskuler->i509_l_lama + $dataPuskesmas->kardiovaskuler->i509_p_lama }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">4</td>
        <td class="column10">Hipertensi esensial</td>
        <td class="column5">I10</td>
        <td class="column5">{{ $dataPuskesmas->kardiovaskuler->i10_7hari }}</td>
        <td class="column5">{{ $dataPuskesmas->kardiovaskuler->i10_28hari }}</td>
        <td class="column5">{{ $dataPuskesmas->kardiovaskuler->i10_11bulan }}</td>
        <td class="column5">{{ $dataPuskesmas->kardiovaskuler->i10_4tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kardiovaskuler->i10_9tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kardiovaskuler->i10_14tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kardiovaskuler->i10_19tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kardiovaskuler->i10_44tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kardiovaskuler->i10_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kardiovaskuler->i10_lebih_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kardiovaskuler->i10_l }}</td>
        <td class="column5">{{ $dataPuskesmas->kardiovaskuler->i10_p }}</td>
        <td class="column5">{{ $dataPuskesmas->kardiovaskuler->i10_7hari + $dataPuskesmas->kardiovaskuler->i10_28hari + $dataPuskesmas->kardiovaskuler->i10_11bulan + $dataPuskesmas->kardiovaskuler->i10_4tahun + $dataPuskesmas->kardiovaskuler->i10_9tahun + $dataPuskesmas->kardiovaskuler->i10_14tahun + $dataPuskesmas->kardiovaskuler->i10_19tahun + $dataPuskesmas->kardiovaskuler->i10_44tahun + $dataPuskesmas->kardiovaskuler->i10_59tahun + $dataPuskesmas->kardiovaskuler->i10_lebih_59tahun + $dataPuskesmas->kardiovaskuler->i10_l + $dataPuskesmas->kardiovaskuler->i10_p  }}</td>
        <td class="column5">{{ $dataPuskesmas->kardiovaskuler->i10_l_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->kardiovaskuler->i10_p_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->kardiovaskuler->i10_l_lama + $dataPuskesmas->kardiovaskuler->i10_p_lama }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">5</td>
        <td class="column10">Infark miokard</td>
        <td class="column5">I21.9</td>
        <td class="column5">{{ $dataPuskesmas->kardiovaskuler->i219_7hari }}</td>
        <td class="column5">{{ $dataPuskesmas->kardiovaskuler->i219_28hari }}</td>
        <td class="column5">{{ $dataPuskesmas->kardiovaskuler->i219_11bulan }}</td>
        <td class="column5">{{ $dataPuskesmas->kardiovaskuler->i219_4tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kardiovaskuler->i219_9tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kardiovaskuler->i219_14tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kardiovaskuler->i219_19tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kardiovaskuler->i219_44tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kardiovaskuler->i219_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kardiovaskuler->i219_lebih_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kardiovaskuler->i219_l }}</td>
        <td class="column5">{{ $dataPuskesmas->kardiovaskuler->i219_p }}</td>
        <td class="column5">{{ $dataPuskesmas->kardiovaskuler->i219_7hari + $dataPuskesmas->kardiovaskuler->i219_28hari + $dataPuskesmas->kardiovaskuler->i219_11bulan + $dataPuskesmas->kardiovaskuler->i219_4tahun + $dataPuskesmas->kardiovaskuler->i219_9tahun + $dataPuskesmas->kardiovaskuler->i219_14tahun + $dataPuskesmas->kardiovaskuler->i219_19tahun + $dataPuskesmas->kardiovaskuler->i219_44tahun + $dataPuskesmas->kardiovaskuler->i219_59tahun + $dataPuskesmas->kardiovaskuler->i219_lebih_59tahun + $dataPuskesmas->kardiovaskuler->i219_l + $dataPuskesmas->kardiovaskuler->i219_p  }}</td>
        <td class="column5">{{ $dataPuskesmas->kardiovaskuler->i219_l_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->kardiovaskuler->i219_p_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->kardiovaskuler->i219_l_lama + $dataPuskesmas->kardiovaskuler->i219_p_lama }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">6</td>
        <td class="column10">Takikardia</td>
        <td class="column5">I47</td>
        <td class="column5">{{ $dataPuskesmas->kardiovaskuler->i47_7hari }}</td>
        <td class="column5">{{ $dataPuskesmas->kardiovaskuler->i47_28hari }}</td>
        <td class="column5">{{ $dataPuskesmas->kardiovaskuler->i47_11bulan }}</td>
        <td class="column5">{{ $dataPuskesmas->kardiovaskuler->i47_4tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kardiovaskuler->i47_9tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kardiovaskuler->i47_14tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kardiovaskuler->i47_19tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kardiovaskuler->i47_44tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kardiovaskuler->i47_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kardiovaskuler->i47_lebih_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kardiovaskuler->i47_l }}</td>
        <td class="column5">{{ $dataPuskesmas->kardiovaskuler->i47_p }}</td>
        <td class="column5">{{ $dataPuskesmas->kardiovaskuler->i47_7hari + $dataPuskesmas->kardiovaskuler->i47_28hari + $dataPuskesmas->kardiovaskuler->i47_11bulan + $dataPuskesmas->kardiovaskuler->i47_4tahun + $dataPuskesmas->kardiovaskuler->i47_9tahun + $dataPuskesmas->kardiovaskuler->i47_14tahun + $dataPuskesmas->kardiovaskuler->i47_19tahun + $dataPuskesmas->kardiovaskuler->i47_44tahun + $dataPuskesmas->kardiovaskuler->i47_59tahun + $dataPuskesmas->kardiovaskuler->i47_lebih_59tahun + $dataPuskesmas->kardiovaskuler->i47_l + $dataPuskesmas->kardiovaskuler->i47_p  }}</td>
        <td class="column5">{{ $dataPuskesmas->kardiovaskuler->i47_l_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->kardiovaskuler->i47_p_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->kardiovaskuler->i47_l_lama + $dataPuskesmas->kardiovaskuler->i47_p_lama }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">G</td>
        <td class="column10">MUSKULOSKELETAL</td>
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
        <td class="column10">Artritis reumatoid</td>
        <td class="column5">M53.3</td>
        <td class="column5">{{ $dataPuskesmas->muskuloskeletal->m533_7hari }}</td>
        <td class="column5">{{ $dataPuskesmas->muskuloskeletal->m533_28hari }}</td>
        <td class="column5">{{ $dataPuskesmas->muskuloskeletal->m533_11bulan }}</td>
        <td class="column5">{{ $dataPuskesmas->muskuloskeletal->m533_4tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->muskuloskeletal->m533_9tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->muskuloskeletal->m533_14tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->muskuloskeletal->m533_19tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->muskuloskeletal->m533_44tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->muskuloskeletal->m533_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->muskuloskeletal->m533_lebih_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->muskuloskeletal->m533_l }}</td>
        <td class="column5">{{ $dataPuskesmas->muskuloskeletal->m533_p }}</td>
        <td class="column5">{{ $dataPuskesmas->muskuloskeletal->m533_7hari + $dataPuskesmas->muskuloskeletal->m533_28hari + $dataPuskesmas->muskuloskeletal->m533_11bulan + $dataPuskesmas->muskuloskeletal->m533_4tahun + $dataPuskesmas->muskuloskeletal->m533_9tahun + $dataPuskesmas->muskuloskeletal->m533_14tahun + $dataPuskesmas->muskuloskeletal->m533_19tahun + $dataPuskesmas->muskuloskeletal->m533_44tahun + $dataPuskesmas->muskuloskeletal->m533_59tahun + $dataPuskesmas->muskuloskeletal->m533_lebih_59tahun + $dataPuskesmas->muskuloskeletal->m533_l + $dataPuskesmas->muskuloskeletal->m533_p  }}</td>
        <td class="column5">{{ $dataPuskesmas->muskuloskeletal->m533_l_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->muskuloskeletal->m533_p_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->muskuloskeletal->m533_l_lama + $dataPuskesmas->muskuloskeletal->m533_p_lama }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">2</td>
        <td class="column10">Artritis, osteoartritis</td>
        <td class="column5">M19.9</td>
        <td class="column5">{{ $dataPuskesmas->muskuloskeletal->m199_7hari }}</td>
        <td class="column5">{{ $dataPuskesmas->muskuloskeletal->m199_28hari }}</td>
        <td class="column5">{{ $dataPuskesmas->muskuloskeletal->m199_11bulan }}</td>
        <td class="column5">{{ $dataPuskesmas->muskuloskeletal->m199_4tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->muskuloskeletal->m199_9tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->muskuloskeletal->m199_14tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->muskuloskeletal->m199_19tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->muskuloskeletal->m199_44tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->muskuloskeletal->m199_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->muskuloskeletal->m199_lebih_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->muskuloskeletal->m199_l }}</td>
        <td class="column5">{{ $dataPuskesmas->muskuloskeletal->m199_p }}</td>
        <td class="column5">{{ $dataPuskesmas->muskuloskeletal->m199_7hari + $dataPuskesmas->muskuloskeletal->m199_28hari + $dataPuskesmas->muskuloskeletal->m199_11bulan + $dataPuskesmas->muskuloskeletal->m199_4tahun + $dataPuskesmas->muskuloskeletal->m199_9tahun + $dataPuskesmas->muskuloskeletal->m199_14tahun + $dataPuskesmas->muskuloskeletal->m199_19tahun + $dataPuskesmas->muskuloskeletal->m199_44tahun + $dataPuskesmas->muskuloskeletal->m199_59tahun + $dataPuskesmas->muskuloskeletal->m199_lebih_59tahun + $dataPuskesmas->muskuloskeletal->m199_l + $dataPuskesmas->muskuloskeletal->m199_p  }}</td>
        <td class="column5">{{ $dataPuskesmas->muskuloskeletal->m199_l_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->muskuloskeletal->m199_p_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->muskuloskeletal->m199_l_lama + $dataPuskesmas->muskuloskeletal->m199_p_lama }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">3</td>
        <td class="column10">Fraktur terbuka</td>
        <td class="column5">S52.9</td>
        <td class="column5">{{ $dataPuskesmas->muskuloskeletal->s529_7hari }}</td>
        <td class="column5">{{ $dataPuskesmas->muskuloskeletal->s529_28hari }}</td>
        <td class="column5">{{ $dataPuskesmas->muskuloskeletal->s529_11bulan }}</td>
        <td class="column5">{{ $dataPuskesmas->muskuloskeletal->s529_4tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->muskuloskeletal->s529_9tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->muskuloskeletal->s529_14tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->muskuloskeletal->s529_19tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->muskuloskeletal->s529_44tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->muskuloskeletal->s529_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->muskuloskeletal->s529_lebih_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->muskuloskeletal->s529_l }}</td>
        <td class="column5">{{ $dataPuskesmas->muskuloskeletal->s529_p }}</td>
        <td class="column5">{{ $dataPuskesmas->muskuloskeletal->s529_7hari + $dataPuskesmas->muskuloskeletal->s529_28hari + $dataPuskesmas->muskuloskeletal->s529_11bulan + $dataPuskesmas->muskuloskeletal->s529_4tahun + $dataPuskesmas->muskuloskeletal->s529_9tahun + $dataPuskesmas->muskuloskeletal->s529_14tahun + $dataPuskesmas->muskuloskeletal->s529_19tahun + $dataPuskesmas->muskuloskeletal->s529_44tahun + $dataPuskesmas->muskuloskeletal->s529_59tahun + $dataPuskesmas->muskuloskeletal->s529_lebih_59tahun + $dataPuskesmas->muskuloskeletal->s529_l + $dataPuskesmas->muskuloskeletal->s529_p  }}</td>
        <td class="column5">{{ $dataPuskesmas->muskuloskeletal->s529_l_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->muskuloskeletal->s529_p_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->muskuloskeletal->s529_l_lama + $dataPuskesmas->muskuloskeletal->s529_p_lama }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">4</td>
        <td class="column10">Fraktur tertutup</td>
        <td class="column5">S52.9</td>
        <td class="column5">{{ $dataPuskesmas->muskuloskeletal->s529_2_7hari }}</td>
        <td class="column5">{{ $dataPuskesmas->muskuloskeletal->s529_2_28hari }}</td>
        <td class="column5">{{ $dataPuskesmas->muskuloskeletal->s529_2_11bulan }}</td>
        <td class="column5">{{ $dataPuskesmas->muskuloskeletal->s529_2_4tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->muskuloskeletal->s529_2_9tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->muskuloskeletal->s529_2_14tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->muskuloskeletal->s529_2_19tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->muskuloskeletal->s529_2_44tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->muskuloskeletal->s529_2_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->muskuloskeletal->s529_2_lebih_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->muskuloskeletal->s529_2_l }}</td>
        <td class="column5">{{ $dataPuskesmas->muskuloskeletal->s529_2_p }}</td>
        <td class="column5">{{ $dataPuskesmas->muskuloskeletal->s529_2_7hari + $dataPuskesmas->muskuloskeletal->s529_2_28hari + $dataPuskesmas->muskuloskeletal->s529_2_11bulan + $dataPuskesmas->muskuloskeletal->s529_2_4tahun + $dataPuskesmas->muskuloskeletal->s529_2_9tahun + $dataPuskesmas->muskuloskeletal->s529_2_14tahun + $dataPuskesmas->muskuloskeletal->s529_2_19tahun + $dataPuskesmas->muskuloskeletal->s529_2_44tahun + $dataPuskesmas->muskuloskeletal->s529_2_59tahun + $dataPuskesmas->muskuloskeletal->s529_2_lebih_59tahun + $dataPuskesmas->muskuloskeletal->s529_2_l + $dataPuskesmas->muskuloskeletal->s529_2_p  }}</td>
        <td class="column5">{{ $dataPuskesmas->muskuloskeletal->s529_2_l_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->muskuloskeletal->s529_2_p_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->muskuloskeletal->s529_2_l_lama + $dataPuskesmas->muskuloskeletal->s529_2_p_lama }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">5</td>
        <td class="column10">Lipoma</td>
        <td class="column5">D17.9</td>
        <td class="column5">{{ $dataPuskesmas->muskuloskeletal->d179_7hari }}</td>
        <td class="column5">{{ $dataPuskesmas->muskuloskeletal->d179_28hari }}</td>
        <td class="column5">{{ $dataPuskesmas->muskuloskeletal->d179_11bulan }}</td>
        <td class="column5">{{ $dataPuskesmas->muskuloskeletal->d179_4tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->muskuloskeletal->d179_9tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->muskuloskeletal->d179_14tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->muskuloskeletal->d179_19tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->muskuloskeletal->d179_44tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->muskuloskeletal->d179_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->muskuloskeletal->d179_lebih_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->muskuloskeletal->d179_l }}</td>
        <td class="column5">{{ $dataPuskesmas->muskuloskeletal->d179_p }}</td>
        <td class="column5">{{ $dataPuskesmas->muskuloskeletal->d179_7hari + $dataPuskesmas->muskuloskeletal->d179_28hari + $dataPuskesmas->muskuloskeletal->d179_11bulan + $dataPuskesmas->muskuloskeletal->d179_4tahun + $dataPuskesmas->muskuloskeletal->d179_9tahun + $dataPuskesmas->muskuloskeletal->d179_14tahun + $dataPuskesmas->muskuloskeletal->d179_19tahun + $dataPuskesmas->muskuloskeletal->d179_44tahun + $dataPuskesmas->muskuloskeletal->d179_59tahun + $dataPuskesmas->muskuloskeletal->d179_lebih_59tahun + $dataPuskesmas->muskuloskeletal->d179_l + $dataPuskesmas->muskuloskeletal->d179_p  }}</td>
        <td class="column5">{{ $dataPuskesmas->muskuloskeletal->d179_l_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->muskuloskeletal->d179_p_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->muskuloskeletal->d179_l_lama + $dataPuskesmas->muskuloskeletal->d179_p_lama }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">6</td>
        <td class="column10">Osteoporosis</td>
        <td class="column5">M81.9</td>
        <td class="column5">{{ $dataPuskesmas->muskuloskeletal->m819_7hari }}</td>
        <td class="column5">{{ $dataPuskesmas->muskuloskeletal->m819_28hari }}</td>
        <td class="column5">{{ $dataPuskesmas->muskuloskeletal->m819_11bulan }}</td>
        <td class="column5">{{ $dataPuskesmas->muskuloskeletal->m819_4tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->muskuloskeletal->m819_9tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->muskuloskeletal->m819_14tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->muskuloskeletal->m819_19tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->muskuloskeletal->m819_44tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->muskuloskeletal->m819_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->muskuloskeletal->m819_lebih_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->muskuloskeletal->m819_l }}</td>
        <td class="column5">{{ $dataPuskesmas->muskuloskeletal->m819_p }}</td>
        <td class="column5">{{ $dataPuskesmas->muskuloskeletal->m819_7hari + $dataPuskesmas->muskuloskeletal->m819_28hari + $dataPuskesmas->muskuloskeletal->m819_11bulan + $dataPuskesmas->muskuloskeletal->m819_4tahun + $dataPuskesmas->muskuloskeletal->m819_9tahun + $dataPuskesmas->muskuloskeletal->m819_14tahun + $dataPuskesmas->muskuloskeletal->m819_19tahun + $dataPuskesmas->muskuloskeletal->m819_44tahun + $dataPuskesmas->muskuloskeletal->m819_59tahun + $dataPuskesmas->muskuloskeletal->m819_lebih_59tahun + $dataPuskesmas->muskuloskeletal->m819_l + $dataPuskesmas->muskuloskeletal->m819_p  }}</td>
        <td class="column5">{{ $dataPuskesmas->muskuloskeletal->m819_l_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->muskuloskeletal->m819_p_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->muskuloskeletal->m819_l_lama + $dataPuskesmas->muskuloskeletal->m819_p_lama }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">7</td>
        <td class="column10">Osteosarkoma</td>
        <td class="column5">C41</td>
        <td class="column5">{{ $dataPuskesmas->muskuloskeletal->c41_7hari }}</td>
        <td class="column5">{{ $dataPuskesmas->muskuloskeletal->c41_28hari }}</td>
        <td class="column5">{{ $dataPuskesmas->muskuloskeletal->c41_11bulan }}</td>
        <td class="column5">{{ $dataPuskesmas->muskuloskeletal->c41_4tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->muskuloskeletal->c41_9tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->muskuloskeletal->c41_14tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->muskuloskeletal->c41_19tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->muskuloskeletal->c41_44tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->muskuloskeletal->c41_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->muskuloskeletal->c41_lebih_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->muskuloskeletal->c41_l }}</td>
        <td class="column5">{{ $dataPuskesmas->muskuloskeletal->c41_p }}</td>
        <td class="column5">{{ $dataPuskesmas->muskuloskeletal->c41_7hari + $dataPuskesmas->muskuloskeletal->c41_28hari + $dataPuskesmas->muskuloskeletal->c41_11bulan + $dataPuskesmas->muskuloskeletal->c41_4tahun + $dataPuskesmas->muskuloskeletal->c41_9tahun + $dataPuskesmas->muskuloskeletal->c41_14tahun + $dataPuskesmas->muskuloskeletal->c41_19tahun + $dataPuskesmas->muskuloskeletal->c41_44tahun + $dataPuskesmas->muskuloskeletal->c41_59tahun + $dataPuskesmas->muskuloskeletal->c41_lebih_59tahun + $dataPuskesmas->muskuloskeletal->c41_l + $dataPuskesmas->muskuloskeletal->c41_p  }}</td>
        <td class="column5">{{ $dataPuskesmas->muskuloskeletal->c41_l_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->muskuloskeletal->c41_p_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->muskuloskeletal->c41_l_lama + $dataPuskesmas->muskuloskeletal->c41_p_lama }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">8</td>
        <td class="column10">Polimialgia reumatik</td>
        <td class="column5">M53.3</td>
        <td class="column5">{{ $dataPuskesmas->muskuloskeletal->m533_2_7hari }}</td>
        <td class="column5">{{ $dataPuskesmas->muskuloskeletal->m533_2_28hari }}</td>
        <td class="column5">{{ $dataPuskesmas->muskuloskeletal->m533_2_11bulan }}</td>
        <td class="column5">{{ $dataPuskesmas->muskuloskeletal->m533_2_4tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->muskuloskeletal->m533_2_9tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->muskuloskeletal->m533_2_14tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->muskuloskeletal->m533_2_19tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->muskuloskeletal->m533_2_44tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->muskuloskeletal->m533_2_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->muskuloskeletal->m533_2_lebih_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->muskuloskeletal->m533_2_l }}</td>
        <td class="column5">{{ $dataPuskesmas->muskuloskeletal->m533_2_p }}</td>
        <td class="column5">{{ $dataPuskesmas->muskuloskeletal->m533_2_7hari + $dataPuskesmas->muskuloskeletal->m533_2_28hari + $dataPuskesmas->muskuloskeletal->m533_2_11bulan + $dataPuskesmas->muskuloskeletal->m533_2_4tahun + $dataPuskesmas->muskuloskeletal->m533_2_9tahun + $dataPuskesmas->muskuloskeletal->m533_2_14tahun + $dataPuskesmas->muskuloskeletal->m533_2_19tahun + $dataPuskesmas->muskuloskeletal->m533_2_44tahun + $dataPuskesmas->muskuloskeletal->m533_2_59tahun + $dataPuskesmas->muskuloskeletal->m533_2_lebih_59tahun + $dataPuskesmas->muskuloskeletal->m533_2_l + $dataPuskesmas->muskuloskeletal->m533_2_p  }}</td>
        <td class="column5">{{ $dataPuskesmas->muskuloskeletal->m533_2_l_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->muskuloskeletal->m533_2_p_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->muskuloskeletal->m533_2_l_lama + $dataPuskesmas->muskuloskeletal->m533_2_p_lama }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">9</td>
        <td class="column10"><i>Reduction deformity</i></td>
        <td class="column5">Q73.8</td>
        <td class="column5">{{ $dataPuskesmas->muskuloskeletal->q738_7hari }}</td>
        <td class="column5">{{ $dataPuskesmas->muskuloskeletal->q738_28hari }}</td>
        <td class="column5">{{ $dataPuskesmas->muskuloskeletal->q738_11bulan }}</td>
        <td class="column5">{{ $dataPuskesmas->muskuloskeletal->q738_4tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->muskuloskeletal->q738_9tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->muskuloskeletal->q738_14tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->muskuloskeletal->q738_19tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->muskuloskeletal->q738_44tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->muskuloskeletal->q738_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->muskuloskeletal->q738_lebih_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->muskuloskeletal->q738_l }}</td>
        <td class="column5">{{ $dataPuskesmas->muskuloskeletal->q738_p }}</td>
        <td class="column5">{{ $dataPuskesmas->muskuloskeletal->q738_7hari + $dataPuskesmas->muskuloskeletal->q738_28hari + $dataPuskesmas->muskuloskeletal->q738_11bulan + $dataPuskesmas->muskuloskeletal->q738_4tahun + $dataPuskesmas->muskuloskeletal->q738_9tahun + $dataPuskesmas->muskuloskeletal->q738_14tahun + $dataPuskesmas->muskuloskeletal->q738_19tahun + $dataPuskesmas->muskuloskeletal->q738_44tahun + $dataPuskesmas->muskuloskeletal->q738_59tahun + $dataPuskesmas->muskuloskeletal->q738_lebih_59tahun + $dataPuskesmas->muskuloskeletal->q738_l + $dataPuskesmas->muskuloskeletal->q738_p  }}</td>
        <td class="column5">{{ $dataPuskesmas->muskuloskeletal->q738_l_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->muskuloskeletal->q738_p_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->muskuloskeletal->q738_l_lama + $dataPuskesmas->muskuloskeletal->q738_p_lama }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">10</td>
        <td class="column10">Talipes</td>
        <td class="column5">Q66</td>
        <td class="column5">{{ $dataPuskesmas->muskuloskeletal->q66_7hari }}</td>
        <td class="column5">{{ $dataPuskesmas->muskuloskeletal->q66_28hari }}</td>
        <td class="column5">{{ $dataPuskesmas->muskuloskeletal->q66_11bulan }}</td>
        <td class="column5">{{ $dataPuskesmas->muskuloskeletal->q66_4tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->muskuloskeletal->q66_9tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->muskuloskeletal->q66_14tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->muskuloskeletal->q66_19tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->muskuloskeletal->q66_44tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->muskuloskeletal->q66_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->muskuloskeletal->q66_lebih_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->muskuloskeletal->q66_l }}</td>
        <td class="column5">{{ $dataPuskesmas->muskuloskeletal->q66_p }}</td>
        <td class="column5">{{ $dataPuskesmas->muskuloskeletal->q66_7hari + $dataPuskesmas->muskuloskeletal->q66_28hari + $dataPuskesmas->muskuloskeletal->q66_11bulan + $dataPuskesmas->muskuloskeletal->q66_4tahun + $dataPuskesmas->muskuloskeletal->q66_9tahun + $dataPuskesmas->muskuloskeletal->q66_14tahun + $dataPuskesmas->muskuloskeletal->q66_19tahun + $dataPuskesmas->muskuloskeletal->q66_44tahun + $dataPuskesmas->muskuloskeletal->q66_59tahun + $dataPuskesmas->muskuloskeletal->q66_lebih_59tahun + $dataPuskesmas->muskuloskeletal->q66_l + $dataPuskesmas->muskuloskeletal->q66_p  }}</td>
        <td class="column5">{{ $dataPuskesmas->muskuloskeletal->q66_l_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->muskuloskeletal->q66_p_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->muskuloskeletal->q66_l_lama + $dataPuskesmas->muskuloskeletal->q66_p_lama }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">11</td>
        <td class="column10">Vulnus</td>
        <td class="column5">T14.1</td>
        <td class="column5">{{ $dataPuskesmas->muskuloskeletal->t141_7hari }}</td>
        <td class="column5">{{ $dataPuskesmas->muskuloskeletal->t141_28hari }}</td>
        <td class="column5">{{ $dataPuskesmas->muskuloskeletal->t141_11bulan }}</td>
        <td class="column5">{{ $dataPuskesmas->muskuloskeletal->t141_4tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->muskuloskeletal->t141_9tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->muskuloskeletal->t141_14tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->muskuloskeletal->t141_19tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->muskuloskeletal->t141_44tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->muskuloskeletal->t141_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->muskuloskeletal->t141_lebih_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->muskuloskeletal->t141_l }}</td>
        <td class="column5">{{ $dataPuskesmas->muskuloskeletal->t141_p }}</td>
        <td class="column5">{{ $dataPuskesmas->muskuloskeletal->t141_7hari + $dataPuskesmas->muskuloskeletal->t141_28hari + $dataPuskesmas->muskuloskeletal->t141_11bulan + $dataPuskesmas->muskuloskeletal->t141_4tahun + $dataPuskesmas->muskuloskeletal->t141_9tahun + $dataPuskesmas->muskuloskeletal->t141_14tahun + $dataPuskesmas->muskuloskeletal->t141_19tahun + $dataPuskesmas->muskuloskeletal->t141_44tahun + $dataPuskesmas->muskuloskeletal->t141_59tahun + $dataPuskesmas->muskuloskeletal->t141_lebih_59tahun + $dataPuskesmas->muskuloskeletal->t141_l + $dataPuskesmas->muskuloskeletal->t141_p  }}</td>
        <td class="column5">{{ $dataPuskesmas->muskuloskeletal->t141_l_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->muskuloskeletal->t141_p_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->muskuloskeletal->t141_l_lama + $dataPuskesmas->muskuloskeletal->t141_p_lama }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">H</td>
        <td class="column10">NEUROLOGI</td>
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
        <td class="column10">Anencephaly</td>
        <td class="column5">Q00.0</td>
        <td class="column5">{{ $dataPuskesmas->neurologi->q00_7hari }}</td>
        <td class="column5">{{ $dataPuskesmas->neurologi->q00_28hari }}</td>
        <td class="column5">{{ $dataPuskesmas->neurologi->q00_11bulan }}</td>
        <td class="column5">{{ $dataPuskesmas->neurologi->q00_4tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->neurologi->q00_9tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->neurologi->q00_14tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->neurologi->q00_19tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->neurologi->q00_44tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->neurologi->q00_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->neurologi->q00_lebih_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->neurologi->q00_l }}</td>
        <td class="column5">{{ $dataPuskesmas->neurologi->q00_p }}</td>
        <td class="column5">{{ $dataPuskesmas->neurologi->q00_7hari + $dataPuskesmas->neurologi->q00_28hari + $dataPuskesmas->neurologi->q00_11bulan + $dataPuskesmas->neurologi->q00_4tahun + $dataPuskesmas->neurologi->q00_9tahun + $dataPuskesmas->neurologi->q00_14tahun + $dataPuskesmas->neurologi->q00_19tahun + $dataPuskesmas->neurologi->q00_44tahun + $dataPuskesmas->neurologi->q00_59tahun + $dataPuskesmas->neurologi->q00_lebih_59tahun + $dataPuskesmas->neurologi->q00_l + $dataPuskesmas->neurologi->q00_p  }}</td>
        <td class="column5">{{ $dataPuskesmas->neurologi->q00_l_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->neurologi->q00_p_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->neurologi->q00_l_lama + $dataPuskesmas->neurologi->q00_p_lama }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">2</td>
        <td class="column10">Bells’ Palsy</td>
        <td class="column5">G51.0</td>
        <td class="column5">{{ $dataPuskesmas->neurologi->g510_7hari }}</td>
        <td class="column5">{{ $dataPuskesmas->neurologi->g510_28hari }}</td>
        <td class="column5">{{ $dataPuskesmas->neurologi->g510_11bulan }}</td>
        <td class="column5">{{ $dataPuskesmas->neurologi->g510_4tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->neurologi->g510_9tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->neurologi->g510_14tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->neurologi->g510_19tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->neurologi->g510_44tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->neurologi->g510_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->neurologi->g510_lebih_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->neurologi->g510_l }}</td>
        <td class="column5">{{ $dataPuskesmas->neurologi->g510_p }}</td>
        <td class="column5">{{ $dataPuskesmas->neurologi->g510_7hari + $dataPuskesmas->neurologi->g510_28hari + $dataPuskesmas->neurologi->g510_11bulan + $dataPuskesmas->neurologi->g510_4tahun + $dataPuskesmas->neurologi->g510_9tahun + $dataPuskesmas->neurologi->g510_14tahun + $dataPuskesmas->neurologi->g510_19tahun + $dataPuskesmas->neurologi->g510_44tahun + $dataPuskesmas->neurologi->g510_59tahun + $dataPuskesmas->neurologi->g510_lebih_59tahun + $dataPuskesmas->neurologi->g510_l + $dataPuskesmas->neurologi->g510_p  }}</td>
        <td class="column5">{{ $dataPuskesmas->neurologi->g510_l_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->neurologi->g510_p_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->neurologi->g510_l_lama + $dataPuskesmas->neurologi->g510_p_lama }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">3</td>
        <td class="column10">Delirium</td>
        <td class="column5">F05.9</td>
        <td class="column5">{{ $dataPuskesmas->neurologi->f059_7hari }}</td>
        <td class="column5">{{ $dataPuskesmas->neurologi->f059_28hari }}</td>
        <td class="column5">{{ $dataPuskesmas->neurologi->f059_11bulan }}</td>
        <td class="column5">{{ $dataPuskesmas->neurologi->f059_4tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->neurologi->f059_9tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->neurologi->f059_14tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->neurologi->f059_19tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->neurologi->f059_44tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->neurologi->f059_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->neurologi->f059_lebih_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->neurologi->f059_l }}</td>
        <td class="column5">{{ $dataPuskesmas->neurologi->f059_p }}</td>
        <td class="column5">{{ $dataPuskesmas->neurologi->f059_7hari + $dataPuskesmas->neurologi->f059_28hari + $dataPuskesmas->neurologi->f059_11bulan + $dataPuskesmas->neurologi->f059_4tahun + $dataPuskesmas->neurologi->f059_9tahun + $dataPuskesmas->neurologi->f059_14tahun + $dataPuskesmas->neurologi->f059_19tahun + $dataPuskesmas->neurologi->f059_44tahun + $dataPuskesmas->neurologi->f059_59tahun + $dataPuskesmas->neurologi->f059_lebih_59tahun + $dataPuskesmas->neurologi->f059_l + $dataPuskesmas->neurologi->f059_p  }}</td>
        <td class="column5">{{ $dataPuskesmas->neurologi->f059_l_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->neurologi->f059_p_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->neurologi->f059_l_lama + $dataPuskesmas->neurologi->f059_p_lama }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">4</td>
        <td class="column10">Epilepsi</td>
        <td class="column5">G40.9</td>
        <td class="column5">{{ $dataPuskesmas->neurologi->g409_7hari }}</td>
        <td class="column5">{{ $dataPuskesmas->neurologi->g409_28hari }}</td>
        <td class="column5">{{ $dataPuskesmas->neurologi->g409_11bulan }}</td>
        <td class="column5">{{ $dataPuskesmas->neurologi->g409_4tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->neurologi->g409_9tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->neurologi->g409_14tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->neurologi->g409_19tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->neurologi->g409_44tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->neurologi->g409_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->neurologi->g409_lebih_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->neurologi->g409_l }}</td>
        <td class="column5">{{ $dataPuskesmas->neurologi->g409_p }}</td>
        <td class="column5">{{ $dataPuskesmas->neurologi->g409_7hari + $dataPuskesmas->neurologi->g409_28hari + $dataPuskesmas->neurologi->g409_11bulan + $dataPuskesmas->neurologi->g409_4tahun + $dataPuskesmas->neurologi->g409_9tahun + $dataPuskesmas->neurologi->g409_14tahun + $dataPuskesmas->neurologi->g409_19tahun + $dataPuskesmas->neurologi->g409_44tahun + $dataPuskesmas->neurologi->g409_59tahun + $dataPuskesmas->neurologi->g409_lebih_59tahun + $dataPuskesmas->neurologi->g409_l + $dataPuskesmas->neurologi->g409_p  }}</td>
        <td class="column5">{{ $dataPuskesmas->neurologi->g409_l_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->neurologi->g409_p_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->neurologi->g409_l_lama + $dataPuskesmas->neurologi->g409_p_lama }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">5</td>
        <td class="column10">Kejang demam</td>
        <td class="column5">R56.0</td>
        <td class="column5">{{ $dataPuskesmas->neurologi->r560_7hari }}</td>
        <td class="column5">{{ $dataPuskesmas->neurologi->r560_28hari }}</td>
        <td class="column5">{{ $dataPuskesmas->neurologi->r560_11bulan }}</td>
        <td class="column5">{{ $dataPuskesmas->neurologi->r560_4tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->neurologi->r560_9tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->neurologi->r560_14tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->neurologi->r560_19tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->neurologi->r560_44tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->neurologi->r560_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->neurologi->r560_lebih_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->neurologi->r560_l }}</td>
        <td class="column5">{{ $dataPuskesmas->neurologi->r560_p }}</td>
        <td class="column5">{{ $dataPuskesmas->neurologi->r560_7hari + $dataPuskesmas->neurologi->r560_28hari + $dataPuskesmas->neurologi->r560_11bulan + $dataPuskesmas->neurologi->r560_4tahun + $dataPuskesmas->neurologi->r560_9tahun + $dataPuskesmas->neurologi->r560_14tahun + $dataPuskesmas->neurologi->r560_19tahun + $dataPuskesmas->neurologi->r560_44tahun + $dataPuskesmas->neurologi->r560_59tahun + $dataPuskesmas->neurologi->r560_lebih_59tahun + $dataPuskesmas->neurologi->r560_l + $dataPuskesmas->neurologi->r560_p  }}</td>
        <td class="column5">{{ $dataPuskesmas->neurologi->r560_l_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->neurologi->r560_p_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->neurologi->r560_l_lama + $dataPuskesmas->neurologi->r560_p_lama }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">6</td>
        <td class="column10">Meningo/encephalocele</td>
        <td class="column5">Q01.9</td>
        <td class="column5">{{ $dataPuskesmas->neurologi->q019_7hari }}</td>
        <td class="column5">{{ $dataPuskesmas->neurologi->q019_28hari }}</td>
        <td class="column5">{{ $dataPuskesmas->neurologi->q019_11bulan }}</td>
        <td class="column5">{{ $dataPuskesmas->neurologi->q019_4tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->neurologi->q019_9tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->neurologi->q019_14tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->neurologi->q019_19tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->neurologi->q019_44tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->neurologi->q019_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->neurologi->q019_lebih_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->neurologi->q019_l }}</td>
        <td class="column5">{{ $dataPuskesmas->neurologi->q019_p }}</td>
        <td class="column5">{{ $dataPuskesmas->neurologi->q019_7hari + $dataPuskesmas->neurologi->q019_28hari + $dataPuskesmas->neurologi->q019_11bulan + $dataPuskesmas->neurologi->q019_4tahun + $dataPuskesmas->neurologi->q019_9tahun + $dataPuskesmas->neurologi->q019_14tahun + $dataPuskesmas->neurologi->q019_19tahun + $dataPuskesmas->neurologi->q019_44tahun + $dataPuskesmas->neurologi->q019_59tahun + $dataPuskesmas->neurologi->q019_lebih_59tahun + $dataPuskesmas->neurologi->q019_l + $dataPuskesmas->neurologi->q019_p  }}</td>
        <td class="column5">{{ $dataPuskesmas->neurologi->q019_l_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->neurologi->q019_p_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->neurologi->q019_l_lama + $dataPuskesmas->neurologi->q019_p_lama }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">7</td>
        <td class="column10">Migren</td>
        <td class="column5">G43.9</td>
        <td class="column5">{{ $dataPuskesmas->neurologi->g439_7hari }}</td>
        <td class="column5">{{ $dataPuskesmas->neurologi->g439_28hari }}</td>
        <td class="column5">{{ $dataPuskesmas->neurologi->g439_11bulan }}</td>
        <td class="column5">{{ $dataPuskesmas->neurologi->g439_4tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->neurologi->g439_9tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->neurologi->g439_14tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->neurologi->g439_19tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->neurologi->g439_44tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->neurologi->g439_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->neurologi->g439_lebih_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->neurologi->g439_l }}</td>
        <td class="column5">{{ $dataPuskesmas->neurologi->g439_p }}</td>
        <td class="column5">{{ $dataPuskesmas->neurologi->g439_7hari + $dataPuskesmas->neurologi->g439_28hari + $dataPuskesmas->neurologi->g439_11bulan + $dataPuskesmas->neurologi->g439_4tahun + $dataPuskesmas->neurologi->g439_9tahun + $dataPuskesmas->neurologi->g439_14tahun + $dataPuskesmas->neurologi->g439_19tahun + $dataPuskesmas->neurologi->g439_44tahun + $dataPuskesmas->neurologi->g439_59tahun + $dataPuskesmas->neurologi->g439_lebih_59tahun + $dataPuskesmas->neurologi->g439_l + $dataPuskesmas->neurologi->g439_p  }}</td>
        <td class="column5">{{ $dataPuskesmas->neurologi->g439_l_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->neurologi->g439_p_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->neurologi->g439_l_lama + $dataPuskesmas->neurologi->g439_p_lama }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">8</td>
        <td class="column10">Neuroblastoma</td>
        <td class="column5">C74.9</td>
        <td class="column5">{{ $dataPuskesmas->neurologi->c749_7hari }}</td>
        <td class="column5">{{ $dataPuskesmas->neurologi->c749_28hari }}</td>
        <td class="column5">{{ $dataPuskesmas->neurologi->c749_11bulan }}</td>
        <td class="column5">{{ $dataPuskesmas->neurologi->c749_4tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->neurologi->c749_9tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->neurologi->c749_14tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->neurologi->c749_19tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->neurologi->c749_44tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->neurologi->c749_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->neurologi->c749_lebih_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->neurologi->c749_l }}</td>
        <td class="column5">{{ $dataPuskesmas->neurologi->c749_p }}</td>
        <td class="column5">{{ $dataPuskesmas->neurologi->c749_7hari + $dataPuskesmas->neurologi->c749_28hari + $dataPuskesmas->neurologi->c749_11bulan + $dataPuskesmas->neurologi->c749_4tahun + $dataPuskesmas->neurologi->c749_9tahun + $dataPuskesmas->neurologi->c749_14tahun + $dataPuskesmas->neurologi->c749_19tahun + $dataPuskesmas->neurologi->c749_44tahun + $dataPuskesmas->neurologi->c749_59tahun + $dataPuskesmas->neurologi->c749_lebih_59tahun + $dataPuskesmas->neurologi->c749_l + $dataPuskesmas->neurologi->c749_p  }}</td>
        <td class="column5">{{ $dataPuskesmas->neurologi->c749_l_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->neurologi->c749_p_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->neurologi->c749_l_lama + $dataPuskesmas->neurologi->c749_p_lama }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">9</td>
        <td class="column10">Rabies</td>
        <td class="column5">A82.9</td>
        <td class="column5">{{ $dataPuskesmas->neurologi->a829_7hari }}</td>
        <td class="column5">{{ $dataPuskesmas->neurologi->a829_28hari }}</td>
        <td class="column5">{{ $dataPuskesmas->neurologi->a829_11bulan }}</td>
        <td class="column5">{{ $dataPuskesmas->neurologi->a829_4tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->neurologi->a829_9tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->neurologi->a829_14tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->neurologi->a829_19tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->neurologi->a829_44tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->neurologi->a829_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->neurologi->a829_lebih_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->neurologi->a829_l }}</td>
        <td class="column5">{{ $dataPuskesmas->neurologi->a829_p }}</td>
        <td class="column5">{{ $dataPuskesmas->neurologi->a829_7hari + $dataPuskesmas->neurologi->a829_28hari + $dataPuskesmas->neurologi->a829_11bulan + $dataPuskesmas->neurologi->a829_4tahun + $dataPuskesmas->neurologi->a829_9tahun + $dataPuskesmas->neurologi->a829_14tahun + $dataPuskesmas->neurologi->a829_19tahun + $dataPuskesmas->neurologi->a829_44tahun + $dataPuskesmas->neurologi->a829_59tahun + $dataPuskesmas->neurologi->a829_lebih_59tahun + $dataPuskesmas->neurologi->a829_l + $dataPuskesmas->neurologi->a829_p  }}</td>
        <td class="column5">{{ $dataPuskesmas->neurologi->a829_l_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->neurologi->a829_p_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->neurologi->a829_l_lama + $dataPuskesmas->neurologi->a829_p_lama }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">10</td>
        <td class="column10">Status epileptikus</td>
        <td class="column5">G41.9</td>
        <td class="column5">{{ $dataPuskesmas->neurologi->g419_7hari }}</td>
        <td class="column5">{{ $dataPuskesmas->neurologi->g419_28hari }}</td>
        <td class="column5">{{ $dataPuskesmas->neurologi->g419_11bulan }}</td>
        <td class="column5">{{ $dataPuskesmas->neurologi->g419_4tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->neurologi->g419_9tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->neurologi->g419_14tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->neurologi->g419_19tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->neurologi->g419_44tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->neurologi->g419_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->neurologi->g419_lebih_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->neurologi->g419_l }}</td>
        <td class="column5">{{ $dataPuskesmas->neurologi->g419_p }}</td>
        <td class="column5">{{ $dataPuskesmas->neurologi->g419_7hari + $dataPuskesmas->neurologi->g419_28hari + $dataPuskesmas->neurologi->g419_11bulan + $dataPuskesmas->neurologi->g419_4tahun + $dataPuskesmas->neurologi->g419_9tahun + $dataPuskesmas->neurologi->g419_14tahun + $dataPuskesmas->neurologi->g419_19tahun + $dataPuskesmas->neurologi->g419_44tahun + $dataPuskesmas->neurologi->g419_59tahun + $dataPuskesmas->neurologi->g419_lebih_59tahun + $dataPuskesmas->neurologi->g419_l + $dataPuskesmas->neurologi->g419_p  }}</td>
        <td class="column5">{{ $dataPuskesmas->neurologi->g419_l_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->neurologi->g419_p_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->neurologi->g419_l_lama + $dataPuskesmas->neurologi->g419_p_lama }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">11</td>
        <td class="column10">Stroke</td>
        <td class="column5">I63.9</td>
        <td class="column5">{{ $dataPuskesmas->neurologi->i639_7hari }}</td>
        <td class="column5">{{ $dataPuskesmas->neurologi->i639_28hari }}</td>
        <td class="column5">{{ $dataPuskesmas->neurologi->i639_11bulan }}</td>
        <td class="column5">{{ $dataPuskesmas->neurologi->i639_4tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->neurologi->i639_9tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->neurologi->i639_14tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->neurologi->i639_19tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->neurologi->i639_44tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->neurologi->i639_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->neurologi->i639_lebih_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->neurologi->i639_l }}</td>
        <td class="column5">{{ $dataPuskesmas->neurologi->i639_p }}</td>
        <td class="column5">{{ $dataPuskesmas->neurologi->i639_7hari + $dataPuskesmas->neurologi->i639_28hari + $dataPuskesmas->neurologi->i639_11bulan + $dataPuskesmas->neurologi->i639_4tahun + $dataPuskesmas->neurologi->i639_9tahun + $dataPuskesmas->neurologi->i639_14tahun + $dataPuskesmas->neurologi->i639_19tahun + $dataPuskesmas->neurologi->i639_44tahun + $dataPuskesmas->neurologi->i639_59tahun + $dataPuskesmas->neurologi->i639_lebih_59tahun + $dataPuskesmas->neurologi->i639_l + $dataPuskesmas->neurologi->i639_p  }}</td>
        <td class="column5">{{ $dataPuskesmas->neurologi->i639_l_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->neurologi->i639_p_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->neurologi->i639_l_lama + $dataPuskesmas->neurologi->i639_p_lama }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">12</td>
        <td class="column10">Tension headache</td>
        <td class="column5">G44.2</td>
        <td class="column5">{{ $dataPuskesmas->neurologi->g442_7hari }}</td>
        <td class="column5">{{ $dataPuskesmas->neurologi->g442_28hari }}</td>
        <td class="column5">{{ $dataPuskesmas->neurologi->g442_11bulan }}</td>
        <td class="column5">{{ $dataPuskesmas->neurologi->g442_4tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->neurologi->g442_9tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->neurologi->g442_14tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->neurologi->g442_19tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->neurologi->g442_44tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->neurologi->g442_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->neurologi->g442_lebih_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->neurologi->g442_l }}</td>
        <td class="column5">{{ $dataPuskesmas->neurologi->g442_p }}</td>
        <td class="column5">{{ $dataPuskesmas->neurologi->g442_7hari + $dataPuskesmas->neurologi->g442_28hari + $dataPuskesmas->neurologi->g442_11bulan + $dataPuskesmas->neurologi->g442_4tahun + $dataPuskesmas->neurologi->g442_9tahun + $dataPuskesmas->neurologi->g442_14tahun + $dataPuskesmas->neurologi->g442_19tahun + $dataPuskesmas->neurologi->g442_44tahun + $dataPuskesmas->neurologi->g442_59tahun + $dataPuskesmas->neurologi->g442_lebih_59tahun + $dataPuskesmas->neurologi->g442_l + $dataPuskesmas->neurologi->g442_p  }}</td>
        <td class="column5">{{ $dataPuskesmas->neurologi->g442_l_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->neurologi->g442_p_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->neurologi->g442_l_lama + $dataPuskesmas->neurologi->g442_p_lama }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">13</td>
        <td class="column10">Tetanus</td>
        <td class="column5">A35</td>
        <td class="column5">{{ $dataPuskesmas->neurologi->a35_7hari }}</td>
        <td class="column5">{{ $dataPuskesmas->neurologi->a35_28hari }}</td>
        <td class="column5">{{ $dataPuskesmas->neurologi->a35_11bulan }}</td>
        <td class="column5">{{ $dataPuskesmas->neurologi->a35_4tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->neurologi->a35_9tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->neurologi->a35_14tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->neurologi->a35_19tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->neurologi->a35_44tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->neurologi->a35_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->neurologi->a35_lebih_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->neurologi->a35_l }}</td>
        <td class="column5">{{ $dataPuskesmas->neurologi->a35_p }}</td>
        <td class="column5">{{ $dataPuskesmas->neurologi->a35_7hari + $dataPuskesmas->neurologi->a35_28hari + $dataPuskesmas->neurologi->a35_11bulan + $dataPuskesmas->neurologi->a35_4tahun + $dataPuskesmas->neurologi->a35_9tahun + $dataPuskesmas->neurologi->a35_14tahun + $dataPuskesmas->neurologi->a35_19tahun + $dataPuskesmas->neurologi->a35_44tahun + $dataPuskesmas->neurologi->a35_59tahun + $dataPuskesmas->neurologi->a35_lebih_59tahun + $dataPuskesmas->neurologi->a35_l + $dataPuskesmas->neurologi->a35_p  }}</td>
        <td class="column5">{{ $dataPuskesmas->neurologi->a35_l_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->neurologi->a35_p_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->neurologi->a35_l_lama + $dataPuskesmas->neurologi->a35_p_lama }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">14</td>
        <td class="column10">Tetanus neonatorum</td>
        <td class="column5">A33</td>
        <td class="column5">{{ $dataPuskesmas->neurologi->a33_7hari }}</td>
        <td class="column5">{{ $dataPuskesmas->neurologi->a33_28hari }}</td>
        <td class="column5">{{ $dataPuskesmas->neurologi->a33_11bulan }}</td>
        <td class="column5">{{ $dataPuskesmas->neurologi->a33_4tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->neurologi->a33_9tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->neurologi->a33_14tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->neurologi->a33_19tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->neurologi->a33_44tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->neurologi->a33_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->neurologi->a33_lebih_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->neurologi->a33_l }}</td>
        <td class="column5">{{ $dataPuskesmas->neurologi->a33_p }}</td>
        <td class="column5">{{ $dataPuskesmas->neurologi->a33_7hari + $dataPuskesmas->neurologi->a33_28hari + $dataPuskesmas->neurologi->a33_11bulan + $dataPuskesmas->neurologi->a33_4tahun + $dataPuskesmas->neurologi->a33_9tahun + $dataPuskesmas->neurologi->a33_14tahun + $dataPuskesmas->neurologi->a33_19tahun + $dataPuskesmas->neurologi->a33_44tahun + $dataPuskesmas->neurologi->a33_59tahun + $dataPuskesmas->neurologi->a33_lebih_59tahun + $dataPuskesmas->neurologi->a33_l + $dataPuskesmas->neurologi->a33_p  }}</td>
        <td class="column5">{{ $dataPuskesmas->neurologi->a33_l_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->neurologi->a33_p_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->neurologi->a33_l_lama + $dataPuskesmas->neurologi->a33_p_lama }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">15</td>
        <td class="column10"><i>Transient Ischemic Attack (TIA)/</i></td>
        <td class="column5">G45.9</td>
        <td class="column5">{{ $dataPuskesmas->neurologi->g459_7hari }}</td>
        <td class="column5">{{ $dataPuskesmas->neurologi->g459_28hari }}</td>
        <td class="column5">{{ $dataPuskesmas->neurologi->g459_11bulan }}</td>
        <td class="column5">{{ $dataPuskesmas->neurologi->g459_4tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->neurologi->g459_9tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->neurologi->g459_14tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->neurologi->g459_19tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->neurologi->g459_44tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->neurologi->g459_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->neurologi->g459_lebih_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->neurologi->g459_l }}</td>
        <td class="column5">{{ $dataPuskesmas->neurologi->g459_p }}</td>
        <td class="column5">{{ $dataPuskesmas->neurologi->g459_7hari + $dataPuskesmas->neurologi->g459_28hari + $dataPuskesmas->neurologi->g459_11bulan + $dataPuskesmas->neurologi->g459_4tahun + $dataPuskesmas->neurologi->g459_9tahun + $dataPuskesmas->neurologi->g459_14tahun + $dataPuskesmas->neurologi->g459_19tahun + $dataPuskesmas->neurologi->g459_44tahun + $dataPuskesmas->neurologi->g459_59tahun + $dataPuskesmas->neurologi->g459_lebih_59tahun + $dataPuskesmas->neurologi->g459_l + $dataPuskesmas->neurologi->g459_p  }}</td>
        <td class="column5">{{ $dataPuskesmas->neurologi->g459_l_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->neurologi->g459_p_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->neurologi->g459_l_lama + $dataPuskesmas->neurologi->g459_p_lama }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">16</td>
        <td class="column10">Vertigo</td>
        <td class="column5">R42</td>
        <td class="column5">{{ $dataPuskesmas->neurologi->r42_7hari }}</td>
        <td class="column5">{{ $dataPuskesmas->neurologi->r42_28hari }}</td>
        <td class="column5">{{ $dataPuskesmas->neurologi->r42_11bulan }}</td>
        <td class="column5">{{ $dataPuskesmas->neurologi->r42_4tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->neurologi->r42_9tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->neurologi->r42_14tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->neurologi->r42_19tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->neurologi->r42_44tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->neurologi->r42_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->neurologi->r42_lebih_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->neurologi->r42_l }}</td>
        <td class="column5">{{ $dataPuskesmas->neurologi->r42_p }}</td>
        <td class="column5">{{ $dataPuskesmas->neurologi->r42_7hari + $dataPuskesmas->neurologi->r42_28hari + $dataPuskesmas->neurologi->r42_11bulan + $dataPuskesmas->neurologi->r42_4tahun + $dataPuskesmas->neurologi->r42_9tahun + $dataPuskesmas->neurologi->r42_14tahun + $dataPuskesmas->neurologi->r42_19tahun + $dataPuskesmas->neurologi->r42_44tahun + $dataPuskesmas->neurologi->r42_59tahun + $dataPuskesmas->neurologi->r42_lebih_59tahun + $dataPuskesmas->neurologi->r42_l + $dataPuskesmas->neurologi->r42_p  }}</td>
        <td class="column5">{{ $dataPuskesmas->neurologi->r42_l_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->neurologi->r42_p_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->neurologi->r42_l_lama + $dataPuskesmas->neurologi->r42_p_lama }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">I</td>
        <td class="column10">PSIKIATRI</td>
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
        <td class="column10">Demensia</td>
        <td class="column5">F03</td>
        <td class="column5">{{ $dataPuskesmas->psikiatri->f03_7hari }}</td>
        <td class="column5">{{ $dataPuskesmas->psikiatri->f03_28hari }}</td>
        <td class="column5">{{ $dataPuskesmas->psikiatri->f03_11bulan }}</td>
        <td class="column5">{{ $dataPuskesmas->psikiatri->f03_4tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->psikiatri->f03_9tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->psikiatri->f03_14tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->psikiatri->f03_19tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->psikiatri->f03_44tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->psikiatri->f03_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->psikiatri->f03_lebih_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->psikiatri->f03_l }}</td>
        <td class="column5">{{ $dataPuskesmas->psikiatri->f03_p }}</td>
        <td class="column5">{{ $dataPuskesmas->psikiatri->f03_7hari + $dataPuskesmas->psikiatri->f03_28hari + $dataPuskesmas->psikiatri->f03_11bulan + $dataPuskesmas->psikiatri->f03_4tahun + $dataPuskesmas->psikiatri->f03_9tahun + $dataPuskesmas->psikiatri->f03_14tahun + $dataPuskesmas->psikiatri->f03_19tahun + $dataPuskesmas->psikiatri->f03_44tahun + $dataPuskesmas->psikiatri->f03_59tahun + $dataPuskesmas->psikiatri->f03_lebih_59tahun + $dataPuskesmas->psikiatri->f03_l + $dataPuskesmas->psikiatri->f03_p  }}</td>
        <td class="column5">{{ $dataPuskesmas->psikiatri->f03_l_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->psikiatri->f03_p_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->psikiatri->f03_l_lama + $dataPuskesmas->psikiatri->f03_p_lama }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">2</td>
        <td class="column10">Gangguan anxietas</td>
        <td class="column5">F40#</td>
        <td class="column5">{{ $dataPuskesmas->psikiatri->f40_7hari }}</td>
        <td class="column5">{{ $dataPuskesmas->psikiatri->f40_28hari }}</td>
        <td class="column5">{{ $dataPuskesmas->psikiatri->f40_11bulan }}</td>
        <td class="column5">{{ $dataPuskesmas->psikiatri->f40_4tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->psikiatri->f40_9tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->psikiatri->f40_14tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->psikiatri->f40_19tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->psikiatri->f40_44tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->psikiatri->f40_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->psikiatri->f40_lebih_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->psikiatri->f40_l }}</td>
        <td class="column5">{{ $dataPuskesmas->psikiatri->f40_p }}</td>
        <td class="column5">{{ $dataPuskesmas->psikiatri->f40_7hari + $dataPuskesmas->psikiatri->f40_28hari + $dataPuskesmas->psikiatri->f40_11bulan + $dataPuskesmas->psikiatri->f40_4tahun + $dataPuskesmas->psikiatri->f40_9tahun + $dataPuskesmas->psikiatri->f40_14tahun + $dataPuskesmas->psikiatri->f40_19tahun + $dataPuskesmas->psikiatri->f40_44tahun + $dataPuskesmas->psikiatri->f40_59tahun + $dataPuskesmas->psikiatri->f40_lebih_59tahun + $dataPuskesmas->psikiatri->f40_l + $dataPuskesmas->psikiatri->f40_p  }}</td>
        <td class="column5">{{ $dataPuskesmas->psikiatri->f40_l_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->psikiatri->f40_p_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->psikiatri->f40_l_lama + $dataPuskesmas->psikiatri->f40_p_lama }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">3</td>
        <td class="column10">Gangguan campuran anxietas dan depresi</td>
        <td class="column5">F41.2</td>
        <td class="column5">{{ $dataPuskesmas->psikiatri->f412_7hari }}</td>
        <td class="column5">{{ $dataPuskesmas->psikiatri->f412_28hari }}</td>
        <td class="column5">{{ $dataPuskesmas->psikiatri->f412_11bulan }}</td>
        <td class="column5">{{ $dataPuskesmas->psikiatri->f412_4tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->psikiatri->f412_9tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->psikiatri->f412_14tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->psikiatri->f412_19tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->psikiatri->f412_44tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->psikiatri->f412_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->psikiatri->f412_lebih_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->psikiatri->f412_l }}</td>
        <td class="column5">{{ $dataPuskesmas->psikiatri->f412_p }}</td>
        <td class="column5">{{ $dataPuskesmas->psikiatri->f412_7hari + $dataPuskesmas->psikiatri->f412_28hari + $dataPuskesmas->psikiatri->f412_11bulan + $dataPuskesmas->psikiatri->f412_4tahun + $dataPuskesmas->psikiatri->f412_9tahun + $dataPuskesmas->psikiatri->f412_14tahun + $dataPuskesmas->psikiatri->f412_19tahun + $dataPuskesmas->psikiatri->f412_44tahun + $dataPuskesmas->psikiatri->f412_59tahun + $dataPuskesmas->psikiatri->f412_lebih_59tahun + $dataPuskesmas->psikiatri->f412_l + $dataPuskesmas->psikiatri->f412_p  }}</td>
        <td class="column5">{{ $dataPuskesmas->psikiatri->f412_l_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->psikiatri->f412_p_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->psikiatri->f412_l_lama + $dataPuskesmas->psikiatri->f412_p_lama }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">4</td>
        <td class="column10">Gangguan depresi</td>
        <td class="column5">F33</td>
        <td class="column5">{{ $dataPuskesmas->psikiatri->f33_7hari }}</td>
        <td class="column5">{{ $dataPuskesmas->psikiatri->f33_28hari }}</td>
        <td class="column5">{{ $dataPuskesmas->psikiatri->f33_11bulan }}</td>
        <td class="column5">{{ $dataPuskesmas->psikiatri->f33_4tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->psikiatri->f33_9tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->psikiatri->f33_14tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->psikiatri->f33_19tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->psikiatri->f33_44tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->psikiatri->f33_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->psikiatri->f33_lebih_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->psikiatri->f33_l }}</td>
        <td class="column5">{{ $dataPuskesmas->psikiatri->f33_p }}</td>
        <td class="column5">{{ $dataPuskesmas->psikiatri->f33_7hari + $dataPuskesmas->psikiatri->f33_28hari + $dataPuskesmas->psikiatri->f33_11bulan + $dataPuskesmas->psikiatri->f33_4tahun + $dataPuskesmas->psikiatri->f33_9tahun + $dataPuskesmas->psikiatri->f33_14tahun + $dataPuskesmas->psikiatri->f33_19tahun + $dataPuskesmas->psikiatri->f33_44tahun + $dataPuskesmas->psikiatri->f33_59tahun + $dataPuskesmas->psikiatri->f33_lebih_59tahun + $dataPuskesmas->psikiatri->f33_l + $dataPuskesmas->psikiatri->f33_p  }}</td>
        <td class="column5">{{ $dataPuskesmas->psikiatri->f33_l_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->psikiatri->f33_p_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->psikiatri->f33_l_lama + $dataPuskesmas->psikiatri->f33_p_lama }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">5</td>
        <td class="column10">Gangguan penggunaan napza</td>
        <td class="column5">F10#</td>
        <td class="column5">{{ $dataPuskesmas->psikiatri->f10_7hari }}</td>
        <td class="column5">{{ $dataPuskesmas->psikiatri->f10_28hari }}</td>
        <td class="column5">{{ $dataPuskesmas->psikiatri->f10_11bulan }}</td>
        <td class="column5">{{ $dataPuskesmas->psikiatri->f10_4tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->psikiatri->f10_9tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->psikiatri->f10_14tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->psikiatri->f10_19tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->psikiatri->f10_44tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->psikiatri->f10_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->psikiatri->f10_lebih_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->psikiatri->f10_l }}</td>
        <td class="column5">{{ $dataPuskesmas->psikiatri->f10_p }}</td>
        <td class="column5">{{ $dataPuskesmas->psikiatri->f10_7hari + $dataPuskesmas->psikiatri->f10_28hari + $dataPuskesmas->psikiatri->f10_11bulan + $dataPuskesmas->psikiatri->f10_4tahun + $dataPuskesmas->psikiatri->f10_9tahun + $dataPuskesmas->psikiatri->f10_14tahun + $dataPuskesmas->psikiatri->f10_19tahun + $dataPuskesmas->psikiatri->f10_44tahun + $dataPuskesmas->psikiatri->f10_59tahun + $dataPuskesmas->psikiatri->f10_lebih_59tahun + $dataPuskesmas->psikiatri->f10_l + $dataPuskesmas->psikiatri->f10_p  }}</td>
        <td class="column5">{{ $dataPuskesmas->psikiatri->f10_l_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->psikiatri->f10_p_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->psikiatri->f10_l_lama + $dataPuskesmas->psikiatri->f10_p_lama }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">6</td>
        <td class="column10">Gangguan perkembangan dan perilaku pada anak dan remaja</td>
        <td class="column5">F80-90#</td>
        <td class="column5">{{ $dataPuskesmas->psikiatri->f8090_7hari }}</td>
        <td class="column5">{{ $dataPuskesmas->psikiatri->f8090_28hari }}</td>
        <td class="column5">{{ $dataPuskesmas->psikiatri->f8090_11bulan }}</td>
        <td class="column5">{{ $dataPuskesmas->psikiatri->f8090_4tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->psikiatri->f8090_9tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->psikiatri->f8090_14tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->psikiatri->f8090_19tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->psikiatri->f8090_44tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->psikiatri->f8090_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->psikiatri->f8090_lebih_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->psikiatri->f8090_l }}</td>
        <td class="column5">{{ $dataPuskesmas->psikiatri->f8090_p }}</td>
        <td class="column5">{{ $dataPuskesmas->psikiatri->f8090_7hari + $dataPuskesmas->psikiatri->f8090_28hari + $dataPuskesmas->psikiatri->f8090_11bulan + $dataPuskesmas->psikiatri->f8090_4tahun + $dataPuskesmas->psikiatri->f8090_9tahun + $dataPuskesmas->psikiatri->f8090_14tahun + $dataPuskesmas->psikiatri->f8090_19tahun + $dataPuskesmas->psikiatri->f8090_44tahun + $dataPuskesmas->psikiatri->f8090_59tahun + $dataPuskesmas->psikiatri->f8090_lebih_59tahun + $dataPuskesmas->psikiatri->f8090_l + $dataPuskesmas->psikiatri->f8090_p  }}</td>
        <td class="column5">{{ $dataPuskesmas->psikiatri->f8090_l_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->psikiatri->f8090_p_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->psikiatri->f8090_l_lama + $dataPuskesmas->psikiatri->f8090_p_lama }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">7</td>
        <td class="column10">Gangguan psikotik</td>
        <td class="column5">F20#</td>
        <td class="column5">{{ $dataPuskesmas->psikiatri->f20_7hari }}</td>
        <td class="column5">{{ $dataPuskesmas->psikiatri->f20_28hari }}</td>
        <td class="column5">{{ $dataPuskesmas->psikiatri->f20_11bulan }}</td>
        <td class="column5">{{ $dataPuskesmas->psikiatri->f20_4tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->psikiatri->f20_9tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->psikiatri->f20_14tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->psikiatri->f20_19tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->psikiatri->f20_44tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->psikiatri->f20_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->psikiatri->f20_lebih_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->psikiatri->f20_l }}</td>
        <td class="column5">{{ $dataPuskesmas->psikiatri->f20_p }}</td>
        <td class="column5">{{ $dataPuskesmas->psikiatri->f20_7hari + $dataPuskesmas->psikiatri->f20_28hari + $dataPuskesmas->psikiatri->f20_11bulan + $dataPuskesmas->psikiatri->f20_4tahun + $dataPuskesmas->psikiatri->f20_9tahun + $dataPuskesmas->psikiatri->f20_14tahun + $dataPuskesmas->psikiatri->f20_19tahun + $dataPuskesmas->psikiatri->f20_44tahun + $dataPuskesmas->psikiatri->f20_59tahun + $dataPuskesmas->psikiatri->f20_lebih_59tahun + $dataPuskesmas->psikiatri->f20_l + $dataPuskesmas->psikiatri->f20_p  }}</td>
        <td class="column5">{{ $dataPuskesmas->psikiatri->f20_l_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->psikiatri->f20_p_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->psikiatri->f20_l_lama + $dataPuskesmas->psikiatri->f20_p_lama }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">8</td>
        <td class="column10">Gangguan somatoform </td>
        <td class="column5">F45</td>
        <td class="column5">{{ $dataPuskesmas->psikiatri->f45_7hari }}</td>
        <td class="column5">{{ $dataPuskesmas->psikiatri->f45_28hari }}</td>
        <td class="column5">{{ $dataPuskesmas->psikiatri->f45_11bulan }}</td>
        <td class="column5">{{ $dataPuskesmas->psikiatri->f45_4tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->psikiatri->f45_9tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->psikiatri->f45_14tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->psikiatri->f45_19tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->psikiatri->f45_44tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->psikiatri->f45_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->psikiatri->f45_lebih_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->psikiatri->f45_l }}</td>
        <td class="column5">{{ $dataPuskesmas->psikiatri->f45_p }}</td>
        <td class="column5">{{ $dataPuskesmas->psikiatri->f45_7hari + $dataPuskesmas->psikiatri->f45_28hari + $dataPuskesmas->psikiatri->f45_11bulan + $dataPuskesmas->psikiatri->f45_4tahun + $dataPuskesmas->psikiatri->f45_9tahun + $dataPuskesmas->psikiatri->f45_14tahun + $dataPuskesmas->psikiatri->f45_19tahun + $dataPuskesmas->psikiatri->f45_44tahun + $dataPuskesmas->psikiatri->f45_59tahun + $dataPuskesmas->psikiatri->f45_lebih_59tahun + $dataPuskesmas->psikiatri->f45_l + $dataPuskesmas->psikiatri->f45_p  }}</td>
        <td class="column5">{{ $dataPuskesmas->psikiatri->f45_l_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->psikiatri->f45_p_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->psikiatri->f45_l_lama + $dataPuskesmas->psikiatri->f45_p_lama }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">9</td>
        <td class="column10">Insomnia</td>
        <td class="column5">F51.0</td>
        <td class="column5">{{ $dataPuskesmas->psikiatri->f510_7hari }}</td>
        <td class="column5">{{ $dataPuskesmas->psikiatri->f510_28hari }}</td>
        <td class="column5">{{ $dataPuskesmas->psikiatri->f510_11bulan }}</td>
        <td class="column5">{{ $dataPuskesmas->psikiatri->f510_4tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->psikiatri->f510_9tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->psikiatri->f510_14tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->psikiatri->f510_19tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->psikiatri->f510_44tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->psikiatri->f510_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->psikiatri->f510_lebih_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->psikiatri->f510_l }}</td>
        <td class="column5">{{ $dataPuskesmas->psikiatri->f510_p }}</td>
        <td class="column5">{{ $dataPuskesmas->psikiatri->f510_7hari + $dataPuskesmas->psikiatri->f510_28hari + $dataPuskesmas->psikiatri->f510_11bulan + $dataPuskesmas->psikiatri->f510_4tahun + $dataPuskesmas->psikiatri->f510_9tahun + $dataPuskesmas->psikiatri->f510_14tahun + $dataPuskesmas->psikiatri->f510_19tahun + $dataPuskesmas->psikiatri->f510_44tahun + $dataPuskesmas->psikiatri->f510_59tahun + $dataPuskesmas->psikiatri->f510_lebih_59tahun + $dataPuskesmas->psikiatri->f510_l + $dataPuskesmas->psikiatri->f510_p  }}</td>
        <td class="column5">{{ $dataPuskesmas->psikiatri->f510_l_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->psikiatri->f510_p_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->psikiatri->f510_l_lama + $dataPuskesmas->psikiatri->f510_p_lama }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">J</td>
        <td class="column10">RESPIRASI</td>
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
        <td class="column10">Asma bronkial</td>
        <td class="column5">J45</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j45_7hari }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j45_28hari }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j45_11bulan }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j45_4tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j45_9tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j45_14tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j45_19tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j45_44tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j45_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j45_lebih_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j45_l }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j45_p }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j45_7hari + $dataPuskesmas->respirasi->j45_28hari + $dataPuskesmas->respirasi->j45_11bulan + $dataPuskesmas->respirasi->j45_4tahun + $dataPuskesmas->respirasi->j45_9tahun + $dataPuskesmas->respirasi->j45_14tahun + $dataPuskesmas->respirasi->j45_19tahun + $dataPuskesmas->respirasi->j45_44tahun + $dataPuskesmas->respirasi->j45_59tahun + $dataPuskesmas->respirasi->j45_lebih_59tahun + $dataPuskesmas->respirasi->j45_l + $dataPuskesmas->respirasi->j45_p  }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j45_l_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j45_p_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j45_l_lama + $dataPuskesmas->respirasi->j45_p_lama }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">2</td>
        <td class="column10">Asfiksia</td>
        <td class="column5">R.09.0</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->r090_7hari }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->r090_28hari }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->r090_11bulan }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->r090_4tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->r090_9tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->r090_14tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->r090_19tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->r090_44tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->r090_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->r090_lebih_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->r090_l }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->r090_p }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->r090_7hari + $dataPuskesmas->respirasi->r090_28hari + $dataPuskesmas->respirasi->r090_11bulan + $dataPuskesmas->respirasi->r090_4tahun + $dataPuskesmas->respirasi->r090_9tahun + $dataPuskesmas->respirasi->r090_14tahun + $dataPuskesmas->respirasi->r090_19tahun + $dataPuskesmas->respirasi->r090_44tahun + $dataPuskesmas->respirasi->r090_59tahun + $dataPuskesmas->respirasi->r090_lebih_59tahun + $dataPuskesmas->respirasi->r090_l + $dataPuskesmas->respirasi->r090_p  }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->r090_l_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->r090_p_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->r090_l_lama + $dataPuskesmas->respirasi->r090_p_lama }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">3</td>
        <td class="column10">Benda asing di hidung</td>
        <td class="column5">T17.1</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->t171_7hari }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->t171_28hari }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->t171_11bulan }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->t171_4tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->t171_9tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->t171_14tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->t171_19tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->t171_44tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->t171_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->t171_lebih_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->t171_l }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->t171_p }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->t171_7hari + $dataPuskesmas->respirasi->t171_28hari + $dataPuskesmas->respirasi->t171_11bulan + $dataPuskesmas->respirasi->t171_4tahun + $dataPuskesmas->respirasi->t171_9tahun + $dataPuskesmas->respirasi->t171_14tahun + $dataPuskesmas->respirasi->t171_19tahun + $dataPuskesmas->respirasi->t171_44tahun + $dataPuskesmas->respirasi->t171_59tahun + $dataPuskesmas->respirasi->t171_lebih_59tahun + $dataPuskesmas->respirasi->t171_l + $dataPuskesmas->respirasi->t171_p  }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->t171_l_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->t171_p_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->t171_l_lama + $dataPuskesmas->respirasi->t171_p_lama }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">4</td>
        <td class="column10">Bronkitis akut (usia < 15 tahun)</td>
        <td class="column5">J20.9</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j209_7hari }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j209_28hari }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j209_11bulan }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j209_4tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j209_9tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j209_14tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j209_19tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j209_44tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j209_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j209_lebih_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j209_l }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j209_p }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j209_7hari + $dataPuskesmas->respirasi->j209_28hari + $dataPuskesmas->respirasi->j209_11bulan + $dataPuskesmas->respirasi->j209_4tahun + $dataPuskesmas->respirasi->j209_9tahun + $dataPuskesmas->respirasi->j209_14tahun + $dataPuskesmas->respirasi->j209_19tahun + $dataPuskesmas->respirasi->j209_44tahun + $dataPuskesmas->respirasi->j209_59tahun + $dataPuskesmas->respirasi->j209_lebih_59tahun + $dataPuskesmas->respirasi->j209_l + $dataPuskesmas->respirasi->j209_p  }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j209_l_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j209_p_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j209_l_lama + $dataPuskesmas->respirasi->j209_p_lama }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">5</td>
        <td class="column10">Bronkitis akut (usia > 15 tahun)</td>
        <td class="column5">J40</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j40_7hari }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j40_28hari }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j40_11bulan }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j40_4tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j40_9tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j40_14tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j40_19tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j40_44tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j40_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j40_lebih_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j40_l }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j40_p }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j40_7hari + $dataPuskesmas->respirasi->j40_28hari + $dataPuskesmas->respirasi->j40_11bulan + $dataPuskesmas->respirasi->j40_4tahun + $dataPuskesmas->respirasi->j40_9tahun + $dataPuskesmas->respirasi->j40_14tahun + $dataPuskesmas->respirasi->j40_19tahun + $dataPuskesmas->respirasi->j40_44tahun + $dataPuskesmas->respirasi->j40_59tahun + $dataPuskesmas->respirasi->j40_lebih_59tahun + $dataPuskesmas->respirasi->j40_l + $dataPuskesmas->respirasi->j40_p  }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j40_l_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j40_p_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j40_l_lama + $dataPuskesmas->respirasi->j40_p_lama }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">6</td>
        <td class="column10">Difteria</td>
        <td class="column5">A36.9</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->a369_7hari }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->a369_28hari }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->a369_11bulan }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->a369_4tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->a369_9tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->a369_14tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->a369_19tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->a369_44tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->a369_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->a369_lebih_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->a369_l }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->a369_p }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->a369_7hari + $dataPuskesmas->respirasi->a369_28hari + $dataPuskesmas->respirasi->a369_11bulan + $dataPuskesmas->respirasi->a369_4tahun + $dataPuskesmas->respirasi->a369_9tahun + $dataPuskesmas->respirasi->a369_14tahun + $dataPuskesmas->respirasi->a369_19tahun + $dataPuskesmas->respirasi->a369_44tahun + $dataPuskesmas->respirasi->a369_59tahun + $dataPuskesmas->respirasi->a369_lebih_59tahun + $dataPuskesmas->respirasi->a369_l + $dataPuskesmas->respirasi->a369_p  }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->a369_l_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->a369_p_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->a369_l_lama + $dataPuskesmas->respirasi->a369_p_lama }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">7</td>
        <td class="column10">Epistaksis</td>
        <td class="column5">R04.0</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->r040_7hari }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->r040_28hari }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->r040_11bulan }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->r040_4tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->r040_9tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->r040_14tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->r040_19tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->r040_44tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->r040_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->r040_lebih_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->r040_l }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->r040_p }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->r040_7hari + $dataPuskesmas->respirasi->r040_28hari + $dataPuskesmas->respirasi->r040_11bulan + $dataPuskesmas->respirasi->r040_4tahun + $dataPuskesmas->respirasi->r040_9tahun + $dataPuskesmas->respirasi->r040_14tahun + $dataPuskesmas->respirasi->r040_19tahun + $dataPuskesmas->respirasi->r040_44tahun + $dataPuskesmas->respirasi->r040_59tahun + $dataPuskesmas->respirasi->r040_lebih_59tahun + $dataPuskesmas->respirasi->r040_l + $dataPuskesmas->respirasi->r040_p  }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->r040_l_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->r040_p_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->r040_l_lama + $dataPuskesmas->respirasi->r040_p_lama }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">8</td>
        <td class="column10">Faringitis akut</td>
        <td class="column5">J02.9</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j029_7hari }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j029_28hari }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j029_11bulan }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j029_4tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j029_9tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j029_14tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j029_19tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j029_44tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j029_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j029_lebih_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j029_l }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j029_p }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j029_7hari + $dataPuskesmas->respirasi->j029_28hari + $dataPuskesmas->respirasi->j029_11bulan + $dataPuskesmas->respirasi->j029_4tahun + $dataPuskesmas->respirasi->j029_9tahun + $dataPuskesmas->respirasi->j029_14tahun + $dataPuskesmas->respirasi->j029_19tahun + $dataPuskesmas->respirasi->j029_44tahun + $dataPuskesmas->respirasi->j029_59tahun + $dataPuskesmas->respirasi->j029_lebih_59tahun + $dataPuskesmas->respirasi->j029_l + $dataPuskesmas->respirasi->j029_p  }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j029_l_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j029_p_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j029_l_lama + $dataPuskesmas->respirasi->j029_p_lama }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">9</td>
        <td class="column10">Furunkel pada hidung</td>
        <td class="column5">J34.0</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j340_7hari }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j340_28hari }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j340_11bulan }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j340_4tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j340_9tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j340_14tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j340_19tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j340_44tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j340_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j340_lebih_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j340_l }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j340_p }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j340_7hari + $dataPuskesmas->respirasi->j340_28hari + $dataPuskesmas->respirasi->j340_11bulan + $dataPuskesmas->respirasi->j340_4tahun + $dataPuskesmas->respirasi->j340_9tahun + $dataPuskesmas->respirasi->j340_14tahun + $dataPuskesmas->respirasi->j340_19tahun + $dataPuskesmas->respirasi->j340_44tahun + $dataPuskesmas->respirasi->j340_59tahun + $dataPuskesmas->respirasi->j340_lebih_59tahun + $dataPuskesmas->respirasi->j340_l + $dataPuskesmas->respirasi->j340_p  }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j340_l_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j340_p_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j340_l_lama + $dataPuskesmas->respirasi->j340_p_lama }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">10</td>
        <td class="column10">Influenza</td>
        <td class="column5">J11</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j11_7hari }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j11_28hari }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j11_11bulan }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j11_4tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j11_9tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j11_14tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j11_19tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j11_44tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j11_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j11_lebih_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j11_l }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j11_p }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j11_7hari + $dataPuskesmas->respirasi->j11_28hari + $dataPuskesmas->respirasi->j11_11bulan + $dataPuskesmas->respirasi->j11_4tahun + $dataPuskesmas->respirasi->j11_9tahun + $dataPuskesmas->respirasi->j11_14tahun + $dataPuskesmas->respirasi->j11_19tahun + $dataPuskesmas->respirasi->j11_44tahun + $dataPuskesmas->respirasi->j11_59tahun + $dataPuskesmas->respirasi->j11_lebih_59tahun + $dataPuskesmas->respirasi->j11_l + $dataPuskesmas->respirasi->j11_p  }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j11_l_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j11_p_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j11_l_lama + $dataPuskesmas->respirasi->j11_p_lama }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">11</td>
        <td class="column10">Kanker nasofaring</td>
        <td class="column5">C11.9</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->c119_7hari }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->c119_28hari }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->c119_11bulan }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->c119_4tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->c119_9tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->c119_14tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->c119_19tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->c119_44tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->c119_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->c119_lebih_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->c119_l }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->c119_p }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->c119_7hari + $dataPuskesmas->respirasi->c119_28hari + $dataPuskesmas->respirasi->c119_11bulan + $dataPuskesmas->respirasi->c119_4tahun + $dataPuskesmas->respirasi->c119_9tahun + $dataPuskesmas->respirasi->c119_14tahun + $dataPuskesmas->respirasi->c119_19tahun + $dataPuskesmas->respirasi->c119_44tahun + $dataPuskesmas->respirasi->c119_59tahun + $dataPuskesmas->respirasi->c119_lebih_59tahun + $dataPuskesmas->respirasi->c119_l + $dataPuskesmas->respirasi->c119_p  }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->c119_l_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->c119_p_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->c119_l_lama + $dataPuskesmas->respirasi->c119_p_lama }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">11</td>
        <td class="column10">Kanker paru</td>
        <td class="column5">C34.9</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->c349_7hari }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->c349_28hari }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->c349_11bulan }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->c349_4tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->c349_9tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->c349_14tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->c349_19tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->c349_44tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->c349_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->c349_lebih_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->c349_l }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->c349_p }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->c349_7hari + $dataPuskesmas->respirasi->c349_28hari + $dataPuskesmas->respirasi->c349_11bulan + $dataPuskesmas->respirasi->c349_4tahun + $dataPuskesmas->respirasi->c349_9tahun + $dataPuskesmas->respirasi->c349_14tahun + $dataPuskesmas->respirasi->c349_19tahun + $dataPuskesmas->respirasi->c349_44tahun + $dataPuskesmas->respirasi->c349_59tahun + $dataPuskesmas->respirasi->c349_lebih_59tahun + $dataPuskesmas->respirasi->c349_l + $dataPuskesmas->respirasi->c349_p  }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->c349_l_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->c349_p_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->c349_l_lama + $dataPuskesmas->respirasi->c349_p_lama }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter"></td>
        <td class="column10">Laringitis akut</td>
        <td class="column5">J04.0</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j040_7hari }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j040_28hari }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j040_11bulan }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j040_4tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j040_9tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j040_14tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j040_19tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j040_44tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j040_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j040_lebih_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j040_l }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j040_p }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j040_7hari + $dataPuskesmas->respirasi->j040_28hari + $dataPuskesmas->respirasi->j040_11bulan + $dataPuskesmas->respirasi->j040_4tahun + $dataPuskesmas->respirasi->j040_9tahun + $dataPuskesmas->respirasi->j040_14tahun + $dataPuskesmas->respirasi->j040_19tahun + $dataPuskesmas->respirasi->j040_44tahun + $dataPuskesmas->respirasi->j040_59tahun + $dataPuskesmas->respirasi->j040_lebih_59tahun + $dataPuskesmas->respirasi->j040_l + $dataPuskesmas->respirasi->j040_p  }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j040_l_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j040_p_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j040_l_lama + $dataPuskesmas->respirasi->j040_p_lama }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">14</td>
        <td class="column10">Penyakit paru obstruktif kronis</td>
        <td class="column5">J44.9</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j449_7hari }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j449_28hari }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j449_11bulan }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j449_4tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j449_9tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j449_14tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j449_19tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j449_44tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j449_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j449_lebih_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j449_l }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j449_p }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j449_7hari + $dataPuskesmas->respirasi->j449_28hari + $dataPuskesmas->respirasi->j449_11bulan + $dataPuskesmas->respirasi->j449_4tahun + $dataPuskesmas->respirasi->j449_9tahun + $dataPuskesmas->respirasi->j449_14tahun + $dataPuskesmas->respirasi->j449_19tahun + $dataPuskesmas->respirasi->j449_44tahun + $dataPuskesmas->respirasi->j449_59tahun + $dataPuskesmas->respirasi->j449_lebih_59tahun + $dataPuskesmas->respirasi->j449_l + $dataPuskesmas->respirasi->j449_p  }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j449_l_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j449_p_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j449_l_lama + $dataPuskesmas->respirasi->j449_p_lama }}</td>
      </tr> 
      <tr>
        <td class="column5 textCenter">15</td>
        <td class="column10">Pertusis (batuk rejan)</td>
        <td class="column5">A37.9</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->a379_7hari }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->a379_28hari }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->a379_11bulan }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->a379_4tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->a379_9tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->a379_14tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->a379_19tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->a379_44tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->a379_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->a379_lebih_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->a379_l }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->a379_p }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->a379_7hari + $dataPuskesmas->respirasi->a379_28hari + $dataPuskesmas->respirasi->a379_11bulan + $dataPuskesmas->respirasi->a379_4tahun + $dataPuskesmas->respirasi->a379_9tahun + $dataPuskesmas->respirasi->a379_14tahun + $dataPuskesmas->respirasi->a379_19tahun + $dataPuskesmas->respirasi->a379_44tahun + $dataPuskesmas->respirasi->a379_59tahun + $dataPuskesmas->respirasi->a379_lebih_59tahun + $dataPuskesmas->respirasi->a379_l + $dataPuskesmas->respirasi->a379_p  }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->a379_l_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->a379_p_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->a379_l_lama + $dataPuskesmas->respirasi->a379_p_lama }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">16</td>
        <td class="column10">Pneumonia aspirasi</td>
        <td class="column5">J69.0</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j690_7hari }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j690_28hari }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j690_11bulan }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j690_4tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j690_9tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j690_14tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j690_19tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j690_44tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j690_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j690_lebih_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j690_l }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j690_p }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j690_7hari + $dataPuskesmas->respirasi->j690_28hari + $dataPuskesmas->respirasi->j690_11bulan + $dataPuskesmas->respirasi->j690_4tahun + $dataPuskesmas->respirasi->j690_9tahun + $dataPuskesmas->respirasi->j690_14tahun + $dataPuskesmas->respirasi->j690_19tahun + $dataPuskesmas->respirasi->j690_44tahun + $dataPuskesmas->respirasi->j690_59tahun + $dataPuskesmas->respirasi->j690_lebih_59tahun + $dataPuskesmas->respirasi->j690_l + $dataPuskesmas->respirasi->j690_p  }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j690_l_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j690_p_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j690_l_lama + $dataPuskesmas->respirasi->j690_p_lama }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">17</td>
        <td class="column10">Pneumonia</td>
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
        <td class="column5 textCenter"></td>
        <td class="column10">a. Bronkopneumonia</td>
        <td class="column5">J18.0</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j180_7hari }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j180_28hari }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j180_11bulan }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j180_4tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j180_9tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j180_14tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j180_19tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j180_44tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j180_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j180_lebih_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j180_l }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j180_p }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j180_7hari + $dataPuskesmas->respirasi->j180_28hari + $dataPuskesmas->respirasi->j180_11bulan + $dataPuskesmas->respirasi->j180_4tahun + $dataPuskesmas->respirasi->j180_9tahun + $dataPuskesmas->respirasi->j180_14tahun + $dataPuskesmas->respirasi->j180_19tahun + $dataPuskesmas->respirasi->j180_44tahun + $dataPuskesmas->respirasi->j180_59tahun + $dataPuskesmas->respirasi->j180_lebih_59tahun + $dataPuskesmas->respirasi->j180_l + $dataPuskesmas->respirasi->j180_p  }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j180_l_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j180_p_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j180_l_lama + $dataPuskesmas->respirasi->j180_p_lama }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter"></td>
        <td class="column10">b. Pneumonia</td>
        <td class="column5">J18.9</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j189_7hari }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j189_28hari }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j189_11bulan }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j189_4tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j189_9tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j189_14tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j189_19tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j189_44tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j189_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j189_lebih_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j189_l }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j189_p }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j189_7hari + $dataPuskesmas->respirasi->j189_28hari + $dataPuskesmas->respirasi->j189_11bulan + $dataPuskesmas->respirasi->j189_4tahun + $dataPuskesmas->respirasi->j189_9tahun + $dataPuskesmas->respirasi->j189_14tahun + $dataPuskesmas->respirasi->j189_19tahun + $dataPuskesmas->respirasi->j189_44tahun + $dataPuskesmas->respirasi->j189_59tahun + $dataPuskesmas->respirasi->j189_lebih_59tahun + $dataPuskesmas->respirasi->j189_l + $dataPuskesmas->respirasi->j189_p  }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j189_l_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j189_p_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j189_l_lama + $dataPuskesmas->respirasi->j189_p_lama }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">18</td>
        <td class="column10">Pneumotoraks</td>
        <td class="column5">J93.9</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j939_7hari }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j939_28hari }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j939_11bulan }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j939_4tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j939_9tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j939_14tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j939_19tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j939_44tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j939_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j939_lebih_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j939_l }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j939_p }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j939_7hari + $dataPuskesmas->respirasi->j939_28hari + $dataPuskesmas->respirasi->j939_11bulan + $dataPuskesmas->respirasi->j939_4tahun + $dataPuskesmas->respirasi->j939_9tahun + $dataPuskesmas->respirasi->j939_14tahun + $dataPuskesmas->respirasi->j939_19tahun + $dataPuskesmas->respirasi->j939_44tahun + $dataPuskesmas->respirasi->j939_59tahun + $dataPuskesmas->respirasi->j939_lebih_59tahun + $dataPuskesmas->respirasi->j939_l + $dataPuskesmas->respirasi->j939_p  }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j939_l_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j939_p_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j939_l_lama + $dataPuskesmas->respirasi->j939_p_lama }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">19</td>
        <td class="column10">Rinitis akut</td>
        <td class="column5">J00</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j00_7hari }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j00_28hari }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j00_11bulan }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j00_4tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j00_9tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j00_14tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j00_19tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j00_44tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j00_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j00_lebih_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j00_l }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j00_p }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j00_7hari + $dataPuskesmas->respirasi->j00_28hari + $dataPuskesmas->respirasi->j00_11bulan + $dataPuskesmas->respirasi->j00_4tahun + $dataPuskesmas->respirasi->j00_9tahun + $dataPuskesmas->respirasi->j00_14tahun + $dataPuskesmas->respirasi->j00_19tahun + $dataPuskesmas->respirasi->j00_44tahun + $dataPuskesmas->respirasi->j00_59tahun + $dataPuskesmas->respirasi->j00_lebih_59tahun + $dataPuskesmas->respirasi->j00_l + $dataPuskesmas->respirasi->j00_p  }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j00_l_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j00_p_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j00_l_lama + $dataPuskesmas->respirasi->j00_p_lama }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">20</td>
        <td class="column10">Rinitis alergi</td>
        <td class="column5">J30.4</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j304_7hari }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j304_28hari }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j304_11bulan }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j304_4tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j304_9tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j304_14tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j304_19tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j304_44tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j304_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j304_lebih_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j304_l }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j304_p }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j304_7hari + $dataPuskesmas->respirasi->j304_28hari + $dataPuskesmas->respirasi->j304_11bulan + $dataPuskesmas->respirasi->j304_4tahun + $dataPuskesmas->respirasi->j304_9tahun + $dataPuskesmas->respirasi->j304_14tahun + $dataPuskesmas->respirasi->j304_19tahun + $dataPuskesmas->respirasi->j304_44tahun + $dataPuskesmas->respirasi->j304_59tahun + $dataPuskesmas->respirasi->j304_lebih_59tahun + $dataPuskesmas->respirasi->j304_l + $dataPuskesmas->respirasi->j304_p  }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j304_l_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j304_p_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j304_l_lama + $dataPuskesmas->respirasi->j304_p_lama }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">21</td>
        <td class="column10">Rinitis vasomotor</td>
        <td class="column5">J30.0</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j300_7hari }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j300_28hari }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j300_11bulan }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j300_4tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j300_9tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j300_14tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j300_19tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j300_44tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j300_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j300_lebih_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j300_l }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j300_p }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j300_7hari + $dataPuskesmas->respirasi->j300_28hari + $dataPuskesmas->respirasi->j300_11bulan + $dataPuskesmas->respirasi->j300_4tahun + $dataPuskesmas->respirasi->j300_9tahun + $dataPuskesmas->respirasi->j300_14tahun + $dataPuskesmas->respirasi->j300_19tahun + $dataPuskesmas->respirasi->j300_44tahun + $dataPuskesmas->respirasi->j300_59tahun + $dataPuskesmas->respirasi->j300_lebih_59tahun + $dataPuskesmas->respirasi->j300_l + $dataPuskesmas->respirasi->j300_p  }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j300_l_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j300_p_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j300_l_lama + $dataPuskesmas->respirasi->j300_p_lama }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">22</td>
        <td class="column10">Sinusitis akut</td>
        <td class="column5">J01</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j01_7hari }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j01_28hari }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j01_11bulan }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j01_4tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j01_9tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j01_14tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j01_19tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j01_44tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j01_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j01_lebih_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j01_l }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j01_p }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j01_7hari + $dataPuskesmas->respirasi->j01_28hari + $dataPuskesmas->respirasi->j01_11bulan + $dataPuskesmas->respirasi->j01_4tahun + $dataPuskesmas->respirasi->j01_9tahun + $dataPuskesmas->respirasi->j01_14tahun + $dataPuskesmas->respirasi->j01_19tahun + $dataPuskesmas->respirasi->j01_44tahun + $dataPuskesmas->respirasi->j01_59tahun + $dataPuskesmas->respirasi->j01_lebih_59tahun + $dataPuskesmas->respirasi->j01_l + $dataPuskesmas->respirasi->j01_p  }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j01_l_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j01_p_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j01_l_lama + $dataPuskesmas->respirasi->j01_p_lama }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">23</td>
        <td class="column10">Status asmatikus</td>
        <td class="column5">J46</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j46_7hari }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j46_28hari }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j46_11bulan }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j46_4tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j46_9tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j46_14tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j46_19tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j46_44tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j46_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j46_lebih_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j46_l }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j46_p }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j46_7hari + $dataPuskesmas->respirasi->j46_28hari + $dataPuskesmas->respirasi->j46_11bulan + $dataPuskesmas->respirasi->j46_4tahun + $dataPuskesmas->respirasi->j46_9tahun + $dataPuskesmas->respirasi->j46_14tahun + $dataPuskesmas->respirasi->j46_19tahun + $dataPuskesmas->respirasi->j46_44tahun + $dataPuskesmas->respirasi->j46_59tahun + $dataPuskesmas->respirasi->j46_lebih_59tahun + $dataPuskesmas->respirasi->j46_l + $dataPuskesmas->respirasi->j46_p  }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j46_l_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j46_p_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j46_l_lama + $dataPuskesmas->respirasi->j46_p_lama }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">24</td>
        <td class="column10">Tonsilitis</td>
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
        <td class="column5 textCenter"></td>
        <td class="column10">a. Tonsilitis akut</td>
        <td class="column5">J03.9</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j039_7hari }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j039_28hari }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j039_11bulan }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j039_4tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j039_9tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j039_14tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j039_19tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j039_44tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j039_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j039_lebih_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j039_l }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j039_p }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j039_7hari + $dataPuskesmas->respirasi->j039_28hari + $dataPuskesmas->respirasi->j039_11bulan + $dataPuskesmas->respirasi->j039_4tahun + $dataPuskesmas->respirasi->j039_9tahun + $dataPuskesmas->respirasi->j039_14tahun + $dataPuskesmas->respirasi->j039_19tahun + $dataPuskesmas->respirasi->j039_44tahun + $dataPuskesmas->respirasi->j039_59tahun + $dataPuskesmas->respirasi->j039_lebih_59tahun + $dataPuskesmas->respirasi->j039_l + $dataPuskesmas->respirasi->j039_p  }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j039_l_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j039_p_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j039_l_lama + $dataPuskesmas->respirasi->j039_p_lama }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter"></td>
        <td class="column10">Tonsilitis kronis</td>
        <td class="column5">J35.9</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j359_7hari }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j359_28hari }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j359_11bulan }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j359_4tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j359_9tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j359_14tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j359_19tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j359_44tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j359_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j359_lebih_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j359_l }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j359_p }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j359_7hari + $dataPuskesmas->respirasi->j359_28hari + $dataPuskesmas->respirasi->j359_11bulan + $dataPuskesmas->respirasi->j359_4tahun + $dataPuskesmas->respirasi->j359_9tahun + $dataPuskesmas->respirasi->j359_14tahun + $dataPuskesmas->respirasi->j359_19tahun + $dataPuskesmas->respirasi->j359_44tahun + $dataPuskesmas->respirasi->j359_59tahun + $dataPuskesmas->respirasi->j359_lebih_59tahun + $dataPuskesmas->respirasi->j359_l + $dataPuskesmas->respirasi->j359_p  }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j359_l_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j359_p_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->respirasi->j359_l_lama + $dataPuskesmas->respirasi->j359_p_lama }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">K</td>
        <td class="column10">KULIT</td>
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
        <td class="column10">Akne Vulgaris Ringan</td>
        <td class="column5">L70.0</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l700_7hari }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l700_28hari }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l700_11bulan }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l700_4tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l700_9tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l700_14tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l700_19tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l700_44tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l700_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l700_lebih_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l700_l }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l700_p }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l700_7hari + $dataPuskesmas->kulit->l700_28hari + $dataPuskesmas->kulit->l700_11bulan + $dataPuskesmas->kulit->l700_4tahun + $dataPuskesmas->kulit->l700_9tahun + $dataPuskesmas->kulit->l700_14tahun + $dataPuskesmas->kulit->l700_19tahun + $dataPuskesmas->kulit->l700_44tahun + $dataPuskesmas->kulit->l700_59tahun + $dataPuskesmas->kulit->l700_lebih_59tahun + $dataPuskesmas->kulit->l700_l + $dataPuskesmas->kulit->l700_p  }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l700_l_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l700_p_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l700_l_lama + $dataPuskesmas->kulit->l700_p_lama }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">2</td>
        <td class="column10">Cutaneus Larva Migrans</td>
        <td class="column5">B76.9</td>
        <td class="column5">{{ $dataPuskesmas->kulit->b769_7hari }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->b769_28hari }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->b769_11bulan }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->b769_4tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->b769_9tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->b769_14tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->b769_19tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->b769_44tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->b769_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->b769_lebih_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->b769_l }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->b769_p }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->b769_7hari + $dataPuskesmas->kulit->b769_28hari + $dataPuskesmas->kulit->b769_11bulan + $dataPuskesmas->kulit->b769_4tahun + $dataPuskesmas->kulit->b769_9tahun + $dataPuskesmas->kulit->b769_14tahun + $dataPuskesmas->kulit->b769_19tahun + $dataPuskesmas->kulit->b769_44tahun + $dataPuskesmas->kulit->b769_59tahun + $dataPuskesmas->kulit->b769_lebih_59tahun + $dataPuskesmas->kulit->b769_l + $dataPuskesmas->kulit->b769_p  }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->b769_l_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->b769_p_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->b769_l_lama + $dataPuskesmas->kulit->b769_p_lama }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">3</td>
        <td class="column10">Dermatitis atopik</td>
        <td class="column5">L20</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l20_7hari }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l20_28hari }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l20_11bulan }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l20_4tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l20_9tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l20_14tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l20_19tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l20_44tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l20_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l20_lebih_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l20_l }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l20_p }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l20_7hari + $dataPuskesmas->kulit->l20_28hari + $dataPuskesmas->kulit->l20_11bulan + $dataPuskesmas->kulit->l20_4tahun + $dataPuskesmas->kulit->l20_9tahun + $dataPuskesmas->kulit->l20_14tahun + $dataPuskesmas->kulit->l20_19tahun + $dataPuskesmas->kulit->l20_44tahun + $dataPuskesmas->kulit->l20_59tahun + $dataPuskesmas->kulit->l20_lebih_59tahun + $dataPuskesmas->kulit->l20_l + $dataPuskesmas->kulit->l20_p  }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l20_l_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l20_p_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l20_l_lama + $dataPuskesmas->kulit->l20_p_lama }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">4</td>
        <td class="column10">Dermatitis kontak alergi</td>
        <td class="column5">L23</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l23_7hari }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l23_28hari }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l23_11bulan }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l23_4tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l23_9tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l23_14tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l23_19tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l23_44tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l23_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l23_lebih_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l23_l }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l23_p }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l23_7hari + $dataPuskesmas->kulit->l23_28hari + $dataPuskesmas->kulit->l23_11bulan + $dataPuskesmas->kulit->l23_4tahun + $dataPuskesmas->kulit->l23_9tahun + $dataPuskesmas->kulit->l23_14tahun + $dataPuskesmas->kulit->l23_19tahun + $dataPuskesmas->kulit->l23_44tahun + $dataPuskesmas->kulit->l23_59tahun + $dataPuskesmas->kulit->l23_lebih_59tahun + $dataPuskesmas->kulit->l23_l + $dataPuskesmas->kulit->l23_p  }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l23_l_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l23_p_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l23_l_lama + $dataPuskesmas->kulit->l23_p_lama }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">5</td>
        <td class="column10">Dermatitis kontak iritan</td>
        <td class="column5">L24</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l24_7hari }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l24_28hari }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l24_11bulan }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l24_4tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l24_9tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l24_14tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l24_19tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l24_44tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l24_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l24_lebih_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l24_l }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l24_p }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l24_7hari + $dataPuskesmas->kulit->l24_28hari + $dataPuskesmas->kulit->l24_11bulan + $dataPuskesmas->kulit->l24_4tahun + $dataPuskesmas->kulit->l24_9tahun + $dataPuskesmas->kulit->l24_14tahun + $dataPuskesmas->kulit->l24_19tahun + $dataPuskesmas->kulit->l24_44tahun + $dataPuskesmas->kulit->l24_59tahun + $dataPuskesmas->kulit->l24_lebih_59tahun + $dataPuskesmas->kulit->l24_l + $dataPuskesmas->kulit->l24_p  }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l24_l_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l24_p_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l24_l_lama + $dataPuskesmas->kulit->l24_p_lama }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">6</td>
        <td class="column10">Dermatitis numularis</td>
        <td class="column5">L20.8</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l208_7hari }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l208_28hari }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l208_11bulan }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l208_4tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l208_9tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l208_14tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l208_19tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l208_44tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l208_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l208_lebih_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l208_l }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l208_p }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l208_7hari + $dataPuskesmas->kulit->l208_28hari + $dataPuskesmas->kulit->l208_11bulan + $dataPuskesmas->kulit->l208_4tahun + $dataPuskesmas->kulit->l208_9tahun + $dataPuskesmas->kulit->l208_14tahun + $dataPuskesmas->kulit->l208_19tahun + $dataPuskesmas->kulit->l208_44tahun + $dataPuskesmas->kulit->l208_59tahun + $dataPuskesmas->kulit->l208_lebih_59tahun + $dataPuskesmas->kulit->l208_l + $dataPuskesmas->kulit->l208_p  }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l208_l_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l208_p_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l208_l_lama + $dataPuskesmas->kulit->l208_p_lama }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">7</td>
        <td class="column10">Dermatitis perioral</td>
        <td class="column5">L71.0</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l710_7hari }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l710_28hari }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l710_11bulan }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l710_4tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l710_9tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l710_14tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l710_19tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l710_44tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l710_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l710_lebih_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l710_l }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l710_p }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l710_7hari + $dataPuskesmas->kulit->l710_28hari + $dataPuskesmas->kulit->l710_11bulan + $dataPuskesmas->kulit->l710_4tahun + $dataPuskesmas->kulit->l710_9tahun + $dataPuskesmas->kulit->l710_14tahun + $dataPuskesmas->kulit->l710_19tahun + $dataPuskesmas->kulit->l710_44tahun + $dataPuskesmas->kulit->l710_59tahun + $dataPuskesmas->kulit->l710_lebih_59tahun + $dataPuskesmas->kulit->l710_l + $dataPuskesmas->kulit->l710_p  }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l710_l_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l710_p_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l710_l_lama + $dataPuskesmas->kulit->l710_p_lama }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">8</td>
        <td class="column10">Dermatitis popok</td>
        <td class="column5">L22</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l22_7hari }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l22_28hari }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l22_11bulan }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l22_4tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l22_9tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l22_14tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l22_19tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l22_44tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l22_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l22_lebih_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l22_l }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l22_p }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l22_7hari + $dataPuskesmas->kulit->l22_28hari + $dataPuskesmas->kulit->l22_11bulan + $dataPuskesmas->kulit->l22_4tahun + $dataPuskesmas->kulit->l22_9tahun + $dataPuskesmas->kulit->l22_14tahun + $dataPuskesmas->kulit->l22_19tahun + $dataPuskesmas->kulit->l22_44tahun + $dataPuskesmas->kulit->l22_59tahun + $dataPuskesmas->kulit->l22_lebih_59tahun + $dataPuskesmas->kulit->l22_l + $dataPuskesmas->kulit->l22_p  }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l22_l_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l22_p_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l22_l_lama + $dataPuskesmas->kulit->l22_p_lama }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">9</td>
        <td class="column10">Dermatitis seboroik</td>
        <td class="column5">L21</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l21_7hari }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l21_28hari }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l21_11bulan }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l21_4tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l21_9tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l21_14tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l21_19tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l21_44tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l21_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l21_lebih_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l21_l }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l21_p }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l21_7hari + $dataPuskesmas->kulit->l21_28hari + $dataPuskesmas->kulit->l21_11bulan + $dataPuskesmas->kulit->l21_4tahun + $dataPuskesmas->kulit->l21_9tahun + $dataPuskesmas->kulit->l21_14tahun + $dataPuskesmas->kulit->l21_19tahun + $dataPuskesmas->kulit->l21_44tahun + $dataPuskesmas->kulit->l21_59tahun + $dataPuskesmas->kulit->l21_lebih_59tahun + $dataPuskesmas->kulit->l21_l + $dataPuskesmas->kulit->l21_p  }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l21_l_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l21_p_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l21_l_lama + $dataPuskesmas->kulit->l21_p_lama }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">10</td>
        <td class="column10">Dermatofitosis</td>
        <td class="column5">B35</td>
        <td class="column5">{{ $dataPuskesmas->kulit->b35_7hari }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->b35_28hari }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->b35_11bulan }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->b35_4tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->b35_9tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->b35_14tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->b35_19tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->b35_44tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->b35_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->b35_lebih_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->b35_l }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->b35_p }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->b35_7hari + $dataPuskesmas->kulit->b35_28hari + $dataPuskesmas->kulit->b35_11bulan + $dataPuskesmas->kulit->b35_4tahun + $dataPuskesmas->kulit->b35_9tahun + $dataPuskesmas->kulit->b35_14tahun + $dataPuskesmas->kulit->b35_19tahun + $dataPuskesmas->kulit->b35_44tahun + $dataPuskesmas->kulit->b35_59tahun + $dataPuskesmas->kulit->b35_lebih_59tahun + $dataPuskesmas->kulit->b35_l + $dataPuskesmas->kulit->b35_p  }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->b35_l_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->b35_p_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->b35_l_lama + $dataPuskesmas->kulit->b35_p_lama }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter"></td>
        <td class="column10">a. Tinea capitis dan tinea barbea</td>
        <td class="column5">B35.0</td>
        <td class="column5">{{ $dataPuskesmas->kulit->b350_7hari }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->b350_28hari }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->b350_11bulan }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->b350_4tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->b350_9tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->b350_14tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->b350_19tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->b350_44tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->b350_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->b350_lebih_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->b350_l }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->b350_p }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->b350_7hari + $dataPuskesmas->kulit->b350_28hari + $dataPuskesmas->kulit->b350_11bulan + $dataPuskesmas->kulit->b350_4tahun + $dataPuskesmas->kulit->b350_9tahun + $dataPuskesmas->kulit->b350_14tahun + $dataPuskesmas->kulit->b350_19tahun + $dataPuskesmas->kulit->b350_44tahun + $dataPuskesmas->kulit->b350_59tahun + $dataPuskesmas->kulit->b350_lebih_59tahun + $dataPuskesmas->kulit->b350_l + $dataPuskesmas->kulit->b350_p  }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->b350_l_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->b350_p_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->b350_l_lama + $dataPuskesmas->kulit->b350_p_lama }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter"></td>
        <td class="column10">b. Tinea corporis</td>
        <td class="column5">B35.4</td>
        <td class="column5">{{ $dataPuskesmas->kulit->b354_7hari }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->b354_28hari }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->b354_11bulan }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->b354_4tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->b354_9tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->b354_14tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->b354_19tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->b354_44tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->b354_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->b354_lebih_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->b354_l }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->b354_p }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->b354_7hari + $dataPuskesmas->kulit->b354_28hari + $dataPuskesmas->kulit->b354_11bulan + $dataPuskesmas->kulit->b354_4tahun + $dataPuskesmas->kulit->b354_9tahun + $dataPuskesmas->kulit->b354_14tahun + $dataPuskesmas->kulit->b354_19tahun + $dataPuskesmas->kulit->b354_44tahun + $dataPuskesmas->kulit->b354_59tahun + $dataPuskesmas->kulit->b354_lebih_59tahun + $dataPuskesmas->kulit->b354_l + $dataPuskesmas->kulit->b354_p  }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->b354_l_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->b354_p_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->b354_l_lama + $dataPuskesmas->kulit->b354_p_lama }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter"></td>
        <td class="column10">c. Tinea cruris</td>
        <td class="column5">B35.6</td>
        <td class="column5">{{ $dataPuskesmas->kulit->b356_7hari }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->b356_28hari }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->b356_11bulan }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->b356_4tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->b356_9tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->b356_14tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->b356_19tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->b356_44tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->b356_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->b356_lebih_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->b356_l }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->b356_p }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->b356_7hari + $dataPuskesmas->kulit->b356_28hari + $dataPuskesmas->kulit->b356_11bulan + $dataPuskesmas->kulit->b356_4tahun + $dataPuskesmas->kulit->b356_9tahun + $dataPuskesmas->kulit->b356_14tahun + $dataPuskesmas->kulit->b356_19tahun + $dataPuskesmas->kulit->b356_44tahun + $dataPuskesmas->kulit->b356_59tahun + $dataPuskesmas->kulit->b356_lebih_59tahun + $dataPuskesmas->kulit->b356_l + $dataPuskesmas->kulit->b356_p  }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->b356_l_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->b356_p_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->b356_l_lama + $dataPuskesmas->kulit->b356_p_lama }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter"></td>
        <td class="column10">d. Tinea manuum</td>
        <td class="column5">B35.2</td>
        <td class="column5">{{ $dataPuskesmas->kulit->b352_7hari }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->b352_28hari }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->b352_11bulan }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->b352_4tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->b352_9tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->b352_14tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->b352_19tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->b352_44tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->b352_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->b352_lebih_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->b352_l }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->b352_p }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->b352_7hari + $dataPuskesmas->kulit->b352_28hari + $dataPuskesmas->kulit->b352_11bulan + $dataPuskesmas->kulit->b352_4tahun + $dataPuskesmas->kulit->b352_9tahun + $dataPuskesmas->kulit->b352_14tahun + $dataPuskesmas->kulit->b352_19tahun + $dataPuskesmas->kulit->b352_44tahun + $dataPuskesmas->kulit->b352_59tahun + $dataPuskesmas->kulit->b352_lebih_59tahun + $dataPuskesmas->kulit->b352_l + $dataPuskesmas->kulit->b352_p  }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->b352_l_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->b352_p_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->b352_l_lama + $dataPuskesmas->kulit->b352_p_lama }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter"></td>
        <td class="column10">e. Tinea pedis</td>
        <td class="column5">B35.3</td>
        <td class="column5">{{ $dataPuskesmas->kulit->b353_7hari }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->b353_28hari }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->b353_11bulan }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->b353_4tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->b353_9tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->b353_14tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->b353_19tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->b353_44tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->b353_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->b353_lebih_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->b353_l }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->b353_p }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->b353_7hari + $dataPuskesmas->kulit->b353_28hari + $dataPuskesmas->kulit->b353_11bulan + $dataPuskesmas->kulit->b353_4tahun + $dataPuskesmas->kulit->b353_9tahun + $dataPuskesmas->kulit->b353_14tahun + $dataPuskesmas->kulit->b353_19tahun + $dataPuskesmas->kulit->b353_44tahun + $dataPuskesmas->kulit->b353_59tahun + $dataPuskesmas->kulit->b353_lebih_59tahun + $dataPuskesmas->kulit->b353_l + $dataPuskesmas->kulit->b353_p  }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->b353_l_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->b353_p_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->b353_l_lama + $dataPuskesmas->kulit->b353_p_lama }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter"></td>
        <td class="column10">f. Tinea unguium</td>
        <td class="column5">B35.1</td>
        <td class="column5">{{ $dataPuskesmas->kulit->b351_7hari }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->b351_28hari }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->b351_11bulan }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->b351_4tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->b351_9tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->b351_14tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->b351_19tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->b351_44tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->b351_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->b351_lebih_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->b351_l }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->b351_p }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->b351_7hari + $dataPuskesmas->kulit->b351_28hari + $dataPuskesmas->kulit->b351_11bulan + $dataPuskesmas->kulit->b351_4tahun + $dataPuskesmas->kulit->b351_9tahun + $dataPuskesmas->kulit->b351_14tahun + $dataPuskesmas->kulit->b351_19tahun + $dataPuskesmas->kulit->b351_44tahun + $dataPuskesmas->kulit->b351_59tahun + $dataPuskesmas->kulit->b351_lebih_59tahun + $dataPuskesmas->kulit->b351_l + $dataPuskesmas->kulit->b351_p  }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->b351_l_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->b351_p_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->b351_l_lama + $dataPuskesmas->kulit->b351_p_lama }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">11</td>
        <td class="column10">Erisipelas</td>
        <td class="column5">A46</td>
        <td class="column5">{{ $dataPuskesmas->kulit->a46_7hari }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->a46_28hari }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->a46_11bulan }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->a46_4tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->a46_9tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->a46_14tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->a46_19tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->a46_44tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->a46_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->a46_lebih_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->a46_l }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->a46_p }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->a46_7hari + $dataPuskesmas->kulit->a46_28hari + $dataPuskesmas->kulit->a46_11bulan + $dataPuskesmas->kulit->a46_4tahun + $dataPuskesmas->kulit->a46_9tahun + $dataPuskesmas->kulit->a46_14tahun + $dataPuskesmas->kulit->a46_19tahun + $dataPuskesmas->kulit->a46_44tahun + $dataPuskesmas->kulit->a46_59tahun + $dataPuskesmas->kulit->a46_lebih_59tahun + $dataPuskesmas->kulit->a46_l + $dataPuskesmas->kulit->a46_p  }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->a46_l_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->a46_p_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->a46_l_lama + $dataPuskesmas->kulit->a46_p_lama }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">12</td>
        <td class="column10">Eritrasma</td>
        <td class="column5">L08.1</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l081_7hari }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l081_28hari }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l081_11bulan }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l081_4tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l081_9tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l081_14tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l081_19tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l081_44tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l081_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l081_lebih_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l081_l }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l081_p }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l081_7hari + $dataPuskesmas->kulit->l081_28hari + $dataPuskesmas->kulit->l081_11bulan + $dataPuskesmas->kulit->l081_4tahun + $dataPuskesmas->kulit->l081_9tahun + $dataPuskesmas->kulit->l081_14tahun + $dataPuskesmas->kulit->l081_19tahun + $dataPuskesmas->kulit->l081_44tahun + $dataPuskesmas->kulit->l081_59tahun + $dataPuskesmas->kulit->l081_lebih_59tahun + $dataPuskesmas->kulit->l081_l + $dataPuskesmas->kulit->l081_p  }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l081_l_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l081_p_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l081_l_lama + $dataPuskesmas->kulit->l081_p_lama }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">13</td>
        <td class="column10">Exanthematous drug Eruption</td>
        <td class="column5">L27.0</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l270_7hari }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l270_28hari }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l270_11bulan }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l270_4tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l270_9tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l270_14tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l270_19tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l270_44tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l270_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l270_lebih_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l270_l }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l270_p }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l270_7hari + $dataPuskesmas->kulit->l270_28hari + $dataPuskesmas->kulit->l270_11bulan + $dataPuskesmas->kulit->l270_4tahun + $dataPuskesmas->kulit->l270_9tahun + $dataPuskesmas->kulit->l270_14tahun + $dataPuskesmas->kulit->l270_19tahun + $dataPuskesmas->kulit->l270_44tahun + $dataPuskesmas->kulit->l270_59tahun + $dataPuskesmas->kulit->l270_lebih_59tahun + $dataPuskesmas->kulit->l270_l + $dataPuskesmas->kulit->l270_p  }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l270_l_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l270_p_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l270_l_lama + $dataPuskesmas->kulit->l270_p_lama }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">14</td>
        <td class="column10">Fixed Drug Eruption</td>
        <td class="column5">L27.0</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l270_2_7hari }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l270_2_28hari }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l270_2_11bulan }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l270_2_4tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l270_2_9tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l270_2_14tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l270_2_19tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l270_2_44tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l270_2_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l270_2_lebih_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l270_2_l }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l270_2_p }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l270_2_7hari + $dataPuskesmas->kulit->l270_2_28hari + $dataPuskesmas->kulit->l270_2_11bulan + $dataPuskesmas->kulit->l270_2_4tahun + $dataPuskesmas->kulit->l270_2_9tahun + $dataPuskesmas->kulit->l270_2_14tahun + $dataPuskesmas->kulit->l270_2_19tahun + $dataPuskesmas->kulit->l270_2_44tahun + $dataPuskesmas->kulit->l270_2_59tahun + $dataPuskesmas->kulit->l270_2_lebih_59tahun + $dataPuskesmas->kulit->l270_2_l + $dataPuskesmas->kulit->l270_2_p  }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l270_2_l_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l270_2_p_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l270_2_l_lama + $dataPuskesmas->kulit->l270_2_p_lama }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">15</td>
        <td class="column10">Frambusia RDT (+) konfirmasi/probable</td>
        <td class="column5">A66</td>
        <td class="column5">{{ $dataPuskesmas->kulit->a66_7hari }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->a66_28hari }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->a66_11bulan }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->a66_4tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->a66_9tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->a66_14tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->a66_19tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->a66_44tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->a66_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->a66_lebih_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->a66_l }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->a66_p }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->a66_7hari + $dataPuskesmas->kulit->a66_28hari + $dataPuskesmas->kulit->a66_11bulan + $dataPuskesmas->kulit->a66_4tahun + $dataPuskesmas->kulit->a66_9tahun + $dataPuskesmas->kulit->a66_14tahun + $dataPuskesmas->kulit->a66_19tahun + $dataPuskesmas->kulit->a66_44tahun + $dataPuskesmas->kulit->a66_59tahun + $dataPuskesmas->kulit->a66_lebih_59tahun + $dataPuskesmas->kulit->a66_l + $dataPuskesmas->kulit->a66_p  }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->a66_l_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->a66_p_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->a66_l_lama + $dataPuskesmas->kulit->a66_p_lama }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">16</td>
        <td class="column10">Herpes simplek</td>
        <td class="column5">B00.9</td>
        <td class="column5">{{ $dataPuskesmas->kulit->b009_7hari }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->b009_28hari }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->b009_11bulan }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->b009_4tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->b009_9tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->b009_14tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->b009_19tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->b009_44tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->b009_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->b009_lebih_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->b009_l }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->b009_p }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->b009_7hari + $dataPuskesmas->kulit->b009_28hari + $dataPuskesmas->kulit->b009_11bulan + $dataPuskesmas->kulit->b009_4tahun + $dataPuskesmas->kulit->b009_9tahun + $dataPuskesmas->kulit->b009_14tahun + $dataPuskesmas->kulit->b009_19tahun + $dataPuskesmas->kulit->b009_44tahun + $dataPuskesmas->kulit->b009_59tahun + $dataPuskesmas->kulit->b009_lebih_59tahun + $dataPuskesmas->kulit->b009_l + $dataPuskesmas->kulit->b009_p  }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->b009_l_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->b009_p_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->b009_l_lama + $dataPuskesmas->kulit->b009_p_lama }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">17</td>
        <td class="column10">Herpes zoster</td>
        <td class="column5">B02.9</td>
        <td class="column5">{{ $dataPuskesmas->kulit->b029_7hari }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->b029_28hari }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->b029_11bulan }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->b029_4tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->b029_9tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->b029_14tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->b029_19tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->b029_44tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->b029_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->b029_lebih_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->b029_l }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->b029_p }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->b029_7hari + $dataPuskesmas->kulit->b029_28hari + $dataPuskesmas->kulit->b029_11bulan + $dataPuskesmas->kulit->b029_4tahun + $dataPuskesmas->kulit->b029_9tahun + $dataPuskesmas->kulit->b029_14tahun + $dataPuskesmas->kulit->b029_19tahun + $dataPuskesmas->kulit->b029_44tahun + $dataPuskesmas->kulit->b029_59tahun + $dataPuskesmas->kulit->b029_lebih_59tahun + $dataPuskesmas->kulit->b029_l + $dataPuskesmas->kulit->b029_p  }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->b029_l_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->b029_p_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->b029_l_lama + $dataPuskesmas->kulit->b029_p_lama }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">18</td>
        <td class="column10">Hidradenitis supuratif</td>
        <td class="column5">L73.2</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l732_7hari }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l732_28hari }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l732_11bulan }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l732_4tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l732_9tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l732_14tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l732_19tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l732_44tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l732_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l732_lebih_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l732_l }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l732_p }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l732_7hari + $dataPuskesmas->kulit->l732_28hari + $dataPuskesmas->kulit->l732_11bulan + $dataPuskesmas->kulit->l732_4tahun + $dataPuskesmas->kulit->l732_9tahun + $dataPuskesmas->kulit->l732_14tahun + $dataPuskesmas->kulit->l732_19tahun + $dataPuskesmas->kulit->l732_44tahun + $dataPuskesmas->kulit->l732_59tahun + $dataPuskesmas->kulit->l732_lebih_59tahun + $dataPuskesmas->kulit->l732_l + $dataPuskesmas->kulit->l732_p  }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l732_l_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l732_p_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l732_l_lama + $dataPuskesmas->kulit->l732_p_lama }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">19</td>
        <td class="column10">Liken simpleks kronik (Neurodermatitis Sirkumkripta)</td>
        <td class="column5">L28.0</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l280_7hari }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l280_28hari }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l280_11bulan }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l280_4tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l280_9tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l280_14tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l280_19tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l280_44tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l280_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l280_lebih_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l280_l }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l280_p }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l280_7hari + $dataPuskesmas->kulit->l280_28hari + $dataPuskesmas->kulit->l280_11bulan + $dataPuskesmas->kulit->l280_4tahun + $dataPuskesmas->kulit->l280_9tahun + $dataPuskesmas->kulit->l280_14tahun + $dataPuskesmas->kulit->l280_19tahun + $dataPuskesmas->kulit->l280_44tahun + $dataPuskesmas->kulit->l280_59tahun + $dataPuskesmas->kulit->l280_lebih_59tahun + $dataPuskesmas->kulit->l280_l + $dataPuskesmas->kulit->l280_p  }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l280_l_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l280_p_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l280_l_lama + $dataPuskesmas->kulit->l280_p_lama }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">20</td>
        <td class="column10">Luka bakar derajat I dan II</td>
        <td class="column5">T30</td>
        <td class="column5">{{ $dataPuskesmas->kulit->t30_7hari }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->t30_28hari }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->t30_11bulan }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->t30_4tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->t30_9tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->t30_14tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->t30_19tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->t30_44tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->t30_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->t30_lebih_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->t30_l }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->t30_p }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->t30_7hari + $dataPuskesmas->kulit->t30_28hari + $dataPuskesmas->kulit->t30_11bulan + $dataPuskesmas->kulit->t30_4tahun + $dataPuskesmas->kulit->t30_9tahun + $dataPuskesmas->kulit->t30_14tahun + $dataPuskesmas->kulit->t30_19tahun + $dataPuskesmas->kulit->t30_44tahun + $dataPuskesmas->kulit->t30_59tahun + $dataPuskesmas->kulit->t30_lebih_59tahun + $dataPuskesmas->kulit->t30_l + $dataPuskesmas->kulit->t30_p  }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->t30_l_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->t30_p_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->t30_l_lama + $dataPuskesmas->kulit->t30_p_lama }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">21</td>
        <td class="column10">Miliaria</td>
        <td class="column5">L74.3</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l743_7hari }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l743_28hari }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l743_11bulan }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l743_4tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l743_9tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l743_14tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l743_19tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l743_44tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l743_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l743_lebih_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l743_l }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l743_p }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l743_7hari + $dataPuskesmas->kulit->l743_28hari + $dataPuskesmas->kulit->l743_11bulan + $dataPuskesmas->kulit->l743_4tahun + $dataPuskesmas->kulit->l743_9tahun + $dataPuskesmas->kulit->l743_14tahun + $dataPuskesmas->kulit->l743_19tahun + $dataPuskesmas->kulit->l743_44tahun + $dataPuskesmas->kulit->l743_59tahun + $dataPuskesmas->kulit->l743_lebih_59tahun + $dataPuskesmas->kulit->l743_l + $dataPuskesmas->kulit->l743_p  }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l743_l_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l743_p_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l743_l_lama + $dataPuskesmas->kulit->l743_p_lama }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">22</td>
        <td class="column10">Moluskum kontagiosum</td>
        <td class="column5">B08.1</td>
        <td class="column5">{{ $dataPuskesmas->kulit->b081_7hari }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->b081_28hari }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->b081_11bulan }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->b081_4tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->b081_9tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->b081_14tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->b081_19tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->b081_44tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->b081_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->b081_lebih_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->b081_l }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->b081_p }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->b081_7hari + $dataPuskesmas->kulit->b081_28hari + $dataPuskesmas->kulit->b081_11bulan + $dataPuskesmas->kulit->b081_4tahun + $dataPuskesmas->kulit->b081_9tahun + $dataPuskesmas->kulit->b081_14tahun + $dataPuskesmas->kulit->b081_19tahun + $dataPuskesmas->kulit->b081_44tahun + $dataPuskesmas->kulit->b081_59tahun + $dataPuskesmas->kulit->b081_lebih_59tahun + $dataPuskesmas->kulit->b081_l + $dataPuskesmas->kulit->b081_p  }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->b081_l_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->b081_p_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->b081_l_lama + $dataPuskesmas->kulit->b081_p_lama }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">23</td>
        <td class="column10">Pedikulosis kapitis</td>
        <td class="column5">B85.0</td>
        <td class="column5">{{ $dataPuskesmas->kulit->b850_7hari }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->b850_28hari }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->b850_11bulan }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->b850_4tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->b850_9tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->b850_14tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->b850_19tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->b850_44tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->b850_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->b850_lebih_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->b850_l }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->b850_p }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->b850_7hari + $dataPuskesmas->kulit->b850_28hari + $dataPuskesmas->kulit->b850_11bulan + $dataPuskesmas->kulit->b850_4tahun + $dataPuskesmas->kulit->b850_9tahun + $dataPuskesmas->kulit->b850_14tahun + $dataPuskesmas->kulit->b850_19tahun + $dataPuskesmas->kulit->b850_44tahun + $dataPuskesmas->kulit->b850_59tahun + $dataPuskesmas->kulit->b850_lebih_59tahun + $dataPuskesmas->kulit->b850_l + $dataPuskesmas->kulit->b850_p  }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->b850_l_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->b850_p_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->b850_l_lama + $dataPuskesmas->kulit->b850_p_lama }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">24</td>
        <td class="column10">Pedikulosis pubis</td>
        <td class="column5">B85.3</td>
        <td class="column5">{{ $dataPuskesmas->kulit->b853_7hari }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->b853_28hari }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->b853_11bulan }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->b853_4tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->b853_9tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->b853_14tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->b853_19tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->b853_44tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->b853_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->b853_lebih_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->b853_l }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->b853_p }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->b853_7hari + $dataPuskesmas->kulit->b853_28hari + $dataPuskesmas->kulit->b853_11bulan + $dataPuskesmas->kulit->b853_4tahun + $dataPuskesmas->kulit->b853_9tahun + $dataPuskesmas->kulit->b853_14tahun + $dataPuskesmas->kulit->b853_19tahun + $dataPuskesmas->kulit->b853_44tahun + $dataPuskesmas->kulit->b853_59tahun + $dataPuskesmas->kulit->b853_lebih_59tahun + $dataPuskesmas->kulit->b853_l + $dataPuskesmas->kulit->b853_p  }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->b853_l_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->b853_p_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->b853_l_lama + $dataPuskesmas->kulit->b853_p_lama }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">25</td>
        <td class="column10">Pioderma</td>
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
        <td class="column5 textCenter"></td>
        <td class="column10">Abses, furuncke dan carbuncle</td>
        <td class="column5">L02</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l02_7hari }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l02_28hari }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l02_11bulan }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l02_4tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l02_9tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l02_14tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l02_19tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l02_44tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l02_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l02_lebih_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l02_l }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l02_p }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l02_7hari + $dataPuskesmas->kulit->l02_28hari + $dataPuskesmas->kulit->l02_11bulan + $dataPuskesmas->kulit->l02_4tahun + $dataPuskesmas->kulit->l02_9tahun + $dataPuskesmas->kulit->l02_14tahun + $dataPuskesmas->kulit->l02_19tahun + $dataPuskesmas->kulit->l02_44tahun + $dataPuskesmas->kulit->l02_59tahun + $dataPuskesmas->kulit->l02_lebih_59tahun + $dataPuskesmas->kulit->l02_l + $dataPuskesmas->kulit->l02_p  }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l02_l_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l02_p_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l02_l_lama + $dataPuskesmas->kulit->l02_p_lama }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter"></td>
        <td class="column10">b. Impetigo</td>
        <td class="column5">L01</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l01_7hari }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l01_28hari }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l01_11bulan }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l01_4tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l01_9tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l01_14tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l01_19tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l01_44tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l01_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l01_lebih_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l01_l }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l01_p }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l01_7hari + $dataPuskesmas->kulit->l01_28hari + $dataPuskesmas->kulit->l01_11bulan + $dataPuskesmas->kulit->l01_4tahun + $dataPuskesmas->kulit->l01_9tahun + $dataPuskesmas->kulit->l01_14tahun + $dataPuskesmas->kulit->l01_19tahun + $dataPuskesmas->kulit->l01_44tahun + $dataPuskesmas->kulit->l01_59tahun + $dataPuskesmas->kulit->l01_lebih_59tahun + $dataPuskesmas->kulit->l01_l + $dataPuskesmas->kulit->l01_p  }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l01_l_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l01_p_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l01_l_lama + $dataPuskesmas->kulit->l01_p_lama }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter"></td>
        <td class="column10">c. Pioderma</td>
        <td class="column5">L08.0</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l080_7hari }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l080_28hari }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l080_11bulan }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l080_4tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l080_9tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l080_14tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l080_19tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l080_44tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l080_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l080_lebih_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l080_l }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l080_p }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l080_7hari + $dataPuskesmas->kulit->l080_28hari + $dataPuskesmas->kulit->l080_11bulan + $dataPuskesmas->kulit->l080_4tahun + $dataPuskesmas->kulit->l080_9tahun + $dataPuskesmas->kulit->l080_14tahun + $dataPuskesmas->kulit->l080_19tahun + $dataPuskesmas->kulit->l080_44tahun + $dataPuskesmas->kulit->l080_59tahun + $dataPuskesmas->kulit->l080_lebih_59tahun + $dataPuskesmas->kulit->l080_l + $dataPuskesmas->kulit->l080_p  }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l080_l_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l080_p_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l080_l_lama + $dataPuskesmas->kulit->l080_p_lama }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">26</td>
        <td class="column10">Pitiriasis Rosea</td>
        <td class="column5">L42</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l42_7hari }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l42_28hari }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l42_11bulan }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l42_4tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l42_9tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l42_14tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l42_19tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l42_44tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l42_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l42_lebih_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l42_l }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l42_p }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l42_7hari + $dataPuskesmas->kulit->l42_28hari + $dataPuskesmas->kulit->l42_11bulan + $dataPuskesmas->kulit->l42_4tahun + $dataPuskesmas->kulit->l42_9tahun + $dataPuskesmas->kulit->l42_14tahun + $dataPuskesmas->kulit->l42_19tahun + $dataPuskesmas->kulit->l42_44tahun + $dataPuskesmas->kulit->l42_59tahun + $dataPuskesmas->kulit->l42_lebih_59tahun + $dataPuskesmas->kulit->l42_l + $dataPuskesmas->kulit->l42_p  }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l42_l_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l42_p_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l42_l_lama + $dataPuskesmas->kulit->l42_p_lama }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">27</td>
        <td class="column10">Pitiriasis versikolor</td>
        <td class="column5">B36.0</td>
        <td class="column5">{{ $dataPuskesmas->kulit->b360_7hari }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->b360_28hari }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->b360_11bulan }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->b360_4tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->b360_9tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->b360_14tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->b360_19tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->b360_44tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->b360_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->b360_lebih_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->b360_l }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->b360_p }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->b360_7hari + $dataPuskesmas->kulit->b360_28hari + $dataPuskesmas->kulit->b360_11bulan + $dataPuskesmas->kulit->b360_4tahun + $dataPuskesmas->kulit->b360_9tahun + $dataPuskesmas->kulit->b360_14tahun + $dataPuskesmas->kulit->b360_19tahun + $dataPuskesmas->kulit->b360_44tahun + $dataPuskesmas->kulit->b360_59tahun + $dataPuskesmas->kulit->b360_lebih_59tahun + $dataPuskesmas->kulit->b360_l + $dataPuskesmas->kulit->b360_p  }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->b360_l_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->b360_p_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->b360_l_lama + $dataPuskesmas->kulit->b360_p_lama }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">28</td>
        <td class="column10">Reaksi Gigitan Serangga</td>
        <td class="column5">T63.4</td>
        <td class="column5">{{ $dataPuskesmas->kulit->t634_7hari }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->t634_28hari }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->t634_11bulan }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->t634_4tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->t634_9tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->t634_14tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->t634_19tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->t634_44tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->t634_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->t634_lebih_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->t634_l }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->t634_p }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->t634_7hari + $dataPuskesmas->kulit->t634_28hari + $dataPuskesmas->kulit->t634_11bulan + $dataPuskesmas->kulit->t634_4tahun + $dataPuskesmas->kulit->t634_9tahun + $dataPuskesmas->kulit->t634_14tahun + $dataPuskesmas->kulit->t634_19tahun + $dataPuskesmas->kulit->t634_44tahun + $dataPuskesmas->kulit->t634_59tahun + $dataPuskesmas->kulit->t634_lebih_59tahun + $dataPuskesmas->kulit->t634_l + $dataPuskesmas->kulit->t634_p  }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->t634_l_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->t634_p_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->t634_l_lama + $dataPuskesmas->kulit->t634_p_lama }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">29</td>
        <td class="column10">Sindrom Stevens Johnson</td>
        <td class="column5">L51.1</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l511_7hari }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l511_28hari }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l511_11bulan }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l511_4tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l511_9tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l511_14tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l511_19tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l511_44tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l511_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l511_lebih_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l511_l }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l511_p }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l511_7hari + $dataPuskesmas->kulit->l511_28hari + $dataPuskesmas->kulit->l511_11bulan + $dataPuskesmas->kulit->l511_4tahun + $dataPuskesmas->kulit->l511_9tahun + $dataPuskesmas->kulit->l511_14tahun + $dataPuskesmas->kulit->l511_19tahun + $dataPuskesmas->kulit->l511_44tahun + $dataPuskesmas->kulit->l511_59tahun + $dataPuskesmas->kulit->l511_lebih_59tahun + $dataPuskesmas->kulit->l511_l + $dataPuskesmas->kulit->l511_p  }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l511_l_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l511_p_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l511_l_lama + $dataPuskesmas->kulit->l511_p_lama }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">30</td>
        <td class="column10">Skabies</td>
        <td class="column5">B86</td>
        <td class="column5">{{ $dataPuskesmas->kulit->b86_7hari }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->b86_28hari }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->b86_11bulan }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->b86_4tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->b86_9tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->b86_14tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->b86_19tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->b86_44tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->b86_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->b86_lebih_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->b86_l }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->b86_p }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->b86_7hari + $dataPuskesmas->kulit->b86_28hari + $dataPuskesmas->kulit->b86_11bulan + $dataPuskesmas->kulit->b86_4tahun + $dataPuskesmas->kulit->b86_9tahun + $dataPuskesmas->kulit->b86_14tahun + $dataPuskesmas->kulit->b86_19tahun + $dataPuskesmas->kulit->b86_44tahun + $dataPuskesmas->kulit->b86_59tahun + $dataPuskesmas->kulit->b86_lebih_59tahun + $dataPuskesmas->kulit->b86_l + $dataPuskesmas->kulit->b86_p  }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->b86_l_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->b86_p_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->b86_l_lama + $dataPuskesmas->kulit->b86_p_lama }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">31</td>
        <td class="column10">Skrofuloderma</td>
        <td class="column5">A18.4</td>
        <td class="column5">{{ $dataPuskesmas->kulit->a184_7hari }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->a184_28hari }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->a184_11bulan }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->a184_4tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->a184_9tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->a184_14tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->a184_19tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->a184_44tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->a184_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->a184_lebih_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->a184_l }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->a184_p }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->a184_7hari + $dataPuskesmas->kulit->a184_28hari + $dataPuskesmas->kulit->a184_11bulan + $dataPuskesmas->kulit->a184_4tahun + $dataPuskesmas->kulit->a184_9tahun + $dataPuskesmas->kulit->a184_14tahun + $dataPuskesmas->kulit->a184_19tahun + $dataPuskesmas->kulit->a184_44tahun + $dataPuskesmas->kulit->a184_59tahun + $dataPuskesmas->kulit->a184_lebih_59tahun + $dataPuskesmas->kulit->a184_l + $dataPuskesmas->kulit->a184_p  }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->a184_l_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->a184_p_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->a184_l_lama + $dataPuskesmas->kulit->a184_p_lama }}</td>
      </tr> 
      <tr>
        <td class="column5 textCenter">31</td>
        <td class="column10">Ulkus pada tungkai</td>
        <td class="column5">L98</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l98_7hari }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l98_28hari }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l98_11bulan }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l98_4tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l98_9tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l98_14tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l98_19tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l98_44tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l98_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l98_lebih_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l98_l }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l98_p }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l98_7hari + $dataPuskesmas->kulit->l98_28hari + $dataPuskesmas->kulit->l98_11bulan + $dataPuskesmas->kulit->l98_4tahun + $dataPuskesmas->kulit->l98_9tahun + $dataPuskesmas->kulit->l98_14tahun + $dataPuskesmas->kulit->l98_19tahun + $dataPuskesmas->kulit->l98_44tahun + $dataPuskesmas->kulit->l98_59tahun + $dataPuskesmas->kulit->l98_lebih_59tahun + $dataPuskesmas->kulit->l98_l + $dataPuskesmas->kulit->l98_p  }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l98_l_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l98_p_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l98_l_lama + $dataPuskesmas->kulit->l98_p_lama }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">33</td>
        <td class="column10">Urtikaria</td>
        <td class="column5">L50</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l50_7hari }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l50_28hari }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l50_11bulan }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l50_4tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l50_9tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l50_14tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l50_19tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l50_44tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l50_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l50_lebih_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l50_l }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l50_p }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l50_7hari + $dataPuskesmas->kulit->l50_28hari + $dataPuskesmas->kulit->l50_11bulan + $dataPuskesmas->kulit->l50_4tahun + $dataPuskesmas->kulit->l50_9tahun + $dataPuskesmas->kulit->l50_14tahun + $dataPuskesmas->kulit->l50_19tahun + $dataPuskesmas->kulit->l50_44tahun + $dataPuskesmas->kulit->l50_59tahun + $dataPuskesmas->kulit->l50_lebih_59tahun + $dataPuskesmas->kulit->l50_l + $dataPuskesmas->kulit->l50_p  }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l50_l_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l50_p_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->l50_l_lama + $dataPuskesmas->kulit->l50_p_lama }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">34</td>
        <td class="column10">Veruka Vulgaris</td>
        <td class="column5">B07</td>
        <td class="column5">{{ $dataPuskesmas->kulit->b07_7hari }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->b07_28hari }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->b07_11bulan }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->b07_4tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->b07_9tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->b07_14tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->b07_19tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->b07_44tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->b07_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->b07_lebih_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->b07_l }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->b07_p }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->b07_7hari + $dataPuskesmas->kulit->b07_28hari + $dataPuskesmas->kulit->b07_11bulan + $dataPuskesmas->kulit->b07_4tahun + $dataPuskesmas->kulit->b07_9tahun + $dataPuskesmas->kulit->b07_14tahun + $dataPuskesmas->kulit->b07_19tahun + $dataPuskesmas->kulit->b07_44tahun + $dataPuskesmas->kulit->b07_59tahun + $dataPuskesmas->kulit->b07_lebih_59tahun + $dataPuskesmas->kulit->b07_l + $dataPuskesmas->kulit->b07_p  }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->b07_l_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->b07_p_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->kulit->b07_l_lama + $dataPuskesmas->kulit->b07_p_lama }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">L</td>
        <td class="column10">METABOLIK ENDOKRIN DAN NUTRISI</td>
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
        <td class="column10">Diabetes Mellitus  Tipe 1</td>
        <td class="column5">E10</td>
        <td class="column5">{{ $dataPuskesmas->nutrisi->e10_7hari }}</td>
        <td class="column5">{{ $dataPuskesmas->nutrisi->e10_28hari }}</td>
        <td class="column5">{{ $dataPuskesmas->nutrisi->e10_11bulan }}</td>
        <td class="column5">{{ $dataPuskesmas->nutrisi->e10_4tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->nutrisi->e10_9tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->nutrisi->e10_14tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->nutrisi->e10_19tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->nutrisi->e10_44tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->nutrisi->e10_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->nutrisi->e10_lebih_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->nutrisi->e10_l }}</td>
        <td class="column5">{{ $dataPuskesmas->nutrisi->e10_p }}</td>
        <td class="column5">{{ $dataPuskesmas->nutrisi->e10_7hari + $dataPuskesmas->nutrisi->e10_28hari + $dataPuskesmas->nutrisi->e10_11bulan + $dataPuskesmas->nutrisi->e10_4tahun + $dataPuskesmas->nutrisi->e10_9tahun + $dataPuskesmas->nutrisi->e10_14tahun + $dataPuskesmas->nutrisi->e10_19tahun + $dataPuskesmas->nutrisi->e10_44tahun + $dataPuskesmas->nutrisi->e10_59tahun + $dataPuskesmas->nutrisi->e10_lebih_59tahun + $dataPuskesmas->nutrisi->e10_l + $dataPuskesmas->nutrisi->e10_p  }}</td>
        <td class="column5">{{ $dataPuskesmas->nutrisi->e10_l_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->nutrisi->e10_p_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->nutrisi->e10_l_lama + $dataPuskesmas->nutrisi->e10_p_lama }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">2</td>
        <td class="column10">Diabetes Mellitus  Tipe 2</td>
        <td class="column5">E11</td>
        <td class="column5">{{ $dataPuskesmas->nutrisi->e11_7hari }}</td>
        <td class="column5">{{ $dataPuskesmas->nutrisi->e11_28hari }}</td>
        <td class="column5">{{ $dataPuskesmas->nutrisi->e11_11bulan }}</td>
        <td class="column5">{{ $dataPuskesmas->nutrisi->e11_4tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->nutrisi->e11_9tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->nutrisi->e11_14tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->nutrisi->e11_19tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->nutrisi->e11_44tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->nutrisi->e11_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->nutrisi->e11_lebih_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->nutrisi->e11_l }}</td>
        <td class="column5">{{ $dataPuskesmas->nutrisi->e11_p }}</td>
        <td class="column5">{{ $dataPuskesmas->nutrisi->e11_7hari + $dataPuskesmas->nutrisi->e11_28hari + $dataPuskesmas->nutrisi->e11_11bulan + $dataPuskesmas->nutrisi->e11_4tahun + $dataPuskesmas->nutrisi->e11_9tahun + $dataPuskesmas->nutrisi->e11_14tahun + $dataPuskesmas->nutrisi->e11_19tahun + $dataPuskesmas->nutrisi->e11_44tahun + $dataPuskesmas->nutrisi->e11_59tahun + $dataPuskesmas->nutrisi->e11_lebih_59tahun + $dataPuskesmas->nutrisi->e11_l + $dataPuskesmas->nutrisi->e11_p  }}</td>
        <td class="column5">{{ $dataPuskesmas->nutrisi->e11_l_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->nutrisi->e11_p_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->nutrisi->e11_l_lama + $dataPuskesmas->nutrisi->e11_p_lama }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">3</td>
        <td class="column10">Hiperglikemia Hiperosmolar Non Ketotik</td>
        <td class="column5">R73.9</td>
        <td class="column5">{{ $dataPuskesmas->nutrisi->r739_7hari }}</td>
        <td class="column5">{{ $dataPuskesmas->nutrisi->r739_28hari }}</td>
        <td class="column5">{{ $dataPuskesmas->nutrisi->r739_11bulan }}</td>
        <td class="column5">{{ $dataPuskesmas->nutrisi->r739_4tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->nutrisi->r739_9tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->nutrisi->r739_14tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->nutrisi->r739_19tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->nutrisi->r739_44tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->nutrisi->r739_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->nutrisi->r739_lebih_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->nutrisi->r739_l }}</td>
        <td class="column5">{{ $dataPuskesmas->nutrisi->r739_p }}</td>
        <td class="column5">{{ $dataPuskesmas->nutrisi->r739_7hari + $dataPuskesmas->nutrisi->r739_28hari + $dataPuskesmas->nutrisi->r739_11bulan + $dataPuskesmas->nutrisi->r739_4tahun + $dataPuskesmas->nutrisi->r739_9tahun + $dataPuskesmas->nutrisi->r739_14tahun + $dataPuskesmas->nutrisi->r739_19tahun + $dataPuskesmas->nutrisi->r739_44tahun + $dataPuskesmas->nutrisi->r739_59tahun + $dataPuskesmas->nutrisi->r739_lebih_59tahun + $dataPuskesmas->nutrisi->r739_l + $dataPuskesmas->nutrisi->r739_p  }}</td>
        <td class="column5">{{ $dataPuskesmas->nutrisi->r739_l_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->nutrisi->r739_p_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->nutrisi->r739_l_lama + $dataPuskesmas->nutrisi->r739_p_lama }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">4</td>
        <td class="column10">Hiperurisemia – Gout Arthritis</td>
        <td class="column5">E79.0</td>
        <td class="column5">{{ $dataPuskesmas->nutrisi->e790_7hari }}</td>
        <td class="column5">{{ $dataPuskesmas->nutrisi->e790_28hari }}</td>
        <td class="column5">{{ $dataPuskesmas->nutrisi->e790_11bulan }}</td>
        <td class="column5">{{ $dataPuskesmas->nutrisi->e790_4tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->nutrisi->e790_9tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->nutrisi->e790_14tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->nutrisi->e790_19tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->nutrisi->e790_44tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->nutrisi->e790_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->nutrisi->e790_lebih_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->nutrisi->e790_l }}</td>
        <td class="column5">{{ $dataPuskesmas->nutrisi->e790_p }}</td>
        <td class="column5">{{ $dataPuskesmas->nutrisi->e790_7hari + $dataPuskesmas->nutrisi->e790_28hari + $dataPuskesmas->nutrisi->e790_11bulan + $dataPuskesmas->nutrisi->e790_4tahun + $dataPuskesmas->nutrisi->e790_9tahun + $dataPuskesmas->nutrisi->e790_14tahun + $dataPuskesmas->nutrisi->e790_19tahun + $dataPuskesmas->nutrisi->e790_44tahun + $dataPuskesmas->nutrisi->e790_59tahun + $dataPuskesmas->nutrisi->e790_lebih_59tahun + $dataPuskesmas->nutrisi->e790_l + $dataPuskesmas->nutrisi->e790_p  }}</td>
        <td class="column5">{{ $dataPuskesmas->nutrisi->e790_l_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->nutrisi->e790_p_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->nutrisi->e790_l_lama + $dataPuskesmas->nutrisi->e790_p_lama }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">5</td>
        <td class="column10">Hipoglikemia</td>
        <td class="column5">E16.2</td>
        <td class="column5">{{ $dataPuskesmas->nutrisi->e162_7hari }}</td>
        <td class="column5">{{ $dataPuskesmas->nutrisi->e162_28hari }}</td>
        <td class="column5">{{ $dataPuskesmas->nutrisi->e162_11bulan }}</td>
        <td class="column5">{{ $dataPuskesmas->nutrisi->e162_4tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->nutrisi->e162_9tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->nutrisi->e162_14tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->nutrisi->e162_19tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->nutrisi->e162_44tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->nutrisi->e162_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->nutrisi->e162_lebih_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->nutrisi->e162_l }}</td>
        <td class="column5">{{ $dataPuskesmas->nutrisi->e162_p }}</td>
        <td class="column5">{{ $dataPuskesmas->nutrisi->e162_7hari + $dataPuskesmas->nutrisi->e162_28hari + $dataPuskesmas->nutrisi->e162_11bulan + $dataPuskesmas->nutrisi->e162_4tahun + $dataPuskesmas->nutrisi->e162_9tahun + $dataPuskesmas->nutrisi->e162_14tahun + $dataPuskesmas->nutrisi->e162_19tahun + $dataPuskesmas->nutrisi->e162_44tahun + $dataPuskesmas->nutrisi->e162_59tahun + $dataPuskesmas->nutrisi->e162_lebih_59tahun + $dataPuskesmas->nutrisi->e162_l + $dataPuskesmas->nutrisi->e162_p  }}</td>
        <td class="column5">{{ $dataPuskesmas->nutrisi->e162_l_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->nutrisi->e162_p_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->nutrisi->e162_l_lama + $dataPuskesmas->nutrisi->e162_p_lama }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">6</td>
        <td class="column10">Hipotiroid kongenital</td>
        <td class="column5">E03.1</td>
        <td class="column5">{{ $dataPuskesmas->nutrisi->e031_7hari }}</td>
        <td class="column5">{{ $dataPuskesmas->nutrisi->e031_28hari }}</td>
        <td class="column5">{{ $dataPuskesmas->nutrisi->e031_11bulan }}</td>
        <td class="column5">{{ $dataPuskesmas->nutrisi->e031_4tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->nutrisi->e031_9tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->nutrisi->e031_14tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->nutrisi->e031_19tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->nutrisi->e031_44tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->nutrisi->e031_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->nutrisi->e031_lebih_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->nutrisi->e031_l }}</td>
        <td class="column5">{{ $dataPuskesmas->nutrisi->e031_p }}</td>
        <td class="column5">{{ $dataPuskesmas->nutrisi->e031_7hari + $dataPuskesmas->nutrisi->e031_28hari + $dataPuskesmas->nutrisi->e031_11bulan + $dataPuskesmas->nutrisi->e031_4tahun + $dataPuskesmas->nutrisi->e031_9tahun + $dataPuskesmas->nutrisi->e031_14tahun + $dataPuskesmas->nutrisi->e031_19tahun + $dataPuskesmas->nutrisi->e031_44tahun + $dataPuskesmas->nutrisi->e031_59tahun + $dataPuskesmas->nutrisi->e031_lebih_59tahun + $dataPuskesmas->nutrisi->e031_l + $dataPuskesmas->nutrisi->e031_p  }}</td>
        <td class="column5">{{ $dataPuskesmas->nutrisi->e031_l_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->nutrisi->e031_p_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->nutrisi->e031_l_lama + $dataPuskesmas->nutrisi->e031_p_lama }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">7</td>
        <td class="column10">Lipidemia</td>
        <td class="column5">E78.5</td>
        <td class="column5">{{ $dataPuskesmas->nutrisi->e785_7hari }}</td>
        <td class="column5">{{ $dataPuskesmas->nutrisi->e785_28hari }}</td>
        <td class="column5">{{ $dataPuskesmas->nutrisi->e785_11bulan }}</td>
        <td class="column5">{{ $dataPuskesmas->nutrisi->e785_4tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->nutrisi->e785_9tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->nutrisi->e785_14tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->nutrisi->e785_19tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->nutrisi->e785_44tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->nutrisi->e785_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->nutrisi->e785_lebih_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->nutrisi->e785_l }}</td>
        <td class="column5">{{ $dataPuskesmas->nutrisi->e785_p }}</td>
        <td class="column5">{{ $dataPuskesmas->nutrisi->e785_7hari + $dataPuskesmas->nutrisi->e785_28hari + $dataPuskesmas->nutrisi->e785_11bulan + $dataPuskesmas->nutrisi->e785_4tahun + $dataPuskesmas->nutrisi->e785_9tahun + $dataPuskesmas->nutrisi->e785_14tahun + $dataPuskesmas->nutrisi->e785_19tahun + $dataPuskesmas->nutrisi->e785_44tahun + $dataPuskesmas->nutrisi->e785_59tahun + $dataPuskesmas->nutrisi->e785_lebih_59tahun + $dataPuskesmas->nutrisi->e785_l + $dataPuskesmas->nutrisi->e785_p  }}</td>
        <td class="column5">{{ $dataPuskesmas->nutrisi->e785_l_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->nutrisi->e785_p_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->nutrisi->e785_l_lama + $dataPuskesmas->nutrisi->e785_p_lama }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">8</td>
        <td class="column10">Malnutrisi energi Protein</td>
        <td class="column5">E46</td>
        <td class="column5">{{ $dataPuskesmas->nutrisi->e46_7hari }}</td>
        <td class="column5">{{ $dataPuskesmas->nutrisi->e46_28hari }}</td>
        <td class="column5">{{ $dataPuskesmas->nutrisi->e46_11bulan }}</td>
        <td class="column5">{{ $dataPuskesmas->nutrisi->e46_4tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->nutrisi->e46_9tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->nutrisi->e46_14tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->nutrisi->e46_19tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->nutrisi->e46_44tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->nutrisi->e46_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->nutrisi->e46_lebih_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->nutrisi->e46_l }}</td>
        <td class="column5">{{ $dataPuskesmas->nutrisi->e46_p }}</td>
        <td class="column5">{{ $dataPuskesmas->nutrisi->e46_7hari + $dataPuskesmas->nutrisi->e46_28hari + $dataPuskesmas->nutrisi->e46_11bulan + $dataPuskesmas->nutrisi->e46_4tahun + $dataPuskesmas->nutrisi->e46_9tahun + $dataPuskesmas->nutrisi->e46_14tahun + $dataPuskesmas->nutrisi->e46_19tahun + $dataPuskesmas->nutrisi->e46_44tahun + $dataPuskesmas->nutrisi->e46_59tahun + $dataPuskesmas->nutrisi->e46_lebih_59tahun + $dataPuskesmas->nutrisi->e46_l + $dataPuskesmas->nutrisi->e46_p  }}</td>
        <td class="column5">{{ $dataPuskesmas->nutrisi->e46_l_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->nutrisi->e46_p_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->nutrisi->e46_l_lama + $dataPuskesmas->nutrisi->e46_p_lama }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">9</td>
        <td class="column10">Obesitas</td>
        <td class="column5">E66.9</td>
        <td class="column5">{{ $dataPuskesmas->nutrisi->e669_7hari }}</td>
        <td class="column5">{{ $dataPuskesmas->nutrisi->e669_28hari }}</td>
        <td class="column5">{{ $dataPuskesmas->nutrisi->e669_11bulan }}</td>
        <td class="column5">{{ $dataPuskesmas->nutrisi->e669_4tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->nutrisi->e669_9tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->nutrisi->e669_14tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->nutrisi->e669_19tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->nutrisi->e669_44tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->nutrisi->e669_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->nutrisi->e669_lebih_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->nutrisi->e669_l }}</td>
        <td class="column5">{{ $dataPuskesmas->nutrisi->e669_p }}</td>
        <td class="column5">{{ $dataPuskesmas->nutrisi->e669_7hari + $dataPuskesmas->nutrisi->e669_28hari + $dataPuskesmas->nutrisi->e669_11bulan + $dataPuskesmas->nutrisi->e669_4tahun + $dataPuskesmas->nutrisi->e669_9tahun + $dataPuskesmas->nutrisi->e669_14tahun + $dataPuskesmas->nutrisi->e669_19tahun + $dataPuskesmas->nutrisi->e669_44tahun + $dataPuskesmas->nutrisi->e669_59tahun + $dataPuskesmas->nutrisi->e669_lebih_59tahun + $dataPuskesmas->nutrisi->e669_l + $dataPuskesmas->nutrisi->e669_p  }}</td>
        <td class="column5">{{ $dataPuskesmas->nutrisi->e669_l_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->nutrisi->e669_p_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->nutrisi->e669_l_lama + $dataPuskesmas->nutrisi->e669_p_lama }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">10</td>
        <td class="column10">Tirotoksikosis</td>
        <td class="column5">E05.9</td>
        <td class="column5">{{ $dataPuskesmas->nutrisi->e059_7hari }}</td>
        <td class="column5">{{ $dataPuskesmas->nutrisi->e059_28hari }}</td>
        <td class="column5">{{ $dataPuskesmas->nutrisi->e059_11bulan }}</td>
        <td class="column5">{{ $dataPuskesmas->nutrisi->e059_4tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->nutrisi->e059_9tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->nutrisi->e059_14tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->nutrisi->e059_19tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->nutrisi->e059_44tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->nutrisi->e059_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->nutrisi->e059_lebih_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->nutrisi->e059_l }}</td>
        <td class="column5">{{ $dataPuskesmas->nutrisi->e059_p }}</td>
        <td class="column5">{{ $dataPuskesmas->nutrisi->e059_7hari + $dataPuskesmas->nutrisi->e059_28hari + $dataPuskesmas->nutrisi->e059_11bulan + $dataPuskesmas->nutrisi->e059_4tahun + $dataPuskesmas->nutrisi->e059_9tahun + $dataPuskesmas->nutrisi->e059_14tahun + $dataPuskesmas->nutrisi->e059_19tahun + $dataPuskesmas->nutrisi->e059_44tahun + $dataPuskesmas->nutrisi->e059_59tahun + $dataPuskesmas->nutrisi->e059_lebih_59tahun + $dataPuskesmas->nutrisi->e059_l + $dataPuskesmas->nutrisi->e059_p  }}</td>
        <td class="column5">{{ $dataPuskesmas->nutrisi->e059_l_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->nutrisi->e059_p_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->nutrisi->e059_l_lama + $dataPuskesmas->nutrisi->e059_p_lama }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">M</td>
        <td class="column10">GINJAL DAN SALURAN KEMIH</td>
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
        <td class="column10">Epispadia</td>
        <td class="column5">Q64.0</td>
        <td class="column5">{{ $dataPuskesmas->ginjal->q640_7hari }}</td>
        <td class="column5">{{ $dataPuskesmas->ginjal->q640_28hari }}</td>
        <td class="column5">{{ $dataPuskesmas->ginjal->q640_11bulan }}</td>
        <td class="column5">{{ $dataPuskesmas->ginjal->q640_4tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->ginjal->q640_9tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->ginjal->q640_14tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->ginjal->q640_19tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->ginjal->q640_44tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->ginjal->q640_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->ginjal->q640_lebih_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->ginjal->q640_l }}</td>
        <td class="column5">{{ $dataPuskesmas->ginjal->q640_p }}</td>
        <td class="column5">{{ $dataPuskesmas->ginjal->q640_7hari + $dataPuskesmas->ginjal->q640_28hari + $dataPuskesmas->ginjal->q640_11bulan + $dataPuskesmas->ginjal->q640_4tahun + $dataPuskesmas->ginjal->q640_9tahun + $dataPuskesmas->ginjal->q640_14tahun + $dataPuskesmas->ginjal->q640_19tahun + $dataPuskesmas->ginjal->q640_44tahun + $dataPuskesmas->ginjal->q640_59tahun + $dataPuskesmas->ginjal->q640_lebih_59tahun + $dataPuskesmas->ginjal->q640_l + $dataPuskesmas->ginjal->q640_p  }}</td>
        <td class="column5">{{ $dataPuskesmas->ginjal->q640_l_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->ginjal->q640_p_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->ginjal->q640_l_lama + $dataPuskesmas->ginjal->q640_p_lama }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">2</td>
        <td class="column10">Fimosis</td>
        <td class="column5">N47</td>
        <td class="column5">{{ $dataPuskesmas->ginjal->n47_7hari }}</td>
        <td class="column5">{{ $dataPuskesmas->ginjal->n47_28hari }}</td>
        <td class="column5">{{ $dataPuskesmas->ginjal->n47_11bulan }}</td>
        <td class="column5">{{ $dataPuskesmas->ginjal->n47_4tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->ginjal->n47_9tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->ginjal->n47_14tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->ginjal->n47_19tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->ginjal->n47_44tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->ginjal->n47_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->ginjal->n47_lebih_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->ginjal->n47_l }}</td>
        <td class="column5">{{ $dataPuskesmas->ginjal->n47_p }}</td>
        <td class="column5">{{ $dataPuskesmas->ginjal->n47_7hari + $dataPuskesmas->ginjal->n47_28hari + $dataPuskesmas->ginjal->n47_11bulan + $dataPuskesmas->ginjal->n47_4tahun + $dataPuskesmas->ginjal->n47_9tahun + $dataPuskesmas->ginjal->n47_14tahun + $dataPuskesmas->ginjal->n47_19tahun + $dataPuskesmas->ginjal->n47_44tahun + $dataPuskesmas->ginjal->n47_59tahun + $dataPuskesmas->ginjal->n47_lebih_59tahun + $dataPuskesmas->ginjal->n47_l + $dataPuskesmas->ginjal->n47_p  }}</td>
        <td class="column5">{{ $dataPuskesmas->ginjal->n47_l_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->ginjal->n47_p_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->ginjal->n47_l_lama + $dataPuskesmas->ginjal->n47_p_lama }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">3</td>
        <td class="column10">Hipertropi prostat</td>
        <td class="column5">N40</td>
        <td class="column5">{{ $dataPuskesmas->ginjal->n40_7hari }}</td>
        <td class="column5">{{ $dataPuskesmas->ginjal->n40_28hari }}</td>
        <td class="column5">{{ $dataPuskesmas->ginjal->n40_11bulan }}</td>
        <td class="column5">{{ $dataPuskesmas->ginjal->n40_4tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->ginjal->n40_9tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->ginjal->n40_14tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->ginjal->n40_19tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->ginjal->n40_44tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->ginjal->n40_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->ginjal->n40_lebih_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->ginjal->n40_l }}</td>
        <td class="column5">{{ $dataPuskesmas->ginjal->n40_p }}</td>
        <td class="column5">{{ $dataPuskesmas->ginjal->n40_7hari + $dataPuskesmas->ginjal->n40_28hari + $dataPuskesmas->ginjal->n40_11bulan + $dataPuskesmas->ginjal->n40_4tahun + $dataPuskesmas->ginjal->n40_9tahun + $dataPuskesmas->ginjal->n40_14tahun + $dataPuskesmas->ginjal->n40_19tahun + $dataPuskesmas->ginjal->n40_44tahun + $dataPuskesmas->ginjal->n40_59tahun + $dataPuskesmas->ginjal->n40_lebih_59tahun + $dataPuskesmas->ginjal->n40_l + $dataPuskesmas->ginjal->n40_p  }}</td>
        <td class="column5">{{ $dataPuskesmas->ginjal->n40_l_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->ginjal->n40_p_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->ginjal->n40_l_lama + $dataPuskesmas->ginjal->n40_p_lama }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">4</td>
        <td class="column10">Hypospadia</td>
        <td class="column5">Q54</td>
        <td class="column5">{{ $dataPuskesmas->ginjal->q54_7hari }}</td>
        <td class="column5">{{ $dataPuskesmas->ginjal->q54_28hari }}</td>
        <td class="column5">{{ $dataPuskesmas->ginjal->q54_11bulan }}</td>
        <td class="column5">{{ $dataPuskesmas->ginjal->q54_4tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->ginjal->q54_9tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->ginjal->q54_14tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->ginjal->q54_19tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->ginjal->q54_44tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->ginjal->q54_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->ginjal->q54_lebih_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->ginjal->q54_l }}</td>
        <td class="column5">{{ $dataPuskesmas->ginjal->q54_p }}</td>
        <td class="column5">{{ $dataPuskesmas->ginjal->q54_7hari + $dataPuskesmas->ginjal->q54_28hari + $dataPuskesmas->ginjal->q54_11bulan + $dataPuskesmas->ginjal->q54_4tahun + $dataPuskesmas->ginjal->q54_9tahun + $dataPuskesmas->ginjal->q54_14tahun + $dataPuskesmas->ginjal->q54_19tahun + $dataPuskesmas->ginjal->q54_44tahun + $dataPuskesmas->ginjal->q54_59tahun + $dataPuskesmas->ginjal->q54_lebih_59tahun + $dataPuskesmas->ginjal->q54_l + $dataPuskesmas->ginjal->q54_p  }}</td>
        <td class="column5">{{ $dataPuskesmas->ginjal->q54_l_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->ginjal->q54_p_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->ginjal->q54_l_lama + $dataPuskesmas->ginjal->q54_p_lama }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">5</td>
        <td class="column10">Infeksi saluran kemih</td>
        <td class="column5">N39.0</td>
        <td class="column5">{{ $dataPuskesmas->ginjal->n390_7hari }}</td>
        <td class="column5">{{ $dataPuskesmas->ginjal->n390_28hari }}</td>
        <td class="column5">{{ $dataPuskesmas->ginjal->n390_11bulan }}</td>
        <td class="column5">{{ $dataPuskesmas->ginjal->n390_4tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->ginjal->n390_9tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->ginjal->n390_14tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->ginjal->n390_19tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->ginjal->n390_44tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->ginjal->n390_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->ginjal->n390_lebih_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->ginjal->n390_l }}</td>
        <td class="column5">{{ $dataPuskesmas->ginjal->n390_p }}</td>
        <td class="column5">{{ $dataPuskesmas->ginjal->n390_7hari + $dataPuskesmas->ginjal->n390_28hari + $dataPuskesmas->ginjal->n390_11bulan + $dataPuskesmas->ginjal->n390_4tahun + $dataPuskesmas->ginjal->n390_9tahun + $dataPuskesmas->ginjal->n390_14tahun + $dataPuskesmas->ginjal->n390_19tahun + $dataPuskesmas->ginjal->n390_44tahun + $dataPuskesmas->ginjal->n390_59tahun + $dataPuskesmas->ginjal->n390_lebih_59tahun + $dataPuskesmas->ginjal->n390_l + $dataPuskesmas->ginjal->n390_p  }}</td>
        <td class="column5">{{ $dataPuskesmas->ginjal->n390_l_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->ginjal->n390_p_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->ginjal->n390_l_lama + $dataPuskesmas->ginjal->n390_p_lama }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">6</td>
        <td class="column10">Parafimosis</td>
        <td class="column5">N47.2</td>
        <td class="column5">{{ $dataPuskesmas->ginjal->n472_7hari }}</td>
        <td class="column5">{{ $dataPuskesmas->ginjal->n472_28hari }}</td>
        <td class="column5">{{ $dataPuskesmas->ginjal->n472_11bulan }}</td>
        <td class="column5">{{ $dataPuskesmas->ginjal->n472_4tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->ginjal->n472_9tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->ginjal->n472_14tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->ginjal->n472_19tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->ginjal->n472_44tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->ginjal->n472_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->ginjal->n472_lebih_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->ginjal->n472_l }}</td>
        <td class="column5">{{ $dataPuskesmas->ginjal->n472_p }}</td>
        <td class="column5">{{ $dataPuskesmas->ginjal->n472_7hari + $dataPuskesmas->ginjal->n472_28hari + $dataPuskesmas->ginjal->n472_11bulan + $dataPuskesmas->ginjal->n472_4tahun + $dataPuskesmas->ginjal->n472_9tahun + $dataPuskesmas->ginjal->n472_14tahun + $dataPuskesmas->ginjal->n472_19tahun + $dataPuskesmas->ginjal->n472_44tahun + $dataPuskesmas->ginjal->n472_59tahun + $dataPuskesmas->ginjal->n472_lebih_59tahun + $dataPuskesmas->ginjal->n472_l + $dataPuskesmas->ginjal->n472_p  }}</td>
        <td class="column5">{{ $dataPuskesmas->ginjal->n472_l_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->ginjal->n472_p_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->ginjal->n472_l_lama + $dataPuskesmas->ginjal->n472_p_lama }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">7</td>
        <td class="column10">Penyakit ginjal kronik</td>
        <td class="column5">N03</td>
        <td class="column5">{{ $dataPuskesmas->ginjal->n03_7hari }}</td>
        <td class="column5">{{ $dataPuskesmas->ginjal->n03_28hari }}</td>
        <td class="column5">{{ $dataPuskesmas->ginjal->n03_11bulan }}</td>
        <td class="column5">{{ $dataPuskesmas->ginjal->n03_4tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->ginjal->n03_9tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->ginjal->n03_14tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->ginjal->n03_19tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->ginjal->n03_44tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->ginjal->n03_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->ginjal->n03_lebih_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->ginjal->n03_l }}</td>
        <td class="column5">{{ $dataPuskesmas->ginjal->n03_p }}</td>
        <td class="column5">{{ $dataPuskesmas->ginjal->n03_7hari + $dataPuskesmas->ginjal->n03_28hari + $dataPuskesmas->ginjal->n03_11bulan + $dataPuskesmas->ginjal->n03_4tahun + $dataPuskesmas->ginjal->n03_9tahun + $dataPuskesmas->ginjal->n03_14tahun + $dataPuskesmas->ginjal->n03_19tahun + $dataPuskesmas->ginjal->n03_44tahun + $dataPuskesmas->ginjal->n03_59tahun + $dataPuskesmas->ginjal->n03_lebih_59tahun + $dataPuskesmas->ginjal->n03_l + $dataPuskesmas->ginjal->n03_p  }}</td>
        <td class="column5">{{ $dataPuskesmas->ginjal->n03_l_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->ginjal->n03_p_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->ginjal->n03_l_lama + $dataPuskesmas->ginjal->n03_p_lama }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">8</td>
        <td class="column10">Pielonefritis tanpa komplikasi</td>
        <td class="column5">N10</td>
        <td class="column5">{{ $dataPuskesmas->ginjal->n10_7hari }}</td>
        <td class="column5">{{ $dataPuskesmas->ginjal->n10_28hari }}</td>
        <td class="column5">{{ $dataPuskesmas->ginjal->n10_11bulan }}</td>
        <td class="column5">{{ $dataPuskesmas->ginjal->n10_4tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->ginjal->n10_9tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->ginjal->n10_14tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->ginjal->n10_19tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->ginjal->n10_44tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->ginjal->n10_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->ginjal->n10_lebih_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->ginjal->n10_l }}</td>
        <td class="column5">{{ $dataPuskesmas->ginjal->n10_p }}</td>
        <td class="column5">{{ $dataPuskesmas->ginjal->n10_7hari + $dataPuskesmas->ginjal->n10_28hari + $dataPuskesmas->ginjal->n10_11bulan + $dataPuskesmas->ginjal->n10_4tahun + $dataPuskesmas->ginjal->n10_9tahun + $dataPuskesmas->ginjal->n10_14tahun + $dataPuskesmas->ginjal->n10_19tahun + $dataPuskesmas->ginjal->n10_44tahun + $dataPuskesmas->ginjal->n10_59tahun + $dataPuskesmas->ginjal->n10_lebih_59tahun + $dataPuskesmas->ginjal->n10_l + $dataPuskesmas->ginjal->n10_p  }}</td>
        <td class="column5">{{ $dataPuskesmas->ginjal->n10_l_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->ginjal->n10_p_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->ginjal->n10_l_lama + $dataPuskesmas->ginjal->n10_p_lama }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">N</td>
        <td class="column10">KESEHATAN WANITA</td>
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
        <td class="column10">Abortus</td>
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
        <td class="column5 textCenter"></td>
        <td class="column10">a. Abortus inkomplit</td>
        <td class="column5">O06.4</td>
        <td class="column5">{{ $dataPuskesmas->kesehatanWanita->o064_7hari }}</td>
        <td class="column5">{{ $dataPuskesmas->kesehatanWanita->o064_28hari }}</td>
        <td class="column5">{{ $dataPuskesmas->kesehatanWanita->o064_11bulan }}</td>
        <td class="column5">{{ $dataPuskesmas->kesehatanWanita->o064_4tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kesehatanWanita->o064_9tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kesehatanWanita->o064_14tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kesehatanWanita->o064_19tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kesehatanWanita->o064_44tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kesehatanWanita->o064_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kesehatanWanita->o064_lebih_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kesehatanWanita->o064_l }}</td>
        <td class="column5">{{ $dataPuskesmas->kesehatanWanita->o064_p }}</td>
        <td class="column5">{{ $dataPuskesmas->kesehatanWanita->o064_7hari + $dataPuskesmas->kesehatanWanita->o064_28hari + $dataPuskesmas->kesehatanWanita->o064_11bulan + $dataPuskesmas->kesehatanWanita->o064_4tahun + $dataPuskesmas->kesehatanWanita->o064_9tahun + $dataPuskesmas->kesehatanWanita->o064_14tahun + $dataPuskesmas->kesehatanWanita->o064_19tahun + $dataPuskesmas->kesehatanWanita->o064_44tahun + $dataPuskesmas->kesehatanWanita->o064_59tahun + $dataPuskesmas->kesehatanWanita->o064_lebih_59tahun + $dataPuskesmas->kesehatanWanita->o064_l + $dataPuskesmas->kesehatanWanita->o064_p  }}</td>
        <td class="column5">{{ $dataPuskesmas->kesehatanWanita->o064_l_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->kesehatanWanita->o064_p_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->kesehatanWanita->o064_l_lama + $dataPuskesmas->kesehatanWanita->o064_p_lama }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter"></td>
        <td class="column10">b. Abortus komplit</td>
        <td class="column5">O03.9</td>
        <td class="column5">{{ $dataPuskesmas->kesehatanWanita->o039_7hari }}</td>
        <td class="column5">{{ $dataPuskesmas->kesehatanWanita->o039_28hari }}</td>
        <td class="column5">{{ $dataPuskesmas->kesehatanWanita->o039_11bulan }}</td>
        <td class="column5">{{ $dataPuskesmas->kesehatanWanita->o039_4tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kesehatanWanita->o039_9tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kesehatanWanita->o039_14tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kesehatanWanita->o039_19tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kesehatanWanita->o039_44tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kesehatanWanita->o039_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kesehatanWanita->o039_lebih_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kesehatanWanita->o039_l }}</td>
        <td class="column5">{{ $dataPuskesmas->kesehatanWanita->o039_p }}</td>
        <td class="column5">{{ $dataPuskesmas->kesehatanWanita->o039_7hari + $dataPuskesmas->kesehatanWanita->o039_28hari + $dataPuskesmas->kesehatanWanita->o039_11bulan + $dataPuskesmas->kesehatanWanita->o039_4tahun + $dataPuskesmas->kesehatanWanita->o039_9tahun + $dataPuskesmas->kesehatanWanita->o039_14tahun + $dataPuskesmas->kesehatanWanita->o039_19tahun + $dataPuskesmas->kesehatanWanita->o039_44tahun + $dataPuskesmas->kesehatanWanita->o039_59tahun + $dataPuskesmas->kesehatanWanita->o039_lebih_59tahun + $dataPuskesmas->kesehatanWanita->o039_l + $dataPuskesmas->kesehatanWanita->o039_p  }}</td>
        <td class="column5">{{ $dataPuskesmas->kesehatanWanita->o039_l_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->kesehatanWanita->o039_p_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->kesehatanWanita->o039_l_lama + $dataPuskesmas->kesehatanWanita->o039_p_lama }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">2</td>
        <td class="column10">Anemia defisiensi besi pada kehamilan</td>
        <td class="column5">O99.0</td>
        <td class="column5">{{ $dataPuskesmas->kesehatanWanita->o990_7hari }}</td>
        <td class="column5">{{ $dataPuskesmas->kesehatanWanita->o990_28hari }}</td>
        <td class="column5">{{ $dataPuskesmas->kesehatanWanita->o990_11bulan }}</td>
        <td class="column5">{{ $dataPuskesmas->kesehatanWanita->o990_4tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kesehatanWanita->o990_9tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kesehatanWanita->o990_14tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kesehatanWanita->o990_19tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kesehatanWanita->o990_44tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kesehatanWanita->o990_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kesehatanWanita->o990_lebih_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kesehatanWanita->o990_l }}</td>
        <td class="column5">{{ $dataPuskesmas->kesehatanWanita->o990_p }}</td>
        <td class="column5">{{ $dataPuskesmas->kesehatanWanita->o990_7hari + $dataPuskesmas->kesehatanWanita->o990_28hari + $dataPuskesmas->kesehatanWanita->o990_11bulan + $dataPuskesmas->kesehatanWanita->o990_4tahun + $dataPuskesmas->kesehatanWanita->o990_9tahun + $dataPuskesmas->kesehatanWanita->o990_14tahun + $dataPuskesmas->kesehatanWanita->o990_19tahun + $dataPuskesmas->kesehatanWanita->o990_44tahun + $dataPuskesmas->kesehatanWanita->o990_59tahun + $dataPuskesmas->kesehatanWanita->o990_lebih_59tahun + $dataPuskesmas->kesehatanWanita->o990_l + $dataPuskesmas->kesehatanWanita->o990_p  }}</td>
        <td class="column5">{{ $dataPuskesmas->kesehatanWanita->o990_l_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->kesehatanWanita->o990_p_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->kesehatanWanita->o990_l_lama + $dataPuskesmas->kesehatanWanita->o990_p_lama }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">3</td>
        <td class="column10">Cracked Nipple</td>
        <td class="column5">O9212</td>
        <td class="column5">{{ $dataPuskesmas->kesehatanWanita->o9212_7hari }}</td>
        <td class="column5">{{ $dataPuskesmas->kesehatanWanita->o9212_28hari }}</td>
        <td class="column5">{{ $dataPuskesmas->kesehatanWanita->o9212_11bulan }}</td>
        <td class="column5">{{ $dataPuskesmas->kesehatanWanita->o9212_4tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kesehatanWanita->o9212_9tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kesehatanWanita->o9212_14tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kesehatanWanita->o9212_19tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kesehatanWanita->o9212_44tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kesehatanWanita->o9212_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kesehatanWanita->o9212_lebih_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kesehatanWanita->o9212_l }}</td>
        <td class="column5">{{ $dataPuskesmas->kesehatanWanita->o9212_p }}</td>
        <td class="column5">{{ $dataPuskesmas->kesehatanWanita->o9212_7hari + $dataPuskesmas->kesehatanWanita->o9212_28hari + $dataPuskesmas->kesehatanWanita->o9212_11bulan + $dataPuskesmas->kesehatanWanita->o9212_4tahun + $dataPuskesmas->kesehatanWanita->o9212_9tahun + $dataPuskesmas->kesehatanWanita->o9212_14tahun + $dataPuskesmas->kesehatanWanita->o9212_19tahun + $dataPuskesmas->kesehatanWanita->o9212_44tahun + $dataPuskesmas->kesehatanWanita->o9212_59tahun + $dataPuskesmas->kesehatanWanita->o9212_lebih_59tahun + $dataPuskesmas->kesehatanWanita->o9212_l + $dataPuskesmas->kesehatanWanita->o9212_p  }}</td>
        <td class="column5">{{ $dataPuskesmas->kesehatanWanita->o9212_l_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->kesehatanWanita->o9212_p_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->kesehatanWanita->o9212_l_lama + $dataPuskesmas->kesehatanWanita->o9212_p_lama }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">4</td>
        <td class="column10">Eklampsi</td>
        <td class="column5">O15.9</td>
        <td class="column5">{{ $dataPuskesmas->kesehatanWanita->o159_7hari }}</td>
        <td class="column5">{{ $dataPuskesmas->kesehatanWanita->o159_28hari }}</td>
        <td class="column5">{{ $dataPuskesmas->kesehatanWanita->o159_11bulan }}</td>
        <td class="column5">{{ $dataPuskesmas->kesehatanWanita->o159_4tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kesehatanWanita->o159_9tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kesehatanWanita->o159_14tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kesehatanWanita->o159_19tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kesehatanWanita->o159_44tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kesehatanWanita->o159_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kesehatanWanita->o159_lebih_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kesehatanWanita->o159_l }}</td>
        <td class="column5">{{ $dataPuskesmas->kesehatanWanita->o159_p }}</td>
        <td class="column5">{{ $dataPuskesmas->kesehatanWanita->o159_7hari + $dataPuskesmas->kesehatanWanita->o159_28hari + $dataPuskesmas->kesehatanWanita->o159_11bulan + $dataPuskesmas->kesehatanWanita->o159_4tahun + $dataPuskesmas->kesehatanWanita->o159_9tahun + $dataPuskesmas->kesehatanWanita->o159_14tahun + $dataPuskesmas->kesehatanWanita->o159_19tahun + $dataPuskesmas->kesehatanWanita->o159_44tahun + $dataPuskesmas->kesehatanWanita->o159_59tahun + $dataPuskesmas->kesehatanWanita->o159_lebih_59tahun + $dataPuskesmas->kesehatanWanita->o159_l + $dataPuskesmas->kesehatanWanita->o159_p  }}</td>
        <td class="column5">{{ $dataPuskesmas->kesehatanWanita->o159_l_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->kesehatanWanita->o159_p_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->kesehatanWanita->o159_l_lama + $dataPuskesmas->kesehatanWanita->o159_p_lama }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">5</td>
        <td class="column10">Hiperemesis gravidarum</td>
        <td class="column5">O21.0</td>
        <td class="column5">{{ $dataPuskesmas->kesehatanWanita->o210_7hari }}</td>
        <td class="column5">{{ $dataPuskesmas->kesehatanWanita->o210_28hari }}</td>
        <td class="column5">{{ $dataPuskesmas->kesehatanWanita->o210_11bulan }}</td>
        <td class="column5">{{ $dataPuskesmas->kesehatanWanita->o210_4tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kesehatanWanita->o210_9tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kesehatanWanita->o210_14tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kesehatanWanita->o210_19tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kesehatanWanita->o210_44tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kesehatanWanita->o210_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kesehatanWanita->o210_lebih_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kesehatanWanita->o210_l }}</td>
        <td class="column5">{{ $dataPuskesmas->kesehatanWanita->o210_p }}</td>
        <td class="column5">{{ $dataPuskesmas->kesehatanWanita->o210_7hari + $dataPuskesmas->kesehatanWanita->o210_28hari + $dataPuskesmas->kesehatanWanita->o210_11bulan + $dataPuskesmas->kesehatanWanita->o210_4tahun + $dataPuskesmas->kesehatanWanita->o210_9tahun + $dataPuskesmas->kesehatanWanita->o210_14tahun + $dataPuskesmas->kesehatanWanita->o210_19tahun + $dataPuskesmas->kesehatanWanita->o210_44tahun + $dataPuskesmas->kesehatanWanita->o210_59tahun + $dataPuskesmas->kesehatanWanita->o210_lebih_59tahun + $dataPuskesmas->kesehatanWanita->o210_l + $dataPuskesmas->kesehatanWanita->o210_p  }}</td>
        <td class="column5">{{ $dataPuskesmas->kesehatanWanita->o210_l_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->kesehatanWanita->o210_p_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->kesehatanWanita->o210_l_lama + $dataPuskesmas->kesehatanWanita->o210_p_lama }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">6</td>
        <td class="column10">Inverted Nipple</td>
        <td class="column5">O92.02</td>
        <td class="column5">{{ $dataPuskesmas->kesehatanWanita->o9202_7hari }}</td>
        <td class="column5">{{ $dataPuskesmas->kesehatanWanita->o9202_28hari }}</td>
        <td class="column5">{{ $dataPuskesmas->kesehatanWanita->o9202_11bulan }}</td>
        <td class="column5">{{ $dataPuskesmas->kesehatanWanita->o9202_4tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kesehatanWanita->o9202_9tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kesehatanWanita->o9202_14tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kesehatanWanita->o9202_19tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kesehatanWanita->o9202_44tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kesehatanWanita->o9202_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kesehatanWanita->o9202_lebih_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kesehatanWanita->o9202_l }}</td>
        <td class="column5">{{ $dataPuskesmas->kesehatanWanita->o9202_p }}</td>
        <td class="column5">{{ $dataPuskesmas->kesehatanWanita->o9202_7hari + $dataPuskesmas->kesehatanWanita->o9202_28hari + $dataPuskesmas->kesehatanWanita->o9202_11bulan + $dataPuskesmas->kesehatanWanita->o9202_4tahun + $dataPuskesmas->kesehatanWanita->o9202_9tahun + $dataPuskesmas->kesehatanWanita->o9202_14tahun + $dataPuskesmas->kesehatanWanita->o9202_19tahun + $dataPuskesmas->kesehatanWanita->o9202_44tahun + $dataPuskesmas->kesehatanWanita->o9202_59tahun + $dataPuskesmas->kesehatanWanita->o9202_lebih_59tahun + $dataPuskesmas->kesehatanWanita->o9202_l + $dataPuskesmas->kesehatanWanita->o9202_p  }}</td>
        <td class="column5">{{ $dataPuskesmas->kesehatanWanita->o9202_l_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->kesehatanWanita->o9202_p_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->kesehatanWanita->o9202_l_lama + $dataPuskesmas->kesehatanWanita->o9202_p_lama }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">7</td>
        <td class="column10">Kanker serviks</td>
        <td class="column5">C53.9</td>
        <td class="column5">{{ $dataPuskesmas->kesehatanWanita->c539_7hari }}</td>
        <td class="column5">{{ $dataPuskesmas->kesehatanWanita->c539_28hari }}</td>
        <td class="column5">{{ $dataPuskesmas->kesehatanWanita->c539_11bulan }}</td>
        <td class="column5">{{ $dataPuskesmas->kesehatanWanita->c539_4tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kesehatanWanita->c539_9tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kesehatanWanita->c539_14tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kesehatanWanita->c539_19tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kesehatanWanita->c539_44tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kesehatanWanita->c539_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kesehatanWanita->c539_lebih_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kesehatanWanita->c539_l }}</td>
        <td class="column5">{{ $dataPuskesmas->kesehatanWanita->c539_p }}</td>
        <td class="column5">{{ $dataPuskesmas->kesehatanWanita->c539_7hari + $dataPuskesmas->kesehatanWanita->c539_28hari + $dataPuskesmas->kesehatanWanita->c539_11bulan + $dataPuskesmas->kesehatanWanita->c539_4tahun + $dataPuskesmas->kesehatanWanita->c539_9tahun + $dataPuskesmas->kesehatanWanita->c539_14tahun + $dataPuskesmas->kesehatanWanita->c539_19tahun + $dataPuskesmas->kesehatanWanita->c539_44tahun + $dataPuskesmas->kesehatanWanita->c539_59tahun + $dataPuskesmas->kesehatanWanita->c539_lebih_59tahun + $dataPuskesmas->kesehatanWanita->c539_l + $dataPuskesmas->kesehatanWanita->c539_p  }}</td>
        <td class="column5">{{ $dataPuskesmas->kesehatanWanita->c539_l_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->kesehatanWanita->c539_p_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->kesehatanWanita->c539_l_lama + $dataPuskesmas->kesehatanWanita->c539_p_lama }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">8</td>
        <td class="column10">Kehamilan normal</td>
        <td class="column5">O80.9</td>
        <td class="column5">{{ $dataPuskesmas->kesehatanWanita->o809_7hari }}</td>
        <td class="column5">{{ $dataPuskesmas->kesehatanWanita->o809_28hari }}</td>
        <td class="column5">{{ $dataPuskesmas->kesehatanWanita->o809_11bulan }}</td>
        <td class="column5">{{ $dataPuskesmas->kesehatanWanita->o809_4tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kesehatanWanita->o809_9tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kesehatanWanita->o809_14tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kesehatanWanita->o809_19tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kesehatanWanita->o809_44tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kesehatanWanita->o809_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kesehatanWanita->o809_lebih_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kesehatanWanita->o809_l }}</td>
        <td class="column5">{{ $dataPuskesmas->kesehatanWanita->o809_p }}</td>
        <td class="column5">{{ $dataPuskesmas->kesehatanWanita->o809_7hari + $dataPuskesmas->kesehatanWanita->o809_28hari + $dataPuskesmas->kesehatanWanita->o809_11bulan + $dataPuskesmas->kesehatanWanita->o809_4tahun + $dataPuskesmas->kesehatanWanita->o809_9tahun + $dataPuskesmas->kesehatanWanita->o809_14tahun + $dataPuskesmas->kesehatanWanita->o809_19tahun + $dataPuskesmas->kesehatanWanita->o809_44tahun + $dataPuskesmas->kesehatanWanita->o809_59tahun + $dataPuskesmas->kesehatanWanita->o809_lebih_59tahun + $dataPuskesmas->kesehatanWanita->o809_l + $dataPuskesmas->kesehatanWanita->o809_p  }}</td>
        <td class="column5">{{ $dataPuskesmas->kesehatanWanita->o809_l_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->kesehatanWanita->o809_p_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->kesehatanWanita->o809_l_lama + $dataPuskesmas->kesehatanWanita->o809_p_lama }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">9</td>
        <td class="column10">Ketuban pecah dini</td>
        <td class="column5">O42.9</td>
        <td class="column5">{{ $dataPuskesmas->kesehatanWanita->o429_7hari }}</td>
        <td class="column5">{{ $dataPuskesmas->kesehatanWanita->o429_28hari }}</td>
        <td class="column5">{{ $dataPuskesmas->kesehatanWanita->o429_11bulan }}</td>
        <td class="column5">{{ $dataPuskesmas->kesehatanWanita->o429_4tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kesehatanWanita->o429_9tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kesehatanWanita->o429_14tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kesehatanWanita->o429_19tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kesehatanWanita->o429_44tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kesehatanWanita->o429_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kesehatanWanita->o429_lebih_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kesehatanWanita->o429_l }}</td>
        <td class="column5">{{ $dataPuskesmas->kesehatanWanita->o429_p }}</td>
        <td class="column5">{{ $dataPuskesmas->kesehatanWanita->o429_7hari + $dataPuskesmas->kesehatanWanita->o429_28hari + $dataPuskesmas->kesehatanWanita->o429_11bulan + $dataPuskesmas->kesehatanWanita->o429_4tahun + $dataPuskesmas->kesehatanWanita->o429_9tahun + $dataPuskesmas->kesehatanWanita->o429_14tahun + $dataPuskesmas->kesehatanWanita->o429_19tahun + $dataPuskesmas->kesehatanWanita->o429_44tahun + $dataPuskesmas->kesehatanWanita->o429_59tahun + $dataPuskesmas->kesehatanWanita->o429_lebih_59tahun + $dataPuskesmas->kesehatanWanita->o429_l + $dataPuskesmas->kesehatanWanita->o429_p  }}</td>
        <td class="column5">{{ $dataPuskesmas->kesehatanWanita->o429_l_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->kesehatanWanita->o429_p_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->kesehatanWanita->o429_l_lama + $dataPuskesmas->kesehatanWanita->o429_p_lama }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">10</td>
        <td class="column10">Mastitis</td>
        <td class="column5">N61</td>
        <td class="column5">{{ $dataPuskesmas->kesehatanWanita->n61_7hari }}</td>
        <td class="column5">{{ $dataPuskesmas->kesehatanWanita->n61_28hari }}</td>
        <td class="column5">{{ $dataPuskesmas->kesehatanWanita->n61_11bulan }}</td>
        <td class="column5">{{ $dataPuskesmas->kesehatanWanita->n61_4tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kesehatanWanita->n61_9tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kesehatanWanita->n61_14tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kesehatanWanita->n61_19tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kesehatanWanita->n61_44tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kesehatanWanita->n61_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kesehatanWanita->n61_lebih_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kesehatanWanita->n61_l }}</td>
        <td class="column5">{{ $dataPuskesmas->kesehatanWanita->n61_p }}</td>
        <td class="column5">{{ $dataPuskesmas->kesehatanWanita->n61_7hari + $dataPuskesmas->kesehatanWanita->n61_28hari + $dataPuskesmas->kesehatanWanita->n61_11bulan + $dataPuskesmas->kesehatanWanita->n61_4tahun + $dataPuskesmas->kesehatanWanita->n61_9tahun + $dataPuskesmas->kesehatanWanita->n61_14tahun + $dataPuskesmas->kesehatanWanita->n61_19tahun + $dataPuskesmas->kesehatanWanita->n61_44tahun + $dataPuskesmas->kesehatanWanita->n61_59tahun + $dataPuskesmas->kesehatanWanita->n61_lebih_59tahun + $dataPuskesmas->kesehatanWanita->n61_l + $dataPuskesmas->kesehatanWanita->n61_p  }}</td>
        <td class="column5">{{ $dataPuskesmas->kesehatanWanita->n61_l_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->kesehatanWanita->n61_p_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->kesehatanWanita->n61_l_lama + $dataPuskesmas->kesehatanWanita->n61_p_lama }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">11</td>
        <td class="column10">Perdarahan post partum</td>
        <td class="column5">O72.1</td>
        <td class="column5">{{ $dataPuskesmas->kesehatanWanita->o721_7hari }}</td>
        <td class="column5">{{ $dataPuskesmas->kesehatanWanita->o721_28hari }}</td>
        <td class="column5">{{ $dataPuskesmas->kesehatanWanita->o721_11bulan }}</td>
        <td class="column5">{{ $dataPuskesmas->kesehatanWanita->o721_4tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kesehatanWanita->o721_9tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kesehatanWanita->o721_14tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kesehatanWanita->o721_19tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kesehatanWanita->o721_44tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kesehatanWanita->o721_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kesehatanWanita->o721_lebih_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kesehatanWanita->o721_l }}</td>
        <td class="column5">{{ $dataPuskesmas->kesehatanWanita->o721_p }}</td>
        <td class="column5">{{ $dataPuskesmas->kesehatanWanita->o721_7hari + $dataPuskesmas->kesehatanWanita->o721_28hari + $dataPuskesmas->kesehatanWanita->o721_11bulan + $dataPuskesmas->kesehatanWanita->o721_4tahun + $dataPuskesmas->kesehatanWanita->o721_9tahun + $dataPuskesmas->kesehatanWanita->o721_14tahun + $dataPuskesmas->kesehatanWanita->o721_19tahun + $dataPuskesmas->kesehatanWanita->o721_44tahun + $dataPuskesmas->kesehatanWanita->o721_59tahun + $dataPuskesmas->kesehatanWanita->o721_lebih_59tahun + $dataPuskesmas->kesehatanWanita->o721_l + $dataPuskesmas->kesehatanWanita->o721_p  }}</td>
        <td class="column5">{{ $dataPuskesmas->kesehatanWanita->o721_l_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->kesehatanWanita->o721_p_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->kesehatanWanita->o721_l_lama + $dataPuskesmas->kesehatanWanita->o721_p_lama }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">12</td>
        <td class="column10">Persalinan lama</td>
        <td class="column5">O63.9</td>
        <td class="column5">{{ $dataPuskesmas->kesehatanWanita->o639_7hari }}</td>
        <td class="column5">{{ $dataPuskesmas->kesehatanWanita->o639_28hari }}</td>
        <td class="column5">{{ $dataPuskesmas->kesehatanWanita->o639_11bulan }}</td>
        <td class="column5">{{ $dataPuskesmas->kesehatanWanita->o639_4tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kesehatanWanita->o639_9tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kesehatanWanita->o639_14tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kesehatanWanita->o639_19tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kesehatanWanita->o639_44tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kesehatanWanita->o639_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kesehatanWanita->o639_lebih_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kesehatanWanita->o639_l }}</td>
        <td class="column5">{{ $dataPuskesmas->kesehatanWanita->o639_p }}</td>
        <td class="column5">{{ $dataPuskesmas->kesehatanWanita->o639_7hari + $dataPuskesmas->kesehatanWanita->o639_28hari + $dataPuskesmas->kesehatanWanita->o639_11bulan + $dataPuskesmas->kesehatanWanita->o639_4tahun + $dataPuskesmas->kesehatanWanita->o639_9tahun + $dataPuskesmas->kesehatanWanita->o639_14tahun + $dataPuskesmas->kesehatanWanita->o639_19tahun + $dataPuskesmas->kesehatanWanita->o639_44tahun + $dataPuskesmas->kesehatanWanita->o639_59tahun + $dataPuskesmas->kesehatanWanita->o639_lebih_59tahun + $dataPuskesmas->kesehatanWanita->o639_l + $dataPuskesmas->kesehatanWanita->o639_p  }}</td>
        <td class="column5">{{ $dataPuskesmas->kesehatanWanita->o639_l_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->kesehatanWanita->o639_p_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->kesehatanWanita->o639_l_lama + $dataPuskesmas->kesehatanWanita->o639_p_lama }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">13</td>
        <td class="column10">Pre eklampsia</td>
        <td class="column5">O14.9</td>
        <td class="column5">{{ $dataPuskesmas->kesehatanWanita->o149_7hari }}</td>
        <td class="column5">{{ $dataPuskesmas->kesehatanWanita->o149_28hari }}</td>
        <td class="column5">{{ $dataPuskesmas->kesehatanWanita->o149_11bulan }}</td>
        <td class="column5">{{ $dataPuskesmas->kesehatanWanita->o149_4tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kesehatanWanita->o149_9tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kesehatanWanita->o149_14tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kesehatanWanita->o149_19tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kesehatanWanita->o149_44tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kesehatanWanita->o149_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kesehatanWanita->o149_lebih_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kesehatanWanita->o149_l }}</td>
        <td class="column5">{{ $dataPuskesmas->kesehatanWanita->o149_p }}</td>
        <td class="column5">{{ $dataPuskesmas->kesehatanWanita->o149_7hari + $dataPuskesmas->kesehatanWanita->o149_28hari + $dataPuskesmas->kesehatanWanita->o149_11bulan + $dataPuskesmas->kesehatanWanita->o149_4tahun + $dataPuskesmas->kesehatanWanita->o149_9tahun + $dataPuskesmas->kesehatanWanita->o149_14tahun + $dataPuskesmas->kesehatanWanita->o149_19tahun + $dataPuskesmas->kesehatanWanita->o149_44tahun + $dataPuskesmas->kesehatanWanita->o149_59tahun + $dataPuskesmas->kesehatanWanita->o149_lebih_59tahun + $dataPuskesmas->kesehatanWanita->o149_l + $dataPuskesmas->kesehatanWanita->o149_p  }}</td>
        <td class="column5">{{ $dataPuskesmas->kesehatanWanita->o149_l_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->kesehatanWanita->o149_p_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->kesehatanWanita->o149_l_lama + $dataPuskesmas->kesehatanWanita->o149_p_lama }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">14</td>
        <td class="column10">Ruptur perineum tingkat 1-2</td>
        <td class="column5">O70.0</td>
        <td class="column5">{{ $dataPuskesmas->kesehatanWanita->o070_7hari }}</td>
        <td class="column5">{{ $dataPuskesmas->kesehatanWanita->o070_28hari }}</td>
        <td class="column5">{{ $dataPuskesmas->kesehatanWanita->o070_11bulan }}</td>
        <td class="column5">{{ $dataPuskesmas->kesehatanWanita->o070_4tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kesehatanWanita->o070_9tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kesehatanWanita->o070_14tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kesehatanWanita->o070_19tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kesehatanWanita->o070_44tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kesehatanWanita->o070_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kesehatanWanita->o070_lebih_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kesehatanWanita->o070_l }}</td>
        <td class="column5">{{ $dataPuskesmas->kesehatanWanita->o070_p }}</td>
        <td class="column5">{{ $dataPuskesmas->kesehatanWanita->o070_7hari + $dataPuskesmas->kesehatanWanita->o070_28hari + $dataPuskesmas->kesehatanWanita->o070_11bulan + $dataPuskesmas->kesehatanWanita->o070_4tahun + $dataPuskesmas->kesehatanWanita->o070_9tahun + $dataPuskesmas->kesehatanWanita->o070_14tahun + $dataPuskesmas->kesehatanWanita->o070_19tahun + $dataPuskesmas->kesehatanWanita->o070_44tahun + $dataPuskesmas->kesehatanWanita->o070_59tahun + $dataPuskesmas->kesehatanWanita->o070_lebih_59tahun + $dataPuskesmas->kesehatanWanita->o070_l + $dataPuskesmas->kesehatanWanita->o070_p  }}</td>
        <td class="column5">{{ $dataPuskesmas->kesehatanWanita->o070_l_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->kesehatanWanita->o070_p_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->kesehatanWanita->o070_l_lama + $dataPuskesmas->kesehatanWanita->o070_p_lama }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">15</td>
        <td class="column10">Tumor payudara</td>
        <td class="column5">C50.9</td>
        <td class="column5">{{ $dataPuskesmas->kesehatanWanita->c509_7hari }}</td>
        <td class="column5">{{ $dataPuskesmas->kesehatanWanita->c509_28hari }}</td>
        <td class="column5">{{ $dataPuskesmas->kesehatanWanita->c509_11bulan }}</td>
        <td class="column5">{{ $dataPuskesmas->kesehatanWanita->c509_4tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kesehatanWanita->c509_9tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kesehatanWanita->c509_14tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kesehatanWanita->c509_19tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kesehatanWanita->c509_44tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kesehatanWanita->c509_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kesehatanWanita->c509_lebih_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kesehatanWanita->c509_l }}</td>
        <td class="column5">{{ $dataPuskesmas->kesehatanWanita->c509_p }}</td>
        <td class="column5">{{ $dataPuskesmas->kesehatanWanita->c509_7hari + $dataPuskesmas->kesehatanWanita->c509_28hari + $dataPuskesmas->kesehatanWanita->c509_11bulan + $dataPuskesmas->kesehatanWanita->c509_4tahun + $dataPuskesmas->kesehatanWanita->c509_9tahun + $dataPuskesmas->kesehatanWanita->c509_14tahun + $dataPuskesmas->kesehatanWanita->c509_19tahun + $dataPuskesmas->kesehatanWanita->c509_44tahun + $dataPuskesmas->kesehatanWanita->c509_59tahun + $dataPuskesmas->kesehatanWanita->c509_lebih_59tahun + $dataPuskesmas->kesehatanWanita->c509_l + $dataPuskesmas->kesehatanWanita->c509_p  }}</td>
        <td class="column5">{{ $dataPuskesmas->kesehatanWanita->c509_l_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->kesehatanWanita->c509_p_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->kesehatanWanita->c509_l_lama + $dataPuskesmas->kesehatanWanita->c509_p_lama }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">O</td>
        <td class="column10">PENYAKIT KELAMIN</td>
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
        <td class="column10">Fluor albus</td>
        <td class="column5">N98.9</td>
        <td class="column5">{{ $dataPuskesmas->kelamin->n989_7hari }}</td>
        <td class="column5">{{ $dataPuskesmas->kelamin->n989_28hari }}</td>
        <td class="column5">{{ $dataPuskesmas->kelamin->n989_11bulan }}</td>
        <td class="column5">{{ $dataPuskesmas->kelamin->n989_4tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kelamin->n989_9tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kelamin->n989_14tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kelamin->n989_19tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kelamin->n989_44tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kelamin->n989_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kelamin->n989_lebih_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kelamin->n989_l }}</td>
        <td class="column5">{{ $dataPuskesmas->kelamin->n989_p }}</td>
        <td class="column5">{{ $dataPuskesmas->kelamin->n989_7hari + $dataPuskesmas->kelamin->n989_28hari + $dataPuskesmas->kelamin->n989_11bulan + $dataPuskesmas->kelamin->n989_4tahun + $dataPuskesmas->kelamin->n989_9tahun + $dataPuskesmas->kelamin->n989_14tahun + $dataPuskesmas->kelamin->n989_19tahun + $dataPuskesmas->kelamin->n989_44tahun + $dataPuskesmas->kelamin->n989_59tahun + $dataPuskesmas->kelamin->n989_lebih_59tahun + $dataPuskesmas->kelamin->n989_l + $dataPuskesmas->kelamin->n989_p  }}</td>
        <td class="column5">{{ $dataPuskesmas->kelamin->n989_l_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->kelamin->n989_p_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->kelamin->n989_l_lama + $dataPuskesmas->kelamin->n989_p_lama }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">2</td>
        <td class="column10">Sifilis</td>
        <td class="column5">A53.9</td>
        <td class="column5">{{ $dataPuskesmas->kelamin->a539_7hari }}</td>
        <td class="column5">{{ $dataPuskesmas->kelamin->a539_28hari }}</td>
        <td class="column5">{{ $dataPuskesmas->kelamin->a539_11bulan }}</td>
        <td class="column5">{{ $dataPuskesmas->kelamin->a539_4tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kelamin->a539_9tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kelamin->a539_14tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kelamin->a539_19tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kelamin->a539_44tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kelamin->a539_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kelamin->a539_lebih_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kelamin->a539_l }}</td>
        <td class="column5">{{ $dataPuskesmas->kelamin->a539_p }}</td>
        <td class="column5">{{ $dataPuskesmas->kelamin->a539_7hari + $dataPuskesmas->kelamin->a539_28hari + $dataPuskesmas->kelamin->a539_11bulan + $dataPuskesmas->kelamin->a539_4tahun + $dataPuskesmas->kelamin->a539_9tahun + $dataPuskesmas->kelamin->a539_14tahun + $dataPuskesmas->kelamin->a539_19tahun + $dataPuskesmas->kelamin->a539_44tahun + $dataPuskesmas->kelamin->a539_59tahun + $dataPuskesmas->kelamin->a539_lebih_59tahun + $dataPuskesmas->kelamin->a539_l + $dataPuskesmas->kelamin->a539_p  }}</td>
        <td class="column5">{{ $dataPuskesmas->kelamin->a539_l_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->kelamin->a539_p_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->kelamin->a539_l_lama + $dataPuskesmas->kelamin->a539_p_lama }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">3</td>
        <td class="column10">Gonore</td>
        <td class="column5">A54.9</td>
        <td class="column5">{{ $dataPuskesmas->kelamin->a549_7hari }}</td>
        <td class="column5">{{ $dataPuskesmas->kelamin->a549_28hari }}</td>
        <td class="column5">{{ $dataPuskesmas->kelamin->a549_11bulan }}</td>
        <td class="column5">{{ $dataPuskesmas->kelamin->a549_4tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kelamin->a549_9tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kelamin->a549_14tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kelamin->a549_19tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kelamin->a549_44tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kelamin->a549_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kelamin->a549_lebih_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kelamin->a549_l }}</td>
        <td class="column5">{{ $dataPuskesmas->kelamin->a549_p }}</td>
        <td class="column5">{{ $dataPuskesmas->kelamin->a549_7hari + $dataPuskesmas->kelamin->a549_28hari + $dataPuskesmas->kelamin->a549_11bulan + $dataPuskesmas->kelamin->a549_4tahun + $dataPuskesmas->kelamin->a549_9tahun + $dataPuskesmas->kelamin->a549_14tahun + $dataPuskesmas->kelamin->a549_19tahun + $dataPuskesmas->kelamin->a549_44tahun + $dataPuskesmas->kelamin->a549_59tahun + $dataPuskesmas->kelamin->a549_lebih_59tahun + $dataPuskesmas->kelamin->a549_l + $dataPuskesmas->kelamin->a549_p  }}</td>
        <td class="column5">{{ $dataPuskesmas->kelamin->a549_l_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->kelamin->a549_p_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->kelamin->a549_l_lama + $dataPuskesmas->kelamin->a549_p_lama }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">4</td>
        <td class="column10">Vaginitis</td>
        <td class="column5">N76.0</td>
        <td class="column5">{{ $dataPuskesmas->kelamin->n760_7hari }}</td>
        <td class="column5">{{ $dataPuskesmas->kelamin->n760_28hari }}</td>
        <td class="column5">{{ $dataPuskesmas->kelamin->n760_11bulan }}</td>
        <td class="column5">{{ $dataPuskesmas->kelamin->n760_4tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kelamin->n760_9tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kelamin->n760_14tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kelamin->n760_19tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kelamin->n760_44tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kelamin->n760_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kelamin->n760_lebih_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kelamin->n760_l }}</td>
        <td class="column5">{{ $dataPuskesmas->kelamin->n760_p }}</td>
        <td class="column5">{{ $dataPuskesmas->kelamin->n760_7hari + $dataPuskesmas->kelamin->n760_28hari + $dataPuskesmas->kelamin->n760_11bulan + $dataPuskesmas->kelamin->n760_4tahun + $dataPuskesmas->kelamin->n760_9tahun + $dataPuskesmas->kelamin->n760_14tahun + $dataPuskesmas->kelamin->n760_19tahun + $dataPuskesmas->kelamin->n760_44tahun + $dataPuskesmas->kelamin->n760_59tahun + $dataPuskesmas->kelamin->n760_lebih_59tahun + $dataPuskesmas->kelamin->n760_l + $dataPuskesmas->kelamin->n760_p  }}</td>
        <td class="column5">{{ $dataPuskesmas->kelamin->n760_l_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->kelamin->n760_p_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->kelamin->n760_l_lama + $dataPuskesmas->kelamin->n760_p_lama }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">5</td>
        <td class="column10">Vulvitis</td>
        <td class="column5">N76.2</td>
        <td class="column5">{{ $dataPuskesmas->kelamin->n762_7hari }}</td>
        <td class="column5">{{ $dataPuskesmas->kelamin->n762_28hari }}</td>
        <td class="column5">{{ $dataPuskesmas->kelamin->n762_11bulan }}</td>
        <td class="column5">{{ $dataPuskesmas->kelamin->n762_4tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kelamin->n762_9tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kelamin->n762_14tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kelamin->n762_19tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kelamin->n762_44tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kelamin->n762_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kelamin->n762_lebih_59tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->kelamin->n762_l }}</td>
        <td class="column5">{{ $dataPuskesmas->kelamin->n762_p }}</td>
        <td class="column5">{{ $dataPuskesmas->kelamin->n762_7hari + $dataPuskesmas->kelamin->n762_28hari + $dataPuskesmas->kelamin->n762_11bulan + $dataPuskesmas->kelamin->n762_4tahun + $dataPuskesmas->kelamin->n762_9tahun + $dataPuskesmas->kelamin->n762_14tahun + $dataPuskesmas->kelamin->n762_19tahun + $dataPuskesmas->kelamin->n762_44tahun + $dataPuskesmas->kelamin->n762_59tahun + $dataPuskesmas->kelamin->n762_lebih_59tahun + $dataPuskesmas->kelamin->n762_l + $dataPuskesmas->kelamin->n762_p  }}</td>
        <td class="column5">{{ $dataPuskesmas->kelamin->n762_l_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->kelamin->n762_p_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->kelamin->n762_l_lama + $dataPuskesmas->kelamin->n762_p_lama }}</td>
      </tr>
    </tbody>
  </table>
</body>

</html>