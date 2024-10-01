<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
// importo il model
use App\Models\Comic;

class ComicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // recupero il contenuto del file comics.php nella cartella config
        $comics = config('comics');
        foreach($comics as $comic){
            // creo una nuova istanza per ogni fumetto
            $new_comic = new Comic();

            $new_comic->title = $comic['title'];
            $new_comic->description = $comic['description'];
            $new_comic->thumb = $comic['thumb'];
            $new_comic->price = $comic['price'];
            $new_comic->sale_date = $comic['sale_date'];
            $new_comic->type = $comic['type'];
            // creo una stringa col metodo implode
            $artists_string = implode(', ', $comic['artists']);
            $writers_string = implode(', ', $comic['writers']);
            $new_comic->artists = $artists_string;
            $new_comic->writers = $writers_string;

            $new_comic->save();

            }
        
    }
}
