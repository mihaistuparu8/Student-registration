<?php
namespace Controllers;

use Core\View;
use Core\Controller;
use Helpers\Url;
use Helpers\Session;
use Helpers\Database;
use Helpers\Request;

class Login extends Controller {

  public $model;

  public function __construct() {
      
    parent:: __construct();
    
    $this->language->load('Login');
    $this->model = new \Models\login();

  }

  /* Home functions */

  public function home_index() {

    View::renderTemplate('header', $data);
    View::render('index/home', $data);
    View::renderTemplate('footer', $data);
  }

  public function faculties_index() {

    View::renderTemplate('header', $data);
    View::render('index/faculties', $data);
    View::renderTemplate('footer', $data);
  }

  public function accommodation_index() {

    View::renderTemplate('header', $data);
    View::render('index/accommodation', $data);
    View::renderTemplate('footer', $data);
  }

  public function social_index() {

    View::renderTemplate('header', $data);
    View::render('index/social', $data);
    View::renderTemplate('footer', $data);
  }

  /* Logged functions */

  public function logout() {

    Session::destroy('logged-in');
    Url::redirect('login');
  }

  public function logged_index() {

    if(Session::get('logged-in') === true) {

      View::renderTemplate('header', $data);
      View::render('logged/homeLogged', $data);
      View::renderTemplate('footer', $data);
    } else {

      $message = [];
      $message['type'] = 'error';
      $message['content'] = 'You can\'t access this page without logging in!';

      Session::set('message', $message);
      Url::redirect('login');
    }
  }

  public function logged_accom_index() {

    View::renderTemplate('header', $data);
    View::render('logged/accommodationLogged', $data);
    View::renderTemplate('footer', $data);
  }

  public function forum_index() {

    View::renderTemplate('header', $data);
    View::render('logged/forum', $data);
    View::renderTemplate('footer', $data);
  }

  public function profile_index() {

    View::renderTemplate('header', $data);
    View::render('logged/profile', $data);
    View::renderTemplate('footer', $data);
  }

  public function account_index() {

    View::renderTemplate('header', $data);
    View::render('logged/account', $data);
    View::renderTemplate('footer', $data);
  }

  /* Login functions */

  public function login_index() {

    $data = array();

    View::renderTemplate('header', $data);
    View::render('login/login', $data);
    View::renderTemplate('footer', $data);
  }

  public function application_index() {

    View::renderTemplate('header', $data);
    View::render('login/application', $data);
    View::renderTemplate('footer', $data);
  }

  public function login() {

    if ($this->model->login()) {
      $message = [];
      $message['type'] = 'success';
      $message['content'] = 'You have successfull login in!';

      Session::set('message', $message);
      Session::set('logged-in', true);

      Url::redirect('logged');
    }
    else {

      $message = [];
      $message['type'] = 'error';
      $message['content'] = 'Incorrect password or username!';

      Session::set('message', $message);
      Url::redirect('login');
    }

  }

  public function application() {

    if ($this->model->application()) {
      $message = [];
      $message['type'] = 'success';
      $message['content'] = 'You have registered successfully!';

      Session::set('message', $message);
      Url::redirect('login');

    }
    else {

      $message = [];
      $message['type'] = 'error';
      $message['content'] = 'Oups! An error has ocured! Make sure you fill all fields correctly!';
      
      Session::set('message', $message);
      Url::redirect('application');
    }

  }

  public function logged_accommodation() {

    if ($this->model->logged_accommodation()) {
      $message = [];
      $message['type'] = 'success';
      $message['content'] = 'You have registered successfully!';

      Session::set('message', $message);
      Url::redirect('accommodationLogged');
    }
    else {

      $message = [];
      $message['type'] = 'error';
      $message['content'] = 'Oups! An error has ocured! Make sure you fill all fields correctly!';
      
      Session::set('message', $message);
      Url::redirect('accommodationLogged');
    }

  }

}

