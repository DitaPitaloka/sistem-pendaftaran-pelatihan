<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Pelatihanku</title>
</head>
<body>
<div class="card text-center">
    <div class="card-header navbar-dark bg-primary p-2">
        <ul class="nav nav-pills card-header-pills">
            <li class="nav-item">
                <a class="nav-link text-white" href="{{url('/dashboard')}}">Dashboard</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="{{url('/daftar')}}">Daftar Pelatihan</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="{{url('/riwayat')}}">Riwayat Pelatihan</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="{{url('/pelatihan')}}">Pelatihanku</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="{{url('/sertifikat')}}">Sertifikat</a>
            </li>
        </ul>
    </div>
    <div class="card-body">
        <h2 class="card-title">Ikuti Pelatihan Dari Borneo Engineer</h2>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
    </div>
    <br>
    <h2 class="text-center mb-4">Pelatihan Yang Diikuti</h2>
    <!--cards contens-->
    <div class="container d-flex justify-content-evenly mb-5">
    <div class="card" style="width: 18rem;">
            <img src="{{asset('assets/images/gd_logo.png')}}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Desain Grafis Madya</h5>
                <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dicta inventore vero mollitia necessitatibus ratione quam fuga modi quo. Ipsum sapiente recusandae odit magni porro neque cum vitae, soluta numquam quae.</p>
                <a href="{{url('/daftar')}}" class="btn btn-primary">Lihat Pelatihan</a>
            </div>
        </div>
    </div>
</div>
</body>
</html>