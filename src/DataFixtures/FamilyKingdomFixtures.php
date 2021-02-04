<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\FamilyKingdom;

class FamilyKingdomFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $allFamilyKingdomData = [
            ['name'=>'Nord','description'=>"Winterfell est le siège de la maison Stark. C'est un grand château situé au centre du Nord, d'où le chef de la famille Stark règne sur son peuple. Winterfell désigne aussi le bourg attenant à ses remparts, appelé aussi la ville d'hiver.
            Le château est situé à côté de la Route Royale qui les mène depuis le mur jusqu'à Port-Réal, plus d'un millier de miles au sud. Il est situé au sommet de sources chaudes qui gardent le château au chaud même dans les pires hivers. Des sinueuses cryptes situées sous le château contiennent les dépouilles des rois et des seigneurs Stark et garde l'histoire de l'ancienne famille. Le château existe depuis des millénaires. Il a été bâti par Brandon le Bâtisseur."],
            ['name'=>'Iles de Fer','description'=>"Les Îles de Fer sont un archipel situé dans les Mers du Crépuscule sur la côte occidentale de Westeros, formé de sept îles. Elles sont dirigées par la Maison Greyjoy et sont indépendantes des autres royaumes.
            Les bâtards de la région ont pour nom Pyk."],
            ['name'=>'Conflans','description'=>"Le Conflans aussi appelé le Trident est l'une des régions qui constitue les Sept Couronnes. Le Conflans est la région centrale de Westeros. Elle était gouvernée par les Tully, puis par les Frey depuis les noces proupres, mais Arya Stark les a tous assassinés.
            Les bâtards de la région ont pour nom Rivers."],
            ['name'=>"Val d'Arryn",'description'=>"Le Val d'Arryn ou le Val est une région montagneuse traversée par un détroit sur la côte Est de Westeros qui fut une nation gouvernée par les Rois de la Montagne et du Val dont le seigneur portait et porte toujours le titre de Protecteur du Val. L'une des familles vassales du Val est la Maison Baelish.
            La maison Arryn des Eyrié gouverne la région. Les bâtards de la région ont pour nom Stone."],
            ['name'=>"Terres de l'Ouest",'description'=>"Les Terres de l'Ouest sont l'une des régions constitutives des Sept Couronnes sur le continent de Westeros. Avant la Conquête, il s'agissait d'une nation gouvernée par les Rois du Roc. La région est sous la suzeraineté des Lannister siégant à Castral Roc, la capitale régionale. Les Terres de l'Ouest sont situées à l'ouest du Conflans et au nord du Bief. Les bâtards nés dans les Terres de l'Ouest sont nommés Hill."],
            ['name'=>'Terres de la Couronne','description'=>"Les Terres de la Couronne sont l'une des régions constitutives des Sept Couronnes sur le continent de Westeros. Contrairement aux autres régions qui sont dirigées par des Seigneurs Suzerains, elle est gouvernée directement par la monarchie de Port-Réal, où réside le Roi des Sept Couronnes au Donjon Rouge. Les Terres de la Couronne sont situées au nord des Terres de l'Orage et au sud du Val d'Arryn, et la région est au large du détroit étant sur la côte est de Westeros. Les bâtards dans cette région sont appelés Waters."],
            ['name'=>'Bief','description'=>"Le Bief est l'une des régions constitutives des Sept Couronnes sur le continent de Westeros. Elle était autrefois une nation souveraine gouvernée par les Rois du Bief avant la Conquête.
            Le Bief est sous la suzeraineté de Hautjardin, château maintenant détenu par la reine Cersei Ière et autrefois sous la suzeraineté de la Maison Tyrell. Il est le deuxième royaume par la taille après le Nord et est considéré comme la partie la plus fertile et la plus peuplée de Westeros. Les bâtards nés dans le Bief sont nommés Flowers."],
            ['name'=>'Dorne','description'=>"Dorne est la partie la plus au sud de Westeros, et est l'une des régions constitutives des Sept Couronnes. Sa capitale est Lancehélion, le siège de la maison Martell."],
            ['name'=>"Terres de l'orage",'description'=>"Les Terres de l'Orage sont l'une des régions constitutives des Sept Couronnes sur le continent de Westeros."],
            ['name'=>'Essos','description'=>"Essos est un territoire situé à l'est du contient de Westeros. Les Cités libres de la Baie des Dragons sont situées sur la côte sud.
            Le continent est séparé de Westeros par un bras de mer, appelé le Détroit à l'ouest, de Sothoryos par la mer d'Été et la mer de Jade au sud, et bordé par la Mer Grelotte au nord."]
        ];

        $i = 1;
        foreach ($allFamilyKingdomData as $familyCountryData) {
            $kingdom = new FamilyKingdom();
            $kingdom->setName($familyCountryData['name']);
            $kingdom->setDescription($familyCountryData['description']);

            $manager->persist($kingdom);
            $this->addReference('kingdom_' . $i++, $kingdom);
        }


        $manager->flush();
    }
}
