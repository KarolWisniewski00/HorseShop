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
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('type');
            $table->string('pl');
            $table->longText('content')->nullable();
            $table->timestamps();
        });

        $company = new Setting();
        $company->type = 'name_company';
        $company->pl = 'Pełna nazwa firmy';
        $company->content = 'Nazwa firmy';
        $company->save();

        $company = new Setting();
        $company->type = 'nip';
        $company->pl = 'NIP';
        $company->content = '123456789';
        $company->save();

        $company = new Setting();
        $company->type = 'name_bank';
        $company->pl = 'Pełna nazwa banku';
        $company->content = 'Nazwa banku';
        $company->save();

        $company = new Setting();
        $company->type = 'number_account_bank';
        $company->pl = 'Numer konta bankowego';
        $company->content = 'Numer konta';
        $company->save();

        $company = new Setting();
        $company->type = 'number_iban';
        $company->pl = 'Numer konta IBAN';
        $company->content = 'Numer IBAN';
        $company->save();

        $company = new Setting();
        $company->type = 'number_phone';
        $company->pl = 'Numer telefonu';
        $company->content = '123123123';
        $company->save();

        $company = new Setting();
        $company->type = 'email';
        $company->pl = 'Email';
        $company->content = 'test@test';
        $company->save();

        $company = new Setting();
        $company->type = 'street';
        $company->pl = 'Ulica';
        $company->content = 'ul.Przykładowa 1';
        $company->save();

        $company = new Setting();
        $company->type = 'adress';
        $company->pl = 'Ciąg dalszy adresu';
        $company->content = ' 00-000 Big City';
        $company->save();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};
