<?php

use App\Game;
use App\Round;
use App\Team;
use App\TeamsGames;
use App\TeamsTournaments;
use App\Tournament;
use App\Type;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {

        Team::create([
            'id_cartola' => '14267616',
            'nome_cartola' => 'Rafa Rodrigues',
            'nome_time' => 'Real Flush',
            'slug_time' => 'real-flush',
            'facebook_id' => '506192789485033',
            'url_escudo_png' => 'https://s2.glbimg.com/V-TF4v2mTQgZeZMxpfNoYp1wvCc=/https://s3.glbimg.com/v1/AUTH_58d78b787ec34892b5aaa0c7a146155f/cartola_svg_104/escudo/c3/29/21/00921d9260-6e4f-41fb-9a3f-9749b30b7ec320180402152921',
            'url_escudo_svg' => 'https://s3.glbimg.com/v1/AUTH_58d78b787ec34892b5aaa0c7a146155f/cartola_svg_104/escudo/c3/29/21/00921d9260-6e4f-41fb-9a3f-9749b30b7ec320180402152921',
            'foto_perfil' => 'https://graph.facebook.com/v2.9/506192789485033/picture?width=100&height=100',
        ]);
        Team::create([
            'id_cartola' => '13984328',
            'nome_cartola' => 'Caio Ribeiro',
            'nome_time' => 'Caioba Team',
            'slug_time' => 'caioba-team',
            'facebook_id' => null,
            'url_escudo_png' => 'https://s2.glbimg.com/j0fqmNZfaFcR1VIU2Mm0V4NArIo=/https://s3.glbimg.com/v1/AUTH_58d78b787ec34892b5aaa0c7a146155f/cartola_svg_115/escudo/22/41/33/00951152a6-6f22-41de-8e85-92765be14d2220180424134133',
            'url_escudo_svg' => 'https://s3.glbimg.com/v1/AUTH_58d78b787ec34892b5aaa0c7a146155f/cartola_svg_115/escudo/22/41/33/00951152a6-6f22-41de-8e85-92765be14d2220180424134133',
            'foto_perfil' => 'https://s3.glbimg.com/v1/AUTH_58d78b787ec34892b5aaa0c7a146155f/placeholder/perfil.png',
        ]);
        Team::create([
            'id_cartola' => '377193',
            'nome_cartola' => 'Falcão',
            'nome_time' => 'F12Futebol',
            'slug_time' => 'f12futebol',
            'facebook_id' => null,
            'url_escudo_png' => 'https://s2.glbimg.com/YrdiQGFCvDhr1rwD4H69s64JUI0=/https://s3.glbimg.com/v1/AUTH_58d78b787ec34892b5aaa0c7a146155f/cartola_svg_142/escudo/9e/08/17/0086a36070-42bd-47c1-9d79-58b249d5e59e20190426170817',
            'url_escudo_svg' => 'https://s3.glbimg.com/v1/AUTH_58d78b787ec34892b5aaa0c7a146155f/cartola_svg_142/escudo/9e/08/17/0086a36070-42bd-47c1-9d79-58b249d5e59e20190426170817',
            'foto_perfil' => 'https://s3.glbimg.com/v1/AUTH_58d78b787ec34892b5aaa0c7a146155f/placeholder/perfil.png',
        ]);
        Team::create([
            'id_cartola' => '386301',
            'nome_cartola' => 'Beluttão',
            'nome_time' => 'Beluttera FC',
            'slug_time' => 'beluttera-fc',
            'facebook_id' => null,
            'url_escudo_png' => 'https://s2.glbimg.com/nllgvX_o9o2udmN7ahOpY62tIeA=/https://s3.glbimg.com/v1/AUTH_58d78b787ec34892b5aaa0c7a146155f/cartola_svg_145/escudo/40/48/29/000f3cb796-4835-4033-974e-9cd557ef274020190430134829',
            'url_escudo_svg' => 'https://s3.glbimg.com/v1/AUTH_58d78b787ec34892b5aaa0c7a146155f/cartola_svg_145/escudo/40/48/29/000f3cb796-4835-4033-974e-9cd557ef274020190430134829',
            'foto_perfil' => 'https://s3.glbimg.com/v1/AUTH_58d78b787ec34892b5aaa0c7a146155f/placeholder/perfil.png',
        ]);
        Team::create([
            'id_cartola' => '3539777',
            'nome_cartola' => 'Bárbara Coelho',
            'nome_time' => 'Coelho Team',
            'slug_time' => 'coelho-team',
            'facebook_id' => '614127951990635',
            'url_escudo_png' => 'https://s2.glbimg.com/hO1IkST8jtp8P0z9oXxc0Y8rcDQ=/https://s3.glbimg.com/v1/AUTH_58d78b787ec34892b5aaa0c7a146155f/cartola_svg_108/escudo/cf/37/02/0084f946a6-07e3-4906-8975-5ba1a2bbd6cf20180411143702',
            'url_escudo_svg' => 'https://s3.glbimg.com/v1/AUTH_58d78b787ec34892b5aaa0c7a146155f/cartola_svg_108/escudo/cf/37/02/0084f946a6-07e3-4906-8975-5ba1a2bbd6cf20180411143702',
            'foto_perfil' => 'https://graph.facebook.com/v2.9/614127951990635/picture?width=100&height=100',
        ]);
        Team::create([
            'id_cartola' => '575718',
            'nome_cartola' => 'Monique Cardone',
            'nome_time' => 'Cardone',
            'slug_time' => 'cardone',
            'facebook_id' => '632737083459256',
            'url_escudo_png' => 'https://s2.glbimg.com/LZ7wBo0WHlMcBFpe7TucUtGq0Yo=/https://s3.glbimg.com/v1/AUTH_58d78b787ec34892b5aaa0c7a146155f/cartola_svg_135/escudo/bb/54/28/0072ecea33-1b2d-4887-b6a8-0472cde446bb20190406185428',
            'url_escudo_svg' => 'https://s3.glbimg.com/v1/AUTH_58d78b787ec34892b5aaa0c7a146155f/cartola_svg_135/escudo/bb/54/28/0072ecea33-1b2d-4887-b6a8-0472cde446bb20190406185428',
            'foto_perfil' => 'https://graph.facebook.com/v2.9/632737083459256/picture?width=100&height=100',
        ]);
        Team::create([
            'id_cartola' => '3445550',
            'nome_cartola' => 'Ivan',
            'nome_time' => 'Pombo Véio FC',
            'slug_time' => 'pombo-veio-fc',
            'facebook_id' => null,
            'url_escudo_png' => 'https://s2.glbimg.com/HykZ2GEEF7VcNyrncHUgOOEUqik=/https://s3.glbimg.com/v1/AUTH_58d78b787ec34892b5aaa0c7a146155f/cartola_svg_109/escudo/59/29/08/00962e0885-e085-448d-9f85-29f43f0da95920180413122908',
            'url_escudo_svg' => 'https://s3.glbimg.com/v1/AUTH_58d78b787ec34892b5aaa0c7a146155f/cartola_svg_109/escudo/59/29/08/00962e0885-e085-448d-9f85-29f43f0da95920180413122908',
            'foto_perfil' => 'https://s3.glbimg.com/v1/AUTH_58d78b787ec34892b5aaa0c7a146155f/placeholder/perfil.png',
        ]);
        Team::create([
            'id_cartola' => '3482342',
            'nome_cartola' => 'Cartolouco',
            'nome_time' => 'Cartolouco Futebol e Amor',
            'slug_time' => 'cartolouco-futebol-e-amor',
            'facebook_id' => '100001428466206',
            'url_escudo_png' => 'https://s2.glbimg.com/9CXm7HEElmuXBhc7_6joOJaqRPg=/https://s3.glbimg.com/v1/AUTH_58d78b787ec34892b5aaa0c7a146155f/cartola_svg_108/escudo/2d/09/53/0026f08485-c3a1-4563-b166-fa7af8e9a72d20180411140953',
            'url_escudo_svg' => 'https://s3.glbimg.com/v1/AUTH_58d78b787ec34892b5aaa0c7a146155f/cartola_svg_108/escudo/2d/09/53/0026f08485-c3a1-4563-b166-fa7af8e9a72d20180411140953',
            'foto_perfil' => 'https://graph.facebook.com/v2.9/100001428466206/picture?width=100&height=100',
        ]);
        Team::create([
            'id_cartola' => '20495608',
            'nome_cartola' => 'André Gallindo',
            'nome_time' => 'Flagallindo',
            'slug_time' => 'flagallindo',
            'facebook_id' => null,
            'url_escudo_png' => 'https://s2.glbimg.com/rq_BImbdUewPB6yZhJDgfV2z6_4=/https://s3.glbimg.com/v1/AUTH_58d78b787ec34892b5aaa0c7a146155f/cartola_svg_144/escudo/4f/38/55/003623d218-2f7e-41e9-8a78-4855db3fab4f20190427163855',
            'url_escudo_svg' => 'https://s3.glbimg.com/v1/AUTH_58d78b787ec34892b5aaa0c7a146155f/cartola_svg_144/escudo/4f/38/55/003623d218-2f7e-41e9-8a78-4855db3fab4f20190427163855',
            'foto_perfil' => 'https://s3.glbimg.com/v1/AUTH_58d78b787ec34892b5aaa0c7a146155f/placeholder/perfil.png',
        ]);
        Team::create([
            'id_cartola' => '114090',
            'nome_cartola' => 'Cassius Piglet',
            'nome_time' => 'Pagode do Cassocla',
            'slug_time' => 'pagode-do-cassocla',
            'facebook_id' => null,
            'url_escudo_png' => 'https://s2.glbimg.com/P_bgQR73Gi6A7d8Fc5agx-oOrk0=/https://s3.glbimg.com/v1/AUTH_58d78b787ec34892b5aaa0c7a146155f/cartola_svg_134/escudo/3f/20/58/006e305068-c1b6-4972-b623-6f22422b3a3f20190403112058',
            'url_escudo_svg' => 'https://s3.glbimg.com/v1/AUTH_58d78b787ec34892b5aaa0c7a146155f/cartola_svg_134/escudo/3f/20/58/006e305068-c1b6-4972-b623-6f22422b3a3f20190403112058',
            'foto_perfil' => 'https://s3.glbimg.com/v1/AUTH_58d78b787ec34892b5aaa0c7a146155f/placeholder/perfil.png',
        ]);
        Team::create([
            'id_cartola' => '2731369',
            'nome_cartola' => 'Rodrigo Alves',
            'nome_time' => 'Play NG11',
            'slug_time' => 'play-ng11',
            'facebook_id' => null,
            'url_escudo_png' => 'https://s2.glbimg.com/t1UF7Ddd_hzwNi-HZKvp02yZqUg=/https://s3.glbimg.com/v1/AUTH_58d78b787ec34892b5aaa0c7a146155f/cartola_svg_116/escudo/10/09/51/00a918c5f2-381e-429f-bbc7-271454659f1020180429220951',
            'url_escudo_svg' => 'https://s3.glbimg.com/v1/AUTH_58d78b787ec34892b5aaa0c7a146155f/cartola_svg_116/escudo/10/09/51/00a918c5f2-381e-429f-bbc7-271454659f1020180429220951',
            'foto_perfil' => 'https://s3.glbimg.com/v1/AUTH_58d78b787ec34892b5aaa0c7a146155f/placeholder/perfil.png',
        ]);
        Team::create([
            'id_cartola' => '9900733',
            'nome_cartola' => 'Renato Jorge',
            'nome_time' => 'R.J. Football Club',
            'slug_time' => 'r-j-football-club',
            'facebook_id' => null,
            'url_escudo_png' => 'https://s2.glbimg.com/IZtCi7jFFVLwRaM0yWc5kzJ2dqg=/https://s3.glbimg.com/v1/AUTH_58d78b787ec34892b5aaa0c7a146155f/cartola_svg_144/escudo/d3/08/13/0044c592c0-aaa9-4072-b899-18a2334757d320190427170813',
            'url_escudo_svg' => 'https://s3.glbimg.com/v1/AUTH_58d78b787ec34892b5aaa0c7a146155f/cartola_svg_144/escudo/d3/08/13/0044c592c0-aaa9-4072-b899-18a2334757d320190427170813',
            'foto_perfil' => 'https://graph.facebook.com/v2.9/100002932775061/picture?width=100&height=100',
        ]);
        Team::create([
            'id_cartola' => '16577639',
            'nome_cartola' => 'Rerisson Marques',
            'nome_time' => 'FC Kyller\'s',
            'slug_time' => 'fc-kyller-s',
            'facebook_id' => '770975056357571',
            'url_escudo_png' => 'https://s2.glbimg.com/V_Jpq2BGSdLOECqMWo1N2bUrmqs=/https://s3.glbimg.com/v1/AUTH_58d78b787ec34892b5aaa0c7a146155f/cartola_svg_147/escudo/9d/29/41/00a31ac14e-286e-4090-9bff-f94c3103a49d20190503142941',
            'url_escudo_svg' => 'https://s3.glbimg.com/v1/AUTH_58d78b787ec34892b5aaa0c7a146155f/cartola_svg_147/escudo/9d/29/41/00a31ac14e-286e-4090-9bff-f94c3103a49d20190503142941',
            'foto_perfil' => 'https://graph.facebook.com/v2.9/770975056357571/picture?width=100&height=100',
        ]);
        Team::create([
            'id_cartola' => '8246793',
            'nome_cartola' => 'tiago jorge',
            'nome_time' => 'FCJhou',
            'slug_time' => 'fcjhou',
            'facebook_id' => null,
            'url_escudo_png' => 'https://s2.glbimg.com/VuasO4PDDMNQmoLiHbYgDGAy_DE=/https://s3.glbimg.com/v1/AUTH_58d78b787ec34892b5aaa0c7a146155f/cartola_svg_106/escudo/22/46/27/00cbec3ac4-d8fc-48e5-a337-90200d6bf12220180409214627',
            'url_escudo_svg' => 'https://s3.glbimg.com/v1/AUTH_58d78b787ec34892b5aaa0c7a146155f/cartola_svg_106/escudo/22/46/27/00cbec3ac4-d8fc-48e5-a337-90200d6bf12220180409214627',
            'foto_perfil' => 'https://graph.facebook.com/v2.9/210551512781846/picture?width=100&height=100',
        ]);
        Team::create([
            'id_cartola' => '188500',
            'nome_cartola' => 'Sr Glorias Passadas',
            'nome_time' => 'SoberanoH FC',
            'slug_time' => 'soberanoh-fc',
            'facebook_id' => null,
            'url_escudo_png' => 'https://s2.glbimg.com/TSUqA9XoQIfl4V2WUV5Xu3lgnU4=/https://s3.glbimg.com/v1/AUTH_58d78b787ec34892b5aaa0c7a146155f/cartola_svg_103/escudo/e2/13/01/0084ef6f64-6f20-41d0-b25c-2b25a056ebe220180328141301',
            'url_escudo_svg' => 'https://s3.glbimg.com/v1/AUTH_58d78b787ec34892b5aaa0c7a146155f/cartola_svg_103/escudo/e2/13/01/0084ef6f64-6f20-41d0-b25c-2b25a056ebe220180328141301',
            'foto_perfil' => 'https://s3.glbimg.com/v1/AUTH_58d78b787ec34892b5aaa0c7a146155f/placeholder/perfil.png',
        ]);
        Team::create([
            'id_cartola' => '491727',
            'nome_cartola' => 'Rainieira',
            'nome_time' => 'Rainekhen Sport club',
            'slug_time' => 'rainekhen-sport-club',
            'facebook_id' => null,
            'url_escudo_png' => 'https://s2.glbimg.com/qIXD1thFG7q7Peq-aTidcg1_AZA=/https://s3.glbimg.com/v1/AUTH_58d78b787ec34892b5aaa0c7a146155f/cartola_svg_107/escudo/29/31/11/00ff136c78-9dd6-4aff-9593-7855dffe342920180411003111',
            'url_escudo_svg' => 'https://s3.glbimg.com/v1/AUTH_58d78b787ec34892b5aaa0c7a146155f/cartola_svg_107/escudo/29/31/11/00ff136c78-9dd6-4aff-9593-7855dffe342920180411003111',
            'foto_perfil' => 'https://graph.facebook.com/v2.9/760546870631730/picture?width=100&height=100',
        ]);
        Team::create([
            'id_cartola' => '46589',
            'nome_cartola' => 'Fabrício Borges',
            'nome_time' => 'Green Team DF',
            'slug_time' => 'green-team-df',
            'facebook_id' => '100002517153798',
            'url_escudo_png' => 'https://s2.glbimg.com/uuF13KQgQTIhiuhJg6qzieIZBcA=/https://s3.glbimg.com/v1/AUTH_58d78b787ec34892b5aaa0c7a146155f/cartola_svg_105/escudo/b0/32/49/00a0df2fcb-2584-4d9c-9845-2a212bdef3b020180405193249',
            'url_escudo_svg' => 'https://s3.glbimg.com/v1/AUTH_58d78b787ec34892b5aaa0c7a146155f/cartola_svg_105/escudo/b0/32/49/00a0df2fcb-2584-4d9c-9845-2a212bdef3b020180405193249',
            'foto_perfil' => 'https://graph.facebook.com/v2.9/100002517153798/picture?width=100&height=100',
        ]);
        Team::create([
            'id_cartola' => '8579469',
            'nome_cartola' => 'Felipe Cunha',
            'nome_time' => 'Jardim Paulistano Futebol Clube',
            'slug_time' => 'jardim-paulistano-futebol-clube',
            'facebook_id' => '100002688482955',
            'url_escudo_png' => 'https://s2.glbimg.com/gHh_LrHf6qifMEsyzFKDRijSOeI=/https://s3.glbimg.com/v1/AUTH_58d78b787ec34892b5aaa0c7a146155f/cartola_svg_105/escudo/a6/50/15/00b8ad8615-522f-4104-9147-865d2ffe28a620180406175015',
            'url_escudo_svg' => 'https://s3.glbimg.com/v1/AUTH_58d78b787ec34892b5aaa0c7a146155f/cartola_svg_105/escudo/a6/50/15/00b8ad8615-522f-4104-9147-865d2ffe28a620180406175015',
            'foto_perfil' => 'https://graph.facebook.com/v2.9/100002688482955/picture?width=100&height=100',
        ]);
        Team::create([
            'id_cartola' => '5768036',
            'nome_cartola' => 'João paulo',
            'nome_time' => 'Paulo fla 82',
            'slug_time' => 'paulo-fla-82',
            'facebook_id' => '512053215572081',
            'url_escudo_png' => 'https://s2.glbimg.com/SwpiEWq1fMSQpey02HpM0nk_kpM=/https://s3.glbimg.com/v1/AUTH_58d78b787ec34892b5aaa0c7a146155f/cartola_svg_100/escudo/1d/54/43/00de87e17e-fb63-4261-86bb-c1e0e023e11d20180322145443',
            'url_escudo_svg' => 'https://s3.glbimg.com/v1/AUTH_58d78b787ec34892b5aaa0c7a146155f/cartola_svg_100/escudo/1d/54/43/00de87e17e-fb63-4261-86bb-c1e0e023e11d20180322145443',
            'foto_perfil' => 'https://graph.facebook.com/v2.9/512053215572081/picture?width=100&height=100',
        ]);
        Team::create([
            'id_cartola' => '1017871',
            'nome_cartola' => 'Jânio Paz',
            'nome_time' => 'Cuorinthiun F.C',
            'slug_time' => 'cuorinthiun-f-c',
            'facebook_id' => null,
            'url_escudo_png' => 'https://s2.glbimg.com/HzPtohzUcITYYxrJVfC8Zuk1mg0=/https://s3.glbimg.com/v1/AUTH_58d78b787ec34892b5aaa0c7a146155f/cartola_svg_142/escudo/ac/47/07/006bf3d255-2266-4d61-bf9b-708a5f737cac20190426154707',
            'url_escudo_svg' => 'https://s3.glbimg.com/v1/AUTH_58d78b787ec34892b5aaa0c7a146155f/cartola_svg_142/escudo/ac/47/07/006bf3d255-2266-4d61-bf9b-708a5f737cac20190426154707',
            'foto_perfil' => 'https://s3.glbimg.com/v1/AUTH_58d78b787ec34892b5aaa0c7a146155f/placeholder/perfil.png',
        ]);

        Round::create([
            'rodada' => '1',
            'data' => '2019-05-25',
        ]);
        Round::create([
            'rodada' => '2',
            'data' => '2019-06-01',
        ]);
        Round::create([
            'rodada' => '3',
            'data' => '2019-06-08',
        ]);

        Type::create([
            'nome' => 'Liga',
            'descricao' => '',
        ]);
        Type::create([
            'nome' => 'Copa',
            'descricao' => '',
        ]);
        Type::create([
            'nome' => 'Champions',
            'descricao' => '',
        ]);

        Tournament::create([
            'id_tipo' => '1',
            'nome' => 'Diamante',
            'temporada' => '2019',
        ]);
        Tournament::create([
            'id_tipo' => '1',
            'nome' => 'Platina',
            'temporada' => '2019',
        ]);
        Tournament::create([
            'id_tipo' => '1',
            'nome' => 'Ouro',
            'temporada' => '2019',
        ]);
        Tournament::create([
            'id_tipo' => '1',
            'nome' => 'Prata',
            'temporada' => '2019',
        ]);

        Game::create([
            'id_torneio' => '1',
            'id_rodada' => '1',
            'vencedor' => '1',
        ]);
        Game::create([
            'id_torneio' => '1',
            'id_rodada' => '1',
            'vencedor' => '3',
        ]);
        Game::create([
            'id_torneio' => '1',
            'id_rodada' => '1',
            'vencedor' => '6',
        ]);
        Game::create([
            'id_torneio' => '1',
            'id_rodada' => '1',
            'vencedor' => '7',
        ]);
        Game::create([
            'id_torneio' => '1',
            'id_rodada' => '1',
            'vencedor' => '10',
        ]);
        Game::create([
            'id_torneio' => '1',
            'id_rodada' => '1',
            'vencedor' => '12',
        ]);
        Game::create([
            'id_torneio' => '1',
            'id_rodada' => '1',
            'vencedor' => '13',
        ]);
        Game::create([
            'id_torneio' => '1',
            'id_rodada' => '1',
            'vencedor' => '16',
        ]);
        Game::create([
            'id_torneio' => '1',
            'id_rodada' => '1',
            'vencedor' => '17',
        ]);
        Game::create([
            'id_torneio' => '1',
            'id_rodada' => '1',
            'vencedor' => '20',
        ]);
        Game::create([
            'id_torneio' => '1',
            'id_rodada' => '2',
            'vencedor' => '1',
        ]);
        Game::create([
            'id_torneio' => '1',
            'id_rodada' => '2',
            'vencedor' => null,
        ]);

        TeamsGames::create([
            'id_team' => '1',
            'id_game' => '1',
            'pontos' => '92.05',
        ]);
        TeamsGames::create([
            'id_team' => '2',
            'id_game' => '1',
            'pontos' => '88.05',
        ]);
        TeamsGames::create([
            'id_team' => '3',
            'id_game' => '2',
            'pontos' => '102.05',
        ]);
        TeamsGames::create([
            'id_team' => '4',
            'id_game' => '2',
            'pontos' => '77.05',
        ]);
        TeamsGames::create([
            'id_team' => '5',
            'id_game' => '3',
            'pontos' => '91.05',
        ]);
        TeamsGames::create([
            'id_team' => '6',
            'id_game' => '3',
            'pontos' => '99.99',
        ]);
        TeamsGames::create([
            'id_team' => '7',
            'id_game' => '4',
            'pontos' => '81.00',
        ]);
        TeamsGames::create([
            'id_team' => '8',
            'id_game' => '4',
            'pontos' => '82.05',
        ]);
        TeamsGames::create([
            'id_team' => '9',
            'id_game' => '5',
            'pontos' => '75.22',
        ]);
        TeamsGames::create([
            'id_team' => '10',
            'id_game' => '5',
            'pontos' => '82.45',
        ]);
        TeamsGames::create([
            'id_team' => '11',
            'id_game' => '6',
            'pontos' => '92.05',
        ]);
        TeamsGames::create([
            'id_team' => '12',
            'id_game' => '6',
            'pontos' => '108.05',
        ]);
        TeamsGames::create([
            'id_team' => '13',
            'id_game' => '7',
            'pontos' => '77.05',
        ]);
        TeamsGames::create([
            'id_team' => '14',
            'id_game' => '7',
            'pontos' => '42.05',
        ]);
        TeamsGames::create([
            'id_team' => '15',
            'id_game' => '8',
            'pontos' => '41.05',
        ]);
        TeamsGames::create([
            'id_team' => '16',
            'id_game' => '8',
            'pontos' => '49.99',
        ]);
        TeamsGames::create([
            'id_team' => '17',
            'id_game' => '9',
            'pontos' => '81.00',
        ]);
        TeamsGames::create([
            'id_team' => '18',
            'id_game' => '9',
            'pontos' => '72.05',
        ]);
        TeamsGames::create([
            'id_team' => '19',
            'id_game' => '10',
            'pontos' => '75.22',
        ]);
        TeamsGames::create([
            'id_team' => '20',
            'id_game' => '10',
            'pontos' => '122.45',
        ]);
        TeamsGames::create([
            'id_team' => '1',
            'id_game' => '11',
            'pontos' => '81.00',
        ]);
        TeamsGames::create([
            'id_team' => '3',
            'id_game' => '11',
            'pontos' => '72.05',
        ]);
        TeamsGames::create([
            'id_team' => '2',
            'id_game' => '12',
            'pontos' => null,
        ]);
        TeamsGames::create([
            'id_team' => '4',
            'id_game' => '12',
            'pontos' => null,
        ]);

        TeamsTournaments::create([
            'id_team' => '1',
            'id_tournament' => '1',
            'vitorias' => '2',
            'derrotas' => '1',
            'empates' => '1',
            'pontos_favor' => '169.10',
            'pontos_contra' => '124.19',
        ]);
        TeamsTournaments::create([
            'id_team' => '2',
            'id_tournament' => '1',
            'vitorias' => '1',
            'derrotas' => '1',
            'empates' => '2',
            'pontos_favor' => '190.10',
            'pontos_contra' => '155.01',
        ]);
        TeamsTournaments::create([
            'id_team' => '3',
            'id_tournament' => '1',
            'vitorias' => '1',
            'derrotas' => '2',
            'empates' => '1',
            'pontos_favor' => '150.24',
            'pontos_contra' => '112.45',
        ]);
        TeamsTournaments::create([
            'id_team' => '4',
            'id_tournament' => '1',
            'vitorias' => '1',
            'derrotas' => '2',
            'empates' => '1',
            'pontos_favor' => '144.24',
            'pontos_contra' => '162.44',
        ]);
        TeamsTournaments::create([
            'id_team' => '5',
            'id_tournament' => '1',
            'vitorias' => '1',
            'derrotas' => '2',
            'empates' => '1',
            'pontos_favor' => '132.22',
            'pontos_contra' => '122.24',
        ]);
        TeamsTournaments::create([
            'id_team' => '6',
            'id_tournament' => '1',
            'vitorias' => '1',
            'derrotas' => '2',
            'empates' => '1',
            'pontos_favor' => '150.93',
            'pontos_contra' => '131.99',
        ]);
        TeamsTournaments::create([
            'id_team' => '7',
            'id_tournament' => '1',
            'vitorias' => '1',
            'derrotas' => '2',
            'empates' => '1',
            'pontos_favor' => '110.88',
            'pontos_contra' => '142.50',
        ]);
        TeamsTournaments::create([
            'id_team' => '8',
            'id_tournament' => '1',
            'vitorias' => '1',
            'derrotas' => '2',
            'empates' => '1',
            'pontos_favor' => '128.04',
            'pontos_contra' => '132.45',
        ]);
        TeamsTournaments::create([
            'id_team' => '9',
            'id_tournament' => '1',
            'vitorias' => '1',
            'derrotas' => '2',
            'empates' => '1',
            'pontos_favor' => '142.68',
            'pontos_contra' => '182.21',
        ]);
        TeamsTournaments::create([
            'id_team' => '10',
            'id_tournament' => '1',
            'vitorias' => '1',
            'derrotas' => '2',
            'empates' => '1',
            'pontos_favor' => '138.22',
            'pontos_contra' => '144.50',
        ]);
        TeamsTournaments::create([
            'id_team' => '11',
            'id_tournament' => '1',
            'vitorias' => '1',
            'derrotas' => '2',
            'empates' => '1',
            'pontos_favor' => '184.52',
            'pontos_contra' => '124.10',
        ]);
        TeamsTournaments::create([
            'id_team' => '12',
            'id_tournament' => '1',
            'vitorias' => '1',
            'derrotas' => '2',
            'empates' => '1',
            'pontos_favor' => '172.62',
            'pontos_contra' => '139.77',
        ]);
        TeamsTournaments::create([
            'id_team' => '13',
            'id_tournament' => '1',
            'vitorias' => '1',
            'derrotas' => '2',
            'empates' => '1',
            'pontos_favor' => '168.42',
            'pontos_contra' => '182.89',
        ]);
        TeamsTournaments::create([
            'id_team' => '14',
            'id_tournament' => '1',
            'vitorias' => '1',
            'derrotas' => '2',
            'empates' => '1',
            'pontos_favor' => '169.24',
            'pontos_contra' => '129.25',
        ]);
        TeamsTournaments::create([
            'id_team' => '15',
            'id_tournament' => '1',
            'vitorias' => '1',
            'derrotas' => '2',
            'empates' => '1',
            'pontos_favor' => '172.42',
            'pontos_contra' => '150.21',
        ]);
        TeamsTournaments::create([
            'id_team' => '16',
            'id_tournament' => '1',
            'vitorias' => '1',
            'derrotas' => '2',
            'empates' => '1',
            'pontos_favor' => '149.22',
            'pontos_contra' => '152.62',
        ]);
        TeamsTournaments::create([
            'id_team' => '17',
            'id_tournament' => '1',
            'vitorias' => '1',
            'derrotas' => '2',
            'empates' => '1',
            'pontos_favor' => '172.24',
            'pontos_contra' => '122.52',
        ]);
        TeamsTournaments::create([
            'id_team' => '18',
            'id_tournament' => '1',
            'vitorias' => '1',
            'derrotas' => '2',
            'empates' => '1',
            'pontos_favor' => '128.42',
            'pontos_contra' => '159.94',
        ]);
        TeamsTournaments::create([
            'id_team' => '19',
            'id_tournament' => '1',
            'vitorias' => '1',
            'derrotas' => '2',
            'empates' => '1',
            'pontos_favor' => '182.44',
            'pontos_contra' => '148.92',
        ]);
        TeamsTournaments::create([
            'id_team' => '20',
            'id_tournament' => '1',
            'vitorias' => '1',
            'derrotas' => '2',
            'empates' => '1',
            'pontos_favor' => '135.50',
            'pontos_contra' => '151.29',
        ]);
    }
}
