<?php

use App\Movie;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{

    private $arrMovies = [
        [
            'title'=>'Rápidos y furiosos 8 ',
            'year'=>'2017',
            'director'=>'F. Gary Gray',
            'poster'=>'https://www.google.com/url?sa=i&rct=j&q=&esrc=s&source=imgres&cd=&cad=rja&uact=8&ved=2ahUKEwiyqsirx8LbAhUDm1kKHW5ZDiYQjRx6BAgBEAU&url=http%3A%2F%2Fwww.sensacine.com%2Fpeliculas%2Fpelicula-221541%2F&psig=AOvVaw0GLLhD5NGVjWQ7Uy8FKbLd&ust=1528495432072058',
            'rented'=>false,
            'synopsis'=>'Con Dom y Letty de luna de miel, Brian y Mia retirados y el resto de la pandilla viviendo en paz, parece que todo está tranquilo. Sin embargo, una misteriosa mujer seducirá a Dom para adentrarlo en el mundo del crimen y traicionar a la pandilla.'
        ],
        [
            'title'=>'Vengadores: Infinity War',
            'year'=>'2018',
            'director'=>'Anthony Russo y Joe Russo',
            'poster'=>'https://www.google.com/url?sa=i&rct=j&q=&esrc=s&source=imgres&cd=&cad=rja&uact=8&ved=2ahUKEwjT6b2ix8LbAhXxt1kKHQSGAOoQjRx6BAgBEAU&url=http%3A%2F%2Fwww.rockandpop.cl%2F2018%2F03%2Fanuncian-adelanto-la-fecha-del-estreno-mundial-avengers-infinity-war%2F&psig=AOvVaw0bKv6DZUvju3fs8pC1wQ7k&ust=1528495413015721',
            'rented'=>false,
            'synopsis'=>'Los superhéroes se alían para vencer al poderoso Thanos, el peor enemigo al que se han enfrentado. Si Thanos logra reunir las seis gemas del infinito: poder, tiempo, alma, realidad, mente y espacio, nadie podrá detenerlo.'
        ],
        [
            'title'=>'Deadpool 2',
            'year'=>'2018',
            'director'=>'David Leitch',
            'poster'=>'https://www.google.com/url?sa=i&rct=j&q=&esrc=s&source=imgres&cd=&cad=rja&uact=8&ved=2ahUKEwjOi8uVx8LbAhUFx1kKHU4mCGAQjRx6BAgBEAU&url=http%3A%2F%2Fwww.sensacine.com%2Fpeliculas%2Fpelicula-245006%2F&psig=AOvVaw1vrXWBnAVo2voq48h9lNOD&ust=1528495385526128',
            'rented'=>true,
            'synopsis'=>'Deadpool debe proteger a Russell, un adolescente mutante, de Cable un soldado del futuro genéticamente modificado. Deadpool se alía con otros superhéroes para poder derrotar al poderoso Cable.'
        ]
    ];

    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        self::seedCatalog();
        $this->command->info('Tabla catálogo inicializada con datos!');

        self::seedUsers();
        $this->command->info('Tabla usuarios inicializada con datos!');
    }

    private function seedCatalog(){
        DB::table('movies')->delete();

        foreach( $this->arrMovies as $movie ) {
            $p = new Movie;
            $p->title = $movie['title'];
            $p->year = $movie['year'];
            $p->director = $movie['director'];
            $p->poster = $movie['poster'];
            $p->rented = $movie['rented'];
            $p->synopsis = $movie['synopsis'];
            $p->save();
        }
    }

    public function seedUsers(){

    }
}
