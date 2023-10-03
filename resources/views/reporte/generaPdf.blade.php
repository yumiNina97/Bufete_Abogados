<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lista de Alumnos</title>
    <style>
        @page {
            margin: 0cm 0cm;
            font-family: Arial;
        }

        body {
            margin: 5cm 1cm 2cm;
        }

        header {
            position: fixed;
            top: 1cm;
            left: 1cm;
            right: 1cm;
            height: 4cm;
            background-color: #ffffff;
            color: black;
            text-align: center;
            line-height: 30px;
        }

        footer {
            position: fixed;
            bottom: 0cm;
            left: 1cm;
            right: 1cm;
            height: 2cm;
            background-color: #fff;
            color: black;
            text-align: center;
            line-height: 35px;
        }

        .bordes {
            /* border: #24486C 1px solid; */
            border: 1px solid;
            border-collapse: collapse;
        }

        table.celdas {
            width: 100%;
            background-color: #fff;
            /* border: 1px solid; */
            border-collapse: collapse;
        }

        .celdas th {
            height: 10px;
            background-color: #E0E0E0;
            /* color: #fff; */
        }

        .celdas td {
            height: 12px;
        }

        .celdas th, .celdas td {
            border: 1px solid black;
            padding: 2px;
            text-align: center;
        }

        .celdabg {
            /* background-color: #E1ECF4; */
            background-color: #ffffff;
        }

    </style>
    <!-- <link href="{{ asset('dist/css/style.min.css') }}" rel="stylesheet"> -->
</head>
<body>
    <header>
        <table style="width:100%">
            <tr>
                <td style="text-align:center; font-family: 'Times New Roman', Times, serif; font-size:20px; line-height:100%">
                    <strong>URQUIOLA & ASOCIADOS</strong>
                </td>
            </tr>
            <tr>
                <td style="text-align:center; font-family: 'Times New Roman', Times, serif; font-size:12px; line-height:100%">
                    <strong>"Nuestra experiencia habla"</strong>
                </td>
            </tr>
            <tr>
                <td style="text-align:center; font-family: 'Times New Roman', Times, serif; font-size:15px; line-height:100%">
                    {{-- <strong>{{ $listado[0]->anio_vigente }}</strong> --}}
                    {{--  <strong>{{ $anio_vigente }}</strong>  --}}
                </td>
            </tr>
        </table>
        <hr>
        <table style="width:100%">
            <tr>
                <td style="text-align:left; font-family: 'Times New Roman', Times, serif; font-size:12px; line-height:100%">
                    <strong>Cliente:</strong>
                </td>
                <td style="text-align:left; font-family: 'Times New Roman', Times, serif; font-size:12px; line-height:100%">
                    {{ $cliente->nombres." ".$cliente->ap_paterno." ".$cliente->ap_materno }}
                </td>
                <td style="text-align:left; font-family: 'Times New Roman', Times, serif; font-size:12px; line-height:100%">
                    <strong>Cedula:</strong>
                </td>
                <td style="text-align:left; font-family: 'Times New Roman', Times, serif; font-size:12px; line-height:100%">
                    {{ $cliente->cedula }}
                </td>
            </tr>
        </table>
        <hr>
        <table style="width:100%">
            <tr>
                <td style="text-align:left; font-family: 'Times New Roman', Times, serif; font-size:12px; line-height:100%">
                    <strong>Telefono:</strong>
                </td>
                <td style="text-align:left; font-family: 'Times New Roman', Times, serif; font-size:12px; line-height:100%">
                    {{ $cliente->telefonos }}
                </td>
                <td style="text-align:left; font-family: 'Times New Roman', Times, serif; font-size:12px; line-height:100%">
                    <strong>Correo:</strong>
                </td>
                <td style="text-align:left; font-family: 'Times New Roman', Times, serif; font-size:12px; line-height:100%">
                    {{ $cliente->correo }}
                </td>
                <td style="text-align:left; font-family: 'Times New Roman', Times, serif; font-size:12px; line-height:100%">
                    <strong>Direccion:</strong>
                </td>
                <td style="text-align:left; font-family: 'Times New Roman', Times, serif; font-size:12px; line-height:100%">
                    {{ $cliente->direccion }}
                </td>
                <td style="text-align:left; font-family: 'Times New Roman', Times, serif; font-size:12px; line-height:100%">
                    <strong>Fecha:</strong>
                </td>
                <td style="text-align:left; font-family: 'Times New Roman', Times, serif; font-size:12px; line-height:100%">
                    {{ date('Y-m-d') }}
                </td>
            </tr>
        </table>
        <hr>
    </header>
    <main>
        <center>
            <h3>PROCESOS</h3>
        </center>
        <table cellpadding="1" class="celdas" style="font-family: 'Times New Roman', Times, serif; font-size:10px; text-align:center">
            <tr>
                <th>N°</th>
                <th>NOMBRE</th>
                <th>DESCRIPCION</th>
                <th>TIPO</th>
                <th>ESTADO</th>
                <th>PERSONAS</th>
                <th>FECHA</th>
                <th>POSICION</th>
                <th>CONTRA DEMANDA</th>
            </tr>
            @foreach ($procesos as $key => $p)
                <tr>
                   <td>{{ $key+1 }}</td>
                   <td>{{ $p->nombre }}</td>
                   <td>{{ $p->descripcion }}</td>
                   <td>{{ $p->tipo }}</td>
                   <td>{{ $p->estado }}</td>
                   <td>{{ $p->personas }}</td>
                   <td>{{ $p->fecha_cita }}</td>
                   <td>{{ $p->posicion }}</td>
                   <td>{{ $p->contra_demanda }}</td>
                </tr>
            @endforeach
        </table>
        <center>
            <h3>TRAMITES</h3>
        </center>
        <table cellpadding="1" class="celdas" style="font-family: 'Times New Roman', Times, serif; font-size:10px; text-align:center">
            <tr>
                <th>N°</th>
                <th>NOMBRE</th>
                <th>DESCRIPCION</th>
                <th>TIPO</th>
                <th>ESTADO</th>
                <th>PERSONAS</th>
                <th>FECHA</th>
            </tr>
            @foreach ($tramites as $key => $t)
                <tr>
                   <td>{{ $key+1 }}</td>
                   <td>{{ $t->nombre }}</td>
                   <td>{{ $t->descripcion }}</td>
                   <td>{{ $t->tipo }}</td>
                   <td>{{ $t->estado }}</td>
                   <td>{{ $t->personas }}</td>
                   <td>{{ $t->fecha_cita }}</td>
                </tr>
            @endforeach
        </table>


        <!-- <p style="font: normal 12px/150% Times New Roman, Times, serif; text-align:left;">
            <strong>Lugar y fecha: </strong> La Paz - {{ date('Y-m-d') }}.
        </p>
        <br><br><br><br><br><br>
        <table style="width:100%;">
            <tr>
                <td style="text-align:center; font-family: 'Times New Roman', Times, serif; font-size:14px;">
                    <strong>Firma Autoridad Academica</strong>
                </td>
            </tr>
        </table>
        <br>
        <table style="width:100%;">
            <tr>
                <td style="width:30%;">
                    <table cellpadding="1" border="1px" style="width:100%; text-align:center; font-family: 'Times New Roman', Times, serif; font-size:12px; line-height:100%">
                        <tr>
                            <td colspan="2">ESCALA DE VALORACION</td>
                        </tr>
                        <tr>
                            <td style="width:50%;">61 - 100</td>
                            <td style="width:50%;">APROBADO</td>
                        </tr>
                        <tr>
                            <td>0 - 60</td>
                            <td>REPROBADO</td>
                        </tr>
                        <tr>
                            <td>61</td>
                            <td>NOTA MINIMA</td>
                        </tr>
                    </table>
                </td>
                <td style="text-align:center; font-family: 'Times New Roman', Times, serif; font-size:14px;">
                    Sello del Instituto
                </td>
                <td style="width:30%;">
                    <table cellpadding="1" border="1px" style="width:100%; text-align:center; font-family: 'Times New Roman', Times, serif; font-size:12px; line-height:100%">
                        <tr>
                            <td style="width:50%;">Carga Horaria</td>
                            <td style="width:50%;">3620</td>
                        </tr>
                        <tr>
                            <td>Asignaturas Aprobadas</td>
                            <td>17 / 17</td>
                        </tr>
                        <tr>
                            <td rowspan="2">Promedio de Calificaciones</td>
                            <td rowspan="2">75</td>
                        </tr>

                    </table>
                </td>
            </tr>
            <tr>
                <td colspan="3" style="border: 1px solid; border-collapse: collapse; width:100%; text-align:center; font-family: 'Times New Roman', Times, serif; font-size:12px; line-height:100%">
                    Cualquier raspadura o enmienda invalida el presente documento
                </td>
            </tr>
        </table> -->
    </main>
</body>
</html>
