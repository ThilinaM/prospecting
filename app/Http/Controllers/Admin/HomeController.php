<?php

namespace App\Http\Controllers\Admin;


use LaravelDaily\LaravelCharts\Classes\LaravelChart;
use Illuminate\Support\Facades\Auth;

class HomeController
{
    public function index()
    {
        $user = Auth::user();
        $settings1 = [
            'chart_title'           => 'My task',
            'chart_type'            => 'latest_entries',
            'report_type'           => 'group_by_date',
            'model'                 => 'App\\Task',
            'group_by_field'        => 'due_date',
            'group_by_period'       => 'day',
            'aggregate_function'    => 'count',
            'filter_field'          => 'created_at',
            'group_by_field_format' => 'Y-m-d',
            'column_class'          => 'col-md-6',
            'entries_number'        => '10',
            'fields'                => [
                'name'        => '',
                'description' => '',
                'status'      => 'name',
                'due_date'    => '',
            ],
        ];

        $settings1['data'] = [];
        if(Auth()->user()->isAdmin){
            if (class_exists($settings1['model'])) {
                $settings1['data'] = $settings1['model']::latest()
                     ->take($settings1['entries_number'])
                    ->get();
            }
        }else{
        if (class_exists($settings1['model'])) {
            $settings1['data'] = $settings1['model']::latest()
                ->where('assigned_to_id','=', $user->id)
                ->take($settings1['entries_number'])
                ->get();
        }}

        if (!array_key_exists('fields', $settings1)) {
            $settings1['fields'] = [];
        }

        $settings2 = [
            'chart_title'           => 'Follow Up',
            'chart_type'            => 'latest_entries',
            'report_type'           => 'group_by_date',
            'model'                 => 'App\\Task',
            'group_by_field'        => 'due_date',
            'group_by_period'       => 'day',
            'aggregate_function'    => 'count',
            'filter_field'          => 'created_at',
            'group_by_field_format' => 'Y-m-d',
            'column_class'          => 'col-md-6',
            'entries_number'        => '5',
            'fields'                => [
                'name'          => '',
                'description'   => '',
                'status'        => 'name',
                'follow_update' => '',
            ],
        ];

        $settings2['data'] = [];
        if(Auth()->user()->isAdmin){
            if (class_exists($settings2['model'])) {
                $settings2['data'] = $settings2['model']::latest()
                ->take($settings2['entries_number'])
                ->get();
            }
        }else{
        if (class_exists($settings2['model'])) {
            $settings2['data'] = $settings2['model']::latest()
                ->where('assigned_to_id','=', $user->id)
                ->take($settings2['entries_number'])
                ->get();
        }
    }
        if (!array_key_exists('fields', $settings2)) {
            $settings2['fields'] = [];
        }

        return view('home', compact('settings1', 'settings2'));
    }
}
