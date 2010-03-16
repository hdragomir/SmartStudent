<form action="" method="post" style="margin: 50px auto; width: 150px">
    <p><label>Titlu</label><br/><input type="text" name="title" id="title"
                                       value="<?php echo $event->title; ?>"
                                       /></p>
    <p><label>Locatia</label><br/><input type="text"  name="location" id="location"
                                         value="<?php echo $event->location; ?>"
                                     /></p>
    <p><label>Data inceput</label><br/><input type="text" name="start_date" id="start_date"
                                              value="<?php echo $event->start_date; ?>" /></p>
    <p><label>Data de sfarsit</label><br/><input type="text" name="end_date" id="end_date"
                                                 value="<?php echo $event->end_date; ?>"/></p>
    <input type="hidden" name="tipul" value="<?php echo $event->tipul; ?>" />
    <p><input type="submit" value="Go, baby, go!"/>
</form>
<script>
    $( function(){
        $( '#title' ).focus();
    } )
</script>