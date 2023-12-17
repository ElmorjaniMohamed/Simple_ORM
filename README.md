# Simple PHP ORM
## Introduction
SimpleORM est une classe de base de Mapping Objet-Relationnel (ORM) écrite en PHP. Elle simplifie les opérations courantes sur la base de données en fournissant des méthodes pour créer, lire, mettre à jour et supprimer des enregistrements dans une table de base de données.

## Fonctionnalités
Création (Create): Insérer de nouveaux objets en base de données.
Lecture (Read): Récupérer des objets en fonction de leur ID.
Mise à jour (Update): Mettre à jour des objets existants en base de données.
Suppression (Delete): Supprimer des objets de la base de données.

## Exemple d'utilisation
Initialisation
```php
// Connexion à la base de données
$pdo = new PDO('mysql:host=localhost;dbname=orm', 'root', '');

// Création d'une instance de l'ORM
$orm = new SimpleORM($pdo, 'users');
```
Create
```php
$userData = ['name' => 'Mohamed Tergui', 'age' => 23];
$created = $orm->create($userData);

echo $created ? "Utilisateur créé avec succès\n" : "Échec de la création de l'utilisateur\n";
```
 Update
 ```php
// Exemple de mise à jour de l'âge de l'utilisateur
$updatedData = ['age' => 25];
$updated = $orm->update(5, $updatedData);

echo $updated ? "Âge de l'utilisateur mis à jour avec succès\n" : "Échec de la mise à jour de l'âge de l'utilisateur\n";
 ```

Delete
```php
// Exemple de suppression de l'utilisateur
$deleted = $orm->delete(4);
echo $deleted ? "Utilisateur supprimé avec succès\n" : "Échec de la suppression de l'utilisateur\n";
```
