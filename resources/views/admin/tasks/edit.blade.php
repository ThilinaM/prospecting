@extends('layouts.admin')
@section('content')
<div class="content">

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    {{ trans('global.edit') }} {{ trans('cruds.task.title_singular') }}
                </div>
                <div class="panel-body">
                    <form method="POST" action="{{ route("admin.tasks.update", [$task->id]) }}" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                            <label class="required" for="name">{{ trans('cruds.task.fields.name') }}</label>
                            <input class="form-control" type="text" name="name" id="name" value="{{ old('name', $task->name) }}" required>
                            @if($errors->has('name'))
                                <span class="help-block" role="alert">{{ $errors->first('name') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.task.fields.name_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('mother_nic') ? 'has-error' : '' }}">
                            <label for="mother_nic">{{ trans('cruds.task.fields.mother_nic') }}</label>
                            <input class="form-control" type="text" name="mother_nic" id="mother_nic" value="{{ old('mother_nic', $task->mother_nic) }}">
                            @if($errors->has('mother_nic'))
                                <span class="help-block" role="alert">{{ $errors->first('mother_nic') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.task.fields.mother_nic_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('mother_birthday') ? 'has-error' : '' }}">
                            <label for="mother_birthday">{{ trans('cruds.task.fields.mother_birthday') }}</label>
                            <input class="form-control date" type="text" name="mother_birthday" id="mother_birthday" value="{{ old('mother_birthday', $task->mother_birthday) }}">
                            @if($errors->has('mother_birthday'))
                                <span class="help-block" role="alert">{{ $errors->first('mother_birthday') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.task.fields.mother_birthday_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('mother_mobile') ? 'has-error' : '' }}">
                            <label for="mother_mobile">{{ trans('cruds.task.fields.mother_mobile') }}</label>
                            <input class="form-control" type="text" name="mother_mobile" id="mother_mobile" value="{{ old('mother_mobile', $task->mother_mobile) }}">
                            @if($errors->has('mother_mobile'))
                                <span class="help-block" role="alert">{{ $errors->first('mother_mobile') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.task.fields.mother_mobile_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('mother_occupation') ? 'has-error' : '' }}">
                            <label for="mother_occupation">{{ trans('cruds.task.fields.mother_occupation') }}</label>
                            <input class="form-control" type="text" name="mother_occupation" id="mother_occupation" value="{{ old('mother_occupation', $task->mother_occupation) }}">
                            @if($errors->has('mother_occupation'))
                                <span class="help-block" role="alert">{{ $errors->first('mother_occupation') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.task.fields.mother_occupation_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('mother_address') ? 'has-error' : '' }}">
                            <label for="mother_address">{{ trans('cruds.task.fields.mother_address') }}</label>
                            <input class="form-control" type="text" name="mother_address" id="mother_address" value="{{ old('mother_address', $task->mother_address) }}">
                            @if($errors->has('mother_address'))
                                <span class="help-block" role="alert">{{ $errors->first('mother_address') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.task.fields.mother_address_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('father_name') ? 'has-error' : '' }}">
                            <label for="father_name">{{ trans('cruds.task.fields.father_name') }}</label>
                            <input class="form-control" type="text" name="father_name" id="father_name" value="{{ old('father_name', $task->father_name) }}">
                            @if($errors->has('father_name'))
                                <span class="help-block" role="alert">{{ $errors->first('father_name') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.task.fields.father_name_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('father_nic') ? 'has-error' : '' }}">
                            <label for="father_nic">{{ trans('cruds.task.fields.father_nic') }}</label>
                            <input class="form-control" type="text" name="father_nic" id="father_nic" value="{{ old('father_nic', $task->father_nic) }}">
                            @if($errors->has('father_nic'))
                                <span class="help-block" role="alert">{{ $errors->first('father_nic') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.task.fields.father_nic_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('father_birthday') ? 'has-error' : '' }}">
                            <label for="father_birthday">{{ trans('cruds.task.fields.father_birthday') }}</label>
                            <input class="form-control date" type="text" name="father_birthday" id="father_birthday" value="{{ old('father_birthday', $task->father_birthday) }}">
                            @if($errors->has('father_birthday'))
                                <span class="help-block" role="alert">{{ $errors->first('father_birthday') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.task.fields.father_birthday_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('father_mobile') ? 'has-error' : '' }}">
                            <label for="father_mobile">{{ trans('cruds.task.fields.father_mobile') }}</label>
                            <input class="form-control" type="text" name="father_mobile" id="father_mobile" value="{{ old('father_mobile', $task->father_mobile) }}">
                            @if($errors->has('father_mobile'))
                                <span class="help-block" role="alert">{{ $errors->first('father_mobile') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.task.fields.father_mobile_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('father_occupation') ? 'has-error' : '' }}">
                            <label for="father_occupation">{{ trans('cruds.task.fields.father_occupation') }}</label>
                            <input class="form-control" type="text" name="father_occupation" id="father_occupation" value="{{ old('father_occupation', $task->father_occupation) }}">
                            @if($errors->has('father_occupation'))
                                <span class="help-block" role="alert">{{ $errors->first('father_occupation') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.task.fields.father_occupation_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('father_address') ? 'has-error' : '' }}">
                            <label for="father_address">{{ trans('cruds.task.fields.father_address') }}</label>
                            <input class="form-control" type="text" name="father_address" id="father_address" value="{{ old('father_address', $task->father_address) }}">
                            @if($errors->has('father_address'))
                                <span class="help-block" role="alert">{{ $errors->first('father_address') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.task.fields.father_address_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('baby_name') ? 'has-error' : '' }}">
                            <label for="baby_name">{{ trans('cruds.task.fields.baby_name') }}</label>
                            <input class="form-control" type="text" name="baby_name" id="baby_name" value="{{ old('baby_name', $task->baby_name) }}">
                            @if($errors->has('baby_name'))
                                <span class="help-block" role="alert">{{ $errors->first('baby_name') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.task.fields.baby_name_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('baby_birthday') ? 'has-error' : '' }}">
                            <label for="baby_birthday">{{ trans('cruds.task.fields.baby_birthday') }}</label>
                            <input class="form-control date" type="text" name="baby_birthday" id="baby_birthday" value="{{ old('baby_birthday', $task->baby_birthday) }}">
                            @if($errors->has('baby_birthday'))
                                <span class="help-block" role="alert">{{ $errors->first('baby_birthday') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.task.fields.baby_birthday_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('description') ? 'has-error' : '' }}">
                            <label for="description">{{ trans('cruds.task.fields.description') }}</label>
                            <textarea class="form-control" name="description" id="description">{{ old('description', $task->description) }}</textarea>
                            @if($errors->has('description'))
                                <span class="help-block" role="alert">{{ $errors->first('description') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.task.fields.description_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('status') ? 'has-error' : '' }}">
                            <label class="required" for="status_id">{{ trans('cruds.task.fields.status') }}</label>
                            <select class="form-control select2" name="status_id" id="status_id" required>
                                @foreach($statuses as $id => $status)
                                    <option value="{{ $id }}" {{ (old('status_id') ? old('status_id') : $task->status->id ?? '') == $id ? 'selected' : '' }}>{{ $status }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('status'))
                                <span class="help-block" role="alert">{{ $errors->first('status') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.task.fields.status_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('tags') ? 'has-error' : '' }}">
                            <label for="tags">{{ trans('cruds.task.fields.tag') }}</label>
                            <div style="padding-bottom: 4px">
                                <span class="btn btn-info btn-xs select-all" style="border-radius: 0">{{ trans('global.select_all') }}</span>
                                <span class="btn btn-info btn-xs deselect-all" style="border-radius: 0">{{ trans('global.deselect_all') }}</span>
                            </div>
                            <select class="form-control select2" name="tags[]" id="tags" multiple>
                                @foreach($tags as $id => $tag)
                                    <option value="{{ $id }}" {{ (in_array($id, old('tags', [])) || $task->tags->contains($id)) ? 'selected' : '' }}>{{ $tag }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('tags'))
                                <span class="help-block" role="alert">{{ $errors->first('tags') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.task.fields.tag_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('attachment') ? 'has-error' : '' }}">
                            <label for="attachment">{{ trans('cruds.task.fields.attachment') }}</label>
                            <div class="needsclick dropzone" id="attachment-dropzone">
                            </div>
                            @if($errors->has('attachment'))
                                <span class="help-block" role="alert">{{ $errors->first('attachment') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.task.fields.attachment_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('due_date') ? 'has-error' : '' }}">
                            <label for="due_date">{{ trans('cruds.task.fields.due_date') }}</label>
                            <input class="form-control date" type="text" name="due_date" id="due_date" value="{{ old('due_date', $task->due_date) }}">
                            @if($errors->has('due_date'))
                                <span class="help-block" role="alert">{{ $errors->first('due_date') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.task.fields.due_date_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('assigned_to') ? 'has-error' : '' }}">
                            <label for="assigned_to_id">{{ trans('cruds.task.fields.assigned_to') }}</label>
                            <select class="form-control select2" name="assigned_to_id" id="assigned_to_id">
                                @foreach($assigned_tos as $id => $assigned_to)
                                    <option value="{{ $id }}" {{ (old('assigned_to_id') ? old('assigned_to_id') : $task->assigned_to->id ?? '') == $id ? 'selected' : '' }}>{{ $assigned_to }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('assigned_to'))
                                <span class="help-block" role="alert">{{ $errors->first('assigned_to') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.task.fields.assigned_to_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('follow_update') ? 'has-error' : '' }}">
                            <label for="follow_update">{{ trans('cruds.task.fields.follow_update') }}</label>
                            <input class="form-control datetime" type="text" name="follow_update" id="follow_update" value="{{ old('follow_update', $task->follow_update) }}">
                            @if($errors->has('follow_update'))
                                <span class="help-block" role="alert">{{ $errors->first('follow_update') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.task.fields.follow_update_helper') }}</span>
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

@section('scripts')
<script>
    Dropzone.options.attachmentDropzone = {
    url: '{{ route('admin.tasks.storeMedia') }}',
    maxFilesize: 2, // MB
    maxFiles: 1,
    addRemoveLinks: true,
    headers: {
      'X-CSRF-TOKEN': "{{ csrf_token() }}"
    },
    params: {
      size: 2
    },
    success: function (file, response) {
      $('form').find('input[name="attachment"]').remove()
      $('form').append('<input type="hidden" name="attachment" value="' + response.name + '">')
    },
    removedfile: function (file) {
      file.previewElement.remove()
      if (file.status !== 'error') {
        $('form').find('input[name="attachment"]').remove()
        this.options.maxFiles = this.options.maxFiles + 1
      }
    },
    init: function () {
@if(isset($task) && $task->attachment)
      var file = {!! json_encode($task->attachment) !!}
          this.options.addedfile.call(this, file)
      file.previewElement.classList.add('dz-complete')
      $('form').append('<input type="hidden" name="attachment" value="' + file.file_name + '">')
      this.options.maxFiles = this.options.maxFiles - 1
@endif
    },
     error: function (file, response) {
         if ($.type(response) === 'string') {
             var message = response //dropzone sends it's own error messages in string
         } else {
             var message = response.errors.file
         }
         file.previewElement.classList.add('dz-error')
         _ref = file.previewElement.querySelectorAll('[data-dz-errormessage]')
         _results = []
         for (_i = 0, _len = _ref.length; _i < _len; _i++) {
             node = _ref[_i]
             _results.push(node.textContent = message)
         }

         return _results
     }
}
</script>
@endsection