<h5 class="modal-title" id="exampleModalLabel">
    Your Shopping Cart
</h5>
<? if ($session['order']) { ?>
<table class="table table-image">
    <thead>
    <tr>
        <th scope="col">Product</th>
        <th scope="col">Price</th>
        <th scope="col">Qty</th>
        <th scope="col">Total</th>
        <th scope="col">Actions</th>
    </tr>
    </thead>
    <? foreach ($session['order'] as $id => $good) { ?>
    <tbody>
    <tr>
        <td><?=$good['title']?></td>
        <td><?=$good['price']?></td>
        <td class="qty"><?=$good['quantity']?></td>
        <td><?=$good['quantity']*$good['price']?></td>
        <td>
            <a href="#" data-id="<?=$good['id']?>" class="btn btn-danger btn-sm">
                <i class="fa fa-times"></i>
            </a>
        </td>
    </tr>
    </tbody>
    <? } ?>
</table>

</div>
<h5>Total Quantity: <span class="text-success total-quantity"><?=$session['order.totalQuantity']?> </span></h5>
<h5>Total Price: <span class="price text-success"><?=$session['order.sum']?> $</span></h5>
<div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
    <button type="button" class="btn btn-success" onclick="clearOrder(event)">Clear</button>
    <button type="button" class="btn btn-next">Checkout</button>
</div>
<? } else { ?>
    <h5> Empty </h5>
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Go to market</button>
<?}?>