<?php 
namespace Models;

use Helpers\Database;
use Helpers\Request;
use Helpers\Password;
use Helpers\Gump;
use Helpers\Session;
use Core\Model;
use Core\Error;
use Helpers\Url;

class Login extends Model {

  public function __construct() {
    parent:: __construct();
  }

  public function login () {

    $data = [];
    $data['email'] = request::post('email');
    $data['password'] = request::post('password');

    $is_valid = Gump::is_valid($data, array(
      'email' => 'required|min_len,6',
      'password' => 'required|min_len,6'
    ));
    if ($is_valid === true) {
      $verifyUser = $this->_find_user($data['email'], $data['password']);
      if ($verifyUser) {

        $copy_info = $this->db->select("SELECT * FROM ".PREFIX."users WHERE email = :email", array(':email' => $data['email']));
        
        Session::set('user_name', $copy_info);
        Session::set('logged', true);
      }
      else return false;
    }
    else {
      return false;
    }
    return true;
  }


  private function _find_user ($email, $password) {

    $count = $this->db->select("SELECT * FROM ".PREFIX."users WHERE email = :email", array(':email' => $email));
    if (count($count) == 1) {
      $dbpassword = $count[0]->password;
      if (Password::verify($password, $dbpassword)) {
        return true;
        }
      else {
        return false;
      }
    }
        return false;
  }

  private function _user_unique ($email) { //user unic

    $query = "SELECT * FROM ".PREFIX."users WHERE email= :email";
    $count = $this->db->select($query, array('email' => $email));

    if (count($count) == 0) {
      return true;
    }
    else {
      return false;
    }
  }

  private function add_sending ($sending) { //insert sending institution info

    return $this->db->insert(PREFIX."sending_institution", $sending); 

  }

  private function add_user ($user) { //insert new user

    $user['password'] = password::make($user['password']);
    $this->db->insert(PREFIX."users", $user);

    return $this->db->lastInsertId('id');

  }

  private function add_language ($lang) { //insert sending institution info

    return $this->db->insert(PREFIX."foreign_language", $lang); 

  }

  private function add_accommodation ($accom) { //insert sending institution info

    return $this->db->insert(PREFIX."accommodation", $accom); 

  }

  public function application () {

    $user = array();
    $sending = array();
    $lang1 = array();
    $lang2 = array();
    $lang3 = array();

    //smvc_sending_institution
    $sending['sending_institution'] = request::post('sending_institution');
    $sending['dept_name'] = request::post('dept_name');
    $sending['dept_tel'] = request::post('dept_tel');
    $sending['dept_fax'] = request::post('dept_fax');
    $sending['dept_email'] = request::post('dept_email');
    $sending['inst_name'] = request::post('inst_name');
    $sending['inst_tel'] = request::post('inst_tel');
    $sending['inst_fax'] = request::post('inst_fax');
    $sending['inst_email'] = request::post('inst_email');

    //smvc_users
    $user['email'] = request::post('email'); 
    $user['family_name'] = request::post('family_name');
    $user['first_name'] = request::post('first_name');
    $user['password'] = request::post('password'); 
    $user['field_study'] = request::post('field_study');
    $user['academic_year'] = request::post('academic_year');
    $user['sex'] = request::post('sex');
    $user['birth_date'] = request::post('birth_date');
    $user['country'] = request::post('country');
    $user['birth_place'] = request::post('birth_place'); 
    $user['address'] = request::post('address');
    $user['permanent_address'] = request::post('permanent_address');
    $user['address_valid_until'] = request::post('address_valid_until'); 
    $user['passport_id'] = request::post('passport_id');
    $user['mobile'] = request::post('mobile');          
    $user['application_date'] = date('Y-m-d');
    $user['application_reasons'] = request::post('application_reasons');
    $user['experience_type'] = request::post('experience_type');
    $user['firm'] = request::post('firm');
    $user['dates'] = request::post('dates');
    $user['country_exp'] = request::post('country_exp');
    $user['diploma'] = request::post('diploma');
    $user['study_years'] = request::post('study_years');
    $user['abroad_study'] = request::post('abroad_study');
    $user['abroad_institute'] = request::post('abroad_institute');
    $user['mother_language'] = request::post('mother_language');
    $user['institution_language'] = request::post('institution_language');
   
    //smvc_foreign_language

    //lang1
    $lang1['language'] = 'English';
    $lang1['currently_studying'] = request::post('studying_lang1');
    $lang1['sufficient_knowledge'] = request::post('knowledge_lang1');
    $lang1['want_preparation'] = request::post('preparation_lang1');

    //lang2
    $lang2['language'] = 'French';
    $lang2['currently_studying'] = request::post('studying_lang2');
    $lang2['sufficient_knowledge'] = request::post('knowledge_lang2');
    $lang2['want_preparation'] = request::post('preparation_lang2');

    //lang3
    $lang3['language'] = 'Spanish';
    $lang3['currently_studying'] = request::post('studying_lang3');
    $lang3['sufficient_knowledge'] = request::post('knowledge_lang3');
    $lang3['want_preparation'] = request::post('preparation_lang3');

    $repeatPassword = request::post('rpassword');

    $sending_valid = Gump::is_valid($sending, array(

      //smvc_sending_institution
      'sending_institution' => 'required|min_len,1 ',
      'dept_name' => 'required|min_len,2 ', 
      'dept_tel' => 'required|numeric|min_len,5 ',
      'dept_fax' => 'required|numeric|min_len,5 ',
      'dept_email' => 'required|min_len,3 ',
      'inst_name' => 'required|min_len,2 ',
      'inst_tel' => 'required|numeric|min_len,5 ',
      'inst_fax' => 'required|numeric|min_len,5 ',
      'inst_email' => 'required|min_len,3 '

    ));

    $user_valid = Gump::is_valid($user, array( 

      //smvc_users
      'email' => 'required|min_len,6 ',
      'family_name' => 'required|alpha_numeric|min_len,2 ',
      'first_name' => 'required|alpha_numeric|min_len,2 ',
      'password' => 'required|alpha_numeric|min_len,6',
      'academic_year' => 'required|min_len,1 ',    
      'birth_date' => 'required|min_len,1 ',
      'sex' => 'required|min_len,1 ',
      'field_study' => 'required|alpha_numeric|min_len,6 ',   
      'birth_place' => 'required|alpha_numeric|min_len,3 ',
      'country' => 'required|min_len,1 ',
      'address' => 'required|min_len,6 ',
      'mobile' => 'required|numeric|min_len,6 ',
      'passport_id' => 'required|alpha_numeric|min_len,6 ',
      'application_date' => 'required|min_len,1',
      'study_years' => 'required|min_len,1',
      'abroad_study' => 'required|min_len,2' 
    ));

    if (($user_valid === true) && ($sending_valid === true)) {

      $unic = $this->_user_unique ($user['email']);

      if ($unic) {

        if ($user['password'] === $repeatPassword) {

          $addUser = $this->add_user ($user); //add user

          $sending['user_id'] = $addUser; //add user_id
          $lang1['user_id'] = $addUser;
          $lang2['user_id'] = $addUser;
          $lang3['user_id'] = $addUser;

          $addLang1 = $this->add_language ($lang1);
          $addLang2 = $this->add_language ($lang2);
          $addLang3 = $this->add_language ($lang3);
          $addSending = $this->add_sending ($sending);
            
          if (($addSending != null && $addSending != 0) &&
            ($addUser != null && $addUser != 0) &&
            ($addLang1 != null && $addLang1 != 0) &&
            ($addLang2 != null && $addLang2 != 0) &&
            ($addLang3 != null && $addLang3 != 0)) {

            return true;

          } else 
            return false;           
        } else   
          return false;  
      } else 
        return false;
    } else 
      return false;      
  } //application function end

  public function logged_accommodation () {

    $accom = array();
    $copy_info = Session::get('user_name');
    $copy_info = $copy_info[0];

    $accom['family_name'] = $copy_info->family_name;
    $accom['first_name'] = $copy_info->first_name;
    $accom['sex'] = $copy_info->sex;  
    $accom['address'] = $copy_info->address; 
    $accom['country'] = $copy_info->country;
    $accom['mobile'] = $copy_info->mobile; 
    $accom['email'] = $copy_info->email; 
    $accom['id_user'] = $copy_info->id; 

    $accom['university'] = request::post('university');
    $accom['postal_code_city'] = request::post('postal_code_city');
    $accom['period'] = request::post('period');
    $accom['period_start'] = request::post('period_start');
    $accom['period_end'] = request::post('period_end');
    $accom['host'] = request::post('host');
    $accom['room'] = request::post('room');

    $is_valid = Gump::is_valid($accom, array(

        'university' => 'required|alpha_numeric|min_len,2',
        'postal_code_city' => 'required|min_len,2',
        'period' => 'required|min_len,2',
        'period_start' => 'required|min_len,2',
        'period_end' => 'required|min_len,2',
        'host' => 'required|min_len,2'
    ));

    if ($is_valid) {
        $addAccommodation = $this->add_accommodation ($accom);
        if ($addAccommodation != null && $addAccommodation != 0) {

          return true;

        } else
        return false;
    } else
    return false;
  }


}
    
?>



