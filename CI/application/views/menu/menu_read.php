<!DOCTYPE html>
<html>
<head>
    <title>Menu Uitlezen</title>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta name="keywords" content="">
</head>
<body>
    <table>
    <tr>
        <th>Naam</th>
        <th>Type</th>
        <th>Prijs in €</th>
    </tr>
    
    <?php foreach($records as $row):?>
        <tr>
            <td><?=$row->gerechtnaam?></td>
            <td><?=$row->gerechttype?></td>
            <td><?=$row->gerechtprijs?></td>
        </tr>
    <?php endforeach;?>
    </table>
 
</body>
</html>
