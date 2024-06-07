<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable();
            $table->string('firstName');
            $table->string('lastName');
            $table->string('contactNo');
            $table->text('address');
            $table->string('profilePicturePath')->nullable()->default('profile-pics/avatar.png');
            $table->dateTime('birthday');
            $table->timestamps();
        });

        DB::table('profiles')->insert([
            [
                'user_id' => 1,
                'firstName' => 'John Angelo',
                'lastName' => 'Ayson',
                'contactNo' => '09456557020',
                'address' => '3023, P. Rodriguez St. Gun-ob',
                'birthday' => DateTime::createFromFormat('Y/m/d', "2003/03/10")
            ],
            [
                'user_id' => 2,
                'firstName' => 'Juan Gelobot',
                'lastName' => 'Aysonix',
                'contactNo' => '09123456789',
                'address' => '3023, P. Rodriguez St. Gun-ob',
                'birthday' => DateTime::createFromFormat('Y/m/d', "2004/06/20")
            ],
            [
                'user_id' => 3,
                'firstName' => 'Jean Gelopard',
                'lastName' => 'Gepard',
                'contactNo' => '09987654321',
                'address' => '3023, P. Rodriguez St. Gun-ob',
                'birthday' => DateTime::createFromFormat('Y/m/d', "2002/02/05")
            ],
            [
                'user_id' => 4,
                'firstName' => 'Jose Geloy',
                'lastName' => 'Jayson',
                'contactNo' => '09135792468',
                'address' => '3023, P. Rodriguez St. Gun-ob',
                'birthday' => DateTime::createFromFormat('Y/m/d', "2002/02/05")
            ],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profiles');
    }
};
