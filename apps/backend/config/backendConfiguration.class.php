<?php

class backendConfiguration extends sfApplicationConfiguration
{
  public function configure()
  {
  	sfConfig::set('reuse_frontend', '/var/www/grupo83/public_html/alumno/entrega3/apps/frontend/templates');  	
  }
}
