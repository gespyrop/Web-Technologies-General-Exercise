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
		<h1 id="welcome">Πληροφορίες για εκδρομές εκτός Ευρώπης</h1>
		<br><h2>Νέα Υόρκη</h2>
		<table border="1px solid black" class="infoTable">
			<tr><th>Χώρα</th><th>Πληθυσμός</th><th>Τιμή Εισητηρίου</th></tr>
			<tr><td>ΗΠΑ</td><td>8.538.000</td><td>340€</td></tr>
		</table>
		<br><img src="images/NewYork.jpg" class="infoImages"><p class="infoParagraphs">Η Νέα Υόρκη (αγγλικά: New York City) που συχνά αποκαλείται και η Πόλη της Νέας Υόρκης- είναι η πιο πυκνοκατοικημένη πόλη των Ηνωμένων Πολιτείων και ένας από τους πιο πυκνοκατοικημένους αστικούς οικισμούς στον κόσμο.Μία ισχυρή πόλη που ασκεί σημαντική επίδραση στο εμπόριο, την οικονομία, τα μέσα ενημέρωσης, την τέχνη, τη μόδα, την έρευνα, την τεχνολογία, την εκπαίδευση και την ψυχαγωγία. Αποτελεί ένα σημαντικό κέντρο για τη διεθνή διπλωματία και έχει περιγραφεί ως η πολιτιστική και οικονομική πρωτεύουσα του κόσμου.Το σύγχρονο όνομά της το έλαβε προς τιμήν του τότε δούκα της ιστορικής πόλης της Αγγλίας, της Υόρκης.Βρίσκεται σε έναν από τους μεγαλύτερους φυσικούς λιμένες του κόσμου. Αποτελείται από πέντε δήμους, καθένας από τους οποίους είναι μια κομητεία της Νέας Υόρκης Οι πέντε δήμοι -Μπρούκλιν, Κουίνς, Μανχάταν, Μπρονξ και Στάτεν Άιλαντ- ενοποιήθηκαν σε μία ενιαία πόλη το 1898.Με μια απογραφή που πραγματοποιήθηκε το 2013 εκτιμάται ότι ο πληθυσμός της φτάνει τα 8.405.837, κατανεμημένοι σε μια έκταση μόλις 305 τετραγωνικών μιλίων / 780 τετραγωνικών χιλιομέτρων. Ομιλούνται πάνω από 800 γλώσσες, κανοντάς την, την πιο ποικιλόμορφη -γλωσσικά- πόλη του κόσμου.Πολλές συνοικίες και μνημεία στην πόλη της Νέας Υόρκης έχουν γίνει γνωστά σε περίπου 55 εκατομμύρια επισκέπτες που δέχεται ετησίως. Αρκετές πηγές την έχουν κατατάξει ως την πιο φωτογραφημένη πόλη στον κόσμο. Η Πλατεία Τάιμς, που έχει ονομαστεί ως το "Σταυροδρόμι του Κόσμου", είναι κομβικό σημείο στην καρδιά του Μανχάταν που οδηγεί στον δρόμο του Μπρόντγουεϊ, ενώ θεωρείται μια από τις πιο πολυσύχναστες διασταυρώσεις πεζών στον κόσμο, καθώς και ένα σημαντικό κέντρο για την βιομηχανία της ψυχαγωγίας. Ονόματα από γέφυρες, ουρανοξύστες, και πάρκα της πόλης είναι γνωστά σε όλο τον κόσμο. Η οικονομική συνοικία, στην Γουόλ Στριτ στο Κάτω Μανχάταν, έχει χαρακτηριστεί το σημαντικότερο χρηματοοικονομικό κέντρο του κόσμου.Όσον αφορά την εκπαίδευση περιλαμβάνει πάνω από 120 κολέγια και πανεπιστήμια συμπεριλαμβανομένων των Πανεπιστημίου Κολούμπια, Πανεπιστήμιο της Νέας Υόρκης και Πανεπιστήμιο Ροκεφέλερ, τα οποία έχουν καταταχθεί μέσα στα 35 κορυφαία πανεπιστήμια του κόσμου</p>
		<p>Μέρη που αξίζει να επισκεφθείτε:</p>
		<ul class="infoList">
			<li><a href="https://el.wikipedia.org/wiki/%CE%86%CE%B3%CE%B1%CE%BB%CE%BC%CE%B1_%CF%84%CE%B7%CF%82_%CE%95%CE%BB%CE%B5%CF%85%CE%B8%CE%B5%CF%81%CE%AF%CE%B1%CF%82" target="_blank">Άγαλμα της Ελευθερίας</a></li>
			<li><a href="https://el.wikipedia.org/wiki/%CE%A3%CE%AD%CE%BD%CF%84%CF%81%CE%B1%CE%BB_%CE%A0%CE%B1%CF%81%CE%BA_(%CE%9D%CE%AD%CE%B1_%CE%A5%CF%8C%CF%81%CE%BA%CE%B7)" target="_blank">Σέντραλ Παρκ</a></li>
			<li><a href="https://el.wikipedia.org/wiki/%CE%95%CE%BC%CF%80%CE%AC%CE%B9%CF%81_%CE%A3%CF%84%CE%AD%CE%B9%CF%84_%CE%9C%CF%80%CE%AF%CE%BB%CE%BD%CF%84%CE%B9%CE%BD%CE%B3%CE%BA" target="_blank">Empire State Building</a></li>
			<li><a href="https://el.wikipedia.org/wiki/%CE%93%CE%AD%CF%86%CF%85%CF%81%CE%B1_%CF%84%CE%BF%CF%85_%CE%9C%CF%80%CF%81%CE%BF%CF%8D%CE%BA%CE%BB%CE%B9%CE%BD" target="_blank">Γέφυρα του Μπρούκλιν</a></li>
		</ul>
		<hr>
		<br><h2>Ντουμπάι</h2>
		<table border="1px solid black" class="infoTable">
			<tr><th>Χώρα</th><th>Πληθυσμός</th><th>Τιμή Εισητηρίου</th></tr>
			<tr><td>Ηνωμένα Αραβικά Εμιράτα</td><td>2.502.715</td><td>270€</td></tr>
		</table>
		<br><img src="images/Dubai.jpg" class="infoImages"><p class="infoParagraphs">Το Ντουμπάι (αραβικά: دبيّ‎) είναι ένα από τα επτά εμιράτα και θεωρείται η μεγαλύτερη πόλη των Ηνωμένων Αραβικών Εμιράτων, διοικητικό κέντρο του εμιράτου, το Ντουμπάι με πληθυσμό 3.506.009 κατοίκων.Βρίσκεται στα παράλια του Περσικού κόλπου, βορειοανατολικά από το Άμπου Ντάμπι και δίπλα στη Σάργια. Το εμιράτο της Σάρζα, που γειτονεύει με το Ντουμπάι, θεωρείται περισσότερο αυστηρό όσον αφορά στην τήρηση των μουσουλμανικών κανόνων (πχ. ενδυμασία, αλκοόλ κλπ.).Το Ντουμπάι είναι το μεγαλύτερο εμπορικό, οικονομικό και τουριστικό κέντρο της χώρας. Η πόλη έχει δύο λιμάνια, από το Σεπτέμβριο του 2009 μετρό και τεράστιο, πολυτελές και υπερτεχνολογικό διεθνές αερολιμένα (Dubai International Airport). Μία από τις καλύτερες αεροπορικές εταιρείες στον κόσμο, η Emirates Airlines, εδρεύει στο Ντουμπάι.</p>
		<p>Μέρη που αξίζει να επισκεφθείτε:</p>
		<ul class="infoList">
			<li><a href="https://el.wikipedia.org/wiki/%CE%9C%CF%80%CE%BF%CF%85%CF%81%CF%84%CE%B6_%CE%A7%CE%B1%CE%BB%CE%AF%CF%86%CE%B1" target="_blank">Μπουρτζ Χαλίφα</a></li>
			<li><a href="https://el.wikipedia.org/wiki/%CE%9C%CF%80%CE%BF%CF%85%CF%81%CF%84%CE%B6_%CE%91%CE%BB_%CE%91%CF%81%CE%AC%CE%BC%CF%80" target="_blank">Μπουρτζ Αλ Αράμπ</a></li>
			<li><a href="https://en.wikipedia.org/wiki/Dubai_Water_Canal" target="_blank">Dubai Water Canal</a></li>
			<li><a href="https://en.wikipedia.org/wiki/Palm_Jumeirah" target="_blank">Palm Jumeirah</a></li>
		</ul>
		<hr>
		<br><h2>Ρίο ντε Τζανέιρο</h2>
		<table border="1px solid black" class="infoTable">
			<tr><th>Χώρα</th><th>Πληθυσμός</th><th>Τιμή Εισητηρίου</th></tr>
			<tr><td>Βραζιλία</td><td>6.453.682</td><td>600€</td></tr>
		</table>
		<br><img src="images/RioDeJaneiro.jpg" class="infoImages"><p class="infoParagraphs">Το Ρίο ντε Τζανέιρο ή Ρίο Ιανέιρο ή Ρίο (πορτογαλικά: Rio de Janeiro, προφέρεται: [ˈʁi.u dʒi ʒɐˈnejɾu], κυριολεκτικά: Ποταμός του Ιανουαρίου) είναι πόλη στη νοτιοανατολική Βραζιλία, πρωτεύουσα της ομώνυμης πολιτείας. Η πόλη ήταν η πρωτεύουσα της Βραζιλίας (1763-1960) και της πορτογαλικής αυτοκρατορίας (1808-1821). Συνήθως γνωστή ως Ρίο, η πόλη παρονομάζεται επίσης ως Cidade Maravilhosa - «η θαυμάσια πόλη».Είναι διάσημη για τη θεαματική φυσική θέση της, τους εορτασμούς καρναβαλιού, τη σάμπα και άλλα είδη μουσικής, παραλίες όπως οι Κοπακαμπάνα, Ιπανέμα και Λεμπλόν, τους πεζόδρομους με τα μαυρόασπρα μωσαϊκά, και το χαλαρό τρόπο ζωής τον κατοίκων. Κάποια από τα πιο γνωστά αξιοθέατα της πόλης, εκτός από τις παραλίες, είναι το τεχνοτροπίας Αρ Ντεκό γιγαντιαίο άγαλμα του Ιησού στη κορυφή του λόφου Κορκοβάδο, ο Πάο ντε Ασούκαρ (κώνος της ζάχαρης - Pão de Açúcar) με το τελεφερίκ, το Σαμποδρόμιο (Sambódromo) ένας πεζόδρομος για τη παρέλαση του Καρναβαλιού, και ένα από τα μεγαλύτερα γήπεδα του κόσμου, το περίφημο Στάδιο Μαρακανά. Στο Ρίο βρίσκεται επίσης το μεγαλύτερο δάσος του κόσμου ενδιάμεσο αστικής περιοχής, το δάσος Τιχούκα.Ο πληθυσμός της πόλης είναι περίπου 6.094.183, σε μια περιοχή 1182,3 km². Ο πληθυσμός της ευρύτερης μητροπολιτικής περιοχής εκτιμάται στα 11-12 εκατομμύρια. Είναι η δεύτερη μεγαλύτερη πόλη της Βραζιλίας μετά από το Σάο Πάολο και ήταν η πρωτεύουσα της χώρας έως το 1960, όταν η Μπραζίλια πήρε τη θέση της. Οι κάτοικοι της πόλης είναι γνωστοί ως Καριόκας (Cariocas). Στην πόλη διεξήχθησαν οι Θερινοί Ολυμπιακοί Αγώνες του 2016.</p>
		<p>Μέρη που αξίζει να επισκεφθείτε:</p>
		<ul class="infoList">
			<li><a href="https://el.wikipedia.org/wiki/%CE%86%CE%B3%CE%B1%CE%BB%CE%BC%CE%B1_%CF%84%CE%BF%CF%85_%CE%A7%CF%81%CE%B9%CF%83%CF%84%CE%BF%CF%8D_%CE%9B%CF%85%CF%84%CF%81%CF%89%CF%84%CE%AE" target="_blank">Άγαλμα του Χριστού Λυτρωτή</a></li>
			<li><a href="https://el.wikipedia.org/wiki/%CE%9A%CE%BF%CF%80%CE%B1%CE%BA%CE%B1%CE%BC%CF%80%CE%AC%CE%BD%CE%B1_(%CE%A1%CE%AF%CE%BF_%CE%BD%CF%84%CE%B5_%CE%A4%CE%B6%CE%B1%CE%BD%CE%AD%CE%B9%CF%81%CE%BF)" target="_blank">Κοπακαμπάνα</a></li>
			<li><a href="https://el.wikipedia.org/wiki/%CE%A0%CE%AC%CE%BF_%CE%BD%CF%84%CE%B5_%CE%91%CF%83%CE%BF%CF%8D%CE%BA%CE%B1%CF%81" target="_blank">Πάο ντε Ασούκαρ</a></li>
			<li><a href="https://en.wikipedia.org/wiki/Corcovado" target="_blank">Corcovado</a></li>
		</ul>
	</body>
</html>