<?php

use Illuminate\Database\Seeder;

class EquipmentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('equipments')->insert([
            'name' => 'Bureau Arozzi Arena',
            'description' => 'Tapis de souris en forme personnalisée de 5 mm d\'épaisseur avec bordures surpiquées couvrant tout le plateau pour une liberté et une flexibilité maximales.
								Matériaux extrêmement durables
								Gestion des câbles intégré sous le bureau.
								Le bureau et le tapis de souris ont trois découpes ouvertes pour la gestion des câbles. Les découpes ont chacune un espace pour contenir un bras de moniteur.
								Réglez la hauteur désirée du bureau Arena 70-80 cm (27.5 "- 31.5")',
			'categorie_id' => '1',
			'img' => 'ArozziArena',
			'url' => 'https://www.amazon.fr/Arozzi-Arena-Bureau-pour-Gaming/dp/B075SWBKFY/',
        ]);

        DB::table('equipments')->insert([
            'name' => 'Caméra Panasonic Lumix GH5',
            'description' => 'Capteur type micro 4/3 20,3MP sans filtre passe-bas pour des images réalistes et des couleurs fidèles Double stabilisation capteur et optique pour des images réussies de jour comme de nuit (5 axes Capteur + 2 axes Optique)
Grand Viseur OLED 3680K pts (grossissement env. 0.76x) Écran LCD 3,2’’ orientable et tactile 1620K pts Autonomie : Env. 400 photos (1000 en mode ECO) WiFi et Bluetooth Conception Tropicalisée pour resister à la poussière et aux éclaboussures Double Slot SD UHS-II
Rafale de 12 ips en AFS et 9 ips en AFC, Autofocus à détection de contraste avec technologie DFD 225 zones Fonction Post Focus afin de vous concentrer sur la prise de vue et faire la mise au point plus tard.
Vidéo 4K 60p / Cinéma 4K 24p, Full HD 60p / Slow Motion Full HD 180p Enregistrement 4K 4:2:2 10bit en interne sans limite de temps
Photo 6K pour réaliser une rafale de 30 ips et ne plus louper aucun moment (Photo 4K à 60 ips) Fonction Post Focus afin de vous concentrer sur la prise de vue et faire la mise au point plus tard.',
			'categorie_id' => '3',
			'img' => 'CaméraGH5',
			'url' => 'https://www.amazon.fr/Panasonic-DC-GH5EF-K-Appareil-Photo-DSLM/dp/B06XQ2GVSC/',
        ]);

        DB::table('equipments')->insert([
            'name' => 'Panneau LED Elgato',
            'description' => 'Contrôle par application : réglez les paramètres via votre écran pour une configuration en temps réel ultra-précise
Ultra-lumineux et ajustable : 2800 lumens, atténuation intégrale
Plage de températures chromatiques étendue : blanc froid à chaud de 2900 à 7000 K
Diffusion non éblouissante : la façade en verre opale assure un éclairage équilibré
Confort tempéré : maintient la température à un niveau étonnamment bas comparé aux boîtes à lumière
Design épuré : profil plat et support métallique de bureau extensible offrant un gain d’espace',
			'categorie_id' => '5',
			'img' => 'PanneauElgato',
			'url' => 'https://www.amazon.fr/Elgato-Key-Light-professionnel-contr%C3%B4lable/dp/B07L755X9G/',
        ]);

        DB::table('equipments')->insert([
            'name' => 'Stream Deck Corsair',
            'description' => 'Production en direct sophistiquée : contrôlez facilement vos plates-formes et outils favoris. Sans support: 7,17 x 4,41 x 1,34 pouces
32 touches personnalisables : déclenchez instantan?ment un nombre illimité d\'actions, d\'un seul geste
Puissantes intégrations : Elgato Game Capture, OBS, Streamlabs, Twitch, YouTube, Twitter, Mixer, Spotify, Philips Hue, vMix, VoiceMod et bien d\'autres
Actions exécutables d\'un seul geste : changez instantan?ment de scène ou de caméra, lancez la lecture d\'un média, modifiez l\'éclairage, réglez le son et réalisez toutes sortes d\'opérations
Retour visuel : vous avez la certitude que votre commande a bien été exécutée
Configuration facile : sur votre ordinateur, glissez-d?posez des actions sur les touches de l\'application Stream Deck et personnalisez-les au moyen des icônes de votre choix
Accès facile et incroyable polyvalence : support magnétique antidérapant et c?ble amovible USB-C vers USB-A
Des possibilit?s infinies : téléchargez de nouvelles intégrations et développez les votres grace au SDK Stream Deck',
			'categorie_id' => '6',
			'img' => 'StreamDeckCorsair',
			'url' => 'https://www.amazon.fr/Corsair-Stream-Deck-Enti%C3%A8rement-Personnali-Sables/dp/B07RL8H55Z/',
        ]);
    }
}
