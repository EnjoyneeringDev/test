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
      font-size: 16px;
      font-weight: 400;
      font-family: Arial, Helvetica, sans-serif;
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
    <p style="text-align: center;">Formulir 8</p>
    <p style="text-align: center;">LAPORAN BULANAN KEPERAWATAN KESEHATAN MASYARAKAT</p>
  </div>

  <div style="margin-top: 50px; ">
    <div style="width: 400px; display: inline-block; vertical-align: middle; ">
      <span style="display: inline-block; vertical-align: middle; margin: 0 60px 0 15px; ">Kode</span>
      <span style="width: 20px; height: 30px; display: inline-block; vertical-align: middle; border: 1px solid black; margin: 0 -3px !important; padding: 8px 0 0 8px; ">1</span>
      <span style="width: 20px; height: 30px; display: inline-block; vertical-align: middle; border: 1px solid black; margin: 0 -3px !important; padding: 8px 0 0 8px; ">2</span>
      <span style="width: 20px; height: 30px; display: inline-block; vertical-align: middle; border: 1px solid black; margin: 0 -3px !important; padding: 8px 0 0 8px; ">3</span>
      <span style="width: 20px; height: 30px; display: inline-block; vertical-align: middle; border: 1px solid black; margin: 0 -3px !important; padding: 8px 0 0 8px; ">4</span>
      <span style="width: 20px; height: 30px; display: inline-block; vertical-align: middle; border: 1px solid black; margin: 0 -3px !important; padding: 8px 0 0 8px; ">5</span>
      <span style="width: 20px; height: 30px; display: inline-block; vertical-align: middle; border: 1px solid black; margin: 0 -3px !important; padding: 8px 0 0 8px; ">6</span>
      <span style="width: 20px; height: 30px; display: inline-block; vertical-align: middle; border: 1px solid black; margin: 0 -3px !important; padding: 8px 0 0 8px; ">7</span>
    </div>
    <div style="width: 200px; margin-left: 80px; display: inline-block; vertical-align: middle; ">
        <div>
            <span  style="display: inline-block; vertical-align: middle; width: 50px; ">Bulan</span>
            <span  style="width: 100px; height: 30px; display: inline-block; vertical-align: middle; border: 1px solid black; margin-left: 20px; padding: 8px 0 0 8px; ">November</span>
        </div>
    </div>
  </div>

  <div style="margin-top: 20px; " >
    <div style="width: 400px; display: inline-block; vertical-align: middle; ">
      <span style="display: inline-block; vertical-align: middle; margin: 0 15px 0 15px; ">Puskesmas</span>
      <span style="width: 270px; height: 30px; display: inline-block; vertical-align: middle; border: 1px solid black; margin: 0 -3px !important; padding: 8px 0 0 8px; ">Puskesmas Pucang Sewu</span>
    </div>
    <div style="width: 200px; margin-left: 80px; display: inline-block; vertical-align: middle; ">
        <div>
            <span  style="display: inline-block; vertical-align: middle; width: 50px; ">Tahun</span>
            <span  style="width: 100px; height: 30px; display: inline-block; vertical-align: middle; border: 1px solid black; margin-left: 20px; padding: 8px 0 0 8px; ">2024</span>
        </div>
    </div>
  </div>

  <table style="margin-top: 20px; ">
    <thead>
      <tr>
        <td class="column5 textCenter">No</td>
        <td class="column75 textCenter" colspan="2">KEGIATAN</td>
        <td class="column20 textCenter" colspan="2">JUMLAH</td>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td class="column5 textCenter" style="vertical-align: top; " rowspan="2" >1.</td>
        <td class="column75" rowspan="2" >Jumlah sarana air minum yang dilakukan inspeksi kesehatan lingkungan: </td>
        <td class="column20 columGrey" colspan="2"></td>
      </tr>
      <tr>
        <td class="column75" rowspan="2" >a. Jumlah sarana air minum yang memiliki resiko rendah/sedang</td>
        <td class="column1">{{ $dataPuskesmas->data[0]['jumlah_sarana_air_minum_resiko_rendah'] }}</td>
        <td class="column1">buah</td>
      </tr>
      <tr>
        <td class="column75" rowspan="2" >b. Jumlah sarana air minum yang memiliki resiko tinggi/amat tinggi </td>
        <td class="column1">{{ $dataPuskesmas->data[0]['jumlah_sarana_air_minum_resiko_tinggi'] }}</td>
        <td class="column1">buah</td>
      </tr>
      <tr>
        <td class="column5 textCenter" style="vertical-align: top; " rowspan="2" >2.</td>
        <td class="column75" rowspan="2" >Jumlah Tempat Pengelolaan Makanan (TPM) yang  dilakukan inspeksi kesehatan lingkungan:</td>
        <td class="column20 columGrey" colspan="2"></td>
      </tr>
      <tr>
        <td class="column75" rowspan="2" >a. Jumlah Tempat Pengelolaan Makanan (TPM) yang memenuhi syarat </td>
        <td class="column1">{{ $dataPuskesmas->data[0]['jumlah_tpm_yang_memenuhi_syarat'] }}</td>
        <td class="column1">buah</td>
      </tr>
      <tr>
        <td class="column75" rowspan="2" >b. Jumlah Tempat Pengelolaan Makanan (TPM) yang tidak memenuhi syarat</td>
        <td class="column1">{{ $dataPuskesmas->data[0]['jumlah_tpm_yang_tidak_memenuhi_syarat'] }}</td>
        <td class="column1">buah</td>
      </tr>
      <tr>
        <td class="column5 textCenter" style="vertical-align: top; " rowspan="2" >3.</td>
        <td class="column75" rowspan="2" >Jumlah Tempat-Tempat Umum (TTU) yang dilakukan inspeksi kesehatan</td>
        <td class="column20 columGrey" colspan="2"></td>
      </tr>
      <tr>
        <td class="column75" rowspan="2" >a. Jumlah TTU yang memenuhi syarat</td>
        <td class="column1">{{ $dataPuskesmas->data[0]['jumlah_ttu_yang_memenuhi_syarat'] }}</td>
        <td class="column1">buah</td>
      </tr>
      <tr>
        <td class="column75" rowspan="2" >b. Jumlah TTU yang tidak memenuhi syarat </td>
        <td class="column1">{{ $dataPuskesmas->data[0]['jumlah_ttu_yang_tidak_memenuhi_syarat'] }}</td>
        <td class="column1">buah</td>
      </tr>
      <tr>
        <td class="column5 textCenter" style="vertical-align: top; " rowspan="2" >4.</td>
        <td class="column75" rowspan="2" >Jumlah rumah yang dilakukan Inspeksi Kesehatan Lingkungan</td>
        <td class="column20 columGrey" colspan="2"></td>
      </tr>
      <tr>
        <td class="column75" rowspan="2" >a. Jumlah rumah yang memenuhi syarat kesehatan</td>
        <td class="column1">{{ $dataPuskesmas->data[0]['jumlah_rumah_yang_memenuhi_syarat'] }}</td>
        <td class="column1">buah</td>
      </tr>
      <tr>
        <td class="column75" rowspan="2" >b. Jumlah rumah yang tidak memenuhi syarat kesehatan</td>
        <td class="column1">{{ $dataPuskesmas->data[0]['jumlah_rumah_yang_tidak_memenuhi_syarat'] }}</td>
        <td class="column1">buah</td>
      </tr>
    </tbody>
  </table>
</body>

</html>