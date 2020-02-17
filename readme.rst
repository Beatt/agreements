###################
Requirements
###################

-  php 5.4
-  Postgres 9.2
-  Apache
-  npm

###################
Config
###################

-  Config application/config/database.php file
-  Run db/create_tables.sql

###################
Run dev
###################

-  Config application/config/database.php file
-  Run db/create_tables.sql
-  npm install
-  npx babel --watch src --out-dir . --presets react-app/prod
