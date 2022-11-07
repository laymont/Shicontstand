<?php

namespace Illuminate\Database;

use Laymont\Shicontstand\Models\SizeType;

class SizeTypeSeeder extends \Illuminate\Database\Seeder
{
    public function run()
    {
        collect([
            ['type_group_code' => '20GP', 'code' => '20G0', 'description' => '	GENERAL PURPOSE CONT.'],
            ['type_group_code' => '20GP', 'code' => '20G1', 'description' => '	GENERAL PURPOSE CONT.'],
            ['type_group_code' => '20HR', 'code' => '20H0', 'description' => '	INSULATED CONTAINER'],
            ['type_group_code' => '20PF', 'code' => '20P1', 'description' => '	FLAT (FIXED ENDS)'],
            ['type_group_code' => '20TD', 'code' => '20T3', 'description' => '	TANK CONTAINER'],
            ['type_group_code' => '20TD', 'code' => '20T4', 'description' => '	TANK CONTAINER'],
            ['type_group_code' => '20TD', 'code' => '20T5', 'description' => '	TANK CONTAINER'],
            ['type_group_code' => '20TD', 'code' => '20T6', 'description' => '	TANK CONTAINER'],
            ['type_group_code' => '20TG', 'code' => '20T7', 'description' => '	TANK CONTAINER'],
            ['type_group_code' => '20TG', 'code' => '20T8', 'description' => '	TANK CONTAINER'],
            ['type_group_code' => '20TN', 'code' => '20T0', 'description' => '	TANK CONTAINER'],
            ['type_group_code' => '20TN', 'code' => '20T1', 'description' => '	TANK CONTAINER'],
            ['type_group_code' => '20TN', 'code' => '20T2', 'description' => '	TANK CONTAINER'],
            ['type_group_code' => '22BU', 'code' => '22B0', 'description' => '	BULK CONTAINER'],
            ['type_group_code' => '22GP', 'code' => '22G0', 'description' => '	GENERAL PURPOSE CONT.'],
            ['type_group_code' => '22GP', 'code' => '22G1', 'description' => '	GENERAL PURPOSE CONT.'],
            ['type_group_code' => '22HR', 'code' => '22H0', 'description' => '	INSULATED CONTAINER'],
            ['type_group_code' => '22PC', 'code' => '22P3', 'description' => '	FLAT (COLLAPSIBLE)'],
            ['type_group_code' => '22PC', 'code' => '22P8', 'description' => '	FLAT (COLLAPSIBLE)'],
            ['type_group_code' => '22PC', 'code' => '22P9', 'description' => '	FLAT (COLLAPSIBLE)'],
            ['type_group_code' => '22PF', 'code' => '22P1', 'description' => '	FLAT (FIXED ENDS)'],
            ['type_group_code' => '22PF', 'code' => '22P7', 'description' => '	FLAT (GENSET CARRIER)'],
            ['type_group_code' => '22RC', 'code' => '22R9', 'description' => '	REEFER CONT.(NO FOOD)'],
            ['type_group_code' => '22RS', 'code' => '22R7', 'description' => '	BUILT-IN GEN. F. POWER SPLY OF REEF'],
            ['type_group_code' => '22RT', 'code' => '22R1', 'description' => '	REEFER CONTAINER'],
            ['type_group_code' => '22SN', 'code' => '22S1', 'description' => '	NAMED CARGO CONTAINER'],
            ['type_group_code' => '22TD', 'code' => '22T3', 'description' => '	TANK CONTAINER'],
            ['type_group_code' => '22TD', 'code' => '22T4', 'description' => '	TANK CONTAINER'],
            ['type_group_code' => '22TD', 'code' => '22T5', 'description' => '	TANK CONTAINER'],
            ['type_group_code' => '22TD', 'code' => '22T6', 'description' => '	TANK CONTAINER'],
            ['type_group_code' => '22TG', 'code' => '22T7', 'description' => '	TANK CONTAINER'],
            ['type_group_code' => '22TG', 'code' => '22T8', 'description' => '	TANK CONTAINER'],
            ['type_group_code' => '22TN', 'code' => '22T0', 'description' => '	TANK CONTAINER'],
            ['type_group_code' => '22TN', 'code' => '22T1', 'description' => '	TANK CONTAINER'],
            ['type_group_code' => '22TN', 'code' => '22T2', 'description' => '	TANK CONTAINER'],
            ['type_group_code' => '22UP', 'code' => '22U6', 'description' => '	HARDTOP CONTAINER'],
            ['type_group_code' => '22UT', 'code' => '22U1', 'description' => '	OPEN TOP CONTAINER'],
            ['type_group_code' => '22VH', 'code' => '22V0', 'description' => '	VENTILATED CONTAINER'],
            ['type_group_code' => '22VH', 'code' => '22V2', 'description' => '	VENTILATED CONTAINER'],
            ['type_group_code' => '22VH', 'code' => '22V3', 'description' => '	VENTILATED CONTAINER'],
            ['type_group_code' => '25GP', 'code' => '25G0', 'description' => '	GP-CONTAINER OVER-HEIGHT'],
            ['type_group_code' => '26GP', 'code' => '26G0', 'description' => '	GP-CONTAINER OVER-HEIGHT'],
            ['type_group_code' => '26HR', 'code' => '26H0', 'description' => '	INSULATED CONTAINER'],
            ['type_group_code' => '28TG', 'code' => '28T8', 'description' => '	TANK FOR GAS'],
            ['type_group_code' => '28UT', 'code' => '28U1', 'description' => '	OPEN TOP (HALF HEIGHT)'],
            ['type_group_code' => '28VH', 'code' => '28V0', 'description' => '	VE-HALF-HEIGHT =1448 MM HEIGHT'],
            ['type_group_code' => '29PL', 'code' => '29P0', 'description' => '	PLATFORM'],
            ['type_group_code' => '2EGP', 'code' => '2EG0', 'description' => '	HIGH CUBE CONT. (WIDTH 2.5M)'],
            ['type_group_code' => '42GP', 'code' => '42G0', 'description' => '	GENERAL PURPOSE CONT.'],
            ['type_group_code' => '42GP', 'code' => '42G1', 'description' => '	GENERAL PURPOSE CONT.'],
            ['type_group_code' => '42HR', 'code' => '42H0', 'description' => '	INSULATED CONTAINER'],
            ['type_group_code' => '42PC', 'code' => '42P3', 'description' => '	FLAT (COLLAPSIBLE)'],
            ['type_group_code' => '42PC', 'code' => '42P8', 'description' => '	FLAT (COLL.FLUSH FOLDING)'],
            ['type_group_code' => '42PC', 'code' => '42P9', 'description' => '	FLAT (COLLAPSIBLE)'],
            ['type_group_code' => '42PF', 'code' => '42P1', 'description' => '	FLAT (FIXED ENDS)'],
            ['type_group_code' => '42PS', 'code' => '42P6', 'description' => '	FLAT SPACE SAVER'],
            ['type_group_code' => '42RC', 'code' => '42R9', 'description' => '	REEFER CONT.(NO FOOD)'],
            ['type_group_code' => '42RS', 'code' => '42R3', 'description' => '	REEFER CONT.(DIESEL GEN.)'],
            ['type_group_code' => '42RT', 'code' => '42R1', 'description' => '	REEFER CONTAINER'],
            ['type_group_code' => '42SN', 'code' => '42S1', 'description' => '	NAMED CARGO CONTAINER'],
            ['type_group_code' => '42TD', 'code' => '42T5', 'description' => '	TANK CONTAINER'],
            ['type_group_code' => '42TD', 'code' => '42T6', 'description' => '	TANK CONTAINER'],
            ['type_group_code' => '42TG', 'code' => '42T8', 'description' => '	TANK CONTAINER'],
            ['type_group_code' => '42TN', 'code' => '42T2', 'description' => '	TANK CONTAINER'],
            ['type_group_code' => '42UP', 'code' => '42U6', 'description' => '	HARDTOP CONTAINER'],
            ['type_group_code' => '42UT', 'code' => '42U1', 'description' => '	OPEN TOP CONTAINER'],
            ['type_group_code' => '45BK', 'code' => '45B3', 'description' => '	BULK CONTAINER'],
            ['type_group_code' => '45GP', 'code' => '45G0', 'description' => '	HIGH CUBE CONT.'],
            ['type_group_code' => '45GP', 'code' => '45G1', 'description' => '	HIGH CUBE CONT.'],
            ['type_group_code' => '45PC', 'code' => '45P3', 'description' => '	FLAT (COLLAPSIBLE)'],
            ['type_group_code' => '45PC', 'code' => '45P8', 'description' => '	FLAT (COLL.FLUSH FOLDING)'],
            ['type_group_code' => '45RC', 'code' => '45R9', 'description' => '	REEFER CONT.(NO FOOD)'],
            ['type_group_code' => '45RT', 'code' => '45R1', 'description' => '	REEFER HIGHCUBE CONTAINER'],
            ['type_group_code' => '45UT', 'code' => '45U1', 'description' => '	OPEN TOP CONTAINER'],
            ['type_group_code' => '45UP', 'code' => '45U6', 'description' => '	HIGH CUBE HARDTOP CONT.'],
            ['type_group_code' => '46HR', 'code' => '46H0', 'description' => '	INSULATED CONTAINER'],
            ['type_group_code' => '48TG', 'code' => '48T8', 'description' => '	TANK FOR GAS'],
            ['type_group_code' => '49PL', 'code' => '49P0', 'description' => '	PLATFORM'],
            ['type_group_code' => '4CGP', 'code' => '4CG0', 'description' => '	GP CONTAINER (WIDTH 2.5 M)'],
            ['type_group_code' => 'L0GP', 'code' => 'L0G1', 'description' => '	HIGH CUBE CONT.'],
            ['type_group_code' => 'L2GP', 'code' => 'L2G1', 'description' => '	HIGH CUBE CONT.'],
            ['type_group_code' => 'L5GP', 'code' => 'L5G1', 'description' => '	HIGH CUBE CONT.'],

        ])->each(fn($item) => SizeType::create($item));
    }
}
