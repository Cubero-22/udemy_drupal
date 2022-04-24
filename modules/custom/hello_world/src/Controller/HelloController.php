<?php

namespace Drupal\hello_world\Controller;

class HelloController
{
    public function content() {
      return [
        '#type'=> 'markup',
        '#markup'=> t('Hello World, welcome'),
      ];
    }
}
