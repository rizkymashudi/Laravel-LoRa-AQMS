{{-- @extends('index')

@section('content')

<div class="col-25" style="margin-top: 20px; margin-left: 15px;">
    <div class="col-25">
        <div class="col-12 mt-2">
            <h2 class="tebal">History data</h2>
        </div>
    </div>

    <div class="col-25">
        <div class="col-12 mt-3">
            <div class="card bg-light text-dark">
                <div class="card-body">
                    <h5></h5>

                    <table id="history" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>Date</th>
                                <th>Partikel</th>
                                <th>Detail</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Rabu, 19 Agustus 2020</td>
                                <td>PM10</td>
                                <td><button type="button" class="btn btn-xs btn-primary text-white" data-toggle="modal" data-target="">Lihat</button></td>
                            </tr>
                            <tr>
                                <td>Garrett Winters</td>
                                <td>Accountant</td>
                                <td>Tokyo</td>
                            </tr>
                            <tr>
                                <td>Ashton Cox</td>
                                <td>Junior Technical Author</td>
                                <td>San Francisco</td>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Date</th>
                                <th>Partikel</th>
                                <th>Detail</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
    
</div>

<script>
    $(document).ready(function() {
        $('#history').DataTable( {
            "paging":   true,
            "ordering": true,
            "info":     true
        } );
    } );
</script>
    
@endsection --}}