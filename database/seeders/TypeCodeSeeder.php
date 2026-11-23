<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Laymont\Shicontstand\Models\TypeCode;

class TypeCodeSeeder extends Seeder
{
    public function run()
    {
        /**
         * Third and fourth size-type code characters (container type).
         * Source: ISO 6346:2022, Table 3 (BIC - Bureau International des Containers).
         * Only assigned detailed type codes are listed; the legacy T series
         * (ISO 6346:1995) is kept because it is still widely marked on containers.
         */
        $codes = collect([
            ['code' => 'G0', 'description' => 'General purpose container without ventilation - Openings at one or both ends'],
            ['code' => 'G1', 'description' => 'General purpose container without ventilation - Passive vents at upper part of cargo space'],
            ['code' => 'G2', 'description' => 'General purpose container without ventilation - Openings at one or both ends + full openings on one or both sides'],
            ['code' => 'G3', 'description' => 'General purpose container without ventilation - Openings at one or both ends + partial openings on one or both sides'],
            ['code' => 'G9', 'description' => 'General purpose container without ventilation - With bulk capabilities'],
            ['code' => 'V0', 'description' => 'Ventilated container - Non-mechanical system, vents at lower and upper parts of cargo space'],
            ['code' => 'V2', 'description' => 'Ventilated container - Mechanical ventilation system, located internally'],
            ['code' => 'V3', 'description' => 'Ventilated container - Unassigned in ISO 6346:2022, observed in container markings (e.g. 22V3)'],
            ['code' => 'V4', 'description' => 'Ventilated container - Mechanical ventilation system, located externally'],
            ['code' => 'B0', 'description' => 'Dry bulk container, non-pressurised, box type - Closed'],
            ['code' => 'B1', 'description' => 'Dry bulk container, non-pressurised, box type - Airtight'],
            ['code' => 'B3', 'description' => 'Dry bulk container, non-pressurised, box type - Rear discharge / cat flap type'],
            ['code' => 'B4', 'description' => 'Dry bulk container, non-pressurised, box type - Rear discharge / full width opening'],
            ['code' => 'B5', 'description' => 'Dry bulk container, non-pressurised, box type - Rear discharge / full width fixed'],
            ['code' => 'B6', 'description' => 'Dry bulk container, non-pressurised, box type - Removable hard top with full length hinged hatch and full length and width bottom discharge'],
            ['code' => 'B7', 'description' => 'Dry bulk container, non-pressurised, box type - Open top with full length and width bottom discharge'],
            ['code' => 'B8', 'description' => 'Dry bulk container, non-pressurised, box type - Front discharge / full width'],
            ['code' => 'B9', 'description' => 'Dry bulk container, non-pressurised, box type - Side discharge'],
            ['code' => 'S0', 'description' => 'Named cargo container - Livestock carrier'],
            ['code' => 'S1', 'description' => 'Named cargo container - Automotive carrier'],
            ['code' => 'S2', 'description' => 'Named cargo container - Live fish carrier'],
            ['code' => 'S4', 'description' => 'Non-cargo carrying container - Generator'],
            ['code' => 'S8', 'description' => 'Non-cargo carrying container - For sensitive installed equipment'],
            ['code' => 'S9', 'description' => 'Non-cargo carrying container - For residential or commercial use'],
            ['code' => 'R0', 'description' => 'Thermal container, refrigerated - Mechanically refrigerated'],
            ['code' => 'R1', 'description' => 'Thermal container, refrigerated and heated - Mechanically refrigerated and heated'],
            ['code' => 'R2', 'description' => 'Thermal container, self-powered - Mechanically refrigerated'],
            ['code' => 'R3', 'description' => 'Thermal container, self-powered - Mechanically refrigerated and heated'],
            ['code' => 'R5', 'description' => 'Thermal container, integrated machinery - Integrated mechanically refrigerated and heated'],
            ['code' => 'R7', 'description' => 'Thermal container, heated - Heated'],
            ['code' => 'R8', 'description' => 'Thermal container, heated - Heated, self-powered'],
            ['code' => 'R9', 'description' => 'Thermal container - Mechanically refrigerated (legacy, used for reefers not suitable for foodstuffs)'],
            ['code' => 'H0', 'description' => 'Thermal container - Refrigerated and/or heated with removable equipment located externally; heat transfer coefficient K=0.4W/M2.K'],
            ['code' => 'H1', 'description' => 'Thermal container - Refrigerated and/or heated with removable equipment located internally'],
            ['code' => 'H2', 'description' => 'Thermal container - Refrigerated and/or heated with removable equipment located externally; heat transfer coefficient K=0.7W/M2.K'],
            ['code' => 'H5', 'description' => 'Thermal container, insulated - Heat transfer coefficient K=0.4W/M2.K'],
            ['code' => 'H6', 'description' => 'Thermal container, insulated - Heat transfer coefficient K=0.7W/M2.K'],
            ['code' => 'H8', 'description' => 'Thermal container, eutectic - Remote mechanical refrigeration'],
            ['code' => 'W0', 'description' => 'Foldable general purpose container - Container folding on its base structure'],
            ['code' => 'W1', 'description' => 'Foldable general purpose container - Container folding on its side structure'],
            ['code' => 'U0', 'description' => 'Open top container - Openings at one or both ends'],
            ['code' => 'U1', 'description' => 'Open top container - Openings at one or both ends + removable top members in end frames'],
            ['code' => 'U2', 'description' => 'Open top container - Openings at one or both ends + openings on one or both sides'],
            ['code' => 'U3', 'description' => 'Open top container - Openings at one or both ends + openings on one or both sides + removable top members in end frames'],
            ['code' => 'U4', 'description' => 'Open top container - Openings at one or both ends + partial opening on one side and full opening on the other side'],
            ['code' => 'U5', 'description' => 'Open top container - Complete, fixed side and end walls (no doors)'],
            ['code' => 'U6', 'description' => 'Open topped container with removable hard top'],
            ['code' => 'U9', 'description' => 'Open top container - Coil carrier'],
            ['code' => 'P0', 'description' => 'Platform-based container with incomplete superstructure - Platform (container)'],
            ['code' => 'P1', 'description' => 'Platform-based container, fixed - Two complete and fixed ends'],
            ['code' => 'P2', 'description' => 'Platform-based container, fixed - Fixed posts, either free-standing or with removable top member'],
            ['code' => 'P3', 'description' => 'Platform-based container, folding (collapsible) - Folding complete end structure'],
            ['code' => 'P4', 'description' => 'Platform-based container, folding (collapsible) - Folding posts, either free-standing or with removable top member'],
            ['code' => 'P5', 'description' => 'Platform-based container with complete superstructure - Open top, open ends (skeletal)'],
            ['code' => 'P6', 'description' => 'Platform-based container for named cargo - Ship\'s gear carrier'],
            ['code' => 'P7', 'description' => 'Platform-based container for named cargo - Car carrier'],
            ['code' => 'P8', 'description' => 'Platform-based container for named cargo - Timber / pipe carrier'],
            ['code' => 'P9', 'description' => 'Platform-based container for named cargo - Coil carrier'],
            ['code' => 'K0', 'description' => 'Pressurised tank container - Liquid tank, non-regulated goods'],
            ['code' => 'K1', 'description' => 'Pressurised tank container - Liquid tank, dangerous goods ≤ 2.65 bar pressure'],
            ['code' => 'K2', 'description' => 'Pressurised tank container - Liquid tank, dangerous goods > 2.65 bar and ≤ 10 bar pressure'],
            ['code' => 'K3', 'description' => 'Pressurised tank container - Liquid tank, dangerous goods > 10 bar high pressure'],
            ['code' => 'K4', 'description' => 'Pressurised tank container - Liquid tank, non-regulated goods requiring power supply'],
            ['code' => 'K5', 'description' => 'Pressurised tank container - Liquid tank, dangerous goods ≤ 10 bar requiring power supply'],
            ['code' => 'K6', 'description' => 'Pressurised tank container - Liquid tank, dangerous goods > 10 bar pressure requiring power supply'],
            ['code' => 'K7', 'description' => 'Pressurised tank container - Cryogenic tank'],
            ['code' => 'K8', 'description' => 'Pressurised tank container - Gas tank'],
            ['code' => 'N0', 'description' => 'Dry tank container - Hopper type, vertical discharge'],
            ['code' => 'N1', 'description' => 'Dry tank container - Hopper type, rear discharge'],
            ['code' => 'N3', 'description' => 'Dry tank container - Non-pressurised rear discharge'],
            ['code' => 'N4', 'description' => 'Dry tank container - Non-pressurised side discharge'],
            ['code' => 'N5', 'description' => 'Dry tank container - Non-pressurised tipping discharge'],
            ['code' => 'N7', 'description' => 'Dry tank container - Pressurised rear discharge'],
            ['code' => 'N8', 'description' => 'Dry tank container - Pressurised side discharge'],
            ['code' => 'N9', 'description' => 'Dry tank container - Pressurised tipping discharge'],
            ['code' => 'A0', 'description' => 'Air/surface container'],
            ['code' => 'T0', 'description' => 'Tank - Non-dangerous liquids, minimum pressure 0.45 bar (legacy ISO 6346:1995)'],
            ['code' => 'T1', 'description' => 'Tank - Non-dangerous liquids, minimum pressure 1.50 bar (legacy ISO 6346:1995)'],
            ['code' => 'T2', 'description' => 'Tank - Non-dangerous liquids, minimum pressure 2.65 bar (legacy ISO 6346:1995)'],
            ['code' => 'T3', 'description' => 'Tank - Dangerous liquids, minimum pressure 1.50 bar (legacy ISO 6346:1995)'],
            ['code' => 'T4', 'description' => 'Tank - Dangerous liquids, minimum pressure 2.65 bar (legacy ISO 6346:1995)'],
            ['code' => 'T5', 'description' => 'Tank - Dangerous liquids, minimum pressure 4.00 bar (legacy ISO 6346:1995)'],
            ['code' => 'T6', 'description' => 'Tank - Dangerous liquids, minimum pressure 6.00 bar (legacy ISO 6346:1995)'],
            ['code' => 'T7', 'description' => 'Tank - Gases, minimum pressure 9.10 bar (legacy ISO 6346:1995)'],
            ['code' => 'T8', 'description' => 'Tank - Gases, minimum pressure 22.00 bar (legacy ISO 6346:1995)'],
            ['code' => 'T9', 'description' => 'Tank - Gases, minimum pressure to be decided (legacy ISO 6346:1995)'],
        ]);

        /**
         * Alternative detailed type codes: an alpha character in the 4th position of the
         * size-type code indicates a container with reduced stacking and/or racking
         * strength (ISO 6346:2022, Table 3 "detailed type code b").
         */
        $altMap = ['0' => 'A', '1' => 'B', '2' => 'D', '3' => 'G', '4' => 'J', '5' => 'M', '6' => 'V', '7' => 'W', '8' => 'X', '9' => 'Y'];

        $reducedStrengthCodes = $codes
            ->reject(fn ($item) => $item['code'] === 'A0')
            ->map(fn ($item) => [
                'code' => $item['code'][0].$altMap[$item['code'][1]],
                'description' => $item['description'].' (reduced stacking and/or racking strength)',
            ]);

        $codes->concat($reducedStrengthCodes)
            ->each(fn ($item) => TypeCode::firstOrCreate(['code' => $item['code']], $item));
    }
}
