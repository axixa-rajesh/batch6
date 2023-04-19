<div class="alert alert-primary h3 text-center">
    Category Edit Form
</div>
<form action="<?= ROOT; ?>category/update/<?= $info['id']; ?>" method="post">
    <div class="container border">
        <div class="mb-3">
            <label for="name">Category Name:</label>
            <input type="text" name="category_name" class="form-control" id="name" value="<?= $info['category_name']; ?>" placeholder="Enter Category Name">
        </div>
        <div class="mb-3">
            <label for="description"> Description:</label>
            <textarea name="description" class="form-control" placeholder="Enter Description" id="description"><?= $info['description']; ?></textarea>
        </div>
            <div class="mb-3 text-center">
            <button class="btn btn-success">Update</button>
        </div>
</form>