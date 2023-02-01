<?php
$errors = [];
$errorMessage = '';

if (!empty($_POST)) {
   $name = $_POST['name'];
   $email = $_POST['email'];
   $message = $_POST['message'];

   if (empty($name)) {
       $errors[] = 'Name is empty';
   }

   if (empty($email)) {
       $errors[] = 'Email is empty';
   } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
       $errors[] = 'Email is invalid';
   }

   if (empty($message)) {
       $errors[] = 'Message is empty';
   }

   if (empty($errors)) {
       $toEmail = 'support@gerinocoin.io';
       $emailSubject = 'New email from your contact form';
       $headers = ['From' => $email, 'Reply-To' => $email, 'Content-type' => 'text/html; charset=utf-8'];
       //$bodyParagraphs = ["Name: {$name}", "Email: {$email}", "Message:", $message];
       $body = '<html><head><style>table, th, td {  border: 1px solid black;  border-collapse: collapse; }</style></head><body><h2>New Contact Inquiry On Gerinocoin</h2><table>
       <tr><td> Name </td><td>'.$name.'</td></tr>
       <tr><td> Email </td><td>'.$email.'</td></tr>
       <tr><td> Message </td><td>'.$message.'</td></tr>
       </table></body></html>';

       if (mail($toEmail, $emailSubject, $body, $headers)) 

           header('Location: thank-you.php');
       } else {
           $errorMessage = 'Oops, something went wrong. Please try again later';
       }

   } else {

       $allErrors = join('<br/>', $errors);
       $errorMessage = "<p style='color: red;'>{$allErrors}</p>";
   }


?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Bootstrap v5.1.3 CSS -->
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/owl.carousel.min.css">
<link rel="stylesheet" href="css/font-awesome.min.css">
<link rel="stylesheet" href="css/animate.css">
<link rel="stylesheet" href="css/style.css">
<link rel="shortcut icon" href="images/fav-icon.png">
<link rel="profile" href="https://gmpg.org/xfn/11">

<!-- <meta name="title" content="best Crypto coin for buy | Best crypto coin ico 2022 | Gerinocoin.io">
<meta name="description" content="The best crypto coin 2022 for buy and get profit |  Best crypto coin ico 2022 "> -->

<title>GERINO (GNC) - The first-ever trading protocol featuring Zero Loss on Algorithmic trading</title>
<!-- All in One SEO 4.1.6.2 -->
<meta name="description" content="GERINO (GNC) trading protocol develops an easy-to-use, secure one-stop solution for both cryptocurrency investors and traders." />
<link rel="canonical" href="https://gerinocoin.io/" />
<meta property="og:locale" content="en_US" />
<meta property="og:site_name" content="GERINO (GNC) | Crypto Algorithmic trading" />
<meta property="og:type" content="website" />
<meta property="og:title" content="GERINO (GNC) | Crypto Algorithmic trading" />
<meta property="og:description" content="GERINO (GNC) | Crypto Algorithmic trading is an innovative financial ecosystem, based on a rebase currency managed by  GNC  - Featuring Crypto trading envoirement and tools. " />
<meta property="og:url" content="https://gerinocoin.io/" />
<!-- <meta name="twitter:card" content="summary" />
<meta name="twitter:site" content="@GNC" />
<meta name="twitter:title" content="GERINO (GNC) | Crypto Algorithmic trading" />
<meta name="twitter:description" content="GERINO (GNC) | Crypto Algorithmic trading is an innovative financial ecosystem, based on a rebase currency managed by  GNC  - Featuring Crypto trading envoirement and tools. " />
<meta name="twitter:creator" content="@GNC" /> -->



<link rel="preconnect" href="//fonts.googleapis.com" crossorigin>
<link rel="preconnect" href="//fonts.gstatic.com" crossorigin>
<link rel='dns-prefetch' href='//s.w.org' />
<link rel="alternate" type="application/rss+xml" title="Gerino (GNC) &raquo; Feed" href="https://gerinocoin.io/" />
<link rel="alternate" type="application/rss+xml" title="Gerino (GNC) &raquo; Comments Feed" href="https://gerinocoin.io/" />
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-5SCNBLN');</script>
<!-- End Google Tag Manager -->


<script type="text/javascript" src="js/jquery.min.js"></script>
</head>
<body>
  <!-- Google Tag Manager (noscript) -->
<noscript>
<iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5SCNBLN"
height="0" width="0" style="display:none;visibility:hidden"></iframe>
</noscript>
<!-- End Google Tag Manager (noscript) -->

<div class="top-section whiteText">
  
  <?php include('header.php');?>

  <div class="banner">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="banner-content">
            <h1><span>GERINO Crypto </span>Trading Protocol</h1>
            <p>The first ever trading protocol featuring Zero Loss on<br>
              Algorithmic trading.</p>
            <div class="btn-box"> <a class="btn" href="https://gerinocoin.io/public/login">Buy Now</a> <a class="btn-transparent" href="https://gitbookwhitepaper.gitbook.io/gnc-whitepaper">Whitepaper<img alt="arrow" src="images/right-arrow.webp"></a></div>
            <div class="timer">
              <p>ICO Sale Phase 1<sup>st</sup> is <span>Live</span></p>
              <div id="countdown">
                <div class="cd-box">
                  <p class="numbers days">29</p>
                  <p class="strings timeRefDays">Days</p>
                </div>
                <div class="cd-box">
                  <p class="numbers hours">01</p>
                  <p class="strings timeRefHours">Hours</p>
                </div>
                <div class="cd-box">
                  <p class="numbers minutes">01</p>
                  <p class="strings timeRefMinutes">Minutes</p>
                </div>
                <div class="cd-box">
                  <p class="numbers seconds">01</p>
                  <p class="strings timeRefSeconds">Seconds</p>
                </div>
              </div>
            </div>
            <div class="head-social"> <a href="https://www.facebook.com/people/Gerino-Coin/100083066092270/"><i class="fa fa-facebook-square" aria-hidden="true"></i></a> <a href="https://twitter.com/gerino_coin"><i class="fa fa-twitter-square" aria-hidden="true"></i></a> <a href="https://www.instagram.com/gerinocoin/"><i class="fa fa-instagram" aria-hidden="true"></i></a> <a href="https://www.reddit.com/r/gerino/"><i class="fa fa-reddit-square" aria-hidden="true"></i></a> <a href="https://www.linkedin.com/company/gerino-coin/"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a> <a href="https://medium.com/@gerino_coin"><i class="fa fa-medium" aria-hidden="true"></i></a> <a href="https://t.me/gerinocoin"><i class="fa fa-telegram" aria-hidden="true"></i></a> <a href="https://www.youtube.com/channel/UCw7vmzw8NDM34DHB-SrY7Tg"><i class="fa fa-youtube-square" aria-hidden="true"></i></a> <a href="https://t.me/gerino_coin"><i class="fa fa-telegram" aria-hidden="true"></i></a> <a href="https://discord.com/invite/xCVDGKAkZb"><img src="images/discord-icon.webp" alt="icon"></a> </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="banner-img"> <img src="images/banner-img.webp" alt="img" class="img-fluid"> </div>
        </div>
      </div>
    </div>
  </div>
  <img src="images/banner-bg.webp" alt="bg" class="img-fluid banner-bg">
  <div id="particles-js"></div>
</div>
<section class="exchange-sec section">
  <div class="container">
    <div class="section-heading">
      <h2>Exchange <span>Coming Soon</span></h2>
    </div>
    <div class="row">
      <div class="col-sm-12">
        <div class="exchagne-logo">
          <div class="exchagne-logo-img"> <img src="images/exchange1.webp" alt="exchange-logo"> </div>
          <div class="exchagne-logo-img"> <img src="images/exchange2.webp" alt="exchange-logo"> </div>
          <div class="exchagne-logo-img"> <img src="images/exchange3.webp" alt="exchange-logo"> </div>
          <div class="exchagne-logo-img"> <img src="images/exchange4.webp" alt="exchange-logo"> </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section id="ICO" class="ico-launchpad section">
  <div class="container">
    <div class="section-heading">
      <h5>Gerino ICO</h5>
      <h2>ICO <span>Launchpad</span></h2>
    </div>
    <div class="launchpad-slider owl-carousel owl-theme">
      <div class="launchpad-box active item">
        <h3>Phase 1 <img src="images/right-icon.webp" alt="icon"></h3>
        <ul class="date">
          <li>
            <p>Start Date</p>
            <p>10<sup>th</sup> Jan 2023</p>
          </li>
          <li>
            <p>End Date</p>
            <p>10<sup>th</sup> Feb 2023</p>
          </li>
        </ul>
        <ul class="phase-details">
          <li><span>Supply :</span><span>30M GNC</span></li>
          <li><span>Price :</span><span>$0.01</span></li>
          <li><span>Deposit Bonus :</span><span>10%</span></li>
          <li><span>Referral Bonus :</span><span>10%</span></li>
          <li><span>Status :</span><span>Running</span></li>
        </ul>
      </div>
      <div class="launchpad-box item">
        <h3>Phase 2</h3>
        <ul class="date">
          <li>
            <p>Start Date</p>
            <p>10<sup>th</sup> Feb 2023</p>
          </li>
          <li>
            <p>End Date</p>
            <p>10<sup>th</sup> Mar 2023</p>
          </li>
        </ul>
        <ul class="phase-details">
          <li><span>Supply :</span><span>40M GNC </span></li>
          <li><span>Price :</span><span>$0.02</span></li>
          <li><span>Deposit Bonus :</span><span>10%</span></li>
          <li><span>Referral Bonus :</span><span>10%</span></li>
          <li><span>Status :</span><span>Pending</span></li>
        </ul>
      </div>
      <div class="launchpad-box item">
        <h3>Phase 3</h3>
        <ul class="date">
          <li>
            <p>Start Date</p>
            <p>10<sup>th</sup> Mar 2023</p>
          </li>
          <li>
            <p>End Date</p>
            <p>10<sup>th</sup> Apr 2023</p>
          </li>
        </ul>
        <ul class="phase-details">
          <li><span>Supply :</span><span>50M GNC</span></li>
          <li><span>Price :</span><span>$0.03</span></li>
          <li><span>Deposit Bonus :</span><span>10%</span></li>
          <li><span>Referral Bonus :</span><span>10%</span></li>
          <li><span>Status :</span><span>Pending</span></li>
        </ul>
      </div>
      <div class="launchpad-box item">
        <h3>Phase 4</h3>
        <ul class="date">
          <li>
            <p>Start Date</p>
            <p>10<sup>th</sup> Apr 2023</p>
          </li>
          <li>
            <p>End Date</p>
            <p>10<sup>th</sup> May 2023</p>
          </li>
        </ul>
        <ul class="phase-details">
          <li><span>Supply :</span><span>60M GNC</span></li>
          <li><span>Price :</span><span>$0.04</span></li>
          <li><span>Deposit Bonus :</span><span>10%</span></li>
          <li><span>Referral Bonus :</span><span>10%</span></li>
          <li><span>Status :</span><span>Pending</span></li>
        </ul>
      </div>
      <div class="launchpad-box item">
        <h3>Phase 5</h3>
        <ul class="date">
          <li>
            <p>Start Date</p>
            <p>10<sup>th</sup> May 2023</p>
          </li>
          <li>
            <p>End Date</p>
            <p>10<sup>th</sup> Jun 2023</p>
          </li>
        </ul>
        <ul class="phase-details">
          <li><span>Supply :</span><span>70M GNC</span></li>
          <li><span>Price :</span><span>$0.05</span></li>
          <li><span>Deposit Bonus :</span><span>10%</span></li>
          <li><span>Referral Bonus :</span><span>10%</span></li>
          <li><span>Status :</span><span>Pending</span></li>
        </ul>
      </div>
      <div class="launchpad-box item">
        <h3>Phase 6</h3>
        <ul class="date">
          <li>
            <p>Start Date</p>
            <p>10<sup>th</sup> June 2023</p>
          </li>
          <li>
            <p>End Date</p>
            <p>10<sup>th</sup> July 2023</p>
          </li>
        </ul>
        <ul class="phase-details">
          <li><span>Supply :</span><span>80M GNC</span></li>
          <li><span>Price :</span><span>$0.06</span></li>
          <li><span>Deposit Bonus :</span><span>10%</span></li>
          <li><span>Referral Bonus :</span><span>10%</span></li>
          <li><span>Status :</span><span>Pending</span></li>
        </ul>
      </div>
      <div class="launchpad-box item">
        <h3>Phase 7</h3>
        <ul class="date">
          <li>
            <p>Start Date</p>
            <p>10<sup>th</sup> July 2023</p>
          </li>
          <li>
            <p>End Date</p>
            <p>10<sup>th</sup> Aug 2023</p>
          </li>
        </ul>
        <ul class="phase-details">
          <li><span>Supply :</span><span>90M GNC</span></li>
          <li><span>Price :</span><span>$0.08</span></li>
          <li><span>Deposit Bonus :</span><span>10%</span></li>
          <li><span>Referral Bonus :</span><span>10%</span></li>
          <li><span>Status :</span><span>Pending</span></li>
        </ul>
      </div>
      <div class="launchpad-box item">
        <h3>Phase 8</h3>
        <ul class="date">
          <li>
            <p>Start Date</p>
            <p>10<sup>th</sup> Aug 2023</p>
          </li>
          <li>
            <p>End Date</p>
            <p>10<sup>th</sup> Sept 2023</p>
          </li>
        </ul>
        <ul class="phase-details">
          <li><span>Supply :</span><span>100M GNC</span></li>
          <li><span>Price :</span><span>$0.10</span></li>
          <li><span>Deposit Bonus :</span><span>10%</span></li>
          <li><span>Referral Bonus :</span><span>10%</span></li>
          <li><span>Status :</span><span>Pending</span></li>
        </ul>
      </div>
    </div>
    <div class="btn-box justify-content-center mt-lg-4"> <a class="btn" href="https://gerinocoin.io/public/login">Buy Now</a> <a class="btn-transparent" href="https://gitbookwhitepaper.gitbook.io/gnc-whitepaper"> Whitepaper <img alt="arrow" src="images/right-arrow.webp"></a> </div>
  </div>
</section>
<section class="traders_section section">
  <div class="container">
    <div class="section-heading">
      <h2>GERINO In <span>the News</span></h2>
    </div>
    <div class="row">
      <div class="col-sm-12">
        <div class="poweredby-slider owl-carousel owl-theme">
          <div class="poweredby item">
            <div class="poweredby-logo-img"> <img src="images/traders-beincrypto.svg" alt="exchange-logo"> </div>
          </div>
          <div class="poweredby item">
            <div class="poweredby-logo-img"> <img src="images/traders-benzinga-std.svg" alt="exchange-logo"> </div>
          </div>
          <div class="poweredby item">
            <div class="poweredby-logo-img"> <img src="images/traders-bitcoinist-std.svg" alt="exchange-logo"> </div>
          </div>
          <div class="poweredby item">
            <div class="poweredby-logo-img"> <img src="images/traders-bloomberg-std.svg" alt="exchange-logo"> </div>
          </div>
          <div class="poweredby item">
            <div class="poweredby-logo-img"> <img src="images/traders-btc-echo-std.svg" alt="exchange-logo"> </div>
          </div>
          <div class="poweredby item">
            <div class="poweredby-logo-img"> <img src="images/traders-bitcoinist-std.svg" alt="exchange-logo"> </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="table_dashboard_section section">
  <div class="container">
    <div class="section-heading">
      <h2>Why Traders Prefer the <span> GERINO Dashboard </span></h2>
    </div>
    <div class="row">
      <div class="col-sm-12">
        <div class="traders-table responisve-table">
          <div class="traders_Choice">
            <p>Traders Choice</p>
          </div>
          <table>
            <tbody>
              <tr>
                <th>&nbsp;</th>
                <th> <div class="tablehead_logo"><img src="images/table1.svg" alt="Trade logo" /></div>
                </th>
                <th> <div class="tablehead_logo"><img src="images/table2.svg" alt="Trade logo" /></div>
                </th>
                <th> <div class="tablehead_logo"><img src="images/table3.svg" alt="Trade logo" /></div>
                </th>
                <th> <div class="tablehead_logo"><img src="images/table4.svg" alt="Trade logo" /></div>
                </th>
                <th> <div class="tablehead_logo"><img src="images/table5.svg" alt="Trade logo" /></div>
                </th>
                <th> <div class="tablehead_logo"><img src="images/table6.svg" alt="Trade logo" /></div>
                </th>
              </tr>
              <tr>
                <td>Zero Loss Trading</td>
                <td><div class="Rightcheck"><i class="fa fa-check"></i></div></td>
                <td><div class="Wrongclose"><i class="fa fa-close"></i></div></td>
                <td><div class="Wrongclose"><i class="fa fa-close"></i></div></td>
                <td><div class="Rightcheck"><i class="fa fa-check"></i></div></td>
                <td><div class="Wrongclose"><i class="fa fa-close"></i></div></td>
                <td><div class="Wrongclose"><i class="fa fa-close"></i></div></td>
              </tr>
              <tr>
                <td>Profit Booster</td>
                <td><div class="Rightcheck"><i class="fa fa-check"></i></div></td>
                <td><div class="Wrongclose"><i class="fa fa-close"></i></div></td>
                <td><div class="Rightcheck"><i class="fa fa-check"></i></div></td>
                <td><div class="Wrongclose"><i class="fa fa-close"></i></div></td>
                <td><div class="Rightcheck"><i class="fa fa-check"></i></div></td>
                <td><div class="Wrongclose"><i class="fa fa-close"></i></div></td>
              </tr>
              <tr>
                <td>Burning System</td>
                <td><div class="Rightcheck"><i class="fa fa-check"></i></div></td>
                <td><div class="Wrongclose"><i class="fa fa-close"></i></div></td>
                <td><div class="Wrongclose"><i class="fa fa-close"></i></div></td>
                <td><div class="Rightcheck"><i class="fa fa-check"></i></div></td>
                <td><div class="Wrongclose"><i class="fa fa-close"></i></div></td>
                <td><div class="Wrongclose"><i class="fa fa-close"></i></div></td>
              </tr>
              <tr>
                <td>Smart Treasury </td>
                <td><div class="Rightcheck"><i class="fa fa-check"></i></div></td>
                <td><div class="Wrongclose"><i class="fa fa-close"></i></div></td>
                <td><div class="Wrongclose"><i class="fa fa-close"></i></div></td>
                <td><div class="Rightcheck"><i class="fa fa-check"></i></div></td>
                <td><div class="Wrongclose"><i class="fa fa-close"></i></div></td>
                <td><div class="Wrongclose"><i class="fa fa-close"></i></div></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="Toeken_contract-sec section">
  <div class="container">
    <div class="section-heading">
      <h2>GERINO <span>Token Contract</span></h2>
      <p>Use the contract information below to add the GERINO token to your wallet.</p>
    </div>
    <div class="row bg_lightblue">
      <div class="col-sm-6">
        <div class="tokencontract">
          <h4>Address</h4>
          <p>0x609A16a6521864Aa1Cb2243CaFA18ef39CbD1819</p>
        </div>
      </div>
      <div class="col-sm-2">
        <div class="tokencontract">
          <h4>Decimal</h4>
          <p>18</p>
        </div>
      </div>
      <div class="col-sm-2">
        <div class="tokencontract">
          <h4>Network</h4>
          <p>Binance</p>
        </div>
      </div>
      <div class="col-sm-2">
        <div class="tokencontract">
          <h4>Token Symbol</h4>
          <p>GNC (GERINO)</p>
        </div>
      </div>
    </div>
  </div>
</section>
<!--<section class="feature-sec section">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 col-md-6 col-lg-3 ">
        <div class="feature-box"> <img src="images/feature-icon1.webp" alt="img">
          <h4>Zero Loss Trading</h4>
          <p>Our Model Traders Help Users to Get Their Initial Investment Back. So Trade Without Worrying About Losses.</p>
        </div>
      </div>
      <div class="col-sm-12 col-md-6 col-lg-3">
        <div class="feature-box"> <img src="images/feature-icon2.webp" alt="img">
          <h4>Profit Booster</h4>
          <p>Unique alogorithemic trade system that offers users fair and balanced features to boost thier trading profit </p>
        </div>
      </div>
      <div class="col-sm-12 col-md-6 col-lg-3">
        <div class="feature-box"> <img src="images/feature-icon2.webp" alt="img">
          <h4>Burning System</h4>
          <p>The first rebase token with an integrated burning mechanism </p>
        </div>
      </div>
      <div class="col-sm-12 col-md-6 col-lg-3">
        <div class="feature-box"> <img src="images/feature-icon4.webp" alt="img">
          <h4>Smart Treasury </h4>
          <p>Our smart treasury grows gradually with each trade.</p>
        </div>
      </div>
    </div>
  </div>
</section>-->
<section id="Usecase" class="platform-sec section">
  <div class="container">
   <div class="section-heading">
      <h5>Additional</h5>
      <h2>Gerino <span>Use Case</span></h2>
    </div>
    <div class="row">
      <div class="col-sm-6 tablat_device-platform">
        <a href="https://gerinocoin.io/gamefi.php" target="_blank">
        <div class="platform-box">
          <div class="platform-img"> <img src="images/feature-icon2.webp" alt="img"> </div>
          <div class="platform-content">
            <h4>GameFi</h4>
            <p>Gerino ecosystem is an all-encompassing hub for the NFT gaming, serving game studios, players, traders... </p>
          </div>
          <img src="images/forward.webp" alt="forward"></div>
        </a>
      </div>  
      <div class="col-sm-6 tablat_device-platform">
        <a href="https://gerinocoin.io/blockchain-as-a-service.php" target="_blank">
        <div class="platform-box">
          <div class="platform-img"> <img src="images/feature-icon3.webp" alt="img"> </div>
          <div class="platform-content">
            <h4>Blockchain as a Service</h4>
            <p>Gerino’s BAAS is an easy-to-use platform that simplifies the process of building and managing blockchain-based...</p>
          </div>
          <img src="images/forward.webp" alt="forward"></div>
        </a>
       </div>
       <div class="col-sm-6 tablat_device-platform"> 
        <a href="https://gerinocoin.io/nft.php" target="_blank">
        <div class="platform-box">
          <div class="platform-img"> <img src="images/feature-icon5.webp" alt="img"> </div>
          <div class="platform-content">
            <h4>NFT</h4>
            <p>Gerino is creating a platform for NFT communities to connect, share stories, and collaboratively build their history...</p>
          </div>
          <img src="images/forward.webp" alt="forward"></div>
        </a>
        </div>
        <div class="col-sm-6 tablat_device-platform">
        <a href="https://gerinocoin.io/defi-ecommerce.php" target="_blank">
        <div class="platform-box">
          <div class="platform-img"> <img src="images/feature-icon6.webp" alt="img"> </div>
          <div class="platform-content">
            <h4>DEFI & E-commerce</h4>
            <p>A GNC token controls Defito Ecosystem. Defi GNC is a decentralized finance (Defi) platform with the goal of providing... </p>
          </div>
          <img src="images/forward.webp" alt="forward"></div>
        </a>
        </div>
    </div>
   </div>
</section>
<section class="platform-sec section">
  <div class="container">
   <div class="section-heading">
      <h5>Welcome to Gerino (GNC)</h5>
      <h2>We introduce Our <span>Future Platform</span></h2>
    </div>
    <div class="row">
      <div class="col-sm-12 platform-title-center">
        <iframe width="100%" height="450" src="https://www.youtube.com/embed/94uM54GZfbQ" title="Intro- GERINO (GNC) Crypto Trading Protocol Featuring Zero Loss on Algorithmic trading" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
      </div> </div>
   </div>
</section>
<section class="metaverse-section section">
  <div class="container">
    <div class="row align-items-end">
      <div class="col-lg-7">
        <div class="metaverse-content">
          <h2>GERINO Metaverse <span>& Web 3.0</span></h2>
          <div class="metaverse-slider owl-carousel owl-theme">
            <div class="mtaverse-box item">
              <p>Determine the future of the virtual world The first fully decentralized world, Gerino is controlled via the DAO, which owns the most important smart contracts and assets of Gerino. Via the DAO, you decide and vote on how the world works.</p>
            </div>
            <div class="mtaverse-box item">
              <p>The virtual destination for digital assets The Gerino is a community-driven platform where creators can monetize voxel ASSETS and gaming experiences on the blockchain. The Gerino is a virtual Metaverse where players can play, trade, build, own, and monetize their virtual experiences. </p>
            </div>
            <div class="mtaverse-box item">
              <p>What about Gerino? GNC has already been fully decentralized, in the sense that the private key that controlled its smart contract has been thrown away. GNC is a decentralized virtual currency based on the BEP20 Token one of binance Technological trends. The goal of this blockchain asset is to supplement the development of Gerino Ecosystem. </p>
            </div>
            <div class="mtaverse-box item">
              <p>An open-source protocol built for everyone Gerino is an open-source project founded by the Web3 Foundation. Web3 Foundation has commissioned five teams and over 100 developers to build Gerino.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-5">
        <div class="mtaverse-img"> <img src="images/mtaverse-img.webp" alt="img"> </div>
      </div>
    </div>
  </div>
</section>
<section class="roadmap-sec section">
  <div class="container">
    <div class="section-heading">
      <h2>Roadmap</h2>
    </div>
    <div class="roadmaap-main">
      <div class="roadmap-line"><span style="height: 52%;"></span></div>
      <div class="roadmap-item">
        <div class="roadmap_content"> <span class="roadmap_quater">Q2 2021</span>
          <h4>Concept</h4>
          <p>Concept, Design &amp; Research</p>
        </div>
      </div>
      <div class="roadmap-item">
        <div class="roadmap_content"> <span class="roadmap_quater">Q3 2021</span>
          <h4>Analysis</h4>
          <p>Analysis oftraditional copy trading platforms.</p>
        </div>
      </div>
      <div class="roadmap-item">
        <div class="roadmap_content"> <span class="roadmap_quater">Q4 2021</span>
          <h4>Foreign Reasearch</h4>
          <p>Foreign research Growth projections.</p>
        </div>
      </div>
      <div class="roadmap-item">
        <div class="roadmap_content"> <span class="roadmap_quater">Q1 2022</span>
          <h4>Team</h4>
          <p>Team formation.</p>
        </div>
      </div>
      <div class="roadmap-item">
        <div class="roadmap_content"> <span class="roadmap_quater">Q2 2022</span>
          <h4>Promotional Meetup</h4>
          <p>Held a meet-up with 60+ private crypto currency traders and investors.</p>
          <p>Clearly visible demand for a p2p asset platform with mirror-trading functionality</p>
        </div>
      </div>
      <div class="roadmap-item">
        <div class="roadmap_content"> <span class="roadmap_quater">Q3 2022</span>
          <h4>Development &amp; Design </h4>
          <p>Landing page and white paper disclosed</p>
          <p>Pre-ICO begins for a limited number of contributors</p>
          <p>Prototype published and linked to Ethereum blockchain with real-time scanning</p>
          <p>Prototype version of the platform released.</p>
          <p></p>
        </div>
      </div>
      <div class="roadmap-item">
        <div class="roadmap_content"> <span class="roadmap_quater">Q4 2022</span>
          <h4>Public ICO</h4>
          <p>Public ICO begin.</p>
        </div>
      </div>
      <div class="roadmap-item blue-pending">
        <div class="roadmap_content"> <span class="roadmap_quater">Q2 2023</span>
          <h4>Development</h4>
          <p>Further front-end and backend development</p>
          <p>API testing.</p>
          <p>Test mirror-trades executed.</p>
          <p>Latency test.</p>
          <p>Liquidity aggregator setup.</p>
          <p>Latency test.</p>
          <p>Liquidity aggregator setup.</p>
          <p>Lisitng on big echanges like Binance, Kucoin , Gate.io , Huobi Global, p2p b2b listing of GNCToken.</p>
          <p>Beta version launch.</p>
        </div>
      </div>
      <div class="roadmap-item blue-pending">
        <div class="roadmap_content"> <span class="roadmap_quater">Q3 2023</span>
          <h4>Updates &amp; Development</h4>
          <p>Platform improvements.</p>
          <p>Mobile App development.</p>
          <p>Final (Production) Beta version of GERINO Cryptocurrency Trading Platform.</p>
          <p>DLT license.</p>
        </div>
      </div>
      <div class="roadmap-item blue-pending">
        <div class="roadmap_content"> <span class="roadmap_quater">Q4 2023</span>
          <h4>Release &amp; Future work</h4>
          <p>Official platform release</p>
          <p>Gerino Platform will grow with more then 500,000 active users</p>
          <p>$500M USD + Combined</p>
          <p>Start Algorithmic trading and arbitrage.</p>
          <p>Bots will be available on the platform.</p>
          <p>User acquisition globally</p>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="system-section section">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 col-md-8 col-lg-7">
        <div class="system-img"> <img src="images/system-img.webp" alt="img" class="img-fluid"> </div>
      </div>
      <div class="col-sm-12 col-md-12 col-lg-5">
        <div class="system-content">
          <div class="system-slider owl-carousel owl-theme">
            <div class="system-box item">
              <h2>GERINO <span>System</span></h2>
              <span class="seprate"></span>
              <p>At GERINO we aim to develop an easy to use, secure and efficient solution for both investors and traders. GERINO will deliver the most user-friendly, yet advanced peer-2-peer digital asset platform . Below, we provide concept specifications of the platform as well as a brief explanation of the core features.</p>
            </div>
            <div class="system-box item">
              <h2>One-Stop <span>Solution</span></h2>
              <span class="seprate"></span>
              <p>At GERINO, we aim to produce a one-stop solution for cryptocurrency traders and investors . Since the infrastructure of GERINO is being built by investment industry professionals - importance of timely market data has not been overlooked Apart from a one of a kind peer-2-peer digital asset platform, we aim to introduce the largest resource for education, news, trade ideas and market analysis about the cryptocurrency market. We call it – Crypto Intelligence.</p>
            </div>
            <div class="system-box item">
              <h2>Liquidity <span>Aggregation </span></h2>
              <span class="seprate"></span>
              <p>By aggregating liquidity from the leading exchanges – GERINO creates a huge opportunity for market making, hedging and offering an aggregated order book from combined quotes of multiple exchanges.</p>
              <p>There is currently no centralized exchange and cryptocurrency market development is still in its infancy– there are huge inefficiencies which provide ample opportunities for arbitrage and HFT . Such liquidity provides great opportunities to establish new products such as Vanilla options or Binary options as well as other derivatives in the future.</p>
            </div>
            <div class="system-box item">
              <h2>Profit <span>Sharing</span></h2>
              <span class="seprate"></span>
              <p>In case a trading Model resulted in profits for the investor-follower, income distribution will look like this:</p>
              <strong>Success Fee</strong>
              <p>Model Traders are rewarded with 15% success fees from all profits generated by their followers, the platform commission is 10%, while investors receive the remaining 75% of income, which is available for immediate withdrawal or reinvesting.</p>
              <strong>Platform Commission</strong>
              <p>Platform commissions of 10% will later be used for systematic buyback and burn programs.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="trader-section section">
  <div class="container">
    <div class="section-heading">
      <h5>With the GERINO</h5>
      <h2>Trading Terminal <span>Each Trader Can</span></h2>
    </div>
    <div class="row">
      <div class="col-sm-12 col-md-6 col-lg-4">
        <div class="trader-box wow fadeInDown" data-wow-delay="0.2s"> <img src="images/trader1.webp" alt="icon">
          <div class="trader-content">
            <h6>Widest selection </h6>
            <p>Trade the widest selection of cryptocurrencies</p>
          </div>
        </div>
      </div>
      <div class="col-sm-12 col-md-6 col-lg-4">
        <div class="trader-box wow fadeInDown" data-wow-delay="0.2s"> <img src="images/trader2.webp" alt="icon">
          <div class="trader-content">
            <h6>Access quotes</h6>
            <p>Access quotes from top exchanges through a single account (combined market depth)</p>
          </div>
        </div>
      </div>
      <div class="col-sm-12 col-md-6 col-lg-4">
        <div class="trader-box wow fadeInDown" data-wow-delay="0.2s"> <img src="images/trader3.webp" alt="icon">
          <div class="trader-content">
            <h6>Benefit</h6>
            <p>Benefit from quick and responsive execution, tight spreads and a deep order book</p>
          </div>
        </div>
      </div>
      <div class="col-sm-12 col-md-6 col-lg-4">
        <div class="trader-box wow fadeInDown" data-wow-delay="0.2s"> <img src="images/trader4.webp" alt="icon">
          <div class="trader-content">
            <h6>Crypto information</h6>
            <p>Access to all necessary information about crypto</p>
          </div>
        </div>
      </div>
      <div class="col-sm-12 col-md-6 col-lg-4">
        <div class="trader-box wow fadeInDown" data-wow-delay="0.2s"> <img src="images/trader5.webp" alt="icon">
          <div class="trader-content">
            <h6>Advanced charting</h6>
            <p>Access to the most advanced charting software</p>
          </div>
        </div>
      </div>
      <div class="col-sm-12 col-md-6 col-lg-4">
        <div class="trader-box wow fadeInDown" data-wow-delay="0.2s"> <img src="images/trader6.webp" alt="icon">
          <div class="trader-content">
            <h6>Data Analysis</h6>
            <p>Access to market sentiment, data and analysis – similar to COT on futures </p>
          </div>
        </div>
      </div>
      <div class="col-sm-12 col-md-6 col-lg-4">
        <div class="trader-box wow fadeInDown" data-wow-delay="0.2s"> <img src="images/trader7.webp" alt="icon">
          <div class="trader-content">
            <h6>Earn fees</h6>
            <p>Earn success fees apart from trading profits by allowing investors to copy trades, through the p2p asset platform </p>
          </div>
        </div>
      </div>
      <div class="col-sm-12 col-md-6 col-lg-4">
        <div class="trader-box wow fadeInDown" data-wow-delay="0.2s"> <img src="images/trader8.webp" alt="icon">
          <div class="trader-content">
            <h6>Build trading career</h6>
            <p>Build a full-scale trading career within one single platform</p>
          </div>
        </div>
      </div>
      <div class="col-sm-12 col-md-6 col-lg-4">
        <div class="trader-box wow fadeInDown" data-wow-delay="0.2s"> <img src="images/trader9.webp" alt="icon">
          <div class="trader-content">
            <h6>Generate financial reports</h6>
            <p>Generate detailed financial reports which will be aligned with regulations </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="presalte-sec section ">
  <div class="container">
    <div class="section-heading">
      <h5>Funding Allocation</h5>
      <h2>Presale <span>Details</span></h2>
    </div>
    <div class="row presale-box align-items-center">
      <div class="col-sm-6 text-center wow rollIn"> <img class="img-fluid" src="images/gnc-graph.webp" alt="#"> </div>
      <div class="col-sm-6">
        <div class="presale-data c-red wow fadeInDown" data-wow-delay="0.2s">
          <h6>ICO Sale : 90%</h6>
          <span class="pre-bar"><span class="pre-bar-data" style="width:90%;"></span></span> </div>
        <div class="presale-data c-yellow wow fadeInDown" data-wow-delay="0.4s">
          <h6>Reserve : 5%</h6>
          <span class="pre-bar"><span class="pre-bar-data" style="width:5%;"></span></span> </div>
        <div class="presale-data c-orange wow fadeInDown" data-wow-delay="0.6s">
          <h6>PRE-ICO Sale : 2%</h6>
          <span class="pre-bar"><span class="pre-bar-data" style="width:2%;"></span></span> </div>
        <div class="presale-data c-purple wow fadeInDown" data-wow-delay="0.8s">
          <h6>Future Platorm Development : 1%</h6>
          <span class="pre-bar"><span class="pre-bar-data" style="width:1%;"></span></span> </div>
        <div class="presale-data c-blue wow fadeInDown" data-wow-delay="1s">
          <h6>Bonus : 1%</h6>
          <span class="pre-bar"><span class="pre-bar-data" style="width:1%;"></span></span> </div>
        <div class="presale-data c-green wow fadeInDown" data-wow-delay="1.2s">
          <h6>Advisor : 1%</h6>
          <span class="pre-bar"><span class="pre-bar-data" style="width:1%;"></span></span> </div>
      </div>
    </div>
  </div>
  <div id="contactus"></div>
</section>
<section class="team-sec section">
  <div class="container">
    <div class="section-heading">
      <h2>Md <span>&amp; Team</span></h2>
    </div>
    <div class="row">
      <div class="col-sm-6 col-md-4 col-lg-4  wow fadeInDown" data-wow-delay="0.2s">
        <div class="team-box"> <i><a href="https://www.linkedin.com/company/scopway-business-pvt-ltd/"><img src="images/linkdin.webp" alt="img"></a></i> <img src="images/alok4.webp" alt="img">
          <h3>Alok pandey</h3>
          <h5>CEO</h5>
        </div>
      </div>
      <div class="col-sm-6 col-md-4 col-lg-4  wow fadeInDown" data-wow-delay="0.4s">
        <div class="team-box"> <i><a href="https://www.linkedin.com/in/yogesh-borad-77737b174"><img src="images/linkdin.webp" alt="img"></a></i> <img src="images/yogesh.webp" alt="img">
          <h3>Yogesh borad</h3>
          <h5>IT administrator</h5>
        </div>
      </div>
      <div class="col-sm-6 col-md-4 col-lg-4  wow fadeInDown" data-wow-delay="0.6s">
        <div class="team-box"> <i><a href=""><img src="images/linkdin.webp" alt="img"></a></i> <img src="images/ankit.webp" alt="img">
          <h3>Ankit Sharma</h3>
          <h5>CTO</h5>
        </div>
      </div>
      <div class="col-sm-6 col-md-4 col-lg-4  wow fadeInDown" data-wow-delay="0.8s">
        <div class="team-box"> <i><a href="https://www.linkedin.com/company/scopway-business-pvt-ltd/"><img src="images/linkdin.webp" alt="img"></a></i> <img src="images/patel.webp" alt="img">
          <h3>RB Patel</h3>
          <h5>crypto advisory</h5>
        </div>
      </div>
      <div class="col-sm-6 col-md-4 col-lg-4  wow fadeInDown" data-wow-delay="1s">
        <div class="team-box"> <i><a href="https://www.linkedin.com/company/scopway-business-pvt-ltd/"><img src="images/linkdin.webp" alt="img"></a></i> <img src="images/scopway.webp" alt="img">
          <h3>Scopway Business Private Limited</h3>
          <h5>Founding Company</h5>
        </div>
      </div>
      <div class="col-sm-6 col-md-4 col-lg-4  wow fadeInDown" data-wow-delay="1s">
        <div class="team-box"> <i><a href="https://www.linkedin.com/company/sag-ipl/people/"><img src="images/linkdin.webp" alt="img"></a></i> <img src="images/sag.webp" alt="img">
          <h3>SAG IPL</h3>
          <h5>Marketing Company</h5>
        </div>
      </div>
    </div>
  </div>
</section>
<section id="Contactus" class="airdrop-sec section">
  <div class="container">
    <div class="row align-items-end">
      <div class="col-sm-12 col-md-6	col-lg-6 wow fadeInRight">
        <div class="contact-box">
          <h2>Contact <span>US</span></h2>
          <?php echo((!empty($errorMessage)) ? $errorMessage : '') ?>
          <p style="color: red;"></p>
          <form method="post" id="contact-form">
            <div class="form-group">
              <label for="exampleInputEmail1">Your Name: </label>
              <input name="name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Name">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Your Email: </label>
              <input name="email" type="email" class="form-control" id="exampleInputPassword1" placeholder="Enter Email">
            </div>
            <div class="form-group">
              <label for="exampleFormControlTextarea1">Message: </label>
              <textarea name="message" class="form-control" id="exampleFormControlTextarea1" placeholder="Message" rows="3"></textarea>
            </div>
            <button type="submit" class="btn dark-btm">Submit</button>
          </form>
        </div>
      </div>
      <div class="col-sm-12 col-md-6 col-lg-6 text-center wow fadeInLeft mobileHide"> <img class="img-fluid" src="images/contact-us.webp" alt="img"> </div>
    </div>
  </div>
</section>
<section class="exchange-sec section">
  <div class="container">
    <div class="section-heading">
      <h2>Powered <span>By</span></h2>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="poweredby-bottam-logo">
          <div class="PB_bottam_logoimg"> <img src="images/pow_white1.svg" alt="logo"> </div>
          <div class="PB_bottam_logoimg"> <img src="images/pow_white2.svg" alt="logo"> </div>
          <div class="PB_bottam_logoimg"> <img src="images/pow_white3.svg" alt="logo"> </div>
          <div class="PB_bottam_logoimg"> <img src="images/pow_white4.svg" alt="logo"> </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="faq-sec section-pad blue-section">
  <div class="container">
    <div class="section-heading ">
      <h2>Frequently Asked <span>Questions</span></h2>
      <p>Here we are listing a few FAQs people often ask our team. </p>
    </div>
    <div class="row">
      <div class="col-lg-12 col-sm-12 wow fadeInRight ">
        <div id="accordion">
          <div class="card">
            <div id="headingOne" class="card-header">
              <h5 class="mb-0"> <a aria-controls="collapseOne" aria-expanded="true" data-target="#collapseOne" data-toggle="collapse" class="btnn btn-link"> What is Gerino?<i class="plus-icon"></i> </a> </h5>
            </div>
            <div data-parent="#accordion" aria-labelledby="headingOne" class="collapse show" id="collapseOne" style="">
              <div class="card-body">Gerino is a crypto trading protocol, the first ever trading protocol to feature Zero Loss on trading. The Zero Loss Trading feature is a great option for traders who want to recover their losses. This feature can help you recover your losses with the help of experienced traders, so you can learn as well as trade with confidence.  </div>
            </div>
          </div>
          <div class="card">
            <div id="headingtwo" class="card-header">
              <h5 class="mb-0"> <a aria-controls="collapseOne" aria-expanded="false" data-target="#collapsetwo" data-toggle="collapse" class="btnn btn-link collapsed"> How can I invest in Gerino?<i class="plus-icon"></i> </a> </h5>
            </div>
            <div data-parent="#accordion" aria-labelledby="headingtwo" class="collapse" id="collapsetwo" style="">
              <div class="card-body">Gerino Coin (GNC) ICO will be held in 2022-23 in 8 phases (as described on the website). The price of the GNC will be the lowest during the phase 1 sale. Anyone can join the GNC ICO sale to invest in the Gerino coin and platform. All investors can also get a 10% deposit bonus and an additional 10% referral bonus.</div>
            </div>
          </div>
          <div class="card">
            <div id="headingthree" class="card-header">
              <h5 class="mb-0"> <a aria-controls="collapseOne" aria-expanded="false" data-target="#collapsethree" data-toggle="collapse" class="btnn btn-link collapsed"> How long does it take for my GNC to be added to my account?<i class="plus-icon"></i> </a> </h5>
            </div>
            <div data-parent="#accordion" aria-labelledby="headingthree" class="collapse" id="collapsethree" style="">
              <div class="card-body">Gerino coin purchased during the ICO will be credited to your account after payment confirmation. If you are purchasing GNC from the market or a third-party exchange, the same should be credited to your account instantly after purchase.</div>
            </div>
          </div>
          <div class="card">
            <div id="headingfour" class="card-header">
              <h5 class="mb-0"> <a aria-controls="collapseOne" aria-expanded="false" data-target="#collapsefour" data-toggle="collapse" class="btnn btn-link collapsed"> What is the Zero Loss trading feature?<i class="plus-icon"></i> </a> </h5>
            </div>
            <div data-parent="#accordion" aria-labelledby="headingfour" class="collapse" id="collapsefour" style="">
              <div class="card-body">Zero Loss trading is a special feature of the Gerino Crypto Trading Protocol, Where Our Model Traders help the user to recover their initial investment back, i.e Enjoy profits with minimum risk. </div>
            </div>
          </div>
          <div class="card">
            <div id="headingfive" class="card-header">
              <h5 class="mb-0"> <a aria-controls="collapseOne" aria-expanded="false" data-target="#collapsefive" data-toggle="collapse" class="btnn btn-link collapsed"> How do I withdraw funds?<i class="plus-icon"></i> </a> </h5>
            </div>
            <div data-parent="#accordion" aria-labelledby="headingfive" class="collapse" id="collapsefive" style="">
              <div class="card-body">You can withdraw funds from your Gerino account/wallet at any time. Just go to your account, click on funds and enter the amount you wish to withdraw. You must have funds in your wallet in order to withdraw. You can withdraw funds directly to your bank account or transfer to other wallets (depending on availability). Make sure to read the withdrawal terms &amp; conditions for minimum/maximum limit.</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php include('footer.php');?> 
<script defer src="//cdnjs.cloudflare.com/ajax/libs/validate.js/0.13.1/validate.min.js"></script> 
<script defer>
     const constraints = {
         name: {
             presence: { allowEmpty: false }
         },
         email: {
             presence: { allowEmpty: false },
             email: true
         },
         message: {
             presence: { allowEmpty: false }
         }
     };

     const form = document.getElementById('contact-form');
     form.addEventListener('submit', function (event) {

         const formValues = {
             name: form.elements.name.value,
             email: form.elements.email.value,
             message: form.elements.message.value
         };


         const errors = validate(formValues, constraints);
         if (errors) {
             event.preventDefault();
             const errorMessage = Object
                 .values(errors)
                 .map(function (fieldValues) {
                     return fieldValues.join(', ')
                 })
                 .join("\n");

             alert(errorMessage);
         }
     }, false);
 </script> 
</body>
</html>