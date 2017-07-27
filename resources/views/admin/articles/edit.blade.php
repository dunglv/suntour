
@extends('admin.index')
@section('title', 'Update article')
@section('content')
	<div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Dashboard <small>{{ trans('ui_admin.a.create.bread') }}</small>
            </h1>
            <ol class="breadcrumb">
                <li class="active">
                    <i class="fa fa-dashboard"></i> Dashboard
                </li>
                <li class="active">
                    <i class="fa fa-pencil"></i> {{ trans('ui_admin.a.create.bread') }}
                </li>
            </ol>
        </div>
    </div>
    <!-- /.row -->
	<div class="row">
		<div class="col-lg-12">
			@if(session()->has('status'))
			<div class="alert alert-{{ session()->get('status') }}">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
				<strong>{{ session()->get('label') }}!</strong> {{ session()->get('message') }}
			</div>
			@endif
			{!!
				Form::open([
					'route' => ['ad.a.update', $article->id],
					'method' => 'POST',
					'files' => true
					])
			!!}
				<div class="form-group @if($errors->has('title')) has-error @endif">
					<label for="title">{{ trans('ui_admin.a.form.title') }}</label>
					<input type="text" class="form-control" name="title" id="title" placeholder="{{ trans('ui_admin.a.form.title.holder') }}" value="{{ $article->title }}" required="required">
					@if($errors->has('title'))
						<div class="text-danger error">{{ $errors->first('title') }}</div>
					@endif
				</div>

				<div class="form-group @if($errors->has('description')) has-error @endif">
					<label for="inputDescription">{{ trans('ui_admin.a.form.desc') }}</label>
					<textarea name="description" id="inputDescription" class="form-control" rows="3" placeholder="{{ trans('ui_admin.a.form.desc.holder') }}">{{  $article->description }}</textarea>
					@if($errors->has('description'))
						<div class="text-danger error">{{ $errors->first('description') }}</div>
					@endif
				</div>

				<div class="form-group @if($errors->has('content')) has-error @endif">
					<label for="inputContent">{{ trans('ui_admin.a.form.content') }}</label>
					<textarea name="content" id="inputContent" class="form-control" rows="3" required="required" placeholder="Content...">{{ $article->content }}</textarea>
					@if($errors->has('content'))
						<div class="text-danger error">{{ $errors->first('content') }}</div>
					@endif
				</div>

				<div class="form-group @if($errors->has('thumbnail')) has-error @endif">
					<label for="">{{ trans('ui_admin.a.form.thumbnail') }}</label>
					<input type="file" class="form-control" name="thumbnail" placeholder="Input field">
					@if($errors->has('thumbnail'))
						<div class="text-danger error">{{ $errors->first('thumbnail') }}</div>
					@endif
					<input type="hidden" name="old_thumnail" value="{{ $article->thumbnail }}">
				</div>

				<div class="form-group">
					<label for="">{{ trans('ui_admin.a.form.lang') }}</label>
					<select name="language" id="input" class="form-control">
						<option value="1" @if($article->languages[0]->id == 1) selected="selected" @endif>English</option>
						<option value="2" @if($article->languages[0]->id == 2) selected="selected" @endif>Japanese</option>
					</select>

				</div>

				<div class="form-group">
					<div class="radio">
						<label>
							<input type="radio" name="active"  value="1" @if($article->active == 1) checked="checked" @endif>
							{{ trans('ui_admin.a.form.publish') }}
						</label>
						<label>
							<input type="radio" name="active" value="0" @if($article->active == 0) checked="checked" @endif>
							{{ trans('ui_admin.a.form.draft') }}
						</label>
					</div>
				</div>
				
				<div class="form-group">
					<div class="checkbox">
						<label>
							<input type="checkbox" value="1" name="featured"  @if($article->featured == 1) checked="checked" @endif>
							{{ trans('ui_admin.a.form.featured') }}
						</label>
					</div>
				</div>
				
			
				<button type="submit" class="btn btn-primary">{{ trans('ui_admin.a.form.save') }}</button>
				<a class="btn btn-danger" href="{{ route('ad.a.index') }}">{{ trans('ui_admin.a.form.cancel') }}</a>
			{!! Form::close() !!}
		</div>
	</div>
@stop