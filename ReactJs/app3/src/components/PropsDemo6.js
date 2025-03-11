/*
    how to access props in functional component
*/

function PropsDemo6(p){
    return <>
        <h1>Example of Props Demo in functional component</h1>
        <h1>Welcome {p.data.fname} {p.data.lname} to {p.data.city}</h1>
    </>
}

export default PropsDemo6;