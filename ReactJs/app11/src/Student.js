import { useParams } from "react-router-dom";

function Student(){
    const {roll} = useParams();
    const {fname} = useParams();
    const {lname} = useParams();
    const {city} = useParams();

    return <>
        <h1>Welcome {fname} {lname} to {city} your roll no. is {roll}</h1>
    </>
}

export default Student;