<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTasksTable extends Migration
{
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->nullable();
            $table->longText('description')->nullable();
            $table->date('due_date')->nullable();
            $table->string('mother_nic')->nullable();
            $table->date('mother_birthday')->nullable();
            $table->string('mother_mobile')->nullable();
            $table->string('mother_address')->nullable();
            $table->string('father_name')->nullable();
            $table->string('father_nic')->nullable();
            $table->date('father_birthday')->nullable();
            $table->string('father_mobile')->nullable();
            $table->string('father_address')->nullable();
            $table->string('baby_name')->nullable();
            $table->date('baby_birthday')->nullable();
            $table->string('mother_occupation')->nullable();
            $table->string('father_occupation')->nullable();
            $table->datetime('follow_update')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
