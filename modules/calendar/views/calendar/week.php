<div id="calendar">
    <ol id="left-hourline">
        
        <?php for( $hour = 0; $hour < 24; $hour += 2 ): ?>
        <li><?php echo $hour < 10 ? "0$hour" : $hour; ?>:00</li>
        <?php endfor; ?>
        
    </ol>
    <div id="days-container <?php echo sizeof( $days ) == 1 ? ' single' : ''  ?>">
    <?php foreach( $days as $day ): ?>
        <?php echo $day; ?>
    <?php endforeach; ?>
    </div>

</div>

<script>
    $( function(){
        <?php if( empty( $doNotJumpToCalendar ) ): ?>
        window.location.hash = 'calendar';
        <?php endif; ?>
        $( '.event.editable' ).click( function( ev ){
            window.location = '<?php echo url::base(); ?>calendar/editevent/'
                + $( this ).attr( 'id' ).replace( /[\D+]/g, '' )
        } )
    } )
    
</script>