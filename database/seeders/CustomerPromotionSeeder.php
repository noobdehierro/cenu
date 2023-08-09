<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CustomerPromotionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $dt = Carbon::now();
        $dateNow = $dt->toDateTimeString();
        $dateAfter30Days = $dt->toDateTimeString();

        $customers = [
            [
                'customer_id' => 1348,
                'name' => 'KEVIN ALEXIS SANCHEZ SAMARRIPA'
            ],
            [
                'customer_id' => 1345,
                'name' => 'DIEGO FERNANDO HERNANDEZ PEREZ'
            ],
            [
                'customer_id' => 1383,
                'name' => 'GUILLERMO RICARDO '
            ],
            [
                'customer_id' => 1387,
                'name' => 'SAMUEL REYES MAXIMINO'
            ],
            [
                'customer_id' => 1395,
                'name' => 'david alejandro jacobo marquez'
            ],
            [
                'customer_id' => 1398,
                'name' => 'Luis Fernando  San Pedro  rivera'
            ],
            [
                'customer_id' => 1346,
                'name' => 'David  Cortes García García'
            ],
            [
                'customer_id' => 1350,
                'name' => 'Daniel Eduardo  Gallardo  Ceja'
            ],
            [
                'customer_id' => 1401,
                'name' => 'LUIS GERARDO  ORTA ESCOBAR  '
            ],
            [
                'customer_id' => 1482,
                'name' => 'Rafael  Arano  castañeda'
            ],
            [
                'customer_id' => 1424,
                'name' => 'juan antonio olea vargas'
            ],
            [
                'customer_id' => 1448,
                'name' => 'Mauricio  Sánchez '
            ],
            [
                'customer_id' => 1422,
                'name' => 'HECTOR ALBERTO CHAVEZ ZAVALA'
            ],
            [
                'customer_id' => 1428,
                'name' => 'Abraham  Misael  '
            ],
            [
                'customer_id' => 1417,
                'name' => 'Omar  Reyna Gomez  '
            ],
            [
                'customer_id' => 1438,
                'name' => 'Adam  Zepeda '
            ],
            [
                'customer_id' => 1440,
                'name' => 'Jorge Gilberto  Martinez  Villa'
            ],
            [
                'customer_id' => 1444,
                'name' => 'Azael  Tapia  Granillo'
            ],
            [
                'customer_id' => 1450,
                'name' => 'arturo  rodriguez nino niño'
            ],
            [
                'customer_id' => 1445,
                'name' => 'Rodrigo  Alatorrre  Farfán'
            ],
            [
                'customer_id' => 1446,
                'name' => 'Andrés  Castillo '
            ],
            [
                'customer_id' => 1449,
                'name' => 'Edilberto Alfaro  García'
            ],
            [
                'customer_id' => 1451,
                'name' => 'Brandon  Dávalos  campos'
            ],
            [
                'customer_id' => 1453,
                'name' => 'Antonio  Nobelo  Baliño'
            ],
            [
                'customer_id' => 1433,
                'name' => 'Jose  Gómez '
            ],
            [
                'customer_id' => 1454,
                'name' => 'Alan  Esau '
            ],
            [
                'customer_id' => 1456,
                'name' => 'Ricardo  Montero  Cortés'
            ],
            [
                'customer_id' => 1457,
                'name' => 'JEAN CARLOS CABRERA '
            ],
            [
                'customer_id' => 1485,
                'name' => 'Christopher  Vázquez '
            ],
            [
                'customer_id' => 1458,
                'name' => 'Antonio Antonio '
            ],
            [
                'customer_id' => 1459,
                'name' => 'Dennis Guerra '
            ],
            [
                'customer_id' => 1463,
                'name' => 'Johan Fernando  Montoya  Hinojosa'
            ],
            [
                'customer_id' => 1464,
                'name' => 'Víctor  Montiel '
            ],
            [
                'customer_id' => 1460,
                'name' => 'Alejandro  Ortiz Guerrero Guerrero'
            ],
            [
                'customer_id' => 1461,
                'name' => 'Alan  Reyes '
            ],
            [
                'customer_id' => 1462,
                'name' => 'Jesús Exel  Cervantes  García'
            ],
            [
                'customer_id' => 1476,
                'name' => 'Isaac  Muñiz '
            ],
            [
                'customer_id' => 1468,
                'name' => 'Luis Iván  angon  alvarez'
            ],
            [
                'customer_id' => 1466,
                'name' => 'Edgar  Muñoz  Salado'
            ],
            [
                'customer_id' => 1469,
                'name' => 'Saul  Caballero  Herrera'
            ],
            [
                'customer_id' => 1470,
                'name' => 'Oscar  Osvaldo '
            ],
            [
                'customer_id' => 1472,
                'name' => 'Kevin  del águila '
            ],
            [
                'customer_id' => 1471,
                'name' => 'Jorge Diego  Centeno '
            ],
            [
                'customer_id' => 1473,
                'name' => 'José Javier  Vilchis  Escobar'
            ],
            [
                'customer_id' => 1474,
                'name' => 'Fernando  garcia  arguelles'
            ],
            [
                'customer_id' => 1475,
                'name' => 'Enrique  Temporal  Martinez'
            ],
            [
                'customer_id' => 1484,
                'name' => 'Juan lino  llanos  gutierrez'
            ],
            [
                'customer_id' => 1434,
                'name' => 'Antonio  garcia  andrade'
            ],
            [
                'customer_id' => 1325,
                'name' => 'HORARIO JUAREZ '
            ],
            [
                'customer_id' => 1322,
                'name' => 'Enrique  Flores  Mejía'
            ],
            [
                'customer_id' => 1335,
                'name' => 'GABRIEL NULL '
            ],
            [
                'customer_id' => 1320,
                'name' => 'Alexis Peña '
            ],
            [
                'customer_id' => 1328,
                'name' => 'MIGUEL IVAN CLAUDIO MATIAS'
            ],
            [
                'customer_id' => 1323,
                'name' => 'Bruno Jareth '
            ],
            [
                'customer_id' => 1326,
                'name' => 'Alejandro  Ponce  Sanchez'
            ],
            [
                'customer_id' => 1331,
                'name' => 'ARTURO HERNANDEZ FABIAN'
            ],
            [
                'customer_id' => 1343,
                'name' => 'Feliciano  león  Hernández'
            ],
            [
                'customer_id' => 1321,
                'name' => 'Miguel  Luna '
            ],
            [
                'customer_id' => 1327,
                'name' => 'JOSE MANUEL BONILLA DURAN'
            ],
            [
                'customer_id' => 1329,
                'name' => 'juan carlos '
            ],
            [
                'customer_id' => 1336,
                'name' => 'AARON SENTIES '
            ],
            [
                'customer_id' => 1337,
                'name' => 'Adolfo  Oloarte  Garcia'
            ],
            [
                'customer_id' => 1355,
                'name' => 'jonathan  olivares '
            ],
            [
                'customer_id' => 1349,
                'name' => 'BRANDON ALEJANDRO GARCIA PARRA'
            ],
            [
                'customer_id' => 1359,
                'name' => 'Fernando  Lucero  Villagomez'
            ],
            [
                'customer_id' => 1360,
                'name' => 'Guillermo  Ramirez  León'
            ],
            [
                'customer_id' => 1361,
                'name' => 'ivan eduardo perez chavez'
            ],
            [
                'customer_id' => 1363,
                'name' => 'Carlos  Méndez '
            ],
            [
                'customer_id' => 1370,
                'name' => 'raniel jose mandez avila'
            ],
            [
                'customer_id' => 1374,
                'name' => 'javier null '
            ],
            [
                'customer_id' => 1382,
                'name' => 'HECTOR GABRIEL BECERRA RIVERA'
            ],
            [
                'customer_id' => 1375,
                'name' => 'Mario SALAZAR '
            ],
            [
                'customer_id' => 1378,
                'name' => 'Omar  Betanzos '
            ],
            [
                'customer_id' => 1338,
                'name' => 'angelica rosas vargas '
            ],
            [
                'customer_id' => 1478,
                'name' => 'Javier  estrada  Sánchez'
            ],
            [
                'customer_id' => 1351,
                'name' => 'LEONARDO GONZALEZ CAMACHO'
            ],
            [
                'customer_id' => 1342,
                'name' => 'MIGUEL SALAZAR '
            ],
            [
                'customer_id' => 1333,
                'name' => 'Alexis Aranda '
            ],
            [
                'customer_id' => 1425,
                'name' => 'Leonel  NULL '
            ],
            [
                'customer_id' => 1437,
                'name' => 'Yair  alan '
            ],
            [
                'customer_id' => 1441,
                'name' => 'Luis Daniel  Resendiz  Molina'
            ],
            [
                'customer_id' => 1436,
                'name' => 'Luis Alberto  Arana '
            ],
            [
                'customer_id' => 1368,
                'name' => 'JOSE NULL '
            ],
            [
                'customer_id' => 1369,
                'name' => 'Issac  Santos  Gómez'
            ],
            [
                'customer_id' => 1357,
                'name' => 'luis fernando vargas arellano'
            ],
            [
                'customer_id' => 1339,
                'name' => 'DANIEL HERNANDEZ '
            ],
            [
                'customer_id' => 1427,
                'name' => 'PEDRO MORAN '
            ],
            [
                'customer_id' => 1435,
                'name' => 'Alonso Manuel  Estrada  Vicencio'
            ],
            [
                'customer_id' => 1439,
                'name' => 'Dioney Carlos  Gutierrez  Mora'
            ],
            [
                'customer_id' => 1389,
                'name' => 'DIEGO NULL '
            ],
            [
                'customer_id' => 1352,
                'name' => 'julios cersar calderon ubaldo'
            ],
            [
                'customer_id' => 1358,
                'name' => 'ABDIEL GUARNEROS '
            ],
            [
                'customer_id' => 1365,
                'name' => 'Rau  lcarballo  nava'
            ],
            [
                'customer_id' => 1366,
                'name' => 'VIVIANA NULL '
            ],
            [
                'customer_id' => 1371,
                'name' => 'ARETHA FERNANDA GARCIA ALCANTARA'
            ],
            [
                'customer_id' => 1376,
                'name' => 'NOE SANTOS ORTEGA'
            ],
            [
                'customer_id' => 1377,
                'name' => 'ricardo rivera garza'
            ],
            [
                'customer_id' => 1381,
                'name' => 'Ana patricia  Villalobos  Rodriguez'
            ],
            [
                'customer_id' => 1390,
                'name' => 'Adrian Alberto  Rosas  Rosales'
            ],
            [
                'customer_id' => 1391,
                'name' => 'bryan alberto flores de dios'
            ],
            [
                'customer_id' => 1386,
                'name' => 'Sergio ramcarro '
            ],
            [
                'customer_id' => 1379,
                'name' => 'Yeshua  Martínez  Guerrero'
            ],
            [
                'customer_id' => 1367,
                'name' => 'Juan Carlos  García '
            ],
            [
                'customer_id' => 1442,
                'name' => 'Julio Cesar  Lavis  García'
            ],
            [
                'customer_id' => 1443,
                'name' => 'Axel  Itzael '
            ],
            [
                'customer_id' => 1447,
                'name' => 'Carlos Alberto  Reyes  Nicolas'
            ],
            [
                'customer_id' => 1483,
                'name' => 'Juan  Castillo '
            ],
            [
                'customer_id' => 1353,
                'name' => 'Rosa maria  hernandez  santos'
            ],
            [
                'customer_id' => 1373,
                'name' => 'Ricardo  Vazquez  Moreno'
            ],
            [
                'customer_id' => 1455,
                'name' => 'Juan  Gabriel '
            ],
            [
                'customer_id' => 1364,
                'name' => 'RAFAEL DE LA LUZ '
            ],
            [
                'customer_id' => 1347,
                'name' => 'EMILIO CRUZ GARCIA'
            ],
            [
                'customer_id' => 1481,
                'name' => 'Perla  Guerra  Guerrero'
            ],
            [
                'customer_id' => 1372,
                'name' => 'GONZALO MUÑOZ '
            ],
            [
                'customer_id' => 1426,
                'name' => 'Carla Mayte  Muñoz Villazteca  '
            ],
            [
                'customer_id' => 1362,
                'name' => 'Brandon Yahir Olivares Lara Olivares  Lara'
            ],
            [
                'customer_id' => 1423,
                'name' => 'victor martinez bedolla'
            ],
        ];


        foreach ($customers as $customer) {
            DB::table('customer_promotions')->insert([
                'customer_id' => $customer['customer_id'],
                'name' => $customer['name'],
                'id_promotion' => 1,
                'created_at' => $dateNow,
                'updated_at' => $dateAfter30Days,
            ]);
        }
    }
}
