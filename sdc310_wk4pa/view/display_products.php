<!DOCTYPE html>
<html>
<head>
    <title>Products</title>
</head>
<body>

<h2>Current Products:</h2>

<table border="1">
    <tr>
        <th>Product #</th>
        <th>Name</th>
        <th>Type</th>
    </tr>

    <?php foreach ($products as $product): ?>
    <tr>
        <td><?= $product['ProductNo'] ?></td>
        <td><?= $product['Name'] ?></td>
        <td><?= $product['Type'] ?></td>
    </tr>
    <?php endforeach; ?>

</table>

</body>
</html>