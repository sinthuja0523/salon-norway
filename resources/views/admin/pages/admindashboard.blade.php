@extends('layouts.admin-layout')

@section('main')
    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between mb-3">
                            <h5>Branch</h5>
                            <a href = "" class="btn btn-primary"><i class="fa fa-plus"></i> Add Branch</a>
                        </div
                        <h5 class="card-title">Services</h5>

                        <!-- Table with stripped rows -->
                        <table class="table datatable">
                            <thead>
                                <tr>
                                    <th>
                                        <b>Name</b>
                                    </th>
                                    <th>Service Name</th>
                                    <th>Description</th>
                                    <th>Price</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($bookings as $serve)
                                    <tr>
                                        <td>{{ $serve->service_name }}</td>
                                        <td>{{ $serve->service_description }}</td>
                                        <td>{{ $serve->service_price}}</td>
                                        <td><a href="" class="btn btn-warning">Edit</a>
                                            <a href="" class="btn btn-danger">Delete</a></td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <!-- End Table with stripped rows -->

                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
