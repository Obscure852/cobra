@extends('layouts.app')
@section('content')
<main id="main" class="main">
    <div class="row d-flex justify-content-between">
      <div class="col-md-6">
        <div class="pagetitle">
          <h1>Staff Records</h1>
          <nav>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
              <li class="breadcrumb-item">Staff</li>
            </ol>
          </nav>
        </div><!-- End Page Title -->
      </div>
      <div class="col-md-4">
      </div>
      <div class="col-md-2">
        <div class="btn-group mr-2" role="group" aria-label="Second group">
          <a href="#" class="btn btn-primary btn-sm"><i class="bi bi-printer"></i></a>
        </div>
        <div class="btn-group mr-2" role="group" aria-label="Second group">
          <a href="{{ route('staff-data'); }}" class="btn btn-primary btn-sm mr-2"><i class="bi bi-plus-circle"></i></a>
        </div>
      </div>
    </div>
    <section class="section">
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body mt-4 mb-4">
              <!-- Default Table -->
              <table id="example" class="table table-stripped card-text display">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Position</th>
                    <th scope="col">Age</th>
                    <th scope="col">Start Date</th>
                    <th scope="col">View</th>
                    <th scope="col">Del</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Brandon Jacob</td>
                    <td>Designer</td>
                    <td>28</td>
                    <td>2016-05-25</td>
                    <td><i class="bi bi-binoculars"></i></td>
                    <td><i class="bi bi-trash3"></i></td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>Bridie Kessler</td>
                    <td>Developer</td>
                    <td>35</td>
                    <td>2014-12-05</td>
                    <td><i class="bi bi-binoculars"></i></td>
                    <td><i class="bi bi-trash3"></i></td>
                  </tr>
                  <tr>
                    <th scope="row">3</th>
                    <td>Ashleigh Langosh</td>
                    <td>Finance</td>
                    <td>45</td>
                    <td>2011-08-12</td>
                    <td><i class="bi bi-binoculars"></i></td>
                    <td><i class="bi bi-trash3"></i></td>
                  </tr>
                  <tr>
                    <th scope="row">4</th>
                    <td>Angus Grady</td>
                    <td>HR</td>
                    <td>34</td>
                    <td>2012-06-11</td>
                    <td><i class="bi bi-binoculars"></i></td>
                    <td><i class="bi bi-trash3"></i></td>
                  </tr>
                  <tr>
                    <th scope="row">5</th>
                    <td>Raheem Lehner</td>
                    <td>Dynamic Division Officer</td>
                    <td>47</td>
                    <td>2011-04-19</td>
                    <td><a href="{{ route('staff-data') }}"><i class="bi bi-binoculars"></i></a></td>
                    <td><i class="bi bi-trash3"></i></td>
                  </tr>
                </tbody>
              </table>
              <!-- End Default Table Example -->
            </div>
          </div>
            </div>
          </div>
        </div>
      </div>
    </section>         
  </main><!-- End #main -->
@endsection