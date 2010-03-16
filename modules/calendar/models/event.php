<?php

class Event_Model extends ORM{
    
    protected $belongs_to = array( 'user' );
    
    public function __get( $col ){
        
        if( 'top' == $col )
            return intval( date( 'G', strtotime( $this->start_date ) ) * 60
                            + intval( preg_replace( '/^0/', '', date( 'i', strtotime( $this->start_date ) ) ) ) );
        
        if( 'height' == $col )
            return intval( date( 'G', strtotime( $this->end_date ) ) * 60
                            + intval( preg_replace( '/^0/', '', date( 'i', strtotime( $this->end_date ) ) ) ) ) - $this->top;
        
        
        if( 'start_time' == $col )
            return date( 'H:i', strtotime( $this->start_date ) );
        
        if( 'end_time' == $col )
            return date( 'H:i', strtotime( $this->end_date ) );
        
        return parent::__get( $col );
    }
    
    public function __set( $col, $value ){
        
        if( 'end_time' == $col || 'start_time' == $col )
            $value = date( 'Y-m-d H:i:s', strtotime( $value ) );
        
        return parent::__set( $col, $value );
    }
    
}