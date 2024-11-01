@extends('layouts.app')

@section('content')
<div class="container-fluid">

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <h4 class="page-title">Dashboard</h4>
            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
    <div class="card"
    style="
    background-color: #ffffff;
    border-radius: 8px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    margin: 10px;
    overflow: hidden;
    border: 0.2px solid #0000b3; "
    >
    <div class="card-header"
    style="
    text-align:center;
    background-color: #0000b3;
    color: white;
    padding: 9px;
    font-size: 18px;
    font-weight: bold;"
    >
        Judul
    </div>
    <div class="card-content"
    style="
    padding: 20px;
    color: #000;"
    >
        <img src="imgs/iwak.jpeg" alt="iwak">
        <h4>NEW</h4>
        <p>Ikan Silat di permukaan sungai belakang SMK Al-Azhar sempu</p>
    </div>
</div>

    </div>
    <!-- end row -->

</div>
@endsection