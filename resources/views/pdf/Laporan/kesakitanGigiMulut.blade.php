<!DOCTYPE html>
<html>

<head>
  <title>LAPORAN BULANAN KESAKITAN GIGI DAN MULUT</title>
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
    <p>LAPORAN BULANAN KESAKITAN GIGI DAN MULUT</p>
  </div>
  <table>
    <thead>
      <tr>
        <td class="column5 textCenter" rowspan="2">No</td>
        <td class="column10 textCenter" rowspan="2">JENIS PENYAKIT</td>
        <td class="column5 textCenter" rowspan="2">ICD  10</td>
        <td class="column65 textCenter" colspan="13">JUMLAH KASUS BARU (Umur dan Jenis Kelamin)</td>
        <td class="column15 textCenter" colspan="3">JUMLAH KASUS LAMA</td>
      </tr>
      <tr>
        <td class="column5 textCenter">0-4 th</td>
        <td class="column5 textCenter">5-6 th</td>
        <td class="column5 textCenter">7-11 th</td>
        <td class="column5 textCenter">12 th</td>
        <td class="column5 textCenter">13-14 th</td>
        <td class="column5 textCenter">15-18 th</td>
        <td class="column5 textCenter">19-34 th</td>
        <td class="column5 textCenter">35-44 th</td>
        <td class="column5 textCenter">45-64 th</td>
        <td class="column5 textCenter">>64 th</td>
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
        <td class="column5 textCenter">1</td>
        <td class="column10">Persistensi gigi sulung</td>
        <td class="column5">K00.6</td>
        <td class="column5">{{ $dataPuskesmas->data->k0_4_tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->data->k0_6_tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->data->k0_11_tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->data->k0_12_tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->data->k0_14_tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->data->k0_18_tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->data->k0_34_tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->data->k0_44_tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->data->k0_64_tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->data->k0_lebih_64_tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->data->k0_l }}</td>
        <td class="column5">{{ $dataPuskesmas->data->k0_p }}</td>
        <td class="column5">{{ $dataPuskesmas->data->k0_4_tahun + $dataPuskesmas->data->k0_6_tahun + $dataPuskesmas->data->k0_11_tahun + $dataPuskesmas->data->k0_12_tahun + $dataPuskesmas->data->k0_14_tahun + $dataPuskesmas->data->k0_18_tahun + $dataPuskesmas->data->k0_34_tahun + $dataPuskesmas->data->k0_44_tahun + $dataPuskesmas->data->k0_64_tahun + $dataPuskesmas->data->k0_lebih_64_tahun + $dataPuskesmas->data->k0_l + $dataPuskesmas->data->k0_p  }}</td>
        <td class="column5">{{ $dataPuskesmas->data->k0_l_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->data->k0_p_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->data->k0_l_lama + $dataPuskesmas->data->k0_p_lama }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">2</td>
        <td class="column10">Impaksi M3 klasifikasi IA</td>
        <td class="column5">K01.1</td>
        <td class="column5">{{ $dataPuskesmas->data->k1_4_tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->data->k1_6_tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->data->k1_11_tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->data->k1_12_tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->data->k1_14_tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->data->k1_18_tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->data->k1_34_tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->data->k1_44_tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->data->k1_64_tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->data->k1_lebih_64_tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->data->k1_l }}</td>
        <td class="column5">{{ $dataPuskesmas->data->k1_p }}</td>
        <td class="column5">{{ $dataPuskesmas->data->k1_4_tahun + $dataPuskesmas->data->k1_6_tahun + $dataPuskesmas->data->k1_11_tahun + $dataPuskesmas->data->k1_12_tahun + $dataPuskesmas->data->k1_14_tahun + $dataPuskesmas->data->k1_18_tahun + $dataPuskesmas->data->k1_34_tahun + $dataPuskesmas->data->k1_44_tahun + $dataPuskesmas->data->k1_64_tahun + $dataPuskesmas->data->k1_lebih_64_tahun + $dataPuskesmas->data->k1_l + $dataPuskesmas->data->k1_p  }}</td>
        <td class="column5">{{ $dataPuskesmas->data->k1_l_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->data->k1_p_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->data->k1_l_lama + $dataPuskesmas->data->k1_p_lama }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">3</td>
        <td class="column10">Karies gigi</td>
        <td class="column5">K02</td>
        <td class="column5">{{ $dataPuskesmas->data->k2_4_tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->data->k2_6_tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->data->k2_11_tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->data->k2_12_tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->data->k2_14_tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->data->k2_18_tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->data->k2_34_tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->data->k2_44_tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->data->k2_64_tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->data->k2_lebih_64_tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->data->k2_l }}</td>
        <td class="column5">{{ $dataPuskesmas->data->k2_p }}</td>
        <td class="column5">{{ $dataPuskesmas->data->k2_4_tahun + $dataPuskesmas->data->k2_6_tahun + $dataPuskesmas->data->k2_11_tahun + $dataPuskesmas->data->k2_12_tahun + $dataPuskesmas->data->k2_14_tahun + $dataPuskesmas->data->k2_18_tahun + $dataPuskesmas->data->k2_34_tahun + $dataPuskesmas->data->k2_44_tahun + $dataPuskesmas->data->k2_64_tahun + $dataPuskesmas->data->k2_lebih_64_tahun + $dataPuskesmas->data->k2_l + $dataPuskesmas->data->k2_p  }}</td>
        <td class="column5">{{ $dataPuskesmas->data->k2_l_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->data->k2_p_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->data->k2_l_lama + $dataPuskesmas->data->k2_p_lama }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">4</td>
        <td class="column10">Penyakit jaringan keras gigi lainnya</td>
        <td class="column5">K03</td>
        <td class="column5">{{ $dataPuskesmas->data->k3_4_tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->data->k3_6_tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->data->k3_11_tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->data->k3_12_tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->data->k3_14_tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->data->k3_18_tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->data->k3_34_tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->data->k3_44_tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->data->k3_64_tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->data->k3_lebih_64_tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->data->k3_l }}</td>
        <td class="column5">{{ $dataPuskesmas->data->k3_p }}</td>
        <td class="column5">{{ $dataPuskesmas->data->k3_4_tahun + $dataPuskesmas->data->k3_6_tahun + $dataPuskesmas->data->k3_11_tahun + $dataPuskesmas->data->k3_12_tahun + $dataPuskesmas->data->k3_14_tahun + $dataPuskesmas->data->k3_18_tahun + $dataPuskesmas->data->k3_34_tahun + $dataPuskesmas->data->k3_44_tahun + $dataPuskesmas->data->k3_64_tahun + $dataPuskesmas->data->k3_lebih_64_tahun + $dataPuskesmas->data->k3_l + $dataPuskesmas->data->k3_p  }}</td>
        <td class="column5">{{ $dataPuskesmas->data->k3_l_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->data->k3_p_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->data->k3_l_lama + $dataPuskesmas->data->k3_p_lama }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">5</td>
        <td class="column10">Penyakit pulpa dan jaringan periapikal</td>
        <td class="column5">K04</td>
        <td class="column5">{{ $dataPuskesmas->data->k4_4_tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->data->k4_6_tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->data->k4_11_tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->data->k4_12_tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->data->k4_14_tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->data->k4_18_tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->data->k4_34_tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->data->k4_44_tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->data->k4_64_tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->data->k4_lebih_64_tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->data->k4_l }}</td>
        <td class="column5">{{ $dataPuskesmas->data->k4_p }}</td>
        <td class="column5">{{ $dataPuskesmas->data->k4_4_tahun + $dataPuskesmas->data->k4_6_tahun + $dataPuskesmas->data->k4_11_tahun + $dataPuskesmas->data->k4_12_tahun + $dataPuskesmas->data->k4_14_tahun + $dataPuskesmas->data->k4_18_tahun + $dataPuskesmas->data->k4_34_tahun + $dataPuskesmas->data->k4_44_tahun + $dataPuskesmas->data->k4_64_tahun + $dataPuskesmas->data->k4_lebih_64_tahun + $dataPuskesmas->data->k4_l + $dataPuskesmas->data->k4_p  }}</td>
        <td class="column5">{{ $dataPuskesmas->data->k4_l_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->data->k4_p_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->data->k4_l_lama + $dataPuskesmas->data->k4_p_lama }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">6</td>
        <td class="column10">Gingivitis dan penyakit periodental</td>
        <td class="column5">K05</td>
        <td class="column5">{{ $dataPuskesmas->data->k5_4_tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->data->k5_6_tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->data->k5_11_tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->data->k5_12_tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->data->k5_14_tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->data->k5_18_tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->data->k5_34_tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->data->k5_44_tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->data->k5_64_tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->data->k5_lebih_64_tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->data->k5_l }}</td>
        <td class="column5">{{ $dataPuskesmas->data->k5_p }}</td>
        <td class="column5">{{ $dataPuskesmas->data->k5_4_tahun + $dataPuskesmas->data->k5_6_tahun + $dataPuskesmas->data->k5_11_tahun + $dataPuskesmas->data->k5_12_tahun + $dataPuskesmas->data->k5_14_tahun + $dataPuskesmas->data->k5_18_tahun + $dataPuskesmas->data->k5_34_tahun + $dataPuskesmas->data->k5_44_tahun + $dataPuskesmas->data->k5_64_tahun + $dataPuskesmas->data->k5_lebih_64_tahun + $dataPuskesmas->data->k5_l + $dataPuskesmas->data->k5_p  }}</td>
        <td class="column5">{{ $dataPuskesmas->data->k5_l_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->data->k5_p_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->data->k5_l_lama + $dataPuskesmas->data->k5_p_lama }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">7</td>
        <td class="column10">Anomali dentofasial</td>
        <td class="column5">K07</td>
        <td class="column5">{{ $dataPuskesmas->data->k7_4_tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->data->k7_6_tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->data->k7_11_tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->data->k7_12_tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->data->k7_14_tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->data->k7_18_tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->data->k7_34_tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->data->k7_44_tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->data->k7_64_tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->data->k7_lebih_64_tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->data->k7_l }}</td>
        <td class="column5">{{ $dataPuskesmas->data->k7_p }}</td>
        <td class="column5">{{ $dataPuskesmas->data->k7_4_tahun + $dataPuskesmas->data->k7_6_tahun + $dataPuskesmas->data->k7_11_tahun + $dataPuskesmas->data->k7_12_tahun + $dataPuskesmas->data->k7_14_tahun + $dataPuskesmas->data->k7_18_tahun + $dataPuskesmas->data->k7_34_tahun + $dataPuskesmas->data->k7_44_tahun + $dataPuskesmas->data->k7_64_tahun + $dataPuskesmas->data->k7_lebih_64_tahun + $dataPuskesmas->data->k7_l + $dataPuskesmas->data->k7_p  }}</td>
        <td class="column5">{{ $dataPuskesmas->data->k7_l_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->data->k7_p_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->data->k7_l_lama + $dataPuskesmas->data->k7_p_lama }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">8</td>
        <td class="column10">Gangguan gigi dan jaringan penyangga lainnya</td>
        <td class="column5">K08</td>
        <td class="column5">{{ $dataPuskesmas->data->k8_4_tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->data->k8_6_tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->data->k8_11_tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->data->k8_12_tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->data->k8_14_tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->data->k8_18_tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->data->k8_34_tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->data->k8_44_tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->data->k8_64_tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->data->k8_lebih_64_tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->data->k8_l }}</td>
        <td class="column5">{{ $dataPuskesmas->data->k8_p }}</td>
        <td class="column5">{{ $dataPuskesmas->data->k8_4_tahun + $dataPuskesmas->data->k8_6_tahun + $dataPuskesmas->data->k8_11_tahun + $dataPuskesmas->data->k8_12_tahun + $dataPuskesmas->data->k8_14_tahun + $dataPuskesmas->data->k8_18_tahun + $dataPuskesmas->data->k8_34_tahun + $dataPuskesmas->data->k8_44_tahun + $dataPuskesmas->data->k8_64_tahun + $dataPuskesmas->data->k8_lebih_64_tahun + $dataPuskesmas->data->k8_l + $dataPuskesmas->data->k8_p  }}</td>
        <td class="column5">{{ $dataPuskesmas->data->k8_l_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->data->k8_p_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->data->k8_l_lama + $dataPuskesmas->data->k8_p_lama }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">9</td>
        <td class="column10">Stomatitis dan lesi-lesi berhubungan</td>
        <td class="column5">K12</td>
        <td class="column5">{{ $dataPuskesmas->data->k12_4_tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->data->k12_6_tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->data->k12_11_tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->data->k12_12_tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->data->k12_14_tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->data->k12_18_tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->data->k12_34_tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->data->k12_44_tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->data->k12_64_tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->data->k12_lebih_64_tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->data->k12_l }}</td>
        <td class="column5">{{ $dataPuskesmas->data->k12_p }}</td>
        <td class="column5">{{ $dataPuskesmas->data->k12_4_tahun + $dataPuskesmas->data->k12_6_tahun + $dataPuskesmas->data->k12_11_tahun + $dataPuskesmas->data->k12_12_tahun + $dataPuskesmas->data->k12_14_tahun + $dataPuskesmas->data->k12_18_tahun + $dataPuskesmas->data->k12_34_tahun + $dataPuskesmas->data->k12_44_tahun + $dataPuskesmas->data->k12_64_tahun + $dataPuskesmas->data->k12_lebih_64_tahun + $dataPuskesmas->data->k12_l + $dataPuskesmas->data->k12_p  }}</td>
        <td class="column5">{{ $dataPuskesmas->data->k12_l_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->data->k12_p_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->data->k12_l_lama + $dataPuskesmas->data->k12_p_lama }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">10</td>
        <td class="column10">Angular Cheilitis</td>
        <td class="column5">K13.0</td>
        <td class="column5">{{ $dataPuskesmas->data->k13_4_tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->data->k13_6_tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->data->k13_11_tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->data->k13_12_tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->data->k13_14_tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->data->k13_18_tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->data->k13_34_tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->data->k13_44_tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->data->k13_64_tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->data->k13_lebih_64_tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->data->k13_l }}</td>
        <td class="column5">{{ $dataPuskesmas->data->k13_p }}</td>
        <td class="column5">{{ $dataPuskesmas->data->k13_4_tahun + $dataPuskesmas->data->k13_6_tahun + $dataPuskesmas->data->k13_11_tahun + $dataPuskesmas->data->k13_12_tahun + $dataPuskesmas->data->k13_14_tahun + $dataPuskesmas->data->k13_18_tahun + $dataPuskesmas->data->k13_34_tahun + $dataPuskesmas->data->k13_44_tahun + $dataPuskesmas->data->k13_64_tahun + $dataPuskesmas->data->k13_lebih_64_tahun + $dataPuskesmas->data->k13_l + $dataPuskesmas->data->k13_p  }}</td>
        <td class="column5">{{ $dataPuskesmas->data->k13_l_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->data->k13_p_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->data->k13_l_lama + $dataPuskesmas->data->k13_p_lama }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">11</td>
        <td class="column10">Eritema Multiformis</td>
        <td class="column5">L51</td>
        <td class="column5">{{ $dataPuskesmas->data->k51_4_tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->data->k51_6_tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->data->k51_11_tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->data->k51_12_tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->data->k51_14_tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->data->k51_18_tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->data->k51_34_tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->data->k51_44_tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->data->k51_64_tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->data->k51_lebih_64_tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->data->k51_l }}</td>
        <td class="column5">{{ $dataPuskesmas->data->k51_p }}</td>
        <td class="column5">{{ $dataPuskesmas->data->k51_4_tahun + $dataPuskesmas->data->k51_6_tahun + $dataPuskesmas->data->k51_11_tahun + $dataPuskesmas->data->k51_12_tahun + $dataPuskesmas->data->k51_14_tahun + $dataPuskesmas->data->k51_18_tahun + $dataPuskesmas->data->k51_34_tahun + $dataPuskesmas->data->k51_44_tahun + $dataPuskesmas->data->k51_64_tahun + $dataPuskesmas->data->k51_lebih_64_tahun + $dataPuskesmas->data->k51_l + $dataPuskesmas->data->k51_p  }}</td>
        <td class="column5">{{ $dataPuskesmas->data->k51_l_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->data->k51_p_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->data->k51_l_lama + $dataPuskesmas->data->k51_p_lama }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">12</td>
        <td class="column10">Nyeri orfasial</td>
        <td class="column5">R.51</td>
        <td class="column5">{{ $dataPuskesmas->data->r51_4_tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->data->r51_6_tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->data->r51_11_tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->data->r51_12_tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->data->r51_14_tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->data->r51_18_tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->data->r51_34_tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->data->r51_44_tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->data->r51_64_tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->data->r51_lebih_64_tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->data->r51_l }}</td>
        <td class="column5">{{ $dataPuskesmas->data->r51_p }}</td>
        <td class="column5">{{ $dataPuskesmas->data->r51_4_tahun + $dataPuskesmas->data->r51_6_tahun + $dataPuskesmas->data->r51_11_tahun + $dataPuskesmas->data->r51_12_tahun + $dataPuskesmas->data->r51_14_tahun + $dataPuskesmas->data->r51_18_tahun + $dataPuskesmas->data->r51_34_tahun + $dataPuskesmas->data->r51_44_tahun + $dataPuskesmas->data->r51_64_tahun + $dataPuskesmas->data->r51_lebih_64_tahun + $dataPuskesmas->data->r51_l + $dataPuskesmas->data->r51_p  }}</td>
        <td class="column5">{{ $dataPuskesmas->data->r51_l_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->data->r51_p_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->data->r51_l_lama + $dataPuskesmas->data->r51_p_lama }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">13</td>
        <td class="column10">Fraktur mahkota yang tidak merusak pulpa</td>
        <td class="column5">S02.5</td>
        <td class="column5">{{ $dataPuskesmas->data->s2_4_tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->data->s2_6_tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->data->s2_11_tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->data->s2_12_tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->data->s2_14_tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->data->s2_18_tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->data->s2_34_tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->data->s2_44_tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->data->s2_64_tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->data->s2_lebih_64_tahun }}</td>
        <td class="column5">{{ $dataPuskesmas->data->s2_l }}</td>
        <td class="column5">{{ $dataPuskesmas->data->s2_p }}</td>
        <td class="column5">{{ $dataPuskesmas->data->s2_4_tahun + $dataPuskesmas->data->s2_6_tahun + $dataPuskesmas->data->s2_11_tahun + $dataPuskesmas->data->s2_12_tahun + $dataPuskesmas->data->s2_14_tahun + $dataPuskesmas->data->s2_18_tahun + $dataPuskesmas->data->s2_34_tahun + $dataPuskesmas->data->s2_44_tahun + $dataPuskesmas->data->s2_64_tahun + $dataPuskesmas->data->s2_lebih_64_tahun + $dataPuskesmas->data->s2_l + $dataPuskesmas->data->s2_p  }}</td>
        <td class="column5">{{ $dataPuskesmas->data->s2_l_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->data->s2_p_lama }}</td>
        <td class="column5">{{ $dataPuskesmas->data->s2_l_lama + $dataPuskesmas->data->s2_p_lama }}</td>
      </tr>
    </tbody>
  </table>
</body>

</html>