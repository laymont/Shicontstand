<?php

namespace Database\Seeders;

use Laymont\Shicontstand\Models\TypeCode;

class TypeCodeSeeder extends \Illuminate\Database\Seeder
{
    public function run()
    {
        collect([
            ['code' => 'G0', 'description' => 'General - Openings at one or both ends'],
            ['code' => 'G1', 'description' => 'General - Passive vents at upper part of cargo space'],
            ['code' => 'G2', 'description' => 'General - Openings at one or both ends + full openings on one or both sides'],
            ['code' => 'G3', 'description' => 'General - Openings at one or both ends + partial openings on one or both sides'],
            ['code' => 'V0', 'description' => 'Fantainer - Non-mechanical, vents at lower and upper parts of cargo space'],
            ['code' => 'V2', 'description' => 'Fantainer - Mechanical ventilation system located internally'],
            ['code' => 'V4', 'description' => 'Fantainer - Mechanical ventilation system located externally'],
            ['code' => 'R0', 'description' => 'Integral Reefer - Mechanically refrigerated'],
            ['code' => 'R1', 'description' => 'Integral Reefer - Mechanically refrigerated and heated'],
            ['code' => 'R2', 'description' => 'Integral Reefer - Self-powered mechanically refrigerated'],
            ['code' => 'R3', 'description' => 'Integral Reefer - Self-powered mechanically refrigerated and heated'],
            ['code' => 'H0', 'description' => 'Refrigerated or heated with removable equipment located externally; heat transfer coefficient K=0.4W/M2.K'],
            ['code' => 'H1', 'description' => 'Refrigerated or heated with removable equipment located internally'],
            ['code' => 'H2', 'description' => 'Refrigerated or heated with removable equipment located externally; heat transfer coefficient K=0.7W/M2.K'],
            ['code' => 'H5', 'description' => 'Insulated - Heat transfer coefficient K=0.4W/M2.K'],
            ['code' => 'H6', 'description' => 'Insulated - Heat transfer coefficient K=0.7W/M2.K'],
            ['code' => 'U0', 'description' => 'Open Top - Openings at one or both ends'],
            ['code' => 'U1', 'description' => 'Open Top - Idem + removable top members in end frames'],
            ['code' => 'U2', 'description' => 'Open Top - Openings at one or both ends + openings at one or both sides'],
            ['code' => 'U3', 'description' => 'Open Top - Idem + removable top members in end frames'],
            ['code' => 'U4', 'description' => 'Open Top - Openings at one or both ends + partial on one and full at other side'],
            ['code' => 'U5', 'description' => 'Open Top - Complete, fixed side and end walls ( no doors )'],
            ['code' => 'T0', 'description' => 'Tank - Non-dangerous liquids, minimum pressure 0.45 bar'],
            ['code' => 'T1', 'description' => 'Tank - Non-dangerous liquids, minimum pressure 1.50 bar'],
            ['code' => 'T2', 'description' => 'Tank - Non-dangerous liquids, minimum pressure 2.65 bar'],
            ['code' => 'T3', 'description' => 'Tank - Dangerous liquids, minimum pressure 1.50 bar'],
            ['code' => 'T4', 'description' => 'Tank - Dangerous liquids, minimum pressure 2.65 bar'],
            ['code' => 'T5', 'description' => 'Tank - Dangerous liquids, minimum pressure 4.00 bar'],
            ['code' => 'T6', 'description' => 'Tank - Dangerous liquids, minimum pressure 6.00 bar'],
            ['code' => 'T7', 'description' => 'Tank - Gases, minimum pressure 9.10 bar'],
            ['code' => 'T8', 'description' => 'Tank - Gases, minimum pressure 22.00 bar'],
            ['code' => 'T9', 'description' => 'Tank - Gases, minimum pressure to be decided'],
            ['code' => 'B0', 'description' => 'Bulk - Closed'],
            ['code' => 'B1', 'description' => 'Bulk - Airtight'],
            ['code' => 'B3', 'description' => 'Bulk - Horizontal discharge, test pressure 1.50 bar'],
            ['code' => 'B4', 'description' => 'Bulk - Horizontal discharge, test pressure 2.65 bar'],
            ['code' => 'B5', 'description' => 'Bulk - Tipping discharge, test pressure 1.50 bar'],
            ['code' => 'B6', 'description' => 'Bulk - Tipping discharge, test pressure 2.65 bar'],
            ['code' => 'P0', 'description' => 'Flat or Bolster - Plain platform'],
            ['code' => 'P1', 'description' => 'Flat or Bolster - Two complete and fixed ends'],
            ['code' => 'P2', 'description' => 'Flat or Bolster - Fixed posts, either free-standing or with removable top member'],
            ['code' => 'P3', 'description' => 'Flat or Bolster - Folding complete end structure'],
            ['code' => 'P4', 'description' => 'Flat or Bolster - Folding posts, either free-standing or with removable top member'],
            ['code' => 'P5', 'description' => 'Flat or Bolster - Open top, open ends (skeletal)'],
            ['code' => 'S0', 'description' => 'Livestock carrier'],
            ['code' => 'S1', 'description' => 'Automobile carrier'],
            ['code' => 'S2', 'description' => 'Live fish carrier'],

        ])->each(fn ($item) => TypeCode::create($item));
    }
}
