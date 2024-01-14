<?php

namespace Database\Factories;

use App\Models\Produit;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Produit>
 */
class ProduitFactory extends Factory
{
    protected $model = Produit::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'nomProduit' => $this->faker->name(),
            'descriptionProduit' => $this->faker->text(),
            'prixProduit' => $this->faker->randomFloat(2,5,100),
            'poidsProduit' => $this->faker->randomFloat(2,0,100),
            'imageProduit' => $this->faker->imageUrl(640,480,'animals',true),
            'statusProduit' => $this->faker->boolean(true),
        ];
    }
}
