@extends('layouts.app')
@section('content')
<main id="main" class="main">
  <div class="pagetitle">
    <h1>Kevin Mogomotsi</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
        <li class="breadcrumb-item"><a href="{{ route('staff') }}">Staff</a> </li>
        <li class="breadcrumb-item active"><label for="">Bio</label></li>
      </ol>
    </nav>
  </div><!-- End Page Title -->
  <section class="section profile">
    <div class="row">
      <div class="col-xl-10">
        <div class="card">
          <div class="card-body pt-3">
            <!-- Bordered Tabs -->
            <ul class="nav nav-tabs nav-tabs-bordered">
              <li class="nav-item">
                <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-edit">Biography</button>
              </li>

              <li class="nav-item">
                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-overview">Qualifications</button>
              </li>

              <li class="nav-item">
                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-settings">Setup</button>
              </li>

              <li class="nav-item">
                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-change-password">Work History</button>
              </li>
            </ul>
            <div class="tab-content pt-2">
              <div class="tab-pane fade show active profile-edit pt-3" id="profile-edit">
                <!-- Profile Edit Form -->
                <form>
                  <div class="row g-3 mb-3">
                    <div class="col-md-4">
                      <label for="">Firstname*</label>
                      <input type="text" class="form-control form-control-sm" value="Kevin" placeholder="First name" aria-label="First name">
                    </div>
                    <div class="col-md-4">
                      <label for="">Lastname*</label>
                      <input type="text" class="form-control form-control-sm" value="Mogomotsi" placeholder="Last name" aria-label="Last name">
                    </div>
                    <div class="col-md-2">
                      <label for="">Title</label>
                      <select name="title" class="form-select form-select-sm">
                        <option selected value="Mr">Mr</option>
                        <option value="Mr">Mrs</option>
                        <option value="Mr">Ms</option>
                      </select>
                    </div>
                    <div class="col-md-2">
                      <label for="">Abbrev*</label>
                      <input type="text" class="form-control form-control-sm" value="KMM" placeholder="Abbrev" aria-label="abbreviation">
                    </div>
                  </div>

                  <div class="row g-3 mb-3">
                    <div class="col">
                      <label for="">Date of Birth*</label>
                      <input type="date" class="form-control form-control-sm" value="14/07/1987"  aria-label="date of birth">
                    </div>
                    <div class="col">
                      <label for="">Password/ID*</label>
                      <input type="text" class="form-control form-control-sm" value="345519918"  placeholder="345519918" aria-label="passport">
                    </div>
                    <div class="col">
                      <label for="">Gender</label>
                      <select name="gender" class="form-select form-select-sm">
                        <option selected value="M">Male</option>
                        <option value="F">Female</option>
                      </select>
                    </div>
                  </div>
                  <div class="row g-3 mb-3">
                    <div class="col">
                      <label for="phone">Nationality</label>
                      <input id="nationality" value="Motswana" type="text" class="form-control form-control-sm" value="Motswana"  aria-label="nationality">
                    </div>
                    <div class="col">
                      <label for="phone">Phone*</label>
                      <input id="phone" value="71869852" type="text" value="71869852" class="form-control form-control-sm"  aria-label="phone">
                    </div>
                    
                  </div>

                  <div class="row g-3 mb-3">
                    <div class="col">
                      <label for="email">Email*</label>
                      <input id="email" type="email" class="form-control form-control-sm" value="platinumelectronics@gmail.com" placeholder="info@gmail.co" aria-label="email">
                    </div>
                  </div>

                  <label for="#">Work Information</label>
                  <hr>
                  <div class="row mb-3">
                    <label for="company" class="col-md-4 col-lg-3 col-form-label">Department</label>
                    <div class="col-md-8 col-lg-9">
                      <select name="departments" class="form-select form-select-sm">
                        <option selected value="Administration">Administration</option>
                        <option value="Languages">Languages</option>
                        <option value="Science">Science</option>
                        <option value="Mathematics">Mathematics</option>
                      </select>
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label for="Job" class="col-md-4 col-lg-3 col-form-label">Position</label>
                    <div class="col-md-8 col-lg-9">
                      <input name="job" type="text" class="form-control form-control-sm" id="Job" value="Teacher">
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label for="Twitter" class="col-md-4 col-lg-3 col-form-label">Area of Work</label>
                    <div class="col-md-8 col-lg-9">
                      <select name="areas" id="area" class="form-select form-select-sm">
                        <option selected value="administration">Administration</option>
                        <option value="teaching">Teaching</option>
                        <option value="support">Teacher Support</option>
                        <option value="maintenance">Maintenance</option>
                      </select>
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label for="Facebook" class="col-md-4 col-lg-3 col-form-label">House/Team</label>
                    <div class="col-md-8 col-lg-9">
                      <input name="houses" type="text" class="form-control form-control-sm" id="Facebook" value="Lion">
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label for="status" class="col-md-4 col-lg-3 col-form-label">Status</label>
                    <div class="col-md-8 col-lg-9">
                      <select name="status" id="status" class="form-select form-select-sm">
                        <option selected value="current">Current</option>
                        <option value="current">Left</option>
                        <option value="current">Deceased</option>
                        <option value="current">Leave</option>
                        <option value="current">Login disabled</option>
                      </select>
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label for="office" class="col-md-4 col-lg-3 col-form-label">Office</label>
                    <div class="col-md-8 col-lg-9">
                      <select name="offices" id="office" class="form-select form-select-sm">
                        <option value="Room 1">Room 1</option>
                        <option value="Room 2">Room 2</option>
                        <option selected value="Administration - Office 12">Administration - Office 12</option>
                      </select>
                    </div>
                  </div>

                  <div class="row">
                   <div class="col-md-6">
                    
                   </div>
                   <div class="col-md-2">
                    
                   </div>
                   <div class="col-md-2">
                    <button type="submit" class="btn btn-primary btn-sm">Save Changes</button>
                   </div>
                   <div class="col-md-2">
                    <button type="submit" class="btn btn-danger btn-sm">Remove Kevin</button>
                   </div>
                  </div>
                </form><!-- End Profile Edit Form -->
              </div>
              <div class="tab-pane  profile-overview" id="profile-overview">
                <table id="example" class="table table-stripped card-text display mt-4">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Code</th>
                      <th scope="col">Qualification</th>
                      <th scope="col">Institution</th>
                      <th>View</th>
                      <th>Delete</th>
                      <th><a href="#" class="btn btn-primary btn-sm"><i class="bi bi-plus"></i></a></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">1</th>
                      <td>BCS</td>
                      <td>Bachelor of Computer Science</td>
                      <td>University of Maryland</td>
                      <td><i class="bi bi-binoculars"></i></td>
                    <td><i class="bi bi-trash3"></i></td>
                    </tr>
                    <tr>
                      <th scope="row">2</th>
                      <td>AWS-D</td>
                      <td>Amazon Web Services - Developer</td>
                      <td>New York City College</td>
                      <td><i class="bi bi-binoculars"></i></td>
                    <td><i class="bi bi-trash3"></i></td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div class="tab-pane fade pt-3" id="profile-settings">
                <!-- Settings Form -->
                <div class="accordion" id="accordionExample">
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Email Signature
                      </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        SMS Signature
                      </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        Signature File
                      </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                      <div class="mb-3">
                        <label for="formFileSm" class="form-label">Small file input example</label>
                        <input class="form-control form-control-sm" id="formFileSm" type="file">
                      </div>
                      
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade pt-3" id="profile-change-password">
                <!-- Work History Tab -->
                <table id="example" class="table table-stripped card-text display mt-4">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">From</th>
                      <th scope="col">To</th>
                      <th scope="col">Place of Work</th>
                      <th>Work Type</th>
                      <th>Position & Responsibility</th>
                      <th>View</th>
                      <th>Delete</th>
                      <th><a href="#" class="btn btn-primary btn-sm"><i class="bi bi-plus"></i></a></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">1</th>
                      <td>12/09/2020</td>
                      <td>09/08/2022</td>
                      <td>Assistant Teacber</td>
                      <td>Education</td>
                      <td>Teaching Form 1 students</td>
                      <td><i class="bi bi-binoculars"></i></td>
                    <td><i class="bi bi-trash3"></i></td>
                    </tr>
                  </tbody>
                </table> <!-- End of Work History -->
              </div>
            </div><!-- End Bordered Tabs -->
          </div>
        </div>
      </div>
      <div class="col-xl-2">
        <div class="card">
          <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">
            <img src="{{ asset('img/profile-img.jpg') }}" alt="Profile" class="rounded-circle">
            <p>Mr. Mogomotsi</p>
            <div class="pt-2">
              <a href="#" class="btn btn-primary btn-sm" title="Upload new profile image"><i class="bi bi-upload"></i></a>
              <a href="#" class="btn btn-danger btn-sm" title="Remove my profile image"><i class="bi bi-trash"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

</main><!-- End #main -->
@endsection