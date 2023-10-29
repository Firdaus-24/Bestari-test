@extends('layouts.main')

@section('container')
    <div class="row">
        <div class="col-lg-12 text-center">
            <h3>SOAL POINT 4</h3>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6">
            <h4>Soal 1</h4>

        </div>
        <div class="col-lg-6">
            <h4>Soal 2</h4>

        </div>
    </div>
    <div class="row">
        <div class="col-lg-6">
            <ul id="soal1Point4">
            </ul>
        </div>
        <div class="col-lg-6" id="soal2Point4">
            <div class="row mt-3">
                <div class="col-lg-3">
                    <label>Array lama :</label>
                </div>
                <div class="col-lg-3">
                    <label id="arrayLamaSoal2Point4"></label>
                </div>

            </div>
            <div class="row mt-3">
                <div class="col-lg-3">
                    <label>Array Unique :</label>
                </div>
                <div class="col-lg-3">
                    <label id="arrayUniqueSoal2Point4"></label>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-lg-3">
                    <label>Sort Max :</label>
                </div>
                <div class="col-lg-3">
                    <label id="arraySortSoal2Point4"></label>
                </div>
            </div>

        </div>
    </div>
@endsection
