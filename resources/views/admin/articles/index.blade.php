@extends('admin.index') @section('content')
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
                Dashboard <small>Statistics Overview</small>
            </h1>
        <ol class="breadcrumb">
            <li class="active">
                <i class="fa fa-dashboard"></i> Dashboard
            </li>
            <li>{{ trans('ui_admin.a.home.bread') }}</li>
        </ol>
    </div>
</div>
<!-- /.row -->
<div class="row">
	<div class="col-lg-3">
        <select name="" id="input" class="form-control" required="required">
        	<option value="d">czx</option>
        	<option value="">zv</option>
        	<option value="">zxv</option>
        </select>
    </div>
    <div class="col-lg-3 right">
        <div class="input-group">
            <input type="text" class="form-control" placeholder="Search for...">
            <span class="input-group-btn">
	        <button class="btn btn-default" type="button"><i class="fa fa-search"></i></button>
	      </span>
        </div>
        <!-- /input-group -->
    </div>
    <!-- /.col-lg-6 -->
    <div class="col-md-12">
        @if(isset($articles) && $articles->count() > 0)
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th width="5%">#{{ trans('ui_admin.a.home.tab.no') }}</th>
                    <th width="5%">{{ trans('ui_admin.a.home.tab.check') }}</th>
                    <th width="55%">{{ trans('ui_admin.a.home.tab.title') }}</th>
                    <th width="5%">{{ trans('ui_admin.a.home.tab.author') }}</th>
                    <th width="5%">{{ trans('ui_admin.a.home.tab.lang') }}</th>
                    <th width="10%">{{ trans('ui_admin.a.home.tab.create') }}</th>
                    <th width="5%">{{ trans('ui_admin.a.home.tab.status') }}</th>
                    <th width="10%">{{ trans('ui_admin.a.home.tab.action') }}</th>
                </tr>
            </thead>
            <tbody>
                @foreach($articles as $a)
                <tr>
                    <td>{{ $a->id }}</td>
                    <td>
                        <input type="checkbox">
                    </td>
                    <td>{{ $a->title }}</td>
                    <td>{{ $a->user_id }}</td>
                    <td>
                        @foreach($a->languages as $l)
                            <span>{{ $l->name }}</span>
                        @endforeach
                    </td>
                    <td>{{ $a->created_at->format('Y-m-d H:i:s') }}</td>
                    <td>
                        @if($a->active == 1)
                            <span class="label label-success">Activing</span>
                        @else
                            <span class="label label-danger">Locked</span>
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('ad.a.edit', $a->id) }}">{{ trans('ui_admin.a.home.tab.action.e') }}</a>
                        <a href="#">{{ trans('ui_admin.a.home.tab.action.d') }}</a>
                    </td>
                </tr>
               @endforeach
            </tbody>
            <thead>
                <tr>
                    <th width="5%">#{{ trans('ui_admin.a.home.tab.no') }}</th>
                    <th width="5%">{{ trans('ui_admin.a.home.tab.check') }}</th>
                    <th width="55%">{{ trans('ui_admin.a.home.tab.title') }}</th>
                    <th width="5%">{{ trans('ui_admin.a.home.tab.author') }}</th>
                    <th width="5%">{{ trans('ui_admin.a.home.tab.lang') }}</th>
                    <th width="10%">{{ trans('ui_admin.a.home.tab.create') }}</th>
                    <th width="5%">{{ trans('ui_admin.a.home.tab.status') }}</th>
                    <th width="10%">{{ trans('ui_admin.a.home.tab.action') }}</th>
                </tr>
            </thead>
        </table>
        @else
        No found data
        @endif
    </div>
</div>
@if($articles->lastPage() > 1)
    <div class="row">
        <div class="col-lg-12">
            {{ $articles->links() }}
        </div>
    </div>
@endif
@stop