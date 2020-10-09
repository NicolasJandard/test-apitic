<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PopulateDatabase extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('armors')->insert(
            array(
                'name' => 'Tissu'
            )
        );

        DB::table('armors')->insert(
            array(
                'name' => 'Cuir'
            )
        );

        DB::table('armors')->insert(
            array(
                'name' => 'Métal'
            )
        );

        DB::table('armors')->insert(
            array(
                'name' => 'Plaques'
            )
        );

        DB::table('jobs')->insert(
            array(
                'name' => 'Guerrier'
            )
        );

        DB::table('jobs')->insert(
            array(
                'name' => 'Mage'
            )
        );

        DB::table('jobs')->insert(
            array(
                'name' => 'Prêtre'
            )
        );

        DB::table('jobs')->insert(
            array(
                'name' => 'Chasseur'
            )
        );

        DB::table('races')->insert(
            array(
                'name' => 'Humain'
            )
        );

        DB::table('races')->insert(
            array(
                'name' => 'Nain'
            )
        );

        DB::table('races')->insert(
            array(
                'name' => 'Orc'
            )
        );

        DB::table('races')->insert(
            array(
                'name' => 'Elfe'
            )
        );

        DB::table('skill_types')->insert(
            array(
                'name' => 'Coup'
            )
        );

        DB::table('skill_types')->insert(
            array(
                'name' => 'Sort'
            )
        );

        DB::table('skill_types')->insert(
            array(
                'name' => 'Soin'
            )
        );

        DB::table('specialisations')->insert(
            array(
                'name' => 'Arme',
                'job_id' => '1'
            )
        );

        DB::table('specialisations')->insert(
            array(
                'name' => 'Fureur',
                'job_id' => '1'
            )
        );

        DB::table('specialisations')->insert(
            array(
                'name' => 'Protection',
                'job_id' => '1'
            )
        );

        DB::table('specialisations')->insert(
            array(
                'name' => 'Givre',
                'job_id' => '2'
            )
        );

        DB::table('specialisations')->insert(
            array(
                'name' => 'Feu',
                'job_id' => '2'
            )
        );

        DB::table('specialisations')->insert(
            array(
                'name' => 'Arcane',
                'job_id' => '2'
            )
        );

        DB::table('specialisations')->insert(
            array(
                'name' => 'Sacré',
                'job_id' => '3'
            )
        );

        DB::table('specialisations')->insert(
            array(
                'name' => 'Discipline',
                'job_id' => '3'
            )
        );
        DB::table('specialisations')->insert(
            array(
                'name' => 'Ombre',
                'job_id' => '3'
            )
        );

        DB::table('specialisations')->insert(
            array(
                'name' => 'Précision',
                'job_id' => '4'
            )
        );

        DB::table('specialisations')->insert(
            array(
                'name' => 'Maîtrise des bêtes',
                'job_id' => '4'
            )
        );

        DB::table('specialisations')->insert(
            array(
                'name' => 'Survie',
                'job_id' => '4'
            )
        );

        DB::table('skills')->insert(
            array(
                'name' => 'Cri de guerre',
                'spe_id' => '1',
                'type_id' => '1'
            )
        );

        DB::table('skills')->insert(
            array(
                'name' => 'Tourbillon',
                'spe_id' => '2',
                'type_id' => '1'
            )
        );

        DB::table('skills')->insert(
            array(
                'name' => 'Heurt de bouclier',
                'spe_id' => '3',
                'type_id' => '1'
            )
        );

        DB::table('skills')->insert(
            array(
                'name' => 'Eclair de givre',
                'spe_id' => '4',
                'type_id' => '2'
            )
        );

        DB::table('skills')->insert(
            array(
                'name' => 'Explosion pyrotechnique',
                'spe_id' => '5',
                'type_id' => '2'
            )
        );

        DB::table('skills')->insert(
            array(
                'name' => 'Déflagration des arcanes',
                'spe_id' => '6',
                'type_id' => '2'
            )
        );

        DB::table('skills')->insert(
            array(
                'name' => 'Cercle de soins',
                'spe_id' => '7',
                'type_id' => '3'
            )
        );

        DB::table('skills')->insert(
            array(
                'name' => 'Pénitence',
                'spe_id' => '8',
                'type_id' => '3'
            )
        );

        DB::table('skills')->insert(
            array(
                'name' => "Guérison de l'ombre",
                'spe_id' => '9',
                'type_id' => '3'
            )
        );

        DB::table('skills')->insert(
            array(
                'name' => 'Visée',
                'spe_id' => '10',
                'type_id' => '1'
            )
        );

        DB::table('skills')->insert(
            array(
                'name' => 'Ordre de tuer',
                'spe_id' => '11',
                'type_id' => '1'
            )
        );

        DB::table('skills')->insert(
            array(
                'name' => 'Morsure du serpent',
                'spe_id' => '12',
                'type_id' => '1'
            )
        );


        DB::table('characters')->insert(
            array(
                'pseudo' => 'Velistia',
                'race_id' => '4',
                'job_id' => '2',
                'specialisation_id' => '4',
                'skill_id' => '4',
                'armor_id' => '1',
                'health' => '200',
                'owner' => 'Nicolas'
            )
        );

        DB::table('characters')->insert(
            array(
                'pseudo' => 'Garrosh',
                'race_id' => '3',
                'job_id' => '1',
                'specialisation_id' => '2',
                'skill_id' => '2',
                'armor_id' => '4',
                'health' => '10000',
                'owner' => 'Tom'
            )
        );

        DB::table('characters')->insert(
            array(
                'pseudo' => 'Rexxar',
                'race_id' => '3',
                'job_id' => '4',
                'specialisation_id' => '11',
                'skill_id' => '11',
                'armor_id' => '2',
                'health' => '10000',
                'owner' => 'Tom'
            )
        );

        DB::table('characters')->insert(
            array(
                'pseudo' => 'Anduin',
                'race_id' => '1',
                'job_id' => '3',
                'specialisation_id' => '7',
                'skill_id' => '7',
                'armor_id' => '1',
                'health' => '10000',
                'owner' => 'Tom'
            )
        );
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
