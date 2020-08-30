@extends('index')

@section('content')
<div class="col-25" style="margin-top: 20px; margin-left: 15px;">
    {{-- <p style="text-align: center;"><img height="230px" width="300px" align="center" src="/images/underconstruction.png"/></p>
 
    <div>
        <h3 style="text-align: center;"><span style="font-size:48px;">Ops.. Under Construction</span></h3>
    </div>
    
    <div class="col-sm-12 margin_bottom" style="text-align: center;">
        <span style="font-size:24px;">
            <span style="">
                <span style="">this page is coming soon</span>
            </span>
        </span>
    </div> --}}
    <div class="col-25">
        <div class="col-12 mt-2">
            <h2 class="tebal" style="color: #1b2a4e;">Informasi Umum</h2>
        </div>
    </div>

    <div class="col-25">
        <div class="col-12 mt-3">
            <div class="card bg-light text-dark">
                <div class="card-body">
                    <h5 class="text-bold" style="color: #1b2a4e">
                        Indeks Kualitas Udara
                    </h5>
    
                    <p class="pfirst mt-3" style="text-align: justify; color: #1b2a4e">
                        Saat ini Indeks standar kualitas udara yang dipergunakan secara resmi di Indonesia
                        adalah Indek Standar Pencemar Udara (ISPU), hal ini sesuai dengan Keputusan Menteri
                        Negara Lingkungan Hidup Nomor : KEP 45 / MENLH / 1997 Tentang Indeks Standar
                        Pencemar Udara. Dalam keputusan tersebut yang dipergunakan sebagai bahan
                        pertimbangan diantaranya : bahwa untuk memberikan kemudahan dari keseragaman
                        informasi kualitas udara ambien kepada masyarakat di lokasi dan waktu tertentu serta
                        sebagai bahan pertimbangan dalam melakukan upaya-upaya pengendalian pencemaran
                        udara perlu disusun Indeks Standar Pencemar Udara.
                    </p>
                    <p class="pfirst" style="text-align: justify; color: #1b2a4e">
                        Indeks Standar Pencemar Udara adalah angka yang tidak mempunyai satuan yang
                        menggambarkan kondisi kualitas udara ambien di lokasi dan waktu tertentu yang
                        didasarkan kepada dampak terhadap kesehatan manusia, nilai estetika dan makhluk
                        hidup lainnya.
                        Indeks Standar Pencemar Udara ditetapkan dengan cara mengubah kadar pencemar
                        udara yang terukur menjadi suatu angka yang tidak berdimensi. Rentang Indeks Standar
                        Pencemar Udara dapat dilihat pada tabel berikut:
                    </p>

                    <div class="Title" style="color: #1b2a4e">
                        <p>Tabel Rentang ISPU</p>
                    </div>
                    
                    <!-- TABLE RENTANG ISPU -->
                    <div class="d-flex justify-content-center tabel">
                        <table class="table table-bordered">
                            <thead style="text-align: center; color: #1b2a4e">
                                <tr>
                                    <th>Kategori</th>
                                    <th>Rentang</th>
                                    <th>Penjelasan</th>
                                </tr>
                            </thead>
                            <tbody style="text-align: center; color: #1b2a4e">
                                @foreach ($rentangISPU as $rI)
                                    <tr>
                                        <td>{{ $rI->Kategori }}</td>
                                        <td>{{ $rI->Rentang }}</td>
                                        <td style="text-align: start;">{{ $rI->Desc }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    
                </div>
              </div>
        </div>
    </div>
</div>

<style>
    p.pfirst {
        text-indent: 30px;
    }

    .Table
    {
        display: table;
    }
    .Title
    {
        text-align: center;
        font-weight: bold;
        font-size: 18px;
    }
    .Heading
    {
        display: table-row;
        font-weight: bold;
        text-align: center;
    }
    .Row
    {
        display: table-row;
    }
    .Cell
    {
        display: table-cell;
        border: solid;
        border-width: thin;
        padding-left: 5px;
        padding-right: 5px;
    }
</style>
@endsection