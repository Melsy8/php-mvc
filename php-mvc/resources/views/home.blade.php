@extends('layouts.main')

@section('style-css')
    <link rel="stylesheet" type="text/css" href="home.css">
@endsection

@section('container')
    <link rel="stylesheet" type="text/css" href=".css">
    <div class="container-fluid header mb-5">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="row">
                    <div class="bgimageh"></div>
                    <div class="typtxt">
                        <h2>Web Visualisasi Data</h2>
                        <p>Web untuk Visualisasi menggunakan framework Laravel dengan konsep MVC</p>
                    </div>
                    <div id="carouselExampleControls" class="carousel slide" style="padding: 0!important;"
                        data-ride="carousel">
                        <div class="carousel-inner" role="listbox">
                            <div class="carousel-item active">
                                <img class="d-block"
                                    src="https://storage.googleapis.com/kaggle-datasets-images/1593/2837/cc657f476b2744d6e88575f82f49d7c1/dataset-cover.jpg"
                                    alt="First slide">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container text-center">
        <h2>Dataset yang digunakan</h2>
        <p>Berikut merupakan dataset yang akan digunakan untuk dibuat menjadi visualisasi : </p>
        <button type="button" class="btn btn-primary" data-toggle="collapse" data-target="#demo">Included Dataset</button>
        <button type="button" class="btn btn-primary" data-toggle="collapse" data-target="#demos">Dataset to be used</button>
        <div id="demo" class="collapse">
            <div class="aa">
                <div class="main mb-5 mt-5">
                    <div class="row">
                        <div class="col-lg-12 text-center">
                            <h1>Dataset</h1>
                            <p>Dataset yang digunakan diambil dari Website yang sudah dikenal dan digunakan kebanyakan orang
                                untuk
                                mengambil data.</p>
                            <p>Dataset ini diambil dari sebuah website <a
                                    href="https://www.kaggle.com/rtatman/digidb?select=DigiDB_digimonlist.csv">Kaggle</a>,
                                Dataset
                                ini
                                diambil dari Digimon Story CyberSleuth</p>
                            <p>dataset berisi 3 file csv dengan nama: </p>
                        </div>
                    </div>
                </div>

                <div class="row text-center">
                    <div class="col"><a
                            href="https://drive.google.com/uc?export=view&id=1qyyusxq_3LPEBwGWFFYDWivCiWbDvCIf">DigiDB_digimonlist.csv</a>
                    </div>
                    <div class="col"><a
                            href="https://drive.google.com/uc?export=view&id=1iMXcuKHron-Noi305OVyFpX5kMSU5sJ5">DigiDB_movelist.csv</a>
                    </div>
                    <div class="col"><a
                            href="https://drive.google.com/uc?export=view&id=18MO2LsekeOTt3enxhsAl6VSIc0qVMWj_">DigiDB_supportlist.csv</a>
                    </div>
                </div>
            </div>
        </div>
        <div id="demos" class="collapse">
          <div class="main mt-5">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h4>Dataset yang akan digunakan adalah dataset <a
                            href="https://drive.google.com/uc?export=view&id=1qyyusxq_3LPEBwGWFFYDWivCiWbDvCIf">DigiDB_digimonlist.csv</a>
                    </h4>
                    <p>Contoh data yang akan dibuat visualisasinya.</p>
                    <img src="https://drive.google.com/uc?export=view&id=1F3wLdonxcqvpaMufdVznuR9nGt9hCl6-" alt="gmbr">
                </div>
            </div>
        </div>
      </div>
    </div>
@endsection
