<form action="" method="post" style="margin: 50px auto; width: 150px">
    <p><label>Titlu</label><br/><input type="text" name="title" id="title" /></p>
    <p><label>Locatia</label><br/><input type="text"  name="location" id="location"/></p>
    <p><label>Data inceput</label><br/><input type="text" name="start_date" id="start_date" value="<?php echo $start_date; ?>" /></p>
    <p><label>Data de sfarsit</label><br/><input type="text" name="end_date" id="end_date" value="<?php echo $end_date; ?>"/></p>
    <p><label>Tipul</label><br /><select name="tipul">
        <option value="user">User</option>
        <option value="course">Course</option>
        <option value="exam">Exam</option>
        <option value="third">Third</option>
    </select></p>
    <p><input type="submit" value="Go, baby, go!"/>
</form>
<script>
    $( function(){
        $( '#title' ).focus();
    } )
</script>