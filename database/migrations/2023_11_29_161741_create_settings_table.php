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

        $company = new Setting();
        $company->type = 'payment_classic';
        $company->pl = 'Płatność przelewem';
        $company->content = '1';
        $company->save();

        $company = new Setting();
        $company->type = 'payment_transfer24';
        $company->pl = 'Płatność on-line';
        $company->content = '1';
        $company->save();

        $company = new Setting();
        $company->type = 'payment_shipcash';
        $company->pl = 'Płatność za pobraniem';
        $company->content = '1';
        $company->save();

        $company = new Setting();
        $company->type = 'payment_cash';
        $company->pl = 'Odbiór osobisty';
        $company->content = '1';
        $company->save();

        $company = new Setting();
        $company->type = 'payment_price';
        $company->pl = 'Cena przesyłki';
        $company->content = '19';
        $company->save();
        
        $company = new Setting();
        $company->type = 'code_rabat_1';
        $company->pl = 'kod rabatowy 1';
        $company->content = '10';

        $company = new Setting();
        $company->type = 'code_rabat_2';
        $company->pl = 'kod rabatowy 2';
        $company->content = '0,20';

        $company = new Setting();
        $company->type = 'code_rabat_3';
        $company->pl = 'kod rabatowy 3';
        $company->content = '30';

        $company = new Setting();
        $company->type = 'code_rabat_4';
        $company->pl = 'kod rabatowy 4';
        $company->content = '0,40';

        $company = new Setting();
        $company->type = 'code_rabat_5';
        $company->pl = 'kod rabatowy 5';
        $company->content = '50';

        $company = new Setting();
        $company->type = 'code_rabat_6';
        $company->pl = 'kod rabatowy 6';
        $company->content = '0,60';

        $company = new Setting();
        $company->type = 'code_rabat_7';
        $company->pl = 'kod rabatowy 7';
        $company->content = '70';

        $company = new Setting();
        $company->type = 'code_rabat_8';
        $company->pl = 'kod rabatowy 8';
        $company->content = '0,80';

        $company = new Setting();
        $company->type = 'code_rabat_9';
        $company->pl = 'kod rabatowy 9';
        $company->content = '90';

        $company = new Setting();
        $company->type = 'code_rabat_10';
        $company->pl = 'kod rabatowy 10';
        $company->content = '1';

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
