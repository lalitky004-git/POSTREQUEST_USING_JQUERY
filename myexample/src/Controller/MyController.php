<?php

namespace Drupal\myexample\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Class MyController.
 */

class MyController extends ControllerBase {

  /**
   * Hello.
   *
   * @return string
   *   Return Hello string.
   */
  public function hello() {
    $user = \Drupal\user\Entity\User::load(\Drupal::currentUser()->id());
    $username = $user->getDisplayName();

      $build=[];
      $build['content']=[
        '#markup' => '<div class="js-var">'.$this->t('Username is : ').'</div>',
      ];
      $build['#attached']['library'][]='myexample/js_example';
      $build['#attached']['drupalSettings']['js_example']['title']=$username;
      return $build;
  
  }

}
