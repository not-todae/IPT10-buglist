<?php
    include "vendor/autoload.php";
    use GuzzleHttp\Client;
    use GuzzleHttp\Psr7\Request;
  
    $client = new Client();
    $headers = [
      'Authorization' => 'wmOvTFYWzS-4A7JiiEZ2gg8fVVjh6D42'
    ];
    $request = new Request('GET', 'https://ipt10-2022.mantishub.io/api/rest/issues?page_size=10&page=1', $headers);
    $res = $client->sendAsync($request)->wait();
    $bugs = $res->getBody()->getContents();

    $bugs_list = json_decode($bugs);

    
?>

<!DOCTYPE html>
<html>
<head>
    <style>
        table {
          font-family: arial, sans-serif;
          border-collapse: collapse;
          width: 100%;
        }
        
        td, th {
          border: 1px solid #dddddd;
          text-align: left;
          padding: 8px;
        }
        
        tr:nth-child(even) {
          background-color: #dddddd;
        }
        </style>    
</head>
<body>
    <h1>IPT10 Bugs List</h1>
    <a href="#"><h2>DAVID AARON ECHON</h2></a> 
    <table>
      <thead>
        <tr style="background-color:#585858">
        <th>ID</th>
        <th>Summary</th>
        <th>Severity</th>
        <th>Status</th>
        </tr>
      </thead>
        <tbody>
          <?php
        foreach ($bugs_list->issues as $bug)
        {
        echo '<tr>';
        echo '<td>' . $bug->id . '</td>';
        echo '<td>' . $bug->summary . '</td>';
        echo '<td>' . $bug->severity->name . '</td>';
        echo '<td>' . $bug->status->name . '</td>';
        echo '</tr>';
        }
        ?>
        </tbody>
</body>
</html>