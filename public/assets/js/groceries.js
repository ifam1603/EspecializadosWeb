$(document).ready(init);

function init() {
    $("#btnLoadProducts").click(function() {
        $.getJSON("/api/products", function(data) {
            console.table(data);
            $.each(data, function(index, dataObj) {
                $("#tblProducts tbody").append(
                    "<tr>" +
                    "<td>" + dataObj.id + "</td>" +
                    "<td>" + dataObj.name + "</td>" +
                    "<td>" + dataObj.sale_price + "</td>" +
                    "<td>" + dataObj.quantity + "</td>" +
                    "<td>" + dataObj.categories.name + "</td>" +
                    "</tr>"
                );
            });
            let table = new DataTable('#tblProducts', {});
        });
    });

    let tblProducts = new DataTable('#tblProductsdt', {
        ajax: '/api/products_dt',
        columns: [
            { data: 'id' },
            { data: 'name' },
            { data: 'sale_price' },
            { data: 'quantity' },
            { data: 'categories.name' },
        ]
    });
}






    