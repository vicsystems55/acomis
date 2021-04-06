@extends('layouts.app')



@section('content')

<div style="min-height: 420px;" class="c h-100">


    <div class="container pt-3">
        <h3 class="display-4">Wards</h3>
        <div class="card">

            <div class="card-body table-responsive">
            <table class="table table-hover table-striped">
                <th>#</th>
                <th>Name</th>
                <th>State</th>
                <th>LGA</th>
                <th>Details</th>
             

                <tbody>

                    @foreach($wards as $ward)

                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$ward->ward_name}}</td>
                        <td>{{$ward->state}}</td>

                        <td>{{$ward->lga}}</td>
                        
                        <td>
                            <a href="" class="btn btn-sm btn-primary shadow">view</a>
                        </td>

                    </tr>



                    @endforeach

                </tbody>
            </table>

            </div>
        </div>

        <div class="card mt-3">
            <div class="card-body">
                <wards-component></wards-component>
            </div>
        </div>

    </div>
</div>


@endsection