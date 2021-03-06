<!DOCTYPE HTML>

<html>
	<head>
		<title>UniPi Travel (Πληροφορίες)</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="myStyles.css">
		<link rel="icon" href="icon.png">
	</head>
	
	<body>
		<header>
			<img src="icon.png" alt="logo" class="logo" usemap="#Map" /><br>
			<map name="Map" id="Map">
				<area alt="logo" href="homepage.php" shape="rect" coords="8,16,92,84" />
			</map>
			<nav>
				<ul>
					<li><a href="homepage.php">Αρχική</a></li>
					<li><a href="contact.php">Επικοινωνία</a></li>
					<li><a href="book.php">Κράτηση</a></li>
					<li><a href="info.php">Πληροφορίες</a></li>
					<?php
						session_start();
						
						if(isset($_SESSION['username'])){
							echo "<li class=\"loggedin\">Χρήστης: ".$_SESSION['username']."<br><a href=\"logout.php\" class=\"logout\">Αποσύνδεση</a></li>";
						}
						else{
							echo "<li class=\"account\"><a href=\"login/login.html\" id=\"login\">Είσοδος</a></li><li class=\"account\"><a href=\"register/register.html\" id=\"register\">Εγγραφή</a></li>";
						}
						
					?>
				</ul>
			</nav>
		</header>
		<h1 id="welcome">Πληροφορίες για εκδρομές εντός Ευρώπης!</h1>
		<br><h2>Βαρκελώνη</h2>
		<table border="1px solid black" class="infoTable">
			<tr><th>Χώρα</th><th>Πληθυσμός</th><th>Τιμή Εισητηρίου</th></tr>
			<tr><td>Ισπανία</td><td>1.620.809</td><td>100€</td></tr>
		</table>
		<br><img src="images/Barcelona.jpg" class="infoImages"><p class="infoParagraphs">Η Βαρκελώνη (στα καταλανικά και τα ισπανικά Barcelona, - Μπαρσελόνα και Μπαρθελόνα αντίστοιχα) είναι πόλη της Ισπανίας, πρωτεύουσα της Αυτοδιοικούμενης Περιφέρειας της Καταλωνίας. Σήμερα αποτελεί τη δεύτερη σημαντικότερη πόλη του ισπανικού κράτους όσον αφορά τον πληθυσμό και την οικονομία μετά την Μαδρίτη. Η μητροπολιτική της περιοχή έχει έναν πληθυσμό της τάξης των 5 εκατομμυρίων κατοίκων, από τα οποία τα 4,5 εκατομμύρια ζούνε ειδικότερα στους 36 δήμους της αστικής της περιοχής, κάτι που την κάνει τη μεγαλύτερη μητρόπολη του ευρύτερου μεσογειακού χώρου.Σήμερα η Βαρκελώνη είναι μια από τις πιο επιθυμητές πόλεις για τουρισμό του Σαββατοκύριακου στην Ευρώπη και διαθέτει καλή ποιότητα ζωής. Πλούσια πολιτιστική ζωή (παιδιά της πόλης είναι ο Σαλβαδόρ Νταλί, ο Χουάν Μιρό, ο Αντόνι Γκαουντί και για ένα διάστημα και ο Πάμπλο Πικάσσο), μεσογειακό κλίμα, πολύ καλές ευκαιρίες διασκέδασης (πολλά μπαρ, καλά κλαμπ) και ψυχαγωγίας (μερικά πολύ καλά μουσεία όπως το MNAC και MACBA) και καλές θέσεις εργασίας. Το 1992, η καταλανική πρωτεύουσα διοργάνωσε την 25η θερινή Ολυμπιάδα.</p>
		<p>Μέρη που αξίζει να επισκεφθείτε:</p>
		<ul class="infoList">
			<li><a href="https://el.wikipedia.org/wiki/%CE%A3%CE%B1%CE%B3%CF%81%CE%AC%CE%B4%CE%B1_%CE%A6%CE%B1%CE%BC%CE%AF%CE%BB%CE%B9%CE%B1" target="_blank">Σαγράδα Φαμίλια</a></li>
			<li><a href="https://el.wikipedia.org/wiki/%CE%A0%CE%AC%CF%81%CE%BA%CE%BF_%CE%93%CE%BA%CE%BF%CF%85%CE%AD%CE%BB" target="_blank">Πάρκο Γκουέλ</a></li>
			<li><a href="https://el.wikipedia.org/wiki/%CE%9A%CE%AC%CE%B6%CE%B1_%CE%9C%CE%B9%CE%BB%CE%AC" target="_blank">Κάζα Μιλά</a></li>
			<li><a href="https://el.wikipedia.org/wiki/%CE%9A%CE%AC%CF%83%CF%84%CF%81%CE%BF_%CF%84%CE%BF%CF%85_%CE%9C%CE%BF%CE%BD%CF%84%CE%B6%CE%BF%CF%85%CE%AF%CE%BA" target="_blank">Κάστρο του Μοντζουίκ</a></li>
		</ul>
		<hr>
		<br><h2>Βερολίνο</h2>
		<table border="1px solid black" class="infoTable">
			<tr><th>Χώρα</th><th>Πληθυσμός</th><th>Τιμή Εισητηρίου</th></tr>
			<tr><td>Γερμανία</td><td>3.671.000</td><td>30€</td></tr>
		</table>
		<br><img src="images/Berlin.jpg" class="infoImages"><p class="infoParagraphs">Το Βερολίνο (γερμανικά: Berlin) είναι η πρωτεύουσα και η μεγαλύτερη σε έκταση και πληθυσμό πόλη της Γερμανίας. Ως προς τον πληθυσμό είναι η δεύτερη μεγαλύτερη πόλη της Ευρωπαϊκής Ένωσης. Επίσης η πόλη του Βερολίνου αποτελεί και κρατίδιο της γερμανικής ομοσπονδίας.Στην ιστορία του το Βερολίνο ήταν πρωτεύουσα διάφορων κρατών, όπως της Μαρκιωνίας του Βρανδεμβούργου, του Βασιλείου της Πρωσίας, της Γερμανικής Αυτοκρατορίας, του Γ΄Ράιχ και της Λαϊκής Δημοκρατίας της Γερμανίας. Στις 3 Οκτωβρίου 1990 έγινε με την επανένωση των δυο γερμανικών κρατών πρωτεύουσα της ενοποιημένης Ομοσπονδιακής Δημοκρατίας της Γερμανίας και αντικατέστησε έτσι την μέχρι τότε πρωτεύουσα, τη Βόννη. Το γερμανικό κοινοβούλιο, που μέχρι τότε εξακολουθούσε να εδρεύει στη Βόννη, αποφάσισε το 1991 να μεταφερθεί στο Βερολίνο. Η μετακίνηση της βουλής από τη Βόννη στο Ράιχσταγκ του Βερολίνου πραγματοποιήθηκε το 1999.Η πόλη αποτελεί σημαντικό κόμβο συγκοινωνιών όπως και οικονομικό και πολιτισμικό κέντρο με πολυάριθμα πανεπιστήμια, ερευνητικά ιδρύματα, θέατρα, μουσεία και αρχιτεκτονικά μνημεία.</p>
		<p>Μέρη που αξίζει να επισκεφθείτε:</p>
		<ul class="infoList">
			<li><a href="https://el.wikipedia.org/wiki/%CE%A0%CF%8D%CE%BB%CE%B7_%CF%84%CE%BF%CF%85_%CE%92%CF%81%CE%B1%CE%BD%CE%B4%CE%B5%CE%BC%CE%B2%CE%BF%CF%8D%CF%81%CE%B3%CE%BF%CF%85" target="_blank">Πύλη του Βρανδεμβούργου</a></li>
			<li><a href="https://el.wikipedia.org/wiki/%CE%9A%CF%84%CE%AE%CF%81%CE%B9%CE%BF_%CF%84%CE%BF%CF%85_%CE%A1%CE%AC%CE%B9%CF%87%CF%83%CF%84%CE%B1%CE%B3%CE%BA" target="_blank">Κτήριο του Ράιχσταγκ</a></li>
			<li><a href="https://en.wikipedia.org/wiki/Alexanderplatz" target="_blank">Alexanderplatz</a></li>
			<li><a href="https://el.wikipedia.org/wiki/%CE%A4%CE%B5%CE%AF%CF%87%CE%BF%CF%82_%CF%84%CE%BF%CF%85_%CE%92%CE%B5%CF%81%CE%BF%CE%BB%CE%AF%CE%BD%CE%BF%CF%85" target="_blank">Τείχος του Βερολίνου</a></li>
		</ul>
		<hr>
		<br><h2>Λονδίνο</h2>
		<table border="1px solid black" class="infoTable">
			<tr><th>Χώρα</th><th>Πληθυσμός</th><th>Τιμή Εισητηρίου</th></tr>
			<tr><td>Αγγλία</td><td>8.787.892</td><td>50€</td></tr>
		</table>
		<br><img src="images/London.jpg" class="infoImages"><p class="infoParagraphs">Το Λονδίνο (αγγλικά: London) είναι η πρωτεύουσα του Ηνωμένου Βασιλείου, όπως και της Αγγλίας, στα νοτιοανατολικά της οποίας βρίσκεται. Εκτείνεται εκατέρωθεν του ποταμού Τάμεση, όπου βρίσκεται και το λιμάνι του, ένα από τα μεγαλύτερα στη χώρα. Επί δύο χιλιετίες ήταν σημαντικός οικισμός. Η ιστορία του ανάγει την ίδρυσή του στους Ρωμαίους. Από την ίδρυσή του το Λονδίνο παραμένει πρωταγωνιστής σε σημαντικά κινήματα και φαινόμενα της παγκόσμιας ιστορίας, όπως η Βιομηχανική Επανάσταση και η Αναγέννηση της Γοτθικής Αρχιτεκτονικής. Ο πυρήνας της πόλης είναι η παλαιά πόλη του Λονδίνου, από την οποία σώζονται ακόμα περιορισμένα μεσαιωνικά κατάλοιπα. Τουλάχιστον από το 19ο αιώνα το όνομα "Λονδίνο" αναφέρεται σε ολόκληρη τη μητρόπολη γύρω από αυτό. Το μητροπολιτικό Λονδίνο περιλαμβάνει, πέρα από το Σίτι (City, κέντρο της πόλης), 32 διαμερίσματα, τα οποία αρχικά ήταν αυθύπαρκτες πόλεις, τελικά όμως συνενώθηκαν εξαιτίας της πολεοδομικής επέκτασης της βρετανικής πρωτεύουσας και ενσωματώθηκαν σε αυτήν. H πόλη έχει εκλεγμένο δήμαρχο και Συνέλευση.Αποτελεί μεγάλο επιχειρηματικό, χρηματοοικονομικό και πολιτιστικό κέντρο. Εκεί εδρεύουν πλήθος εταιρειών, οργανισμών, καθώς και διαφόρων άλλων παγκόσμιων Ιδρυμάτων. Η επίδραση του Λονδίνου στην πολιτική, στην εκπαίδευση, στα ΜΜΕ, στη μόδα και στις τέχνες, συνετέλεσαν στο να θεωρείται ως σημαντική παγκόσμια πόλη. Στο Λονδίνο βρίσκονται τέσσερα Μνημεία Παγκόσμιας Πολιτιστικής Κληρονομιάς: Το Ανάκτορο, το Αββαείο και ο ναός της Αγίας Μαργαρίτας στο Ουεστμίνστερ, ο Πύργος του Λονδίνου, ο ιστορικός οικισμός του Γκρίνουιτς και οι Βασιλικοί Βοτανικοί Κήποι του Κιου. Η πόλη είναι από τους πλέον δημοφιλείς τουριστικούς προορισμούς στον κόσμο και εξαιτίας της οικονομικής ανάπτυξης η δημοφιλία της αυξήθηκε τα τελευταία χρόνια.Ο πληθυσμός αυξάνεται ακόμα πιο πολύ αν προσμετρηθούν μερικά εκατομμύρια κάτοικοι της ευρύτερης μητροπολιτικής περιοχής. Η πολυμορφικότητα του πληθυσμού είναι εξαιρετικά μεγάλη, καθώς περιλαμβάνει ανθρώπους από όλες τις φυλές του κόσμου και συνεπώς τον καθιστά μία από τις μεγαλύτερες πολυπολιτισμικές κοινότητες παγκοσμίως. Στο Λονδίνο κατοικούν μερικοί από τους πιο πλούσιους ανθρώπους στον κόσμο. Περισσότερες από 300 γλώσσες ομιλούνται εντός της πόλης. Με βάση στοιχεία του 2006, ο επίσημος πληθυσμός του είναι 7.512.400 κάτοικοι εντός ορίων του Μείζονος Λονδίνου και αποτελεί το μεγαλύτερο σε πληθυσμό Δήμο της Ευρωπαϊκής Ένωσης. Το 2001 η αστική περιοχή του Μείζονος Λονδίνου είχε πληθυσμό 8.278.251 κατοίκους, ενώ η μητροπολιτική περιοχή υπολογίζεται ότι αριθμεί 13.708.000 κατοίκους. Το Λονδίνο διοργάνωσε τους Ολυμπιακούς Αγώνες του 2012.</p>
		<p>Μέρη που αξίζει να επισκεφθείτε:</p>
		<ul class="infoList">
			<li><a href="https://el.wikipedia.org/wiki/%CE%9C%CF%80%CE%B9%CE%B3%CE%BA_%CE%9C%CF%80%CE%B5%CE%BD" target="_blank">Μπιγκ Μπεν</a></li>
			<li><a href="https://el.wikipedia.org/wiki/%CE%A0%CF%8D%CF%81%CE%B3%CE%BF%CF%82_%CF%84%CE%BF%CF%85_%CE%9B%CE%BF%CE%BD%CE%B4%CE%AF%CE%BD%CE%BF%CF%85" target="_blank">Πύργος του Λονδίνου</a></li>
			<li><a href="https://el.wikipedia.org/wiki/%CE%91%CE%BD%CE%AC%CE%BA%CF%84%CE%BF%CF%81%CE%B1_%CF%84%CE%BF%CF%85_%CE%9C%CF%80%CE%AC%CE%BA%CE%B9%CE%B3%CF%87%CE%B1%CE%BC" target="_blank">Ανάκτορα του Μπάκιγχαμ</a></li>
			<li><a href="https://en.wikipedia.org/wiki/Tower_Bridge" target="_blank">Γέφυρα του Λονδίνου</a></li>
		</ul>
		<hr>
		<br><h2>Παρίσι</h2>
		<table border="1px solid black" class="infoTable">
			<tr><th>Χώρα</th><th>Πληθυσμός</th><th>Τιμή Εισητηρίου</th></tr>
			<tr><td>Γαλλία</td><td>2.229.621</td><td>80€</td></tr>
		</table>
		<br><img src="images/Paris.jpg" class="infoImages"><p class="infoParagraphs">Το Παρίσι (γαλλικά: Paris), γνωστό και ως η Πόλη του φωτός (Ville lumière), από τότε που εφοδιάστηκαν οι κύριες λεωφόροι του με φανούς γκαζιού το 1828, είναι η πρωτεύουσα της Γαλλίας και της περιφέρειας Ιλ ντε Φρανς και μία από τις ιστορικότερες πόλεις της Ευρώπης. Το Παρίσι περιλαμβάνει την πόλη του Παρισιού και τα περίχωρα και βρίσκεται σε ένα λεκανοπέδιο. Ο συνολικός πληθυσμός της μητροπολιτικής περιοχής ξεπερνά τα 13.000.000 και είναι έτσι μία από τις μεγαλύτερες πόλεις της Ευρώπης και του κόσμου. Επιπλέον είναι η πολιτιστική και οικονομική πρωτεύουσα της Γαλλίας, το σημαντικότερο κομβικό σημείο της και έδρα πολλών διεθνών οργανισμών, όπως της UNESCO.</p>
		<p>Μέρη που αξίζει να επισκεφθείτε:</p>
		<ul class="infoList">
			<li><a href="https://el.wikipedia.org/wiki/%CE%A0%CF%8D%CF%81%CE%B3%CE%BF%CF%82_%CF%84%CE%BF%CF%85_%CE%86%CE%B9%CF%86%CE%B5%CE%BB" target="_blank">Πύργος του Άιφελ</a></li>
			<li><a href="https://el.wikipedia.org/wiki/%CE%9C%CE%BF%CF%85%CF%83%CE%B5%CE%AF%CE%BF_%CF%84%CE%BF%CF%85_%CE%9B%CE%BF%CF%8D%CE%B2%CF%81%CE%BF%CF%85" target="_blank">Μουσείο του Λούβρου</a></li>
			<li><a href="https://el.wikipedia.org/wiki/%CE%A0%CE%B1%CE%BD%CE%B1%CE%B3%CE%AF%CE%B1_%CF%84%CF%89%CE%BD_%CE%A0%CE%B1%CF%81%CE%B9%CF%83%CE%AF%CF%89%CE%BD" target="_blank">Παναγία των Παρισίων</a></li>
			<li><a href="https://el.wikipedia.org/wiki/%CE%91%CF%88%CE%AF%CE%B4%CE%B1_%CF%84%CE%BF%CF%85_%CE%98%CF%81%CE%B9%CE%AC%CE%BC%CE%B2%CE%BF%CF%85" target="_blank">Αψίδα του Θριάμβου</a></li>
		</ul>
		<hr>
		<br><h2>Ρώμη</h2>
		<table border="1px solid black" class="infoTable">
			<tr><th>Χώρα</th><th>Πληθυσμός</th><th>Τιμή Εισητηρίου</th></tr>
			<tr><td>Ιταλία</td><td>2.705.603</td><td>30€</td></tr>
		</table>
		<br><img src="images/Rome.jpg" class="infoImages"><p class="infoParagraphs">Η Ρώμη (ιταλικά: Roma) είναι η πρωτεύουσα της Ιταλίας, πρωτεύουσα της περιφέρειας του Λάτιου, της ομώνυμης επαρχίας και μία από τις ιστορικότερες πόλεις της Ευρώπης. Είναι ο πολυπληθέστερος δήμος της Ιταλίας με 2.705.603 κατοίκους (2006). Η ευρύτερη μητροπολιτική περιοχή έχει πληθυσμό περίπου 3.700.000[1] κατοίκους καθιστώντας την τον μεγαλύτερο δήμο της Ιταλίας. Σε ευρωπαϊκό επίπεδο κατατάσσεται έκτη σε πληθυσμό μετά το Παρίσι, το Λονδίνο, το Βερολίνο, τη Μαδρίτη και την Αθήνα.Μέσα στα όρια της βρίσκεται το Βατικανό, ένα ξεχωριστό κρατίδιο που είναι η έδρα της Καθολικής Εκκλησίας και του Πάπα.Η Ρώμη είναι μια πόλη με σπουδαία ιστορία και αξιοσημείωτη προσφορά στην επιστήμη, τον πολιτισμό και τις τέχνες. Γι' αυτό το λόγο, καθώς και για τα πολυάριθμα και εξαιρετικής ομορφιάς μνημεία της και επειδή απο την αρχή της ίδρυσης της πολης, μεχρι σημερα παρέμεινε ως πρωτεύουσα, της έχει αποδοθεί η προσωνυμία «Η Αιώνια Πόλη». Το ιστορικό της κέντρο έχει καταχωρηθεί στη λίστα των Μνημείων Παγκόσμιας Κληρονομιάς της UNESCO από το 1980.</p>
		<p>Μέρη που αξίζει να επισκεφθείτε:</p>
		<ul class="infoList">			
			<li><a href="https://el.wikipedia.org/wiki/%CE%9A%CE%BF%CE%BB%CE%BF%CF%83%CF%83%CE%B1%CE%AF%CE%BF" target="_blank">Κολοσσαίο</a></li>
			<li><a href="https://el.wikipedia.org/wiki/%CE%A0%CE%AC%CE%BD%CE%B8%CE%B5%CE%BF%CE%BD_(%CE%A1%CF%8E%CE%BC%CE%B7)" target="_blank">Πάνθεον</a></li>
			<li><a href="https://el.wikipedia.org/wiki/%CE%A6%CE%BF%CE%BD%CF%84%CE%AC%CE%BD%CE%B1_%CE%BD%CF%84%CE%B9_%CE%A4%CF%81%CE%AD%CE%B2%CE%B9" target="_blank">Φοντάνα ντι Τρέβι</a></li>
			<li><a href="https://el.wikipedia.org/wiki/Καπέλα_Σιστίνα" target="_blank">Καπέλα Σιστίνα</a></li>
		</ul>
	</body>
</html>