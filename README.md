# The-Movies-App
Link - https://iricvps1.co.za/Aglet This application is property for T.J Mudzviti- re-engineering this application for your benefits is prohibited. API to connect movies with php API was connected using Javascript and jquery | curl function was giving issue on displaying data on the front end. Logins were built with PHP and bootstrap for front end User Interface was built with HTML| CSS | Bootstrap & Javascript User interface is responsive & can display data that updates on the same page. Sidebars were used to build a nice UI. Data from API was attempted to be pulled using curl function : <?php

$cm = curl_init(); curl_setopt($cm, CURLOPT_URL, "https://api.themoviedb.org/3/movie/".$id_movie." ?api_key=1658e560618a691145420e0d3c412d06".$apikey); curl_setopt($cm, CURLOPT_RETURNTRANSFER, TRUE); curl_setopt($cm, CURLOPT_HEADER, FALSE); curl_setopt($cm, CURLOPT_HTTPHEADER, array("Accept: application/json")); $response7 = curl_exec($cm); curl_close($cm); $movie_id = json_decode($response8);

?>
