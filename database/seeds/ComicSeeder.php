<?php

use App\Comic;
use Illuminate\Database\Seeder;

class ComicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comics = [
            [
                'title' => 'prova',
                'author' => 'prova',
                'info' => 'prova',
                'cover_image' => 'https://picsum.photos/200/300',
                'price' => 299.99,
                'release' => '25-10-22'
            ]
        ];
        /* Avvio il ciclo ForEach */
        foreach ($comics as $comic) {
            /* Avvio l'istanza della classe */
            $new_comics = new Comic(); // Questa è l'istanza tramite modello
            /* Ora passo i dati */
            $new_comics->title = $comic['title']; // Richiamo del Dato title
            $new_comics->author = $comic['author']; // Richiamo del Dato author
            $new_comics->info = $comic['info']; // Richiamo del Dato info
            $new_comics->cover_image = $comic['cover_image']; // Richiamo del Dato cover_image
            $new_comics->price = $comic['price']; // Richiamo del Dato price
            $new_comics->release = $comic['release']; // Richiamo del Dato release
            /* Ora salvo */
            $new_comics->save();
        }
    }
}
