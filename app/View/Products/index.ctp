<h1>Produtos</h1>
<table>
    <tr>
        <th>Code</th>
        <th>Quantity</th>
        <th>Price</th>
    </tr>
<?php foreach ($products as $product): ?>
    <tr>
        <td><a href="/cake/products/<?php echo $product['code']; ?>"><?php echo $product['code']; ?></a></td>
        <td><?php echo $product['quantity']; ?></td>
        <td><?php echo $product['price']; ?></td>
    </tr>
<?php endforeach; ?>

</table>