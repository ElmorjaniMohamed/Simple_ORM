<?php

// Connexion à la base de données
$pdo = new PDO('mysql:host=localhost;dbname=orm', 'root', '');

// Inclusion de la classe ORM
include '../src/SimpleORM.php'; // Assurez-vous que le fichier contenant la classe SimpleORM est inclus

// Création d'une instance de l'ORM
$orm = new SimpleORM($pdo, 'users');

// Exemple de création d'un utilisateur
$userData = ['name' => 'Mohamed Tergui', 'age' => 23];
$created = $orm->create($userData);

echo $created ? "Utilisateur créé avec succès\n" : "Échec de la création de l'utilisateur\n";

// Exemple de lecture d'un utilisateur par ID
$user = $orm->read(5);

if ($user) {
    echo "Informations de l'utilisateur : \n";
    print_r($user);
} else {
    echo "L'utilisateur n'a pas été trouvé\n";
}

// Exemple de mise à jour de l'âge de l'utilisateur
$updatedData = ['age' => 25];
$updated = $orm->update(5, $updatedData);

echo $updated ? "Âge de l'utilisateur mis à jour avec succès\n" : "Échec de la mise à jour de l'âge de l'utilisateur\n";

// Exemple de suppression de l'utilisateur
$deleted = $orm->delete(4);
echo $deleted ? "Utilisateur supprimé avec succès\n" : "Échec de la suppression de l'utilisateur\n";
