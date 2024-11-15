<!DOCTYPE html>
<html>
<head>
    <title>Identitas Puskesmas Report</title>
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
    <table>
        <thead>
            <tr>
                <td class="column5" rowspan="2">No</td>
                <td class="column10" rowspan="2">Jenis/ Nama Ruangan</td>
                <td class="column10" rowspan="2">Nama Alat</td>
                <td class="column10" rowspan="2">No Seri</td>
                <td class="column10" rowspan="2">Merk</td>
                <td class="column10" rowspan="2">Type</td>
                <td class="column5" colspan="2">Tahun</td>
                <td class="column5" colspan="2">Kondisi</td>
                <td class="column5" colspan="2">Kalibrasi</td>
                <td class="column5" rowspan="2">Distributor</td>
                <td class="column10" rowspan="2">Harga Alat</td>
                <td class="column5" colspan="4">Sumber Dana</td>
                <td class="column10" rowspan="2">Negara Pembuat</td>
            </tr>
            <tr>
                <td class="column2-5 textCenter" style="width: 20px; height: 120px;">
                    <span style="display: inline-block; transform: rotate(90deg); transform-origin: center; white-space: nowrap; margin: 0; margin-left: 10px; margin-top: -40px; width: 10px; padding-top: -30px; ">
                    Perolehan
                    </span>
                </td>
                <td class="column2-5 textCenter" style="width: 20px; height: 120px;">
                   <span style="display: inline-block; transform: rotate(90deg); transform-origin: center; white-space: nowrap; margin: 0; margin-left: 10px; margin-top: -40px; width: 10px; padding-top: -30px; ">
                    Operasional
                    </span>
                </td>
                <td class="column2-5 textCenter" style="width: 20px; height: 120px;">
                   <span style="display: inline-block; transform: rotate(90deg); transform-origin: center; white-space: nowrap; margin: 0; margin-left: 10px; margin-top: -40px; width: 10px; padding-top: -30px; ">
                    Berfungsi
                    </span>
                </td>
                <td class="column2-5 textCenter" style="width: 20px; height: 120px;">
                   <span style="display: inline-block; transform: rotate(90deg); transform-origin: center; white-space: nowrap; margin: 0; margin-left: 10px; margin-top: -40px; width: 10px; padding-top: -30px; ">
                    Tidak berfungsi
                    </span>
                </td>
                <td class="column2-5 textCenter" style="width: 20px; height: 120px;">
                   <span style="display: inline-block; transform: rotate(90deg); transform-origin: center; white-space: nowrap; margin: 0; margin-left: 10px; margin-top: -40px; width: 10px; padding-top: -30px; ">
                    Ya (tahun)
                    </span>
                </td>
                <td class="column2-5 textCenter" style="width: 20px; height: 120px;">
                   <span style="display: inline-block; transform: rotate(90deg); transform-origin: center; white-space: nowrap; margin: 0; margin-left: 10px; margin-top: -40px; width: 10px; padding-top: -30px; ">
                    Tidak
                    </span>
                </td>
                <td class="column2-5 textCenter" style="width: 20px; height: 120px;">
                   <span style="display: inline-block; transform: rotate(90deg); transform-origin: center; white-space: nowrap; margin: 0; margin-left: 10px; margin-top: -40px; width: 10px; padding-top: -30px; ">
                    APBN
                    </span>
                </td>
                <td class="column2-5 textCenter" style="width: 20px; height: 120px;">
                   <span style="display: inline-block; transform: rotate(90deg); transform-origin: center; white-space: nowrap; margin: 0; margin-left: 10px; margin-top: -40px; width: 10px; padding-top: -30px; ">
                    APBD 1
                    </span>
                </td>
                <td class="column2-5 textCenter" style="width: 20px; height: 120px;">
                   <span style="display: inline-block; transform: rotate(90deg); transform-origin: center; white-space: nowrap; margin: 0; margin-left: 10px; margin-top: -40px; width: 10px; padding-top: -30px; ">
                    APBD 2
                    </span>
                </td>
                <td class="column2-5 textCenter" style="width: 20px; height: 120px;">
                   <span style="display: inline-block; transform: rotate(90deg); transform-origin: center; white-space: nowrap; margin: 0; margin-left: 10px; margin-top: -40px; width: 10px; padding-top: -30px; ">
                    Hibah
                    </span>
                </td>
            </tr>
        </thead>
        <tbody>
            @foreach ($identitasPuskesmas->peralatan as $index => $dataPeralatan)
                @php
                    $ruanganPuskesmas = \App\Models\RuanganPuskesmas::where('id', $dataPeralatan['ruangan_puskesmas_id'])->get();
                @endphp
                <tr>
                    <td class="column5">{{ $index+1 }}</td>
                    <td class="column10">{{ $ruanganPuskesmas[0]['nama_ruangan'] ?? "" }}</td>
                    <td class="column10">{{ $dataPeralatan['nama_alat'] ?? "" }}</td>
                    <td class="column10">{{ $dataPeralatan['no_seri'] ?? "" }}</td>
                    <td class="column10">{{ $dataPeralatan['merk'] ?? "" }}</td>
                    <td class="column10">{{ $dataPeralatan['type'] ?? "" }}</td>
                    <td class="column2-5">{{ $dataPeralatan['tahun_perolehan'] ?? "" }}</td>
                    <td class="column2-5">{{ $dataPeralatan['tahun_operasional'] ?? "" }}</td>
                    <td class="column2-5">
                        @if($dataPeralatan['kondisi'])
                        &#10003;
                        @else
                        @endif
                    </td>
                    <td class="column2-5">
                        @if($dataPeralatan['kondisi'])
                        @else
                        &#10003;
                        @endif
                    </td>
                    <td class="column2-5">{{ $dataPeralatan['kalibrasi'] ? $dataPeralatan['tahun_kalibrasi'] ?? "" : "" }}</td>
                    <td class="column2-5">{{ $dataPeralatan['kalibrasi'] ? "✓" : "" }}</td>
                    <td class="column5">{{ $dataPeralatan['distributor'] ?? "" }}</td>
                    <td class="column10">{{ $dataPeralatan['harga_alat'] ?? "" }}</td>
                    <td class="column2-5">{{ $dataPeralatan['sumber_dana'] == "apbn" ? "✓" : "" }}</td>
                    <td class="column2-5">{{ $dataPeralatan['sumber_dana'] == "apbd1" ? "✓" : "" }}</td>
                    <td class="column2-5">{{ $dataPeralatan['sumber_dana'] == "apbd2" ? "✓" : "" }}</td>
                    <td class="column2-5">{{ $dataPeralatan['sumber_dana'] == "hibah" ? "✓" : "" }}</td>
                    <td class="column10">{{ $dataPeralatan['negara_pembuat'] ?? "" }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
