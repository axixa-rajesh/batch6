<?php
if (Session::get('gmsg')) {
?>
    <div class="alert alert-success" id="gs">
        <?php
        echo Session::get('gmsg');
        ?>
    </div>
<?php
    Session::delete('gmsg');
}
?>
<?php
if (Session::get('emsg')) {
?>
    <div class="alert alert-danger" id="gs">
        <?php
        echo Session::get('emsg');
        ?>
    </div>
<?php
    Session::delete('emsg');
}
?>
<table class="table table-striped border">
    <thead class="table-dark">
        <tr>
            <th>S.No.</th>
            <th>Category Name</th>
            <th>Description</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $index = 0;
        foreach ($data as $info) {
        ?>

            <tr>
                <td><?= ++$index; ?></td>
                <td><?= $info['category_name']; ?></td>
                <td><?php echo $info['description']; ?></td>
                <td>
                    <a class="btn btn-success" href="<?= ROOT; ?>category/edit/<?= $info['id']; ?>">
                        Edit
                    </a>
                    <a href="#" onclick="confirmit('category/destroy/<?= $info['id']; ?>')" class="btn btn-danger">
                        Delete
                    </a>
                </td>
            </tr>
        <?php } ?>
    </tbody>
</table>