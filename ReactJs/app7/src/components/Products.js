import { useEffect, useState } from "react";

function Products() {

    let [myProducts, setMyProducts] = useState([]);
    let APIURL = "https://dummyjson.com/products";

    // Call API
    useEffect(() => {
        fetch(APIURL).then((response) => {
            //console.log(response);
            response.json().then((result) => {
                //console.log(result);
                setMyProducts(result.products);
            })
        });
    }, []);

    return <>
        <h1>Products</h1>
        <table className="table table-hover table-striped">
            <thead className="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Category</th>
                    <th>Price</th>
                    <th>Discount</th>
                    <th>Rating</th>
                    <th>Stock</th>
                    <th>Image</th>
                </tr>
            </thead>

            <tbody>
                {
                    myProducts.map((product, index) => <tr key={index}>
                        <td>{product.id}</td>
                        <td>{product.title}</td>
                        <td>{product.description}</td>
                        <td>{product.category}</td>
                        <td>{product.price}</td>
                        <td>{product.discountPercentages}</td>
                        <td>{product.rating}</td>
                        <td>{product.stock}</td>
                        <td><img src={product.thumbnail} className="w-100 h-100" /></td>
                    </tr>)
                }
            </tbody>
        </table>
    </>
}

export default Products;