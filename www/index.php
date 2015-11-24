<?php
$pg_connect = pg_connect("host=ec2-54-83-202-218.compute-1.amazonaws.com port=5432 dbname=de8jor2erer1fp user=okpsmrbsgixnvb password=Bb9XkrM_nz0K0-SB3IrgH4gOgx");
pg_query($pg_connect, "INSERT INTO distributors (name) VALUES ('1')");