<?
use yii\widgets\ActiveForm;
?>
<h5 class="modal-title" id="exampleModalLabel">
    Checkout
</h5>

<? $form = ActiveForm::begin()?>
    <?=$form->field($createdOrder, 'name')?>
    <?=$form->field($createdOrder, 'email')?>
    <?=$form->field($createdOrder, 'phone')?>
<button class="btn btn-success">Create</button>
<?ActiveForm::end()?>
