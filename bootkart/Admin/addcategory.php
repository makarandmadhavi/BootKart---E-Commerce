<?php include 'templates/header.php'; ?>

<div class="container">
    <br>
    <h1>Add a category</h1>
    <div class="form-group">
        <label for="exampleInputEmail1">Category Name</label>
        <input type="text" class="form-control" id="category" aria-describedby="emailHelp" placeholder="category">
    </div>
    <div>
        <button onclick="addcategory()" class="btn btn-success">Submit</button>
    </div>

</div>

<?php include 'templates/footer.php'; ?>