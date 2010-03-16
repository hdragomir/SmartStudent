<div id="day-<?php echo $day; ?>" class="one-day <?php echo date( 'Y-m-d' ) == $day ? 'current' : ''; ?>">
<div class="day-header">
    
    <a title="Adaugă un Eveniment"
       href="<?php echo url::base(); ?>/calendar/addevent?day=<?php echo $day; ?>" class="add-event-to-date">+</a>
    
    <?php echo date( 'l', strtotime( $day ) ); ?><br />
    <?php echo date( 'd M', strtotime( $day ) ); ?>
</div><?php foreach( $events as $event ): ?><div id="event-<?php echo $event->id; ?>"
                                                 class="event <?php echo $event->tipul;
$user = Auth::instance()->logged_in( 'login' ) ? Auth::instance()->get_user() : null;
if( $user && $event->user->id == $user->id ): ?> editable<?php endif; ?>"
                                                 style="top: <?php echo $event->top + 50; ?>px;
                                                        height: <?php echo $event->height; ?>px">
        <?php echo $event->title; ?> @ <?php echo $event->location; ?><br />
        <small><?php echo $event->start_time; ?>
        -
        <?php echo $event->end_time; ?></small></div><?php endforeach; ?></div>