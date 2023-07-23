-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Creato il: Lug 07, 2023 alle 14:22
-- Versione del server: 5.7.39
-- Versione PHP: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `topic_id` int(11) DEFAULT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `published` tinyint(4) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dump dei dati per la tabella `posts`
--

INSERT INTO `posts` (`id`, `user_id`, `topic_id`, `title`, `image`, `body`, `published`, `created_at`) VALUES
(22, 24, 11, 'Come definire i tuoi ricci con il metodo Ditoliss?', '1688684410_images_7.jpg', '&lt;p&gt;I capelli ricci possono presentare alcune sfide: alcune ciocche sembrano pi&amp;ugrave; definite di altre, rendendo la chioma complessivamente meno omogenea.&lt;/p&gt;\r\n&lt;p&gt;&amp;nbsp;&lt;/p&gt;\r\n&lt;p&gt;Questi problemi sono comuni nei capelli ricci o mossi, ma esiste una soluzione per evitare che i capelli perdano elasticit&amp;agrave; e definizione. Si tratta di una tecnica di styling specifica di cui parleremo in questo articolo: il metodo Ditoliss, che permette di recuperare e definire le ciocche ribelli creando ricci con le proprie mani!&lt;/p&gt;\r\n&lt;p&gt;&amp;nbsp;&lt;/p&gt;\r\n&lt;p&gt;Il termine Ditoliss richiama il gesto di arrotolare le ciocche tra le dita. Le dita sono uno strumento eccellente per dare definizione ai capelli ricci, e in precedenti articoli abbiamo sottolineato l\'importanza di saper utilizzare le mani in modo sapiente per ottenere la piega desiderata.&lt;/p&gt;\r\n&lt;p&gt;&amp;nbsp;&lt;/p&gt;\r\n&lt;p&gt;Continua a leggere per scoprire come applicare il tuo prodotto styling preferito e come ottenere definizione perfetta per i tuoi capelli attraverso uno scrunch eseguito con maestria!&lt;/p&gt;\r\n&lt;p&gt;&amp;nbsp;&lt;/p&gt;\r\n&lt;p&gt;&lt;strong&gt;Applicazione dello styling&lt;/strong&gt;&lt;/p&gt;\r\n&lt;p&gt;Dopo aver lavato i capelli, dedica del tempo all\'applicazione del prodotto styling, assicurandoti di distribuirlo uniformemente su tutta la capigliatura.&lt;/p&gt;\r\n&lt;p&gt;&amp;nbsp;&lt;/p&gt;\r\n&lt;p&gt;L\'applicazione corretta &amp;egrave; un passaggio fondamentale nella tecnica Ditoliss, quindi ti consigliamo di procedere con calma e senza fretta.&lt;/p&gt;\r\n&lt;p&gt;&amp;nbsp;&lt;/p&gt;\r\n&lt;p&gt;Dividi i capelli in sezioni per facilitare il lavoro e, prendendo le singole ciocche che hai precedentemente trattato con il prodotto, inizia ad arrotolarle dalla radice fino alle punte.&lt;/p&gt;\r\n&lt;p&gt;&amp;nbsp;&lt;/p&gt;\r\n&lt;p&gt;Ripeti questo processo su tutta la chioma, prestando particolare attenzione alle ciocche vicine al viso, che dovrebbero essere pi&amp;ugrave; piccole per ottenere una maggiore definizione del riccio in quella zona.&lt;/p&gt;\r\n&lt;p&gt;&amp;nbsp;&lt;/p&gt;\r\n&lt;p&gt;&lt;strong&gt;Scrunch&lt;/strong&gt;&lt;/p&gt;\r\n&lt;p&gt;Dopo aver arrotolato tutte le ciocche sulla testa, &amp;egrave; il momento di passare allo scrunch.&lt;/p&gt;\r\n&lt;p&gt;&amp;nbsp;&lt;/p&gt;\r\n&lt;p&gt;Lo scrunch &amp;egrave; un passaggio fondamentale per valorizzare la bellezza dei capelli ricci. Letteralmente significa &quot;accartocciare&quot; e consiste nel prendere i capelli con le mani e strizzarli energicamente dal basso verso l\'alto.&lt;/p&gt;\r\n&lt;p&gt;&amp;nbsp;&lt;/p&gt;\r\n&lt;p&gt;Questa tecnica permette di potenziare l\'efficacia dei prodotti di styling utilizzati in precedenza per definire i ricci.&lt;/p&gt;\r\n&lt;p&gt;&amp;nbsp;&lt;/p&gt;\r\n&lt;p&gt;Puoi eseguire questo movimento pi&amp;ugrave; volte per accentuare ulteriormente la definizione durante l\'asciugatura e dare la forma desiderata ai capelli.&lt;/p&gt;\r\n&lt;p&gt;&amp;nbsp;&lt;/p&gt;\r\n&lt;p&gt;Successivamente, puoi procedere all\'asciugatura con il phon e il diffusore. Una volta che i capelli saranno asciutti, avranno una definizione ottimale e un bell\'effetto voluminoso!&lt;/p&gt;', 1, '2023-07-07 01:00:10'),
(23, 24, 8, 'Migliori 3 acconciature per capelli ricci e corti', '1688684610_images_6.png', '&lt;p&gt;Il taglio lungo per capelli ricci offre sicuramente una chioma scenografica, ed &amp;egrave; considerato un classico intramontabile e uno dei tagli pi&amp;ugrave; amati.&lt;/p&gt;\r\n&lt;p&gt;&amp;nbsp;&lt;/p&gt;\r\n&lt;p&gt;Tuttavia, esistono alcuni falsi miti che persistono riguardo al taglio lungo, come ad esempio l\'idea che sia pi&amp;ugrave; facile da gestire e che non richieda particolari cure.&lt;/p&gt;\r\n&lt;p&gt;&amp;nbsp;&lt;/p&gt;\r\n&lt;p&gt;Si tende a pensare che solo i capelli di lunghezza media o corta richiedano attenzioni specifiche, ma in realt&amp;agrave; anche i capelli lunghi, soprattutto se ricci, possono perdere volume e appiattirsi se non vengono trattati correttamente.&lt;/p&gt;\r\n&lt;p&gt;&amp;nbsp;&lt;/p&gt;\r\n&lt;p&gt;Inoltre, i capelli ricci molto lunghi tendono ad essere soggetti a crespo, difficolt&amp;agrave; nel districarli e sfibrature.&lt;/p&gt;\r\n&lt;p&gt;&amp;nbsp;&lt;/p&gt;\r\n&lt;p&gt;In queste situazioni, il taglio giusto pu&amp;ograve; fare la differenza, migliorando la tipica problematica delle lunghezze extra e permettendoti di avere una chioma leggera e vaporosa.&lt;/p&gt;\r\n&lt;p&gt;&amp;nbsp;&lt;/p&gt;\r\n&lt;p&gt;&lt;strong&gt;1. Acconciatura semiraccolta&lt;/strong&gt;&lt;/p&gt;\r\n&lt;p&gt;Probabilmente non pensavi che fosse possibile realizzare un semiraccolto con i capelli ricci, soprattutto se non sono particolarmente lunghi.&lt;/p&gt;\r\n&lt;p&gt;&amp;nbsp;&lt;/p&gt;\r\n&lt;p&gt;In realt&amp;agrave;, puoi ottenere uno styling elegante e versatile anche con questo tipo di capelli.&lt;/p&gt;\r\n&lt;p&gt;&amp;nbsp;&lt;/p&gt;\r\n&lt;p&gt;Per arricchire il tuo semiraccolto, puoi aggiungere un fermaglio o degli inserti gioiello che daranno un tocco chic ed elegante al tuo look.&lt;/p&gt;\r\n&lt;p&gt;&amp;nbsp;&lt;/p&gt;\r\n&lt;p&gt;Ma come fare per realizzare da sola un semiraccolto?&lt;/p&gt;\r\n&lt;p&gt;&amp;nbsp;&lt;/p&gt;\r\n&lt;p&gt;Se hai un long bob o una lunghezza simile a un caschetto, hai gi&amp;agrave; il taglio ideale per questa acconciatura.&lt;/p&gt;\r\n&lt;p&gt;&amp;nbsp;&lt;/p&gt;\r\n&lt;p&gt;Dopo aver applicato il prodotto di styling adatto al tuo tipo di riccio, vediamo come realizzare l\'acconciatura semiraccolta.&lt;/p&gt;\r\n&lt;p&gt;&amp;nbsp;&lt;/p&gt;\r\n&lt;p&gt;Innanzitutto, seleziona le ciocche pi&amp;ugrave; vicine alle tempie e sopra le orecchie, poi raccoglile sul retro della testa utilizzando un fermaglio, un elastico o delle forcine. In questo modo, otterrai una sorta di mezza coda.&lt;/p&gt;\r\n&lt;p&gt;&amp;nbsp;&lt;/p&gt;\r\n&lt;p&gt;Non tirare troppo le ciocche, perch&amp;eacute; i capelli mossi sono ancora pi&amp;ugrave; belli quando hanno un aspetto vagamente selvaggio e naturale.&lt;/p&gt;\r\n&lt;p&gt;&amp;nbsp;&lt;/p&gt;\r\n&lt;p&gt;Ti consigliamo di lasciare sempre un po\' di volume sulla sommit&amp;agrave; della testa, perch&amp;eacute; questo trucco dona slancio alla figura.&lt;/p&gt;\r\n&lt;p&gt;&amp;nbsp;&lt;/p&gt;\r\n&lt;p&gt;Se ti piace l\'effetto messy ma allo stesso tempo elegante, lascia uno o due ciuffetti di capelli fuori dalla mezza coda, facendo in modo che cadano vicino al viso.&lt;/p&gt;\r\n&lt;p&gt;&amp;nbsp;&lt;/p&gt;\r\n&lt;p&gt;Un altro metodo per realizzare un bel semiraccolto, se hai i capelli ricci, &amp;egrave; quello di utilizzare delle forcine. Procurati alcune forcine dello stesso colore dei tuoi capelli in modo che si possano confondere meglio.&lt;/p&gt;\r\n&lt;p&gt;&amp;nbsp;&lt;/p&gt;\r\n&lt;p&gt;Seleziona le ciocche sulla parte superiore della testa, portale verso il retro e fissale con le forcine, facendo attenzione a non tirarle troppo e lasciando un po\' di volume.&lt;/p&gt;\r\n&lt;p&gt;&amp;nbsp;&lt;/p&gt;\r\n&lt;p&gt;Puoi anche torcere le ciocche su se stesse e crearne dei &quot;torchon&quot;. Anche questi vanno fissati con le forcine.&lt;/p&gt;\r\n&lt;p&gt;&amp;nbsp;&lt;/p&gt;\r\n&lt;p&gt;Se l\'effetto finale sembra troppo vaporoso e disordinato, non preoccuparti: &amp;egrave; proprio il bello dei capelli mossi.&lt;/p&gt;\r\n&lt;p&gt;&amp;nbsp;&lt;/p&gt;\r\n&lt;p&gt;&lt;strong&gt;2. Trecce laterali&lt;/strong&gt;&lt;/p&gt;\r\n&lt;p&gt;Se non ti senti a tuo agio con il semiraccolto, non preoccuparti. Ci sono altre alternative per ottenere un\'acconciatura elegante e chic.&lt;/p&gt;\r\n&lt;p&gt;&amp;nbsp;&lt;/p&gt;\r\n&lt;p&gt;I capelli ricci, a differenza di quanto si pensi comunemente, si prestano molto bene alle romantiche trecce laterali.&lt;/p&gt;\r\n&lt;p&gt;&amp;nbsp;&lt;/p&gt;\r\n&lt;p&gt;Dividi i capelli in due parti, partendo dal retro della nuca, e crea due trecce laterali. Puoi fissarle sulla nuca con delle forcine o con fermagli appositi per mantenerle ben salde.&lt;/p&gt;\r\n&lt;p&gt;&amp;nbsp;&lt;/p&gt;\r\n&lt;p&gt;Scegli con cura gli accessori per le trecce laterali: strass o cristalli Swarovski per un look serale ed elegante, o del velluto se ami questo tessuto. Lascia spazio alla tua fantasia e ai tuoi gusti personali.&lt;/p&gt;\r\n&lt;p&gt;&amp;nbsp;&lt;/p&gt;\r\n&lt;p&gt;Se i tuoi capelli ricci sono corti ma arrivano almeno fino al mento, puoi provare anche la treccia alla francese. &amp;Egrave; quella treccia che parte dall\'alto della testa e raccoglie i capelli fino alla nuca, mantenendo i capelli ben disciplinati e fermi.&lt;/p&gt;\r\n&lt;p&gt;&amp;nbsp;&lt;/p&gt;\r\n&lt;p&gt;Un\'altra alternativa &amp;egrave; creare delle piccole treccine laterali, prendendo solo una ciocca per parte sui lati della testa. Puoi lasciare i capelli mossi e selvaggi, con le due piccole treccine laterali per un effetto vagamente boho-chic, se ami questo stile e preferisci un look meno elaborato ma comunque elegante.&lt;/p&gt;\r\n&lt;p&gt;&amp;nbsp;&lt;/p&gt;\r\n&lt;p&gt;3. Space buns per capelli corti&lt;/p&gt;\r\n&lt;p&gt;Se non ti piacciono le trecce o i semiraccolti e non sai quale pettinatura fare con i tuoi capelli ricci corti, abbiamo un\'alternativa per te, che ami look pi&amp;ugrave; creativi e informali.&lt;/p&gt;\r\n&lt;p&gt;&amp;nbsp;&lt;/p&gt;\r\n&lt;p&gt;Un\'acconciatura che puoi realizzare facilmente sono gli space buns.&lt;/p&gt;\r\n&lt;p&gt;&amp;nbsp;&lt;/p&gt;\r\n&lt;p&gt;Cosa sono? Sono quei due chignon laterali diventati famosi grazie ai manga e ai cartoni animati giapponesi (ricordi Sailor Moon?) e ora molto amati anche dalle celebrit&amp;agrave; come Chiara Ferragni e Cara Delevingne.&lt;/p&gt;\r\n&lt;p&gt;&amp;nbsp;&lt;/p&gt;\r\n&lt;p&gt;Non preoccuparti, puoi crearli facilmente anche se hai i capelli abbastanza corti.&lt;/p&gt;\r\n&lt;p&gt;&amp;nbsp;&lt;/p&gt;\r\n&lt;p&gt;Il primo passo per realizzare gli space buns &amp;egrave; dividere i capelli al centro in due parti uguali e raccoglierli in due code ai lati della testa.&lt;/p&gt;\r\n&lt;p&gt;&amp;nbsp;&lt;/p&gt;\r\n&lt;p&gt;Avvolgi su se stesse ciascuna delle due code laterali e fissale alla base, dove avrai posizionato un elastico. Fissa le due ciocche con un elastico o delle forcine e lascia qualche ciuffetto fuori, se ti piace l\'effetto messy.&lt;/p&gt;\r\n&lt;p&gt;&amp;nbsp;&lt;/p&gt;\r\n&lt;p&gt;Non dimenticare di utilizzare gli accessori giusti per la tua chioma, come spazzole specifiche per i capelli ricci che non li rovinino o spezzino.&lt;/p&gt;\r\n&lt;p&gt;&amp;nbsp;&lt;/p&gt;\r\n&lt;p&gt;Speriamo che questi consigli sulle migliori acconciature per i tuoi capelli ricci e corti ti abbiano dato ispirazione! Non ti resta che provarle e sfoggiarle al prossimo evento a cui parteciperai.&lt;/p&gt;', 1, '2023-07-07 01:01:07'),
(24, 24, 9, 'Come fare lo styling per capelli ricci?', '1688684818_images_9.png', '&lt;p&gt;Lo styling &amp;egrave; un elemento essenziale nella cura dei capelli ricci!&lt;/p&gt;\r\n&lt;p&gt;&amp;nbsp;&lt;/p&gt;\r\n&lt;p&gt;Per ottenere capelli voluminosi, corposi e con ricci ben definiti, &amp;egrave; importante concentrarsi non solo sulla pulizia e l\'idratazione, ma anche su tecniche specifiche in grado di valorizzare il movimento naturale dei capelli.&lt;/p&gt;\r\n&lt;p&gt;&amp;nbsp;&lt;/p&gt;\r\n&lt;p&gt;Quando si tratta di capelli ricci, ci sono diverse tecniche di styling che possono aiutarti a mantenere i tuoi capelli voluminosi e corposi.&lt;/p&gt;\r\n&lt;p&gt;&amp;nbsp;&lt;/p&gt;\r\n&lt;p&gt;In questo articolo, abbiamo raccolto alcune delle tecniche di styling pi&amp;ugrave; comuni per capelli ricci o mossi, insieme ai migliori prodotti di I Love Riccio per ottenere una piega come quella dei nostri Atelier.&lt;/p&gt;\r\n&lt;p&gt;&amp;nbsp;&lt;/p&gt;\r\n&lt;p&gt;Ricorda sempre di non pettinare i capelli una volta asciutti dopo lo styling per evitare di rompere i ricci. Invece, puoi massaggiarli delicatamente con le mani per rimuovere il film di prodotto che si forma attorno alle ciocche e che pu&amp;ograve; dare un aspetto bagnato. Questo effetto &amp;egrave; chiamato &quot;cast&quot; e pu&amp;ograve; essere eliminato semplicemente con uno scrunch asciutto molto delicato.&lt;/p&gt;\r\n&lt;p&gt;&amp;nbsp;&lt;/p&gt;\r\n&lt;p&gt;&lt;strong&gt;Scrunching&lt;/strong&gt;&lt;/p&gt;\r\n&lt;p&gt;Lo scrunching &amp;egrave; una tecnica di styling indispensabile per chi ha i capelli ricci e consente di ottenere una definizione perfetta.&lt;/p&gt;\r\n&lt;p&gt;&amp;nbsp;&lt;/p&gt;\r\n&lt;p&gt;Applica il tuo prodotto di styling preferito, a testa in gi&amp;ugrave; o in su, a seconda del tipo di capelli, e distribuiscilo uniformemente. Successivamente, esegui lo scrunching: raccogli i capelli dalle punte verso le radici, stringendoli tra le mani.&lt;/p&gt;\r\n&lt;p&gt;&amp;nbsp;&lt;/p&gt;\r\n&lt;p&gt;Per uno scrunching perfetto, &amp;egrave; importante ricordare che i capelli non devono essere strizzati o tamponati con l\'asciugamano prima di applicare il prodotto di styling. Devono essere ancora bagnati al punto che, quando inizi a stringere i capelli, puoi percepire il rumore dell\'acqua. Questo processo &amp;egrave; chiamato &quot;squish&quot;, come onomatopea del suono prodotto durante l\'azione.&lt;/p&gt;\r\n&lt;p&gt;&amp;nbsp;&lt;/p&gt;\r\n&lt;p&gt;Lo scrunching pu&amp;ograve; essere combinato con altre tecniche di styling di cui parleremo nei prossimi paragrafi.&lt;/p&gt;\r\n&lt;p&gt;&amp;nbsp;&lt;/p&gt;\r\n&lt;p&gt;&lt;strong&gt;Pray hands&lt;/strong&gt;&lt;/p&gt;\r\n&lt;p&gt;La tecnica &quot;pray hands&quot; per capelli ricci &amp;egrave; ideale per chi ha ricci molto stretti e desidera ottenere uno styling allungato.&lt;/p&gt;\r\n&lt;p&gt;&amp;nbsp;&lt;/p&gt;\r\n&lt;p&gt;Inizia con i capelli umidi e distribuisci uniformemente il prodotto di styling su tutta la chioma, concentrandoti sulle lunghezze e sulle punte.&lt;/p&gt;\r\n&lt;p&gt;&amp;nbsp;&lt;/p&gt;\r\n&lt;p&gt;Successivamente, suddividi i capelli in sezioni pi&amp;ugrave; gestibili e prendi una sezione alla volta. Unisci le mani in posizione di preghiera, con i palmi che si toccano. Poi, con le mani unite, scivola delicatamente verso il basso, facendo passare i capelli tra le mani mentre li spingi verso il basso. Ripeti questo movimento su tutta la testa. Assicurati di applicare una quantit&amp;agrave; sufficiente di prodotto durante il processo.&lt;/p&gt;\r\n&lt;p&gt;&amp;nbsp;&lt;/p&gt;\r\n&lt;p&gt;Dopo aver completato la tecnica delle mani in preghiera, evita di toccare i riccioli finch&amp;eacute; non sono completamente asciutti. Questo aiuter&amp;agrave; a mantenere la definizione e a evitare l\'effetto crespo.&lt;/p&gt;\r\n&lt;p&gt;&amp;nbsp;&lt;/p&gt;\r\n&lt;p&gt;Nella parte finale di questo testo, troverai anche i nostri consigli sui prodotti per lo styling. Sar&amp;agrave; necessario sperimentare per scoprire quale funziona meglio per i tuoi capelli e le tue esigenze personali.&lt;/p&gt;', 1, '2023-07-07 01:06:58'),
(25, 24, 10, 'Tagli capelli ricci corti per l’estate', '1688685112_images_5.png', '&lt;p&gt;&amp;nbsp;&lt;/p&gt;\r\n&lt;p&gt;&amp;nbsp;&lt;/p&gt;\r\n&lt;p&gt;Il taglio corto &amp;egrave; una scelta ideale per i capelli ricci durante l\'estate, poich&amp;eacute; offre freschezza e la libert&amp;agrave; di portare i capelli sciolti, anche nelle giornate pi&amp;ugrave; calde. Inoltre, &amp;egrave; estremamente pratico per i capelli che richiedono frequenti lavaggi, poich&amp;eacute; &amp;egrave; facile da asciugare e mettere in piega.&lt;/p&gt;\r\n&lt;p&gt;&amp;nbsp;&lt;/p&gt;\r\n&lt;p&gt;Spesso, quando si hanno i capelli ricci, si ha timore di tagliare anche solo un centimetro in pi&amp;ugrave;, temendo di compromettere l\'effetto dinamico della chioma e rischiare un antiestetico effetto crespo diffuso. Tuttavia, continuerai a leggere questo post per scoprire che esistono numerosi e vari tagli corti per capelli ricci e trovare quello ideale non &amp;egrave; un\'impresa impossibile, purch&amp;eacute; si parta dal tipo specifico di riccio da considerare.&lt;/p&gt;\r\n&lt;p&gt;&amp;nbsp;&lt;/p&gt;\r\n&lt;p&gt;Affidarsi a un parrucchiere specializzato nella cura e nell\'esaltazione dei capelli ricci &amp;egrave; il primo passo per sentirsi sicuri nella scelta di un taglio corto e nella sua manutenzione nel tempo. Oltre a considerare il tipo di capello, &amp;egrave; importante valutare la forma del viso e l\'effetto generale che si otterr&amp;agrave; una volta eliminata la lunghezza. Un parrucchiere specializzato sapr&amp;agrave; consigliarti l\'acconciatura che si adatta meglio al tuo viso e al tuo tipo di ricci, realizzando il miglior taglio per i tuoi capelli ricci, rispettando la tua chioma e il tuo stile.&lt;/p&gt;\r\n&lt;p&gt;&amp;nbsp;&lt;/p&gt;\r\n&lt;p&gt;&lt;strong&gt;Tagli asimmetrici&lt;/strong&gt;&lt;/p&gt;\r\n&lt;p&gt;I tagli asimmetrici per capelli ricci corti sono perfetti per chi ha i capelli mossi di tipo 2 o i capelli ricci di tipo 3. Questo tipo di taglio valorizza in modo superbo le onde naturali, il movimento e la struttura dei capelli ricci. Con ciuffi di lunghezza variabile, dallo stile spettinato, rappresentano la soluzione perfetta per chi ama uno stile giovane e spensierato. Ti consigliamo di optare per un taglio con ciuffi che alternano lunghezze corte e lunghe; in alternativa, puoi considerare anche un taglio con un ciuffo lungo da un lato e i capelli pi&amp;ugrave; corti dall\'altro.&lt;/p&gt;\r\n&lt;p&gt;&amp;nbsp;&lt;/p&gt;\r\n&lt;p&gt;Tieni presente che la scelta di rasare completamente una parte della testa richiede attenzione. Anche se si tratta di un taglio asimmetrico, questa tecnica comporta la perdita del riccio nella zona rasata ed &amp;egrave; pi&amp;ugrave; difficile tornare indietro una volta che si desidera cambiare look.&lt;/p&gt;\r\n&lt;p&gt;&amp;nbsp;&lt;/p&gt;\r\n&lt;p&gt;&lt;strong&gt;Pixie cut&lt;/strong&gt;&lt;/p&gt;\r\n&lt;p&gt;Il Pixie cut &amp;egrave; un taglio iconico che evoca lo charme dei favolosi anni \'60. Consiste nel tagliare i capelli molto corti, lasciando per&amp;ograve; una parte superiore con ricci liberi e in movimento. &amp;Egrave; una scelta perfetta anche per chi ha i capelli molto ricci, poich&amp;eacute;, se realizzato con maestria, si adatta magnificamente anche a quelli di tipo afro.&lt;/p&gt;\r\n&lt;p&gt;&amp;nbsp;&lt;/p&gt;\r\n&lt;p&gt;Vuoi un tocco in pi&amp;ugrave;? Gioca con riflessi colorati che mettano in evidenza le tue onde e il movimento!&lt;/p&gt;\r\n&lt;p&gt;&amp;nbsp;&lt;/p&gt;\r\n&lt;p&gt;&lt;strong&gt;Curly bob&lt;/strong&gt;&lt;/p&gt;\r\n&lt;p&gt;Il Curly bob, un taglio elegante che richiama lo stile degli anni \'50, ti permette di mantenere una certa lunghezza anche sui capelli corti. Questo classico taglio scalato &amp;egrave; molto apprezzato perch&amp;eacute; mantiene una media lunghezza che consente di acconciare, raccogliere o legare i capelli quando necessario. Arriva circa alle spalle o leggermente pi&amp;ugrave; corto e offre ciuffi leggermente pi&amp;ugrave; lunghi ai lati, aumentando il volume alla radice. &amp;Egrave; l\'ideale se ami lo stile retr&amp;ograve; degli anni \'50, poich&amp;eacute; si adatta perfettamente alla moda e all\'estetica di quel periodo.&lt;/p&gt;\r\n&lt;p&gt;&amp;nbsp;&lt;/p&gt;\r\n&lt;p&gt;In questo stile, &amp;egrave; importante ricordare che i capelli ricci hanno una notevole differenza di lunghezza tra asciutti e bagnati. Il nostro metodo di taglio brevettato X-CURL&amp;reg;, ideato da Fulvio Tirrico, &amp;egrave; perfetto per evitare spiacevoli sorprese. Come abbiamo gi&amp;agrave; menzionato, &amp;egrave; l\'unico taglio eseguito su capelli asciutti che consente un controllo completo della lunghezza e del volume dei tuoi capelli ricci. La tecnica X-CURL&amp;reg; permette al tuo esperto di capelli ricci di ottenere una graduale scalatura, mantenendo una lunghezza non eccessivamente corta nella parte posteriore. Ci&amp;ograve; ti consentir&amp;agrave; di raccogliere la parte anteriore dei capelli con l\'uso di forcine e nastri, regalandoti acconciature davvero originali.&lt;/p&gt;\r\n&lt;p&gt;&amp;nbsp;&lt;/p&gt;', 1, '2023-07-07 01:11:52'),
(28, 24, 11, 'Come dare volume alla radice dei capelli', '1688685797_images_8.png', '&lt;p&gt;Se hai i capelli ricci, sicuramente sai quanto possa essere sfidante ottenere volume fin dalle radici. Ma non preoccuparti, ci sono alcuni trucchi semplici che possono aiutarti a dare pi&amp;ugrave; volume alla radice dei tuoi capelli ricci.&lt;/p&gt;\r\n&lt;p&gt;&amp;nbsp;&lt;/p&gt;\r\n&lt;p&gt;La prima cosa da fare &amp;egrave; mantenere il cuoio capelluto e i capelli sani, utilizzando un buon shampoo adatto alle tue caratteristiche. Scegli un prodotto appositamente formulato per i capelli ricci, che possa migliorare e preservare nel tempo il volume naturale della tua chioma, partendo dalla radice dei capelli.&lt;/p&gt;\r\n&lt;p&gt;&amp;nbsp;&lt;/p&gt;\r\n&lt;p&gt;I capelli ricci hanno bisogno di idratazione per ottenere il giusto volume ed elasticit&amp;agrave;, quindi &amp;egrave; importante utilizzare una combinazione di prodotti adatti. Prova uno shampoo volumizzante, una maschera ristrutturante per le lunghezze e una mousse corposa per lo styling dei capelli.&lt;/p&gt;\r\n&lt;p&gt;&amp;nbsp;&lt;/p&gt;\r\n&lt;p&gt;&lt;strong&gt;Ecco alcuni consigli utili:&lt;/strong&gt;&lt;/p&gt;\r\n&lt;p&gt;1. Durante il lavaggio, massaggia delicatamente il cuoio capelluto con i polpastrelli. Passa le dita tra i ricci, toccando leggermente la radice dei capelli e applica una leggera pressione rotatoria sulla testa.&lt;/p&gt;\r\n&lt;p&gt;2. Dopo un abbondante risciacquo, applica una maschera idratante proteica sulla lunghezza dei capelli e lasciala in posa da 5 a 15 minuti.&lt;/p&gt;\r\n&lt;p&gt;3. Risciacqua bene la maschera, evita di strizzare i capelli e applica abbondantemente la mousse per lo styling. Usando le mani, distribuisci il prodotto uniformemente, effettua lo scrunch e strizza i capelli dalle radici verso la cute.&lt;/p&gt;\r\n&lt;p&gt;4. Infine, utilizza un panno in microfibra per fare un micro plopping, simile allo scrunch.&lt;/p&gt;\r\n&lt;p&gt;&amp;nbsp;&lt;/p&gt;\r\n&lt;p&gt;&lt;strong&gt;Asciugatura per un effetto voluminoso:&lt;/strong&gt;&lt;/p&gt;\r\n&lt;p&gt;Dopo aver lavato i capelli ricci, passa all\'asciugatura. Se desideri ottenere un effetto voluminoso, segui questi consigli.&lt;/p&gt;\r\n&lt;p&gt;&amp;nbsp;&lt;/p&gt;\r\n&lt;p&gt;Inizia l\'asciugatura utilizzando un phon con diffusore a temperatura moderata e evita di toccare i capelli finch&amp;eacute; non saranno completamente asciutti.&lt;/p&gt;\r\n&lt;p&gt;&amp;nbsp;&lt;/p&gt;\r\n&lt;p&gt;Per dare pi&amp;ugrave; volume alle radici, asciuga i capelli a testa in gi&amp;ugrave;, indirizzando il calore tiepido del phon verso il cuoio capelluto. In questo modo, le radici si asciugheranno pi&amp;ugrave; rapidamente e saranno alleggerite dall\'acqua. Successivamente, passa alle lunghezze.&lt;/p&gt;\r\n&lt;p&gt;&amp;nbsp;&lt;/p&gt;\r\n&lt;p&gt;Continua l\'asciugatura con la testa dritta, muovendo la chioma da destra a sinistra.&lt;/p&gt;\r\n&lt;p&gt;&amp;nbsp;&lt;/p&gt;\r\n&lt;p&gt;Seguendo queste semplici indicazioni e utilizzando i prodotti giusti, potrai ottenere risultati meravigliosi, combinando idratazione ed extra volume.&lt;/p&gt;', 1, '2023-07-07 01:23:17');

-- --------------------------------------------------------

--
-- Struttura della tabella `topics`
--

CREATE TABLE `topics` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dump dei dati per la tabella `topics`
--

INSERT INTO `topics` (`id`, `name`) VALUES
(8, 'Acconciature'),
(9, 'Cura e rimedi per capelli ricci'),
(10, 'Tagli ricci'),
(11, 'Tecniche');

-- --------------------------------------------------------

--
-- Struttura della tabella `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `admin` tinyint(4) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dump dei dati per la tabella `users`
--

INSERT INTO `users` (`id`, `admin`, `username`, `email`, `password`, `create_at`) VALUES
(24, 1, 'lara', 'lara@gmail.com', '$2y$10$iYaXkUYrLAvFf2rDxtrelOiHp.n53U09Yow.wuMndfX7hKdIXa5QS', '2023-07-02 09:22:48'),
(34, 0, 'mirko', 'mirko@gmail.com', '$2y$10$oj3ab0eQpepW2f6FpZLtEuB3820qRajLOwdFlcG/XECNLauzwphsq', '2023-07-06 21:33:57'),
(35, 0, 'alice', 'alice@gmail.com', '$2y$10$dWKntoY4SGeRroaLchbIDu.NQlibgFrl7HmE0X4dJxucCVamFpkPO', '2023-07-06 22:47:31'),
(36, 1, 'erica', 'erica1@libero.it', '$2y$10$YkpCG5yx8bNKm.a2BBzNFulK5fFtFVdeKvnRLieGhEqqxBdGaLx5G', '2023-07-07 11:05:53');

-- --------------------------------------------------------

--
-- Struttura della tabella `valutazioni`
--

CREATE TABLE `valutazioni` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `valutazione` int(11) NOT NULL,
  `commento` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `valutazioni`
--

INSERT INTO `valutazioni` (`id`, `name`, `valutazione`, `commento`) VALUES
(57, 'mirko', 3, 'Wow !!'),
(58, 'alice', 2, 'bellissimo ...'),
(60, 'erica', 1, 'Articoli utilissimi !!!');

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `topic_id` (`topic_id`);

--
-- Indici per le tabelle `topics`
--
ALTER TABLE `topics`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nome` (`name`);

--
-- Indici per le tabelle `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indici per le tabelle `valutazioni`
--
ALTER TABLE `valutazioni`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT per la tabella `topics`
--
ALTER TABLE `topics`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT per la tabella `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT per la tabella `valutazioni`
--
ALTER TABLE `valutazioni`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- Limiti per le tabelle scaricate
--

--
-- Limiti per la tabella `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`topic_id`) REFERENCES `topics` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
