<?php include('config.php'); ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link href="<?=URL ?>css/default-css/reset.css" rel="stylesheet" type="text/css" />
<link href="<?=URL ?>css/default-css/style.css" rel="stylesheet" type="text/css" />
<link href="<?=URL ?>shadowbox/shadowbox.css" rel="stylesheet" type="text/css" />
<link href="<?=URL ?>exit_pop_combo/epc.css" rel="stylesheet" type="text/css" />
<title>
<?=$site_title ?>
</title>

<!-- Exit Popup 3 -->

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<script type="text/javascript">
	var epc_disable = false;
	var epc_message_html = "<center><b>Don't leave just yet!</b>, I have a special offer for you!<br />Click the button below for this special offer!</center>";
	//var epc_message_alert = "Don't leave just yet!\n\nI have a special offer for you!\n\nClick the button below for this special offer!";
	var epc_continue = "top.location = 'index_t.php/'";
	//var epc_continue = "top.location = 'http://www.google.com/'";
	//var epc_continue = "offer_no()";
</script>
<script src="/exit_pop_combo/epc_html.js" type="text/javascript"></script>
<script src="/exit_pop_combo/epc_alert.js" type="text/javascript"></script>

<!-- End Exit Popup 3 ----->

<?php include(TRAFFIC_TRACKING); ?>

<!-- Exit Popup 2 


<script type="text/javascript" src="/shadowbox/shadowbox.js"></script>

<script type="text/javascript"> 
$(document).ready(function(){

    // Shadow box initialization
    Shadowbox.init({
        handleOversize: "resize",
        overlayOpacity: 0.9
    });

    // This makes sure that the pop up isn't shown
    // if the user is navigating within the website
    $(window).click(function(){
        window.onbeforeunload = null;
    });

    // Before unloading the website open Shadowbox
    window.onbeforeunload = function(){

        // for my client I opted to use the iframe setup but
        // one may go for the ajax, flash or any other setup
        // Tip: use small windows and be concise in the offer!
        Shadowbox.open({
            content:  'index_t.php',
            player:     "iframe",
            width:      838,
            height:     2000
        });

        // For security reasons every browser will confirm with user
        // whether they actually want to run this script or not so make
        // sure to put some attractive text and special offers in here.
        // -- No ... There is no way to bypass this and if there is a way
        // it isn't ethical.
        return 'Hey! ... get a 10% discount on our product!';

    }

});
</script>

<!-- End Exit Popup 2 -->

</head>

<body>
<!-- Exit Popup 1 -->
<?php // include('exitpopup.php'); ?>
<!-- End Exit Popup 1 -->

<?php include(BODY_CODE); ?>

<!-- star wrapper -->

<div id="wrapper"> 
  
  <!-- start header -->
  
  <div id="header"></div>
  
  <!-- end header --> 
  
  <!-- start container -->
  
  <div id="container">
    <p><span class="highlight">"I really shouldn't be showing you this..."</span></p>
    <h1><u>Run</u> Your Car On Alcohol,<br />
      <u>Triple</u> Your Mileage And<br />
      <u>Laugh</u> At Rising Gas Prices...</h1>
    <br />
    <p>This is a story that was never to be told... a "cloak and dagger" mystery... The demise of the Gas Station supremacy... A true story about the fight of our society against the power holders of the world: the BIG Oil Corporations.</p>
    <p>Find out the methods used by the Oil Fat Cats to silence "threats"... ground-breaking inventions of people that wanted nothing else than to improve the way of life for us all!</p>
    <p>Keep reading and you too will discover how to use a simple but effective trick to slash your Gas bills by 55%, 68%, 81% or more... Improve your MPG by 80% to save at least $2500 per year... so you can finally break free from Big Oil's World Domination.</p>
    <h2>It's Time You Found Out<br />
      The Truth About The "Threat" of "Freedom"</h2>
    <img src="<?=URL ?>images/default/ethanol-01.jpg" width="312" height="476" style="float:left; padding:0 10px;" />
    <p>This green fuel is the one thing that really threatened the "leaders" of the "free world". <strong>Ethanol</strong>... Alcohol for fuel... It sounds too good to be true... But, against all odds, can make it to your gas tank...</p>
    <p>...Nobody expected a 10.000 year old invention to power up 20th and 21st century technology... But it does. And the beauty lies in the simplicity of it. Pioneers of the automotive industry discovered it's potential back in the 1900s. The Ford Model T actually ran its engine on this amazing substance 4 years straight... Before the Oil Monopolists stepped into the scene. </p>
    <p>That's exactly why this innovative fuel endangered the Oil Company's interests. As you know, at any given time, there were electric cars... Successful or not... As they all pose a threat to the Oil Companies, none could endanger the business as much as the Ethanol did.</p>
    <p>You see... For an electric car to work, even if you use the same body or chassis of an existing car, you need to replace the engine, add a huge bank of batteries and you are limited to a range of miles per charge. Ethanol, could fill the gas-tank of any car, with slight modifications to the fuel injection system, without killing performances... And best of all, there was no range to hold you off because of its astonishing high MPG.</p>
    <p>But we still have a chance. That's because...</p>
    <h2>This Amazing Fuel Is Still In Our Grasp!</h2>
    <p>So, we can still make this happen:</p>
    <p>Imagine driving for hundreds of miles for only 20% of your usual costs! </p>
    <p>This is not a dream! Henry Ford accomplished it back in 1904! And if it weren't for the Big Oil Company's greed and lust for power, we would still be living that dream.</p>
    <p>Fortunately for us it's not too late to use this amazing invention. As hard as the Oil Companies tried to suppress this intriguing energy source, the potential Ethanol has as a fuel is something extremely difficult to cover. </p>
    <p>We are among the few that got the chance to test drive the "Moonshine Cars". Big Oil hasn't got to us yet, so, we're still able to spread this amazing knowledge.</p>
    <p>So, we took Ethanol knowledge one step further... And, after more than a decade of hard and laborious work, The Suppressed Fuel - Ethanol is now revived and perfected.</p>
    <p>And in a couple of minutes you will see real footage of the it in action!... The undeniable proof that Ethanol as fuel is real and it works... </p>
    <p>It’s an amazing liquid that will change your life and eliminate those oversized gas bills!</p>
    <p>And now, you too can use this automotive milestone to slash your fuel costs by 80%, declare war on the gas stations and drive not a hybrid, but a true green car... With this you'll never have to worry about ever-higher gas prices or dangerous emissions. </p>
    <p>Best of all... you can get any gasoline car to run safely <strong>on alcohol </strong>with a few modifications you can make in your spare time!</p>
    <p>But I'm gonna let you in on a little secret! </p>
    <p>This is not only an opportunity to <u>Save Money</u>... This is actually a huge opportunity to <u>Make Money</u>!</p>
    <p>Think about it... you could teach others how to go green on their autos and so, make money out of the lessons given... Or, you could modify the engines yourself in order to gain as much as you can from this amazing experience.</p>
    <p>But first...</p>
    <h2>Sit Back And Listen The Unbelievable Facts<br />
      Of The Ethanol Fuel Suppression</h2>
    <p>Have you ever heard of an FFV vehicle? Chances are... You own and drive one! FFV stands for FlexiFuel Vehicle... And 90% of the cars on the road are FFVs. But you don't need to know that. All you need to know is that when the gas tank is empty you need to fill it up! That's Big Oil's policy. And it worked... Until now!</p>
    <p>Ethanol lowers your MPG and damages your car! Well... That's one fat lie! Ethanol is a much more potent fuel than gasoline. It will give out 30% more horsepower, at the same rpm... So how could it lower your MPG? The answer is, it won't! Your MPG will skyrocket! With a little luck you'll even forget the Gas stations location. And while being more potent than gasoline, Ethanol could damage the fuel lines, in an FFV vehicle you will see none of that.</p>
    <p>Ethanol present at the Gas Pumps? Well... not likely. there are 30.000 gas stations across the U.S... And only 38 have Ethanol Fuel on a separate pump. And those 38 wouldn't exist either if the Greenpeace movements wouldn't give Big Oil a headache from time to time!</p>
    <p>And let's not forget the raw material for ethanol: <strong>Corn</strong>. Simple and common corn. With the price going through the roof in the past few years, it's clear that a silent form of suppression lurks in the countryside and in the fields. And we're not talking about crop circles... It's the Big Oil Companies again!</p>
    <p>But even though it's been kept under the lock for the past 100 years, </p>
    <h2>...Ethanol Fuel Is Back!</h2>
    <p>Because the bad publicity and cover mock-ups didn't kill this powerful energy source! It actually forced it to resurrect from its ashes just like the Phoenix... And it's now more powerful, improved and perfected that it has ever been.</p>
    <p>How that happened is not a surprise... We, as a species have the call for being independent. And breaking the chains of the Oil Monopolists is this century's fight to be won. And now, we got the perfect weapon for it... The Ethanol Fuel!</p>
    <p>This is the one thing that will lead us to fossil fuels independence. But before you join the fight, you need to know...</p>
    <h2>...How It All Works:</h2>
    <p>The basic principle of this amazing invention is extremely simple. Actually, you have encountered it thousands of times throughout your life time... It's FIRE!</p>
    <p>The alcohol burns, emitting energy which is transformed into circular motion by an energy transformer... Or engine as it's called in plain English!</p>
    <p>When it runs your car, ethanol mixes up with air at high pressure, creating the internal combustion process. </p>
    <p>And the result IS radical: a 30% more powerful explosion in the chamber, that skyrockets your MPG without the toxic fumes of the common gasoline!</p>
    <p>Say goodbye to the dangerous emissions, CO2 and fumes! Because a car running on alcohol will only have PURE WATER dripping out the tail pipe...</p>
    <p>This amazing process is the automotive Nirvana! It is physics and chemistry heaven all combined. Your engine runs on alcohol and produces water. It's Mother Nature's dream come true! </p>
    <p><strong>And, believe it or not...</strong></p>
    <ul class="check-green" style="background-color:#eef9ff;border: solid 2px #b2d9ee;padding-top:25px;">
      <li><strong>It's an incredibly simple modification </strong>(but you really need to think outside the box to understand why it works) </li>
      <li>It requires <strong>no extra maintenance for running on E</strong> (just fill your tank and hit the road) </li>
      <li>There are <strong>no dangerous fumes or emissions </strong>, no CO2 nor greenhouse gasses. </li>
      <li>and it's basically <strong>"set and forget" </strong>: just modify your fuel lines, test it, use it, and then forget you ever did it - while you enjoy a life without the fear of ever-growing gas prices. </li>
    </ul>
    <br />
    <p>There is one problem though, and that is...</p>
    <h2>You Cannot Buy a Ethanol From Any Gas Station!</h2>
    <p>There are Gas stations that sell E85 (Ethanol), but as I've said, there are only a handful across the country....</p>
    <p>The Big Oil Corporations did their best to seal off this amazing fuel to the world... But we found a way... For you to make Ethanol legally! At only a fraction of the gas costs.</p>
    <p>So, we set out to make Ethanol known to the world and prove that...</p>
    <h2>...Alcohol Is The Fuel Of Tomorrow!</h2>
    <p>.. and provide a simple, step by step "walk-through" on how to make your own E85, modify your fuel lines (for non FFVs) and run your car on ethanol - even if you have two thumbs and failed shop class. </p>
    <p>So we went way beyond the usual "DIY guide"... </p>
    <p>... and we actually demonstrated a working "moonshine vehicle" - along with clear, step by step instructions on how you can do it yourself. </p>
    <p>Take a look at this short video demonstrating an Ethanol Fueled Engine <strong>in action</strong>: </p>
    <center>
      <iframe width="420" height="315" src="http://www.youtube.com/embed/MlC0ZyGqYyc" frameborder="0" allowfullscreen></iframe>
    </center>
    <br />
    <p>And Yes! You've witnessed the Ethanol Fuel at work. We couldn't believe our eyes when we first turned the engine on. It's amazing how something so common as alcohol... can turn your engine around and power up your car. </p>
    <p>You can simply drive, because now,</p>
    <h2>You Can Have Your Own Fuel Plant!</h2>
    <p>With the Ethanol you can power-up any gasoline engine in any car on the road... From the Chevy pick-up truck, Camaro, or Mustang to the Honda Civic or the hybrid Prius.</p>
    <p>The opportunities now are limitless, just like your source of fuel. This is indeed Oil independence at its greatest! There will be no more GAS STOPS! </p>
    <p>And remember... making your own Ethanol and modifying the fuel lines may have been a monumental task on your own. But with our step-by-step "walkthrough" it's as easy as a drive around the block.</p>
    <p>But the fact is, you don't have to be an engineer to make your own Ethanol. Even if you're all thumbs, you can pull this through without a whistle.</p>
    <h2>A Few Of The Thousands Oil Independent Users<br />
      Said This About Ethanol:</h2>
    <br />
    <center>
      <h3><strong>"the instructions were clear and easy to follow"</strong></h3>
    </center>
    <blockquote><cite>
      <p>"When I first purchased Moonshine Fuel, I was a bit concerned that it would be too technical. I mean I'm not a car guy at all. But the instructions were clear and easy to follow and <strong>I'm thrilled with the end result</strong>. Thanks for putting out a great guide and helping the average Joe like me.." </p>
      </cite><br />
      <span class="author">Howard Ricks,
      Dallas, USA</span> </blockquote>
    <center>
      <h3><strong>"proof for you that it works on<br />
        every type of gasoline car out there" </strong></h3>
    </center>
    <blockquote><cite>
      <p>"Hi there. I'm not new to alcohol cars. I had some modifications done by a provider here in Australia for six months now. I was seeing improvements, however I wanted to try your system as well. I have to say that your system is simpler and it's also a lot more efficient. Previous system was increasing my mileage by about 25-30% (still pretty good), <strong>your system is increasing my mileage by about 82%</strong>. What can I say... Hats off to you. My car is a Proton Persona, which is probably only popular here. That's proof for you that it works on every type of car out there." </p>
      </cite> <br />
      <span class="author">Stephen Neel,
      Melbourne, Australia</span></blockquote>
    <p>And Andrea Micelli says... </p>
    <center>
      <h3><strong>"Thanks for giving me the rights<br />
        to use this for business"</strong></h3>
    </center>
    <blockquote><cite>
      <p>"What you offer here is pure gold. Your information got me to start a business with this. I can't believe you price this so low. In my view, <strong>I still be happy if I paid 1500 USD for it</strong>.<br />
        People in my country don't know about this. And everyone here loves cars. I'll modify fuel  systems for other people for 500-1000 Euros, which is a stronger currency than the USD. Thanks for giving me the rights to use this for business.." </p>
      </cite> <br />
      <span class="author">Andrea Micelli,
      Milan, Italy</span></blockquote>
    <p>And these are just a few of the people who’ve used this amazing fuel to slash their Gas bills,  drive freely around the country or even make this a family business.</p>
    <p>But in order to achieve at least what one of the above did,</p>
    <h2>You'll Find Out That Time Is Of The Essence!</h2>
    <p>And I'll tell you why:</p>
    <p>As you know, we used our entire arsenal of leverage in order to get this information online. We were as careful as can be, for our lives depended on how well we erased our tracks. Our actions should have the effect of a wave in a pond when it comes to you! So, we want everybody to seize their opportunity in this and make a move before it's too late...</p>
    <p>...Because when something so small but so powerful threatens Big Oil's multi-billion dollar empire, its big machine comes into action, hunting down any little website that provides information on this amazing Fuel! So it's just a matter of time until they get to us...</p>
    <p>Now... We can't give you the Ethanol in jugs... But that doesn't mean we can't show you how to make it yourself... As you know, we have documented the entire process of constructing a fully operational Alcohol Still, <strong>legally</strong>... and we are ready to show it to the world!</p>
    <h2>Ok, So How Much Is This Going To Cost Me?</h2>
    <p>This is the most difficult thing we had to do... Actually, getting the information about the fuel online was way easier than making this here decision. Even so, from the moment we first set out on this dangerous jurney, a lot had been spent... A huge amount of time, tons of bribe money and the research and testing investment.</p>
    <p>But all that doesn't matter now. We are here to make this work for all of us...</p>
    <p>Think about it... It's a ground breaking piece of technology. One that would set a milestone in automotive history... So no one could really put a real price on it...
      Considering the implications, It would be a steal even at $20.000. But as you already know, we are not in this for the money. This is something that everyone on this planet, who owns a car or not, should know.</p>
    <br />
    <p>Just think about how good it would be to...</p>
    <h2>...Save An Extra $250 Per Month On Your Gas Bill.<br />
      That’s $3000 A Year...</h2>
    <p>...and hundreds of thousands of dollars saved over a lifetime. In fact, this Amazing Fuel will prove itself extremely useful in many aspects of your life.</p>
    <ul class="check-green" style="background-color: #ffffcc;border: solid 2px #ffe4ae;padding-top:25px;">
      <li>You will be among the few who really care and take action for our fragile Environment...</li>
      <li>It will be a social connector with the other extraordinary people who run their cars on Ethanol for a better life...</li>
      <li>In any auto gathering or club, you will always have the upper-hand. You will always be at a much higher level than the rest. Because you are the one leaving home with a car that runs on ALCOHOL!</li>
      <li>You will become a guru among your friends and relatives. The one that tricked the fossils. Everybody will come to you for help and information providing them the secret underneath your hood.</li>
      <li>Not only save hundreds of thousands of dollars, but also make hundreds of thousands of dollars. This is new and uncharted territory! People will want their own ethanol... Be the one to truly profit from this. Charge them for consultancy, or even make the fuel yourself in order to gain as much as you can!</li>
    </ul>
    <br />
    <p>And these are only a few of the improvements you will see over the years, apart from the hundreds of thousands of dollars you'll be saving.</p>
    <p>That's why we're only asking for a fraction of what this device is truly worth. </p>
    <p>In fact, this bargain will cost you less than what you save by using it for one month!</p>
    <p>So here's the deal: </p>
    <p>You can get the Moonshine Fuel plans, along with all the instructions you need to make your own car run on Ethanol - for just <strong>$49.97</strong> and not a cent more. </p>
    <p><strong>Within this amazing package you will find:</strong></p>
    <ol style="border: solid 2px #ebebeb; background-color: #fafafa;">
      <li><strong>1. Moonshine Fuel</strong> - The reference blue-print for the simplest
        and most efficient legal Ethanol Still, and how to run your 
        car on this amazing liquid! </li>
      <li><strong>2. Blueprints For 100% Alcohol Cars, Patents And Resources</strong> - 
        A great collection that you can use, sell or even start your own 
        business with. </li>
      <li><strong>3. Let The IRS Pay For Your Car Upgrade</strong> - The exact forms you
        can use to deduct all your costs from the IRS. </li>
      <li><strong>4. Little-Known Secrets That Will Increase Your Mileage</strong> - The 
        jealously guarded tricks and tips that will save you truckloads of 
        gas. </li>
      <li><strong>5. Moonshine Fuel Updates</strong> - The benefit of getting all our 
        updates, innovations and discoveries for free. </li>
    </ol>
    <br />
    <p>These extra bonuses are worth at least over $200. However<strong> you get them for FREE</strong>, just for trying <strong>Moonshine Fuel</strong> . </p>
    <p>So go on - Click the orange "Add-To-Cart" button below and gain access to this amazing technology now... while it’s still available. </p>
    <br />
    <center>
      <a href="https://secure.avangate.com/order/checkout.php?PRODS=4598751&QTY=1&INFO4567913=60%20Days%20Money%20Back%20Guarantee&CART=1&CARD=2&CURRENCY=USD&LANG=en&LANGUAGES=en&ORDERSTYLE=nLW84pS5jH4=&PAY_TYPE=CCVISAMC&BACK_REF=http%3A//www.ethanol4fuel.com/energyPackage.php&REF=<?=$_SESSION['AGUNIQUE']?>&SRC=<?=$_SESSION['AGUNIQUE']?>&DOTEST=1"> <img src="<?=URL ?>images/default/add_to_cart.png" width="368" height="127"> </a>
    </center>
    <br />
    <br />
    <p>And really, the price doesn't even matter. That's because you're protected by...</p>
    <br />
    <center>
      <img src="images/default/guarantee_ethanol.jpg" width="568" height="398" />
    </center>
    <br />
    <br />
    <p>To <strong>claim your copy of the Moonshine Fuel risk free</strong>, just click the orange button below. You'll be taken to a secure order form where you'll be asked for your info, so you can gain access to our special members area.</p>
    <h2>This Is Your Last Chance To Be Among The Lucky Ones!</h2>
    <p>You’ll have to act fast. Even as you’re reading this letter, the legal hounds of the Oil Companies are closing in on their target. And not only will this opportunity be gone in the future, you’ll probably never hear about Ethanol Fuel again... </p>
    <p>That’s because Big Oil has a good reason to be scared beyond belief. This new power source is available to absolutely anyone using a gasoline engine car... And the modifications needed to run it on this amazing fuel are both inexpensive and easy to make. You don't have to buy a new car to benefit from this, nor to invest thousands of dollars into your old one. It's plain simple and accessible!</p>
    <p>Imagine a month from now... You set out on the road with the sun above and a gasp of wind blowing through your window. You're happy and have a sense of freedom like never before... Because you know that this trip could never end. No more humiliating gas stops... No more money burnt out the exhaust pipe... Just you, the road, and good music. That all it would take for the perfect driving experience! Because on Ethanol you can simply DRIVE!</p>
    <p>Try the <strong>Moonshine Fuel today</strong>. You risk nothing... </p>
    <br />
    <div class="yellow_cassette">
      <p>We want you to be absolutely thrilled and amazed with the amount you're saving each month or simply let us know, and we will promptly refund you the full purchase price, so all this experience wouldn't have cost you a single red cent.</p>
      <p>You’ve seen the proof that this works, and in less than a month, you WILL see the dramatic results for yourself. </p>
      <p>The road to Oil independence starts with the push of a button. </p>
      <p>So click the orange "Add to cart" button below... claim your "Oil freedom"... and see for yourself how it feels to be independent and leave the gas stations behind.</p>
      <p><strong>P.S.: UPDATE: Some big car manufacturers are starting to build their cars to use green fuel. However, they say that a green power car is a "high-end" luxury item.</strong></p>
      <br />
      <center>
        <h3>Are You Prepared To Pay $150,000++<br />
          For A BMW Hydrogen 7 Series? </h3>
      </center>
      <br />
      <center>
        <iframe width="420" height="315" src="http://www.youtube.com/embed/MlC0ZyGqYyc" frameborder="0" allowfullscreen></iframe>
      </center>
      <br />
      <br />
      <center>
        <p>Their fancy marketing will make the prices start at $150,000. Even more, <u>you will need to purchase the<br />
          hydrogen</u>, because there are big macro-economic interests.</p>
      </center>
      <br />
      <p>Their system is by far NOT as high performing as <strong>Moonshine Fuel</strong> , because their model does not provide a Hydrogen generator. </p>
      <p>I think you're smart enough to realize that <strong>Moonshine Fuel is the smart choice</strong> for anyone who is not as insane as "they" think. </p>
      <center>
        <h3>Order Now</h3>
      </center>
      <br />
      <center>
        <a href="https://secure.avangate.com/order/checkout.php?PRODS=4598751&QTY=1&INFO4567913=60%20Days%20Money%20Back%20Guarantee&CART=1&CARD=2&CURRENCY=USD&LANG=en&LANGUAGES=en&ORDERSTYLE=nLW84pS5jH4=&PAY_TYPE=CCVISAMC&BACK_REF=http%3A//www.ethanol4fuel.com/energyPackage.php&REF=<?=$_SESSION['AGUNIQUE']?>&SRC=<?=$_SESSION['AGUNIQUE']?>&DOTEST=1"> <img src="<?=URL ?>images/default/add_to_cart.png" width="368" height="127"> </a>
      </center>
    </div>
    <!-- End Page Content --> 
    
  </div>
  
  <!-- end container -->
  
  <?php include(FOOTER_CONTENT); ?>
</div>

<!-- end wrapper -->

<?php include(FOOTER_CODE); ?>
<div style="display: none; width:100%; height:100%; position:fixed; background:#000000; opacity: .8; filter:alpha(opacity=0.8); z-index:999998;" id="exitpopup_bg"> </div>
<div style="width:670px; height:450px; margin:0px auto; display:none; position:fixed; color:#ffffff; padding:20px; -webkit-border-radius: 4px; -moz-border-radius: 4px; border-radius: 4px; z-index:999999; background:rgb(20, 20, 20); background:rgba(0, 0, 0, 0.8);" id="exitpopup">
  <h1>Wait!!! Before you go...</h1>
  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis aliquam interdum enim ut congue. Vivamus erat velit, convallis nec suscipit at, egestas nec nunc. Phasellus in faucibus nunc. Curabitur luctus suscipit faucibus. Phasellus risus risus, bibendum vitae commodo at, gravida in lorem. Nam euismod, turpis non viverra eleifend, leo lorem tempor elit, sit amet hendrerit justo purus at magna. In hac habitasse platea dictumst. Integer sodales pretium libero sed mattis. Aenean suscipit neque ac purus tincidunt iaculis.<br />
    <br />
    Pellentesque ultricies tellus eu orci tempor aliquam vel posuere orci. Nulla in sapien ut tellus malesuada vulputate. Nunc sit amet enim felis, sit amet semper sapien. Vestibulum commodo, nisi vitae faucibus ullamcorper, libero est varius lorem, vel euismod ipsum odio sed elit. Sed risus enim, viverra sit amet pharetra molestie, scelerisque nec tortor.</p>
  <a href="#"><img src="letmeinnow.png" style="width:568px; height:190px" border="0" style="border:0px; margin:0px auto;" /></a> </div>
</body>
</html>