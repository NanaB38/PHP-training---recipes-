<?php
try
{
	// On se connecte à MySQL
	$mysqlClient = new PDO('mysql:host=localhost;dbname=we_love_food;charset=utf8', 'root', 'sunshine');
}
catch(Exception $e)
{
	// En cas d'erreur, on affiche un message et on arrête tout
        die('Erreur : '.$e->getMessage());
}

// Si tout va bien, on peut continuer

// On récupère tout le contenu de la table recipes
?> 

<?php 
$sqlQuery = 'SELECT * FROM recipes';
$recipesStatement = $mysqlClient->prepare($sqlQuery);
$recipesStatement->execute();

$sqlQuery = 'SELECT * FROM recipes WHERE author = :author AND is_enabled = :is_enabled';

$db->prepare($sqlQuery);
$recipes = $db->execute([
    'author' => 'mathieu.nebra@exemple.com',
    'is_enabled' => true,
]);
// On affiche chaque recette une à une
foreach ($recipes as $recipe) {

$sqlQuery = 'INSERT INTO recipes(title, recipe, author, is_enabled) VALUES (:title, :recipe, :author, :is_enabled)';

// Préparation
$insertRecipe = $mysqlClient->prepare($sqlQuery);

// Exécution ! La recette est maintenant en base de données
$insertRecipe->execute([
    'title' => 'Cassoulet',
    'recipe' => 'Etape 1 : Des flageolets ! Etape 2 : Euh ...',
    'author' => 'contributeur@exemple.com',
    'is_enabled' => 1, // 1 = true, 0 = false
]);
?>

    <p><?php echo $recipe['author']; ?></p>
<?php
}
?>