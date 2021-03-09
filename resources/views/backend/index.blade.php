@extends('backend.layouts.master')
@section('page_content')
    <div class="row">
        <div class="col-sm-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Demo Form</h3>
                    <div class="panel-options">
                        <a href="#" data-toggle="panel">
                            <span class="collapse-icon">&ndash;</span>
                            <span class="expand-icon">+</span>
                        </a>
                        <a href="#" data-toggle="remove">
                            &times;
                        </a>
                    </div>
                </div>
                <div class="panel-body">
                    <form method="get" role="form" class="validate">
                        <div class="form-group">
                            <label class="col-sm-2 control-label" for="field-1"> Name</label>

                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="name" data-validate="required" placeholder="Enter your name">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label" for="field-2">Password</label>

                            <div class="col-sm-10">
                                <input type="password" class="form-control" id="field-2" data-validate="required" placeholder="Enter Password">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Gender</label>

                            <div class="col-sm-10">
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="radio-1" male>
                                        Male
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="radio-1" female>
                                         Female
                                    </label>
                                </div>
                            </div>
                        </div>
                        <button type=submit class="form-group">Submit</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
    @endsection
