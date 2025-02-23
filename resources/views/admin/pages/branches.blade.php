@extends('layouts.admin-layout')

@section('main')
    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        {{-- <h5 class="card-title">Branch</h5> --}}
                        <div class="d-flex justify-content-between mb-3">
                            <h5>Branch</h5>
                            <a href = "" class="btn btn-primary"><i class="fa fa-plus"></i> Add Branch</a>
                        </div
                        <!-- Table with stripped rows -->
                        <table class="table datatable">
                            <thead>
                                <tr>
                                    <th>
                                        <b>N</b>ame
                                    </th>
                                    <th>Branch Location</th>
                                    <th>Office Number</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($bookings as $branches)
                                    <tr>
                                        <td>{{ $branches->branch_location }}</td>
                                        <td>{{ $branches->office_number }}</td>

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
