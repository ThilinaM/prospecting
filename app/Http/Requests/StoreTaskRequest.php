<?php

namespace App\Http\Requests;

use App\Task;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreTaskRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('task_create');
    }

    public function rules()
    {
        return [
            'name'              => [
                'string',
                'required',
            ],
            'mother_nic'        => [
                'string',
                'nullable',
            ],
            'mother_birthday'   => [
                'date_format:' . config('panel.date_format'),
                'nullable',
            ],
            'mother_mobile'     => [
                'string',
                'nullable',
            ],
            'mother_occupation' => [
                'string',
                'nullable',
            ],
            'mother_address'    => [
                'string',
                'nullable',
            ],
            'father_name'       => [
                'string',
                'nullable',
            ],
            'father_nic'        => [
                'string',
                'nullable',
            ],
            'father_birthday'   => [
                'date_format:' . config('panel.date_format'),
                'nullable',
            ],
            'father_mobile'     => [
                'string',
                'nullable',
            ],
            'father_occupation' => [
                'string',
                'nullable',
            ],
            'father_address'    => [
                'string',
                'nullable',
            ],
            'baby_name'         => [
                'string',
                'nullable',
            ],
            'baby_birthday'     => [
                'date_format:' . config('panel.date_format'),
                'nullable',
            ],
            'status_id'         => [
                'required',
                'integer',
            ],
            'tags.*'            => [
                'integer',
            ],
            'tags'              => [
                'array',
            ],
            'due_date'          => [
                'date_format:' . config('panel.date_format'),
                'nullable',
            ],
            'follow_update'     => [
                'date_format:' . config('panel.date_format') . ' ' . config('panel.time_format'),
                'nullable',
            ],
        ];
    }
}
