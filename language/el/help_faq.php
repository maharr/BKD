<?php
/** 
*
* help_faq [Greek - El]
*
* @package language
* @version $Id$
* @copyright (c) 2005 phpBB Group 
* @license http://opensource.org/licenses/gpl-license.php GNU Public License 
*
* Ελληνική μετάφραση από την ομάδα του phpbbgr.com:
* (http://phpbbgr.com/team/)
*
*/

/**
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$help = array(
	array(
		0 => '--',
		1 => 'Θέματα σύνδεσης και εγγραφής'
	),
	array(
		0 => 'Γιατί δεν μπορώ να συνδεθώ;',
		1 => 'Υπάρχουν πολλοί και διάφοροι λόγοι που αυτό μπορεί να συμβεί. Καταρχήν, σιγουρευτείτε ό,τι το όνομα μέλους και ο κωδικός είναι σωστά. Αν είναι, επικοινωνήστε με τον Διαχειριστή για να σιγουρευτείτε ότι δεν έχετε αποκλειστεί από την σελίδα. Είναι επίσης πιθανό ο Διαχειριστής να αντιμετωπίζει κάποιο πρόβλημα στις ρυθμίσεις, και να χρειάζεται να το φτιάξει.'
	),
	array(
		0 => 'Γιατί πρέπει να κάνω εγγραφή;',
		1 => 'Ίσως να μην είναι απαραίτητο, εξαρτάται από τον διαχειριστή της δημόσιας συζήτησης αν έχει ορίσει ότι πρέπει να κάνετε εγγραφή ούτως ώστε να δημοσιεύετε μηνύματα. Ωστόσο, αν εγγραφείτε θα έχετε πρόσβαση σε πρόσθετες υπηρεσίες που δεν είναι διαθέσιμες σε επισκέπτες όπως εικονίδια μελών (avatars), προσωπικά μηνύματα, αποστολή και λήψη μηνυμάτων ηλεκτρονικού ταχυδρομείου από και προς άλλους χρήστες, ένταξη σε ομάδα μελών, κλπ. Παίρνει μόνο μερικά λεπτά για την εγγραφή σας οπότε σας συμβουλεύουμε να το κάνετε.'
	),
	array(
		0 => 'Γιατί αποσυνδέομαι αυτόματα;',
		1 => 'Εάν δεν έχετε επιλέξει το κουτάκι <em>Να γίνεται η σύνδεση αυτόματα σε κάθε μου επίσκεψη</em> κατά τη σύνδεσή σας, θα παραμένετε συνδεδεμένος μόνο για προκαθορισμένο χρονικό διάστημα. Αυτή η ρύθμιση αποτρέπει κατάχρηση του λογαριασμού σας από κάποιον άλλο. Για να παραμείνετε συνδεδεμένος, επιλέξτε το κουτάκι που υπάρχει στην οθόνη σύνδεσης. Δεν το συνιστούμε αν χρησιμοποιείτε κοινόχρηστο υπολογιστή, π.χ. βιβλιοθήκη, internet cafe, υπολογιστής πανεπιστημιακού εργαστηρίου, κλπ. Αν δεν μπορείτε να δείτε αυτό το κουτάκι, σημαίνει ότι ο Διαχειριστής έχει απενεργοποιήσει αυτό το χαρακτηριστικό.'
	),
	array(
		0 => 'Πώς γίνεται η απόκρυψη (μη συμπερίληψη) του ονόματός μου στη λίστα των συνδεδεμένων μελών;',
		1 => 'Αυτό γίνεται από το μενού Προφίλ, στην καρτέλα "Επιλογές", θα βρείτε την επιλογή <em>Απόκρυψη των στοιχείων μου κατά την διάρκεια της σύνδεσης</em>. Ενεργοποιήστε αυτή την επιλογή με <samp>Ναι</samp> και το όνομά σας θα είναι ορατό μόνο από τους Διαχειριστές, τους Συντονιστές και εσάς. Θα υπολογίζεστε ως μη ορατό μέλος.'
	),
	array(
		0 => 'Έχω χάσει τον κωδικό μου!',
		1 => 'Μην πανικοβάλλεστε! Εφόσον ο κωδικός σας δεν μπορεί να ανασυρθεί από την βάση δεδομένων μας, μπορεί εύκολα να δοθεί νέα τιμή. Για να ξεκινήσει η διαδικασία αυτή πηγαίνετε στη σελίδα σύνδεσης και κάντε κλικ στην επιλογή <em>Έχω ξεχάσει τον κωδικό μου</em>. Ακολουθήστε τις οδηγίες και θα μπορείτε να συνδεθείτε πάλι σύντομα.'
	),
	array(
		0 => 'Έχω κάνει εγγραφή, αλλά δεν μπορώ να συνδεθώ!',
		1 => 'Πρώτα, ελέγξτε το όνομα μέλους και τον κωδικό. Αν είναι σωστά, τότε ένα από τα δύο μπορεί να συμβαίνει. Ή Να έχει ενεργοποιηθεί η COPPA διακήρυξη εφόσον κατά τη διάρκεια της εγγραφής έχετε επιλέξει Είμαι κάτω των 13 ετών, οπότε θα πρέπει να ακολουθήσετε τις οδηγίες που έχετε λάβει. Ή να έχετε μόλις εγγραφεί και ο λογαριασμός σας να χρειάζεται ενεργοποίηση. Μερικά συστήματα απαιτούν όλες οι νέες εγγραφές να ενεργοποιούνται, είτε από εσάς είτε από τον διαχειριστή προκειμένου να μπορέσετε να συνδεθείτε. Μετά την εγγραφή σας, πρέπει να ενημερωθήκατε εάν χρειάζεται αυτή η ενεργοποίηση. Αν έχετε λάβει ένα ηλεκτρονικό ταχυδρομείο,, ακολουθήστε τις οδηγίες. Αν δεν έχετε λάβει το ηλεκτρονικό ταχυδρομείο, ίσως να έχετε δώσει μια λάθος διεύθυνση ηλεκτρονικού ταχυδρομείου, ή το ηλεκτρονικό ταχυδρομείο, σας έχει μπλοκαριστεί από κάποιο φίλτρο spam. Αν είστε σίγουρος ό,τι το ηλεκτρονικό ταχυδρομείο, που δώσατε είναι σωστό, προσπαθήστε να επικοινωνήσετε με έναν διαχειριστή.'
	),
	array(
		0 => 'Έχω εγγραφεί κατά το παρελθόν αλλά δεν μπορώ να συνδεθώ πλέον!',
		1 => 'Προσπαθήστε να εντοπίσετε το ηλεκτρονικό ταχυδρομείο, που σας στάλθηκε όταν εγγραφήκατε για πρώτη φορά, ελέγξτε το όνομα μέλους και τον κωδικό. Είναι πιθανό ένας διαχειριστής να απενεργοποίησε ή να διέγραψε τον λογαριασμό σας για κάποιο λόγο. Επίσης, πολλά συστήματα απομακρύνουν μέλη περιοδικά που δεν έχουν ανταλλάξει μηνύματα για πολύ καιρό για να μειώσουν το μέγεθος της βάσης δεδομένων. Αν αυτό συμβαίνει, Προσπαθήστε να εγγραφείτε ξανά και να εμπλακείτε στις δημόσιες συζητήσεις.'
	),
	array(
		0 => 'Τι είναι το COPPA;',
		1 => 'COPPA, ή Νόμος για την προστασία στο Διαδίκτυο, του παιδιού του 1998, είναι ένας νόμος των Ηνωμένων Πολιτειών που απαιτεί από τις σελίδες που μπορούν να συλλέξουν πληροφορίες από παιδιά κάτω των 13 ετών να έχουν άδεια από τον κηδεμόνα ή κάποιο στοιχείο που να επιτρέπει την συλλογή προσωπικών πληροφοριών από άτομο κάτω των 13 ετών. Να έχετε υπόψη ότι το phpBB Group δεν μπορεί να δώσει νομική συμβουλή και δεν μπορείτε να επικοινωνείτε για οποιοδήποτε παράνομη ενέργεια οποιουδήποττε είδους, εκτός από τα παραπάνω.',
	),
	array(
		0 => 'Γιατί δεν μπορώ να εγγραφώ;',
		1 => 'Είναι πιθανό ο Διαχειριστής του συστήματος να έχει αποκλείσει την IP διεύθυνση σας ή να μην επιτρέπει το όνομα μέλους που προσπαθείτε να κάνετε εγγραφή. Ο Διαχειριστής μπορεί επίσης να έχει απενεργοποιήσει τις εγγραφές για να αποτρέψει νέους επισκέπτες να εγγραφούν. Επικοινωνήστε με τον διαχειριστή του συστήματος για περαιτέρω 
 βοήθεια.',
	),
	array(
		0 => 'Τι κάνει η επιλογή “Διαγράψτε όλα τα cookies του συστήματος”;',
		1 => 'Η επιλογή “Διαγράψτε όλα τα cookies του συστήματος” διαγράφει όλα τα cookies που έχουν δημιουργηθεί από το phpBB τα οποία ορίζουν την ταυτότητα σας όσο είστε συνδεδεμένοι στο σύστημα. Επίσης δίνει δυνατότητες όπως να δείτε τα ίχνη σας αν είναι ενεργοποιημένη από τον διαχειριστή. Αν έχετε προβλήματα σύνδεσης ή αποσύνδεσης, η διαγραφή των cookies ίσως βοηθήσει.',
	),
	array(
		0 => '--',
		1 => 'Προφίλ Μέλους και ρυθμίσεις'
	),
	array(
		0 => 'Πώς μπορώ να αλλάξω τις ρυθμίσεις μου;',
		1 => 'Αν είστε εγγεγραμμένο μέλος, όλες οι ρυθμίσεις σας αποθηκεύονται σε βάση δεδομένων. Για να τις αλλάξετε επιλέξτε το Προφίλ (υπάρχει στο πάνω μέρος των περισσότερων σελίδων αν και μπορεί σε κάποιες να μην εμφανίζεται). Η επιλογή αυτή θα σας επιτρέψει να αλλάξετε τις ρυθμίσεις σας.'
	),
	array(
		0 => 'Η ώρα δεν είναι σωστή!',
		1 => 'Είναι πιθανό η ώρα αυτή είναι διαφορετικής χρονοζώνης από αυτήν στην οποία βρίσκεστε. Αν συμβαίνει αυτό(και είστε εγγεγραμμένο μέλος), μεταβείτε στον Πίνακα ελέγχου μέλους και αλλάξτε την χρονοζώνη σας για να ταιριάζει στην περιοχή σας, π.χ. Λονδίνο, Παρίσι, Νέα Υόρκη, Σίδνεϋ, κλπ. Αυτό μπορεί να γίνει μόνο από εγγεγραμμένα μέλη. Αν δεν είστε εγγεγραμμένος, αυτή είναι μια καλή ευκαιρία να το κάνετε.'
	),
	array(
		0 => 'Έχω αλλάξει την χρονοζώνη αλλά και πάλι η ώρα δεν είναι σωστή!',
		1 => 'Εάν είστε σίγουροι ότι έχετε ρυθμίσει την χρονοζώνη και την Καλοκαιρινή ώρα σωστά και η ώρα είναι ακόμα λανθασμένη, τότε φταίει η ώρα του κεντρικού υπολογιστή που είναι εγκατεστημένο το σύστημα. Παρακαλούμε να ειδοποιήσετε έναν διαχειριστή για να λύσει το πρόβλημα.'
	),
	array(
		0 => 'Η γλώσσα μου δεν συμπεριλαμβάνεται στον κατάλογο με τις γλώσσες του συστήματος!',
		1 => ' Το πιθανότερο είναι να μην έχει εγκατασταθεί η γλώσσα σας από τον διαχειριστή. Ζητείστε από τον διαχειριστή να εγκαταστήσει την γλώσσα που χρειάζεστε, και εάν δεν υπάρχει μπορείτε να δημιουργήσετε μόνοι σας τα αρχεία της γλώσσας αυτής κατόπιν συνεννόησης με τον διαχειριστή. Για περισσότερες πληροφορίες απευθυνθείτε στις σελίδες του phpBB Group (υπάρχει παραπομπή στο τέλος κάθε σελίδας).'
	),
	array(
		0 => 'Πώς μπορώ να βάλω μια εικόνα κάτω από το όνομα μέλους μου;',
		1 => 'Υπάρχουν δύο ειδών εικόνες που μπορούν να εμφανιστούς κάτω από το όνομα χρήστη όταν βλέπει δημοσιεύσεις. Η μία από αυτές μπορεί να είναι μία εικόνα που συνδέεται με το βαθμό σας, γενικά υπο την μορφή αστεριών, μπλόκ ή τελειών, που υποδικνύει πόσες δημοσιεύσεις έχετε κάνει ή το βαθμό σας στον πίνακα συζητήσεων. Η άλλη, συνήθως μια μεγαλύτερη εικόνα, που είναι γνωστή σαν άβαταρ και είναι γενικότερα μοναδική ή προσωπική για κάθε έναν. Είναι στην κρίση του διαχειριστή να ενεργοποιήσει τα άβαταρ και να επιλέξει τον τρόπο τον οποίο τα άβαταρ θα είναι διαθέσιμα. Αν δεν μπορείτε να χρησιμοποιήσετε τα άβαταρ, επικοινωνήστε με τον διαχειριστή και ρωτήστε τον τον λόγο για αυτό.'
	),
	array(
		0 => 'Τι είναι ο βαθμός και πώς αλλάζω τον βαθμό μου;',
		1 => 'Οι βαθμοί, που εμφανίζονται κάτω από το όνομα μέλους, δηλώνουν τον αριθμό των δημοσιεύσεων που έχετε κάνει ή είναι αναγνωριστικό ειδικών μελών, π.χ. Συντονιστές και Διαχειριστές. Γενικά, δεν μπορείτε να αλλάξετε τον βαθμό σας οι ίδιοι, διότι γίνετε μόνο από τον διαχειριστή του συστήματος. Παρακαλούμε μην κάνετε άσκοπες δημοσιεύσεις μόνο και μόνο για να αυξήσετε το βαθμό σας. Τα περισσότερα συστήματα δεν δέχονται κάτι τέτοιο και ο Συντονιστής ή ο Διαχειριστής απλά θα μειώσει τον αριθμό των δημοσιεύσεων σας.'
	),
	array(
		0 => 'Για να κάνω χρήση του συνδέσμου email ενός μέλους πρέπει να είμαι εγγεγραμμένος;',
		1 => 'Μόνο οι εγγεγραμμένοι μέλη μπορούν να στείλουν ηλεκτρονικό ταχυδρομείο σε άλλα μέλη από την φόρμα αποστολής ηλεκτρονικού ταχυδρομείου του συστήματος, και μόνο αν ο Διαχειριστής έχει ενεργοποιήσει αυτή την επιλογή. Αυτό γίνετε για να αποτραπεί η κακόβουλη χρήση του συστήματος ηλεκτρονικού ταχυδρομείου από ανώνυμα μέλη.'
	),
	array(
		0 => '--',
		1 => 'Ζητήματα Δημοσίευσης'
	),
	array(
		0 => 'Πώς αναρτώ ένα θέμα στην Δ. Συζήτηση;',
		1 => 'Είναι πολύ εύκολο, απλά πατήστε το σχετικό εικονίδιο στην οθόνη των Θ. Ενοτήτων. Μπορεί να χρειαστεί να εγγραφείτε ως μέλος πριν μπορέσετε να στείλετε μήνυμα. Οι δυνατότητες τις οποίες έχετε στην αποστολή των μηνυμάτων εμφανίζονται στο κάτω τμήμα της οθόνης π.χ. (στη Μπορείτε να αναρτήσετε νέο μήνυμα , Μπορείτε να λάβετε μέρος σε δημοψήφισμα, κλπ λίστα)'
	),
	array(
		0 => 'Πώς μπορώ να κάνω επεξεργασία ή να διαγράψω ένα δημοσίευμα;',
		1 => 'Εκτός και αν είστε διαχειριστής ή συντονιστής, μπορείτε μόνο να επεξεργαστείτε ή να διαγράψετε τα δικά σας μηνύματα. Μπορείτε να επεξεργαστείτε μια δημοσίευση πατώντας το κουμπί επεξεργασίας για την κατάλληλη δημοσίευση, μερικές φορές για μόνο μικρό χρονικό διάστημα από την δημοσίευση. Αν κάποιος έχει ήδη απαντήσει στην δημοσίεση, θα βρείτε ένα μικρό μήνυμα κάτω από την δημοσίευσή σας όταν επιστρέψετε στο θέμα που αναφέρει το πόσες φορές έχετε επεξεργαστεί την δημοσίευση με ημερομηνία και ώρα. Αυτό μόνο εμφανίζετε  αν κάποιος έχει απαντήσει, δεν θα εμφανίζεται αν ένας συντονιστής ή διαχειριστής επεξεργαστούν την δημοσίευσή σας, ωστόσο μπορεί να αφήσουν κάποια σημείωση σχετικά με το λόγο που επεξεργάστηκαν την δημοσίευση κατα την κρίση τους. Παρακαλώ σημειώστε οτι κανονικοί χρήστες δεν μπορούν να σβήσουν μια δημοσίευση αν κάποιος έχει απαντήσει.'
	),
	array(
		0 => 'Πώς θέτω υπογραφή σε μία δημοσίευση μου;',
		1 => 'Για να βάλετε υπογραφή σε μια δημοσίευση πρέπει πρώτα να δημιουργήσετε μια από το προφίλ σας. Όταν γίνει αυτό, μπορείτε να επιλέξετε το <em>Προσάρτηση  υπογραφής</em> στη φόρμα της δημοσίευσης για να προσθέσετε την υπογραφή σας. Μπορείτε επίσης να προσθέσετε μια υπογραφή ως προεπιλογή αν επιλέξετε το κατάλληλο κουμπί στο προφίλ σας. Αν το κάνετε, μπορείτε να μην βάλετε υπογραφή σε κάποια δημοσιεύματα αν αφαιρέσετε την επιλογή Προσθήκη υπογραφής στη φόρμα δημοσίευσης.'
	),
	array(
		0 => 'Πώς δημιουργώ ένα δημοψήφισμα;',
		1 => 'Δημιουργώντας ένα νέο μήνυμα ( ή εάν έχετε τα δικαιώματα να επεξεργασθείτε το πρώτο μήνυμα μιας Θ. Ενότητας ) υπάρχει ένα τμήμα στην φόρμα σύνταξης του μηνύματος με τίτλο Προσθήκη δημοψηφίσματος ( εάν δεν εμφανίζεται τίποτα παρόμοιο πιθανόν να μην έχετε δικαιώματα δημιουργίας δημοψηφίσματος ). Αναγράφετε το Θέμα του δημοψηφίσματος και τουλάχιστον δύο επιλογές προς ψήφισμα ( αναγράψτε μία επιλογή και πατήστε το κουμπί Προσθήκη επιλογής , επαναλαμβάνοντας την διαδικασία για όσες επιλογές επιθυμείτε). Μπορείτε επίσης να θέσετε τον αριθμό των επιλογών ενός μέλους που μπορεί να επιλέξει “Επιλογές ανά μέλος”, χρονικό περιθώριο του δημοψηφίσματος (0 για χωρίς χρονικά όρια) και τέλος την επιλογή να επιτρέψετε στα μέλη να τροποποιούν τις δημοσιεύσεις τους.'
	),
	array(
		0 => 'Γιατί δεν μπορώ να προσθέσω περισσότερες επιλογές στα δημοψηφίσματα;',
		1 => 'Το όριο για τις επιλογές στα δημοψηφίσματα τίθεται από τον Διαχειριστή. Αν νομίζετε ότι χρειάζονται περισσότερες επιλογές στο δικό σας δημοψήφισμα, επικοινωνήστε με τον Διαχειριστή του συστήματος.'
	),
	array(
		0 => 'Πώς μπορώ να επεξεργαστώ ή να διαγράψω ένα δημοψήφισμα;',
		1 => 'Όπως και στα δημοσιεύματα, τα δημοψηφίσματα μπορούν να επεξεργαστούν μόνο από τον συγγραφέα τους, έναν συντονιστή ή έναν Διαχειριστή. Για να επεξεργαστείτε ένα δημοψήφισμα, επεξεργαστείτε την πρώτη δημοσίευση, διότι είναι πάντα συνδεδεμένη με το δημοψήφισμα. Αν δεν έχει ψηφίσει κανείς, οι χρήστες μπορούν να διαγράψουν ή να επεξεργαστούν τα δημοψηφίσματα. Ωστόσο, Αν κάποιο μέλος έχει ήδη ψηφίσει, μόνο οι Συντονιστές ή οι Διαχειριστές μπορούν να το επεξεργαστούν ή να το διαγράψουν. Αυτό αποτρέπει τη νόθευση των αποτελεσμάτων.'
	),
	array(
		0 => 'Γιατί δεν έχω πρόσβαση σε μια Δ. Συζήτηση;',
		1 => 'Μερικές Δ. Συζητήσεις είναι αποκλειστικές για συγκεκριμένα μέλη ή ομάδες. Για να δείτε, να διαβάσετε, να απαντήσετε ή για οποιαδήποτε άλλη ενέργεια χρειάζεστε ειδική άδεια. Επικοινωνήστε με έναν συντονιστή ή έναν διαχειριστή για να λάβατε την άδεια.'
	),
	array(
		0 => 'Γιατί δεν μπορώ να προσθέσω συνημμένα;',
		1 => 'Ο διαχειριστής του συστήματος μπορεί να έχει απαγορεύσει τα συνημμένα στη συγκεκριμένη Δ. Συζήτηση, ή πιθανόν μόνο συγκεκριμένες ομάδες μελών να μπορούν να το κάνουν. Επικοινωνήστε με τον διαχειριστή του συστήματος αν δεν είστε σίγουροι για το λόγο που δεν μπορείτε να προσθέσετε συνημμένο.'
	),
	array(
		0 => 'Γιατί έχω πάρει προειδοποίηση;',
		1 => 'Κάθε διαχειριστής έχει τους δικούς του κανόνες στην σελίδα του. Αν έχετε παραβεί κάποιο κανόνα, τότε ίσως να πήρατε προειδοποίηση. σημειώστε ότι αυτό είναι απόφαση του διαχειριστή, και το phpBB Group δεν έχει να κάνει με αυτό. Επικοινωνήστε με τον διαχειριστή αν δεν είστε σίγουροι γιατί πήρατε προειδοποίηση.'
	),
	array(
		0 => 'Πώς μπορώ να αναφέρω δημοσιεύσεις σε έναν συντονιστή;',
		1 => 'Αν ο διαχειριστής του συστήματος έχει ενεργοποιήσει αυτή την επιλογή, θα δείτε ένα κουμπί αναφοράς στην πάνω μεριά του δημοσιεύματος που θέλετε να αναφέρετε. Κάνοντας κλικ θα καθοδηγηθείτε για τις απαιτούμενες ενέργειες για την αναφορά.'
	),
	array(
		0 => 'Τι είναι το κουμπί “Αποθήκευση” στην φόρμα δημοσίευσης;',
		1 => 'Αυτό σας βοηθά να αποθηκεύσετε κομμάτια κειμένου ούτως ώστε να τα δημοσιεύσετε αργότερα. Για να εμφανίσετε ένα αποθηκευμένο μήνυμα, επισκεφθείτε τον Πίνακα Ελέγχου Μέλους.'
	),
	array(
		0 => 'Γιατί η δημοσίευση μου πρέπει να εγκριθεί;',
		1 => 'Ο διαχειριστής του συστήματος μπορεί να έχει αποφασίσει ότι τα δημοσιεύματα της Δ. Συζήτησης που θέλετε να απαντήσετε πρέπει πρώτα να ελέγχονται. Είναι επίσης πιθανό ο διαχειριστής να σας έχει βάλει σε ομάδα των οποίων τα δημοσιεύματα πρέπει να ελέγχονται πριν δημοσιευτούν. Επικοινωνήστε με τον διαχειριστή του συστήματος για περισσότερες πληροφορίες.'
	),
	array(
		0 => 'Πως σημειώνουμε ένα θέμα σαν νέο;',
		1 => 'Πατώντας πάνω στο bump my topic πάει η δημοσίευση στην πρώτη σελίδα και φαίνεται ότι είναι αδιάβαστη. Εάν δεν βλέπεις τον σύνδεσμο σημαίνει ότι αυτή η λειτουργία είναι απενεργοποιημένη ή μετά την τελευταία φορά που το πάτησες δεν έχει αλλάξει κάτι. Είναι ακόμη δυνατών να πάει στην πρώτη σελίδα απαντώντας σε αυτό. Σιγουρέψου πρώτα όμως εάν ακολουθείς τους κανόνες της Δ. Συζήτησης. Συνήθως αυτό όμως δεν θέλουν να χρησιμοποιείτε χωρίς ιδιαίτερο λόγο σε παλιές δημοσιεύσεις ή δημοσιεύσεις που έχουν κλείσει.'
	),
	array(
		0 => '--',
		1 => 'Μορφοποίηση και τύποι Θ. Ενοτήτων'
	),
	array(
		0 => 'Τι είναι το BBCode;',
		1 => 'Το BBCode είναι μία ιδιαίτερη εφαρμογή της HTML, η χρήση της στα μηνύματα καθορίζεται από τον διαχειριστή στο σύνολο, και από τον συντάκτη ενός μηνύματος κατά βούληση, κάθε φορά που συντάσσει ένα κείμενο. Το BBCode έχει παρόμοια σύνταξη με την HTML, αλλά οι εντολές περικλείωνται σε αγκύλες [ και ] αντί &lt; και &gt;. Για περισσότερες πληροφορίες για το BBCode δείτε τον οδηγό που μπορείτε να βρείτε στη φόρμα δημοσίευσης.'
	),
	array(
		0 => 'Μπορώ να χρησιμοποιήσω HTML;',
		1 => 'Όχι. Δεν είναι δυνατό να δημοσιεύσετε σε HTML. Πολλές μορφοποιήσεις που γίνονται με την HTML μπορούν να γίνουν και με BBCode.'
	),
	array(
		0 => 'Τι είναι τα Smilies;',
		1 => 'Τα Smilies, ή Emoticons, είναι μικρά εικονίδια που μπορούν να χρησιμοποιηθούν για να εκφράσουν συναίσθημα χρησιμοποιώντας σύντομο κώδικα, π.χ. :) σημαίνει ευτυχισμένος, καθώς :( σημαίνει λυπημένος. Η πλήρης λίστα των εικονιδίων φαίνεται στη φόρμα δημοσίευσης. Προσπαθήστε να μην χρησιμοποιείτε πολύ τα smilies, διότι καθιστούν ένα δημοσίευμα ακατάλληλο για ανάγνωση και ένας συντονιστής ίσως να επεξεργαστεί ή να σβήσει όλο το δημοσίευμα. Ο διαχειριστής μπορεί να θέσει ένα μέγιστο όριο χρησιμοποίησης smilies στις δημοσιεύσεις.'
	),
	array(
		0 => 'Μπορώ να δημοσιεύω μια εικόνα;',
		1 => 'Ναι, εικόνες μπορούν να υπάρχουν στις δημοσιεύσεις. Αν ο διαχειριστής επιτρέπει τα συνημμένα, μπορείτε να ανεβάζετε τις εικόνες σας στο σύστημα. Αλλιώς, πρέπει να ανεβάσετε την εικόνα σας σε κάποιο εξωτερικό κεντρικό υπολογιστή για εικόνες και να τοποθετήσετε το σύνδεσμο, π.χ. http://www.example.com/my-picture.gif. Δεν μπορείτε να τοποθετήσετε απευθείας εικόνες που είναι στον δικό σας υπολογιστή (εκτός αν είναι δημόσιος κεντρικός υπολογιστής) ή σε μηχανισμούς του διαδικτύου, π.χ. hotmail ή yahoo λογαριασμοί ηλεκτρονικού ταχυδρομείου, ιστοσελίδες που προστατεύονται με κωδικό, κλπ. Για να εμφανιστεί η εικόνα χρησιμοποιήστε την εντολή [img].'
	),
	array(
		0 => 'Τι είναι οι Γενικές Ανακοινώσεις;',
		1 => 'Οι Γενικές Ανακοινώσεις περιέχουν σημαντικές πληροφορίες και πρέπει να τις διαβάσετε όσο το δυνατόν συντομότερα. Εμφανίζονται στην πάνω πλευρά κάθε Δ. Συζήτησης και στον Πίνακα Ελέγχου Μέλους. Οι Γενικές Ανακοινώσεις γίνονται μόνο από διαχειριστές.'
	),
	array(
		0 => 'Τι είναι οι Ανακοινώσεις;',
		1 => 'Οι Ανακοινώσεις περιέχουν σημαντικές πληροφορίες για την Δ. Συζήτηση που βρίσκεστε και πρέπει να τις διαβάσετε. Οι Ανακοινώσεις εμφανίζονται ως πρώτο θέμα σε κάθε Δ. Συζήτηση που υπάρχουν. Όπως και με τις Γενικές Ανακοινώσεις, έτσι και οι Ανακοινώσεις γίνονται από τους Διαχειριστές ή τους Συντονιστές.'
	),
	array(
		0 => 'Τι είναι οι Σημειώσεις;',
		1 => 'Οι Σημειώσεις βρίσκονται κάτω από τις ανακοινώσεις και μόνο στην πρώτη σελίδα. Είναι σημαντικές και πρέπει να διαβάζονται. Όπως και με τις Ανακοινώσεις και τις Γενικές Ανακοινώσεις, Σημειώσεις μπορούν να κάνουν μόνο οι Διαχειριστές και οι Συντονιστές.'
	),
	array(
		0 => 'Τι είναι η κλειδωμένη Θ. Ενότητα;',
		1 => 'Οι κλειδωμένες Θ. Ενότητες είναι ενότητες που τα μέλη δεν μπορούν πια να απαντήσουν και κάθε δημοψήφισμα που υπάρχει τερματίστηκε αυτόματα. Τα θέματα μπορούν να κλειδωθούν για πολλούς λόγους και αυτό μπορεί να γίνει από διαχειριστή ή συντονιστή. Ίσως να μπορείτε και σεις να κλειδώσετε τις ενότητες σας, εξαρτάται από τον διαχειριστή.'
	),
	array(
		0 => 'Τι είναι τα εικονίδια των Θ. Ενοτήτων;',
		1 => 'Τα εικονίδια των Θ. Ενοτήτων είναι εικονίδια διαλεγμένα από τον συντάκτη του θέματος και δείχνουν το χαρακτήρα του θέματος και το περιεχόμενό του. Η ικανότητα να χρησιμοποιούν τέτοια εικονίδια οι χρήστες καθορίζετε από τον διαχειριστή του συστήματος.'
	),
	// This block will switch the FAQ-Questions to the second template column
	array(
		0 => '--',
		1 => '--'
	),
	array(
		0 => '--',
		1 => 'Επίπεδα μελών και Ομάδες'
	),
	array(
		0 => 'Τι είναι οι Διαχειριστές;',
		1 => 'Οι Διαχειριστές είναι μέλη με τον μεγαλύτερο βαθμό ελέγχου σε όλο το σύστημα. Μπορούν να ελέγχουν όλες τις λειτουργίες του συστήματος, συμπεριλαμβανομένου και των ειδικών αδειών, τον αποκλεισμό μελών, την δημιουργία ομάδων ή συντονιστών, κλπ., εξαρτάται από τον δημιουργό του συστήματος και τι δυνατότητες έχει δώσει στους άλλους διαχειριστές. Έχουν επίσης πλήρη δυνατότητα συντονιστών σε όλες τις Δ. Συζητήσεις.'
	),
	array(
		0 => 'Τι είναι οι Συντονιστές;',
		1 => 'Οι Συντονιστές είναι μέλη (ή ομάδες μελών) που συντονίζουν τις ενέργειες των Δ. Συζητήσεων και κρατώντας τες καθαρές. Έχουν τη δυνατότητα να επεξεργάζονται ή να σβήνουν δημοσιεύσεις και να τις κλειδώνουν, ξεκλειδώνουν, μετακινούν, να σβήνουν ή να διαχωρίζουν Θ. Ενότητες στις Δ. Συζητήσεις που επιβλέπουν. Γενικά, οι συντονιστές υπάρχουν για να αποτρέπουν χρήστες από το να βγαίνουν εκτός θέματος ή να δημοσιεύουν ακατάλληλο ή προσβλητικό υλικό.'
	),
	array(
		0 => 'Τι είναι οι ομάδες μελών;',
		1 => 'Οι ομάδες μελών είναι ένας τρόπος με τον οποίο οι διαχειριστές ομαδοποιούν τα δικαιώματα που έχουν διαφορετικά μέλη της Δ. Συζήτησης. Ένα μέλος μπορεί να ανήκει σε περισσότερες από μία ομάδες ( αυτή είναι μια σημαντική διαφορά από άλλα συστήματα Δ. Συζήτησης) και κάθε ομάδα να έχει διαφορετικά δικαιώματα πρόσβασης. Έτσι διευκολύνεται ο διαχειριστής στο να αποδώσει δικαιώματα διαμεσολαβητή σε πολλά μέλη, να επιτρέπει την πρόσβαση σε μία Θ. Ενότητα σε συγκεκριμένη ομάδα μελών κ.λ.π.'
	),
	array(
		0 => 'Πως εγγράφομαι σε μία ομάδα Μελών;',
		1 => 'Μπορείς να δεις όλες τις ομάδες μελών στο σύνδεσμο “Ομάδες μελών” ή στον Πίνακα Ελέγχου Μέλους. Αν θέλετε να ενταχθείτε σε μια, κάντε το χρησιμοποιώντας το σχετικό κουμπί. Δεν έχουν όλες οι ομάδες μελών ανοιχτή πρόσβαση, ωστόσο. Μερικές χρειάζονται έγκριση για την εισαγωγή νέου μέλους, μερικές είναι κλειστές και μερικές είναι κρυφές. Αν η ομάδα είναι ανοιχτή, μπορείτε να ενταχθείτε χρησιμοποιώντας το κατάλληλο κουμπί. Αν χρειάζεται έγκριση τότε χρησιμοποιήστε το κατάλληλο κουμπί και περιμένετε μέχρι να ειδοποιηθείτε ότι εγκρίθηκε ή απορρίφθηκε. Ο συντονιστής της ομάδας θα χρειαστεί να εξετάσει την αίτηση σας και ίσως σας ρωτήσει γιατί θέλετε να ενταχθείτε. Μην κατηγορείστε τον συντονιστή της ομάδας εάν σας απορρίψουν, σίγουρα θα υπάρχει λόγος.'
	),
	array(
		0 => 'Πως μπορώ να γίνω Συντονιστής ομάδας μελών;',
		1 => 'Οι ομάδες μελών δημιουργούνται αρχικά από έναν Διαχειριστή, οι οποίοι επίσης ορίζουν έναν συντονιστή. Εφόσον ενδιαφέρεστε να γίνετε Συντονιστές πρέπει να αποταθείτε στον διαχειριστή του συστήματος, στέλνοντας του ένα μήνυμα.',
	),
	array(
		0 => 'Γιατί μερικές ομάδες μελών έχουν διαφορετικό χρώμα;',
		1 => 'Είναι πιθανό ο διαχειριστής να έχει αντιστοιχήσει κάποιο χρώμα στην ομάδα για να ξεχωρίζουν από τους άλλα μέλη.'
	),
	array(
		0 => 'Τι είναι η “Προεπιλεγμένη ομάδα μελών”;',
		1 => 'Αν είστε μέλος σε παραπάνω από μια ομάδα μελών, η προεπιλεγμένη χρησιμοποιείτε για να καθορίσει το χρώμα και το βαθμό σας. Ο διαχειριστής μπορεί να δώσει δικαίωμα στο μέλος να αλλάξει την προεπιλεγμένη ομάδα του από τον Πίνακα Ελέγχου Μέλους.'
	),
	array(
		0 => 'Τι είναι ο σύνδεσμος "Η ομάδα”;',
		1 => 'Αυτή η σελίδα πληροφορεί για το προσωπικό της σελίδας, συμπεριλαμβανομένου διαχειριστών και συντονιστών όπως και λεπτομέρειες για τις Δ. Συζητήσεις που συντονίζουν.'
	),
	array(
		0 => '--',
		1 => 'Προσωπικά Μηνύματα'
	),
	array(
		0 => 'Δεν μπορώ να στείλω προσωπικά μηνύματα!',
		1 => 'Υπάρχουν τρεις λόγοι για αυτό, δεν είστε εγγεγραμμένος και/ή συνδεδεμένος, ο διαχειριστής έχει απενεργοποιήσει αυτή τη λειτουργία σε όλο το σύστημα, ή ο διαχειριστής δεν επιτρέπει να στείλετε εσείς μήνυμα. Επικοινωνήστε με έναν διαχειριστή για περισσότερες πληροφορίες.'
	),
	array(
		0 => 'Παίρνω ανεπιθύμητα μηνύματα!',
		1 => 'Μπορείτε να μπλοκάρετε ένα μέλος από το να σας στέλνει προσωπικά μηνύματα χρησιμοποιώντας τους κανόνες μηνυμάτων στον Πίνακα Ελέγχου Μέλους. Αν παίρνετε ανεπιθύμητα μηνύματα από έναν συγκεκριμένο μέλος, ειδοποιήστε έναν διαχειριστή, έχει την δυνατότητα να αποτρέψει κάτι τέτοιο.'
	),
	array(
		0 => 'Έχω λάβει ένα μήνυμα spam ή ένα προσβλητικό ηλεκτρονικό ταχυδρομείο από κάποιο μέλος!',
		1 => 'Λυπούμαστε που ακούμε κάτι τέτοιο. Η φόρμα ηλεκτρονικού ταχυδρομείου έχει φίλτρα για να κρατούνται τα ίχνη μελών που κάνουν κάτι τέτοιο,γιαυτό στείλτε ένα ηλεκτρονικό ταχυδρομείο l στο διαχειριστή με πλήρες αντίγραφο του μηνύματος. Είναι σημαντικό να υπάρχουν οι επικεφαλίδες που περιέχουν τα στοιχεία του μέλους. Ο διαχειριστής μπορεί να κάνει κάτι.'
	),
	array(
		0 => '--',
		1 => 'Φίλοι και εχθροί'
	),
	array(
		0 => 'Τι είναι η λίστα φίλων και εχθρών;',
		1 => 'Μπορείτε να χρησιμοποιήσετε αυτές τις λίστες για να ταξινομήσετε τα μέλη του συστήματος. Τα μέλη της λίστας φίλων θα υπάρχουν και στον Πίνακα Ελέγχου Μέλους για γρήγορη πρόσβαση για να βλέπετε αν είναι ενεργοί, να στέλνετε προσωπικά μηνύματα, κλπ. Οι δημοσιεύσεις αυτών των μελών θα ξεχωρίζουν. Αν προσθέσετε κάποιο μέλος στη λίστα εχθρών, κάθε δημοσίευση αυτού θα είναι κρυμμένη ως προεπιλογή.'
	),
	array(
		0 => 'Πώς μπορώ να προσθέσω / αφαιρέσω μέλη στις λίστες Φίλων και Εχθρών;',
		1 => 'Μπορείτε να προσθέσετε μέλη στις λίστες με δύο τρόπους. Από το προφίλ κάθε μέλους, υπάρχει ένας σύνδεσμος για την προσθήκη είτε στους Φίλους, είτε στους Εχθρούς. Διαφορετικά, από τον Πίνακα Ελέγχου Μέλους, μπορείτε κατευθείαν να προσθέσετε μέλη βάζοντας το όνομά τους. Μπορείτε επίσης να αφαιρέσετε μέλη με τον ίδιο τρόπο.'
	),
	array(
		0 => '--',
		1 => 'Αναζήτηση Δ. Συζητήσεων'
	),
	array(
		0 => 'Πώς μπορώ να αναζητήσω μια ή περισσότερες Δ. Συζητήσεις;',
		1 => 'Εισάγετε μια συνθήκη αναζήτησης στην σχετική σελίδα για να αναζητήσετε Δ. Συζητήσεις ή Θ. Ενότητες. Η Προηγμένη Αναζήτηση μπορεί να πραγματοποιηθεί κάνοντας κλικ στον κατάλληλο σύνδεσμο που είναι διαθέσιμος σε όλες τις σελίδες της Συζήτησης. Πώς να κάνετε αναζήτηση ίσως εξαρτάται από το στυλ που χρησιμοποιείτε.'
	),
	array(
		0 => 'Γιατί η αναζήτηση μου δεν επιστρέφει αποτελέσματα;',
		1 => 'Η αναζήτησή σας ήταν ανακριβής και δεν ταίριαζε με τους καταλόγους του phpBB3. Να είστε πιο ακριβείς και να χρησιμοποιείτε τις επιλογές της προηγμένης αναζήτησης.'
	),
	array(
		0 => 'Γιατί η αναζήτηση μου επιστρέφει κενή σελίδα!;',
		1 => 'Η αναζήτησή σας επέστρεψε πολλά αποτελέσματα που δεν σήκωσε ο server. Χρησιμοποιείστε την “Προηγμένη αναζήτηση” και να είστε πιο συγκεκριμένοι σε αυτό που αναζητάτε.'
	),
	array(
		0 => 'Πώς αναζητώ μέλη;',
		1 => 'Επισκεφθείτε τον σύνδεσμο "Κατάλογος μελών" και επιλέξτε “Αναζήτηση μέλους”.'
	),
	array(
		0 => 'Πώς μπορώ να βρω τα δικά μου δημοσιεύματα και θέματα;',
		1 => 'Τα δικά σας δημοσιεύματα μπορούν να εμφανιστούν χρησιμοποιώντας την επιλογή “Αναζήτηση δημοσιεύσεων από το μέλος” από τον Πίνακα Ελέγχου Μέλους ή από την σελίδα του προφίλ σας. Για να αναζητήσετε τα θέματά σας, χρησιμοποιείστε την προηγμένη αναζήτηση και συμπληρώστε κατάλληλα τα κριτήρια αναζήτησης.'
	),
	array(
		0 => '--',
		1 => 'Ενημέρωση σε Θ. Ενότητες και Σελιδοδείκτες'
	),
	array(
		0 => 'Ποια είναι η διαφορά του σελιδοδείκτη από την ενημέρωση;',
		1 => 'Ο σελιδοδείκτης στο phpBB3 είναι όπως ο σελιδοδείκτης του πλοηγού σας. Δεν ενημερώνεστε όταν υπάρχει μια ανανέωση, αλλά μπορείτε να επανέλθετε αργότερα. Η ενημέρωση, ωστόσο, θα σας ειδοποιήσει για κάποια ανανέωση με την μέθοδο που επιλέξατε.'
	),
	array(
		0 => 'Πώς εγγράφομαι στην ενημέρωση κάποιας Δ. Συζήτησης ή θέματος;',
		1 => 'Για να εγγραφείτε στην ενημέρωση κάποιας Δ. Συζήτησης, κάντε κλικ στο “Παρακολούθηση αυτής της Δ. Συζήτησης”. Για να ενημερώνεστε για ένα θέμα, απαντήστε στο θέμα έχοντας την επιλογή “Να ενημερωθώ όταν δημοσιευθεί απάντηση” ενεργοποιημένη.'
	),
	array(
		0 => 'Πώς αφαιρώ την ενημέρωσή μου;',
		1 => 'Πηγαίνετε στον Πίνακα Ελέγχου Μέλους και ακολουθήστε τους συνδέσμους των επιλογών σας.'
	),
	array(
		0 => '--',
		1 => 'Συνημμένα'
	),
	array(
		0 => 'Τι συνημμένα επιτρέπονται σε αυτό το σύστημα;',
		1 => 'Κάθε διαχειριστής μπορεί να επιτρέπει συγκεκριμένους τύπους συνημμένων. Αν δεν είστε σίγουροι τι συνημμένα επιτρέπονται, επικοινωνήστε με το διαχειριστή για βοήθεια.'
	),
	array(
		0 => 'Πώς μπορώ να βρω τα συνημμένα μου;',
		1 => 'Για να βρείτε τα συνημμένα που έχετε ανεβάσει, πηγαίνετε στον Πίνακα Ελέγχου Μέλους και επιλέξτε το σύνδεσμο για τα συνημμένα.'
	),
	array(
		0 => '--',
		1 => 'Θέματα αναφορικά με το phpBB 3'
	),
	array(
		0 => 'Ποιος έχει δημιουργήσει αυτό το πρόγραμμα;',
		1 => 'Αυτό το πρόγραμμα (στην αυθεντική του έκδοση)έχει υλοποιηθεί, και ανήκει πνευματικά<a href="http://www.phpbb.com/">Στο phpBB Group</a>. Είναι διαθέσιμο υπό την GNU General Public License και είναι ελεύθερο. Δείτε το σύνδεσμο για περισσότερες λεπτομέρειες.'
	),
	array(
		0 => 'Γιατί δεν είναι διαθέσιμο το Χ χαρακτηριστικό;',
		1 => 'Αυτό το πρόγραμμα δημιουργήθηκε και η άδεια χρήσης του αποδόθηκε από την ομάδα ανάπτυξης λογισμικού phpBB. Εάν νομίζετε ότι πρέπει να προστεθεί κάποιο χαρακτηριστικό, επισκεφθείτε τις επίσημες σελίδες της ομάδας ανάπτυξης. Σας παρακαλούμε να μην στέλνετε τις προτάσεις σας απ ευθείας στην ομάδα, αλλά χρησιμοποιήστε το ειδικό πεδίο στο sourceforge. Διαβάστε στην Δ. Συζήτηση της ομάδας μας για το ποια είναι η θέση μας πάνω σε αυτά τα νέα χαρακτηριστικά και ακολουθήστε την διαδικασία που σας προτείνουμε.'
	),
	array(
		0 => 'Με ποιόν θα επικοινωνήσω σχετικά με νομικά ή θέματα κατάχρησης πάνω στο σύστημα;',
		1 => 'Σε οποιονδήποτε διαχειριστή που βρίσκεται το όνομά του στην σελίδα “Η Ομάδα”. Αν δεν πάρετε καμία απάντηση επικοινωνήστε με τον ιδιοκτήτη του domain (κάντε μια <a href="http://www.google.com/search?q=whois">whois αναζήτηση</a>) ή, αν είναι μια δωρεάν υπηρεσία (π.χ. Yahoo!, free.fr, f2s.com, κλπ.), την διοίκηση ή το τμήμα εξυπηρέτησης. Σημειώστε ότι το phpBB Group <strong>δεν έχει καμία ανάμιξη</strong> και δεν φέρει ευθύνη για το περιεχόμενο, ή τον ιδιοκτήτη αυτής της Δ. Συζήτησης. Είναι άστοχο να έρθετε σε επαφή μαζί τους για νομικά θέματα που δεν σχετίζονται άμεσα με την ομάδα phpBB. Εάν αποστείλετε email στην phpBB ομάδα για κάποιον τρίτο παράγοντα χρήσης του προγράμματος θα πρέπει να περιμένετε μία αρνητική ή και καμία, απάντηση'
	)
);

?>