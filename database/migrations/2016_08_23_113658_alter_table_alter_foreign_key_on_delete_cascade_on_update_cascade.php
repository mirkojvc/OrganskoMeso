<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterTableAlterForeignKeyOnDeleteCascadeOnUpdateCascade extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('RecepiePictures', function($table)
        {
            $table->dropForeign('recepiepictures_recepie_id_foreign');
            $table->foreign('recepie_id')->references('id')->on('Recepies')->onDelete('cascade')->onUpdate('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
