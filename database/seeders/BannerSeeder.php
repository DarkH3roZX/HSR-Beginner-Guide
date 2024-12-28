<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Banners;
use Faker\Factory as Faker;

class BannerSeeder extends Seeder
{
    protected $model = Banners::class;

    public function run(): void
    {
        DB::table('warp_history')->insert([
            ['version' => '1.0', 'phase1Slot1' => 'Images/Seele.png', 'phase1Slot2' => 'x', 'phase1Slot3' => 'x', 'phase1Slot4' => 'x',
            'phase2Slot1' => 'Images/Jing Yuan.png', 'phase2Slot2' => 'x', 'phase2Slot3' => 'x', 'phase2Slot4' => 'x'],

            ['version' => '1.1', 'phase1Slot1' => 'Images/Silver Wolf.png', 'phase1Slot2' => 'x', 'phase1Slot3' => 'x', 'phase1Slot4' => 'x',
            'phase2Slot1' => 'Images/Luocha.png', 'phase2Slot2' => 'x', 'phase2Slot3' => 'x', 'phase2Slot4' => 'x'],

            ['version' => '1.2', 'phase1Slot1' => 'Images/Blade.png', 'phase1Slot2' => 'x', 'phase1Slot3' => 'x', 'phase1Slot4' => 'x',
            'phase2Slot1' => 'Images/Kafka.png', 'phase2Slot2' => 'x', 'phase2Slot3' => 'x', 'phase2Slot4' => 'x'],

            ['version' => '1.3', 'phase1Slot1' => 'Images/Dan Heng IL.png', 'phase1Slot2' => 'x', 'phase1Slot3' => 'x', 'phase1Slot4' => 'x',
            'phase2Slot1' => 'Images/Fu Xuan.png', 'phase2Slot2' => 'x', 'phase2Slot3' => 'x', 'phase2Slot4' => 'x'],

            ['version' => '1.4', 'phase1Slot1' => 'Images/Jingliu.png', 'phase1Slot2' => 'x', 'phase1Slot3' => 'x', 'phase1Slot4' => 'x',
            'phase2Slot1' => 'Images/Topaz.png', 'phase2Slot2' => 'Images/Seele.png', 'phase2Slot3' => 'x', 'phase2Slot4' => 'x'],

            ['version' => '1.5', 'phase1Slot1' => 'Images/Huohuo.png', 'phase1Slot2' => 'x', 'phase1Slot3' => 'x', 'phase1Slot4' => 'x',
            'phase2Slot1' => 'Images/Argenti.png', 'phase2Slot2' => 'Images/Silver Wolf.png', 'phase2Slot3' => 'x', 'phase2Slot4' => 'x'],

            ['version' => '1.6', 'phase1Slot1' => 'Images/Ruan Mei.png', 'phase1Slot2' => 'Images/Blade.png', 'phase1Slot3' => 'x', 'phase1Slot4' => 'x',
            'phase2Slot1' => 'Images/Dr Ratio.png', 'phase2Slot2' => 'Images/Kafka.png', 'phase2Slot3' => 'x', 'phase2Slot4' => 'x'],

            ['version' => '2.0', 'phase1Slot1' => 'Images/Black Swan.png', 'phase1Slot2' => 'Images/Dan Heng IL.png', 'phase1Slot3' => 'x', 'phase1Slot4' => 'x',
            'phase2Slot1' => 'Images/Sparkle.png', 'phase2Slot2' => 'Images/Jing Yuan.png', 'phase2Slot3' => 'x', 'phase2Slot4' => 'x'],

            ['version' => '2.1', 'phase1Slot1' => 'Images/Acheron.png', 'phase1Slot2' => 'Images/Luocha.png', 'phase1Slot3' => 'x', 'phase1Slot4' => 'x',
            'phase2Slot1' => 'Images/Aventurine.png', 'phase2Slot2' => 'Images/Jingliu.png', 'phase2Slot3' => 'x', 'phase2Slot4' => 'x'],

            ['version' => '2.2', 'phase1Slot1' => 'Images/Robin.png', 'phase1Slot2' => 'Images/Topaz.png', 'phase1Slot3' => 'x', 'phase1Slot4' => 'x',
            'phase2Slot1' => 'Images/Boothill.png', 'phase2Slot2' => 'Images/Fu Xuan.png', 'phase2Slot3' => 'x', 'phase2Slot4' => 'x'],

            ['version' => '2.3', 'phase1Slot1' => 'Images/Firefly.png', 'phase1Slot2' => 'Images/Ruan Mei.png', 'phase1Slot3' => 'x', 'phase1Slot4' => 'x',
            'phase2Slot1' => 'Images/Jade.png', 'phase2Slot2' => 'Images/Argenti.png', 'phase2Slot3' => 'x', 'phase2Slot4' => 'x'],

            ['version' => '2.4', 'phase1Slot1' => 'Images/Yunli.png', 'phase1Slot2' => 'Images/Huohuo.png', 'phase1Slot3' => 'x', 'phase1Slot4' => 'x',
            'phase2Slot1' => 'Images/Jiaoqiu.png', 'phase2Slot2' => 'Images/Sparkle.png', 'phase2Slot3' => 'x', 'phase2Slot4' => 'x'],

            ['version' => '2.5', 'phase1Slot1' => 'Images/Feixiao.png', 'phase1Slot2' => 'Images/Kafka.png', 'phase1Slot3' => 'Images/Black Swan.png', 'phase1Slot4' => 'Images/Robin.png',
            'phase2Slot1' => 'Images/Lingsha.png', 'phase2Slot2' => 'Images/Topaz.png', 'phase2Slot3' => 'x', 'phase2Slot4' => 'x'],

            ['version' => '2.6', 'phase1Slot1' => 'Images/Rappa.png', 'phase1Slot2' => 'Images/Dan Heng IL.png', 'phase1Slot3' => 'x', 'phase1Slot4' => 'x',
            'phase2Slot1' => 'Images/Acheron.png', 'phase2Slot2' => 'Images/Aventurine.png', 'phase2Slot3' => 'x', 'phase2Slot4' => 'x'],
        ]);
    }
}
