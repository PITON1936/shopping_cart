<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new \App\Product([
            'imagePath' => 'img\shopping_cart\1.jpg',
            'title' => 'Harry Potter and the Sorcerer\'s Stone',
            'shortDescription' => 'Harry Potter has no idea how famous he is. That\'s because he\'s being raised by',
            'description' => 'Harry Potter has no idea how famous he is. That\'s because he\'s being raised by his miserable aunt and uncle who are terrified Harry will learn that he\'s really a wizard, just as his parents were. But everything changes when Harry is summoned to attend an infamous school for wizards, and he begins to discover some clues about his illustrious birthright. From the surprising way he is greeted by a lovable giant, to the unique curriculum and colorful faculty at his unusual school, Harry finds himself drawn deep inside a mystical world he never knew existed and closer to his own noble destiny. ',
            'price' => 10
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => 'img\shopping_cart\2.jpg',
            'title' => 'Harry Potter And The Chamber Of Secrets',
            'shortDescription' => 'The Dursleys were so mean that hideous that summer that all Harry Potter wanted was to get back to the Hogwarts',
            'description' => 'The Dursleys were so mean that hideous that summer that all Harry Potter wanted was to get back to the Hogwarts School for Witchcraft and Wizardry. But just as he\'s packing his bags, Harry receives a warning from a strange, impish creature named Dobby who says that if Harry Potter returns to Hogwarts, disaster will strike.
And strike it does. For in Harry\'s second year at Hogwarts, fresh torments and horrors arise, including an outrageously stuck-up new professor, Gilderoy Lockheart, a spirit named Moaning Myrtle who haunts the girls\' bathroom, and the unwanted attentions of Ron Weasley\'s younger sister, Ginny.',
            'price' => 12
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => 'img\shopping_cart\3.jpg',
            'title' => 'Harry Potter and the Prisoner of Azkaban',
            'shortDescription' => 'For twelve long years, the dread fortress of Azkaban held an infamous prisoner named Sirius Black',
            'description' => 'For twelve long years, the dread fortress of Azkaban held an infamous prisoner named Sirius Black. Convicted of killing thirteen people with a single curse, he was said to be the heir apparent to the Dark Lord, Voldemort.
Now he has escaped, leaving only two clues as to where he might be headed: Harry Potter\'s defeat of You-Know-Who was Black\'s downfall as well. And the Azkban guards heard Black muttering in his sleep, "He\'s at Hogwarts...he\'s at Hogwarts."
Harry Potter isn\'t safe, not even within the walls of his magical school, surrounded by his friends. Because on top of it all, there may well be a traitor in their midst. ',
            'price' => 13
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => 'img\shopping_cart\4.jpg',
            'title' => 'Harry Potter And The Goblet Of Fire',
            'shortDescription' => 'The paperback edition of the legendary, record-breaking, best-selling fourth',
            'description' => 'The paperback edition of the legendary, record-breaking, best-selling fourth Harry Potter novel. Harry Potter is midway through his training as a wizard and his coming of age. Harry wants to get away from the pernicious Dursleys and go to the International Quidditch Cup. He wants to find out about the mysterious event that\'s supposed to take place at Hogwarts this year, an event involving two other rival schools of magic, and a competition that hasn\'t happened for a hundred years. He wants to be a normal, fourteen-year-old wizard. But unfortunately for Harry Potter, he\'s not normal - even by wizarding standards. And in his case, different can be deadly.',
            'price' => 15
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => 'img\shopping_cart\5.jpg',
            'title' => 'Harry Potter And The Order Of The Phoenix',
            'shortDescription' => 'In his fifth year at Hogwart\'s, Harry faces challenges at every turn, from the dark threat',
            'description' => 'In his fifth year at Hogwart\'s, Harry faces challenges at every turn, from the dark threat of He-Who-Must-Not-Be-Named and the unreliability of the government of the magical world to the rise of Ron Weasley as the keeper of the Gryffindor Quidditch Team. Along the way he learns about the strength of his friends, the fierceness of his enemies, and the meaning of sacrifice.',
            'price' => 18
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => 'img\shopping_cart\6.jpg',
            'title' => 'Harry Potter and the Deathly Hallows',
            'shortDescription' => 'Readers beware. The brilliant, breathtaking conclusion to J.K. Rowling\'s spellbinding series',
            'description' => 'Readers beware. The brilliant, breathtaking conclusion to J.K. Rowling\'s spellbinding series is not for the faint of heart--such revelations, battles, and betrayals await in Harry Potter and the Deathly Hallows that no fan will make it to the end unscathed. Luckily, Rowling has prepped loyal readers for the end of her series by doling out increasingly dark and dangerous tales of magic and mystery, shot through with lessons about honor and contempt, love and loss, and right and wrong. Fear not, you will find no spoilers in our review--to tell the plot would ruin the journey, and Harry Potter and the Deathly Hallows is an odyssey the likes of which Rowling\'s fans have not yet seen, and are not likely to forget. But we would be remiss if we did not offer one small suggestion before you embark on your final adventure with Harry--bring plenty of tissues.',
            'price' => 20
        ]);
        $product->save();
    }
}
