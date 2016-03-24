# ECV_Doctrine

##Create dabatase from Model
	php vendor/doctrine/orm/bin/doctrine.php orm:schema-tool:create

##Create YML from database
	php vendor/doctrine/orm/bin/doctrine.php orm:convert-mapping --from-database yml mappings-yml

##Generate entities from YML
	php vendor/doctrine/orm/bin/doctrine.php orm:generate:entities Models

##Regenerate entities
	php vendor/doctrine/orm/bin/doctrine.php orm:generate:entities Models --regenerate-entities = true

##Generate Repositories
	php vendor/doctrine/orm/bin/doctrine.php orm:generate:repositories Models