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
            {{--  margin: 5cm 1cm 2cm;  --}}
            margin: 2cm 1cm 2cm;
        }
        header {
            position: fixed;
            top: 1cm;
            left: 1cm;
            right: 1cm;
            height: 1cm;
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

                </td>
            </tr>
        </table>
    </header>
    <main>
        <center>