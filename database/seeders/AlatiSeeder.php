<?php

namespace Database\Seeders;

use App\Models\Alat;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AlatiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $a=new Alat();
        $a->naziv="Етар РНИДС";
        $a->opis=<<<END
        Етар РНИДС је сансерифно писмо сведене конструкције и неутралног израза. Припада групи гротескних писама која се данас често користе, како у штампи тако и на вебу. 

        Фонтови су: Etar RNIDS-Regular, Etar RNIDS-Italic, Etar RNIDS-Bold и Etar RNIDS-BoldItalic.
        
        Преузми фонт:
        <a href="{{asset('fonts/cirilica/EtarRNIDS-otf.zip')}}" download>EtarRNIDS-otf.zip</a>
        <a href="{{asset('fonts/cirilica/EtarRNIDS-woff2.zip')}}" download>EtarRNIDS-woff2.zip</a>
        END;
        $a->save();

        $a=new Alat();
        $a->naziv="Лингва РНИДС";
        $a->opis=<<<END
        Лингва РНИДС је серифно типографско писмо прелазног типа, изведено у усправном и курзивном облику. Већа и мања тежина овог писма су погодне за наслове и за крупнији приказ, док је нормална тежина читљива и у ситнијим текстовима.

        <a href="https://www.tipometar.org/aktuelno/akcija!/Lingva/img/01.html">Више о особинама писма Лингва РНИДС</a>

        Фонтови су: Lingva RNIDS-Thin, Lingva RNIDS-Regular, Lingva RNIDS-Bold и Lingva RNIDS-Italic

        Преузми фонт:
        <a href="{{asset('fonts/cirilica/cirilica/LingvaRNIDS-otf.zip')}}" download>LingvaRNIDS-otf.zip</a>
        <a href="{{asset('fonts/cirilica/cirilica/LingvaRNIDS-woff2.zip')}}" download>LingvaRNIDS-woff2.zip/a>
        END;
        $a->save();

        $a=new Alat();
        $a->naziv="Орто РНИДС";
        $a->opis=<<<END
        Орто РНИДС је сансерифно типографско писмо хуманистичког типа изведено у усправном и курзивном облику, у две тежине. Креирано је са идејом да се облици слова добро прилагоде приказу на екрану, а подједнако добро понаша се и при употреби у штампи.

        <a href="https://www.tipometar.org/aktuelno/akcija!/Orto/img/01.html">Више о особинама писма Орто РНИДС</a>

        Фонтови су: Orto RNIDS-Regular, Orto RNIDS-Italic, Orto RNIDS-Bold и Orto RNIDS-BoldItalic.

        Преузми фонт:
        <a href="{{asset('fonts/OrtoRNIDS-otf.zip')}}" download>OrtoRNIDS-otf.zip</a>
        <a href="{{asset('fonts/OrtoRNIDS-woff2.zip')}}" download>OrtoRNIDS-woff2.zip</a>
        END;
        $a->save();

        $a=new Alat();
        $a->naziv="Ареал РНИДС";
        $a->opis=<<<END
        Ареал РНИДС је слабсерифно типографско писмо изведено у усправном и курзивном облику, у две тежине. Његове пропорције, једноставни облици и линеарни карактер чине га добро читљивим у малим величинама. Посебна пажња посвећена је оптимизацији за екрански приказ.

        <a href="https://www.tipometar.org/aktuelno/akcija!/Areal/img/01.html">Више о особинама писма Ареал РНИДС
        </a>
        Фонтови су: Areal RNIDS-Regular, Areal RNIDS-Italic, Areal RNIDS-Bold и Areal RNIDS-BoldItalic.

        Преузми фонт:
        <a href="{{asset('fonts/cirilica/ArealRNIDS-otf.zip')}}" download>ArealRNIDS-otf.zip</a>
        <a href="{{asset('fonts/cirilica/ArealRNIDS-woff2.zip')}}" download>ArealRNIDS-woff2.zip</a>
        END;
        $a->save();
    }
}
