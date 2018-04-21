<?php
include('views/elements/header.php');?>
<div class="container">
	<div class="jumbotron">
<img src="views/img/banner.jpg" width="100%" class="img  no-repeat center top" />
<h1>Hello peasants. This is final project</h1>
</div>
<div id="text">
<p>Lorem ipsum dolor amet xOXO meh hell of occupy, green juice gastropub tofu plaid af edison bulb palo santo VHS fanny pack slow-carb. Gastropub meh celiac, literally migas chia PBR&B pop-up skateboard live-edge tousled umami blog meggings food truck. +1 XOXO drinking vinegar normcore, church-key shaman hot chicken godard. Scenester listicle synth master cleanse polaroid craft beer kombucha copper mug 3 wolf moon irony.
<br><br>
Chambray lomo cliche trust fund forage DIY live-edge blue bottle tattooed. Prism irony health goth aesthetic, asymmetrical pitchfork DIY helvetica la croix. Sartorial prism roof party, literally XOXO man bun put a bird on it hella brooklyn plaid salvia unicorn fam heirloom. Kogi letterpress gastropub ethical, chillwave asymmetrical pickled. Tilde tacos shabby chic, cray hella lomo bitters activated charcoal pickled slow-carb squid pug schlitz godard. Woke lumbersexual tumblr four dollar toast man braid art party godard gastropub hoodie ramps health goth lomo cornhole.
<br><br>
Palo santo dreamcatcher tacos, listicle try-hard lomo tofu snackwave hot chicken offal. Ethical photo booth salvia truffaut master cleanse. Lo-fi flannel etsy vice lomo mumblecore YOLO vinyl ramps air plant. Gastropub pop-up chartreuse, marfa williamsburg schlitz small batch locavore hexagon austin waistcoat edison bulb. Bicycle rights XOXO blog, hammock succulents paleo literally fanny pack aesthetic. Lyft bespoke artisan kitsch, try-hard gastropub actually food truck swag bushwick vice coloring book synth vegan.</p>
</div>
<div id=sidebar>
	<h3>Register Now!</h3>
		<button class="btn"><a href="http://corsair.cs.iupui.edu:22201/CIT313/SP2018/final1/register/">Register</a></button>
		<hr>
    <h3>Latest News from <?php echo $title;?></h3>

    <?php
    echo $data;
    ?>
</div>
</div>
<?php include('views/elements/footer.php');?>
