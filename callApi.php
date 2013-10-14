<?php
  header('Content-type: application/json');

  $url = "http://api.nytimes.com/svc/elections/us/v3/finances/2010/independent_expenditures.json?api-key=a9a135f4d41289b439063cc046fb5a2f:6:68070877";

  $r = new HttpRequest($url, HttpRequest::METH_GET);
  $r->send () ;
  echo $r->getResponseBody();
?>
