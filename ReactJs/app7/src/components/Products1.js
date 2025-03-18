import { useState, useEffect } from "react";
let APIURL = "https://dummyjson.com/users";

function Products1(){

    let [usersData, setUsersData] = useState([]);

    useEffect(()=>{
        fetch(APIURL).then((response) => {
            response.json().then((result) => {
                console.log(result);
                setUsersData(result.users);    
            });
        });
    }, []);

    return <>
    <div className="row">
        {
            usersData.map((user) => <div className="card col-md-6 my-2 p-3">
                <div className="card-header">
                    <h1>{user.firstName} {user.lastName} {user.maidenName}</h1>
                </div>
                <img src={user.image} class="card-img-top w-50 h-50" alt="..." />
                <div className="card-body">
                    <table className="table table-hover">
                        <tbody>
                            <tr>
                                <th>Age</th>
                                <td>{user.age}</td>
                            </tr>
                            <tr>
                                <th>Gender</th>
                                <td>{user.gender}</td>
                            </tr>
                            <tr>
                                <th>Email</th>
                                <td>{user.email}</td>
                            </tr>
                            <tr>
                                <th>Phone</th>
                                <td>{user.phone}</td>
                            </tr>
                            <tr>
                                <th>Username</th>
                                <td>{user.username}</td>
                            </tr>
                            <tr>
                                <th>Date of Birth</th>
                                <td>{user.birthDate}</td>
                            </tr>
                            <tr>
                                <th>Height</th>
                                <td>{user.height}</td>
                            </tr>
                            <tr>
                                <th>Weight</th>
                                <td>{user.weight}</td>
                            </tr>
                            <tr>
                                <th>Eye Color</th>
                                <td>{user.eyeColor}</td>
                            </tr>

                        </tbody>
                    </table>
                </div>

                <div className="card-footer"></div>
            </div>)
        }
        </div>
    </>
    
}

export default Products1;