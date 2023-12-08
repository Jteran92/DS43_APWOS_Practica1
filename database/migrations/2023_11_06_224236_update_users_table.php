<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
   
    public function up(): void
    {
        Schema::table('users', function($table){
             /**$table->integer('level_id')->after('password');
            $table->string('phone')->change(); */
        });
            
        
    }


    public function down(): void
    {
        schema::table('users',function($table){

            });
        /**
         * driocolumn('level_id');
         * integer('phone');
         *
         */

    }

};
