<?php
use yii\helpers\Html;

//echo 'Hello!';

$actbooks = $model->actBooks;
//print_r ($books);

foreach ($actbooks as $actbook) {
$book = $actbook->book;
?>
<table width="100%">
    <tr>
        <td width="20%" height="150px" valign="top"><?php echo $actbook->inventory_number; ?></td>
        <td colspan="2" valign="top"><?php echo $book->description; ?></td>
    </tr>
    <tr>
        <td colspan="2"></td>
        <td width="25%"><?php echo $model->number; ?><br /><?= Html::encode(Yii::$app->formatter->asDate($model->date, 'dd.MM.yyyy')) ?></td>
    </tr>
</table>
<?php
}
