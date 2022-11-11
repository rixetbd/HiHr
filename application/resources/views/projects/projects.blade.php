@extends('layouts.master')

@section('content')


<!-- Page Content -->
<div class="content container-fluid">

    <!-- Page Header -->
    <div class="page-header">
        <div class="row align-items-center">
            <div class="col">
                <h3 class="page-title">Projects</h3>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                    <li class="breadcrumb-item active">Projects</li>
                </ul>
            </div>
            <div class="col-auto float-right ml-auto">
                <a href="#" class="btn add-btn" data-toggle="modal" data-target="#create_project"><i
                        class="fa fa-plus"></i> Create Project</a>
                <div class="view-icons">
                    <a href="projects.html" class="grid-view btn btn-link active"><i class="fa fa-th"></i></a>
                    <a href="project-list.html" class="list-view btn btn-link"><i class="fa fa-bars"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- /Page Header -->

    <!-- Search Filter -->
    <div class="row filter-row">
        <div class="col-sm-6 col-md-3">
            <div class="form-group form-focus">
                <input type="text" class="form-control floating">
                <label class="focus-label">Project Name</label>
            </div>
        </div>
        <div class="col-sm-6 col-md-3">
            <div class="form-group form-focus">
                <input type="text" class="form-control floating">
                <label class="focus-label">Employee Name</label>
            </div>
        </div>
        <div class="col-sm-6 col-md-3">
            <div class="form-group form-focus select-focus">
                <select class="select floating">
                    <option>Select Roll</option>
                    <option>Web Developer</option>
                    <option>Web Designer</option>
                    <option>Android Developer</option>
                    <option>Ios Developer</option>
                </select>
                <label class="focus-label">Designation</label>
            </div>
        </div>
        <div class="col-sm-6 col-md-3">
            <a href="#" class="btn btn-success btn-block"> Search </a>
        </div>
    </div>
    <!-- Search Filter -->

    <div class="row">
        <div class="col-lg-4 col-sm-6 col-md-4 col-xl-3">
            <div class="card">
                <div class="card-body">
                    <div class="dropdown dropdown-action profile-action">
                        <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i
                                class="material-icons">more_vert</i></a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_project"><i
                                    class="fa fa-pencil m-r-5"></i> Edit</a>
                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_project"><i
                                    class="fa fa-trash-o m-r-5"></i> Delete</a>
                        </div>
                    </div>
                    <h4 class="project-title"><a href="project-view.html">Office Management</a></h4>
                    <small class="block text-ellipsis m-b-15">
                        <span class="text-xs">1</span> <span class="text-muted">open tasks, </span>
                        <span class="text-xs">9</span> <span class="text-muted">tasks completed</span>
                    </small>
                    <p class="text-muted">Lorem Ipsum is simply dummy text of the printing and
                        typesetting industry. When an unknown printer took a galley of type and
                        scrambled it...
                    </p>
                    <div class="pro-deadline m-b-15">
                        <div class="sub-title">
                            Deadline:
                        </div>
                        <div class="text-muted">
                            17 Apr 2019
                        </div>
                    </div>
                    <div class="project-members m-b-15">
                        <div>Project Leader :</div>
                        <ul class="team-members">
                            <li>
                                <a href="#" data-toggle="tooltip" title="Jeffery Lalor"><img alt=""
                                        src="{{asset('assets')}}/img/profiles/avatar-16.jpg"></a>
                            </li>
                        </ul>
                    </div>
                    <div class="project-members m-b-15">
                        <div>Team :</div>
                        <ul class="team-members">
                            <li>
                                <a href="#" data-toggle="tooltip" title="John Doe"><img alt=""
                                        src="{{asset('assets')}}/img/profiles/avatar-02.jpg"></a>
                            </li>
                            <li>
                                <a href="#" data-toggle="tooltip" title="Richard Miles"><img alt=""
                                        src="{{asset('assets')}}/img/profiles/avatar-09.jpg"></a></a>
                            </li>
                            <li>
                                <a href="#" data-toggle="tooltip" title="John Smith"><img alt=""
                                        src="{{asset('assets')}}/img/profiles/avatar-10.jpg"></a>
                            </li>
                            <li>
                                <a href="#" data-toggle="tooltip" title="Mike Litorus"><img alt=""
                                        src="{{asset('assets')}}/img/profiles/avatar-05.jpg"></a>
                            </li>
                            <li class="dropdown avatar-dropdown">
                                <a href="#" class="all-users dropdown-toggle" data-toggle="dropdown"
                                    aria-expanded="false">+15</a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <div class="avatar-group">
                                        <a class="avatar avatar-xs" href="#">
                                            <img alt="" src="{{asset('assets')}}/img/profiles/avatar-02.jpg">
                                        </a>
                                        <a class="avatar avatar-xs" href="#">
                                            <img alt="" src="{{asset('assets')}}/img/profiles/avatar-09.jpg">
                                        </a>
                                        <a class="avatar avatar-xs" href="#">
                                            <img alt="" src="{{asset('assets')}}/img/profiles/avatar-10.jpg">
                                        </a>
                                        <a class="avatar avatar-xs" href="#">
                                            <img alt="" src="{{asset('assets')}}/img/profiles/avatar-05.jpg">
                                        </a>
                                        <a class="avatar avatar-xs" href="#">
                                            <img alt="" src="{{asset('assets')}}/img/profiles/avatar-11.jpg">
                                        </a>
                                        <a class="avatar avatar-xs" href="#">
                                            <img alt="" src="{{asset('assets')}}/img/profiles/avatar-12.jpg">
                                        </a>
                                        <a class="avatar avatar-xs" href="#">
                                            <img alt="" src="{{asset('assets')}}/img/profiles/avatar-13.jpg">
                                        </a>
                                        <a class="avatar avatar-xs" href="#">
                                            <img alt="" src="{{asset('assets')}}/img/profiles/avatar-01.jpg">
                                        </a>
                                        <a class="avatar avatar-xs" href="#">
                                            <img alt="" src="{{asset('assets')}}/img/profiles/avatar-16.jpg">
                                        </a>
                                    </div>
                                    <div class="avatar-pagination">
                                        <ul class="pagination">
                                            <li class="page-item">
                                                <a class="page-link" href="#" aria-label="Previous">
                                                    <span aria-hidden="true">«</span>
                                                    <span class="sr-only">Previous</span>
                                                </a>
                                            </li>
                                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                                            <li class="page-item">
                                                <a class="page-link" href="#" aria-label="Next">
                                                    <span aria-hidden="true">»</span>
                                                    <span class="sr-only">Next</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <p class="m-b-5">Progress <span class="text-success float-right">40%</span></p>
                    <div class="progress progress-xs mb-0">
                        <div class="progress-bar bg-success" role="progressbar" data-toggle="tooltip" title="40%"
                            style="width: 40%"></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-sm-6 col-md-4 col-xl-3">
            <div class="card">
                <div class="card-body">
                    <div class="dropdown dropdown-action profile-action">
                        <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i
                                class="material-icons">more_vert</i></a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_project"><i
                                    class="fa fa-pencil m-r-5"></i> Edit</a>
                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_project"><i
                                    class="fa fa-trash-o m-r-5"></i> Delete</a>
                        </div>
                    </div>
                    <h4 class="project-title"><a href="project-view.html">Project Management</a></h4>
                    <small class="block text-ellipsis m-b-15">
                        <span class="text-xs">2</span> <span class="text-muted">open tasks, </span>
                        <span class="text-xs">5</span> <span class="text-muted">tasks completed</span>
                    </small>
                    <p class="text-muted">Lorem Ipsum is simply dummy text of the printing and
                        typesetting industry. When an unknown printer took a galley of type and
                        scrambled it...
                    </p>
                    <div class="pro-deadline m-b-15">
                        <div class="sub-title">
                            Deadline:
                        </div>
                        <div class="text-muted">
                            17 Apr 2019
                        </div>
                    </div>
                    <div class="project-members m-b-15">
                        <div>Project Leader :</div>
                        <ul class="team-members">
                            <li>
                                <a href="#" data-toggle="tooltip" title="Jeffery Lalor"><img alt=""
                                        src="{{asset('assets')}}/img/profiles/avatar-16.jpg"></a>
                            </li>
                        </ul>
                    </div>
                    <div class="project-members m-b-15">
                        <div>Team :</div>
                        <ul class="team-members">
                            <li>
                                <a href="#" data-toggle="tooltip" title="John Doe"><img alt=""
                                        src="{{asset('assets')}}/img/profiles/avatar-02.jpg"></a>
                            </li>
                            <li>
                                <a href="#" data-toggle="tooltip" title="Richard Miles"><img alt=""
                                        src="{{asset('assets')}}/img/profiles/avatar-09.jpg"></a></a>
                            </li>
                            <li>
                                <a href="#" data-toggle="tooltip" title="John Smith"><img alt=""
                                        src="{{asset('assets')}}/img/profiles/avatar-10.jpg"></a>
                            </li>
                            <li>
                                <a href="#" data-toggle="tooltip" title="Mike Litorus"><img alt=""
                                        src="{{asset('assets')}}/img/profiles/avatar-05.jpg"></a>
                            </li>
                            <li class="dropdown avatar-dropdown">
                                <a href="#" class="all-users dropdown-toggle" data-toggle="dropdown"
                                    aria-expanded="false">+15</a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <div class="avatar-group">
                                        <a class="avatar avatar-xs" href="#">
                                            <img alt="" src="{{asset('assets')}}/img/profiles/avatar-02.jpg">
                                        </a>
                                        <a class="avatar avatar-xs" href="#">
                                            <img alt="" src="{{asset('assets')}}/img/profiles/avatar-09.jpg">
                                        </a>
                                        <a class="avatar avatar-xs" href="#">
                                            <img alt="" src="{{asset('assets')}}/img/profiles/avatar-10.jpg">
                                        </a>
                                        <a class="avatar avatar-xs" href="#">
                                            <img alt="" src="{{asset('assets')}}/img/profiles/avatar-05.jpg">
                                        </a>
                                        <a class="avatar avatar-xs" href="#">
                                            <img alt="" src="{{asset('assets')}}/img/profiles/avatar-11.jpg">
                                        </a>
                                        <a class="avatar avatar-xs" href="#">
                                            <img alt="" src="{{asset('assets')}}/img/profiles/avatar-12.jpg">
                                        </a>
                                        <a class="avatar avatar-xs" href="#">
                                            <img alt="" src="{{asset('assets')}}/img/profiles/avatar-13.jpg">
                                        </a>
                                        <a class="avatar avatar-xs" href="#">
                                            <img alt="" src="{{asset('assets')}}/img/profiles/avatar-01.jpg">
                                        </a>
                                        <a class="avatar avatar-xs" href="#">
                                            <img alt="" src="{{asset('assets')}}/img/profiles/avatar-16.jpg">
                                        </a>
                                    </div>
                                    <div class="avatar-pagination">
                                        <ul class="pagination">
                                            <li class="page-item">
                                                <a class="page-link" href="#" aria-label="Previous">
                                                    <span aria-hidden="true">«</span>
                                                    <span class="sr-only">Previous</span>
                                                </a>
                                            </li>
                                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                                            <li class="page-item">
                                                <a class="page-link" href="#" aria-label="Next">
                                                    <span aria-hidden="true">»</span>
                                                    <span class="sr-only">Next</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <p class="m-b-5">Progress <span class="text-success float-right">40%</span></p>
                    <div class="progress progress-xs mb-0">
                        <div class="progress-bar bg-success" role="progressbar" data-toggle="tooltip" title="40%"
                            style="width: 40%"></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-sm-6 col-md-4 col-xl-3">
            <div class="card">
                <div class="card-body">
                    <div class="dropdown dropdown-action profile-action">
                        <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i
                                class="material-icons">more_vert</i></a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_project"><i
                                    class="fa fa-pencil m-r-5"></i> Edit</a>
                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_project"><i
                                    class="fa fa-trash-o m-r-5"></i> Delete</a>
                        </div>
                    </div>
                    <h4 class="project-title"><a href="project-view.html">Video Calling App</a></h4>
                    <small class="block text-ellipsis m-b-15">
                        <span class="text-xs">3</span> <span class="text-muted">open tasks, </span>
                        <span class="text-xs">3</span> <span class="text-muted">tasks completed</span>
                    </small>
                    <p class="text-muted">Lorem Ipsum is simply dummy text of the printing and
                        typesetting industry. When an unknown printer took a galley of type and
                        scrambled it...
                    </p>
                    <div class="pro-deadline m-b-15">
                        <div class="sub-title">
                            Deadline:
                        </div>
                        <div class="text-muted">
                            17 Apr 2019
                        </div>
                    </div>
                    <div class="project-members m-b-15">
                        <div>Project Leader :</div>
                        <ul class="team-members">
                            <li>
                                <a href="#" data-toggle="tooltip" title="Jeffery Lalor"><img alt=""
                                        src="{{asset('assets')}}/img/profiles/avatar-16.jpg"></a>
                            </li>
                        </ul>
                    </div>
                    <div class="project-members m-b-15">
                        <div>Team :</div>
                        <ul class="team-members">
                            <li>
                                <a href="#" data-toggle="tooltip" title="John Doe"><img alt=""
                                        src="{{asset('assets')}}/img/profiles/avatar-02.jpg"></a>
                            </li>
                            <li>
                                <a href="#" data-toggle="tooltip" title="Richard Miles"><img alt=""
                                        src="{{asset('assets')}}/img/profiles/avatar-09.jpg"></a></a>
                            </li>
                            <li>
                                <a href="#" data-toggle="tooltip" title="John Smith"><img alt=""
                                        src="{{asset('assets')}}/img/profiles/avatar-10.jpg"></a>
                            </li>
                            <li>
                                <a href="#" data-toggle="tooltip" title="Mike Litorus"><img alt=""
                                        src="{{asset('assets')}}/img/profiles/avatar-05.jpg"></a>
                            </li>
                            <li class="dropdown avatar-dropdown">
                                <a href="#" class="all-users dropdown-toggle" data-toggle="dropdown"
                                    aria-expanded="false">+15</a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <div class="avatar-group">
                                        <a class="avatar avatar-xs" href="#">
                                            <img alt="" src="{{asset('assets')}}/img/profiles/avatar-02.jpg">
                                        </a>
                                        <a class="avatar avatar-xs" href="#">
                                            <img alt="" src="{{asset('assets')}}/img/profiles/avatar-09.jpg">
                                        </a>
                                        <a class="avatar avatar-xs" href="#">
                                            <img alt="" src="{{asset('assets')}}/img/profiles/avatar-10.jpg">
                                        </a>
                                        <a class="avatar avatar-xs" href="#">
                                            <img alt="" src="{{asset('assets')}}/img/profiles/avatar-05.jpg">
                                        </a>
                                        <a class="avatar avatar-xs" href="#">
                                            <img alt="" src="{{asset('assets')}}/img/profiles/avatar-11.jpg">
                                        </a>
                                        <a class="avatar avatar-xs" href="#">
                                            <img alt="" src="{{asset('assets')}}/img/profiles/avatar-12.jpg">
                                        </a>
                                        <a class="avatar avatar-xs" href="#">
                                            <img alt="" src="{{asset('assets')}}/img/profiles/avatar-13.jpg">
                                        </a>
                                        <a class="avatar avatar-xs" href="#">
                                            <img alt="" src="{{asset('assets')}}/img/profiles/avatar-01.jpg">
                                        </a>
                                        <a class="avatar avatar-xs" href="#">
                                            <img alt="" src="{{asset('assets')}}/img/profiles/avatar-16.jpg">
                                        </a>
                                    </div>
                                    <div class="avatar-pagination">
                                        <ul class="pagination">
                                            <li class="page-item">
                                                <a class="page-link" href="#" aria-label="Previous">
                                                    <span aria-hidden="true">«</span>
                                                    <span class="sr-only">Previous</span>
                                                </a>
                                            </li>
                                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                                            <li class="page-item">
                                                <a class="page-link" href="#" aria-label="Next">
                                                    <span aria-hidden="true">»</span>
                                                    <span class="sr-only">Next</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <p class="m-b-5">Progress <span class="text-success float-right">40%</span></p>
                    <div class="progress progress-xs mb-0">
                        <div class="progress-bar bg-success" role="progressbar" data-toggle="tooltip" title="40%"
                            style="width: 40%"></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-sm-6 col-md-4 col-xl-3">
            <div class="card">
                <div class="card-body">
                    <div class="dropdown dropdown-action profile-action">
                        <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i
                                class="material-icons">more_vert</i></a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_project"><i
                                    class="fa fa-pencil m-r-5"></i> Edit</a>
                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_project"><i
                                    class="fa fa-trash-o m-r-5"></i> Delete</a>
                        </div>
                    </div>
                    <h4 class="project-title"><a href="project-view.html">Hospital Administration</a></h4>
                    <small class="block text-ellipsis m-b-15">
                        <span class="text-xs">12</span> <span class="text-muted">open tasks, </span>
                        <span class="text-xs">4</span> <span class="text-muted">tasks completed</span>
                    </small>
                    <p class="text-muted">Lorem Ipsum is simply dummy text of the printing and
                        typesetting industry. When an unknown printer took a galley of type and
                        scrambled it...
                    </p>
                    <div class="pro-deadline m-b-15">
                        <div class="sub-title">
                            Deadline:
                        </div>
                        <div class="text-muted">
                            17 Apr 2019
                        </div>
                    </div>
                    <div class="project-members m-b-15">
                        <div>Project Leader :</div>
                        <ul class="team-members">
                            <li>
                                <a href="#" data-toggle="tooltip" title="Jeffery Lalor"><img alt=""
                                        src="{{asset('assets')}}/img/profiles/avatar-16.jpg"></a>
                            </li>
                        </ul>
                    </div>
                    <div class="project-members m-b-15">
                        <div>Team :</div>
                        <ul class="team-members">
                            <li>
                                <a href="#" data-toggle="tooltip" title="John Doe"><img alt=""
                                        src="{{asset('assets')}}/img/profiles/avatar-02.jpg"></a>
                            </li>
                            <li>
                                <a href="#" data-toggle="tooltip" title="Richard Miles"><img alt=""
                                        src="{{asset('assets')}}/img/profiles/avatar-09.jpg"></a></a>
                            </li>
                            <li>
                                <a href="#" data-toggle="tooltip" title="John Smith"><img alt=""
                                        src="{{asset('assets')}}/img/profiles/avatar-10.jpg"></a>
                            </li>
                            <li>
                                <a href="#" data-toggle="tooltip" title="Mike Litorus"><img alt=""
                                        src="{{asset('assets')}}/img/profiles/avatar-05.jpg"></a>
                            </li>
                            <li class="dropdown avatar-dropdown">
                                <a href="#" class="all-users dropdown-toggle" data-toggle="dropdown"
                                    aria-expanded="false">+15</a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <div class="avatar-group">
                                        <a class="avatar avatar-xs" href="#">
                                            <img alt="" src="{{asset('assets')}}/img/profiles/avatar-02.jpg">
                                        </a>
                                        <a class="avatar avatar-xs" href="#">
                                            <img alt="" src="{{asset('assets')}}/img/profiles/avatar-09.jpg">
                                        </a>
                                        <a class="avatar avatar-xs" href="#">
                                            <img alt="" src="{{asset('assets')}}/img/profiles/avatar-10.jpg">
                                        </a>
                                        <a class="avatar avatar-xs" href="#">
                                            <img alt="" src="{{asset('assets')}}/img/profiles/avatar-05.jpg">
                                        </a>
                                        <a class="avatar avatar-xs" href="#">
                                            <img alt="" src="{{asset('assets')}}/img/profiles/avatar-11.jpg">
                                        </a>
                                        <a class="avatar avatar-xs" href="#">
                                            <img alt="" src="{{asset('assets')}}/img/profiles/avatar-12.jpg">
                                        </a>
                                        <a class="avatar avatar-xs" href="#">
                                            <img alt="" src="{{asset('assets')}}/img/profiles/avatar-13.jpg">
                                        </a>
                                        <a class="avatar avatar-xs" href="#">
                                            <img alt="" src="{{asset('assets')}}/img/profiles/avatar-01.jpg">
                                        </a>
                                        <a class="avatar avatar-xs" href="#">
                                            <img alt="" src="{{asset('assets')}}/img/profiles/avatar-16.jpg">
                                        </a>
                                    </div>
                                    <div class="avatar-pagination">
                                        <ul class="pagination">
                                            <li class="page-item">
                                                <a class="page-link" href="#" aria-label="Previous">
                                                    <span aria-hidden="true">«</span>
                                                    <span class="sr-only">Previous</span>
                                                </a>
                                            </li>
                                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                                            <li class="page-item">
                                                <a class="page-link" href="#" aria-label="Next">
                                                    <span aria-hidden="true">»</span>
                                                    <span class="sr-only">Next</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <p class="m-b-5">Progress <span class="text-success float-right">40%</span></p>
                    <div class="progress progress-xs mb-0">
                        <div class="progress-bar bg-success" role="progressbar" data-toggle="tooltip" title="40%"
                            style="width: 40%"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /Page Content -->

<!-- Create Project Modal -->
<div id="create_project" class="modal custom-modal fade" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Create Project</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Project Name</label>
                                <input class="form-control" type="text">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Client</label>
                                <select class="select">
                                    <option>Global Technologies</option>
                                    <option>Delta Infotech</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Start Date</label>
                                <div class="cal-icon">
                                    <input class="form-control datetimepicker" type="text">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>End Date</label>
                                <div class="cal-icon">
                                    <input class="form-control datetimepicker" type="text">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="form-group">
                                <label>Rate</label>
                                <input placeholder="$50" class="form-control" type="text">
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group">
                                <label>&nbsp;</label>
                                <select class="select">
                                    <option>Hourly</option>
                                    <option>Fixed</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Priority</label>
                                <select class="select">
                                    <option>High</option>
                                    <option>Medium</option>
                                    <option>Low</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Add Project Leader</label>
                                <input class="form-control" type="text">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Team Leader</label>
                                <div class="project-members">
                                    <a href="#" data-toggle="tooltip" title="Jeffery Lalor" class="avatar">
                                        <img src="{{asset('assets')}}/img/profiles/avatar-16.jpg" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Add Team</label>
                                <input class="form-control" type="text">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Team Members</label>
                                <div class="project-members">
                                    <a href="#" data-toggle="tooltip" title="John Doe" class="avatar">
                                        <img src="{{asset('assets')}}/img/profiles/avatar-16.jpg" alt="">
                                    </a>
                                    <a href="#" data-toggle="tooltip" title="Richard Miles" class="avatar">
                                        <img src="{{asset('assets')}}/img/profiles/avatar-09.jpg" alt="">
                                    </a>
                                    <a href="#" data-toggle="tooltip" title="John Smith" class="avatar">
                                        <img src="{{asset('assets')}}/img/profiles/avatar-10.jpg" alt="">
                                    </a>
                                    <a href="#" data-toggle="tooltip" title="Mike Litorus" class="avatar">
                                        <img src="{{asset('assets')}}/img/profiles/avatar-05.jpg" alt="">
                                    </a>
                                    <span class="all-team">+2</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Description</label>
                        <textarea rows="4" class="form-control summernote"
                            placeholder="Enter your message here"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Upload Files</label>
                        <input class="form-control" type="file">
                    </div>
                    <div class="submit-section">
                        <button class="btn btn-primary submit-btn">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- /Create Project Modal -->

<!-- Edit Project Modal -->
<div id="edit_project" class="modal custom-modal fade" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit Project</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Project Name</label>
                                <input class="form-control" value="Project Management" type="text">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Client</label>
                                <select class="select">
                                    <option>Global Technologies</option>
                                    <option>Delta Infotech</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Start Date</label>
                                <div class="cal-icon">
                                    <input class="form-control datetimepicker" type="text">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>End Date</label>
                                <div class="cal-icon">
                                    <input class="form-control datetimepicker" type="text">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="form-group">
                                <label>Rate</label>
                                <input placeholder="$50" class="form-control" value="$5000" type="text">
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group">
                                <label>&nbsp;</label>
                                <select class="select">
                                    <option>Hourly</option>
                                    <option selected>Fixed</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Priority</label>
                                <select class="select">
                                    <option selected>High</option>
                                    <option>Medium</option>
                                    <option>Low</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Add Project Leader</label>
                                <input class="form-control" type="text">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Team Leader</label>
                                <div class="project-members">
                                    <a href="#" data-toggle="tooltip" title="Jeffery Lalor" class="avatar">
                                        <img src="{{asset('assets')}}/img/profiles/avatar-16.jpg" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Add Team</label>
                                <input class="form-control" type="text">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Team Members</label>
                                <div class="project-members">
                                    <a href="#" data-toggle="tooltip" title="John Doe" class="avatar">
                                        <img src="{{asset('assets')}}/img/profiles/avatar-16.jpg" alt="">
                                    </a>
                                    <a href="#" data-toggle="tooltip" title="Richard Miles" class="avatar">
                                        <img src="{{asset('assets')}}/img/profiles/avatar-09.jpg" alt="">
                                    </a>
                                    <a href="#" data-toggle="tooltip" title="John Smith" class="avatar">
                                        <img src="{{asset('assets')}}/img/profiles/avatar-10.jpg" alt="">
                                    </a>
                                    <a href="#" data-toggle="tooltip" title="Mike Litorus" class="avatar">
                                        <img src="{{asset('assets')}}/img/profiles/avatar-05.jpg" alt="">
                                    </a>
                                    <span class="all-team">+2</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Description</label>
                        <textarea rows="4" class="form-control" placeholder="Enter your message here"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Upload Files</label>
                        <input class="form-control" type="file">
                    </div>
                    <div class="submit-section">
                        <button class="btn btn-primary submit-btn">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- /Edit Project Modal -->

<!-- Delete Project Modal -->
<div class="modal custom-modal fade" id="delete_project" role="dialog">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                <div class="form-header">
                    <h3>Delete Project</h3>
                    <p>Are you sure want to delete?</p>
                </div>
                <div class="modal-btn delete-action">
                    <div class="row">
                        <div class="col-6">
                            <a href="javascript:void(0);" class="btn btn-primary continue-btn">Delete</a>
                        </div>
                        <div class="col-6">
                            <a href="javascript:void(0);" data-dismiss="modal"
                                class="btn btn-primary cancel-btn">Cancel</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /Delete Project Modal -->

@endsection

