<?php

namespace Database\Seeders;

use App\Models\Font;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FontSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $f=new Font();
        $f->naziv="Етар РНИДС";
        $f->opis='Етар РНИДС је сансерифно писмо сведене конструкције и неутралног израза. Припада групи гротескних писама која се данас често користе, како у штампи тако и на вебу.

        Фонтови су: Etar RNIDS-Regular, Etar RNIDS-Italic, Etar RNIDS-Bold и Etar RNIDS-BoldItalic.';
        $f->resurs_id=1;
        $f->save();

        $f=new Font();
        $f->naziv="Лингва РНИДС";
        $f->opis='Лингва РНИДС је серифно типографско писмо прелазног типа, изведено у усправном и курзивном облику. Већа и мања тежина овог писма су погодне за наслове и за крупнији приказ, док је нормална тежина читљива и у ситнијим текстовима.

        Фонтови су: Lingva RNIDS-Thin, Lingva RNIDS-Regular, Lingva RNIDS-Bold и Lingva RNIDS-Italic';
        $f->link_detaljno='https://www.tipometar.org/aktuelno/akcija!/Lingva/img/01.html';
        $f->resurs_id=1;
        $f->save();

        $f=new Font();
        $f->naziv="Орто РНИДС";
        $f->opis='Орто РНИДС је сансерифно типографско писмо хуманистичког типа изведено у усправном и курзивном облику, у две тежине. Креирано је са идејом да се облици слова добро прилагоде приказу на екрану, а подједнако добро понаша се и при употреби у штампи.

        Фонтови су: Orto RNIDS-Regular, Orto RNIDS-Italic, Orto RNIDS-Bold и Orto RNIDS-BoldItalic.';
        $f->link_detaljno='https://www.tipometar.org/aktuelno/akcija!/Orto/img/01.html';
        $f->resurs_id=1;
        $f->save();

        $f=new Font();
        $f->naziv="Ареал РНИДС";
        $f->opis='Ареал РНИДС је слабсерифно типографско писмо изведено у усправном и курзивном облику, у две тежине. Његове пропорције, једноставни облици и линеарни карактер чине га добро читљивим у малим величинама. Посебна пажња посвећена је оптимизацији за екрански приказ.

        Фонтови су: Areal RNIDS-Regular, Areal RNIDS-Italic, Areal RNIDS-Bold и Areal RNIDS-BoldItalic.';
        $f->link_detaljno='https://www.tipometar.org/aktuelno/akcija!/Areal/img/01.html';
        $f->resurs_id=1;
        $f->save();

        $f=new Font();
        $f->naziv="Оптина";
        $f->opis='Типометар и Министарство културе и информисања Републике Србије вам поклањају 3 фамилије са по 4 фонта типографског писма Оптина аутора Оливере Стојадиновић, у форматима који се користе на интернету и у штампи, као и у облику варијабилног фонта у веб-формату који у себи садржи све облике овог писма настале променом тежине и оптичке величине.

        Писмо Оптина састоји се из три усправне санс-серифне фамилије: Микро, Нормал и Дисплеј. Свака од ових фамилија садржи по 4 фонта (Thin, Regular, Bold, Black) у тежинама од најмање до највеће, укупно 12 фонтова. Ови фонтови садрже слова ћирилице, латинице, бројеве, интерпункцију и све друге потребне знакове.';
        $f->link_detaljno='https://www.tipometar.org/aktuelno/akcija!/Optina/img/01.html';
        $f->resurs_id=1;
        $f->save();
    }
}
