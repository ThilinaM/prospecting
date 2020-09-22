@extends('layouts.admin')
@section('content')
<div class="content">

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    {{ trans('global.show') }} {{ trans('cruds.task.title') }}
                </div>
                <div class="panel-body">
                    <div class="form-group">
                        <div class="form-group">
                            <a class="btn btn-default" href="{{ route('admin.tasks.index') }}">
                                {{ trans('global.back_to_list') }}
                            </a>
                        </div>
                        <table class="table table-bordered table-striped">
                            <tbody>
                                <tr>
                                    <th>
                                        {{ trans('cruds.task.fields.id') }}
                                    </th>
                                    <td>
                                        {{ $task->id }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.task.fields.name') }}
                                    </th>
                                    <td>
                                        {{ $task->name }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.task.fields.mother_nic') }}
                                    </th>
                                    <td>
                                        {{ $task->mother_nic }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.task.fields.mother_birthday') }}
                                    </th>
                                    <td>
                                        {{ $task->mother_birthday }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.task.fields.mother_mobile') }}
                                    </th>
                                    <td>
                                        {{ $task->mother_mobile }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.task.fields.mother_occupation') }}
                                    </th>
                                    <td>
                                        {{ $task->mother_occupation }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.task.fields.mother_address') }}
                                    </th>
                                    <td>
                                        {{ $task->mother_address }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.task.fields.father_name') }}
                                    </th>
                                    <td>
                                        {{ $task->father_name }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.task.fields.father_nic') }}
                                    </th>
                                    <td>
                                        {{ $task->father_nic }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.task.fields.father_birthday') }}
                                    </th>
                                    <td>
                                        {{ $task->father_birthday }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.task.fields.father_mobile') }}
                                    </th>
                                    <td>
                                        {{ $task->father_mobile }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.task.fields.father_occupation') }}
                                    </th>
                                    <td>
                                        {{ $task->father_occupation }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.task.fields.father_address') }}
                                    </th>
                                    <td>
                                        {{ $task->father_address }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.task.fields.baby_name') }}
                                    </th>
                                    <td>
                                        {{ $task->baby_name }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.task.fields.baby_birthday') }}
                                    </th>
                                    <td>
                                        {{ $task->baby_birthday }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.task.fields.description') }}
                                    </th>
                                    <td>
                                        {{ $task->description }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.task.fields.status') }}
                                    </th>
                                    <td>
                                        {{ $task->status->name ?? '' }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.task.fields.tag') }}
                                    </th>
                                    <td>
                                        @foreach($task->tags as $key => $tag)
                                            <span class="label label-info">{{ $tag->name }}</span>
                                        @endforeach
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.task.fields.attachment') }}
                                    </th>
                                    <td>
                                        @if($task->attachment)
                                            <a href="{{ $task->attachment->getUrl() }}" target="_blank">
                                                {{ trans('global.view_file') }}
                                            </a>
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.task.fields.due_date') }}
                                    </th>
                                    <td>
                                        {{ $task->due_date }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.task.fields.assigned_to') }}
                                    </th>
                                    <td>
                                        {{ $task->assigned_to->name ?? '' }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.task.fields.follow_update') }}
                                    </th>
                                    <td>
                                        {{ $task->follow_update }}
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="form-group">
                            <a class="btn btn-default" href="{{ route('admin.tasks.index') }}">
                                {{ trans('global.back_to_list') }}
                            </a>
                        </div>
                    </div>
                </div>
            </div>



        </div>
    </div>
</div>
@endsection