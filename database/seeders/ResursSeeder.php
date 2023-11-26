<?php

namespace Database\Seeders;

use App\Models\Resurs;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ResursSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $r=new Resurs();
        $r->naziv='Фонтови';
        $r->opis='Resurs font je dragoceni alat za svakog dizajnera i kreatora sadržaja. Ovaj resurs pruža sveobuhvatan pregled dostupnih fontova, uključujući njihove karakteristike, stilove, debljinu i varijacije. Olakšava proces odabira fontova za različite projekte, pružajući korisnicima ključne informacije o svakom fontu na jednostavan i pregledan način. Resurs font često sadrži i dodatne informacije, poput podrške za različite jezike i druge relevantne detalje, čime doprinosi efikasnom kreiranju estetskih i funkcionalnih dizajna.';
        $r->save();

        $r=new Resurs();
        $r->naziv='Видео туторијали';
        $r->opis='Resurs za video tutorijale je dragocen alat za kreatore edukativnih sadržaja. Pruža pregled i informacije o različitim tutorijalima, pomažući korisnicima da brzo identifikuju najrelevantnije resurse za svoje projekte. Ovaj resurs olakšava upoređivanje tutorijala po temi, nivou težine i stilu prezentacije, doprinoseći efikasnom odabiru optimalnih alata za prenos informacija. Dodatne informacije o jezicima i dostupnosti transkripcija unapređuju pristupačnost tutorijala.';
        $r->save();
    }
}
