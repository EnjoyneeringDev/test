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

        .column5 {
            width: 5%;
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
    @foreach ($identitasPuskesmas->sdm as $index => $dataSdm)
        <table>
            <thead>
                <tr>
                    <th class="column5">No</th>
                    <th class="column35">Uraian</th>
                    <th class="column60">Data</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="column5">F.</td>
                    <td class="column35">Sumber Daya Manusia Kesehatan (Formulir Data Kepegawaian) </td>
                    <td class="column60">Setiap pegawai puskesmas (Aparatur Sipil Negara/Kontrak/Honorer) wajib mengisi kartu kepegawaian puskesmas dan dilakukan perbaikan jika ada perubahan data. </td>
                </tr>
                <tr>
                    <td class="column5">1.</td>
                    <td class="column35">Identitas Pribadi</td>
                    <td class="column60 columGrey"></td>
                </tr>
                <tr>
                    <td class="column5"></td>
                    <td class="column35">a. NIK</td>
                    <td class="column60">{{ $dataSdm['nik'] ?? "" }}</td>
                </tr>
                <tr>
                    <td class="column5"></td>
                    <td class="column35">b. NIP/NRP</td>
                    <td class="column60">{{ $dataSdm['nip_nrp'] ?? "" }}</td>
                </tr>
                <tr>
                    <td class="column5"></td>
                    <td class="column35">c. No. Seri Kartu Pegawai</td>
                    <td class="column60">{{ $dataSdm['no_seri_kartu_pegawai'] ?? "" }}</td>
                </tr>
                <tr>
                    <td class="column5"></td>
                    <td class="column35">d. Nama Lengkap</td>
                    <td class="column60">{{ $dataSdm['nama_lengkap'] ?? "" }}</td>
                </tr>
                <tr>
                    <td class="column5"></td>
                    <td class="column35">e. Gelar di depan nama</td>
                    <td class="column60">{{ $dataSdm['gelar_depan_nama'] ?? "" }}</td>
                </tr>
                <tr>
                    <td class="column5"></td>
                    <td class="column35">f. Gelar di belakang nama</td>
                    <td class="column60">{{ $dataSdm['gelar_belakang_nama'] ?? "" }}</td>
                </tr>
                <tr>
                    <td class="column5"></td>
                    <td class="column35">g. Jenis Kelamin</td>
                    <td class="column60">
                        @if (isset($dataSdm['jenis_kelamin']))
                            @if ($dataSdm['jenis_kelamin'] === 'male')
                                Laki-laki
                            @else
                                Perempuan
                            @endif
                        @else
                            Perempuan
                        @endif
                    </td>
                </tr>
                <tr>
                    <td class="column5"></td>
                    <td class="column35">h. Tempat/tanggal lahir</td>
                    <td class="column60">{{ $dataSdm['tempat_lahir'] }}/{{ $dataSdm['tanggal_lahir'] }}</td>
                </tr>
                <tr>
                    <td class="column5"></td>
                    <td class="column35">i. Agama</td>
                    <td class="column60">
                        @if(isset($dataSdm['agama']))
                            @if ($dataSdm['agama'] === 'islam')
                                Islam
                            @elseif ($dataSdm['agama'] === 'kristen')
                                Kristen
                            @elseif ($dataSdm['agama'] === 'katolik')
                                Katolik
                            @elseif ($dataSdm['agama'] === 'hindu')
                                Hindu
                            @elseif ($dataSdm['agama'] === 'budha')
                                Budha
                            @else
                                Khonghucu
                            @endif
                        @else
                            Khonghucu
                        @endif
                    </td>
                </tr>
                <tr>
                    <td class="column5"></td>
                    <td class="column35">j. Status Perkawinan</td>
                    <td class="column60">
                        @if(isset($dataSdm['status_perkawinan']))
                            @if ($dataSdm['status_perkawinan'] === 'cerai_mati')
                                Cerai Mati
                            @elseif ($dataSdm['status_perkawinan'] === 'kawin')
                                Kawin
                            @elseif ($dataSdm['status_perkawinan'] === 'cerai_hidup')
                                Cerai Hidup
                            @else
                                Belum Kawin
                            @endif
                        @else
                            Belum Kawin
                        @endif
                    </td>
                </tr>
                <tr>
                    <td class="column5"></td>
                    <td class="column35">k. Alamat</td>
                    <td class="column60">{{ $dataSdm['alamat'] }}</td>
                </tr>
                <tr>
                    <td class="column5"></td>
                    <td class="column35">l. Alamat e-mail</td>
                    <td class="column60">{{ $dataSdm['email'] }}</td>
                </tr>
                <tr>
                    <td class="column5"></td>
                    <td class="column35">m. Telp/HP</td>
                    <td class="column60">{{ $dataSdm['telepon'] }}</td>
                </tr>
                <tr>
                    <td class="column5"></td>
                    <td class="column35">n. Tanggal berlaku STR</td>
                    <td class="column60">{{ \Carbon\Carbon::parse($dataSdm['tanggal_berlaku_str'])->translatedFormat('d F Y') }}</td>
                </tr>
                <tr>
                    <td class="column5"></td>
                    <td class="column35">o. Tanggal berlaku SIP</td>
                    <td class="column60">{{ \Carbon\Carbon::parse($dataSdm['tanggal_berlaku_sip'])->translatedFormat('d F Y') }}</td>
                </tr>
                <tr>
                    <td class="column5"></td>
                    <td class="column35">p. Tanggal berlaku SIK</td>
                    <td class="column60">{{ \Carbon\Carbon::parse($dataSdm['tanggal_berlaku_sik'])->translatedFormat('d F Y') }}</td>
                </tr>
                <tr>
                    <td class="column5">2.</td>
                    <td class="column35">Riwayat Kepegawaian</td>
                    <td class="column60 columGrey"></td>
                </tr>
                <tr>
                    <td class="column5"></td>
                    <td class="column35">a. Status Kepegawaian</td>
                    <td class="column60">
                        @if(isset($dataSdm['status_kepegawaian']))
                            @if ($dataSdm['status_kepegawaian'] === 'asn_pns')
                                ASN PNS
                            @elseif ($dataSdm['status_kepegawaian'] === 'asn_non_pns')
                                ASN Non PNS
                            @else
                                Non ASN
                            @endif
                        @else
                            Non ASN
                        @endif
                    </td>
                </tr>
                <tr>
                    <td class="column5"></td>
                    <td class="column35">b. TMT menjadi CPNS</td>
                    <td class="column60">{{ \Carbon\Carbon::parse($dataSdm['tmt_cpns'])->translatedFormat('d F Y') }}</td>
                </tr>
                <tr>
                    <td class="column5"></td>
                    <td class="column35">c. TMT menjadi PNS</td>
                    <td class="column60">{{ \Carbon\Carbon::parse($dataSdm['tmt_pns'])->translatedFormat('d F Y') }}</td>
                </tr>
                <tr>
                    <td class="column5"></td>
                    <td class="column35">d. Tanggal mulai melaksanakan tugas</td>
                    <td class="column60">{{ \Carbon\Carbon::parse($dataSdm['tgl_mulai_tugas'])->translatedFormat('d F Y') }}</td>
                </tr>
                <tr>
                    <td class="column5"></td>
                    <td class="column35">e. Tanggal berakhir melaksanakan tugas (untuk tenaga kontrak/honorer)</td>
                    <td class="column60">{{ \Carbon\Carbon::parse($dataSdm['tgl_akhir_tugas'])->translatedFormat('d F Y') }}</td>
                </tr>
                <tr>
                    <td class="column5"></td>
                    <td class="column35">f. Pendidikan pada waktu pengangkatan pertama</td>
                    <td class="column60">
                        @if(isset($dataSdm['pendidikan_pengangkatan_pertama']))
                            @if ($dataSdm['pendidikan_pengangkatan_pertama'] === 'sd')
                                SD
                            @elseif ($dataSdm['pendidikan_pengangkatan_pertama'] === 'smp')
                                SMP
                            @elseif ($dataSdm['pendidikan_pengangkatan_pertama'] === 'sma')
                                SMA
                            @elseif ($dataSdm['pendidikan_pengangkatan_pertama'] === 'd1')
                                D1
                            @elseif ($dataSdm['pendidikan_pengangkatan_pertama'] === 'd2')
                                D2
                            @elseif ($dataSdm['pendidikan_pengangkatan_pertama'] === 'd3')
                                D3
                            @elseif ($dataSdm['pendidikan_pengangkatan_pertama'] === 'd4')
                                D4
                            @elseif ($dataSdm['pendidikan_pengangkatan_pertama'] === 's1')
                                S1
                            @elseif ($dataSdm['pendidikan_pengangkatan_pertama'] === 's2')
                                S2
                            @else
                                S3
                            @endif
                        @else
                            S3
                        @endif
                    </td>
                </tr>
                <tr>
                    <td class="column5"></td>
                    <td class="column35">g. Pendidikan tertinggi yang dimiliki saat in</td>
                    <td class="column60">
                        @if(isset($dataSdm['pendidikan_pengangkatan_pertama']))
                            @if ($dataSdm['pendidikan_pengangkatan_pertama'] === 'sd')
                                SD
                            @elseif ($dataSdm['pendidikan_pengangkatan_pertama'] === 'smp')
                                SMP
                            @elseif ($dataSdm['pendidikan_pengangkatan_pertama'] === 'sma')
                                SMA
                            @elseif ($dataSdm['pendidikan_pengangkatan_pertama'] === 'd1')
                                D1
                            @elseif ($dataSdm['pendidikan_pengangkatan_pertama'] === 'd2')
                                D2
                            @elseif ($dataSdm['pendidikan_pengangkatan_pertama'] === 'd3')
                                D3
                            @elseif ($dataSdm['pendidikan_pengangkatan_pertama'] === 'd4')
                                D4
                            @elseif ($dataSdm['pendidikan_pengangkatan_pertama'] === 's1')
                                S1
                            @elseif ($dataSdm['pendidikan_pengangkatan_pertama'] === 's2')
                                S2
                            @else
                                S3
                            @endif
                        @else
                            S3
                        @endif
                    </td>
                </tr>
                <tr>
                    <td class="column5"></td>
                    <td class="column35">h. Instansi Induk</td>
                    <td class="column60">{{ $dataSdm['instansi_induk'] ?? "" }}</td>
                </tr>
                <tr>
                    <td class="column5"></td>
                    <td class="column35">i. Jenis Kepegawaian</td>
                    <td class="column60">
                        @if(isset($dataSdm['jenis_kepegawaian']))
                            @if ($dataSdm['jenis_kepegawaian'] === 'nusantara_sehat')
                                Nusantara Sehata
                            @elseif ($dataSdm['jenis_kepegawaian'] === 'internship')
                                Internship
                            @elseif ($dataSdm['jenis_kepegawaian'] === 'residen')
                                Residen
                            @elseif ($dataSdm['jenis_kepegawaian'] === 'kontrak_sukarela')
                                Kontrak Sukarela
                            @elseif ($dataSdm['jenis_kepegawaian'] === 'kontrak_daerah')
                                Kontrak Daerah
                            @elseif ($dataSdm['jenis_kepegawaian'] === 'kontrak_pusat')
                                Kontrak Pusat
                            @elseif ($dataSdm['jenis_kepegawaian'] === 'ptt_daerah')
                                PTT Daerah
                            @elseif ($dataSdm['jenis_kepegawaian'] === 'ptt_pusat')
                                PTT Pusat
                            @elseif ($dataSdm['jenis_kepegawaian'] === 'pppk')
                                PPPK
                            @else
                                PNS
                            @endif
                        @else
                            PNS
                        @endif
                    </td>
                </tr>
                <tr>
                    <td class="column5" rowspan="3"></td>
                    <td class="column35">j. 1) Golongan terakhir</td>
                    <td class="column60">{{ $dataSdm['golongan_terakhir'] ?? "" }}</td>
                </tr>
                <tr>
                    <td class="column35">&nbsp;&nbsp;&nbsp;2) TMT Golongan </td>
                    <td class="column60">{{ \Carbon\Carbon::parse($dataSdm['tmt_golongan'])->translatedFormat('d F Y') }}</td>
                </tr>
                <tr>
                    <td class="column35">&nbsp;&nbsp;&nbsp;3) Masa Kerja Golongan</td>
                    <td class="column60">{{ number_format($dataSdm['masa_kerja_golongan'] ?? 0 , 0, ',', '.') }}</td>
                </tr>
                <tr>
                    <td class="column5" rowspan="7"></td>
                    <td class="column35">k. 1) Nama tempat bekerja sekarang</td>
                    <td class="column60">{{ $dataSdm['nama_tempat_bekerja_sekarang'] ?? "" }}</td>
                </tr>
                <tr>
                    <td class="column35">&nbsp;&nbsp;&nbsp;&nbsp;2) Nama unit kerja</td>
                    <td class="column60">{{ $dataSdm['nama_unit_kerja'] ?? "" }}</td>
                </tr>
                <tr>
                    <td class="column35">&nbsp;&nbsp;&nbsp;&nbsp;3) Tanggal mulai tugas di unit kerja</td>
                    <td class="column60">{{ \Carbon\Carbon::parse($dataSdm['tanggal_mulai_tugas_di_unit_kerja'])->translatedFormat('d F Y') }}</td>
                </tr>
                <tr>
                    <td class="column35">&nbsp;&nbsp;&nbsp;&nbsp;4) Desa/kelurahan</td>
                    <td class="column60">{{ $dataSdm['desa_kelurahan'] ?? "" }}</td>
                </tr>
                <tr>
                    <td class="column35">&nbsp;&nbsp;&nbsp;&nbsp;5) Kecamatan</td>
                    <td class="column60">{{ $dataSdm['kecamatan'] ?? "" }}</td>
                </tr>
                <tr>
                    <td class="column35">&nbsp;&nbsp;&nbsp;&nbsp;6) Kabupaten/Kota</td>
                    <td class="column60">{{ $dataSdm['kabupaten_kota'] ?? "" }}</td>
                </tr>
                <tr>
                    <td class="column35">&nbsp;&nbsp;&nbsp;&nbsp;7) Provinsi</td>
                    <td class="column60">{{ $dataSdm['provinsi'] ?? "" }}</td>
                </tr>
            </tbody>
        </table>
        <br>

        @php
            $kepangkatanGolonganList = \App\Models\RiwayatKepangkatanDanGolongan::where('sumber_daya_manusia_id', $dataSdm['id'])->get();
        @endphp
        
        <table>
            <tbody>
                <tr>
                    <td class="column5">3.</td>
                    <td class="column95" colspan="3">Riwayat Kepangkatan dan Golongan</td>
                </tr>
                <tr>
                    <td class="column5">No.</td>
                    <td class="column50" style="text-align: center;">Pangkat</td>
                    <td class="column30" style="text-align: center;">Golongan/Ruang</td>
                    <td class="column15" style="text-align: center;">TMT</td>
                </tr>
                @foreach ($kepangkatanGolonganList as $index => $kepangkatanGolongan)
                    <tr>
                        <td class="column5">{{ $index+1 }}</td>
                        <td class="column50">{{ $kepangkatanGolongan->pangkat ?? "" }}</td>
                        <td class="column30">{{ $kepangkatanGolongan->golongan ?? "" }}/{{ $kepangkatanGolongan->ruang ?? "" }}</td>
                        <td class="column15">{{ $kepangkatanGolongan->tmt ?? "" }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <br>

        @php
            $riwayatPendidikanList = \App\Models\RiwayatPendidikan::where('sumber_daya_manusia_id', $dataSdm['id'])->get();
        @endphp

        <table>
            <tbody>
                <tr>
                    <td class="column5">4.</td>
                    <td class="column95" colspan="5">Riwayat Pendidikan</td>
                </tr>
                <tr>
                    <td class="column5">No.</td>
                    <td class="column20" style="text-align: center;">Jenjang Pendidikan</td>
                    <td class="column20" style="text-align: center;">Jurusan/ Bidang</td>
                    <td class="column20" style="text-align: center;">Kode program studi</td>
                    <td class="column25" style="text-align: center;">Kode sekolah/ perguruan tinggi</td>
                    <td class="column15" style="text-align: center;">Tahun Lulus</td>
                </tr>
                @foreach ($riwayatPendidikanList as $index => $riwayatPendidikan)
                    <tr>
                        <td class="column5">{{ $index+1 }}</td>
                        <td class="column20">{{ $riwayatPendidikan->jenjang_pendidikan ?? "" }}</td>
                        <td class="column20">{{ $riwayatPendidikan->jurusan ?? "" }}</td>
                        <td class="column20">{{ $riwayatPendidikan->kode_program_studi ?? "" }}</td>
                        <td class="column25">{{ $riwayatPendidikan->kode_sekolah_perguruan_tinggi ?? "" }}</td>
                        <td class="column15">{{ $riwayatPendidikan->tahun_lulus ?? "" }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <br>

        @php
            $riwayatJabatanList = \App\Models\RiwayatJabatanKedudukan::where('sumber_daya_manusia_id', $dataSdm['id'])->get();
        @endphp

        <table>
            <tbody>
                <tr>
                    <td class="column5">5.</td>
                    <td class="column95" colspan="4">Riwayat Jabatan/Kedudukan</td>
                </tr>
                <tr>
                    <td class="column5">No.</td>
                    <td class="column25" style="text-align: center;">Nama Jabatan</td>
                    <td class="column25" style="text-align: center;">Unit Kerja</td>
                    <td class="column25" style="text-align: center;">Struktural/Fungsional</td>
                    <td class="column20" style="text-align: center;">Eselon</td>
                </tr>
                @foreach ($riwayatJabatanList as $index => $riwayatJabatan)
                    <tr>
                        <td class="column5">{{ $index+1 }}</td>
                        <td class="column25">{{ $riwayatJabatan->nama_jabatan ?? "" }}</td>
                        <td class="column25">{{ $riwayatJabatan->unit_kerja ?? "" }}</td>
                        <td class="column25">{{ $riwayatJabatan->struktural_fungsional ?? "" }}</td>
                        <td class="column20">{{ $riwayatJabatan->eselon ?? "" }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <br>

        @php
            $pelatihanJabatanList = \App\Models\PelatihanJabatanPenjenjangan::where('sumber_daya_manusia_id', $dataSdm['id'])->get();
        @endphp

        <table>
            <tbody>
                <tr>
                    <td class="column5">6.</td>
                    <td class="column95" colspan="6">Pelatihan Jabatan/Penjenjangan</td>
                </tr>
                <tr>
                    <td class="column5">No.</td>
                    <td class="column20" style="text-align: center;">Nama Pelatihan</td>
                    <td class="column15" style="text-align: center;">Kode pelatihan</td>
                    <td class="column20" style="text-align: center;">Tempat pelaksanaan</td>
                    <td class="column15" style="text-align: center;">Tanggal pelaksanaan</td>
                    <td class="column15" style="text-align: center;">Lama pelatihan</td>
                    <td class="column10" style="text-align: center;">Jumlah JPL</td>
                </tr>
                @foreach ($pelatihanJabatanList as $index => $pelatihanJabatan)
                    <tr>
                        <td class="column5">{{ $index+1 }}</td>
                        <td class="column20">{{ $pelatihanJabatan->nama_pelatihan ?? "" }}</td>
                        <td class="column15">{{ $pelatihanJabatan->kode_pelatihan ?? "" }}</td>
                        <td class="column20">{{ $pelatihanJabatan->tempat_pelaksanaan ?? "" }}</td>
                        <td class="column15">{{ \Carbon\Carbon::parse($pelatihanJabatan->tanggal_pelaksanaan)->translatedFormat('d F Y') }}</td>
                        <td class="column15">{{ $pelatihanJabatan->lama_pelatihan ?? "" }}</td>
                        <td class="column10">{{ $pelatihanJabatan->jumlah_jpl ?? "" }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <br>

        @php
            $pelatihanTeknisList = \App\Models\PelatihanTeknis::where('sumber_daya_manusia_id', $dataSdm['id'])->get();
        @endphp

        <table>
            <tbody>
                <tr>
                    <td class="column5">7.</td>
                    <td class="column95" colspan="7">Pelatihan Teknis/Fungsional </td>
                </tr>
                <tr>
                    <td class="column5">No.</td>
                    <td class="column20" style="text-align: center;">Nama Pelatihan</td>
                    <td class="column10" style="text-align: center;">Kode pelatihan</td>
                    <td class="column15" style="text-align: center;">Tempat pelak-sanaan</td>
                    <td class="column15" style="text-align: center;">Tanggal pelak-sanaan</td>
                    <td class="column10" style="text-align: center;">Lama pelatihan</td>
                    <td class="column10" style="text-align: center;">Jumlah JPL</td>
                    <td class="column15" style="text-align: center;">Penyele-nggara</td>
                </tr>
                @foreach ($pelatihanTeknisList as $index => $pelatihanTeknis)
                    <tr>
                        <td class="column5">{{ $index+1 }}</td>
                        <td class="column20">{{ $pelatihanTeknis->nama_pelatihan ?? "" }}</td>
                        <td class="column10">{{ $pelatihanTeknis->kode_pelatihan ?? "" }}</td>
                        <td class="column15">{{ $pelatihanTeknis->tempat_pelaksanaan ?? "" }}</td>
                        <td class="column15">{{ $pelatihanTeknis->tanggal_pelaksanan ?? "" }}</td>
                        <td class="column10">{{ $pelatihanTeknis->lama_pelatihan ?? "" }}</td>
                        <td class="column10">{{ $pelatihanTeknis->jumlah_jpl ?? "" }}</td>
                        <td class="column15">{{ $pelatihanTeknis->penyelenggara ?? "" }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <br>

        @php
            $registrasiList = \App\Models\Registrasi::where('sumber_daya_manusia_id', $dataSdm['id'])->get();
        @endphp

        <table>
            <tbody>
                <tr>
                    <td class="column5">8.</td>
                    <td class="column95" colspan="2">Registrasi </td>
                </tr>
                <tr>
                    <td class="column5">No.</td>
                    <td class="column60" style="text-align: center;">Nomor Surat Tanda Registrasi (STR)</td>
                    <td class="column35" style="text-align: center;">Tanggal penerbitan STR</td>
                </tr>
                @foreach ($registrasiList as $index => $registrasi)
                    <tr>
                        <td class="column5">{{ $index+1 }}</td>
                        <td class="column60">{{ $registrasi->str ?? "" }}</td>
                        <td class="column35">{{ \Carbon\Carbon::parse($registrasi->tanggal_penerbitan_str)->translatedFormat('d F Y') }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <br>

        @php
            $perizinanList = \App\Models\Perizinan::where('sumber_daya_manusia_id', $dataSdm['id'])->get();
        @endphp

        <table>
            <tbody>
                <tr>
                    <td class="column5">9.</td>
                    <td class="column95" colspan="2">Perizinan</td>
                </tr>
                <tr>
                    <td class="column5">No.</td>
                    <td class="column60" style="text-align: center;">Nomor Surat Izin Praktik (SIP)</td>
                    <td class="column35" style="text-align: center;">Tanggal Penerbitan SIP</td>
                </tr>
                @foreach ($perizinanList as $index => $perizinan)
                    <tr>
                        <td class="column5">{{ $index+1 }}</td>
                        <td class="column60">{{ $perizinan->sip ?? "" }}</td>
                        <td class="column35">{{ \Carbon\Carbon::parse($perizinan->tanggal_penerbitan_sip)->translatedFormat('d F Y') }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <br>

        @php
            $penghargaanList = \App\Models\Penghargaan::where('sumber_daya_manusia_id', $dataSdm['id'])->get();
        @endphp
        
        <table>
            <tbody>
                <tr>
                    <td class="column5">10.</td>
                    <td class="column95" colspan="3">Penghargaan</td>
                </tr>
                <tr>
                    <td class="column5">No.</td>
                    <td class="column40" style="text-align: center;">Nama Penghargaan</td>
                    <td class="column15" style="text-align: center;">Tahun</td>
                    <td class="column40" style="text-align: center;">Instansi Yang Mengeluarkan Penghargaan</td>
                </tr>
                @foreach ($penghargaanList as $index => $penghargaan)
                    <tr>
                        <td class="column5">1</td>
                        <td class="column40">{{ $penghargaan->nama_penghargaan ?? "" }}</td>
                        <td class="column15">{{ $penghargaan->tahun ?? "" }}</td>
                        <td class="column40">{{ $penghargaan->instansi_yang_mengeluarkan_penghargaan ?? "" }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <br>

        @php
            $penghargaanList = \App\Models\Penghargaan::where('sumber_daya_manusia_id', $dataSdm['id'])->get();
        @endphp

        <table>
            <tbody>
                <tr>
                    <td class="column5">11.</td>
                    <td class="column95" colspan="2">Keluarga</td>
                </tr>
                <tr>
                    <td class="column5" rowspan="6" style="vertical-align: top;">a.</td>

                    <td class="column40" style="text-align: center;">Identitas istri/suami </td>
                    <td class="column55 columGrey"></td>
                </tr>
                <tr>
                    <td class="column40">1) Nama</td>
                    <td class="column55">{{ $dataSdm['nama_pasangan'] }}</td>
                </tr>
                <tr>
                    <td class="column40">2) Tanggal lahir</td>
                    <td class="column55">{{ \Carbon\Carbon::parse($dataSdm['tanggal_lahir_pasangan'])->translatedFormat('d F Y') }}</td>
                </tr>
                <tr>
                    <td class="column40">3) Tanggal perkawinan</td>
                    <td class="column55">{{ \Carbon\Carbon::parse($dataSdm['tanggal_perkawinan'])->translatedFormat('d F Y') }}</td>
                </tr>
                <tr>
                    <td class="column40">4) Pekerjaan</td>
                    <td class="column55">{{ $dataSdm['pekerjaan_pasangan'] }}</td>
                </tr>
                <tr>
                    <td class="column40">5) No. Seri KARIS/ KARSU</td>
                    <td class="column55">{{ $dataSdm['karis_karsu'] }}</td>
                </tr>
            </tbody>
        </table>
        <table>
            <tbody>
                <tr>
                    <td class="column5" rowspan="3" style="vertical-align: top; border-top: 0;">b.</td>
                    <td class="column95" colspan="3" style="border-top: 0;">Identitas Anak (semua anak yang sah secara hukum)</td>
                </tr>
                <tr>
                    <td class="column45" style="text-align: center;">Nama</td>
                    <td class="column25" style="text-align: center;">Tanggal Lahir</td>
                    <td class="column25" style="text-align: center;">Jenis Kelamin</td>
                </tr>
                @php
                    $anakList = \App\Models\AnakPegawai::where('sumber_daya_manusia_id', $dataSdm['id'])->get();
                @endphp
                <tr>
                    <td class="column45">{{ $anakList->nama }}</td>
                    <td class="column25">{{ \Carbon\Carbon::parse($anakList->tanggal_lahir)->translatedFormat('d F Y') }}</td>
                    <td class="column25">
                        @if (isset($anakList['jenis_kelamin']))
                            @if ($anakList['jenis_kelamin'] === 'male')
                                Laki-laki
                            @else
                                Perempuan
                            @endif
                        @else
                            Perempuan
                        @endif
                    </td>
                </tr>
            </tbody>
        </table>
    @endforeach
</body>
</html>
