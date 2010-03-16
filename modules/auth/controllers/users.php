<?php

class Users_Controller extends Template_Controller{
    
    public $template = 'template/template';
    
    public function login() {
        //Check if already logged in
        if (Auth::instance()->logged_in('login')) {
            url::redirect('');
        }
        
        //Initialize template and form fields
        $view = new View('users/login');
        $view->username = '';
        $view->password = '';
     
        //Attempt login if form was submitted
        if ($post = $this->input->post()) {
            if (ORM::factory('user')->login($post)) {
                url::redirect( 'dashboard' );
            } else {
                $view->username = $post['username']; //Redisplay username (but not password) when form is redisplayed.
                $view->message = in_array('required', $post->errors()) ? 'Username and password are required.' : 'Invalid username and/or password.';
            }
        }
     
        //Display login form
        $this->template->hideHeader = true;
        $this->template->content = $view;
        $this->template->title = 'Login';
    }
    
    public function inregistrare(){
        
        if( $post = $this->input->post() ){
            $user = ORM::factory( 'user' );
            
            if( $user->validate( $post , true ) ){
                $user->roles = array( ORM::factory( 'role', 'login' ) );
                $user->save();
                Auth::instance()->force_login( $user->username );
                url::redirect( 'dashboard' );
            } else {
                
                
                
                url::redirect( url::current() );
            }
            
            
        }
        
        $view = new View( 'users/reg' );
        
        $this->template->hideHeader = true;
        $this->template->content = $view;
        $this->template->title = 'Înregistrare';
    }
    
    public function logout(){
        
        Auth::instance()->logout();
        url::redirect('');
    }
    
    
    
    public function setup(){
        
        $user = new User_Model(  );
        $user->email = 'geek@hdragomir.com';
        $user->username = 'geek';
        $user->password = 'geekmeet';
        $user->roles = array( new Role_Model( 1 ) );
        $user->save();
        
    }
    
}