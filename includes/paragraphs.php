<?php 
echo '<p>'; 

if (
	is_category('quadri')
	|| is_tag('fiori')
	|| is_tag('paesaggi')
	|| is_tag('animali')
	|| is_tag('ritratti')
) {
	echo 'Realizzo dipinti su commissione di qualsiasi misura: paesaggi, riproduzioni, ritratti di persone, ritratti di animali, soggetti fantasia. Ogni dipinto viene realizzato individualmente per clienti nella provincia di Bergamo, Milano, Brescia e in tutta la Lombardia.';
}	

elseif (
	is_category('navigator')
) {
	//echo "'NEPTUNE' is a line of painting dedicated to the navigation and the marine environment. Each painting is completely handmade and unique, inspired by the rich maritime lore of coastal America.";
	//echo "'NEPTUNE' è una collezione di dipinti dedicata alla navigazione ed all'ambiente marittimo. Ogni dipinto è completamente fatto a mano ed unico, ispirato dalla ricca tradizione marittima americana.";
	echo "<a href='http://www.alexlorenzi.com/corsi-di-aerografo/mostra-desenzano-luglio2017-2/' rel='attachment wp-att-2834'><img style='float:right !important' src='http://www.alexlorenzi.com/wp/wp-content/uploads/2017/07/Mostra-Desenzano-luglio2017-1-e1500461120230-164x300.jpg' alt='' width='164' height='300' class='alignright size-medium wp-image-2834' /></a>";
    echo "<h2>Esposizione delle opere di ALEX LORENZI <a href='/category/navigator/'>'Collezione NAVIGATOR'</a> dal 21 luglio al 8 settembre<br><br>";
    echo "<span style='font-size:smaller'>Vernissage il 21 luglio dalle 19.00 alle 22.00 presso la galleria d'arte QUEEN GALLERY di Desenzano.</span>";
    echo "</h2><p style='clear:both'></p>";
    
	echo "<p>Il mare ed i suoi colori sono una mia grande passione. Osservare la linea dell’orizzonte che separa il mare dal cielo, sentire il suo profumo e’ per me, come credo per molti, un’ispirazione che inonda di pace e gioia tutto il mio essere. Storie di navigatori e pirati hanno sempre acceso la mia fantasia ed il mio spirito avventuriero.</p>";

   echo "<p>Pur essendo nato ai piedi delle montagne, la mia natura mi ha sempre spinto verso l’acqua. Proprio per questo ho deciso di creare una serie limitata di dipinti unici chiamata NAVIGATOR (dal latino), per cercare di richiamare lo spirito del mare e della navigazione.
   Con colori acrilici e per mezzo di pennelli ed aerografo, realizzo queste tele di lino/cotone che vengono poi incorniciate con corde e pannelli rivestiti di yuta e talvolta con reti e conchiglie. Ogni dipinto e’ unico, numerato e non viene ripetuto. Sul retro e’ presente un certificato di originalita’ con la mia firma.</p>";
   echo "<p>L’effetto talvolta fotografico e’ realizzato in particolar modo con l’aerografo che e’ una sorta di mini pistola a spruzzo. Questo attrezzo e’ ormai nel mio repertorio pittorico da quasi trent’anni ed e’ per questo che riesco a creare sfumature e tridimensionalita’ quasi irripetibili a pennello. Tutto e’ rigorosamente realizzato a mano e con tanta passione!</p>";
   echo "<p><b>Lavoro principalmente su commissione. Se desiderate realizzare un dipinto personalizzato, non esitate a contattarmi.</b> Saro’ ben lieto di mettere a disposizione la mia creativita’ ed esperienza.</p>";
   echo "<p>Nell’arco dei prossimi mesi ci saranno nuove opere da visionare. Rivisitate il mio sito. Vi aspetto!</p>";
}	

elseif (
	is_tag('camere-albergo')
	|| is_tag('decorazioni-business')
	|| is_tag('riproduzioni')
) {
	echo 'Eseguo dipinti murali effetto trompe l\'oeil, affreschi, murales e decorazioni artistiche su pareti di interni ed esterni per abitazioni, negozi, ristoranti e camere d\'albergo nella provincia di Bergamo, Milano e Brescia.';
}	

elseif (
	is_category('murales') 
) {
	echo "Eseguo murales applicati direttamente su muro di interni ed esterni con colori a base d'acqua, resistenti alla luce ed alle intemperie. Le decorazioni vengono protette con un trasparente opaco finale che rende lavabili le superfici. Questa tecnica e' adatta a personalizzare ed abbellire ambienti di ogni dimensione. Lavoro in tutta la Lombardia e specialmente a Bergamo, Milano e Brescia.";
}

elseif (
	is_category('trompe-loeil') )
{
	echo "Realizzo Trompe l'Oeil su pareti per interni di abitazione private e business.  Questa tecnica e' caratterizzata da forti prospettive che ingannano l?occhio ed e' impiegata con grande successo nell'aprire degli spazi ristretti. Lavoro in tutta la Lombardia e specialmente a Bergamo, Milano e Brescia.";
}

elseif (
	is_category('affreschi') 
) {
	echo "Realizzo affreschi e imitazioni di strappo d'affresco, su tele di lino trattate con \"Fratazzato Venezia\". Al termine del lavoro l'intera superficie viene trattata con gomma lacca per proteggere l'opera ma sopratutto per darle un aspetto antico. Possono essere applicate direttamente su parete o intelaiate come un classico quadro.";
}	

elseif (
	is_category('su-pareti')
) {
	echo "Eseguo decorazioni ornamentali in stile classico e moderno. Stemmi araldici, *grisaille, finti pannelli e decorazioni su porte lisce, dipinti con tecnica cama&iuml;eu (dipinti monocromatici, realizzati con tinta madre che vanno dal chiaro allo scuro), patine decorative e imitazione pietre e marmi, patine a cera, patine antiquarie.";	
}

elseif (
	is_category('su-mobili')
) {
	echo 'Realizzo decorazioni a mano in vari stili pittorici, su mobili nella provincia di Bergamo, Milano e Brescia.';
}

elseif (
	is_category('caschi') 
	|| is_category('moto') 
	|| is_tag('harley-davidson')
) {
	echo 'Realizzo aerografie e verniciature kustom su Harley Davidson, moto, auto e caschi nella provincia di Bergamo, Milano e Brescia. Eseguo verniciature personalizzate e decorazioni ( foglia d\'oro, metal flakes, candies, perlati e metalizzati, pinstriping ), su serbatoi, parafanghi ed ogni tipo di carrozzeria.';
}

elseif (
	is_category('giubbotti-tshirts')
) {
	echo 'Effettuo aerografie kustom su giubbotti, T-shirts, tessuti e pelle nella provincia di Bergamo, Milano e Brescia. Ogni esecuzione e\' personalizzata e prodotta velocemente.';
}

?>
