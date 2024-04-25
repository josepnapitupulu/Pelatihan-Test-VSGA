@extends('index')
@section('content')
<div class="container3" style="margin-bottom:100px">
    <h1 style="text-align: center; margin-bottom: 30px; padding-top:30px; padding-down:30px;">Halaman Klien</h1>
    <table>
        <thead>
            <tr>
                <th>Nama Klien</th>
                <th>Nama Klub</th>
                <th>Logo</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Loeis Lubis</td>
                <td>Bikes Club</td>
                <td><img src="logo2.png" alt="Logo Klien 1"></td>
            </tr>
            <tr>
                <td>Rendi Sibarani</td>
                <td>XSLS Club</td>
                <td><img src="logo3.jpg" alt="Logo Klien 2"></td>
            </tr>
            <tr>
                <td>Onai Nadapdap</td>
                <td>California Bike</td>
                <td><img src="logo4.jpg" alt="Logo Klien 3"></td>
            </tr>
            <tr>
                <td>Sahala Sinaga</td>
                <td>Supra Club</td>
                <td><img src="logo5.jpg" alt="Logo Klien 3"></td>
            </tr>
            <tr>
                <td>Saut Pardosi</td>
                <td>Kaleng Ninja</td>
                <td><img src="logo6.jpg" alt="Logo Klien 3"></td>
            </tr>
        </tbody>
    </table>
</div>
@endsection