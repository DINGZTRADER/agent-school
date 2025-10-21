<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    private static $ugandanNames = [
        'Nakamya', 'Nalule', 'Namutebi', 'Nankya', 'Nassali', 'Nabulime', 'Nakato', 'Nalongo', 'Babirye', 'Nantongo',
        'Mbabazi', 'Kizza', 'Okello', 'Mukisa', 'Ouma', 'Bwire', 'Wasswa', 'Kato', 'Mugisha', 'Byamukama',
        'Achen', 'Akello', 'Amogin', 'Apio', 'Atim', 'Ejang', 'Ikwap', 'Obbo', 'Ocen', 'Odeke',
        'Adong', 'Akech', 'Aleng', 'Among', 'Anyango', 'Auma', 'Ekel', 'Imalingat', 'Obua', 'Ochola',
        'Aguti', 'Akol', 'Alupo', 'Amudo', 'Anyumel', 'Awino', 'Ekiru', 'Ingabire', 'Ochwo', 'Odongo',
    ];

    public function definition(): array
    {
        return [
            'name' => $this->faker->randomElement(self::$ugandanNames),
            'dob' => $this->faker->date(),
            'sex' => $this->faker->randomElement(['male', 'female']),
            'fee_status' => $this->faker->boolean(),
        ];
    }
}
