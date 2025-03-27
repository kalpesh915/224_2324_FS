
import { use, useEffect, useState } from "react";

function StudentsDetail(){

    // Create Required States
    let [students, setStudents] = useState([]);
    let [id, setId] = useState("");
    let [fname, setFname] = useState("");
    let [lname, setLname] = useState("");
    let [email, setEmail] = useState("");
    let [phone, setPhone] = useState("");
    let [city, setCity] = useState("");
    let [gender, setGender] = useState("");
    let [fees, setFees] = useState("");

    // Action State
    let [action, setAction] = useState(true);

    // API URL 
    const APIURL = "http://localhost:3000/students";

    // Reset Form
    function resetForm(){
        setAction(true);
        setId("");
        setFname("");
        setLname("");
        setEmail("");
        setPhone("");
        setCity("");
        setGender("");
        setFees("");
    }

    // POST / PUT = Handle Form Submission

    function handleSubmit(e){
        e.preventDefault();
        if(action){
            // POST for Create New Student
            fetch(APIURL, {
                method: "POST",
                headers: {
                    'Content-type': 'Application/json',
                    'Accept': 'Application/json'
                },body: JSON.stringify({fname, lname, email, phone, city, gender, fees})
            }).then((response) => {
                response.json().then((result) => {
                    console.log(result);
                    resetForm();
                    loadAllData();
                })
            });
        }else{
            // PUT for Update Student
            fetch(APIURL+"/"+id, {
                method: "PUT",
                headers: {
                    'Content-Type': 'Application/json',
                    'Accept': 'Application/json'
                },body: JSON.stringify({fname, lname, email, phone, city, gender, fees})
            }).then((response) => {
                response.json().then((result) => {
                    resetForm();
                    loadAllData();
                })
            })
        }
    }   

    // load All Students Data
    function loadAllData(){
        fetch(APIURL).then((response) => {
            response.json().then((result) => {
                setStudents(result);
            })
        })
    }

    // Delete Student
    function deleteStudent(studentID){
        if(window.confirm("Are you sure to delete This Data ?")){
            fetch(APIURL+"/"+studentID, {
                method: "DELETE"
            }).then((response) => {
                response.json().then((result) => {
                    loadAllData();
                })
            })
        }
    }

    // Get Data for Edit
    function getDataForEdit(studentID){
        //alert(studentID);
        fetch(APIURL+"/"+studentID).then((response) => {
            response.json().then((result) => {
                setAction(false);
                setId(result.id);
                setFname(result.fname);
                setLname(result.lname);
                setCity(result.city);
                setEmail(result.email);
                setPhone(result.phone);
                setGender(result.gender);
                setFees(result.fees);
            });
        });
    }

    // Load Students Data at first page load
    useEffect(()=> {
        loadAllData();
    }, []);

    return <>
        <div className="container-fluid">
            <h1 className="text-bg-primary text-center p-2">Student Information</h1>

            <div className="row">
                <div className="col-md-3">
                    <form onSubmit={handleSubmit}>
                        <div className="my-2 form-floating">
                            <input type="text" name="fname" id="fname" required className="form-control" placeholder="Enter First Name" onInput={(e)=> setFname(e.target.value)} value={fname}></input>
                            <label className="form-label" htmlFor="fname">Enter First Name</label>
                        </div>

                        <div className="my-2 form-floating">
                            <input type="text" name="lname" id="lname" required className="form-control" placeholder="Enter Last Name" onInput={(e)=> setLname(e.target.value)} value={lname}></input>
                            <label className="form-label" htmlFor="lname">Enter Last Name</label>
                        </div>

                        <div className="my-2 form-floating">
                            <input type="email" name="email" id="email" required className="form-control" placeholder="Enter Email Address" onInput={(e)=> setEmail(e.target.value)} value={email}></input>
                            <label className="form-label" htmlFor="email">Enter Email Address</label>
                        </div>

                        <div className="my-2 form-floating">
                            <input type="text" name="phone" id="phone" required className="form-control" placeholder="Enter Phone Number" onInput={(e)=> setPhone(e.target.value)} pattern="\d{10,13}" value={phone}></input>
                            <label className="form-label" htmlFor="phone">Enter Phone Number</label>
                        </div>

                        <div className="my-2 form-floating">
                            <input type="text" name="city" id="city" required className="form-control" placeholder="Enter City Name" onInput={(e)=> setCity(e.target.value)} value={city}></input>
                            <label className="form-label" htmlFor="city">Enter City Name</label>
                        </div>

                        <div className="my-2 form-floating">
                            <select name="gender" id="gender" required className="form-control" placeholder="Select Gender" onChange={(e)=> setGender(e.target.value)} value={gender || ''}>
                                <option></option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                            <label className="form-label" htmlFor="gender">Select Gender</label>
                        </div>

                        <div className="my-2 form-floating">
                            <input type="number" name="fees" id="fees" required className="form-control" placeholder="Enter Fees" onInput={(e)=> setFees(e.target.value)} value={fees}></input>
                            <label className="form-label" htmlFor="fees">Enter Fees</label>
                        </div>

                        <div className="my-2">
                            {
                                action ? <>
                                <input type="submit" value="Add New Student" className="btn btn-primary"></input>
                                <input type="reset" value="Reset" className="btn btn-danger mx-2"></input>
                                </> :
                                <>
                                <input type="submit" value="Update Student" className="btn btn-primary"></input>
                                <input type="button" value="Reset" className="btn btn-danger mx-2" onClick={()=>resetForm()}></input></>
                            }
                            
                        </div>
                    </form>
                </div>
                <div className="col-md-9">
                    <div className="table-responsive">
                        <table className="table table-hover table-striped">
                            <thead className="table-dark">
                                <tr>
                                    <th>ID</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>City</th>
                                    <th>Gender</th>
                                    <th>Fees</th>
                                    <th>Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                {
                                    students.map((student, key) => <tr key={key}>
                                        <td>{student.id}</td>
                                        <td>{student.fname}</td>
                                        <td>{student.lname}</td>
                                        <td>{student.email}</td>
                                        <td>{student.phone}</td>
                                        <td>{student.city}</td>
                                        <td>{student.gender}</td>
                                        <td>{student.fees}</td>
                                        <td>
                                            <button className="btn btn-danger" type="button" onClick={()=>deleteStudent(student.id)}>
                                                <i className="fa fa-trash"></i>
                                            </button>
                                            <button className="btn btn-primary mx-2" type="button" onClick={()=>getDataForEdit(student.id)}>
                                                <i className="fa fa-pen"></i>
                                            </button>
                                        </td>
                                    </tr>)
                                }
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </>
}

export default StudentsDetail;