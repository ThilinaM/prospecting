@extends('layouts.admin')
@section('content')
<div class="content">

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    {{ trans('global.edit') }} {{ trans('cruds.userAlert.title_singular') }}
                </div>
                <div class="panel-body">
                    <form method="POST" action="{{ route("admin.user-alerts.update", [$userAlert->id]) }}" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="form-group {{ $errors->has('message_body') ? 'has-error' : '' }}">
                            <label for="message_body">{{ trans('cruds.userAlert.fields.message_body') }}</label>
                            <textarea class="form-control" name="message_body" id="message_body">{{ old('message_body', $userAlert->message_body) }}</textarea>
                            @if($errors->has('message_body'))
                                <span class="help-block" role="alert">{{ $errors->first('message_body') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.userAlert.fields.message_body_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-danger" type="submit">
                                {{ trans('global.save') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>



        </div>
    </div>
</div>
@endsection