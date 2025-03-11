/*
    how to access props in functional component
*/

function PropsDemo3(Props){
    return <>
        <h1>Example of Props Demo in functional component</h1>
        <h1>Welcome {Props.data.fname} {Props.data.lname} to {Props.data.city}</h1>
    </>
}

export default PropsDemo3;