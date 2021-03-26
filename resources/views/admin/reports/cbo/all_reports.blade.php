@extends('layouts.app')



@section('content')

<div style="min-height: 420px;" class="c h-100">


<div class="container pt-3">
        <div class="card">
            <div class="card-body pt-5">


            <cbo-reports-component></cbo-reports-component>



            <h3 class="display-4 pt-5">Minutes of CBO monthy meetings</h3>

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

           

            
            </div>
        </div>
    </div>
</div>


@endsection