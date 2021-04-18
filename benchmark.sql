-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 09, 2020 at 12:10 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `benchmark`
--

-- --------------------------------------------------------

--
-- Table structure for table `kategorija`
--

CREATE TABLE `kategorija` (
  `id` int(11) NOT NULL,
  `naziv` varchar(500) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `kategorija`
--

INSERT INTO `kategorija` (`id`, `naziv`) VALUES
(1, 'Testovi'),
(2, 'Igrice'),
(3, 'Mobilni telefoni'),
(4, 'Laptop računari');

-- --------------------------------------------------------

--
-- Table structure for table `vesti`
--

CREATE TABLE `vesti` (
  `id` int(11) NOT NULL,
  `naslov` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `tekst` text COLLATE utf8_unicode_ci NOT NULL,
  `kategorije_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `vesti`
--

INSERT INTO `vesti` (`id`, `naslov`, `tekst`, `kategorije_id`) VALUES
(1, 'Test: Lenovo IdeaPad S340 14API', 'U trenutku testova smo sasvim slučajno došli do još jednog primerka AMD APU ultrabook računara koji je imao šasiju od “unibody” legure metala. Impresioniralo nas je činjenica da se račuar uopšte nije grejao, praktično je bio stalno prisutan osećaj dodira hladnog metala. Isti je zabeležio pet časove realne autonomije rada u našim standardnim aplikacijama. Dakle, AMD APU ima potencijal savršene ultramobilne platforme, sve smao zavisio do vaših finansijskih mogućnosti i realnih potreba.\r\n \r\nIdeaPad S340 14API sa druge strane je pristupačan mobilni računar kompaktnih dimenzija, malog profila i niske cene. AMD je definitivno postao ozbiljan igrač i oponent Intelu, čak i na ovom delu tržišta. Evidentno se manje greje od sličnih Intel modela u ABS kućištu. Zaostaje u čisto procesorskim operacijama, ali imajte u vidu da je ovo prethodna generacija 12 nm Zen+ jezgara dok je u delu gračkih operacija nesumnjivo bolji. Čak i u ovoj verziji deluje kao svestraniji i bolje izbalansiran računar sa širim poljem upotrebe jer je zabava i gejming relaksacija, neuporedivo kvalitetnija nego na sličnoj Intel platformi ove cenovne klase.\r\n \r\nOstaje da vidimo koliko će AMD brzo nadoknaditi ovaj zaostatak jer ima Zen 2 \"keca u rukavu\". Još štedljivijeg i još bržeg. Ne sumnjamo da će u vremenu ispred nas AMD postati čest izbor na ultramobilnim notebook računarima. Uostalom, to je najbolje potvrdio današnji primerak IdeaPad S340 računara u AMD APU verziji platforme. Tanak i svestran sa niskom cenom i velikom upotrebnom vrednošću - AMD nikada ranije nije bio ozbiljniji u nameri da pomrsi Intelu konce u gnezdu njegove zlatne “koke”, zvanoj lagani i ultra portabilni računari. IdeaPad S340 14API vredi svakog uloženog novčića, čime ulazi u izbor svestranih i lako prenosivih \"četrnaestica\"!\r\n \r\n\r\nPrednosti\r\n- Lagan i kompaktan,\r\n- Svestran sa balansiranim performansama,\r\n- Veoma upotrebljiv u realnim situaicjama,\r\n- Mala potrošnja i grejanje,\r\n- Povoljna cena\r\n \r\nNedostaci:\r\n- Zaostaje u CPU performansama za Intel konkurencijom\r\n \r\nCENA oko 500-550 evra', 1),
(2, 'Test: Honor 9X', 'Cena telefona iznosi 33,990 dinara, ili otprilike oko nekih 300 evra. Drugim rečima, Honor 9X je i dalje pozicioniran u praktično istoj cenovnoj niši kao i njegovi prethodnici. Međutim, ti isti prethodnici su praktično dolazili na tržište kao Best Buy uređaji u najavi, što bi uglavnom potvrđivali u samom startu. Bili su najbolja kupovina, a ako ne najbolja, onda svakako jedna od najrazumnijih.\r\n\r\n \r\n\r\nDa li je to i dalje tako? Rekli bismo da je Honor 9X i dalje razumna kupovina, ali je daleko, daleko od najbolje u ovoj kategoriji. Za godinu dana se toliko toga promenilo, a nažalost američke sankcije su doprinele da nova generacija telefona srednje klase koja stiže od kompanije Honor ipak bude na određeni način limitirana. Daleko od toga da će bilo ko biti razočaran kupovinom, ali postoje mnogi detalji koji bi trebali biti na višem nivou, jer tržište prosto pritiska i iziskuje tako nešto. Da li je to nešto što će vas sprečiti u kupovini, ili vam je najbitniji ukupan miks osobina gde Honor 9X i dalje može da vas privuče, ostavljamo vama da prosudite.\r\n\r\n\r\nPrednosti:\r\n\r\n- Dobar dizajn i kvalitet izrade\r\n- Utegnuta softverska platforma\r\n- Baterija\r\n- Dobre fotografije glavnom kamerom\r\n\r\n\r\nNedostaci:\r\n\r\n- Ostao na istom čipsetu kao prošlogodišnji model\r\n- Ekran veoma vuče na hladni deo spektra\r\n- Bez podrške za brzo punjenje\r\n- Video snimanje', 1),
(3, 'Fortnite je zaradio rekordnih 1,8 milijardi dolara tokom 2019. godine', 'Fortnite je tokom 2019. godine je od prodaje ostvario zaradu od 1,8 milijardi dolara, što predstavlja više nego što je ijedna druga igra ikada ostvarila tokom jedne godine.\r\n\r\nIako je Fortnite tehnički besplatan (free-to-play) naslov, Epic Games nudi Battle Pass na mesečnom nivou, koji košta 10 dolara i omogućava kupovinu različitih stvari u okviru igre. Ovo uključuje odeću, oružja, plesove koji se mogu primeniti na likove, reakcije i drugi \"kozmetički\" sadržaj, a sve kako bi obezbedio da se 125 miliona aktivnih igrača redovno vraća u igru.\r\n\r\nU kombinaciji sa jakim marketingom i promocijom, koji se mogu porediti i sa najvećim filmskim blokbasterima, ne predstavlja iznenađenje što je Fortnite postao svojevrstan kulturološki fenomen.\r\n\r\nUkupno gledano, gejming industrija je tokom 2019. godine ostvarila odlične rezultate. Nielsen istraživanje ističe da je industrija ostvarila ukupnu zaradu od 120 milijardi dolara od prodaje, što predstavlja povećanje od četiri procenta u odnosu na 2018. Veliki deo te zarade je ostvaren zahvaljujući mobilnim igrama (64,4 milijarde), nakon čega sledi PC (29,4 milijarde) i konzole (15,4 milijardi). Ostatak čine VR i AR igre i video sadržaj sa gejming tematikom.', 2),
(4, 'Sony patentirao novi dizajn kontrolera za PlayStation', 'Sony bi u pripremi mogao imati novi PlayStation kontroler, a ovo sugeriše patent prototipa novog dizajna za kontrolere japanske kompanije. Patent je osiguran 26. decembra, a dokumentacija je otkrivena u okviru World Intellectual Property Organization (WIPO) baze.\r\n\r\nZasnovan na ilustracijama sa sajta, novi dizajn dosta podseća na aktuelne DualShock 4 kontrolere, izuzev toga što nema PS taster i na pozadini se nalaze dva dodatna tastera.\r\n\r\nSlično tasterima na DualShock 4 dodatku, koji Sony objavljuje 23. januara, tasteri na novom dizajnu deluju kao da se mogu programirati. Moguće im je dodeliti funkcije drugih tastera, kako bi se kontrole u igrama načinile intuitivnijim i lakšim za korišćenje.\r\n\r\nSugeriše se da bi se tasteri na poleđini mogli pomeriti na druge pozicije, što s znači da je kontroler moguće prilagođavati ili postoje druge opcije dizajna. Za sada nije poznato da li će rešenje iz ovog patentnog dizajna biti implementirano u konkretan proizvod.', 2),
(5, 'Huawei P40 Pro fotografije pokazuju sistem sa pet kamera na poleđini i gotovo ravan ekran', 'Pojavili su se navodni renderi Huawei P40 Pro telefona u zaštitnom kućištu, koji nam daju bolji uvid u neke karakteristike dolazećeg uređaja.\r\n\r\nIspupčenje za kameru pokazuje pet kamera senzora, što se poklapa sa dosadašnjim glasinama. Senzor u vrhu bi mogao biti periskop (P40 Pro bi trebalo da ima 10x optičko zumiranje). Ranije procurele vesti su sugerisale da će standardni Huawei P40 imati sistem sa tri kamere.\r\n\r\nS prednje strane P40 Pro je takođe zanimljiv. Tu su dve punch-hole selfi kamere. Kada je u pitanju sam ekran, zanimljivo je da njegove ivice nisu zaobljene, kao što je to bio slučaj kod \"Horizon Display-a\" na Mate 30 Pro modelu. Sa strane su vidljivi i tradicionalni hardverski tasteri.\r\n\r\nPrimetno je da nema 3.5mm priključka, koji je verovatno rezervisan za standardni P40. U gornjoj strani telefona je smešten IR blaster.\r\n\r\nHuawei P40 i P40 Pro će biti predstavljeni krajem marta u Parizu, a očekuje se da će imati Kirin 990 čipset i verovatno će stići bez Google servisa.', 3),
(6, 'Xiaomi Mi 10 se očekuje pre Samsung Galaxy S20 serije', 'Tokom Qualcomm Summit-a prošle godine, Xiaomi je najavio da će kompanijina Xiaomi Mi 10 serija telefona koristiti najnoviji Snapdragon 865 čipset. Iako je Samsung već potvrdio da će Galaxy S20 serija (za koju se očekuje da će koristiti Snapdragon 865 SoC) biti predstavljena 11. februara, južnokorejska kompanija možda ipak neće biti prva koja će implementirati Qualcommov premijum čipset. Prema najnovijim glasinama, Xiaomi Mi 10 telefon bi mogao biti predstavljen pre Galaxy S20 serije.\r\n\r\nOve informacije stižu iz velikog broja vesti i objava sa kineske mreže Weibo. Xiaomi je već nagovestio da Mi 10 stiže u nekom trenutku tokom prvog tromesečja 2020. godine. Kineski dojavljivač Digital Chat Station takođe tvrdi da Samsung neće biti prva kompanija koja će upotrebiti Qualcomm Snapdragon 865 čipset i da će Xiaomi verovatno objaviti Mi 10 u februaru.\r\n\r\nZa sada, nije previše toga poznato o Xiaomi Mi 10 telefonu. Više informacija se sigurno očekuje u narednim nedeljama. Ono što se zna jeste da će imati Snapdragon 865 čipset, dok se za bateriju sugeriše kapacitet između 4500 i 4800 mAh.', 3),
(7, 'Lenovo Yoga Slim 7 laptop stiže i u Intel i u AMD varijanti', 'Tokom CES sajma, kompanija Lenovo je predstavila nove Yoga Slim 7 laptopove, koji će biti ponuđeni i u Intel i u AMD konfiguracijama.\r\n\r\nZanimljivo je da će laptopovi biti opremljeni AMD Ryzen 4000 procesorima, koji stižu tokom prvog tromesečja ove godine. Kada su u pitanju Intel modeli, oni stižu sa Core i7 procesorima Intelove desete generacije.\r\n\r\nIzuzev različitih brendova, koji će se naći u njima, postojaće i razlika u cenama novih Lenovo Yoga Slim 7 laptopova. Tako će AMD modeli imati početnu cenu od 850 dolara, dok Intel varijante stižu sa startnom cenom od 1210 dolara. Ostatak karakteristika laptopova su slične, a uključuju 14-inčni Full HD displej, do 16GB RAM-a, do 1TB SSD skladišta, USB 3.1 i USB-C portove, čitač SD kartica i priključak za slušalice.\r\n\r\nAMD i Intel verzije Lenovo Yoga Slim 7 laptopa će se na tržištu naći od aprila.', 4),
(8, 'Intelov Horseshoe Bend koncept nam daje uvid u budućnost fleksibilnih računara', 'Intel je tokom CES sajma predstavio sopstveni fleksibilni PC koncept, koji bi trebalo da inspiriše pojavu potpuno nove kategorije uređaja. Prototip nosi naziv Horseshoe Bend i radi se o poprilično velikom uređaju.\r\n\r\nOLED displej od 17.3 inča ima 4:3 odnos stranica, što znači da je približniji tradicionalnim laptopovima kada se rasklopi. Tu je i postolje u Surface stilu, koje omogućava korišćenje displeja u punom obimu u kombinaciji sa bežičnom tastaturom.\r\n\r\nOčekuje se da bi najveća primena ovakvog laptopa mogla biti u segmentu kreiranja sadržaja i olakšane upotrebe korisničkog interfejsa.\r\n\r\nHorseshoe Bend koristi Intelovu novu 10nm Tiger Lake arhitekturu, koja se očekuje u laptopovima tokom ove godine. Ovo će omogućiti 7mm tanka kućišta, uz 9W TDP i bez aktivnog hlađenja. Uređaj je prikazan uz standardni Windows 10, ali Intel očekuje da će u budućnosti Microsoftov dolazeći Windows 10X OS biti dobar izbor za ovu kategoriju uređaja.\r\n\r\nZa sada deluje kao da Intel zaista ima nameru da ovakav format računara načini dostupnim na mejnstrim tržištu, a kompanija planira saradnju sa nekoliko proizvođača koji će pomoći u razvoju ovakvih uređaja u bliskoj budućnosti.', 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kategorija`
--
ALTER TABLE `kategorija`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vesti`
--
ALTER TABLE `vesti`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kategorija`
--
ALTER TABLE `kategorija`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `vesti`
--
ALTER TABLE `vesti`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
