<?php  
class Tests extends Controller {
    public function __construct() {
      if (!isLoggedIn()) { redirect('users/sign_in'); }
    }

    public function index() {
      $this->view('tests/index');
    }

    public function light_test() {
      $this->view('tests/light_test');
    }

    public function light_test_doing() {
      $this->view('tests/light_test_doing');
    }

    public function light_test_confirmation() {
      $this->view('tests/light_test_confirmation');
    }

    public function light_test_results() {
      $this->view('tests/light_test_results');

    }
    
    public function sound_test() {
      $this->view('tests/sound_test');
    }

    public function sound_test_doing() {
      $this->view('tests/sound_test_doing');
    }

    public function sound_test_confirmation() {
      $this->view('tests/sound_test_confirmation');
    }

    public function sound_test_results() {
      $this->view('tests/sound_test_results');
    }

    public function sound_test_code() {
      $this->view('tests/sound_test_code');
    }



    public function microphone_test() {
      $this->view('tests/microphone_test');
    }

    public function microphone_test_doing() {
      $this->view('tests/microphone_test_doing');
    }

    public function microphone_test_confirmation() {
      $this->view('tests/microphone_test_confirmation');
    }

    public function microphone_test_results() {
      $this->view('tests/microphone_test_results');

    }

    public function test_confirmation() {
      $this->view('tests/test_confirmation');
    }
  }
?> 