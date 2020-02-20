<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFarmersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('farmers', function (Blueprint $table) {
        // farmer
            $table->bigIncrements('id');
            $table->integer('farmer_number');
            $table->boolean('farmer_monkharit');
            $table->float('farmer_monkharit_prix');
            $table->string('farmer_sex'); // man 
            $table->string('farmer_last_name');
            $table->string('farmer_first_name');
            $table->string('farmer_birth_day');
            $table->string('farmer_address');
            $table->string('farmer_tel');
            $table->string('farmer_job');
            $table->boolean('farmer_morabi_card');
            $table->string('farmer_level_educ');
        // mazra3a
            $table->string('farm_name');
            $table->string('farm_address');
            $table->string('farm_wilaya');
            $table->string('farm_year_begin');
            $table->string('farm_7ala');
            $table->string('farm_position_people');
            $table->string('farm_geran');
            $table->string('farm_geran_level_edcu');
            $table->string('farm_takwin_tarbiyat_aranib');
            $table->string('farm_takwin_tarbiyat_aranib_year');
            $table->string('farm_takwin_tarbiyat_aranib_duree');
            $table->integer('farm_number_employe');
        // aranib
            $table->string('arnab_solala');
            $table->string('arnab_date_imtilak');
            $table->string('arnab_imtilak_why');
            $table->string('arnab_number_mothers');
            $table->string('arnab_number_fathers');
            $table->float('arnab_mothers_prix');
            $table->float('arnab_fathers_prix');
            $table->string('arnab_amrad');
            $table->integer('arnab_darwa_intaj');
            $table->string('arnab_date_tajdid_kati3');
            $table->string('arnab_ratm_intaj');
            $table->string('arnab_3omr_intaj');
            $table->string('arnab_naw3_talki7');
            $table->string('arnab_3omr_fitam');
            $table->integer('arnab_motawassit_intaj');
            $table->string('arnab_nissbat_wafayat');
        // mo3idat tarbiya
            $table->integer('mo3idat_numbers_ambar');
            $table->integer('mo3idat_missa7a_ambar');
            $table->boolean('mo3idat_elect');
            $table->boolean('mo3idat_gaz');
            $table->boolean('mo3idat_eau');
            $table->boolean('mo3idat_khazan_eau');
            $table->integer('mo3idat_khazan_eau_si3a');
            $table->boolean('mo3idat_madba7_wilaya');
            $table->string('mo3idat_mosta3mala_7arara_tahwiya');
            $table->integer('mo3idat_akfass_total');
            $table->integer('mo3idat_akfass_mothers');
            $table->integer('mo3idat_akfass_fathers');
            $table->integer('mo3idat_akfass_tassmin');
            $table->string('mo3idat_naw3_akfass');
        // tagdiya
            $table->string('tagdiya_name_3ilaf');
            $table->boolean('tagdiya_3ilaf_mada_idafiya');
            $table->string('tagdiya_3ilaf_tarika_chiraa');
            $table->float('tagdiya_3ilaf_prix');
            $table->string('tagdiya_3ilaf_massa3ib');
        // ri3aya
            $table->integer('ri3aya_numbers_bayatira');
            $table->boolean('ri3aya_mantojat_saydalaniya');
            $table->string('ri3aya_mantojat_saydalaniya_no');
            $table->string('ri3aya_mantojat_saydalaniya_yes');
            $table->string('ri3aya_talki7');
            $table->float('ri3aya_talki7_prix');
            $table->string('ri3aya_adwiya_mosta3mala');
            $table->string('ri3aya_mo3akimat_mosta3mala');
            $table->boolean('ri3aya_tamtalik_i3timad_si7i');
        // tasswik,
            $table->float('tasswik_motawassit_wazn_bay3_arnab');
            $table->string('tasswik_kayfiyat_bay3');
            $table->float('tasswik_prix_arnab_kg');
            $table->string('tasswik_ayna_yatim_bay3');
            $table->boolean('tasswik_morakib_si7i_dab7');
            $table->string('tasswik_barnamaj_dab7');
            $table->string('tasswik_zabon_raissi');
            $table->string('tasswik_rotab_mostahlikin');
            $table->boolean('tasswik_bay3_montadam_nafss_kamiya');
            $table->integer('tasswik_numbers_bay3_montadam_nafss_kamiya');
            $table->string('tasswik_kayfiya_takhzin');
            $table->string('tasswik_modat_takhzin');
            $table->string('tasswik_machakil');
            $table->boolean('tasswik_ishar_li_mantojk');
            $table->string('tasswik_ishar_li_mantojk_how');
            $table->string('tasswik_ishar_li_mantojk_radat_fi3l');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('farmers');
    }
}
