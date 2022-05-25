<!-- <?php

$url = 'https://azana-wp.brandztory.id/wp-json/rae/v1/posts';
$json= file_get_contents($url);

$data = json_decode($json);
$rows = $data->{'id'};
foreach ($rows as $row) {
    echo '<p>';
    $FabrikatNavn = $row->FabrikatNavn;
    $ModelNavn = $row->ModelNavn;
    $PrisDetailDkk = $row->PrisDetailDkk;
    echo $FabrikatNavn . $ModelNavn . ' Pris ' . $PrisDetailDkk;
    echo '</p>';
}

?> -->

test page