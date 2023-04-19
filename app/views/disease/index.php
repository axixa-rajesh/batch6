<table class="table table-striped border">
    <thead class="table-dark">
        <tr>
            <th>S.No.</th>
            <th>Name</th>
            <th>Symptoms</th>
            <th>Prescription</th>
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
                <td><?= $info['name']; ?></td>
                <td><?php echo $info['symptoms']; ?></td>
                <td><?php echo $info['prescription']; ?></td>
                <td>
                    <a class="btn btn-success" href="<?= ROOT; ?>disease/edit/<?= $info['id']; ?>">
                        Edit
                    </a>
                    <a href="#" onclick="confirmit('disease/destroy/<?= $info['id']; ?>')" class="btn btn-danger">
                        Delete
                    </a>
                </td>
            </tr>
        <?php } ?>
    </tbody>
</table>