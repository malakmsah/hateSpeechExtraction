<?php
/**
 * Created by PhpStorm.
 * User: malakabuhammad
 * Date: 1/20/18
 * Time: 7:59 PM
 */

/**
 * @param string $message
 */
function printMessage($message)
{
    echo '[' . date('Y-m-d H:i:s') . '] ' . $message . PHP_EOL;
}

function sendEmail()
{
    // to do
}

/**
 * @return array
 */
function getHateWordsList()
{
    return [
        'Allophilia',
        'Animal cruelty',
        'Animal testing',
        'Anti-cultural sentiment',
        'Assimilation',
        'Bias',
        'Blood libel',
        'Blood sport',
        'Carnism',
        'Christian privilege',
        'Class conflict',
        'Compulsory sterilization',
        'Counter-jihad',
        'Cultural genocide',
        'Democide',
        'Disability hate crime',
        'Diversity',
        'Economic',
        'Eliminationism',
        'Employment',
        'Enemy of the people',
        'Ethnic cleansing',
        'Ethnic hatred',
        'Ethnic joke',
        'Ethnic penalty',
        'Ethnocide',
        'Eugenics',
        'Forced conversion',
        'Freak show',
        'Gay bashing',
        'Gendercide',
        'Genital mutilation',
        'Genocide',
        'Group libel',
        'Hate crime',
        'Hate group',
        'Hate speech',
        'Homeless dumping',
        'Housing',
        'Indian rolling',
        'Intersectionality',
        'Lavender scare',
        'LGBT hate crime',
        'Lynching',
        'Male privilege',
        'Masculism',
        'Meat eating',
        'Mortgage',
        'Multiculturalism',
        'Murder music',
        'Neurodiversity',
        'Occupational segregation',
        'Oppression',
        'Persecution',
        'Persecution',
        'Pogrom',
        'Police brutality',
        'Political correctness',
        'Power distance',
        'Prejudice',
        'Purge',
        'Race war',
        'Racial bias in criminal news',
        'Racism by country',
        'Red',
        'Regressive left',
        'Religious intolerance',
        'Religious persecution',
        'Scapegoating',
        'Scare',
        'Segregation academy',
        'Sex-selective abortion',
        'Slavery',
        'Slut-shaming',
        'Snobbery',
        'Social exclusion',
        'Social stigma',
        'Stereotype threat',
        'Trans bashing',
        'Victimization',
        'Violence against women',
        'White flight',
        'White power music',
        'White privilege',
        'Wife selling',
        'Witch-hunt',
        'Nazi crew',
        'Nazi',
    ];
}

/**
 * @return array
 */
function getBlogPosts()
{
    return [
        [
            'body' => 'voluptas ut qui sapiente id corporis quia
quia enim quibusdam repudiandae corporis distinctio fugit dignissimos
beatae voluptatem nihil consequatur occaecati provident exercitationem quae fugiat
accusantium non et voluptas eveniet ipsam fugit officiis cumque
consequatur et deleniti dolorem ad
 
    in magni adipisci
et sunt sed nulla saepe eius quia
tenetur quia aspernatur unde aperiam
earum voluptas a voluptatem est recusandae repellat
 
    placeat possimus qui ea incidunt totam perspiciatis similique eaque
minus incidunt cum voluptatem vel quod fugiat rerum
quae veniam ullam nesciunt veritatis sapiente officia et
illo dolor exercitationem quis
suscipit eos optio',
            'title' => 'ipsam facere laborum dolorem qui sunt vero rem
consequatur exercitationem aut id eveniet dolorem vero velit molestiae
cupiditate enim dolor aspernatur aut',
            'author_id' => 0,
            'summary' => 'voluptatem occaecati quis dolores qui rerum
molestiae voluptatum praesentium in at minus aut delectus veniam
reiciendis molestiae veritatis et minus
et officia repellendus necessitatibus suscipit non et enim
 
    doloribus qui quia soluta sint
et molestiae enim magni ut fugiat
sint esse consequuntur facere libero sequi
 
    a quod molestiae atque
autem consectetur ut accusamus
cum modi quam
odio et in ab veritatis omnis iusto maiores quia',
            'created_at' => '1981-09-14T10:05:31.653Z',
        ],
        [
            'body' => 'eligendi eos quod repellat beatae
harum consequuntur sed blanditiis est
mollitia dolores perspiciatis pariatur repudiandae quia autem
 
    officia autem mollitia rerum consequatur provident aliquid
atque eaque accusamus maxime nam
consequatur ex tempore sapiente
consequuntur aperiam hic sed necessitatibus culpa ut qui
asperiores ullam iste facilis rerum ipsa rem ut
 
    eius quo nemo facere dolores tempore vel
at et in et quasi sequi voluptatem
dicta qui impedit itaque',
            'title' => 'dolor commodi error id quia rerum quisquam
quibusdam quis quaerat veniam molestiae aspernatur quo non mollitia
sunt minus quibusdam saepe sed',
            'author_id' => 1,
            'summary' => 'voluptatem iure sequi
sunt id officiis sit facilis ea rerum
tenetur voluptas laudantium
 
    commodi dolor mollitia officiis numquam corrupti doloremque enim nulla
magni dolores quibusdam omnis
aut rerum optio a velit autem illo delectus eaque
 
    consectetur qui nisi quam fuga exercitationem eligendi
minima est aperiam voluptatem
et voluptas autem corrupti officia
voluptatem et voluptatibus eaque sit quo aut
quidem quas odit',
            'created_at' => '2015-03-19T10:56:36.068Z',
        ],
        [
            'body' => 'omnis veritatis quae aliquam aut
est ex reiciendis
non qui optio quia magnam ut et
quia explicabo beatae voluptatem quo vel
 
    earum sit quod rerum qui aut laudantium non libero
laborum voluptas aspernatur
adipisci excepturi illo occaecati laudantium et
 
    ea et sed
hic explicabo necessitatibus totam eum nisi ut eligendi sit
aut dolore est et molestiae praesentium
repellendus sint quia aut accusamus eaque',
            'title' => 'porro expedita nemo quasi reiciendis laboriosam dolores
corporis nulla adipisci assumenda odio enim accusantium quidem
dolores tempore placeat id',
            'author_id' => 2,
            'summary' => 'nihil distinctio non
et eaque maxime et rerum non id
veniam quibusdam ratione nemo eius
optio autem laudantium sed doloremque quis tempore quisquam excepturi
 
    quia ducimus omnis veniam placeat est iste
fuga quae reiciendis omnis qui animi
commodi quia est dolor iusto ut ut
odit quod esse ut qui
nulla error veniam tenetur amet dolorem
 
    aut asperiores repudiandae impedit ut voluptas et quam
et dicta aperiam et facere quo vero ut aut
ratione debitis quis deleniti sed
et molestiae excepturi omnis nihil repudiandae
minus neque magni et quaerat',
            'created_at' => '1997-02-06T07:39:09.644Z',
        ],
        [
            'body' => 'eaque reiciendis aut soluta similique
minima sit maxime aliquid asperiores dicta accusantium
est enim molestias est id
 
    eum et earum dolore et quo provident
enim illum est
assumenda tempora quo occaecati dignissimos molestiae provident consequatur ipsa
 
    minus et eveniet quod et
ut omnis quas voluptates saepe illum aliquam amet
qui aliquid consequatur ut sapiente ab in
dicta facere quam non magnam quos',
            'title' => 'veniam reprehenderit fugiat ipsam dolorum autem recusandae doloremque dolores
ut libero autem est voluptatem dolores
omnis incidunt et omnis dolorem similique consequatur quia qui',
            'author_id' => 3,
            'summary' => 'eius veritatis eveniet sit qui ducimus natus
et quidem aperiam a
sit deserunt molestias nam voluptatum
alias nisi corrupti
 
    aut similique quae cum laboriosam fugiat consequatur
et culpa ipsa ut expedita laudantium error
cum itaque deserunt deleniti
 
    rerum eum velit rem amet molestias
at ad repudiandae nihil ab illo et dolorum
dicta quis minus velit labore consectetur in aut ratione
voluptatem consequuntur dignissimos non et qui atque ab dolores',
            'created_at' => '2017-01-18T07:21:09.966Z',
        ],
        [
            'body' => 'et quibusdam minus consectetur aut iste officiis deleniti nostrum
officia itaque hic nam qui ut sapiente
earum id dignissimos officia
 
    enim quae aut ut fugit quod
explicabo nihil quia sint debitis doloremque accusamus
autem corrupti odit
nulla dignissimos eaque tempora pariatur natus aut facere
eos et veniam libero quis et
 
    ducimus at culpa corrupti sit laboriosam delectus hic
enim quo itaque neque sint error
exercitationem atque qui deserunt et aut expedita est molestiae
et in consequatur culpa delectus
accusamus id voluptatibus eos ut',
            'title' => 'eligendi sapiente accusantium dignissimos non voluptates voluptate quo
deleniti quia inventore illo sed quia ex omnis
perferendis quibusdam quisquam quidem error hic excepturi',
            'author_id' => 4,
            'summary' => 'commodi expedita molestiae
autem atque voluptas id dicta
dolores corrupti eaque recusandae aliquam occaecati consequatur hic
consequatur et blanditiis et iusto
 
    in cumque sed deleniti dolorem est quia
quisquam eligendi minima hic occaecati qui odit ut necessitatibus
ipsum aut consectetur
 
    ipsam corrupti eaque
iure placeat et cum est quia eius molestiae possimus
est quia sed pariatur excepturi rerum magni veritatis voluptas
ipsum qui non perferendis iure sit delectus dolor dolores
laborum qui ex labore ipsa',
            'created_at' => '1990-07-08T01:01:05.626Z',
        ],
        [
            'body' => 'a dolorem accusantium aliquam laudantium eum
ex sed minus iusto natus
sunt quos aut accusantium quia est blanditiis eos
 
    quia fugit omnis sed
at tenetur repellendus facere est id deleniti
laboriosam vitae maxime ut qui autem
libero maiores impedit quia autem explicabo optio
 
    aut quas non ducimus consequatur animi accusantium deleniti fuga
non et sed vitae consectetur laboriosam qui omnis minima
omnis et nesciunt sed asperiores sapiente laborum iusto recusandae',
            'title' => 'voluptatem a consectetur labore soluta et iste harum
et sapiente voluptas error dolores asperiores
accusantium sunt eligendi sed ex aut sint reprehenderit',
            'author_id' => 5,
            'summary' => 'aut eius debitis et qui inventore molestiae
amet distinctio illo mollitia
officiis rerum cum sint
 
    quo sed consequuntur sit in illum omnis rem voluptatem
inventore consequatur fugit possimus
ea repellat eius qui
similique magnam a aliquam consectetur
 
    magnam molestiae ea velit velit voluptatem qui labore
voluptas esse cupiditate consequuntur beatae temporibus consequatur harum
in eos voluptas totam nulla voluptates dolorem
voluptatem est nisi eveniet nobis eaque',
            'created_at' => '2017-04-15T08:50:29.427Z',
        ],
        [
            'body' => 'iusto exercitationem voluptatem dolorem et adipisci et suscipit
assumenda delectus autem beatae
consequatur porro aliquid aut et veritatis explicabo
rerum sit est eveniet voluptate
cupiditate consequatur et dolores aut quis praesentium
 
    debitis facilis sit laudantium
eum dolor magnam inventore
qui nam consequuntur perspiciatis magnam sit tenetur quia
voluptatem quis mollitia
 
    eos minima debitis sed distinctio eveniet perferendis perspiciatis
voluptas cum molestiae sequi libero eos ut aut
voluptas tempore magni
dolorem minus cupiditate doloremque ad aut sed delectus
et quos consectetur ut est fugit',
            'title' => 'est dolor aperiam distinctio cumque et
voluptas dolorem provident
enim consequatur dicta omnis impedit placeat iure soluta nam',
            'author_id' => 6,
            'summary' => 'eos nisi ab autem at ea ut
officiis provident dolores qui amet earum in ratione nostrum
aut explicabo modi
 
    quos cupiditate et ea cumque
odit et totam aliquid quia est saepe sit
aspernatur sint aut non mollitia
 
    vitae ad a placeat quos repellendus rerum sapiente doloribus
velit qui molestiae
quis voluptas hic modi esse eius officia impedit',
            'created_at' => '2010-06-16T18:19:50.328Z',
        ],
        [
            'body' => 'rem nihil aspernatur nesciunt necessitatibus quos
alias omnis non deserunt inventore et
quasi possimus tempore quis alias ut officiis voluptatem esse
modi consectetur perferendis quis id
praesentium dolores cumque quidem perspiciatis vel assumenda similique
 
    autem ut quisquam
aliquid beatae provident fuga consectetur quo
dolor ullam et eligendi deserunt et
 
    aliquam fugiat non debitis voluptas ipsum error qui
veritatis ex tenetur voluptas magni pariatur voluptatem
harum rem sit ut voluptates ea reiciendis
voluptatem aliquam delectus at',
            'title' => 'molestiae sint accusamus non non id omnis
praesentium optio necessitatibus ut voluptas autem veniam
et maxime ipsa enim rerum dolorum totam',
            'author_id' => 7,
            'summary' => 'incidunt maxime voluptatem quia quibusdam enim dolor eligendi necessitatibus
ut ad iure earum quasi
voluptatum minima veritatis error sequi nihil
vero labore animi repellat similique magnam ipsa optio
 
    aut dolore consequatur culpa ut in
aut quia sed modi et
error quis tempore aut eaque hic iste est
dolor ducimus voluptate pariatur
 
    atque nihil neque laudantium sed nesciunt facere doloribus
nihil quia tempora expedita voluptas similique praesentium quia culpa
unde voluptas ut minima quis blanditiis sapiente
enim eum ut et dolores rem cumque dolorum',
            'created_at' => '2000-11-18T01:28:06.382Z',
        ],
        [
            'body' => 'adipisci nihil molestiae vitae
facilis ipsa sed laboriosam dolores
modi itaque laudantium in
enim aliquam doloribus et sed architecto aut et id
 
    quibusdam dicta ut
et nihil exercitationem doloremque consequuntur corporis magnam commodi id
labore dolor necessitatibus minus et consequatur est et commodi
voluptates rerum nobis sed atque
 
    dignissimos ab repudiandae deleniti libero labore quam ex
facilis aut incidunt
occaecati nisi libero molestiae temporibus qui',
            'title' => 'suscipit eum quos
eos molestiae ut
officiis porro qui ea',
            'author_id' => 8,
            'summary' => 'atque illo quod voluptas sint porro ipsum cupiditate
voluptatem rerum tempore
ipsa dolor eius molestias voluptas quis harum reprehenderit est
 
    vel eos et est molestiae
quia asperiores aperiam placeat perferendis ad dicta nulla aut
ducimus omnis accusantium consequatur sequi sunt
 
    enim qui illum quia impedit sequi et
fuga ut adipisci
natus accusantium est enim sint
ab reprehenderit aut nemo quam impedit quo eos
quos dolorem eaque error impedit magnam sint ratione',
            'created_at' => '2009-10-04T00:06:33.503Z',
        ],
        [
            'body' => 'voluptates voluptatibus velit deleniti
id optio unde inventore
est veniam incidunt nihil
quae voluptatum maiores illo
 
    et aliquid eum ut laudantium quasi nemo
est necessitatibus quia quam
tempore qui dolorem
natus eius est
 
    rem aut numquam et
amet minus accusamus adipisci at facere nesciunt
aut et dolores aut quis et',
            'title' => 'blanditiis eaque officiis est
ducimus accusamus quae
quis nesciunt ipsa',
            'author_id' => 9,
            'summary' => 'cupiditate dolor aut aut autem repudiandae
nam qui voluptatum consequatur aspernatur asperiores
repudiandae occaecati sint dolor quas impedit est
enim sit vel
 
    non qui ipsa qui recusandae
voluptatem doloribus id
provident et voluptatem
et vitae expedita illo vel assumenda voluptatum repellendus
 
    voluptatem molestias temporibus ducimus pariatur impedit soluta itaque
autem eum non molestiae
eligendi in et et deserunt quia vel',
            'created_at' => '1982-07-26T06:11:15.148Z',
        ],
    ];
}

/**
 * @param $foundWords
 */
function alert($foundWords)
{
    printMessage("Hate speech has been found");
    foreach ($foundWords as $author_id => $usedWords) {
        $usedWords = array_values(array_unique($usedWords));
        printMessage("The author [" . $author_id . "] used the hate words [" . implode(', ', $usedWords) . "]");
        sendEmail();
    }
}

function main()
{
    printMessage("Execution started.");
    $blogPosts = getBlogPosts();
    $hateWords = getHateWordsList();
    $foundWords = [];
    foreach ($blogPosts as $blogPost) {
        foreach ($hateWords as $hateWord) {
            if (!empty($blogPost['body']) && stripos($blogPost['body'], $hateWord) !== false) {
                $foundWords[$blogPost['author_id']][] = $hateWord;
            }
        }
    }
    if (!empty($foundWords)) {
        alert($foundWords);
    } else {
        printMessage("No hate speech has been found");
    }
    printMessage("Execution done.");
}
main();
