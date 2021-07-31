<?php  
$CurPageURL = $_SERVER['REQUEST_URI'];  
$CurPageURL = ltrim($CurPageURL, '/');

if (file_exists('source/'.$CurPageURL.'.md')) {
  include 'Parsedown.php';
  $file = basename($CurPageURL);
  $content = file_get_contents('source/'.$file.'.md');
  $Parsedown = new Parsedown();

  echo '<!DOCTYPE html>
  <html lang="en">
  <head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>JokeNetwork » '.$file.'</title>
  <link href="https://faq.jokenetwork.de/css/bootstrap.css" rel="stylesheet">
  <link href="https://faq.jokenetwork.de/css/fa/all.min.css" rel="stylesheet">
  </head>

  <body>
  <div class="container">
    <div class="page-header">
      <h1>Docs » '.$file.'</h1>
      <p><a href="https://github.com/JokeNetwork/faq/blob/main/source/'.$file.'md"><i class="fab fa-github"></i> Edit on GitHub</a> | <a href="https://github.com/JokeNetwork/faq/"><i class="fas fa-code-branch"></i> main Branch</a></p>
    </div>
    '.$Parsedown->text($content).'
  <hr>
    <p>
      <span itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
    <a href="https://jokenetwork.de" itemprop="url"><span itemprop="title">JokeNetwork</span></a> ›</span>
    
    <span itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a href="https://faq.jokenetwork.de" itemprop="url"><span itemprop="title">Documentations (Metatags)</span></a> ›</span>

   <span itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a href="https://faq.jokenetwork.de/'.$file.'" itemprop="url"><span itemprop="title">'.$file.'</span></a></span>
  </p>
    
    </div>
    <script async src="https://analytics.jokenetwork.de/tracker.js" data-ackee-server="https://analytics.jokenetwork.de" data-ackee-domain-id="ad280e82-bc14-44a1-9758-e000a6c2f475"></script>
  </body>
  </html>';

} 

elseif (empty($CurPageURL)) {
  include 'Parsedown.php';
  $file = basename(index);
  $content = file_get_contents('source/'.$file.'.md');
  $Parsedown = new Parsedown();

  echo '<!DOCTYPE html>
  <html lang="en">
  <head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>JokeNetwork » '.$file.'</title>
  <link href="https://faq.jokenetwork.de/css/bootstrap.css" rel="stylesheet">
  <link href="https://faq.jokenetwork.de/css/fa/all.min.css" rel="stylesheet">
  </head>

  <body>
  <div class="container">
    <div class="page-header">
      <h1>Docs » '.$file.'</h1>
      <p><a href="https://github.com/JokeNetwork/faq/blob/main/source/'.$file.'md"><i class="fab fa-github"></i> Edit on GitHub</a> | <a href="https://github.com/JokeNetwork/faq/"><i class="fas fa-code-branch"></i> main Branch</a></p>
    </div>
    '.$Parsedown->text($content).'
  <hr>
    <p>
      <span itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
    <a href="https://jokenetwork.de" itemprop="url"><span itemprop="title">JokeNetwork</span></a> ›</span>
    
    <span itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a href="https://faq.jokenetwork.de" itemprop="url"><span itemprop="title">Documentations (Metatags)</span></a> ›</span>

   <span itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a href="https://faq.jokenetwork.de/'.$file.'" itemprop="url"><span itemprop="title">'.$file.'</span></a></span>
  </p>
    
    </div>
    <script async src="https://analytics.jokenetwork.de/tracker.js" data-ackee-server="https://analytics.jokenetwork.de" data-ackee-domain-id="ad280e82-bc14-44a1-9758-e000a6c2f475"></script>
  </body>
  </html>';
}

else {
  echo '<!DOCTYPE html>
  <html lang="en">
    <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>JokeNetwork » Error '.$_GET['code'].'</title>
      <link href="https://faq.jokenetwork.de/css/bootstrap.css" rel="stylesheet">
      <link href="https://faq.jokenetwork.de/css/fa/all.min.css" rel="stylesheet">
    </head>

    <body>
      <div class="container">

        <div class="page-header">
          <h1>Docs » Error Code '.$_GET['code'].'</h1>
          <p class="lead">Server returned error code '.$_GET['code'].' for '.$CurPageURL.'</p>
        </div>
    <p>
      <span itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
    <a href="https://jokenetwork.de" itemprop="url"><span itemprop="title">JokeNetwork</span></a> ›</span>
    
    <span itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a href="https://faq.jokenetwork.de" itemprop="url"><span itemprop="title">Documentations (Metatags)</span></a> ›</span>

   <span itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a href="https://faq.jokenetwork.de/<?php echo $file ?>" itemprop="url"><span itemprop="title">'.$CurPageURL.'</span></a></span>
  </p>
   </div>

     <script async src="https://analytics.jokenetwork.de/tracker.js" data-ackee-server="https://analytics.jokenetwork.de" data-ackee-domain-id="ad280e82-bc14-44a1-9758-e000a6c2f475"></script>
    </body>
  </html>';
}

?>