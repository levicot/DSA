<?php

require_once '/opt/symfony/lib/autoload/sfCoreAutoload.class.php'; 
sfCoreAutoload::register();

class ProjectConfiguration extends sfProjectConfiguration
{
  public function setup()
  {
    $this->enablePlugins('sfDoctrinePlugin');
    $this->enablePlugins('sfDoctrineGuardPlugin');
    $this->enablePlugins('sfFormExtraPlugin');
    $this->enablePlugins('sfFeed2Plugin');
  }
}
