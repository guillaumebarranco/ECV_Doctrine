<?php 

$search = (isset($_GET['search'])) ? $_GET['search'] : 'war';

?>

<form action="index.php" method="get">
	<input type="text" name="search" value="<?=$search?>">
	<button>Rechercher</button>
</form>

<?php

require_once ('bootstrap.php');

// $voiture = new Voiture();
// $voiture->setNomVoiture('Audi TT');
// $voiture->setDateMiseEnCirculation(new \Datetime('1999-01-01'));
// $voiture->setKilometrage(1000);
// $entityManager->persist($voiture);
// $entityManager->flush();

// echo 'voiture enregistree';

// $voiture = $entityManager->find('Voiture', 'all');

// var_dump($voiture);

// $entityManager->remove($voiture);
// $entityManager->flush();

// echo 'voiture deleted';

/*
* Back to the future
*/

// $film = $entityManager->find('Films', 3);

// $film->setResum('One of best movies ever');
// $entityManager->persist($film);
// $entityManager->flush();

// $film = $entityManager->find('Films', 3);
// var_dump($film);

// $all_films = $entityManager->getRepository('Films')->findBy(
// 	array('titre !=' => 'Back to the Future Part III'),
//     array('dateDebutAffiche' => 'ASC'),
//     10,
//     0
// );

$em = $entityManager;

$all_films = $em->getRepository('Film')->createQueryBuilder('f')
	->where('f.titre LIKE :title')
	->andWhere('f.dureeMinutes > :duration')
	->setParameter('title', '%'.$search.'%')
	->setParameter('duration', 120)
	->orderBy('f.dateDebutAffiche', 'ASC')
	->getQuery()
	->getResult()
;

if(count($all_films) !== 0) {

	echo 'Parmi '.count($all_films).' films comportant le mot "'.$search.'" et durant plus de 2 heures, voici ceux qui ont un distributeur et un genre définis :<br /><br />';

	$i = 0;

	foreach ($all_films as $film) {

		if($film->getDistributeur() !== null && $film->getGenre()) {

			echo 'Le film <b>'.$film->getTitre().'</b> a été distribué par <b>'
				.$film->getDistributeur()->getNom().'</b> et est un film du genre <b>'
				.$film->getGenre()->getNom().'</b><br />'
			;

			$i++;
		}
	}

	if($i !== 0) {
		echo "<br />Parmi ces films, seul ".$i." possèdent effectivement un genre et un distributeur";
	} else {
		echo "<br />Parmi ces films, Aucun ne possède de genre ni de distributeur";
	}

} else {
	echo "<br />Il n'y a aucun film comportant ce mot dans son titre";
}




die;
