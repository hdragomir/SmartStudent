<?php defined('SYSPATH') OR die('No direct access allowed.');

class Homepage_Controller extends Template_Controller {

	const ALLOW_PRODUCTION = TRUE;

	public $template = 'template/template';

	public function index(){
        
        
        $dayofweek = intval( date( 'N' ) ) - 1;
        $days = array();
        for( $i = $dayofweek; $i >= 0; $i-- )
            $days[] = Calendar_Controller::day( date( 'Y-m-d', strtotime( "-$i days" ) ) );
        for( $i = $dayofweek + 1; $i < 7; $i++)
            $days[] = Calendar_Controller::day( date( 'Y-m-d', strtotime( '+' . ( $i - $dayofweek ) . ' days' ) ) );
        
        $this->template->content = new View( 'homepage' );
        $this->template->content->week = new View( 'calendar/week' );
        $this->template->content->week->days = $days;
        $this->template->content->week->doNotJumpToCalendar = true;
        $this->template->title = 'Smart Student - Ce faci azi?';
    }
    
    public function coming_soon(){
        
        $this->template->content = new View( 'comingsoon' );
        $this->template->title = 'This Section is coming soon. Do check back!';

    }

	public function __call($method, $arguments){

		$this->auto_render = FALSE;
        echo $method;
        echo 'nope';
	}

}