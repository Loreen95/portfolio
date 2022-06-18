<?php

$results = $conn->query("SELECT * FROM projecten");

$projecten = $results->fetch_all(MYSQLI_ASSOC);
