@extends('layouts.app')



@section('content')

<div style="min-height: 420px;" class="c h-100">


<div class="container pt-3">
        <div class="card">
            <div class="card-body table-responsive">

            <h3 class="display-4">All Health Facilities</h3>

            <table class="table table-hover table-striped">
                <th>#</th>
                <th>Name</th>
                <th>CBO</th>
                <th>Ward</th>
                <th></th>

                <tbody>
                    
                @foreach($health_facilities as $health_facility)

                <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$health_facility->Facility}}</td>

                        <td>{{$health_facility->CBO}}</td>
                        <td>{{$health_facility->Ward}}</td>
                        <td>
                            <a href="{{route('health_facility', $health_facility->Facility)}}" class="btn btn-sm btn-primary shadow">view more</a>
                        </td>

                    </tr>




                @endforeach
                   

                </tbody>
            </table>

   
               {{$health_facilities->links()}}

                <example-component></example-component>
              

               
            </div>
        </div>
    </div>
</div>


@endsection