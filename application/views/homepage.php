<p id="homepage-copy">
Oricât de bună ar fi memoria ta, cândva tot vei pierde ceva din vedere.<br />Da? <strong>Nu tocmai.</strong><br/>
De aceea vrem să îți venim în ajutor cu un loc unde îți poți organiza timpul exact așa cum vrei.<br/>
Aici tu stabilești ce e mai important pentru tine, la ce cursuri vrei să participi, ce evenimente vrei să urmarești, ce notițe vrei să ai la îndemana sau la ce examen trebuie să ajungi.
</p>


<div id="homepage-right">
    <img src="http://geek.hdragomir.com/media/smartstudentbanner.jpg" width="228" height="191" alt=" Smart Student" />
    
    <textarea rows="5" cols="50" style="width: 228px"><?php
        echo html_Core::specialchars( '<a href="http://geek.hdragomir.com"><img src="http://geek.hdragomir.com/media/smartstudentbanner.jpg" width="125" height="125" alt=" Smart Student" /></a>' )
    ?></textarea>
    
</div>

<div id="homepage-calendar">
    <?php echo $week; ?>
</div>



<div id="homepage-footer">
    <a href="http://tm-99-blog.org" target="_blank"><img src="http://tm-99-blog.org/banner/blogger-de-timisoara.png" alt="Blogger de Timisoara" border="0"  height="125"/></a>
    <a href="http://www.redasperanta.ro"> <img src="http://www.redasperanta.ro/files/banner/banner_125x125.jpg" alt="Redă Speranța" width="125" height="125" border="0"></a>
    <a href="http://www.newstimisoara.ro" title="" target="_blank"><img src="http://i47.tinypic.com/12151qx.png" width="" height="125" alt="" border="0" /></a>
    <a href="http://www.pedaleaza.ro" title="Verde pentru Biciclete"><img src="http://www.pedaleaza.ro/images/stories/sticker.jpg" alt="Verde pentru Biciclete" title="verde pentru biciclete" margin: 0px; width="160" height="106"></a>
    <a title="Blogosfera feminina" href="http://www.hotcity.ro//ce-ne-inconjoara/rubrica/blogosfera-feminina"><img src="http://www.hotcity.ro/i/125x125_hotcity.jpg" alt="sustin blogosfera feminina" /></a>
</div>

<style>
    #homepage-calendar{
        margin-right: 280px;
        
    }
    
    #homepage-copy{
        
        margin: 40px 300px 40px 70px;
        font-size: 1.2em;
        text-align: justify;
    }

    #homepage-footer{
        clear: both;
        margin-top: 40px;
        padding-top: 20px;
        padding-bottom: 20px;
        height: 170px;
        background-color: black;
        text-align: center;
    }
    
    #homepage-footer a{
        display: inline-block;
        margin-left: 10px;
        
    }
    #homepage-footer a:first-child{
        margin-left: 0;
    }
    #homepage-right{
        float:right;
        width: 260px;
        min-height: 200px;
    }
</style>