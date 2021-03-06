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

        <div class="container">
            <div class="row">

                <div class="col-md-4 mx-auto">
                    <div class="card">
                        <div class="card-body">
                            <img class="img-fluid" src="https://eleviv.co/wp-content/uploads/2021/03/mobile.png" alt="">
                            <h4 class="font-weight-bold">Making your brand stand out</h4>
                            <p>
                            At Eleviv, we focus on evey element of your brand identity by giving your ideas life. We thoroughly develop and evaluate
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mx-auto">
                    <div class="card">
                        <div class="card-body">
                            <img class="img-fluid" src="https://eleviv.co/wp-content/uploads/2021/03/mobile.png" alt="">
                            <h4 class="font-weight-bold">Making your brand stand out</h4>
                            <p>
                            At Eleviv, we focus on evey element of your brand identity by giving your ideas life. We thoroughly develop and evaluate
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mx-auto">
                    <div class="card">
                        <div class="card-body">
                            <img class="img-fluid" src="https://eleviv.co/wp-content/uploads/2021/03/mobile.png" alt="">
                            <h4 class="font-weight-bold">Making your brand stand out</h4>
                            <p>
                            At Eleviv, we focus on evey element of your brand identity by giving your ideas life. We thoroughly develop and evaluate
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mx-auto">
                    <div class="card">
                        <div class="card-body">
                            <img class="img-fluid" src="https://eleviv.co/wp-content/uploads/2021/03/mobile.png" alt="">
                            <h4 class="font-weight-bold">Making your brand stand out</h4>
                            <p>
                            At Eleviv, we focus on evey element of your brand identity by giving your ideas life. We thoroughly develop and evaluate
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mx-auto">
                    <div class="card">
                        <div class="card-body">
                            <img class="img-fluid" src="https://eleviv.co/wp-content/uploads/2021/03/mobile.png" alt="">
                            <h4 class="font-weight-bold">Making your brand stand out</h4>
                            <p>
                            At Eleviv, we focus on evey element of your brand identity by giving your ideas life. We thoroughly develop and evaluate
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mx-auto">
                    <div class="card">
                        <div class="card-body">
                            <img class="img-fluid" src="https://eleviv.co/wp-content/uploads/2021/03/mobile.png" alt="">
                            <h4 class="font-weight-bold">Making your brand stand out</h4>
                            <p>
                            At Eleviv, we focus on evey element of your brand identity by giving your ideas life. We thoroughly develop and evaluate
                            </p>
                        </div>
                    </div>
                </div>

                

            </div>
        </div>


@endsection