<?php
    
    class Calendar_Controller extends Template_Controller{
        
        public $template = 'template/template';
        
        public function index(){
            if( ! Auth::instance()->logged_in( 'login' ) )
                url::redirect( 'users/login' );
            return $this->week();
        }
        
        public function week(){
            
            $dayofweek = intval( date( 'N' ) ) - 1;
            $days = array();
            for( $i = $dayofweek; $i >= 0; $i-- )
                $days[] = $this->day( date( 'Y-m-d', strtotime( "-$i days" ) ) );
            for( $i = $dayofweek + 1; $i < 7; $i++)
                $days[] = $this->day( date( 'Y-m-d', strtotime( '+' . ( $i - $dayofweek ) . ' days' ) ) );
            
            $this->template->content = new View( 'calendar/week' );
            $this->template->content->days = $days;
            $this->template->title = 'One week view?';
        }
        
        public function today(){
            
            $day = date( 'Y-m-d' );
            $this->template->content = new View( 'calendar/week' );
            $this->template->content->days = array( $this->day( $day ) );
            $this->template->title = 'One Day Calendar';
        }
        
        public function day( $day ){
            $events = ORM::factory('event')
                ->where( array( 'start_date >= ' => date( 'Y-m-d 00:00:00', strtotime( $day ) ),
                                'end_date <= ' => date( 'Y-m-d 23:59:59', strtotime( $day ) ) ) )
                ->find_all();
            
            
            $content = new View( 'calendar/day' );
            $content->day = $day;
            $content->events = $events;
            
            return $content;
        }
        
        public function addevent(){
            if( $post = $this->input->post() ){
                $event = new Event_Model();
                $validation = new Validation( $post );
                $validation->add_rules( 'title', 'required' )
                    ->add_rules( 'location', 'required' )
                    ->add_rules( 'start_date', 'required' )
                    ->add_rules( 'end_date', 'required' )
                    ->add_rules( 'tipul', 'required' );
                $event->user_id = Auth::instance()->get_user()->id;
                $event->validate( $validation, true );
                $event->save();
                url::redirect( 'day/' . date( 'Y-m-d', strtotime( $event->start_date ) ) );
            }
            
            
            $this->template->content = new View( 'calendar/addevent' );
            $this->template->content->start_date = date( 'Y-m-d', strtotime( $this->input->get( 'day', date( 'Y-m-d' ) ) ) )
                . date( ' H:i', strtotime( '+10 minutes' ) );
            $this->template->content->end_date = date( 'Y-m-d', strtotime( $this->input->get( 'day', date( 'Y-m-d' ) ) ) )
                . date( ' H:i', strtotime( '+40 minutes' ) );
            
            
            $this->template->title = 'Manually Add An event';
            
        }
        
        public function editevent( $id ){
            $event = new Event_Model( $id );
            $user = Auth::instance()->get_user();
            if( $event->loaded && $event->user->id == $user->id ){
                
                
                if( $post = $this->input->post() ){
                    $validation = new Validation( $post );
                    $validation->add_rules( 'title', 'required' )
                        ->add_rules( 'location', 'required' )
                        ->add_rules( 'start_date', 'required' )
                        ->add_rules( 'end_date', 'required' )
                        ->add_rules( 'tipul', 'required' );
                    $event->validate( $validation, true );
                    url::redirect( 'day/' . date( 'Y-m-d', strtotime( $event->start_date ) ) );
                }
                
                $this->template->content = new View( 'calendar/editevent' );
                $this->template->content->event = $event;
                $this->template->title = 'Edit event ' . $event->title;
                
                
            } else {
                // add not found thingie;
            }
            
        }
        
        public function dayview( $day = null ){
            $day = null === $day ? $this->input->get( 'day', date( 'Y-m-d' ) ) : $day;
            $this->template->content = new View( 'calendar/week' );
            $this->template->content->days = array( $this->day( $day ) );
            $this->template->title = 'One Day Calendar';
        }
    }