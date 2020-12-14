<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP-Badwords</title>

</head>

<body>

  <h1>This Is War</h1>
  <h2>Thirty Seconds to Mars</h2>

  <?php
  // codice
  $quote = 'It\'s the moment of truth, and the moment to lie
            the moment to live and the moment to die
            the moment to fight, the moment to fight.';
  $replaced = str_replace('moment', '*** ', $quote );
  ?>


  <!-- Lyrics -->
  <p>Lyrics: <?php echo $quote; ?> </p>

  <!-- Lyrics Length -->
  <span>Length: <?php echo strlen($quote);?> words </span>
  <br>

  <!-- Censored Lyrics -->
  <br>
  <a href="?censored=moment">Censored Lyrics</a>
  <p>Censored Lyrics: <?php echo $replaced; ?> </p>


</body>
</html>
