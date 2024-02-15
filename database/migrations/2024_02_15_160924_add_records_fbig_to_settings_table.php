<?php

use App\Models\Setting;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        $company = new Setting();
        $company->type = 'facebook_link';
        $company->pl = 'Facebook link';
        $company->content = '';
        $company->save();
        $company = new Setting();
        $company->type = 'instagram_link';
        $company->pl = 'Instagram link';
        $company->content = '';
        $company->save();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {

    }
};
