# Projet Docker avec Symfony, Docker et Postgres

## Instructions

1. Téléchargez le projet depuis GitHub.

2. Se mettre dans le dossier docker-symfony

3. Lancez les conteneurs Docker :
   docker-compose up --build

4. Appliquez les migrations : docker-compose exec symfony php bin/console doctrine:migrations:migrate

5. Pour accéder à Symfony : http://localhost:8000

6. Pour accéder à la Todo : http://localhost:8000/api/todos

7. Pour accéder à Adminer : http://localhost:8080
