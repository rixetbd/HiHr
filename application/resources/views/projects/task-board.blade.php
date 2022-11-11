@extends('layouts.master')

@section('content')


<!-- Page Content -->
<div class="content container-fluid">

    <!-- Page Header -->
    <div class="page-header">
        <div class="row">
            <div class="col-sm-12">
                <h3 class="page-title">Hospital Admin</h3>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                    <li class="breadcrumb-item active">Task Board</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- /Page Header -->

    <div class="row board-view-header">
        <div class="col-4">
            <div class="pro-teams">
                <div class="pro-team-lead">
                    <h4>Lead</h4>
                    <div class="avatar-group">
                        <div class="avatar">
                            <img class="avatar-img rounded-circle border border-white" alt="User Image"
                                src="{{asset('assets')}}/img/profiles/avatar-11.jpg">
                        </div>
                        <div class="avatar">
                            <img class="avatar-img rounded-circle border border-white" alt="User Image"
                                src="{{asset('assets')}}/img/profiles/avatar-01.jpg">
                        </div>
                        <div class="avatar">
                            <img class="avatar-img rounded-circle border border-white" alt="User Image"
                                src="{{asset('assets')}}/img/profiles/avatar-16.jpg">
                        </div>
                        <div class="avatar">
                            <a href="" class="avatar-title rounded-circle border border-white" data-toggle="modal"
                                data-target="#assign_leader"><i class="fa fa-plus"></i></a>
                        </div>
                    </div>
                </div>
                <div class="pro-team-members">
                    <h4>Team</h4>
                    <div class="avatar-group">
                        <div class="avatar">
                            <img class="avatar-img rounded-circle border border-white" alt="User Image"
                                src="{{asset('assets')}}/img/profiles/avatar-02.jpg">
                        </div>
                        <div class="avatar">
                            <img class="avatar-img rounded-circle border border-white" alt="User Image"
                                src="{{asset('assets')}}/img/profiles/avatar-09.jpg">
                        </div>
                        <div class="avatar">
                            <img class="avatar-img rounded-circle border border-white" alt="User Image"
                                src="{{asset('assets')}}/img/profiles/avatar-12.jpg">
                        </div>
                        <div class="avatar">
                            <a href="" class="avatar-title rounded-circle border border-white" data-toggle="modal"
                                data-target="#assign_user"><i class="fa fa-plus"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-8 text-right">
            <a href="#" class="btn btn-white float-right ml-2" data-toggle="modal" data-target="#add_task_board"><i
                    class="fa fa-plus"></i> Create List</a>
            <a href="project-view.html" class="btn btn-white float-right" title="View Board"><i
                    class="fa fa-link"></i></a>
        </div>

        <div class="col-12">
            <div class="pro-progress">
                <div class="pro-progress-bar">
                    <h4>Progress</h4>
                    <div class="progress">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 20%"></div>
                    </div>
                    <span>20%</span>
                </div>
            </div>
        </div>
    </div>

    <div class="kanban-board card mb-0">
        <div class="card-body">
            <div class="kanban-cont">
                <div class="kanban-list kanban-danger">
                    <div class="kanban-header">
                        <span class="status-title">Pending</span>
                        <div class="dropdown kanban-action">
                            <a href="" data-toggle="dropdown">
                                <i class="fa fa-ellipsis-v"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#" data-toggle="modal"
                                    data-target="#edit_task_board">Edit</a>
                                <a class="dropdown-item" href="#">Delete</a>
                            </div>
                        </div>
                    </div>
                    <div class="kanban-wrap">
                        <div class="card panel">
                            <div class="kanban-box">
                                <div class="task-board-header">
                                    <span class="status-title"><a href="task-view.html">Website redesign</a></span>
                                    <div class="dropdown kanban-task-action">
                                        <a href="" data-toggle="dropdown">
                                            <i class="fa fa-angle-down"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#" data-toggle="modal"
                                                data-target="#edit_task_modal">Edit</a></li>
                                            <a class="dropdown-item" href="#">Delete</a></li>
                                        </div>
                                    </div>
                                </div>
                                <div class="task-board-body">
                                    <div class="kanban-info">
                                        <div class="progress progress-xs">
                                            <div class="progress-bar" role="progressbar" style="width: 20%"
                                                aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <span>70%</span>
                                    </div>
                                    <div class="kanban-footer">
                                        <span class="task-info-cont">
                                            <span class="task-date"><i class="fa fa-clock-o"></i> Sep 26</span>
                                            <span class="task-priority badge bg-inverse-danger">High</span>
                                        </span>
                                        <span class="task-users">
                                            <img src="{{asset('assets')}}/img/profiles/avatar-12.jpg" class="task-avatar" width="24"
                                                height="24">
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card panel">
                            <div class="kanban-box">
                                <div class="task-board-header">
                                    <span class="status-title"><a href="task-view.html">Make a wireframe</a></span>
                                    <div class="dropdown kanban-task-action">
                                        <a href="" data-toggle="dropdown">
                                            <i class="fa fa-angle-down"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#" data-toggle="modal"
                                                data-target="#edit_task_modal">Edit</a></li>
                                            <a class="dropdown-item" href="#">Delete</a></li>
                                        </div>
                                    </div>
                                </div>
                                <div class="task-board-body">
                                    <div class="kanban-info">
                                        <div class="progress progress-xs">
                                            <div class="progress-bar" role="progressbar" style="width: 20%"
                                                aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <span>70%</span>
                                    </div>
                                    <div class="kanban-footer">
                                        <span class="task-info-cont">
                                            <span class="task-date"><i class="fa fa-clock-o"></i> Sep 26</span>
                                            <span class="task-priority badge bg-inverse-success">Low</span>
                                        </span>
                                        <span class="task-users">
                                            <img src="{{asset('assets')}}/img/profiles/avatar-12.jpg" class="task-avatar" width="24"
                                                height="24">
                                            <span class="task-user-count">+2</span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card panel">
                            <div class="kanban-box">
                                <div class="task-board-header">
                                    <span class="status-title"><a href="task-view.html">Website redesign</a></span>
                                    <div class="dropdown kanban-task-action">
                                        <a href="" data-toggle="dropdown">
                                            <i class="fa fa-angle-down"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#" data-toggle="modal"
                                                data-target="#edit_task_modal">Edit</a></li>
                                            <a class="dropdown-item" href="#">Delete</a></li>
                                        </div>
                                    </div>
                                </div>
                                <div class="task-board-body">
                                    <div class="kanban-info">
                                        <div class="progress progress-xs">
                                            <div class="progress-bar" role="progressbar" style="width: 20%"
                                                aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <span>70%</span>
                                    </div>
                                    <div class="kanban-footer">
                                        <span class="task-info-cont">
                                            <span class="task-date"><i class="fa fa-clock-o"></i> Sep 26</span>
                                            <span class="task-priority badge bg-inverse-warning">Normal</span>
                                        </span>
                                        <span class="task-users">
                                            <img src="{{asset('assets')}}/img/profiles/avatar-12.jpg" class="task-avatar" width="24"
                                                height="24">
                                            <span class="task-user-count">+2</span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="add-new-task">
                        <a href="javascript:void(0);" data-toggle="modal" data-target="#add_task_modal">Add New Task</a>
                    </div>
                </div>
                <div class="kanban-list kanban-info">
                    <div class="kanban-header">
                        <span class="status-title">Progress</span>
                        <div class="dropdown kanban-action">
                            <a href="" data-toggle="dropdown">
                                <i class="fa fa-ellipsis-v"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#" data-toggle="modal"
                                    data-target="#edit_task_board">Edit</a>
                                <a class="dropdown-item" href="#">Delete</a>
                            </div>
                        </div>
                    </div>
                    <div class="kanban-wrap">
                        <div class="card panel">
                            <div class="kanban-box">
                                <div class="task-board-header">
                                    <span class="status-title"><a href="task-view.html">Website redesign</a></span>
                                    <div class="dropdown kanban-task-action">
                                        <a href="" data-toggle="dropdown">
                                            <i class="fa fa-angle-down"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#" data-toggle="modal"
                                                data-target="#edit_task_modal">Edit</a></li>
                                            <a class="dropdown-item" href="#">Delete</a></li>
                                        </div>
                                    </div>
                                </div>
                                <div class="task-board-body">
                                    <div class="kanban-info">
                                        <div class="progress progress-xs">
                                            <div class="progress-bar" role="progressbar" style="width: 20%"
                                                aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <span>70%</span>
                                    </div>
                                    <div class="kanban-footer">
                                        <span class="task-info-cont">
                                            <span class="task-date"><i class="fa fa-clock-o"></i> Sep 26</span>
                                            <span class="task-priority badge bg-inverse-warning">Normal</span>
                                        </span>
                                        <span class="task-users">
                                            <img src="{{asset('assets')}}/img/profiles/avatar-12.jpg" class="task-avatar" width="24"
                                                height="24">
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card panel">
                            <div class="kanban-box">
                                <div class="task-board-header">
                                    <span class="status-title"><a href="task-view.html">Website redesign</a></span>
                                    <div class="dropdown kanban-task-action">
                                        <a href="" data-toggle="dropdown">
                                            <i class="fa fa-angle-down"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#" data-toggle="modal"
                                                data-target="#edit_task_modal">Edit</a></li>
                                            <a class="dropdown-item" href="#">Delete</a></li>
                                        </div>
                                    </div>
                                </div>
                                <div class="task-board-body">
                                    <div class="kanban-info">
                                        <div class="progress progress-xs">
                                            <div class="progress-bar" role="progressbar" style="width: 20%"
                                                aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <span>70%</span>
                                    </div>
                                    <div class="kanban-footer">
                                        <span class="task-info-cont">
                                            <span class="task-date"><i class="fa fa-clock-o"></i> Sep 26</span>
                                            <span class="task-priority badge bg-inverse-danger">High</span>
                                        </span>
                                        <span class="task-users">
                                            <img src="{{asset('assets')}}/img/profiles/avatar-12.jpg" class="task-avatar" width="24"
                                                height="24">
                                            <span class="task-user-count">+2</span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="add-new-task">
                        <a href="javascript:void(0);" data-toggle="modal" data-target="#add_task_modal">Add New Task</a>
                    </div>
                </div>
                <div class="kanban-list kanban-success">
                    <div class="kanban-header">
                        <span class="status-title">Completed</span>
                        <div class="dropdown kanban-action">
                            <a href="" data-toggle="dropdown">
                                <i class="fa fa-ellipsis-v"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#" data-toggle="modal"
                                    data-target="#edit_task_board">Edit</a>
                                <a class="dropdown-item" href="#">Delete</a>
                            </div>
                        </div>
                    </div>
                    <div class="kanban-wrap ks-empty">
                    </div>
                    <div class="add-new-task">
                        <a href="javascript:void(0);" data-toggle="modal" data-target="#add_task_modal">Add New Task</a>
                    </div>
                </div>

                <div class="kanban-list kanban-warning">
                    <div class="kanban-header">
                        <span class="status-title">Inprogress</span>
                        <div class="dropdown kanban-action">
                            <a href="" data-toggle="dropdown">
                                <i class="fa fa-ellipsis-v"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#">Edit</a>
                                <a class="dropdown-item" href="#">Delete</a>
                            </div>
                        </div>
                    </div>
                    <div class="kanban-wrap">
                        <div class="card panel">
                            <div class="kanban-box">
                                <div class="task-board-header">
                                    <span class="status-title"><a href="task-view.html">Website redesign</a></span>
                                    <div class="dropdown kanban-task-action">
                                        <a href="" data-toggle="dropdown">
                                            <i class="fa fa-angle-down"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#" data-toggle="modal"
                                                data-target="#edit_task_modal">Edit</a></li>
                                            <a class="dropdown-item" href="#">Delete</a></li>
                                        </div>
                                    </div>
                                </div>
                                <div class="task-board-body">
                                    <div class="kanban-info">
                                        <div class="progress progress-xs">
                                            <div class="progress-bar" role="progressbar" style="width: 20%"
                                                aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <span>70%</span>
                                    </div>
                                    <div class="kanban-footer">
                                        <span class="task-info-cont">
                                            <span class="task-date"><i class="fa fa-clock-o"></i> Sep 26</span>
                                            <span class="task-priority badge bg-inverse-success">Low</span>
                                        </span>
                                        <span class="task-users">
                                            <img src="{{asset('assets')}}/img/profiles/avatar-12.jpg" class="task-avatar" width="24"
                                                height="24">
                                            <span class="task-user-count">+2</span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="add-new-task">
                        <a href="javascript:void(0);" data-toggle="modal" data-target="#add_task_modal">Add New Task</a>
                    </div>
                </div>

                <div class="kanban-list kanban-purple">
                    <div class="kanban-header">
                        <span class="status-title">On Hold</span>
                        <div class="dropdown kanban-action">
                            <a href="" data-toggle="dropdown">
                                <i class="fa fa-ellipsis-v"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#" data-toggle="modal"
                                    data-target="#edit_task_board">Edit</a>
                                <a class="dropdown-item" href="#">Delete</a>
                            </div>
                        </div>
                    </div>
                    <div class="kanban-wrap">
                        <div class="card panel">
                            <div class="kanban-box">
                                <div class="task-board-header">
                                    <span class="status-title"><a href="task-view.html">Website redesign</a></span>
                                    <div class="dropdown kanban-task-action">
                                        <a href="" data-toggle="dropdown">
                                            <i class="fa fa-angle-down"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#" data-toggle="modal"
                                                data-target="#edit_task_modal">Edit</a></li>
                                            <a class="dropdown-item" href="#">Delete</a></li>
                                        </div>
                                    </div>
                                </div>
                                <div class="task-board-body">
                                    <div class="kanban-info">
                                        <div class="progress progress-xs">
                                            <div class="progress-bar" role="progressbar" style="width: 20%"
                                                aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <span>70%</span>
                                    </div>
                                    <div class="kanban-footer">
                                        <span class="task-info-cont">
                                            <span class="task-date"><i class="fa fa-clock-o"></i> Sep 26</span>
                                            <span class="task-priority badge bg-inverse-danger">High</span>
                                        </span>
                                        <span class="task-users">
                                            <img src="{{asset('assets')}}/img/profiles/avatar-12.jpg" class="task-avatar" width="24"
                                                height="24">
                                            <span class="task-user-count">+2</span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="add-new-task">
                        <a href="javascript:void(0);" data-toggle="modal" data-target="#add_task_modal">Add New Task</a>
                    </div>
                </div>

                <div class="kanban-list kanban-primary">
                    <div class="kanban-header">
                        <span class="status-title">Review</span>
                        <div class="dropdown kanban-action">
                            <a href="" data-toggle="dropdown">
                                <i class="fa fa-ellipsis-v"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#" data-toggle="modal"
                                    data-target="#edit_task_board">Edit</a>
                                <a class="dropdown-item" href="#">Delete</a>
                            </div>
                        </div>
                    </div>
                    <div class="kanban-wrap">
                        <div class="card panel">
                            <div class="kanban-box">
                                <div class="task-board-header">
                                    <span class="status-title"><a href="task-view.html">Website redesign</a></span>
                                    <div class="dropdown kanban-task-action">
                                        <a href="" data-toggle="dropdown">
                                            <i class="fa fa-angle-down"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#" data-toggle="modal"
                                                data-target="#edit_task_modal">Edit</a></li>
                                            <a class="dropdown-item" href="#">Delete</a></li>
                                        </div>
                                    </div>
                                </div>
                                <div class="task-board-body">
                                    <div class="kanban-info">
                                        <div class="progress progress-xs">
                                            <div class="progress-bar" role="progressbar" style="width: 20%"
                                                aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <span>70%</span>
                                    </div>
                                    <div class="kanban-footer">
                                        <span class="task-info-cont">
                                            <span class="task-date"><i class="fa fa-clock-o"></i> Sep 26</span>
                                            <span class="task-priority badge bg-inverse-danger">High</span>
                                        </span>
                                        <span class="task-users">
                                            <img src="{{asset('assets')}}/img/profiles/avatar-12.jpg" class="task-avatar" width="24"
                                                height="24">
                                            <span class="task-user-count">+2</span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="add-new-task">
                        <a href="javascript:void(0);" data-toggle="modal" data-target="#add_task_modal">Add New Task</a>
                    </div>
                </div>

            </div>
        </div>
    </div>

</div>
<!-- /Page Content -->

<div id="add_task_board" class="modal custom-modal fade" role="dialog">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Add Task Board</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label>Task Board Name</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="form-group task-board-color">
                        <label>Task Board Color</label>
                        <div class="board-color-list">
                            <label class="board-control board-primary">
                                <input name="radio" type="radio" class="board-control-input" value="primary" checked="">
                                <span class="board-indicator"></span>
                            </label>
                            <label class="board-control board-success">
                                <input name="radio" type="radio" class="board-control-input" value="success">
                                <span class="board-indicator"></span>
                            </label>
                            <label class="board-control board-info">
                                <input name="radio" type="radio" class="board-control-input" value="info">
                                <span class="board-indicator"></span>
                            </label>
                            <label class="board-control board-purple">
                                <input name="radio" type="radio" class="board-control-input" value="purple">
                                <span class="board-indicator"></span>
                            </label>
                            <label class="board-control board-warning">
                                <input name="radio" type="radio" class="board-control-input" value="warning">
                                <span class="board-indicator"></span>
                            </label>
                            <label class="board-control board-danger">
                                <input name="radio" type="radio" class="board-control-input" value="danger">
                                <span class="board-indicator"></span>
                            </label>
                        </div>
                    </div>
                    <div class="m-t-20 text-center">
                        <button class="btn btn-primary btn-lg">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div id="edit_task_board" class="modal custom-modal fade" role="dialog">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Edit Task Board</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label>Task Board Name</label>
                        <input type="text" class="form-control" value="Pending">
                    </div>
                    <div class="form-group task-board-color">
                        <label>Task Board Color</label>
                        <div class="board-color-list">
                            <label class="board-control board-primary">
                                <input name="radio" type="radio" class="board-control-input" value="primary" checked="">
                                <span class="board-indicator"></span>
                            </label>
                            <label class="board-control board-success">
                                <input name="radio" type="radio" class="board-control-input" value="success">
                                <span class="board-indicator"></span>
                            </label>
                            <label class="board-control board-info">
                                <input name="radio" type="radio" class="board-control-input" value="info">
                                <span class="board-indicator"></span>
                            </label>
                            <label class="board-control board-purple">
                                <input name="radio" type="radio" class="board-control-input" value="purple">
                                <span class="board-indicator"></span>
                            </label>
                            <label class="board-control board-warning">
                                <input name="radio" type="radio" class="board-control-input" value="warning">
                                <span class="board-indicator"></span>
                            </label>
                            <label class="board-control board-danger">
                                <input name="radio" type="radio" class="board-control-input" value="danger">
                                <span class="board-indicator"></span>
                            </label>
                        </div>
                    </div>
                    <div class="m-t-20 text-center">
                        <button class="btn btn-primary btn-lg">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div id="new_project" class="modal custom-modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Create New Project</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label>Project Name</label>
                        <input class="form-control" type="text">
                    </div>
                    <div class="submit-section">
                        <button class="btn btn-primary submit-btn">Create Project</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Assign Leader Modal -->
<div id="assign_leader" class="modal custom-modal fade" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Assign Leader to this project</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="input-group m-b-30">
                    <input placeholder="Search to add a leader" class="form-control search-input" type="text">
                    <span class="input-group-append">
                        <button class="btn btn-primary">Search</button>
                    </span>
                </div>
                <div>
                    <ul class="chat-user-list">
                        <li>
                            <a href="#">
                                <div class="media">
                                    <span class="avatar"><img alt="" src="{{asset('assets')}}/img/profiles/avatar-09.jpg"></span>
                                    <div class="media-body align-self-center text-nowrap">
                                        <div class="user-name">Richard Miles</div>
                                        <span class="designation">Web Developer</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div class="media">
                                    <span class="avatar"><img alt="" src="{{asset('assets')}}/img/profiles/avatar-10.jpg"></span>
                                    <div class="media-body align-self-center text-nowrap">
                                        <div class="user-name">John Smith</div>
                                        <span class="designation">Android Developer</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div class="media">
                                    <span class="avatar">
                                        <img alt="" src="{{asset('assets')}}/img/profiles/avatar-16.jpg">
                                    </span>
                                    <div class="media-body align-self-center text-nowrap">
                                        <div class="user-name">Jeffery Lalor</div>
                                        <span class="designation">Team Leader</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="submit-section">
                    <button class="btn btn-primary submit-btn">Submit</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /Assign Leader Modal -->

<!-- Assign User Modal -->
<div id="assign_user" class="modal custom-modal fade" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Assign the user to this project</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="input-group m-b-30">
                    <input placeholder="Search a user to assign" class="form-control search-input" type="text">
                    <span class="input-group-append">
                        <button class="btn btn-primary">Search</button>
                    </span>
                </div>
                <div>
                    <ul class="chat-user-list">
                        <li>
                            <a href="#">
                                <div class="media">
                                    <span class="avatar"><img alt="" src="{{asset('assets')}}/img/profiles/avatar-09.jpg"></span>
                                    <div class="media-body align-self-center text-nowrap">
                                        <div class="user-name">Richard Miles</div>
                                        <span class="designation">Web Developer</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div class="media">
                                    <span class="avatar"><img alt="" src="{{asset('assets')}}/img/profiles/avatar-10.jpg"></span>
                                    <div class="media-body align-self-center text-nowrap">
                                        <div class="user-name">John Smith</div>
                                        <span class="designation">Android Developer</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div class="media">
                                    <span class="avatar">
                                        <img alt="" src="{{asset('assets')}}/img/profiles/avatar-16.jpg">
                                    </span>
                                    <div class="media-body align-self-center text-nowrap">
                                        <div class="user-name">Jeffery Lalor</div>
                                        <span class="designation">Team Leader</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="submit-section">
                    <button class="btn btn-primary submit-btn">Submit</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /Assign User Modal -->

<!-- Add Task Modal -->
<div id="add_task_modal" class="modal custom-modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Add Task</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label>Task Name</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Task Priority</label>
                        <select class="form-control select">
                            <option>Select</option>
                            <option>High</option>
                            <option>Normal</option>
                            <option>Low</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Due Date</label>
                        <div class="cal-icon"><input class="form-control datetimepicker" type="text"></div>
                    </div>
                    <div class="form-group">
                        <label>Task Followers</label>
                        <input type="text" class="form-control" placeholder="Search to add">
                        <div class="task-follower-list">
                            <span data-toggle="tooltip" title="John Doe">
                                <img src="{{asset('assets')}}/img/profiles/avatar-02.jpg" class="avatar" alt="John Doe" width="20"
                                    height="20">
                                <i class="fa fa-times"></i>
                            </span>
                            <span data-toggle="tooltip" title="Richard Miles">
                                <img src="{{asset('assets')}}/img/profiles/avatar-09.jpg" class="avatar" alt="Richard Miles"
                                    width="20" height="20">
                                <i class="fa fa-times"></i>
                            </span>
                            <span data-toggle="tooltip" title="John Smith">
                                <img src="{{asset('assets')}}/img/profiles/avatar-10.jpg" class="avatar" alt="John Smith" width="20"
                                    height="20">
                                <i class="fa fa-times"></i>
                            </span>
                            <span data-toggle="tooltip" title="Mike Litorus">
                                <img src="{{asset('assets')}}/img/profiles/avatar-05.jpg" class="avatar" alt="Mike Litorus"
                                    width="20" height="20">
                                <i class="fa fa-times"></i>
                            </span>
                        </div>
                    </div>
                    <div class="submit-section text-center">
                        <button class="btn btn-primary submit-btn">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- /Add Task Modal -->

<!-- Edit Task Modal -->
<div id="edit_task_modal" class="modal custom-modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Edit Task</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label>Task Name</label>
                        <input type="text" class="form-control" value="Website Redesign">
                    </div>
                    <div class="form-group">
                        <label>Task Priority</label>
                        <select class="form-control select">
                            <option>Select</option>
                            <option selected>High</option>
                            <option>Normal</option>
                            <option>Low</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Due Date</label>
                        <div class="cal-icon">
                            <input class="form-control datetimepicker" type="text" value="20/08/2019">
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Task Followers</label>
                        <input type="text" class="form-control" placeholder="Search to add">
                        <div class="task-follower-list">
                            <span data-toggle="tooltip" title="John Doe">
                                <img src="{{asset('assets')}}/img/profiles/avatar-02.jpg" class="avatar" alt="John Doe" width="20"
                                    height="20">
                                <i class="fa fa-times"></i>
                            </span>
                            <span data-toggle="tooltip" title="Richard Miles">
                                <img src="{{asset('assets')}}/img/profiles/avatar-09.jpg" class="avatar" alt="Richard Miles"
                                    width="20" height="20">
                                <i class="fa fa-times"></i>
                            </span>
                            <span data-toggle="tooltip" title="John Smith">
                                <img src="{{asset('assets')}}/img/profiles/avatar-10.jpg" class="avatar" alt="John Smith" width="20"
                                    height="20">
                                <i class="fa fa-times"></i>
                            </span>
                            <span data-toggle="tooltip" title="Mike Litorus">
                                <img src="{{asset('assets')}}/img/profiles/avatar-05.jpg" class="avatar" alt="Mike Litorus"
                                    width="20" height="20">
                                <i class="fa fa-times"></i>
                            </span>
                        </div>
                    </div>
                    <div class="submit-section text-center">
                        <button class="btn btn-primary submit-btn">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- /Edit Task Modal -->

@endsection

