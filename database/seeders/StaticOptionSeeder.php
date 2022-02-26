<?php

namespace Database\Seeders;

use App\Models\StaticOption;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StaticOptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $inputs = [
            [
                'option_name' => 'name',
                'option_value' => 'Ayesha Khaliq',
            ],
            [
                'option_name' => 'department',
                'option_value' => 'Gynecologist',
            ],
            [
                'option_name' => 'about',
                'option_value' => 'Dr. Ayesha Khaliq is a well-known obstetrician-Gynaecologist who practices at the Health Inn clinic, Tolichowki Hyderabad has an overall experience of 17 years in the field of obstetrics and gynecology. She completed MBBS from Gandhi Medical College & M.D from the prestigious PGIMER, Chandigarh.',
            ],
            [
                'option_name' => 'why_points',
                'option_value' => 'MBBS from Gandhi Medical College;17 years in the field;M.D from the prestigious PGIMER;well-known obstetrician-Gynaecologist',
            ],
            [
                'option_name' => 'services_excerpt',
                'option_value' => 'Services Dummay Data',
            ],
            [
                'option_name' => 'testimonials_excerpt',
                'option_value' => 'Testimonials Dummay Description',
            ],
            [
                'option_name' => 'hero_video',
                'option_value' => 'm3KdYtyIXM0',
            ],
            [
                'option_name' => 'hero_img',
                'option_value' => 'Pnhone.png',
            ],
        ];

        foreach ($inputs as $data) {
            StaticOption::create($data);
        }
    }
}
