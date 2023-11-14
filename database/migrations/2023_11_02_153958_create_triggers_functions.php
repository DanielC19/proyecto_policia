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
        $db_name = env('DB_DATABASE');

        DB::unprepared("
        CREATE TRIGGER `$db_name`.`officers_BEFORE_DELETE` BEFORE DELETE ON `officers` FOR EACH ROW
        BEGIN
            INSERT INTO officers_log(name, police_id, birth, address, rh, `rank`,created_at,updated_at)
            VALUES (OLD.name, OLD.police_id, OLD.birth, OLD.address, OLD.rh, OLD.rank,CURDATE(),CURDATE());
        END;
        ");

        DB::unprepared("
        CREATE TRIGGER `$db_name`.`equipment_BEFORE_DELETE` BEFORE DELETE ON `equipment` FOR EACH ROW
        BEGIN
            INSERT INTO equipment_log(officer_id,name,type,provider,created_at,updated_at)
            VALUES (OLD.officer_id, OLD.name, OLD.type, OLD.provider,CURDATE(),CURDATE());
        END;
        ");

        DB::unprepared("
        CREATE FUNCTION `most_guns` ()
        RETURNS VARCHAR(55)
        READS SQL DATA
        BEGIN
            declare result VARCHAR(55);
            declare result1 INT;
            select o.name
            into result
            from officers as o, equipment as e
            where o.id = e.officer_id
            group by e.officer_id
            order by count(*) desc
            limit 1;
        RETURN result;
        END
        ");

        DB::unprepared("
        CREATE PROCEDURE `officersGuns` (IN pol_ID INT)
        BEGIN
            select e.name, e.type, e.provider
            from equipment as e
            where pol_ID = e.officer_id;
        END
        ");
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
