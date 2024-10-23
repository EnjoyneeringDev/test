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
    <p>Formulir 10</p>
    <p>LAPORAN BULANAN PELAYANAN PUSKESMAS</p>
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
        $monthName = $date->format('F'); // 'F' gives the full textual representation of the month
    } else {
        // Handle the case where current record is not set
        $year = null;
        $monthName = null;
        // Log an error or take appropriate action
        \Log::info("Current record is not available in dataPuskesmas.");
    }
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
      <span style="width: 270px; height: 30px; display: inline-block; vertical-align: middle; border: 1px solid black; margin: 0 -3px !important; padding: 8px 0 0 8px; ">{{ $dataPuskesmas->namaPuskesmas ?? "" }}</span>
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
      <span  style="width: 100px; height: 30px; display: inline-block; vertical-align: middle; border: 1px solid black; margin-left: 20px; padding: 8px 0 0 8px; ">{{ $dataPuskesmas->current->jumlah_puskesmas_pembantu ?? 0 }}</span>
    </div>
    <div style="width: 240px; margin-left: 40px; display: inline-block; vertical-align: middle; ">
      <span  style="display: inline-block; vertical-align: middle; width: 100px; text-align: right; ">Jml Lapor</span>
      <span  style="width: 100px; height: 30px; display: inline-block; vertical-align: middle; border: 1px solid black; margin-left: 10px; padding: 8px 0 0 8px; ">{{ $dataPuskesmas->current->jumlah_laporan_puskesma_pembantu ?? 0 }}</span>
    </div>
  </div>

  <div style="margin-top: 20px; " >
    <div style="width: 400px; display: inline-block; vertical-align: middle; ">
      <span style="display: inline-block; vertical-align: middle; width: 265px; text-align: right; ">Jml Poskesdes/bidan desa</span>
      <span  style="width: 100px; height: 30px; display: inline-block; vertical-align: middle; border: 1px solid black; margin-left: 20px; padding: 8px 0 0 8px; ">{{ $dataPuskesmas->current->jumlah_poskesdes ?? 0 }}</span>
    </div>
    <div style="width: 240px; margin-left: 40px; display: inline-block; vertical-align: middle; ">
      <span  style="display: inline-block; vertical-align: middle; width: 100px; text-align: right; ">Jml Lapor</span>
      <span  style="width: 100px; height: 30px; display: inline-block; vertical-align: middle; border: 1px solid black; margin-left: 10px; padding: 8px 0 0 8px; ">{{ $dataPuskesmas->current->jumlah_laporan_poskesdes ?? 0 }}</span>
    </div>
  </div>

  <table style="margin-top: 20px; ">
    <thead>
      <tr>
        <td class="column5 textCenter" rowspan="2">No</td>
        <td class="column75 textCenter" rowspan="2">KEGIATAN</td>
        <td class="column20 textCenter" colspan="2">JUMLAH</td>
      </tr>
      <tr>
        <td class="column10 textCenter">Baru</td>
        <td class="column10 textCenter">Lama</td>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td class="column5 columGrey textCenter">I</td>
        <td class="column75 columGrey">KUNJUNGAN PUSKESMAS</td>
        <td class="column10 columGrey"></td>
        <td class="column10 columGrey"></td>
      </tr>
      <tr>
        <td class="column5 textCenter">1.</td>
        <td class="column75">Jumlah kunjungan puskesmas (baru dan lama)</td>
        <td class="column10">{{ $dataPuskesmas->previous->kunjungan_puskesmas_baru ?? 0 }}</td>
        <td class="column10">{{ $dataPuskesmas->current->kunjungan_puskesmas_baru ?? 0 }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">2.</td>
        <td class="column75">Jumlah kunjungan peserta JKN</td>
        <td class="column10">{{ $dataPuskesmas->previous->kunjungan_peserta_jkn_baru ?? 0 }}</td>
        <td class="column10">{{ $dataPuskesmas->current->kunjungan_peserta_jkn_baru ?? 0 }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">3.</td>
        <td class="column75">Jumlah kunjungan peserta asuransi kesehatan lainnya</td>
        <td class="column10">{{ $dataPuskesmas->previous->kunjungan_peserta_asuransi_baru ?? 0 }}</td>
        <td class="column10">{{ $dataPuskesmas->current->kunjungan_peserta_asuransi_baru ?? 0 }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter" rowspan="3" style="vertical-align: top;">4.</td>
        <td class="column75">Jumlah penderita yang dirujuk ke</td>
        <td class="column10 columGrey"></td>
        <td class="column10 columGrey"></td>
      </tr>
      <tr>
        <td class="column75">a. Puskesmas rawat inap</td>
        <td class="column10">{{ $dataPuskesmas->previous->puskesmas_rawat_inat_baru ?? 0 }}</td>
        <td class="column10">{{ $dataPuskesmas->current->puskesmas_rawat_inat_baru ?? 0 }}</td>
      </tr>
      <tr>
        <td class="column75">b. Fasilitas kesehatan rujukan tingkat lanjut (FKRTL)</td>
        <td class="column10">{{ $dataPuskesmas->previous->fkrtl_baru ?? 0 }}</td>
        <td class="column10">{{ $dataPuskesmas->current->fkrtl_baru ?? 0 }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">5.</td>
        <td class="column75">Jumlah penderita penyakit tidak menular dirujuk ke fasilitas pelayanan kesehatan rujukan tingkat lanjut</td>
        <td class="column10">{{ $dataPuskesmas->previous->pasien_tidak_menular_dirujuk_baru ?? 0 }}</td>
        <td class="column10">{{ $dataPuskesmas->current->pasien_tidak_menular_dirujuk_baru ?? 0 }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter" rowspan="3" style="vertical-align: top;">6.</td>
        <td class="column75">Jumlah penderita yang dirujuk balik dari:</td>
        <td class="column10 columGrey"></td>
        <td class="column10 columGrey"></td>
      </tr>
      <tr>
        <td class="column75">a. Puskesmas rawat inap</td>
        <td class="column10">{{ $dataPuskesmas->previous->dirujuk_dari_puskesmas_rawat_inap_baru ?? 0 }}</td>
        <td class="column10">{{ $dataPuskesmas->current->dirujuk_dari_puskesmas_rawat_inap_baru ?? 0 }}</td>
      </tr>
      <tr>
        <td class="column75">b. Fasilitas pelayanan kesehatan rujukan tingkat lanjut</td>
        <td class="column10">{{ $dataPuskesmas->previous->pelayanan_kesehatan_rujukan_tingkat_lanjut_baru ?? 0 }}</td>
        <td class="column10">{{ $dataPuskesmas->current->pelayanan_kesehatan_rujukan_tingkat_lanjut_baru ?? 0 }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">7.</td>
        <td class="column75">Jumlah rujukan dari Posbindu PTM ke puskesmas</td>
        <td class="column10">{{ $dataPuskesmas->previous->rujukan_posbindu_ptm_baru ?? 0 }}</td>
        <td class="column10">{{ $dataPuskesmas->current->rujukan_posbindu_ptm_baru ?? 0 }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">II</td>
        <td class="column75">RAWAT INAP</td>
        <td class="column10 columGrey"></td>
        <td class="column10 columGrey"></td>
      </tr>
      <tr>
        <td class="column5 textCenter">1.</td>
        <td class="column75">Jumlah penderita rawat inap</td>
        <td class="column10">{{ $dataPuskesmas->previous->penderita_rawat_inap_baru ?? 0 }}</td>
        <td class="column10">{{ $dataPuskesmas->current->penderita_rawat_inap_baru ?? 0 }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">2.</td>
        <td class="column75">Jumlah ibu hamil, melahirkan, nifas dengan gangguan kesehatan dirawat inap</td>
        <td class="column10">{{ $dataPuskesmas->previous->ibu_hamil_dengan_gangguan_kesehatan_baru ?? 0 }}</td>
        <td class="column10">{{ $dataPuskesmas->current->ibu_hamil_dengan_gangguan_kesehatan_baru ?? 0 }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">3.</td>
        <td class="column75">Jumlah anak berumur <5 tahun sakit dirawat inap</td>
        <td class="column10">{{ $dataPuskesmas->previous->anak_dirawat_inap_baru ?? 0 }}</td>
        <td class="column10">{{ $dataPuskesmas->current->anak_dirawat_inap_baru ?? 0 }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">4.</td>
        <td class="column75">Jumlah penderita cedera/kecelakaan dirawat inap</td>
        <td class="column10">{{ $dataPuskesmas->previous->penderita_kecelakaan_dirawat_inap_baru ?? 0 }}</td>
        <td class="column10">{{ $dataPuskesmas->current->penderita_kecelakaan_dirawat_inap_baru ?? 0 }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">5.</td>
        <td class="column75">Jumlah penderita penyakit tidak menular dirawat inap</td>
        <td class="column10">{{ $dataPuskesmas->previous->penderita_penyakit_tidak_menular_dirawat_inap_baru ?? 0 }}</td>
        <td class="column10">{{ $dataPuskesmas->current->penderita_penyakit_tidak_menular_dirawat_inap_baru ?? 0 }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">6.</td>
        <td class="column75">Jumlah penderita yang keluar sembuh dari rawat inap puskesmas</td>
        <td class="column10">{{ $dataPuskesmas->previous->pasien_sembuh_rawat_inap_baru ?? 0 }}</td>
        <td class="column10">{{ $dataPuskesmas->current->pasien_sembuh_rawat_inap_baru ?? 0 }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">7.</td>
        <td class="column75">Jumlah hari rawat semua penderita rawat inap</td>
        <td class="column10">{{ $dataPuskesmas->previous->hari_rawat_inap_baru ?? 0 }}</td>
        <td class="column10">{{ $dataPuskesmas->current->hari_rawat_inap_baru ?? 0 }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">III</td>
        <td class="column75">PELAYANAN KESAKITAN GIGI DAN MULUT</td>
        <td class="column10 columGrey"></td>
        <td class="column10 columGrey"></td>
      </tr>
      <tr>
        <td class="column5 textCenter">1.</td>
        <td class="column75">Jumlah penambalan gigi tetap </td>
        <td class="column10">{{ $dataPuskesmas->previous->penambalan_gigi_tetap_baru ?? 0 }}</td>
        <td class="column10">{{ $dataPuskesmas->current->penambalan_gigi_tetap_baru ?? 0 }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">2.</td>
        <td class="column75">Jumlah penambalan gigi sulung</td>
        <td class="column10">{{ $dataPuskesmas->previous->penambalan_gigi_sulung_baru ?? 0 }}</td>
        <td class="column10">{{ $dataPuskesmas->current->penambalan_gigi_sulung_baru ?? 0 }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">3.</td>
        <td class="column75">Jumlah pencabutan gigi tetap</td>
        <td class="column10">{{ $dataPuskesmas->previous->pencabutan_gigi_tetap_baru ?? 0 }}</td>
        <td class="column10">{{ $dataPuskesmas->current->pencabutan_gigi_tetap_baru ?? 0 }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">4.</td>
        <td class="column75">Jumlah pencabutan gigi sulung</td>
        <td class="column10">{{ $dataPuskesmas->previous->pencabutan_gigi_sulung_baru ?? 0 }}</td>
        <td class="column10">{{ $dataPuskesmas->current->pencabutan_gigi_sulung_baru ?? 0 }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">5.</td>
        <td class="column75">Jumlah pembersihan karang gigi</td>
        <td class="column10">{{ $dataPuskesmas->previous->pembersihan_karang_gigi_baru ?? 0 }}</td>
        <td class="column10">{{ $dataPuskesmas->current->pembersihan_karang_gigi_baru ?? 0 }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">6.</td>
        <td class="column75">Jumlah premedikasi/pengobatan</td>
        <td class="column10">{{ $dataPuskesmas->previous->premedikasi_baru ?? 0 }}</td>
        <td class="column10">{{ $dataPuskesmas->current->premedikasi_baru ?? 0 }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">7.</td>
        <td class="column75">Jumlah pelayanan rujukan gigi</td>
        <td class="column10">{{ $dataPuskesmas->previous->pelayanan_rujukan_gigi_baru ?? 0 }}</td>
        <td class="column10">{{ $dataPuskesmas->current->pelayanan_rujukan_gigi_baru ?? 0 }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">8.</td>
        <td class="column75">Jumlah SD/MI dilaksanakan pemeriksaan kesehatan gigi dan mulut</td>
        <td class="column10">{{ $dataPuskesmas->previous->sd_pemeriksaan_gigi_baru ?? 0 }}</td>
        <td class="column10">{{ $dataPuskesmas->current->sd_pemeriksaan_gigi_baru ?? 0 }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">9.</td>
        <td class="column75">Jumlah murid SD/MI perlu perawatan kesehatan gigi</td>
        <td class="column10">{{ $dataPuskesmas->previous->sd_perlu_perawatan_kesehatan_gigi_baru ?? 0 }}</td>
        <td class="column10">{{ $dataPuskesmas->current->sd_perlu_perawatan_kesehatan_gigi_baru ?? 0 }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">10.</td>
        <td class="column75">Jumlah murid SD/MI yang mendapat perawatan kesehatan gigi</td>
        <td class="column10">{{ $dataPuskesmas->previous->sd_perawatan_kesehatan_gigi_baru ?? 0 }}</td>
        <td class="column10"{{ $dataPuskesmas->current->sd_perawatan_kesehatan_gigi_baru ?? 0 }}></td>
      </tr>
      <tr>
        <td class="column5 textCenter">11.</td>
        <td class="column75">Jumlah pemasangan gigi tiruan</td>
        <td class="column10">{{ $dataPuskesmas->previous->pemasangan_gigi_tiruan_baru ?? 0 }}</td>
        <td class="column10">{{ $dataPuskesmas->current->pemasangan_gigi_tiruan_baru ?? 0 }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">12.</td>
        <td class="column75">Jumlah ibu hamil yang mendapatkan perawatan gigi</td>
        <td class="column10">{{ $dataPuskesmas->previous->ibu_hamil_perawatan_gigi_baru ?? 0 }}</td>
        <td class="column10">{{ $dataPuskesmas->current->ibu_hamil_perawatan_gigi_baru ?? 0 }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">13.</td>
        <td class="column75">Jumlah TK/PAUD yang dilakukan pemeriksaan kesehatan gigi dan mulut</td>
        <td class="column10">{{ $dataPuskesmas->previous->tk_pemeriksaan_gigi_baru ?? 0 }}</td>
        <td class="column10">{{ $dataPuskesmas->current->tk_pemeriksaan_gigi_baru ?? 0 }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">IV</td>
        <td class="column75">PELAYANAN LABORATORIUM</td>
        <td class="column10 columGrey"></td>
        <td class="column10 columGrey"></td>
      </tr>
      <tr>
        <td class="column5 textCenter">1.</td>
        <td class="column75">Jumlah pemeriksaan hematologi</td>
        <td class="column10">{{ $dataPuskesmas->previous->pemeriksaan_hematologi_baru ?? 0 }}</td>
        <td class="column10">{{ $dataPuskesmas->current->pemeriksaan_hematologi_baru ?? 0 }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">2.</td>
        <td class="column75">Jumlah pemeriksaan kimia klinik</td>
        <td class="column10">{{ $dataPuskesmas->previous->pemeriksaan_kimia_klinik_baru ?? 0 }}</td>
        <td class="column10">{{ $dataPuskesmas->current->pemeriksaan_kimia_klinik_baru ?? 0 }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">3.</td>
        <td class="column75">Jumlah pemeriksaan urinalisa</td>
        <td class="column10">{{ $dataPuskesmas->previous->pemeriksaan_urinalisa_baru ?? 0 }}</td>
        <td class="column10">{{ $dataPuskesmas->current->pemeriksaan_urinalisa_baru ?? 0 }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">4.</td>
        <td class="column75">Jumlah pemeriksaan mikrobiologi dan parasitologi</td>
        <td class="column10">{{ $dataPuskesmas->previous->pemeriksaan_mikrobiologi_baru ?? 0 }}</td>
        <td class="column10">{{ $dataPuskesmas->current->pemeriksaan_mikrobiologi_baru ?? 0 }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">5.</td>
        <td class="column75">Jumlah pemeriksaan imunologi</td>
        <td class="column10">{{ $dataPuskesmas->previous->pemeriksaan_imunologi_baru ?? 0 }}</td>
        <td class="column10">{{ $dataPuskesmas->current->pemeriksaan_imunologi_baru ?? 0 }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">6.</td>
        <td class="column75">Jumlah pemeriksaan tinja</td>
        <td class="column10">{{ $dataPuskesmas->previous->pemeriksaan_tinja_baru ?? 0 }}</td>
        <td class="column10">{{ $dataPuskesmas->current->pemeriksaan_tinja_baru ?? 0 }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">V</td>
        <td class="column75">PELAYANAN FARMASI</td>
        <td class="column10 columGrey"></td>
        <td class="column10 columGrey"></td>
      </tr>
      <tr>
        <td class="column5 textCenter">1.</td>
        <td class="column75">Jumlah resep dari rawat jalan</td>
        <td class="column10">{{ $dataPuskesmas->previous->resep_rawat_jalan_baru ?? 0 }}</td>
        <td class="column10">{{ $dataPuskesmas->current->resep_rawat_jalan_baru ?? 0 }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">2.</td>
        <td class="column75">Jumlah resep dari rawat inap</td>
        <td class="column10">{{ $dataPuskesmas->previous->resep_rawat_inap_baru ?? 0 }}</td>
        <td class="column10">{{ $dataPuskesmas->current->resep_rawat_inap_baru ?? 0 }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">3.</td>
        <td class="column75">Jumlah konseling obat</td>
        <td class="column10">{{ $dataPuskesmas->previous->konseling_obat_baru ?? 0 }}</td>
        <td class="column10">{{ $dataPuskesmas->current->konseling_obat_baru ?? 0 }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">4.</td>
        <td class="column75">Jumlah pemberian informasi obat</td>
        <td class="column10">{{ $dataPuskesmas->previous->pemberian_informasi_obat_baru ?? 0 }}</td>
        <td class="column10">{{ $dataPuskesmas->current->pemberian_informasi_obat_baru ?? 0 }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter" rowspan="2" style="vertical-align: top;">5.</td>
        <td class="column75">Jumlah penggunaan antibiotik pada ISPA NonPneumonia</td>
        <td class="column10">{{ $dataPuskesmas->previous->antibiotik_ispa_non_pneumonia_baru ?? 0 }}</td>
        <td class="column10">{{ $dataPuskesmas->current->antibiotik_ispa_non_pneumonia_baru ?? 0 }}</td>
      </tr>
      <tr>
        <td class="column75">Jumlah kasus ISPA Non-Pneumonia</td>
        <td class="column10">{{ $dataPuskesmas->previous->ispa_non_pneumonia_baru ?? 0 }}</td>
        <td class="column10">{{ $dataPuskesmas->current->ispa_non_pneumonia_baru ?? 0 }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter" rowspan="2" style="vertical-align: top;">6.</td>
        <td class="column75">Jumlah penggunaan antibiotik pada Diare NonSpesifik</td>
        <td class="column10">{{ $dataPuskesmas->previous->antibiotik_diare_non_spesifik_baru ?? 0 }}</td>
        <td class="column10">{{ $dataPuskesmas->current->antibiotik_diare_non_spesifik_baru ?? 0 }}</td>
      </tr>
      <tr>
        <td class="column75">Jumlah kasus Diare Non-Spesifik</td>
        <td class="column10">{{ $dataPuskesmas->previous->diare_non_spesifik_baru ?? 0 }}</td>
        <td class="column10">{{ $dataPuskesmas->current->diare_non_spesifik_baru ?? 0 }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter" rowspan="2" style="vertical-align: top;">7.</td>
        <td class="column75">Jumlah penggunaan injeksi pada Myalgia</td>
        <td class="column10">{{ $dataPuskesmas->previous->injeksi_pada_myalgia_baru ?? 0 }}</td>
        <td class="column10">{{ $dataPuskesmas->current->injeksi_pada_myalgia_baru ?? 0 }}</td>
      </tr>
      <tr>
        <td class="column75">Jumlah kasus Myalgia</td>
        <td class="column10">{{ $dataPuskesmas->previous->kasus_myalgia_baru ?? 0 }}</td>
        <td class="column10">{{ $dataPuskesmas->current->kasus_myalgia_baru ?? 0 }}</td>
      </tr>
      <tr>
        <td class="column5 textCenter">8.</td>
        <td class="column75">Jumlah item obat semua resep</td>
        <td class="column10">{{ $dataPuskesmas->previous->obat_semua_resep_baru ?? 0 }}</td>
        <td class="column10">{{ $dataPuskesmas->current->obat_semua_resep_baru ?? 0 }}</td>
      </tr>
    </tbody>
  </table>
</body>

</html>