<h2>사용자 <?=$author -> name?>의 권한 수정</h2>

<form action="" method="post">
    <?php foreach ($permissions as $name => $value): ?>
        <div>
            <input type="checkbox" name="permissions[]" value="<?=$value?>" <?php if ($author -> hasPermission($value)): echo 'checked'; endif; ?> />
            <label><?=$name?></label>
        </div>
    <?php endforeach;?>

    <input type="submit" value="저장">
</form>