@extends('layouts.app')



@section('content')

<div style="min-height: 420px;" class="c h-100">


<div class="container pt-3">
        <div class="card">
            <div class="card-body">
            <h3 class="display-4">Wards</h3>

            <table class="table table-hover table-striped">
                <th>#</th>
                <th>Name</th>
                <th>Wards</th>
                <th>LGA</th>
                <th></th>

                <tbody>
                    


                <tr>
                        <td>EE</td>
                        <td>EE</td>

                        <td>EE</td>
                        <td>EE</td>
                        <td>
                            <a href="" class="btn btn-sm btn-primary shadow">view more</a>
                        </td>

                    </tr>





                

                </tbody>
            </table>

           

            <wards-component></wards-component>
            </div>
        </div>
    </div>
</div>


@endsection