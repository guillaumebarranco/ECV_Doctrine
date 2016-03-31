# ECV_Doctrine

##Composer init

##Require doctrine with composer (in composer.json)
	{
	  "require": {
	    "doctrine/orm": "*",
	    "symfony/yaml": "^3.0"
	  },
	    "autoload": {
	    "psr-0": {
	      "": "Models/"
	    }
	  }
	}

##import Doctrine methods
	use Doctrine\ORM\Tools\Setup;
	use Doctrine\ORM\EntityManager;

##Set mappings folder in function Setup::createYAMLMetadataConfiguration()

##Create entityManager
	$em = EntityManager::create($dbParams, $config);

##Create YML from database
	php vendor/doctrine/orm/bin/doctrine.php orm:convert-mapping --from-database yml mappings-yml

##Generate entities from YML
	php vendor/doctrine/orm/bin/doctrine.php orm:generate:entities Models

##Regenerate entities
	php vendor/doctrine/orm/bin/doctrine.php orm:generate:entities Models --regenerate-entities = true

##Generate Repositories
	php vendor/doctrine/orm/bin/doctrine.php orm:generate:repositories Models

##ELSE

##Create dabatase from Model
	php vendor/doctrine/orm/bin/doctrine.php orm:schema-tool:create
