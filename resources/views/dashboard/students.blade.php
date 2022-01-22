@extends('dashboard/partials/top-bar')

@section('contant')
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <div class="page-title-right">
                        <form class="d-flex">
                            {{-- <div class="input-group">
                            <input type="text" class="form-control form-control-light" id="dash-daterange">
                            <span class="input-group-text bg-primary border-primary text-white">
                                <i class="mdi mdi-calendar-range font-13"></i>
                            </span>
                        </div> --}}
                            <a href="javascript: void(0);" onclick="openAddForm()" id="plus-btn"
                                class="btn btn-primary ms-2">
                                <i class="uil-plus"></i>
                            </a>
                            <a href="javascript: void(0);" class="btn btn-primary ms-1">
                                <i class="mdi mdi-filter-variant"></i>
                            </a>
                        </form>
                    </div>
                    <h4 class="page-title">Students</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->
        <table class="table table-striped table-centered mb-0">
            <thead>
                <tr>
                    <th>User</th>
                    <th>Account No.</th>
                    <th>Balance</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="table-user">
                        <img src="assets/images/users/avatar-2.jpg" alt="table-user" class="me-2 rounded-circle" />
                        Risa D. Pearson
                    </td>
                    <td>AC336 508 2157</td>
                    <td>July 24, 1950</td>
                    <td class="table-action">
                        <a href="javascript: void(0);" class="action-icon"> <i class="mdi mdi-pencil"></i></a>
                        <a href="javascript: void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                    </td>
                </tr>
                <tr>
                    <td class="table-user">
                        <img src="assets/images/users/avatar-3.jpg" alt="table-user" class="me-2 rounded-circle" />
                        Ann C. Thompson
                    </td>
                    <td>SB646 473 2057</td>
                    <td>January 25, 1959</td>
                    <td class="table-action">
                        <a href="javascript: void(0);" class="action-icon"> <i class="mdi mdi-pencil"></i></a>
                        <a href="javascript: void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                    </td>
                </tr>
                <tr>
                    <td class="table-user">
                        <img src="assets/images/users/avatar-4.jpg" alt="table-user" class="me-2 rounded-circle" />
                        Paul J. Friend
                    </td>
                    <td>DL281 308 0793</td>
                    <td>September 1, 1939</td>
                    <td class="table-action">
                        <a href="javascript: void(0);" class="action-icon"> <i class="mdi mdi-pencil"></i></a>
                        <a href="javascript: void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                    </td>
                </tr>
                <tr>
                    <td class="table-user">
                        <img src="assets/images/users/avatar-5.jpg" alt="table-user" class="me-2 rounded-circle" />
                        Sean C. Nguyen
                    </td>
                    <td>CA269 714 6825</td>
                    <td>February 5, 1994</td>
                    <td class="table-action">
                        <a href="javascript: void(0);" class="action-icon"> <i class="mdi mdi-pencil"></i></a>
                        <a href="javascript: void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <div id="openAddForm" hidden>
        <span class="helper"></span>
        <div>
            <div class="rightbar-title title">
                <h5 class="m-0">Add Student</h5>
                <a href="javascript:void(0);" class="end-bar-toggle float-end">
                    <i class="dripicons-cross noti-icon" onclick="closeForm()"></i>
                </a>
                
            </div>

            <div class="student_adding_form">
                <form method="POST" action="{{route('add student')}}">
                @csrf
                    <div class="mb-3">
                        <label for="simpleinput" class="form-label">Name:</label>
                        <input type="text" id="simpleinput" name="name" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="example-number" class="form-label">Ad No:</label>
                        <input class="form-control" name="adno" id="example-number" type="number" name="number">
                    </div>
                    <div class="mb-3">
                        <label for="example-select" class="form-label">Class:</label>
                        <select class="form-select" name="class" id="example-select">
                            <option value="">Class</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>

@endsection
