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
                <td class="column55">{{ $identitasPuskesmas->dataDasar->nama_puskesmas }}</td>
            </tr>
            <tr>
                <td class="column5">2</td>
                <td class="column40">Kode registrasi puskesmas</td>
                <td class="column55">{{ $identitasPuskesmas->dataDasar->kode_registrasi_puskesmas }}</td>
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
                <td class="column55">{{ $identitasPuskesmas->dataDasar->nama_puskesmas }}</td>
            </tr>
            <tr>
                <td class="column5">2</td>
                <td class="column40">Kode registrasi puskesmas</td>
                <td class="column55">{{ $identitasPuskesmas->dataDasar->kode_registrasi_puskesmas }}</td>
            </tr>
            <tr>
                <td class="column5">3</td>
                <td class="column40">Status akreditasi </td>
                <td class="column55">
                    @if (isset($identitasPuskesmas->wilayahKerja) && $identitasPuskesmas->dataDasar->status_akreditasi === "telah_terakreditasi")
                        Telah akreditasi
                    @elseif ($identitasPuskesmas->dataDasar->status_akreditasi === "sedang_proses_akreditasi")
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
                <td class="column55">{{ $identitasPuskesmas->dataDasar->jalan }}</td>
            </tr>
            <tr>
                <td class="column5"></td>
                <td class="column40">b.  Desa/kelurahan</td>
                <td class="column55">{{ $identitasPuskesmas->dataDasar->kelurahan }}</td>
            </tr>
            <tr>
                <td class="column5"></td>
                <td class="column40">c.  Kecamatan</td>
                <td class="column55">{{ $identitasPuskesmas->dataDasar->kecamatan }}</td>
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
                <td class="column55">{{ $identitasPuskesmas->dataDasar->kodePos }}</td>
            </tr>
            <tr>
                <td class="column5"></td>
                <td class="column40">g.  Telepon</td>
                <td class="column55">{{ $identitasPuskesmas->dataDasar->telepon }}</td>
            </tr>
            <tr>
                <td class="column5"></td>
                <td class="column40">h.  Fax</td>
                <td class="column55">{{ $identitasPuskesmas->dataDasar->fax }}</td>
            </tr>
            <tr>
                <td class="column5"></td>
                <td class="column40">i.  Email</td>
                <td class="column55">{{ $identitasPuskesmas->dataDasar->email }}</td>
            </tr>
            <tr>
                <td class="column5"></td>
                <td class="column40">j. Titik koordinat  (LU/LS/BT)</td>
                <td class="column55">{{ $identitasPuskesmas->dataDasar->koordinat_lu }},{{ $identitasPuskesmas->dataDasar->koordinat_ls }},{{ $identitasPuskesmas->dataDasar->koordinat_bt }}</td>
            </tr>
            <tr>
                <td class="column5">5</td>
                <td class="column40">Kategori puskesmas berdasarkan karakteristik wilayah</td>
                <td class="column55">
                    @if (isset($identitasPuskesmas->wilayahKerja) && $identitasPuskesmas->dataDasar->kategori_puskesmas === "perkotaan")
                        Perkotaan
                    @elseif ($identitasPuskesmas->dataDasar->kategori_puskesmas === "pedesaan")
                        Perdesaan
                    @elseif ($identitasPuskesmas->dataDasar->kategori_puskesmas === "terpencil")
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
                    @if (isset($identitasPuskesmas->wilayahKerja) && $identitasPuskesmas->dataDasar->kemampuan_penyelenggaraan_puskesmas === "rawat_inap")
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
                <td class="column15">{{ $identitasPuskesmas->wilayahKerja->luas_wilayah_kerja ?? 0 }}</td>
                <td class="column25">km<sup>2</sup></td>
            </tr>
            <tr>
                <td class="column5">2</td>
                <td class="column55">Jumlah penduduk (jiwa) </td>
                <td class="column15">{{ number_format($identitasPuskesmas->wilayahKerja->jumlah_penduduk ?? 0 , 0, ',', '.') }}</td>
                <td class="column25">jiwa</td>
            </tr>
            <tr>
                <td class="column5">3</td>
                <td class="column55">Jumlah keluarga</td>
                <td class="column15">{{ number_format($identitasPuskesmas->wilayahKerja->jumlah_keluarga ?? 0, 0, ',', '.') }}</td>
                <td class="column25">keluarga</td>
            </tr>
            <tr>
                <td class="column5">4</td>
                <td class="column55">Jumlah keluarga miskin</td>
                <td class="column15">{{ number_format($identitasPuskesmas->wilayahKerja->jumlah_keluarga_miskin ?? 0, 0, ',', '.') }}</td>
                <td class="column25">keluarga</td>
            </tr>
            <tr>
                <td class="column5">5</td>
                <td class="column55">Jumlah desa (seluruhnya) </td>
                <td class="column15">{{ number_format($identitasPuskesmas->wilayahKerja->jumlah_desa ?? 0, 0, ',', '.') }}</td>
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
                    @if (isset($identitasPuskesmas->wilayahKerja) && $identitasPuskesmas->wilayahKerja->perumnas === 1)
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
                    @if (isset($identitasPuskesmas->wilayahKerja) && $identitasPuskesmas->wilayahKerja->kawasan_transmigrasi === 1)
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
                    @if (isset($identitasPuskesmas->wilayahKerja) && $identitasPuskesmas->wilayahKerja->kawasan_perkebunan_inti_rakyat === 1)
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
                    @if (isset($identitasPuskesmas->wilayahKerja) && $identitasPuskesmas->wilayahKerja->kawasan_nelayan === 1)
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
                    @if (isset($identitasPuskesmas->wilayahKerja) && $identitasPuskesmas->wilayahKerja->kawasan_industri === 1)
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
                    @if (isset($identitasPuskesmas->wilayahKerja) && $identitasPuskesmas->wilayahKerja->pariwisata === 1)
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
                    @if (isset($identitasPuskesmas->wilayahKerja) && $identitasPuskesmas->wilayahKerja->kawasan_kepulauan === 1)
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
                    @if (isset($identitasPuskesmas->wilayahKerja) && $identitasPuskesmas->wilayahKerja->kawasan_perbatasan_negara === 1)
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
                <td class="column15">{{ number_format($identitasPuskesmas->wilayahKerja->desa_siaga_aktf_pertama ?? 0, 0, ',', '.') }}</td>
                <td class="column25">buah</td>
            </tr>
            <tr>
                <td class="column5"></td>
                <td class="column55">b. Desa/Kelurahan Siaga Aktif Madya</td>
                <td class="column15">{{ number_format($identitasPuskesmas->wilayahKerja->desa_siaga_aktf_madya ?? 0, 0, ',', '.') }}</td>
                <td class="column25">buah</td>
            </tr>
            <tr>
                <td class="column5"></td>
                <td class="column55">c. Desa/Kelurahan Siaga Aktif Purnama</td>
                <td class="column15">{{ number_format($identitasPuskesmas->wilayahKerja->desa_siaga_aktf_purnama ?? 0, 0, ',', '.') }}</td>
                <td class="column25">buah</td>
            </tr>
            <tr>
                <td class="column5"></td>
                <td class="column55">d. Desa/Kelurahan Siaga Aktif Mandiri</td>
                <td class="column15">{{ number_format($identitasPuskesmas->wilayahKerja->desa_siaga_aktf_mandiri ?? 0, 0, ',', '.') }}</td>
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
                    @if (isset($identitasPuskesmas->sumber_daya_puskesmas[0]['rencana_lima_tahunan']))
                        @if (isset($identitasPuskesmas->wilayahKerja) && $identitasPuskesmas->sumber_daya_puskesmas[0]['rencana_lima_tahunan'] === 1)
                            Ada
                        @else
                            Tidak ada
                        @endif
                    @else
                        Tidak ada
                    @endif
                </td>
            </tr>
            <tr>
                <td class="column5"></td>
                <td class="column55">b.   Rencana Usulan Kegiatan (RUK)</td>
                <td class="column40" colspan="2">
                    @if (isset($identitasPuskesmas->sumber_daya_puskesmas[0]['rencana_usulan_kegiatan']))
                        @if (isset($identitasPuskesmas->wilayahKerja) && $identitasPuskesmas->sumber_daya_puskesmas[0]['rencana_usulan_kegiatan'] === 1)
                            Ada
                        @else
                            Tidak ada
                        @endif
                    @else
                        Tidak ada
                    @endif
                </td>
            </tr>
            <tr>
                <td class="column5"></td>
                <td class="column55">c.   Rencana Pelaksanaan Kegiatan (RPK) Tahunan</td>
                <td class="column40" colspan="2">
                    @if (isset($identitasPuskesmas->sumber_daya_puskesmas[0]['rencana_pelaksanaan_kegiatan_tahunan']))
                        @if (isset($identitasPuskesmas->wilayahKerja) && $identitasPuskesmas->sumber_daya_puskesmas[0]['rencana_pelaksanaan_kegiatan_tahunan'] === 1)
                            Ada
                        @else
                            Tidak ada
                        @endif
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
                    @if (isset($identitasPuskesmas->sumber_daya_puskesmas[0]['rencana_pelaksanaan_kegiatan_bulanan']))
                        @if (isset($identitasPuskesmas->wilayahKerja) && $identitasPuskesmas->sumber_daya_puskesmas[0]['rencana_pelaksanaan_kegiatan_bulanan'] === 1)
                            Ada
                        @else
                            Tidak ada
                        @endif
                    @else
                        Tidak ada
                    @endif
                </td>
            </tr>
            <tr>
                <td class="column5"></td>
                <td class="column55">b. Lokakarya mini bulanan</td>
                <td class="column40" colspan="2">
                    @if (isset($identitasPuskesmas->sumber_daya_puskesmas[0]['lokakarya_mini_bulanan']))
                        @if (isset($identitasPuskesmas->wilayahKerja) && $identitasPuskesmas->sumber_daya_puskesmas[0]['lokakarya_mini_bulanan'] === 1)
                            Ada
                        @else
                            Tidak ada
                        @endif
                    @else
                        Tidak ada
                    @endif
                </td>
            </tr>
            <tr>
                <td class="column5"></td>
                <td class="column55">c. Lokakarya mini triwulan</td>
                <td class="column40" colspan="2">
                    @if (isset($identitasPuskesmas->sumber_daya_puskesmas[0]['lokakarya_mini_triwulan']))
                        @if (isset($identitasPuskesmas->wilayahKerja) && $identitasPuskesmas->sumber_daya_puskesmas[0]['lokakarya_mini_triwulan'] === 1)
                            Ada
                        @else
                            Tidak ada
                        @endif
                    @else
                        Tidak ada
                    @endif
                </td>
            </tr>
            <tr>
                <td class="column5">3</td>
                <td class="column55">Dokumen Penilaian Kinerja Puskesmas (PKP)</td>
                <td class="column40" colspan="2">
                    @if (isset($identitasPuskesmas->sumber_daya_puskesmas[0]['dokumen_pkp']))
                        @if (isset($identitasPuskesmas->wilayahKerja) && $identitasPuskesmas->sumber_daya_puskesmas[0]['dokumen_pkp'] === 1)
                            Ada
                        @else
                            Tidak ada
                        @endif
                    @else
                        Tidak ada
                    @endif
                </td>
            </tr>
            @if (isset($identitasPuskesmas->sumber_daya_puskesmas[0]['dokumen_pkp']) && $identitasPuskesmas->sumber_daya_puskesmas[0]['dokumen_pkp'] === 1)
                ada
                <tr>
                    <td class="column5"></td>
                    <td class="column55">a. Hasil pelayanan kesehatan</td>
                    <td class="column40" colspan="2">
                        @if (isset($identitasPuskesmas->sumber_daya_puskesmas[0]['hasil_pelayanan_kesehatan']))
                            @if (isset($identitasPuskesmas->wilayahKerja) && $identitasPuskesmas->sumber_daya_puskesmas[0]['hasil_pelayanan_kesehatan'] === 'baik')
                                Baik
                            @elseif ($identitasPuskesmas->sumber_daya_puskesmas[0]['hasil_pelayanan_kesehatan'] === 'cukup')
                                Cukup
                            @else
                                Kurang
                            @endif
                        @else
                            Kurang
                        @endif
                    </td>
                </tr>
                <tr>
                    <td class="column5"></td>
                    <td class="column55">b. Hasil manajemen</td>
                    <td class="column40" colspan="2">
                        @if (isset($identitasPuskesmas->sumber_daya_puskesmas[0]['hasil_manajemen']))
                            @if (isset($identitasPuskesmas->wilayahKerja) && $identitasPuskesmas->sumber_daya_puskesmas[0]['hasil_manajemen'] === 'baik')
                                Baik
                            @elseif ($identitasPuskesmas->sumber_daya_puskesmas[0]['hasil_manajemen'] === 'cukup')
                                Cukup
                            @else
                                Kurang
                            @endif
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
                    @if (isset($identitasPuskesmas->sumber_daya_puskesmas[0]['feedback_dinkes_yang_diterima']))
                        @if (isset($identitasPuskesmas->wilayahKerja) && $identitasPuskesmas->sumber_daya_puskesmas[0]['feedback_dinkes_yang_diterima'] === 1)
                            Ada
                        @else
                            Tidak ada
                        @endif
                    @else
                        Tidak ada
                    @endif
                </td>
            </tr>
            <tr>
                <td class="column5">5</td>
                <td class="column55">Dokumen Penilaian Kinerja Puskesmas (PKP) yang ditetapkan oleh Dinas Kesehatan kabupaten/kota</td>
                <td class="column40" colspan="2">
                    @if (isset($identitasPuskesmas->sumber_daya_puskesmas[0]['dokumen_pkp_dinkes_kota']))
                        @if (isset($identitasPuskesmas->wilayahKerja) && $identitasPuskesmas->sumber_daya_puskesmas[0]['dokumen_pkp_dinkes_kota'] === 1)
                            Ada
                        @else
                            Tidak ada
                        @endif
                    @else
                        Tidak ada
                    @endif
                </td>
            </tr>
            @if (isset($identitasPuskesmas->sumber_daya_puskesmas[0]['dokumen_pkp_dinkes_kota']) && $identitasPuskesmas->sumber_daya_puskesmas[0]['dokumen_pkp_dinkes_kota'] === 1)
                <tr>
                    <td class="column5"></td>
                    <td class="column55">a. Hasil pelayanan kesehatan</td>
                    <td class="column40" colspan="2">
                        @if (isset($identitasPuskesmas->sumber_daya_puskesmas[0]['hasil_pelayanan_kesehatan_dinkes_kota']))
                            @if (isset($identitasPuskesmas->wilayahKerja) && $identitasPuskesmas->sumber_daya_puskesmas[0]['hasil_pelayanan_kesehatan_dinkes_kota'] === 'baik')
                                Baik
                            @elseif ($identitasPuskesmas->sumber_daya_puskesmas[0]['hasil_pelayanan_kesehatan_dinkes_kota'] === 'cukup')
                                Cukup
                            @else
                                Kurang
                            @endif
                        @else
                            Kurang
                        @endif
                    </td>
                </tr>
                <tr>
                    <td class="column5"></td>
                    <td class="column55">b. Hasil manajemen</td>
                    <td class="column40" colspan="2">
                        @if (isset($identitasPuskesmas->sumber_daya_puskesmas[0]['hasil_manajemen_dinkes_kota']))
                            @if (isset($identitasPuskesmas->wilayahKerja) && $identitasPuskesmas->sumber_daya_puskesmas[0]['hasil_manajemen_dinkes_kota'] === 'baik')
                                Baik
                            @elseif ($identitasPuskesmas->sumber_daya_puskesmas[0]['hasil_manajemen_dinkes_kota'] === 'cukup')
                                Cukup
                            @else
                                Kurang
                            @endif
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
                    @if (isset($identitasPuskesmas->sumber_daya_puskesmas[0]['pelayanan_promosi_kesehatan']))
                        @if (isset($identitasPuskesmas->wilayahKerja) && $identitasPuskesmas->sumber_daya_puskesmas[0]['pelayanan_promosi_kesehatan'] === 1)
                            Ada
                        @else
                            Tidak ada
                        @endif
                    @else
                        Tidak ada
                    @endif
                </td>
            </tr>
            <tr>
                <td class="column5"></td>
                <td class="column55">b. Pelayanan kesehatan lingkungan</td>
                <td class="column40" colspan="2">
                    @if (isset($identitasPuskesmas->sumber_daya_puskesmas[0]['pelayanan_kesehatan_lingkungan']))
                        @if (isset($identitasPuskesmas->wilayahKerja) && $identitasPuskesmas->sumber_daya_puskesmas[0]['pelayanan_kesehatan_lingkungan'] === 1)
                            Ada
                        @else
                            Tidak ada
                        @endif
                    @else
                        Tidak ada
                    @endif
                </td>
            </tr>
            <tr>
                <td class="column5"></td>
                <td class="column55">c. Pelayanan kesehatan ibu, anak dan Keluarga Berencana, termasuk pelayanan usia sekolah dan remaja</td>
                <td class="column40" colspan="2">
                    @if (isset($identitasPuskesmas->sumber_daya_puskesmas[0]['pelayanan_kia']))
                        @if (isset($identitasPuskesmas->wilayahKerja) && $identitasPuskesmas->sumber_daya_puskesmas[0]['pelayanan_kia'] === 1)
                            Ada
                        @else
                            Tidak ada
                        @endif
                    @else
                        Tidak ada
                    @endif
                </td>
            </tr>
            <tr>
                <td class="column5"></td>
                <td class="column55">d. Pelayanan gizi</td>
                <td class="column40" colspan="2">
                    @if (isset($identitasPuskesmas->sumber_daya_puskesmas[0]['pelayanan_gizi']))
                        @if (isset($identitasPuskesmas->wilayahKerja) && $identitasPuskesmas->sumber_daya_puskesmas[0]['pelayanan_gizi'] === 1)
                            Ada
                        @else
                            Tidak ada
                        @endif
                    @else
                        Tidak ada
                    @endif
                </td>
            </tr>
            <tr>
                <td class="column5"></td>
                <td class="column55">e. Pelayanan pencegahan dan pengendalian penyakit</td>
                <td class="column40" colspan="2">
                    @if (isset($identitasPuskesmas->sumber_daya_puskesmas[0]['pelayanan_pencegahan_pengendalian_penyakit']))
                        @if (isset($identitasPuskesmas->wilayahKerja) && $identitasPuskesmas->sumber_daya_puskesmas[0]['pelayanan_pencegahan_pengendalian_penyakit'] === 1)
                            Ada
                        @else
                            Tidak ada
                        @endif
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
                    @if (isset($identitasPuskesmas->sumber_daya_puskesmas[0]['pelayanan_kesehatan_gigi_masyarakat']))
                        @if (isset($identitasPuskesmas->wilayahKerja) && $identitasPuskesmas->sumber_daya_puskesmas[0]['pelayanan_kesehatan_gigi_masyarakat'] === 1)
                            Ada
                        @else
                            Tidak ada
                        @endif
                    @else
                        Tidak ada
                    @endif
                </td>
            </tr>
            <tr>
                <td class="column5"></td>
                <td class="column55">b. Pelayanan kesehatan tradisional </td>
                <td class="column40" colspan="2">
                    @if (isset($identitasPuskesmas->sumber_daya_puskesmas[0]['pelayanan_kesehatan_tradisional']))
                        @if (isset($identitasPuskesmas->wilayahKerja) && $identitasPuskesmas->sumber_daya_puskesmas[0]['pelayanan_kesehatan_tradisional'] === 1)
                            Ada
                        @else
                            Tidak ada
                        @endif
                    @else
                        Tidak ada
                    @endif
                </td>
            </tr>
            <tr>
                <td class="column5"></td>
                <td class="column55">c. Pelayanan kesehatan olah raga</td>
                <td class="column40" colspan="2">
                    @if (isset($identitasPuskesmas->sumber_daya_puskesmas[0]['pelayanan_kesehatan_olahraga']))
                        @if (isset($identitasPuskesmas->wilayahKerja) && $identitasPuskesmas->sumber_daya_puskesmas[0]['pelayanan_kesehatan_olahraga'] === 1)
                            Ada
                        @else
                            Tidak ada
                        @endif
                    @else
                        Tidak ada
                    @endif
                </td>
            </tr>
            <tr>
                <td class="column5"></td>
                <td class="column55">d. Pelayanan kesehatan indera</td>
                <td class="column40" colspan="2">
                    @if (isset($identitasPuskesmas->sumber_daya_puskesmas[0]['pelayanan_kesehatan_indera']))
                        @if (isset($identitasPuskesmas->wilayahKerja) && $identitasPuskesmas->sumber_daya_puskesmas[0]['pelayanan_kesehatan_indera'] === 1)
                            Ada
                        @else
                            Tidak ada
                        @endif
                    @else
                        Tidak ada
                    @endif
                </td>
            </tr>
            <tr>
                <td class="column5"></td>
                <td class="column55">e. Pelayanan kesehatan kerja</td>
                <td class="column40" colspan="2">
                    @if (isset($identitasPuskesmas->sumber_daya_puskesmas[0]['pelayanan_kesehatan_kerja']))
                        @if (isset($identitasPuskesmas->wilayahKerja) && $identitasPuskesmas->sumber_daya_puskesmas[0]['pelayanan_kesehatan_kerja'] === 1)
                            Ada
                        @else
                            Tidak ada
                        @endif
                    @else
                        Tidak ada
                    @endif
                </td>
            </tr>
            <tr>
                <td class="column5"></td>
                <td class="column55">f. Pelayanan kesehatan haji</td>
                <td class="column40" colspan="2">
                    @if (isset($identitasPuskesmas->sumber_daya_puskesmas[0]['pelayanan_kesehatan_haji']))
                        @if (isset($identitasPuskesmas->wilayahKerja) && $identitasPuskesmas->sumber_daya_puskesmas[0]['pelayanan_kesehatan_haji'] === 1)
                            Ada
                        @else
                            Tidak ada
                        @endif
                    @else
                        Tidak ada
                    @endif
                </td>
            </tr>
            <tr>
                <td class="column5"></td>
                <td class="column55">g. ... lainnya</td>
                <td class="column40" colspan="2">
                    @if (isset($identitasPuskesmas->sumber_daya_puskesmas[0]['pelayanan_kesehatan_lainnya']))
                        @if (isset($identitasPuskesmas->wilayahKerja) && $identitasPuskesmas->sumber_daya_puskesmas[0]['pelayanan_kesehatan_lainnya'] === 1)
                            Ada
                        @else
                            Tidak ada
                        @endif
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
                    @if (isset($identitasPuskesmas->sumber_daya_puskesmas[0]['pelayanan_pemeriksaan_umum']))
                        @if (isset($identitasPuskesmas->wilayahKerja) && $identitasPuskesmas->sumber_daya_puskesmas[0]['pelayanan_pemeriksaan_umum'] === 1)
                            Ada
                        @else
                            Tidak ada
                        @endif
                    @else
                        Tidak ada
                    @endif
                </td>
            </tr>
            <tr>
                <td class="column5"></td>
                <td class="column55"><span>&nbsp;&nbsp;</span>2) Pelayanan kesehatan gigi dan mulut</td>
                <td class="column40" colspan="2">
                    @if (isset($identitasPuskesmas->sumber_daya_puskesmas[0]['pelayanan_kesehatan_gigi_mulut']))
                        @if (isset($identitasPuskesmas->wilayahKerja) && $identitasPuskesmas->sumber_daya_puskesmas[0]['pelayanan_kesehatan_gigi_mulut'] === 1)
                            Ada
                        @else
                            Tidak ada
                        @endif
                    @else
                        Tidak ada
                    @endif
                </td>
            </tr>
            <tr>
                <td class="column5"></td>
                <td class="column55">b. Pelayanan gawat darurat</td>
                <td class="column40" colspan="2">
                    @if (isset($identitasPuskesmas->sumber_daya_puskesmas[0]['pelayanan_gawat_darurat']))
                        @if (isset($identitasPuskesmas->wilayahKerja) && $identitasPuskesmas->sumber_daya_puskesmas[0]['pelayanan_gawat_darurat'] === 1)
                            Ada
                        @else
                            Tidak ada
                        @endif
                    @else
                        Tidak ada
                    @endif
                </td>
            </tr>
            <tr>
                <td class="column5"></td>
                <td class="column55">c. Pelayanan rawat inap</td>
                <td class="column40" colspan="2">
                    @if (isset($identitasPuskesmas->sumber_daya_puskesmas[0]['pelayanan_rawat_inap']))
                        @if (isset($identitasPuskesmas->wilayahKerja) && $identitasPuskesmas->sumber_daya_puskesmas[0]['pelayanan_rawat_inap'] === 1)
                            Ada
                        @else
                            Tidak ada
                        @endif
                    @else
                        Tidak ada
                    @endif
                </td>
            </tr>
            <tr>
                <td class="column5"></td>
                <td class="column55">d. Pelayanan satu hari (one day care)</td>
                <td class="column40" colspan="2">
                    @if (isset($identitasPuskesmas->sumber_daya_puskesmas[0]['pelayanan_satu_hari']))
                        @if (isset($identitasPuskesmas->wilayahKerja) && $identitasPuskesmas->sumber_daya_puskesmas[0]['pelayanan_satu_hari'] === 1)
                            Ada
                        @else
                            Tidak ada
                        @endif
                    @else
                        Tidak ada
                    @endif
                </td>
            </tr>
            <tr>
                <td class="column5"></td>
                <td class="column55">e. Perawatan di rumah (home care) </td>
                <td class="column40" colspan="2">
                    @if (isset($identitasPuskesmas->sumber_daya_puskesmas[0]['pelayanan_dirumah']))
                        @if (isset($identitasPuskesmas->wilayahKerja) && $identitasPuskesmas->sumber_daya_puskesmas[0]['pelayanan_dirumah'] === 1)
                            Ada
                        @else
                            Tidak ada
                        @endif
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
                    @if (isset($identitasPuskesmas->sumber_daya_puskesmas[0]['pelayanan_kefamasian']))
                        @if (isset($identitasPuskesmas->wilayahKerja) && $identitasPuskesmas->sumber_daya_puskesmas[0]['pelayanan_kefamasian'] === 1)
                            Ada
                        @else
                            Tidak ada
                        @endif
                    @else
                        Tidak ada
                    @endif
                </td>
            </tr>
            <tr>
                <td class="column5"></td>
                <td class="column55">b. Pelayanan keperawatan kesehatan masyarakat</td>
                <td class="column40" colspan="2">
                    @if (isset($identitasPuskesmas->sumber_daya_puskesmas[0]['pelayanan_keperawatan_kesehatan_masyarakat']))
                        @if (isset($identitasPuskesmas->wilayahKerja) && $identitasPuskesmas->sumber_daya_puskesmas[0]['pelayanan_keperawatan_kesehatan_masyarakat'] === 1)
                            Ada
                        @else
                            Tidak ada
                        @endif
                    @else
                        Tidak ada
                    @endif
                </td>
            </tr>
            <tr>
                <td class="column5"></td>
                <td class="column55">c. Pelayanan laboratorium</td>
                <td class="column40" colspan="2">
                    @if (isset($identitasPuskesmas->sumber_daya_puskesmas[0]['pelayanan_laboratorium']))
                        @if (isset($identitasPuskesmas->wilayahKerja) && $identitasPuskesmas->sumber_daya_puskesmas[0]['pelayanan_laboratorium'] === 1)
                            Ada
                        @else
                            Tidak ada
                        @endif
                    @else
                        Tidak ada
                    @endif
                </td>
            </tr>
            <tr>
                <td class="column5"></td>
                <td class="column55">d.   Kunjungan keluarga</td>
                <td class="column40" colspan="2">
                    @if (isset($identitasPuskesmas->sumber_daya_puskesmas[0]['kunjungan_keluarga']))
                        @if (isset($identitasPuskesmas->wilayahKerja) && $identitasPuskesmas->sumber_daya_puskesmas[0]['kunjungan_keluarga'] === 1)
                            Ada
                        @else
                            Tidak ada
                        @endif
                    @else
                        Tidak ada
                    @endif
                </td>
            </tr>
            <tr>
                <td class="column5"></td>
                <td class="column55"><span>&nbsp;&nbsp;</span>1) Jumlah keluarga yang telah dilakukan PIS PK </td>
                <td class="column15">{{ number_format($identitasPuskesmas->sumber_daya_puskesmas[0]['jumlah_keluarga_yang_dilakukan_pis_pk'] ?? 0, 0, ',', '.') }}</td>
                <td class="column25">keluarga</td>
            </tr>
            <tr>
                <td class="column5"></td>
                <td class="column55"><span>&nbsp;&nbsp;</span>2) Jumlah keluarga dengan IKS keluarga  kategori  keluarga sehat</td>
                <td class="column15">{{ number_format($identitasPuskesmas->sumber_daya_puskesmas[0]['jumlah_keluarga_iks_kategori_sehat'] ?? 0, 0, ',', '.') }}</td>
                <td class="column25">keluarga</td>
            </tr>
            <tr>
                <td class="column5"></td>
                <td class="column55"><span>&nbsp;&nbsp;</span>3) Jumlah keluarga dengan IKS keluarga kategori keluarga pra sehat</td>
                <td class="column15">{{ number_format($identitasPuskesmas->sumber_daya_puskesmas[0]['jumlah_keluarga_iks_kategori_prasehat'] ?? 0, 0, ',', '.') }}</td>
                <td class="column25">keluarga</td>
            </tr>
            <tr>
                <td class="column5"></td>
                <td class="column55"><span>&nbsp;&nbsp;</span>4) Jumlah keluarga dengan IKS keluarga kategori keluarga tidak sehat</td>
                <td class="column15">{{ number_format($identitasPuskesmas->sumber_daya_puskesmas[0]['jumlah_keluarga_iks_kategori_tidaksehat'] ?? 0, 0, ',', '.') }}</td>
                <td class="column25">keluarga</td>
            </tr>
            <tr>
                <td class="column5"></td>
                <td class="column55"><span>&nbsp;&nbsp;</span>5) Jumlah desa/ kelurahan yang telah dilakukan PIS-PK</td>
                <td class="column15">{{ number_format($identitasPuskesmas->sumber_daya_puskesmas[0]['jumlah_desa_yang_dilakukan_pis_pk'] ?? 0, 0, ',', '.') }}</td>
                <td class="column25">desa/ kelurahan</td>
            </tr>
            <tr>
                <td class="column5"></td>
                <td class="column55"><span>&nbsp;&nbsp;</span>6) Jumlah desa/ kelurahan dengan kategori desa/kelurahan sehat</td>
                <td class="column15">{{ number_format($identitasPuskesmas->sumber_daya_puskesmas[0]['jumlah_desa_kategori_sehat'] ?? 0, 0, ',', '.') }}</td>
                <td class="column25">desa/ kelurahan</td>
            </tr>
            <tr>
                <td class="column5"></td>
                <td class="column55"><span>&nbsp;&nbsp;</span>7) Jumlah desa/ kelurahan dengan kategori desa/kelurahan pra sehat</td>
                <td class="column15">{{ number_format($identitasPuskesmas->sumber_daya_puskesmas[0]['jumlah_desa_kategori_prasehat'] ?? 0, 0, ',', '.') }}</td>
                <td class="column25">desa/ kelurahan</td>
            </tr>
            <tr>
                <td class="column5"></td>
                <td class="column55"><span>&nbsp;&nbsp;</span>8) Jumlah desa/ kelurahan dengan kategori desa/kelurahan tidak sehat</td>
                <td class="column15">{{ number_format($identitasPuskesmas->sumber_daya_puskesmas[0]['jumlah_desa_kategori_tidaksehat'] ?? 0, 0, ',', '.') }}</td>
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
                    @if (isset($identitasPuskesmas->sumber_daya_puskesmas[0]['status_puskesma_blud']))
                        @if (isset($identitasPuskesmas->wilayahKerja) && $identitasPuskesmas->sumber_daya_puskesmas[0]['status_puskesma_blud'] === 1)
                            BLUD
                        @else
                            Bukan BLUD
                        @endif
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
                    @if (isset($identitasPuskesmas->sumber_daya_puskesmas[0]['puskesmas_kerjasama_bpjs']))
                        @if (isset($identitasPuskesmas->wilayahKerja) && $identitasPuskesmas->sumber_daya_puskesmas[0]['puskesmas_kerjasama_bpjs'] === 1)
                            Ya
                        @else
                            Tidak
                        @endif
                    @else
                        Tidak
                    @endif
                </td>
            </tr>
            <tr>
                <td class="column5"></td>
                <td class="column55"><span>&nbsp;&nbsp;</span>2) Besar kapitasi utk puskesmas (Rp/jiwa)</td>
                <td class="column15">{{ number_format($identitasPuskesmas->sumber_daya_puskesmas[0]['besar_kapitasi_untuk_puskesmas'] ?? 0, 0, ',', '.') }}</td>
                <td class="column25">Rp/jiwa</td>
            </tr>
            <tr>
                <td class="column5"></td>
                <td class="column55"><span>&nbsp;&nbsp;</span>3) Jumlah peserta JKN terdaftar</td>
                <td class="column15">{{ number_format($identitasPuskesmas->sumber_daya_puskesmas[0]['jumlah_peserta_jkn_terdaftar'] ?? 0, 0, ',', '.') }}</td>
                <td class="column25">orang</td>
            </tr>
            <tr>
                <td class="column5"></td>
                <td class="column55"><span>&nbsp;&nbsp;</span>4) Jumlah dana kapitasi yang diterima selama 1 tahun </td>
                <td class="column15">{{ number_format($identitasPuskesmas->sumber_daya_puskesmas[0]['jumlah_dana_kapitasi_selama_1_tahun'] ?? 0, 0, ',', '.') }}</td>
                <td class="column25">rupiah</td>
            </tr>
            <tr>
                <td class="column5"></td>
                <td class="column55"><span>&nbsp;&nbsp;</span>5) Persentase pengalokasian dana kapitasi untuk jasa pelayanan kesehatan</td>
                <td class="column15">{{ number_format($identitasPuskesmas->sumber_daya_puskesmas[0]['persentase_pengalokasian_dana_kapitasi'] ?? 0, 0, ',', '.') }}</td>
                <td class="column25">%</td>
            </tr>
            <tr>
                <td class="column5"></td>
                <td class="column55"><span>&nbsp;&nbsp;</span>6) Komponen kegiatan yang dibiayai dengan dana kapitasi untuk </td>
                <td class="column40" colspan="2">
                    <ol>
                        @php
                            $komponen = isset($identitasPuskesmas->sumber_daya_puskesmas[0]['komponen_kegiatan_yang_dibiayai_dana_kapitasi']) && 
                                is_array($identitasPuskesmas->sumber_daya_puskesmas[0]['komponen_kegiatan_yang_dibiayai_dana_kapitasi']) 
                                ? $identitasPuskesmas->sumber_daya_puskesmas[0]['komponen_kegiatan_yang_dibiayai_dana_kapitasi'] 
                                : [];
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
                <td class="column15">{{ number_format($identitasPuskesmas->sumber_daya_puskesmas[0]['klinik_pratama'] ?? 0, 0, ',', '.') }}</td>
                <td class="column25">buah</td>
            </tr>
            <tr>
                <td class="column5"></td>
                <td class="column55"><span>&nbsp;&nbsp;</span>2) Tempat praktik mandiri dokter </td>
                <td class="column15">{{ number_format($identitasPuskesmas->sumber_daya_puskesmas[0]['tempat_praktik_mandiri_dokter'] ?? 0, 0, ',', '.') }}</td>
                <td class="column25">buah</td>
            </tr>
            <tr>
                <td class="column5"></td>
                <td class="column55"><span>&nbsp;&nbsp;</span>3) Tempat praktik mandiri dokter gigi</td>
                <td class="column15">{{ number_format($identitasPuskesmas->sumber_daya_puskesmas[0]['tempat_praktik_mandiri_dokter_gigi'] ?? 0, 0, ',', '.') }}</td>
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
                <td class="column15">{{ number_format($identitasPuskesmas->sumber_daya_puskesmas[0]['peserta_jkn'] ?? 0, 0, ',', '.') }}</td>
                <td class="column25">orang</td>
            </tr>
            <tr>
                <td class="column5"></td>
                <td class="column55"><span>&nbsp;&nbsp;&nbsp;&nbsp;</span>a) Penerima Bantuan Iuran (PBI)</td>
                <td class="column15">{{ number_format($identitasPuskesmas->sumber_daya_puskesmas[0]['penerima_bantuan_iuran'] ?? 0, 0, ',', '.') }}</td>
                <td class="column25">orang</td>
            </tr>
            <tr>
                <td class="column5"></td>
                <td class="column55"><span>&nbsp;&nbsp;&nbsp;&nbsp;</span>b) Non Penerima Bantuan Iuran</td>
                <td class="column15">{{ number_format($identitasPuskesmas->sumber_daya_puskesmas[0]['non_penerima_bantuan_iuran'] ?? 0, 0, ',', '.') }}</td>
                <td class="column25">orang</td>
            </tr>
            <tr>
                <td class="column5"></td>
                <td class="column55"><span>&nbsp;&nbsp;</span>2) Peserta asuransi komersil</td>
                <td class="column15">{{ number_format($identitasPuskesmas->sumber_daya_puskesmas[0]['peserta_asuransi_komersil'] ?? 0, 0, ',', '.') }}</td>
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
                <td class="column40" colspan="2">{{ number_format($identitasPuskesmas->sumber_daya_puskesmas[0]['tahun_dibangun'] ?? 0, 0, ',', '.') }}</td>
            </tr>
            <tr>
                <td class="column5"></td>
                <td class="column55">b. Luas tanah puskesmas (m<sup>2</sup>)</td>
                <td class="column15">{{ number_format($identitasPuskesmas->sumber_daya_puskesmas[0]['luas_tanah_puskesmas'] ?? 0, 0, ',', '.') }}</td>
                <td class="column25">m<sup>2</sup></td>
            </tr>
            <tr>
                <td class="column5"></td>
                <td class="column55">c. Sertifikat tanah </td>
                <td class="column40" colspan="2">
                    @if (isset($identitasPuskesmas->sumber_daya_puskesmas[0]['sertifikat_tanah']))
                        @if (isset($identitasPuskesmas->wilayahKerja) && $identitasPuskesmas->sumber_daya_puskesmas[0]['sertifikat_tanah'] === 'shm')
                            SHM
                        @elseif ($identitasPuskesmas->sumber_daya_puskesmas[0]['sertifikat_tanah'] === 'shgu_shgb')
                            SHGU/SHGB 
                        @elseif ($identitasPuskesmas->sumber_daya_puskesmas[0]['sertifikat_tanah'] === 'girik_dan_petik')
                            Girik dan Petok 
                        @else
                            Acte van Eigendom
                        @endif
                    @else
                        Acte van Eigendom   
                    @endif
                </td>
            </tr>
            <tr>
                <td class="column5"></td>
                <td class="column55">d. Kepemilikan tanah</td>
                <td class="column40" colspan="2">
                    @if (isset($identitasPuskesmas->sumber_daya_puskesmas[0]['kepemilikan_tanah']))
                        @if (isset($identitasPuskesmas->wilayahKerja) && $identitasPuskesmas->sumber_daya_puskesmas[0]['kepemilikan_tanah'] === 'pemerintah')
                            Pemerintah
                        @elseif ($identitasPuskesmas->sumber_daya_puskesmas[0]['kepemilikan_tanah'] === 'adat')
                            Adat
                        @elseif ($identitasPuskesmas->sumber_daya_puskesmas[0]['kepemilikan_tanah'] === 'warga')
                            Warga 
                        @else
                            Sewa
                        @endif
                    @else
                        Sewa
                    @endif
                </td>
            </tr>
            <tr>
                <td class="column5"></td>
                <td class="column55">e. Luas lantai dasar bangunan (m<sup>2</sup>)</td>
                <td class="column15">{{ number_format($identitasPuskesmas->sumber_daya_puskesmas[0]['luas_lantai_dasar_bangunan'] ?? 0, 0, ',', '.') }}</td>
                <td class="column25">m<sup>2</sup></td>
            </tr>
            <tr>
                <td class="column5"></td>
                <td class="column55">f. Luas total lantai bangunan (m<sup>2</sup>)</td>
                <td class="column15">{{ number_format($identitasPuskesmas->sumber_daya_puskesmas[0]['luas_total_lantai_bangunan'] ?? 0, 0, ',', '.') }}</td>
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
                <td class="column15">{{ number_format($identitasPuskesmas->sumber_daya_puskesmas[0]['jumlah_tempat_tidur_perawatan_umum'] ?? 0, 0, ',', '.') }}</td>
                <td class="column25">unit</td>
            </tr>
            <tr>
                <td class="column5"></td>
                <td class="column55"><span>&nbsp;&nbsp;</span>2) Jumlah tempat tidur perawatan persalinan</td>
                <td class="column15">{{ number_format($identitasPuskesmas->sumber_daya_puskesmas[0]['jumlah_tempat_tidur_perawatan_bersalin'] ?? 0, 0, ',', '.') }}</td>
                <td class="column25">unit</td>
            </tr>
            <tr>
                <td class="column5"></td>
                <td class="column55">h. Lokasi gedung puskesmas     (bisa lebih dari satu jawaban) </td>
                <td class="column40" colspan="2">
                    <ol>
                        @php
                            $komponen = isset($identitasPuskesmas->sumber_daya_puskesmas[0]['lokasi_gedung_puskesmas']) && 
                                is_array($identitasPuskesmas->sumber_daya_puskesmas[0]['lokasi_gedung_puskesmas']) 
                                ? $identitasPuskesmas->sumber_daya_puskesmas[0]['lokasi_gedung_puskesmas'] 
                                : [];
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
                <td class="column40" colspan="2">{{ $identitasPuskesmas->sumber_daya_puskesmas[0]['tanggal_izin_puskesmas'] ?? "" }}</td>
            </tr>
            <tr>
                <td class="column5"></td>
                <td class="column55"><span>&nbsp;&nbsp;</span>2)    Nomor SK</td>
                <td class="column40" colspan="2">{{ $identitasPuskesmas->sumber_daya_puskesmas[0]['no_sk_izin_puskesmas'] ?? "" }}</td>
            </tr>
            <tr>
                <td class="column5"></td>
                <td class="column55"><span>&nbsp;&nbsp;</span>3)    Oleh</td>
                <td class="column40" colspan="2">{{ $identitasPuskesmas->sumber_daya_puskesmas[0]['penerbit_izin_puskesmas'] ?? "" }}</td>
            </tr>
            <tr>
                <td class="column5"></td>
                <td class="column55"><span>&nbsp;&nbsp;</span>4)    Masa berlaku</td>
                <td class="column40" colspan="2">{{ $identitasPuskesmas->sumber_daya_puskesmas[0]['masa_berlaku_izin_puskesmas'] ?? "" }}</td>
            </tr>
            <tr>
                <td class="column5"></td>
                <td class="column55">j. Registrasi puskesmas</td>
                <td class="column40 columGrey" colspan="2"></td>
            </tr>
            <tr>
                <td class="column5"></td>
                <td class="column55"><span>&nbsp;&nbsp;</span>1)   Tanggal</td>
                <td class="column40" colspan="2">{{ $identitasPuskesmas->sumber_daya_puskesmas[0]['tanggal_regis_puskesmas'] ?? "" }}</td>
            </tr>
            <tr>
                <td class="column5"></td>
                <td class="column55"><span>&nbsp;&nbsp;</span>2)   Nomor surat penetapan kode</td>
                <td class="column40" colspan="2">{{ $identitasPuskesmas->sumber_daya_puskesmas[0]['no_surat_registrasi_puskesmas'] ?? "" }}</td>
            </tr>
            <tr>
                <td class="column5"></td>
                <td class="column55">k. Akreditasi puskesmas</td>
                <td class="column40 columGrey" colspan="2"></td>
            </tr>
            <tr>
                <td class="column5"></td>
                <td class="column55"><span>&nbsp;&nbsp;</span>1)   Tanggal</td>
                <td class="column40" colspan="2">{{ $identitasPuskesmas->sumber_daya_puskesmas[0]['tanggal_akreditasi_puskesmas'] ?? "" }}</td>
            </tr>
            <tr>
                <td class="column5"></td>
                <td class="column55"><span>&nbsp;&nbsp;</span>2)    Nomor SK</td>
                <td class="column40" colspan="2">{{ $identitasPuskesmas->sumber_daya_puskesmas[0]['no_sk_akreditasi_puskesmas'] ?? "" }}</td>
            </tr>
            <tr>
                <td class="column5"></td>
                <td class="column55"><span>&nbsp;&nbsp;</span>3)    Oleh</td>
                <td class="column40" colspan="2">{{ $identitasPuskesmas->sumber_daya_puskesmas[0]['penerbit_akreditasi_puskesmas'] ?? "" }}</td>
            </tr>
            <tr>
                <td class="column5"></td>
                <td class="column55"><span>&nbsp;&nbsp;</span>4)    Masa berlaku</td>
                <td class="column40" colspan="2">{{ $identitasPuskesmas->sumber_daya_puskesmas[0]['masa_berlaku_akreditasi_puskesmas'] ?? "" }}</td>
            </tr>
            <tr>
                <td class="column5"></td>
                <td class="column55">l. Jarak pemukiman terjauh ke puskesmas (km)</td>
                <td class="column15">{{ number_format($identitasPuskesmas->sumber_daya_puskesmas[0]['jarak_pemukiman_terjauh_ke_puskesmas'] ?? 0, 0, ',', '.') }}</td>
                <td class="column25">km</td>
            </tr>
            <tr>
                <td class="column5"></td>
                <td class="column55">m. Waktu tempuh terlama bagi warga menuju puskesmas (jam)</td>
                <td class="column15">{{ number_format($identitasPuskesmas->sumber_daya_puskesmas[0]['waktu_tempuh_ke_puskesmas'] ?? 0, 0, ',', '.') }}</td>
                <td class="column25">jam</td>
            </tr>
            <tr>
                <td class="column5"></td>
                <td class="column55">n. Akses jalan depan gedung puskesmas</td>
                <td class="column40" colspan="2">
                    @if (isset($identitasPuskesmas->sumber_daya_puskesmas[0]['akses_jalan_depan_puskesmas']))
                        @if (isset($identitasPuskesmas->wilayahKerja) && $identitasPuskesmas->sumber_daya_puskesmas[0]['akses_jalan_depan_puskesmas'] === 'aspal_beton')
                            Aspal/Beton
                        @elseif ($identitasPuskesmas->sumber_daya_puskesmas[0]['akses_jalan_depan_puskesmas'] === 'tanah')
                            Tanah
                        @elseif ($identitasPuskesmas->sumber_daya_puskesmas[0]['akses_jalan_depan_puskesmas'] === 'air')
                            Air 
                        @else
                            lainnya
                        @endif
                    @else
                        lainnya
                    @endif
                </td>
            </tr>
            <tr>
                <td class="column5"></td>
                <td class="column55">o. Status jalan raya terdekat menuju ke puskesmas</td>
                <td class="column40" colspan="2">
                    @if (isset($identitasPuskesmas->sumber_daya_puskesmas[0]['status_jalan_terdekat_puskesmas']))
                        @if (isset($identitasPuskesmas->wilayahKerja) && $identitasPuskesmas->sumber_daya_puskesmas[0]['status_jalan_terdekat_puskesmas'] === 'jalan_pusat')
                            Jalan pusat
                        @elseif ($identitasPuskesmas->sumber_daya_puskesmas[0]['status_jalan_terdekat_puskesmas'] === 'jalan_provinsi')
                            Jalan provinsi
                        @elseif ($identitasPuskesmas->sumber_daya_puskesmas[0]['status_jalan_terdekat_puskesmas'] === 'jalan_kab_kota')
                            Jalan kab/kota 
                        @else
                            Status lainnya
                        @endif
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
                            $komponen = isset($identitasPuskesmas->sumber_daya_puskesmas[0]['kendaraan_yang_bisa_melalui_jalan_depan_puskesmas']) && 
                                is_array($identitasPuskesmas->sumber_daya_puskesmas[0]['kendaraan_yang_bisa_melalui_jalan_depan_puskesmas']) 
                                ? $identitasPuskesmas->sumber_daya_puskesmas[0]['kendaraan_yang_bisa_melalui_jalan_depan_puskesmas'] 
                                : [];
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
                <td class="column40" colspan="2">{{ $identitasPuskesmas->sumber_daya_puskesmas[0]['jumlah_bangunan_yang_direhabilitasi_terakhir'] ?? "" }} unit, tahun {{ $identitasPuskesmas->sumber_daya_puskesmas[0]['tahun_rehabilitasi_terakhir'] ?? "" }}</td>
            </tr>
            <tr>
                <td class="column5"></td>
                <td class="column55">r. Sumber dana rehabilitasi puskesmas</td>
                <td class="column40" colspan="2">
                    @if (isset($identitasPuskesmas->sumber_daya_puskesmas[0]['sumber_dana_rehabilitasi']))
                        @if (isset($identitasPuskesmas->wilayahKerja) && $identitasPuskesmas->sumber_daya_puskesmas[0]['sumber_dana_rehabilitasi'] === 'apbn')
                            APBN
                        @elseif ($identitasPuskesmas->sumber_daya_puskesmas[0]['sumber_dana_rehabilitasi'] === 'apbd_provinsi')
                            APBD propinsi 
                        @elseif ($identitasPuskesmas->sumber_daya_puskesmas[0]['sumber_dana_rehabilitasi'] === 'apbd_kab_kota')
                            APBD kab/kota 
                        @elseif ($identitasPuskesmas->sumber_daya_puskesmas[0]['sumber_dana_rehabilitasi'] === 'hibah')
                            Hibah
                        @else
                            Dll 
                        @endif
                    @else
                        Dll
                    @endif
                </td>
            </tr>
            <tr>
                <td class="column5"></td>
                <td class="column55">s. Keadaan bangunan puskesmas   (Kondisi bangunan sesuai Peraturan Menteri PU No. 45 tahun 2000)</td>
                <td class="column40" colspan="2">
                    @if (isset($identitasPuskesmas->sumber_daya_puskesmas[0]['keadaan_bangunan_puskesmas']))
                        @if (isset($identitasPuskesmas->wilayahKerja) && $identitasPuskesmas->sumber_daya_puskesmas[0]['keadaan_bangunan_puskesmas'] === 'baik')
                            Baik
                        @elseif ($identitasPuskesmas->sumber_daya_puskesmas[0]['keadaan_bangunan_puskesmas'] === 'rusak_ringan')
                            Rusak ringan
                        @elseif ($identitasPuskesmas->sumber_daya_puskesmas[0]['keadaan_bangunan_puskesmas'] === 'rusak_sedang')
                            Rusak sedang
                        @else
                            Rusak berat
                        @endif
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
                <td class="column15">{{ number_format($identitasPuskesmas->sumber_daya_puskesmas[0]['jumlah_bangunan_pp_kondisi_baik'] ?? 0, 0, ',', '.') }}</td>
                <td class="column25">unit</td>
            </tr>
            <tr>
                <td class="column5"></td>
                <td class="column55"><span>&nbsp;&nbsp;</span>2) Rusak ringan</td>
                <td class="column15">{{ number_format($identitasPuskesmas->sumber_daya_puskesmas[0]['jumlah_bangunan_pp_kondisi_rusak_ringan'] ?? 0, 0, ',', '.') }}</td>
                <td class="column25">unit</td>
            </tr>
            <tr>
                <td class="column5"></td>
                <td class="column55"><span>&nbsp;&nbsp;</span>3) Rusak sedang</td>
                <td class="column15">{{ number_format($identitasPuskesmas->sumber_daya_puskesmas[0]['jumlah_bangunan_pp_kondisi_rusak_sedang'] ?? 0, 0, ',', '.') }}</td>
                <td class="column25">unit</td>
            </tr>
            <tr>
                <td class="column5"></td>
                <td class="column55"><span>&nbsp;&nbsp;</span>4) Rusak berat</td>
                <td class="column15">{{ number_format($identitasPuskesmas->sumber_daya_puskesmas[0]['jumlah_bangunan_pp_kondisi_rusak_berat'] ?? 0, 0, ',', '.') }}</td>
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
                <td class="column15">{{ number_format($identitasPuskesmas->sumber_daya_puskesmas[0]['jumlah_bangunan_rumah_dinas_nakes_kondisi_baik'] ?? 0, 0, ',', '.') }}</td>
                <td class="column25">unit</td>
            </tr>
            <tr>
                <td class="column5"></td>
                <td class="column55"><span>&nbsp;&nbsp;</span>2) Rusak ringan</td>
                <td class="column15">{{ number_format($identitasPuskesmas->sumber_daya_puskesmas[0]['jumlah_bangunan_rumah_dinas_nakes_kondisi_rusak_ringan'] ?? 0, 0, ',', '.') }}</td>
                <td class="column25">unit</td>
            </tr>
            <tr>
                <td class="column5"></td>
                <td class="column55"><span>&nbsp;&nbsp;</span>3) Rusak sedang</td>
                <td class="column15">{{ number_format($identitasPuskesmas->sumber_daya_puskesmas[0]['jumlah_bangunan_rumah_dinas_nakes_kondisi_rusak_sedang'] ?? 0, 0, ',', '.') }}</td>
                <td class="column25">unit</td>
            </tr>
            <tr>
                <td class="column5"></td>
                <td class="column55"><span>&nbsp;&nbsp;</span>4) Rusak berat</td>
                <td class="column15">{{ number_format($identitasPuskesmas->sumber_daya_puskesmas[0]['jumlah_bangunan_rumah_dinas_nakes_kondisi_rusak_berat'] ?? 0, 0, ',', '.') }}</td>
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
            @php
                // Function to convert index to letter notation (e.g., 0 -> 'a', 26 -> 'aa', etc.)
                function toLetterIndex($index) {
                    $letters = '';
                    while ($index >= 0) {
                        $letters = chr(97 + ($index % 26)) . $letters;
                        $index = floor($index / 26) - 1;
                    }
                    return $letters;
                }
            @endphp
            @foreach ($identitasPuskesmas->ruangan_puskesmas as $index => $data)
                @php
                    // Query the KetersediaanRuanganPuskesmas model where ruangan_puskesmas_id matches the current data ID
                    $ketersediaanList = \App\Models\KetersediaanRuanganPuskesmas::where('ruangan_puskesmas_id', $data['id'])->get();

                    // Convert index to letter-based label
                    $label = toLetterIndex($index);
                @endphp
                @foreach ($ketersediaanList as $ketersediaan)
                    <tr>
                        <td class="column5"></td>
                        <td class="column30">{{ $label }}) {{ $data['nama_ruangan'] }}</td>
                        <td class="column15">
                            @if (isset($ketersediaan->ketersediaan))
                                @if (isset($identitasPuskesmas->wilayahKerja) && $ketersediaan->ketersediaan === 1)
                                    Ada
                                @else
                                    Rusak berat
                                @endif
                            @else
                                Rusak berat
                            @endif
                        </td>
                        <td class="column12-5">{{ $ketersediaan->tahun_pendirian ?? "" }}</td>
                        <td class="column12-5">{{ $ketersediaan->tahun_renovasi ?? "" }}</td>
                        <td class="column25">
                            @if (isset($ketersediaan->kondisi))
                                @if (isset($identitasPuskesmas->wilayahKerja) && $ketersediaan->kondisi === 'baik')
                                    Baik
                                @elseif ($ketersediaan->kondisi === 'rusak_ringan')
                                    Rusak ringan
                                @elseif ($ketersediaan->kondisi === 'rusak_sedang')
                                    Rusak sedang
                                @else
                                    Rusak berat
                                @endif
                            @else
                                Rusak berat
                            @endif
                        </td>
                    </tr>
                @endforeach
            @endforeach
            {{--<tr>
                <td class="column5"></td>
                <td class="column30">a) Ruangan pendaftaran dan rekam medik</td>
                <td class="column15">
                    @if (isset($identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_rekam_medik'][0]['ketersediaan']))
                        @if (isset($identitasPuskesmas->wilayahKerja) && $identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_rekam_medik'][0]['ketersediaan'] === 1)
                            Ada
                        @else
                            Rusak berat
                        @endif
                    @else
                        Rusak berat
                    @endif
                </td>
                <td class="column12-5">{{ $identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_rekam_medik'][0]['pendirian'] ?? "" }}</td>
                <td class="column12-5">{{ $identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_rekam_medik'][0]['renovasi'] ?? "" }}</td>
                <td class="column25">
                    @if (isset($identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_rekam_medik'][0]['kondisi']))
                        @if (isset($identitasPuskesmas->wilayahKerja) && $identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_rekam_medik'][0]['kondisi'] === 1)
                            Baik
                        @elseif ($identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_rekam_medik'][0]['kondisi'] === 1)
                            Rusak ringan
                        @elseif ($identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_rekam_medik'][0]['kondisi'] === 3)
                            Rusak sedang
                        @else
                            Rusak berat
                        @endif
                    @else
                        Rusak berat
                    @endif
                </td>
            </tr>
            <tr>
                <td class="column5"></td>
                <td class="column30">b) Ruangan tunggu</td>
                <td class="column15">
                    @if (isset($identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_tunggu'][0]['ketersediaan']))
                        @if (isset($identitasPuskesmas->wilayahKerja) && $identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_tunggu'][0]['ketersediaan'] === 1)
                            Ada
                        @else
                            Rusak berat
                        @endif
                    @else
                        Rusak berat
                    @endif  
                </td>
                <td class="column12-5">{{ $identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_tunggu'][0]['pendirian'] ?? "" }}</td>
                <td class="column12-5">{{ $identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_tunggu'][0]['renovasi'] ?? "" }}</td>
                <td class="column25">
                    @if (isset($identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_tunggu'][0]['kondisi']))
                        @if (isset($identitasPuskesmas->wilayahKerja) && $identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_tunggu'][0]['kondisi'] === 1)
                            Baik
                        @elseif ($identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_tunggu'][0]['kondisi'] === 1)
                            Rusak ringan
                        @elseif ($identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_tunggu'][0]['kondisi'] === 3)
                            Rusak sedang
                        @else
                            Rusak berat
                        @endif
                    @else
                        Rusak berat
                    @endif 
                </td>
            </tr>
            <tr>
                <td class="column5"></td>
                <td class="column30">c) Ruangan pemeriksaan umum</td>
                <td class="column15">
                    @if (isset($identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_periksa_umum'][0]['ketersediaan']))
                        @if (isset($identitasPuskesmas->wilayahKerja) && $identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_periksa_umum'][0]['ketersediaan'] === 1)
                            Ada
                        @else
                            Rusak berat
                        @endif
                    @else
                        Rusak berat
                    @endif 
                </td>
                <td class="column12-5">{{ $identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_periksa_umum'][0]['pendirian' ?? ""] ?? "" }}</td>
                <td class="column12-5">{{ $identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_periksa_umum'][0]['renovasi'] ?? "" }}</td>
                <td class="column25">
                    @if (isset($identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_periksa_umum'][0]['kondisi']))
                        @if (isset($identitasPuskesmas->wilayahKerja) && $identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_periksa_umum'][0]['kondisi'] === 1)
                            Baik
                        @elseif ($identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_periksa_umum'][0]['kondisi'] === 1)
                            Rusak ringan
                        @elseif ($identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_periksa_umum'][0]['kondisi'] === 3)
                            Rusak sedang
                        @else
                            Rusak berat
                        @endif
                    @else
                        Rusak berat
                    @endif 
                </td>
            </tr>
            <tr>
                <td class="column5"></td>
                <td class="column30">d) Ruangan tindakan</td>
                <td class="column15">
                    @if (isset($identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_tindakan'][0]['ketersediaan']))
                        @if (isset($identitasPuskesmas->wilayahKerja) && $identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_tindakan'][0]['ketersediaan'] === 1)
                            Ada
                        @else
                            Rusak berat
                        @endif
                    @else
                        Rusak berat
                    @endif 
                </td>
                <td class="column12-5">{{ $identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_tindakan'][0]['pendirian'] ?? "" }}</td>
                <td class="column12-5">{{ $identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_tindakan'][0]['renovasi'] ?? "" }}</td>
                <td class="column25">
                    @if (isset($identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_tindakan'][0]['kondisi']))
                        @if (isset($identitasPuskesmas->wilayahKerja) && $identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_tindakan'][0]['kondisi'] === 1)
                            Baik
                        @elseif ($identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_tindakan'][0]['kondisi'] === 1)
                            Rusak ringan
                        @elseif ($identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_tindakan'][0]['kondisi'] === 3)
                            Rusak sedang
                        @else
                            Rusak berat
                        @endif
                    @else
                        Rusak berat
                    @endif 
                </td>
            </tr>
            <tr>
                <td class="column5"></td>
                <td class="column30">e) Ruangan Gawat Darurat</td>
                <td class="column15">
                    @if (isset($identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_gawat_darurat'][0]['ketersediaan']))
                        @if (isset($identitasPuskesmas->wilayahKerja) && $identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_gawat_darurat'][0]['ketersediaan'] === 1)
                            Ada
                        @else
                            Rusak berat
                        @endif
                    @else
                        Rusak berat
                    @endif 
                </td>
                <td class="column12-5">{{ $identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_gawat_darurat'][0]['pendirian'] ?? "" }}</td>
                <td class="column12-5">{{ $identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_gawat_darurat'][0]['renovasi'] ?? "" }}</td>
                <td class="column25">
                    @if (isset($identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_gawat_darurat'][0]['kondisi']))
                        @if (isset($identitasPuskesmas->wilayahKerja) && $identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_gawat_darurat'][0]['kondisi'] === 1)
                            Baik
                        @elseif ($identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_gawat_darurat'][0]['kondisi'] === 1)
                            Rusak ringan
                        @elseif ($identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_gawat_darurat'][0]['kondisi'] === 3)
                            Rusak sedang
                        @else
                            Rusak berat
                        @endif
                    @else
                        Rusak berat
                    @endif 
                </td>
            </tr>
            <tr>
                <td class="column5"></td>
                <td class="column30">f) Ruangan KIA, KB dan imunisasi</td>
                <td class="column15">
                    @if (isset($identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_kia'][0]['ketersediaan']))
                        @if (isset($identitasPuskesmas->wilayahKerja) && $identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_kia'][0]['ketersediaan'] === 1)
                            Ada
                        @else
                            Rusak berat
                        @endif
                    @else
                        Rusak berat
                    @endif 
                </td>
                <td class="column12-5">{{ $identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_kia'][0]['pendirian'] ?? "" }}</td>
                <td class="column12-5">{{ $identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_kia'][0]['renovasi'] ?? "" }}</td>
                <td class="column25">
                    @if (isset($identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_kia'][0]['ketersediaan']))
                        @if (isset($identitasPuskesmas->wilayahKerja) && $identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_kia'][0]['kondisi'] === 1)
                            Baik
                        @elseif ($identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_kia'][0]['kondisi'] === 1)
                            Rusak ringan
                        @elseif ($identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_kia'][0]['kondisi'] === 3)
                            Rusak sedang
                        @else
                            Rusak berat
                        @endif
                    @else
                        Rusak berat
                    @endif 
                </td>
            </tr>
            <tr>
                <td class="column5"></td>
                <td class="column30">g) Ruangan kesehatan anak & imunisasi </td>
                <td class="column15">
                    @if (isset($identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_anak_imunisasi'][0]['ketersediaan']))
                        @if (isset($identitasPuskesmas->wilayahKerja) && $identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_anak_imunisasi'][0]['ketersediaan'] === 1)
                            Ada
                        @else
                            Rusak berat
                        @endif
                    @else
                        Rusak berat
                    @endif 
                </td>
                <td class="column12-5">{{ $identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_anak_imunisasi'][0]['pendirian'] ?? "" }}</td>
                <td class="column12-5">{{ $identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_anak_imunisasi'][0]['renovasi'] ?? "" }}</td>
                <td class="column25">
                    @if (isset($identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_anak_imunisasi'][0]['kondisi']))
                        @if (isset($identitasPuskesmas->wilayahKerja) && $identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_anak_imunisasi'][0]['kondisi'] === 1)
                            Baik
                        @elseif ($identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_anak_imunisasi'][0]['kondisi'] === 1)
                            Rusak ringan
                        @elseif ($identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_anak_imunisasi'][0]['kondisi'] === 3)
                            Rusak sedang
                        @else
                            Rusak berat
                        @endif
                    @else
                        Rusak berat
                    @endif 
                </td>
            </tr>
            <tr>
                <td class="column5"></td>
                <td class="column30">h) Ruangan kesehatan ibu dan KB</td>
                <td class="column15">
                    @if (isset($identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_ibu_kb'][0]['ketersediaan']))
                        @if (isset($identitasPuskesmas->wilayahKerja) && $identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_ibu_kb'][0]['ketersediaan'] === 1)
                            Ada
                        @else
                            Rusak berat
                        @endif
                    @else
                        Rusak berat
                    @endif 
                </td>
                <td class="column12-5">{{ $identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_ibu_kb'][0]['pendirian'] ?? "" }}</td>
                <td class="column12-5">{{ $identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_ibu_kb'][0]['renovasi'] ?? "" }}</td>
                <td class="column25">
                    @if (isset($identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_ibu_kb'][0]['ketersediaan']))
                        @if (isset($identitasPuskesmas->wilayahKerja) && $identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_ibu_kb'][0]['kondisi'] === 1)
                            Baik
                        @elseif ($identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_ibu_kb'][0]['kondisi'] === 1)
                            Rusak ringan
                        @elseif ($identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_ibu_kb'][0]['kondisi'] === 3)
                            Rusak sedang
                        @else
                            Rusak berat
                        @endif
                    @else
                        Rusak berat
                    @endif 
                </td>
            </tr>
            <tr>
                <td class="column5"></td>
                <td class="column30">i) Ruangan kesehatan gigi & mulut</td>
                <td class="column15">
                    @if (isset($identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_gigi_mulut'][0]['ketersediaan']))
                        @if (isset($identitasPuskesmas->wilayahKerja) && $identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_gigi_mulut'][0]['ketersediaan'] === 1)
                            Ada
                        @else
                            Rusak berat
                        @endif
                    @else
                        Rusak berat
                    @endif 
                </td>
                <td class="column12-5">{{ $identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_gigi_mulut'][0]['pendirian'] ?? "" }}</td>
                <td class="column12-5">{{ $identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_gigi_mulut'][0]['renovasi'] ?? "" }}</td>
                <td class="column25">
                    @if (isset($identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_gigi_mulut'][0]['kondisi']))
                        @if (isset($identitasPuskesmas->wilayahKerja) && $identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_gigi_mulut'][0]['kondisi'] === 1)
                            Baik
                        @elseif ($identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_gigi_mulut'][0]['kondisi'] === 1)
                            Rusak ringan
                        @elseif ($identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_gigi_mulut'][0]['kondisi'] === 3)
                            Rusak sedang
                        @else
                            Rusak berat
                        @endif
                    @else
                        Rusak berat
                    @endif
                </td>
            </tr>
            <tr>
                <td class="column5"></td>
                <td class="column30">j) Ruangan ASI</td>
                <td class="column15">
                    @if (isset($identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_asi'][0]['ketersediaan']))
                        @if (isset($identitasPuskesmas->wilayahKerja) && $identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_asi'][0]['ketersediaan'] === 1)
                            Ada
                        @else
                            Rusak berat
                        @endif
                    @else
                        Rusak berat
                    @endif
                </td>
                <td class="column12-5">{{ $identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_asi'][0]['pendirian'] ?? "" }}</td>
                <td class="column12-5">{{ $identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_asi'][0]['renovasi'] ?? "" }}</td>
                <td class="column25">
                    @if (isset($identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_asi'][0]['kondisi']))
                        @if (isset($identitasPuskesmas->wilayahKerja) && $identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_asi'][0]['kondisi'] === 1)
                            Baik
                        @elseif ($identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_asi'][0]['kondisi'] === 1)
                            Rusak ringan
                        @elseif ($identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_asi'][0]['kondisi'] === 3)
                            Rusak sedang
                        @else
                            Rusak berat
                        @endif
                    @else
                        Rusak berat
                    @endif
                </td>
            </tr>
            <tr>
                <td class="column5"></td>
                <td class="column30">k) Ruangan promosi kesehatan</td>
                <td class="column15">
                    @if (isset($identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_promosi_kesehatan'][0]['ketersediaan']))
                        @if (isset($identitasPuskesmas->wilayahKerja) && $identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_promosi_kesehatan'][0]['ketersediaan'] === 1)
                            Ada
                        @else
                            Rusak berat
                        @endif
                    @else
                        Rusak berat
                    @endif
                </td>
                <td class="column12-5">{{ $identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_promosi_kesehatan'][0]['pendirian'] ?? "" }}</td>
                <td class="column12-5">{{ $identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_promosi_kesehatan'][0]['renovasi'] ?? "" }}</td>
                <td class="column25">
                    @if (isset($identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_promosi_kesehatan'][0]['ketersediaan']))
                        @if (isset($identitasPuskesmas->wilayahKerja) && $identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_promosi_kesehatan'][0]['kondisi'] === 1)
                            Baik
                        @elseif ($identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_promosi_kesehatan'][0]['kondisi'] === 1)
                            Rusak ringan
                        @elseif ($identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_promosi_kesehatan'][0]['kondisi'] === 3)
                            Rusak sedang
                        @else
                            Rusak berat
                        @endif
                    @else
                        Rusak berat
                    @endif
                </td>
            </tr>
            <tr>
                <td class="column5"></td>
                <td class="column30">l) Ruangan farmasi</td>
                <td class="column15">
                    @if (isset($identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_farmasi'][0]['ketersediaan']))
                        @if (isset($identitasPuskesmas->wilayahKerja) && $identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_farmasi'][0]['ketersediaan'] === 1)
                            Ada
                        @else
                            Rusak berat
                        @endif
                    @else
                        Rusak berat
                    @endif
                </td>
                <td class="column12-5">{{ $identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_farmasi'][0]['pendirian'] ?? "" }}</td>
                <td class="column12-5">{{ $identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_farmasi'][0]['renovasi'] ?? "" }}</td>
                <td class="column25">
                    @if (isset($identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_farmasi'][0]['kondisi']))
                        @if (isset($identitasPuskesmas->wilayahKerja) && $identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_farmasi'][0]['kondisi'] === 1)
                            Baik
                        @elseif ($identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_farmasi'][0]['kondisi'] === 1)
                            Rusak ringan
                        @elseif ($identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_farmasi'][0]['kondisi'] === 3)
                            Rusak sedang
                        @else
                            Rusak berat
                        @endif
                    @else
                        Rusak berat
                    @endif
                </td>
            </tr>
            <tr>
                <td class="column5"></td>
                <td class="column30">m) Ruangan persalinan</td>
                <td class="column15">
                    @if (isset($identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_persalinan'][0]['ketersediaan']))
                        @if (isset($identitasPuskesmas->wilayahKerja) && $identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_persalinan'][0]['ketersediaan'] === 1)
                            Ada
                        @else
                            Rusak berat
                        @endif
                    @else
                        Rusak berat
                    @endif
                </td>
                <td class="column12-5">{{ $identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_persalinan'][0]['pendirian'] ?? "" }}</td>
                <td class="column12-5">{{ $identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_persalinan'][0]['renovasi'] ?? "" }}</td>
                <td class="column25">
                    @if (isset($identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_persalinan'][0]['kondisi']))
                        @if (isset($identitasPuskesmas->wilayahKerja) && $identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_persalinan'][0]['kondisi'] === 1)
                            Baik
                        @elseif ($identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_persalinan'][0]['kondisi'] === 1)
                            Rusak ringan
                        @elseif ($identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_persalinan'][0]['kondisi'] === 3)
                            Rusak sedang
                        @else
                            Rusak berat
                        @endif
                    @else
                        Rusak berat
                    @endif
                </td>
            </tr>
            <tr>
                <td class="column5"></td>
                <td class="column30">n) Ruangan rawat pasca persalinan</td>
                <td class="column15">
                    @if (isset($identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_pasca_persalinan'][0]['ketersediaan']))
                        @if (isset($identitasPuskesmas->wilayahKerja) && $identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_pasca_persalinan'][0]['ketersediaan'] === 1)
                            Ada
                        @else
                            Rusak berat
                        @endif
                    @else
                        Rusak berat
                    @endif
                </td>
                <td class="column12-5">{{ $identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_pasca_persalinan'][0]['pendirian'] ?? "" }}</td>
                <td class="column12-5">{{ $identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_pasca_persalinan'][0]['renovasi'] ?? "" }}</td>
                <td class="column25">
                    @if (isset($identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_pasca_persalinan'][0]['kondisi']))
                        @if (isset($identitasPuskesmas->wilayahKerja) && $identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_pasca_persalinan'][0]['kondisi'] === 1)
                            Baik
                        @elseif ($identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_pasca_persalinan'][0]['kondisi'] === 1)
                            Rusak ringan
                        @elseif ($identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_pasca_persalinan'][0]['kondisi'] === 3)
                            Rusak sedang
                        @else
                            Rusak berat
                        @endif
                    @else
                        Rusak berat
                    @endif
                </td>
            </tr>
            <tr>
                <td class="column5"></td>
                <td class="column30">o) Ruangan rawat inap anak </td>
                <td class="column15">
                    @if (isset($identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_rawat_inap_anak'][0]['ketersediaan']))
                        @if (isset($identitasPuskesmas->wilayahKerja) && $identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_rawat_inap_anak'][0]['ketersediaan'] === 1)
                            Ada
                        @else
                            Rusak berat
                        @endif
                    @else
                        Rusak berat
                    @endif
                </td>
                <td class="column12-5">{{ $identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_rawat_inap_anak'][0]['pendirian'] ?? "" }}</td>
                <td class="column12-5">{{ $identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_rawat_inap_anak'][0]['renovasi'] ?? "" }}</td>
                <td class="column25">
                    @if (isset($identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_rawat_inap_anak'][0]['kondisi']))
                        @if (isset($identitasPuskesmas->wilayahKerja) && $identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_rawat_inap_anak'][0]['kondisi'] === 1)
                            Baik
                        @elseif ($identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_rawat_inap_anak'][0]['kondisi'] === 1)
                            Rusak ringan
                        @elseif ($identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_rawat_inap_anak'][0]['kondisi'] === 3)
                            Rusak sedang
                        @else
                            Rusak berat
                        @endif
                    @else
                        Rusak berat
                    @endif
                </td>
            </tr>
            <tr>
                <td class="column5"></td>
                <td class="column30">p) Ruangan rawat inap pria</td>
                <td class="column15">
                    @if (isset($identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_rawat_inap_pria'][0]['ketersediaan']))
                        @if (isset($identitasPuskesmas->wilayahKerja) && $identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_rawat_inap_pria'][0]['ketersediaan'] === 1)
                            Ada
                        @else
                            Rusak berat
                        @endif
                    @else
                        Rusak berat
                    @endif
                </td>
                <td class="column12-5">{{ $identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_rawat_inap_pria'][0]['pendirian'] ?? "" }}</td>
                <td class="column12-5">{{ $identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_rawat_inap_pria'][0]['renovasi'] ?? "" }}</td>
                <td class="column25">
                    @if (isset($identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_rawat_inap_pria'][0]['kondisi']))
                        @if (isset($identitasPuskesmas->wilayahKerja) && $identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_rawat_inap_pria'][0]['kondisi'] === 1)
                            Baik
                        @elseif ($identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_rawat_inap_pria'][0]['kondisi'] === 1)
                            Rusak ringan
                        @elseif ($identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_rawat_inap_pria'][0]['kondisi'] === 3)
                            Rusak sedang
                        @else
                            Rusak berat
                        @endif
                    @else
                        Rusak berat
                    @endif
                </td>
            </tr>
            <tr>
                <td class="column5"></td>
                <td class="column30">q) Ruangan rawat inap wanita</td>
                <td class="column15">
                    @if (isset($identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_rawat_inap_wanita'][0]['ketersediaan']))
                        @if (isset($identitasPuskesmas->wilayahKerja) && $identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_rawat_inap_wanita'][0]['ketersediaan'] === 1)
                            Ada
                        @else
                            Rusak berat
                        @endif
                    @else
                        Rusak berat
                    @endif
                </td>
                <td class="column12-5">{{ $identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_rawat_inap_wanita'][0]['pendirian'] ?? "" }}</td>
                <td class="column12-5">{{ $identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_rawat_inap_wanita'][0]['renovasi'] ?? "" }}</td>
                <td class="column25">
                    @if (isset($identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_rawat_inap_wanita'][0]['kondisi']))
                        @if (isset($identitasPuskesmas->wilayahKerja) && $identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_rawat_inap_wanita'][0]['kondisi'] === 1)
                            Baik
                        @elseif ($identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_rawat_inap_wanita'][0]['kondisi'] === 1)
                            Rusak ringan
                        @elseif ($identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_rawat_inap_wanita'][0]['kondisi'] === 3)
                            Rusak sedang
                        @else
                            Rusak berat
                        @endif
                    @else
                        Rusak berat
                    @endif
                </td>
            </tr>
            <tr>
                <td class="column5"></td>
                <td class="column30">r) Ruangan gudang umum</td>
                <td class="column15">
                    @if (isset($identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_gudang_umum'][0]['ketersediaan']))
                        @if (isset($identitasPuskesmas->wilayahKerja) && $identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_gudang_umum'][0]['ketersediaan'] === 1)
                            Ada
                        @else
                            Rusak berat
                        @endif
                    @else
                        Rusak berat
                    @endif
                </td>
                <td class="column12-5">{{ $identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_gudang_umum'][0]['pendirian'] ?? "" }}</td>
                <td class="column12-5">{{ $identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_gudang_umum'][0]['renovasi'] ?? "" }}</td>
                <td class="column25">
                    @if (isset($identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_gudang_umum'][0]['kondisi']))
                        @if (isset($identitasPuskesmas->wilayahKerja) && $identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_gudang_umum'][0]['kondisi'] === 1)
                            Baik
                        @elseif ($identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_gudang_umum'][0]['kondisi'] === 1)
                            Rusak ringan
                        @elseif ($identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_gudang_umum'][0]['kondisi'] === 3)
                            Rusak sedang
                        @else
                            Rusak berat
                        @endif
                    @else
                        Rusak berat
                    @endif
                </td>
            </tr>
            <tr>
                <td class="column5"></td>
                <td class="column30">s) KM/WC pasien (laki dan wanita terpisah)</td>
                <td class="column15">
                    @if (isset($identitasPuskesmas->sumber_daya_puskesmas[0]['wc_pasien'][0]['ketersediaan']))
                        @if (isset($identitasPuskesmas->wilayahKerja) && $identitasPuskesmas->sumber_daya_puskesmas[0]['wc_pasien'][0]['ketersediaan'] === 1)
                            Ada
                        @else
                            Rusak berat
                        @endif
                    @else
                        Rusak berat
                    @endif
                </td>
                <td class="column12-5">{{ $identitasPuskesmas->sumber_daya_puskesmas[0]['wc_pasien'][0]['pendirian'] ?? "" }}</td>
                <td class="column12-5">{{ $identitasPuskesmas->sumber_daya_puskesmas[0]['wc_pasien'][0]['renovasi'] ?? "" }}</td>
                <td class="column25">
                    @if (isset($identitasPuskesmas->sumber_daya_puskesmas[0]['wc_pasien'][0]['kondisi']))
                        @if (isset($identitasPuskesmas->wilayahKerja) && $identitasPuskesmas->sumber_daya_puskesmas[0]['wc_pasien'][0]['kondisi'] === 1)
                            Baik
                        @elseif ($identitasPuskesmas->sumber_daya_puskesmas[0]['wc_pasien'][0]['kondisi'] === 1)
                            Rusak ringan
                        @elseif ($identitasPuskesmas->sumber_daya_puskesmas[0]['wc_pasien'][0]['kondisi'] === 3)
                            Rusak sedang
                        @else
                            Rusak berat
                        @endif
                    @else
                        Rusak berat
                    @endif
                </td>
            </tr>
            <tr>
                <td class="column5"></td>
                <td class="column30">t) Laboratorium</td>
                <td class="column15">
                    @if (isset($identitasPuskesmas->sumber_daya_puskesmas[0]['laboratorium'][0]['ketersediaan']))
                        @if (isset($identitasPuskesmas->wilayahKerja) && $identitasPuskesmas->sumber_daya_puskesmas[0]['laboratorium'][0]['ketersediaan'] === 1)
                            Ada
                        @else
                            Rusak berat
                        @endif
                    @else
                        Rusak berat
                    @endif
                </td>
                <td class="column12-5">{{ $identitasPuskesmas->sumber_daya_puskesmas[0]['laboratorium'][0]['pendirian'] ?? "" }}</td>
                <td class="column12-5">{{ $identitasPuskesmas->sumber_daya_puskesmas[0]['laboratorium'][0]['renovasi'] ?? "" }}</td>
                <td class="column25">
                    @if (isset($identitasPuskesmas->sumber_daya_puskesmas[0]['laboratorium'][0]['kondisi']))
                        @if (isset($identitasPuskesmas->wilayahKerja) && $identitasPuskesmas->sumber_daya_puskesmas[0]['laboratorium'][0]['kondisi'] === 1)
                            Baik
                        @elseif ($identitasPuskesmas->sumber_daya_puskesmas[0]['laboratorium'][0]['kondisi'] === 1)
                            Rusak ringan
                        @elseif ($identitasPuskesmas->sumber_daya_puskesmas[0]['laboratorium'][0]['kondisi'] === 3)
                            Rusak sedang
                        @else
                            Rusak berat
                        @endif
                    @else
                        Rusak berat
                    @endif
                </td>
            </tr>
            <tr>
                <td class="column5"></td>
                <td class="column30">u) Ruangan cuci linen</td>
                <td class="column15">
                    @if (isset($identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_cuci_linen'][0]['ketersediaan']))
                        @if (isset($identitasPuskesmas->wilayahKerja) && $identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_cuci_linen'][0]['ketersediaan'] === 1)
                            Ada
                        @else
                            Rusak berat
                        @endif
                    @else
                        Rusak berat
                    @endif
                </td>
                <td class="column12-5">{{ $identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_cuci_linen'][0]['pendirian'] ?? "" }}</td>
                <td class="column12-5">{{ $identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_cuci_linen'][0]['renovasi'] ?? "" }}</td>
                <td class="column25">
                    @if (isset($identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_cuci_linen'][0]['kondisi']))
                        @if (isset($identitasPuskesmas->wilayahKerja) && $identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_cuci_linen'][0]['kondisi'] === 1)
                            Baik
                        @elseif ($identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_cuci_linen'][0]['kondisi'] === 1)
                            Rusak ringan
                        @elseif ($identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_cuci_linen'][0]['kondisi'] === 3)
                            Rusak sedang
                        @else
                            Rusak berat
                        @endif
                    @else
                        Rusak berat
                    @endif
                </td>
            </tr>
            <tr>
                <td class="column5"></td>
                <td class="column30">v) Ruangan sterilisasi</td>
                <td class="column15">
                    @if (isset($identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_sterilisasi'][0]['ketersediaan']))
                        @if (isset($identitasPuskesmas->wilayahKerja) && $identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_sterilisasi'][0]['ketersediaan'] === 1)
                            Ada
                        @else
                            Rusak berat
                        @endif
                    @else
                        Rusak berat
                    @endif
                </td>
                <td class="column12-5">{{ $identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_sterilisasi'][0]['pendirian'] ?? "" }}</td>
                <td class="column12-5">{{ $identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_sterilisasi'][0]['renovasi'] ?? "" }}</td>
                <td class="column25">
                    @if (isset($identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_sterilisasi'][0]['kondisi']))
                        @if (isset($identitasPuskesmas->wilayahKerja) && $identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_sterilisasi'][0]['kondisi'] === 1)
                            Baik
                        @elseif ($identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_sterilisasi'][0]['kondisi'] === 1)
                            Rusak ringan
                        @elseif ($identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_sterilisasi'][0]['kondisi'] === 3)
                            Rusak sedang
                        @else
                            Rusak berat
                        @endif
                    @else
                        Rusak berat
                    @endif
                </td>
            </tr>
            <tr>
                <td class="column5"></td>
                <td class="column30">w) Ruangan penyelenggaraan makanan</td>
                <td class="column15">
                    @if (isset($identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_penyelenggaraan_makanan'][0]['ketersediaan']))
                        @if (isset($identitasPuskesmas->wilayahKerja) && $identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_penyelenggaraan_makanan'][0]['ketersediaan'] === 1)
                            Ada
                        @else
                            Rusak berat
                        @endif
                    @else
                        Rusak berat
                    @endif
                </td>
                <td class="column12-5">{{ $identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_penyelenggaraan_makanan'][0]['pendirian'] ?? "" }}</td>
                <td class="column12-5">{{ $identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_penyelenggaraan_makanan'][0]['renovasi'] ?? "" }}</td>
                <td class="column25">
                    @if (isset($identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_penyelenggaraan_makanan'][0]['kondisi']))
                        @if (isset($identitasPuskesmas->wilayahKerja) && $identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_penyelenggaraan_makanan'][0]['kondisi'] === 1)
                            Baik
                        @elseif ($identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_penyelenggaraan_makanan'][0]['kondisi'] === 1)
                            Rusak ringan
                        @elseif ($identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_penyelenggaraan_makanan'][0]['kondisi'] === 3)
                            Rusak sedang
                        @else
                            Rusak berat
                        @endif
                    @else
                        Rusak berat
                    @endif
                </td>
            </tr>
            <tr>
                <td class="column5"></td>
                <td class="column30">x) KM/WC untuk rawat inap</td>
                <td class="column15">
                    @if (isset($identitasPuskesmas->sumber_daya_puskesmas[0]['wc_rawat_inap'][0]['ketersediaan']))
                        @if (isset($identitasPuskesmas->wilayahKerja) && $identitasPuskesmas->sumber_daya_puskesmas[0]['wc_rawat_inap'][0]['ketersediaan'] === 1)
                            Ada
                        @else
                            Rusak berat
                        @endif
                    @else
                        Rusak berat
                    @endif
                </td>
                <td class="column12-5">{{ $identitasPuskesmas->sumber_daya_puskesmas[0]['wc_rawat_inap'][0]['pendirian'] ?? "" }}</td>
                <td class="column12-5">{{ $identitasPuskesmas->sumber_daya_puskesmas[0]['wc_rawat_inap'][0]['renovasi'] ?? "" }}</td>
                <td class="column25">
                    @if (isset($identitasPuskesmas->sumber_daya_puskesmas[0]['wc_rawat_inap'][0]['kondisi']))
                        @if (isset($identitasPuskesmas->wilayahKerja) && $identitasPuskesmas->sumber_daya_puskesmas[0]['wc_rawat_inap'][0]['kondisi'] === 1)
                            Baik
                        @elseif ($identitasPuskesmas->sumber_daya_puskesmas[0]['wc_rawat_inap'][0]['kondisi'] === 1)
                            Rusak ringan
                        @elseif ($identitasPuskesmas->sumber_daya_puskesmas[0]['wc_rawat_inap'][0]['kondisi'] === 3)
                            Rusak sedang
                        @else
                            Rusak berat
                        @endif
                    @else
                        Rusak berat
                    @endif
                </td>
            </tr>
            <tr>
                <td class="column5"></td>
                <td class="column30">y) KM/WC petugas</td>
                <td class="column15">
                    @if (isset($identitasPuskesmas->sumber_daya_puskesmas[0]['wc_petugas'][0]['ketersediaan']))
                        @if (isset($identitasPuskesmas->wilayahKerja) && $identitasPuskesmas->sumber_daya_puskesmas[0]['wc_petugas'][0]['ketersediaan'] === 1)
                            Ada
                        @else
                            Rusak berat
                        @endif
                    @else
                        Rusak berat
                    @endif
                </td>
                <td class="column12-5">{{ $identitasPuskesmas->sumber_daya_puskesmas[0]['wc_petugas'][0]['pendirian'] ?? "" }}</td>
                <td class="column12-5">{{ $identitasPuskesmas->sumber_daya_puskesmas[0]['wc_petugas'][0]['renovasi'] ?? "" }}</td>
                <td class="column25">
                    @if (isset($identitasPuskesmas->sumber_daya_puskesmas[0]['wc_petugas'][0]['kondisi']))
                        @if (isset($identitasPuskesmas->wilayahKerja) && $identitasPuskesmas->sumber_daya_puskesmas[0]['wc_petugas'][0]['kondisi'] === 1)
                            Baik
                        @elseif ($identitasPuskesmas->sumber_daya_puskesmas[0]['wc_petugas'][0]['kondisi'] === 1)
                            Rusak ringan
                        @elseif ($identitasPuskesmas->sumber_daya_puskesmas[0]['wc_petugas'][0]['kondisi'] === 3)
                            Rusak sedang
                        @else
                            Rusak berat
                        @endif
                    @else
                        Rusak berat
                    @endif
                </td>
            </tr>
            <tr>
                <td class="column5"></td>
                <td class="column30">z) Ruangan jaga petugas</td>
                <td class="column15">
                    @if (isset($identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_jaga_petugas'][0]['ketersediaan']))
                        @if (isset($identitasPuskesmas->wilayahKerja) && $identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_jaga_petugas'][0]['ketersediaan'] === 1)
                            Ada
                        @else
                            Rusak berat
                        @endif
                    @else
                        Rusak berat
                    @endif
                </td>
                <td class="column12-5">{{ $identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_jaga_petugas'][0]['pendirian'] ?? "" }}</td>
                <td class="column12-5">{{ $identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_jaga_petugas'][0]['renovasi'] ?? "" }}</td>
                <td class="column25">
                    @if (isset($identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_jaga_petugas'][0]['kondisi']))
                        @if (isset($identitasPuskesmas->wilayahKerja) && $identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_jaga_petugas'][0]['kondisi'] === 1)
                            Baik
                        @elseif ($identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_jaga_petugas'][0]['kondisi'] === 1)
                            Rusak ringan
                        @elseif ($identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_jaga_petugas'][0]['kondisi'] === 3)
                            Rusak sedang
                        @else
                            Rusak berat
                        @endif
                    @else
                        Rusak berat
                    @endif
                </td>
            </tr>
            <tr>
                <td class="column5"></td>
                <td class="column30">aa) Gudang umum</td>
                <td class="column15">
                    @if (isset($identitasPuskesmas->sumber_daya_puskesmas[0]['gudang_umum'][0]['ketersediaan']))
                        @if (isset($identitasPuskesmas->wilayahKerja) && $identitasPuskesmas->sumber_daya_puskesmas[0]['gudang_umum'][0]['ketersediaan'] === 1)
                            Ada
                        @else
                            Rusak berat
                        @endif
                    @else
                        Rusak berat
                    @endif
                </td>
                <td class="column12-5">{{ $identitasPuskesmas->sumber_daya_puskesmas[0]['gudang_umum'][0]['pendirian'] ?? "" }}</td>
                <td class="column12-5">{{ $identitasPuskesmas->sumber_daya_puskesmas[0]['gudang_umum'][0]['renovasi'] ?? "" }}</td>
                <td class="column25">
                    @if (isset($identitasPuskesmas->sumber_daya_puskesmas[0]['gudang_umum'][0]['kondisi']))
                        @if (isset($identitasPuskesmas->wilayahKerja) && $identitasPuskesmas->sumber_daya_puskesmas[0]['gudang_umum'][0]['kondisi'] === 1)
                            Baik
                        @elseif ($identitasPuskesmas->sumber_daya_puskesmas[0]['gudang_umum'][0]['kondisi'] === 1)
                            Rusak ringan
                        @elseif ($identitasPuskesmas->sumber_daya_puskesmas[0]['gudang_umum'][0]['kondisi'] === 3)
                            Rusak sedang
                        @else
                            Rusak berat
                        @endif
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
                    @if (isset($identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_kepala_puskesmas'][0]['ketersediaan']))
                        @if (isset($identitasPuskesmas->wilayahKerja) && $identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_kepala_puskesmas'][0]['ketersediaan'] === 1)
                            Ada
                        @else
                            Rusak berat
                        @endif
                    @else
                        Rusak berat
                    @endif
                </td>
                <td class="column12-5">{{ $identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_kepala_puskesmas'][0]['pendirian'] ?? "" }}</td>
                <td class="column12-5">{{ $identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_kepala_puskesmas'][0]['renovasi'] ?? "" }}</td>
                <td class="column25">
                    @if (isset($identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_kepala_puskesmas'][0]['kondisi']))
                        @if (isset($identitasPuskesmas->wilayahKerja) && $identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_kepala_puskesmas'][0]['kondisi'] === 1)
                            Baik
                        @elseif ($identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_kepala_puskesmas'][0]['kondisi'] === 1)
                            Rusak ringan
                        @elseif ($identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_kepala_puskesmas'][0]['kondisi'] === 3)
                            Rusak sedang
                        @else
                            Rusak berat
                        @endif
                    @else
                        Rusak berat
                    @endif
                </td>
            </tr>
            <tr>
                <td class="column5"></td>
                <td class="column30">b) Ruang rapat/diskusi</td>
                <td class="column15">
                    @if (isset($identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_rapat'][0]['ketersediaan']))
                        @if (isset($identitasPuskesmas->wilayahKerja) && $identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_rapat'][0]['ketersediaan'] === 1)
                            Ada
                        @else
                            Rusak berat
                        @endif
                    @else
                        Rusak berat
                    @endif
                </td>
                <td class="column12-5">{{ $identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_rapat'][0]['pendirian'] ?? "" }}</td>
                <td class="column12-5">{{ $identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_rapat'][0]['renovasi'] ?? "" }}</td>
                <td class="column25">
                    @if (isset($identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_rapat'][0]['kondisi']))
                        @if (isset($identitasPuskesmas->wilayahKerja) && $identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_rapat'][0]['kondisi'] === 1)
                            Baik
                        @elseif ($identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_rapat'][0]['kondisi'] === 1)
                            Rusak ringan
                        @elseif ($identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_rapat'][0]['kondisi'] === 3)
                            Rusak sedang
                        @else
                            Rusak berat
                        @endif
                    @else
                        Rusak berat
                    @endif
                </td>
            </tr>
            <tr>
                <td class="column5"></td>
                <td class="column30">c) Ruangan administrasi kantor/tata usaha</td>
                <td class="column15">
                    @if (isset($identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_tata_usaha'][0]['ketersediaan']))
                        @if (isset($identitasPuskesmas->wilayahKerja) && $identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_tata_usaha'][0]['ketersediaan'] === 1)
                            Ada
                        @else
                            Rusak berat
                        @endif
                    @else
                        Rusak berat
                    @endif
                </td>
                <td class="column12-5">{{ $identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_tata_usaha'][0]['pendirian'] ?? "" }}</td>
                <td class="column12-5">{{ $identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_tata_usaha'][0]['renovasi'] ?? "" }}</td>
                <td class="column25">
                    @if (isset($identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_tata_usaha'][0]['kondisi']))
                        @if (isset($identitasPuskesmas->wilayahKerja) && $identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_tata_usaha'][0]['kondisi'] === 1)
                            Baik
                        @elseif ($identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_tata_usaha'][0]['kondisi'] === 1)
                            Rusak ringan
                        @elseif ($identitasPuskesmas->sumber_daya_puskesmas[0]['ruang_tata_usaha'][0]['kondisi'] === 3)
                            Rusak sedang
                        @else
                            Rusak berat
                        @endif
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
                    @if (isset($identitasPuskesmas->sumber_daya_puskesmas[0]['parkir_roda_4'][0]['ketersediaan']))
                        @if (isset($identitasPuskesmas->wilayahKerja) && $identitasPuskesmas->sumber_daya_puskesmas[0]['parkir_roda_4'][0]['ketersediaan'] === 1)
                            Ada
                        @else
                            Rusak berat
                        @endif
                    @else
                        Rusak berat
                    @endif
                </td>
                <td class="column12-5">{{ $identitasPuskesmas->sumber_daya_puskesmas[0]['parkir_roda_4'][0]['pendirian'] ?? "" }}</td>
                <td class="column12-5">{{ $identitasPuskesmas->sumber_daya_puskesmas[0]['parkir_roda_4'][0]['renovasi'] ?? "" }}</td>
                <td class="column25">
                    @if (isset($identitasPuskesmas->sumber_daya_puskesmas[0]['parkir_roda_4'][0]['kondisi']))
                        @if (isset($identitasPuskesmas->wilayahKerja) && $identitasPuskesmas->sumber_daya_puskesmas[0]['parkir_roda_4'][0]['kondisi'] === 1)
                            Baik
                        @elseif ($identitasPuskesmas->sumber_daya_puskesmas[0]['parkir_roda_4'][0]['kondisi'] === 1)
                            Rusak ringan
                        @elseif ($identitasPuskesmas->sumber_daya_puskesmas[0]['parkir_roda_4'][0]['kondisi'] === 3)
                            Rusak sedang
                        @else
                            Rusak berat
                        @endif
                    @else
                        Rusak berat
                    @endif
                </td>
            </tr>
            <tr>
                <td class="column5"></td>
                <td class="column30">a) Parkir kendaraan roda 2</td>
                <td class="column15">
                    @if (isset($identitasPuskesmas->sumber_daya_puskesmas[0]['parkir_roda_2'][0]['ketersediaan']))
                        @if (isset($identitasPuskesmas->wilayahKerja) && $identitasPuskesmas->sumber_daya_puskesmas[0]['parkir_roda_2'][0]['ketersediaan'] === 1)
                            Ada
                        @else
                            Rusak berat
                        @endif
                    @else
                        Rusak berat
                    @endif
                </td>
                <td class="column12-5">{{ $identitasPuskesmas->sumber_daya_puskesmas[0]['parkir_roda_2'][0]['pendirian'] ?? "" }}</td>
                <td class="column12-5">{{ $identitasPuskesmas->sumber_daya_puskesmas[0]['parkir_roda_2'][0]['renovasi'] ?? "" }}</td>
                <td class="column25">
                    @if (isset($identitasPuskesmas->sumber_daya_puskesmas[0]['parkir_roda_2'][0]['kondisi']))
                        @if (isset($identitasPuskesmas->wilayahKerja) && $identitasPuskesmas->sumber_daya_puskesmas[0]['parkir_roda_2'][0]['kondisi'] === 1)
                            Baik
                        @elseif ($identitasPuskesmas->sumber_daya_puskesmas[0]['parkir_roda_2'][0]['kondisi'] === 1)
                            Rusak ringan
                        @elseif ($identitasPuskesmas->sumber_daya_puskesmas[0]['parkir_roda_2'][0]['kondisi'] === 3)
                            Rusak sedang
                        @else
                            Rusak berat
                        @endif
                    @else
                        Rusak berat
                    @endif
                </td>
            </tr>
            <tr>
                <td class="column5"></td>
                <td class="column30">c) Parkir ambulance</td>
                <td class="column15">
                    @if (isset($identitasPuskesmas->sumber_daya_puskesmas[0]['parkir_ambulance'][0]['ketersediaan']))
                        @if (isset($identitasPuskesmas->wilayahKerja) && $identitasPuskesmas->sumber_daya_puskesmas[0]['parkir_ambulance'][0]['ketersediaan'] === 1)
                            Ada
                        @else
                            Rusak berat
                        @endif
                    @else
                        Rusak berat
                    @endif
                </td>
                <td class="column12-5">{{ $identitasPuskesmas->sumber_daya_puskesmas[0]['parkir_ambulance'][0]['pendirian'] ?? "" }}</td>
                <td class="column12-5">{{ $identitasPuskesmas->sumber_daya_puskesmas[0]['parkir_ambulance'][0]['renovasi'] ?? "" }}</td>
                <td class="column25">
                    @if (isset($identitasPuskesmas->sumber_daya_puskesmas[0]['parkir_ambulance'][0]['kondisi']))
                        @if (isset($identitasPuskesmas->wilayahKerja) && $identitasPuskesmas->sumber_daya_puskesmas[0]['parkir_ambulance'][0]['kondisi'] === 1)
                            Baik
                        @elseif ($identitasPuskesmas->sumber_daya_puskesmas[0]['parkir_ambulance'][0]['kondisi'] === 1)
                            Rusak ringan
                        @elseif ($identitasPuskesmas->sumber_daya_puskesmas[0]['parkir_ambulance'][0]['kondisi'] === 3)
                            Rusak sedang
                        @else
                            Rusak berat
                        @endif
                    @else
                        Rusak berat
                    @endif
                </td>
            </tr>
            <tr>
                <td class="column5"></td>
                <td class="column30">d) Parkir puskesmas keliling</td>
                <td class="column15">
                    @if (isset($identitasPuskesmas->sumber_daya_puskesmas[0]['parkir_puskesmas_keliling'][0]['ketersediaan']))
                        @if (isset($identitasPuskesmas->wilayahKerja) && $identitasPuskesmas->sumber_daya_puskesmas[0]['parkir_puskesmas_keliling'][0]['ketersediaan'] === 1)
                            Ada
                        @else
                            Rusak berat
                        @endif
                    @else
                        Rusak berat
                    @endif
                </td>
                <td class="column12-5">{{ $identitasPuskesmas->sumber_daya_puskesmas[0]['parkir_puskesmas_keliling'][0]['pendirian'] ?? "" }}</td>
                <td class="column12-5">{{ $identitasPuskesmas->sumber_daya_puskesmas[0]['parkir_puskesmas_keliling'][0]['renovasi'] ?? "" }}</td>
                <td class="column25">
                    @if (isset($identitasPuskesmas->sumber_daya_puskesmas[0]['parkir_puskesmas_keliling'][0]['kondisi']))
                        @if (isset($identitasPuskesmas->wilayahKerja) && $identitasPuskesmas->sumber_daya_puskesmas[0]['parkir_puskesmas_keliling'][0]['kondisi'] === 1)
                            Baik
                        @elseif ($identitasPuskesmas->sumber_daya_puskesmas[0]['parkir_puskesmas_keliling'][0]['kondisi'] === 1)
                            Rusak ringan
                        @elseif ($identitasPuskesmas->sumber_daya_puskesmas[0]['parkir_puskesmas_keliling'][0]['kondisi'] === 3)
                            Rusak sedang
                        @else
                            Rusak berat
                        @endif
                    @else
                        Rusak berat
                    @endif
                </td>
            </tr>--}}
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
            <td class="column40" colspan="2">
                <ol>
                    @php
                        $komponen = isset($identitasPuskesmas->sumber_daya_puskesmas[0]['sumber_listrik']) && 
                            is_array($identitasPuskesmas->sumber_daya_puskesmas[0]['sumber_listrik']) 
                            ? $identitasPuskesmas->sumber_daya_puskesmas[0]['sumber_listrik'] 
                            : [];
                        if (in_array(1, $komponen)) {
                            echo '<li>PLN</li>';
                        }
                        if (in_array(2, $komponen)) {
                            echo '<li>Diesel</li>';
                        }
                        if (in_array(3, $komponen)) {
                            echo '<li>Generator</li>';
                        }
                        if (in_array(4, $komponen)) {
                            echo '<li>Tenaga surya</li>';
                        }
                        if (in_array(4, $komponen)) {
                            echo '<li>lain</li>';
                        }
                    @endphp
                </ol>
            </td>
        </tr>
        <tr>
            <td class="column5"></td>
            <td class="column55"><span>&nbsp;&nbsp;</span>2) Waktu ketersediaan listrik</td>
            <td class="column40" colspan="2">
                @if (isset($identitasPuskesmas->sumber_daya_puskesmas[0]['waktu_ketersediaan_listrik']))
                    @if (isset($identitasPuskesmas->wilayahKerja) && $identitasPuskesmas->sumber_daya_puskesmas[0]['waktu_ketersediaan_listrik'] === '24_jam')
                        24 jam/hari
                    @else
                        <24 jam/hari
                    @endif
                @else
                    <24 jam/hari
                @endif
            </td>
        </tr>
        <tr>
            <td class="column5"></td>
            <td class="column55"><span>&nbsp;&nbsp;</span>3) Daya listrik terpasang</td>
            <td class="column15">{{ number_format($identitasPuskesmas->sumber_daya_puskesmas[0]['daya_listrik_terpasang'] ?? 0, 0, ',', '.') }}</td>
            <td class="column25">watt</td>
        </tr>
        <tr>
            <td class="column5"></td>
            <td class="column55"><span>&nbsp;&nbsp;</span>4) Jumlah genset yang berfungsi</td>
            <td class="column15">{{ number_format($identitasPuskesmas->sumber_daya_puskesmas[0]['jumlah_genset_berfungsi'] ?? 0, 0, ',', '.') }}</td>
            <td class="column25">watt</td>
        </tr>
        <tr>
            <td class="column5"></td>
            <td class="column55"><span>&nbsp;&nbsp;</span>5) Kapasitas genset yg berfungsi</td>
            <td class="column15">{{ number_format($identitasPuskesmas->sumber_daya_puskesmas[0]['kapasitas_genset_berfungsi'] ?? 0, 0, ',', '.') }}</td>
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
            <td class="column40" colspan="2">
                @if (isset($identitasPuskesmas->sumber_daya_puskesmas[0]['telepon_kabel']))
                    @if (isset($identitasPuskesmas->wilayahKerja) && $identitasPuskesmas->sumber_daya_puskesmas[0]['telepon_kabel'] === 'ada_dan_baik')
                        Ada dan baik
                    @elseif ($identitasPuskesmas->sumber_daya_puskesmas[0]['telepon_kabel'] === 'ada_tapi_tidak_bisa_dipakai')
                        Ada, tetapi tidak bisa dipakai/rusak
                    @else
                        Tidak ada
                    @endif
                @else
                    Tidak ada
                @endif
            </td>
        </tr>
        <tr>
            <td class="column5"></td>
            <td class="column55"><span>&nbsp;&nbsp;</span>2) Telepon seluler</td>
            <td class="column40" colspan="2">
                @if (isset($identitasPuskesmas->sumber_daya_puskesmas[0]['telepon_seluler']))
                    @if (isset($identitasPuskesmas->wilayahKerja) && $identitasPuskesmas->sumber_daya_puskesmas[0]['telepon_seluler'] === 'ada_dan_baik')
                        Ada dan baik
                    @elseif ($identitasPuskesmas->sumber_daya_puskesmas[0]['telepon_seluler'] === 'ada_tapi_tidak_bisa_dipakai')
                        Ada, tetapi tidak bisa dipakai/rusak
                    @else
                        Tidak ada
                    @endif
                @else
                    Tidak ada
                @endif
            </td>
        </tr>
        <tr>
            <td class="column5"></td>
            <td class="column55"><span>&nbsp;&nbsp;</span>3) Radio komunikasi</td>
            <td class="column40" colspan="2">
                @if (isset($identitasPuskesmas->sumber_daya_puskesmas[0]['radio_komunikasi']))
                    @if (isset($identitasPuskesmas->wilayahKerja) && $identitasPuskesmas->sumber_daya_puskesmas[0]['radio_komunikasi'] === 'ada_dan_baik')
                        Ada dan baik
                    @elseif ($identitasPuskesmas->sumber_daya_puskesmas[0]['radio_komunikasi'] === 'ada_tapi_tidak_bisa_dipakai')
                        Ada, tetapi tidak bisa dipakai/rusak
                    @else
                        Tidak ada
                    @endif
                @else
                    Tidak ada
                @endif
            </td>
        </tr>
        <tr>
            <td class="column5"></td>
            <td class="column55"><span>&nbsp;&nbsp;</span>4) Alat komunikasi lain</td>
            <td class="column40" colspan="2">
                @if (isset($identitasPuskesmas->sumber_daya_puskesmas[0]['alat_komunikasi_lain']))
                    @if (isset($identitasPuskesmas->wilayahKerja) && $identitasPuskesmas->sumber_daya_puskesmas[0]['alat_komunikasi_lain'] === 'ada_dan_baik')
                        Ada dan baik
                    @elseif ($identitasPuskesmas->sumber_daya_puskesmas[0]['alat_komunikasi_lain'] === 'ada_tapi_tidak_bisa_dipakai')
                        Ada, tetapi tidak bisa dipakai/rusak
                    @else
                        Tidak ada
                    @endif
                @else
                    Tidak ada
                @endif
            </td>
        </tr>
        <tr>
            <td class="column5"></td>
            <td class="column55"><span>&nbsp;&nbsp;</span>5) Jaringan internet</td>
            <td class="column40" colspan="2">
                @if (isset($identitasPuskesmas->sumber_daya_puskesmas[0]['jaringan_internet']))
                    @if (isset($identitasPuskesmas->wilayahKerja) && $identitasPuskesmas->sumber_daya_puskesmas[0]['jaringan_internet'] === 'ada_dan_baik')
                        Ada dan baik
                    @elseif ($identitasPuskesmas->sumber_daya_puskesmas[0]['jaringan_internet'] === 'ada_tapi_tidak_bisa_dipakai')
                        Ada, tetapi tidak bisa dipakai/rusak
                    @else
                        Tidak ada
                    @endif
                @else
                    Tidak ada
                @endif
            </td>
        </tr>
        <tr>
            <td class="column5"></td>
            <td class="column55">c. Jumlah komputer yang berfungsi baik</td>
            <td class="column15">{{ number_format($identitasPuskesmas->sumber_daya_puskesmas[0]['jumlah_komputer_berfungsi_baik'] ?? 0, 0, ',', '.') }}</td>
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
            <td class="column15">{{ number_format($identitasPuskesmas->sumber_daya_puskesmas[0]['jumlah_kendaraan_roda_4_double_gardan_kondisi_baik'] ?? 0, 0, ',', '.') }}</td>
            <td class="column25">buah</td>
        </tr>
        <tr>
            <td class="column5"></td>
            <td class="column55"><span>&nbsp;&nbsp;&nbsp;&nbsp;</span>b) Rusak ringan</td>
            <td class="column15">{{ number_format($identitasPuskesmas->sumber_daya_puskesmas[0]['jumlah_kendaraan_roda_4_double_gardan_kondisi_rusak_ringan'] ?? 0, 0, ',', '.') }}</td>
            <td class="column25">buah</td>
        </tr>
        <tr>
            <td class="column5"></td>
            <td class="column55"><span>&nbsp;&nbsp;&nbsp;&nbsp;</span>c) Rusak berat</td>
            <td class="column15">{{ number_format($identitasPuskesmas->sumber_daya_puskesmas[0]['jumlah_kendaraan_roda_4_double_gardan_kondisi_rusak_berat'] ?? 0, 0, ',', '.') }}</td>
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
            <td class="column15">{{ number_format($identitasPuskesmas->sumber_daya_puskesmas[0]['jumlah_kendaraan_roda_4_single_gardan_kondisi_baik'] ?? 0, 0, ',', '.') }}</td>
            <td class="column25">buah</td>
        </tr>
        <tr>
            <td class="column5"></td>
            <td class="column55"><span>&nbsp;&nbsp;&nbsp;&nbsp;</span>b) Rusak ringan</td>
            <td class="column15">{{ number_format($identitasPuskesmas->sumber_daya_puskesmas[0]['jumlah_kendaraan_roda_4_single_gardan_kondisi_rusak_ringan'] ?? 0, 0, ',', '.') }}</td>
            <td class="column25">buah</td>
        </tr>
        <tr>
            <td class="column5"></td>
            <td class="column55"><span>&nbsp;&nbsp;&nbsp;&nbsp;</span>c) Rusak berat</td>
            <td class="column15">{{ number_format($identitasPuskesmas->sumber_daya_puskesmas[0]['jumlah_kendaraan_roda_4_single_gardan_kondisi_rusak_berat'] ?? 0, 0, ',', '.') }}</td>
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
            <td class="column15">{{ number_format($identitasPuskesmas->sumber_daya_puskesmas[0]['jumlah_kendaraan_perairan_kondisi_baik'] ?? 0, 0, ',', '.') }}</td>
            <td class="column25">buah</td>
        </tr>
        <tr>
            <td class="column5"></td>
            <td class="column55"><span>&nbsp;&nbsp;&nbsp;&nbsp;</span>b) Rusak ringan</td>
            <td class="column15">{{ number_format($identitasPuskesmas->sumber_daya_puskesmas[0]['jumlah_kendaraan_perairan_kondisi_rusak_ringan'] ?? 0, 0, ',', '.') }}</td>
            <td class="column25">buah</td>
        </tr>
        <tr>
            <td class="column5"></td>
            <td class="column55"><span>&nbsp;&nbsp;&nbsp;&nbsp;</span>c) Rusak berat</td>
            <td class="column15">{{ number_format($identitasPuskesmas->sumber_daya_puskesmas[0]['jumlah_kendaraan_perairan_kondisi_rusak_berat'] ?? 0, 0, ',', '.') }}</td>
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
            <td class="column15">{{ number_format($identitasPuskesmas->sumber_daya_puskesmas[0]['jumlah_kendaraan_sepeda_motor_kondisi_baik'] ?? 0, 0, ',', '.') }}</td>
            <td class="column25">buah</td>
        </tr>
        <tr>
            <td class="column5"></td>
            <td class="column55"><span>&nbsp;&nbsp;&nbsp;&nbsp;</span>b) Rusak ringan</td>
            <td class="column15">{{ number_format($identitasPuskesmas->sumber_daya_puskesmas[0]['jumlah_kendaraan_sepeda_motor_kondisi_rusak_ringan'] ?? 0, 0, ',', '.') }}</td>
            <td class="column25">buah</td>
        </tr>
        <tr>
            <td class="column5"></td>
            <td class="column55"><span>&nbsp;&nbsp;&nbsp;&nbsp;</span>c) Rusak berat</td>
            <td class="column15">{{ number_format($identitasPuskesmas->sumber_daya_puskesmas[0]['jumlah_kendaraan_sepeda_motor_kondisi_rusak_berat'] ?? 0, 0, ',', '.') }}</td>
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
            <td class="column15">{{ number_format($identitasPuskesmas->sumber_daya_puskesmas[0]['jumlah_kendaraan_sepeda_kondisi_baik'] ?? 0, 0, ',', '.') }}</td>
            <td class="column25">buah</td>
        </tr>
        <tr>
            <td class="column5"></td>
            <td class="column55"><span>&nbsp;&nbsp;&nbsp;&nbsp;</span>b) Rusak ringan</td>
            <td class="column15">{{ number_format($identitasPuskesmas->sumber_daya_puskesmas[0]['jumlah_kendaraan_sepeda_kondisi_rusak_ringan'] ?? 0, 0, ',', '.') }}</td>
            <td class="column25">buah</td>
        </tr>
        <tr>
            <td class="column5"></td>
            <td class="column55"><span>&nbsp;&nbsp;&nbsp;&nbsp;</span>c) Rusak berat</td>
            <td class="column15">{{ number_format($identitasPuskesmas->sumber_daya_puskesmas[0]['jumlah_kendaraan_sepeda_kondisi_rusak_berat'] ?? 0, 0, ',', '.') }}</td>
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
            <td class="column15">{{ number_format($identitasPuskesmas->sumber_daya_puskesmas[0]['jumlah_kendaraan_ambulance_kondisi_baik'] ?? 0, 0, ',', '.') }}</td>
            <td class="column25">buah</td>
        </tr>
        <tr>
            <td class="column5"></td>
            <td class="column55"><span>&nbsp;&nbsp;</span>b) Rusak ringan</td>
            <td class="column15">{{ number_format($identitasPuskesmas->sumber_daya_puskesmas[0]['jumlah_kendaraan_ambulance_kondisi_rusak_ringan'] ?? 0, 0, ',', '.') }}</td>
            <td class="column25">buah</td>
        </tr>
        <tr>
            <td class="column5"></td>
            <td class="column55"><span>&nbsp;&nbsp;</span>c) Rusak berat</td>
            <td class="column15">{{ number_format($identitasPuskesmas->sumber_daya_puskesmas[0]['jumlah_kendaraan_ambulance_kondisi_rusak_berat'] ?? 0, 0, ',', '.') }}</td>
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
            <td class="column40" colspan="2">
                @if (isset($identitasPuskesmas->sumber_daya_puskesmas[0]['air_bersih']))
                    @if (isset($identitasPuskesmas->wilayahKerja) && $identitasPuskesmas->sumber_daya_puskesmas[0]['air_bersih'] === 'ada_memenuhi_syarat')
                        Ada memenuhi syarat
                    @elseif ($identitasPuskesmas->sumber_daya_puskesmas[0]['air_bersih'] === 'ada_tidak_memenuhi_syarat')
                        Ada, tidak memenuhi syarat
                    @else
                        Tidak ada
                    @endif
                @else
                    Tidak ada
                @endif
            </td>
        </tr>
        <tr>
            <td class="column5"></td>
            <td class="column55"><span>&nbsp;&nbsp;</span>2) Air bersih tersedia 24 jam</td>
            <td class="column40" colspan="2">
                @if (isset($identitasPuskesmas->sumber_daya_puskesmas[0]['air_bersih_tersedia_24_jam']))
                    @if (isset($identitasPuskesmas->wilayahKerja) && $identitasPuskesmas->sumber_daya_puskesmas[0]['air_bersih_tersedia_24_jam'] === 1)
                        Ya
                    @else
                        Tidak
                    @endif
                @else
                    Tidak
                @endif
            </td>
        </tr>
        <tr>
            <td class="column5"></td>
            <td class="column55"><span>&nbsp;&nbsp;</span>3) Sumber air bersih     (bisa lebih dari satu)</td>
            <td class="column40" colspan="2">
                @if (isset($identitasPuskesmas->sumber_daya_puskesmas[0]['sumber_air_bersih']))
                    @if (isset($identitasPuskesmas->wilayahKerja) && $identitasPuskesmas->sumber_daya_puskesmas[0]['sumber_air_bersih'] === 'ada_memenuhi_syarat')
                        Ada memenuhi syarat
                    @elseif ($identitasPuskesmas->sumber_daya_puskesmas[0]['sumber_air_bersih'] === 'ada_tidak_memenuhi_syarat')
                        Ada, tidak memenuhi syarat
                    @else
                        Tidak ada
                    @endif
                @else
                    Tidak ada
                @endif
            </td>
        </tr>
        <tr>
            <td class="column5"></td>
            <td class="column55"><span>&nbsp;&nbsp;</span>4) Jamban</td>
            <td class="column40" colspan="2">
                @if (isset($identitasPuskesmas->sumber_daya_puskesmas[0]['insenerator']))
                    @if (isset($identitasPuskesmas->wilayahKerja) && $identitasPuskesmas->sumber_daya_puskesmas[0]['insenerator'] === 'ada_memenuhi_syarat')
                        Ada memenuhi syarat
                    @elseif ($identitasPuskesmas->sumber_daya_puskesmas[0]['insenerator'] === 'ada_tidak_memenuhi_syarat')
                        Ada, tidak memenuhi syarat
                    @else
                        Tidak ada
                    @endif
                @else
                    Tidak ada
                @endif
            </td>
        </tr>
        <tr>
            <td class="column5"></td>
            <td class="column55">g. Sarana pengelolaan limbah</td>
            <td class="column40 columGrey" colspan="2"></td>
        </tr>
        <tr>
            <td class="column5"></td>
            <td class="column55"><span>&nbsp;&nbsp;</span>1) Limbah padat (insenerator)</td>
            <td class="column40" colspan="2">
                @if (isset($identitasPuskesmas->sumber_daya_puskesmas[0]['insenerator']))
                    @if (isset($identitasPuskesmas->wilayahKerja) && $identitasPuskesmas->sumber_daya_puskesmas[0]['insenerator'] === 'ada_memenuhi_syarat')
                        Ada memenuhi syarat
                    @elseif ($identitasPuskesmas->sumber_daya_puskesmas[0]['insenerator'] === 'ada_tidak_memenuhi_syarat')
                        Ada, tidak memenuhi syarat
                    @else
                        Tidak ada
                    @endif
                @else
                    Tidak ada
                @endif
            </td>
        </tr>
        <tr>
            <td class="column5"></td>
            <td class="column55"><span>&nbsp;&nbsp;</span>2) Limbah cair (IPAL)</td>
            <td class="column40" colspan="2">
                @if (isset($identitasPuskesmas->sumber_daya_puskesmas[0]['ipal']))
                    @if (isset($identitasPuskesmas->wilayahKerja) && $identitasPuskesmas->sumber_daya_puskesmas[0]['ipal'] === 'ada_memenuhi_syarat')
                        Ada memenuhi syarat
                    @elseif ($identitasPuskesmas->sumber_daya_puskesmas[0]['ipal'] === 'ada_tidak_memenuhi_syarat')
                        Ada, tidak memenuhi syarat
                    @else
                        Tidak ada
                    @endif
                @else
                    Tidak ada
                @endif
            </td>
        </tr>
        <tr>
            <td class="column5"></td>
            <td class="column55"><span>&nbsp;&nbsp;</span>3) Septiktank</td>
            <td class="column40" colspan="2">
                @if (isset($identitasPuskesmas->sumber_daya_puskesmas[0]['septitank']))
                    @if (isset($identitasPuskesmas->wilayahKerja) && $identitasPuskesmas->sumber_daya_puskesmas[0]['septitank'] === 'ada_memenuhi_syarat')
                        Ada memenuhi syarat
                    @elseif ($identitasPuskesmas->sumber_daya_puskesmas[0]['septitank'] === 'ada_tidak_memenuhi_syarat')
                        Ada, tidak memenuhi syarat
                    @else
                        Tidak ada
                    @endif
                @else
                    Tidak ada
                @endif
            </td>
        </tr>
        <tr>
            <td class="column5"></td>
            <td class="column55"><span>&nbsp;&nbsp;</span>4) MOU limbah padat/B3 ke pihak lain</td>
            <td class="column40" colspan="2">
                @if (isset($identitasPuskesmas->sumber_daya_puskesmas[0]['mou_limbah_padat_b3_ke_pihak_lain']))
                    @if (isset($identitasPuskesmas->wilayahKerja) && $identitasPuskesmas->sumber_daya_puskesmas[0]['mou_limbah_padat_b3_ke_pihak_lain'] === 1)
                        Ada
                    @else
                        Tidak ada
                    @endif
                @else
                    Tidak ada
                @endif
            </td>
        </tr>
        <tr>
            <td class="column5"></td>
            <td class="column55"><span>&nbsp;&nbsp;</span>5) MOU limbah cair ke pihak berizin</td>
            <td class="column40" colspan="2">
                @if (isset($identitasPuskesmas->sumber_daya_puskesmas[0]['mou_limbah_cair_ke_pihak_berizin']))
                    @if (isset($identitasPuskesmas->wilayahKerja) && $identitasPuskesmas->sumber_daya_puskesmas[0]['mou_limbah_cair_ke_pihak_berizin'] === 1)
                        Ada
                    @else
                        Tidak ada
                    @endif
                @else
                    Tidak ada
                @endif
            </td>
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
            <td class="column15">{{ number_format($identitasPuskesmas->sumber_daya_puskesmas[0]['tabung_gas_o2_berfungsi'] ?? 0, 0, ',', '.') }}</td>
            <td class="column25">buah</td>
        </tr>
        <tr>
            <td class="column5"></td>
            <td class="column55"><span>&nbsp;&nbsp;&nbsp;&nbsp;</span>b) Tidak berfungsi</td>
            <td class="column15">{{ number_format($identitasPuskesmas->sumber_daya_puskesmas[0]['tabung_gas_o2_tidak_berfungsi'] ?? 0, 0, ',', '.') }}</td>
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
            <td class="column15">{{ number_format($identitasPuskesmas->sumber_daya_puskesmas[0]['oksigen_konsentrator_berfungsi'] ?? 0, 0, ',', '.') }}</td>
            <td class="column25">buah</td>
        </tr>
        <tr>
            <td class="column5"></td>
            <td class="column55"><span>&nbsp;&nbsp;&nbsp;&nbsp;</span>b) Tidak berfungsi</td>
            <td class="column15">{{ number_format($identitasPuskesmas->sumber_daya_puskesmas[0]['oksigen_konsentrator_tidak_berfungsi'] ?? 0, 0, ',', '.') }}</td>
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
            <td class="column15">{{ number_format($identitasPuskesmas->sumber_daya_puskesmas[0]['alat_pemadam_kebakaran_berfungsi'] ?? 0, 0, ',', '.') }}</td>
            <td class="column25">buah</td>
        </tr>
        <tr>
            <td class="column5"></td>
            <td class="column55"><span>&nbsp;&nbsp;</span>b) Tidak berfungsi</td>
            <td class="column15">{{ number_format($identitasPuskesmas->sumber_daya_puskesmas[0]['alat_pemadam_kebakaran_tidak_berfungsi'] ?? 0, 0, ',', '.') }}</td>
            <td class="column25">buah</td>
        </tr>
        <tr>
            <td class="column5"></td>
            <td class="column55">j. Sistem proteksi petir</td>
            <td class="column40" colspan="2">
                @if (isset($identitasPuskesmas->sumber_daya_puskesmas[0]['sistem_proteksi_petir']))
                    @if (isset($identitasPuskesmas->wilayahKerja) && $identitasPuskesmas->sumber_daya_puskesmas[0]['sistem_proteksi_petir'] === 1)
                        Ada
                    @else
                        Tidak ada
                    @endif
                @else
                    Tidak ada
                @endif
            </td>
        </tr>
        <tr>
            <td class="column5"></td>
            <td class="column55">k. Jumlah AC</td>
            <td class="column40 columGrey" colspan="2"></td>
        </tr>
        <tr>
            <td class="column5"></td>
            <td class="column55"><span>&nbsp;&nbsp;</span>a) Berfungsi</td>
            <td class="column15">{{ number_format($identitasPuskesmas->sumber_daya_puskesmas[0]['jumlah_ac_berfungsi'] ?? 0, 0, ',', '.') }}</td>
            <td class="column25">buah</td>
        </tr>
        <tr>
            <td class="column5"></td>
            <td class="column55"><span>&nbsp;&nbsp;</span>b) Tidak berfungsi</td>
            <td class="column15">{{ number_format($identitasPuskesmas->sumber_daya_puskesmas[0]['jumlah_ac_tidak_berfungsi'] ?? 0, 0, ',', '.') }}</td>
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
            <td class="column15">{{ number_format($identitasPuskesmas->sumber_daya_puskesmas[0]['jumlah_puskesmas_pembantu'] ?? 0, 0, ',', '.') }}</td>
            <td class="column25">buah</td>
        </tr>
        <tr>
            <td class="column5"></td>
            <td class="column55"><span>&nbsp;&nbsp;</span>b. Jumlah Praktik Bidan Desa</td>
            <td class="column15">{{ number_format($identitasPuskesmas->sumber_daya_puskesmas[0]['jumlah_praktik_bidan_desa'] ?? 0, 0, ',', '.') }}</td>
            <td class="column25">buah</td>
        </tr>
        <tr>
            <td class="column5"></td>
            <td class="column55"><span>&nbsp;&nbsp;</span>c. Puskesmas Keliling</td>
            <td class="column15">{{ number_format($identitasPuskesmas->sumber_daya_puskesmas[0]['jumlah_puskesmas_keliling'] ?? 0, 0, ',', '.') }}</td>
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
            <td class="column15">{{ number_format($identitasPuskesmas->sumber_daya_puskesmas[0]['jumlah_klinik_pratama'] ?? 0, 0, ',', '.') }}</td>
            <td class="column25">buah</td>
        </tr>
        <tr>
            <td class="column5"></td>
            <td class="column55"><span>&nbsp;&nbsp;</span>b. Jumlah klinik utama</td>
            <td class="column15">{{ number_format($identitasPuskesmas->sumber_daya_puskesmas[0]['jumlah_klinik_utama'] ?? 0, 0, ',', '.') }}</td>
            <td class="column25">buah</td>
        </tr>
        <tr>
            <td class="column5"></td>
            <td class="column55"><span>&nbsp;&nbsp;</span>c. Jumlah tempat praktik mandiri dokter</td>
            <td class="column15">{{ number_format($identitasPuskesmas->sumber_daya_puskesmas[0]['jumlah_tempat_praktik_mandiri_dokter'] ?? 0, 0, ',', '.') }}</td>
            <td class="column25">buah</td>
        </tr>
        <tr>
            <td class="column5"></td>
            <td class="column55"><span>&nbsp;&nbsp;</span>d. Jumlah tempat praktik mandiri dokter gigi</td>
            <td class="column15">{{ number_format($identitasPuskesmas->sumber_daya_puskesmas[0]['jumlah_tempat_praktik_mandiri_dokter_gigi'] ?? 0, 0, ',', '.') }}</td>
            <td class="column25">buah</td>
        </tr>
        <tr>
            <td class="column5"></td>
            <td class="column55"><span>&nbsp;&nbsp;</span>e. Jumlah tempat praktik mandiri bidan</td>
            <td class="column15">{{ number_format($identitasPuskesmas->sumber_daya_puskesmas[0]['jumlah_tempat_praktik_mandiri_bidan'] ?? 0, 0, ',', '.') }}</td>
            <td class="column25">buah</td>
        </tr>
        <tr>
            <td class="column5"></td>
            <td class="column55"><span>&nbsp;&nbsp;</span>f. Jumlah tempat praktik mandiri perawat</td>
            <td class="column15">{{ number_format($identitasPuskesmas->sumber_daya_puskesmas[0]['jumlah_tempat_praktik_mandiri_perawat'] ?? 0, 0, ',', '.') }}</td>
            <td class="column25">buah</td>
        </tr>
        <tr>
            <td class="column5"></td>
            <td class="column55"><span>&nbsp;&nbsp;</span>g. Jumlah rumah sakit kelas D Pratama</td>
            <td class="column15">{{ number_format($identitasPuskesmas->sumber_daya_puskesmas[0]['jumlah_rs_kelas_d_pratama'] ?? 0, 0, ',', '.') }}</td>
            <td class="column25">buah</td>
        </tr>
        <tr>
            <td class="column5"></td>
            <td class="column55"><span>&nbsp;&nbsp;</span>h. Jumlah apotek</td>
            <td class="column15">{{ number_format($identitasPuskesmas->sumber_daya_puskesmas[0]['jumlah_apotek'] ?? 0, 0, ',', '.') }}</td>
            <td class="column25">buah</td>
        </tr>
        <tr>
            <td class="column5"></td>
            <td class="column55"><span>&nbsp;&nbsp;</span>i. Jumlah optik</td>
            <td class="column15">{{ number_format($identitasPuskesmas->sumber_daya_puskesmas[0]['jumlah_jumlah_optikac_tidak_berfungsi'] ?? 0, 0, ',', '.') }}</td>
            <td class="column25">buah</td>
        </tr>
        <tr>
            <td class="column5"></td>
            <td class="column55"><span>&nbsp;&nbsp;</span>j. Jumlah laboratorium klinik</td>
            <td class="column15">{{ number_format($identitasPuskesmas->sumber_daya_puskesmas[0]['jumlah_lab_klinik'] ?? 0, 0, ',', '.') }}</td>
            <td class="column25">buah</td>
        </tr>
        <tr>
            <td class="column5"></td>
            <td class="column55"><span>&nbsp;&nbsp;</span>k. Jumlah Fasilitas Kesehatan Tradisional/ Griya Sehat</td>
            <td class="column15">{{ number_format($identitasPuskesmas->sumber_daya_puskesmas[0]['jumlah_faskes_tradisional'] ?? 0, 0, ',', '.') }}</td>
            <td class="column25">buah</td>
        </tr>
        <tr>
            <td class="column5"></td>
            <td class="column55"><span>&nbsp;&nbsp;</span>l. Ada program kerja sama antara puskesmas, UTD dan rumah sakit dalam pelayanan darah untuk menurunkan Angka Kematian Ibu (AKI) </td>
            <td class="column40" colspan="2">
                @if (isset($identitasPuskesmas->sumber_daya_puskesmas[0]['ada_program_kerjasama_penurunan_aki']))
                    @if (isset($identitasPuskesmas->wilayahKerja) && $identitasPuskesmas->sumber_daya_puskesmas[0]['ada_program_kerjasama_penurunan_aki'] === 1)
                        Ada
                    @else
                        Tidak ada
                    @endif
                @else
                    Tidak ada
                @endif
            </td>
        </tr>
        <tr>
            <td class="column5">3</td>
            <td class="column55">Jumlah RUTAN dan LAPAS</td>
            <td class="column15">{{ number_format($identitasPuskesmas->sumber_daya_puskesmas[0]['jumlah_rutan_dan_lapas'] ?? 0, 0, ',', '.') }}</td>
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
            <td class="column15">{{ number_format($identitasPuskesmas->sumber_daya_puskesmas[0]['jumlah_posyandu_pratama'] ?? 0, 0, ',', '.') }}</td>
            <td class="column25">buah</td>
        </tr>
        <tr>
            <td class="column5"></td>
            <td class="column55"><span>&nbsp;&nbsp;&nbsp;&nbsp;</span>b)  Posyandu Madya</td>
            <td class="column15">{{ number_format($identitasPuskesmas->sumber_daya_puskesmas[0]['jumlah_posyandu_madya'] ?? 0, 0, ',', '.') }}</td>
            <td class="column25">buah</td>
        </tr>
        <tr>
            <td class="column5"></td>
            <td class="column55"><span>&nbsp;&nbsp;&nbsp;&nbsp;</span>c)  Posyandu Purnama</td>
            <td class="column15">{{ number_format($identitasPuskesmas->sumber_daya_puskesmas[0]['jumlah_posyandu_purnama'] ?? 0, 0, ',', '.') }}</td>
            <td class="column25">buah</td>
        </tr>
        <tr>
            <td class="column5"></td>
            <td class="column55"><span>&nbsp;&nbsp;&nbsp;&nbsp;</span>d)  Posyandu Mandiri</td>
            <td class="column15">{{ number_format($identitasPuskesmas->sumber_daya_puskesmas[0]['jumlah_posyandu_mandiri'] ?? 0, 0, ',', '.') }}</td>
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
            <td class="column15">{{ number_format($identitasPuskesmas->sumber_daya_puskesmas[0]['jumlah_posyandu_remaja_pratama'] ?? 0, 0, ',', '.') }}</td>
            <td class="column25">buah</td>
        </tr>
        <tr>
            <td class="column5"></td>
            <td class="column55"><span>&nbsp;&nbsp;&nbsp;&nbsp;</span>b)  Posyandu Remaja Madya</td>
            <td class="column15">{{ number_format($identitasPuskesmas->sumber_daya_puskesmas[0]['jumlah_posyandu_remaja_madya'] ?? 0, 0, ',', '.') }}</td>
            <td class="column25">buah</td>
        </tr>
        <tr>
            <td class="column5"></td>
            <td class="column55"><span>&nbsp;&nbsp;&nbsp;&nbsp;</span>c)  Posyandu Remaja Purnama</td>
            <td class="column15">{{ number_format($identitasPuskesmas->sumber_daya_puskesmas[0]['jumlah_posyandu_remaja_purnama'] ?? 0, 0, ',', '.') }}</td>
            <td class="column25">buah</td>
        </tr>
        <tr>
            <td class="column5"></td>
            <td class="column55"><span>&nbsp;&nbsp;&nbsp;&nbsp;</span>d)  Posyandu Remaja Mandiri</td>
            <td class="column15">{{ number_format($identitasPuskesmas->sumber_daya_puskesmas[0]['jumlah_posyandu_remaja_mandiri'] ?? 0, 0, ',', '.') }}</td>
            <td class="column25">buah</td>
        </tr>
        <tr>
            <td class="column5"></td>
            <td class="column55"><span>&nbsp;&nbsp;</span>3)  Posyandu Lansia</td>
            <td class="column15">{{ number_format($identitasPuskesmas->sumber_daya_puskesmas[0]['jumlah_posyandu_lansia'] ?? 0, 0, ',', '.') }}</td>
            <td class="column25">buah</td>
        </tr>
        <tr>
            <td class="column5"></td>
            <td class="column55">b. Jumlah Pos Kesehatan Desa (Poskesdes)</td>
            <td class="column15">{{ number_format($identitasPuskesmas->sumber_daya_puskesmas[0]['jumlah_poskesdes'] ?? 0, 0, ',', '.') }}</td>
            <td class="column25">buah</td>
        </tr>
        <tr>
            <td class="column5"></td>
            <td class="column55">c. Jumlah Pos Kesehatan Pesantren (Poskestren)</td>
            <td class="column15">{{ number_format($identitasPuskesmas->sumber_daya_puskesmas[0]['jumlah_poskestren'] ?? 0, 0, ',', '.') }}</td>
            <td class="column25">buah</td>
        </tr>
        <tr>
            <td class="column5"></td>
            <td class="column55">d. Jumlah Posbindu PTM aktif</td>
            <td class="column15">{{ number_format($identitasPuskesmas->sumber_daya_puskesmas[0]['jumlah_posbindu_ptm_aktif'] ?? 0, 0, ',', '.') }}</td>
            <td class="column25">buah</td>
        </tr>
        <tr>
            <td class="column5"></td>
            <td class="column55">e. Jumlah Posbindu PTM aktif</td>
            <td class="column15">{{ number_format($identitasPuskesmas->sumber_daya_puskesmas[0]['jumlah_desa_dengan_posbindu_ptm_aktif'] ?? 0, 0, ',', '.') }}</td>
            <td class="column25">buah</td>
        </tr>
        <tr>
            <td class="column5"></td>
            <td class="column55">f. Jumlah Pos TB Desa aktif</td>
            <td class="column15">{{ number_format($identitasPuskesmas->sumber_daya_puskesmas[0]['jumlah_pos_tb_desa_aktif'] ?? 0, 0, ',', '.') }}</td>
            <td class="column25">buah</td>
        </tr>
        <tr>
            <td class="column5"></td>
            <td class="column55">g.  Jumlah Pos Malaria Desa (Posmaldes) aktif</td>
            <td class="column15">{{ number_format($identitasPuskesmas->sumber_daya_puskesmas[0]['jumlah_posmaldes_aktif'] ?? 0, 0, ',', '.') }}</td>
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
            <td class="column15">{{ number_format($identitasPuskesmas->sumber_daya_puskesmas[0]['jumlah_pos_ukk_pratama'] ?? 0, 0, ',', '.') }}</td>
            <td class="column25">buah</td>
        </tr>
        <tr>
            <td class="column5"></td>
            <td class="column55"><span>&nbsp;&nbsp;</span>2) Pos UKK Madya</td>
            <td class="column15">{{ number_format($identitasPuskesmas->sumber_daya_puskesmas[0]['jumlah_pos_ukk_madya'] ?? 0, 0, ',', '.') }}</td>
            <td class="column25">buah</td>
        </tr>
        <tr>
            <td class="column5"></td>
            <td class="column55"><span>&nbsp;&nbsp;</span>3) Pos UKK Purnama</td>
            <td class="column15">{{ number_format($identitasPuskesmas->sumber_daya_puskesmas[0]['jumlah_pos_ukk_purnama'] ?? 0, 0, ',', '.') }}</td>
            <td class="column25">buah</td>
        </tr>
        <tr>
            <td class="column5"></td>
            <td class="column55"><span>&nbsp;&nbsp;</span>4) Pos UKK Mandiri</td>
            <td class="column15">{{ number_format($identitasPuskesmas->sumber_daya_puskesmas[0]['jumlah_pos_ukk_mandiri'] ?? 0, 0, ',', '.') }}</td>
            <td class="column25">buah</td>
        </tr>
        <tr>
            <td class="column5"></td>
            <td class="column55">i. Jumlah Pos Obat Desa (POD)</td>
            <td class="column15">{{ number_format($identitasPuskesmas->sumber_daya_puskesmas[0]['jumlah_pod'] ?? 0, 0, ',', '.') }}</td>
            <td class="column25">buah</td>
        </tr>
        <tr>
            <td class="column5"></td>
            <td class="column55">j. Jumlah POLINDES (Pondok Bersalin Desa)</td>
            <td class="column15">{{ number_format($identitasPuskesmas->sumber_daya_puskesmas[0]['jumlah_polindes'] ?? 0, 0, ',', '.') }}</td>
            <td class="column25">buah</td>
        </tr>
        <tr>
            <td class="column5"></td>
            <td class="column55">k. Jumlah desa dengan kegiatan dana sehat</td>
            <td class="column15">{{ number_format($identitasPuskesmas->sumber_daya_puskesmas[0]['jumlah_desa_dengan_kegiatan_dana_sehat'] ?? 0, 0, ',', '.') }}</td>
            <td class="column25">buah</td>
        </tr>
        <tr>
            <td class="column5"></td>
            <td class="column55">l. Jumlah peserta dana sehat </td>
            <td class="column15">{{ number_format($identitasPuskesmas->sumber_daya_puskesmas[0]['jumlah_peserta_dana_sehat'] ?? 0, 0, ',', '.') }}</td>
            <td class="column25">buah</td>
        </tr>
        <tr>
            <td class="column5"></td>
            <td class="column55">m. Jumlah UKBM lainnya</td>
            <td class="column15">{{ number_format($identitasPuskesmas->sumber_daya_puskesmas[0]['jumlah_ukbm_lainnya'] ?? 0, 0, ',', '.') }}</td>
            <td class="column25">buah</td>
        </tr>
        <tr>
            <td class="column5"></td>
            <td class="column55">n. Jumlah kelompok kerja operasional UKBM </td>
            <td class="column15">{{ number_format($identitasPuskesmas->sumber_daya_puskesmas[0]['jumlah_pokja_operasional_ukbm'] ?? 0, 0, ',', '.') }}</td>
            <td class="column25">buah</td>
        </tr>
        <tr>
            <td class="column5"></td>
            <td class="column55">o. Jumlah Pokjanal Posyandu </td>
            <td class="column15">{{ number_format($identitasPuskesmas->sumber_daya_puskesmas[0]['jumlah_pokjanal_posyandu'] ?? 0, 0, ',', '.') }}</td>
            <td class="column25">buah</td>
        </tr>
        <tr>
            <td class="column5"></td>
            <td class="column55">p. Jumlah kelompok atau Forum Peduli Kesehatan</td>
            <td class="column15">{{ number_format($identitasPuskesmas->sumber_daya_puskesmas[0]['jumlah_kelompok_peduli_kesehatan'] ?? 0, 0, ',', '.') }}</td>
            <td class="column25">buah</td>
        </tr>
        <tr>
            <td class="column5"></td>
            <td class="column55">q. Jumlah Forum Desa/Kelurahan Siaga Aktif </td>
            <td class="column15">{{ number_format($identitasPuskesmas->sumber_daya_puskesmas[0]['jumlah_forum_desa_siaga_aktif'] ?? 0, 0, ',', '.') }}</td>
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
            <td class="column15">{{ number_format($identitasPuskesmas->sumber_daya_puskesmas[0]['jumlah_kader_posyandu'] ?? 0, 0, ',', '.') }}</td>
            <td class="column25">orang</td>
        </tr>
        <tr>
            <td class="column5"></td>
            <td class="column55"><span>&nbsp;&nbsp;</span>2) Kader Poskesdes </td>
            <td class="column15">{{ number_format($identitasPuskesmas->sumber_daya_puskesmas[0]['jumlah_kader_poskesdes'] ?? 0, 0, ',', '.') }}</td>
            <td class="column25">orang</td>
        </tr>
        <tr>
            <td class="column5"></td>
            <td class="column55"><span>&nbsp;&nbsp;</span>3) Kader Poskestren</td>
            <td class="column15">{{ number_format($identitasPuskesmas->sumber_daya_puskesmas[0]['jumlah_kader_poskestren'] ?? 0, 0, ',', '.') }}</td>
            <td class="column25">orang</td>
        </tr>
        <tr>
            <td class="column5"></td>
            <td class="column55"><span>&nbsp;&nbsp;</span>4) Petugas Pelaksana Posbindu PTM (kader)</td>
            <td class="column15">{{ number_format($identitasPuskesmas->sumber_daya_puskesmas[0]['jumlah_petugas_pelaksana_posbindu_ptm'] ?? 0, 0, ',', '.') }}</td>
            <td class="column25">orang</td>
        </tr>
        <tr>
            <td class="column5"></td>
            <td class="column55"><span>&nbsp;&nbsp;</span>5) Kader Pos TB desa</td>
            <td class="column15">{{ number_format($identitasPuskesmas->sumber_daya_puskesmas[0]['jumlah_kader_pos_tb_desa'] ?? 0, 0, ',', '.') }}</td>
            <td class="column25">orang</td>
        </tr>
        <tr>
            <td class="column5"></td>
            <td class="column55"><span>&nbsp;&nbsp;</span>6) Kader Posmaldes</td>
            <td class="column15">{{ number_format($identitasPuskesmas->sumber_daya_puskesmas[0]['jumlah_kader_posmaldes'] ?? 0, 0, ',', '.') }}</td>
            <td class="column25">orang</td>
        </tr>
        <tr>
            <td class="column5"></td>
            <td class="column55"><span>&nbsp;&nbsp;</span>7) Kader Pos UKK</td>
            <td class="column15">{{ number_format($identitasPuskesmas->sumber_daya_puskesmas[0]['jumlah_kader_pos_ukk'] ?? 0, 0, ',', '.') }}</td>
            <td class="column25">orang</td>
        </tr>
        <tr>
            <td class="column5"></td>
            <td class="column55"><span>&nbsp;&nbsp;</span>8) Kader desa siaga aktif </td>
            <td class="column15">{{ number_format($identitasPuskesmas->sumber_daya_puskesmas[0]['jumlah_kader_desa_siaga_aktif'] ?? 0, 0, ',', '.') }}</td>
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
            <td class="column15">{{ number_format($identitasPuskesmas->sumber_daya_puskesmas[0]['jumlah_ormas'] ?? 0, 0, ',', '.') }}</td>
            <td class="column25">buah</td>
        </tr>
        <tr>
            <td class="column5"></td>
            <td class="column55"><span>&nbsp;&nbsp;</span>2) Dunia usaha</td>
            <td class="column15">{{ number_format($identitasPuskesmas->sumber_daya_puskesmas[0]['jumlah_dunia_usaha'] ?? 0, 0, ',', '.') }}</td>
            <td class="column25">buah</td>
        </tr>
        <tr>
            <td class="column5"></td>
            <td class="column55"><span>&nbsp;&nbsp;</span>3) INGO</td>
            <td class="column15">{{ number_format($identitasPuskesmas->sumber_daya_puskesmas[0]['jumlah_ingo'] ?? 0, 0, ',', '.') }}</td>
            <td class="column25">buah</td>
        </tr>
        <tr>
            <td class="column5"></td>
            <td class="column55"><span>&nbsp;&nbsp;</span>4) Mitra lainnya</td>
            <td class="column15">{{ number_format($identitasPuskesmas->sumber_daya_puskesmas[0]['jumlah_mitra_lainnya'] ?? 0, 0, ',', '.') }}</td>
            <td class="column25">buah</td>
        </tr>
        <tr>
            <td class="column5"></td>
            <td class="column55">t. Jumlah kebijakan publik berwawasan kesehatan</td>
            <td class="column15">{{ number_format($identitasPuskesmas->sumber_daya_puskesmas[0]['jumlah_kebijakan_publik_berwawasan_kesehatan'] ?? 0, 0, ',', '.') }}</td>
            <td class="column25">buah</td>
        </tr>
        <tr>
            <td class="column5">5</td>
            <td class="column55">Puskesmas dimanfaatkan sebagai wahana pendidikan tenaga kesehatan</td>
            <td class="column40" colspan="2">
                @if (isset($identitasPuskesmas->sumber_daya_puskesmas[0]['puskesmas_sebagai_pendidikan_nakes']))
                    @if (isset($identitasPuskesmas->wilayahKerja) && $identitasPuskesmas->sumber_daya_puskesmas[0]['puskesmas_sebagai_pendidikan_nakes'] === 1)
                        Ya
                    @else
                        Tidak
                    @endif
                @else
                    Tidak
                @endif
            </td>
        </tr>
        <tr>
            <td class="column5">6</td>
            <td class="column55">Pelayanan kesehatan bergerak</td>
            <td class="column40" colspan="2">
                @if (isset($identitasPuskesmas->sumber_daya_puskesmas[0]['pelayanan_kesehatan_bergerak']))
                    @if (isset($identitasPuskesmas->wilayahKerja) && $identitasPuskesmas->sumber_daya_puskesmas[0]['pelayanan_kesehatan_bergerak'] === 1)
                        Ya
                    @else
                        Tidak
                    @endif
                @else
                    Tidak
                @endif
            </td>
        </tr>
        <tr>
            <td class="column5">7</td>
            <td class="column55">Pendidikan Dasar *) </td>
            <td class="column40 columGrey" colspan="2"></td>
        </tr>
        <tr>
            <td class="column5"></td>
            <td class="column55"><span>&nbsp;&nbsp;</span>a. Jumlah SD/sederajat</td>
            <td class="column15">{{ number_format($identitasPuskesmas->sumber_daya_puskesmas[0]['jumlah_sd'] ?? 0, 0, ',', '.') }}</td>
            <td class="column25">buah</td>
        </tr>
        <tr>
            <td class="column5"></td>
            <td class="column55"><span>&nbsp;&nbsp;</span>b. Jumlah SLTP/sederajat</td>
            <td class="column15">{{ number_format($identitasPuskesmas->sumber_daya_puskesmas[0]['jumlah_sltp'] ?? 0, 0, ',', '.') }}</td>
            <td class="column25">buah</td>
        </tr>
        <tr>
            <td class="column5"></td>
            <td class="column55"><span>&nbsp;&nbsp;</span>c. Jumlah SLTA/sederajat</td>
            <td class="column15">{{ number_format($identitasPuskesmas->sumber_daya_puskesmas[0]['jumlah_slta'] ?? 0, 0, ',', '.') }}</td>
            <td class="column25">buah</td>
        </tr>
    </table>
</body>
</html>
