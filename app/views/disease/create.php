<div class="alert alert-primary h3 text-center">
    Disease Form
</div>
<form action="<?= ROOT; ?>disease/store" method="post" enctype="multipart/form-data">
    <div class="container border">
        <div class="mb-3">
            <label for="name">Disease Name:</label>
            <input type="text" name="name" class="form-control" id="name" placeholder="Enter Disease Name">
        </div>
        <div class="mb-3">
            <label for="symptoms"> Symptoms:</label>
            <textarea name="symptoms" class="form-control" placeholder="Enter Symptoms" id="symptoms"></textarea>
        </div>

        <div class="mb-3">
            <label for="prescription"> Prescription:</label>
            <textarea name="prescription" class="form-control" placeholder="Enter Prescription" id="prescription"></textarea>
        </div>
        <div class="mb-3">
            <label for="checkupdate">Checkup Date:</label>
            <input type="date" name="checkupdate" class="form-control" id="checkupdate" value="<?= date('Y-m-d'); ?>">
        </div>

        <div class="mb-3">
            <label for="pics">Pictures:</label>
            <input type="file" name="pics" class="form-control" id="pics">
        </div>
        <div class="mb-3 text-center">
            <button class="btn btn-success">Save</button>
        </div>
</form>