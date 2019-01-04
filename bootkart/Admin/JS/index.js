function addproduct(){
    name = $('#name').val();
    price = $('#price').val();
    description = $('#description').val();
    img = $('#img').val();
    category = $('#category').val();


    $.ajax({
        type: "POST",
        url: "backend/addproduct_ajax.php",
        data: {
            //data goes here
            name,
            price,
            description,
            img,
            category
        },
        success: function (data) {
           //data is returned here
            if(data == "SUCCESS"){
                alert("Product Added");
                window.location = 'home.php';
            }
            else{
                alert("Failed Add Product, please try again later");
            }
        }
    });

}