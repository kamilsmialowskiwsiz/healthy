<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'name' => 'Pomarańcza',
            'calorie' => 53,
            'description' => 'Pomarańcze to owoce, których właściwości lecznicze i wartości odżywcze jako pierwsi docenili mieszańcy południowych Chin, skąd pochodzi.',
            'image' => 'img/products/orange.jpg'
        ]);
        Product::create([
            'name' => 'Jabłko',
            'calorie' => 52,
            'description' => 'Jabłka to owoce jabłoni, które mają charakterystyczny kształt i różną konsystencję miąższu, który w zależności od odmiany może być miękki lub twardy.',
            'image' => 'img/products/apple.jpg'
        ]);
        Product::create([
            'name' => 'Banan',
            'calorie' => 88,
            'description' => 'Banan to jadalny owoc tropikalny, z botanicznego punktu widzenia – jagoda, wytwarzany przez kilka gatunków roślin zielnych z rodzaju banan',
            'image' => 'img/products/banana.jpg'
        ]);
        Product::create([
            'name' => 'Sałata',
            'calorie' => 14,
            'description' => 'Sałata siewna – gatunek rośliny jednorocznej z rodziny astrowatych. Występuje wyłącznie w uprawie. Wyhodowana została z sałaty kompasowej, jako roślina pozbawiona goryczy i kolców oraz o rozbudowanej blaszce liściowej.',
            'image' => 'img/products/lettuce.jpg'
        ]);
        Product::create([
            'name' => 'Pomidor',
            'calorie' => 17,
            'description' => 'Pomidor zwyczajny, psianka pomidor, pomidor – gatunek rośliny z rodziny psiankowatych. Pochodzi z Ameryki Południowej lub Środkowej. Do Europy dotarł po 1492 roku, po odkryciu Ameryki przez Krzysztofa Kolumba',
            'image' => 'img/products/tomato.jpg'
        ]);
        Product::create([
            'name' => 'Mleko',
            'calorie' => 42,
            'description' => 'Mleko – wydzielina gruczołu mlekowego samic ssaków, pojawiająca się w okresie laktacji. Jako produkt żywnościowy dla człowieka najczęstsze zastosowanie ma mleko krowie.',
            'image' => 'img/products/milk.jpg'
        ]);
        Product::create([
            'name' => 'Ser',
            'calorie' => 402,
            'description' => 'Ser – produkt spożywczy wytwarzany poprzez wytrącenie z mleka tłuszczu i białka w postaci skrzepu, który zostaje poddany dalszej obróbce.',
            'image' => 'img/products/cheese.jpg'
        ]);
        Product::create([
            'name' => 'Jajko',
            'calorie' => 155,
            'description' => 'Jajko – produkt spożywczy będący podstawą wielu potraw, który jest bogatym źródłem substancji odżywczych. W Polsce najczęściej spożywa się jaja kurze, a także kacze, gęsie, przepiórcze i indycze.',
            'image' => 'img/products/egg.jpg'
        ]);
        Product::create([
            'name' => 'Twaróg',
            'calorie' => 98,
            'description' => 'Twaróg, ser biały – produkt wytwarzany z mleka, zaliczany do serów świeżych, o białej barwie i grudkowatej bądź kremowej konsystencji, zależnej od zawartości tłuszczu w mleku.',
            'image' => 'img/products/curd.jpg'
        ]);
        Product::create([
            'name' => 'Wołowina',
            'calorie' => 250,
            'description' => 'Wołowina – mięso otrzymane z bydła o wieku powyżej pół roku. Jest jednym z najważniejszych mięs kuchni europejskiej i kuchni amerykańskiej.',
            'image' => 'img/products/beef.jpg'
        ]);
        Product::create([
            'name' => 'Drób',
            'calorie' => 272,
            'description' => 'Drób – zbiorcze określenie udomowionych ptaków hodowanych ze względu na mięso, jaja, pióra oraz w celach dekoracyjnych. Do drobiu zalicza się między innymi kury, gęsi, indyki, kaczki, perlice, utrzymywane w warunkach fermowych strusie afrykańskie, przepiórki japońskie.',
            'image' => 'img/products/poultry.jpg'
        ]);
        Product::create([
            'name' => 'Szynka',
            'calorie' => 145,
            'description' => 'Szynka – wyrób garmażeryjny pozyskiwany z tuszy wieprzowej, schłodzony lub mrożony z kością lub bez. Barwa mięśni może być jasnoróżowa do czerwonej, dopuszcza się zmatowienia.',
            'image' => 'img/products/ham.jpg'
        ]);
        Product::create([
            'name' => 'Sok',
            'calorie' => 54,
            'description' => 'Sok – produkt otrzymany z dojrzałych, świeżych lub przechowywanych owoców lub warzyw, jednego lub większej liczby gatunków, posiadający barwę, smak i zapach charakterystyczny dla soku z owoców lub warzyw, z których pochodzą, zdolny do fermentacji, lecz niesfermentowany.',
            'image' => 'img/products/juice.jpg'
        ]);
        Product::create([
            'name' => 'Kawa',
            'calorie' => 0,
            'description' => 'Kawa – napój sporządzany z palonych, a następnie zmielonych lub poddanych instantyzacji ziaren kawowca, zwykle podawany na gorąco. Pochodzi z Etiopii, w Europie pojawiła się około XVI wieku. Jedna z najpopularniejszych używek na świecie i główne źródło kofeiny.',
            'image' => 'img/products/coffee.jpg'
        ]);
        Product::create([
            'name' => 'Herbata',
            'calorie' => 1,
            'description' => 'Herbata – napar przyrządzany z liści i pąków grupy roślin, nazywanych tą samą nazwą, należących do rodzaju kamelia. Rośliny te są do siebie podobne, traktowane jako odrębne gatunki lub odmiany jednego gatunku – herbaty chińskiej.',
            'image' => 'img/products/tea.jpg'
        ]);
        Product::create([
            'name' => 'Woda',
            'calorie' => 0,
            'description' => 'Woda - idealnie gasi pragnienie szczególnie podczas upalnych dni. Jest źródłem cennych substancji odżyczych. Doskonale orzeźwia i dodaje energii.',
            'image' => 'img/products/water.jpg'
        ]);
        Product::create([
            'name' => 'Makaron',
            'calorie' => 131,
            'description' => 'Makaron – produkt żywnościowy wytwarzany na bazie mąki, wody i niekiedy jaj oraz innych składników, o szerokiej gamie kształtów i zastosowań.',
            'image' => 'img/products/pasta.jpg'
        ]);
        Product::create([
            'name' => 'Ryż',
            'calorie' => 130,
            'description' => 'Ryż – rodzaj zbóż z rodziny wiechlinowatych obejmujący 25 gatunków. Występuje w strefie klimatów gorących i ciepłych na całym świecie. Ryż spożywczy, będący podstawą wyżywienia 1/3 ludności świata, jest produktem otrzymywanym z ziarna ryżu siewnego',
            'image' => 'img/products/rice.jpg'
        ]);
        Product::create([
            'name' => 'Konserwa',
            'calorie' => 165,
            'description' => 'Konserwa to potoczne określenie produktu żywnościowego w puszce, słoju lub plastikowym pojemniku, charakteryzującego się wydłużonym okresem przydatności do spożycia.',
            'image' => 'img/products/preserve.jpg'
        ]);
        Product::create([
            'name' => 'Mieszanka suszona',
            'calorie' => 355,
            'description' => 'Mieszanka suszona to zbiór zdrowych warzyw, które odgrywają niebagatelną rolę w kuchni oraz codziennej diecie.',
            'image' => 'img/products/driedfruit.jpg'
        ]);
        Product::create([
            'name' => 'Chleb',
            'calorie' => 264,
            'description' => 'Chleb – pieczywo otrzymywane z wypieku ciasta, będącego jednorodnym połączeniem mąki zbożowej różnego gatunku i wody, poddanego najczęściej, ale nie zawsze, fermentacji alkoholowej, wyrobionego w bochny różnego kształtu i wielkości.',
            'image' => 'img/products/bread.jpg'
        ]);
        Product::create([
            'name' => 'Chipsy ziemniaczane',
            'calorie' => 536,
            'description' => 'Chipsy – popularna przekąska w postaci cienkich, osuszonych plastrów, najczęściej ziemniaków, ale również innych warzyw, zazwyczaj usmażonych w głębokim tłuszczu.',
            'image' => 'img/products/chips.jpg'
        ]);
        Product::create([
            'name' => 'Precel',
            'calorie' => 380,
            'description' => 'Precel – wyrób piekarniczy, o kształcie podobnym do cyfry 8, posypany makiem, sezamem bądź solą. Często mylony z bajglem lub z obwarzankiem.',
            'image' => 'img/products/pretzel.jpg'
        ]);
        Product::create([
            'name' => 'Lody',
            'calorie' => 207,
            'description' => 'Lody – zamrożony deser, który uzyskuje się poprzez zamrażanie masy uzyskanej z produktów mlecznych bądź wody z dodatkami smakowymi, lub zamrażanie masy złożonej z owoców, cukru i wody.',
            'image' => 'img/products/icecreams.jpg'
        ]);
        Product::create([
            'name' => 'Keczup',
            'calorie' => 111,
            'description' => 'Keczup, ketchup – sos pomidorowy podawany na zimno, o gamie smaków od łagodnego do ostrego, barwy zwykle ciemnoczerwonej, czerwonobrązowej, rzadziej zielonej, stosowany do potraw mięsnych, kanapek, pizzy, frytek itp.',
            'image' => 'img/products/ketchup.jpg'
        ]);
        Product::create([
            'name' => 'Ciastko',
            'calorie' => 501,
            'description' => 'Ciastko – rodzaj zazwyczaj słodkiego wyrobu cukierniczego o różnorodnych kształtach, smakach, wielkości i sposobach przygotowywania. Ciastka są mniejsze od ciast i przeznaczone na jedną porcję.',
            'image' => 'img/products/cookie.jpg'
        ]);
        Product::create([
            'name' => 'Pepsi',
            'calorie' => 43,
            'description' => 'Pepsi – marka napojów gazowanych typu cola należąca do PepsiCo. Największym z jej konkurentów jest Coca-Cola.',
            'image' => 'img/products/pepsi.jpg'
        ]);
        Product::create([
            'name' => 'Coca Cola',
            'calorie' => 37,
            'description' => 'Cola, kola – słodki napój gazowany, początkowo wytwarzany z soku z owoców drzewa koli i krzewu koki, zmieszanych z wodą sodową.',
            'image' => 'img/products/cocacola.jpg'
        ]);
        Product::create([
            'name' => 'Ziemniak',
            'calorie' => 76,
            'description' => 'Ziemniak – gatunek rośliny należący do rodziny psiankowatych. Nazwa „ziemniak” odnosi się tak do całej rośliny, jak i do jej jadalnych, bogatych w skrobię bulw pędowych, z powodu których ten gatunek uprawia się na skalę masową.',
            'image' => 'img/products/potato.jpg'
        ]);
        Product::create([
            'name' => 'Parówka',
            'calorie' => 229,
            'description' => 'Parówka – wędlina drobno mielona, nietrwała. Często spożywana w postaci hot doga, zapiekana w cieście bądź gotowana i spożywana z dodatkami, takimi jak musztarda, majonez lub keczup.',
            'image' => 'img/products/frankfurter.jpg'
        ]);
    }
}