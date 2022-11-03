<h1>Thêm danh sách chuyên mục</h1>
<form method="POST" action="<?php echo route('categories.add')?>">
    <div>
        <input type="text" name="" placeholder="Thêm danh mục">
    </div>
    <?php echo csrf_field(); ?>
    <!-- <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>"> -->
    <button type="submit"> Thêm danh mục</button>
</form>