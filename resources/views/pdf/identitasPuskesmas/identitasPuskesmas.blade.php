<!DOCTYPE html>
<html>
<head>
    <title>Identitas Puskesmas Report</title>
    <style>
        @page {
            margin: 1.2in 1in; /* Set margin to 1 inch on all sides */
        }

        body {
            font-family: Arial, sans-serif;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
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
            width:60%;
        }
        .column95 {
            width:95%;
        }

        .columGrey {
            background: #D9D9D9;
        }
    </style>
</head>
<body>
    <h1>Identitas Puskesmas Report</h1>
    <table>
        <thead>
            <tr>
                <th class="column5">No</th>
                <th class="column40">Uraian</th>
                <th class="column55">Data</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="column5">1</td>
                <td class="column40">Nama puskesmas</td>
                <td class="column55">{{ $identitasPuskesmas->nama }}</td>
            </tr>
            <tr>
                <td class="column5">2</td>
                <td class="column40">Kode registrasi puskesmas</td>
                <td class="column55">{{ $identitasPuskesmas->noRegis }}</td>
            </tr>
        </tbody>
    </table>

    <br>
    <table>
        <thead>
            <tr>
                <th class="column5">No</th>
                <th class="column40">Uraian</th>
                <th class="column55">Data</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="column45" colspan="2">I. IDENTITAS PUSKESMAS</td>
                <td class="column55 columGrey"></td>
            </tr>
            <tr>
                <td class="column5">1</td>
                <td class="column40">Nama puskesmas</td>
                <td class="column55">{{ $identitasPuskesmas->nama }}</td>
            </tr>
            <tr>
                <td class="column5">2</td>
                <td class="column40">Kode registrasi puskesmas</td>
                <td class="column55">{{ $identitasPuskesmas->noRegis }}</td>
            </tr>
            <tr>
                <td class="column5">3</td>
                <td class="column40">Status akreditasi </td>
                <td class="column55">
                    @if ($identitasPuskesmas->akreditasi === 1)
                        Telah akreditasi, terakhir tahun {{ $identitasPuskesmas->tahunAkreditasi }}
                    @elseif ($identitasPuskesmas->akreditasi === 2)
                        Sedang dalam proses akreditasi
                    @else
                        Belum proses akreditasi
                    @endif
                </td>
            </tr>
            <tr>
                <td class="column5">4</td>
                <td class="column40">Alamat</td>
                <td class="column55 columGrey"></td>
            </tr>
            <tr>
                <td class="column5"></td>
                <td class="column40">a.  Jalan / komplek</td>
                <td class="column55">{{ $identitasPuskesmas->alamat }}</td>
            </tr>
            <tr>
                <td class="column5"></td>
                <td class="column40">b.  Desa/kelurahan</td>
                <td class="column55">{{ $identitasPuskesmas->kelurahan }}</td>
            </tr>
            <tr>
                <td class="column5"></td>
                <td class="column40">c.  Kecamatan</td>
                <td class="column55">{{ $identitasPuskesmas->kecamatan }}</td>
            </tr>
            <tr>
                <td class="column5"></td>
                <td class="column40">d.  Kabupaten/kota</td>
                <td class="column55">Sorong Selatan</td>
            </tr>
            <tr>
                <td class="column5"></td>
                <td class="column40">e.  Provinsi</td>
                <td class="column55">Papua Barat</td>
            </tr>
            <tr>
                <td class="column5"></td>
                <td class="column40">f.  Kode pos</td>
                <td class="column55">{{ $identitasPuskesmas->kodePos }}</td>
            </tr>
            <tr>
                <td class="column5"></td>
                <td class="column40">g.  Telepon</td>
                <td class="column55">{{ $identitasPuskesmas->telepon }}</td>
            </tr>
            <tr>
                <td class="column5"></td>
                <td class="column40">h.  Fax</td>
                <td class="column55">{{ $identitasPuskesmas->fax }}</td>
            </tr>
            <tr>
                <td class="column5"></td>
                <td class="column40">i.  Email</td>
                <td class="column55">{{ $identitasPuskesmas->email }}</td>
            </tr>
            <tr>
                <td class="column5"></td>
                <td class="column40">j. Titik koordinat  (LU/LS/BT)</td>
                <td class="column55">{{ $identitasPuskesmas->koordinat }}</td>
            </tr>
            <tr>
                <td class="column5">5</td>
                <td class="column40">Kategori puskesmas berdasarkan karakteristik wilayah</td>
                <td class="column55">
                    @if ($identitasPuskesmas->Puskesmas_wilayah === 1)
                        Perkotaan
                    @elseif ($identitasPuskesmas->Puskesmas_wilayah === 2)
                        Perdesaan
                    @elseif ($identitasPuskesmas->Puskesmas_wilayah === 3)
                        Terpencil
                    @else
                        Sangat terpencil
                    @endif
                </td>
            </tr>
            <tr>
                <td class="column5">6</td>
                <td class="column40">Kategori puskesmas berdasarkan kemampuan penyelenggaraan</td>
                <td class="column55">
                    @if ($identitasPuskesmas->Puskesmas_kemampuan_penyelengaraan === 1)
                        Rawat Inap
                    @else
                        No Rawat Inap
                    @endif
                </td>
            </tr>
        </tbody>
    </table>

    <br>
    <table>
        <thead>
            <tr>
                <th class="column5">No</th>
                <th class="column55">Uraian</th>
                <th class="column40" colspan="2">Data</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="column55" colspan="2">II. WILAYAH KERJA PUSKESMAS</td>
                <td class="column40 columGrey" colspan="2"></td>
            </tr>
            <tr>
                <td class="column5">1</td>
                <td class="column55">Luas wilayah kerja (km<sup>2</sup>)</td>
                <td class="column15">{{ $identitasPuskesmas->luas_wilayah_kerja }}</td>
                <td class="column25">km<sup>2</sup></td>
            </tr>
            <tr>
                <td class="column5">2</td>
                <td class="column55">Jumlah penduduk (jiwa) </td>
                <td class="column15">{{ number_format($identitasPuskesmas->jumlah_penduduk, 0, ',', '.') }}</td>
                <td class="column25">jiwa</td>
            </tr>
            <tr>
                <td class="column5">3</td>
                <td class="column55">Jumlah keluarga</td>
                <td class="column15">{{ number_format($identitasPuskesmas->jumlah_keluarga, 0, ',', '.') }}</td>
                <td class="column25">keluarga</td>
            </tr>
            <tr>
                <td class="column5">4</td>
                <td class="column55">Jumlah keluarga miskin</td>
                <td class="column15">{{ number_format($identitasPuskesmas->jumlah_keluarga_miskin, 0, ',', '.') }}</td>
                <td class="column25">keluarga</td>
            </tr>
            <tr>
                <td class="column5">5</td>
                <td class="column55">Jumlah desa (seluruhnya) </td>
                <td class="column15">{{ number_format($identitasPuskesmas->jumlah_desa, 0, ',', '.') }}</td>
                <td class="column25">desa/ kelurahan</td>
            </tr>
            <tr>
                <td class="column5">6</td>
                <td class="column55">Karakteristik wilayah yang terdapat di wilayah Puskesmas:</td>
                <td class="column40 columGrey" colspan="2"></td>
            </tr>
            <tr>
                <td class="column5"></td>
                <td class="column55">a.  Perumnas</td>
                <td class="column40" colspan="2">
                    @if ($identitasPuskesmas->perumnas === 1)
                        Ada
                    @else
                        Tidak ada
                    @endif
                </td>
            </tr>
            <tr>
                <td class="column5"></td>
                <td class="column55">b.  Kawasan transmigrasi</td>
                <td class="column40" colspan="2">
                    @if ($identitasPuskesmas->kawasan_transmigrasi === 1)
                        Ada
                    @else
                        Tidak ada
                    @endif
                </td>
            </tr>
            <tr>
                <td class="column5"></td>
                <td class="column55">c.  Kawasan perkebunan inti rakyat</td>
                <td class="column40" colspan="2">
                    @if ($identitasPuskesmas->kawasan_perkebunan_inti_rakyat === 1)
                        Ada
                    @else
                        Tidak ada
                    @endif
                </td>
            </tr>
            <tr>
                <td class="column5"></td>
                <td class="column55">d.  Kawasan nelayan</td>
                <td class="column40" colspan="2">
                    @if ($identitasPuskesmas->kawasan_nelayan === 1)
                        Ada
                    @else
                        Tidak ada
                    @endif
                </td>
            </tr>
            <tr>
                <td class="column5"></td>
                <td class="column55">e.  Kawasan industri</td>
                <td class="column40" colspan="2">
                    @if ($identitasPuskesmas->kawasan_industri === 1)
                        Ada
                    @else
                        Tidak ada
                    @endif
                </td>
            </tr>
            <tr>
                <td class="column5"></td>
                <td class="column55">f.  Pariwisata</td>
                <td class="column40" colspan="2">
                    @if ($identitasPuskesmas->pariwisata === 1)
                        Ada
                    @else
                        Tidak ada
                    @endif
                </td>
            </tr>
            <tr>
                <td class="column5"></td>
                <td class="column55">g.  Kawasan kepulauan</td>
                <td class="column40" colspan="2">
                    @if ($identitasPuskesmas->kawasan_kepulauan === 1)
                        Ada
                    @else
                        Tidak ada
                    @endif
                </td>
            </tr>
            <tr>
                <td class="column5"></td>
                <td class="column55">h.  Kawasan perbatasan negara</td>
                <td class="column40" colspan="2">
                    @if ($identitasPuskesmas->kawasan_perbatasan_negara === 1)
                        Ada
                    @else
                        Tidak ada
                    @endif
                </td>
            </tr>
            <tr>
                <td class="column5">7</td>
                <td class="column55">Jumlah Desa/Kelurahan Siaga Aktif</td>
                <td class="column40 columnGrey" colspan="2"></td>
            </tr>
            <tr>
                <td class="column5"></td>
                <td class="column55">a. Desa/Kelurahan Siaga Aktif Pratama</td>
                <td class="column15">{{ number_format($identitasPuskesmas->desa_siaga_aktf_pertama, 0, ',', '.') }}</td>
                <td class="column25">buah</td>
            </tr>
            <tr>
                <td class="column5"></td>
                <td class="column55">b. Desa/Kelurahan Siaga Aktif Madya</td>
                <td class="column15">{{ number_format($identitasPuskesmas->desa_siaga_aktf_madya, 0, ',', '.') }}</td>
                <td class="column25">buah</td>
            </tr>
            <tr>
                <td class="column5"></td>
                <td class="column55">c. Desa/Kelurahan Siaga Aktif Purnama</td>
                <td class="column15">{{ number_format($identitasPuskesmas->desa_siaga_aktf_purnama, 0, ',', '.') }}</td>
                <td class="column25">buah</td>
            </tr>
            <tr>
                <td class="column5"></td>
                <td class="column55">d. Desa/Kelurahan Siaga Aktif Mandiri</td>
                <td class="column15">{{ number_format($identitasPuskesmas->desa_siaga_aktf_mandiri, 0, ',', '.') }}</td>
                <td class="column25">buah</td>
            </tr>
        </tbody>
    </table>

    <br>
    <table>
        <thead>
            <tr>
                <th class="column5">No</th>
                <th class="column55">Uraian</th>
                <th class="column40" colspan="2">Data</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="column55" colspan="2">III. SUMBER DAYA PUSKESMAS</td>
                <td class="column40 columGrey" colspan="2"></td>
            </tr>
            <tr>
                <td class="column5">A.</td>
                <td class="column55">Manajemen puskesmas</td>
                <td class="column40 columGrey" colspan="2"></td>
            </tr>
            <tr>
                <td class="column5">1</td>
                <td class="column55">Dokumen perencanaan puskesmas</td>
                <td class="column40 columGrey" colspan="2"></td>
            </tr>
            <tr>
                <td class="column5"></td>
                <td class="column55">a.   Rencana lima tahunan</td>
                <td class="column40" colspan="2">
                    @if ($identitasPuskesmas->sumber_daya_puskesmas[0]['rencana_lima_tahunan'] === 1)
                        Ada
                    @else
                        Tidak ada
                    @endif
                </td>
            </tr>
            <tr>
                <td class="column5"></td>
                <td class="column55">b.   Rencana Usulan Kegiatan (RUK)</td>
                <td class="column40" colspan="2">
                    @if ($identitasPuskesmas->sumber_daya_puskesmas[0]['rencana_usulan_kegiatan'] === 1)
                        Ada
                    @else
                        Tidak ada
                    @endif
                </td>
            </tr>
            <tr>
                <td class="column5"></td>
                <td class="column55">c.   Rencana Pelaksanaan Kegiatan (RPK) Tahunan</td>
                <td class="column40" colspan="2">
                    @if ($identitasPuskesmas->sumber_daya_puskesmas[0]['rencana_pelaksanaan_kegiatan_tahunan'] === 1)
                        Ada
                    @else
                        Tidak ada
                    @endif
                </td>
            </tr>
            <tr>
                <td class="column5">2</td>
                <td class="column55">Dokumen Penggerakan Pelaksanaan</td>
                <td class="column40 columGrey" colspan="2"></td>
            </tr>
            <tr>
                <td class="column5"></td>
                <td class="column55">a. Rencana Pelaksanaan Kegiatan (RPK) Bulanan </td>
                <td class="column40" colspan="2">
                    @if ($identitasPuskesmas->sumber_daya_puskesmas[0]['rencana_pelaksanaan_kegiatan_bulanan'] === 1)
                        Ada
                    @else
                        Tidak ada
                    @endif
                </td>
            </tr>
            <tr>
                <td class="column5"></td>
                <td class="column55">b. Lokakarya mini bulanan</td>
                <td class="column40" colspan="2">
                @if ($identitasPuskesmas->sumber_daya_puskesmas[0]['lokakarya_mini_bulanan'] === 1)
                        Ada
                    @else
                        Tidak ada
                    @endif
                </td>
            </tr>
            <tr>
                <td class="column5"></td>
                <td class="column55">c. Lokakarya mini triwulan</td>
                <td class="column40" colspan="2">
                    @if ($identitasPuskesmas->sumber_daya_puskesmas[0]['lokakarya_mini_triwulan'] === 1)
                        Ada
                    @else
                        Tidak ada
                    @endif
                </td>
            </tr>
            <tr>
                <td class="column5">3</td>
                <td class="column55">Dokumen Penilaian Kinerja Puskesmas (PKP)</td>
                <td class="column40" colspan="2">
                    @if ($identitasPuskesmas->sumber_daya_puskesmas[0]['dokumen_pkp'] === 1)
                        Ada
                    @else
                        Tidak ada
                    @endif
                </td>
            </tr>
            @if ($identitasPuskesmas->sumber_daya_puskesmas[0]['dokumen_pkp'] === 1)
                ada
                <tr>
                    <td class="column5"></td>
                    <td class="column55">a. Hasil pelayanan kesehatan</td>
                    <td class="column40" colspan="2">
                        @if ($identitasPuskesmas->sumber_daya_puskesmas[0]['hasil_pelayanan_kesehatan_1'] === 1)
                            Baik
                        @elseif ($identitasPuskesmas->sumber_daya_puskesmas[0]['hasil_pelayanan_kesehatan_1'] === 1)
                            Cukup
                        @else
                            Kurang
                        @endif
                    </td>
                </tr>
                <tr>
                    <td class="column5"></td>
                    <td class="column55">b. Hasil manajemen</td>
                    <td class="column40" colspan="2">
                        @if ($identitasPuskesmas->sumber_daya_puskesmas[0]['hasil_manajemen_1'] === 1)
                            Baik
                        @elseif ($identitasPuskesmas->sumber_daya_puskesmas[0]['hasil_manajemen_1'] === 1)
                            Cukup
                        @else
                            Kurang
                        @endif
                    </td>
                </tr>
            @endif
            <tr>
                <td class="column5">4</td>
                <td class="column55">Umpan balik dari Dinas Kesehatan Kabupaten/Kota yang diterima puskesmas</td>
                <td class="column40" colspan="2">
                    @if ($identitasPuskesmas->sumber_daya_puskesmas[0]['feedback_dinkes_yang_diterima'] === 1)
                        Ada
                    @else
                        Tidak ada
                    @endif
                </td>
            </tr>
            <tr>
                <td class="column5">5</td>
                <td class="column55">Dokumen Penilaian Kinerja Puskesmas (PKP) yang ditetapkan oleh Dinas Kesehatan kabupaten/kota</td>
                <td class="column40" colspan="2">
                    @if ($identitasPuskesmas->sumber_daya_puskesmas[0]['dokumen_pkp_yang_ditetapkan_dinkes'] === 1)
                        Ada
                    @else
                        Tidak ada
                    @endif
                </td>
            </tr>
            @if ($identitasPuskesmas->sumber_daya_puskesmas[0]['dokumen_pkp_yang_ditetapkan_dinkes'] === 1)
                <tr>
                    <td class="column5"></td>
                    <td class="column55">a. Hasil pelayanan kesehatan</td>
                    <td class="column40" colspan="2">
                        @if ($identitasPuskesmas->sumber_daya_puskesmas[0]['hasil_pelayanan_kesehatan_2'] === 1)
                            Baik
                        @elseif ($identitasPuskesmas->sumber_daya_puskesmas[0]['hasil_pelayanan_kesehatan_2'] === 1)
                            Cukup
                        @else
                            Kurang
                        @endif
                    </td>
                </tr>
                <tr>
                    <td class="column5"></td>
                    <td class="column55">b. Hasil manajemen</td>
                    <td class="column40" colspan="2">
                        @if ($identitasPuskesmas->sumber_daya_puskesmas[0]['hasil_manajemen_2'] === 1)
                            Baik
                        @elseif ($identitasPuskesmas->sumber_daya_puskesmas[0]['hasil_manajemen_2'] === 1)
                            Cukup
                        @else
                            Kurang
                        @endif
                    </td>
                </tr>
            @endif
            <tr>
                <td class="column5">B.</td>
                <td class="column55">Pelaksanaan Upaya Kesehatan</td>
                <td class="column40 columGrey" colspan="2"></td>
            </tr>
            <tr>
                <td class="column5">1</td>
                <td class="column55">Upaya Kesehatan Masyarakat Esensial </td>
                <td class="column40 columGrey" colspan="2"></td>
            </tr>
            <tr>
                <td class="column5"></td>
                <td class="column55">a. Pelayanan promosi kesehatan</td>
                <td class="column40" colspan="2">
                    @if ($identitasPuskesmas->sumber_daya_puskesmas[0]['pelayanan_promosi_kesehatan'] === 1)
                        Ada
                    @else
                        Tidak ada
                    @endif
                </td>
            </tr>
            <tr>
                <td class="column5"></td>
                <td class="column55">b. Pelayanan kesehatan lingkungan</td>
                <td class="column40" colspan="2">
                    @if ($identitasPuskesmas->sumber_daya_puskesmas[0]['pelayanan_kesehatan_lingkungan'] === 1)
                        Ada
                    @else
                        Tidak ada
                    @endif
                </td>
            </tr>
            <tr>
                <td class="column5"></td>
                <td class="column55">c. Pelayanan kesehatan ibu, anak dan Keluarga Berencana, termasuk pelayanan usia sekolah dan remaja</td>
                <td class="column40" colspan="2">
                    @if ($identitasPuskesmas->sumber_daya_puskesmas[0]['pelayanan_kia'] === 1)
                        Ada
                    @else
                        Tidak ada
                    @endif
                </td>
            </tr>
            <tr>
                <td class="column5"></td>
                <td class="column55">d. Pelayanan gizi</td>
                <td class="column40" colspan="2">
                    @if ($identitasPuskesmas->sumber_daya_puskesmas[0]['pelayanan_gizi'] === 1)
                        Ada
                    @else
                        Tidak ada
                    @endif
                </td>
            </tr>
            <tr>
                <td class="column5"></td>
                <td class="column55">e. Pelayanan pencegahan dan pengendalian penyakit</td>
                <td class="column40" colspan="2">
                    @if ($identitasPuskesmas->sumber_daya_puskesmas[0]['pelayanan_pencegahan_pengendalian_penyakit'] === 1)
                        Ada
                    @else
                        Tidak ada
                    @endif
                </td>
            </tr>
            <tr>
                <td class="column5">2</td>
                <td class="column55">Upaya Kesehatan Masyarakat Pengembangan</td>
                <td class="column40 columGrey" colspan="2"></td>
            </tr>
            <tr>
                <td class="column5"></td>
                <td class="column55">a. Pelayanan kesehatan gigi masyarakat</td>
                <td class="column40" colspan="2">
                    @if ($identitasPuskesmas->sumber_daya_puskesmas[0]['pelayanan_pencegahan_pengendalian_penyakit'] === 1)
                        Ada
                    @else
                        Tidak ada
                    @endif
                </td>
            </tr>
            <tr>
                <td class="column5"></td>
                <td class="column55">b. Pelayanan kesehatan tradisional </td>
                <td class="column40" colspan="2">
                    @if ($identitasPuskesmas->sumber_daya_puskesmas[0]['pelayanan_kesehatan_gigi_masyarakat'] === 1)
                        Ada
                    @else
                        Tidak ada
                    @endif
                </td>
            </tr>
            <tr>
                <td class="column5"></td>
                <td class="column55">c. Pelayanan kesehatan olah raga</td>
                <td class="column40" colspan="2">
                    @if ($identitasPuskesmas->sumber_daya_puskesmas[0]['pelayanan_kesehatan_tradisional'] === 1)
                        Ada
                    @else
                        Tidak ada
                    @endif
                </td>
            </tr>
            <tr>
                <td class="column5"></td>
                <td class="column55">d. Pelayanan kesehatan indera</td>
                <td class="column40" colspan="2">
                    @if ($identitasPuskesmas->sumber_daya_puskesmas[0]['pelayanan_kesehatan_olahraga'] === 1)
                        Ada
                    @else
                        Tidak ada
                    @endif
                </td>
            </tr>
            <tr>
                <td class="column5"></td>
                <td class="column55">e. Pelayanan kesehatan kerja</td>
                <td class="column40" colspan="2">
                    @if ($identitasPuskesmas->sumber_daya_puskesmas[0]['pelayanan_kesehatan_kerja'] === 1)
                        Ada
                    @else
                        Tidak ada
                    @endif
                </td>
            </tr>
            <tr>
                <td class="column5"></td>
                <td class="column55">f. Pelayanan kesehatan haji</td>
                <td class="column40" colspan="2">
                    @if ($identitasPuskesmas->sumber_daya_puskesmas[0]['pelayanan_kesehatan_haji'] === 1)
                        Ada
                    @else
                        Tidak ada
                    @endif
                </td>
            </tr>
            <tr>
                <td class="column5"></td>
                <td class="column55">g. ... lainnya</td>
                <td class="column40" colspan="2">
                    @if ($identitasPuskesmas->sumber_daya_puskesmas[0]['pelayanan_lainnya'] === 1)
                        Ada
                    @else
                        Tidak ada
                    @endif
                </td>
            </tr>
            <tr>
                <td class="column5">3</td>
                <td class="column55">Upaya Kesehatan Perseorangan</td>
                <td class="column40 columGrey" colspan="2"></td>
            </tr>
            <tr>
                <td class="column5"></td>
                <td class="column55">a. Pelayanan rawat jalan</td>
                <td class="column40 columGrey" colspan="2"></td>
            </tr>
            <tr>
                <td class="column5"></td>
                <td class="column55"><span>&nbsp;&nbsp;</span>1) Pelayanan pemeriksaan umum</td>
                <td class="column40" colspan="2">
                    @if ($identitasPuskesmas->sumber_daya_puskesmas[0]['pelayanan_pemeriksaan_umum'] === 1)
                        Ada
                    @else
                        Tidak ada
                    @endif
                </td>
            </tr>
            <tr>
                <td class="column5"></td>
                <td class="column55"><span>&nbsp;&nbsp;</span>2) Pelayanan kesehatan gigi dan mulut</td>
                <td class="column40" colspan="2">
                    @if ($identitasPuskesmas->sumber_daya_puskesmas[0]['pelayanan_kesehatan_gigi_mulut'] === 1)
                        Ada
                    @else
                        Tidak ada
                    @endif
                </td>
            </tr>
            <tr>
                <td class="column5"></td>
                <td class="column55">b. Pelayanan gawat darurat</td>
                <td class="column40" colspan="2">
                    @if ($identitasPuskesmas->sumber_daya_puskesmas[0]['pelayanan_gawat_darurat'] === 1)
                        Ada
                    @else
                        Tidak ada
                    @endif
                </td>
            </tr>
            <tr>
                <td class="column5"></td>
                <td class="column55">c. Pelayanan rawat inap</td>
                <td class="column40" colspan="2">
                    @if ($identitasPuskesmas->sumber_daya_puskesmas[0]['pelayanan_rawat_inap'] === 1)
                        Ada
                    @else
                        Tidak ada
                    @endif
                </td>
            </tr>
            <tr>
                <td class="column5"></td>
                <td class="column55">d. Pelayanan satu hari (one day care)</td>
                <td class="column40" colspan="2">
                    @if ($identitasPuskesmas->sumber_daya_puskesmas[0]['pelayanan_satu_hari'] === 1)
                        Ada
                    @else
                        Tidak ada
                    @endif
                </td>
            </tr>
            <tr>
                <td class="column5"></td>
                <td class="column55">e. Perawatan di rumah (home care) </td>
                <td class="column40" colspan="2">
                    @if ($identitasPuskesmas->sumber_daya_puskesmas[0]['pelayanan_dirumah'] === 1)
                        Ada
                    @else
                        Tidak ada
                    @endif
                </td>
            </tr>
            <tr>
                <td class="column5">4</td>
                <td class="column55">Pelayanan yang harus diselenggarakan untuk melaksanakan upaya kesehatan</td>
                <td class="column40 columGrey" colspan="2"></td>
            </tr>
            <tr>
                <td class="column5"></td>
                <td class="column55">a. Pelayanan kefarmasian</td>
                <td class="column40" colspan="2">
                    @if ($identitasPuskesmas->sumber_daya_puskesmas[0]['pelayanan_kefamasian'] === 1)
                        Ada
                    @else
                        Tidak ada
                    @endif
                </td>
            </tr>
            <tr>
                <td class="column5"></td>
                <td class="column55">b. Pelayanan keperawatan kesehatan masyarakat</td>
                <td class="column40" colspan="2">
                    @if ($identitasPuskesmas->sumber_daya_puskesmas[0]['pelayanan_keperawatan_kesehatan_masyarakat'] === 1)
                        Ada
                    @else
                        Tidak ada
                    @endif
                </td>
            </tr>
            <tr>
                <td class="column5"></td>
                <td class="column55">c. Pelayanan laboratorium</td>
                <td class="column40" colspan="2">
                    @if ($identitasPuskesmas->sumber_daya_puskesmas[0]['pelayanan_laboratorium'] === 1)
                        Ada
                    @else
                        Tidak ada
                    @endif
                </td>
            </tr>
            <tr>
                <td class="column5"></td>
                <td class="column55">d.   Kunjungan keluarga</td>
                <td class="column40" colspan="2">
                    @if ($identitasPuskesmas->sumber_daya_puskesmas[0]['kunjungan_keluarga'] === 1)
                        Ada
                    @else
                        Tidak ada
                    @endif
                </td>
            </tr>
            <tr>
                <td class="column5"></td>
                <td class="column55"><span>&nbsp;&nbsp;</span>1) Jumlah keluarga yang telah dilakukan PIS PK </td>
                <td class="column15">{{ number_format($identitasPuskesmas->sumber_daya_puskesmas[0]['jumlah_keluarga_yang_dilakukan_pis_pk'], 0, ',', '.') }}</td>
                <td class="column25">keluarga</td>
            </tr>
            <tr>
                <td class="column5"></td>
                <td class="column55"><span>&nbsp;&nbsp;</span>2) Jumlah keluarga dengan IKS keluarga  kategori  keluarga sehat</td>
                <td class="column15">{{ number_format($identitasPuskesmas->sumber_daya_puskesmas[0]['jumlah_keluarga_iks_kategori_sehat'], 0, ',', '.') }}</td>
                <td class="column25">keluarga</td>
            </tr>
            <tr>
                <td class="column5"></td>
                <td class="column55"><span>&nbsp;&nbsp;</span>3) Jumlah keluarga dengan IKS keluarga kategori keluarga pra sehat</td>
                <td class="column15">{{ number_format($identitasPuskesmas->sumber_daya_puskesmas[0]['jumlah_keluarga_iks_kategori_prasehat'], 0, ',', '.') }}</td>
                <td class="column25">keluarga</td>
            </tr>
            <tr>
                <td class="column5"></td>
                <td class="column55"><span>&nbsp;&nbsp;</span>4) Jumlah keluarga dengan IKS keluarga kategori keluarga tidak sehat</td>
                <td class="column15">{{ number_format($identitasPuskesmas->sumber_daya_puskesmas[0]['jumlah_keluarga_iks_kategori_tidaksehat'], 0, ',', '.') }}</td>
                <td class="column25">keluarga</td>
            </tr>
            <tr>
                <td class="column5"></td>
                <td class="column55"><span>&nbsp;&nbsp;</span>5) Jumlah desa/ kelurahan yang telah dilakukan PIS-PK</td>
                <td class="column15">{{ number_format($identitasPuskesmas->sumber_daya_puskesmas[0]['jumlah_kelurahan_yang_dilakukan_pis_pk'], 0, ',', '.') }}</td>
                <td class="column25">desa/ kelurahan</td>
            </tr>
            <tr>
                <td class="column5"></td>
                <td class="column55"><span>&nbsp;&nbsp;</span>6) Jumlah desa/ kelurahan dengan kategori desa/kelurahan sehat</td>
                <td class="column15">{{ number_format($identitasPuskesmas->sumber_daya_puskesmas[0]['jumlah_kelurahan_kategori_sehat'], 0, ',', '.') }}</td>
                <td class="column25">desa/ kelurahan</td>
            </tr>
            <tr>
                <td class="column5"></td>
                <td class="column55"><span>&nbsp;&nbsp;</span>7) Jumlah desa/ kelurahan dengan kategori desa/kelurahan pra sehat</td>
                <td class="column15">{{ number_format($identitasPuskesmas->sumber_daya_puskesmas[0]['jumlah_kelurahan_kategori_prasehat'], 0, ',', '.') }}</td>
                <td class="column25">desa/ kelurahan</td>
            </tr>
            <tr>
                <td class="column5"></td>
                <td class="column55"><span>&nbsp;&nbsp;</span>8) Jumlah desa/ kelurahan dengan kategori desa/kelurahan tidak sehat</td>
                <td class="column15">{{ number_format($identitasPuskesmas->sumber_daya_puskesmas[0]['jumlah_kelurahan_kategori_tidaksehat'], 0, ',', '.') }}</td>
                <td class="column25">desa/ kelurahan</td>
            </tr>
            <tr>
                <td class="column5">C.</td>
                <td class="column55">Manajemen Sumber Daya</td>
                <td class="column40 columGrey" colspan="2"></td>
            </tr>
            <tr>
                <td class="column5">1</td>
                <td class="column55">Status Puskesmas BLUD</td>
                <td class="column40" colspan="2">
                    @if ($identitasPuskesmas->sumber_daya_puskesmas[0]['status_puskesma_blud'] === 1)
                        BLUD
                    @else
                        Bukan BLUD
                    @endif
                </td>
            </tr>
            <tr>
                <td class="column5">2</td>
                <td class="column55">Kepesertaan JKN & Asuransi Lainnya</td>
                <td class="column40 columGrey" colspan="2"></td>
            </tr>
            <tr>
                <td class="column5"></td>
                <td class="column55">a. Kerjasama BPJS</td>
                <td class="column40 columGrey" colspan="2"></td>
            </tr>
            <tr>
                <td class="column5"></td>
                <td class="column55"><span>&nbsp;&nbsp;</span>1) Puskesmas telah bekerjasama dengan BPJS </td>
                <td class="column40" colspan="2">
                    @if ($identitasPuskesmas->sumber_daya_puskesmas[0]['puskesmas_kerjasama_bpjs'] === 1)
                        Ya
                    @else
                        Tidak
                    @endif
                </td>
            </tr>
            <tr>
                <td class="column5"></td>
                <td class="column55"><span>&nbsp;&nbsp;</span>2) Besar kapitasi utk puskesmas (Rp/jiwa)</td>
                <td class="column15">{{ number_format($identitasPuskesmas->sumber_daya_puskesmas[0]['besar_kapitasi_untuk_puskesmas'], 0, ',', '.') }}</td>
                <td class="column25">Rp/jiwa</td>
            </tr>
            <tr>
                <td class="column5"></td>
                <td class="column55"><span>&nbsp;&nbsp;</span>3) Jumlah peserta JKN terdaftar</td>
                <td class="column15">{{ number_format($identitasPuskesmas->sumber_daya_puskesmas[0]['jumlah_peserta_jkn_terdaftar'], 0, ',', '.') }}</td>
                <td class="column25">orang</td>
            </tr>
            <tr>
                <td class="column5"></td>
                <td class="column55"><span>&nbsp;&nbsp;</span>4) Jumlah dana kapitasi yang diterima selama 1 tahun </td>
                <td class="column15">{{ number_format($identitasPuskesmas->sumber_daya_puskesmas[0]['jumlah_dana_kapitasi_selama_1_tahun'], 0, ',', '.') }}</td>
                <td class="column25">rupiah</td>
            </tr>
            <tr>
                <td class="column5"></td>
                <td class="column55"><span>&nbsp;&nbsp;</span>5) Persentase pengalokasian dana kapitasi untuk jasa pelayanan kesehatan</td>
                <td class="column15">{{ number_format($identitasPuskesmas->sumber_daya_puskesmas[0]['persentase_pengalokasian_dana_kapitasi'], 0, ',', '.') }}</td>
                <td class="column25">%</td>
            </tr>
            <tr>
                <td class="column5"></td>
                <td class="column55"><span>&nbsp;&nbsp;</span>6) Komponen kegiatan yang dibiayai dengan dana kapitasi untuk </td>
                <td class="column40" colspan="2">
                    <ol>
                        @php
                            $komponen = $identitasPuskesmas->sumber_daya_puskesmas[0]['komponen_kegiatan_yang_dibiayai_dana_kapitasi'];
                            if (in_array(1, $komponen)) {
                                echo '<li>Obat</li>';
                            }
                            if (in_array(2, $komponen)) {
                                echo '<li>Alat kesehatan </li>';
                            }
                            if (in_array(3, $komponen)) {
                                echo '<li>Bahan medis habis pakai</li>';
                            }
                            if (in_array(4, $komponen)) {
                                echo '<li>Dukungan kegiatan operasional pelayanan kesehatan lainnya </li>';
                            }
                        @endphp
                    </ol>
                </td>
            </tr>
            <tr>
                <td class="column5"></td>
                <td class="column55">b. Jumlah fasilitas pelayanan kesehatan di tingkat pertama wilayah kerja puskesmas yang sudah bekerja sama dengan BPJS </td>
                <td class="column40 columGrey" colspan="2"></td>
            </tr>
            <tr>
                <td class="column5"></td>
                <td class="column55"><span>&nbsp;&nbsp;</span>1) Klinik pratama</td>
                <td class="column15">{{ number_format($identitasPuskesmas->sumber_daya_puskesmas[0]['klinik_pratama'], 0, ',', '.') }}</td>
                <td class="column25">buah</td>
            </tr>
            <tr>
                <td class="column5"></td>
                <td class="column55"><span>&nbsp;&nbsp;</span>2) Tempat praktik mandiri dokter </td>
                <td class="column15">{{ number_format($identitasPuskesmas->sumber_daya_puskesmas[0]['tempat_praktik_mandiri_dokter'], 0, ',', '.') }}</td>
                <td class="column25">buah</td>
            </tr>
            <tr>
                <td class="column5"></td>
                <td class="column55"><span>&nbsp;&nbsp;</span>3) Tempat praktik mandiri dokter gigi</td>
                <td class="column15">{{ number_format($identitasPuskesmas->sumber_daya_puskesmas[0]['tempat_praktik_mandiri_dokter_gigi'], 0, ',', '.') }}</td>
                <td class="column25">buah</td>
            </tr>
            <tr>
                <td class="column5"></td>
                <td class="column55">Jumlah peserta asuransi kesehatan di puskesmas</td>
                <td class="column40 columGrey" colspan="2"></td>
            </tr>
            <tr>
                <td class="column5"></td>
                <td class="column55"><span>&nbsp;&nbsp;</span>1) Peserta JKN:</td>
                <td class="column15">{{ number_format($identitasPuskesmas->sumber_daya_puskesmas[0]['peserta_jkn'], 0, ',', '.') }}</td>
                <td class="column25">orang</td>
            </tr>
            <tr>
                <td class="column5"></td>
                <td class="column55"><span>&nbsp;&nbsp;&nbsp;&nbsp;</span>a) Penerima Bantuan Iuran (PBI)</td>
                <td class="column15">{{ number_format($identitasPuskesmas->sumber_daya_puskesmas[0]['penerima_bantuan_iuran'], 0, ',', '.') }}</td>
                <td class="column25">orang</td>
            </tr>
            <tr>
                <td class="column5"></td>
                <td class="column55"><span>&nbsp;&nbsp;&nbsp;&nbsp;</span>b) Non Penerima Bantuan Iuran</td>
                <td class="column15">{{ number_format($identitasPuskesmas->sumber_daya_puskesmas[0]['non_penerima_bantuan_iuran'], 0, ',', '.') }}</td>
                <td class="column25">orang</td>
            </tr>
            <tr>
                <td class="column5"></td>
                <td class="column55"><span>&nbsp;&nbsp;</span>2) Peserta asuransi komersil</td>
                <td class="column15">{{ number_format($identitasPuskesmas->sumber_daya_puskesmas[0]['peserta_asuransi_komersil'], 0, ',', '.') }}</td>
                <td class="column25">orang</td>
            </tr>
            <tr>
                <td class="column5">D.</td>
                <td class="column55">Bangunan dan Prasarana Puskesmas</td>
                <td class="column40 columGrey" colspan="2"></td>
            </tr>
            <tr>
                <td class="column5">1</td>
                <td class="column55">Bangunan Puskesmas</td>
                <td class="column40 columGrey" colspan="2"></td>
            </tr>
            <tr>
                <td class="column5"></td>
                <td class="column55">a. Tahun dibangun</td>
                <td class="column40" colspan="2">{{ number_format($identitasPuskesmas->sumber_daya_puskesmas[0]['tahun_dibangun'], 0, ',', '.') }}</td>
            </tr>
            <tr>
                <td class="column5"></td>
                <td class="column55">b. Luas tanah puskesmas (m<sup>2</sup>)</td>
                <td class="column15">{{ number_format($identitasPuskesmas->sumber_daya_puskesmas[0]['luas_tanah_puskesmas'], 0, ',', '.') }}</td>
                <td class="column25">m<sup>2</sup></td>
            </tr>
            <tr>
                <td class="column5"></td>
                <td class="column55">c. Sertifikat tanah </td>
                <td class="column40" colspan="2">
                    @if ($identitasPuskesmas->sumber_daya_puskesmas[0]['sertifikat_tanah'] === 1)
                        SHM
                    @elseif ($identitasPuskesmas->sumber_daya_puskesmas[0]['sertifikat_tanah'] === 1)
                        SHGU/SHGB 
                    @elseif ($identitasPuskesmas->sumber_daya_puskesmas[0]['sertifikat_tanah'] === 3)
                        Girik dan Petok 
                    @else
                        Acte van Eigendom
                    @endif
                </td>
            </tr>
            <tr>
                <td class="column5"></td>
                <td class="column55">d. Kepemilikan tanah</td>
                <td class="column40" colspan="2">
                    @if ($identitasPuskesmas->sumber_daya_puskesmas[0]['kepemilikan_tanah'] === 1)
                        Pemerintah
                    @elseif ($identitasPuskesmas->sumber_daya_puskesmas[0]['kepemilikan_tanah'] === 1)
                        Adat
                    @elseif ($identitasPuskesmas->sumber_daya_puskesmas[0]['kepemilikan_tanah'] === 3)
                        Warga 
                    @else
                        Sewa
                    @endif
                </td>
            </tr>
            <tr>
                <td class="column5"></td>
                <td class="column55">e. Luas lantai dasar bangunan (m<sup>2</sup>)</td>
                <td class="column15">{{ number_format($identitasPuskesmas->sumber_daya_puskesmas[0]['luas_lantai_dasar_bangunan'], 0, ',', '.') }}</td>
                <td class="column25">m<sup>2</sup></td>
            </tr>
            <tr>
                <td class="column5"></td>
                <td class="column55">f. Luas total lantai bangunan (m<sup>2</sup>)</td>
                <td class="column15">{{ number_format($identitasPuskesmas->sumber_daya_puskesmas[0]['luas_total_lantai_bangunan'], 0, ',', '.') }}</td>
                <td class="column25">m<sup>2</sup></td>
            </tr>
            <tr>
                <td class="column5"></td>
                <td class="column55">g. Jumlah tempat tidur </td>
                <td class="column40 columGrey" colspan="2"></td>
            </tr>
            <tr>
                <td class="column5"></td>
                <td class="column55"><span>&nbsp;&nbsp;</span>1) Jumlah tempat tidur perawatan umum</td>
                <td class="column15">{{ number_format($identitasPuskesmas->sumber_daya_puskesmas[0]['luas_total_lantai_bangunan'], 0, ',', '.') }}</td>
                <td class="column25">unit</td>
            </tr>
            <tr>
                <td class="column5"></td>
                <td class="column55"><span>&nbsp;&nbsp;</span>2) Jumlah tempat tidur perawatan persalinan</td>
                <td class="column15">{{ number_format($identitasPuskesmas->sumber_daya_puskesmas[0]['jumlah_tempat_tidur_perawatan_bersalin'], 0, ',', '.') }}</td>
                <td class="column25">unit</td>
            </tr>
            <tr>
                <td class="column5"></td>
                <td class="column55">h. Lokasi gedung puskesmas     (bisa lebih dari satu jawaban) </td>
                <td class="column40" colspan="2">
                    <ol>
                        @php
                            $komponen = $identitasPuskesmas->sumber_daya_puskesmas[0]['lokasi_gedung_puskesmas'];
                            if (in_array(1, $komponen)) {
                                echo '<li>Ibukota kecamatan</li>';
                            }
                            if (in_array(2, $komponen)) {
                                echo '<li>Ibukota kab/kota</li>';
                            }
                            if (in_array(3, $komponen)) {
                                echo '<li>Ibukota provinsi</li>';
                            }
                            if (in_array(4, $komponen)) {
                                echo '<li>Kota metropolitan</li>';
                            }
                            if (in_array(4, $komponen)) {
                                echo '<li>Bukan ibukota kecamatan</li>';
                            }
                        @endphp
                    </ol>
                </td>
            </tr>
            <tr>
                <td class="column5"></td>
                <td class="column55">i. Izin penyelenggaraan puskesmas </td>
                <td class="column40 columGrey" colspan="2"></td>
            </tr>
            <tr>
                <td class="column5"></td>
                <td class="column55"><span>&nbsp;&nbsp;</span>1)   Tanggal</td>
                <td class="column40" colspan="2">{{ $identitasPuskesmas->sumber_daya_puskesmas[0]['tanggal_izin_puskesmas'] }}</td>
            </tr>
            <tr>
                <td class="column5"></td>
                <td class="column55"><span>&nbsp;&nbsp;</span>2)    Nomor SK</td>
                <td class="column40" colspan="2">{{ $identitasPuskesmas->sumber_daya_puskesmas[0]['no_sk_izin_puskesmas'] }}</td>
            </tr>
            <tr>
                <td class="column5"></td>
                <td class="column55"><span>&nbsp;&nbsp;</span>3)    Oleh</td>
                <td class="column40" colspan="2">{{ $identitasPuskesmas->sumber_daya_puskesmas[0]['penerbit_izin_puskesmas'] }}</td>
            </tr>
            <tr>
                <td class="column5"></td>
                <td class="column55"><span>&nbsp;&nbsp;</span>4)    Masa berlaku</td>
                <td class="column40" colspan="2">{{ $identitasPuskesmas->sumber_daya_puskesmas[0]['masa_berlaku_izin_puskesmas'] }}</td>
            </tr>
            <tr>
                <td class="column5"></td>
                <td class="column55">j. Registrasi puskesmas</td>
                <td class="column40 columGrey" colspan="2"></td>
            </tr>
            <tr>
                <td class="column5"></td>
                <td class="column55"><span>&nbsp;&nbsp;</span>1)   Tanggal</td>
                <td class="column40" colspan="2">{{ $identitasPuskesmas->sumber_daya_puskesmas[0]['tanggal_regis_puskesmas'] }}</td>
            </tr>
            <tr>
                <td class="column5"></td>
                <td class="column55"><span>&nbsp;&nbsp;</span>2)   Nomor surat penetapan kode</td>
                <td class="column40" colspan="2">{{ $identitasPuskesmas->sumber_daya_puskesmas[0]['no_surat_registrasi_puskesmas'] }}</td>
            </tr>
            <tr>
                <td class="column5"></td>
                <td class="column55">k. Akreditasi puskesmas</td>
                <td class="column40 columGrey" colspan="2"></td>
            </tr>
            <tr>
                <td class="column5"></td>
                <td class="column55"><span>&nbsp;&nbsp;</span>1)   Tanggal</td>
                <td class="column40" colspan="2">{{ $identitasPuskesmas->sumber_daya_puskesmas[0]['tanggal_akreditasi_puskesmas'] }}</td>
            </tr>
            <tr>
                <td class="column5"></td>
                <td class="column55"><span>&nbsp;&nbsp;</span>2)    Nomor SK</td>
                <td class="column40" colspan="2">{{ $identitasPuskesmas->sumber_daya_puskesmas[0]['no_sk_akreditasi_puskesmas'] }}</td>
            </tr>
            <tr>
                <td class="column5"></td>
                <td class="column55"><span>&nbsp;&nbsp;</span>3)    Oleh</td>
                <td class="column40" colspan="2">{{ $identitasPuskesmas->sumber_daya_puskesmas[0]['penerbit_akreditasi_puskesmas'] }}</td>
            </tr>
            <tr>
                <td class="column5"></td>
                <td class="column55"><span>&nbsp;&nbsp;</span>4)    Masa berlaku</td>
                <td class="column40" colspan="2">{{ $identitasPuskesmas->sumber_daya_puskesmas[0]['masa_berlaku_akreditasi_puskesmas'] }}</td>
            </tr>
            <tr>
                <td class="column5"></td>
                <td class="column55">l. Jarak pemukiman terjauh ke puskesmas (km)</td>
                <td class="column15">{{ number_format($identitasPuskesmas->sumber_daya_puskesmas[0]['jarak_pemukiman_terjauh_ke_puskesmas'], 0, ',', '.') }}</td>
                <td class="column25">km</td>
            </tr>
            <tr>
                <td class="column5"></td>
                <td class="column55">m. Waktu tempuh terlama bagi warga menuju puskesmas (jam)</td>
                <td class="column15">{{ number_format($identitasPuskesmas->sumber_daya_puskesmas[0]['waktu_tempuh_terlama_ke_puskesmas'], 0, ',', '.') }}</td>
                <td class="column25">jam</td>
            </tr>
            <tr>
                <td class="column5"></td>
                <td class="column55">n. Akses jalan depan gedung puskesmas</td>
                <td class="column40" colspan="2">
                    @if ($identitasPuskesmas->sumber_daya_puskesmas[0]['akses_jalan_depan_puskesmas'] === 1)
                        Aspal/Beton
                    @elseif ($identitasPuskesmas->sumber_daya_puskesmas[0]['akses_jalan_depan_puskesmas'] === 1)
                        Tanah
                    @elseif ($identitasPuskesmas->sumber_daya_puskesmas[0]['akses_jalan_depan_puskesmas'] === 3)
                        Air 
                    @else
                        lainnya
                    @endif
                </td>
            </tr>
            <tr>
                <td class="column5"></td>
                <td class="column55">o. Status jalan raya terdekat menuju ke puskesmas</td>
                <td class="column40" colspan="2">
                    @if ($identitasPuskesmas->sumber_daya_puskesmas[0]['status_jalan_terdekat_puskesmas'] === 1)
                        Jalan pusat
                    @elseif ($identitasPuskesmas->sumber_daya_puskesmas[0]['status_jalan_terdekat_puskesmas'] === 1)
                        Jalan provinsi
                    @elseif ($identitasPuskesmas->sumber_daya_puskesmas[0]['status_jalan_terdekat_puskesmas'] === 3)
                        Jalan kab/kota 
                    @else
                        Status lainnya
                    @endif
                </td>
            </tr>
            <tr>
                <td class="column5"></td>
                <td class="column55">p. Kendaraan yang dapat melalui jalan depan puskesmas (bisa lebih satu jawaban)</td>
                <td class="column40" colspan="2">
                    <ol>
                        @php
                            $komponen = $identitasPuskesmas->sumber_daya_puskesmas[0]['kendaraan_yang_bisa_melalui_jalan_depan_puskesmas'];
                            if (in_array(1, $komponen)) {
                                echo '<li>Kendaraan roda 4</li>';
                            }
                            if (in_array(2, $komponen)) {
                                echo '<li>Kendaraan bermotor roda 2 </li>';
                            }
                            if (in_array(3, $komponen)) {
                                echo '<li>Perahu</li>';
                            }
                        @endphp
                    </ol>
                </td>
            </tr>
            <tr>
                <td class="column5"></td>
                <td class="column55">q. Jumlah unit bangunan di puskesmas yang direhabilitasi pada tahun terakhir</td>
                <td class="column40" colspan="2">{{ $identitasPuskesmas->sumber_daya_puskesmas[0]['jumlah_bangunan_yang_direhabilitasi_terakhir'] }} unit, tahun {{ $identitasPuskesmas->sumber_daya_puskesmas[0]['tahun_bangunan_yang_direhabilitasi_terakhir'] }}</td>
            </tr>
            <tr>
                <td class="column5"></td>
                <td class="column55">r. Sumber dana rehabilitasi puskesmas</td>
                <td class="column40" colspan="2">
                    @if ($identitasPuskesmas->sumber_daya_puskesmas[0]['sember_dana_rehabilitasi'] === 1)
                        APBN
                    @elseif ($identitasPuskesmas->sumber_daya_puskesmas[0]['sember_dana_rehabilitasi'] === 1)
                        APBD propinsi 
                    @elseif ($identitasPuskesmas->sumber_daya_puskesmas[0]['sember_dana_rehabilitasi'] === 3)
                        APBD kab/kota 
                    @elseif ($identitasPuskesmas->sumber_daya_puskesmas[0]['sember_dana_rehabilitasi'] === 4)
                        Hibah
                    @else
                        Dll 
                    @endif
                </td>
            </tr>
            <tr>
                <td class="column5"></td>
                <td class="column55">s. Keadaan bangunan puskesmas   (Kondisi bangunan sesuai Peraturan Menteri PU No. 45 tahun 2000)</td>
                <td class="column40" colspan="2">
                    @if ($identitasPuskesmas->sumber_daya_puskesmas[0]['kedaan_bangunan_puskesmas'] === 1)
                        Baik
                    @elseif ($identitasPuskesmas->sumber_daya_puskesmas[0]['kedaan_bangunan_puskesmas'] === 1)
                        Rusak ringan
                    @elseif ($identitasPuskesmas->sumber_daya_puskesmas[0]['kedaan_bangunan_puskesmas'] === 3)
                        Rusak sedang
                    @else
                        Rusak berat
                    @endif
                </td>
            </tr>
            <tr>
                <td class="column5"></td>
                <td class="column55">t. Bangunan Puskesmas Pembantu (PP)</td>
                <td class="column40 columGrey" colspan="2"></td>
            </tr>
            <tr>
                <td class="column5"></td>
                <td class="column55"><span>&nbsp;&nbsp;</span>1) Baik</td>
                <td class="column15">{{ number_format($identitasPuskesmas->sumber_daya_puskesmas[0]['bangunan_pp_kondisi_baik'], 0, ',', '.') }}</td>
                <td class="column25">unit</td>
            </tr>
            <tr>
                <td class="column5"></td>
                <td class="column55"><span>&nbsp;&nbsp;</span>2) Rusak ringan</td>
                <td class="column15">{{ number_format($identitasPuskesmas->sumber_daya_puskesmas[0]['bangunan_pp_kondisi_rusak_ringan'], 0, ',', '.') }}</td>
                <td class="column25">unit</td>
            </tr>
            <tr>
                <td class="column5"></td>
                <td class="column55"><span>&nbsp;&nbsp;</span>3) Rusak sedang</td>
                <td class="column15">{{ number_format($identitasPuskesmas->sumber_daya_puskesmas[0]['bangunan_pp_kondisi_rusak_sedang'], 0, ',', '.') }}</td>
                <td class="column25">unit</td>
            </tr>
            <tr>
                <td class="column5"></td>
                <td class="column55"><span>&nbsp;&nbsp;</span>4) Rusak berat</td>
                <td class="column15">{{ number_format($identitasPuskesmas->sumber_daya_puskesmas[0]['bangunan_pp_kondisi_rusak_berat'], 0, ',', '.') }}</td>
                <td class="column25">unit</td>
            </tr>
            <tr>
                <td class="column5"></td>
                <td class="column55">u. Bangunan rumah dinas tenaga kesehatan</td>
                <td class="column40 columGrey" colspan="2"></td>
            </tr>
            <tr>
                <td class="column5"></td>
                <td class="column55"><span>&nbsp;&nbsp;</span>1) Baik</td>
                <td class="column15">{{ number_format($identitasPuskesmas->sumber_daya_puskesmas[0]['bangunan_rumah_dinas_nakes_kondisi_baik'], 0, ',', '.') }}</td>
                <td class="column25">unit</td>
            </tr>
            <tr>
                <td class="column5"></td>
                <td class="column55"><span>&nbsp;&nbsp;</span>2) Rusak ringan</td>
                <td class="column15">{{ number_format($identitasPuskesmas->sumber_daya_puskesmas[0]['bangunan_rumah_dinas_nakes_kondisi_rusak_ringan'], 0, ',', '.') }}</td>
                <td class="column25">unit</td>
            </tr>
            <tr>
                <td class="column5"></td>
                <td class="column55"><span>&nbsp;&nbsp;</span>3) Rusak sedang</td>
                <td class="column15">{{ number_format($identitasPuskesmas->sumber_daya_puskesmas[0]['bangunan_rumah_dinas_nakes_kondisi_rusak_sedang'], 0, ',', '.') }}</td>
                <td class="column25">unit</td>
            </tr>
            <tr>
                <td class="column5"></td>
                <td class="column55"><span>&nbsp;&nbsp;</span>4) Rusak berat</td>
                <td class="column15">{{ number_format($identitasPuskesmas->sumber_daya_puskesmas[0]['bangunan_rumah_dinas_nakes_kondisi_rusak_berat'], 0, ',', '.') }}</td>
                <td class="column25">unit</td>
            </tr>
            <tr>
                <td class="column5"></td>
                <td class="column55">v. Ketersediaan dan Kondisi Ruangan</td>
                <td class="column40 columGrey" colspan="2"></td>
            </tr>
            <tr>
                <td class="column5" style="border-bottom: 0;"></td>
                <td class="column55" style="border-bottom: 0;"><span>&nbsp;&nbsp;</span>1) Ruang pelayanan</td>
                <td class="column40 columGrey" colspan="2" style="border-bottom: 0;"></td>
            </tr>
        </tbody>
    </table>
    <table>
        <thead>
            <tr>
                <th class="column5" rowspan="2">No</th>
                <th class="column30" rowspan="2">Sarana/Ruang/Ruangan</th>
                <th class="column15" rowspan="2" style="text-align: left;">Ketersediaan <br>(1) ada <br>(2) tidak ada</th>
                <th class="column25" colspan="2">Tahun</th>
                <th class="column25" rowspan="2">Kondisi *)</th>
            </tr>
            <tr>
                <th class="column12-5">Pendirian</th>
                <th class="column12-5">Renovasi</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="column5" style="text-align: center;">1</td>
                <td class="column30" style="text-align: center;">2</td>
                <td class="column15" style="text-align: center;">3</td>
                <td class="column12-5" style="text-align: center;">4</td>
                <td class="column12-5" style="text-align: center;">5</td>
                <td class="column25" style="text-align: center;">6</td>
            </tr>
            <tr>
                <td class="column5"></td>
                <td class="column30">a) Ruangan pendaftaran dan rekam medik</td>
                <td class="column15">
                    @if ($identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_rekam_medik'][0]['ketersediaan'] === 1)
                        Ada
                    @else
                        Rusak berat
                    @endif
                </td>
                <td class="column12-5">{{ $identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_rekam_medik'][0]['pendirian'] }}</td>
                <td class="column12-5">{{ $identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_rekam_medik'][0]['renovasi'] }}</td>
                <td class="column25">
                    @if ($identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_rekam_medik'][0]['kondisi'] === 1)
                        Baik
                    @elseif ($identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_rekam_medik'][0]['kondisi'] === 1)
                        Rusak ringan
                    @elseif ($identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_rekam_medik'][0]['kondisi'] === 3)
                        Rusak sedang
                    @else
                        Rusak berat
                    @endif
                </td>
            </tr>
            <tr>
                <td class="column5"></td>
                <td class="column30">b) Ruangan tunggu</td>
                <td class="column15">
                    @if ($identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_tunggu'][0]['ketersediaan'] === 1)
                        Ada
                    @else
                        Rusak berat
                    @endif
                </td>
                <td class="column12-5">{{ $identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_tunggu'][0]['pendirian'] }}</td>
                <td class="column12-5">{{ $identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_tunggu'][0]['renovasi'] }}</td>
                <td class="column25">
                    @if ($identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_tunggu'][0]['kondisi'] === 1)
                        Baik
                    @elseif ($identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_tunggu'][0]['kondisi'] === 1)
                        Rusak ringan
                    @elseif ($identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_tunggu'][0]['kondisi'] === 3)
                        Rusak sedang
                    @else
                        Rusak berat
                    @endif
                </td>
            </tr>
            <tr>
                <td class="column5"></td>
                <td class="column30">c) Ruangan pemeriksaan umum</td>
                <td class="column15">
                    @if ($identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_periksa_umum'][0]['ketersediaan'] === 1)
                        Ada
                    @else
                        Rusak berat
                    @endif
                </td>
                <td class="column12-5">{{ $identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_periksa_umum'][0]['pendirian'] }}</td>
                <td class="column12-5">{{ $identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_periksa_umum'][0]['renovasi'] }}</td>
                <td class="column25">
                    @if ($identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_periksa_umum'][0]['kondisi'] === 1)
                        Baik
                    @elseif ($identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_periksa_umum'][0]['kondisi'] === 1)
                        Rusak ringan
                    @elseif ($identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_periksa_umum'][0]['kondisi'] === 3)
                        Rusak sedang
                    @else
                        Rusak berat
                    @endif
                </td>
            </tr>
            <tr>
                <td class="column5"></td>
                <td class="column30">d) Ruangan tindakan</td>
                <td class="column15">
                    @if ($identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_tindakan'][0]['ketersediaan'] === 1)
                        Ada
                    @else
                        Rusak berat
                    @endif
                </td>
                <td class="column12-5">{{ $identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_tindakan'][0]['pendirian'] }}</td>
                <td class="column12-5">{{ $identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_tindakan'][0]['renovasi'] }}</td>
                <td class="column25">
                    @if ($identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_tindakan'][0]['kondisi'] === 1)
                        Baik
                    @elseif ($identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_tindakan'][0]['kondisi'] === 1)
                        Rusak ringan
                    @elseif ($identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_tindakan'][0]['kondisi'] === 3)
                        Rusak sedang
                    @else
                        Rusak berat
                    @endif
                </td>
            </tr>
            <tr>
                <td class="column5"></td>
                <td class="column30">e) Ruangan Gawat Darurat</td>
                <td class="column15">
                    @if ($identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_gawat_darurat'][0]['ketersediaan'] === 1)
                        Ada
                    @else
                        Rusak berat
                    @endif
                </td>
                <td class="column12-5">{{ $identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_gawat_darurat'][0]['pendirian'] }}</td>
                <td class="column12-5">{{ $identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_gawat_darurat'][0]['renovasi'] }}</td>
                <td class="column25">
                    @if ($identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_gawat_darurat'][0]['kondisi'] === 1)
                        Baik
                    @elseif ($identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_gawat_darurat'][0]['kondisi'] === 1)
                        Rusak ringan
                    @elseif ($identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_gawat_darurat'][0]['kondisi'] === 3)
                        Rusak sedang
                    @else
                        Rusak berat
                    @endif
                </td>
            </tr>
            <tr>
                <td class="column5"></td>
                <td class="column30">f) Ruangan KIA, KB dan imunisasi</td>
                <td class="column15">
                    @if ($identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_kia'][0]['ketersediaan'] === 1)
                        Ada
                    @else
                        Rusak berat
                    @endif
                </td>
                <td class="column12-5">{{ $identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_kia'][0]['pendirian'] }}</td>
                <td class="column12-5">{{ $identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_kia'][0]['renovasi'] }}</td>
                <td class="column25">
                    @if ($identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_kia'][0]['kondisi'] === 1)
                        Baik
                    @elseif ($identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_kia'][0]['kondisi'] === 1)
                        Rusak ringan
                    @elseif ($identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_kia'][0]['kondisi'] === 3)
                        Rusak sedang
                    @else
                        Rusak berat
                    @endif
                </td>
            </tr>
            <tr>
                <td class="column5"></td>
                <td class="column30">g) Ruangan kesehatan anak & imunisasi </td>
                <td class="column15">
                    @if ($identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_anak_imunisasi'][0]['ketersediaan'] === 1)
                        Ada
                    @else
                        Rusak berat
                    @endif
                </td>
                <td class="column12-5">{{ $identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_anak_imunisasi'][0]['pendirian'] }}</td>
                <td class="column12-5">{{ $identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_anak_imunisasi'][0]['renovasi'] }}</td>
                <td class="column25">
                    @if ($identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_anak_imunisasi'][0]['kondisi'] === 1)
                        Baik
                    @elseif ($identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_anak_imunisasi'][0]['kondisi'] === 1)
                        Rusak ringan
                    @elseif ($identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_anak_imunisasi'][0]['kondisi'] === 3)
                        Rusak sedang
                    @else
                        Rusak berat
                    @endif
                </td>
            </tr>
            <tr>
                <td class="column5"></td>
                <td class="column30">h) Ruangan kesehatan ibu dan KB</td>
                <td class="column15">
                    @if ($identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_ibu_kb'][0]['ketersediaan'] === 1)
                        Ada
                    @else
                        Rusak berat
                    @endif
                </td>
                <td class="column12-5">{{ $identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_ibu_kb'][0]['pendirian'] }}</td>
                <td class="column12-5">{{ $identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_ibu_kb'][0]['renovasi'] }}</td>
                <td class="column25">
                    @if ($identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_ibu_kb'][0]['kondisi'] === 1)
                        Baik
                    @elseif ($identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_ibu_kb'][0]['kondisi'] === 1)
                        Rusak ringan
                    @elseif ($identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_ibu_kb'][0]['kondisi'] === 3)
                        Rusak sedang
                    @else
                        Rusak berat
                    @endif
                </td>
            </tr>
            <tr>
                <td class="column5"></td>
                <td class="column30">i) Ruangan kesehatan gigi & mulut</td>
                <td class="column15">
                    @if ($identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_gigi_mulut'][0]['ketersediaan'] === 1)
                        Ada
                    @else
                        Rusak berat
                    @endif
                </td>
                <td class="column12-5">{{ $identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_gigi_mulut'][0]['pendirian'] }}</td>
                <td class="column12-5">{{ $identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_gigi_mulut'][0]['renovasi'] }}</td>
                <td class="column25">
                    @if ($identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_gigi_mulut'][0]['kondisi'] === 1)
                        Baik
                    @elseif ($identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_gigi_mulut'][0]['kondisi'] === 1)
                        Rusak ringan
                    @elseif ($identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_gigi_mulut'][0]['kondisi'] === 3)
                        Rusak sedang
                    @else
                        Rusak berat
                    @endif
                </td>
            </tr>
            <tr>
                <td class="column5"></td>
                <td class="column30">j) Ruangan ASI</td>
                <td class="column15">
                    @if ($identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_asi'][0]['ketersediaan'] === 1)
                        Ada
                    @else
                        Rusak berat
                    @endif
                </td>
                <td class="column12-5">{{ $identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_asi'][0]['pendirian'] }}</td>
                <td class="column12-5">{{ $identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_asi'][0]['renovasi'] }}</td>
                <td class="column25">
                    @if ($identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_asi'][0]['kondisi'] === 1)
                        Baik
                    @elseif ($identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_asi'][0]['kondisi'] === 1)
                        Rusak ringan
                    @elseif ($identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_asi'][0]['kondisi'] === 3)
                        Rusak sedang
                    @else
                        Rusak berat
                    @endif
                </td>
            </tr>
            <tr>
                <td class="column5"></td>
                <td class="column30">k) Ruangan promosi kesehatan</td>
                <td class="column15">
                    @if ($identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_promosi_kesehatan'][0]['ketersediaan'] === 1)
                        Ada
                    @else
                        Rusak berat
                    @endif
                </td>
                <td class="column12-5">{{ $identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_promosi_kesehatan'][0]['pendirian'] }}</td>
                <td class="column12-5">{{ $identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_promosi_kesehatan'][0]['renovasi'] }}</td>
                <td class="column25">
                    @if ($identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_promosi_kesehatan'][0]['kondisi'] === 1)
                        Baik
                    @elseif ($identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_promosi_kesehatan'][0]['kondisi'] === 1)
                        Rusak ringan
                    @elseif ($identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_promosi_kesehatan'][0]['kondisi'] === 3)
                        Rusak sedang
                    @else
                        Rusak berat
                    @endif
                </td>
            </tr>
            <tr>
                <td class="column5"></td>
                <td class="column30">l) Ruangan farmasi</td>
                <td class="column15">
                    @if ($identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_farmasi'][0]['ketersediaan'] === 1)
                        Ada
                    @else
                        Rusak berat
                    @endif
                </td>
                <td class="column12-5">{{ $identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_farmasi'][0]['pendirian'] }}</td>
                <td class="column12-5">{{ $identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_farmasi'][0]['renovasi'] }}</td>
                <td class="column25">
                    @if ($identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_farmasi'][0]['kondisi'] === 1)
                        Baik
                    @elseif ($identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_farmasi'][0]['kondisi'] === 1)
                        Rusak ringan
                    @elseif ($identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_farmasi'][0]['kondisi'] === 3)
                        Rusak sedang
                    @else
                        Rusak berat
                    @endif
                </td>
            </tr>
            <tr>
                <td class="column5"></td>
                <td class="column30">m) Ruangan persalinan</td>
                <td class="column15">
                    @if ($identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_persalinan'][0]['ketersediaan'] === 1)
                        Ada
                    @else
                        Rusak berat
                    @endif
                </td>
                <td class="column12-5">{{ $identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_persalinan'][0]['pendirian'] }}</td>
                <td class="column12-5">{{ $identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_persalinan'][0]['renovasi'] }}</td>
                <td class="column25">
                    @if ($identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_persalinan'][0]['kondisi'] === 1)
                        Baik
                    @elseif ($identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_persalinan'][0]['kondisi'] === 1)
                        Rusak ringan
                    @elseif ($identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_persalinan'][0]['kondisi'] === 3)
                        Rusak sedang
                    @else
                        Rusak berat
                    @endif
                </td>
            </tr>
            <tr>
                <td class="column5"></td>
                <td class="column30">n) Ruangan rawat pasca persalinan</td>
                <td class="column15">
                    @if ($identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_pasca_persalinan'][0]['ketersediaan'] === 1)
                        Ada
                    @else
                        Rusak berat
                    @endif
                </td>
                <td class="column12-5">{{ $identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_pasca_persalinan'][0]['pendirian'] }}</td>
                <td class="column12-5">{{ $identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_pasca_persalinan'][0]['renovasi'] }}</td>
                <td class="column25">
                    @if ($identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_pasca_persalinan'][0]['kondisi'] === 1)
                        Baik
                    @elseif ($identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_pasca_persalinan'][0]['kondisi'] === 1)
                        Rusak ringan
                    @elseif ($identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_pasca_persalinan'][0]['kondisi'] === 3)
                        Rusak sedang
                    @else
                        Rusak berat
                    @endif
                </td>
            </tr>
            <tr>
                <td class="column5"></td>
                <td class="column30">o) Ruangan rawat inap anak </td>
                <td class="column15">
                    @if ($identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_rawat_inap_anak'][0]['ketersediaan'] === 1)
                        Ada
                    @else
                        Rusak berat
                    @endif
                </td>
                <td class="column12-5">{{ $identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_rawat_inap_anak'][0]['pendirian'] }}</td>
                <td class="column12-5">{{ $identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_rawat_inap_anak'][0]['renovasi'] }}</td>
                <td class="column25">
                    @if ($identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_rawat_inap_anak'][0]['kondisi'] === 1)
                        Baik
                    @elseif ($identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_rawat_inap_anak'][0]['kondisi'] === 1)
                        Rusak ringan
                    @elseif ($identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_rawat_inap_anak'][0]['kondisi'] === 3)
                        Rusak sedang
                    @else
                        Rusak berat
                    @endif
                </td>
            </tr>
            <tr>
                <td class="column5"></td>
                <td class="column30">p) Ruangan rawat inap pria</td>
                <td class="column15">
                    @if ($identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_rawat_inap_pria'][0]['ketersediaan'] === 1)
                        Ada
                    @else
                        Rusak berat
                    @endif
                </td>
                <td class="column12-5">{{ $identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_rawat_inap_pria'][0]['pendirian'] }}</td>
                <td class="column12-5">{{ $identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_rawat_inap_pria'][0]['renovasi'] }}</td>
                <td class="column25">
                    @if ($identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_rawat_inap_pria'][0]['kondisi'] === 1)
                        Baik
                    @elseif ($identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_rawat_inap_pria'][0]['kondisi'] === 1)
                        Rusak ringan
                    @elseif ($identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_rawat_inap_pria'][0]['kondisi'] === 3)
                        Rusak sedang
                    @else
                        Rusak berat
                    @endif
                </td>
            </tr>
            <tr>
                <td class="column5"></td>
                <td class="column30">q) Ruangan rawat inap wanita</td>
                <td class="column15">
                    @if ($identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_rawat_inap_wanita'][0]['ketersediaan'] === 1)
                        Ada
                    @else
                        Rusak berat
                    @endif
                </td>
                <td class="column12-5">{{ $identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_rawat_inap_wanita'][0]['pendirian'] }}</td>
                <td class="column12-5">{{ $identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_rawat_inap_wanita'][0]['renovasi'] }}</td>
                <td class="column25">
                    @if ($identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_rawat_inap_wanita'][0]['kondisi'] === 1)
                        Baik
                    @elseif ($identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_rawat_inap_wanita'][0]['kondisi'] === 1)
                        Rusak ringan
                    @elseif ($identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_rawat_inap_wanita'][0]['kondisi'] === 3)
                        Rusak sedang
                    @else
                        Rusak berat
                    @endif
                </td>
            </tr>
            <tr>
                <td class="column5"></td>
                <td class="column30">r) Ruangan gudang umum</td>
                <td class="column15">
                    @if ($identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_gudang_umum'][0]['ketersediaan'] === 1)
                        Ada
                    @else
                        Rusak berat
                    @endif
                </td>
                <td class="column12-5">{{ $identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_gudang_umum'][0]['pendirian'] }}</td>
                <td class="column12-5">{{ $identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_gudang_umum'][0]['renovasi'] }}</td>
                <td class="column25">
                    @if ($identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_gudang_umum'][0]['kondisi'] === 1)
                        Baik
                    @elseif ($identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_gudang_umum'][0]['kondisi'] === 1)
                        Rusak ringan
                    @elseif ($identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_gudang_umum'][0]['kondisi'] === 3)
                        Rusak sedang
                    @else
                        Rusak berat
                    @endif
                </td>
            </tr>
            <tr>
                <td class="column5"></td>
                <td class="column30">s) KM/WC pasien (laki dan wanita terpisah)</td>
                <td class="column15">
                    @if ($identitasPuskesmas->sumber_daya_puskesmas[0]['wc_pasien'][0]['ketersediaan'] === 1)
                        Ada
                    @else
                        Rusak berat
                    @endif
                </td>
                <td class="column12-5">{{ $identitasPuskesmas->sumber_daya_puskesmas[0]['wc_pasien'][0]['pendirian'] }}</td>
                <td class="column12-5">{{ $identitasPuskesmas->sumber_daya_puskesmas[0]['wc_pasien'][0]['renovasi'] }}</td>
                <td class="column25">
                    @if ($identitasPuskesmas->sumber_daya_puskesmas[0]['wc_pasien'][0]['kondisi'] === 1)
                        Baik
                    @elseif ($identitasPuskesmas->sumber_daya_puskesmas[0]['wc_pasien'][0]['kondisi'] === 1)
                        Rusak ringan
                    @elseif ($identitasPuskesmas->sumber_daya_puskesmas[0]['wc_pasien'][0]['kondisi'] === 3)
                        Rusak sedang
                    @else
                        Rusak berat
                    @endif
                </td>
            </tr>
            <tr>
                <td class="column5"></td>
                <td class="column30">t) Laboratorium</td>
                <td class="column15">
                    @if ($identitasPuskesmas->sumber_daya_puskesmas[0]['laboratorium'][0]['ketersediaan'] === 1)
                        Ada
                    @else
                        Rusak berat
                    @endif
                </td>
                <td class="column12-5">{{ $identitasPuskesmas->sumber_daya_puskesmas[0]['laboratorium'][0]['pendirian'] }}</td>
                <td class="column12-5">{{ $identitasPuskesmas->sumber_daya_puskesmas[0]['laboratorium'][0]['renovasi'] }}</td>
                <td class="column25">
                    @if ($identitasPuskesmas->sumber_daya_puskesmas[0]['laboratorium'][0]['kondisi'] === 1)
                        Baik
                    @elseif ($identitasPuskesmas->sumber_daya_puskesmas[0]['laboratorium'][0]['kondisi'] === 1)
                        Rusak ringan
                    @elseif ($identitasPuskesmas->sumber_daya_puskesmas[0]['laboratorium'][0]['kondisi'] === 3)
                        Rusak sedang
                    @else
                        Rusak berat
                    @endif
                </td>
            </tr>
            <tr>
                <td class="column5"></td>
                <td class="column30">u) Ruangan cuci linen</td>
                <td class="column15">
                    @if ($identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_cuci_linen'][0]['ketersediaan'] === 1)
                        Ada
                    @else
                        Rusak berat
                    @endif
                </td>
                <td class="column12-5">{{ $identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_cuci_linen'][0]['pendirian'] }}</td>
                <td class="column12-5">{{ $identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_cuci_linen'][0]['renovasi'] }}</td>
                <td class="column25">
                    @if ($identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_cuci_linen'][0]['kondisi'] === 1)
                        Baik
                    @elseif ($identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_cuci_linen'][0]['kondisi'] === 1)
                        Rusak ringan
                    @elseif ($identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_cuci_linen'][0]['kondisi'] === 3)
                        Rusak sedang
                    @else
                        Rusak berat
                    @endif
                </td>
            </tr>
            <tr>
                <td class="column5"></td>
                <td class="column30">v) Ruangan sterilisasi</td>
                <td class="column15">
                    @if ($identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_sterilisasi'][0]['ketersediaan'] === 1)
                        Ada
                    @else
                        Rusak berat
                    @endif
                </td>
                <td class="column12-5">{{ $identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_sterilisasi'][0]['pendirian'] }}</td>
                <td class="column12-5">{{ $identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_sterilisasi'][0]['renovasi'] }}</td>
                <td class="column25">
                    @if ($identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_sterilisasi'][0]['kondisi'] === 1)
                        Baik
                    @elseif ($identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_sterilisasi'][0]['kondisi'] === 1)
                        Rusak ringan
                    @elseif ($identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_sterilisasi'][0]['kondisi'] === 3)
                        Rusak sedang
                    @else
                        Rusak berat
                    @endif
                </td>
            </tr>
            <tr>
                <td class="column5"></td>
                <td class="column30">w) Ruangan penyelenggaraan makanan</td>
                <td class="column15">
                    @if ($identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_penyelenggaraan_makanan'][0]['ketersediaan'] === 1)
                        Ada
                    @else
                        Rusak berat
                    @endif
                </td>
                <td class="column12-5">{{ $identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_penyelenggaraan_makanan'][0]['pendirian'] }}</td>
                <td class="column12-5">{{ $identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_penyelenggaraan_makanan'][0]['renovasi'] }}</td>
                <td class="column25">
                    @if ($identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_penyelenggaraan_makanan'][0]['kondisi'] === 1)
                        Baik
                    @elseif ($identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_penyelenggaraan_makanan'][0]['kondisi'] === 1)
                        Rusak ringan
                    @elseif ($identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_penyelenggaraan_makanan'][0]['kondisi'] === 3)
                        Rusak sedang
                    @else
                        Rusak berat
                    @endif
                </td>
            </tr>
            <tr>
                <td class="column5"></td>
                <td class="column30">x) KM/WC untuk rawat inap</td>
                <td class="column15">
                    @if ($identitasPuskesmas->sumber_daya_puskesmas[0]['wc_rawat_inap'][0]['ketersediaan'] === 1)
                        Ada
                    @else
                        Rusak berat
                    @endif
                </td>
                <td class="column12-5">{{ $identitasPuskesmas->sumber_daya_puskesmas[0]['wc_rawat_inap'][0]['pendirian'] }}</td>
                <td class="column12-5">{{ $identitasPuskesmas->sumber_daya_puskesmas[0]['wc_rawat_inap'][0]['renovasi'] }}</td>
                <td class="column25">
                    @if ($identitasPuskesmas->sumber_daya_puskesmas[0]['wc_rawat_inap'][0]['kondisi'] === 1)
                        Baik
                    @elseif ($identitasPuskesmas->sumber_daya_puskesmas[0]['wc_rawat_inap'][0]['kondisi'] === 1)
                        Rusak ringan
                    @elseif ($identitasPuskesmas->sumber_daya_puskesmas[0]['wc_rawat_inap'][0]['kondisi'] === 3)
                        Rusak sedang
                    @else
                        Rusak berat
                    @endif
                </td>
            </tr>
            <tr>
                <td class="column5"></td>
                <td class="column30">y) KM/WC petugas</td>
                <td class="column15">
                    @if ($identitasPuskesmas->sumber_daya_puskesmas[0]['wc_petugas'][0]['ketersediaan'] === 1)
                        Ada
                    @else
                        Rusak berat
                    @endif
                </td>
                <td class="column12-5">{{ $identitasPuskesmas->sumber_daya_puskesmas[0]['wc_petugas'][0]['pendirian'] }}</td>
                <td class="column12-5">{{ $identitasPuskesmas->sumber_daya_puskesmas[0]['wc_petugas'][0]['renovasi'] }}</td>
                <td class="column25">
                    @if ($identitasPuskesmas->sumber_daya_puskesmas[0]['wc_petugas'][0]['kondisi'] === 1)
                        Baik
                    @elseif ($identitasPuskesmas->sumber_daya_puskesmas[0]['wc_petugas'][0]['kondisi'] === 1)
                        Rusak ringan
                    @elseif ($identitasPuskesmas->sumber_daya_puskesmas[0]['wc_petugas'][0]['kondisi'] === 3)
                        Rusak sedang
                    @else
                        Rusak berat
                    @endif
                </td>
            </tr>
            <tr>
                <td class="column5"></td>
                <td class="column30">z) Ruangan jaga petugas</td>
                <td class="column15">
                    @if ($identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_jaga_petugas'][0]['ketersediaan'] === 1)
                        Ada
                    @else
                        Rusak berat
                    @endif
                </td>
                <td class="column12-5">{{ $identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_jaga_petugas'][0]['pendirian'] }}</td>
                <td class="column12-5">{{ $identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_jaga_petugas'][0]['renovasi'] }}</td>
                <td class="column25">
                    @if ($identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_jaga_petugas'][0]['kondisi'] === 1)
                        Baik
                    @elseif ($identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_jaga_petugas'][0]['kondisi'] === 1)
                        Rusak ringan
                    @elseif ($identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_jaga_petugas'][0]['kondisi'] === 3)
                        Rusak sedang
                    @else
                        Rusak berat
                    @endif
                </td>
            </tr>
            <tr>
                <td class="column5"></td>
                <td class="column30">aa) Gudang umum</td>
                <td class="column15">
                    @if ($identitasPuskesmas->sumber_daya_puskesmas[0]['gudang_umum'][0]['ketersediaan'] === 1)
                        Ada
                    @else
                        Rusak berat
                    @endif
                </td>
                <td class="column12-5">{{ $identitasPuskesmas->sumber_daya_puskesmas[0]['gudang_umum'][0]['pendirian'] }}</td>
                <td class="column12-5">{{ $identitasPuskesmas->sumber_daya_puskesmas[0]['gudang_umum'][0]['renovasi'] }}</td>
                <td class="column25">
                    @if ($identitasPuskesmas->sumber_daya_puskesmas[0]['gudang_umum'][0]['kondisi'] === 1)
                        Baik
                    @elseif ($identitasPuskesmas->sumber_daya_puskesmas[0]['gudang_umum'][0]['kondisi'] === 1)
                        Rusak ringan
                    @elseif ($identitasPuskesmas->sumber_daya_puskesmas[0]['gudang_umum'][0]['kondisi'] === 3)
                        Rusak sedang
                    @else
                        Rusak berat
                    @endif
                </td>
            </tr>
            <tr>
                <td class="column5"></td>
                <td class="column30">2) Ruang Kantor</td>
                <td class="column65" colspan="4"></td>
            </tr>
            <tr>
                <td class="column5"></td>
                <td class="column30">a) Ruang Kepala Puskesmas</td>
                <td class="column15">
                    @if ($identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_kepala_puskesmas'][0]['ketersediaan'] === 1)
                        Ada
                    @else
                        Rusak berat
                    @endif
                </td>
                <td class="column12-5">{{ $identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_kepala_puskesmas'][0]['pendirian'] }}</td>
                <td class="column12-5">{{ $identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_kepala_puskesmas'][0]['renovasi'] }}</td>
                <td class="column25">
                    @if ($identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_kepala_puskesmas'][0]['kondisi'] === 1)
                        Baik
                    @elseif ($identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_kepala_puskesmas'][0]['kondisi'] === 1)
                        Rusak ringan
                    @elseif ($identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_kepala_puskesmas'][0]['kondisi'] === 3)
                        Rusak sedang
                    @else
                        Rusak berat
                    @endif
                </td>
            </tr>
            <tr>
                <td class="column5"></td>
                <td class="column30">b) Ruang rapat/diskusi</td>
                <td class="column15">
                    @if ($identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_rapat'][0]['ketersediaan'] === 1)
                        Ada
                    @else
                        Rusak berat
                    @endif
                </td>
                <td class="column12-5">{{ $identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_rapat'][0]['pendirian'] }}</td>
                <td class="column12-5">{{ $identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_rapat'][0]['renovasi'] }}</td>
                <td class="column25">
                    @if ($identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_rapat'][0]['kondisi'] === 1)
                        Baik
                    @elseif ($identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_rapat'][0]['kondisi'] === 1)
                        Rusak ringan
                    @elseif ($identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_rapat'][0]['kondisi'] === 3)
                        Rusak sedang
                    @else
                        Rusak berat
                    @endif
                </td>
            </tr>
            <tr>
                <td class="column5"></td>
                <td class="column30">c) Ruangan administrasi kantor/tata usaha</td>
                <td class="column15">
                    @if ($identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_tata_usaha'][0]['ketersediaan'] === 1)
                        Ada
                    @else
                        Rusak berat
                    @endif
                </td>
                <td class="column12-5">{{ $identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_tata_usaha'][0]['pendirian'] }}</td>
                <td class="column12-5">{{ $identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_tata_usaha'][0]['renovasi'] }}</td>
                <td class="column25">
                    @if ($identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_tata_usaha'][0]['kondisi'] === 1)
                        Baik
                    @elseif ($identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_tata_usaha'][0]['kondisi'] === 1)
                        Rusak ringan
                    @elseif ($identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_tata_usaha'][0]['kondisi'] === 3)
                        Rusak sedang
                    @else
                        Rusak berat
                    @endif
                </td>
            </tr>
            <tr>
                <td class="column5"></td>
                <td class="column30">3) Pendukung</td>
                <td class="column65" colspan="4"></td>
            </tr>
            <tr>
                <td class="column5"></td>
                <td class="column30">a) Parkir kendaraan roda 4</td>
                <td class="column15">
                    @if ($identitasPuskesmas->sumber_daya_puskesmas[0]['parkir_roda_4'][0]['ketersediaan'] === 1)
                        Ada
                    @else
                        Rusak berat
                    @endif
                </td>
                <td class="column12-5">{{ $identitasPuskesmas->sumber_daya_puskesmas[0]['parkir_roda_4'][0]['pendirian'] }}</td>
                <td class="column12-5">{{ $identitasPuskesmas->sumber_daya_puskesmas[0]['parkir_roda_4'][0]['renovasi'] }}</td>
                <td class="column25">
                    @if ($identitasPuskesmas->sumber_daya_puskesmas[0]['parkir_roda_4'][0]['kondisi'] === 1)
                        Baik
                    @elseif ($identitasPuskesmas->sumber_daya_puskesmas[0]['parkir_roda_4'][0]['kondisi'] === 1)
                        Rusak ringan
                    @elseif ($identitasPuskesmas->sumber_daya_puskesmas[0]['parkir_roda_4'][0]['kondisi'] === 3)
                        Rusak sedang
                    @else
                        Rusak berat
                    @endif
                </td>
            </tr>
            <tr>
                <td class="column5"></td>
                <td class="column30">a) Parkir kendaraan roda 2</td>
                <td class="column15">
                    @if ($identitasPuskesmas->sumber_daya_puskesmas[0]['parkir_roda_2'][0]['ketersediaan'] === 1)
                        Ada
                    @else
                        Rusak berat
                    @endif
                </td>
                <td class="column12-5">{{ $identitasPuskesmas->sumber_daya_puskesmas[0]['parkir_roda_2'][0]['pendirian'] }}</td>
                <td class="column12-5">{{ $identitasPuskesmas->sumber_daya_puskesmas[0]['parkir_roda_2'][0]['renovasi'] }}</td>
                <td class="column25">
                    @if ($identitasPuskesmas->sumber_daya_puskesmas[0]['parkir_roda_2'][0]['kondisi'] === 1)
                        Baik
                    @elseif ($identitasPuskesmas->sumber_daya_puskesmas[0]['parkir_roda_2'][0]['kondisi'] === 1)
                        Rusak ringan
                    @elseif ($identitasPuskesmas->sumber_daya_puskesmas[0]['parkir_roda_2'][0]['kondisi'] === 3)
                        Rusak sedang
                    @else
                        Rusak berat
                    @endif
                </td>
            </tr>
            <tr>
                <td class="column5"></td>
                <td class="column30">c) Parkir ambulance</td>
                <td class="column15">
                    @if ($identitasPuskesmas->sumber_daya_puskesmas[0]['parkir_ambulance'][0]['ketersediaan'] === 1)
                        Ada
                    @else
                        Rusak berat
                    @endif
                </td>
                <td class="column12-5">{{ $identitasPuskesmas->sumber_daya_puskesmas[0]['parkir_ambulance'][0]['pendirian'] }}</td>
                <td class="column12-5">{{ $identitasPuskesmas->sumber_daya_puskesmas[0]['parkir_ambulance'][0]['renovasi'] }}</td>
                <td class="column25">
                    @if ($identitasPuskesmas->sumber_daya_puskesmas[0]['parkir_ambulance'][0]['kondisi'] === 1)
                        Baik
                    @elseif ($identitasPuskesmas->sumber_daya_puskesmas[0]['parkir_ambulance'][0]['kondisi'] === 1)
                        Rusak ringan
                    @elseif ($identitasPuskesmas->sumber_daya_puskesmas[0]['parkir_ambulance'][0]['kondisi'] === 3)
                        Rusak sedang
                    @else
                        Rusak berat
                    @endif
                </td>
            </tr>
            <tr>
                <td class="column5"></td>
                <td class="column30">d) Parkir puskesmas keliling</td>
                <td class="column15">
                    @if ($identitasPuskesmas->sumber_daya_puskesmas[0]['parkir_puskesmas_keliling'][0]['ketersediaan'] === 1)
                        Ada
                    @else
                        Rusak berat
                    @endif
                </td>
                <td class="column12-5">{{ $identitasPuskesmas->sumber_daya_puskesmas[0]['parkir_puskesmas_keliling'][0]['pendirian'] }}</td>
                <td class="column12-5">{{ $identitasPuskesmas->sumber_daya_puskesmas[0]['parkir_puskesmas_keliling'][0]['renovasi'] }}</td>
                <td class="column25">
                    @if ($identitasPuskesmas->sumber_daya_puskesmas[0]['parkir_puskesmas_keliling'][0]['kondisi'] === 1)
                        Baik
                    @elseif ($identitasPuskesmas->sumber_daya_puskesmas[0]['parkir_puskesmas_keliling'][0]['kondisi'] === 1)
                        Rusak ringan
                    @elseif ($identitasPuskesmas->sumber_daya_puskesmas[0]['parkir_puskesmas_keliling'][0]['kondisi'] === 3)
                        Rusak sedang
                    @else
                        Rusak berat
                    @endif
                </td>
            </tr>
        </tbody>
    </table>
    <table>
        <tr>
            <td class="column5" style="border-top: 0;">2</td>
            <td class="column55" style="border-top: 0;">Prasarana puskesmas</td>
            <td class="column40 columGrey" colspan="2" style="border-top: 0;"></td>
        </tr>
        <tr>
            <td class="column5"></td>
            <td class="column55">a. Sistem kelistrikan puskesmas</td>
            <td class="column40 columGrey" colspan="2"></td>
        </tr>
        <tr>
            <td class="column5"></td>
            <td class="column55"><span>&nbsp;&nbsp;</span>1) Sumber listrik      (bisa lebih dari satu)</td>
            <td class="column40 columGrey" colspan="2"></td>
        </tr>
        <tr>
            <td class="column5"></td>
            <td class="column55"><span>&nbsp;&nbsp;</span>2) Waktu ketersediaan listrik</td>
            <td class="column40 columGrey" colspan="2"></td>
        </tr>
        <tr>
            <td class="column5"></td>
            <td class="column55"><span>&nbsp;&nbsp;</span>3) Daya listrik terpasang</td>
            <td class="column15"></td>
            <td class="column25">watt</td>
        </tr>
        <tr>
            <td class="column5"></td>
            <td class="column55"><span>&nbsp;&nbsp;</span>4) Jumlah genset yang berfungsi</td>
            <td class="column15"></td>
            <td class="column25">watt</td>
        </tr>
        <tr>
            <td class="column5"></td>
            <td class="column55"><span>&nbsp;&nbsp;</span>5) Kapasitas genset yg berfungsi</td>
            <td class="column15"></td>
            <td class="column25">watt</td>
        </tr>
        <tr>
            <td class="column5"></td>
            <td class="column55">b. Sistem Komunikasi:</td>
            <td class="column40 columGrey" colspan="2"></td>
        </tr>
        <tr>
            <td class="column5"></td>
            <td class="column55"><span>&nbsp;&nbsp;</span>1) Telepon kabel</td>
            <td class="column40" colspan="2"></td>
        </tr>
        <tr>
            <td class="column5"></td>
            <td class="column55"><span>&nbsp;&nbsp;</span>2) Telepon seluler</td>
            <td class="column40" colspan="2"></td>
        </tr>
        <tr>
            <td class="column5"></td>
            <td class="column55"><span>&nbsp;&nbsp;</span>3) Radio komunikasi</td>
            <td class="column40" colspan="2"></td>
        </tr>
        <tr>
            <td class="column5"></td>
            <td class="column55"><span>&nbsp;&nbsp;</span>4) Alat komunikasi lain</td>
            <td class="column40" colspan="2"></td>
        </tr>
        <tr>
            <td class="column5"></td>
            <td class="column55"><span>&nbsp;&nbsp;</span>5) Jaringan internet</td>
            <td class="column40" colspan="2"></td>
        </tr>
        <tr>
            <td class="column5"></td>
            <td class="column55">c. Jumlah komputer yang berfungsi baik</td>
            <td class="column15"></td>
            <td class="column25">buah</td>
        </tr>
        <tr>
            <td class="column5"></td>
            <td class="column55">d. Kendaraan Puskesmas Keliling</td>
            <td class="column40 columGrey" colspan="2"></td>
        </tr>
        <tr>
            <td class="column5"></td>
            <td class="column55"><span>&nbsp;&nbsp;</span>1) Jumlah Puskesmas Keliling roda 4 double gardan</td>
            <td class="column40 columGrey" colspan="2"></td>
        </tr>
        <tr>
            <td class="column5"></td>
            <td class="column55"><span>&nbsp;&nbsp;&nbsp;&nbsp;</span>a) Baik</td>
            <td class="column15"></td>
            <td class="column25">buah</td>
        </tr>
        <tr>
            <td class="column5"></td>
            <td class="column55"><span>&nbsp;&nbsp;&nbsp;&nbsp;</span>b) Rusak ringan</td>
            <td class="column15"></td>
            <td class="column25">buah</td>
        </tr>
        <tr>
            <td class="column5"></td>
            <td class="column55"><span>&nbsp;&nbsp;&nbsp;&nbsp;</span>c) Rusak berat</td>
            <td class="column15"></td>
            <td class="column25">buah</td>
        </tr>
        <tr>
            <td class="column5"></td>
            <td class="column55"><span>&nbsp;&nbsp;</span>2) Jumlah Puskesmas Keliling roda 4 single gardan</td>
            <td class="column40 columGrey" colspan="2"></td>
        </tr>
        <tr>
            <td class="column5"></td>
            <td class="column55"><span>&nbsp;&nbsp;&nbsp;&nbsp;</span>a) Baik</td>
            <td class="column15"></td>
            <td class="column25">buah</td>
        </tr>
        <tr>
            <td class="column5"></td>
            <td class="column55"><span>&nbsp;&nbsp;&nbsp;&nbsp;</span>b) Rusak ringan</td>
            <td class="column15"></td>
            <td class="column25">buah</td>
        </tr>
        <tr>
            <td class="column5"></td>
            <td class="column55"><span>&nbsp;&nbsp;&nbsp;&nbsp;</span>c) Rusak berat</td>
            <td class="column15"></td>
            <td class="column25">buah</td>
        </tr>
        <tr>
            <td class="column5"></td>
            <td class="column55"><span>&nbsp;&nbsp;</span>3) Jumlah Puskesmas Keliling Perairan</td>
            <td class="column40 columGrey" colspan="2"></td>
        </tr>
        <tr>
            <td class="column5"></td>
            <td class="column55"><span>&nbsp;&nbsp;&nbsp;&nbsp;</span>a) Baik</td>
            <td class="column15"></td>
            <td class="column25">buah</td>
        </tr>
        <tr>
            <td class="column5"></td>
            <td class="column55"><span>&nbsp;&nbsp;&nbsp;&nbsp;</span>b) Rusak ringan</td>
            <td class="column15"></td>
            <td class="column25">buah</td>
        </tr>
        <tr>
            <td class="column5"></td>
            <td class="column55"><span>&nbsp;&nbsp;&nbsp;&nbsp;</span>c) Rusak berat</td>
            <td class="column15"></td>
            <td class="column25">buah</td>
        </tr>
        <tr>
            <td class="column5"></td>
            <td class="column55"><span>&nbsp;&nbsp;</span>4) Jumlah sepeda motor</td>
            <td class="column40 columGrey" colspan="2"></td>
        </tr>
        <tr>
            <td class="column5"></td>
            <td class="column55"><span>&nbsp;&nbsp;&nbsp;&nbsp;</span>a) Baik</td>
            <td class="column15"></td>
            <td class="column25">buah</td>
        </tr>
        <tr>
            <td class="column5"></td>
            <td class="column55"><span>&nbsp;&nbsp;&nbsp;&nbsp;</span>b) Rusak ringan</td>
            <td class="column15"></td>
            <td class="column25">buah</td>
        </tr>
        <tr>
            <td class="column5"></td>
            <td class="column55"><span>&nbsp;&nbsp;&nbsp;&nbsp;</span>c) Rusak berat</td>
            <td class="column15"></td>
            <td class="column25">buah</td>
        </tr>
        <tr>
            <td class="column5"></td>
            <td class="column55"><span>&nbsp;&nbsp;</span>5) Jumlah sepeda</td>
            <td class="column40 columGrey" colspan="2"></td>
        </tr>
        <tr>
            <td class="column5"></td>
            <td class="column55"><span>&nbsp;&nbsp;&nbsp;&nbsp;</span>a) Baik</td>
            <td class="column15"></td>
            <td class="column25">buah</td>
        </tr>
        <tr>
            <td class="column5"></td>
            <td class="column55"><span>&nbsp;&nbsp;&nbsp;&nbsp;</span>b) Rusak ringan</td>
            <td class="column15"></td>
            <td class="column25">buah</td>
        </tr>
        <tr>
            <td class="column5"></td>
            <td class="column55"><span>&nbsp;&nbsp;&nbsp;&nbsp;</span>c) Rusak berat</td>
            <td class="column15"></td>
            <td class="column25">buah</td>
        </tr>
        <tr>
            <td class="column5"></td>
            <td class="column55">e. Kendaraan Ambulan</td>
            <td class="column40 columGrey" colspan="2"></td>
        </tr>
        <tr>
            <td class="column5"></td>
            <td class="column55"><span>&nbsp;&nbsp;</span>a) Baik</td>
            <td class="column15"></td>
            <td class="column25">buah</td>
        </tr>
        <tr>
            <td class="column5"></td>
            <td class="column55"><span>&nbsp;&nbsp;</span>b) Rusak ringan</td>
            <td class="column15"></td>
            <td class="column25">buah</td>
        </tr>
        <tr>
            <td class="column5"></td>
            <td class="column55"><span>&nbsp;&nbsp;</span>c) Rusak berat</td>
            <td class="column15"></td>
            <td class="column25">buah</td>
        </tr>
        <tr>
            <td class="column5"></td>
            <td class="column55">f. Sistem Sanitasi Puskesmas:</td>
            <td class="column40 columGrey" colspan="2"></td>
        </tr>
        <tr>
            <td class="column5"></td>
            <td class="column55"><span>&nbsp;&nbsp;</span>1) Air bersih</td>
            <td class="column40" colspan="2"></td>
        </tr>
        <tr>
            <td class="column5"></td>
            <td class="column55"><span>&nbsp;&nbsp;</span>2) Air bersih tersedia 24 jam</td>
            <td class="column40" colspan="2"></td>
        </tr>
        <tr>
            <td class="column5"></td>
            <td class="column55"><span>&nbsp;&nbsp;</span>3) Sumber air bersih     (bisa lebih dari satu)</td>
            <td class="column40" colspan="2"></td>
        </tr>
        <tr>
            <td class="column5"></td>
            <td class="column55"><span>&nbsp;&nbsp;</span>3) Sumber air bersih     (bisa lebih dari satu)</td>
            <td class="column40" colspan="2"></td>
        </tr>
        <tr>
            <td class="column5"></td>
            <td class="column55">g. Sarana pengelolaan limbah</td>
            <td class="column40 columGrey" colspan="2"></td>
        </tr>
        <tr>
            <td class="column5"></td>
            <td class="column55"><span>&nbsp;&nbsp;</span>1) Limbah padat (insenerator)</td>
            <td class="column40" colspan="2"></td>
        </tr>
        <tr>
            <td class="column5"></td>
            <td class="column55"><span>&nbsp;&nbsp;</span>2) Limbah cair (IPAL)</td>
            <td class="column40" colspan="2"></td>
        </tr>
        <tr>
            <td class="column5"></td>
            <td class="column55"><span>&nbsp;&nbsp;</span>3) Septiktank</td>
            <td class="column40" colspan="2"></td>
        </tr>
        <tr>
            <td class="column5"></td>
            <td class="column55"><span>&nbsp;&nbsp;</span>4) MOU limbah padat/B3 ke pihak lain</td>
            <td class="column40" colspan="2"></td>
        </tr>
        <tr>
            <td class="column5"></td>
            <td class="column55"><span>&nbsp;&nbsp;</span>5) MOU limbah cair ke pihak berizin</td>
            <td class="column40" colspan="2"></td>
        </tr>
        <tr>
            <td class="column5"></td>
            <td class="column55">h. Sistem Gas Medik</td>
            <td class="column40 columGrey" colspan="2"></td>
        </tr>
        <tr>
            <td class="column5"></td>
            <td class="column55"><span>&nbsp;&nbsp;</span>1) Jumlah tabung gas O2 dan flowmeter</td>
            <td class="column40 columGrey" colspan="2"></td>
        </tr>
        <tr>
            <td class="column5"></td>
            <td class="column55"><span>&nbsp;&nbsp;&nbsp;&nbsp;</span>a) Berfungsi</td>
            <td class="column15"></td>
            <td class="column25">buah</td>
        </tr>
        <tr>
            <td class="column5"></td>
            <td class="column55"><span>&nbsp;&nbsp;&nbsp;&nbsp;</span>b) Tidak berfungsi</td>
            <td class="column15"></td>
            <td class="column25">buah</td>
        </tr>
        <tr>
            <td class="column5"></td>
            <td class="column55"><span>&nbsp;&nbsp;</span>2) Jumlah oksigen konsentrator</td>
            <td class="column40 columGrey" colspan="2"></td>
        </tr>
        <tr>
            <td class="column5"></td>
            <td class="column55"><span>&nbsp;&nbsp;&nbsp;&nbsp;</span>a) Berfungsi</td>
            <td class="column15"></td>
            <td class="column25">buah</td>
        </tr>
        <tr>
            <td class="column5"></td>
            <td class="column55"><span>&nbsp;&nbsp;&nbsp;&nbsp;</span>b) Tidak berfungsi</td>
            <td class="column15"></td>
            <td class="column25">buah</td>
        </tr>
        <tr>
            <td class="column5"></td>
            <td class="column55">i. Jumlah alat pemadam kebakaran (Apar)</td>
            <td class="column40 columGrey" colspan="2"></td>
        </tr>
        <tr>
            <td class="column5"></td>
            <td class="column55"><span>&nbsp;&nbsp;</span>a) Berfungsi</td>
            <td class="column15"></td>
            <td class="column25">buah</td>
        </tr>
        <tr>
            <td class="column5"></td>
            <td class="column55"><span>&nbsp;&nbsp;</span>b) Tidak berfungsi</td>
            <td class="column15"></td>
            <td class="column25">buah</td>
        </tr>
        <tr>
            <td class="column5"></td>
            <td class="column55">j. Sistem proteksi petir</td>
            <td class="column40" colspan="2"></td>
        </tr>
        <tr>
            <td class="column5"></td>
            <td class="column55">k. Jumlah AC</td>
            <td class="column40 columGrey" colspan="2"></td>
        </tr>
        <tr>
            <td class="column5"></td>
            <td class="column55"><span>&nbsp;&nbsp;</span>a) Berfungsi</td>
            <td class="column15"></td>
            <td class="column25">buah</td>
        </tr>
        <tr>
            <td class="column5"></td>
            <td class="column55"><span>&nbsp;&nbsp;</span>b) Tidak berfungsi</td>
            <td class="column15"></td>
            <td class="column25">buah</td>
        </tr>
        <tr>
            <td class="column5">E.</td>
            <td class="column55">Jaringan Puskesmas, Jejaring Puskesmas, Lintas Sektor dan Potensi Sumber Daya Puskesmas </td>
            <td class="column40 columGrey" colspan="2"></td>
        </tr>
        <tr>
            <td class="column5">1</td>
            <td class="column55">Jaringan Puskesmas </td>
            <td class="column40 columGrey" colspan="2"></td>
        </tr>
        <tr>
            <td class="column5"></td>
            <td class="column55"><span>&nbsp;&nbsp;</span>a. Jumlah Puskesmas Pembantu</td>
            <td class="column15"></td>
            <td class="column25">buah</td>
        </tr>
        <tr>
            <td class="column5"></td>
            <td class="column55"><span>&nbsp;&nbsp;</span>b. Jumlah Praktik Bidan Desa</td>
            <td class="column15"></td>
            <td class="column25">buah</td>
        </tr>
        <tr>
            <td class="column5"></td>
            <td class="column55"><span>&nbsp;&nbsp;</span>c. Puskesmas Keliling</td>
            <td class="column15"></td>
            <td class="column25">buah</td>
        </tr>
        <tr>
            <td class="column5">2</td>
            <td class="column55">Jejaring puskesmas di wilayah kerjanya *)</td>
            <td class="column40 columGrey" colspan="2"></td>
        </tr>
        <tr>
            <td class="column5"></td>
            <td class="column55"><span>&nbsp;&nbsp;</span>a. Jumlah klinik pratama</td>
            <td class="column15"></td>
            <td class="column25">buah</td>
        </tr>
        <tr>
            <td class="column5"></td>
            <td class="column55"><span>&nbsp;&nbsp;</span>b. Jumlah klinik utama</td>
            <td class="column15"></td>
            <td class="column25">buah</td>
        </tr>
        <tr>
            <td class="column5"></td>
            <td class="column55"><span>&nbsp;&nbsp;</span>c. Jumlah tempat praktik mandiri dokter</td>
            <td class="column15"></td>
            <td class="column25">buah</td>
        </tr>
        <tr>
            <td class="column5"></td>
            <td class="column55"><span>&nbsp;&nbsp;</span>d. Jumlah tempat praktik mandiri dokter gigi</td>
            <td class="column15"></td>
            <td class="column25">buah</td>
        </tr>
        <tr>
            <td class="column5"></td>
            <td class="column55"><span>&nbsp;&nbsp;</span>e. Jumlah tempat praktik mandiri bidan</td>
            <td class="column15"></td>
            <td class="column25">buah</td>
        </tr>
        <tr>
            <td class="column5"></td>
            <td class="column55"><span>&nbsp;&nbsp;</span>f. Jumlah tempat praktik mandiri perawat</td>
            <td class="column15"></td>
            <td class="column25">buah</td>
        </tr>
        <tr>
            <td class="column5"></td>
            <td class="column55"><span>&nbsp;&nbsp;</span>g. Jumlah rumah sakit kelas D Pratama</td>
            <td class="column15"></td>
            <td class="column25">buah</td>
        </tr>
        <tr>
            <td class="column5"></td>
            <td class="column55"><span>&nbsp;&nbsp;</span>h. Jumlah apotek</td>
            <td class="column15"></td>
            <td class="column25">buah</td>
        </tr>
        <tr>
            <td class="column5"></td>
            <td class="column55"><span>&nbsp;&nbsp;</span>i. Jumlah optik</td>
            <td class="column15"></td>
            <td class="column25">buah</td>
        </tr>
        <tr>
            <td class="column5"></td>
            <td class="column55"><span>&nbsp;&nbsp;</span>j. Jumlah laboratorium klinik</td>
            <td class="column15"></td>
            <td class="column25">buah</td>
        </tr>
        <tr>
            <td class="column5"></td>
            <td class="column55"><span>&nbsp;&nbsp;</span>k. Jumlah Fasilitas Kesehatan Tradisional/ Griya Sehat</td>
            <td class="column15"></td>
            <td class="column25">buah</td>
        </tr>
        <tr>
            <td class="column5"></td>
            <td class="column55"><span>&nbsp;&nbsp;</span>l. Ada program kerja sama antara puskesmas, UTD dan rumah sakit dalam pelayanan darah untuk menurunkan Angka Kematian Ibu (AKI) </td>
            <td class="column40" colspan="2"></td>
        </tr>
        <tr>
            <td class="column5">3</td>
            <td class="column55">Jumlah RUTAN dan LAPAS</td>
            <td class="column15"></td>
            <td class="column25">buah</td>
        </tr>
        <tr>
            <td class="column5">4</td>
            <td class="column55">Peran Serta Masyarakat</td>
            <td class="column40 columGrey" colspan="2"></td>
        </tr>
        <tr>
            <td class="column5"></td>
            <td class="column55">a. Jumlah Posyandu Aktif </td>
            <td class="column40 columGrey" colspan="2"></td>
        </tr>
        <tr>
            <td class="column5"></td>
            <td class="column55"><span>&nbsp;&nbsp;</span>1) Posyandu Ibu dan Anak </td>
            <td class="column40 columGrey" colspan="2"></td>
        </tr>
        <tr>
            <td class="column5"></td>
            <td class="column55"><span>&nbsp;&nbsp;&nbsp;&nbsp;</span>a)  Posyandu Pratama</td>
            <td class="column15"></td>
            <td class="column25">buah</td>
        </tr>
        <tr>
            <td class="column5"></td>
            <td class="column55"><span>&nbsp;&nbsp;&nbsp;&nbsp;</span>b)  Posyandu Madya</td>
            <td class="column15"></td>
            <td class="column25">buah</td>
        </tr>
        <tr>
            <td class="column5"></td>
            <td class="column55"><span>&nbsp;&nbsp;&nbsp;&nbsp;</span>c)  Posyandu Purnama</td>
            <td class="column15"></td>
            <td class="column25">buah</td>
        </tr>
        <tr>
            <td class="column5"></td>
            <td class="column55"><span>&nbsp;&nbsp;&nbsp;&nbsp;</span>d)  Posyandu Mandiri</td>
            <td class="column15"></td>
            <td class="column25">buah</td>
        </tr>
        <tr>
            <td class="column5"></td>
            <td class="column55"><span>&nbsp;&nbsp;</span>2) Posyandu Remaja </td>
            <td class="column40 columGrey" colspan="2"></td>
        </tr>
        <tr>
            <td class="column5"></td>
            <td class="column55"><span>&nbsp;&nbsp;&nbsp;&nbsp;</span>a)  Posyandu Remaja Pratama</td>
            <td class="column15"></td>
            <td class="column25">buah</td>
        </tr>
        <tr>
            <td class="column5"></td>
            <td class="column55"><span>&nbsp;&nbsp;&nbsp;&nbsp;</span>b)  Posyandu Remaja Madya</td>
            <td class="column15"></td>
            <td class="column25">buah</td>
        </tr>
        <tr>
            <td class="column5"></td>
            <td class="column55"><span>&nbsp;&nbsp;&nbsp;&nbsp;</span>c)  Posyandu Remaja Purnama</td>
            <td class="column15"></td>
            <td class="column25">buah</td>
        </tr>
        <tr>
            <td class="column5"></td>
            <td class="column55"><span>&nbsp;&nbsp;&nbsp;&nbsp;</span>d)  Posyandu Remaja Mandiri</td>
            <td class="column15"></td>
            <td class="column25">buah</td>
        </tr>
        <tr>
            <td class="column5"></td>
            <td class="column55"><span>&nbsp;&nbsp;</span>3)  Posyandu Lansia</td>
            <td class="column15"></td>
            <td class="column25">buah</td>
        </tr>
        <tr>
            <td class="column5"></td>
            <td class="column55">b. Jumlah Pos Kesehatan Desa (Poskesdes)</td>
            <td class="column15"></td>
            <td class="column25">buah</td>
        </tr>
        <tr>
            <td class="column5"></td>
            <td class="column55">c. Jumlah Pos Kesehatan Pesantren (Poskestren)</td>
            <td class="column15"></td>
            <td class="column25">buah</td>
        </tr>
        <tr>
            <td class="column5"></td>
            <td class="column55">d. Jumlah Posbindu PTM aktif</td>
            <td class="column15"></td>
            <td class="column25">buah</td>
        </tr>
        <tr>
            <td class="column5"></td>
            <td class="column55">d. Jumlah Posbindu PTM aktif</td>
            <td class="column15"></td>
            <td class="column25">buah</td>
        </tr>
        <tr>
            <td class="column5"></td>
            <td class="column55">g.  Jumlah Pos Malaria Desa (Posmaldes) aktif</td>
            <td class="column15"></td>
            <td class="column25">buah</td>
        </tr>
        <tr>
            <td class="column5"></td>
            <td class="column55">h. Jumlah Pos Upaya Kesehatan Kerja (Pos UKK)</td>
            <td class="column40" colspan="2"></td>
        </tr>
        <tr>
            <td class="column5"></td>
            <td class="column55"><span>&nbsp;&nbsp;</span>1) Pos UKK Pratama</td>
            <td class="column15"></td>
            <td class="column25">buah</td>
        </tr>
        <tr>
            <td class="column5"></td>
            <td class="column55"><span>&nbsp;&nbsp;</span>2) Pos UKK Madya</td>
            <td class="column15"></td>
            <td class="column25">buah</td>
        </tr>
        <tr>
            <td class="column5"></td>
            <td class="column55"><span>&nbsp;&nbsp;</span>3) Pos UKK Purnama</td>
            <td class="column15"></td>
            <td class="column25">buah</td>
        </tr>
        <tr>
            <td class="column5"></td>
            <td class="column55"><span>&nbsp;&nbsp;</span>4) Pos UKK Mandiri</td>
            <td class="column15"></td>
            <td class="column25">buah</td>
        </tr>
        <tr>
            <td class="column5"></td>
            <td class="column55">i. Jumlah Pos Obat Desa (POD)</td>
            <td class="column15"></td>
            <td class="column25">buah</td>
        </tr>
        <tr>
            <td class="column5"></td>
            <td class="column55">j. Jumlah POLINDES (Pondok Bersalin Desa)</td>
            <td class="column15"></td>
            <td class="column25">buah</td>
        </tr>
        <tr>
            <td class="column5"></td>
            <td class="column55">k. Jumlah desa dengan kegiatan dana sehat</td>
            <td class="column15"></td>
            <td class="column25">buah</td>
        </tr>
        <tr>
            <td class="column5"></td>
            <td class="column55">l. Jumlah peserta dana sehat </td>
            <td class="column15"></td>
            <td class="column25">buah</td>
        </tr>
        <tr>
            <td class="column5"></td>
            <td class="column55">m. Jumlah UKBM lainnya</td>
            <td class="column15"></td>
            <td class="column25">buah</td>
        </tr>
        <tr>
            <td class="column5"></td>
            <td class="column55">n. Jumlah kelompok kerja operasional UKBM </td>
            <td class="column15"></td>
            <td class="column25">buah</td>
        </tr>
        <tr>
            <td class="column5"></td>
            <td class="column55">n. Jumlah kelompok kerja operasional UKBM </td>
            <td class="column15"></td>
            <td class="column25">buah</td>
        </tr>
        <tr>
            <td class="column5"></td>
            <td class="column55">p. Jumlah kelompok atau Forum Peduli Kesehatan</td>
            <td class="column15"></td>
            <td class="column25">buah</td>
        </tr>
        <tr>
            <td class="column5"></td>
            <td class="column55">p. Jumlah kelompok atau Forum Peduli Kesehatan</td>
            <td class="column15"></td>
            <td class="column25">buah</td>
        </tr>
        <tr>
            <td class="column5"></td>
            <td class="column55">r. Jumlah kader kesehatan UKBM aktif </td>
            <td class="column40" colspan="2"></td>
        </tr>
        <tr>
            <td class="column5"></td>
            <td class="column55"><span>&nbsp;&nbsp;</span>1) Kader Posyandu </td>
            <td class="column15"></td>
            <td class="column25">orang</td>
        </tr>
        <tr>
            <td class="column5"></td>
            <td class="column55"><span>&nbsp;&nbsp;</span>2) Kader Poskesdes </td>
            <td class="column15"></td>
            <td class="column25">orang</td>
        </tr>
        <tr>
            <td class="column5"></td>
            <td class="column55"><span>&nbsp;&nbsp;</span>3) Kader Poskestren</td>
            <td class="column15"></td>
            <td class="column25">orang</td>
        </tr>
        <tr>
            <td class="column5"></td>
            <td class="column55"><span>&nbsp;&nbsp;</span>4) Petugas Pelaksana Posbindu PTM (kader)</td>
            <td class="column15"></td>
            <td class="column25">orang</td>
        </tr>
        <tr>
            <td class="column5"></td>
            <td class="column55"><span>&nbsp;&nbsp;</span>5) Kader Pos TB desa</td>
            <td class="column15"></td>
            <td class="column25">orang</td>
        </tr>
        <tr>
            <td class="column5"></td>
            <td class="column55"><span>&nbsp;&nbsp;</span>6) Kader Posmaldes</td>
            <td class="column15"></td>
            <td class="column25">orang</td>
        </tr>
        <tr>
            <td class="column5"></td>
            <td class="column55"><span>&nbsp;&nbsp;</span>7) Kader Pos UKK</td>
            <td class="column15"></td>
            <td class="column25">orang</td>
        </tr>
        <tr>
            <td class="column5"></td>
            <td class="column55"><span>&nbsp;&nbsp;</span>8) Kader desa siaga aktif </td>
            <td class="column15"></td>
            <td class="column25">orang</td>
        </tr>
        <tr>
            <td class="column5"></td>
            <td class="column55">s. Jumlah mitra</td>
            <td class="column40" colspan="2"></td>
        </tr>
        <tr>
            <td class="column5"></td>
            <td class="column55"><span>&nbsp;&nbsp;</span>1) Organisasi kemasyarakatan</td>
            <td class="column15"></td>
            <td class="column25">buah</td>
        </tr>
        <tr>
            <td class="column5"></td>
            <td class="column55"><span>&nbsp;&nbsp;</span>2) Dunia usaha</td>
            <td class="column15"></td>
            <td class="column25">buah</td>
        </tr>
        <tr>
            <td class="column5"></td>
            <td class="column55"><span>&nbsp;&nbsp;</span>3) INGO</td>
            <td class="column15"></td>
            <td class="column25">buah</td>
        </tr>
        <tr>
            <td class="column5"></td>
            <td class="column55"><span>&nbsp;&nbsp;</span>4) Mitra lainnya</td>
            <td class="column15"></td>
            <td class="column25">buah</td>
        </tr>
        <tr>
            <td class="column5"></td>
            <td class="column55">t. Jumlah kebijakan publik berwawasan kesehatan</td>
            <td class="column15"></td>
            <td class="column25">buah</td>
        </tr>
        <tr>
            <td class="column5">5</td>
            <td class="column55">Puskesmas dimanfaatkan sebagai wahana pendidikan tenaga kesehatan</td>
            <td class="column40" colspan="2"></td>
        </tr>
        <tr>
            <td class="column5">6</td>
            <td class="column55">Pelayanan kesehatan bergerak</td>
            <td class="column40" colspan="2"></td>
        </tr>
        <tr>
            <td class="column5">7</td>
            <td class="column55">Pendidikan Dasar *) </td>
            <td class="column40 columGrey" colspan="2"></td>
        </tr>
        <tr>
            <td class="column5"></td>
            <td class="column55"><span>&nbsp;&nbsp;</span>a. Jumlah SD/sederajat</td>
            <td class="column15"></td>
            <td class="column25">buah</td>
        </tr>
        <tr>
            <td class="column5"></td>
            <td class="column55"><span>&nbsp;&nbsp;</span>b. Jumlah SLTP/sederajat</td>
            <td class="column15"></td>
            <td class="column25">buah</td>
        </tr>
        <tr>
            <td class="column5"></td>
            <td class="column55"><span>&nbsp;&nbsp;</span>c. Jumlah SLTA/sederajat</td>
            <td class="column15"></td>
            <td class="column25">buah</td>
        </tr>
    </table>
</body>
</html>
